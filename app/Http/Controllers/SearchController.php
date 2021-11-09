<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){

        $search = request()->query('search');
        if($search){
        $posts = Post::where('tytul','LIKE',"%{$search}%")->paginate(16);
        
    }
    else{
        $posts = Post::paginate(16);
    }

    return view('home',['posts'=>$posts]);

    }
}
