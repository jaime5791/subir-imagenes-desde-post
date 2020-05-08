@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                </br></br>
                <div class="panel-heading">
                <h2>Usuarios</h2>
            	</div>
                </br>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                    	<thead>
                    		<tr>
                    			<th width="10px">ID</th>
                    			<th>Nombre</th>
                    			<th colspan="3">&nbsp;</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach ($users as $user)
                    		<tr>
                    			<td>{{ $user->id}}</td>
                    			<td>{{ $user->name}}</td>
                    			<td width="10px">
                    				@can('users.show')
                    				<a href=" {{ route('users.show', $user->id) }}"
                    				class="btn btn-sm btn-default">
                    					Ver
                    				</a>
                    				@endcan
                    			</td>

                    			<td width="10px">
                    				@can('users.edit')
                    				<a href=" {{ route('users.edit', $user->id) }}"
                    				class="btn btn-sm btn-default">
                    					Editar
                    				</a>
                    				@endcan
                    			</td>

                    			<td width="10px">
                    				@can('users.destroy')
                    				<form action="{{ route('users.destroy', $user->id) }}" method="post">
									@method('DELETE')
									@csrf
									<button class="btn btn-danger btn-sm">Eliminar</button>
									</form>
                    				@endcan
                    			</td>

                    		</tr>
                    		@endforeach
                    	</tbody>

                    	
                    </table>

                    <!-- Paginacion -->
                    {{ $users ->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

