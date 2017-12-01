@extends('layouts.baseLog')
@section('content')

    <center><h2 style="color:green">Estados</h2></center>
    <br><br>
    <a href="{{route('estado.create')}}"><button style="margin-left:10px" class="btn btn-success">Nuevo estado</button></a>
    <br>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre estado</th>
        <th>Descripcion</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($estados as $estado)
      <tr>
        <td>{{$estado->nombre}}</td>
        <td>{{$estado->descripcion}}</td>
        <td>            
            <a href="{{route('estado.edit',$estado->id)}}" style="display:inline-block"><button class="btn btn-success">Modificar</button></a>
            {{  Form::open(array('route' => array('estado.destroy', $estado->id), 'method' => 'delete','style'=>'display:inline-block'))}}
               {!! Form::submit('Borrar', ['class' => 'btn btn-danger'],['onclick'=>'return confirm("borrar?")']) !!}
            {{ Form::close() }}          
        </td>
      </tr>
      @endforeach      
    </tbody>
    </table>    

@endsection