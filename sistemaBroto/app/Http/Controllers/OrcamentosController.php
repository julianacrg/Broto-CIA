<?php

namespace App\Http\Controllers;

use App\Orcamentos;
use Illuminate\Http\Request;

class OrcamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $orcamentos = Orcamentos:: orderBy('evento')->get();
         return view('cadastrarOrçamento')->with('Orçamentos',$orcamentos);
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

      return view('cadastrarOrçamento');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orcamentos  $orcamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Orcamentos $orcamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orcamentos  $orcamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Orcamentos $orcamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orcamentos  $orcamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orcamentos $orcamentos)
    {
      $orcamentos->fill($request->all());
      $orcamentos->save();
      $request->session()->flash('mensagem', 'Orcamentos atualizado com sucesso!');
      return redirect()->route('cadastrarOrçamento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orcamentos  $orcamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orcamentos $orcamentos)
    {
      $orcamentos->delete();
      session()->flash('mensagem','Orcamentos excluido com sucesso');
      return redirect()->route('cadastrarOrçamento');
    }
}
