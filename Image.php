<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	//indico campos que puedo editar
    protected $fillable = [
        'url', 
    ];
    //
    public function imageable()
    {	//transformar a pero no especificamos a que
    	return $this->morphTo();
    }
}
