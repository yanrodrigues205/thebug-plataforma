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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/highlight.min.js"></script>
</head>

<body>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4">Deu Bug</h5>
            <a class="text-white" href="#abstrato">TAD - Tipo Abstrato de Dados</a><br>
            <a class="text-white" href="#simples">Listas Simplismente Encadeadas</a><br>
            <a class="text-white" href="#dupla">Listas Duplamente Encadeadas</a><br>
            <a class="text-white" href="#binaria">Árvores Binária de Busca</a><br>
            <a class="text-white" href="#b">Árvores B</a><br>
            <a class="text-white" href="#trie">Árvores Trie</a><br>
            <a class="text-white" href="#avl">Árvores AVL</a><br>
            <a class="text-white" href="#negra">Árvores Rubro-Negra</a><br>
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
                    <a href="perfil"><img src="https://picsum.photos/60" style="border-radius:50%;"></a>&nbsp;
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


        <div class="container text-white px-4" id="binaria">
            <h4>Oque são árvores binarias de busca?</h4></br>
            <p>As árvores binárias de busca são estruturas de dados fundamentais na ciência da computação, compostas por nós interligados de forma hierárquica. Cada nó possui, no máximo, dois filhos: um à esquerda e outro à direita. A estrutura segue uma lógica de organização onde os nós à esquerda são menores (ou iguais) que o nó pai, e os nós à direita são maiores. Isso oferece uma propriedade fundamental: permite uma busca rápida, com complexidade de tempo médio O(log n), onde n é o número de nós, devido à estrutura balanceada gerada pela inserção e remoção de elementos.</p>

            <p>O processo de busca em uma árvore binária de busca inicia-se no nó raiz, comparando o valor buscado com o valor do nó atual. Dependendo da comparação, a busca continua no filho esquerdo ou direito, até encontrar o nó desejado ou percorrer toda a árvore. Essa estrutura facilita operações como inserção, remoção e busca, pois a ordenação dos elementos ao longo da árvore mantém um padrão que otimiza essas operações.</p>

            <p>A inserção em uma árvore binária de busca segue a lógica de encontrar o local correto para o novo nó de acordo com as comparações com os nós existentes. Se o valor é menor que o nó atual, vai para a esquerda; se é maior, vai para a direita. Esse processo continua recursivamente até encontrar um ponto vazio onde o novo nó será inserido, mantendo a propriedade de ordenação da árvore.</p>

            <p>Entretanto, é importante mencionar que a eficiência das árvores binárias de busca depende da sua estrutura balanceada. Árvores desbalanceadas podem levar a casos extremos onde a busca, inserção e remoção têm complexidade O(n), tornando-as similares a uma lista encadeada. Por isso, estratégias de balanceamento, como árvores AVL ou árvores rubro-negras, são empregadas para garantir uma distribuição equilibrada dos elementos e manter a eficiência das operações. </p>
        </div>

        <div style="padding: 10px"><pre><code>
        using System;

        class Node {
            public int key;
            public Node left, right;

            public Node(int item) {
                key = item;
                left = right = null;
            }
        }

        class BinaryTree {
            Node root;

            BinaryTree() {
                root = null;
            }

            void Insert(int key) {
                root = InsertRecursive(root, key);
            }

            Node InsertRecursive(Node root, int key) {
                if (root == null) {
                    root = new Node(key);
                    return root;
                }

                if (key < root.key)
                    root.left = InsertRecursive(root.left, key);
                else if (key > root.key)
                    root.right = InsertRecursive(root.right, key);

                return root;
            }

            Node Search(Node root, int key) {
                if (root == null || root.key == key)
                    return root;

                if (key < root.key)
                    return Search(root.left, key);

                return Search(root.right, key);
            }

            void Delete(int key) {
                root = DeleteRecursive(root, key);
            }

            Node DeleteRecursive(Node root, int key) {
                if (root == null)
                    return root;

                if (key < root.key)
                    root.left = DeleteRecursive(root.left, key);
                else if (key > root.key)
                    root.right = DeleteRecursive(root.right, key);
                else {
                    if (root.left == null)
                        return root.right;
                    else if (root.right == null)
                        return root.left;

                    root.key = MinValue(root.right);

                    root.right = DeleteRecursive(root.right, root.key);
                }
                return root;
            }

            int MinValue(Node root) {
                int minValue = root.key;
                while (root.left != null) {
                    minValue = root.left.key;
                    root = root.left;
                }
                return minValue;
            }

            void InOrderTraversal(Node root) {
                if (root != null) {
                    InOrderTraversal(root.left);
                    Console.Write(root.key + " ");
                    InOrderTraversal(root.right);
                }
            }

            public static void Main() {
                BinaryTree tree = new BinaryTree();

                tree.Insert(50);
                tree.Insert(30);
                tree.Insert(20);
                tree.Insert(40);
                tree.Insert(70);
                tree.Insert(60);
                tree.Insert(80);

                Console.WriteLine("Elementos em ordem crescente (in-order traversal):");
                tree.InOrderTraversal(tree.root);

                Console.WriteLine("\n\nBusca de elemento 40:");
                Node foundNode = tree.Search(tree.root, 40);
                Console.WriteLine(foundNode != null ? "Elemento encontrado: " + foundNode.key : "Elemento não encontrado");

                Console.WriteLine("\nDeletando o elemento 30:");
                tree.Delete(30);
                Console.WriteLine("Elementos em ordem após a remoção:");
                tree.InOrderTraversal(tree.root);
            }
        }

        </code></pre></div>

        

        <div class="container text-white px-4" id="b">
            <h4>Oque são árvores B?</h4></br>
            <p>As árvores B são estruturas de dados hierárquicas e balanceadas usadas para armazenar e organizar dados em sistemas de armazenamento, como bancos de dados e sistemas de arquivos. Elas são compostas por um nó raiz que se ramifica em outros nós, seguindo um conjunto de regras específicas. Essas árvores diferem das árvores binárias, pois permitem múltiplos filhos por nó e são projetadas para otimizar operações de busca, inserção e exclusão em grandes conjuntos de dados.</p>

            <p>Cada nó em uma árvore B contém uma série de chaves ordenadas e, se não for uma folha, também contém referências para seus filhos. Essas árvores têm um fator de ramificação que determina o número máximo de filhos que um nó pode ter. Quando a árvore é construída, ela mantém um equilíbrio entre a altura da árvore e a quantidade de dados, garantindo operações eficientes. Isso é alcançado através da redistribuição de chaves e filhos entre nós quando necessário.</p>

            <p>A busca em uma árvore B segue um processo similar à busca binária, mas considera múltiplos caminhos para encontrar a chave desejada. A estrutura balanceada e a capacidade de armazenar mais chaves em cada nó reduzem o número de acessos ao disco, tornando as operações mais rápidas em comparação com estruturas de árvores não balanceadas. As inserções e exclusões também são otimizadas, mantendo o equilíbrio da árvore e realizando poucas modificações nos nós.</p>

            <p>Uma das aplicações principais das árvores B está nos sistemas de armazenamento de dados, onde são usadas para indexar informações em discos. Elas ajudam a minimizar a quantidade de movimentação de disco necessária para encontrar e manipular dados, o que é crucial para a eficiência em sistemas de bancos de dados e sistemas de arquivos, especialmente em operações de leitura e escrita de grandes volumes de dados.</p>
        </div>

        <div style="padding: 10px"><pre><code>
        using System;
        using System.Collections.Generic;

        public class TreeNode
        {
            public List<int> Keys { get; set; }
            public List<TreeNode> Children { get; set; }
            public bool IsLeaf { get { return Children.Count == 0; } }

            public TreeNode()
            {
                Keys = new List<int>();
                Children = new List<TreeNode>();
            }
        }

        public class BTree
        {
            private TreeNode root;
            private int degree;

            public BTree(int degree)
            {
                this.degree = degree;
                root = new TreeNode();
            }

            // Método para buscar uma chave na árvore
            public TreeNode Search(int key)
            {
                return Search(root, key);
            }

            private TreeNode Search(TreeNode node, int key)
            {
                int i = 0;
                while (i < node.Keys.Count && key > node.Keys[i])
                {
                    i++;
                }

                if (i < node.Keys.Count && key == node.Keys[i])
                {
                    return node;
                }
                else if (node.IsLeaf)
                {
                    return null;
                }
                else
                {
                    return Search(node.Children[i], key);
                }
            }

            // Método para inserir uma chave na árvore
            public void Insert(int key)
            {
                TreeNode r = root;
                if (r.Keys.Count == (2 * degree) - 1)
                {
                    TreeNode s = new TreeNode();
                    root = s;
                    s.Children.Add(r);
                    SplitChild(s, 0);
                    InsertNonFull(s, key);
                }
                else
                {
                    InsertNonFull(r, key);
                }
            }

            private void InsertNonFull(TreeNode node, int key)
            {
                int i = node.Keys.Count - 1;
                if (node.IsLeaf)
                {
                    node.Keys.Add(0);
                    while (i >= 0 && key < node.Keys[i])
                    {
                        node.Keys[i + 1] = node.Keys[i];
                        i--;
                    }
                    node.Keys[i + 1] = key;
                }
                else
                {
                    while (i >= 0 && key < node.Keys[i])
                    {
                        i--;
                    }
                    i++;
                    if (node.Children[i].Keys.Count == (2 * degree) - 1)
                    {
                        SplitChild(node, i);
                        if (key > node.Keys[i])
                        {
                            i++;
                        }
                    }
                    InsertNonFull(node.Children[i], key);
                }
            }

            private void SplitChild(TreeNode parentNode, int index)
            {
                TreeNode childNode = parentNode.Children[index];
                TreeNode newNode = new TreeNode();
                newNode.Keys.AddRange(childNode.Keys.GetRange(degree, degree - 1));

                if (!childNode.IsLeaf)
                {
                    newNode.Children.AddRange(childNode.Children.GetRange(degree, degree));
                }

                childNode.Keys.RemoveRange(degree - 1, degree);
                if (!childNode.IsLeaf)
                {
                    childNode.Children.RemoveRange(degree, degree);
                }

                parentNode.Keys.Insert(index, childNode.Keys[degree - 1]);
                parentNode.Children.Insert(index + 1, newNode);
            }

        }

        </code></pre></div>

        <div class="container text-white px-4" id="trie">
            <h4>Oque são árvores trie?</h4></br>
            <p>As árvores Trie são estruturas de dados usadas para armazenar e pesquisar um grande conjunto de strings de maneira eficiente. Essa estrutura é composta por nós conectados, onde cada nó representa um caractere. Ao contrário das estruturas de dados como árvores binárias, onde cada nó possui no máximo dois filhos, os nós em árvores Trie podem ter um número variável de filhos, correspondendo aos diferentes caracteres do alfabeto ou conjunto de símbolos.</p>

            <p>Cada caminho da raiz a um nó folha em uma árvore Trie representa uma palavra ou prefixo. Isso significa que os prefixos compartilham caminhos comuns até divergirem para formar palavras diferentes. Essa característica torna as árvores Trie particularmente eficientes para operações de busca e inserção, pois permite encontrar rapidamente palavras completas ou listar todas as palavras que compartilham um determinado prefixo.</p>

            <p>A principal vantagem das árvores Trie é a eficiência na busca e na inserção de strings. A busca em uma árvore Trie tem complexidade O(m), onde m é o comprimento da string sendo buscada, tornando-se extremamente rápida e independente do tamanho do conjunto de dados. Isso ocorre porque cada passo na árvore consome um único caractere da string a ser pesquisada, levando diretamente ao próximo nó correspondente.</p>

            <p>No entanto, árvores Trie podem consumir mais espaço em memória em comparação com outras estruturas de dados, especialmente se o conjunto de dados contiver muitas strings semelhantes. O número de nós na árvore depende da quantidade de palavras e de quanto elas compartilham em comum. Essa desvantagem pode ser amenizada usando técnicas como compressão de Trie, onde nós com um único filho são fundidos, reduzindo o espaço ocupado.</p>
        </div>

        <div style="padding: 10px"><pre><code>
        using System;
        using System.Collections.Generic;

        public class TrieNode
        {
            public Dictionary<char, TrieNode> Children { get; private set; }
            public bool IsEndOfWord { get; set; }

            public TrieNode()
            {
                Children = new Dictionary<char, TrieNode>();
                IsEndOfWord = false;
            }
        }

        public class Trie
        {
            private TrieNode root;

            public Trie()
            {
                root = new TrieNode();
            }

            public void Insert(string word)
            {
                TrieNode current = root;

                foreach (char c in word)
                {
                    if (!current.Children.ContainsKey(c))
                    {
                        current.Children[c] = new TrieNode();
                    }

                    current = current.Children[c];
                }

                current.IsEndOfWord = true;
            }

            public bool Search(string word)
            {
                TrieNode current = root;

                foreach (char c in word)
                {
                    if (!current.Children.ContainsKey(c))
                    {
                        return false;
                    }

                    current = current.Children[c];
                }

                return current != null && current.IsEndOfWord;
            }

            public void Delete(string word)
            {
                Delete(root, word, 0);
            }

            private bool Delete(TrieNode current, string word, int index)
            {
                if (index == word.Length)
                {
                    if (!current.IsEndOfWord)
                    {
                        return false;
                    }

                    current.IsEndOfWord = false;

                    return current.Children.Count == 0;
                }

                char c = word[index];
                if (!current.Children.ContainsKey(c))
                {
                    return false;
                }

                bool shouldDeleteCurrentNode = Delete(current.Children[c], word, index + 1);

                if (shouldDeleteCurrentNode)
                {
                    current.Children.Remove(c);
                    return current.Children.Count == 0;
                }

                return false;
            }

            public void Update(string oldWord, string newWord)
            {
                if (Delete(oldWord))
                {
                    Insert(newWord);
                }
            }
        }
        </code></pre></div>

        <div class="container text-white px-4" id="avl">
            <h4>Oque são árvores AVL?</h4></br>
            <p>As árvores AVL são uma forma especializada de árvores binárias de busca que mantêm um balanceamento automático. Esse balanceamento é crucial para garantir a eficiência das operações de busca, inserção e remoção, mantendo a altura da árvore o mais equilibrada possível. Cada nó em uma árvore AVL possui um fator de balanceamento, que é a diferença entre as alturas das subárvores esquerda e direita. Essa diferença deve ser mantida dentro do intervalo {-1, 0, 1} para que a árvore seja considerada balanceada.</p>

            <p>O balanceamento em uma árvore AVL é alcançado por meio de rotações simples e duplas aplicadas nos nós onde ocorre um desequilíbrio. Quando uma inserção ou remoção desequilibra a árvore, verifica-se o fator de balanceamento dos nós afetados. Dependendo da situação, são aplicadas rotações para restaurar o balanceamento. As rotações podem ser de dois tipos: rotações simples, que envolvem um nó e seus dois filhos, e rotações duplas, que combinam duas rotações simples.</p>

            <p>A manutenção do balanceamento em uma árvore AVL garante um desempenho de tempo de execução mais previsível para operações de busca, inserção e remoção, mantendo a altura da árvore em um nível logarítmico. Isso é essencial para aplicações que exigem tempos de resposta consistentes, já que assegura que nenhum caminho na árvore se torne significativamente mais longo do que outros. No entanto, a complexidade adicional para manter o balanceamento pode impactar o desempenho em comparação com estruturas de árvore mais simples em certos contextos.</p>

            <p>Em resumo, as árvores AVL são estruturas de dados eficientes para operações de busca, inserção e remoção, garantindo um balanceamento automático que limita a altura da árvore. Essa manutenção equilibrada permite um desempenho mais consistente em comparação com árvores binárias de busca não balanceadas, embora a necessidade de balanceamento possa adicionar alguma sobrecarga computacional durante as operações de modificação na estrutura.</p>
        </div>

        <div style="padding: 10px"><pre><code>
        using System;

        public class Node
        {
            public int key, height;
            public Node left, right;

            public Node(int item)
            {
                key = item;
                height = 1;
            }
        }

        public class AVLTree
        {
            public Node root;

            // Função para obter a altura de um nó
            int Height(Node N)
            {
                if (N == null)
                    return 0;
                return N.height;
            }

            // Função para obter o máximo de dois inteiros
            int Max(int a, int b)
            {
                return (a > b) ? a : b;
            }

            // Função para realizar a rotação à direita
            Node RightRotate(Node y)
            {
                Node x = y.left;
                Node T2 = x.right;

                x.right = y;
                y.left = T2;

                y.height = Max(Height(y.left), Height(y.right)) + 1;
                x.height = Max(Height(x.left), Height(x.right)) + 1;

                return x;
            }

            // Função para realizar a rotação à esquerda
            Node LeftRotate(Node x)
            {
                Node y = x.right;
                Node T2 = y.left;

                y.left = x;
                x.right = T2;

                x.height = Max(Height(x.left), Height(x.right)) + 1;
                y.height = Max(Height(y.left), Height(y.right)) + 1;

                return y;
            }

            // Obter o fator de balanceamento do nó
            int GetBalance(Node N)
            {
                if (N == null)
                    return 0;
                return Height(N.left) - Height(N.right);
            }

            // Inserção recursiva na árvore AVL
            public Node Insert(Node node, int key)
            {
                /* 1. Realize a inserção normal de uma árvore binária de pesquisa */
                if (node == null)
                    return (new Node(key));

                if (key < node.key)
                    node.left = Insert(node.left, key);
                else if (key > node.key)
                    node.right = Insert(node.right, key);
                else // Chaves iguais não são permitidas na AVL
                    return node;

                /* 2. Atualize a altura do nó ancestral */
                node.height = 1 + Max(Height(node.left),
                                    Height(node.right));

                /* 3. Obtenha o fator de balanceamento deste nó para verificar se ele se tornou desbalanceado */
                int balance = GetBalance(node);

                // Se o nó se tornar desbalanceado, há quatro casos a serem considerados

                // Caso Esquerda-Esquerda
                if (balance > 1 && key < node.left.key)
                    return RightRotate(node);

                // Caso Direita-Direita
                if (balance < -1 && key > node.right.key)
                    return LeftRotate(node);

                // Caso Esquerda-Direita
                if (balance > 1 && key > node.left.key)
                {
                    node.left = LeftRotate(node.left);
                    return RightRotate(node);
                }

                // Caso Direita-Esquerda
                if (balance < -1 && key < node.right.key)
                {
                    node.right = RightRotate(node.right);
                    return LeftRotate(node);
                }

                /* Retorna o nó (inalterado) */
                return node;
            }

            // Função para buscar um nó na árvore AVL
            public Node Search(Node root, int key)
            {
                if (root == null || root.key == key)
                    return root;

                if (root.key > key)
                    return Search(root.left, key);

                return Search(root.right, key);
            }

            // Função para encontrar o nó com o valor mínimo na árvore
            public Node MinValueNode(Node node)
            {
                Node current = node;

                while (current.left != null)
                    current = current.left;

                return current;
            }

            // Função para deletar um nó na árvore AVL
            public Node Delete(Node root, int key)
            {
                if (root == null)
                    return root;

                if (key < root.key)
                    root.left = Delete(root.left, key);
                else if (key > root.key)
                    root.right = Delete(root.right, key);
                else
                {
                    if ((root.left == null) || (root.right == null))
                    {
                        Node temp = null;
                        if (temp == root.left)
                            temp = root.right;
                        else
                            temp = root.left;

                        if (temp == null)
                        {
                            temp = root;
                            root = null;
                        }
                        else
                            root = temp;
                    }
                    else
                    {
                        Node temp = MinValueNode(root.right);
                        root.key = temp.key;
                        root.right = Delete(root.right, temp.key);
                    }
                }

                if (root == null)
                    return root;

                root.height = Max(Height(root.left), Height(root.right)) + 1;

                int balance = GetBalance(root);

                // Caso Esquerda-Esquerda
                if (balance > 1 && GetBalance(root.left) >= 0)
                    return RightRotate(root);

                // Caso Esquerda-Direita
                if (balance > 1 && GetBalance(root.left) < 0)
                {
                    root.left = LeftRotate(root.left);
                    return RightRotate(root);
                }

                // Caso Direita-Direita
                if (balance < -1 && GetBalance(root.right) <= 0)
                    return LeftRotate(root);

                // Caso Direita-Esquerda
                if (balance < -1 && GetBalance(root.right) > 0)
                {
                    root.right = RightRotate(root.right);
                    return LeftRotate(root);
                }

                return root;
            }

            // Função para realizar a alteração de um nó
            public void Change(Node root, int oldVal, int newVal)
            {
                Delete(root, oldVal);
                root = Insert(root, newVal);
            }

            // Função para imprimir a árvore em ordem
            public void InOrder(Node root)
            {
                if (root != null)
                {
                    InOrder(root.left);
                    Console.Write(root.key + " ");
                    InOrder(root.right);
                }
            }

            // Teste da árvore AVL
            public static void Main(string[] args)
            {
                AVLTree tree = new AVLTree();

                /* Exemplo de inserções */
                tree.root = tree.Insert(tree.root, 10);
                tree.root = tree.Insert(tree.root, 20);
                tree.root = tree.Insert(tree.root, 30);
                tree.root = tree.Insert(tree.root, 40);
                tree.root = tree.Insert(tree.root, 50);
                tree.root = tree.Insert(tree.root, 25);

                Console.WriteLine("Árvore AVL construída:");
                tree.InOrder(tree.root);

                // Testando a função de busca
                Node foundNode = tree.Search(tree.root, 40);
                if (foundNode != null)
                    Console.WriteLine("\nEncontrado: " + foundNode.key);
                else
                    Console.WriteLine("\nChave não encontrada.");

                // Testando a função de remoção
                tree.root = tree.Delete(tree.root, 30);
                Console.WriteLine("\nÁrvore AVL após a remoção do valor 30:");
                tree.InOrder(tree.root);

                // Testando a função de alteração
                tree.Change(tree.root, 25, 35);
                Console.WriteLine("\nÁrvore AVL após a alteração do valor 25 para 35:");
                tree.InOrder(tree.root);
            }
        }
        </code></pre></div>

        <div class="container text-white px-4" id="negra">
            <h4>Oque são árvores rubro-negra?</h4></br>
            <p>As árvores rubro-negras são estruturas de dados utilizadas em ciência da computação para organizar e armazenar informações de forma eficiente, principalmente em operações de inserção, remoção e busca. Elas são uma variação das árvores binárias de busca, onde cada nó possui um valor e no máximo dois filhos. O que as torna distintas é sua estrutura auto balanceável, garantindo que a árvore permaneça relativamente equilibrada, mantendo o tempo de operações essenciais, como busca e inserção, em O(log n), onde n é o número de elementos na árvore.</p>

            <p>A característica fundamental das árvores rubro-negras é o seu processo de balanceamento automático durante a inserção e remoção de nós. Cada nó é atribuído a uma cor, vermelho ou preto, e a árvore segue algumas regras específicas para manter seu balanceamento, como a regra de que nenhum caminho da raiz até uma folha pode ter mais que o dobro de nós pretos em relação a qualquer outro caminho. Isso garante que a árvore permaneça aproximadamente balanceada, evitando casos extremos de desbalanceamento e preservando a eficiência das operações.</p>

            <p>Durante a inserção e remoção de nós, a árvore rubro-negra passa por reequilíbrios e rotações para manter suas propriedades. Essas operações são realizadas de maneira a preservar as regras da estrutura, garantindo que as propriedades da árvore não sejam violadas. As rotações e reequilíbrios podem envolver mudanças nas cores dos nós e rearranjos na estrutura da árvore, mas sempre respeitando as condições para manter sua natureza balanceada.</p>

            <p>O uso das árvores rubro-negras é comum em implementações de estruturas de dados que requerem operações rápidas de inserção, remoção e busca, como em bancos de dados, compiladores e sistemas de arquivos. Sua capacidade de manter um balanceamento relativamente uniforme, mesmo após várias operações de inserção e remoção, torna-as uma escolha valiosa em diversas aplicações, proporcionando um desempenho eficiente e previsível em operações essenciais.</p>
        </div>

        <div style="padding: 10px"><pre><code>
        using System;

        public enum Cor
        {
            Vermelho,
            Preto
        }

        public class No
        {
            public int Valor;
            public No Esquerda, Direita, Pai;
            public Cor Cor;

            public No(int valor)
            {
                Valor = valor;
                Cor = Cor.Vermelho;
            }
        }

        public class ArvoreRubroNegra
        {
            private No Raiz;

            private void RotacionarEsquerda(No x)
            {
                No y = x.Direita;
                x.Direita = y.Esquerda;
                if (y.Esquerda != null)
                    y.Esquerda.Pai = x;
                if (y != null)
                    y.Pai = x.Pai;
                if (x.Pai == null)
                    Raiz = y;
                else if (x == x.Pai.Esquerda)
                    x.Pai.Esquerda = y;
                else
                    x.Pai.Direita = y;
                y.Esquerda = x;
                if (x != null)
                    x.Pai = y;
            }

            private void RotacionarDireita(No x)
            {
                No y = x.Esquerda;
                x.Esquerda = y.Direita;
                if (y.Direita != null)
                    y.Direita.Pai = x;
                if (y != null)
                    y.Pai = x.Pai;
                if (x.Pai == null)
                    Raiz = y;
                else if (x == x.Pai.Esquerda)
                    x.Pai.Esquerda = y;
                else
                    x.Pai.Direita = y;
                y.Direita = x;
                if (x != null)
                    x.Pai = y;
            }

            private void BalancearInsercao(No z)
            {
                No y;
                while (z != Raiz && z.Pai.Cor == Cor.Vermelho)
                {
                    if (z.Pai == z.Pai.Pai.Esquerda)
                    {
                        y = z.Pai.Pai.Direita;
                        if (y != null && y.Cor == Cor.Vermelho)
                        {
                            z.Pai.Cor = Cor.Preto;
                            y.Cor = Cor.Preto;
                            z.Pai.Pai.Cor = Cor.Vermelho;
                            z = z.Pai.Pai;
                        }
                        else
                        {
                            if (z == z.Pai.Direita)
                            {
                                z = z.Pai;
                                RotacionarEsquerda(z);
                            }
                            z.Pai.Cor = Cor.Preto;
                            z.Pai.Pai.Cor = Cor.Vermelho;
                            RotacionarDireita(z.Pai.Pai);
                        }
                    }
                    else
                    {
                        y = z.Pai.Pai.Esquerda;
                        if (y != null && y.Cor == Cor.Vermelho)
                        {
                            z.Pai.Cor = Cor.Preto;
                            y.Cor = Cor.Preto;
                            z.Pai.Pai.Cor = Cor.Vermelho;
                            z = z.Pai.Pai;
                        }
                        else
                        {
                            if (z == z.Pai.Esquerda)
                            {
                                z = z.Pai;
                                RotacionarDireita(z);
                            }
                            z.Pai.Cor = Cor.Preto;
                            z.Pai.Pai.Cor = Cor.Vermelho;
                            RotacionarEsquerda(z.Pai.Pai);
                        }
                    }
                }
                Raiz.Cor = Cor.Preto;
            }

            public void Inserir(int valor)
            {
                No novoNo = new No(valor);
                No y = null;
                No x = Raiz;

                while (x != null)
                {
                    y = x;
                    if (novoNo.Valor < x.Valor)
                        x = x.Esquerda;
                    else
                        x = x.Direita;
                }
                novoNo.Pai = y;
                if (y == null)
                    Raiz = novoNo;
                else if (novoNo.Valor < y.Valor)
                    y.Esquerda = novoNo;
                else
                    y.Direita = novoNo;
                novoNo.Esquerda = null;
                novoNo.Direita = null;
                novoNo.Cor = Cor.Vermelho;

                BalancearInsercao(novoNo);
            }

            public No Buscar(int valor)
            {
                return BuscarRecursivo(Raiz, valor);
            }

            private No BuscarRecursivo(No no, int valor)
            {
                if (no == null || valor == no.Valor)
                    return no;

                if (valor < no.Valor)
                    return BuscarRecursivo(no.Esquerda, valor);
                else
                    return BuscarRecursivo(no.Direita, valor);
            }

            public void Deletar(int valor)
            {
                No z = Buscar(valor);
                if (z == null)
                    return;

                No x, y;
                if (z.Esquerda == null || z.Direita == null)
                    y = z;
                else
                    y = Sucessor(z);

                if (y.Esquerda != null)
                    x = y.Esquerda;
                else
                    x = y.Direita;

                if (x != null)
                    x.Pai = y.Pai;

                if (y.Pai == null)
                    Raiz = x;
                else if (y == y.Pai.Esquerda)
                    y.Pai.Esquerda = x;
                else
                    y.Pai.Direita = x;

                if (y != z)
                    z.Valor = y.Valor;

                if (y.Cor == Cor.Preto)
                    BalancearRemocao(x);
            }

            private void BalancearRemocao(No x)
            {
                while (x != Raiz && x.Cor == Cor.Preto)
                {
                    if (x == x.Pai.Esquerda)
                    {
                        No w = x.Pai.Direita;
                        if (w.Cor == Cor.Vermelho)
                        {
                            w.Cor = Cor.Preto;
                            x.Pai.Cor = Cor.Vermelho;
                            RotacionarEsquerda(x.Pai);
                            w = x.Pai.Direita;
                        }

                        if (w.Esquerda.Cor == Cor.Preto && w.Direita.Cor == Cor.Preto)
                        {
                            w.Cor = Cor.Vermelho;
                            x = x.Pai;
                        }
                        else
                        {
                            if (w.Direita.Cor == Cor.Preto)
                            {
                                w.Esquerda.Cor = Cor.Preto;
                                w.Cor = Cor.Vermelho;
                                RotacionarDireita(w);
                                w = x.Pai.Direita;
                            }

                            w.Cor = x.Pai.Cor;
                            x.Pai.Cor = Cor.Preto;
                            w.Direita.Cor = Cor.Preto;
                            RotacionarEsquerda(x.Pai);
                            x = Raiz;
                        }
                    }
                    else
                    {
                        No w = x.Pai.Esquerda;
                        if (w.Cor == Cor.Vermelho)
                        {
                            w.Cor = Cor.Preto;
                            x.Pai.Cor = Cor.Vermelho;
                            RotacionarDireita(x.Pai);
                            w = x.Pai.Esquerda;
                        }

                        if (w.Direita.Cor == Cor.Preto && w.Esquerda.Cor == Cor.Preto)
                        {
                            w.Cor = Cor.Vermelho;
                            x = x.Pai;
                        }
                        else
                        {
                            if (w.Esquerda.Cor == Cor.Preto)
                            {
                                w.Direita.Cor = Cor.Preto;
                                w.Cor = Cor.Vermelho;
                                RotacionarEsquerda(w);
                                w = x.Pai.Esquerda;
                            }

                            w.Cor = x.Pai.Cor;
                            x.Pai.Cor = Cor.Preto;
                            w.Esquerda.Cor = Cor.Preto;
                            RotacionarDireita(x.Pai);
                            x = Raiz;
                        }
                    }
                }
                x.Cor = Cor.Preto;
            }

            private No Sucessor(No x)
            {
                if (x.Direita != null)
                {
                    x = x.Direita;
                    while (x.Esquerda != null)
                        x = x.Esquerda;
                    return x;
                }

                No y = x.Pai;
                while (y != null && x == y.Direita)
                {
                    x = y;
                    y = y.Pai;
                }
                return y;
            }

        }
        </code></pre></div>
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
