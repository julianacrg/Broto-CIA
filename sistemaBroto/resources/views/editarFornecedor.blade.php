@extends('menu')

@section('conteudo')

    <body class="cm-no-transition cm-2-navbar">

       <div id="global">

              <div class="container-fluid">

                <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                    <div class="cm-flex">
                        <div class="nav-tabs-container">
                            <ul class="nav nav-tabs">
                                <h4 align="center">Editando Fornecedor: {{$forn->nome}}</h4>

                            </ul>
                        </div>
                    </div>
                </nav>
                   <div class="panel panel-default">
                     @if(session()->has('mensagem'))
                       {{Session::forget('mensagem')}}
                       <div id="time" class="alert alert-success alert-dismissible text-center" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                         {{session()->get('mensagem')}}
                         {{Session::forget('mensagem')}}
                       </div>
                      @endif
                           <div class="main-login main-center" id="divform">

                             <form id="formulario"  method="post" action="{{route('Fornecedores.update', $forn->id) }}">
                               @csrf
                               @method('PATCH')
                                <div class="form-group">
                                 <label for="name" class="cols-sm-2 control-label">Nome</label>
                                 <div class="cols-sm-10">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                     <input type="text" class="form-control" style="max-width: 80%;" name="nome" id="nomeFornecedor"  value="{{$forn->nome}}"/>
                                   </div>
                                 </div>
                               </div>

                               <div class="form-group">
                                 <label for="name" class="cols-sm-2 control-label">CNPJ</label>
                                 <div class="cols-sm-10">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                     <input type="text" class="form-control" style="max-width: 40%;" name="cpf" id="txtCpf" onkeypress="mascaraCpf()" maxlength="18" autocomplete="off" value="{{$forn->cpf}}"/>
                                   </div>
                                 </div>
                               </div>

                             <div class="form-group ">
                                 <input target="_blank" type="submit"  value="Editar Fornecedor" name="btnIncluir" id="button" class="btn btn-primary btn-lg btn-block login-button"></input>
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

              function mascaraCpf(){
                  var cpf = document.getElementById('txtCpf').value;
                   if(cpf.length==2){
                    document.getElementById('txtCpf').value = cpf +'.';
                }
                   else if(cpf.length==6){
                    document.getElementById('txtCpf').value = cpf +'.';
                }
                   else if (cpf.length==12){
                    document.getElementById('txtCpf').value = cpf +'/';
                }
                else if (cpf.length==15){
                 document.getElementById('txtCpf').value = cpf +'-';
               }

                }

           </script>
       </body>






















@endsection('conteudo')
