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
                                <li class="active"><a href="listarOrcamento">Listar Orçamento</a></li>


                            </ul>
                        </div>
                    </div>
                    <div class="cols-sm-2"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                          <div class="cols-sm-2"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>
                </nav>

                  <div class="panel panel-default">
                      <div class="panel-body">
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
                              @foreach( $Orçamentos as $o )
                             <tr>
                               <td>{{ $o->id }} </td>
                               <td>{{ $o->cliente }} </td>
                               <td>{{ $o->evento }} </td>
                               <td>{{ $o->local }} </td>
                               <td>{{ $o->data }} </td>

                               <td>
                                 <a href="{{route('Orcamentos.edit', $o->id)}}" class="btn btn-warning">Edite</a>
                               </td>

                             </tr>
                             @endforeach

                            </tbody>
                        </table>
                        </div>
                        
                  </div>
                  <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

              </div>
          </div>
     </body>
@endsection('conteudo')
