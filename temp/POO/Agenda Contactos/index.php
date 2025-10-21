<?php

session_start();

require_once "Contact.php";

include 'head.php';
include 'body.php';
include 'foot.php';

if (!isset($_SESSION['contacts']) || !is_array($_SESSION['contacts'])) {
    $_SESSION['contacts'] = [];
}


$success = null;
$error = null;
$errores = [];

$filteredContacts = $_SESSION['contacts'];

$nombre_usuario = '';
$email_usuario = '';
$telefono_usuario = '';
$avatarPath = '';
$favorite = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Recoger y Sanitizar
    $nombre_usuario = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email_usuario = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefono_usuario = filter_input(INPUT_POST, 'phone');
    $avatarPath = filter_input(INPUT_POST,'avatar');
   
    
 
    if (empty($nombre_usuario)) {
        $errores[] = "El nombre de usuario es obligatorio.";
    }

    if (!filter_var($email_usuario, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del email no es válido.";
    }

  
    if (empty($errores)) {
        $success = "Contacto añadido con éxito";
        $nuevoContacto = new Contact($nombre_usuario,$email_usuario,$telefono_usuario,$avatarPath,$favorite);
   
    } else {
        $error = implode(", ", $errores);
    }
}



?>