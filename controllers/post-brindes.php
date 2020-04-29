<?php

include "../models/liberarBrinde.php";

date_default_timezone_set('America/Sao_Paulo');

$res[0] = $_POST['finalidade'];
$res[1] = $_POST['propNome'];
$res[2] = $_POST['inqNome'];
$res[3] = $_POST['valor'];
$res[4] = date('M');
$res[5] = date('Y');

$return = salvar($res[0], $res[1], $res[2], $res[3], $res[4], $res[5]);

if($return){
    
}

header ("Location: ../views/brindes.php");

?>