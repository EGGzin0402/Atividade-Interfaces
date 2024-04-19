<?php

namespace Mensageiro;

use Mensageiro\Mensageiro;

class Whatsapp implements Mensageiro{

    public function enviar(string $mensagem){
        echo "Mensagem pelo Whatsapp: $mensagem \n";
    }

}