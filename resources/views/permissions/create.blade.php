@extends('layouts.app')

@section('content')
      <section class="content-header">
          <h1>Registrar Rol</h1>
      </section>
      <section class="content">
          <div class="row">
              <div class="col-xs-12">
                  <div class="box box-info">
                      <div class="box-header with-border">
                          <h3 class="box-title">Registrar Rol</h3>
                      </div>
                     <div class="box-body">
                         {!! Form::open(['route' => ['roles.store'], 'method' => 'POST', 'class' => 'row']) !!}
                            @include('permissions.partials.form')
                         {!! Form::close() !!}
                     </div>   
                  </div>
              </div>
          </div>
      </section>
@endsection