@extends('layouts.baseLog')
@section('content')

<center><h1 style="color:#09A454">Nuevo Bien Documental</h1></center>

<!--Valido si hubo algun error y si hay lo muestro por pantalla-->
@if(count($errors)>0)
    <div class="alert alert-danger">
      <h5>Se encontraron {{count($errors)}} errores</h5>           
    </div>
@endif

<!--FORMULARIO-->
{{Form::open(array('route'=>'bien.store','files'=>true,'class'=>'container','enctype'=>'multipart/form-data'))}}
      {{Form::token()}}
      <!--Tipo-->
      <div class="form-group">
          {!!Form::label('tipo','Tipo')!!}
          <select name="tipo_id" id='tipo' class="form-control">
            @foreach($tipos as $tipo)
                <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
            @endforeach
          </select>
          @if($errors->first('tipo')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('tipo')}}</b>
            </div>
          @endif
      </div>
      <!--Autor-->
      <div class="form-group">
          {!!Form::label('autor','Autor')!!}
          {!!Form::text('autor',$value=null,['class'=>"form-control"])!!}
          @if($errors->first('autor')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('autor')}}</b>
            </div>
          @endif
      </div>
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
      <!--Lugar-->
      <div class="form-group">
          {!!Form::label('lugar','Lugar')!!}
          {!!Form::text('lugar',$value=null,['class'=>"form-control"])!!}
          @if($errors->first('lugar')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('lugar')}}</b>
            </div>
          @endif
      </div>
      <!--Fecha-->
      <div class="form-group">
          {!!Form::label('fecha','Fecha')!!}
          {!!Form::date('fecha',\Carbon\Carbon::now(),['class'=>"form-control"])!!}
          @if($errors->first('fecha')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('fecha')}}</b>
            </div>
          @endif
      </div>    
      <!--Tomo-->
      <div class="form-group">
          {!!Form::label('tomo','Tomo')!!}
          {!!Form::number('tomo',$value=null,['class'=>"form-control"])!!}
          @if($errors->first('tomo')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('tomo')}}</b>
            </div>
          @endif
      </div>
      <!--Folio-->
      <div class="form-group">
          {!!Form::label('folio','Folio')!!}
          {!!Form::number('folio',$value=null,['class'=>"form-control"])!!}
          @if($errors->first('folio')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('folio')}}</b>
            </div>
          @endif
      </div>
      <!--Paginas-->
      <div class="form-group">
          {!!Form::label('paginas','Paginas')!!}
          {!!Form::number('paginas',$value=null,['class'=>"form-control"])!!}
          @if($errors->first('paginas')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('paginas')}}</b>
            </div>
          @endif
      </div>
      <!--Legajo-->
      <div class="form-group">
          {!!Form::label('legajo','Legajo')!!}
          {!!Form::number('legajo',$value=null,['class'=>"form-control"])!!}
          @if($errors->first('legajo')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('legajo')}}</b>
            </div>
          @endif
      </div>
      <!--Material-->
      <div class="form-group">
          {!!Form::label('material','Material')!!}
          <select name='material_id' id='material' class="form-control">
            @foreach($materiales as $material)
                <option value="{{$material->id}}">{{$material->nombre}}</option>
            @endforeach
          </select>
          @if($errors->first('material_id')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('material')}}</b>
            </div>
          @endif
      </div>
        <!--Completo-->
        <label for="#">Completo</label>
        <div>
            <label class="radio-inline"><input type="radio" name="completo" value="si">Si</label>
            <label class="radio-inline"><input type="radio" name="completo" value="no">No</label>
            @if($errors->first('completo')!='')      
            <div class="alert alert-danger">
                <b>{{$errors->first('completo')}}</b>
            </div>
            @endif
        </div>
        <br>
      <!--Procedencia-->
      <div class="form-group">
          {!!Form::label('procedencia','Procedencia')!!}
          {!!Form::text('procedencia',$value=null,['class'=>"form-control"])!!}
          @if($errors->first('procedencia')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('procedencia')}}</b>
            </div>
          @endif
      </div>
      <!--Estado de conservacion-->
      <div class="form-group">
          {!!Form::label('estado','Estado de conservacion')!!}          
          <select name="estado_id" id='estado' class="form-control">
            @foreach($estados as $estado)
                <option value="{{$estado->id}}">{{$estado->nombre}}</option>
            @endforeach
          </select>
          @if($errors->first('estado')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('estado')}}</b>
            </div>
          @endif
      </div>
      <!--Foto-->
      <div class="form-group">
          {!!Form::label('files','Foto')!!}
          <input type="file" id="files" name="foto" required/>
            <br>
          <output id="list"></output>
          @if($errors->first('foto')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('foto')}}</b>
            </div>
          @endif
      </div>
      <!--Fotografo-->
      <div class="form-group">
          {!!Form::label('fotografo','Fotografo')!!}
          {!!Form::text('fotografo',$value=null,['class'=>"form-control"])!!}
          @if($errors->first('fotografo')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('fotografo')}}</b>
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
      <!--Descriptores-->
        {!!Form::label('#','Descriptores')!!}
        <div>
        @foreach($descriptores as $descriptor)
        <label class="checkbox-inline"><input type="checkbox" name="descriptores[]" value="{{$descriptor->id}}">{{$descriptor->nombre}}</label>
        @endforeach
        @if($errors->first('desc')!='')      
        <div class="alert alert-danger">
            <b>{{$errors->first('desc')}}</b>
        </div>
        @endif
        </div>
        <br>
      <!--Observacion-->
      <div class="form-group">
          {!!Form::label('observacion','Observaciones')!!}
          {!!Form::textarea('observacion',$value=null,['class'=>"form-control",'rows'=>3])!!}
          @if($errors->first('observacion')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('observacion')}}</b>
            </div>
          @endif
      </div>

      <center>{!!Form::submit('Crear Bien Documental',['class'=>'btn btn-info'])!!}</center>
{{Form::close()}}
@include('layouts.mostrarImagenScript');
@endsection