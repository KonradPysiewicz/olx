<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FavsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Favs2Controller;
use App\Http\Controllers\OtherUsersPosts;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\User_offersController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User_favouriteController;

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

Auth::routes();

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/user/offers',[User_offersController::class, 'index'])->name('offers');

Route::get('/user/favourite',[User_favouriteController::class, 'index'])->name('favourite');


Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);

Route::post('/logout',[LogoutController::class, 'store'])->name('logout');


Route::get('/editPost/{post}',[PostController::class, 'edit'])->name('edit_post');
Route::post('/update/{post}',[PostController::class, 'update'])->name('update_post');

Route::get('/add_post',[PostController::class, 'index'])->name('add_post');
Route::post('/add_post',[PostController::class, 'store']);
Route::delete('/post/{post}/delete',[PostController::class, 'destroy'])->name('delete');

Route::get('/offer/{post}',[PostController::class, 'show_offer'])->name('show');

Route::get('/filter',[FilterController::class, 'index'])->name('filter');

Route::post('/offer/{post}/fav',[FavsController::class, 'store'])->name('favs');
Route::delete('/offer/{post}/fav',[FavsController::class, 'destroy']);

Route::post('/offer/{post}/favs',[Favs2Controller::class, 'store'])->name('favs2');
Route::delete('/offer/{post}/favs',[Favs2Controller::class, 'destroy']);

Route::get('/offer/{post}/delete',[PostController::class, 'to_delete'])->name('redirect');

Route::get('/other/{user}',[OtherUsersPosts::class, 'index'])->name('others');

Route::get('/search',[SearchController::class, 'index'])->name('search');

Route::get('/', function () {
    $posts = Post::paginate(16);
    return view('home',['posts'=>$posts]);
})->name('home');
