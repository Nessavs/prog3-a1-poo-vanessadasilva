<?php
require_once 'classes/sessao.php';
session::startSession();

$userName = session::getData('userName');

if (!$userName) {
  header("Location: login.php");
  exit;
}

$emailSaved = $_COOKIE['savedEmail'] ?? 'Not remembered';
?>

<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
</head>

<body>
  <h2>Bem vindo <?php echo $userName; ?>!</h2>
  <p>Seu email: <?php echo $emailSaved; ?></p>
  <p><a href="logout.php">Logout</a></p>
</body>

</html>