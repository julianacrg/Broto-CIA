@extends('menu')

@section('conteudo')


        <body class="cm-no-transition cm-2-navbar">

               <div id="global">

                  <div class="container-fluid">
                    <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                        <div class="cm-flex">
                            <div class="nav-tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="cadastrarItens">Cadastrar Itens</a></li>
                                    <li><a href="cadastraArranjo">Cadastrar Arranjos</a></li>
                                    <li><a href="cadastrarFuncionario">Cadastrar Funcionários</a></li>
                                    <li><a href="cadastrarFornecedor">Cadastrar Fornecedor</a></li>

                                </ul>

                            </div>

                        </div>
                       
                          <div class="cols-sm-2"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                          <div class="cols-sm-2"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>
                          
                       
                    </nav>
                       <div class="panel panel-default">

                               <div class="main-login main-center" id="divform">

                                 <form id="formulario" class="" method="post" action="{{ route('Itens.store') }}">
                                    @csrf
                                    <div class="form-group">
                                     <label for="name" class="cols-sm-2 control-label">Nome</label>
                                     <div class="cols-sm-10">
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                         <input type="text" class="form-control" style="max-width: 40%;" name="nome" id="nomeitem"  placeholder="Entre com o nome do Item"/>
                                       </div>
                                     </div>
                                   </div>


                                   <div class="form-group">
                                     <label for="name" class="cols-sm-2 control-label">Categoria</label>
                                     <div class="cols-sm-10">
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                         <input type="text" class="form-control" style="max-width: 40%;" name="categoria" id="categoriaitem"  placeholder="Entre com o a categoria do item"/>
                                       </div>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label for="email" class="cols-sm-2 control-label">Quantidade</label>
                                     <div class="cols-sm-10">
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-map-marker fa" aria-hidden="true"></i></span>
                                         <input type="text" class="form-control" style="max-width: 40%;" name="qtd" id="quantidadeitem"  placeholder="Entre com a quantidade de itens"/>
                                      </div>
                                     </div>
                                   </div>

                                      <div class="form-group">
                                     <label for="name" class="cols-sm-2 control-label">Preço Unitário</label>
                                     <div class="cols-sm-10">
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                         <input type="text" class="form-control" style="max-width: 40%;" name="preco" id="precoitem"  placeholder="Entre com o preço uni."/>
                                       </div>
                                     </div>
                                   </div>

                                     <div class="form-group">
                                     <label for="name" class="cols-sm-2 control-label">Tipo</label>
                                     <div class="cols-sm-10">
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                         <input type="text" class="form-control" style="max-width: 40%;" name="preco" id="precoitem"  placeholder="Entre com o tipo"/>
                                       </div>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                    <label for="foto" class="cols-sm-2 control-label">Foto</label>
                                    <div class="cols-sm-10">
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                        <input type="file" name="foto" class="btn btn-success" id="foto" accept="image/png, image/jpeg"  multiple />
                                      </div>
                                    </div>
                                  </div>


                                    <div class="form-group">
                                     <label for="name" class="cols-sm-2 control-label">Descrição</label>
                                     <div class="cols-sm-10">
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                                         <textarea type="text" class="form-control" style="max-width: 90%;" name="descricao" id="descricaoitem"  placeholder="Entre com a descrição do item"/></textarea>
                                       </div>
                                     </div>
                                   </div>

                                 <div class="form-group ">
                                     <input  target="_blank" type="submit" value="Cadastrar Item" name="btnIncluir" id="button"  class="btn btn-primary btn-lg btn-block login-button"></input>
                                   </div>

                                 </form>
                               </div>
                       </div>
                   </div>
               </div>

           </body>

@endsection('conteudo')
