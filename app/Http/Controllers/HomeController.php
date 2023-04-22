<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

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
        if(Auth::id()){
            $name = Auth::user()->name;
            $post = post::paginate(5);
        }else{
            return redirect('/register');
           }
        return view('home.blogs',compact('name','post'));
    }
    public function search(Request $req){
        $search = $req->search;
        $post = post::where('title','LIKE',"%$search%")->orWhere('username','LIKE',"%$search%")->orWhere('category','LIKE',"%$search%")->paginate();
        return view('home.blogs',compact('post'));
    } 

    public function dashboard(){
        if(Auth::id()){
            $name = Auth::user()->name;
            $id = Auth::id();
        }else{
            return redirect('/register');
           }
     $post = post::all()->where('user_id','=',$id);
     return view('home.dashboard',compact('name','post'));
    }
    public function contact(){
        return view('home.contact');
    }
    public function blog($id){
    $post = post::find($id);
     return view('home.blog');
    }
    public function like($id){
        return ("POST LIKED");
       }
       public function comment($id){
        return view('home.comment_post');
       }


       public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
       }

       public function create_post(){
        if(Auth::id()){
            $name = Auth::user()->name;
        }
        return view('home.create_post',compact('name'));
       }

       public function post_created(Request $req){
        if(Auth::id()){
        $post = new post;
        $user = Auth::user()->name;
        $post->username = $user;
        $post->title = $req->title;
        $post->description = $req->description;
        $post->category = $req->category;
        $post->post = $req->post;
        $post->user_id = Auth::id();
        $image = $req->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $req->image->move('product',$imagename);
        $post->image = $imagename;
        $post->save();
        Alert::success('Post Created','Post was Created Successfully');
        return redirect('/dashboard');
       }else{
        return redirect('/register');
       }
    }
    public function delete($id){
        $post = post::find($id);
        $post->delete();
        Alert::info('Post Deleted','Post was Deleted Successfully');
        return redirect('/dashboard');
    }
    public function edit_post($id,Request $req){
        if(Auth::id()){
            $post = post::find($id);
            $user = Auth::user()->name;
            $post->username = $user;
            $post->title = $req->title;
            $post->description = $req->description;
            $post->category = $req->category;
            $post->post = $req->post;
            $post->user_id = Auth::id();
            $image = $req->image;
            if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $req->image->move('product',$imagename);
            $post->image = $imagename;
            }
            $post->save();
            Alert::success('Post Edited','Post was Edited Successfully');
            return redirect('/dashboard');
           }else{
            return redirect('/register');
           }
    }
    public function edit($id){
        if(Auth::id()){
            $name = Auth::user()->name;
            $post = post::find($id);
            return view('home.edit_post',compact('post','name'));
        }else{
            return redirect('/register');
           }
    }
}
