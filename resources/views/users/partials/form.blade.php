<div class="form-group col-xs-6">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-6">
    {{ Form::label('last_name', 'Apellidos') }}
    {{ Form::text('last_name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-6">
	{{ Form::label('username', 'Nombre de usuario') }}
	{{ Form::text('username', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-6">
    {{ Form::label('password', 'Contraseña') }}
    {{ Form::password('password', ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-12">
    {{ Form::label('email', 'Correo Electronico') }}
    {{ Form::email('email', null, ['class' => 'form-control']) }}
</div>
<hr>
<h3>Lista de roles</h3>
<div class="form-group col-xs-12">
	<ul class="list-unstyled">
        @foreach($roles as $role)
            <li>
                <label>
                    {{ Form::checkbox('roles[]', $role->id, null) }}
                    {{ $role->name }}
                    <em>({{ $role->description ?: 'Sin descripcion' }})</em>
                </label>
            </li>
        @endforeach
    </ul>
</div>
<hr>
<div class="form-group text-right">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
	