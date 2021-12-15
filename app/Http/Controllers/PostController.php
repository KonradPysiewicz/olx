<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
    
        return view('posts.add_posts');
    }

    public function store(Request $request){
        $this->validate($request, [
            'tytul' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'image' => 'required',
            'opis' => 'required']);
            
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

    public function edit(Post $post){
        return view('posts.change_offer', ['post'=>$post]);
    }

    public function update(Request $request, Post $post){
        $this->validate($request, [
            'tytul' => 'required',
            'image' => 'required']);
            
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        
        $post_tytul = $request->Input('tytul');
        $post_cena = $request->Input('cena');
        $post_kategoria = $request->Input('kategoria');
        $post_lokalizacja = $request->Input('lokalizacja');
        $post_opis = $request->Input('opis');
        $post_image = $imageName;
        $id = $post->id;

        
        DB::update('update posts set tytul = ?, cena = ?, kategoria = ?, lokalizacja = ?, opis = ?, image = ? where id = ?', 
        [$post_tytul, $post_cena, $post_kategoria, $post_lokalizacja, $post_opis, $post_image, $id ]);

        $z = auth()->user()->id;
        
        $posts = Post::where('user_id',$z)->paginate(16);


        return redirect()->route('offers',['posts'=>$posts]);
    }
}
