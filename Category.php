<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //una categoria tiene muchos posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //una categoria tiene muchos videos
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    //una categoria tiene muchos fotos
    public function fotos()
    {
        return $this->hasMany(Foto::class);
    }
}
