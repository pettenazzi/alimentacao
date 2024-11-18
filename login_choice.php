<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha de Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Faça seu login como usuário!</h1>
    </header>

    <section class="login-area">
        <div class="user-login">
            <h2>Login Usuário</h2>
            <form method="post" action="user_login.php">
                <label for="user_email">Email:</label>
                <input type="email" id="user_email" name="user_email" required><br>

                <label for="user_password">Senha:</label>
                <input type="password" id="user_password" name="user_password" required><br>

                <input type="submit" value="Login Usuário">
            </form>
        </div>
    </section>

    <footer>
        <p>Obrigado por visitar o nosso site!</p>
    </footer>
</body>
</html>
