<?php

namespace App\Http\Controllers;

use App\Arranjos;
use App\Itens;
use Illuminate\Http\Request;
use App\ItensArranjos;
use Auth;
use Illuminate\Support\Facades\DB;

class ArranjosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $arranjos = Arranjos:: orderBy('nome')->get();
      $It = Itens:: orderBy('nome')->get();
         return view('cadastrarArranjo')->with('Arranjos',$arranjos)->with('Itens', $It);
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
        "nome" => "required",
        "categoria" => "required",
        ]);


        if($validacao->fails()){
          return redirect()->back()->withErrors($validacao)->withInput();
        }else {
          Arranjos::create($request->all());
        }



      session()->flash('mensagem', 'Arranjo cadastrado com sucesso!');


      $It = Itens:: orderBy('nome')->get();
      $ultimo = Arranjos:: all()->last();
      $itens= DB::table('itens')->join('itens_arranjos', 'itens_arranjos.itens_id', '=', 'itens.id')
      ->where('itens_arranjos.arranjos_id','=', $ultimo->id)
      ->select('itens.nome', 'itens.preco', 'itens.tipo')->get();


      return view('cadastrarItensArranjos')->with('Arranjos', $ultimo)->with('Itens', $It)->with('Tb',$itens);


      // return view('cadastrarItensArranjos')->with(compact('Arranjos'))->with('Itens', $It);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Arranjos  $arranjos
     * @return \Illuminate\Http\Response
     */
    public function show(Arranjos $arranjos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Arranjos  $arranjos
     * @return \Illuminate\Http\Response
     */
    public function edit(Arranjos $arranjos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Arranjos  $arranjos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arranjos $arranjos)
    {
      $arranjos->fill($request->all());
      $arranjos->save();
      $request->session()->flash('mensagem', 'Arranjos atualizado com sucesso!');
      return redirect()->route('test.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Arranjos  $arranjos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arranjos $arranjos)
    {
      $arranjos->delete();
      session()->flash('mensagem','Arranjo excluido com sucesso');
      return redirect()->route('arranjos.index');
    }
}
