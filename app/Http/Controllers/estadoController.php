<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\estadoRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Collection;
use App\estados;
use Illuminate\Support\Facades\Input;

class estadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados=estados::all();
        return view('administracion/estado',compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios/estadoConservacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(estadoRequest $request)
    {
        estados::create($request->all());
        return redirect()->route('estado.index')->with("mensaje","Se creado un nuevo estado de bien ");
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
        $estado=estados::find($id);
        return view('formularios/editarEstado',compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(estadoRequest $request, $id)
    {
        $estado=estados::find($id);
        $nombre=$estado->nombre;
        $data=Input::all();
        $estado->fill($data);
        $estado->save();

        return redirect()->route('estado.index')->with("mensaje","Se ha actualizado el estado de bien '".$nombre."'");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estado=estados::find($id);
        estados::destroy($id);
        return redirect()->route('estado.index')->with("mensaje","Se borrado el estado de bien '".$estado->nombre."'");
    }
}
