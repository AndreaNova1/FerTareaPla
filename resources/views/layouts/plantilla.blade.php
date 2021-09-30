<html>
    <head>
        <title>Tarea Plantilla - @yield('title')</title>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <style type="text/css">

            html {
                display:flex;
                align-items:center;
                justify-content:center;
            }

            body {
                background-color:transparent;
            }

            .registration-form {
                padding:50px 0;
            }

            .registration-form form {
                max-width:800px;
                padding:50px 70px;
                border-radius:10px;
                box-shadow:4px 4px 15px rgba(0, 0, 0, 0.2);
                background-color:#fff;
            }

            .registration-form form h3 {
                font-weight:bold;
                margin-bottom:30px;
            }

            .registration-form .item {
                border-radius:10px;
                margin-bottom:25px;
                padding:10px 20px;
            }

            .registration-form .create-account {
                border-radius:30px;
                padding:10px 20px;
                font-size:18px;
                font-weight:bold;
                background-color:#3f93ff;
                border:none;
                color:white;
                margin-top:20px;
            }

            @media (max-width: 576px) {
                .registration-form form {
                    padding:50px 20px;
                }
            }
            a{
                color: white;
            }
        </style>

    </head>

    <body>
<header>
     <nav class="navbar navbar-expand-lg navbar-light mt-md-2">
         <a class="navbar-brand" href="#">
             <img src="https://umgnaranjo.com/wp-content/uploads/2018/11/logo.png" alt="" width="50" height="50">
         </a>
        <div class="container-fluid"> <a class="navbar-brand" href="#">Curso Laravel</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

            <form method="POST" action="{{ route('logout') }}">
                <div class="btn btn-primary ">
                    @csrf
                    <a href="route('logout')"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Salir') }}
                    </a>
                </div>

            </form>

        </div>
    </nav>
</header>

<div class="registration-form">
    <form>
        <h3 class="text-center">Pre-Registro de alumno.</h3>
        <div class="form-group">
            <input class="form-control item" type="text" name="Nombre" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id="name" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <input class="form-control item" type="text" name="Apellido" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id="lastname" placeholder="Apellido" required>
        </div>
        <div class="form-group">
            <input class="form-control item" type="text" name="Carnet" maxlength="15" minlength="4" id="carnet" placeholder="0909-19-19848" required>
        </div>
        <div class="form-group">
            <input class="form-control item" type="password" name="password" minlength="6" id="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input class="form-control item" type="password" name="confirm-password" minlength="6" id="password" placeholder="Confirme su contrasena." required>
        </div>
        <div class="form-group">
            <input class="form-control item" type="email" name="email" id="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block create-account" type="submit">Registrar</button>
        </div>
    </form>
</div>


        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
