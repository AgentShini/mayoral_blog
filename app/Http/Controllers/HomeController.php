<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function home(){
        if(Auth::id()){
            $name = Auth::user()->name;
        }else{
            return redirect('/');
        }
        return view('home.index',compact('name'));
    }
    public function blogs(){
        return view('home.blogs');
    }

    public function dashboard(){
     return view('home.dashboard');
    }
    public function contact(){
        return view('home.contact');
    }
    public function blog($id){
     return view('home.blog');
    }
    public function like($id){
        return ("POST LIKED");
       }
       public function comment($id){
        return view('home.comment_post');
       }

       public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
       }

       public function create_post(){
        return view('home.create_post');
       }

       public function post_created(Request $req){

       }
}
