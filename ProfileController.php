<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use App\Location;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;




class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "estasssss";
        

        $profiles = Profile::paginate();

        return view('profiles.index', compact('profiles')); 
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        $perfil=$user->profile;

        if (isset($perfil)) {

            $idperfil = $perfil->id; 

            return redirect()->route('profiles.edit', $idperfil )->with('info', 'Puede editar su perfil');
        }
        else {
            return view('profiles.create'); 
        }   
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
        $this->validate($request, ['vehiculo_viajes'=>'required', ]);

        $user = Auth::user();
        $local_user = $user->location; 

        $profile = new Profile; 

       
        $profile->user_id=Auth::user()->id;
        $profile->instagram=$request->instagram;
        $profile->facebook=$request->facebook;
        $profile->vehiculo_viajes=$request->vehiculo_viajes;

        $profile->save();

        return redirect()->route('profiles.show', $profile->id)->with('info', 'Profile creado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
       

        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
        $user = Auth::user();
        if ($user->id==$profile->user_id) {
            return view('profiles.edit', compact('profile'));
        }
        else{

            return redirect()->route('home')->with('info', 'Solo puedes editar o borrar tus profiles');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
        $profile->update($request->all());

        return redirect()->route('profiles.show', $profile->id)->with('info', 'Profile actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
        $user = Auth::user();
        $profile=$user->profile;
        $profile->delete();

        return redirect()->route('home')->with('info', 'Perfil borrado con exito');
    }
    
}
