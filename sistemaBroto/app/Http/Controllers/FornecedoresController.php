<?php

namespace App\Http\Controllers;

use App\Fornecedores;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cadastrarFornecedor');
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
      Fornecedores::create($request->all());
      session()->flash('mensagem', 'Fornecedor Cadastrado com sucesso!');

      return view('cadastrarFornecedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function show(Fornecedores $fornecedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function edit(Fornecedores $fornecedores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornecedores $fornecedores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fornecedores $fornecedores)
    {
        //
    }
}
