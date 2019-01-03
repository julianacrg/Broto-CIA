<?php

namespace App\Http\Controllers;

use App\ItensOrcamentos;
use Illuminate\Http\Request;
use App\Orcamentos;
use App\Arranjos;
use App\Itens;
use Auth;
use Illuminate\Support\Facades\DB;
class ItensOrcamentosController extends Controller
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

      ItensOrcamentos::create($request->all());

      $ultItem1 = DB::table('arranjos')->join('arranjos_orcamentos', 'arranjos_orcamentos.arranjos_id', '=', 'arranjos.id')
      ->where('arranjos_orcamentos.orcamentos_id','=', $ultimo->id)
      ->select('arranjos.*', 'arranjos_orcamentos.id_arranjos_orcamentos','arranjos_orcamentos.qtd_arranjos')->get();

      $ultItem = DB::table('itens')->join('itens_orcamentos', 'itens_orcamentos.itens_id', '=', 'itens.id')
      ->where('itens_orcamentos.orcamentos_id','=', $ultimo->id)
      ->select('itens.*', 'itens_orcamentos.id_itens_orcamentos','itens_orcamentos.qtd_itens')->get();




      session()->flash('mensagem', 'Cadastrado com sucesso!');
      return view('cadastrarOrcamentos2')->with('Orcamentos', $ultimo)->with('Arranjos', $arranjos)->with('Itens', $It)->with('ultItem1', $ultItem1)->with('ultItem', $ultItem);

      if ($request->fails()) {
        return view('cadastrarOrcamentos2')->with('Orcamentos', $ultimo)->with('Arranjos', $arranjos)->with('Itens', $It)->with('ultItem1', $ultItem1)
                        ->with('ultItem', $ultItem)
                        ->withErrors($request)
                        ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItensOrcamentos  $itensOrcamentos
     * @return \Illuminate\Http\Response
     */
    public function show(ItensOrcamentos $itensOrcamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItensOrcamentos  $itensOrcamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(ItensOrcamentos $itensOrcamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItensOrcamentos  $itensOrcamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItensOrcamentos $itensOrcamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItensOrcamentos  $itensOrcamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItensOrcamentos $itensOrcamentos)
    {
        //
    }
}
