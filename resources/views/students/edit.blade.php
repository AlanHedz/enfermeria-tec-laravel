@extends('layouts.app')

@section('content')
      <section class="content-header">
          <h1>Registrar servicio para Alumnos</h1>
      </section>
      <section class="content">
          <div class="row">
              <div class="col-xs-12">
                  <div class="box box-info">
                      <div class="box-header with-border">
                          <h3 class="box-title">Registrar Alumno</h3>
                      </div>
                     <div class="box-body">
                         {!! Form::model($student, ['route' => ['students.update', $student->id], 'method' => 'PUT', 'class' => 'row']) !!}
                            @include('students.partials.form')
                         {!! Form::close() !!}
                     </div>   
                  </div>
              </div>
          </div>
      </section>
@endsection