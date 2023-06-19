<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
    <title>Perfil</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
    <center>
        <a href="./">
            <img src="assets/img/deubug.png" style="width:100px;" />
        </a>

        <h1>Suas informações</h1>

        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php
                    echo "
                        <td>" . $view_usuario_logado->getId() . "</td>
                        <td>" . $view_usuario_logado->getLogin() . "</td>
                        <td>" . $view_usuario_logado->getSenha() . "</td>
                        <td>" . $view_usuario_logado->getEmail() . "</td>
                        <td><a href='deslogar'>Deslogar</a></td>
                        <td><a href='javascript:excluirConta()'>Excluir</a></td>
                    ";
                    ?>
                </tr>
            </tbody>
        </table>

        <br />

        <form action="avatar" method="post" enctype="multipart/form-data">
            <h3>Mudar avatar:</h3>
            <input type="file" name="avatar" accept="image/*" />
            <input type="submit" value="Salvar" />
        </form>
    </center>

    <script>
        let requesting = false;

        async function excluirConta() {
            if (requesting) return;
            else requesting = true;

            if (confirm("Deseja realmente excluir sua conta?")) {
                try {
                    const response = await fetch("excluir", {
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        },
                        method: "DELETE"
                    });

                    try {
                        const {
                            resultado,
                            erro,
                            erro_debug
                        } = await response.json();

                        if (resultado) {
                            window.location.href = "login";
                        }

                        alert(erro);
                        console.error(erro_debug);

                    } catch (err) {
                        window.location.href = "excluir";
                    }

                } catch (err) {
                    alert("Ocorreu um erro ao fazer a requisição");
                    console.error(err);
                } finally {
                    requesting = false;
                }
            }
        }
    </script>
</body>

</html>
