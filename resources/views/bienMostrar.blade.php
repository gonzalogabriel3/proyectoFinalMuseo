@extends('layouts.baseLog')

@section('content')
<div class="container">
<center><h3>{{$bien->nombre}}</h3></center>
<center><div style="height:300px;width:350px;border:solid 2px black;display:inline-block;">
    <img src="{{asset('imagenes/')}}/{{$bien->foto}}" width="340px" height="290px" alt="No se encontro imagen"/> 
</div>
</center>
<br>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Codigo</h4>
        <p class="list-group-item-text">{{$bien->codigo}}</p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Tipo</h4>
        <!--$bien->tipo hace referencia a la relacion que se establecio en el modelo "bienes",
        a partir de esta relacion puedo acceder al atributo 'nombre' del tipo-->
        <p class="list-group-item-text">{{$bien->tipo->nombre}}</p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Autor</h4>
        <p class="list-group-item-text">{{$bien->autor}}</p>
        </a>
    </div>    
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Lugar</h4>
        <p class="list-group-item-text">{{$bien->lugar}}</p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Fecha</h4>
        <p class="list-group-item-text">{{$bien->fecha}}</p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Tomo</h4>
        <p class="list-group-item-text">
        @if($bien->tomo==null)
            {{"---"}}
        @else
            {{$bien->tomo}}
        @endif        
        </p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Folio</h4>
        <p class="list-group-item-text">
            @if($bien->folio==null)
                {{"---"}}
            @else
                {{$bien->folio}}
            @endif
        </p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Paginas</h4>
        <p class="list-group-item-text">
            @if($bien->paginas==null)
                {{"---"}}
            @else
                {{$bien->paginas}}
            @endif
        </p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Legajo</h4>
        <p class="list-group-item-text">
            @if($bien->legajo==null)
                {{"---"}}
            @else
                {{$bien->legajo}}
            @endif
        </p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Material</h4>
        <p class="list-group-item-text">{{$bien->material->nombre}}</p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Completo</h4>
        <p class="list-group-item-text">{{$bien->completo}}</p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Procedencia</h4>
        <p class="list-group-item-text">{{$bien->procedencia}}</p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Estado de Conservacion</h4>
        <p class="list-group-item-text">{{$bien->estado->nombre}}</p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Fotografo</h4>
        <p class="list-group-item-text">{{$bien->fotografo}}</p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Descripcion</h4>
        <p class="list-group-item-text">{{$bien->descripcion}}</p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Descriptores</h4>
        <p class="list-group-item-text">
         @foreach($bien->descriptores as $descriptor)   
            {{$descriptor->nombre.'//'}}
         @endforeach   
        </p>
        </a>
    </div>
    <div class="list-group">
        <a class="list-group-item active">
        <h4 class="list-group-item-heading" style="color:orange">Observaciones</h4>
        <p class="list-group-item-text">{{$bien->observacion}}</p>
        </a>
    </div>
    <center><a href="{{route('bien.index')}}"><button class="btn btn-info">Volver a menu principal</button></a></center> 
</div>
@endsection