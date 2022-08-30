<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('titulo')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}"><!------AQUI ESTA LO DE BOOSTRAP----->

        <!---------------------------------------------------------------->

        

        @section('EnlacesCSSPrincipales')
        
        @show
        
        <!-----ESTOS ENLACES JS SON LOS QUE SE REQUIEREN DE LA PLANTILLA----->
        <script src="{{ asset('js/base/all.js') }}"></script>
        <!---------------------------------------------------------------->
    </head>


    <body >

        <!----Incluimos el menubar--------->
        @include('menus.menubar', array('titulo'=>'Maquillaje'))
        












        
        <!-----SCRIPTS VITALES PARA EL FUNCIONAMIENTO DE LOS MENU-------->
        
        <!--------------------------------------------------------------->
        
    </body>
</html>