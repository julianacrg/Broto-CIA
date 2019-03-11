@extends('menu')

@section('conteudo')

    <body class="cm-no-transition cm-2-navbar">

       <div id="global">

              <div class="container-fluid">

                <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                    <div class="cm-flex">
                        <div class="nav-tabs-container">
                            <ul class="nav nav-tabs">
                                <h4 align="center">Editando Atividade: {{$atv->id}}</h4>

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
                           <div class="main-login main-center row" id="divform">

                             <form id="formulario"  method="post" action="{{route('Atividades.update', $atv->id) }}">
                               @csrf
                               @method('PATCH')
                                <div class="form-group">
                                 <label for="name" class="cols-sm-2 control-label">Data</label>
                                 <div class="cols-sm-10">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                                     <input type="date" class="form-control" style="max-width: 30%;" name="data" id="data"  value="{{$atv->data}}"/>
                                   </div>
                                 </div>
                               </div>

                               <div class="form-group">
                                 <div class="col-sm-5">
                                   <label for="funcionarios_id" class="cols-sm-2 control-label">Funcionário</label>
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-pagelines fa" aria-hidden="true"></i></span>
                                      <input  name="funcionarios_id" value="{{$atv->id}}" list="funcionario" class="form-control">
                                      <datalist id="funcionario" type="text"   name="funcionarios_id"  />
                                      @foreach($Funcionario as $e)

                                      <option value="{{$e->id}}">{{ $e->nome }}</option>

                                      @endforeach
                                    </datalist>
                                    </div>
                                  </div>
                               </div>

                               <div class="form-group">

                                  <div class="col-sm-4">
                                    <label for="arranjos_orcamentos_id class="cols-sm-2 control-label"">Arranjos</label>
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-pagelines fa" aria-hidden="true"></i></span>
                                      <input  name="arranjos_orcamentos_id" list="arranjo" value="{{$atv->arranjos_orcamentos_id}}"  class="form-control">
                                      <datalist id="arranjo" type="text"  name="arranjos_orcamentos_id">
                                        @foreach( $Arranjos as $a )

                                        <option value="{{$a->id}}"> {{$a->nome}}</option>

                                        @endforeach
                                      </datalist>
                                    </div>
                                  </div>
                                </div>

                             <div class="form-group ">
                              <input target="_blank" type="submit"  value="Editar Atividade" name="btnIncluir" id="button" class="btn btn-primary btn-lg btn-block login-button"></input>
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
