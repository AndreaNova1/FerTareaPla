<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif
            }



            .container .card .navbar .container-fluid form .btn.btn-primary {
                text-transform: capitalize;
                width: 100px;
                background-color: transparent;
                color: #0a53be;
                font-weight: 600;
                border: 2px solid #0a53be;
                border-top-left-radius: 20px;
                border-top-right-radius: 20px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 20px;
                transition: .5s
            }

            .container .card .navbar .container-fluid form .btn.btn-primary:hover {
                background-color: #c0c5cb;
                color: #fff
            }

            .container .container-fluid ul li.nav-item .nav-link {
                color: black;
                font-size: 1rem;
                border-bottom: 2px solid transparent;
                padding: .5rem 0;
                margin: 0 .8rem
            }

            .container .card-body {
                min-height: 400px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                position: relative
            }

            .container .card-body .btn.btn-primary {
                margin-top: 2rem;
                background-color: #ffffff;
                color: #ffffff;
                width: 120px;
                height: 45px;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 2px solid #0a53be;
                border-top-left-radius: 20px;
                border-top-right-radius: 20px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 20px;
                transition: .5s
            }

            .container .card-body .btn.btn-primary:hover {
                color: #0a53be;
                background-color: #c0c2c6;
                border: 2px solid #0a53be
            }

            .container .card-footer {
                background-color: #fff;
                border: 0px
            }

            .container .card-footer .box {
                padding: 20px;
                width: 100%;
                height: 140px;
                text-align: center;
                border-bottom: 3px solid #ddd
            }

            .container .card-footer .box:hover {
                border-bottom: 3px solid #0a53be;
                color: #0a53be
            }

            .container .card-footer .box.active {
                border-bottom: 3px solid #0a53be;
                color: #0a53be
            }


            .container .card-footer .btn.btn-primary:focus {
                box-shadow: none
            }

            .card-footer .fas.fa-chevron-down {
                color: #cdcdcd
            }

        </style>
    </head>
    <body class="antialiased">

      <div class="container mt-md-5">
        <div class="card">
            <nav class="navbar navbar-expand-lg navbar-light mt-md-2">
                <div class="container-fluid"> <a class="navbar-brand" href="#">Curso Laravel</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

                    <form action="">
                        <div class="btn btn-primary ">
                            @if (Route::has('login'))

                                @auth
                                    <a href="{{ url('/dashboard') }}" >Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" >Log in</a>
                                @endauth
                            @endif
                        </div>

                        <div class="btn btn-primary">
                            @if (Route::has('register'))

                                @auth
                                    <a href="{{ url('/dashboard') }}" >Dashboard</a>
                                @else
                                    <a href="{{ route('register') }}" >Register</a>

                                @endauth
                            @endif
                        </div>
                    </form>

                </div>
            </nav>
            <div class="card-body">
                <img src="https://www.upsdelperu.com.pe/wp-content/uploads/2016/12/pagina-en-construccion.jpg" width="100" height="100" class="rounded mx-auto d-block" alt="...">
                <p class="display-6 mb-3 fw-bolder">Esta página esta en construcción.</p>
                <p class="mb-0">Si deseas aprender como usara Laravel y construir un página similar a esta, </p>
                <p class="mb-0">te recomiendo visitar el canal de YouTube de “DesarrolloWeb con JP”.</p>
                <div class="btn btn-primary">
                    <a href="https://www.youtube.com/channel/UCO-tNXmVt3fZiv5D5ZQARqw">¡Vamos!</a>
                </div>


            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</body>
</html>
