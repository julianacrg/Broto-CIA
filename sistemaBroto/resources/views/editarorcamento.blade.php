@extends('menu')
@section('conteudo')



    <header id="cm-header">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                <div class="cm-flex">
                    <h1>Orçamentos</h1>
                    <form id="cm-search" action="#" method="#">
                        <input type="search" name="q" autocomplete="off" placeholder="Search...">
                    </form>
                </div>
                <div class="pull-right">
                    <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
                </div>

            </nav>
            <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                <div class="cm-flex">
                    <div class="nav-tabs-container">
                        <ul class="nav nav-tabs">
                            <li><a href="cadastrarOrçamento">Novo Orçamento</a></li>
                            <li class="active"><a href="editarOrcamento">Editar Orçamento</a></li>

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


                        </div>
                        </div>
                        <table class="table">
                        <thead>
                         <tr>
                           <th scope="col">ID</th>
                           <th scope="col">Tipo de Evento</th>
                           <th scope="col">Cliente</th>
                           <th scope="col">Ação</th>

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


                       </div>
                       </div>
                   </div>
               </div>

           </body>


@endsection('conteudo')
