<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Location;
use App\Category;
use App\Image;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

//almacenar archivos
use Illuminate\Support\Facades\Storage;





class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $images = Image::orderBy('created_at', 'DESC' );

        return view('images.index', compact('images')); 
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            return view('images.create'); 
           
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
        $this->validate($request, ['url'=>'required', ]);

        $image = new Image; 
       
        
        //imagen
        $image->url=$request->url;
        $path = Storage::disk('public')->put('imagenes',  $request->file('url'));
       fill(['url' => asset($path)])->save();
        
        $image->imageable_type=$request->imageable_type;
        $image->imageable_id=$request->imageable_id;
        $image->save();

        

        return redirect()->route('images.index')->with('info', 'Post creado con exito');

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
