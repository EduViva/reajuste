<?php

class Contrato{

    public $codContrato, $propNome, $inqNome, $valorNovo, $valorAntigo, $proporcional, $diaEntrada, $mesEntrada, $anoEntrada;

    public function __construct($contrato, $propNome, $inqNome, $valor, $dia, $mes, $ano){
        $this->setCodContrato($contrato);
        $this->setPropNome($propNome);
        $this->setInqNome($inqNome);
        $this->setValorNovo($valor);
        $this->setValorAntigo($valor);
        $this->setDiaEntrada($dia);
        $this->setMesEntrada($mes);
        $this->setAnoEntrada($ano);
        $this->db = new mysqli("localhost", "root", "", "imobiliaria");
    }

    public function setCodContrato($contrato){
        $this->codContrato = $contrato;
    }

    public function getCodContrato(){
        return $this->codContrato;
    }

    public function setPropNome($propNome){
        $this->propNome = $propNome;
    }

    public function getPropNome(){
        return $this->propNome;
    }

    public function setInqNome($inqNome){
        $this->inqNome = $inqNome;
    }

    public function getInqNome(){
        return $this->inqNome;
    }

    public function setValorNovo($valorNovo){
        $this->valorNovo = $valorNovo;
    }

    public function getValorNovo(){
        return $this->valorNovo;
    }

    public function setValorAntigo($valorAntigo){
        $this->valorAntigo = $valorAntigo;
    }

    public function getValorAntigo(){
        return $this->valorAntigo;
    }

    public function setProporcional($proporcional){
        $this->proporcional = $proporcional;
    }

    public function getProporcional(){
        return $this->proporcional;
    }

    public function setDiaEntrada($diaEntrada){
        $this->diaEntrada = $diaEntrada;
    }

    public function getDiaEntrada(){
        return $this->diaEntrada;
    }

    public function setMesEntrada($mesEntrada){
        $this->mesEntrada = $mesEntrada;
    }

    public function getMesEntrada(){
        return $this->mesEntrada;
    }

    public function setAnoEntrada($anoEntrada){
        $this->anoEntrada = $anoEntrada;
    }

    public function getAnoEntrada(){
        return $this->anoEntrada;
    }

/////////////////////////////////////

    public function inserir(){

        $insereContrato = "INSERT INTO contratos (codigo, proprietario, locatario, valorNovo, valorAntigo, diaEntrada, mesEntrada, anoEntrada, observacoes) VALUES
        ('" . $this->getCodContrato() . "','" . $this->getPropNome() . "','" . $this->getInqNome() . "','" . $this->getValorNovo() . "','" . $this->getValorAntigo() . "','" . $this->getDiaEntrada() . "','" . $this->getMesEntrada() . "','" . $this->getAnoEntrada() . "','.')";

        $this->db->query($insereContrato);

    }

}



?>