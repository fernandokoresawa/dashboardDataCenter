<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Historico;
use App\Sensor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $historicos = Historico::all();

        $corrente = Sensor::find(1);
        $tensao = Sensor::find(2);
        $temperatura = Sensor::find(3);
        $umidade = Sensor::find(4);
        $gas = Sensor::find(5);

        return view('layouts.logado', compact('historicos', 'corrente', 'tensao', 'temperatura', 'umidade', 'gas'));
    }

    public function notificacoes()
    {
        return view('notificacoes');
    }
}
