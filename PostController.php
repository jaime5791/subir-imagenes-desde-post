<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Location;
use App\Category;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;




class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::paginate();

        return view('posts.index', compact('posts')); 
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            return view('posts.create'); 
           
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion
        $this->validate($request, ['name'=>'required', ]);

        $post = new Post; 
       
        $post->category_id=$request->category_id;
        $post->user_id=Auth::user()->id;
        $post->name=$request->name;

        $post->save();

        return redirect()->route('posts.show', $post->id)->with('info', 'Post creado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $user= Auth::user();
        if ($user->id==$post->user_id) {
            return view('posts.edit', compact('post'));
        }
        else{

            return redirect()->route('home')->with('info', 'Solo puedes editar o borrar tus posts');

        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
 

        return redirect()->route('posts.show', $post->id)->with('info', 'Post actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $user= Auth::user();
        $post=$user->post;     
        $post->delete();

        return redirect()->route('home')->with('info', 'Post borrado con exito');
    }
    
}
