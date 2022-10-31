<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KitSensores;
use App\Models\Temperatura;
use App\Models\Humedad;


class KitSensoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kitSensores = KitSensores::all();
        return view('kitSensor.index')->with('kitSensores', $kitSensores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kitSensor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kitSensores = new KitSensores();
        $hum = new Humedad();
        $temps = new Temperatura();
        
        $hum->valor = rand(1,99);
        $hum->save();
        
        
        $temps->valor = rand(-30.00,70.00);
        $temps->save();
        
        $kitSensores->id = $request->get('id');
        $kitSensores->serialHumedad = $request->get('serialHumedad');
        $kitSensores->serialTemperatura = $request->get('serialTemperatura');
        $kitSensores->fechaColocacion = $request->get('fechaColocacion');
        $kitSensores->status = false;
        $kitSensores->save();

       return redirect('/kitSensores');
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
        $kitSensor = KitSensores::find($id);
        return view('kitSensor.edit')->with('kitSensor',$kitSensor);
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
        
        $kitSensor = KitSensores::find($id);

        
        $kitSensor->serialHumedad = $request->get('serialHumedad');
        $kitSensor->serialTemperatura = $request->get('serialTemperatura');
        $kitSensor->fechaColocacion = $request->get('fechaColocacion');

        $kitSensor->save();

       return redirect('/kitSensores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kitSensor = KitSensores::find($id);
        $kitSensor->delete();
        return redirect('/kitSensores');
    }
}
