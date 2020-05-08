@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                </br></br>
                <div class="panel-heading"><h2>Subir archivo</h2></div>
                </br>
                <div>
                   
                    

                    {!! Form::open(['route' => 'images.store', 'files' => true]) !!}
                    @csrf
                    
                      <div class="form-group">
                        <div class="row">
                         <legend class="col-form-label col-sm-4 pt-0"><h5>Foto, video...</h5></legend>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="url">
                      </div>
                      </div>
                      <input type="text" class="col-sm-8 align-self-center text-center" name="imageable_type" placeholder="Instagram">
                        <input type="text" class="col-sm-8 align-self-center text-center" name="imageable_id" placeholder="Facebook">
                    
                   

                    <div >
                        <button type="submit" class="btn btn-sm btn-primary"name="enviar" value="Enviar"> Enviar </button>
                        <button type="reset" class="btn btn-sm btn-primary"name="borrar" value="Borrar"> Borrar </button>
                    </div>

                    {!! Form::close() !!}
                </div>

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