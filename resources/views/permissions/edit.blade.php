@extends('layouts.app')

@section('content')
      <section class="content-header">
          <h1>Editar Permiso</h1>
      </section>
      <section class="content">
          <div class="row">
              <div class="col-xs-12">
                  <div class="box box-info">
                      <div class="box-header with-border">
                          <h3 class="box-title">Editar Permiso</h3>
                      </div>
                     <div class="box-body">
                         {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method' => 'PUT', 'class' => 'row']) !!}
                            @include('permissions.partials.form')
                         {!! Form::close() !!}
                     </div>   
                  </div>
              </div>
          </div>
      </section>
@endsection