<?php

namespace App\Http\Controllers;

use App\ArranjosOrcamentos;
use Illuminate\Http\Request;
use App\Orcamentos;
use App\Arranjos;
use App\Itens;
use Auth;
use Illuminate\Support\Facades\DB;
class ArranjosOrcamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $It = Itens:: orderBy('nome')->get();
      $arranjos = Arranjos:: orderBy('nome')->get();
      $ultimo = Orcamentos:: all()->last();

      $ultItem1 = DB::table('arranjos')->join('arranjos_orcamentos', 'arranjos_orcamentos.arranjos_id', '=', 'arranjos.id')
      ->where('arranjos_orcamentos.orcamentos_id','=', $ultimo->id)
      ->select('arranjos.*', 'arranjos_orcamentos.id_arranjos_orcamentos','arranjos_orcamentos.qtd_arranjos')->get();

      return view('cadastrarOrcamentos3')->with('Orcamentos', $ultimo)->with('Arranjos', $arranjos)->with('Itens', $It)->with('ultItem', $ultItem1);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $arranjos = Arranjos:: orderBy('nome')->get();
      $ultimo = Orcamentos:: all()->last();
      $data = $request->all();

      $validacao = \Validator::make($data,[

        "arranjos_id" => "required",
        "qtd_arranjos" => "required",

        ]);

        if ($validacao->fails()) {
          $ultItem1 = DB::table('arranjos')->join('arranjos_orcamentos', 'arranjos_orcamentos.arranjos_id', '=', 'arranjos.id')
          ->where('arranjos_orcamentos.orcamentos_id','=', $ultimo->id)
          ->select('arranjos.*', 'arranjos_orcamentos.id_arranjos_orcamentos','arranjos_orcamentos.qtd_arranjos')->get();

          session()->flash('erro', 'Campos requeridos não preenchidos');


          return view('cadastrarOrcamentos3')->with('Orcamentos', $ultimo)->with('Arranjos', $arranjos)->with('ultItem', $ultItem1);


          }
          else {
            //necessario primeiro vir o create e depois fazer join
            ArranjosOrcamentos::create($request->all());

            $ultItem1 = DB::table('arranjos')->join('arranjos_orcamentos', 'arranjos_orcamentos.arranjos_id', '=', 'arranjos.id')
            ->where('arranjos_orcamentos.orcamentos_id','=', $ultimo->id)
            ->select('arranjos.*', 'arranjos_orcamentos.id_arranjos_orcamentos','arranjos_orcamentos.qtd_arranjos')->get();

            session()->flash('mensagem', 'Cadastrado com sucesso!');

            return view('cadastrarOrcamentos3')->with('Orcamentos', $ultimo)->with('Arranjos', $arranjos)->with('ultItem', $ultItem1);
          }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArranjosOrcamentos  $arranjosOrcamentos
     * @return \Illuminate\Http\Response
     */
    public function show(ArranjosOrcamentos $arranjosOrcamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArranjosOrcamentos  $arranjosOrcamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(ArranjosOrcamentos $arranjosOrcamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArranjosOrcamentos  $arranjosOrcamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArranjosOrcamentos $arranjosOrcamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArranjosOrcamentos  $arranjosOrcamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($arranjosOrcamentos)
    {
      $task = ArranjosOrcamentos::where('id_arranjos_orcamentos','=',$arranjosOrcamentos);
      $task->delete();
      session()->flash('mensagem', 'Excluido com sucesso!');
      $arranjos = Arranjos:: orderBy('nome')->get();
      $ultimo = Orcamentos:: all()->last();
      $ultItem1 = DB::table('arranjos')->join('arranjos_orcamentos', 'arranjos_orcamentos.arranjos_id', '=', 'arranjos.id')
      ->where('arranjos_orcamentos.orcamentos_id','=', $ultimo->id)
      ->select('arranjos.*', 'arranjos_orcamentos.id_arranjos_orcamentos','arranjos_orcamentos.qtd_arranjos')->get();
      return view('cadastrarOrcamentos3')->with('Orcamentos', $ultimo)->with('Arranjos', $arranjos)->with('ultItem', $ultItem1);
    }
}
