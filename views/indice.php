<?php

    $db = new mysqli("localhost", "root", "", "imobiliaria");

    $sql = $db->query("SELECT * FROM `indice` WHERE ID = 1");

    $row = $sql->fetch_array(MYSQLI_ASSOC); 

?>
<!DOCTYPE html>
<html class="ls-theme-green" lang="pt-br">
  <head>
    <title>Página do Índice</title>

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
              </div>
            </div>
            <!-- Título Header -->
              <h1 class="ls-brand-name">
                <a href="../index.php" class="ls-ico-earth">
                  <small>Reajuste Mensal</small>
                  IGPM
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

    <main class="ls-main" style="margin-top: 35px;">
        <div class="container-fluid">
        <ul class="ls-tabs-nav">
        <li class="ls-active"><a data-ls-module="tabs" href="#jan">Janeiro</a></li>
        <li><a data-ls-module="tabs" href="#fev">Fevereiro</a></li>
        <li><a data-ls-module="tabs" href="#mar">Março</a></li>
        <li><a data-ls-module="tabs" href="#abr">Abril</a></li>
        <li><a data-ls-module="tabs" href="#mai">Maio</a></li>
        <li><a data-ls-module="tabs" href="#jun">Junho</a></li>
        <li><a data-ls-module="tabs" href="#jul">Julho</a></li>
        <li><a data-ls-module="tabs" href="#ago">Agosto</a></li>
        <li><a data-ls-module="tabs" href="#set">Setembro</a></li>
        <li><a data-ls-module="tabs" href="#out">Outubro</a></li>
        <li><a data-ls-module="tabs" href="#nov">Novembro</a></li>
        <li><a data-ls-module="tabs" href="#dez">Dezembro</a></li>
    </ul>

    <div class="ls-tabs-container">
        
        <div id="jan" class="ls-tab-content ls-active">
            <form action="../controllers/post-indice.php" method="POST" class="ls-form ls-form-inline row">
                <label class="ls-label col-md-2">
                    <b class="ls-label-text">Valor</b>
                    <input type="number" value="<?php echo $row['janeiro'] ?>" class="field" name="jan" style="background-color: #dcdcdc">
                </label>
                <div class="ls-actions-btn">
                    <button type="submit" class="ls-btn" name="btnJan">Reajustar</button>
                    <button type="submit" class="ls-btn-primary" name="altJan" data-ls-module="popover" data-trigger="hover" data-content="<p>Use este botão somente se você precisar retificar o índice deste mês. Ex. Caso tenha reajustado com o índice errado</p>" data-placement="right">Alterar</button>
                </div>
            </form>
        </div>
        
        <div id="fev" class="ls-tab-content">
            <form action="../controllers/post-indice.php" method="POST" class="ls-form ls-form-inline row">
                <label class="ls-label col-md-2">
                    <b class="ls-label-text">Valor</b>
                    <input type="number" value="<?php echo $row['fevereiro'] ?>" name="fev" style="background-color: #dcdcdc">
                </label>
                <div class="ls-actions-btn">
                    <button type="submit" class="ls-btn" name="btnFev">Reajustar</button>
                    <button type="submit" class="ls-btn-primary" name="altFev"  data-ls-module="popover" data-trigger="hover" data-content="<p>Use este botão somente se você precisar retificar o índice deste mês. Ex. Caso tenha reajustado com o índice errado</p>" data-placement="right">Alterar</button>
                </div>
            </form>
        </div>

        <div id="mar" class="ls-tab-content">
            <form action="../controllers/post-indice.php" method="POST" class="ls-form ls-form-inline row">
                <label class="ls-label col-md-2">
                    <b class="ls-label-text">Valor</b>
                    <input type="number" value="<?php echo $row['marco'] ?>" name="mar" style="background-color: #dcdcdc">
                </label>
                <div class="ls-actions-btn">
                    <button type="submit" class="ls-btn" name="btnMar">Reajustar</button>
                    <button type="submit" class="ls-btn-primary" name="altMar"  data-ls-module="popover" data-trigger="hover" data-content="<p>Use este botão somente se você precisar retificar o índice deste mês. Ex. Caso tenha reajustado com o índice errado</p>" data-placement="right">Alterar</button>
                </div>
            </form>
        </div>
        
        <div id="abr" class="ls-tab-content">
            <form action="../controllers/post-indice.php" method="POST" class="ls-form ls-form-inline row">
                <label class="ls-label col-md-2">
                    <b class="ls-label-text">Valor</b>
                    <input type="number" value="<?php echo $row['abril'] ?>" name="abr" style="background-color: #dcdcdc">
                </label>
                <div class="ls-actions-btn">
                    <button type="submit" class="ls-btn" name="btnAbr">Reajustar</button>
                    <button type="submit" class="ls-btn-primary" name="altAbr"  data-ls-module="popover" data-trigger="hover" data-content="<p>Use este botão somente se você precisar retificar o índice deste mês. Ex. Caso tenha reajustado com o índice errado</p>" data-placement="right">Alterar</button>
                </div>
            </form>
        </div>

        <div id="mai" class="ls-tab-content">
            <form action="../controllers/post-indice.php" method="POST" class="ls-form ls-form-inline row">
                <label class="ls-label col-md-2">
                    <b class="ls-label-text">Valor</b>
                    <input type="number" value="<?php echo $row['maio'] ?>" name="mai" style="background-color: #dcdcdc">
                </label>
                <div class="ls-actions-btn">
                    <button type="submit" class="ls-btn" name="btnMai">Reajustar</button>
                    <button type="submit" class="ls-btn-primary" name="altMai"  data-ls-module="popover" data-trigger="hover" data-content="<p>Use este botão somente se você precisar retificar o índice deste mês. Ex. Caso tenha reajustado com o índice errado</p>" data-placement="right">Alterar</button>
                </div>
            </form>
        </div>

        <div id="jun" class="ls-tab-content">
            <form action="../controllers/post-indice.php" method="POST" class="ls-form ls-form-inline row">
                <label class="ls-label col-md-2">
                    <b class="ls-label-text">Valor</b>
                    <input type="number" value="<?php echo $row['junho'] ?>" name="jun" style="background-color: #dcdcdc">
                </label>
                <div class="ls-actions-btn">
                    <button type="submit" class="ls-btn" name="btnJun">Reajustar</button>
                    <button type="submit" class="ls-btn-primary" name="altJun"  data-ls-module="popover" data-trigger="hover" data-content="<p>Use este botão somente se você precisar retificar o índice deste mês. Ex. Caso tenha reajustado com o índice errado</p>" data-placement="right">Alterar</button>
                </div>
            </form>
        </div>

        <div id="jul" class="ls-tab-content">
            <form action="../controllers/post-indice.php" method="POST" class="ls-form ls-form-inline row">
                <label class="ls-label col-md-2">
                    <b class="ls-label-text">Valor</b>
                    <input type="number" value="<?php echo $row['julho'] ?>" name="jul" style="background-color: #dcdcdc">
                </label>
                <div class="ls-actions-btn">
                    <button type="submit" class="ls-btn" name="btnJul">Reajustar</button>
                    <button type="submit" class="ls-btn-primary" name="altJul"  data-ls-module="popover" data-trigger="hover" data-content="<p>Use este botão somente se você precisar retificar o índice deste mês. Ex. Caso tenha reajustado com o índice errado</p>" data-placement="right">Alterar</button>
                </div>
            </form>
        </div>

        <div id="ago" class="ls-tab-content">
            <form action="../controllers/post-indice.php" method="POST" class="ls-form ls-form-inline row">
                <label class="ls-label col-md-2">
                    <b class="ls-label-text">Valor</b>
                    <input type="number" value="<?php echo $row['agosto'] ?>" name="ago" style="background-color: #dcdcdc">
                </label>
                <div class="ls-actions-btn">
                    <button type="submit" class="ls-btn" name="btnAgo">Reajustar</button>
                    <button type="submit" class="ls-btn-primary" name="altAgo"  data-ls-module="popover" data-trigger="hover" data-content="<p>Use este botão somente se você precisar retificar o índice deste mês. Ex. Caso tenha reajustado com o índice errado</p>" data-placement="right">Alterar</button>
                </div>
            </form>
        </div>

        <div id="set" class="ls-tab-content">
            <form action="../controllers/post-indice.php" method="POST" class="ls-form ls-form-inline row">
                <label class="ls-label col-md-2">
                    <b class="ls-label-text">Valor</b>
                    <input type="number" value="<?php echo $row['setembro'] ?>" name="set" style="background-color: #dcdcdc">
                </label>
                <div class="ls-actions-btn">
                    <button type="submit" class="ls-btn" name="btnSet">Reajustar</button>
                    <button type="submit" class="ls-btn-primary" name="altSet"  data-ls-module="popover" data-trigger="hover" data-content="<p>Use este botão somente se você precisar retificar o índice deste mês. Ex. Caso tenha reajustado com o índice errado</p>" data-placement="right">Alterar</button>
                </div>
            </form>
        </div>

        <div id="out" class="ls-tab-content">
            <form action="../controllers/post-indice.php" method="POST" class="ls-form ls-form-inline row">
                <label class="ls-label col-md-2">
                    <b class="ls-label-text">Valor</b>
                    <input type="number" value="<?php echo $row['outubro'] ?>" name="out" style="background-color: #dcdcdc">
                </label>
                <div class="ls-actions-btn">
                    <button type="submit" class="ls-btn" name="btnOut">Reajustar</button>
                    <button type="submit" class="ls-btn-primary" name="altOut"  data-ls-module="popover" data-trigger="hover" data-content="<p>Use este botão somente se você precisar retificar o índice deste mês. Ex. Caso tenha reajustado com o índice errado</p>" data-placement="right">Alterar</button>
                </div>
            </form>
        </div>

        <div id="nov" class="ls-tab-content">
            <form action="../controllers/post-indice.php" method="POST" class="ls-form ls-form-inline row">
                <label class="ls-label col-md-2">
                    <b class="ls-label-text">Valor</b>
                    <input type="number" value="<?php echo $row['novembro'] ?>" name="nov" style="background-color: #dcdcdc">
                </label>
                <div class="ls-actions-btn">
                    <button type="submit" class="ls-btn" name="btnNov">Reajustar</button>
                    <button type="submit" class="ls-btn-primary" name="altNov"  data-ls-module="popover" data-trigger="hover" data-content="<p>Use este botão somente se você precisar retificar o índice deste mês. Ex. Caso tenha reajustado com o índice errado</p>" data-placement="right">Alterar</button>
                </div>
            </form>
        </div>
        <div id="dez" class="ls-tab-content">
            <form action="../controllers/post-indice.php" method="POST" class="ls-form ls-form-inline row">
                <label class="ls-label col-md-2">
                    <b class="ls-label-text">Valor</b>
                    <input type="number" value="<?php echo $row['dezembro'] ?>" name="dez" style="background-color: #dcdcdc">
                </label>
                <div class="ls-actions-btn">
                    <button type="submit" class="ls-btn" name="btnDez">Reajustar</button>
                    <button type="submit" class="ls-btn-primary" name="altDez"  data-ls-module="popover" data-trigger="hover" data-content="<p>Use este botão somente se você precisar retificar o índice deste mês. Ex. Caso tenha reajustado com o índice errado</p>" data-placement="right">Alterar</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
</main>
</body>
<style>
    input[type=number]::-webkit-inner-spin-button { 
        -webkit-appearance: none;
        
    }
    input[type=number] { 
       -moz-appearance: textfield;
       appearance: textfield;
       outline-color: gray;
    }

</style>

<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>