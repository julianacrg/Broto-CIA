<?php

namespace App\Http\Controllers;

use App\Funcionarios;
use Illuminate\Http\Request;
use Auth;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $func = Funcionarios:: orderBy('nome')->get();
         return view('funcionarios')->with('Funcionarios',$func);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('funcionario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Funcionarios::create($request->all());
      session()->flash('mensagem', 'Funcionario cadastrado com sucesso!');

      return redirect()->route('Funcionarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionarios $funcionarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionarios $funcionarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionarios $funcionarios)
    {
      $func->fill($request->all());
      $func->save();
      $request->session()->flash('mensagem', 'Exame atualizado com sucesso!');
      return redirect()->route('Funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionarios $Funcionario)
    {
      $Funcionario->delete();
      session()->flash('mensagem','Exame excluido com sucesso');
      return redirect()->route('Funcionarios.index');
    }
}
