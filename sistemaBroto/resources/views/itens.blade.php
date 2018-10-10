@extends('menu')

@section('conteudo')

<div class="row">

<form method="post" action="{{ route('Itens.store') }}">

  @csrf
  <div class="col-sm-3"></div>
      <div class="col-sm-5 jumbotron">
        <h2>Inserir Novo Item</h2>

          <p>Nome: <input type="text" name="nome"></p>
          <p>Categoria: <input type="text" name="categoria"></p>
          <p>Status: <input type="text" name="status"></p>
          <p>Quantidade: <input type="text" name="qtd"></p>
          <p>Preço: <input type="text" name="preco"></p>
          <p>Descrição: <input type="text" name="descricao"></p>
          <p>Foto: <input type="text" name="foto"></p>

          <input type="submit" name="btnIncluir" value="Incluir">

      </div>
    </form>
      <div class="col-sm-4">
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr class="table table-bordered table-striped table-hover table-responsive">
              <th>ID</th>
              <th>Nome</th>
              <th>Categoria</th>
              <th>Status</th>
              <th>Quantidade</th>
              <th>Preço</th>
              <th>Descrição</th>
              <th>Foto</th>
              <th>Ações</th>
            </tr>
          </thead>

          @foreach( $Itens as $Iten )
            <tr class="table-light">
              <td>{{ $Iten->id }}</td>
              <td>{{ $Iten->nome }}</td>
              <td>{{ $Iten->categoria }}</td>
              <td>{{ $Iten->status }}</td>
              <td>{{ $Iten->qtd}}</td>
              <td>{{ $Iten->preco}}</td>
              <td>{{ $Iten->descricao}}</td>
              <td>{{ $Iten->foto}}</td>
              <td>


                <div class="col-sm-1">
                    <form method="post" onsubmit="return confirm('Confirma exclusão do Funcionario?');" action="{{ route('Itens.destroy', [$Iten->id])}}">
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
      <button class="btn btn-primary"style="font-size:14px" id="myBtn">Editar Itens <i class="fa fa-edit"></i></button>

      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Edite o Item:</h2>
          </div>
          <div class="modal-body">
            <form method="post" action="{{ route('Itens.update',$Iten->id)}}">
              @csrf
              @method('PATCH')
              <p>Itens:
              <select  name="Iten->id">
                <option value="">Selecione</option>
                @foreach( $Itens as $Iten )
                <option value="Iten->id"> {{$Iten->id}}</option>
                @endforeach

              </select></p>

            <p>Nome: <input type="text" name="nome"></p>
            <p>CPF: <input type="text" name="cpf"></p>
            <input type="submit" name="btnAtualizar" value="Atualizar">
            </form>
          </div>
          <div class="modal-footer">
            <h3>Edição do Funcionario</h3>
          </div>
        </div>

</div>
<script type="text/javascript">

  // Get the modal
  var modal = document.getElementById('myModal');

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on the button, open the modal
  btn.onclick = function() {
      modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
      modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>

</div>
@endsection('conteudo')
