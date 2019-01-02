<?php

namespace App\Http\Controllers;

use App\Orcamentos;
use App\Arranjos;
use App\Itens;
use Auth;



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
      $orcamentos = Orcamentos:: orderBy('evento')->get();
         return view('listarOrcamento')->with('Orçamentos',$orcamentos);

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
      $ultimo = Orcamentos:: all()->last();

      if($validacao->fails()){
        return redirect()->back()->withErrors($validacao)->withInput();
      }else {
        Orcamentos::create($request->all());
      }


      return view('cadastrarOrcamentos2')->with('Orcamentos', $ultimo)->with('Arranjos', $arranjos)->with('Itens', $It);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orcamentos  $orcamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Orcamentos $orcamentos)
    {
        //
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
    public function destroy(Orcamentos $orcamentos)
    {
      $orcamentos->delete();
      session()->flash('mensagem','Orcamentos excluido com sucesso');
      return redirect()->route('cadastrarOrcamento');
    }
}
