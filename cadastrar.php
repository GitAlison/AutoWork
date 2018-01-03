<!DOCTYPE html>
<?php
include("conexoes/conexaoSistem.php");
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <style>
 	body{background-image: url(img/bg.jpg);}
    form{margin: 100px auto;width: 300px;height: 360px;padding: 10px;border-radius: 5px; background-color: #ededed;}
    form label{width: 280px;}
    form h2{text-align: center;color: #286090;margin-top: 5px;}
    .btn-criar{float: right;margin-top: 5px;}
    span{float: left;margin-top: 8px;}

    </style>

  </head>
  <body>

<?php



  if (isset($_GET['enviar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);

    $verifica = $pdo->prepare('SELECT * FROM users WHERE user_email=:email');
    $verifica->bindValue(':email',$email);
    $verifica->execute();
    $linha = $verifica->rowCount();
    if ($linha==0) {
        $insert = $pdo->prepare('INSERT INTO users(user_nome,user_email,user_pass) VALUES(:nome,:email,:pass)');
        $insert->bindValue(':nome',$nome);
        $insert->bindValue(':email',$email);
        $insert->bindValue(':pass',$pass);
        $insert->execute();
        echo '<a class="btn btn-success"href="#">Cadastrado com sucesso</a>';
    }
    else {
      echo '<a class="btn btn-danger"href="#">E-mail já Cadastrado</a>';

    }
  }


 ?>


    	<form method="post" action="?enviar" class="formulario">
	   		<h2>Cadastrar</h2>
	    	<label><input class="form-control" type="text" name="nome" placeholder="Nome" required></label><br>
	    	<label><input class="form-control" type="email" name="email" placeholder="E-mail" required></label><br>
	    	<label><input class="form-control" type="password" name="pass" placeholder="Password" required></label><br>
	    	<p>Senha deve conter no minimo 8 caracteres</p>
	    	<label><input class="btn btn-block btn-primary"type="submit" name="enviar" value="Cadastrar"></label>
	    	<span>Já é cadastrado clique <a href="login.php">aqui</a></span>

    	</form>









    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
