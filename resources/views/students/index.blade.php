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
                                        <th>Cod. Servicio</th>
                                        <th>N° Control</th>
                                        <th>Nombre</th>
                                        <th>Semestre</th>
                                        <th>Carrera</th>
                                        <th>Direccion</th>
                                        <th>Diagnostico</th>
                                        <th>Atendido Por: </th>
                                        <th>Telefono Emergencia</th>
                                        <th>Telefono Propio</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                        <tr>
                                            <td>{{ $student->service->cod_serv }}</td>
                                            <td>{{ $student->numero_control }}</td>
                                            <td>{{ $student->nombre }}</td>
                                            <td>{{ $student->semestre }}</td>
                                            <td>{{ $student->carrera}}</td>
                                            <td>{{ $student->direccion }}</td>
                                            <td>{{ $student->service->diagnostico }}</td>
                                            <td>{{ $student->user->name }} {{ $student->user->last_name }} </td>
                                            <td>{{ $student->tel_emerg }}</td>
                                            <td>{{ $student->tel_propio }}</td>
                                            <td>
                                                @can('students.edit')
                                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-xs" >Editar</a>
                                                @endcan
                                                @can('students.destroy')
                                                <a href="{{ route('students.destroy', $student->id) }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();" class="btn btn-danger btn-xs">Eliminar</a>
                                                @endcan
                                                {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'DELETE', 'style' => 'display: none;', 'id' => 'delete-form']) !!}
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
