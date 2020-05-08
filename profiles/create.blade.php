@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                </br></br>
                <div class="panel-heading"><h2>Crear perfil</h2></div>
                </br>
                   <form method='post' class="col-sm-8 align-self-center text-center" action="{{ route('profiles.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">

                        <input type="text" class="col-sm-8 align-self-center text-center" name="instagram" placeholder="Instagram">
                        <input type="text" class="col-sm-8 align-self-center text-center" name="facebook" placeholder="Facebook">
                        <input type="text" class="col-sm-8 align-self-center text-center" name="vehiculo_viajes" placeholder="Vehìculo - viajes">
                        
                    </div>

                    <div >
                        <button type="submit" class="btn btn-sm btn-primary"name="enviar" value="Enviar"> Enviar </button>
                        <button type="reset" class="btn btn-sm btn-primary"name="borrar" value="Borrar"> Borrar </button>
                    </div>

                    </form> 


                    <!-- VALIDACION campos requqeridos -->
                    @if(count($errors)>0)
                     <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>  
                    </div>  
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection