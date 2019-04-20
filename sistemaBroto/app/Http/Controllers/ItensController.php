<?php

namespace App\Http\Controllers;

use App\Itens;
use Illuminate\Http\Request;

class ItensController extends Controller
{

    public function index()
    {
      $It = Itens:: orderBy('nome')->get();
         return view('cadastrarItens')->with('Itens',$It);
    }

    public function create()
    { 
      $itens = Itens::where('itens.status', 1)->where('itens.tipo', '!=', 'peça')
      ->orderBy('nome')->paginate(10);
         return view('listarItem')->with('Itens',$itens);
    }

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
      }
      else {
        Itens::create($request->all());
      }

      session()->flash('mensagem', 'Item cadastrado com sucesso!');

      return view('cadastrarItens');
    }

    public function show(Itens $itens)
    {
      
      $itens = Itens::where('itens.status', '=', 0)->where('itens.tipo', '!=', 'peça')
      ->orderBy('nome')->paginate(10);
          return view('listarItemApagados')->with('Itens',$itens);
    }

    public function showPeca(Itens $itens)
    {
      $itens = Itens::where('itens.status', '=', 0)->where('itens.tipo', '=', 'peça')->orderBy('nome')->paginate(10);
      return view('listarPecaApagados')->with('Itens', $itens);
    }

    public function edit($id)
    {
      $it= Itens::find($id);


      return view('editarItem')->with('Itens', $it);
    }

    public function update(Request $request, $itens)
    {
      $itens = Itens::findOrFail($itens);
      $itens->fill($request->all());
      $itens->save();
        
      if ($itens->status == 0 && $itens->tipo == 'peça' ) {
        session()->flash('mensagem', 'Peça editada com sucesso!');
        return redirect()->route( 'listarPecasApagadas',1);
      }
      elseif ($itens->status == 0 && $itens->tipo != 'peça') {
        session()->flash('mensagem', 'Item editado com sucesso!');
        return redirect()->route('Itens.show', 1);
      } 
      elseif ($itens->status == 1 && $itens->tipo == 'peça') {
          session()->flash('mensagem', 'Peça editada com sucesso!');
          return redirect()->route('listarPeca', 1);
      } 
      elseif ($itens->status == 1 && $itens->tipo != 'peça') {
          session()->flash('mensagem', 'Item editado com sucesso!');
          return redirect()->route('Itens.create');
      }
    }

    public function destroy($itens)
    {
      $task = Itens::findOrFail($itens);
      if ($task->status == 1 && $task->tipo != 'peça') {
        $task->status = 0;
        session()->flash('mensagem','Item Desativado com Sucesso');
        $task->save();
        return redirect()->route('Itens.show',1);
      }
      elseif( $task->status == 0 && $task->tipo != 'peça'){
        $task->status = 1;
        session()->flash('mensagem', 'Item Restaurado com Sucesso');
        $task->save();
        return redirect()->route('Itens.create');
      }
      elseif($task->status == 1 && $task->tipo == 'peça') {
        $task->status = 0;
        session()->flash('mensagem', 'Peça Desativada com Sucesso');
        $task->save();
        return redirect()->route('listarPecasApagadas', 1);
      } 
      elseif ($task->status == 0 && $task->tipo == 'peça') {
      $task->status = 1;
      session()->flash('mensagem', 'Peça Restaurada com Sucesso');
      $task->save();
      return redirect()->route('listarPeca');
    }

    }

     public function pecaStore(Request $request)
    {
      $data = $request->all();

      $validacao = \Validator::make($data,[
        "nome" => "required",
        "preco" => "required",
      ]);

      if($validacao->fails()){
        return redirect()->back()->withErrors($validacao)->withInput();
      }
      else {
        session()->flash('mensagem', 'Peça cadastrada com sucesso!');
        Itens::create($request->all());
      }
      return view('cadastrarPeca');
    }

    public function pecaList()
    {
     $itens = Itens::where([['itens.status', '=', 1], ['itens.tipo','peça']])->orderBy('nome')->paginate(10);
         return view('listarPeca')->with('Itens',$itens); 
    }
}
