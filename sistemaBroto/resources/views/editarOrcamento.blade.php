@extends('menu')

@section('conteudo')


        <body class="cm-no-transition cm-2-navbar">

            <div id="global">
               <div class="container-fluid">

                 <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                     <div class="cm-flex">
                         <div class="nav-tabs-container">
                             <ul class="nav nav-tabs">
                                 <li><a href="{{route('Orcamentos.index')}}">Novo Orçamento</a></li>
                                 <li><a href="listarOrcamento">Listar Orçamento</a></li>
                                 <li class="active"><a href="editarOrcamento">Editar Orçamento</a></li>

                             </ul>
                         </div>
                     </div>
                     <div class="cols-sm-2"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                          <div class="cols-sm-2"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>
                 </nav>
                    <div class="panel panel-default">

                            <div class="main-login main-center" id="divform">

                              <form id="formulario" method="post" action="{{route('Orcamentos.update', $Orcamentos->id) }}">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                 <label for="evento" class="cols-sm-2 control-label">Evento *</label>
                                 <div class="cols-sm-10">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                     <select  name="evento" class="form-control" style="max-width: 80%;">
                                      <option value="{{$Orcamentos->evento}}">{{$Orcamentos->evento}}</option>
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
                                  <label for="cliente" class="cols-sm-2 control-label">Cliente</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 80%;" name="cliente" id="cliente" value="{{$Orcamentos->cliente}}"/>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="local" class="cols-sm-2 control-label">Local</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-map-marker fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 60%;" name="local" id="local"  value="{{$Orcamentos->local}}"/>
                                    </div>
                                  </div>
                                </div>

                                   <div class="form-group">
                                  <label for="endereco" class="cols-sm-2 control-label">Endereço</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-building fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 90%;" name="endereco" id="endereco"  value="{{$Orcamentos->endereco}}"/>
                                    </div>
                                  </div>
                                </div>

                                 <div class="form-group">
                                  <label for="data" class="cols-sm-2 control-label">Data</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                                      <input type="date" class="form-control" style="max-width: 30%;" name="data" id="data"  value="{{$Orcamentos->data}}"/>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="horario" class="cols-sm-2 control-label">Horario</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
                                      <input type="time" class="form-control" style="max-width: 30%;" name="horario" id="horario" value="{{$Orcamentos->horario}}"/>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="telefone" class="cols-sm-2 control-label">Telefone</label>
                                  <div class="cols-sm-5">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-fax fa" aria-hidden="true"></i></span>
                                      <input type="tel" class="form-control" style="max-width: 30%;" name="telefone" id="telefone" value="{{$Orcamentos->telefone}}" pattern="^\d{2}\d{5}\d{4}$"/>
                                    </div>
                                  </div>
                                </div>



                                <div class="form-group">
                                  <label for="celular" class="cols-sm-2 control-label">Celular</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-phone-square fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 30%;" name="celular" id="cel"  value="{{$Orcamentos->celular}}"/>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group ">
                                  <input type="submit" id="button" value= "Editar Orçamento" name="btnIncluir" class="btn btn-primary btn-lg btn-block login-button"></input>
                                </div>

                              </form>
                            </div>
                            <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

                    </div>
                </div>
            </div>

        </body>



@endsection('conteudo')
