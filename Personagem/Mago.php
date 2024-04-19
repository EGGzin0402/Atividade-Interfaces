<?php

namespace Personagem;

use Personagem\Personagem;

class Mago implements Personagem{

    public function atacar(){
        echo "O mago ataca com uma magia. 1d20+Inteligência";
    }

}
