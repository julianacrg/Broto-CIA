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
        @if(Session::has('message'))
          <div class="alert alert-success">
            {{Session::get('message')}}
          </div>
        @endif
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
                              <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{route('home')}}" class="sf-house">Home</a></li>
                              <li class="{{ request()->is('Orcamentos/*',"Orcamentos") ? 'active' : '' }}"><a href="{{route('Orcamentos.index')}}" class="sf-money">Orçamentos</a></li>
                              <li class="{{ request()->is('Itens/*',"Itens") ? 'active' : '' }}"><a href="{{route('Itens.index')}}" class="sf-layers">Itens</a></li>
                              <li class="{{ request()->is('Arranjos/*',"Arranjos") ? 'active' : '' }}"><a href="{{route('Arranjos.index')}}" class="sf-flower">Arranjos</a></li>
                              {{-- <li class="contador"><a href="cadastrarItens" class="sf-notepad">Cadastrar</a></li> --}}
                              <li class="{{ request()->is('#') ? 'active' : '' }}"><a href="#" class="sf-brick">Peças</a></li>
                              <li class="{{ request()->is('Atividades/*',"Atividades") ? 'active' : '' }}"><a href="{{route('Atividades.index')}}" class="sf-post-it">Atividades</a></li>
                              {{-- <li class="{{ request()->is('Igrejas/*',"Igrejas") ? 'active' : '' }}"><a href="{{route('Igrejas.index')}}" class="sf-institution">Igrejas</a></li> --}}
                              <li class="{{ request()->is('#',"#") ? 'active' : '' }}"><a href="#" class="sf-pencil">Pedidos</a></li>
                              <li class="{{ request()->is('Funcionarios/*',"Funcionarios") ? 'active' : '' }}"><a href="{{route('Funcionarios.index')}}" class="sf-profile-group">Funcionários</a></li>
                              <li class="{{ request()->is('Fornecedores/*',"Fornecedores") ? 'active' : '' }}"><a href="{{route('Fornecedores.index')}}" class="sf-file-bookmark">Fornecedores</a></li>
                              <li class="{{ request()->is('#',"#") ? 'active' : '' }}"><a href="#" class="sf-wrench-screwdriver">Configurações</a></li>
                              </div>

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
                        <form id="cm-search" action="#" method="get">
                            <input type="search" name="q" autocomplete="off" placeholder="Search...">
                        </form>
                    </div>
                    <div class="pull-right">
                        <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
                    </div>
                    {{-- <div class="dropdown pull-right"> --}}
                        {{-- <button class="btn btn-primary md-notifications-white" data-toggle="dropdown"> <span class="label label-danger"></span> </button> --}}
                        {{-- <div class="popover cm-popover bottom">
                            <div class="arrow"></div> --}}
                            {{-- <div class="popover-content">
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
                            </div> --}}
                        {{-- </div>
                    </div> --}}
                    <div class="dropdown pull-right">
                        <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
                        <ul class="dropdown-menu">
                            <li class="disabled text-center">
                                <a style="cursor:default;"><strong>@if ( Auth::check() )Logado como {{Auth::user()->name}}
                                  @else Deslogado @endif</strong></a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-cog"></i> Configurações</a>
                            </li>
                            <li>
                                <a  href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                               <i class="fa fa-fw fa-sign-out"></i>
                                               {{ __('Logout') }}
                                  </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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

    <script src="{{asset('assets/js/fastclick.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/clearmin.min.js')}}"></script>
    <script src="{{asset('assets/js/demo/home.js')}}"></script>
    <script src="{{asset('assets/js/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/d3.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/c3.min.js')}}"></script>
    <script src="{{asset('assets/js/demo/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/pushy.js') }}"></script>
    <script src="{{ asset('assets/js/pushy.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>

  </body>

<section>
  @yield('conteudo')
</section>

</html>
