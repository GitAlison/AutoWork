<?php
    
  if (isset($_GET['logout'])) {
    header('Location: login.php');
    session_destroy();

  }
    include_once('conexoes/sessionUser.php');
    
    $_SESSION['user_nome'] = ucwords($_SESSION['user_nome']);
    $_SESSION['user_sobrenome'] = ucwords($_SESSION['user_sobrenome']);

    

 ?>
<nav class="navbar navbar-inverse minha-nav"><!--BARRA DE NAVEGAÇÃO-->
<div class="">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">AUTO-WORK</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-left">
      <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Pagina inicial</a></li>
      <li class=""><a href="#"><span class="glyphicon glyphicon-barcode"></span> Produtos</a></li>

      <li><a href="#"><span class="glyphicon glyphicon-picture"></span> Fotos</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Clientes</a></li>


    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="editPerfil.php"><span class="glyphicon glyphicon-wrench"></span> Editar Perfil</a></li>
      <li><a href="?logout"><span class="glyphicon glyphicon-off"></span> Sair &nbsp;&nbsp;&nbsp;</a></li>

    </ul>
    <form class="navbar-form navbar-right" role="search">
      <div class="input-group">
<input type="text" class="form-control" placeholder="Pesquisar...">
<span class="input-group-btn">
  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
</span>
</div><!-- /input-group -->
    </form>
  </div>
</div>
</nav><!--FIM BARRA DE NAVEGAÇÃO-->

<div id="perfil" class="">
<div class="row"><!--LINHA PERFIL -->
  <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 container"><!--FOTO -->
    <div class="center text-center " id="foto">00</div>
  </div>

  <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 container"><!--dados -->
    <div id="dados">
      <h1><?php echo $_SESSION['user_nome'].' '.$_SESSION['user_sobrenome']; ?></h1>
      <p>Programador Web</p>
      <p>Id: <?php echo $_SESSION['user_id']; ?></p>
      <p>Front-End</p>
      <p>54 99681 5586</p>
      <p>E-mail:<?php echo "Visibilidade Desabilitada Pelo Administrador" ?></p>
      <div class="btn-group">
        <p class="label btn label-primary">Seguindo</p>
        <p class="label btn label-info">25</p>
      </div>
      <div class="btn-group">
        <p class="label btn label-primary">Seguidores</p>
        <p class="label btn label-info">452</p>
      </div>
      <div class="btn-group">
        <p class="label btn label-primary">Avaliações</p>
        <p class="label btn label-info">15</p>
      </div>
      <div class="btn-group">

        <p class="label btn label-success">Online</p><p class="label btn label-danger">As: 15:30</p>

      </div>

      <span id="botoes" class="navbar-right">
      <a class="btn btn-warning btn-xs" href="">Denunciar</a>

    </span>

    </div>

  </div><!--FIM DADOS-->
</div><!--FIM LINHA PERFIL -->
</div> <!--FIM IDPERFIL -->
