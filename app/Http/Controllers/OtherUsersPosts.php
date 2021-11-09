<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class OtherUsersPosts extends Controller
{
    public function index(User $user){
        $z = $user->id;

        $posts = Post::where('user_id',$z)->paginate(16);

        return view('other_user', ['posts' => $posts, 'user'=>$user]);
    }
}
