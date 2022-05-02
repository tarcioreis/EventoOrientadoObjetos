<?php

class Ministrante extends Pessoa{

    public function __construct($Nome, $Telefone, $Endereco, $Email){

        //chama o construtor da superclasse
        parent::__construct($Nome, $Telefone, $Endereco, $Email);
    }

    public function getId() { return get_class($this); }
}