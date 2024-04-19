<?php

namespace Mensageiro;

use Mensageiro\Mensageiro;

class Sms implements Mensageiro{

    public function enviar(string $mensagem){
        echo "Mensagem por SMS: $mensagem \n";
    }

}