<?php

$valor = $_GET['id'];

$db = new mysqli("localhost", "root", "", "imobiliaria");

$sql = "UPDATE contratos SET `valorNovo` = `valorAntigo`, `proporcional` = 0 WHERE idContrato = " . $valor;

$db->query($sql);

$return = $db->query("SELECT `valorNovo` FROM contratos WHERE `idContrato` = ".$valor);

foreach ($return as $key => $value) {
    echo $value['valorNovo'];
}



?>