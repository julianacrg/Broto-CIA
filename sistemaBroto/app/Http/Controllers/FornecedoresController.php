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
      $forn = Fornecedores::where('status', '=', '1')->paginate(10);
        return view ('listarFornecedores', compact('forn'));
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
        "cpf" => "required|unique:fornecedores"

        ]);

        if ($validacao->fails()) {
          return redirect()->back()->withErrors($validacao)->withInput();
        }
        else {
          Fornecedores::create($request->all());
          session()->flash('mensagem', 'Fornecedor Cadastrado com sucesso!');

          return view('cadastrarFornecedor');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $forn = Fornecedores::where('status', '=', '0')->paginate(10);
        return view ('listarFornecedoresApagados', compact('forn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function edit($fornecedores)
    {
      $forn= Fornecedores::find($fornecedores);


      return view('editarFornecedor',compact('forn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fornecedores)
    {
      $fornecedores = Fornecedores::findOrFail($fornecedores);
      $fornecedores->fill($request->all());
      $fornecedores->save();
      $request->session()->flash('mensagem', 'Fornecedore atualizado com sucesso!');
      if ($fornecedores->status == 1) {
        session()->flash('mensagem','Fornecedore atualizado com sucesso');
        return redirect()->route('Fornecedores.create');
      }else {
        session()->flash('mensagem','Fornecedore atualizado com sucesso');
        return redirect()->route('Fornecedores.show',1);
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($fornecedores)
    {
      $task = Fornecedores::findOrFail($fornecedores);
      if ($task->status == 1) {
        $task->status = 0;
        session()->flash('mensagem','Fornecedore removido com sucesso');
      }else {
        $task->status = 1;
        session()->flash('mensagem','Fornecedore restaurado com sucesso');
      }


      $task->save();

      return redirect()->route('Fornecedores.create');
    }
}
