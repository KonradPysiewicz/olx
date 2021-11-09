<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
    
        return view('posts.add_posts');
    }

    public function store(Request $request){
        $this->validate($request, [
            'tytul' => 'required',
            'image' => 'required']);
            
        $post = new Post();  
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        $post->user_id = Auth::user()->id;

        $post->tytul = $request->Input('tytul');
        $post->cena = $request->Input('cena');
        $post->kategoria = $request->Input('kategoria');
        $post->lokalizacja = $request->Input('lokalizacja');
        $post->opis = $request->Input('opis');
        $post->image = $imageName;
        $post->save();

        return back();
    }

    public function show_offer(Post $post){

        return view('posts.offer',['post'=>$post]);
    }

    public function destroy(Post $post){
        $post->delete();

        return back();
    }
    public function to_delete(Post $post){
        return view('redirect',['post'=>$post]);
    }
}
