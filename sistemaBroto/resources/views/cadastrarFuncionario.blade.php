@extends('menu')

@section('conteudo')
    <body class="cm-no-transition cm-2-navbar">

       <div id="global">
              <div class="container-fluid">

                <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                    <div class="cm-flex">
                        <div class="nav-tabs-container">
                            <ul class="nav nav-tabs">
                                <li ><a href="cadastrarItens">Cadastrar Itens</a></li>
                                <li><a href="cadastraArranjo">Cadastrar Arranjos</a></li>
                                <li class="active"><a href="cadastrarFuncionario">Cadastrar Funcionários</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="pull-right" style="border-left:1px solid #e5e5e5"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                    <div class="pull-right"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>
                </nav>
                   <div class="panel panel-default">

                           <div class="main-login main-center" id="divform">

                             <form id="formulario"  method="post" action="{{route('Funcionarios.store')}}">
                               @csrf
                                <div class="form-group">
                                 <label for="name" class="cols-sm-2 control-label">Nome</label>
                                 <div class="cols-sm-10">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                     <input type="text" class="form-control" style="max-width: 80%;" name="nome" id="nomefuncionario"  placeholder="Entre com o nome"/>
                                   </div>
                                 </div>
                               </div>

                               <div class="form-group">
                                 <label for="name" class="cols-sm-2 control-label">CPF</label>
                                 <div class="cols-sm-10">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                     <input type="text" class="form-control" style="max-width: 40%;" name="cpf" id="cpffuncionario"  placeholder="xxx.xxx.xxx-xx"/>
                                   </div>
                                 </div>
                               </div>

                             <div class="form-group ">
                                 <input target="_blank" type="submit"  value="Cadastrar Funcionário" name="btnIncluir" id="button" class="btn btn-primary btn-lg btn-block login-button"></input>
                               </div>

                             </form>
                           </div>

                        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                       <!-- Include all compiled plugins (below), or include individual files as needed -->
                       <script src="js/bootstrap.min.js"></script>

                       <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

                   </div>
               </div>
           </div>

       </body>






















@endsection('conteudo')
