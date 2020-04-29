<?php

include "../controllers/dbAccess.php";

$total = $_GET['total'];


date_default_timezone_set('America/Sao_Paulo');
$atualDate = date('M');
$atualAno = date("Y");


$return = $db->query("SELECT COUNT(*) FROM brindes WHERE mes = '". $atualDate . "' AND ano = '" . $atualAno . "'");

if($return){
  while ($row = $return->fetch_assoc()) {
    $mesBrindes = $row['COUNT(*)'];
  }
}

if($mesBrindes > $total){

  echo true;

  //$pesquisa = $db->query("SELECT * FROM brindes WHERE mes = '" . $atualDate . "'");

  //foreach ($pesquisa as $key => $row) {
    //echo $row['finalidade'] .",". $row['proprietario'] .",". $row['inquilino'] .",". $row['valor'] .",";
  //}

}
?>