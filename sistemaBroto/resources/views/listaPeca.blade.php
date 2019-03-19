@extends('menu')
@section('conteudo')


        <body class="cm-no-transition cm-2-navbar">
          <div id="global">
            @if(session()->has('mensagem'))
              <div id="time" class="alert alert-success alert-dismissible text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                {{session()->get('mensagem')}}
              </div>
             @endif
              <div class="container-fluid">
                <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                    <div class="cm-flex">
                        <div class="nav-tabs-container">
                            <ul class="nav nav-tabs">
                                <li><a href="{{route('Pecas.index')}}">Cadastrar Peças</a></li>
                                <li class="active"><a href="{{route('Pecas.create')}}">Listar Peças</a></li>
                                <li><a href="{{route('Pecas.show', 1)}}">Listar Peças Desativados</a></li>


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
                               <th scope="col">Quantidade</th>
                               <th scope="col">Preço</th>
                               <th scope="col">Ação</th>

                             </tr>
                            </thead>

                            <tbody>
                              @foreach( $Itens as $o )
                             <tr>
                               <td>{{ $o->nome }} </td>
                               <td>Disponivel</td>
                               <td>{{ $o->qtd }} </td>
                               <td>{{ $o->preco }} </td>

                               <td>
                                 <a href="{{route('Itens.edit', $o->id)}}" class="btn btn-warning">Editar</a>

                                 <div class="">
                                 <form method="post" onsubmit="return confirm('Tornar Peça Indisponivel ?');" action="{{ route('Itens.destroy',[$o->id])}}">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger"type="submit" style="font-size:12px">Desativar</button>
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
          <script type="text/javascript">
          setTimeout(function () {
               document.getElementById("time").style.display = "none";
             }, 3000);
             function hide(){
             document.getElementById("tinme").style.display = "none";
             }

          </script>
     </body>
@endsection('conteudo')
