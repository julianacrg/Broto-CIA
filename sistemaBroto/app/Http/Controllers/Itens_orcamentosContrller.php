<?php

namespace App\Http\Controllers;

use App\Itens_Orcamentos;
use Illuminate\Http\Request;

class Itens_orcamentosContrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Itens_orc = Orcamentos:: orderBy('id_itens_orcamentos')->get();

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
     * @param  \App\Itens_Orcamentos  $itens_Orcamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Itens_Orcamentos $itens_Orcamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Itens_Orcamentos  $itens_Orcamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Itens_Orcamentos $itens_Orcamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Itens_Orcamentos  $itens_Orcamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itens_Orcamentos $itens_Orcamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itens_Orcamentos  $itens_Orcamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itens_Orcamentos $itens_Orcamentos)
    {
        //
    }
}
