<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
    body {
        height: 100%;
        background-repeat: no-repeat;
        background-image: linear-gradient(rgb(49, 31, 31), rgb(49, 31, 31));
    }
    
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #49ada7;">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div class="pr-2"><img src="/img/logo.png" style="height:50px; border-right: 2px solid #333"></div>
                    <div class="pl-2 pt-3">
                        <h4>RJ <span style="color:green;">MTBS</span></h4>
                    </div>
                </a>
            </div>
    </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    </div>
    <section id="intro">
        <div class="container-lg pt-5">
            <div class="row justify-content-center">
                <div class="col-md-5 text-center text-md-start">
                    <h1>
                        <div class="display-4 text-white">Massage Therapy Services</div>
                        <br>
                        <div class="display-5 text-white">Girls Services <span style="color: skyblue;">24/7</span></div>
                    </h1>
                    <p class="lead my-4 text-success">Mas pinalami na masahe, unsa pa ang inyong g dugayan, ali namo! kay
                        once maka sulay mo mag pangita namo sa among serbisyo.</p>
                    <hr style="background-color:white;">
                    <div class="d-flex justify-content-center">
                        @if (Route::has('login'))
                        <div class="pr-2" style="height:50px;  ">
                            <a href="{{ route('login') }}" class="btn btn-primary btn-lg" style="width: 100px;">Login</a>
                        </div>
                        @endif

                        @if (Route::has('register'))
                        <div class="pl-2">
                            <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Register</a>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-5 text-center">
                    <img style="height:440px; border-radius:20px;" src="/img/massage.png">
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
</body>

</html>
</body>

</html>