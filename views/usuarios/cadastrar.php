<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
    <title>Cadastrar</title>
    <link rel="stylesheet" href="assets/index.css">
</head>

<body>
    <center>
        <a href="./"><img src="assets/img/deubug.png" style="width: 100px"></a>
        <h1>Cadastrar Usuário</h1>

        <form action="cadastro" method="POST">
            <?php if (isset($view_msg_erro)) echo "<span style='color:red'>$view_msg_erro</span>"; ?>

            <div>
                <span>Login:</span>
                <input name="login" type="text" value="<?php if (isset($view_previous_login)) echo $view_previous_login ?>" required>
            </div>
            <br />
            <div>
                <span>Email:</span>
                <input name="email" type="email" value="<?php if (isset($view_previous_email)) echo $view_previous_email ?>" required>
            </div>
            <br />
            <div>
                <span>Senha:</span>
                <input name="senha" type="password" required>
            </div>
            <br />
            <input type="submit" value="Cadastrar">
            <a href="login">Ir para Login</a>
        </form>
    </center>
</body>

</html>
