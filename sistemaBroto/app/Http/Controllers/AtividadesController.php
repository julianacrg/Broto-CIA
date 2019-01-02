<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Atividades;
use App\Funcionarios;
use App\Arranjos;
use App\arranjosOrcamentos;
use Illuminate\Http\Request;

class AtividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $funcionario = Funcionarios:: orderBy('nome')->get();
      $arr = DB::table('arranjos')
      ->join('arranjos_Orcamentos', 'arranjos_Orcamentos.arranjos_id', '=','arranjos.id')
      ->select('arranjos.nome', 'arranjos.id')->get();
         return view('Atividades')->with('Funcionario',$funcionario)->with('Arranjos',$arr);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $arr = DB::table('arranjos')
        ->join('arranjos_Orcamentos', 'arranjos_Orcamentos.arranjos_id', '=','arranjos.id')
        ->select('arranjos.nome', 'arranjos.id')->get();
// dd($arr);
        return view('listarAtividades',compact('arr'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $funcionario = Funcionarios:: orderBy('nome')->get();
      $arranjos = Arranjos:: orderBy('nome')->get();
      Atividades::create($request->all());
      session()->flash('mensagem', 'Item cadastrado com sucesso!');

      return view('Atividades')->with('Funcionario',$funcionario)->with('Arranjos',$arranjos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Atividades  $atividades
     * @return \Illuminate\Http\Response
     */
    public function show(Atividades $atividades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atividades  $atividades
     * @return \Illuminate\Http\Response
     */
    public function edit(Atividades $atividades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atividades  $atividades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atividades $atividades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atividades  $atividades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atividades $atividades)
    {
        //
    }
}
