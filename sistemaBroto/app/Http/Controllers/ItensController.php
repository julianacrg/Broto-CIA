<?php

namespace App\Http\Controllers;

use App\Itens;
use Illuminate\Http\Request;

class ItensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $It = Itens:: orderBy('nome')->get();
         return view('cadastrarItens')->with('Itens',$It);
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
        "preco" => "required",
        "tipo" => "required",
        "categoria" => "required",
        

      ]);
      if($validacao->fails()){
        return redirect()->back()->withErrors($validacao)->withInput();
      }else {
        Itens::create($request->all());
      }

      Itens::create($request->all());
      session()->flash('mensagem', 'Item cadastrado com sucesso!');

      return view('cadastrarItens');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Itens  $itens
     * @return \Illuminate\Http\Response
     */
    public function show(Itens $itens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Itens  $itens
     * @return \Illuminate\Http\Response
     */
    public function edit(Itens $itens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Itens  $itens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itens $itens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itens  $itens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itens $itens)
    {
        //
    }
}
