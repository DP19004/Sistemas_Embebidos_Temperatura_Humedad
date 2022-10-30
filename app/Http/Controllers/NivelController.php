<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alarma;
use App\Models\Cultivo;
use App\Models\Zona;
use Auth;



class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alarmas = Alarma::all();
        $cultivos = Cultivo::all();
        $zonas = Zona::all();
        if(Auth::user()->name=='admin')
        {
          return view('dashboard')
        ->with('alarmas', $alarmas)
        ->with('zonas',$zonas)
        ->with('cultivos',$cultivos);
        }
        else
        {
        return view('usuario_n2.index')
        ->with('alarmas', $alarmas)
        ->with('zonas',$zonas)
        ->with('cultivos',$cultivos);
    }
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
