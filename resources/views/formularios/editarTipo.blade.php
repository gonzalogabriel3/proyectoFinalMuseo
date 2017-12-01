@extends('layouts.baseLog')

@section('content')

<center><h1 style="color:#B84535">Editar Tipo de Bien</h1></center>

<!--Valido si hubo algun error y si hay lo muestro por pantalla-->
@if(count($errors)>0)
    <div class="alert alert-danger">
      <h5>Se encontraron {{count($errors)}} errores</h5>     
    </div>
@endif
<!--FORMULARIO-->
{{Form::open(array('route'=>['tipo.update',$tipo->id],'files'=>true,'class'=>'container','method'=>'PUT'))}}
      {{Form::token()}}
      <!--Nombre-->
      <div class="form-group">
          {!!Form::label('nombre','Nombre')!!}
          {!!Form::text('nombre',$value=$tipo->nombre,['class'=>"form-control"])!!}
          @if($errors->first('nombre')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('nombre')}}</b>
            </div>
          @endif
      </div>
      <!--Descripcion-->
      <div class="form-group">
          {!!Form::label('descripcion','Descripcion')!!}
          {!!Form::textarea('descripcion',$value=$tipo->descripcion,['class'=>"form-control",'rows'=>3])!!}
          @if($errors->first('descripcion')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('descripcion')}}</b>
            </div>
          @endif
      </div>
      <center>{!!Form::submit('Guardar cambios',['class'=>'btn btn-info'])!!}</center>
{{Form::close()}}

@endsection