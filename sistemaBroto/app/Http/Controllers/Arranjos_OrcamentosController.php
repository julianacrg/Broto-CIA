<?php

namespace App\Http\Controllers;

use App\Arranjo_Orcamentos;
use Illuminate\Http\Request;

class Arranjos_OrcamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      Orcamentos::create($request->all());
      session()->flash('mensagem', 'Orçamento cadastrado com sucesso!');

      return route("{{route('Orcamentos.index')}}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Arranjo_Orcamentos  $arranjo_Orcamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Arranjo_Orcamentos $arranjo_Orcamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Arranjo_Orcamentos  $arranjo_Orcamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Arranjo_Orcamentos $arranjo_Orcamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Arranjo_Orcamentos  $arranjo_Orcamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arranjo_Orcamentos $arranjo_Orcamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Arranjo_Orcamentos  $arranjo_Orcamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arranjo_Orcamentos $arranjo_Orcamentos)
    {
        //
    }
}
