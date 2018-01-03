<?php include('conexoes/session.php'); ?>
<?php include('conexoes/conexaoSistem.php');


include('conexoes/sessionUser.php');
$resultado             ='';
$user_sab              ='nao';
$user_dom              ='nao';
$user_seg_sex          ='nao';

if (isset($_POST['salvar'])) {
  $id = $_SESSION['user_id'];
  $status                ='on';
  $nivel                 ='1';
  
  $user_nome             =$_POST['user_nome'];
  $user_sobrenome        =$_POST['user_sobrenome'];
  $user_data_nacimento   =$_POST['user_data_nacimento'];
  $user_genero           =$_POST['user_genero'];
  $user_naturalidade     =$_POST['user_naturalidade'];
  $user_nacionalidade    =$_POST['user_nacionalidade'];
  $user_estado_civil     =$_POST['user_estado_civil'];
  $user_cnh              =$_POST['user_cnh'];
  $user_veiculo          =$_POST['user_veiculo'];
  
  $user_sab              =$_POST['user_sab'];
  $user_dom              =$_POST['user_dom'];
  $user_seg_sex          =$_POST['user_seg_sex'];

    //$query ="UPDATE users SET user_nome= :user_nome,user_sobrenome= :user_sobrenome,user_data_nacimento= :user_data_nacimento,user_genero = :user_genero,user_naturalidade=:user_naturalidade,user_nacionalidade= :user_nacionalidade,user_estado_civil = :user_estado_civil,user_cnh = :user_cnh, user_veiculo= :user_veiculo,user_sab = :user_sab,user_dom = :user_dom,user_seg_sex=:user_seg_sex,user_status = :user_status,user_nivel = $nivel WHERE user_id = $id";

    try {
      $update=$pdo->prepare('UPDATE users SET user_nome= :user_nome,user_sobrenome= :user_sobrenome,user_data_nacimento=:user_data_nacimento,user_genero = :user_genero,user_naturalidade=:user_naturalidade,user_nacionalidade= :user_nacionalidade,user_estado_civil = :user_estado_civil,user_cnh = :user_cnh, user_veiculo= :user_veiculo,user_sab = :user_sab,user_dom = :user_dom,user_seg_sex=:user_seg_sex,user_status = :user_status,user_nivel = :user_nivel WHERE user_id=:user_id');
      
      $update->bindValue(':user_nome',$user_nome);
      $update->bindValue(':user_sobrenome',$user_sobrenome);
      $update->bindValue(':user_data_nacimento',$user_data_nacimento);
      $update->bindValue(':user_genero',$user_genero);
      $update->bindValue(':user_naturalidade',$user_naturalidade);
      $update->bindValue(':user_nacionalidade',$user_nacionalidade);
      $update->bindValue(':user_estado_civil',$user_estado_civil);
      $update->bindValue(':user_cnh',$user_cnh);
      $update->bindValue(':user_veiculo',$user_veiculo);
      $update->bindValue(':user_sab',$user_sab);
      $update->bindValue(':user_dom',$user_dom);
      $update->bindValue(':user_seg_sex',$user_seg_sex);
      $update->bindValue(':user_status',$status);
      $update->bindValue(':user_nivel',$nivel);
      $update->bindValue(':user_id',$id);
      $update->execute();
     // $update->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      header('Location: perfil.php');
     
      
    } catch (PDOException $e) {
      $e->getMessage();
    }


}

 ?>
