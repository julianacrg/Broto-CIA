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
      $arr = DB::table('arranjos_Orcamentos')
      ->join('arranjos', 'arranjos_Orcamentos.arranjos_id', '=','arranjos.id')
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
        $a= 0;

        $atv = Db::table('atividades')
        ->join('funcionarios','atividades.funcionarios_id','=','funcionarios.id')
        ->join('arranjos_Orcamentos', 'arranjos_Orcamentos.id_arranjos_orcamentos', '=','arranjos_orcamentos_id')
        ->join('arranjos', 'arranjos_Orcamentos.arranjos_id', '=','arranjos.id')
        ->select('atividades.*','funcionarios.nome as funcionario','arranjos.nome as arranjo')->get();
  dd($atv);

        $arr = DB::table('arranjos')
        ->join('arranjos_Orcamentos', 'arranjos_Orcamentos.arranjos_id', '=','arranjos.id')
        ->orderBy('arranjos.id', 'DESC')
        ->select('arranjos.nome', 'arranjos.id','arranjos_Orcamentos.orcamentos_id')->get();




 // dd($arr);
        return view('listarAtividades',compact('arr','atv'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Atividades::create($request->all());
      session()->flash('mensagem', 'Item cadastrado com sucesso!');

      return redirect()->route("Atividades.index");
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
