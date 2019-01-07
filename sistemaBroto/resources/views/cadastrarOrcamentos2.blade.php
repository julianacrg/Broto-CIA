@extends('menu')

@section('conteudo')


        <body class="cm-no-transition cm-2-navbar">

               <div id="global">

                  <div class="container-fluid">
                    <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                        <div class="cm-flex">
                            <div class="nav-tabs-container">
                                <ul class="nav nav-tabs">
                                  <h2 align="center">Cadastrar item para o Orçamento do cliente  {{$Orcamentos->cliente}}</h2>

                                </ul>

                            </div>

                        </div>

                          <div class="cols-sm-2"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                          <div class="cols-sm-2"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>


                    </nav>
                       <div class="panel panel-default">


                               <div class="main-login main-center" id="divform">

                                 <form id="formulario" class="" method="post" action="{{ route('ItensOrcamentos.store') }}">
                                    @csrf
                                    <div class="form-group">
                                      <div class="input-group">
                                        <input type="hidden" name="orcamentos_id" value="{{$Orcamentos->id}}"> </input>
                                      </div>

                                    </div>

                                    <div class="form-group">
                                       <div class="col-sm-5">
                                         <div class="input-group">
                                           <span class="input-group-addon"><i class="fa fa-pagelines fa" aria-hidden="true"></i></span>
                                           <select type="text" class="form-control"  name="itens_id" id="itensarranjo" />
                                           <option>Selecione um Item</option>
                                           @foreach($Itens as $e)

                                           <option value="{{$e->id}}">{{ $e->nome }}</option>

                                           @endforeach
                                           <select>

                                         </div>
                                       </div>
                                     <div class="col-sm-2">
                                          <div class="form-group">

                                             <div class="input-group">
                                                 <span class="input-group-addon"><i class="fa fa-plus-square fa" aria-hidden="true"></i></span>
                                                 <input  type="number" class="form-control" style="max-width: 70%;" name="qtd_itens" v-model="qtd_itens" id="qtd"  placeholder="Qtd."/>
                                             </div>

                                         </div>
                                     </div>
                                     <div class="col-sm-4">
                                       <button id="botaoadd"  type="submit"class="btn btn-primary">Add</button>
                                     </div>
                                   </div>


                                 </form>


                                  <table class="table table-bordered table-striped table-hover table-responsive">
                                       <thead>
                                          <tr>
                                              <th scope="col">Nome</th>
                                              <th scope="col">Tipo</th>
                                              <th scope="col">Quantidade</th>
                                              <th scope="col">Ação</th>
                                          </tr>
                                       </thead>

                                             <tbody>
                                               {{-- @if ($ultItem ) --}}
                                               @foreach( $ultItem as $o )
                                              <tr>
                                                <td>{{ $o->nome }} </td>
                                                <td>{{ $o->tipo }} </td>
                                                <td>{{ $o->qtd_itens }} </td>
                                                <td>
                                                  <div class="">
                                                  <form method="post" onsubmit="return confirm('Confirma exclusão ?');" action="{{ route('ItensOrcamentos.destroy',[$o->id_itens_orcamentos])}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger"type="submit" style="font-size:12px"> <i class="fa fa-trash-o "></i></button>
                                                  </form>
                                                  </div>
                                                </td>

                                              </tr>
                                              @endforeach
                                              {{-- @endif --}}
                                             </tbody>

                                 </table>




                                 <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

                               </div>
                               <div class="form-group ">
                                   <a  type="button" href="{{route('ArranjosOrcamentos.index')}}" class="btn btn-primary btn-lg btn-block login-button">Adiciona Arranjo(2/3)</a>
                                 </div>
                       </div>
                   </div>
               </div>

           </body>

@endsection('conteudo')