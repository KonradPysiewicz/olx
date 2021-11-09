<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index(Request $request){

        
        $z = $request->kategoria;

        $posts = Post::where('kategoria',$z)->paginate(16);
         
        return view('home',['posts'=>$posts]);
    }
}
