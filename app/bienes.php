<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tipos;
use App\descriptores;
use App\estados;
use App\materiales;
use App\Observers\bienesObserver;


class bienes extends Model
{
    
    protected $table = 'bienes';
    protected $guarded=['descriptor_id'];

    protected $fillable= [
        'codigo','tipo_id','autor','nombre','lugar','fecha','tomo','folio','paginas',
        'legajo','material_id','completo','procedencia','estado_id','foto','fotografo',
        'descripcion','observacion'
    ];

    public function tipo(){

        return $this->belongsTo('App\tipos');
    }

    public function descriptores(){
        
         return $this->belongsToMany('App\descriptores','bienes_descriptores');
    }

    public function estado(){
        
         return $this->belongsTo('App\estados');
    }

    public function material(){
        
         return $this->belongsTo('App\materiales');
    }

}
