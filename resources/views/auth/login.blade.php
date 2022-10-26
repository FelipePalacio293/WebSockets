<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ url('/assets/css/styleRegister.css') }}">
    <title>Iniciar Sesion</title>
</head>
<body>
    @include('layouts.partials.banner')    
    <header>
        @include('layouts.partials.navbar')
    </header>
    <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form action="/login" method="POST" class="login">
                @csrf
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="email" class="login__input" placeholder="Código sede">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="password" class="login__input" placeholder="Contraseña">
				</div>
				<button class="button login__submit" value="Entrar">
					<span class="button__text">Iniciar sesión</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		    </div>		
	    </div>
    </div>

    
</body>
</html>