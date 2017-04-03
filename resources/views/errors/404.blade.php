<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: rgb(255,255,255);
                font-family: 'Raleway', sans-serif;
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


            a{
              text-decoration: none;
              color: rgb(23, 32, 42);
              font-size: 30px;
            }


            .m-b-md {
                margin-bottom: 30px;
                color: rgb(23, 32, 42);
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Upss... Esta pagina no existe :(
                </div>
                <br>
                <img src="/img/error.png" alt="">
                <div>
                  <p>
                    <a href="{{ url('/') }}">ir a pagina principal</a>
                  </p>
                </div>
            </div>

        </div>
    </body>
</html>
