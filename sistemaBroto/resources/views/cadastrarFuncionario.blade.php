@extends('menu')

@section('conteudo')


<header id="cm-header">
        <nav class="cm-navbar cm-navbar-primary">
            <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
            <div class="cm-flex">
                <h1>Cadastro</h1>
                <form id="cm-search" action="index.php" method="get">
                    <input type="search" name="q" autocomplete="off" placeholder="Search...">
                </form>
            </div>
            <div class="pull-right">
                <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
            </div>
            <div class="dropdown pull-right">
                <button class="btn btn-primary md-notifications-white" data-toggle="dropdown"> <span class="label label-danger">23</span> </button>
                <div class="popover cm-popover bottom">
                    <div class="arrow"></div>
                    <div class="popover-content">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading text-overflow">
                                    <i class="fa fa-fw fa-envelope"></i> Nunc volutpat aliquet magna.
                                </h4>
                                <p class="list-group-item-text text-overflow">Pellentesque tincidunt mollis scelerisque. Praesent vel blandit quam.</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">
                                    <i class="fa fa-fw fa-envelope"></i> Aliquam orci lectus
                                </h4>
                                <p class="list-group-item-text">Donec quis arcu non risus sagittis</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">
                                    <i class="fa fa-fw fa-warning"></i> Holy guacamole !
                                </h4>
                                <p class="list-group-item-text">Best check yo self, you're not looking too good.</p>
                            </a>
                        </div>
                        <div style="padding:10px"><a class="btn btn-success btn-block" href="#">Show me more...</a></div>
                    </div>
                </div>
            </div>
            <div class="dropdown pull-right">
                <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                    <li class="disabled text-center">
                        <a style="cursor:default;"><strong>John Smith</strong></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-cog"></i> Settings</a>
                    </li>
                    <li>
                        <a href="login.html"><i class="fa fa-fw fa-sign-out"></i> Sign out</a>
                    </li>
                </ul>
            </div>
        </nav>
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
    </header>


    <body class="cm-no-transition cm-2-navbar">


           <div id="global">
              <div class="container-fluid">
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


                                     <input type="text" class="form-control" style="max-width: 40%;" name="CPF" id="cpffuncionario"  placeholder="xxx.xxx.xxx-xx"/>

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
