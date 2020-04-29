<?php

include "../controllers/dbAccess.php";

$valor = $_GET['id'];
$table = $_GET['table'];

$sql = "DELETE FROM `" . $table . "` WHERE `idContrato` =". $valor;

if(!($db->query($sql))){
    $sql = "DELETE FROM `" . $table . "` WHERE `id` =". $valor;
    $db->query($sql);
}

?>