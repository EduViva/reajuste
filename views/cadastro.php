<!DOCTYPE html>
<html class="ls-theme-green" lang="pt-br">
  <head>
    <title>Cadastrar</title>

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
      <small>Adicionando um contrato</small>  
      Cadastro
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


    <main class="ls-main ">
      <div class="container-fluid">
        
        <form action="../controllers/post-form.php" method="GET" class="ls-form ls-form-horizontal">
            <fieldset style="margin: 3rem auto; width:35%; padding:5px; padding-top: 15px" class="row">
              
                <label class="ls-label col-md-12 col-xs-12">
                  <b class="ls-label-text">Contrato</b>
                    <input type="text" id="contratoModal" name="contrato" placeholder="CA0001" class="ls-field">
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
                    <b class="ls-label-text">Valor do Aluguel</b>
                    <div class="ls-prefix-group">
                      <span class="ls-label-text-prefix">$</span>
                      <input type="text" id="valor" name="valor" class="ls-field" autocomplete="off" required>
                    </div>
                    </label>
                
                <label class="ls-label col-md-6 col-sl-12">
                  <b class="ls-label-text">Data de Entrada</b>  
                  <div class="ls-prefix-group">
                        <input type="text" id="data" name="data" class="datepicker ls-field" autocomplete="off" required/>
                        <a class="ls-label-text-prefix ls-ico-calendar" data-trigger-calendar="#data" href="#"></a>
                    </div>
                </label>
                
                <div class="ls-actions-btn">
                  <label class="ls-label col-md-6 col-sl-12">
                    <input type="submit" style="width:100%" class="ls-btn-primary row col-md-6 col-xs-12" name="salvar"/>
                  </label>
                  <label class="ls-label col-md-6 col-sl-12">
                    <input type="reset" style="width:100%" class="ls-btn-danger col-md-6 col-xs-12" name="apagar"/>
                  </label>
                </div> 

            </fieldset>
        </form> 
      </div>
    </main>

    <style>
  
  fieldset{
    border: 1px solid black;
    background-color: #dcdcdc;
    border-radius: 5px;
  }
  
  </style>

    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
    <script>$('#valor').mask('#.###.###,00', {reverse: true});</script>
  </body>

</html>