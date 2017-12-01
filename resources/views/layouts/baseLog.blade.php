<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    @extends('layouts.bootstrap')
    <title>Museo</title>
</head>
<body>
<!--Barra de navegacion-->
    <nav class="navbar navbar-inverse" style="background-color:#1D6F6F">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">MUSEO</a>
            </div>
        <ul class="nav navbar-nav">
            <li style="background-color:#295C5C"><a href="{{url('index')}}"><b>Home</b></a></li>
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrar
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{route('estado.index')}}" style="color:#1268C1"><b>Estados de Conservacion</b></a></li>
                <li><a href="{{route('tipo.index')}}" style="color:#1268C1"><b>Tipos de Bien</b></a></li>
                <li><a href="{{route('descriptor.index')}}" style="color:#1268C1"><b>Descriptores</b></a></li>
                <li><a href="{{route('bien.index')}}" style="color:#1268C1"><b>Bienes</b></a></li>
            </ul>
      </li>
           </ul>
           <!--Logout-->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <span class="glyphicon glyphicon-log-out">Salir</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                    </form>
                </li>
            </li>                
            </ul>            
        </div>
    </nav>
    @if($notificacion=Session::get('mensaje'))
        <div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <img src="http://vector.me/files/images/3/0/304728/ok_button_preview" height=20px/>
            <b>{{$notificacion}}</b>
        </div>
    @endif
    
    @yield("content")
    
    
    <footer style="background-color:#1D6F6F;padding:3px;margin-top:600px;">

            <center>
                <h3 style="color:white">Programacion web II - 2017</h3>
            </center>
            <!--<script src="{{ asset('js/app.js') }}"></script>-->
    </footer>
    

</body>
</html>
 