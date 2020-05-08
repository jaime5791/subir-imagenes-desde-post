<?php

namespace App;
use App\Profile;
use App\User;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //indico campos que puedo editar
    protected $fillable = [
        'name', 'category_id'
    ];


    //un post pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //un post pertenece a un categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //un post tiene muchos comentarios
    public function comments()
    {
    	//especie de hasMany pero polimorfico
    	return $this->morphMany(Comment::class, 'commentable');
    }
	
	//un post tiene una imagen
    public function image()
    {
    	//polimorfismo a uno
    	return $this->morphOne(Image::class, 'imageable');
    }

    //un post puede tener muchas etiquetas
    public function tags()
    {
    	return $this->morphToMany(Tag::class, 'taggable');
    }
}
