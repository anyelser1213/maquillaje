@extends('layouts.base2')

@section('titulo','Maquillaje | Maquilladores')




@section('parteSuperiorBody')
        
         <!-- Hero Start -->
         <div class="hero">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                           <h1>Las chicas más felices son las más bellas</h1>
                           <p>
                              Autor - Audrey Hepburn 
                           </p>
                           <div class="hero-btn">
                              <a class="btn" href="">Join Now</a>
                              <a class="btn" href="">Contact Us</a>
                           </div>
                        </div>
                  </div>
                  <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                           <img src="{{ asset('img/base/hero.png') }}" alt="Hero Image">
                        </div>
                  </div>
               </div>
            </div>
      </div>
      <!-- Hero End -->

@endsection



@section('primeraParteInformacion')


<div class="container">
   <!-- Content here -->

   <h1>Listado de maquilladores</h1>

   <table class="table table-dark table-striped">
      <thead>
         <tr>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Telefono</th>
           <th>Correo</th>
           <th>Acción</th>
         </tr>
       </thead>

       <tbody>

            @foreach ($maquilladores as $maquilladores)
            
                  <tr>
                     <td>{{ $maquilladores->nombre }}</td>
                     <td>{{ $maquilladores->apellido }}</td>
                     <td>{{ $maquilladores->telefono }}</td>
                     <td>{{ $maquilladores->correo }}</td>
                     <td>
                        <a href="/alumnos/ver/{{$maquilladores->id}}">Ver</a>
                        <a href="/alumnos/editar/{{$maquilladores->id}}">Editar</a>
                        <a href="/alumnos/eliminar/{{$maquilladores->id}}">Eliminar</a>
                     </td>
                     
                  </tr>
            @endforeach

       </tbody>
    </table>


 </div>



<table class="table">
   
   
 </table>

@endsection


@section('segundaParteInformacion')


@endsection

@section('terceraParteInformacion')


@endsection

@section('cuartaParteInformacion')


@endsection

@section('quintaParteInformacion')


@endsection

@section('sextaParteInformacion')


@endsection

@section('septimaParteInformacion')


@endsection

@section('octavaParteInformacion')


@endsection

@section('novenaParteInformacion')
@parent<!----EL (PARENT) ES PARA MOSTRAR LO QUE HAY EN LA PAGINA PADRE--->

@endsection
