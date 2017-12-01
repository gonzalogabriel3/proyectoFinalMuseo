@extends('layouts.baseLog')
@section('content')

<center><h1 style="color:#A1C04E">Nuevo Estado de Conservacion</h1></center>

<!--Valido si hubo algun error y si hay lo muestro por pantalla-->
@if(count($errors)>0)
    <div class="alert alert-danger">
      <h5>Se encontraron {{count($errors)}} errores</h5>     
    </div>
@endif

<!--FORMULARIO-->
{{Form::open(array('route'=>'estado.store','files'=>true,'class'=>'container'))}}
      {{Form::token()}}
      <!--Nombre-->
      <div class="form-group">
          {!!Form::label('nombre','Nombre')!!}
          {!!Form::text('nombre',$value=null,['class'=>"form-control"])!!}
          @if($errors->first('nombre')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('nombre')}}</b>
            </div>
          @endif
      </div>
      <!--Descripcion-->
      <div class="form-group">
          {!!Form::label('descripcion','Descripcion')!!}
          {!!Form::textarea('descripcion',$value=null,['class'=>"form-control",'rows'=>3])!!}
          @if($errors->first('descripcion')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('descripcion')}}</b>
            </div>
          @endif
      </div>
      <center>{!!Form::submit('Crear Estado de Conservacion',['class'=>'btn btn-info'])!!}</center>
{{Form::close()}}
@endsection