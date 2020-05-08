@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               
               </br></br>
                <div class="panel-heading"><h2>Posts</h2></div>
                </br>
                <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm">Crear post</a>
                </br></br>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                    	<thead>
                    		<tr>
                                
                    			<th>Post</th>
                                <th>Perfil</th>
                                <th>Categoria</th>

                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach ($posts as $post)
                    		<tr>
                                <td>{{ $post->name}}</td>
                                <td>{{ $post->user->name}}</td>
                                <td>{{ $post->category->name}}</td>
                    			
                    			<th scope="row">
                                    <a href="{{route('posts.show', $post->id)}}">
                                      <button type="button" class="btn btn-sm btn-info">Ver</button>
                                    </a>
                                </th>

                    			

                    		</tr>
                    		@endforeach
                    	</tbody>

                    	
                    </table>

                    <!-- Paginacion -->
                    {{ $posts ->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

