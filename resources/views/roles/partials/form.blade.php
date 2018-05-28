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
    @foreach ($specials as $special)
        {{ Form::checkbox('special[]', $special, null) }}
        @if ($special == 'all-access')
            Acceso Total
        @else
            Ningún Acceso
        @endif
    @endforeach
</div>
<hr>
<h3>Lista de roles</h3>
<div class="form-group col-xs-12">
    <ul class="list-unstyled">
        @foreach($permissions as $permission)
            <li>
                <label>
                    {{ Form::checkbox('permissions[]', $permission->id, null) }}
                    {{ $permission->name }}
                    <em>({{ $permission->description ?: 'Sin descripcion' }})</em>
                </label>
            </li>
        @endforeach
    </ul>
</div>
<hr>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
    
	