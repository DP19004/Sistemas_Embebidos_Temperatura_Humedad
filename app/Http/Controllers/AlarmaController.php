<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alarma;

class AlarmaController extends Controller
{

    /**
     * create a new controller instance
     *
     * @return voidagre
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin', ['only' => 'index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);
    }




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
        $alarmas->id = $request->get('id');
        $alarmas->nombre = $request->get('nombre');
        $alarmas->temperaturaMax = $request->get('temperaturaMax');
        $alarmas->temperaturaMin = $request->get('temperaturaMin');
        $alarmas->humedadMax = $request->get('humedadMax');
        $alarmas->humedadMin = $request->get('humedadMin');
        $alarmas->importancia = $request->get('importancia');
        $alarmas->status = false;
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
        $alarma = Alarma::find($id);
        return view('alarma.editarAlarma')->with('alarma', $alarma);
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
        $alarma = Alarma::find($id);

        $alarma->nombre = $request->get('nombre');
        $alarma->temperaturaMax = $request->get('temperaturaMax');
        $alarma->temperaturaMin = $request->get('temperaturaMin');
        $alarma->humedadMax = $request->get('humedadMax');
        $alarma->humedadMin = $request->get('humedadMin');
        $alarma->importancia = $request->get('importancia');
        $alarma->recomendacion = $request->get('recomendacion');

        $alarma->save();
        return redirect('/alarmas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alarma = Alarma::find($id);
        $alarma->delete();
        return redirect('/alarmas');
    }
}
