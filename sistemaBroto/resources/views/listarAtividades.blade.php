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
                                <li class="active"><a href="{{route('Atividades.create')}}">Listar Orçamento</a></li>


                            </ul>
                        </div>
                    </div>
                    <div class="cols-sm-2"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                          <div class="cols-sm-2"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>
                </nav>

                  <div class="panel panel-default">

                    <table class="table table-bordered table-striped table-hover table-responsive">
                    <thead>
                     <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Funcionario</th>
                       <th scope="col">Arranjo</th>
                       <th scope="col">Data</th>
                       <th scope="col">Ação</th>

                     </tr>
                    </thead>
                    <tbody>

                      @foreach( $atv as $o )
                     <tr>
                       <td>{{ $o->id }} </td>
                       <td> {{$o->funcionario }}</td>
                       <td>{{$o->arranjo}} </td>

                       <td>{{ $o->data }} </td>

                       <td>
                         delete, edite
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
