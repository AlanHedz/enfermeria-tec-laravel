<div class="form-group col-xs-12">
    {{ Form::label('name', 'Nombre de rol') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-12">
    {{ Form::label('slug', 'URL Amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-12">
    {{ Form::label('description', 'Descripcion') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-12">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
    
	