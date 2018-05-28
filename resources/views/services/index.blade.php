@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Servicios</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Lista de Servicios Otorgado</h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>Cod. Servicio</th>
                                        <th>Diagnostico</th>
                                        <th>Nombre Paciente</th>
                                        <th>Atendido Por: </th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($services as $service)
                                        <tr>
                                            <td>{{ $service->cod_serv }}</td>
                                            <td>{{ $service->diagnostico }}</td>
                                            @if(count($service->employes) == 1)
                                                @foreach($service->employes as $employe)
                                                    <td>{{ $employe->nombre }}</td>
                                                    <td>{{ $employe->user->name }} {{ $employe->user->last_name }} </td>
                                                @endforeach
                                            @else
                                                @foreach($service->students as $student)
                                                    <td>{{ $student->nombre }}</td>
                                                    <td>{{ $student->user->name }} {{ $student->user->last_name }} </td>
                                                @endforeach  
                                            @endif
                                            <td>
                                                @can('services.destroy')
                                                <a href="{{ route('services.destroy', $service->id) }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();" class="btn btn-danger btn-xs">Eliminar</a>
                                                @endcan
                                                {!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'DELETE', 'style' => 'display: none;', 'id' => 'delete-form']) !!}
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
