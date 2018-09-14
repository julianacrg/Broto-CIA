@extends('menu')

@section('conteudo')

    <div class="row">

    <form method="post" action="{{ route('Funcionarios.store') }}">

      @csrf
      <div class="col-sm-3"></div>
          <div class="col-sm-5 jumbotron">
            <h2>Inserir Novo funcionario</h2>

              <p>Nome: <input type="text" name="nome"></p>
              <p>cpf: <input type="text" name="cpf"></p>
              <input type="submit" name="btnIncluir" value="Incluir">

          </div>
        </form>
          <div class="col-sm-4">
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr class="table table-bordered table-striped table-hover table-responsive">
                  <th>ID</th>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Ações</th>
                </tr>
              </thead>

              @foreach( $Funcionarios as $Funconario )
                <tr class="table-light">
                  <td>{{ $Funconario->id }}</td>
                  <td>{{ $Funconario->nome }}</td>
                  <td>{{ $Funconario->cpf }}</td>
                  <td>
                    <div class="col-sm-1">
                        <form method="post" onsubmit="return confirm('Confirma exclusão do Funcionario?');" action="{{ route('Funcionarios.destroy', [$Funconario->id])}}">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger"type="submit" style="font-size:12px"> <i class="fa fa-trash-o "></i></button>
                        </form>
                    </div>
                </td>
                </tr>

                @endforeach

              </table>

          </div>
          @foreach( $Funcionarios as $Funcionario )
          <form method="post" onsubmit="return confirm('Confirma exclusão do Funcionario?');" action="{{ route('Funcionarios.destroy', [$Funcionario->id])}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"type="submit" style="font-size:12px"> <i class="fa fa-trash-o "></i></button>
          </form>
          @endforeach


    </div>
    @endsection('conteudo')
