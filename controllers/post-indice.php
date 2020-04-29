<?php

date_default_timezone_set('America/Sao_Paulo');

#Identificando qual botão foi apertado
function get_post_action($name){
    $params = func_get_args();
    
    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}

#Guarda o índice no banco
function cadastro($coluna, $valor){
    $insereIndice = "UPDATE indice SET " . $coluna . " = '" . $valor . "' WHERE id = 1";
    $db = new mysqli("localhost", "root", "", "imobiliaria");
    $db->query($insereIndice);
}

#reajusta os valores quando apertado o botão 'reajustar'
function reajustar($valor, $mes){
    $db = new mysqli("localhost", "root", "", "imobiliaria");
    $anoAtual = date('Y');

    #reajusta todos contratos com o mês validado pelo botão apertado, exceto os que o ano de entrada for igual ao ano atual
    $reajuste = "UPDATE contratos SET `valorAntigo` = `valorNovo` , `valorNovo` = (`valorAntigo` + (`valorAntigo` * " . $valor . " / 100)) WHERE `anoEntrada` <> '" . $anoAtual . "' AND `mesEntrada` = '" . $mes . "'";
    $db->query($reajuste);

    #faz o cálculo do proporcional para os contratos com o mês validado pelo botão apertado, exceto os que o ano de entrada for igual ao ano atual
    $proporcional = "UPDATE contratos SET `proporcional` = (`valorNovo` - ((`valorNovo` / 30) * (31 - `diaEntrada`) + (`valorAntigo` / 30) * (`diaEntrada` - 1))) WHERE `anoEntrada` <> '" . $anoAtual . "' AND `mesEntrada` = '" . $mes . "'";
    $db->query($proporcional);
}

#altera o indice e refaz o reajuste quando apertado em 'retificar'
function alterar($valor, $mes){
    $db = new mysqli("localhost", "root", "", "imobiliaria");
    $anoAtual = date('Y');

    $altera = "UPDATE contratos SET `valorNovo` = `valorAntigo` WHERE `anoEntrada` <> '" . $anoAtual . "' AND `mesEntrada` = '" . $mes . "'";
    $db->query($altera);

    reajustar($valor, $mes);
}

#pega qual botão de reajustar foi apertado e reajusta os valores
switch (get_post_action('btnJan', 'btnFev', 'btnMar', 'btnAbr', 'btnMai', 'btnJun', 'btnJul', 'btnAgo', 'btnSet', 'btnOut', 'btnNov', 'btnDez')) {
        case 'btnJan':
        cadastro('janeiro', $_POST['jan']);
        reajustar($_POST['jan'], '01');
        break;
    
        case 'btnFev':
        cadastro('fevereiro', $_POST['fev']);
        reajustar($_POST['fev'], '02');
        break;

        case 'btnMar':
        cadastro('marco', $_POST['mar']);
        reajustar($_POST['mar'], '03');
        break;

        case 'btnAbr':
        cadastro('abril', $_POST['abr']);
        reajustar($_POST['abr'], '04');
        break;

        case 'btnMai':
        cadastro('maio', $_POST['mai']);
        reajustar($_POST['mai'], '05');
        break;

        case 'btnJun':
        cadastro('junho', $_POST['jun']);
        reajustar($_POST['jun'], '06');
        break;

        case 'btnJul':
        cadastro('julho', $_POST['jul']);
        reajustar($_POST['jul'], '07');
        break;

        case 'btnAgo':
        cadastro('agosto', $_POST['ago']);
        reajustar($_POST['ago'], '08');
        break;

        case 'btnSet':
        cadastro('setembro', $_POST['set']);
        reajustar($_POST['set'], '09');
        break;

        case 'btnOut':
        cadastro('outubro', $_POST['out']);
        reajustar($_POST['out'], '10');
        break;

        case 'btnNov':
        cadastro('novembro', $_POST['nov']);
        reajustar($_POST['nov'], '11');
        break;

        case 'btnDez':
        cadastro('dezembro', $_POST['dez']);
        reajustar($_POST['dez'], '12');
        break;
}

#pega qual botão de retificar foi apertado, retifica o indice e refaz o reajuste
switch(get_post_action('altJan', 'altFev', 'altMar', 'altAbr', 'altMai', 'altJun', 'altJul', 'altAgo', 'altSet', 'altOut', 'altNov', 'altDez')){

    case 'altJan':
    cadastro('janeiro', $_POST['jan']);
    alterar($_POST['jan'], '01');
    break;

    case 'altFev':
    cadastro('fevereiro', $_POST['fev']);
    alterar($_POST['fev'], '02');
    break;
    
    case 'altMar':
    cadastro('marco', $_POST['mar']);
    alterar($_POST['mar'], '03');
    break;

    case 'altAbr':
    cadastro('abril', $_POST['abr']);
    alterar($_POST['abr'], '04');
    break;

    case 'altMai':
    cadastro('maio', $_POST['mai']);
    alterar($_POST['mai'], '05');
    break;

    case 'altJun':
    cadastro('junho', $_POST['jun']);
    alterar($_POST['jun'], '06');
    break;

    case 'altJul':
    cadastro('julho', $_POST['jul']);
    alterar($_POST['jul'], '07');
    break;

    case 'altAgo':
    cadastro('agosto', $_POST['ago']);
    alterar($_POST['ago'], '08');
    break;

    case 'altSet':
    cadastro('setembro', $_POST['set']);
    alterar($_POST['set'], '09');
    break;

    case 'altOut':
    cadastro('outubro', $_POST['out']);
    alterar($_POST['out'], '10');
    break;

    case 'altNov':
    cadastro('novembro', $_POST['nov']);
    alterar($_POST['nov'], '11');
    break;

    case 'altDez':
    cadastro('dezembro', $_POST['dez']);
    alterar($_POST['dez'], '12');
    break;
}

header("Location: ../views/indice.php");

?>