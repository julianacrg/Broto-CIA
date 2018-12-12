<?php

namespace App\Http\Controllers;

use App\Arranjos;
use App\Itens;
use Illuminate\Http\Request;

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
      Arranjos::create($request->all());
      session()->flash('mensagem', 'Arranjo cadastrado com sucesso!');

      return view('cadastrarArranjo');
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
