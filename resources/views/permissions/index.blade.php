@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Listado de Permisos</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Lista de Permisos</h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->id }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td>{{ $permission->description }}</td>
                                            <td>
                                                @can('roles.edit')
                                                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-warning btn-xs" >Editar</a>
                                                @endcan
                                                @can('roles.destroy')
                                                <a href="{{ route('permissions.destroy', $permission->id) }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();" class="btn btn-danger btn-xs">Eliminar</a>
                                                @endcan
                                                {!! Form::open(['route' => ['permissions.destroy', $permission->id], 'method' => 'DELETE', 'style' => 'display: none;', 'id' => 'delete-form']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
