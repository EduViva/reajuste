<?php

include "../controllers/dbAccess.php";

date_default_timezone_set('America/Sao_Paulo');
$atualDate = date('M');
$atualAno = date('Y');

$query = "SELECT * FROM brindes WHERE mes = '" . $atualDate . "' AND ano = '". $atualAno ."'";

$return = $db->query($query);

$total = $db->query("SELECT COUNT(*) FROM brindes WHERE mes = '". $atualDate . "' AND ano = '". $atualAno ."'");

if($total){
  while ($row = $total->fetch_assoc()) {
    $mesBrindes = $row['COUNT(*)'];
  }
}


?>

<!DOCTYPE html>
<html class="ls-theme-green" lang="pt-br">
  <head>
    <title>Acompanhar Brindes</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="https://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../controllers/funcs.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  </head>
  <body>
    <div class="ls-topbar">

  <!-- Barra de Notificações -->
  <div class="ls-notification-topbar">

    <!-- Interrogação de ajuda -->
    <div class="ls-alerts-list">
      <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>
    </div>

    <!-- Conta de usuário -->
    <div class="ls-user-account">
      <a href="#" class="ls-ico-user">
        Carlos Eduardo Imóveis
      </a>
<!--
      <nav class="ls-dropdown-nav ls-user-menu">
        <ul>
          <li><a href="#">Meus dados</a></li>
          <li><a href="#">Faturas</a></li>
          <li><a href="#">Planos</a></li>
          <li><a href="#">Sair</a></li>
         </ul>
      </nav>
-->
    </div>
  </div>
  <!-- Título Header -->
    <h1 class="ls-brand-name">
      <a href="../index.php" class="ls-ico-earth">
        Liberação de Brindes
      </a>
    </h1>

  </div>


    <aside class="ls-sidebar">

  <div class="ls-sidebar-inner">

      <nav class="ls-menu">
        <ul>
          <li>
            <a href="brindes.php" class="ls-ico-cake" title="Gerenciamento de brindes">Brindes</a>
          </li>
        </ul>
      </nav>


  </div>
</aside>


    <main class="ls-main ">
        <div class="container-fluid">
        

            <table class="ls-table ls-no-hover ls-table-striped">

                <thead>
                    <tr>
                        <th>Finalidade</th>
                        <th class="hidden-xs">Proprietario</th>
                        <th>Inquilino</th>
                        <th class="hidden-xs">Valor</th>
                        <th style="width: 15px"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        foreach ($return as $key => $value) {
                            echo "<tr id=" . $value['id'] . "><td id=finalidade" . $value['id'] . ">" . $value['finalidade'] . "</td>";
                            echo "<td id=proprietario" . $value['id'] . " class='hidden-xs'>" . $value['proprietario'] . "</td>";
                            echo "<td id=inquilino" . $value['id'] . ">" . $value['inquilino'] . "</td>";
                            echo "<td id=valor" . $value['id'] . " class='hidden-xs'>" . $value['valor'] . "</td>";
                            echo "<td id=excluir" . $value['id'] . "><span style='margin-left: -85px' onclick = excluir(" . $value['id'] . ",\"brindes\") class=\"ls-ico-remove ls-cursor-pointer ls-btn-dark\" title=\"Excluir\"></span></td>";
                            
                        }
                    ?>

                </tbody>
            </table>
        <embed height="1" type="audio/midi" width="1" src="../controllers/Alarm.mp3" loop="false" autostart="true" />
      </div>
    </main>

    <!-- We recommended use jQuery 1.10 or up -->
    <script>window.setInterval(() => listaBrindes(<?php echo $mesBrindes; ?>), 4500);</script>
    <script src="https://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>