<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller

/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     
     */

{
    public function index() {
        $product = Post::all();
return view('profile/post',
  ['product'=>
    $product]

);

    }


    public function wyslij(Request $request) {

        $product = new Post();
         
        $product->names = $request->input('names');
        $product->contents = $request->input('contents');
        $product->save();
    
    
        return redirect('post');

}


/**
     * Download image of the specified resource in storage.
     *
     
      
     */

public function destroy(Post $post) 
    {

    $post->delete();

         
        }
    
    
    }