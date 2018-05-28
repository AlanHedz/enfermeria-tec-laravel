<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Enfermeria - Tecnologíco De Madero</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.css">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<div class="full-height row middle-xs center-xs no-margin main-background" style="background-image: url('{{ asset('img/fondo.jpg') }}')">
		<div class="col-xs-10 col-sm-8 col-md-6 col-lg-4">
			<div class="box">
				<div class="big-padding white card">
					<h1>Iniciar Sesión</h1>
					<p>Instituto Tecnologico De Ciudad Madero</p>
					<form action="{{ route('login') }}" method="POST">
						@csrf
						<div class="form-group row">
								<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Nombre de Usuario') }}</label>

								<div class="col-md-6">
									 <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

									 @if ($errors->has('email'))
										  <span class="invalid-feedback">
												<strong>{{ $errors->first('email') }}</strong>
										  </span>
									 @endif
								</div>
						  </div>

						  <div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

								<div class="col-md-6">
									 <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

									 @if ($errors->has('password'))
										  <span class="invalid-feedback">
												<strong>{{ $errors->first('password') }}</strong>
										  </span>
									 @endif
								</div>
						  </div>
						  <div class="form-group text-center">
								<button type="submit" class="btn btn-info">
									{{ __('Iniciar Sesión') }}
								</button>
						  </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
