<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('rutaPrincipal')}}">{{__("Home")}}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs("rutaForm")?'active':'' }}" aria-current="page" href="{{route('rutaForm')}}">{{__("Book registration")}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('contenido')
    <div class="container-fluid text-bg-dark position-absolute bottom-0">
        <div class="row justify-content-around">
            <div class="col-4">
                <p>Biblioteca Jose Jimenez &copy;</p>
                <p>{{__("All rights reserved")}}</p>
            </div>
            <div class="col-4">
                <p>{{__("Today is")}} {{date('d/M/Y')}}</p>
            </div>
        </div>
    </div>
</body>
</html>