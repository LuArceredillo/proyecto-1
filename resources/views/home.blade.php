@extends('layout')


@section('content')
 
<div class="bd-example">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <a href="#">  <img src="{{ asset('img/spaghetti.jpg') }}" class="d-block w-100" alt="spaghetti"></a>
        <div class="carousel-caption d-none d-md-block">
          <h5>Spaghetti</h5>
          <p>Riquisimos spaghetti con salsa y atún</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/tiramisu.jpg') }}" class="d-block w-100" alt="tiramisu">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tiramisú</h5>
          <p>Verdadera receta del clásico postre italiano.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/cupcakes.jpg') }}" class="d-block w-100" alt="cupcakes">
        <div class="carousel-caption d-none d-md-block">
          <h5>Cupcakes</h5>
          <p>Espectaculares cupcakes de naranja con crema</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <!--  Seccion del buscador -->

<section class="buscador">
<form action="#" method="GET" role="search" > {{csrf_field() }}   <!--  protege busqueda-->

<div class="input-group mb-3">
<label class="sr-only" for="inlineFormInput">busqueda</label>
  <input type="text" name="query" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary " type="button" id="button-addon2">Buscar</button>
  </div>
</div>
</form>

</section>
  <!--  LOS TRES ICONOS CON LOS USUARIOS MAS CONOCIDOS
  =====ESTA PUESTO EN UNA SECCION APARTE -->
  <section class="iconos">
  <div class="container marketing">
  <h3> Los usuarios más valorados </h3>
    <!-- TRES COLUMNAS ABAJO DEL CAROUSEL -->
    <div class="row">
   
      <div class="col-lg-4">
      <img src="{{asset('img/osvaldo.jpg')}}" class="rounded-circle"   alt="Osvaldo Gross" > 
        <h2>Osvaldo Gross</h2>
        <p>Lic en geoquimica y chef pâtissier. Es un reconocido pastelero a nivel mundial y es muy conocido por sus ciclos televisivos tanto en Utilísima Satelital como en elgourmet.com</p>
        <p><a class="btn btn-secondary" href="#" role="button">Ver Perfil &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="{{ asset('img/narda.jpg') }}" class="rounded-circle"  alt="Narda Lepes" > 
        <h2>Narda Lepes</h2>
        <p>Cocinera y presentadora de televisión argentina en "El gourmet"con ciclos como "Doña Petrona por Narda"	. Conocida por programas como "Dueños de la cocina"</p>
        <p><a class="btn btn-secondary" href="#" role="button">Ver Perfil  &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="{{ asset('img/donato.jpg') }}" class="rounded-circle"   alt="Donato de Santis" > 
        <h2>Donato de Santis</h2>
        <p>Cocinero italiano especializado en la cocina de ese país. Desde el año 2000 reside en Buenos Aires, donde fundó su propio restaurante, Cucina Paradiso.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Ver Perfil &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    
    
    </section>
    <section class="recetas">
    <!-- van las listas recetas -->
    <div class="container-fluid">
    <div class="row">
        <div class="col" id="salados">
           
             <h3> Salados </h3>
            
               @foreach ($recetas as $receta)
                 @if($receta->categoria==0) 
                   <li> {{ $receta->nombre }}</li>
                   @endif
               @endforeach
            
        </div>
    <div class="col"  id="dulces">
    <h3> Dulce </h3>
    <ul id="contenedorListado" class="list-group">
                <div class="row">
                       @foreach ($recetas as $receta)
                         @if($receta->categoria==1)
                         <li> {{ $receta->nombre }}</li>
                         @endif   
                        @endforeach
                   
                </div>
            </ul>    
    
    </div>
  </div>
  </section>
    <!-- /END THE FEATURETTES -->
    </div>
@endsection