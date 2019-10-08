<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Historico;
use App\Sensor;

class HistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pegar os dados do banco
        //$historicos = Historico::all();

        //mostrar na tela
        //return view('tabela.index', compact('historicos'));

        $historicos = Historico::all();

        $corrente = Sensor::find(1);
        $tensao = Sensor::find(2);
        $temperatura = Sensor::find(3);
        $umidade = Sensor::find(4);
        $gas = Sensor::find(5);

        return view('tabela.index', compact('historicos', 'corrente', 'tensao', 'temperatura', 'umidade', 'gas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
