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
                 @if(Session::has('message'))
                   <div class="alert alert-success">
                     {{Session::get('message')}}
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

                             <div class="input-group">
                               <label for="categoria" class="cols-sm-2 control-label">Categoria:</label>
                               <div class="cols-sm-10">
                               <span class="input-group-addon"><i class="fa fa-pagelines fa" aria-hidden="true"></i></span>
                               <select  name="categoria" class="form-control">
                                 <option value="">Selecione</option>
                                 <option value="Mesa"> Mesa</option>
                                 <option value="Cafe da Manhã">Cafe da manhã</option>
                                 <option value="Corredor">Corredor</option>
                                 <option value="Nâo se aplica">Não se Aplica</option>

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
                             <input target="_blank" type="submit"  value="Cadastrar Arranjo" name="btnIncluir" id="button" class="btn btn-primary btn-lg btn-block login-button"></input>
                           </div>
                           <label>* Campos obrigatórios</label>
                         </form>
                         <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

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
