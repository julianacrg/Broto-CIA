<?php

namespace App\Http\Controllers;

use App\Itens_Arranjos;
use Illuminate\Http\Request;

class Itens_ArranjosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
      Itens_Arranjos::create($request->all());
      session()->flash('mensagem', 'Itens do araanjo cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Itens_Arranjos  $itens_Arranjos
     * @return \Illuminate\Http\Response
     */
    public function show(Itens_Arranjos $itens_Arranjos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Itens_Arranjos  $itens_Arranjos
     * @return \Illuminate\Http\Response
     */
    public function edit(Itens_Arranjos $itens_Arranjos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Itens_Arranjos  $itens_Arranjos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itens_Arranjos $itens_Arranjos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itens_Arranjos  $itens_Arranjos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itens_Arranjos $itens_Arranjos)
    {
        //
    }
}
