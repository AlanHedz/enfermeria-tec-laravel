<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Enfermeria - Tecnologíco De Madero</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
        <header class="main-header">
            <a href="#" class="logo">
                <span class="logo-mini"><b>T</b>EC</span>
                   
                <span class="logo-lg"><b>Enfer</b>meria</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <p>{{ Auth::user()->name }} {{ Auth::user()->last_name }} </p>
                                </li>
                                <li class="user-footer">
                                    <div class="text-center">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Salir</a>
                                    </div>
                                    <form action="{{ route('logout') }}" method="POST" style="display: none;" id="logout-form">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>   
            </nav>
        </header>

        <aside class="main-sidebar">
            <ul class="sidebar-menu" data-widget="tree">
                @can('students.index')
                <li class="header">Alumnos</li>
                <li>
                    <a href="{{ route('students.index') }}">
                        <i class="fa fa-graduation-cap"></i>
                        <span>Listado de Alumnos</span>
                    </a>
                </li>
                @endcan
                @can('students.create')
                <li>
                    <a href="{{ route('students.create') }}">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span>Servicio para Alumnos</span>
                    </a>
                </li>
                @endcan
                @can('employes.index')
                <li class="header">Empleados</li>
                <li>
                    <a href="{{ route('employes.index') }}">
                        <i class="fa fa-address-book" aria-hidden="true"></i>
                        <span>Listado de Empleados</span>
                    </a>
                </li>
                @endcan
                @can('employes.create')
                <li >
                    <a href="{{ route('employes.create') }}">
                        <i class="fa fa-id-badge" aria-hidden="true"></i>
                        <span>Servicio para Empleados</span>
                    </a>
                </li>
                @endcan
                @can('services.index')
                <li class="header">Servicios</li>
                <li>
                    <a href="{{ route('services.index') }}">
                        <i class="fa fa-files-o"></i>
                        <span>Servicios Atendidos</span>
                    </a>
                </li>
                @endcan
                @can('users.index')
                <li class="header">Usuarios</li>
                <li>
                    <a href="{{ route('users.index') }}">
                        <span>Listado de Usuarios</span>
                    </a>
                </li>
                @endcan
                @can('users.create')
                <li>
                    <a href="{{ route('users.create') }}">
                        <span>Crear Usuario</span>
                    </a>
                </li>
                @endcan
                @can('roles.index')
                <li class="header">Roles y Permisos</li>
                <li>
                    <a href="{{ route('roles.index') }}">
                        <span>Listado de Roles</span>
                    </a>
                </li>
                @endcan
                @can('roles.create')
                <li>
                    <a href="{{ route('roles.create') }}">
                        <span>Crear Rol</span>
                    </a>
                </li>
                @endcan
                @can('roles.index')
                <li>
                    <a href="{{ route('permissions.index') }}">
                        <span>Listado de Permisos</span>
                    </a>
                </li>
                @endcan
                @can('roles.create')
                <li>
                    <a href="{{ route('permissions.create') }}">
                        <span>Crear Permiso</span>
                    </a>
                </li>
                @endcan
            </ul>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
</body>
</html>
