<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">

        <!---<a href="{{ route('inicio') }}" class="navbar-brand letra">{{$titulo}}</a>--->
        <a class="navbar-brand" href="{{ route('inicio') }}">
            <img src="{{ asset('img/general/logo-VTV-transparente-pequeno.png')}}" width="50" height="60" alt="">
            
        </a>
        <!----<a href="index.html" class="navbar-brand">Maq<span>UI</span>llaje</a>---->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        
            <div class="collapse navbar-collapse justify-content-end " id="navbarCollapse">
                
                <div class="navbar-nav ml-auto">

                    @if ($opcion1 == "home")
                        <a href="{{ route('inicio') }}" class="nav-item nav-link active">Inicio</a>
                    @else
                        <a href="{{ route('inicio') }}" class="nav-item nav-link">Inicio</a>
                    
                    @endif
                    
                    <div class="nav-item dropdown">
                        @if ($opcion1 == "productos")
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Productos</a>
                            <div class="dropdown-menu">

                                @if ($opcion2 == "articulos")

                                    <a href="#" class="dropdown-item active">Articulos</a>
                                    <a href="#" class="dropdown-item ">Cosmeticos</a>
                                
                                @elseif ($opcion2 == "cosmeticos")

                                    <a href="#" class="dropdown-item">Articulos</a>
                                    <a href="#" class="dropdown-item active">Cosmeticos</a>
                                
                                @else

                                    <a href="#" class="dropdown-item">Articulos</a>
                                    <a href="#" class="dropdown-item active">Cosmeticos</a>
                                
                                @endif
                                
                            </div>
                        
                        @else<!----En caso de que no se elija productos se muestra asi---->
                        
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Productos</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Articulos</a>
                                <a href="#" class="dropdown-item ">Cosmeticos</a>
                                
                            </div>
                        @endif
                        
                        
                    </div>

                    
                    @if ($opcion1 == "maquilladores")

                        <a href="{{ route('maquilladores.index') }}" class="nav-item nav-link">Maquilladores</a>
                    @else
                        <a href="{{ route('maquilladores.index') }}" class="nav-item nav-link">Maquilladores</a>
                    
                    @endif
                    
                    <!---
                    <div class="nav-item dropdown">

                        @if ($opcion1 == "maquilladores")

                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Maquilladores</a>
                            
                            <div class="dropdown-menu">

                                @if ($opcion2 == "crear")

                                    <a href="{{route('maquilladores.crear')}}" class="dropdown-item active">Crear</a>
                                    <a href="{{route('maquilladores.listar')}}" class="dropdown-item ">Listar</a>
                                
                                
                                @elseif ($opcion2 == "listar")

                                    <a href="{{route('maquilladores.crear')}}" class="dropdown-item">Crear</a>
                                    <a href="{{route('maquilladores.listar')}}" class="dropdown-item active">Listar</a>
                                    
                                @else
                                
                                @endif
                            
                            </div>
                                
                        
                        @else

                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Maquilladores</a>
                            <div class="dropdown-menu">

                                <a href="{{route('maquilladores.crear')}}" class="dropdown-item">Crear</a>
                                <a href="{{route('maquilladores.listar')}}" class="dropdown-item ">Listar</a>
                            
                            
                            </div>
                        @endif

                            
                        
                        
                        
                        
                    </div>
                    --->

















                    
    
                    @if (auth()->user()->perfil_id != 3)
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Administrador</a>
                            <div class="dropdown-menu">
                                @if (auth()->user()->perfil_id == 1)
                                <a href="" class="dropdown-item ">Perfiles</a>
                                <a href="" class="dropdown-item">Usuarios</a>
                                @endif
                                
                                @if (auth()->user()->perfil_id == 1 || auth()->user()->perfil_id == 2)
                                <a href="" class="dropdown-item">Stock</a>
                                <a href="" class="dropdown-item">Inventario</a>
                                <a href="{{ route('logout') }}" class="dropdown-item">Movimientos</a>
                                @endif
                            </div>
                        </div>
                        
                    @endif
                    
                    <!--
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu">
                            <a href="blog.html" class="dropdown-item active">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
    
                -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{auth()->user()->nombre}}</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Perfil</a>
                            <a href="{{ route('logout') }}" class="dropdown-item">Salir</a>
                        </div>
                    </div>
                </div>
            </div>
        

        
    </div>
</div>
<!-- Nav Bar End -->





