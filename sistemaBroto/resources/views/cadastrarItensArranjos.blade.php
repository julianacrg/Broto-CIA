@extends('menu')

@section('conteudo')


        <body class="cm-no-transition cm-2-navbar">

               <div id="global">

                  <div class="container-fluid">
                    <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                        <div class="cm-flex">
                            <div class="nav-tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="cadastrarItens">Cadastrar Itens</a></li>
                                    <li><a href="cadastraArranjo">Cadastrar Arranjos</a></li>
                                    <li><a href="cadastrarFuncionario">Cadastrar Funcionários</a></li>
                                    <li><a href="cadastrarFornecedor">Cadastrar Fornecedor</a></li>

                                </ul>

                            </div>

                        </div>

                          <div class="cols-sm-2"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                          <div class="cols-sm-2"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>


                    </nav>
                       <div class="panel panel-default">

                               <div class="main-login main-center" id="divform">

                                 <form id="formulario" class="" method="post" action="{{ route('Itens_Arranjos.store') }}">
                                    @csrf
                                    <input name="arranjos_id" value="1"> </input>

                                    <div class="form-group">
                                       <div class="col-sm-5">
                                         <div class="input-group">
                                           <span class="input-group-addon"><i class="fa fa-pagelines fa" aria-hidden="true"></i></span>
                                           <select type="text" class="form-control"  name="itens_id" id="itensarranjo" />
                                           @foreach($Itens as $e)

                                           <option value="{{$e->id}}">{{ $e->nome }}</option>

                                           @endforeach
                                           <select>

                                         </div>
                                       </div>
                                     <div class="col-sm-2">
                                          <div class="form-group">

                                             <div class="input-group">
                                                 <span class="input-group-addon"><i class="fa fa-plus-square fa" aria-hidden="true"></i></span>
                                                 <input type="number" class="form-control" style="max-width: 70%;" name="qtd_itens" id="qtd"  placeholder="Qtd."/>
                                             </div>

                                         </div>
                                     </div>
                                     <div class="col-sm-4">
                                       <button id="botaoadd"  class="btn btn-primary">Add</button>
                                     </div>


                                     <table class="table table-bordered table-striped table-hover table-responsive">
                                     <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Tipo de Evento</th>
                                        <th scope="col">Local</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Ação</th>

                                      </tr>
                                     </thead>
                                     <tbody>
                                      <tr>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>

                                        <td>
                                          <a class="btn btn-danger">Exluir</a>
                                        </td>

                                      </tr>


                                     </tbody>
                                     </table>

                                   </div>

                                 <div class="form-group ">
                                     <input  target="_blank" type="submit" value="Adicionar Item" name="btnIncluir" id="button"  class="btn btn-primary btn-lg btn-block login-button"></input>
                                   </div>

                                 </form>
                                 <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

                               </div>
                       </div>
                   </div>
               </div>

           </body>

@endsection('conteudo')