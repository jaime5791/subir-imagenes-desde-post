<?php

namespace App;

use App\Profile;
use App\User; 

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    //indico campos que puedo editar
    protected $fillable = [
        'instagram', 'facebook', 'vehiculo_viajes',
    ];

    //Un perfil tiene una location
    public function location()
    {
        return $this->hasOne(Location::class);
    }

    //un profile pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
