<?php

$id = $_GET['id'];

$db = new mysqli("localhost", "root", "", "imobiliaria");

$sql = "SELECT * FROM `contratos` WHERE `idContrato` =". $id;

$return = $db->query($sql);


foreach ($return as $key => $value) {
  echo $value['codigo'] . "," . $value['proprietario']. "," . $value['locatario']. "," . $value['valorNovo']. "," . $value['valorAntigo']. "," . $value['proporcional']. "," . $value['diaEntrada']. "," . $value['mesEntrada']. "," . $value['anoEntrada']. "," . $id . "," . $value['observacoes'];
}

?>