<?php

include "../controllers/dbAccess.php";

date_default_timezone_set('America/Sao_Paulo');
$atualMes = date('M');
$atualAno = date('Y');


$return = $db->query("SELECT COUNT(*) FROM brindes");

if($return){
  while ($row = $return->fetch_assoc()) {
    $totalBrindes = $row['COUNT(*)'];
  }
}

$return = $db->query("SELECT COUNT(*) FROM brindes WHERE mes = '". $atualMes . "' AND ano = '". $atualAno ."'");

if($return){
  while ($row = $return->fetch_assoc()) {
    $mesBrindes = $row['COUNT(*)'];
  }
}
?>

<!DOCTYPE html>
<html class="ls-theme-green" lang="pt-br">
  <head>
    <title>Gerenciamento de Brindes</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="https://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../controllers/style-svg.css">
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
        Brindes
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
        <h1 class="ls-title-intro ls-ico-home">Acompanhe seus Brindes</h1>
        <?php
          date_default_timezone_set('America/Sao_Paulo');
          $date = date('M/Y');
        ?>
        <div class="ls-box ls-board-box">
      
          <header class="ls-info-header">
            <h2 class="ls-title-3">Gerenciamento de Brindes</h2>
            <p class="ls-float-right ls-float-none-xs ls-small-info">Dados de  <strong><?php echo $date; ?></strong></p>
          </header>
      
          <div id="sending-stats" class="row">
            <div class="col-sm-6 col-md-3">
      
              <div class="ls-box">
                <div class="ls-box-head">
                  <h6 class="ls-title-4">Total</h6>
                </div>
                <div class="ls-box-body">
                  <strong><?php echo $totalBrindes; ?></strong>
                  <small>Brindes já distribuidos</small>
                </div>
                <div class="ls-box-footer">
                  <a href="#" aria-label="Cadastrar uma venda/locação" data-ls-module="modal" data-target="#modalCadastroBrinde" class="ls-btn ls-btn-sm" title="Cadastrar uma venda/locação">Fechar contrato</a>
                </div>
              </div>
            </div>
        
            <div class="col-sm-6 col-md-3">
              <div class="ls-box">
                <div class="ls-box-head">
                  <h6 class="ls-title-4"><?php echo $mesBrindes; ?></h6>
                </div>
                <div class="ls-box-body">
                  <strong class="ls-ico-bars"></strong>
                  <small>Distribuidos este mês</small>
                </div>
                <div class="ls-box-footer">
                  <a href="listaBrindes.php" aria-label="Acompanhar Brindes" class="ls-btn ls-btn-sm" title="Acompanhar Brindes">Acompanhar Brindes</a>
                </div>
              </div>
            </div>
          </div>

          <!-- SVG Presente -->
          <div style="text-align:center;">
            
            <svg width="200" height="200" viewBox="0 0 1051 805" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path id="Vector 1" d="M63.8733 333.315C62.0838 280.43 128.243 242.622 161.546 230.329C178.695 198.32 281.587 172.573 321.85 150.306C354.059 132.492 462.519 134.997 512.722 138.476C570.133 146.363 698.972 154.203 755.041 122.472C825.127 82.8082 969.027 196.232 1035.39 213.628C1101.74 231.025 937.712 429.343 895.959 446.739C854.206 464.135 946.659 522.587 960.08 564.338C973.501 606.089 855.697 648.536 839.294 667.324C822.891 686.112 739.384 680.545 729.691 687.504C721.937 693.071 607.165 682.865 550.748 677.066C504.769 654.567 401.032 608.594 353.91 604.697C295.008 599.827 234.615 638.794 144.398 648.536C54.1806 658.278 24.3567 563.642 4.97119 558.771C-10.5372 554.874 13.9183 479.676 28.0847 442.564C40.7598 428.183 65.6627 386.2 63.8733 333.315Z" fill="url(#paint0_linear)"/>
                <g id="brilhos">
                <g id="Group_2" opacity="0.5">
                <path id="Vector" opacity="0.5" d="M174.63 37.963H171.3V56.833H174.63V37.963Z" fill="#47E6B1"/>
                <path id="Vector 2" opacity="0.5" d="M182.4 49.0629V45.7329H163.53V49.0629H182.4Z" fill="#47E6B1"/>
                </g>
                <g id="Group 2" opacity="0.5">
                <path id="Vector 3" opacity="0.5" d="M878.99 769.643H875.66V788.513H878.99V769.643Z" fill="#47E6B1"/>
                <path id="Vector 4" opacity="0.5" d="M886.76 780.743V777.413H867.89V780.743H886.76Z" fill="#47E6B1"/>
                </g>
                <g id="Group 3" opacity="0.5">
                <path id="Vector 5" opacity="0.5" d="M880.31 215.453H876.98V234.323H880.31V215.453Z" fill="#47E6B1"/>
                <path id="Vector 6" opacity="0.5" d="M888.08 226.553V223.223H869.21V226.553H888.08Z" fill="#47E6B1"/>
                </g>
                <g id="Group 4" opacity="0.5">
                <path id="Vector 7" opacity="0.5" d="M914.31 45.4529H910.98V64.3229H914.31V45.4529Z" fill="#47E6B1"/>
                <path id="Vector 8" opacity="0.5" d="M922.08 56.5529V53.2229H903.21V56.5529H922.08Z" fill="#47E6B1"/>
                </g>
                <g id="Group 5" opacity="0.5">
                <path id="Vector 9" opacity="0.5" d="M334.41 36.3829H331.08V55.2529H334.41V36.3829Z" fill="#47E6B1"/>
                <path id="Vector 10" opacity="0.5" d="M342.17 47.4829V44.1529H323.3V47.4829H342.17Z" fill="#47E6B1"/>
                </g>
                <path id="Vector 11" opacity="0.5" d="M125.21 318.313C124.293 317.913 123.555 317.189 123.136 316.28C122.718 315.371 122.648 314.34 122.94 313.383C122.987 313.237 123.017 313.086 123.03 312.933C123.097 312.479 123.006 312.016 122.773 311.621C122.539 311.227 122.177 310.924 121.747 310.765C121.316 310.605 120.845 310.599 120.41 310.746C119.975 310.893 119.605 311.185 119.36 311.573C119.268 311.697 119.191 311.831 119.13 311.973C118.73 312.89 118.006 313.628 117.097 314.047C116.188 314.465 115.157 314.535 114.2 314.243C114.054 314.196 113.903 314.166 113.75 314.153C113.296 314.086 112.833 314.177 112.438 314.41C112.044 314.644 111.741 315.006 111.582 315.436C111.422 315.867 111.416 316.339 111.563 316.773C111.71 317.208 112.002 317.578 112.39 317.823C112.514 317.915 112.648 317.992 112.79 318.053C113.707 318.453 114.445 319.177 114.864 320.086C115.282 320.995 115.352 322.026 115.06 322.983C115.013 323.129 114.983 323.28 114.97 323.433C114.903 323.887 114.994 324.35 115.227 324.745C115.461 325.139 115.823 325.442 116.253 325.601C116.684 325.761 117.156 325.767 117.59 325.62C118.025 325.473 118.395 325.181 118.64 324.793C118.732 324.669 118.809 324.535 118.87 324.393C119.27 323.476 119.994 322.738 120.903 322.319C121.812 321.901 122.843 321.831 123.8 322.123C123.946 322.17 124.097 322.2 124.25 322.213C124.704 322.28 125.167 322.189 125.562 321.956C125.957 321.722 126.259 321.36 126.418 320.93C126.578 320.499 126.584 320.027 126.437 319.593C126.29 319.158 125.998 318.788 125.61 318.543C125.486 318.451 125.352 318.374 125.21 318.313Z" fill="#4D8AF0"/>
                <path id="Vector 12" opacity="0.5" d="M186.69 696.653C185.773 696.253 185.035 695.529 184.616 694.62C184.198 693.711 184.128 692.68 184.42 691.723C184.467 691.577 184.497 691.426 184.51 691.273C184.577 690.819 184.486 690.356 184.253 689.961C184.019 689.567 183.657 689.264 183.227 689.105C182.796 688.945 182.324 688.939 181.89 689.086C181.455 689.233 181.085 689.525 180.84 689.913C180.748 690.037 180.671 690.171 180.61 690.313C180.21 691.23 179.486 691.968 178.577 692.387C177.668 692.805 176.637 692.875 175.68 692.583C175.534 692.536 175.383 692.506 175.23 692.493C174.776 692.426 174.313 692.517 173.918 692.75C173.524 692.984 173.221 693.346 173.062 693.776C172.902 694.207 172.896 694.679 173.043 695.113C173.19 695.548 173.482 695.918 173.87 696.163C173.994 696.255 174.128 696.332 174.27 696.393C175.187 696.793 175.925 697.517 176.344 698.426C176.762 699.335 176.832 700.366 176.54 701.323C176.493 701.469 176.463 701.62 176.45 701.773C176.383 702.227 176.474 702.69 176.707 703.085C176.941 703.479 177.303 703.782 177.733 703.941C178.164 704.101 178.636 704.107 179.07 703.96C179.505 703.813 179.875 703.521 180.12 703.133C180.212 703.009 180.289 702.875 180.35 702.733C180.75 701.816 181.474 701.078 182.383 700.659C183.292 700.241 184.323 700.171 185.28 700.463C185.426 700.51 185.577 700.54 185.73 700.553C186.184 700.62 186.647 700.529 187.042 700.296C187.436 700.062 187.739 699.7 187.898 699.27C188.058 698.839 188.064 698.367 187.917 697.933C187.77 697.498 187.478 697.128 187.09 696.883C186.966 696.791 186.832 696.714 186.69 696.653Z" fill="#4D8AF0"/>
                <path id="Vector 13" opacity="0.5" d="M745.69 195.653C744.773 195.253 744.035 194.529 743.616 193.62C743.198 192.711 743.128 191.68 743.42 190.723C743.467 190.577 743.497 190.426 743.51 190.273C743.577 189.819 743.486 189.356 743.253 188.961C743.019 188.567 742.657 188.264 742.227 188.105C741.796 187.945 741.325 187.939 740.89 188.086C740.456 188.233 740.085 188.525 739.84 188.913C739.748 189.037 739.671 189.171 739.61 189.313C739.21 190.23 738.486 190.968 737.577 191.387C736.668 191.805 735.637 191.875 734.68 191.583C734.534 191.536 734.383 191.506 734.23 191.493C733.776 191.426 733.313 191.517 732.918 191.75C732.524 191.984 732.221 192.346 732.062 192.776C731.902 193.207 731.896 193.679 732.043 194.113C732.19 194.548 732.482 194.918 732.87 195.163C732.994 195.255 733.128 195.332 733.27 195.393C734.187 195.793 734.925 196.517 735.344 197.426C735.762 198.335 735.832 199.366 735.54 200.323C735.493 200.469 735.463 200.62 735.45 200.773C735.383 201.227 735.474 201.69 735.707 202.085C735.941 202.479 736.303 202.782 736.733 202.941C737.164 203.101 737.636 203.107 738.07 202.96C738.505 202.813 738.875 202.521 739.12 202.133C739.212 202.009 739.289 201.875 739.35 201.733C739.75 200.816 740.474 200.078 741.383 199.659C742.292 199.241 743.323 199.171 744.28 199.463C744.426 199.51 744.577 199.54 744.73 199.553C745.184 199.62 745.647 199.529 746.042 199.296C746.436 199.062 746.739 198.7 746.898 198.27C747.058 197.839 747.064 197.367 746.917 196.933C746.77 196.498 746.478 196.128 746.09 195.883C745.966 195.791 745.832 195.714 745.69 195.653Z" fill="#4D8AF0"/>
                <path id="Vector 14" opacity="0.5" d="M738.24 286.043C737.323 285.643 736.585 284.919 736.166 284.01C735.748 283.101 735.678 282.07 735.97 281.113C736.017 280.967 736.047 280.816 736.06 280.663C736.127 280.209 736.036 279.746 735.803 279.351C735.569 278.957 735.207 278.654 734.777 278.495C734.346 278.335 733.875 278.329 733.44 278.476C733.005 278.623 732.635 278.915 732.39 279.303C732.298 279.427 732.221 279.561 732.16 279.703C731.76 280.62 731.036 281.358 730.127 281.777C729.218 282.195 728.187 282.265 727.23 281.973C727.084 281.926 726.933 281.896 726.78 281.883C726.326 281.816 725.863 281.907 725.468 282.14C725.074 282.374 724.771 282.736 724.612 283.166C724.452 283.597 724.446 284.069 724.593 284.503C724.74 284.938 725.032 285.308 725.42 285.553C725.544 285.645 725.678 285.722 725.82 285.783C726.737 286.183 727.475 286.907 727.894 287.816C728.312 288.725 728.382 289.756 728.09 290.713C728.043 290.859 728.013 291.01 728 291.163C727.933 291.617 728.024 292.08 728.257 292.475C728.491 292.869 728.853 293.172 729.284 293.331C729.714 293.491 730.186 293.497 730.62 293.35C731.055 293.203 731.425 292.911 731.67 292.523C731.762 292.399 731.839 292.265 731.9 292.123C732.3 291.206 733.024 290.468 733.933 290.049C734.842 289.631 735.873 289.561 736.83 289.853C736.976 289.9 737.127 289.93 737.28 289.943C737.734 290.01 738.197 289.919 738.592 289.686C738.987 289.452 739.289 289.09 739.448 288.66C739.608 288.229 739.614 287.757 739.467 287.323C739.32 286.888 739.028 286.518 738.64 286.273C738.516 286.181 738.382 286.104 738.24 286.043Z" fill="#4D8AF0"/>
                <path id="Vector 15" opacity="0.5" d="M738.77 7.67296C737.853 7.27259 737.115 6.54913 736.696 5.64016C736.278 4.73118 736.208 3.70009 736.5 2.74296C736.547 2.59691 736.577 2.44592 736.59 2.29296C736.657 1.83916 736.566 1.37604 736.333 0.981258C736.099 0.586479 735.737 0.284034 735.307 0.124625C734.876 -0.0347824 734.404 -0.0414614 733.97 0.105708C733.535 0.252878 733.165 0.544949 732.92 0.932956C732.828 1.05697 732.751 1.1912 732.69 1.33296C732.292 2.24971 731.57 2.98829 730.664 3.40858C729.757 3.82886 728.727 3.90159 727.77 3.61296C727.624 3.56579 727.473 3.5356 727.32 3.52296C726.866 3.45576 726.403 3.54662 726.008 3.78029C725.614 4.01397 725.311 4.37626 725.152 4.80643C724.992 5.23659 724.986 5.70848 725.133 6.14298C725.28 6.57749 725.572 6.9482 725.96 7.19296C726.084 7.2848 726.218 7.36198 726.36 7.42296C727.277 7.82333 728.015 8.54678 728.434 9.45575C728.852 10.3647 728.922 11.3958 728.63 12.3529C728.583 12.499 728.553 12.65 728.54 12.8029C728.473 13.2567 728.564 13.7198 728.797 14.1146C729.031 14.5094 729.393 14.8118 729.823 14.9712C730.254 15.1306 730.726 15.1373 731.16 14.9902C731.595 14.843 731.965 14.5509 732.21 14.1629C732.302 14.0389 732.379 13.9047 732.44 13.7629C732.829 12.8436 733.541 12.0987 734.443 11.6693C735.344 11.24 736.371 11.1558 737.33 11.4329C737.476 11.4801 737.627 11.5103 737.78 11.5229C738.234 11.5901 738.697 11.4993 739.092 11.2656C739.487 11.0319 739.789 10.6696 739.948 10.2394C740.108 9.80933 740.114 9.33742 739.967 8.90292C739.82 8.46841 739.528 8.0977 739.14 7.85295C739.023 7.78039 738.899 7.72008 738.77 7.67296Z" fill="#4D8AF0"/>
                <path id="Vector 16" opacity="0.5" d="M906.93 464.713C906.013 464.313 905.275 463.589 904.856 462.68C904.438 461.771 904.368 460.74 904.66 459.783C904.707 459.637 904.737 459.486 904.75 459.333C904.817 458.879 904.726 458.416 904.493 458.021C904.259 457.627 903.897 457.324 903.467 457.165C903.036 457.005 902.565 456.999 902.13 457.146C901.695 457.293 901.325 457.585 901.08 457.973C900.988 458.097 900.911 458.231 900.85 458.373C900.45 459.29 899.726 460.028 898.817 460.447C897.908 460.865 896.877 460.935 895.92 460.643C895.774 460.596 895.623 460.566 895.47 460.553C895.016 460.486 894.553 460.577 894.158 460.81C893.764 461.044 893.461 461.406 893.302 461.836C893.142 462.267 893.136 462.739 893.283 463.173C893.43 463.608 893.722 463.978 894.11 464.223C894.234 464.315 894.368 464.392 894.51 464.453C895.436 464.856 896.18 465.588 896.598 466.508C897.015 467.428 897.077 468.47 896.77 469.433C896.723 469.579 896.693 469.73 896.68 469.883C896.613 470.337 896.704 470.8 896.937 471.195C897.171 471.589 897.533 471.892 897.963 472.051C898.394 472.211 898.866 472.217 899.3 472.07C899.735 471.923 900.105 471.631 900.35 471.243C900.442 471.119 900.519 470.985 900.58 470.843C900.98 469.926 901.704 469.188 902.613 468.769C903.522 468.351 904.553 468.281 905.51 468.573C905.656 468.62 905.807 468.65 905.96 468.663C906.414 468.73 906.877 468.639 907.272 468.406C907.667 468.172 907.969 467.81 908.128 467.38C908.288 466.949 908.294 466.477 908.147 466.043C908 465.608 907.708 465.238 907.32 464.993C907.202 464.884 907.071 464.79 906.93 464.713Z" fill="#4D8AF0"/>
                <path id="Vector 17" opacity="0.5" d="M125.77 172.893C129.448 172.893 132.43 169.911 132.43 166.233C132.43 162.555 129.448 159.573 125.77 159.573C122.092 159.573 119.11 162.555 119.11 166.233C119.11 169.911 122.092 172.893 125.77 172.893Z" fill="#F55F44"/>
                <path id="Vector 18" opacity="0.5" d="M76.94 651.203C80.6182 651.203 83.6 648.221 83.6 644.543C83.6 640.865 80.6182 637.883 76.94 637.883C73.2618 637.883 70.28 640.865 70.28 644.543C70.28 648.221 73.2618 651.203 76.94 651.203Z" fill="#F55F44"/>
                <path id="Vector 19" opacity="0.5" d="M503.66 52.4529C507.338 52.4529 510.32 49.4711 510.32 45.7929C510.32 42.1147 507.338 39.1329 503.66 39.1329C499.982 39.1329 497 42.1147 497 45.7929C497 49.4711 499.982 52.4529 503.66 52.4529Z" fill="#F55F44"/>
                <path id="Vector 20" opacity="0.5" d="M570.66 179.453C574.338 179.453 577.32 176.471 577.32 172.793C577.32 169.115 574.338 166.133 570.66 166.133C566.982 166.133 564 169.115 564 172.793C564 176.471 566.982 179.453 570.66 179.453Z" fill="#F55F44"/>
                <path id="Vector 21" opacity="0.5" d="M70.66 485.453C74.3382 485.453 77.32 482.471 77.32 478.793C77.32 475.115 74.3382 472.133 70.66 472.133C66.9818 472.133 64 475.115 64 478.793C64 482.471 66.9818 485.453 70.66 485.453Z" fill="#F55F44"/>
                <path id="Vector 22" opacity="0.5" d="M331.5 162.113C335.178 162.113 338.16 159.131 338.16 155.453C338.16 151.775 335.178 148.793 331.5 148.793C327.822 148.793 324.84 151.775 324.84 155.453C324.84 159.131 327.822 162.113 331.5 162.113Z" fill="#47E6B1"/>
                <path id="Vector 23" opacity="0.5" d="M789.6 604.523C793.278 604.523 796.26 601.541 796.26 597.863C796.26 594.185 793.278 591.203 789.6 591.203C785.922 591.203 782.94 594.185 782.94 597.863C782.94 601.541 785.922 604.523 789.6 604.523Z" fill="#F55F44"/>
                </g>
                <g id="presente">
                <g id="Group 6" opacity="0.5">
                <path id="Vector 24" opacity="0.5" d="M608.54 214.183C595.64 201.243 576.83 196.093 555.54 199.683C535.65 203.043 515.75 213.813 499.54 230.013C494.837 234.745 490.885 240.167 487.82 246.093C484.835 239.97 480.914 234.35 476.2 229.433C460.2 212.963 440.53 201.853 420.7 198.143C399.51 194.143 380.62 199.003 367.5 211.723C354.38 224.443 348.95 243.173 352.25 264.433C355.33 284.433 365.77 304.433 381.77 320.923C415.35 355.563 482.36 342.033 485.2 341.433L486.04 341.263L488.62 341.853C491.45 342.493 558.21 357.173 592.37 323.123C608.62 306.933 619.45 287.063 622.88 267.183C626.53 245.953 621.44 227.123 608.54 214.183ZM473.85 321.433C457.66 323.613 417.3 326.573 397.26 305.903C384.38 292.613 375.95 276.713 373.55 261.153C371.35 246.953 374.55 234.883 382.49 227.153C385.605 224.161 389.33 221.879 393.41 220.463C400.09 218.093 408.04 217.653 416.73 219.283C432.21 222.173 447.83 231.093 460.73 244.383C480.77 265.103 476.53 305.353 473.85 321.433ZM601.63 263.503C598.96 279.023 590.26 294.763 577.15 307.833C556.75 328.163 516.45 324.503 500.31 322.043C497.9 305.883 494.37 265.573 514.76 245.243C527.87 232.173 543.64 223.533 559.17 220.903C567.89 219.433 575.83 220.003 582.47 222.483C586.524 223.97 590.208 226.317 593.27 229.363C601.1 237.253 604.07 249.373 601.63 263.523V263.503Z" fill="url(#paint1_linear)"/>
                </g>
                <path id="Vector 25" d="M491.68 337.083L485.3 338.433C482.59 339.003 418.47 351.943 386.3 318.803C371.02 303.043 360.99 283.853 358.04 264.803C354.89 244.423 360.04 226.493 372.62 214.323C385.2 202.153 403.26 197.543 423.53 201.323C442.53 204.873 461.37 215.503 476.64 231.263C508.76 264.413 493.82 328.093 493.16 330.783L491.68 337.083ZM397.47 222.693C393.566 224.047 390.001 226.231 387.02 229.093C379.4 236.473 376.36 248.023 378.46 261.613C380.76 276.503 388.82 291.713 401.15 304.433C420.32 324.213 458.94 321.433 474.43 319.293C477 303.883 481.04 265.363 461.87 245.583C449.54 232.863 434.59 224.333 419.78 221.583C411.48 220.003 403.87 220.433 397.47 222.693Z" fill="#6C63FF"/>
                <path id="Vector 26" d="M482.22 337.363L480.77 331.003C480.16 328.293 466.32 264.363 499.01 231.783C514.55 216.283 533.6 205.983 552.63 202.783C572.96 199.343 590.96 204.273 603.31 216.653C615.66 229.033 620.52 247.053 617.02 267.373C613.74 286.373 603.37 305.373 587.83 320.903C555.16 353.433 491.28 339.433 488.57 338.813L482.22 337.363ZM578.39 224.613C572.03 222.233 564.39 221.683 556.1 223.093C541.24 225.603 526.1 233.873 513.6 246.383C494.09 265.833 497.46 304.383 499.77 319.873C515.22 322.223 553.77 325.733 573.3 306.273C585.85 293.763 594.17 278.703 596.73 263.853C599.07 250.303 596.23 238.703 588.73 231.193C585.796 228.278 582.265 226.033 578.38 224.613H578.39Z" fill="#6C63FF"/>
                <g id="Group 7" opacity="0.5">
                <path id="Vector 27" opacity="0.5" d="M794.87 320.323H173.21V444.713H205.51V804.723H762.57V444.713H794.87V320.323Z" fill="url(#paint2_linear)"/>
                </g>
                <path id="Vector 28" d="M755.52 357.933H212.56V798.603H755.52V357.933Z" fill="#F5F5F5"/>
                <path id="Vector 29" d="M535.19 436.623H432.89V798.603H535.19V436.623Z" fill="#6C63FF"/>
                <path id="Vector 30" opacity="0.1" d="M755.52 334.323H212.56V444.493H755.52V334.323Z" fill="black"/>
                <path id="Vector 31" d="M786.99 326.453H181.08V436.623H786.99V326.453Z" fill="#F5F5F5"/>
                <path id="Vector 32" d="M535.19 326.453H432.89V436.623H535.19V326.453Z" fill="#6C63FF"/>
                </g>
                <g id="pernasuperior">
                <path id="Vector 33" d="M789 342.053L804.43 357.673L815.76 344.483L798.15 328.173L789 342.053Z" fill="#FDA57D"/>
                <path id="Vector 34" opacity="0.1" d="M798.78 328.933L789.63 342.813L795.48 348.743L807.35 336.873L798.78 328.933Z" fill="black"/>
                <path id="Vector 35" d="M815.77 344.483L820.47 344.763C820.47 344.763 840.79 329.613 842.69 334.993C844.59 340.373 810.89 375.263 810.89 375.263L804.45 357.683L815.77 344.483Z" fill="#333333"/>
                <path id="Vector 36" d="M624.06 296.933L632 312.823C634.473 317.766 638.438 321.806 643.334 324.37C648.23 326.935 653.809 327.894 659.28 327.113L755.51 313.363L788.38 354.433L813.03 329.783L760.03 284.333C758.616 283.12 756.964 282.216 755.18 281.678C753.396 281.141 751.519 280.982 749.67 281.213L624.06 296.933Z" fill="#4D8AF0"/>
                <path id="Vector 37" opacity="0.1" d="M729.73 315.643L728.5 319.343L754.38 315.643L764.49 328.283L770.81 315.643L737.94 307.433L729.73 315.643Z" fill="black"/>
                </g>
                <g id="pessoa">
                <path id="Vector 38" d="M715.99 378.413L705.71 397.823L721.69 404.673L731.97 382.983L715.99 378.413Z" fill="#FDA57D"/>
                <path id="Vector 39" d="M721.69 404.673L722.83 409.243C722.83 409.243 743.38 424.083 738.83 427.513C734.28 430.943 690.83 409.243 690.83 409.243L705.67 397.823L721.69 404.673Z" fill="#333333"/>
                <path id="Vector 40" opacity="0.1" d="M730.87 384.993L714.71 379.603L709.9 388.683L725.88 395.543L730.87 384.993Z" fill="black"/>
                <path id="Vector 41" d="M669.43 227.653L693.15 200.213C693.99 199.235 694.419 197.969 694.349 196.682C694.278 195.394 693.712 194.183 692.77 193.303L641.16 154.163L634.88 163.943L674.88 194.733L657.88 213.353L669.43 227.653Z" fill="#FDA57D"/>
                <path id="Vector 42" opacity="0.1" d="M666.71 203.743L658.41 212.843L669.94 227.153L681.83 213.433C676.026 211.587 670.811 208.245 666.71 203.743Z" fill="black"/>
                <path id="Vector 43" d="M600.55 233.613L573.7 213.433C572.064 212.202 570.95 210.402 570.579 208.388C570.209 206.375 570.609 204.295 571.7 202.563L611.88 157.853L620.1 166.073L592.35 200.713L608.77 217.183L600.55 233.613Z" fill="#FDA57D"/>
                <path id="Vector 44" opacity="0.1" d="M594.89 229.563L599.28 232.863L607.5 216.433L597.18 206.113C597.4 209.613 598.02 223.193 594.89 229.563Z" fill="black"/>
                <path id="Vector 45" d="M730.87 313.363L706.22 387.303L730.87 395.523L771.95 313.363L739.09 305.153L730.87 313.363Z" fill="#4D8AF0"/>
                <path id="Vector 46" d="M611.84 157.943C611.84 157.943 622.37 144.373 630.36 153.503C638.35 162.633 617.77 163.773 617.77 163.773L611.84 157.943Z" fill="#FDA57D"/>
                <path id="Vector 47" opacity="0.1" d="M599.91 208.303C599.91 208.303 602.07 234.983 593.86 235.903L610.29 244.123C610.29 244.123 609.38 292.503 626.72 309.853C626.72 309.853 658.72 292.513 692.45 293.423C726.18 294.333 684.23 260.563 684.23 260.563L678.68 223.163L683.25 216.313C677.055 214.461 671.509 210.898 667.25 206.033C662.68 211.743 652.25 219.483 643.13 219.483H639.2C625.67 219.483 611.28 216.753 599.88 209.483L599.91 208.303Z" fill="black"/>
                <path id="Vector 48" d="M598.39 206.023C598.39 206.023 600.55 232.703 592.34 233.623L608.77 241.833C608.77 241.833 607.86 290.213 625.2 307.563C625.2 307.563 657.2 290.223 690.93 291.133C724.66 292.043 682.71 258.273 682.71 258.273L677.16 220.873L681.73 214.023C675.535 212.171 669.989 208.608 665.73 203.743C661.16 209.453 650.73 217.193 641.61 217.193H637.68C623.79 217.196 610.174 213.328 598.36 206.023H598.39Z" fill="#3AD29F"/>
                <path id="Vector 49" d="M620.03 198.503V207.673C620.03 212.32 621.876 216.776 625.16 220.063L644.67 239.573L651.17 226.573C652.302 224.31 652.891 221.814 652.89 219.283V198.483L620.03 198.503Z" fill="#FDA57D"/>
                <path id="Vector 50" opacity="0.1" d="M620.28 209.063C620.28 209.403 620.28 209.733 620.28 210.063C624.796 214.097 630.64 216.327 636.695 216.327C642.75 216.327 648.594 214.097 653.11 210.063V199.893H620.28V209.063Z" fill="black"/>
                <path id="Vector 51" d="M636.46 214.933C650.074 214.933 661.11 203.897 661.11 190.283C661.11 176.669 650.074 165.633 636.46 165.633C622.846 165.633 611.81 176.669 611.81 190.283C611.81 203.897 622.846 214.933 636.46 214.933Z" fill="#FDA57D"/>
                <path id="Vector 52" opacity="0.1" d="M620.03 183.333H661.11C661.11 183.333 677.54 166.903 661.11 158.683C657.542 156.981 653.805 155.661 649.96 154.743C624.96 148.403 601.22 169.073 604.43 194.653C605.19 200.653 607.36 205.653 611.81 207.973C629.16 217.113 620.03 183.333 620.03 183.333Z" fill="black"/>
                <path id="Vector 53" d="M620.03 182.193H661.11C661.11 182.193 677.54 165.763 661.11 157.543C657.542 155.841 653.805 154.521 649.96 153.603C624.96 147.263 601.22 167.933 604.43 193.513C605.19 199.513 607.36 204.513 611.81 206.833C629.16 215.973 620.03 182.193 620.03 182.193Z" fill="#333333"/>
                <path id="Vector 54" d="M621.23 194.603C622.489 194.603 623.51 192.812 623.51 190.603C623.51 188.394 622.489 186.603 621.23 186.603C619.971 186.603 618.95 188.394 618.95 190.603C618.95 192.812 619.971 194.603 621.23 194.603Z" fill="#FDA57D"/>
                <path id="Vector 55" opacity="0.1" d="M608.67 241.413L609.81 237.983L613.23 240.273L608.67 241.413Z" fill="black"/>
                <path id="Vector 56" opacity="0.1" d="M682.77 258.283C682.77 258.283 670.34 264.283 666.91 269.953L682.77 258.283Z" fill="black"/>
                <path id="Vector 57" opacity="0.1" d="M677.17 220.863L676.03 224.283L673.74 220.863H677.17Z" fill="black"/>
                <path id="Vector 58" d="M620.03 182.193H661.11C661.11 182.193 677.54 165.763 661.11 157.543C657.542 155.841 653.805 154.521 649.96 153.603C624.96 147.263 601.22 167.933 604.43 193.513C605.19 199.513 607.36 204.513 611.81 206.833C629.16 215.973 620.03 182.193 620.03 182.193Z" fill="#333333"/>
                </g>
                <defs>
                <linearGradient id="paint0_linear" x1="1040.61" y1="216.412" x2="31.6011" y2="602.98" gradientUnits="userSpaceOnUse">
                <stop stop-color="#00FFB2" stop-opacity="0.57"/>
                <stop offset="1" stop-color="#00C2FF"/>
                </linearGradient>
                <linearGradient id="paint1_linear" x1="487.67" y1="345.543" x2="487.67" y2="196.783" gradientUnits="userSpaceOnUse">
                <stop stop-color="#808080" stop-opacity="0.25"/>
                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                </linearGradient>
                <linearGradient id="paint2_linear" x1="261295" y1="390073" x2="261295" y2="155430" gradientUnits="userSpaceOnUse">
                <stop stop-color="#808080" stop-opacity="0.25"/>
                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                </linearGradient>
                <clipPath id="clip0">
                </clipPath>
                </defs>
            </svg>        
          </div>
    </main>

  <!-- Modal Cadastro Brinde -->
  <div class="ls-modal" id="modalCadastroBrinde">
    <div class="ls-modal-box">
      <div class="ls-modal-header">
        <button data-dismiss="modal">&times;</button>
        <h4 class="ls-modal-title">Fechar contrato e liberar brindes</h4>
      </div>
        
      <form action="../controllers/post-brindes.php" method="POST" class="ls-form ls-form-horizontal">
        <div class="ls-modal-body" id="myModalBody">
         
          <fieldset style="padding:5px" class="row">
              
              <!--Radio para pegar pretensão do contrato -->
              <fieldset> <legend style="padding-bottom: 15px;padding-left: 5px"><b>Finalidade</b></legend>
              
                <label class="ls-label col-md-5">Locação
                <input type="radio" name="finalidade" value="locacao" checked>
                </label>

                <label class="ls-label col-md-5">Venda
                <input type="radio" name="finalidade" value="venda">
                </label>
              
              </fieldset>

              <!-- Se for venda abrirá estes campos -->
              <span class="venda" style="display: none">
                <label class="ls-label col-md-12 col-xs-12">
                  <b class="ls-label-text">Proprietário</b>
                  <div class="ls-prefix-group">
                      <span class="ls-label-text-prefix ls-ico-user"></span>
                      <input type="text" id="propNome" name="propNome" placeholder="Insira o nome aqui" class="ls-field">
                  </div>
                </label>
              </span>

              <!-- Campos sempre abertos -->
                <label class="ls-label col-md-12 col-xs-12">
                    <b class="ls-label-text">Inquilino</b>
                    <div class="ls-prefix-group">
                        <span class="ls-label-text-prefix ls-ico-user"></span>
                        <input type="text" id="inqNome" name="inqNome" placeholder="Insira o nome aqui" class="ls-field" required>
                    </div>
                </label>

              <!-- Troca somente a label -->
              <label class="ls-label col-md-6 col-sl-12">
                <b class="ls-label-text" id="labelValor">Valor de Locação</b>
                <div class="ls-prefix-group">
                  <span class="ls-label-text-prefix">$</span>
                  <input type="text" min="1" id="valor" name="valor" class="ls-field" autocomplete="off" required>
                </div>
              </label>

              <div class="col-md-12 col-sl-12">
                <p>Brindes são liberados apenas para Locações a partir de R$2.000,00 e Vendas a partir de R$200.000,00</p>
              </div>

          </fieldset>
        </div>
      
        <div class="ls-modal-footer">
          <button class="ls-btn ls-float-right" data-dismiss="modal">Fechar</button>
          <button type="submit" class="ls-btn-primary">Salvar</button>
        </div>
      </form>

    </div>
  </div><!-- /.modal -->

    <!-- Scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script src="https://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
    <script>
      $('input[name="finalidade"]').change(function () {
        if ($('input[name="finalidade"]:checked').val() === "venda") {
            $('.venda').show();
            $('#labelValor').text('Valor de Venda');
            $('#propNome').attr('required', 'req');
        } else {
            $('.venda').hide();
            $('#labelValor').text('Valor de Locação');
            $('#propNome').removeAttr('required');
        }
      });
      $('#valor').mask('#.###.###,00', {reverse: true});
    </script>
  </body>
</html>