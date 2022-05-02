<?php

class Palestra{

    //atributos, propriedades
    private $Nome;
    private $Data;
    private $Turno;
    //private $Duracao;
    //private $Tema;
    //private $Sala;
    private $Ministrante; //associação
    private $Participante; //associação

    public function __construct($Nome, $Data, $Turno){
        $this->Nome = $Nome;
        $this->Data = $Data;
        $this->Turno = $Turno;
        $this->Participante = [];
        //$this->Duracao = $Duracao;
        //$this->Tema = $Tema;
        //$this->Sala = $Sala;
    }


    //métodos, funcionalidades, ações
    public function getNome(){ return $this->Nome; }

    public function getData() {return $this->Data; }

    public function getTurno() { return $this->Turno; }

    public function getDuracao() { return $this->Duracao; }

    public function getTema(){ return $this->Tema; }

    public function getSala(){ return $this->Sala; }

    public function addMinistrante(Ministrante $Ministrante){
        $this->Ministrante = $Ministrante;
    }

    public function getMinistrante() { return $this->Ministrante; }

    public function addParticipantes(Participante $Participante){
        $this->Participante[] = $Participante;
    }

    public function getParticipantes() {return $this->Participante; }

    public function getPublicoTotal(){
        return sizeof($this->getParticipantes());
    }

}