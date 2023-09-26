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
    <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/highlight.min.js"></script>
</head>

<body>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4">Deu Bug</h5>
            <a class="text-white" href="#abstrato">TAD - Tipo Abstrato de Dados</a><br>
            <a class="text-white" href="#simples">Listas Simplismente Encadeadas</a><br>
            <a class="text-white" href="#dupla">Listas Duplamente Encadeadas</a>
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
                    <a href="perfil"><img src="/avatar" style="border-radius:50%;"></a>&nbsp;
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

    <div class="container text-white px-4" id="abstrato">
        <h4>O Que É Tipo Abstrato De Dados?</h4>
        <br />
        <p>Um Tipo Abstrato de Dados (TAD) é um conceito na programação que descreve uma estrutura de dados em termos de seus comportamentos e operações, independentemente de sua implementação específica. Ele define um conjunto de operações que podem ser realizadas em um dado tipo de dados, mas não especifica como essas operações são implementadas internamente.</p>
        <p>Em outras palavras, um TAD encapsula os dados e as operações relacionadas a esses dados em uma única entidade, fornecendo uma interface clara e definida para interagir com esses dados. Ele permite que você trabalhe com os dados sem se preocupar com os detalhes de implementação subjacentes.</p>
        <p>Um exemplo comum de TAD é uma pilha. Uma pilha é uma estrutura de dados que segue o princípio LIFO (Last In, First Out), o que significa que o último elemento inserido é o primeiro a ser removido. Um TAD de pilha pode fornecer operações como "push" (inserir um elemento), "pop" (remover o último elemento) e "top" (obter o último elemento sem removê-lo).</p>
        <p>Ao usar um TAD, você pode se concentrar na utilização das operações disponíveis para manipular os dados sem se preocupar com a implementação interna. Isso promove a modularidade, a reutilização de código e a abstração, tornando o programa mais legível, manutenível e flexível.</p>
    </div>
    <div style="padding: 10px"><pre><code>
    using System;

    public abstract class AbstractDataStructure
    {
        public abstract void Add(int value);
        public abstract bool Contains(int value);
        public abstract void Remove(int value);
        public abstract void Print();
    }

    public class ArrayDataStructure : AbstractDataStructure
    {
        private int[] array;
        private int size;
        private int capacity;

        public ArrayDataStructure(int capacity)
        {
            this.capacity = capacity;
            array = new int[capacity];
            size = 0;
        }

        public override void Add(int value)
        {
            if (size < capacity)
            {
                array[size] = value;
                size++;
            }
            else
            {
                Console.WriteLine("The array is full. Cannot add element.");
            }
        }

        public override bool Contains(int value)
        {
            for (int i = 0; i < size; i++)
            {
                if (array[i] == value)
                {
                    return true;
                }
            }

            return false;
        }

        public override void Remove(int value)
        {
            for (int i = 0; i < size; i++)
            {
                if (array[i] == value)
                {
                    for (int j = i; j < size - 1; j++)
                    {
                        array[j] = array[j + 1];
                    }
                    size--;
                    return;
                }
            }

            Console.WriteLine("Element not found. Cannot remove.");
        }

        public override void Print()
        {
            for (int i = 0; i < size; i++)
            {
                Console.Write(array[i] + " ");
            }

            Console.WriteLine();
        }
    }

    public class LinkedListDataStructure : AbstractDataStructure
    {
        private class Node
        {
            public int Value;
            public Node Next;
        }

        private Node head;

        public override void Add(int value)
        {
            Node newNode = new Node { Value = value };

            if (head == null)
            {
                head = newNode;
            }
            else
            {
                Node current = head;

                while (current.Next != null)
                {
                    current = current.Next;
                }

                current.Next = newNode;
            }
        }

        public override bool Contains(int value)
        {
            Node current = head;

            while (current != null)
            {
                if (current.Value == value)
                {
                    return true;
                }

                current = current.Next;
            }

            return false;
        }

        public override void Remove(int value)
        {
            if (head == null)
            {
                Console.WriteLine("The list is empty. Cannot remove element.");
                return;
            }

            if (head.Value == value)
            {
                head = head.Next;
                return;
            }

            Node current = head;

            while (current.Next != null)
            {
                if (current.Next.Value == value)
                {
                    current.Next = current.Next.Next;
                    return;
                }

                current = current.Next;
            }

            Console.WriteLine("Element not found. Cannot remove.");
        }

        public override void Print()
        {
            Node current = head;

            while (current != null)
            {
                Console.Write(current.Value + " ");
                current = current.Next;
            }

            Console.WriteLine();
        }
    }

    public class Program
    {
        public static void Main(string[] args)
        {
            AbstractDataStructure dataStructure;

            // Using ArrayDataStructure
            dataStructure = new ArrayDataStructure(5);
            dataStructure.Add(10);
            dataStructure.Add(20);
            dataStructure.Add(30);
            dataStructure.Print(); // Output: 10 20 30

            // Using LinkedListDataStructure
            dataStructure = new LinkedListDataStructure();
            dataStructure.Add(5);
            dataStructure.Add(15);
            dataStructure.Add(25);
            dataStructure.Print(); // Output: 5 15 25
        }
    }

    </pre></code></div>
    <div class="container text-white px-4">
        <p>Neste exemplo, a classe AbstractDataStructure é uma classe abstrata que define as operações básicas de uma estrutura de dados genérica, como adicionar (Add), verificar se contém um elemento (Contains), remover um elemento (Remove) e imprimir a estrutura (Print). Essas operações são declaradas como métodos abstratos, o que significa que a implementação deve ser fornecida pelas classes derivadas.</p>
        <p>A classe ArrayDataStructure e LinkedListDataStructure são subclasses que estendem AbstractDataStructure e fornecem implementações específicas para as operações da estrutura de dados usando um array e uma lista encadeada simples, respectivamente.</p>
        <p>No método Main, demonstramos como criar instâncias de ambas as subclasses e usar as operações definidas pela classe abstrata AbstractDataStructure para adicionar elementos, verificar se contém um valor, remover um valor e imprimir a estrutura resultante.</p>
        <hr>
    </div>

    <div class="container text-white px-4" id="simples">
        <h4>O Que É uma Lista Simplismente Encadeadas?</h4>
        <br />
        <p>Uma lista simplesmente encadeada é uma estrutura de dados flexível e versátil amplamente utilizada na programação. Ela consiste em uma coleção de nós, onde cada nó armazena um valor e possui um ponteiro que aponta para o próximo nó na sequência. Através desses ponteiros, os elementos da lista são conectados, formando uma cadeia unidirecional.</p>
        <p>Uma das principais características da lista simplesmente encadeada é a capacidade de inserção e remoção eficiente de elementos no início ou no final da lista. Diferentemente de outras estruturas, como arrays, não é necessário realocar ou mover elementos adjacentes. Basta ajustar os ponteiros apropriados para incluir ou excluir um elemento, resultando em operações rápidas e econômicas.</p>
        <p>Outra vantagem da lista simplesmente encadeada é sua capacidade de lidar com tamanhos variáveis e dinâmicos. Ela pode acomodar facilmente um número arbitrário de elementos sem a necessidade de pré-alocação de memória. Isso é particularmente útil quando não se conhece a quantidade exata de elementos com antecedência ou quando se deseja economizar memória.</p>
        <p>No entanto, uma limitação da lista simplesmente encadeada é que a busca por um elemento específico pode ser menos eficiente. Para encontrar um valor desejado, é necessário percorrer a lista sequencialmente, começando pelo nó inicial e seguindo os ponteiros até encontrar o elemento desejado. Esse processo pode ser demorado em listas grandes ou quando a posição do elemento é desconhecida.</p>
        <p>Apesar dessa desvantagem, a lista simplesmente encadeada continua sendo uma estrutura de dados poderosa e amplamente utilizada. Sua flexibilidade, eficiência na inserção e remoção, e a capacidade de acomodar tamanhos variáveis de dados a tornam uma escolha popular em muitas aplicações. Compreender os conceitos e operações envolvidos nas listas simplesmente encadeadas é fundamental para um desenvolvedor eficiente e eficaz.</p>
    </div>

    <div style="padding: 10px"><pre><code>
    using System;

    public class Node
    {
        public int Value;
        public Node Next;
    }

    public class SinglyLinkedList
    {
        private Node head;

        public void AddFirst(int value)
        {
            Node newNode = new Node { Value = value };

            if (head == null)
            {
                head = newNode;
            }
            else
            {
                newNode.Next = head;
                head = newNode;
            }
        }

        public void AddLast(int value)
        {
            Node newNode = new Node { Value = value };

            if (head == null)
            {
                head = newNode;
            }
            else
            {
                Node current = head;

                while (current.Next != null)
                {
                    current = current.Next;
                }

                current.Next = newNode;
            }
        }

        public void RemoveFirst()
        {
            if (head == null)
            {
                Console.WriteLine("The list is empty.");
                return;
            }

            head = head.Next;
        }

        public void RemoveLast()
        {
            if (head == null)
            {
                Console.WriteLine("The list is empty.");
                return;
            }

            if (head.Next == null)
            {
                head = null;
                return;
            }

            Node current = head;

            while (current.Next.Next != null)
            {
                current = current.Next;
            }

            current.Next = null;
        }

        public void PrintList()
        {
            Node current = head;

            while (current != null)
            {
                Console.Write(current.Value + " ");
                current = current.Next;
            }

            Console.WriteLine();
        }
    }

    public class Program
    {
        public static void Main(string[] args)
        {
            SinglyLinkedList list = new SinglyLinkedList();

            list.AddLast(10);
            list.AddLast(20);
            list.AddFirst(5);
            list.AddLast(30);

            list.PrintList(); // Output: 5 10 20 30

            list.RemoveFirst();
            list.RemoveLast();

            list.PrintList(); // Output: 10 20
        }
    }
        </code></pre></div>

        <div class="container text-white px-4">
            <p>Neste exemplo, a classe Node representa um nó da lista simplesmente encadeada, contendo um valor e um ponteiro Next que aponta para o próximo nó da lista. A classe SinglyLinkedList implementa as operações básicas, como adicionar no início (AddFirst), adicionar no final (AddLast), remover do início (RemoveFirst), remover do final (RemoveLast) e imprimir a lista (PrintList).</p>
            <p>No método Main, são realizadas algumas operações de exemplo, como adicionar elementos, remover elementos e imprimir a lista resultante.</p>
            <hr>
        </div>

    <div class="container text-white px-4" id="dupla">
        <h4>O Que É uma Lista Duplamente Encadeadas?</h4>
        <br />
        <p>Uma lista duplamente encadeada é uma estrutura de dados em que cada nó contém não apenas um valor, mas também dois ponteiros. Esses ponteiros apontam para o nó anterior e para o próximo nó na sequência, permitindo uma navegação bidirecional na lista. Diferente da lista simplesmente encadeada, onde a navegação é apenas em uma direção.</p>
        <p>Essa capacidade de acesso bidirecional torna a lista duplamente encadeada muito flexível e eficiente para várias operações. Por exemplo, a inserção e a remoção de elementos em qualquer posição da lista podem ser feitas de forma eficiente, pois basta ajustar os ponteiros apropriados em ambos os nós vizinhos.</p>
        <p>A lista duplamente encadeada também permite uma busca mais rápida e eficiente em comparação com a lista simplesmente encadeada. Com a capacidade de percorrer a lista em ambas as direções, é possível começar a busca a partir do início ou do final da lista, dependendo da posição estimada do elemento desejado. Isso pode ser particularmente útil em casos em que a busca é frequentemente realizada em ambas as direções.</p>
        <p>No entanto, a lista duplamente encadeada tem um consumo de memória maior em comparação com a lista simplesmente encadeada, pois cada nó precisa armazenar dois ponteiros em vez de apenas um. Além disso, a manipulação dos ponteiros pode ser mais complexa, exigindo cuidado adicional para garantir a consistência da lista.</p>
        <p>Apesar dessas considerações, a lista duplamente encadeada é uma estrutura de dados poderosa e eficiente em muitos cenários. Ela é amplamente utilizada em implementações de listas de reprodução, editores de texto, históricos de navegação e muitas outras aplicações em que a capacidade de navegar em ambas as direções é valiosa.</p>
        <p>Compreender os conceitos e operações da lista duplamente encadeada é essencial para os desenvolvedores que desejam aproveitar ao máximo essa estrutura de dados versátil e poderosa.</p>
   </div>

    <div style="padding: 10px"><pre><code>
    using System;

    public class Node
    {
        public int Value;
        public Node Next;
        public Node Previous;
    }

    public class DoublyLinkedList
    {
        private Node head;
        private Node tail;

        public void AddFirst(int value)
        {
            Node newNode = new Node { Value = value };

            if (head == null)
            {
                head = newNode;
                tail = newNode;
            }
            else
            {
                newNode.Next = head;
                head.Previous = newNode;
                head = newNode;
            }
        }

        public void AddLast(int value)
        {
            Node newNode = new Node { Value = value };

            if (head == null)
            {
                head = newNode;
                tail = newNode;
            }
            else
            {
                newNode.Previous = tail;
                tail.Next = newNode;
                tail = newNode;
            }
        }

        public void RemoveFirst()
        {
            if (head == null)
            {
                Console.WriteLine("The list is empty.");
                return;
            }

            head = head.Next;

            if (head == null)
                tail = null;
            else
                head.Previous = null;
        }

        public void RemoveLast()
        {
            if (tail == null)
            {
                Console.WriteLine("The list is empty.");
                return;
            }

            tail = tail.Previous;

            if (tail == null)
                head = null;
            else
                tail.Next = null;
        }

        public void PrintList()
        {
            Node current = head;

            while (current != null)
            {
                Console.Write(current.Value + " ");
                current = current.Next;
            }

            Console.WriteLine();
        }
    }

    public class Program
    {
        public static void Main(string[] args)
        {
            DoublyLinkedList list = new DoublyLinkedList();

            list.AddLast(10);
            list.AddLast(20);
            list.AddFirst(5);
            list.AddLast(30);

            list.PrintList(); // Output: 5 10 20 30

            list.RemoveFirst();
            list.RemoveLast();

            list.PrintList(); // Output: 10 20
        }
    }

        </code></pre></div>

        <div class="container text-white px-4">
            <p>Neste exemplo, a classe Node representa um nó da lista duplamente encadeada, contendo um valor e dois ponteiros: Next (aponta para o próximo nó) e Previous (aponta para o nó anterior). A classe DoublyLinkedList implementa as operações básicas, como adicionar no início (AddFirst), adicionar no final (AddLast), remover do início (RemoveFirst), remover do final (RemoveLast) e imprimir a lista (PrintList).</p>
            <p>No método Main, são realizadas algumas operações de exemplo, como adicionar elementos, remover elementos e imprimir a lista resultante.</p>
        <hr>
        </div>
    <script>
        hljs.initHighlightingOnLoad();
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
