@extends('menu')

@section('conteudo')



<header class="cm-headermenu">

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
