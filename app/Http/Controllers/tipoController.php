<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\tipoRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Collection;
use App\tipos;
use Illuminate\Support\Facades\Input;

class tipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos=tipos::all();
        return view('administracion/tipo',compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios/tipoBien');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tipoRequest $request)
    {
        tipos::create($request->all());
        return redirect()->route('tipo.index')->with("mensaje","Se creado un nuevo tipo de bien ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo=tipos::find($id);
        return view('formularios/editarTipo',compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(tipoRequest $request, $id)
    {
        $tipo=tipos::find($id);
        $nombre=$tipo->nombre;
        $data=Input::all();
        $tipo->fill($data);
        $tipo->save();

        return redirect()->route('tipo.index')->with("mensaje","Se ha actualizado el tipo de bien '".$nombre."'");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo=tipos::find($id);
        tipos::destroy($id);
        return redirect()->route('tipo.index')->with("mensaje","Se borrado el tipo de bien '".$tipo->nombre."'");
    }
}