<div id="conteudo">
  <h3>Perfil Profissional</h3>
  <p><?php echo $resultado ?></p>
  <div class="row">
    <div class="col-md-6 col-xs-6 col-lg-12">
      <form action="?salvar" class="" method="post">
      <table class="table-condensed">
        <a href="#contatos">Contatos</a>--> <a href="#formacao">Formação</a>
        <tr>
          <td class="label-info text-center"><h4>Dados Pessoais:</h4></td>
        </tr>
        <tr>
          <td class="text-right"><label class="text-right"for="">Nome:</label></td>
          <td><input class="input-simple"type="text" value="<?php echo "$_SESSION[user_nome]"?>"name="user_nome" size="20"></td>
        </tr>
        <tr>
          <td class="text-right"><label class="text-right"for="">Sobrenome:</label></td>
          <td><input class="input-simple"type="text" name="user_sobrenome"value="<?php echo "$_SESSION[user_sobrenome]"?>" size="20"></td>
        </tr>
        <tr>
          <td class="text-right"><label for="">Data Nascimento:</label></td>
          <td><input class="input-simple"type="text" name="user_data_nacimento" size="15"value="<?php echo "$_SESSION[user_data_nacimento]"?>"></td>
        </tr>
        <tr>
          <td class="text-right"><label for="">Gênero:</label></td>
          <td><input class="input-simple"type="radio" <?php if ($_SESSION['user_genero']=='M'){echo 'checked';} ?> name="user_genero" value="M" checked> Masculino
              <input class="input-simple"type="radio" <?php if ($_SESSION['user_genero']=='F'){echo 'checked';} ?> name="user_genero" value="F"> Feminino</td>

        </tr>
        <tr>
          <td class="text-right"><label for="">Naturalidade:</label></td>
          <td><input class="input-simple"type="text" name="user_naturalidade" value="<?php echo "$_SESSION[user_naturalidade]"?>"size="20"value=""></td>
        </tr>
        <tr>
          <td class="text-right"><label for="">Nacionalidade:</label></td>
          <td><input class="input-simple"type="text" name="user_nacionalidade" value="<?php echo "$_SESSION[user_nacionalidade]"?>"size="20"value=""></td>
        </tr>

        <tr>
          <td class="text-right"><label for="user_estado_civil">Estado Civil:</label></td>
          <td><select class="" name="user_estado_civil" id="user_estado_civil">
                <option value="<?php echo "$_SESSION[user_estado_civil]"?>"><?php echo "$_SESSION[user_estado_civil]"?></option>
                <option value="Solteiro(a)">Solteiro(a)</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Separado(a)">Separado(a)</option>
                <option value="Divorciado(a)">Divorciado(a)</option>
                <option value="União Estável">União Estável</option>
                <option value="Viúvo(a)">Viúvo(a)</option>
              </select>
          </td>
        </tr>
        <tr>
          <td class="text-right"><label for="">Categoria da CNH (Cart. Motorista)</label></td>
          <td>
            <select class=""name="user_cnh" class="" id="user_cnh">
              <option value="<?php echo "$_SESSION[user_cnh]"?>"><?php echo "$_SESSION[user_cnh]"?></option>
              <option value="nao">Não</option>
              <option value="A">A</option>
              <option value="AB">AB</option>
              <option value="AC">AC</option>
              <option value="AD">AD</option>
              <option value="AE">AE</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="text-right"><label for="user_veiculo">Veiculo para locomoção</label></td>
          <td><input class="input-simple"type="radio" <?php if ($_SESSION['user_veiculo']=='sim'){echo 'checked';} ?> name="user_veiculo" value="sim" > Sim
              <input class="input-simple"type="radio" <?php if ($_SESSION['user_veiculo']=='nao'){echo 'checked';} ?> name="user_veiculo" value="nao" checked> Não</td>
        </tr>
        <tr>
          <td class="text-right"><label for="disp">Disponibilidade:</label></td>
          <td><label for="">Sábado</label><input type="checkbox" <?php if ($_SESSION['user_sab']=='sim'){echo 'checked' ;}else{echo 'nao';}?> name="user_sab" value="sim"></td>
        </tr>
        <tr>
          <td></td>
          <td><label >Domingo</label><input type="checkbox"
            <?php if ($_SESSION['user_dom']=='sim'){echo 'checked' ;}else{echo 'nao';}?>
            name="user_dom" value="sim"></td>
        </tr>
        <tr>
          <td></td>
          <td><label for="">Segunda a Sexta</label><input type="checkbox" <?php if ($_SESSION['user_seg_sex']=='sim'){echo 'checked' ;}else{echo 'nao';}?> name="user_seg_sex" value="sim"></td>
        </tr>
        <tr>
          <td id="formacao"class="label-info text-center"><h4>Formação:</h4></td>
        </tr>

        <tr>
          <td class="text-right"><label for="grauInstrucao">Gráu de Instrução:</label></td>
          <td><select class="" name="grauInstrucao" id="grauInstrucao">
                <option value="0">Selecione</option>
                <option value="275">Ensino Fundamental (1ºGrau) Incompleto</option>
                <option value="487">Ensino Fundamental (1ºGrau) Andamento</option>
                <option value="276">Ensino Fundamental (1ºGrau) Completo</option>
                <option value="277">Ensino Médio (2ºGrau) Incompleto</option>
                <option value="278">Ensino Técnico Incompleto</option>
                <option value="488">Ensino Médio (2ºGrau) Andamento</option>
                <option value="489">Ensino Técnico Andamento</option>
                <option value="279" selected="">Ensino Médio (2ºGrau)</option>
              </select>
          </td>
        </tr>
        <tr>
          <td class="text-right"><label for="instituição">Nome da Instiruição:</label></td>
          <td><input type="text" name="instituição"></td>
        </tr>
        <tr>
          <td class="text-right"><label for="modalidade">Modalidade</label></td>
          <td><input class="input-simple"type="radio" name="modalidade" value="ead"> EAD
              <input class="input-simple"type="radio" name="modalidade" value="presencial"> Presencial</td>
        </tr>
        <tr>
          <td id="contatos"class="label-info text-center"><h4>Contatos:</h4></td>
        </tr>
        <tr>
          <td class="text-right"><label for="paginaPessoal">Pagina Pessoal:</label></td>
          <td ><input class="input-simple"type="text" name="paginaPessoal" size="25"value=""></td>
        </tr>
        <tr>
          <td class="text-right"><label  width="20"for="whatsapp">WhatsApp:</label></td>
          <td><input class="input-simple"type="text" name="whatsapp" size="10"></td>
        </tr>
        <tr>
          <td class="text-right"><label for="celular">Celular:</label></td>
          <td><input class="input-simple"type="text" name="celular" size="10"></td>
        </tr>
        <tr>

          <td></td>
          <td><input class="btn btn-primary" type="submit" name="salvar" value="Salvar e continuar">
          <a class="btn btn-danger"href="">Cancelar</a></td>
        </tr>



      </table>
  </form>

    </div>
  </div>
</div>
