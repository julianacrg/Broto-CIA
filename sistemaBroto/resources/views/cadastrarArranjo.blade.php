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
                        <li><a href="cadastrarItens">Cadastrar Itens</a></li>
                        <li class="active"><a href="cadastraArranjo">Cadastrar Arranjos</a></li>
                        <li><a href="cadastrarFuncionario">Cadastrar Funcionários</a></li>
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

                         <form id="formulario" class="" method="post" action="#">

                            <div class="form-group">
                             <label for="name" class="cols-sm-2 control-label">Nome</label>
                             <div class="cols-sm-10">
                               <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                 <input type="text" class="form-control" style="max-width: 80%;" name="nome" id="nomearranjo"  placeholder="Entre com o nome do Arranjo"/>
                               </div>
                             </div>
                           </div>




                         <div class="row">
                             <label for="name" class="col-sm-2 control-label">Itens</label>
                           </div>
                            <div class="row">
                              <div class="form-group">
                                 <div class="col-sm-5">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-pagelines fa" aria-hidden="true"></i></span>
                                     <select  name="itens->nome" class="form-control">
                                       <option value="">Selecione</option>
                                       @foreach( $Itens as $Item )
                                       <option value="Itens->nome"> {{$Item->nome}}</option>
                                       @endforeach

                                     </select>                                   </div>
                                 </div>
                               <div class="col-sm-2">
                                    <div class="form-group">

                                       <div class="input-group">
                                           <span class="input-group-addon"><i class="fa fa-plus-square fa" aria-hidden="true"></i></span>
                                           <input type="text" class="form-control" style="max-width: 70%;" name="quantidade" id="qtd"  placeholder="Qtd."/>
                                       </div>

                                   </div>
                               </div>
                               <div class="col-sm-4">
                                 <button id="botaoadd"  class="btn btn-primary">Add</button>
                               </div>
                             </div>
                           </div>
                           <table class="table">
                             <thead>
                               <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Item</th>
                                 <th scope="col">Quantidade</th>

                               </tr>
                             </thead>
                             <tbody>
                               <tr>
                                 <th scope="row">1</th>
                                 <td>Rosas Brancas </td>
                                 <td>10</td>

                               </tr>
                               <tr>
                                 <th scope="row">2</th>
                                 <td>Rosas Vermelhas </td>
                                 <td>7</td>

                               </tr>

                             </tbody>
                           </table>




                           <div class="form-group ">
                             <a href="https://deepak646.blogspot.com/" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Cadastrar Arranjo</a>
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
