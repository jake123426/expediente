<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    {{-- Estilos css --}}
    <link rel="stylesheet" href="{{ asset('css/LoginEstilos.css') }}">

</head>

<body>

    <nav>
        <i class="fas fa-balance-scale fa-3x"></i>
        <label class="logo">Expediente Judicial Electronico</label>
        <ul>

            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contactanos</a></li>
            <li><a href="#">Acerca de nosotros</a></li>
        </ul>
    </nav>


    <div class="contenedor" >
        <div class="content">
            <!--Image & Title-->
            <img src="{{ Storage::url('login/justicia.jpg') }}" alt="No image">
            <div class="text">Introducir Credenciales</div>
            <!--Email & password input place-->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input id="CI" type="text" name="CI" placeholder="usuario" required autofocus >

                </div>

                <div class="field">
                    <span class="fa fa-lock"></span>
                    <input id="password" type="password" placeholder="contraseña" name="password" required autocomplete="current-password">

                </div>

                <x-jet-checkbox id="remember_me" name="remember"  style="display: none"/>

                <!--login & outer button-->

                <div class="button">
                    <input type="submit" value="Acceder">
                </div>
            </form>
        </div>
    </div>

</body>

</html>
