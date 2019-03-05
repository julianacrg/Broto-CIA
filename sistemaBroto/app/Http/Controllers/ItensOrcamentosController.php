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

      $data = $request->all();

      $validacao = \Validator::make($data,[
        "itens_id" => "required",
        "qtd_itens" => "required",

        ]);



      if ($validacao->fails()) {

        return view('cadastrarOrcamentos2')->with('Orcamentos', $ultimo)->with('Itens', $It)
                        ->with('ultItem', $ultItem)
                        ->withErrors($validacao)
                        ->withInput();
        }
        else {
          ItensOrcamentos::create($request->all());
          $It = Itens:: orderBy('nome')->get();
          $ultimo = Orcamentos:: all()->last();

          $ultItem = DB::table('itens')->join('itens_orcamentos', 'itens_orcamentos.itens_id', '=', 'itens.id')
          ->where('itens_orcamentos.orcamentos_id','=', $ultimo->id)
          ->select('itens.*', 'itens_orcamentos.id_itens_orcamentos','itens_orcamentos.qtd_itens')->get();
          session()->flash('mensagem', 'Cadastrado com sucesso!');

          return view('cadastrarOrcamentos2')->with('Orcamentos', $ultimo)->with('Itens', $It)->with('ultItem', $ultItem);

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
    public function destroy($itensOrcamentos)
    {
      $task = ItensOrcamentos::where('id_itens_orcamentos','=',$itensOrcamentos);
      $task->delete();
      session()->flash('mensagem', 'Excluido com sucesso!');
      $It = Itens:: orderBy('nome')->get();
      $ultimo = Orcamentos:: all()->last();
      $ultItem = DB::table('itens')->join('itens_orcamentos', 'itens_orcamentos.itens_id', '=', 'itens.id')
      ->where('itens_orcamentos.orcamentos_id','=', $ultimo->id)
      ->select('itens.*', 'itens_orcamentos.id_itens_orcamentos','itens_orcamentos.qtd_itens')->get();
      return view('cadastrarOrcamentos2')->with('Orcamentos', $ultimo)->with('Itens', $It)->with('ultItem', $ultItem);
    }
}
