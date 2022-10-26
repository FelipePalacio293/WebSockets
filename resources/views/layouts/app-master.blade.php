<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="shortcut icon" href="{{ url('/assets/images/sanjorge.png') }}">
</head>
<body>
    @include('layouts.partials.banner')
    <header>
        
        @include('layouts.partials.navbar')
    </header>
    <main class="container">
        @yield('content')
    </main>

    @include('layouts.partials.footer')
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}">
    
    </script>
</body>
</html>