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
                                <li><a href="editarorcamento">Editar Orçamento</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="pull-right" style="border-left:1px solid #e5e5e5"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                    <div class="pull-right"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>
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
                             <a href="{{action('OrcamentosController@edit', $o['id'])}}" class="btn btn-warning">Edite</a>
                           </td>

                         </tr>
                         @endforeach

                        </tbody>
                        </table>
                        </div>
                  </div>
              </div>
          </div>
     </body>
@endsection('conteudo')
