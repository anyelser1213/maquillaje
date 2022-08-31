<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maquillaje | Login</title>
    
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('img/icons/favicon.ico') }}"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/login/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/global/animate/animate.css') }}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/login/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/login/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/login/select2/select2.min.css') }}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/login/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/main.css') }}">
    <!--===============================================================================================-->


    <!-- Styles -->
    <link href="{{ asset('css/base/estilos.css') }}" rel="stylesheet">

    <link href="{{ asset('css/global/fuentes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login/login.css') }}" rel="stylesheet">
    <!--============================= POR DEFECTO DE LARAVEL ==========================================-->

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    

    




</head>
<body>


<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form action="{{ route('login') }}" method="POST" id="FormularioLogin" class="login100-form validate-form" >
                @csrf

                <span class="login100-form-title p-b-43 letra">
                    Maquillaje
                </span>
                                
                
                
                
                <div class="wrap-input100 validate-input" data-validate = "EL usuario es requerido, ejemplo: juanz23">
                    
                    
                    <input id="email" type="text" class="input100 @error('email') is-invalid @enderror "  name="username" value="{{ old('email') }}" autocomplete="on" autofocus>
                    
                    
                    <span class="focus-input100"></span>
                    <span class="label-input100 ">Usuario</span>
                    
                </div>
                
                
                <div class="wrap-input100 validate-input" data-validate="Contraseña es requerida">
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" autocomplete="off">
                    
                    <span class="focus-input100"></span>
                    <span class="label-input100 ">Clave</span>
                </div>
                @if ($errors->any())
                
                    <div class="alert alert-danger text-center " role="alert">
                        Usuario o Contraseña incorrecta
                    </div>
                  
                @endif
                
        

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn ">
                        Ingresar
                    </button>
                </div>
                <hr>
                <br><br>

                <div class="login100-form-social flex-c-m">

                    <img src="{{ asset('img/general/logo-VTV-transparente-pequeno.png') }}" alt="VTV" width="20%" srcset="">
                </div>

                
            </form>

            <div id="FondoLogin" class="login100-more" >
            </div>
        </div>
    </div>
</div>




    
<!--===============================================================================================-->
<script src="{{ asset('vendor/login/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('vendor/login/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('vendor/login/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/login/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('vendor/login/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('vendor/login/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/login/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('vendor/login/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('js/login/main.js') }}"></script>



    

    
</body>
</html>


