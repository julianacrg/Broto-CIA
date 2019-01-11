<?php

namespace App\Http\Controllers;

use App\Igrejas;
use App\Orcamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IgrejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orcamentos = Orcamentos:: orderBy('evento')->get();
        return view('cadastrarIgreja', compact('orcamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $Igreja = DB::table('igrejas')->join('orcamentos', 'orcamentos.id', '=', 'igrejas.orcamentos_id')
      ->select('igrejas.*', 'orcamentos.cliente')->get();


      return view('listarIgreja', compact('Igreja'));
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
        "orcamentos_id" => "required",
        "nome" => "required",
        "endereço" => "required",
        "data" => "required",
        "horario" => "required",
      ]);

      if($validacao->fails()){
        return redirect()->back()->withErrors($validacao)->withInput();
      }else {
        Igrejas::create($request->all());
      }
      session()->flash('mensagem','Igreja cadastrada com sucesso');

      return redirect()->route('Igrejas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Igrejas  $igrejas
     * @return \Illuminate\Http\Response
     */
    public function show(Igrejas $igrejas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Igrejas  $igrejas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Igrejas= Igrejas::where('id_igrejas', '=', $id)->get();

      $orcamentos = Orcamentos:: orderBy('evento')->get();


      return view('editarIgreja',compact('Igrejas','orcamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Igrejas  $igrejas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $igrejas)
    {

      DB::table('igrejas')->where('id_igrejas', '=', $request['id_igrejas'])
      ->update([

                'orcamentos_id' => $request['orcamentos_id'],
                'nome' => $request['nome'],
                'endereço' => $request['endereço'],
                'data' => $request['data'],
                'horario' => $request['horario']
              ]);




      session()->flash('mensagem', 'Igreja atualizado com sucesso!');
      return redirect()->route('Igrejas.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Igrejas  $igrejas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Igrejas $igrejas)
    {
        //
    }
}
