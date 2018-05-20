<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
             <img class="w3-circle w3-btn w3-display-topleft w3-padding-16" alt="Norway" src="acelera.jpg" onclick="window.location.href='http://www.aceleralatam.cl'" style="max-width: 10%">
             
             <div class="top-right links">
                    <a href="">Ingreso</a>
                    <a href="">Registro</a>
                </div>

            <div class="content">
                <div class="title m-b-md">
                    Formulario Prueba IS2
                    weña
                    <a class="w3-btn w3-hover-text-amber w3-card w3-circle" href="">{!! Emoji::findByName("wink")!!}</a>
                </div>

                <div class="links">
                    <a href="http://www.aceleralatam.cl/inicio/">AceleraLatam</a>
                    <a href="https://laravel.com/docs">Documentacion</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">Nuevos</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub D:</a>
                </div>
            </div>
        </div>
    </body>
</html>
