<?php
$nombre = filter_input(INPUT_POST, "nombre");
$email = filter_input(INPUT_POST, "email");
$fono = filter_input(INPUT_POST, "fono");
$comentarios = filter_input(INPUT_POST, "comentarios");

$from = 'contacto@gomezyriesco.cl'; 
#$to = 'secretaria@gomezyriesco.cl'; 
$to = 'hernanthiers@gmail.com'; 
$subject = 'Contacto desde sitio web gomezyriesco.cl';
 
$body = "From: $nombre\n E-Mail: $email\n Telefono: $fono\n Mensaje:\n $comentarios";