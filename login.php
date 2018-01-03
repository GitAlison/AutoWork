<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['loguser'])) {
  header('Location: index.php');
  die();
  # code...
}
include("conexoes/conexaoSistem.php");
    
    $resultado = '';

if (isset($_POST['entrar'])) {
  $email = $_POST['email'];
  $pass = md5($_POST['pass']);
    $verifica = $pdo->prepare('SELECT * FROM users WHERE user_email=:email AND user_pass=:pass');
    $verifica->bindValue(':email',$email);
    $verifica->bindValue(':pass',$pass);
    $verifica->execute();
    $linha = $verifica->rowCount();

    if ($linha >=1) {
        $select = $verifica->fetchAll(PDO::FETCH_OBJ);
            foreach($select as $listar){
              $_SESSION['user_id']    =$listar->user_id;
              $_SESSION['user_nome']  =$listar->user_nome;
              $_SESSION['user_sobrenome'] =$listar->user_sobrenome;
              $_SESSION['user_data_nacimento'] =$listar->user_data_nacimento;
              $_SESSION['user_genero'] =$listar->user_genero;
              $_SESSION['user_naturalidade'] =$listar->user_naturalidade;
              $_SESSION['user_nacionalidade'] =$listar->user_nacionalidade;
              $_SESSION['user_estado_civil'] =$listar->user_estado_civil;
              $_SESSION['user_cnh'] =$listar->user_cnh;
              $_SESSION['user_veiculo'] =$listar->user_veiculo;
              $_SESSION['user_sab'] =$listar->user_sab;
              $_SESSION['user_dom'] =$listar->user_dom;
              $_SESSION['user_seg_sex'] =$listar->user_seg_sex;

            }
            $_SESSION['loguser']=true;
            header('Location: index.php');



    }
    else {
      $resultado='Usuario ou senha invalida';

    }
}

?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrar</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom -->
    <link href="css/custom.css" rel="stylesheet">
    <style>
    body{background-image: url(img/bg.jpg);}

    form{margin: 100px auto;width: 300px;height: 280px;padding: 10px;border-radius: 5px; background-color: #ededed;}
    form label{width: 280px;}
    form h2{text-align: center;color: #286090;}
    .btn-criar{float: right;margin-top: 5px;}
    span{float: left;margin-top: 8px;}

    </style>


  </head>
  <body>
    	<form method="post" action="?entrar"class="formulario">
	   		<h2>Entrar</h2>
	    	<label><input id="email"class="form-control" type="email" name="email" autofocus placeholder="E-mail"required></label><br>
	    	<label><input id="pass"class="form-control" type="password" name="pass" placeholder="Password" required></label><br>
	    	<label><input class="btn btn-block btn-primary" type="submit" name="entrar" value="Logar"></label>
	    	<span><a href="#">Esqueci a senha</a></span>
	    	<a href="cadastrar.php" class="btn btn-success btn-criar">Criar conta</a><br><br><br><br>
        <a class="label btn-block label-danger"href=""><?php echo $resultado; ?></a>

    	</form>









    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
