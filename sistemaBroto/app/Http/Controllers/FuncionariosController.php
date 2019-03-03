<?php

namespace App\Http\Controllers;

use App\Funcionarios;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $func = Funcionarios:: orderBy('nome')->get();
         return view('cadastrarFuncionario')->with('Funcionarios',$func);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $Func = DB::table('funcionarios')->join('users', 'users.idFunc', '=', 'funcionarios.cpf')
      ->where('status', '=', '1')
      ->select('funcionarios.*','users.email')->paginate(10);
        return view ('listarFuncionario', compact('Func'));
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
        "cpf" => "required|unique:funcionarios",
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|',
        ]);


        if($validacao->fails()){
          return redirect()->back()->withErrors($validacao)->withInput();
        }else {
          Funcionarios::create($request->all());
          User::create([
              'name'        => $data['nome'],
              'email'       => $data['email'],
              'password'    => Hash::make($data['password']),
              'funcionario' => 'S',
              'idFunc'      =>$data['cpf']
              ]);
        }

      session()->flash('mensagem', 'Funcionario cadastrado com sucesso!');

      return view('cadastrarFuncionario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionarios $funcionarios)
    {

      $Func = DB::table('funcionarios')->join('users', 'users.idFunc', '=', 'funcionarios.cpf')
      ->where('status', '=', '0')
      ->select('funcionarios.*','users.email')->paginate(10);
      return view ('listarFuncionarioApagados', compact('Func'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Func= Funcionarios::find($id);


      return view('editarFuncionario',compact('Func'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Funcionario)
    {
      $Funcionario = Funcionarios::findOrFail($Funcionario);
      $Funcionario->fill($request->all());
      $Funcionario->save();
      $request->session()->flash('mensagem', 'Funcionario atualizado com sucesso!');
      return redirect()->route('Funcionarios.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($Funcionario)
    {
      $task = Funcionarios::findOrFail($Funcionario);
      if ($task->status == 1) {
        $task->status = 0;
        session()->flash('mensagem','Funcionario removido com sucesso');
      }else {
        $task->status = 1;
        session()->flash('mensagem','Funcionario restaurado com sucesso');
      }


      $task->save();

      return redirect()->route('Funcionarios.create');
    }
}
