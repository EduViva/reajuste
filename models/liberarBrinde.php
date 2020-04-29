<?php

function salvar($finalidade, $proprietario, $inquilino, $valor, $mes, $ano){

    if($finalidade == 'locacao' && $valor >= 2.000 || $finalidade == 'venda' && $valor >= 200.000){

        include "../controllers/dbAccess.php";

        $query = "INSERT INTO `brindes` (finalidade, proprietario, inquilino, valor, mes, ano) VALUES
        ('" . $finalidade . "','" . $proprietario ."', '" . $inquilino . "','" . $valor ."','" . $mes ."','" . $ano ."')";

        $db->query($query);
        $return = true;
    } else {
        $return = false;
    }

    return $return;
}
?>