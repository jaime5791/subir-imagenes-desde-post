@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            </br></br>
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Post</h2></div>
                </br>
                <div class="panel-body"> 
                                                      
                    <p width="10px"><strong>Post: </strong> {{ $post->name}}</p>
                    <p><strong>Categoría: </strong> {{ $post->category->name }}</p>
                    <p><strong>Perfil: </strong> {{ $post->user->name }}</p>

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

