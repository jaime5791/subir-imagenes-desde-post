@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                </br></br>
                <div class="panel-heading"><h2>Post</h2></div>
                </br>
                <div class="panel-body">                    
                    {!! Form::model($post, ['route' => ['posts.update', $post->id],
                    'method' => 'PUT']) !!}
                    @csrf
                        <!--incluimos el formulario ya creado -->
                        @include('posts.partials.form')

                    {!! Form::close() !!}

                    {!! Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Eliminar post', array('class' => 'btn btn-sm btn-danger')) !!}
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection