@extends('menu')

@section('conteudo')


        <body class="cm-no-transition cm-2-navbar">

               <div id="global">

                  <div class="container-fluid">
                    <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                        <div class="cm-flex">
                            <div class="nav-tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="{{ route('Itens.index') }}">Cadastrar Itens</a></li>
                                    <li><a href="{{route('Itens.create')}}">Listar Itens</a></li>
                                    <li><a href="#">Listar Itens Desativados</a></li>

                                </ul>

                            </div>

                        </div>

                          <div class="cols-sm-2"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                          <div class="cols-sm-2"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>

                    </nav>
                       <div class="panel panel-default">

                               <div class="main-login main-center" id="divform">

                                 <form id="formulario" class="" method="post" action="{{route('Itens.update', $Itens->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                     <label for="name" class="cols-sm-2 control-label">Nome *</label>
                                     <div class="cols-sm-10">
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-edit fa" aria-hidden="true"></i></span>
                                         <input type="text" class="form-control" style="max-width: 40%;" name="nome" id="nomeitem"  value="{{$Itens->nome}}"/>
                                       </div>
                                     </div>
                                   </div>

                                       <div class="form-group">
                                     <label for="name" class="cols-sm-2 control-label">Preço Unitário *</label>
                                     <div class="cols-sm-10">
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-dollar fa" aria-hidden="true"></i></span>
                                         <input type="number" step="any" min="0,00" class="form-control" style="max-width: 40%;" name="preco" id="precoitem"  value="{{$Itens->preco}}"/>
                                       </div>
                                     </div>
                                   </div>

                                      <div class="form-group">
                                    <label for="foto" class="cols-sm-2 control-label">Tipo *</label>
                                    <div class="cols-sm-10">
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                        <select  name="tipo" class="form-control" style="max-width: 40%;">
                                       <option value="{{$Itens->tipo}}">{{$Itens->tipo}} </option>
                                       <option value="Peça">Peça</option>
                                       <option value="Flor">Flor</option>
                                       <option value="Folhagem" >Folhagem</option>
                                       <option value="Acessório">Acessório</option>
                                     </select>
                                      </div>
                                    </div>
                                  </div>


                                 <div class="form-group">
                                    <label for="foto" class="cols-sm-2 control-label">Categoria *</label>
                                    <div class="cols-sm-10">
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-database fa" aria-hidden="true"></i></span>
                                        <select  name="categoria" class="form-control" style="max-width: 40%">
                                           <option value="{{$Itens->categoria}}">{{$Itens->categoria}}</option>
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
                                         <input type="number" min="0" class="form-control" style="max-width: 40%;" name="qtd" id="quantidadeitem"  value="{{$Itens->qtd}}"/>
                                      </div>
                                     </div>
                                   </div>


                                   <div class="form-group">
                                    <label for="foto" class="cols-sm-2 control-label">Foto</label>
                                    <div class="cols-sm-10">
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-image fa" aria-hidden="true"></i></span>
                                        <input type="file" name="foto" class="btn btn-success" id="foto" accept="image/png, image/jpeg"  multiple value="{{$Itens->foto}}" />
                                      </div>
                                    </div>
                                  </div>


                                    <div class="form-group">
                                     <label for="name" class="cols-sm-2 control-label">Descrição</label>
                                     <div class="cols-sm-10">
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-bars fa" aria-hidden="true"></i></span>
                                         <textarea type="text" class="form-control" style="max-width: 90%;" name="descricao" id="descricaoitem"  value="{{$Itens->descricao}}"/></textarea>
                                       </div>
                                     </div>
                                   </div>

                                 <div class="form-group ">
                                     <input  target="_blank" type="submit" value="Editar Item" name="btnIncluir" id="button"  class="btn btn-primary btn-lg btn-block login-button"></input>
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
