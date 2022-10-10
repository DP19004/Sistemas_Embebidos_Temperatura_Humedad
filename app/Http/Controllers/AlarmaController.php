<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alarma;

class AlarmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alarmas = Alarma::all();

        return view('alarma.index')->with('alarmas', $alarmas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("alarma.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alarmas = new Alarma();

        $alarmas->nombre = $request->get('nombre');
        $alarmas->temperaturaMax = $request->get('temperaturaMax');
        $alarmas->temperaturaMin = $request->get('temperaturaMin');
        $alarmas->humedadMax = $request->get('humedadMax');
        $alarmas->humedadMin = $request->get('humedadMin');
        $alarmas->importancia = $request->get('importancia');
        $alarmas->status = $request->get('status');
        $alarmas->recomendacion = $request->get('recomendacion');

        $alarmas->save();

        return redirect('/alarmas');
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
