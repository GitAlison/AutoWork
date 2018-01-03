<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['loguser'])) {
  header('Location: login.php');
  session_destroy();

}
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

  </head>
  <body class="">
    <?php include("modelos/viewHeader.php") ?><!--HEADER-->
    <div class="layout">
    </div>
    <br>    <!--divisao-->
      <div class="row"><!--LINHA CONTEUDO -->
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 "><!--NAV SIDE-->
<?php include("modelos/viewLeftMenu.php") ?><!--side menu-->
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-7 "><!--dados -->
        <?php include("modelos/viewHomePage.php") ?>
          </div>
          <div class="col-xs-12 col-sm-9 col-md-10 col-lg-3">
                <?php include("modelos/viewNoticia.php") ?>
          </div>
        </div><!--FIM LINHA CONTEUDO -->
<?php include("modelos/viewFooter.php") ?>
</div><!--FIM DIV LAYOUT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
