@extends('layouts.baseLog')
@section('content')

    <center><h2 style="color:green">Tipos</h2></center>
    <br><br>
    <a href="{{route('tipo.create')}}"><button style="margin-left:10px" class="btn btn-success">Nuevo tipo</button></a>
    <br>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre Tipo</th>
        <th>Descripcion</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($tipos as $tipo)
      <tr>
        <td>{{$tipo->nombre}}</td>
        <td>{{$tipo->descripcion}}</td>
        <td>            
            <a href="{{route('tipo.edit',$tipo->id)}}" style="display:inline-block"><button class="btn btn-success">Modificar</button></a>
            {{  Form::open(array('route' => array('tipo.destroy', $tipo->id), 'method' => 'delete','style'=>'display:inline-block'))}}
               {!! Form::submit('Borrar', ['class' => 'btn btn-danger'],['onclick'=>'return confirm("borrar?")']) !!}
            {{ Form::close() }}          
        </td>
      </tr>
      @endforeach      
    </tbody>
    </table>    

@endsection
