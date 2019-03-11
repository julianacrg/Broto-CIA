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
                                <li><a href="{{route('Orcamentos.create')}}">Listar Orçamento Fechados</a></li>
                                <li class="active"><a href="#">Listar Orçamento Em Aberto</a></li>



                            </ul>
                        </div>
                    </div>
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
                                 <a href="{{route('Orcamentos.edit', $o->id)}}" class="btn btn-warning">Editar</a>

                                 <div class="">
                                 <form method="post" onsubmit="return confirm('Confirmar Restauração ?');" action="{{ route('Orcamentos.destroy',[$o->id])}}">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-primary"type="submit" style="font-size:12px">Fechar</button>
                                 </form>
                                 </div>
                               </td>

                             </tr>
                             @endforeach

                            </tbody>
                        </table>
                        </div>
                        <div align="center">
                        {{$Orçamentos}}
                        </div>
                  </div>
                  <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

              </div>
          </div>
     </body>
@endsection('conteudo')
