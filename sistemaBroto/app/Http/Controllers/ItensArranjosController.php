<?php

namespace App\Http\Controllers;

use App\ItensArranjos;
use Illuminate\Http\Request;
use App\Arranjos;
use App\Itens;
use Auth;


class ItensArranjosController extends Controller
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
      ItensArranjos::create($request->all());

      $ultimo = Arranjos:: all()->last();
      $It = Itens:: orderBy('nome')->get();

      // dd($tabela);


      session()->flash('mensagem', 'Itens do arranjo cadastrado com sucesso!');
      return view('cadastrarItensArranjos')->with('Arranjos', $ultimo)->with('Itens', $It)->with('Tabela', $tabela);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItensArranjos  $itensArranjos
     * @return \Illuminate\Http\Response
     */
    public function show(ItensArranjos $itensArranjos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItensArranjos  $itensArranjos
     * @return \Illuminate\Http\Response
     */
    public function edit(ItensArranjos $itensArranjos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItensArranjos  $itensArranjos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItensArranjos $itensArranjos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItensArranjos  $itensArranjos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItensArranjos $itensArranjos)
    {
        //
    }
}
