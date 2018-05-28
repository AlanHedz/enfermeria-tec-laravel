<div class="form-group col-xs-4">
    {{ Form::label('cod_serv', 'Codigo de Servicio') }}
    {{ Form::text('cod_serv', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-4">
	{{ Form::label('num_control', 'N° Control') }}
	{{ Form::text('num_control', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-4">
	{{ Form::label('nombre', 'Nombre Completo') }}
	{{ Form::text('nombre', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-6">
    {{ Form::label('semestre', 'Semestre Cursando') }}
    {{ Form::text('semestre', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-6">
    {{ Form::label('carrera', 'Carrera del Alumno') }}
    {{ Form::select('carrera', ['Sistemas' => 'Sistemas', 'Industrial' => 'Industrial', 'Gestion' => 'Gestion', 'Ambienta' => 'Ambiental'] , null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-6">
    {{ Form::label('tel_emerg', 'Telefono de Emergencia') }}
    {{ Form::text('tel_emerg', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-6">
    {{ Form::label('tel_propio', 'Telefono Propio') }}
    {{ Form::text('tel_propio', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-6">
    {{ Form::label('t_sangre', 'Tipo de Sangre') }}
    {{ Form::text('t_sangre', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-6">
    {{ Form::label('alergia', 'Alergias del Alumno') }}
    {{ Form::text('alergia', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-12">
    {{ Form::label('direecion', 'Direccion del Alumno') }}
    {{ Form::text('direccion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-12">
    {{ Form::label('diagnostico', 'Diagnostico del paciente') }}
    {{ Form::textarea('diagnostico', null, ['class' => 'form-control', 'style' => 'resize: none;']) }}
</div>

<div class="form-group col-xs-12 text-right">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
