<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\tipos;

class bienRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $tipos=tipos::all();
        
        return [
            'nombre'=>'required|min:3',
            'descripcion'=>'required',
            'autor'=>'required|min:3',
            'lugar'=>'required|min:3',
            'fecha'=>'required',
            //'tomo'=>'required',
            //'folio'=>'required',
            //'paginas'=>'required|min:1',
            //'legajo'=>'required',
            'material_id'=>'required',
            'completo'=>'required',
            'descripcion'=>'required',
            
            
        ];
    }

    public function messages(){
        return[
            'nombre.required'=>"El nombre es obligatorio",
            'nombre.min'=>"El nombre debe tener minimo 3 caracteres",
            'descripcion.required'=>"La descripcion es obligatoria",
            'autor.required'=>"El autor debe tener minimo 3 caracteres",
            'lugar.required'=>"El lugar debe tener minimo 3 caracteres",
            'fecha.required'=>"No se ingreso fecha valida",
            'tomo.required'=>"No se ingreso numero de tomo",
            'folio.required'=>"No se ingreso numero de folio",
            'paginas.required'=>"No se ingreso cantidad de paginas",
            'legajo.required'=>"No se ingreso legajo",
            'material_id.required'=>"Debe seleccionar un material",
            'completo.required'=>"Debe especificar si esta completo o no",
            'descripcion.required'=>"Debe ingresar una breve descripcion",
            
            

        ];
    }
}
