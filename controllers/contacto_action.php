<?php
$nombre = filter_input(INPUT_POST, "nombre");
$email = filter_input(INPUT_POST, "email");
$fono = filter_input(INPUT_POST, "fono");
$comentarios = filter_input(INPUT_POST, "comentarios");

$from = 'contacto@gomezyriesco.cl';
$to = 'secretaria@gomezyriesco.cl';
$subject = 'Contacto desde sitio web gomezyriesco.cl';

$body = "De: $nombre\n E-Mail: $email\n Telefono: $fono\n Mensaje:\n $comentarios";

if (mail ($to, $subject, $body, "From: $from\nReply-To: $from\nX-Mailer: onfocus :: PHP/" . phpversion())) {
    // Set a 200 (okay) response code.
    http_response_code(200);
    echo "ok";

    #$result=true;
} else {
    // Set a 500 (internal server error) response code.
    http_response_code(500);
    echo "error";

    #$result=false;
}

return $result;
