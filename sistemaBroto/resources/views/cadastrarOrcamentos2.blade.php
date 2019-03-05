@extends('menu')

@section('conteudo')


        <body class="cm-no-transition cm-2-navbar">

               <div id="global">
                 @if($errors->all())
                   <div id="time" class="alert alert-danger alert-dismissible text-center" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     @foreach ($errors->all() as $key => $value)
                       <li><strong>{{$value}}</strong></li>
                     @endforeach
                   </div>
                 @endif
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
                         @if(Session::has('mensagem'))

                           <div id="time" class="alert alert-success alert-dismissible text-center " role="alert">
                             <button  type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                             {{Session::get('mensagem')}}
                           </div>
                         @endif

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
                                           <input list="item" type="text" name="itens_id" placeholder="Selecione um Item" class="form-control">
                                           <datalist  id="item" name="itens_id" type="text" />
                                             @foreach($Itens as $e)

                                             <option value="{{$e->id}}">{{ $e->nome }}</option>

                                             @endforeach


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
                                   <a  type="button" href="{{route('ArranjosOrcamentos.index')}}" class="btn btn-primary btn-lg btn-block login-button">Próximo</a>
                                 </div>
                       </div>
                   </div>
               </div>
                  <script type="text/javascript">
                  $(document).ready(function() {
                   $(".meuselect").select2();
                  });

                  setTimeout(function () {
                       document.getElementById("time").style.display = "none";
                     }, 3000);
                     function hide(){
                     document.getElementById("tinme").style.display = "none";
                     }
                  </script>
           </body>

@endsection('conteudo')
