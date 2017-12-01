<?php

namespace App\Observers;

use App\bienes;

class bienesObserver
{
    
    /**
     * Listen to the User deleting event.
     *
     * @param  \App\User  $user
     * @return void
     */
    /*En el momento que se crea el bien,el codigo se genera automaticamente y se guarda*/ 
    public function creating(bienes $bien)
    {
        $codigo=uniqid('COD');
        $bien->codigo=$codigo;
    }

    public function created(){
        
    }
}