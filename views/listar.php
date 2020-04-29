<?php

$mes = $_GET['mes'];

$db = new mysqli("localhost", "root", "", "imobiliaria");
$query = "SELECT * FROM contratos WHERE mesEntrada = " . $mes;

$return = $db->query($query);


?>

<!DOCTYPE html>
<html class="ls-theme-green" lang="pt-br">
  <head>
    <title>Página Inicial</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
   <!-- <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png"> -->
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <script type="text/javascript" src="../controllers/funcs.js"></script>
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
    </div>
  </div>
  <!-- Título Header -->
    <h1 class="ls-brand-name">
      <a href="../index.php" class="ls-ico-earth">
        Listar
      </a>
    </h1>

  </div>


    <aside class="ls-sidebar">

  <div class="ls-sidebar-inner">

      <nav class="ls-menu">
        <ul>
           <li><a href="indice.php" class="ls-ico-dashboard" title="Indice">Índice</a></li>
           <li>
            <a href="#" class="ls-ico-calendar-more" title="Meses">Meses</a>
            <ul>
                <li><a href="listar.php?mes=01">Janeiro</a></li>
                <li><a href="listar.php?mes=02">Fevereiro</a></li>
                <li><a href="listar.php?mes=03">Março</a></li>
                <li><a href="listar.php?mes=04">Abril</a></li>
                <li><a href="listar.php?mes=05">Maio</a></li>
                <li><a href="listar.php?mes=06">Junho</a></li>
                <li><a href="listar.php?mes=07">Julho</a></li>
                <li><a href="listar.php?mes=08">Agosto</a></li>
                <li><a href="listar.php?mes=09">Setembro</a></li>
                <li><a href="listar.php?mes=10">Outubro</a></li>
                <li><a href="listar.php?mes=11">Novembro</a></li>
                <li><a href="listar.php?mes=12">Dezembro</a></li>
            </ul>
          </li>
          <li>
            <a href="cadastro.php" class="ls-ico-text" title="cadastro">Novo Contrato</a>
          </li>
          <li>
            <a href="brindes.php" class="ls-ico-cake" title="Gerenciamento de brindes">Brindes</a>
          </li>
        </ul>
      </nav>


  </div>
</aside>


    <main class="ls-main" style="margin-top:35px">

      <div class="container-fluid">

      <table class="ls-table ls-no-hover ls-table-striped">

        <thead>
            <tr>
                <th>Proprietário</th>
                <th class="hidden-xs">Inquilino</th>
                <th>Proporcional</th>
                <th class="hidden-xs">Contrato</th>
                <th>Mais Informações</th>
            </tr>
        </thead>

        <tbody>

            <?php
                foreach ($return as $key => $value) {
    
                    echo "<tr id=" . $value['idContrato'] . "><td id=proprietario" . $value['idContrato'] . ">" . $value['proprietario'] . "</td>";
                    echo "<td id=locatario" . $value['idContrato'] . " class='hidden-xs'>" . $value['locatario'] . "</td>";
                    echo "<td id='proporcional" . $value['idContrato'] . "'>" . $value['proporcional'] . "</td>";
                    echo "<td id=codigo" . $value['idContrato'] . " class='hidden-xs'>" . $value['codigo'] . "</td>";
                    echo "<td><a href=# class='ls-btn-primary' data-ls-module='popover' data-content='<table class=ls-table><tbody><tr><td><b>Atual</b></td><td id=\"valorNovo" . $value['idContrato'] . "\">" . $value['valorNovo'] . "</td><tr><td><b>Antigo</b></td><td id=\"valorAntigo" . $value['idContrato'] . "\">" . $value['valorAntigo'] . "</tr></tbody></table><button onclick = semReajuste(\"" . $value["idContrato"] . "\") class= \"ls-btn-dark ls-ico-trophy\">Não Reajustar</button> <span onclick=abrirModal(" . $value["idContrato"] . ") class=\"ls-ico-pencil ls-cursor-pointer\" title=\"Editar\"></span> <span onclick = excluir(\"" . $value["idContrato"] . "\",\"contratos\") class=\"ls-ico-remove ls-cursor-pointer\" title=\"Excluir\"></span> ' data-placement='bottom'>+ Info</a></td>";
                 }
            ?>

        </tbody>
      </table>

      </div>
    </main>

                 
    <div class="ls-modal" id="myAwesomeModal">
      <div class="ls-modal-box">
        <div class="ls-modal-header">
          <button data-dismiss="modal">&times;</button>
          <h4 class="ls-modal-title">Editar</h4>
        </div>
        <div class="ls-modal-body ls-form ls-form-horizontal" id="myModalBody">
          <fieldset style="padding:5px" class="row">    
              <label class="ls-label col-md-12 col-xs-12">
                <b class="ls-label-text">Contrato</b>
                  <input type="text" id="contrato" name="contrato" placeholder="CA0001" class="ls-field">
              </label>
              
              <label class="ls-label col-md-12 col-xs-12">
                  <b class="ls-label-text">Proprietário</b>
                  <div class="ls-prefix-group">
                      <span class="ls-label-text-prefix ls-ico-user"></span>
                      <input type="text" id="propNome" name="propNome" placeholder="Insira o nome aqui" class="ls-field" required>
                  </div>
              </label>
            
              <label class="ls-label col-md-12 col-xs-12">
                  <b class="ls-label-text">Inquilino</b>
                  <div class="ls-prefix-group">
                      <span class="ls-label-text-prefix ls-ico-user"></span>
                      <input type="text" id="inqNome" name="inqNome" placeholder="Insira o nome aqui" class="ls-field ls-mask-money" required>
                  </div>
              </label>                  
            
              <label class="ls-label col-md-6 col-sl-12">
                <b class="ls-label-text">Valor Novo</b>
                <div class="ls-prefix-group">
                  <span class="ls-label-text-prefix">$</span>
                  <input type="number" id="valorNovo" name="valorNovo" class="ls-field" autocomplete="off" required>
                </div>
              </label>
              
              <label class="ls-label col-md-6 col-sl-12">
                <b class="ls-label-text">Data de Entrada</b>  
                <div class="ls-prefix-group">
                      <input type="text" id="data" name="data" class="datepicker ls-field" autocomplete="off" required/>
                      <a class="ls-label-text-prefix ls-ico-calendar" data-trigger-calendar="#data" href="#"></a>
                  </div>
              </label>

              <label class="ls-label col-md-6 col-sl-12">
                  <b class="ls-label-text">Valor Antigo</b>
                  <div class="ls-prefix-group">
                    <span class="ls-label-text-prefix">$</span>
                    <input type="number" id="valorAntigo" name="valorAntigo" class="ls-field" autocomplete="off" required>
                  </div>
                  </label>
              
              <label class="ls-label col-md-6 col-sl-12">
                  <b class="ls-label-text">Proporcional</b>
                  <div class="ls-prefix-group">
                    <span class="ls-label-text-prefix">$</span>
                    <input type="number" id="proporcional" name="proporcional" class="ls-field" autocomplete="off" required>
                  </div>
                  </label>

                <label class="ls-label col-md-12 col-sl-12">
                  <b class="ls-label-text">Observações</b>                
                    <textarea rows="3" id="observacao" name="observacao" class="ls-textarea-resize-both"></textarea>
                  </label>
                  <input type="hidden" id="id" name="id" disabled/>
          </fieldset>
        </div>
        <div class="ls-modal-footer">
          <button class="ls-btn ls-float-right" data-dismiss="modal">Fechar</button>
          <button onclick="editar()" class="ls-btn-primary">Salvar</button>
        </div>
      </div>
    </div>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>