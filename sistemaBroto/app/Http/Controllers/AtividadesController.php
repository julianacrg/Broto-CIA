<?php

namespace App\Http\Controllers;

use App\Atividades;
use App\Funcionarios;
use App\Arranjos;
use Illuminate\Http\Request;

class AtividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $funcionario = Funcionarios:: orderBy('nome')->get();
      $arranjos = Arranjos:: orderBy('nome')->get();
         return view('Atividades')->with('Funcionario',$funcionario)->with('Arranjos',$arranjos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $valortotal = Funcionarios::join('atividades', 'atividades.funcionarios_id', '=','funcionarios.id' )->get()
        ->select('atividades.*')->get();
        return view('listarAtividades')->with( 'valortotal', $valortotal);
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
     * @param  \App\Atividades  $atividades
     * @return \Illuminate\Http\Response
     */
    public function show(Atividades $atividades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atividades  $atividades
     * @return \Illuminate\Http\Response
     */
    public function edit(Atividades $atividades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atividades  $atividades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atividades $atividades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atividades  $atividades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atividades $atividades)
    {
        //
    }
}
