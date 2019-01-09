@extends('menu')

@section('conteudo')
<body class="cm-no-transition cm-2-navbar">


       <div id="global">
          <div class="container-fluid">
            <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                <div class="cm-flex">
                    <div class="nav-tabs-container">
                        <ul class="nav nav-tabs">
                            <li><a href="cadastrarItens">Cadastrar Itens</a></li>
                            <li class="active"><a href="cadastraArranjo">Cadastrar Arranjos</a></li>
                            <li><a href="cadastrarFuncionario">Cadastrar Funcionários</a></li>
                            <li><a href="cadastrarFornecedor">Cadastrar Fornecedor</a></li>

                        </ul>

                    </div>

                </div>
                <div class="cols-sm-2"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                          <div class="cols-sm-2"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>
            </nav>
               <div class="panel panel-default">
                 @if(Session::has('mensagem'))

                   <div id="time" class="alert alert-success alert-dismissible text-center" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                     {{Session::get('mensagem')}}
                   </div>
                 @endif
                 @if($errors->all())
                   <div class="alert alert-danger alert-dismissible text-center" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     @foreach ($errors->all() as $key => $value)
                       <li><strong>{{$value}}</strong></li>
                     @endforeach
                   </div>
                 @endif

                       <div class="main-login main-center" id="divform">

                         <form id="formulario" class="" method="post" action="{{route('Arranjos.store')}}">
                           @csrf
                            <div class="form-group">
                             <label for="name" class="cols-sm-2 control-label">Nome *</label>
                             <div class="cols-sm-10">
                               <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                 <input type="text" class="form-control" style="max-width: 80%;" name="nome" id="nomearranjo"  placeholder="Entre com o nome do Arranjo"/>
                               </div>
                             </div>
                           </div>

                           <div class="form-group">
                            <label for="categoria" class="cols-sm-2 control-label">Categoria: *</label>
                            <div class="cols-sm-10">
                             <div class="input-group">
                               <span class="input-group-addon"><i class="fa fa-pagelines fa" aria-hidden="true"></i></span>
                                 <select  name="categoria" class="form-control">
                                   <option value="">Selecione</option>
                                   <option value="ARRANJO MESA DE BOLO MAIOR"> ARRANJO MESA DE BOLO MAIOR</option>
                                   <option value="ARRANJO MESA DE BOLO MENOR"> ARRANJO MESA DE BOLO MENOR</option>
                                   <option value="ARRANJOS ALTOS"> ARRANJOS ALTOS</option>
                                   <option value="ARRANJOS BAIXOS"> ARRANJOS BAIXOS</option>
                                   <option value="ARRANJOS MEDIOS"> ARRANJOS MEDIOS</option>
                                   <option value="ARRANJOS MESA DA FAMILIA"> ARRANJOS MESA DA FAMILIA</option>
                                   <option value="ARRANJO MESA DE CAFÉ"> ARRANJO MESA DE CAFÉ</option>
                                   <option value="ARRANJO MESA DE  PRATO QUENTE"> ARRANJO MESA DE  PRATO QUENTE</option>
                                   <option value="ARRANJO MESA REGIONAL"> ARRANJO MESA REGIONAL</option>
                                   <option value="BUQUE DE NOIVA"> BUQUE DE NOIVA</option>
                                   <option value="LAPELAS"> LAPELAS</option>
                                   <option value="BUQUE DE DAMINHA"> BUQUE DE DAMINHA</option>
                                   <option value="BUQUE PARA JOGAR">BUQUE PARA JOGAR</option>
                                   <option value="N">NÃO SE APLICA</option>
                                 </select>
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


                           <div class="form-group ">
                             <input target="_blank" type="submit"  value="Cadastrar Arranjo" name="btnIncluir" id="button" class="btn btn-primary btn-lg btn-block login-button"></input>
                           </div>
                           <label>* Campos obrigatórios</label>
                         </form>
                         <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

                       </div>

                  <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

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
