<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\descriptorRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Collection;
use App\descriptores;
use Illuminate\Support\Facades\Input;

class descriptorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descriptores=descriptores::all();
        return view('administracion/descriptor',compact('descriptores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios/descriptor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(descriptorRequest $request)
    {
        descriptores::create($request->all());
        return redirect()->route('descriptor.index')->with("mensaje","Se creado un nuevo descriptor de bien ");
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
        $descriptor=descriptores::find($id);
        return view('formularios/editarDescriptor',compact('descriptor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(descriptorRequest $request, $id)
    {
        $descriptor=descriptores::find($id);
        $nombre=$descriptor->nombre;
        $data=Input::all();
        $descriptor->fill($data);
        $descriptor->save();

        return redirect()->route('descriptor.index')->with("mensaje","Se ha actualizado el descriptor de bien '".$nombre."'");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $descriptor=descriptores::find($id);
        descriptores::destroy($id);
        return redirect()->route('descriptor.index')->with("mensaje","Se borrado el descriptor de bien '".$descriptor->nombre."'");
    }
}
