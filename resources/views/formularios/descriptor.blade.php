@extends('layouts.baseLog')
@section('content')

<center><h1 style="color:#82B02E">Nuevo Descriptor</h1></center>

<!--Valido si hubo algun error y si hay lo muestro por pantalla-->
@if(count($errors)>0)
    <div class="alert alert-danger">
      <h5>Se encontraron {{count($errors)}} errores</h5>           
    </div>
@endif

<!--FORMULARIO-->
{{Form::open(array('route'=>'descriptor.store','files'=>true,'class'=>'container'))}}
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
      <center>{!!Form::submit('Crear descriptor',['class'=>'btn btn-info'])!!}</center>
{{Form::close()}}

@endsection