@extends('layouts.base2')

@section('titulo','Maquillaje | index')

@section('enlacesCSSPrincipales')

<!--LIbrerias para usar datatables con boostrap5---->
<link rel="stylesheet" href="{{ asset('vendor/bootstrap-5.2.0-dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/datatables/css/dataTables.bootstrap5.min.css') }}">


@show


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

   <h1>Crear Maquillador</h1>
   <table id="example" class=" table table-danger table-striped table-bordered border-warning" style="width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Posicion</th>
            <th>oficina</th>
            <th>Edad</th>
            <th>Fecha de inicio</th>
            <th>Salario</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011-04-25</td>
            <td>$320,800</td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011-07-25</td>
            <td>$170,750</td>
        </tr>
        <tr>
            <td>Ashton Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>66</td>
            <td>2009-01-12</td>
            <td>$86,000</td>
        </tr>
        <tr>
            <td>Cedric Kelly</td>
            <td>Senior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>22</td>
            <td>2012-03-29</td>
            <td>$433,060</td>
        </tr>
        <tr>
            <td>Airi Satou</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>33</td>
            <td>2008-11-28</td>
            <td>$162,700</td>
        </tr>
        <tr>
            <td>Brielle Williamson</td>
            <td>Integration Specialist</td>
            <td>New York</td>
            <td>61</td>
            <td>2012-12-02</td>
            <td>$372,000</td>
        </tr>
        <tr>
            <td>Herrod Chandler</td>
            <td>Sales Assistant</td>
            <td>San Francisco</td>
            <td>59</td>
            <td>2012-08-06</td>
            <td>$137,500</td>
        </tr>
        <tr>
            <td>Rhona Davidson</td>
            <td>Integration Specialist</td>
            <td>Tokyo</td>
            <td>55</td>
            <td>2010-10-14</td>
            <td>$327,900</td>
        </tr>
        <tr>
            <td>Colleen Hurst</td>
            <td>Javascript Developer</td>
            <td>San Francisco</td>
            <td>39</td>
            <td>2009-09-15</td>
            <td>$205,500</td>
        </tr>
        <tr>
            <td>Sonya Frost</td>
            <td>Software Engineer</td>
            <td>Edinburgh</td>
            <td>23</td>
            <td>2008-12-13</td>
            <td>$103,600</td>
        </tr>
        
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </tfoot>
</table>



 </div>



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




@section('enlacesJSPrincipales')


    
<!--Librerias para usar datatables---->
<!--El jquery es necesario para implementar los datatables-->
<script src="{{ asset('vendor/jquery/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/idiomas/español.js') }}"></script>



<script>


$(document).ready(function() {
    $('#example').DataTable( {
        "language":  español
    } );
/*
    //El DOMContentLoaded es cuando se carga todo el archivo html
    document.addEventListener('DOMContentLoaded', function () {
    let table = new DataTable('#example'
    )

    //oFeatures
    //

    //table.context[0].oLanguage.sSearch="Probando";
    table.DataTable(
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
        }
    );
*/




/*
    console.log(table.context[0].oFeatures);
    console.log(table.context[0].oScroll);
    console.log(table.context[0].oLanguage);
    console.log(table.context[0].oLanguage.sSearch);
    console.log(table.context[0].oBrowser);
  */  
    


    //table.language=
});
    
        </script>
            
@endsection

    
    
        