<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="assets/img/LOGO.png" style="width: 60px;height: 35px;" alt="..." /><b>Redes</b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="footer py-4">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">
                        <b>Copyright &copy; Todos los Derechos Reservados 2021</b>
                        
                        
                    </div>
                    <div class="col-lg-4 my-3 my-lg-0">
                         <img src="assets/img/escudo.gif" style="width: 60px;height: 67px;" alt="">
                        <img src="assets/img/jp.png" style="width: 60px;height: 35px;" alt="..." />
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <h6><b>desarrollado por </b></h6>
                        
                        <h6>Juan P. Morales C.</h6>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/jp.js"></script>
</body>
</html>
