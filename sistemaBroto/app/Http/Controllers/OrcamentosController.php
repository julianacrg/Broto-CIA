<?php

namespace App\Http\Controllers;

use App\Orcamentos;
use App\Arranjos;
use App\Itens;
use Auth;
use App\ArranjosOrcamentos;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OrcamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $orcamentos = Orcamentos:: orderBy('evento')->get();
      $arranjos = Arranjos:: orderBy('nome')->get();
         return view('cadastrarOrcamento')->with('Orçamentos',$orcamentos)->with('Arranjos',$arranjos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $orcamentos = Orcamentos::where('orcamentos.status', '=', 1)->orderBy('evento')->paginate(10);
         return view('listarOrcamento')->with('Orcamentos',$orcamentos);



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
        "evento" => "required",
        "cliente" => "required",
        "data" => "required",
        "endereco" => "required",
        "horario" => "required",
        "celular" => "required",
      ]);




      $It = Itens:: orderBy('nome')->get();
      $arranjos = Arranjos:: orderBy('nome')->get();


      if($validacao->fails()){
        return redirect()->back()->withErrors($validacao)->withInput();
      }else {
        Orcamentos::create($request->all());
      }
      $ultimo = Orcamentos:: all()->last();

      $ultItem = DB::table('itens')->join('itens_orcamentos', 'itens_orcamentos.itens_id', '=', 'itens.id')
      ->where('itens_orcamentos.orcamentos_id','=', $ultimo->id)
      ->select('itens.*', 'itens_orcamentos.id_itens_orcamentos','itens_orcamentos.qtd_itens')->get();


      return view('cadastrarOrcamentos2')->with('Orcamentos', $ultimo)->with('ultItem', $ultItem)
      ->with('Itens', $It);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orcamentos  $orcamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Orcamentos $orcamentos)
    {
      $orcamentos = Orcamentos::where('orcamentos.status', '=', 0)->orderBy('evento')->get();
          return view('listarOrcamentoApagados')->with('Orçamentos',$orcamentos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orcamentos  $orcamentos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Orca= Orcamentos::find($id);
       // dd($Orca);
       return view('editarOrcamento')->with('Orcamentos', $Orca);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orcamentos  $orcamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $orcamentos)
    {

      $orcamentos = Orcamentos::findOrFail($orcamentos);
      $orcamentos->fill($request->all());
      $orcamentos->save();
      $request->session()->flash('mensagem', 'Orcamentos atualizado com sucesso!');
      return redirect()->route('Orcamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orcamentos  $orcamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($orcamentos)
    {

      $task = Orcamentos::findOrFail($orcamentos);
      if ($task->status == 1) {
        $task->status = 0;
      }else {
        $task->status = 1;
      }


      $task->save();

      session()->flash('mensagem','Orcamentos excluido com sucesso');
      return redirect()->route('Orcamentos.create');
    }
}
