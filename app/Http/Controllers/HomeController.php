<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function updateprofile(Request $request){

        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            Image::make($file)->resize(300,300)->save(public_path('uploads/'.$filename));
            $user=Auth::user();
            $user->image=$filename;
            $user->save();

        }
        $user=Auth::user();
        return view('profile',compact('user'));
    }
    public function profile(){
        $user=Auth::user();
        return view('profile',compact('user'));
    }
}
