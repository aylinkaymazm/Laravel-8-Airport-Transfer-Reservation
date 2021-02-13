<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
/*
    public static function categorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }*/

    public static function getSetting()
    {
        return Setting::first();
    }


    public function index()
    {
        $setting = Setting::first();
        $datalist =Category::with('children')->get();
        $slider = Product::select('id','title','image','slug')->limit(3)->get();
        $cars = Product::select('id','title','image','price')->limit(6)->orderByDesc('id')->get();

        $data = [
            'setting'=>$setting,
            'slider'=>$slider,
            'cars'=>$cars,
            'page'=>'home',
        ];
        return view('home.index', $data,['datalist' => $datalist]);

    }

    public function product($id)
    {
        $datalist = DB::table('products')->where('id', '=', $id)->get();
        return view('home.product_detail', ['datalist'=>$datalist]);
    }

    public function transfer()
    {
        #$datalist = Category::with('children')->get();
        $datalist = Product::all();
        return view('home.user_transfer', ['datalist' => $datalist]);

    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request){

        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contact')->with('success', 'Your message sent, Thank you.');
    }

    public function login()
    {
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials))
            {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'username'=>'The provided credentials do not your username records',
            ]);
        }
        else
            {
                return view('admin.login');
            }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function test($id,$name)
    {
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data);
        /*
        echo "Id number:",$id;
        echo "<br>Name:",$name;
        for ($i=1;$i<=$id;$i++)
        {
            echo "<br> $i - $name";
        }
        */
    }
}
