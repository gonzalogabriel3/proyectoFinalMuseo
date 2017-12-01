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
            <li style="background-color:#295C5C"><a href="{{route('/')}}"><b>Home</b></a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-user"></span> Inicio sesion</a></li>
                <li><a href="{{route('register')}}"><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
            </ul>
        </div>
    </nav>
   
    @yield("content")
    
    
    <footer style="background-color:#1D6F6F;padding:3px;margin-top:600px;">

            <center>
                <h3 style="color:white">Programacion web II - 2017</h3>
            </center>
    </footer>
</body>
</html>