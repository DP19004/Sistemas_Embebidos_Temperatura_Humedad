<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;
use App\Models\KitSensores;
use App\Models\Alarma;
use App\Models\Cultivo;

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
        //
        return view('Zonas.indexZonas')
        ->with('zonas',$zonas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonas = Zona::all();
        $kits = KitSensores::where('status','0')->get();
        //$kits = KitSensores::all();
        $alarmas = Alarma::all();
        $cultivos =Cultivo::all();
        $i =0;
        foreach($kits as $k){
            $i++;
        }
        if( $i == 0){
            $mensaje =('para añadir una nueva zona primero debe registrar un nuevo kit de sensores');
        }
        else{$mensaje =(''); }
        //
        return view('Zonas.create')
        ->with('alarmas',$alarmas)
        ->with('kits',$kits)
        ->with('zonas',$zonas)
        ->with('cultivos',$cultivos)
        ->with('mensaje',$mensaje);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sensor = KitSensores::find($request->get('Id_Kit'));
        $request->validate([
            'Nombre'=> ['required'],
            'Latitud'=> ['required'],
            'Longitud'=> ['required'],
            'PeriodoDeRegistro'=> ['required'],
            'Id_Kit'=> ['required'],
            'Id_Alarma'=> ['required'],
            'Id_Cultivo'=> ['required']
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
        $zonas->id_Cultivo = $request->get('Id_Cultivo');
        $sensor->status =1;
        $sensor->save();
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
