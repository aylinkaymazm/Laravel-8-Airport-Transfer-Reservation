<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Product::all();
        return view('admin.product', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::all();
        return view('admin.product_add', ['datalist' =>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Product;
        $data->title = $request->input('title');
        $data->keywords =  $request->input('keywords');
        $data->description =  $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data ->category_id = $request->input('category_id');
        $data ->user_id = Auth::id();
        $data ->price = $request->input('price');
        $data ->quantity = $request->input('quantity');
        $data ->minquantity = $request->input('minquantity');
        $data ->tax = (int)$request->input('tax');
        $data ->detail= $request->input('detail');
        $data ->image = Storage::putFile('images',$request->file('image'));

        $data->save();
        return redirect()->route('admin_products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $data = Product::find($id);
        $datalist = Category::all();

        return view('admin.product_edit',['data' => $data,'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $data = Product::find($id);
        $data->title = $request->input('title');
        $data->keywords =  $request->input('keywords');
        $data->description =  $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data ->category_id = $request->input('category_id');
        $data ->user_id = Auth::id();
        $data ->price = $request->input('price');
        $data ->quantity = $request->input('quantity');
        $data ->minquantity = $request->input('minquantity');
        $data ->tax = (int)$request->input('tax');
        $data ->detail= $request->input('detail');

        if ($request->file('image'!=null)){
            $data->image = Storage::putFile('images',$request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        DB::table('products')->where('id','=',$id)->delete();
        return redirect()->route('admin_products');
    }
}
