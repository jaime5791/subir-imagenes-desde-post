@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            </br></br>
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Perfil</h2></div>
                </br>
                <div class="panel-body"> 
                                                      
                    <p width="10px"><strong>Nombre: </strong> {{ $profile->user->name}}</p>
                    <p><strong>Instagram: </strong> {{ $profile->instagram }}</p>
                    <p><strong>Facebook: </strong> {{ $profile->facebook }}</p>
                    <p><strong>Vehiculo viajes: </strong> {{ $profile->vehiculo_viajes }}</p>

                    <p><strong>Actualizado: </strong> {{ $profile->updated_at }}</p>

                </div>
                
                <div class="alert alert-success" role="alert"><p>
                    Sería interesante que completaras tu perfil con tu ubicación (localidad). Esto puede ayudarte mucho a la hora de realizar "viajes compartidos" con otros usuarios registrados o realizar operaciones de "compra-venta"</p><p> <a href="{{ route('locations.create') }}" class="btn btn-primary btn-sm">Completar perfil con tu ubicación</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

