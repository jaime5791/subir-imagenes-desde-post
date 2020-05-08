@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                </br></br>
                <div class="panel-heading"><h2>Perfil</h2></div>
                </br>
                <div class="panel-body">                    
                    {!! Form::model($profile, ['route' => ['profiles.update', $profile->id],
                    'method' => 'PUT']) !!}
                    @csrf
                        <!--incluimos el formulario ya creado -->
                        @include('profiles.partials.form')

                    {!! Form::close() !!}

                    {!! Form::model($profile, ['route' => ['profiles.destroy', $profile->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Eliminar usuario', array('class' => 'btn btn-sm btn-danger')) !!}
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection