<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
    <title>Quiz</title>
    <link rel="stylesheet" href="assets/index.css">
</head>

<body>
    <center>
        <a href="./"><img src="assets/img/deubug.png" style="width: 100px"></a>
        
        <h1>Quiz</h1>

        <form action="quiz/resultado" method="POST">
            <input id="opcao_escolhida" name="opcao_escolhida" type="hidden" value="" />
            <input class="option" type="button" value="Opção 1" data-value="1" />
            <input class="option" type="button" value="Opção 2" data-value="2" />
            <input class="option" type="button" value="Opção 3" data-value="3" />
            <input class="option" type="button" value="Opção 4" data-value="4" />
        </form>
    </center>

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
</body>

</html>
