<div class="form-group">
	{!! Form::label('nombre', 'Nombre') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control', 'required' => true]) !!}
</div>

<div class="form-group">
	{!! Form::label('descripcion', 'Descripcion') !!}
	{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => 3, 'required' => true]) !!}
</div>

<div class="form-group">
	{!! Form::label('n_cupos', 'Cupos Disponibles') !!}
	{!! Form::number('n_cupos', null, ['class' => 'form-control', 'required' => true]) !!}
</div>