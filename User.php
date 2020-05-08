<?php

namespace App;

use App\Profile;
use App\User;
use Caffeinated\Shinobi\Contracts\Role;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

//HasRolesAndPermissions, shinobi
use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;


class User extends Authenticatable
{
    //HasRolesAndPermissions, shinobi
    use HasRolesAndPermissions;

    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Asi un usuario tendra un perfil
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    //Asi tengo una localizacion a traves de profile, ne cesita un metodo en modelo Profile.php
    public function location()
    {
        return $this->hasOneThrough(Location::class, Profile::class);
    }

    //un usuario tiene muchos posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //un usuario tiene muchos videos
    public function videos()
    {
        return $this->hasMany(Post::class);
    }

    //un usuario tiene muchos fotos
    public function fotos()
    {
        return $this->hasMany(Post::class);
    }

    //un usuario tiene muchos comentarios
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //un usuario tiene una imagen
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

   
}
