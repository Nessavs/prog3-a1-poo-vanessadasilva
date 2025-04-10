<?php

require_once 'classes/autenticador.php';
require_once 'classes/sessao.php';

session::startSession();

$userEmail = $_POST['userEmail'] ?? '';
$passWrite = $_POST['passWrite'] ?? '';

$userLogged = authLogin::tryLogin($userEmail, $passWrite);

if ($userLogged) {
    session::setData('userName', $userLogged->getUserName());

    if (isset($_POST['rememberEmail'])) {
        setcookie('savedEmail', $userEmail, time() + 3600);
    } else {
        setcookie('savedEmail', '', time() - 3600);
    }

    header("Location: dashboard.php");
    exit;
} else {
    echo "Login inválido! <a href='login.php'>Tente novamente</a>";
}
