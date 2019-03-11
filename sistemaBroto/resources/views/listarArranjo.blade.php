@extends('menu')
@section('conteudo')

        <body class="cm-no-transition cm-2-navbar">
          <div id="global">
              <div class="container-fluid">
                <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                    <div class="cm-flex">
                        <div class="nav-tabs-container">
                            <ul class="nav nav-tabs">
                                <li><a href="{{route('Arranjos.index')}}">Cadastrar Arranjo</a></li>
                                <li class="active"><a href="{{route('Arranjos.create')}}">Listar Arranjos</a></li>
                                <li><a href="{{route('Arranjos.show', 1)}}">Listar Arranjos Apagados</a></li>


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
                               <th scope="col">Nome</th>
                               <th scope="col">Valor</th>
                               <th scope="col">Categoria</th>
                               <th scope="col">Foto</th>
                               <th scope="col">Ação</th>

                             </tr>
                            </thead>

                            <tbody>
                              @foreach( $Arranjos as $o )
                             <tr>
                               <td>{{ $o->id }} </td>
                               <td>{{ $o->nome }} </td>
                               <td>{{ $o->valor }} </td>
                               <td>{{ $o->categoria }} </td>
                               <td>

                                 <img src="{{$o->foto}}"></img>

                                  </td>

                               <td>
                                 <a href="{{route('Arranjos.edit', $o->id)}}" class="btn btn-warning">Edite</a>

                                 <div class="">
                                 <form method="post" onsubmit="return confirm('Confirmar exclusão ?');" action="{{ route('Arranjos.destroy',[$o->id])}}">
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
                        <div align="center">
                        {{$Arranjos}}
                        </div>

                  </div>
                  <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

              </div>
          </div>
     </body>
@endsection('conteudo')
