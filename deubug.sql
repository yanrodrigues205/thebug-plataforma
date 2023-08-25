-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Ago-2023 às 21:50
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `deubug`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `id_q` int(11) NOT NULL,
  `pergunta_q` mediumtext NOT NULL,
  `A_q` varchar(300) NOT NULL,
  `B_q` varchar(300) NOT NULL,
  `C_q` varchar(300) NOT NULL,
  `D_q` varchar(300) NOT NULL,
  `resposta_q` varchar(1) NOT NULL,
  `tipo_p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`id_q`, `pergunta_q`, `A_q`, `B_q`, `C_q`, `D_q`, `resposta_q`, `tipo_p`) VALUES
(1, 'O que é uma lista simplesmente encadeada?', 'Uma lista que armazena elementos em uma estrutura bidimensional.', 'Uma lista que armazena elementos em uma sequência linear e cada elemento possui um ponteiro para o próximo elemento.', 'Uma lista que armazena elementos em uma árvore hierárquica.', 'Uma lista que armazena elementos em uma ordem inversa.', 'B', 1),
(2, 'Qual é o elemento inicial de uma lista simplesmente encadeada?', 'O último elemento da lista.', 'O elemento que está no meio da lista.', 'O primeiro elemento da lista.', 'Um elemento aleatório da lista.', 'C', 1),
(3, 'O que é um nó em uma lista encadeada?', 'Um valor numérico armazenado na lista.', 'Um ponteiro para o próximo elemento da lista.', 'Um índice que indica a posição de um elemento na lista.', 'Uma operação de inserção em uma lista.', 'B', 1),
(4, 'Como é possível inserir um novo elemento no início de uma lista encadeada?', 'Criando um novo nó e definindo seu ponteiro para o último elemento da lista.', 'Atualizando o ponteiro do último elemento da lista para apontar para o novo elemento.\r\n', 'Atualizando o ponteiro do novo elemento para apontar para o primeiro elemento da lista.', 'Removendo o último elemento da lista e inserindo o novo elemento em seu lugar.', 'C', 1),
(5, 'Quais são as vantagens de uma lista encadeada em relação a um array (arranjo) tradicional?', 'Facilidade de inserção e exclusão de elementos, mesmo em posições intermediárias.', 'Facilidade de implementação e tamanho fixo.', 'Uso eficiente de memória e acesso aleatório rápido.', 'Armazenamento contíguo em memória e acesso rápido aos elementos intermediários.', 'A', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_pergunta`
--

CREATE TABLE `tipo_pergunta` (
  `id_p` int(11) NOT NULL,
  `titulo_p` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tipo_pergunta`
--

INSERT INTO `tipo_pergunta` (`id_p`, `titulo_p`) VALUES
(1, 'Lista Simplimente Encadeada'),
(2, 'Lista Duplamente Encadeada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` varchar(36) NOT NULL,
  `usu_login` varchar(45) NOT NULL,
  `usu_email` varchar(320) NOT NULL,
  `usu_senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id_q`),
  ADD KEY `tipo_p` (`tipo_p`),
  ADD KEY `tipo_p_2` (`tipo_p`);

--
-- Índices para tabela `tipo_pergunta`
--
ALTER TABLE `tipo_pergunta`
  ADD PRIMARY KEY (`id_p`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD UNIQUE KEY `usu_login_UNIQUE` (`usu_login`),
  ADD UNIQUE KEY `usu_email_UNIQUE` (`usu_email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id_q` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tipo_pergunta`
--
ALTER TABLE `tipo_pergunta`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
