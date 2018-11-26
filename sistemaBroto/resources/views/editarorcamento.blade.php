@extends('menu')
@section('conteudo')



    <header id="cm-header">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                <div class="cm-flex">
                    <h1>Orçamentos</h1>
                    <form id="cm-search" action="#" method="#">
                        <input type="search" name="q" autocomplete="off" placeholder="Search...">
                    </form>
                </div>
                <div class="pull-right">
                    <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
                </div>

            </nav>
            <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                <div class="cm-flex">
                    <div class="nav-tabs-container">
                        <ul class="nav nav-tabs">
                            <li><a href="cadastrarOrçamento">Novo Orçamento</a></li>
                            <li class="active"><a href="editarOrcamento">Editar Orçamento</a></li>

                        </ul>
                    </div>
                </div>
                <div class="pull-right" style="border-left:1px solid #e5e5e5"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                <div class="pull-right"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>
            </nav>
        </header>

        <body class="cm-no-transition cm-2-navbar">


          <div id="global">
              <div class="container-fluid">


                  <div class="panel panel-default">
                      <div class="panel-body">
                        <table class="table">
                        <thead>
                         <tr>
                           <th scope="col">ID</th>
                           <th scope="col">Tipo de Evento</th>
                           <th scope="col">Cliente</th>
                           <th scope="col">Ação</th>

                         </tr>
                        </thead>
                        <tbody>
                          @foreach( $Orçamentos as $o )
                         <tr>
                           <td>{{ $o->id }} </td>
                           <td>{{ $o->evento }} </td>
                           <td>{{ $o->cliente }} </td>
                           <td> <button class="btn btn-primary"style="font-size:14px"
                                  id="myBtn">Editar Funcionario <i class="fa fa-edit"></i></button></td>
                                  <div id="myModal" class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <span class="close">&times;</span>
                                        <h2>Edite o Orçamentos:</h2>
                                      </div>
                                      <div class="modal-body">
                                        <form method="post" action="{{ route('Orcamentos.update',$o->id)}}">
                                          @csrf
                                          @method('PATCH')
                                          <p>Orçamentos:</p>

                                        <p>Nome: <input type="text" name="nome"></p>
                                        <p>CPF: <input type="text" name="cpf"></p>
                                        <input type="submit" name="btnAtualizar" value="Atualizar">
                                        </form>
                                      </div>
                                      <div class="modal-footer">
                                        <h3>Edição do Orçamento</h3>
                                      </div>
                                    </div>

                                  </div>
                         </tr>
                         @endforeach

                        </tbody>
                        </table>


                        </div>
                  </div>


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

     </body>



@endsection('conteudo')
