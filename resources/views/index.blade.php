<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <section id="intro">
        <div class="container-lg pt-5">
            <div class="row justify-content-center">
                <div class="col-md-5 text-center text-md-start">
                    <h1>
                        <div class="display-2">Massage Therapy System</div>
                        <div class="display-5 text-muted">Girls Services <span style="color: green">24/7</span></div>
                    </h1>
                    <p class="lead my-4 text-muted">Mas pinalami na masahe, unsa pa ang inyong g dugayan, ali namo! kay
                        once maka sulay mo mag pangita namo sa among serbisyo.</p>
                    <hr>
                    <a href="{{ route('auth.login') }}" class="btn btn-secondary btn-lg">Login Now!</a>
                    <a href="{{ route('auth.register') }}" class="btn btn-secondary btn-lg">Register Now!</a>
                </div>
                <div class="col-md-5 text-center">
                    <img style="height:440px; border-radius:20px;" src="{{ URL::to('/img/massage.png') }}">
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
</body>

</html>
</body>

</html>