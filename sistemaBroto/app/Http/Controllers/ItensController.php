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

      $itens = Itens::where('itens.status', '=', 1)->orderBy('nome')->paginate(10);
         return view('listarItem')->with('Itens',$itens);
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
      $itens = Itens::where('itens.status', '=', 0)->orderBy('nome')->paginate(10);
          return view('listarItemApagados')->with('Itens',$itens);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Itens  $itens
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Orca= Itens::find($id);


      return view('editarItem')->with('Itens', $Orca);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Itens  $itens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $itens)
    {


        $itens = Itens::findOrFail($itens);
        $itens->fill($request->all());
        $itens->save();
        session()->flash('mensagem', 'Item editado com sucesso!');
        return redirect()->route('Itens.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itens  $itens
     * @return \Illuminate\Http\Response
     */
    public function destroy($itens)
    {
      $task = Itens::findOrFail($itens);
      if ($task->status == 1) {
        $task->status = 0;
      }else {
        $task->status = 1;
      }


      $task->save();

      session()->flash('mensagem','Item excluido com sucesso');
      return redirect()->route('Itens.create');
    }
}
