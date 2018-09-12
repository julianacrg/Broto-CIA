<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" action="{{ route('Funcionarios.store') }}">

      @csrf
  <div class="col-sm-3">

  </div>
  <div class="col-sm-5 jumbotron">
  <h2>Inserir Novo funcionario</h2>

      <p>Nome: <input type="text" name="nome"></p>
      <p>cpf: <input type="text" name="cpf"></p>
      <input type="submit" name="btnIncluir" value="Incluir">

  </div>

  <table class="table table-striped">
    <thead class="thead-dark">

      <tr class="table table-bordered table-striped table-hover table-responsive">
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
      </tr>

    </thead>
  @foreach( $Funcionarios as $e )

    <tr class="table-light">
      <td>{{ $e->id }}</td>
      <td>{{ $e->nome }}</td>
      <td>{{ $e->cpf }}</td>
    </tr>

  @endforeach

  </table>





    </form>
  </body>
</html>
