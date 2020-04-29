<!DOCTYPE html>
<html class="ls-theme-green">
  <head>
    <title>Página Inicial</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
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
      <a href="index.html" class="ls-ico-earth">
        Reajustes
      </a>
    </h1>

  </div>


    <aside class="ls-sidebar">

  <div class="ls-sidebar-inner">

      <nav class="ls-menu">
        <ul>
           <li><a href="views/indice.php" class="ls-ico-dashboard" title="Indice">Índice</a></li>
           <li>
            <a href="#" class="ls-ico-calendar-more" title="Meses">Meses</a>
            <ul>
                <li><a href="views/listar.php?mes=01">Janeiro</a></li>
                <li><a href="views/listar.php?mes=02">Fevereiro</a></li>
                <li><a href="views/listar.php?mes=03">Março</a></li>
                <li><a href="views/listar.php?mes=04">Abril</a></li>
                <li><a href="views/listar.php?mes=05">Maio</a></li>
                <li><a href="views/listar.php?mes=06">Junho</a></li>
                <li><a href="views/listar.php?mes=07">Julho</a></li>
                <li><a href="views/listar.php?mes=08">Agosto</a></li>
                <li><a href="views/listar.php?mes=09">Setembro</a></li>
                <li><a href="views/listar.php?mes=10">Outubro</a></li>
                <li><a href="views/listar.php?mes=11">Novembro</a></li>
                <li><a href="views/listar.php?mes=12">Dezembro</a></li>
            </ul>
          </li>
          <li>
            <a href="views/cadastro.php" class="ls-ico-text" title="cadastro">Novo Contrato</a>
          </li>
          <li>
            <a href="views/brindes.php" class="ls-ico-cake" title="Gerenciamento de brindes">Brindes</a>
          </li>
        </ul>
      </nav>


  </div>
</aside>


    <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-home">Página inicial</h1>
        <?php
          date_default_timezone_set('America/Sao_Paulo');
          $date = date('Y');
          echo $date;
        ?>
      </div>
    </main>

    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>