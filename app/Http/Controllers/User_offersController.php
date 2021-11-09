<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class User_offersController extends Controller
{
    public function index(){

        $z = auth()->user()->id;
        
        $posts = Post::where('user_id',$z)->paginate(16);


        return view('user_offers',['posts'=>$posts]);
    }
}
