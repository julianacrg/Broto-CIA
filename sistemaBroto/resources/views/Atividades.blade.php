@extends('menu')

@section('conteudo')
<body class="cm-no-transition cm-2-navbar">


       <div id="global">
          <div class="container-fluid">
            <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                <div class="cm-flex">
                    <div class="nav-tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="{{route('Atividades.index')}}">Cadastrar Atividades</a></li>
                            <li><a href="{{route('Atividades.create')}}">Listar Atividades</a></li>
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

                       <div class="main-login main-center" id="divform">

                         <form id="formulario" class="" method="post" action="{{route('Atividades.store')}}">
                           @csrf
                           <div class="form-group">
                            <label for="data" class="cols-sm-2 control-label">Data *</label>
                            <div class="cols-sm-10">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                                <input type="date" class="form-control" style="max-width: 30%;" name="data" id="data"  placeholder="Entre com a data do Ativdade"/>
                              </div>
                            </div>
                          </div>


                          <div class="row">
                              <div class="form-group">
                                 <div class="col-sm-5">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-pagelines fa" aria-hidden="true"></i></span>
                                     <select type="text" class="form-control"  name="funcionarios_id"  />
                                     <option value="">Selecione um Funcionarios </option>
                                     @foreach($Funcionario as $e)

                                     <option value="{{$e->id}}">{{ $e->nome }}</option>

                                     @endforeach
                                     <select>
                                   </div>
                                 </div>
                              </div>
                            </div>
                            <br>
                          <div class="row">
                          <div class="form-group">
                             <div class="col-sm-4">

                               <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-pagelines fa" aria-hidden="true"></i></span>
                                 <select  type="text"  name="arranjos_orcamentos_id" class="form-control">
                                   <option value="">Selecione um Arranjos</option>
                                   @foreach( $Arranjos as $a )

                                   <option value="{{$a->id}}"> {{$a->nome}}</option>
                                   @endforeach

                                 </select>
                               </div>
                             </div>
                             </div>
                              </div>
                             <br>

                           <!-- <table class="table">
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
                           </table> -->




                           <div class="form-group ">
                             <input target="_blank" type="submit"  value="Cadastrar Atividade" name="btnIncluir" id="button" class="btn btn-primary btn-lg btn-block login-button"></input>
                           </div>
                           <label>* Campos obrigatórios</label>
                         </form>
                         <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>





                    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                   <!-- Include all compiled plugins (below), or include individual files as needed -->
                   <script src="js/bootstrap.min.js"></script>

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
