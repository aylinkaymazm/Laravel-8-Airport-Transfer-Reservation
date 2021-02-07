<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $slider = Product::select('id','title','image','slug')->limit(3)->get();
        $cars = Product::select('id','title','image','price')->limit(6)->orderByDesc('id')->get();

        $data = [
            'setting'=>$setting,
            'slider'=>$slider,
            'cars'=>$cars,
            'page'=>'home'
        ];
        return view('home.index', $data);

    }

    public function product($id)
    {
        $data = Product::find($id);
        $datalist =Product::where('product_id',$id)->get();
        return view('home.user_transfer', ['data'=>$data,'datalist'=>$datalist]);
    }

    public function addtotransfer($id)
    {
        echo "Add to Transfer";
        $data = Product::find($id);
        print_r($data);
        exit();
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
