@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Trabajadores</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Lista de Empleados</h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>Cod. Servicio</th>
                                        <th>N° Ficha</th>
                                        <th>Nombre</th>
                                        <th>Horario</th>
                                        <th>Puesto</th>
                                        <th>Atendido Por: </th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employes as $employe)
                                        <tr>
                                            <td>{{ $employe->service->cod_serv }}</td>
                                            <td>{{ $employe->num_ficha }}</td>
                                            <td>{{ $employe->nombre }}</td>
                                            <td>{{ $employe->horario }}</td>
                                            <td>{{ $employe->puesto}}</td>
                                            <td>{{ $employe->user->name }} {{ $employe->user->last_name }}</td>
                                            <td>
                                                @can('employes.edit')
                                                <a href="{{ route('employes.edit', $employe->id) }}" class="btn btn-warning btn-xs" >Editar</a>
                                                @endcan
                                                @can('employes.destroy')
                                                <a href="{{ route('employes.destroy', $employe->id) }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();" class="btn btn-danger btn-xs">Eliminar</a>
                                                @endcan
                                                {!! Form::open(['route' => ['employes.destroy', $employe->id], 'method' => 'DELETE', 'style' => 'display: none;', 'id' => 'delete-form']) !!}
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
