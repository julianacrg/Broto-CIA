<?php

namespace App\Http\Controllers;

use App\Orcamentos;
use App\Arranjos;
use App\Itens_Orcamentos;

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
      $arranjos = Arranjos:: orderBy('nome')->get();
         return view('cadastrarOrcamento')->with('Orçamentos',$orcamentos)->with('Arranjos',$arranjos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $orcamentos = Orcamentos:: orderBy('evento')->get();
         return view('listarOrcamento')->with('Orçamentos',$orcamentos);

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

      return view('cadastrarOrcamento');
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
    public function edit( Orcamentos $id)
    {

     $orcamentos = \App\Orcamentos::find($id);
       return view('editarOrcamneto',compact('Orcamentos','id'));
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
      return redirect()->route('cadastrarOrcamento');
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
      return redirect()->route('cadastrarOrcamento');
    }
}
