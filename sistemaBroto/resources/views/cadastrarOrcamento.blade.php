@extends('menu')


@section('conteudo')


        <body class="cm-no-transition cm-2-navbar">

            <div id="global">
               <div class="container-fluid">

                 <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                     <div class="cm-flex">
                         <div class="nav-tabs-container">
                             <ul class="nav nav-tabs">
                                 <li class="active"><a href="{{route('Orcamentos.index')}}">Novo Orçamento</a></li>
                                 <li><a href="listarOrcamento">Listar Orçamento</a></li>
                                 <li><a href="listarOrcamento">Lista de Contatos</a></li>



                             </ul>
                         </div>
                     </div>
                     <div class="cols-sm-2"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                          <div class="cols-sm-2"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>
                 </nav>
                    <div class="panel panel-default">

                            <div class="main-login main-center" id="divform">

                              <form id="formulario" class="" method="post" action="{{route('Orcamentos.store') }}">
                                @csrf
                                 <div class="form-group">
                                  <label for="evento" class="cols-sm-2 control-label">Evento *</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                      <select  name="evento" class="form-control" style="max-width: 80%;">
                                       <option value="">Selecione</option>
                                       <option value="Casamento">Casamento</option>
                                       <option value="15 anos">15 Anos</option>
                                       <option value="Aniversário">Aniversário</option>
                                       <option value="Infantil">Infantil</option>
                                       <option value="Outros">Outros</option>
                                     </select>
                                    </div>
                                  </div>
                                </div>


                                <div class="form-group">
                                  <label for="cliente" class="cols-sm-2 control-label">Cliente *</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 80%;" name="cliente" id="cliente"  placeholder="Entre com o nome do Cliente"/>
                                    </div>
                                  </div>
                                </div>

                                 <div class="form-group">
                                  <label for="telefone" class="cols-sm-2 control-label">Telefone</label>
                                  <div class="cols-sm-5">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-fax fa" aria-hidden="true"></i></span>
                                      <input type="tel" class="form-control" style="max-width: 30%;" name="telefone" id="telefone"  placeholder="(xx)xxxx xxxx" pattern="^\d{2}\d{5}\d{4}$"/>
                                    </div>
                                  </div>
                                </div>



                                <div class="form-group">
                                  <label for="celular" class="cols-sm-2 control-label">Celular *</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-phone-square fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 30%;" name="celular" id="cel"  placeholder="(xx)x xxxx xxxx"/>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="local" class="cols-sm-2 control-label">Local</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-map-marker fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 60%;" name="local" id="local"  placeholder="Entre com o Local do Evento"/>
                                    </div>
                                  </div>
                                </div>

                                   <div class="form-group">
                                  <label for="endereco" class="cols-sm-2 control-label">Endereço *</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-building fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 90%;" name="endereco" id="endereco"  placeholder="Entre com o Endereço"/>
                                    </div>
                                  </div>
                                </div>

                                 <div class="form-group">
                                  <label for="data" class="cols-sm-2 control-label">Data *</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                                      <input type="date" class="form-control" style="max-width: 30%;" name="data" id="data"  placeholder="Entre com a data do Evento"/>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="horario" class="cols-sm-2 control-label">Horario *</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
                                      <input type="time" class="form-control" style="max-width: 30%;" name="horario" id="horario"  placeholder="Entre com a hora do Evento"/>
                                    </div>
                                  </div>
                                </div>

                                 <!-- <div class="row">

                                       <div class="form-group">
                                          <div class="col-sm-4">

                                            <div class="input-group">
                                              <span class="input-group-addon"><i class="fa fa-pagelines fa" aria-hidden="true"></i></span>
                                              <select  name="Arranjos->nome" class="form-control">
                                                <option value="">Selecione</option>
                                                @foreach( $Arranjos as $a )
                                                <option value="a->nome"> {{$a->nome}}</option>
                                                @endforeach

                                              </select>
                                            </div>
                                          </div>

                                        <div class="col-sm-2">
                                             <div class="form-group">

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-plus-square fa" aria-hidden="true"></i></span>
                                                    <input type="number" min="1" class="form-control" style="max-width: 70%;" name="qtd" id="qtd"  placeholder="Qtd."/>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                          <button id="botaoadd"  class="btn btn-primary">Add</button>
                                        </div>

                                        <div class="col-sm-2">
                                          <button id="botaoadd"  class="btn btn-primary">Adicionar Igreja</button>
                                        </div>
                                      </div>

                                </div> -->

                                <label>* Campos Obrigatórios</label>
                                <!-- <table class="table">
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
                                </table> -->


                                <div class="form-group ">
                                  <input target="_blank" type="submit" id="button" value= "Gerar Orçamento" name="btnIncluir" class="btn btn-primary btn-lg btn-block login-button"></input>
                                </div>

                              </form>
                              <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

                            </div>

                    </div>

                </div>

            </div>

        </body>



@endsection('conteudo')
