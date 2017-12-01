@extends('layouts.baseLog')
@section('content')

    <center><h2 style="color:green">Descriptores</h2></center>
    <br><br>
    <a href="{{route('descriptor.create')}}"><button style="margin-left:10px" class="btn btn-success">Nuevo descriptor</button></a>
    <br>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre descriptor</th>
        <th>Descripcion</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($descriptores as $descriptor)
      <tr>
        <td>{{$descriptor->nombre}}</td>
        <td>{{$descriptor->descripcion}}</td>
        <td>            
            <a href="{{route('descriptor.edit',$descriptor->id)}}" style="display:inline-block"><button class="btn btn-success">Modificar</button></a>
            {{  Form::open(array('route' => array('descriptor.destroy', $descriptor->id), 'method' => 'delete','style'=>'display:inline-block'))}}
               {!! Form::submit('Borrar', ['class' => 'btn btn-danger'],['onclick'=>'return confirm("borrar?")']) !!}
            {{ Form::close() }}          
        </td>
      </tr>
      @endforeach      
    </tbody>
    </table>    

@endsection