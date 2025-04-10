<?php

require_once './classes/usuario.php';
require_once './classes/autenticador.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userName = htmlspecialchars($_POST['userName']);
    $userEmail = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL);
    $passWrite = $_POST['passWrite'];

    $newUser = new usuario($userName, $userEmail, $passWrite);
    authLogin::registerUser($newUser);

    header("Location: login.php");
    exit;
}
