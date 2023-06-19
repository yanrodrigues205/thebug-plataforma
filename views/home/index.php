<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4">Deu Bug</h5>
            <a class="text-white">TAD - Tipo Abstrato de Dados</a><br>
            <a class="text-white">Listas Simplismente Encadeadas</a><br>
            <a class="text-white">Listas Duplamente Encadeadas</a>
        </div>
    </div>

    <nav class=" navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="" style="height:65px;">
                <img src="assets/img/deubug.png" style="height:100%;">
            </a>

            <div>
                <?php if ($view_usuario_logado) { ?>
                    <a href="perfil"><img src=" https://picsum.photos/50" style="border-radius:50%;"></a>&nbsp;
                    <a style="color:#fff" href="deslogar">Sair</a>
                <?php } else { ?>
                    <a style="color:#fff" href="login">Entrar</a>&nbsp;
                    <a style="color:#fff" href="cadastro">Cadastrar</a>
                <?php } ?>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="div-titulo">

            <h1>"Se deu bug, venha conosco e estude!"</h1>
        </div>

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/banner1.png" class="d-block w-100" alt="..." />
            </div>

            <div class="carousel-item">
                <img src="assets/img/banner2.png" class="d-block w-100" alt="" />
            </div>

            <div class="carousel-item">
                <img src="assets/img/banner3.png" class="d-block w-100" alt="..." />
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <iframe src="assets/games/quiz/index.html" frameborder="0" scrolling="no" onload="resizeIframe(this)"></iframe>

    <div class="container text-white px-4">
        <h4>O Que É Tipo Abstrato De Dados?</h4>
        <br />
        <p>Um Tipo Abstrato de Dados (TAD) é um conceito na programação que descreve uma estrutura de dados em termos de seus comportamentos e operações, independentemente de sua implementação específica. Ele define um conjunto de operações que podem ser realizadas em um dado tipo de dados, mas não especifica como essas operações são implementadas internamente.</p>
        <p>Em outras palavras, um TAD encapsula os dados e as operações relacionadas a esses dados em uma única entidade, fornecendo uma interface clara e definida para interagir com esses dados. Ele permite que você trabalhe com os dados sem se preocupar com os detalhes de implementação subjacentes.</p>
        <p>Um exemplo comum de TAD é uma pilha. Uma pilha é uma estrutura de dados que segue o princípio LIFO (Last In, First Out), o que significa que o último elemento inserido é o primeiro a ser removido. Um TAD de pilha pode fornecer operações como "push" (inserir um elemento), "pop" (remover o último elemento) e "top" (obter o último elemento sem removê-lo).</p>
        <p>Ao usar um TAD, você pode se concentrar na utilização das operações disponíveis para manipular os dados sem se preocupar com a implementação interna. Isso promove a modularidade, a reutilização de código e a abstração, tornando o programa mais legível, manutenível e flexível.</p>
    </div>

    <div class="container text-white px-4">
        <h4>O Que É Tipo Abstrato De Dados?</h4>
    </div>

    <script>
        function resizeIframe(obj) {
            // ...
        }

        const titulo = document.querySelector('h1');

        function writer(element) {
            const texto = element.innerHTML.split('');
            element.innerHTML = '';
            texto.forEach((letra, i) => {
                setTimeout(function() {
                    element.innerHTML += letra;
                }, 95 * i);
            });
        }

        writer(titulo);
    </script>
</body>

</html>
