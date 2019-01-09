<?php

namespace App\Http\Controllers;

use App\ItensArranjos;
use Illuminate\Http\Request;
use App\Arranjos;
use App\Itens;
use Auth;
use Illuminate\Support\Facades\DB;


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
      session()->flash('mensagem', 'Itens do arranjo cadastrado com sucesso!');
      $ultimo = Arranjos:: all()->last();
      $It = Itens:: orderBy('nome')->get();

      $itens = DB::table('itens')->join('itens_arranjos', 'itens_arranjos.itens_id', '=', 'itens.id')
      ->where('itens_arranjos.arranjos_id','=', $ultimo->id)
      ->select('itens.*', 'itens_arranjos.id_itens_arranjos','itens_arranjos.qtd_itens')->get();

      return view('cadastrarItensArranjos')->with('Arranjos', $ultimo)->with('Itens', $It)->with('Tb',$itens);
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
    public function destroy($itensArranjos)
    {

        $task = ItensArranjos::where('id_itens_arranjos','=',$itensArranjos);
        $task->delete();

        $ultimo = Arranjos:: all()->last();
        $It = Itens:: orderBy('nome')->get();
        // $ultimo1 = ItensArranjos:: all()->last();
        session()->flash('mensagem', 'Itens do arranjo deletado com sucesso!');


        $itens = DB::table('itens')->join('itens_arranjos', 'itens_arranjos.itens_id', '=', 'itens.id')
        ->where('itens_arranjos.arranjos_id','=', $ultimo->id)
        ->select('itens.*', 'itens_arranjos.id_itens_arranjos')->get();
        return view('cadastrarItensArranjos')->with('Arranjos', $ultimo)->with('Itens', $It)->with('Tb',$itens);
    }
}
