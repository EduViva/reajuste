<?php


$id = $_GET['id'];
$codigo = $_GET['cod'];
$proprietario = $_GET['prop'];
$inquilino = $_GET['inq'];
$novo = $_GET['novo'];
$antigo = $_GET['ant'];
$proporcional = $_GET['proporcional'];
$dia = $_GET['dia'];
$mes = $_GET['mes'];
$ano = $_GET['ano'];
$obs = $_GET['obs'];

$db = new mysqli("localhost", "root", "", "imobiliaria");

$sql = "UPDATE contratos SET 
`codigo`=". $codigo .",
`proprietario`=".$proprietario.",
`locatario`=".$inquilino.",
`valorNovo`=".$novo.",
`valorAntigo`=".$antigo.",
`proporcional`=".$proporcional.",
`diaEntrada`=".$dia.",
`mesEntrada`=".$mes.",
`anoEntrada`=".$ano.",
`observacoes`=".$obs." WHERE `idContrato`=".$id;

$db->query($sql);

$return = $db->query("SELECT * FROM `contratos` WHERE `idContrato`=".$id);

foreach ($return as $key => $value) {
    echo $value['codigo'] . "," . $value['proprietario']. "," . $value['locatario']. "," . $value['valorNovo']. "," . $value['valorAntigo']. "," . $value['proporcional']. "," . $value['diaEntrada']. "," . $value['mesEntrada']. "," . $value['anoEntrada']. "," . $value['observacoes'];
}
?>