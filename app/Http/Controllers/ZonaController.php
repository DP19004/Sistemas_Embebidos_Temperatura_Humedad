<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;
use App\Models\KitSensores;
use App\Models\Alarma;
use App\Models\Cultivo;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

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
        

        // ...
        
        $chart_options = [
            'chart_title' => 'Zonas',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];

        $chart = new LaravelChart($chart_options);
        
        
        /*
        $puntos = [];
        foreach($zonas as $z){
            $puntos[] = ['name'=>$z['nombre'], 'y'=>floatval($z['latitud'])];
        }
        */
        return view('Zonas.indexZonas',/*compact('chart')*/)
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
        $zonas = new Zona();
        $zonas->id = $request->get('id');
        $zonas->nombre = $request->get('Nombre');
        $zonas->latitud = $request->get('Latitud');
        $zonas->longitud = $request->get('Longitud');
        $zonas->periodoDeRegistro = $request->get('PeriodoDeRegistro');
        $zonas->id_Kit = $request->get('Id_Kit');
        $zonas->id_Cultivo = $request->get('Id_Cultivo');
        $sensor->status = 1;
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

        $request->validate([
            'Nombre' => ['required'],
            'Latitud' => ['required'],
            'Longitud' => ['required'],
            'PeriodoDeRegistro' => ['required'],
            'Id_Kit' => ['required'],
            'Id_Cultivo' => ['required']
        ]);

        $zona->nombre = $request->get('Nombre');
        $zona->latitud = $request->get('Latitud');
        $zona->longitud = $request->get('Longitud');
        $zona->periodoDeRegistro = $request->get('PeriodoDeRegistro');
        $zona->id_Kit = $request->get('Id_Kit');
        $zona->id_Cultivo = $request->get('Id_Cultivo');

        $sensor->save();
        $zona->save();

        return redirect('/Zonas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zona = Zona::find($id);
        $zona->delete();
        return redirect('/Zonas');
    }
}
