<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="assets/index.css">
    <title>Quiz</title>
    
    <style>
        .correta {
            background: green;
            color: #fff;
        }

        .errada {
            background: red;
            color: #fff;
        }

        .correta,
        .errada {
            border: none;
        }

        .error {
            color: red;
        }

        form {
            display: grid;
            place-items: center;
        }

        .options-section {
            display: grid;
            gap: 10px;
            max-width: 400px;
        }

        .option {
            padding: 10px 4px;
        }

        .next-button {
            margin-top: 24px;
            padding: 10px 20px;
        }

        .option:not(.disabled),
        .next-button:not(.disabled) {
            cursor: pointer;
        }

        .disabled {
            opacity: .8;
        }
    </style>
</head>

<body>
    <center>
        <a href="./"><img src="assets/img/deubug.png" style="width: 100px"></a>
        
        <h1>Quiz</h1>

        <?php if (!isset($view_error) && isset($view_quiz)) { ?>
            <h3>
                <em>
                    <?php echo $view_quiz->getPergunta(); ?>
                </em>
            </h3>

            <form action="-/quiz" method="POST">
                <input id="opcao_escolhida" name="opcao_escolhida" type="hidden" value="" />

                <div class="options-section">
                    <?php 
                        foreach ($view_quiz->getOpcoes() as $opcao) {
                            $descricao = $opcao->getDescricao(); 
                            $codigo = $opcao->getId();
                            $disabled = $view_proximo == true ? "disabled" : "";
                            $aditional_classes = "$disabled";

                            if ($view_proximo == true && $codigo == $view_opcao_escolhida) {
                                $aditional_classes .= " " . ($view_acertou_resposta ? "correta" : "errada");
                            }

                            $opcao_html = "<button type='button' data-value='$codigo' class='option $aditional_classes'>$descricao</button>";
                            echo $opcao_html;
                        }
                    ?>
                </div>
            </form>
        
            <?php if ($view_proximo == true) { ?>
                <button class="next-button" onclick="window.location.href='quiz'">Próximo</button>
            <?php } ?>
        <?php } else { ?>
            <h1 class="error"><?php echo $view_error ?? "Ocorreu um erro não identificado."; ?></h1>
        <?php } ?>
        </center>

    <?php if ($view_proximo == false) { ?>
    <script>
        const form = document.querySelector("form");
        const opcaoEscolhida = document.getElementById("opcao_escolhida");

        document.querySelectorAll(".option").forEach(optionBtn => {
            optionBtn.addEventListener("click", e => {
                opcaoEscolhida.value = e.target.dataset.value;
                form.submit();
            });
        });
    </script>
    <?php } ?>
</body>

</html>
