<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-clearmin.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/roboto.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/material-design.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/small-n-flat.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/c3.min.css')}}">

    <title>Broto & CIA</title>
    <!-- top Header -->
    </head>
    <div id="cm-menu">
              <nav class="cm-navbar cm-navbar-primary">
                  <div class="cm-flex"><a href="home" class="cm-logo"></a></div>
                  <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
              </nav>
              <div id="cm-menu-content">
                  <div id="cm-menu-items-wrapper">
                      <div id="cm-menu-scroller">
                          <ul class="cm-menu-items">
                            <!-- Melhorias: dependendo de qual eu clicar quero que a classe active fique ativa -->
                            <div id="Myli">

                              <!-- contador é um elemento que ouve o clique do mouse -->
                              <li class="contador active"><a href="home" class="sf-house">Home</a></li>
                              <li class="contador"><a href="{{route('Orcamentos.index')}}" class="sf-money">Orçamentos</a></li>
                              <li class="contador"><a href="cadastrarItens" class="sf-notepad">Cadastrar</a></li>
                              <li class="contador"><a href="#" class="sf-brick">Peças</a></li>
                              <li class="contador"><a href="#" class="sf-post-it">Ativdades</a></li>
                              <li class="contador"><a href="#" class="sf-pencil">Pedidos</a></li>
                              <li class="contador"><a href="#" class="sf-layers">Itens</a></li>
                              <li class="contador"><a href="#" class="sf-flower">Arranjos</a></li>
                              <li class="contador"><a href="#" class="sf-profile-group">Funcionários</a></li>
                              <li class="contador"><a href="#" class="sf-file-bookmark">Fornecedores</a></li>
                              <li class="contador"><a href="#" class="sf-wrench-screwdriver">Configurações</a></li>
                              </div>

                              <script type="text/javascript">
                              // Capturar os elementos li dento da div Myli
                              var liContainer = document.getElementById("Myli");
                              // Capturar todos os li com a class="contador" que estiver dentro da div
                              var li = liContainer.getElementsByClassName("contador");

                              //passar por todos os li e adicionar o active na class que foi clicada por ultimo
                              for (var i = 0; i < li.length; i++) {
                                li[i].addEventListener("click", function() {
                                  var current = document.getElementsByClassName("active");
                                  current[0].className = current[0].className.replace(" active", "");
                                  this.className += " active";
                                });
                              }

                              </script>

                          </ul>
                      </div>
                  </div>
              </div>
          </div>




    <header id="cm-header">
                <nav class="cm-navbar cm-navbar-primary">
                    <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                    <div class="cm-flex">
                        <h1></h1>
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
                                        <p class="list-group-item-text text-overflow">Pellentesque.</p>
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
                            <li>  <form>
                                <a action="{{ route('logout') }}"><i class="fa fa-fw fa-sign-out" method="POST"></i> Sign out</a>

                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

<body>
<div class="cm-header">

</div>
    <script src="{{asset('assets/js/lib/jquery-2.1.3.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/clearmin.min.js')}}"></script>
    <script src="{{asset('assets/js/demo/home.js')}}"></script>
    <script src="{{asset('assets/js/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/clearmin.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/d3.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/c3.min.js')}}"></script>
    <script src="{{asset('assets/js/demo/dashboard.js')}}"></script>
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="http://unpkg.com/vue"></script>
    <script type="text/javascript">


    // Get the container element
    var liContainer = document.getElementById("Myli");
    // Get all buttons with class="btn" inside the container
    var li = liContainer.getElementsByClassName("contador");

    // Loop through the buttons and add the active class to the current/clicked button
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });


    }

    </script>

  </body>

<section>
  @yield('conteudo')
</section>

</html>
