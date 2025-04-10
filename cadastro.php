<?php
// cadastro.php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastrar usuário</h2>
    <form action="processa_cadastro.php" method="POST">
        <label>Nome:</label><br>
        <input type="text" name="userName" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="userEmail" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="passWrite" required><br><br>

        <button type="submit">Registrar</button>
    </form>
    <p><a href="login.php">Se não, faça login</a></p>
</body>
</html>
