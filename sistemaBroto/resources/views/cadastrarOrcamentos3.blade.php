@extends('menu')

@section('conteudo')


        <body class="cm-no-transition cm-2-navbar">

               <div id="global">

                  <div class="container-fluid">
                    <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                        <div class="cm-flex">
                            <div class="nav-tabs-container">
                                <ul class="nav nav-tabs">
                                  <h2 align="center">Cadastrar Arranjo para o Orçamento do cliente  {{$Orcamentos->cliente}}</h2>

                                </ul>

                            </div>

                        </div>

                          <div class="cols-sm-2"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                          <div class="cols-sm-2"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>


                    </nav>
                       <div class="panel panel-default">


                               <div class="main-login main-center" id="divform">

                                 <div class="panel panel-default">
                                       <form id="formulario" class="" method="post" action="{{ route('ArranjosOrcamentos.store') }}">
                                          @csrf

                                          <div class="input-group">
                                            <input type="hidden" name="orcamentos_id" value="{{$Orcamentos->id}}"> </input>
                                          </div>

                                          <div class="form-group">
                                             <div class="col-sm-5">
                                               <div class="input-group">
                                                 <span class="input-group-addon"><i class="fa fa-pagelines fa" aria-hidden="true"></i></span>
                                                 <select type="text" class="form-control"  name="arranjos_id"  />
                                                 <option>Selecione um Arranjo</option>
                                                 @foreach($Arranjos as $e)

                                                 <option value="{{$e->id}}">{{ $e->nome }}</option>

                                                 @endforeach
                                                 <select>

                                               </div>
                                             </div>
                                           <div class="col-sm-2">
                                                <div class="form-group">

                                                   <div class="input-group">
                                                       <span class="input-group-addon"><i class="fa fa-plus-square fa" aria-hidden="true"></i></span>
                                                       <input  type="number" class="form-control" style="max-width: 70%;" name="qtd_arranjos" placeholder="Qtd."/>
                                                   </div>

                                               </div>
                                           </div>
                                           <div class="col-sm-4">
                                             <button id="botaoadd"  class="btn btn-primary">Add</button>
                                           </div>
                                          </div>

                                        </form>


                                        <table class="table table-bordered table-striped table-hover table-responsive">
                                             <thead>
                                                <tr>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Valor</th>
                                                    <th scope="col">Quantidade</th>
                                                </tr>
                                             </thead>

                                                   <tbody>
                                                     @foreach( $ultItem as $o )
                                                    <tr>
                                                      <td>{{ $o->nome }} </td>
                                                      <td>{{ $o->valor }} </td>
                                                      <td>{{ $o->qtd_arranjos }} </td>
                                                      <td>
                                                        <div class="">
                                                        <form method="post" onsubmit="return confirm('Confirma exclusão ?');" action="{{ route('ArranjosOrcamentos.destroy',[$o->id_arranjos_orcamentos])}}">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button class="btn btn-danger"type="submit" style="font-size:12px"> <i class="fa fa-trash-o "></i></button>
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
               </div>

           </body>

@endsection('conteudo')