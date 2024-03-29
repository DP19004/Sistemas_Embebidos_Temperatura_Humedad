<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;
use App\Models\KitSensores;
use App\Models\Alarma;
use App\Models\Cultivo;
//use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class ZonaController extends Controller
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
        $zonas = Zona::all();
        $alarmas = Alarma::all();
        $cultivos = Cultivo::all();

        // para crear la data necesaria para los graficos, no parece presentar errores esta parte

        //$chart = new LaravelChart($chart_options);


        /*
        $puntos = [];
        foreach($zonas as $z){
            $puntos[] = ['name'=>$z['nombre'], 'y'=>floatval($z['latitud'])];
        }
        */
        return view('Zonas.IndexZonas',/*compact('chart')*/)
            ->with('zonas', $zonas)
            //->with(['data'=> json_encode($puntos)])
            ->with('alarmas', $alarmas)
            ->with('cultivos', $cultivos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonas = Zona::all();
        $kits = KitSensores::where('status', '0')->get();

        $alarmas = Alarma::all();
        $cultivos = Cultivo::all();
        $i = 0;
        foreach ($kits as $k) {
            $i++;
        }
        if ($i == 0) {
            $mensaje = ('para añadir una nueva zona primero debe registrar un nuevo kit de sensores');
        } else {
            $mensaje = ('');
        }
        //
        return view('Zonas.create')
            ->with('alarmas', $alarmas)
            ->with('kits', $kits)
            ->with('zonas', $zonas)
            ->with('cultivos', $cultivos)
            ->with('mensaje', $mensaje);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cultivo = Cultivo::find($request->get('Id_Cultivo'));
        $sensor = KitSensores::find($request->get('Id_Kit'));
        $request->validate([
            'Nombre' => ['required'],
            'Latitud' => ['required', 'numeric', 'min:0'],
            'Longitud' => ['required', 'numeric', 'min:0'],
            'PeriodoDeRegistro' => ['required', 'numeric', 'min:0'],
            'Id_Kit' => ['required'],
            'Id_Cultivo' => ['required']
        ]);
        //
        $zonas_edit = Zona::where('editado', '0')->get();

        foreach($zonas_edit as $zona_edit)
        {
            if($zona_edit->editado==0)
            {
                $zona = Zona::find($zona_edit->id);
                $zona->nombre = $request->get('Nombre');
                $zona->latitud = $request->get('Latitud');
                $zona->longitud = $request->get('Longitud');
                $zona->periodoDeRegistro = $request->get('PeriodoDeRegistro');
                $zona->id_Kit = $request->get('Id_Kit');
                $zona->id_Cultivo = $request->get('Id_Cultivo');
                $zona->editado= 1;
                $sensor->status = 1;
                $cultivo->status =1;
                $sensor->save();
                $cultivo->save();
                $zona->save();
                return redirect('/Zonas');
            }
    }
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
        $zona = Zona::find($id);
        $kits = KitSensores::where('status', '0')->get();
        $alarmas = Alarma::all();
        $cultivos = Cultivo::all();

        return view('Zonas.editZonas')
        ->with('alarmas', $alarmas)
        ->with('zona', $zona)
        ->with('cultivos', $cultivos)
        ->with('kits', $kits);
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
        $zona = Zona::find($id);
        $sensor = KitSensores::find($request->get('Id_Kit'));
        $sp =KitSensores::all();
        $cultivo = Cultivo::find($request->get('Id_Cultivo'));
        $cp= cultivo::all();

        $request->validate([
            'Nombre' => ['required'],
            'Latitud' => ['required'],
            'Longitud' => ['required'],
            'PeriodoDeRegistro' => ['required'],
            'Id_Kit' => ['required'],
            'Id_Cultivo' => ['required']
        ]);


        foreach($sp as $s){
            if($sensor->id == $s->id){
                $s->status ='1';
                $s->save();
            }
            else{
                $s->status ='0';
                $s->save();
            }
        }
        foreach($cp as $c){
            if($cultivo->id== $c->id){
                $c->status ='1';
                $c->save();
            }
            else{
                $c->status ='0';
                $c->save();
            }
        }


        $zona->nombre = $request->get('Nombre');
        $zona->latitud = $request->get('Latitud');
        $zona->longitud = $request->get('Longitud');
        $zona->periodoDeRegistro = $request->get('PeriodoDeRegistro');
        $zona->id_Kit = $request->get('Id_Kit');
        $zona->id_Cultivo = $request->get('Id_Cultivo');
        $cultivo->status ='1';
        $sensor->status ='1';
        $sensor->save();
        $zona->save();
        $cultivo->save();
        return redirect('/Zonas');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zona = Zona::find($id);
        $cultivo = Cultivo:: find($zona->id_Cultivo);
        $sensor = KitSensores::find($zona->id_Kit);
        $sensor->status = '0';
        $cultivo->status='0';

        $cultivo->save();
        $sensor->save();
        $zona->delete();
        return redirect('/Zonas');
    }
}
