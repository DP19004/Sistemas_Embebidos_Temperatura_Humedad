<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cultivo;

class CultivoController extends Controller
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
        $cultivos=Cultivo::all();
        return view('Cultivo.gestionarCultivo')->with('cultivos',$cultivos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cultivo.registrarCultivo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cultivos = new Cultivo();

        $cultivos->nombre = $request->get('nombre');
        $cultivos->TemperaturaMaxima = $request->get('temperaturaMax');
        $cultivos->TemperaturaMinima = $request->get('temperaturaMin');
        $cultivos->HumedadMaxima = $request->get('humedadMax');
        $cultivos->HumedadMinima = $request->get('humedadMin');
        $cultivos->status = false;
        $cultivos->save();

        return redirect('/cultivos');
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
        $cultivo = Cultivo::find($id);
        return view('Cultivo.editarCultivo')->with('cultivo',$cultivo);
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
        $cultivo = Cultivo::find($id);

        $cultivo->nombre = $request->get('nombre');
        $cultivo->TemperaturaMaxima = $request->get('temperaturaMax');
        $cultivo->TemperaturaMinima = $request->get('temperaturaMin');
        $cultivo->HumedadMaxima = $request->get('humedadMax');
        $cultivo->HumedadMinima = $request->get('humedadMin');
        $cultivo->save();

        return redirect('/cultivos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cultivo = Cultivo::find($id);

        if($cultivo->status == '0'){
            $cultivo->delete();
        }
        else{

        }

        return redirect('/cultivos');
    }
}
