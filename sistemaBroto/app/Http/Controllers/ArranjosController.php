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
      $arranjos = Arranjos::where('arranjos.status', '=', 1)->orderBy('nome')->paginate(10);
         return view('listarArranjo')->with('Arranjos',$arranjos);
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
      $arranjos = Arranjos::where('arranjos.status', '=', 0)->orderBy('nome')->paginate(10);
          return view('listarArranjoApagados')->with('Arranjos',$arranjos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Arranjos  $arranjos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Orca= Arranjos::find($id);


      return view('editarArranjo')->with('Arranjos', $Orca);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Arranjos  $arranjos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $arranjos)
    {
      $arranjos = Arranjos::findOrFail($arranjos);
      $arranjos->fill($request->all());
      $arranjos->save();
      $request->session()->flash('mensagem', 'Arranjos atualizado com sucesso!');
      return redirect()->route('Arranjos.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Arranjos  $arranjos
     * @return \Illuminate\Http\Response
     */
    public function destroy($arranjos)
    {
      $task = Arranjos::findOrFail($arranjos);
      if ($task->status == 1) {
        $task->status = 0;
      }else {
        $task->status = 1;
      }


      $task->save();

      session()->flash('mensagem','Arranjo excluido com sucesso');
      return redirect()->route('Arranjos.create');
    }
}
