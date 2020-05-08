@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               
               </br></br>
                <div class="panel-heading"><h2>Perfiles</h2></div>
                </br>
                <a href="{{ route('profiles.create') }}" class="btn btn-primary btn-sm">Crear o editar tu perfil</a>
                </br></br>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                    	<thead>
                    		<tr>
                                <th>Nombre</th>
                    			<th>Instagram</th>
                                <th>Facebook</th>
                                <th>Vehiculo</th>
                    			
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach ($profiles as $profile)
                    		<tr>
                                
                                <td>{{ $profile->user->name}}</td>
                    			<td>{{ $profile->instagram}}</td>
                    			<td>{{ $profile->facebook}}</td>
                                <td>{{ $profile->vehiculo_viajes}}</td>
                    			<th scope="row">
                                    <a href="{{route('profiles.show', $profile->id)}}">
                                      <button type="button" class="btn btn-sm btn-info">Ver</button>
                                    </a>
                                </th>

                    			

                    		</tr>
                    		@endforeach
                    	</tbody>

                    	
                    </table>

                    <!-- Paginacion -->
                    {{ $profiles ->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

