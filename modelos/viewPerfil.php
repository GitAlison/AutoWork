<div id="conteudo" >

  <h3>Perfil</h3>

  <table class="table-condensed">
    <tr>
      <td class="text-right"><strong>Nome:</strong></td>
      <td><?php echo $_SESSION['user_nome'].' '.$_SESSION['user_sobrenome'] ?></td>
    </tr>
    <tr>
      <tr>
        <td class="text-right"><strong>Data de nascimento:</strong></td>
        <td><?php echo $_SESSION['user_data_nacimento'] ?></td>
      </tr>
      <tr>
        <td class="text-right"><strong>Sexo:</strong></td>
        <td><?php echo $_SESSION['user_genero'] ?></td>
      </tr>
      <tr>
        <td class="text-right"><strong>Relacionamento:</strong></td>
        <td><?php echo $_SESSION['user_estado_civil'] ?></td>
      </tr>
      <tr>
        <td class="text-right"><strong>habilitação:</strong></td>
        <td><?php echo $_SESSION['user_cnh'] ?></td>
      </tr>
      <tr>
        <td class="text-right"><strong>Veiculo para desolocamento:</strong></td>
        <td><?php echo $_SESSION['user_veiculo'] ?></td>
      </tr>
      <tr>
        <td class="text-right"><strong>Disponibilidade para trabalhar:</strong></td>
        <td>Sábado:<?php echo $_SESSION['user_sab'].' Domingo: '.$_SESSION['user_dom'].' Segunda a Sexta: '.$_SESSION['user_seg_sex']; ?></td>
        <tr>
          <td class="text-right"><strong>Pagina Pessoal:</strong></td>
          <td class="text-left">www.alisonprof.com</td>
        </tr>
      </tr>
      <tr>
        <td class="text-center"><strong>Contatos:</strong></td>

      <tr>
        <td class="text-right"><strong>Celular:</strong></td>
        <td class="text-left">54 99681 5586</td>
      </tr>

      </tr>
      <tr>
        <td class="text-right"><strong>Residencial:</strong></td>
        <td class="text-left">54 3452 6586</td>
      </tr>
      

      <tr>
        <td class="text-right"><strong>Area de Atuação:</strong></td>
        <td>Desenvoldimento Web -FullStack</td>
      </tr>
      <tr>
        <td class="text-right"><strong>Tipo de Serviço</strong></td>
        <td>Remoto ,Prensente, Home Office</td>
      </tr>


  </table>





</div>
