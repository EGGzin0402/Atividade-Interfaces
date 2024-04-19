<?php

namespace Mensageiro;

use Mensageiro\Mensageiro;

class Email implements Mensageiro{

    public function enviar(string $mensagem){
        echo "Mensagem pelo Email: $mensagem";
    }

}