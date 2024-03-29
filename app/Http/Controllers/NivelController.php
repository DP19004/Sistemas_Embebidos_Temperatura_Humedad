<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alarma;
use App\Models\Cultivo;
use App\Models\Zona;
use Illuminate\Support\Facades\Auth;
use App\Models\Temperatura;



class NivelController extends Controller
{
    /**
     * create a new controller instance
     *
     * @return voidagre
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin', ['only' => 'index']);
    }

    /**
     * show the aplication dashboard
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $alarmas = Alarma::all();
        $cultivos = Cultivo::all();
        $zonas = Zona::all();

        $temps = Temperatura::all();

        $puntos = [];
        foreach($temps as $temp) {
            $puntos[] = doubleval($temp['valor']);
        }

        return view('dashboard')
            ->with('alarmas', $alarmas)
            ->with('zonas', $zonas)
            ->with('cultivos', $cultivos)
            ->with("data", $puntos);
    }

    public function getViewer()
    {
        $alarmas = Alarma::all();
        $cultivos = Cultivo::all();
        $zonas = Zona::all();

        return view('usuario_n2/viewer')
            ->with('alarmas', $alarmas)
            ->with('zonas', $zonas)
            ->with('cultivos', $cultivos);
    }
}
