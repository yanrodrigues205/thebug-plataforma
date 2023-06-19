<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
    <title>Autenticar</title>
</head>

<body>
    <center>
        <a href="./"><img src="assets/img/deubug.png" style="width: 100px"></a>
        <h1>Autenticar</h1>

        <form action="login" method="POST">
            <?php if (isset($view_msg_erro)) echo "<span style='color:red'>$view_msg_erro</span>"; ?>

            <div>
                <span>Login:</span>
                <input name="login" type="text" value="<?php if (isset($view_previous_login)) echo $view_previous_login ?>" required>
            </div>
            <br />
            <div>
                <span>Senha:</span>
                <input name="senha" type="password" required>
            </div>
            <br />
            <input type="submit" value="Logar">
            <a href="cadastro">Ir para cadastro</a>&nbsp;
        </form>
    </center>
</body>

</html>
