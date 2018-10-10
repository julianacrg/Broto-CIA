<?php
    include "menu.php";
    include "headercadastro.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-clearmin.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/roboto.css">
        <link rel="stylesheet" type="text/css" href="assets/css/material-design.css">
        <link rel="stylesheet" type="text/css" href="assets/css/small-n-flat.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/c3.min.css">
        <title>Broto & Cia</title>
    </head>
 <body class="cm-no-transition cm-2-navbar">
      
    
        <div id="global">
           <div class="container-fluid">
                <div class="panel panel-default">
                     
                        <div class="main-login main-center" id="divform">
                       
                          <form id="formulario" class="" method="post" action="#">
                            
                             <div class="form-group">
                              <label for="name" class="cols-sm-2 control-label">Nome</label>
                              <div class="cols-sm-10">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-bank fa" aria-hidden="true"></i></span>
                                  <input type="text" class="form-control" style="max-width: 80%;" name="nome" id="nomefuncionario"  placeholder="Entre com o nome do Item"/>
                                </div>
                              </div>
                            </div>


                            <div class="form-group">
                              <label for="name" class="cols-sm-2 control-label">CPF</label>
                              <div class="cols-sm-10">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                  <input type="text" class="form-control" style="max-width: 40%;" name="CPF" id="cpffuncionario"  placeholder="Entre com o a categoria do item"/>
                                </div>
                              </div>
                            </div>

                            

                          <div class="form-group ">
                              <a href="https://deepak646.blogspot.com/" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Cadastrar Funcionário</a>
                            </div>

                            
                          </form>
                        </div>
                      
                    

                     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <!-- Include all compiled plugins (below), or include individual files as needed -->
                    <script src="js/bootstrap.min.js"></script>

                    <footer class="cm-footer"><span class="pull-left">Connectado como Admin</span><span class="pull-right">&copy; J2C Sistemas</span></footer>
                   
                </div>
            </div>
        </div>
        <script src="assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="assets/js/jquery.mousewheel.min.js"></script>
        <script src="assets/js/jquery.cookie.min.js"></script>
        <script src="assets/js/fastclick.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/clearmin.min.js"></script>
        <script src="assets/js/lib/d3.min.js"></script>
        <script src="assets/js/lib/c3.min.js"></script>
        <script src="assets/js/dashboard.js"></script>
    </body>
</html>