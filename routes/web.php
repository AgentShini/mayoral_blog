<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/',[HomeController::class,'index']);
Route::get('/index',[HomeController::class,'home']);
Route::get('/blogs',[HomeController::class,'blogs']);
Route::get('/dashboard',[HomeController::class,'dashboard']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('blog/{id}',[HomeController::class,'blog']);
Route::get('like_post/{id}',[HomeController::class,'like']);
Route::get('comment_post/{id}',[HomeController::class,'comment']);
Route::get('/logout',[HomeController::class,'logout']);
Route::get('/create_post',[HomeController::class,'create_post']);
Route::post('/post_created',[HomeController::class,'post_created']);
Route::get('delete/{id}',[HomeController::class,'delete']);
Route::get('edit/{id}',[HomeController::class,'edit']);
Route::post('edit_post/{id}',[HomeController::class,'edit_post']);
Route::get('search_post',[HomeController::class,'search']);