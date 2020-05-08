<div class="form-group">
	{{ Form::label('name', 'Nombre de usuario') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<hr>
<h3>Lista de roles</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
		<li>
			<label>
				{{ Form::checkbox('roles[]', $role->id, null) }}
				{{ $role->name }}
				<!-- en cursiva y entre parentesis la descripcion del rol ?: condicion ternaria-->
				<em>({{ $role->description ?: 'Sin descripcion' }})</em>
			</label>
		</li>
			<!-- <input type="checkbox" name="roles[]" value="{{ $role->id }}">
			   {{ $role->name }}
			  <em>({{ $role->description }})</em>-->
		@endforeach
		
	</ul>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
     <!-- <button type="submit" class="btn btn-sm btn-primary">Guardar</button> -->	
</div>