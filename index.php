<?php

require 'vendor/autoload.php';

use Mensageiro\MensageiroFactory;
use Personagem\PersonagemFactory;

$tipo = "email";
$mensageiro = MensageiroFactory::criar($tipo);

$mensageiro->enviar("Olá!");

$classe = "guerreiro";
$personagem = PersonagemFactory::criar($classe);

$personagem->atacar();
