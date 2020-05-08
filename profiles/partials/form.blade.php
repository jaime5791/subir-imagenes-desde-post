<div class="form-group">
	{{ Form::label('instagram', 'Instagram') }}
	{{ Form::text('instagram', null, ['class' => 'form-control', 'id' => 'instagram']) }}
</div>
<div class="form-group">
	{{ Form::label('facebook', 'Facebook') }}
	{{ Form::text('facebook', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('vehiculo_viajes', 'Vehiculo viajes') }}
	{{ Form::text('vehiculo_viajes', null, ['class' => 'form-control']) }}
</div>


<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
