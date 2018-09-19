<?php
    include "menu.php";
    include "headerorcamento.php";
    include "footer.php";
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
                    <div class="panel-body"> <h1 style="margin:10px;">
                        
                        <form class="form-horizontal">
<fieldset>

                               
                                

                                <!-- Text input-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="nome">Evento</label>  
                                  <div class="col-md-6">
                                  <input id="nome" name="nome" type="text" placeholder="Nome do Evento" class="form-control input-md">
                                    
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="nomecliente">Cliente</label>  
                                  <div class="col-md-6">
                                  <input id="nomecliente" name="nomecliente" type="text" placeholder="Nome do cliente" class="form-control input-md">
                                    
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="local">Local</label>  
                                  <div class="col-md-3">
                                  <input id="local" name="local" type="text" placeholder="Local do Evento" class="form-control input-md">
                                    
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="data">Data</label>  
                                  <div class="col-md-2">
                                  <input id="data" name="data" type="text" placeholder="dd/mm/aa" class="form-control input-md">
                                   
                                 
                               

                                  </div>
                                   <!-- Text input-->
                                
                                  <label class="col-md-3 control-label" for="horario">Horário</label>  
                                  <div class="col-md-2">
                                  <input id="horario" name="horario" type="text" placeholder="00:00" class="form-control input-md">
                                    
                                  </div>
                                </div>

                                

                                <!-- Text input-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="contato">Contato</label>  
                                  <div class="col-md-3">
                                  <input id="contato" name="contato" type="text" placeholder="Telefone de Contato do cliente" class="form-control input-md">
                                    
                                  </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="Arranjo">Arranjos</label>
                                  <div class="col-md-3">
                                    <select id="Arranjo" name="Arranjo" class="form-control">
                                      <option value="1">Arranjo Pequeno Rosas Vermelhas com Folhagem</option>
                                      <option value="2">Arranjo Grande Rosas Brancas com Lírios</option>
                                    </select>
                                  </div>
                                  <label class="col-md-2 control-label" for="quantidade">Quantidade</label>  
                                  <div class="col-md-2">
                                  <input id="quantidade" name="quantidade" type="text" placeholder="Quantidade de arranjos" class="form-control input-md">
                                    
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                  
                                </div>

                                

                                <!-- Multiple Radios -->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="igreja">Igreja</label>
                                  <div class="col-md-4">
                                  <div class="radio">
                                    <label for="igreja-0">
                                      <input type="radio" name="igreja" id="igreja-0" value="1" checked="checked">
                                      Sim
                                    </label>
                                    </div>
                                  <div class="radio">
                                    <label for="igreja-1">
                                      <input type="radio" name="igreja" id="igreja-1" value="2">
                                      Não
                                    </label>
                                    </div>
                                  </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                  <label class="col-md-5 control-label" for="Adicionar"></label>
                                  <div class="col-md-1">
                                    <button id="Adicionar" name="Adicionar" class="btn btn-success">Adicionar</button>
                                    
                                  </div>
                                   <label class="col-md-0 control-label" for="Gerar"></label>
                                  <div class="col-md-4">
                                    <button id="Gerar" name="Gerar" class="btn btn-primary">Gerar</button>
                                  </div>
                                </div>

                               

                                </fieldset>
                                </form>

                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Arranjos</th>
                                      <th scope="col">Quantidade</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Arranjo Pequeno Rosas Vermelhas com Folhagem</td>
                                      <td>3</td>
                                      
                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Arranjo Grande Rosas Brancas com Lírios</td>
                                      <td>2</td>
                                      
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td>Vela Branca</td>
                                      <td>10</td>
                                      
                                    </tr>
                                  </tbody>
                                </table>

                    </h1> </div>
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