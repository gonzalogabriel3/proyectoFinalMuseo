<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\bienRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Collection;
use App\bienes;
use App\tipos;
use App\descriptores;
use App\estados;
use App\materiales;
use Illuminate\Support\Facades\Input;
use DB;


class bienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bienes=bienes::all();
        return view('administracion/bien',compact('bienes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados=estados::all();
        $descriptores=descriptores::all();
        $tipos = tipos::all();
        $materiales=materiales::all();
        return view('formularios/bienDocumental',compact('tipos','descriptores','estados','materiales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(bienRequest $request)
    {
        //Creo un nuevo tipo del modelo bienes y le seteo todos los datos que vienen del formulario
        $bienes=new bienes($request->all());
       // $descriptores=new descriptores();
        
        //Obtengo la ruta en donde se va a guardar la imagen
        $ruta=$request->foto->store('');
        
        //Seteo la ruta en el atributo 'foto' del modelo(campo de la tabla)
        $bienes->foto=$ruta;
        
        //Guardo el nuevo bien
        $bienes->save();
        
        $bienes->descriptores()->attach($request->descriptores);

        return redirect()->route('bien.index')->with("mensaje","Se ha creado un nuevo Bien documental");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $bien=bienes::find($id);
        
        return view('bienMostrar',compact('bien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bien=bienes::find($id);
        $estados=estados::all();
        $descriptores=descriptores::all();
        $tipos = tipos::all();
        $materiales=materiales::all();
        return view('formularios/editarBienDocumental',compact('bien','estados','descriptores','tipos','materiales'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(bienRequest $request, $id)
    {
        //$descriptor=descriptores::all();
        //Obtengo el bien mediante el id    
        $bien=bienes::find($id);
        //seteto a la variable $data todos los datos del formulario
        $data=Input::all();
        //Seteo al bien todos los datos de $data
        $bien->fill($data);
        //Si se cargo una nueva imagen para el bien,obtengo la ruta en donde se va a guardar la imagen
        if(isset($request->foto)){
            $ruta=$request->foto->store('');        
            $bien->foto=$ruta;
        }
        //Guardo el bien      
        $bien->save();
        
        //Actualizo tabla intermedia
        $bien->descriptores()->sync($request->descriptores);
        
        return redirect()->route('bien.index')->with("mensaje","Se ha actualizado el bien '".$bien->nombre."' con el id ".$bien->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bien=new bienes();
        $bien=bienes::find($id);
        bienes::destroy($id);
        $bien->descriptores()->detach();
        return redirect()->route('bien.index')->with("mensaje","Se ha borrado el bien '".$bien->nombre."'");
    }
}
