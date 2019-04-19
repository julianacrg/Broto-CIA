@extends('menu')
@section('conteudo')


        <body class="cm-no-transition cm-2-navbar">
          <div id="global">
              <div class="container-fluid">
                <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                    <div class="cm-flex">
                        <div class="nav-tabs-container">
                            <ul class="nav nav-tabs">
                                <li><a href="Pecas">Cadastrar Peça</a></li>
                                <li><a href="listarPecas">Listar Peça</a></li>
                                <li class="active"><a href="#">Listar Peças Desativados</a></li>


                            </ul>
                        </div>
                    </div>
                    
                </nav>

                  <div class="panel panel-default">
                      <div class="panel-body">
                        <table class="table table-bordered table-striped table-hover table-responsive">
                            <thead>
                             <tr>
                               <th scope="col">Nome</th>
                               <th scope="col">Status</th>
                               <th scope="col">Preço</th>
                               <th scope="col">Ação</th>

                             </tr>
                            </thead>

                            <tbody>
                              @foreach( $Itens as $o )
                             <tr>
                               <td>{{ $o->nome }} </td>
                               <td>Indisponivel</td>
                               <td>{{ $o->preco }} </td>

                               <td>
                                 <a href="{{route('Itens.edit', $o->id)}}" class="btn btn-warning">Editar</a>

                                 <div class="">
                                 <form method="post" onsubmit="return confirm('Tornar Item Disponivel ?');" action="{{ route('Itens.destroy',[$o->id])}}">
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
