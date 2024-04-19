<?php

namespace Personagem;

use Personagem\Personagem;

class Guerreiro implements Personagem{

    public function atacar(){
        echo "O guerreiro ataca com uma espada. 1d20+Força \n";
    }

}