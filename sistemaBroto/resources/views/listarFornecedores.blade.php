@extends('menu')

@section('conteudo')

    <body class="cm-no-transition cm-2-navbar">

       <div id="global">
              <div class="container-fluid">

                <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                    <div class="cm-flex">
                        <div class="nav-tabs-container">
                            <ul class="nav nav-tabs">
                                <li ><a href="{{ route('Fornecedores.index') }}">Novo Fornecedor</a>
                                <li class="active"><a href="{{ route('Fornecedores.create') }}">Listar Fornecedores</a></li>
                                <li><a href="{{ route('Fornecedores.show', 1) }}">Listar Fornecedores Apagados</a></li>

                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                   <div class="panel panel-default">
                     @if(session()->has('mensagem'))
                       <div id="time" class="alert alert-success alert-dismissible text-center" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                         {{session()->get('mensagem')}}
                       </div>
                      @endif
                           <div class="main-login main-center" id="divform">

                             <table class="table table-bordered table-striped table-hover table-responsive">
                             <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">CNPJ</th>
                                <th scope="col">Ação</th>

                              </tr>
                             </thead>
                             <tbody>

                               @foreach( $forn as $o )
                              <tr>
                                <td>{{ $o->id }} </td>
                                <td>{{ $o->nome }} </td>
                                <td>{{ $o->cpf }} </td>
                                <td>

                                  <div class="row">
                                    <a href="{{route('Fornecedores.edit', $o->id)}}" class="btn btn-warning">Editar</a>
                                  <form method="post" onsubmit="return confirm('Mover Fornecedor para lista de apagados?');" action="{{ route('Fornecedores.destroy',[$o->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"type="submit" style="font-size:12px"> Apagar</button>
                                  </form>
                                  </div>
                                </td>

                              </tr>

                              @endforeach

                             </tbody>
                             </table>
                           </div>


                       <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

                   </div>
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
