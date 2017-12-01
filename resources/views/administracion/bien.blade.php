@extends('layouts.baseLog')

@section("content")

    <center><h1 style="color:blue">Bienes</h1></center>

    <br><br>
    <a href="{{route('bien.create')}}"><button style="float:right;margin-right:50px" class="btn btn-success">Nuevo bien documental</button></a>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Bien Documental</th>
        <th>N° Registro</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($bienes as $bien)
      <tr>
        <td>{{$bien->nombre}}</td>
        <td>{{$bien->id}}</td>
        <td>
            <a href="{{route('bien.show',$bien->id)}}" style="display:inline-block"><button class="btn btn-info">Mostrar</button></a>
            <a href="{{route('bien.edit',$bien->id)}}" style="display:inline-block"><button class="btn btn-success">Modificar</button></a>
            {{  Form::open(array('route' => array('bien.destroy', $bien->id), 'method' => 'delete','style'=>'display:inline-block')) }}
               {!! Form::submit('Borrar', ['class' => 'btn btn-danger'],['onclick'=>'return confirm("borrar?")']) !!}
            {{ Form::close() }}          
        </td>
      </tr>
      @endforeach      
    </tbody>
    </table>
    
@endsection