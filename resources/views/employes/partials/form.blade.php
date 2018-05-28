<div class="form-group col-xs-4">
    {{ Form::label('cod_serv', 'Codigo de Servicio') }}
    {{ Form::text('cod_serv', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-4">
	{{ Form::label('num_ficha', 'N° Ficha') }}
	{{ Form::text('num_ficha', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-4">
	{{ Form::label('nombre', 'Nombre Completo') }}
	{{ Form::text('nombre', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-6">
    {{ Form::label('horario', 'Horario del trabajador') }}
    {{ Form::text('horario', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-6">
    {{ Form::label('puesto', 'Puesto') }}
    {{ Form::select('puesto', ['Maestro' => 'Maestro', 'Secretaria' => 'Secretaria', 'Intendente' => 'Intendente'] , null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-12">
    {{ Form::label('diagnostico', 'Diagnostico del paciente') }}
    {{ Form::textarea('diagnostico', null, ['class' => 'form-control', 'style' => 'resize: none;']) }}
</div>

<div class="form-group col-xs-12 text-right">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
