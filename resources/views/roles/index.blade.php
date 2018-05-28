@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Roles</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Lista de Roles</h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                @can('roles.edit')
                                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning btn-xs" >Editar</a>
                                                @endcan
                                                @can('roles.destroy')
                                                <a href="{{ route('roles.destroy', $role->id) }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();" class="btn btn-danger btn-xs">Eliminar</a>
                                                @endcan
                                                {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE', 'style' => 'display: none;', 'id' => 'delete-form']) !!}
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
