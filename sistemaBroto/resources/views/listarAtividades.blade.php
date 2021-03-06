@extends('menu')
@section('conteudo')


        <body class="cm-no-transition cm-2-navbar">
          <div id="global">
              <div class="container-fluid">
                <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                    <div class="cm-flex">
                        <div class="nav-tabs-container">
                            <ul class="nav nav-tabs">
                                <li><a href="{{route('Atividades.index')}}">Nova Atividade</a></li>
                                <li class="active"><a href="{{route('Atividades.create')}}">Listar Atividade</a></li>


                            </ul>
                        </div>
                    </div>
                </nav>

                  <div class="panel panel-default">

                    <table class="table table-bordered table-striped table-hover table-responsive">
                    <thead>
                     <tr>

                       <th scope="col">Funcionario</th>
                       <th scope="col">Arranjo</th>
                       <th scope="col">Data</th>
                       <th scope="col">Ação</th>

                     </tr>
                    </thead>
                    <tbody>

                      @foreach( $atv as $o )
                     <tr>

                       <td> {{$o->funcionario }}</td>
                       <td>{{$o->arranjo}} </td>
                       <td>{{ $o->data }} </td>

                       <td>
                         <div class="">
                             <a href="{{route('Atividades.edit', $o->id)}}" class="btn btn-warning">Editar</a>
                             <form method="post" onsubmit="return confirm('Apagar Atividade?');" action="{{ route('Atividades.destroy',[$o->id])}}">
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
     </body>
@endsection('conteudo')
