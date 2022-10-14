<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;
use App\Models\KitSensores;
use App\Models\Alarma;

class ZonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zonas = Zona::all();


        return view('Zonas.indexZonas')->with('zonas',$zonas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonas = Zona::all();
        $kits = KitSensores::all();
        $alarmas =Alarma::all();
        //
        return view('Zonas.create')->with('kits',$kits)->with('alarmas',$alarmas)->with('zonas',$zonas);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre'=> ['required'],
            'Latitud'=> ['required'],
            'Longitud'=> ['required'],
            'PeriodoDeRegistro'=> ['required'],
            'Id_Kit'=> ['required'],
            'Id_Alarma'=> ['required']
        ]);
        //
        $zonas = new Zona();
        $zonas->id = $request->get('id');
        $zonas->nombre = $request->get('Nombre');
        $zonas->latitud = $request->get('Latitud');
        $zonas->longitud = $request->get('Longitud');
        $zonas->periodoDeRegistro = $request->get('PeriodoDeRegistro');
        $zonas->id_Kit = $request->get('Id_Kit');
        $zonas->id_Alarma = $request->get('Id_Alarma');


        $zonas->save();
        return redirect('/Zonas');
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
