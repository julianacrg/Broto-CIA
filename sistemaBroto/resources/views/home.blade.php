@extends('menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                      <div class="col-sm-3">

                      </div>
                    <div class="jumbotron col-md-6">

                      <h2 class="text-center" >Sistema Broto e CIA  </h2>
                      <div class="home-wrap">
                        <!-- home slick -->
                        <div id="home-slick">
                          <!-- banner -->
                          <div class="banner banner-1">
                              <img src="./img/lab.jpg" alt="" height="400" width="¨560">
                              <div class="banner-caption text-center">
                              <h3 class="white-color font-weak"></h3>
                              </div>
                          </div>
                          <!-- /banner -->
                        </div>
                        <!-- /home slick -->
                      </div>
                      <!-- /home wrap -->

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
