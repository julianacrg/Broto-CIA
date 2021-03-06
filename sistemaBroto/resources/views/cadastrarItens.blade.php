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
                                    <li class="active"><a href="{{ route('Itens.index') }}">Cadastrar Itens</a></li>
                                    <li><a href="{{route('Itens.create')}}">Listar Itens</a></li>
                                    <li><a href="{{route('Itens.show',1)}}">Listar Itens Desativados</a></li>

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

                                 <form id="formulario" class="" method="post" action="{{ route('Itens.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                     <label for="name" class="cols-sm-2 control-label">Nome *</label>
                                     <div class="cols-sm-10">
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-edit fa" aria-hidden="true"></i></span>
                                         <input type="text" class="form-control" style="max-width: 40%;" name="nome" id="nomeitem"  placeholder="Entre com o nome do Item"/>
                                       </div>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                    <label for="unidade" class="cols-sm-2 control-label">Unidade *</label>
                                    <div class="cols-sm-10">
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-database fa" aria-hidden="true"></i></span>
                                        <select  name="unidade" class="form-control" style="max-width: 40%;">
                                       <option >Selecione uma unidade: </option>
                                       <option value="Unidade">Unidade</option>
                                       <option value="Dúzia">Dúzia</option>
                                       <option value="Pacote" >Pacote</option>
                                     </select>
                                      </div>
                                    </div>
                                  </div>

                                       <div class="form-group">
                                     <label for="name" class="cols-sm-2 control-label">Preço *</label>
                                     <div class="cols-sm-10">
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-dollar fa" aria-hidden="true"></i></span>
                                         <input type="number" step="any"  min="0.00" class="form-control" style="max-width: 40%;" name="preco" id="precoitem"  placeholder="Entre com o preço da unidade declarada."/>
                                       </div>
                                     </div>
                                   </div>

                                      <div class="form-group">
                                    <label for="tipo" class="cols-sm-2 control-label">Tipo *</label>
                                    <div class="cols-sm-10">
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                        <select  name="tipo" class="form-control" style="max-width: 40%;">
                                       <option >Selecione um tipo: </option>
                                       <option value="Flor">Flor</option>
                                       <option value="Folhagem" >Folhagem</option>
                                       <option value="Floral">Floral</option>
                                     </select>
                                      </div>
                                    </div>
                                  </div>
                                    <input type="hidden" name="categoria" value="venda">
                                    <input type="hidden" name="quantidade" value=0>
                                <!--
                                 <div class="form-group">
                                    <label for="foto" class="cols-sm-2 control-label">Categoria *</label>
                                    <div class="cols-sm-10">
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-database fa" aria-hidden="true"></i></span>
                                        <select  name="categoria" class="form-control" style="max-width: 40%">
                                           <option>Selecione</option>
                                           <option value="Venda">Venda</option>
                                           <option value="Aluguel"> Aluguel</option>


                                         </select>
                                      </div>
                                    </div>
                                  </div>


                                   <div class="form-group">
                                     <label for="email" class="cols-sm-2 control-label">Quantidade</label>
                                     <div class="cols-sm-10">
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-plus-square fa" aria-hidden="true"></i></span>
                                         <input type="number" min="0" class="form-control" style="max-width: 40%;" name="qtd" id="quantidadeitem"  placeholder="Entre com a quantidade de itens"/>
                                      </div>
                                     </div>
                                   </div>




                                   <div class="form-group">
                                    <label for="foto" class="cols-sm-2 control-label">Foto</label>
                                    <div class="cols-sm-10">
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-image fa" aria-hidden="true"></i></span>
                                        <input type="file" name="foto" class="btn btn-success" id="foto" accept="image/png, image/jpeg"  multiple />
                                      </div>
                                    </div>
                                  </div>

                                -->


                                    <div class="form-group">
                                     <label for="name" class="cols-sm-2 control-label">Descrição</label>
                                     <div class="cols-sm-10">
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-bars fa" aria-hidden="true"></i></span>
                                         <textarea type="text" class="form-control" style="max-width: 90%;" name="descricao" id="descricaoitem"  placeholder="Entre com a descrição do item"/></textarea>
                                       </div>
                                     </div>
                                   </div>

                                 <div class="form-group ">
                                     <input  target="_blank" type="submit" value="Cadastrar Item" name="btnIncluir" id="button"  class="btn btn-primary btn-lg btn-block login-button"></input>
                                   </div>

                                   <label>* Campos obrigatórios</label>

                                 </form>
                                 <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

                               </div>
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
