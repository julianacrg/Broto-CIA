@extends('menu')

@section('conteudo')

    <body class="cm-no-transition cm-2-navbar">

       <div id="global">
         @if($errors->all())
           <div id="time" class="alert alert-danger alert-dismissible text-center" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             @foreach ($errors->all() as $key => $value)
               <li><strong>{{$value}}</strong></li>
             @endforeach
           </div>
         @endif
              <div class="container-fluid">

                <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                    <div class="cm-flex">
                        <div class="nav-tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="{{ route('Funcionarios.index') }}">Cadastrar Funcionários</a>
                                <li><a href="{{ route('Funcionarios.create') }}">Listar Funcionários</a></li>
                                <li><a href="{{ route('Funcionarios.show', 1) }}">Listar Funcionários Desativados</a></li>


                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </nav>
                   <div class="panel panel-default">
                     @if(session()->has('mensagem'))
                       <div id="time" class="alert alert-success alert-dismissible text-center" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                         {{session()->get('mensagem')}}
                       </div>
                      @endif
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
                                     <input type="text" class="form-control" name="cpf" id="txtCpf" onkeypress="mascaraCpf()" placeholder="Ex.: 000.000.000-00" maxlength="14" autocomplete="off">
                                   </div>
                                 </div>
                               </div>

                               <div class="form-group">
                                 <label for="email" class="cols-sm-2 control-label">E-mail</label>
                                 <div class="cols-sm-10">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                     <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                     @if ($errors->has('email'))
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('email') }}</strong>
                                         </span>
                                     @endif
                                   </div>
                                 </div>
                               </div>

                               <div class="form-group">
                                 <label for="password" class="cols-sm-2 control-label">Senha</label>
                                 <div class="cols-sm-10">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                     <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                     @if ($errors->has('password'))
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('password') }}</strong>
                                         </span>
                                     @endif
                                   </div>
                                 </div>
                               </div>



                             <div class="form-group ">
                                 <input target="_blank" type="submit"  value="Cadastrar Funcionário" name="btnIncluir" id="button" class="btn btn-primary btn-lg btn-block login-button"></input>
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
                   if(cpf.length==3){
                    document.getElementById('txtCpf').value = cpf +'.';
                }
                   else if(cpf.length==7){
                    document.getElementById('txtCpf').value = cpf +'.';
                }
                   else if (cpf.length==11){
                    document.getElementById('txtCpf').value = cpf +'-';
                }
                }

           </script>
       </body>






















@endsection('conteudo')
