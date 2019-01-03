@extends('menu')

@section('conteudo')


        <body class="cm-no-transition cm-2-navbar">

               <div id="global">

                  <div class="container-fluid">
                    <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                        <div class="cm-flex">
                            <div class="nav-tabs-container">
                                <ul class="nav nav-tabs">
                                  <h2 align="center">Cadastrar item para o arranjo  {{$Arranjos->nome}}</h2>

                                </ul>

                            </div>

                        </div>

                          <div class="cols-sm-2"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                          <div class="cols-sm-2"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>


                    </nav>
                       <div class="panel panel-default">

                         @if(Session::has('message'))
                           <div class="alert alert-success">
                             {{Session::get('message')}}
                           </div>
                         @endif
                               <div class="main-login main-center" id="divform">

                                 <form id="formulario" class="" method="post" action="{{ route('ItensArranjos.store') }}">
                                    @csrf
                                    <div class="form-group">
                                      <div class="input-group">
                                        <input type="hidden" name="arranjos_id" v-model="arranjos" value="{{$Arranjos->id}}"> </input>
                                      </div>

                                    </div>

                                    <div class="form-group">
                                       <div class="col-sm-5">
                                         <div class="input-group">
                                           <span class="input-group-addon"><i class="fa fa-pagelines fa" aria-hidden="true"></i></span>
                                           <select type="text" class="form-control"  name="itens_id" v-model="itens_id" id="itensarranjo" />
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
                                       <button id="botaoadd"  class="btn btn-primary">Add</button>
                                     </div>


                                     <table class="table table-bordered table-striped table-hover table-responsive">
                                     <thead>
                                      <tr>

                                        <th scope="col">Nome</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Preço</th>
                                        <th scope="col">Ação</th>

                                      </tr>
                                     </thead>
                                     <tbody>
                                       @foreach($Tb as $e)
                                      <tr>

                                        <td>{{$e->nome}}</td>
                                        <td>{{$e->tipo}} </td>
                                        <td>{{$e->preco}} </td>


                                        <td>
                                          <a class="btn btn-danger">Exluir</a>
                                        </td>

                                      </tr>
                                    @endforeach

                                     </tbody>
                                     </table>

                                   </div>

                                 <div class="form-group ">
                                     <input  target="_blank" type="submit" value="Adicionar Item" name="btnIncluir" id="button"  class="btn btn-primary btn-lg btn-block login-button"></input>
                                   </div>

                                 </form>
                                 <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

                               </div>
                       </div>
                   </div>
               </div>

               <!-- <script type="text/javascript">

                               var global = new Vue({
                  el: '#global',
                  data: {
                    arranjos: '',
                    itens_id: '',
                    qtd_itens:''


                  },
                  mounted () {
                    if (localStorage.arranjos) this.arranjos = localStorage.arranjos;
                    if (localStorage.itens_id) this.itens_id = localStorage.itens_id;
                    if (localStorage.qtd_itens) this.qtd_itens = localStorage.qtd_itens;
                  },
                    methods: {
                          persist () {
                            localStorage.arranjos = this.arranjos;
                            localStorage.itens_id = this.itens_id;
                            localStorage.qtd_itens = this.qtd_itens;
                            console.log('teste');
                          }
                        }
                  })

               </script> -->

           </body>

@endsection('conteudo')
