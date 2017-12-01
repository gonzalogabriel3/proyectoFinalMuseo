<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bienes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    //Si un usuario esta logueado
    public function index()
    {       
        $bienes=bienes::all();
        return view('index',compact('bienes'));
    }

    //Si un usuario es anonimo
    public function indexSinLog()
    {        
        $bienes=bienes::all();
        return view('indexSinLog',compact('bienes'));
    }
}
