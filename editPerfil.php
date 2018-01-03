<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom -->
    <link href="css/custom.css" rel="stylesheet">

  </head>
  <body>

    <div class="layout">
    <?php include("modelos/viewHeader.php") ?><!--HEADER-->
    </div>
    <!--divisao-->
    <br>
    <!--divisao-->
      <div class="row"><!--LINHA CONTEUDO -->
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 "><!--NAV SIDE-->
    <?php include("modelos/viewLeftMenu.php") ?><!--side menu-->
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-7 "><!--CONTEUDO CENTRAL -->
    <?php include("modelos/viewEditPerfil.php") ?>
        </div>
            <div class="col-xs-12 col-sm-9 col-md-10 col-lg-3">
              <?php include("modelos/viewNoticia.php") ?>

            </div>
          </div>
        </div>
      </div><!--FIM LINHA CONTEUDO -->

      <div class="row">
        <div class="col-lg-12" style="padding:8px;background-color: black;">

          <h2>AutoWork</h2>
          <p>&copy Todos os direitos reservados</p>
          <p>Desenvolvido por Alison Aguiar 2017-2018</p>
          <p>&copy Todos os direitos reservados</p>
        </div>
      </div>



   </div><!--FIM DIV LAYOUT -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
