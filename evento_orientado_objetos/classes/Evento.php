<?php

class Evento{

    //atributos, propriedades
    private $Nome;
    private $Local;
    private $Data;
    private $Inicio;
    private $Fim;
    private $Palestras; //composição
    private $Participantes; //composição

    //métodos, funcionalidades, ações
    public function __construct($Nome, $Local, $Data, $Inicio, $Fim){
        $this->Nome = $Nome;
        $this->Local = $Local;
        $this->Data = $Data;
        $this->Inicio = $Inicio;
        $this->Fim = $Fim;
        $this->Palestras = [];
        $this->Participantes = [];
    }

    public function getNome(){ return $this->Nome; }
    
    public function getLocal() { return $this->Local; }

    public function getData() {return $this->Data; }

    public function addPalestra(Palestra $Palestra){
        $this->Palestras[] = $Palestra;
    }

    public function getPalestras() {return $this->Palestras; }

    //baixo acoplamento
    public function addParticipantes(Pessoa $Participantes){
        $this->Participantes[] = $Participantes;
    }

    public function getParticipantes() {return $this->Participantes; }
}