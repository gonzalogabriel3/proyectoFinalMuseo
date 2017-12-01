<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materiales extends Model
{
    protected $fillable= [
        'nombre','descripcion'
    ];

    public function bien(){
        
        return $this->hasMany('App\bienes');
        
    }

}
