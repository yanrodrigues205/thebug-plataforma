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
        <br />
        <p>Um Tipo Abstrato de Dados (TAD) é um conceito na ciência da computação que descreve uma abstração de dados. Ele define um conjunto de operações que podem ser realizadas em um tipo de dado, sem especificar como essas operações são implementadas internamente. Em outras palavras, um TAD define a interface para acessar e manipular os dados, mas esconde os detalhes de implementação.</p>
<p>Um TAD consiste em dois componentes principais:</p>
<p>1. Definição de dados: descreve o que é armazenado nos objetos de dados e como eles estão organizados. Isso inclui a definição de estruturas de dados e seus atributos.</p>
<p>2. Operações: especifica as ações que podem ser executadas nos objetos de dados. Essas operações definem as maneiras pelas quais os dados podem ser criados, modificados, acessados e excluídos.</p>
<p>O objetivo de um TAD é encapsular os dados e as operações relacionadas em uma única unidade, proporcionando uma interface consistente e ocultando a complexidade interna. Isso promove o princípio de abstração, permitindo que os programadores usem os tipos de dados fornecidos sem precisar se preocupar com os detalhes de implementação. Essa separação entre a interface e a implementação facilita a modificação e a manutenção do código, além de melhorar a legibilidade e a reutilização.</p>
<p>Um exemplo comum de TAD é a lista, que define operações como adicionar um elemento, remover um elemento, verificar se a lista está vazia, entre outras. Os detalhes de como essas operações são realizadas podem variar dependendo da implementação específica da lista (por exemplo, lista encadeada, lista estática), mas a interface permanece a mesma.</p>
    </div>

    <div class="container text-white px-4">
        <h4>O Que É uma lista ordenada?</h4>
        <br />
        <p>Uma lista ordenada é um tipo de estrutura de dados que organiza seus elementos em uma sequência específica com base em uma relação de ordem. Cada elemento da lista tem uma posição definida em relação aos outros elementos, o que permite uma classificação e acesso eficiente aos dados.</p>
<p>Uma lista ordenada possui algumas características distintas. Primeiro, os elementos são dispostos em uma ordem pré-determinada, que pode ser ascendente ou descendente, dependendo do critério de ordenação utilizado. Segundo, a lista pode conter elementos repetidos, mas a ordem relativa entre elementos iguais é preservada.</p>
<p>As listas ordenadas oferecem várias operações para manipulação dos dados. Algumas das operações comuns incluem a inserção de um novo elemento na posição correta, a remoção de um elemento específico, a busca por um elemento com base em seu valor ou posição, a verificação se a lista está vazia e a obtenção do tamanho da lista.</p>
<p>Uma das vantagens de usar listas ordenadas é a capacidade de realizar pesquisas eficientes. Como os elementos estão organizados em uma ordem específica, é possível utilizar algoritmos de busca binária ou técnicas semelhantes para encontrar rapidamente um elemento desejado. Isso é especialmente útil quando se trabalha com um grande volume de dados.</p>
<p>Existem diferentes implementações de listas ordenadas, como a lista encadeada ordenada, em que cada elemento contém um ponteiro para o próximo elemento na sequência ordenada, e a lista estática ordenada, em que os elementos são armazenados em um array e mantidos ordenados à medida que são inseridos ou removidos.</p>
<p>As listas ordenadas têm aplicações em uma variedade de domínios, desde sistemas de gerenciamento de bancos de dados até algoritmos de classificação. Elas fornecem uma estrutura de dados eficiente e flexível para armazenar e manipular elementos em uma ordem específica, permitindo a organização e acesso rápido aos dados conforme necessário.</p>
    </div>

    <div class="container text-white px-4">
        <h4>O Que É uma lista encadeada?</h4>
        <br />
        <p>Uma lista encadeada é uma estrutura de dados na qual os elementos são armazenados de forma não contígua na memória. Cada elemento, também conhecido como nó, contém o dado e um ponteiro que aponta para o próximo elemento da lista.</p>
<p>Ao contrário de um array, onde os elementos são armazenados em posições adjacentes de memória, em uma lista encadeada cada nó mantém uma referência ao próximo nó, formando uma sequência encadeada. Essa flexibilidade permite inserções e remoções eficientes de elementos em qualquer posição da lista, pois não é necessário realocar ou mover os demais elementos.</p>
<p>Uma lista encadeada consiste em três elementos principais: o nó inicial, também chamado de cabeça, que marca o início da lista; o nó final, conhecido como cauda, que indica o fim da lista e tem um ponteiro nulo para indicar o término; e os nós intermediários que contêm os dados e os ponteiros para os próximos nós.</p>
<p>Ao percorrer uma lista encadeada, é necessário seguir os ponteiros de um nó para o próximo até chegar à cauda, indicando o fim da lista. Essa característica permite uma inserção rápida de elementos no início ou no final da lista, mas o acesso a um elemento em uma posição específica pode exigir a iteração desde o início.</p>
<p>As listas encadeadas podem ser implementadas de diferentes maneiras, como a lista encadeada simples, na qual cada nó possui apenas um ponteiro para o próximo nó, e a lista encadeada duplamente, em que cada nó contém um ponteiro para o próximo nó e outro para o nó anterior. A lista encadeada circular é uma variação em que o ponteiro do último nó aponta para o primeiro, formando um ciclo contínuo.</p>
<p>As listas encadeadas são amplamente utilizadas em várias aplicações, como implementações de pilhas, filas, árvores e grafos. Elas oferecem vantagens como a flexibilidade na inserção e remoção de elementos, uso eficiente de memória e suporte a estruturas de dados mais complexas. No entanto, o acesso aleatório aos elementos pode ser menos eficiente em comparação com estruturas de dados contíguas, como arrays.</p>
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
