<?php

abstract class Notificacao {
    abstract public function enviar($mensagem);
}

class NotificacaoEmail extends Notificacao {
    public function enviar($mensagem) {
        return "E-mail enviado: " . $mensagem;
    }
}

class NotificacaoSMS extends Notificacao {
    public function enviar($mensagem) {
        return "SMS enviado: " . $mensagem;
    }
}

class NotificacaoPush extends Notificacao {
    public function enviar($mensagem) {
        return "Notificação Push enviada: " . $mensagem;
    }
}

$mensagem = "Sua inscrição foi realizada com sucesso!";

$email = new NotificacaoEmail();
$sms = new NotificacaoSMS();
$push = new NotificacaoPush();

echo $email->enviar($mensagem) . "<br>";
echo $sms->enviar($mensagem) . "<br>";
echo $push->enviar($mensagem);



?>