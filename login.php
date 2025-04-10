<?php

$userEmailSaved = $_COOKIE['savedEmail'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login do usuário</title>
</head>
<body>
    <h2>Página de login</h2>
    <form action="processa_login.php" method="POST">
        <label>Email:</label><br>
        <input type="email" name="userEmail" value="<?php echo $userEmailSaved; ?>" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="passWrite" required><br><br>

        <label>
            <input type="checkbox" name="rememberEmail" <?php echo $userEmailSaved ? 'checked' : ''; ?>>
            Lembrar meu email
        </label><br><br>

        <button type="submit">Login</button>
    </form>

    <p><a href="cadastro.php">Não tem conta? Registre-se agora</a></p>
</body>
</html>
