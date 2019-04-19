@extends('layout')
<body>

<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        <h3>
           Perfil
        </h3>
        <div class="row">
            <div class="col-md-4">
                <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg">
                <dl>
                    <dt>
                       Nombre: 
                    </dt>
                    <dd>
                    {{$perfil->nombre}}
                    </dd>
                    <dt>
                        Apellido
                    </dt>
                    <dd>
                   
                    </dd>
                     
                    <dt>
                    Email
                    </dt>
                    <dd>
                    {{$perfil->email}}
                    </dd>
                    <dt>
                       Se unio:
                    </dt>
                    <dd>
                    {{$perfil->created_at}}
                    </dd>
                </dl> 
                <button type="button" class="btn btn-success">
                    Editar
                </button>
            </div>
            <div class="col-md-8">
                <div class="list-group">
                     <a href="#" class="list-group-item list-group-item-action active">Saladas</a>
                    
            
                  <?php  $count=0 ?>
                     @foreach($recetas as $receta)
                        @if($receta->categoria ==0)
                        <div class="list-group-item">
                        <h4 class="list-group-item-heading">
                           {{ $receta->nombre }}
                        </h4>
                        <?php $count++ ?>
                        </div>
                        @endif
                    @endforeach     
                    
                    <div class="list-group-item justify-content-between">
                        Total Saladas: <span class="badge badge-secondary badge-pill">{{$count}}</span>

                    </div>
                    <br>
                        <div class="list-group">
                     <a href="#" class="list-group-item list-group-item-action active">Dulces:</a>
                    
            
                  <?php  $countDulce=0 ?>
                     @foreach($recetas as $receta)
                        @if($receta->categoria ==1)
                        <div class="list-group-item">
                        <h4 class="list-group-item-heading">
                           {{ $receta->nombre }}
                        </h4>
                        <?php $countDulce++ ?>
                        </div>
                        @endif
                    @endforeach     
                    
                    <div class="list-group-item justify-content-between">
                        Total Dulces: <span class="badge badge-secondary badge-pill">{{$count}}</span>
                     


                    </div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Total <span class="badge badge-light badge-pill">{{$count + $countDulce}}</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
