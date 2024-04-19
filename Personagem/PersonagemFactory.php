<?php

namespace Personagem;

use Personagem\Personagem;
use Personagem\Guerreiro;
use Personagem\Arqueiro;
use Personagem\Mago;
use Exception;

class PersonagemFactory{

    public static function criar(string $classe){

        switch ($classe) {
            case 'guerreiro':
                return new Guerreiro();
            case 'arqueiro':
                return new Arqueiro();
            case 'mago':
                return new Mago();
            default:
                throw new Exception("Classe inválida.");
                
        }

    }

}
