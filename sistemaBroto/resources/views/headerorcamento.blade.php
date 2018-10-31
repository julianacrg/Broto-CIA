@extends('menu')

@section('conteudo')

// começo headerorcamento
<div class="row">


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
                            <li class="active"><a href="fazerorcamento">Novo Orçamento</a></li>
                            <li><a href="editarorcamento.php">Editar Orçamento</a></li>

                        </ul>
                    </div>
                </div>
                <div class="pull-right" style="border-left:1px solid #e5e5e5"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                <div class="pull-right"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>
            </nav>
        </header>

        </div>
        <body class="cm-no-transition cm-2-navbar">

            <div id="global">
              // fim do headerorcamento


               <div class="container-fluid">
                    <div class="panel panel-default">

                            <div class="main-login main-center" id="divform">

                              <form id="formulario" class="" method="post" action="#">

                                 <div class="form-group">
                                  <label for="name" class="cols-sm-2 control-label">Evento</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 80%;" name="evento" id="evento"  placeholder="Entre com o nome do Evento"/>
                                    </div>
                                  </div>
                                </div>


                                <div class="form-group">
                                  <label for="name" class="cols-sm-2 control-label">Nome</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 80%;" name="name" id="name"  placeholder="Entre com o nome do Cliente"/>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="email" class="cols-sm-2 control-label">Local</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-map-marker fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 60%;" name="local" id="local"  placeholder="Entre com o Local do Evento"/>
                                    </div>
                                  </div>
                                </div>

                                   <div class="form-group">
                                  <label for="name" class="cols-sm-2 control-label">Endereço</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 90%;" name="endereco" id="endereco"  placeholder="Entre com o Endereço"/>
                                    </div>
                                  </div>
                                </div>

                                 <div class="form-group">
                                  <label for="name" class="cols-sm-2 control-label">Data</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 30%;" name="data" id="data"  placeholder="Entre com a data do Evento"/>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="name" class="cols-sm-2 control-label">Horario</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 30%;" name="horario" id="horario"  placeholder="Entre com a hora do Evento"/>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="name" class="cols-sm-2 control-label">Telefone</label>
                                  <div class="cols-sm-5">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-fax fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 30%;" name="telefone" id="telefone"  placeholder="Entre com o Telefone"/>
                                    </div>
                                  </div>
                                </div>



                                <div class="form-group">
                                  <label for="name" class="cols-sm-2 control-label">Celular</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-phone-square fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 30%;" name="celular" id="cel"  placeholder="Entre com o Celular"/>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <label for="name" class="col-sm-2 control-label">Arranjo</label>
                                </div>
                                 <div class="row">
                                   <div class="form-group">
                                      <div class="col-sm-5">
                                        <div class="input-group">
                                          <span class="input-group-addon"><i class="fa fa-pagelines fa" aria-hidden="true"></i></span>
                                          <select type="text" class="form-control"  name="arranjo" id="cel" /><select>
                                        </div>
                                      </div>
                                    <div class="col-sm-2">
                                         <div class="form-group">

                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-plus-square fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" style="max-width: 70%;" name="quantidade" id="qtd"  placeholder="Qtd."/>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <button id="botaoadd"  class="btn btn-primary">Add</button>
                                    </div>
                                  </div>
                                </div>
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Arranjo</th>
                                      <th scope="col">Quantidade</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Rosas Brancas com folhagem Médio</td>
                                      <td>10</td>

                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Rosas Vermelhas Grande</td>
                                      <td>7</td>

                                    </tr>

                                  </tbody>
                                </table>




                                <div class="form-group ">
                                  <a href="https://deepak646.blogspot.com/" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Gerar Orçamento</a>
                                </div>

                              </form>
                            </div>



                         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                        <!-- Include all compiled plugins (below), or include individual files as needed -->
                        <script src="js/bootstrap.min.js"></script>


                    </div>
                </div>
            </div>

        </body>

        

@endsection('conteudo')