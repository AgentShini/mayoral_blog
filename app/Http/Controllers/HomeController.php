<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
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
}
