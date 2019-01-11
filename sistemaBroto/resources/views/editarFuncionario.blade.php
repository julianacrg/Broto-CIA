@extends('menu')

@section('conteudo')

    <body class="cm-no-transition cm-2-navbar">

       <div id="global">

              <div class="container-fluid">

                <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                    <div class="cm-flex">
                        <div class="nav-tabs-container">
                            <ul class="nav nav-tabs">
                                <li><a href="{{ route('Funcionarios.index') }}">Cadastrar Funcionários</a>
                                <li><a href="{{ route('Funcionarios.create') }}">Listar Funcionários</a></li>
                                <li><a href="{{ route('Funcionarios.show', 1) }}">Listar Funcionários Apagados</a></li>


                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cols-sm-2"><a title="Download as PDF" class="btn btn-default btn-light md-file-download"></a></div>
                          <div class="cols-sm-2"><a title="Customize indicators" class="btn btn-default btn-light md-settings"></a></div>
                </nav>
                   <div class="panel panel-default">
                     @if(session()->has('mensagem'))
                       <div id="time" class="alert alert-success alert-dismissible text-center" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                         {{session()->get('mensagem')}}
                       </div>
                      @endif
                           <div class="main-login main-center" id="divform">

                             <form id="formulario"  method="post" action="{{route('Funcionarios.update', $Func->id) }}">
                               @csrf
                               @method('PATCH')
                                <div class="form-group">
                                 <label for="name" class="cols-sm-2 control-label">Nome</label>
                                 <div class="cols-sm-10">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                     <input type="text" class="form-control" style="max-width: 80%;" name="nome" id="nomefuncionario"  value="{{$Func->nome}}"/>
                                   </div>
                                 </div>
                               </div>

                               <div class="form-group">
                                 <label for="name" class="cols-sm-2 control-label">CPF</label>
                                 <div class="cols-sm-10">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                     <input type="text" class="form-control " name="cpf" value="{{$Func->cpf}}" maxlength="14" autocomplete="off">
                                   </div>
                                 </div>
                               </div>

                             <div class="form-group ">
                                 <input target="_blank" type="submit"  value="Editar Funcionário" name="btnIncluir" id="button" class="btn btn-primary btn-lg btn-block login-button"></input>
                               </div>

                             </form>
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
