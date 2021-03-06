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
                 @if(session()->has('mensagem'))
                   <div id="time" class="alert alert-success alert-dismissible text-center" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                     {{session()->get('mensagem')}}
                   </div>
                  @endif

                 <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                     <div class="cm-flex">
                         <div class="nav-tabs-container">
                             <ul class="nav nav-tabs">
                                 <li class="active"><a href="{{route('Igrejas.index')}}">Cadastrar Igreja</a></li>
                                 <li><a href="{{route('Igrejas.create')}}">Listar igrejas</a></li>
                             </ul>
                         </div>
                     </div>
                 </nav>

                    <div class="panel panel-default">
                            <div class="main-login main-center" id="divform">

                              <form id="formulario" class="" method="post" action="{{route('Igrejas.store') }}">
                                @csrf

                                <div class="form-group">
                                 <label for="orcamentos_id" class="cols-sm-2 control-label">Orçamento *</label>
                                 <div class="cols-sm-10">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                     <select  name="orcamentos_id" class="form-control" style="max-width: 80%;">
                                        <option value="">Selecione o orçamento</option>
                                        @foreach ($orcamentos as $a)
                                        <option value="{{$a->id}}">{{$a->cliente}} - {{$a->evento}}</option>
                                        @endforeach
                                    </select>
                                   </div>
                                 </div>
                               </div>

                                <div class="form-group">
                                  <label for="nome" class="cols-sm-2 control-label">Nome *</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 80%;" name="nome" id="nome"  placeholder="Entre com o nome da Igreja"/>
                                    </div>
                                  </div>
                                </div>

                                   <div class="form-group">
                                  <label for="endereço" class="cols-sm-2 control-label">Endereço *</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-building fa" aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" style="max-width: 90%;" name="endereço" id="endereço"  placeholder="Entre com o Endereço"/>
                                    </div>
                                  </div>
                                </div>

                                 <div class="form-group">
                                  <label for="data" class="cols-sm-2 control-label">Data *</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                                      <input type="date" class="form-control" style="max-width: 30%;" name="data" id="data"  placeholder="Entre com a data do Evento"/>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="horario" class="cols-sm-2 control-label">Horario *</label>
                                  <div class="cols-sm-10">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
                                      <input type="time" class="form-control" style="max-width: 30%;" name="horario" id="horario"  placeholder="Entre com a hora do Evento"/>
                                    </div>
                                  </div>
                                </div>

                                <label>* Campos Obrigatórios</label>

                                <div class="form-group ">
                                  <input target="_blank" type="submit" id="button" value= "Adicionar Igreja" name="btnIncluir" class="btn btn-primary btn-lg btn-block login-button"></input>
                                </div>

                              </form>

                              <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>

                        </div>

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
