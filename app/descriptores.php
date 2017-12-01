<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\bienes;

class descriptores extends Model
{
    protected $fillable= [
        'nombre','descripcion'
    ];

    public function bienes(){
        
        return $this->belongsToMany('App\descriptores','bienes_descriptores');
        
    }
}
