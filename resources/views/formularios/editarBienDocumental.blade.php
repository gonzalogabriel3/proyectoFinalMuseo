@extends('layouts.baseLog')
@section('content')

<center><h1 style="color:#09A454">Editar Bien Documental</h1></center>

<!--Valido si hubo algun error y si hay lo muestro por pantalla-->
@if(count($errors)>0)
    <div class="alert alert-danger">
      <h5>Se encontraron {{count($errors)}} errores</h5>           
    </div>
@endif

<!--FORMULARIO-->
{{Form::open(array('route'=>['bien.update',$bien->id],'files'=>true,'class'=>'container','enctype'=>'multipart/form-data','method'=>"PUT"))}}
      {{Form::token()}}
      <!--Tipo-->
      <div class="form-group">
          {!!Form::label('tipo','Tipo')!!}
          <select name="tipo_id" id='tipo' class="form-control">
            @foreach($tipos as $tipo)
                @if($tipo->id==$bien->tipo_id)
                  <option value="{{$tipo->id}}" selected>{{$tipo->nombre}}</option>
                @else
                  <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                @endif
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
          {!!Form::text('autor',$value=$bien->autor,['class'=>"form-control"])!!}
          @if($errors->first('autor')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('autor')}}</b>
            </div>
          @endif
      </div>
      <!--Nombre-->
      <div class="form-group">
          {!!Form::label('nombre','Nombre')!!}
          {!!Form::text('nombre',$value=$bien->nombre,['class'=>"form-control"])!!}
          @if($errors->first('nombre')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('nombre')}}</b>
            </div>
          @endif
      </div>
      <!--Lugar-->
      <div class="form-group">
          {!!Form::label('lugar','Lugar')!!}
          {!!Form::text('lugar',$value=$bien->lugar,['class'=>"form-control"])!!}
          @if($errors->first('lugar')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('lugar')}}</b>
            </div>
          @endif
      </div>
      <!--Fecha-->
      <div class="form-group">
          {!!Form::label('fecha','Fecha')!!}
          {!!Form::date('fecha',$bien->fecha,['class'=>"form-control"])!!}
          @if($errors->first('fecha')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('fecha')}}</b>
            </div>
          @endif
      </div>    
      <!--Tomo-->
      <div class="form-group">
          {!!Form::label('tomo','Tomo')!!}
          {!!Form::number('tomo',$value=$bien->tomo,['class'=>"form-control"])!!}
          @if($errors->first('tomo')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('tomo')}}</b>
            </div>
          @endif
      </div>
      <!--Folio-->
      <div class="form-group">
          {!!Form::label('folio','Folio')!!}
          {!!Form::number('folio',$value=$bien->folio,['class'=>"form-control"])!!}
          @if($errors->first('folio')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('folio')}}</b>
            </div>
          @endif
      </div>
      <!--Paginas-->
      <div class="form-group">
          {!!Form::label('paginas','Paginas')!!}
          {!!Form::number('paginas',$value=$bien->paginas,['class'=>"form-control"])!!}
          @if($errors->first('paginas')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('paginas')}}</b>
            </div>
          @endif
      </div>
      <!--Legajo-->
      <div class="form-group">
          {!!Form::label('legajo','Legajo')!!}
          {!!Form::number('legajo',$value=$bien->legajo,['class'=>"form-control"])!!}
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
                @if($material->id==$bien->material_id)
                  <option value="{{$material->id}}" selected>{{$material->nombre}}</option>
                @else
                  <option value="{{$material->id}}">{{$material->nombre}}</option>
                @endif  
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
            @if($bien->completo="si")
              <label class="radio-inline"><input type="radio" name="completo" value="si" checked>Si</label>
              <label class="radio-inline"><input type="radio" name="completo" value="no">No</label>
            @else
              <label class="radio-inline"><input type="radio" name="completo" value="si">Si</label>
              <label class="radio-inline"><input type="radio" name="completo" value="no" checked>No</label>
            @endif
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
          {!!Form::text('procedencia',$value=$bien->procedencia,['class'=>"form-control"])!!}
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
                @if($estado->id==$bien->estado_id)
                  <option value="{{$estado->id}}" selected>{{$estado->nombre}}</option>
                @else
                  <option value="{{$estado->id}}">{{$estado->nombre}}</option>
                @endif
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
          <p style="color:lightblue"><b>Imagen actual del objeto</b></p>
          <img src="{{asset('imagenes/')}}/{{$bien->foto}}" width="300px" height="200px" alt="No se encontro imagen"/> 
          <p style="color:green"><b>Nueva imagen</b></p>
          <input type="file" id="files" name="foto" />
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
          {!!Form::text('fotografo',$value=$bien->fotografo,['class'=>"form-control"])!!}
          @if($errors->first('fotografo')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('fotografo')}}</b>
            </div>
          @endif
      </div>
      <!--Descripcion-->
      <div class="form-group">
          {!!Form::label('descripcion','Descripcion')!!}
          {!!Form::textarea('descripcion',$value=$bien->descripcion,['class'=>"form-control",'rows'=>3])!!}
          @if($errors->first('descripcion')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('descripcion')}}</b>
            </div>
          @endif
      </div>
      <!--Descriptores-->
        {!!Form::label('#','Descriptores')!!}
        <div>
        <?php $ids=array();
          $idDesc=0;;
        ?>
        <!--Obtengo todos los ids de los descriptores asociados a un bien-->
        @foreach($bien->descriptores as $descriptoresDelBien)
               <?php $ids[]=$descriptoresDelBien->id;?>
        @endforeach
        
        @foreach($descriptores as $descriptor)
          <?php $i=0;?>
          <!--Recorro el array de ids,para saber si el descriptor se encuentra dentro de este array-->
          @while($i<count($ids))
            @if($ids[$i]===$descriptor->id)
              <label class="checkbox-inline"><input type="checkbox" name="descriptores[]" value="{{$descriptor->id}}" checked>{{$descriptor->nombre}}</label>                                        
              <?php $idDesc=$descriptor->id; ?>
            @endif
            <?php $i++;?>
          @endwhile
          @if($descriptor->id!=$idDesc)
              <label class="checkbox-inline"><input type="checkbox" name="descriptores[]" value="{{$descriptor->id}}">{{$descriptor->nombre}}</label>                                        
          @endif
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
          {!!Form::textarea('observacion',$value=$bien->observacion,['class'=>"form-control",'rows'=>3])!!}
          @if($errors->first('observacion')!='')      
            <div class="alert alert-danger">
              <b>{{$errors->first('observacion')}}</b>
            </div>
          @endif
      </div>

      <center>{!!Form::submit('Guardar cambios',['class'=>'btn btn-info'])!!}</center>
{{Form::close()}}
@include('layouts.mostrarImagenScript')
@endsection