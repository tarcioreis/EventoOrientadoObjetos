<?php

class Pessoa{

    //atributos, propriedades
    private $Nome;
    private $Telefone;
    private $Endereco;
    private $Email;

    public function __construct($Nome, $Telefone, $Endereco, $Email){
        $this->Nome = $Nome;
        $this->Telefone = $Telefone;
        $this->Endereco = $Endereco;
        $this->Email = $Email;
    }

    public function setNome($Nome){
        $this->Nome = $Nome;
    }

    public function getNome() { return $this->Nome; }

    public function setTelefone($Telefone){
        $this->Telefone = $Telefone;
    }

    public function getTelefone() { return $this->Telefone; }

    public function setEndereco($Endereco){
        $this->Endereco = $Endereco;
    }

    public function getEndereco() { return $this->Endereco; }

    public function setEmail($Email){
        $this->Email = $Email;
    }

    public function getEmail() { return $this->Email; }
}