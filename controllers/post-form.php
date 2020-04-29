<?php

$contrato = $_GET["contrato"];
$propNome = $_GET["propNome"];
$inqNome = $_GET["inqNome"];
$valor = $_GET["valor"];
$dataInteira = $_GET["data"];

$dataInteira = date("mdY",(strtotime($dataInteira)));
$dataInteira = str_split($dataInteira, 2);
$dataInteira[2] = $dataInteira[2].$dataInteira[3];

include "../models/Contrato.php";
#incluir cadastro.php de volta e botar no post a mensagem de sucesso
$contrato = new Contrato($contrato, $propNome, $inqNome, $valor, $dataInteira[0], $dataInteira[1], $dataInteira[2]);

$contrato->inserir();

header ("Location: ../views/cadastro.php");

?>