@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                </br></br>
                <div class="panel-heading"><h2>image</h2></div>
                </br>
                <div class="panel-body">                    
                    {!! Form::model($image, ['route' => ['images.update', $image->id],
                    'method' => 'PUT', 'files' =>true]) !!}
                    @csrf
                        <!--incluimos el formulario ya creado -->
                        @include('images.partials.form')

                    {!! Form::close() !!}

                    {!! Form::model($image, ['route' => ['images.destroy', $image->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Eliminar image', array('class' => 'btn btn-sm btn-danger')) !!}
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection