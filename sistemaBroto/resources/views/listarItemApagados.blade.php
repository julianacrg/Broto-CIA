@extends('menu')
@section('conteudo')


        <body class="cm-no-transition cm-2-navbar">
          <div id="global">
              <div class="container-fluid">
                <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                    <div class="cm-flex">
                        <div class="nav-tabs-container">
                            <ul class="nav nav-tabs">
                                <li><a href="{{route('Itens.index')}}">Cadastrar Item</a></li>
                                <li><a href="{{route('Itens.create')}}">Listar Itens</a></li>
                                <li class="active"><a href="#">Listar Itens Apagados</a></li>


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
                               <th scope="col">Nome</th>
                               <th scope="col">Tipo</th>
                               <th scope="col">Categoria</th>
                               <th scope="col">Preço</th>
                               <th scope="col">Ação</th>

                             </tr>
                            </thead>

                            <tbody>
                              @foreach( $Itens as $o )
                             <tr>
                               <td>{{ $o->id }} </td>
                               <td>{{ $o->nome }} </td>
                               <td>{{ $o->tipo }} </td>
                               <td>{{ $o->categoria }} </td>
                               <td>{{ $o->preco }} </td>

                               <td>
                                 <a href="{{route('Itens.edit', $o->id)}}" class="btn btn-warning">Edite</a>

                                 <div class="">
                                 <form method="post" onsubmit="return confirm('Confirmar exclusão ?');" action="{{ route('Itens.destroy',[$o->id])}}">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger"type="submit" style="font-size:12px"> Restaurar</button>
                                 </form>
                                 </div>
                               </td>

                             </tr>
                             @endforeach

                            </tbody>
                        </table>
                        </div>
                        <div align="center">
                        {{$Itens}}
                        </div>

                  </div>
                  <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

              </div>
          </div>
     </body>
@endsection('conteudo')
