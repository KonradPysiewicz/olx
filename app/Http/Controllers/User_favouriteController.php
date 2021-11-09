<?php

namespace App\Http\Controllers;

use App\Models\Fav;
use App\Models\Post;
use Illuminate\Http\Request;

class User_favouriteController extends Controller
{
    public function index(){


        $z = auth()->user()->id;

        $favs = Fav::where('user_id',$z)->paginate(16);

        return view('user_favourite', ['favs' => $favs]);
    }

}
