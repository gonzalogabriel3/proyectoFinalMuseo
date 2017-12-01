@extends('layouts.baseLog')

@section("content")

    <center><h1 style="color:#6C6356">MUSEO</h1></center>

    <br><br>
<div class="container">

        <div id="carousel-1" class="carousel slide container-fluid" data-ride="carousel" height="100px">       
          <!--Indicadores-->
          <?php  $i=0;?>
          <ol class="carousel-indicators">
            @for($i;$i<$bienes->count();$i++)
                @if($i==0)
                  <li style="background-color:#3F7B90" data-target="#carousel-1" data-slide-to="{{$i}}" class="active"></li>                
                @else
                  <li style="background-color:#3F7B90" data-target="#carousel-1" data-slide-to="{{$i}}"></li>                
                @endif
            @endfor
          </ol>

          <?php $i=0?>
          <!--Contenedor de los slides-->
          <div class="carousel-inner" role="listbox">
          @foreach($bienes as $bien)
            @if($i==0)
              
              <div class="item active">
                  <img src="{{asset('imagenes/')}}/{{$bien->foto}}" style="width:1250px;height: 400px;" alt="no imagen" class="img-responsive"/>
                  <div class="carousel-caption">
                      <h3 style="color:#2ECD24"><b>{{$bien->nombre}}</b></h3>
                      <p style="color:#EE5F0D"><b>{{$bien->descripcion}}</b></p>
                  </div>
              </div>
            @else
              <div class="item">
                  <img src="{{asset('imagenes/')}}/{{$bien->foto}}" style="width:1250px;height: 400px;" alt="no imagen" class="img-responsive"/>
                  <div class="carousel-caption">
                      <h3 style="color:#2ECD24"><b>{{$bien->nombre}}</b></h3>
                      <p style="color:#EE5F0D"><b>{{$bien->descripcion}}</b></p>
                  </div>
              </div>
            @endif
            <?php $i++?>
            <!--Controles-->
            <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Siguiente</span>
            </a>

          @endforeach
          </div>
      </div>

</div>
   
@endsection