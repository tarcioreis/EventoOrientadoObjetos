<?php

require_once 'classes/Evento.php';
require_once 'classes/Pessoa.php';
require_once 'classes/Participante.php';
require_once 'classes/Ministrante.php';
require_once 'classes/Palestra.php';

echo "<h3>Evento</h3>";

//cria objeto evento
$evento = new Evento('Campus party', 'São Paulo', '10/01/2020', '0', '0');
echo "Nome do evento: {$evento->getNome()}<br>";
echo "Local: {$evento->getLocal()}<br>";
echo "Data: {$evento->getData()}";

//cria objetos Ministrante
$min1 = new Ministrante('Coach', '123-456', 'Rua de São Paulo', 'coach@gmail.com');

$min2 = new Ministrante('Carlos José', '789-034', 'Rua do Rio', 'carlosjose@gmail.com');

//cria objetos Palestra e adiciona objetos mininstrante
$pal1 = new Palestra('Desenvolvimento de jogos', '10/01/2020', 'Tarde');
$pal1->addMinistrante($min1);

$pal2 = new Palestra('Programação em PHP', '11/01/2020', 'Tarde');
$pal2->addMinistrante($min2);

//cria objetos Participante
$par1 = new Participante('João da Silva', '456-787', 'Rua do Brasil', 'joão@gmail.com');
$par2 = new Participante('Maria da Silva', '987-321', 'Rua da Bahia', 'maria@gmail.com');
$par3 = new Participante('Joana da Silva', '321-456', 'Rua da padaria', 'joana@gmail.com');

//adiciona participantes(público) à palestra
$pal1->addParticipantes($par1);
$pal1->addParticipantes($par2);
$pal1->addParticipantes($par3);

$pal2->addParticipantes($par3);

//adiciona palestra ao evento
$evento->addPalestra($pal1);
$evento->addPalestra($pal2);

echo "<h3>Palestras</h3>";

//exibe as palestras do evento
foreach($evento->getPalestras() as $palestra){
    echo "Nome: ".$palestra->getNome().'<br>';
    echo "Data: ".$palestra->getData().'<br>';
    echo "Turno: ".$palestra->getTurno().'<br>';
    echo "Ministrante: ".$palestra->getMinistrante()->getNome().'<br>';
    echo "Público Total: ".$palestra->getPublicoTotal().'<br><br>';
}


//adiciona participantes ao evento
echo "<h3>Participantes</h3>";

$evento->addParticipantes($min1);
$evento->addParticipantes($min2);
$evento->addParticipantes($par1);
$evento->addParticipantes($par2);
$evento->addParticipantes($par3);

//exibe os participantes do evento
foreach($evento->getParticipantes() as $participante){
    echo "Nome: ".$participante->getNome().'<br>';
    echo "Id: ".$participante->getId().'<br><br>';
}


//pessoa pode se inscrever em vários eventos e palestras
//listar os participantes da palestra