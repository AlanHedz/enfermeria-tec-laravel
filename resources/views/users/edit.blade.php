@extends('layouts.app')

@section('content')
      <section class="content-header">
          <h1>Editar Usuario</h1>
      </section>
      <section class="content">
          <div class="row">
              <div class="col-xs-12">
                  <div class="box box-info">
                      <div class="box-header with-border">
                          <h3 class="box-title">Editar usuario</h3>
                      </div>
                     <div class="box-body">
                         {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT', 'class' => 'row']) !!}
                            @include('users.partials.form')
                         {!! Form::close() !!}
                     </div>   
                  </div>
              </div>
          </div>
      </section>
@endsection