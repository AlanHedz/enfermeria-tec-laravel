@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Alumnos</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Lista de Alumnos</h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Nombre de usuario</th>
                                        <th>Tipo de Usuario</th>
                                        <th>Email</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->username }}</td>
                                            @foreach($user->roles as $role)
                                                <td>{{ $role->name }}</td>
                                            @endforeach
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @can('users.edit')
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-xs" >Editar</a>
                                                @endcan
                                                @can('users.destroy')
                                                <a href="{{ route('users.destroy', $user->id) }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();" class="btn btn-danger btn-xs">Eliminar</a>
                                                @endcan
                                                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE', 'style' => 'display: none;', 'id' => 'delete-form']) !!}
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
