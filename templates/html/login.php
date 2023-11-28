<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <main class="container">
        <h2>Login</h2>
        <form action="../../base/validacao.php" method="get">
            <div class="input-field">
                <input type="text" name="login" id="login" placeholder="Nome de Usuário" required>
                <div class="underline"></div>
            </div>

            <div class="input-field">
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <div class="underline"></div>
            </div>

            <input type="submit" value="Entrar">
            <a class="register" href="cadastro_usu.php">Clique aqui para se cadastrar!</a>
            <br>
            <a class="voltar" href="index.php">Voltar</a>
        </form>
    </main>
</body>

</html>