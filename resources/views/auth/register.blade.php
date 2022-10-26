<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ url('/assets/css/styleRegister.css') }}">
    <title>Registro</title>
    
</head>
<body>
    @include('layouts.partials.banner')
    <header>

       
        @include('layouts.partials.navbar')

    </header>
    
    <p class="titulo">Registro de usuarios</p>
    <form action="/register" method="POST" class="container registro">
        @csrf
        <div class="form-row">
            <div class="form-group formas">
                <label for="exampleInputEmail1" class="datos">Nombre</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre sede">
            </div>
            <div class="form-group formas">
                <label for="exampleInputEmail1" class="datos">Código sede</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Código sede">
            </div>
            <div class="form-group formas">
                <label for="exampleInputEmail1" class="datos">Contraseña</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Contraseña">
            </div>
            <div class="envio">
                <input type="submit" class="btn btn-success " value="Registrar">
            </div>
        </div>
    </form>
    @include('layouts.partials.footer')
</body>
</html>