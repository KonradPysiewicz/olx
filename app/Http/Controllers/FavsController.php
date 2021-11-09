<?php

namespace App\Http\Controllers;

use App\Models\Fav;
use App\Models\Post;
use Illuminate\Http\Request;

class FavsController extends Controller
{

    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function store(Post $post, Request $request){

        $post->fav()->create([
            'user_id' => $request->user()->id,
            'post_id' => $post->id,
        ]);

        return back();
    }

    public function destroy(Post $post, Request $request){
        
        $request->user()->favs()->where('post_id', $post->id)->delete();

        $post->fav()->detach();

        return back();
    }
}
