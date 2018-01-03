<?php


if (!isset($_SESSION['loguser'])) {
  header('Location: login.php');
  session_destroy();
}
include('conexaoSistem.php');
  $id = $_SESSION['user_id'];


  $dados = $pdo->prepare('SELECT * FROM users WHERE user_id=:user_id');
  $dados->bindValue(':user_id',$id);
  $dados->execute();

  $resultSession = $dados->fetchAll(PDO::FETCH_OBJ);
  foreach ($resultSession as $key => $listar) {
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

?>
