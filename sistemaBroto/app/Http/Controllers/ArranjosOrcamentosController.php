<?php

namespace App\Http\Controllers;

use App\ArranjosOrcamentos;
use Illuminate\Http\Request;
use App\Orcamentos;
use App\Arranjos;
use App\Itens;
use Auth;
class ArranjosOrcamentosController extends Controller
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
      $It = Itens:: orderBy('nome')->get();
      $arranjos = Arranjos:: orderBy('nome')->get();
      $ultimo = Orcamentos:: all()->last();

      ArranjosOrcamentos::create($request->all());
      session()->flash('mensagem', 'Cadastrado com sucesso!')->with('Orcamentos', $ultimo)->with('Arranjos', $arranjos)->with('Itens', $It);
      return view('cadastrarOrcamentos2');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArranjosOrcamentos  $arranjosOrcamentos
     * @return \Illuminate\Http\Response
     */
    public function show(ArranjosOrcamentos $arranjosOrcamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArranjosOrcamentos  $arranjosOrcamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(ArranjosOrcamentos $arranjosOrcamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArranjosOrcamentos  $arranjosOrcamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArranjosOrcamentos $arranjosOrcamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArranjosOrcamentos  $arranjosOrcamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArranjosOrcamentos $arranjosOrcamentos)
    {
        //
    }
}
