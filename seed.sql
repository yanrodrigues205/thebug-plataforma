START TRANSACTION;

SET SQL_SAFE_UPDATES = 0;
DELETE FROM quiz_resposta;
DELETE FROM usuario;
DELETE FROM quiz_opcao;
DELETE FROM quiz;
DELETE FROM tipo_pergunta;
SET SQL_SAFE_UPDATES = 1;

INSERT INTO usuario (usu_id, usu_login, usu_email, usu_senha) 
VALUES ('0874af4f-363b-447b-860d-b549be286f6a', 'admin', 'admin@admin.com', '1234abcd');

INSERT INTO tipo_pergunta (tp_id, tp_descricao) 
VALUES ('247ff6d7-2a83-48cb-8669-f21997008cb7', 'Lista Simplimente Encadeada'), 
       ('6a982574-9d71-4217-956c-dd7eb8ce519e', 'Lista Duplamente Encadeada'),
       ('732a4443-7d07-4eb1-aef0-435ed372069d', 'Árvore Binária de Busca'),
       ('22283808-a498-4faa-afa1-45068b18ab45', 'Árvore B'),
       ('2a2cb4e3-509e-4d42-b1cc-cc529b111267', 'Árvore Trie'),
       ('7528b862-419e-44b2-9565-3d1a239b9acb', 'Árvore AVL'),
       ('e69393cf-05cd-4721-ac87-29139678213e', 'Árvore Rubro-Negra');

INSERT INTO quiz (q_id, q_pergunta, tp_id) 
VALUES ('72ae3258-d107-47cc-a4f2-6218113ef738', 'O que é uma lista simplesmente encadeada?', '247ff6d7-2a83-48cb-8669-f21997008cb7'),
       ('fa6934b8-be24-4011-a83f-16fdb079200a', 'Qual é o elemento inicial de uma lista simplesmente encadeada?', '247ff6d7-2a83-48cb-8669-f21997008cb7'),
       ('3c2e0e3a-6f82-4a0b-9f7e-584a12c21b5f', 'O que é um nó em uma lista encadeada?', '247ff6d7-2a83-48cb-8669-f21997008cb7'),
       ('4d9eb5a4-37a1-4e2e-b21a-93543dfedcc6', 'Como é possível inserir um novo elemento no início de uma lista encadeada?', '247ff6d7-2a83-48cb-8669-f21997008cb7'),
       ('5b5ac91d-4619-4ab4-a1b8-2c62e00ed07f', 'Quais são as vantagens de uma lista encadeada em relação a um array (arranjo) tradicional?', '247ff6d7-2a83-48cb-8669-f21997008cb7');

INSERT INTO quiz_opcao (qo_id, qo_descricao, qo_correta, q_id) 
VALUES (UUID(), 'Uma lista que armazena elementos em uma estrutura bidimensional.', 0, '72ae3258-d107-47cc-a4f2-6218113ef738'),
       (UUID(), 'Uma lista que armazena elementos em uma sequência linear e cada elemento possui um ponteiro para o próximo elemento.', 1, '72ae3258-d107-47cc-a4f2-6218113ef738'),
       (UUID(), 'Uma lista que armazena elementos em uma árvore hierárquica.', 0, '72ae3258-d107-47cc-a4f2-6218113ef738'),
       (UUID(), 'Uma lista que armazena elementos em uma ordem inversa.', 0, '72ae3258-d107-47cc-a4f2-6218113ef738'),
       (UUID(), 'O último elemento da lista.', 0, 'fa6934b8-be24-4011-a83f-16fdb079200a'),
       (UUID(), 'O elemento que está no meio da lista.', 0, 'fa6934b8-be24-4011-a83f-16fdb079200a'),
       (UUID(), 'O primeiro elemento da lista.', 1, 'fa6934b8-be24-4011-a83f-16fdb079200a'),
       (UUID(), 'Um elemento aleatório da lista.', 0, 'fa6934b8-be24-4011-a83f-16fdb079200a'),
       (UUID(), 'Um valor numérico armazenado na lista.', 0, '3c2e0e3a-6f82-4a0b-9f7e-584a12c21b5f'),
       (UUID(), 'Um ponteiro para o próximo elemento da lista.', 1, '3c2e0e3a-6f82-4a0b-9f7e-584a12c21b5f'),
       (UUID(), 'Um índice que indica a posição de um elemento na lista.', 0, '3c2e0e3a-6f82-4a0b-9f7e-584a12c21b5f'),
       (UUID(), 'Uma operação de inserção em uma lista.', 0, '3c2e0e3a-6f82-4a0b-9f7e-584a12c21b5f'),
       (UUID(), 'Criando um novo nó e definindo seu ponteiro para o último elemento da lista.', 0, '4d9eb5a4-37a1-4e2e-b21a-93543dfedcc6'),
       (UUID(), 'Atualizando o ponteiro do último elemento da lista para apontar para o novo elemento.', 1, '4d9eb5a4-37a1-4e2e-b21a-93543dfedcc6'),
       (UUID(), 'Atualizando o ponteiro do novo elemento para apontar para o primeiro elemento da lista.', 0, '4d9eb5a4-37a1-4e2e-b21a-93543dfedcc6'),
       (UUID(), 'Removendo o último elemento da lista e inserindo o novo elemento em seu lugar.', 0, '4d9eb5a4-37a1-4e2e-b21a-93543dfedcc6'),
       (UUID(), 'Facilidade de inserção e exclusão de elementos, mesmo em posições intermediárias.', 1, '5b5ac91d-4619-4ab4-a1b8-2c62e00ed07f'),
       (UUID(), 'Facilidade de implementação e tamanho fixo.', 0, '5b5ac91d-4619-4ab4-a1b8-2c62e00ed07f'),
       (UUID(), 'Uso eficiente de memória e acesso aleatório rápido.', 0, '5b5ac91d-4619-4ab4-a1b8-2c62e00ed07f'),
       (UUID(), 'Armazenamento contíguo em memória e acesso rápido aos elementos intermediários.', 0, '5b5ac91d-4619-4ab4-a1b8-2c62e00ed07f');

-- Árvore Binária de Busca
INSERT INTO quiz (q_id, q_pergunta, tp_id)
VALUES ('550e8400-e29b-41d4-a716-446655440000', 'Qual é a principal característica de uma Árvore Binária de Busca?', '732a4443-7d07-4eb1-aef0-435ed372069d'),
       ('550e8400-e29b-41d4-a716-446655440005', 'Pergunta: Qual é a ordem de inserção de elementos em uma Árvore Binária de Busca?', '732a4443-7d07-4eb1-aef0-435ed372069d'),
       ('550e8400-e29b-41d4-a716-44665544000e', 'Pergunta: Qual é a altura de uma Árvore Binária de Busca com 10 nós?', '732a4443-7d07-4eb1-aef0-435ed372069d'),
       ('550e8400-e29b-41d4-a716-446655440013', 'Qual é a complexidade de tempo para a busca em uma Árvore Binária de Busca?', '732a4443-7d07-4eb1-aef0-435ed372069d'),
       ('550e8400-e29b-41d4-a716-446655440018', 'Qual é a complexidade de tempo para a inserção em uma Árvore Binária de Busca?', '732a4443-7d07-4eb1-aef0-435ed372069d');

INSERT INTO quiz_opcao (qo_id, qo_descricao, qo_correta, q_id)
VALUES (UUID(), 'Todos os nós têm exatamente dois filhos.', 1, '550e8400-e29b-41d4-a716-446655440000'),
       (UUID(), 'Todos os nós têm exatamente zero filhos.', 0, '550e8400-e29b-41d4-a716-446655440000'),
       (UUID(), 'Todos os nós têm exatamente um filho.', 0, '550e8400-e29b-41d4-a716-446655440000'),
       (UUID(), 'Todos os nós têm exatamente três filhos.', 0, '550e8400-e29b-41d4-a716-446655440000'),
       (UUID(), 'Os elementos são inseridos em ordem crescente.', 0, '550e8400-e29b-41d4-a716-446655440005'),
       (UUID(), 'Os elementos são inseridos em ordem decrescente.', 0, '550e8400-e29b-41d4-a716-446655440005'),
       (UUID(), 'Os elementos são inseridos aleatoriamente.', 0, '550e8400-e29b-41d4-a716-446655440005'),
       (UUID(), 'Os elementos são inseridos em ordem alfabética.', 1, '550e8400-e29b-41d4-a716-446655440005'),
       (UUID(), '10', 0, '550e8400-e29b-41d4-a716-44665544000e'),
       (UUID(), '9', 1, '550e8400-e29b-41d4-a716-44665544000e'),
       (UUID(), '8', 0, '550e8400-e29b-41d4-a716-44665544000e'),
       (UUID(), '7', 0, '550e8400-e29b-41d4-a716-44665544000e'),
       (UUID(), 'O(1)', 0, '550e8400-e29b-41d4-a716-446655440013'),
       (UUID(), 'O(log n)', 1, '550e8400-e29b-41d4-a716-446655440013'),
       (UUID(), 'O(n)', 0, '550e8400-e29b-41d4-a716-446655440013'),
       (UUID(), 'O(n log n)', 0, '550e8400-e29b-41d4-a716-446655440013'),
       (UUID(), 'O(1)', 0, '550e8400-e29b-41d4-a716-446655440018'),
       (UUID(), 'O(log n)', 1, '550e8400-e29b-41d4-a716-446655440018'),
       (UUID(), 'O(n)', 0, '550e8400-e29b-41d4-a716-446655440018'),
       (UUID(), 'O(n log n)', 0, '550e8400-e29b-41d4-a716-446655440018');

-- Árvode B
INSERT INTO quiz (q_id, q_pergunta, tp_id) VALUES
       ('7db52eb3-31db-470f-8d68-e7e66fc8a994', 'Qual é a principal característica de uma Árvore B?', '22283808-a498-4faa-afa1-45068b18ab45'),
       ('0d7c4869-ef4b-4b60-918b-67e5b383f0db', 'Qual é a ordem de inserção de elementos em uma Árvore B?', '22283808-a498-4faa-afa1-45068b18ab45'),
       ('2f3b01c1-eb8b-4ea8-a15b-9b634737a994', 'Qual é a complexidade de tempo para a busca em uma Árvore B?', '22283808-a498-4faa-afa1-45068b18ab45'),
       ('438540e1-5292-4a19-a94f-7c244ec4f94d', 'Qual é a complexidade de tempo para a inserção em uma Árvore B?', '22283808-a498-4faa-afa1-45068b18ab45'),
       ('b2f68e1a-80e2-4827-9a77-209e32f58c57', 'Qual é a altura de uma Árvore B com 10 nós?', '22283808-a498-4faa-afa1-45068b18ab45');

INSERT INTO quiz_opcao (qo_id, qo_descricao, qo_correta, q_id) VALUES
       (UUID(), 'Cada nó pode ter até 2 filhos.', 0, '7db52eb3-31db-470f-8d68-e7e66fc8a994'),
       (UUID(), 'Cada nó pode ter até 3 filhos.', 0, '7db52eb3-31db-470f-8d68-e7e66fc8a994'),
       (UUID(), 'Cada nó pode ter até 4 filhos.', 1, '7db52eb3-31db-470f-8d68-e7e66fc8a994'),
       (UUID(), 'Cada nó pode ter até 5 filhos.', 0, '7db52eb3-31db-470f-8d68-e7e66fc8a994'),
       (UUID(), 'Os elementos são inseridos em ordem crescente.', 0, '0d7c4869-ef4b-4b60-918b-67e5b383f0db'),
       (UUID(), 'Os elementos são inseridos em ordem decrescente.', 0, '0d7c4869-ef4b-4b60-918b-67e5b383f0db'),
       (UUID(), 'Os elementos são inseridos aleatoriamente.', 0, '0d7c4869-ef4b-4b60-918b-67e5b383f0db'),
       (UUID(), 'Os elementos são inseridos em ordem alfabética.', 1, '0d7c4869-ef4b-4b60-918b-67e5b383f0db'),
       (UUID(), 'O(1)', 0, '2f3b01c1-eb8b-4ea8-a15b-9b634737a994'),
       (UUID(), 'O(log n)', 1, '2f3b01c1-eb8b-4ea8-a15b-9b634737a994'),
       (UUID(), 'O(n)', 0, '2f3b01c1-eb8b-4ea8-a15b-9b634737a994'),
       (UUID(), 'O(n log n)', 0, '2f3b01c1-eb8b-4ea8-a15b-9b634737a994'),
       (UUID(), 'O(1)', 0, '438540e1-5292-4a19-a94f-7c244ec4f94d'),
       (UUID(), 'O(log n)', 1, '438540e1-5292-4a19-a94f-7c244ec4f94d'),
       (UUID(), 'O(n)', 0, '438540e1-5292-4a19-a94f-7c244ec4f94d'),
       (UUID(), 'O(n log n)', 0, '438540e1-5292-4a19-a94f-7c244ec4f94d'),
       (UUID(), '10', 0, 'b2f68e1a-80e2-4827-9a77-209e32f58c57'),
       (UUID(), '9', 1, 'b2f68e1a-80e2-4827-9a77-209e32f58c57'),
       (UUID(), '8', 0, 'b2f68e1a-80e2-4827-9a77-209e32f58c57'),
       (UUID(), '7', 0, 'b2f68e1a-80e2-4827-9a77-209e32f58c57');

-- Árvode Trie
INSERT INTO quiz (q_id, q_pergunta, tp_id) VALUES
       ('c8020b0a-2be0-4244-8634-c1d00830a6c0', 'Qual é a principal característica de uma Árvore Trie?', '2a2cb4e3-509e-4d42-b1cc-cc529b111267'),
       ('bba53d3d-f03c-498e-8f40-62fb743e6aa4', 'Qual é a ordem de inserção de elementos em uma Árvore Trie?', '2a2cb4e3-509e-4d42-b1cc-cc529b111267'),
       ('26c25845-73d4-429a-b972-a6c95229f0a5', 'Qual é a complexidade de tempo para a busca em uma Árvore Trie?', '2a2cb4e3-509e-4d42-b1cc-cc529b111267'),
       ('c83cb9b4-5b43-4c3d-93c1-7b724bba9926', 'Qual é a complexidade de tempo para a inserção em uma Árvore Trie?', '2a2cb4e3-509e-4d42-b1cc-cc529b111267'),
       ('6cec8812-eea1-485b-a6b9-653e265e64c2', 'Qual é a altura de uma Árvore Trie com 10 nós?', '2a2cb4e3-509e-4d42-b1cc-cc529b111267');

INSERT INTO quiz_opcao (qo_id, qo_descricao, qo_correta, q_id) VALUES
       (UUID(), 'Cada nó pode ter até 2 filhos.', 0, 'c8020b0a-2be0-4244-8634-c1d00830a6c0'),
       (UUID(), 'Cada nó pode ter até 3 filhos.', 0, 'c8020b0a-2be0-4244-8634-c1d00830a6c0'),
       (UUID(), 'Cada nó pode ter até 4 filhos.', 1, 'c8020b0a-2be0-4244-8634-c1d00830a6c0'),
       (UUID(), 'Cada nó pode ter até 5 filhos.', 0, 'c8020b0a-2be0-4244-8634-c1d00830a6c0'),
       (UUID(), 'Os elementos são inseridos em ordem crescente.', 0, 'bba53d3d-f03c-498e-8f40-62fb743e6aa4'),
       (UUID(), 'Os elementos são inseridos em ordem decrescente.', 0, 'bba53d3d-f03c-498e-8f40-62fb743e6aa4'),
       (UUID(), 'Os elementos são inseridos aleatoriamente.', 0, 'bba53d3d-f03c-498e-8f40-62fb743e6aa4'),
       (UUID(), 'Os elementos são inseridos em ordem alfabética.', 1, 'bba53d3d-f03c-498e-8f40-62fb743e6aa4'),
       (UUID(), 'O(1)', 0, '26c25845-73d4-429a-b972-a6c95229f0a5'),
       (UUID(), 'O(log n)', 1, '26c25845-73d4-429a-b972-a6c95229f0a5'),
       (UUID(), 'O(n)', 0, '26c25845-73d4-429a-b972-a6c95229f0a5'),
       (UUID(), 'O(n log n)', 0, '26c25845-73d4-429a-b972-a6c95229f0a5'),
       (UUID(), 'O(1)', 0, 'c83cb9b4-5b43-4c3d-93c1-7b724bba9926'),
       (UUID(), 'O(log n)', 1, 'c83cb9b4-5b43-4c3d-93c1-7b724bba9926'),
       (UUID(), 'O(n)', 0, 'c83cb9b4-5b43-4c3d-93c1-7b724bba9926'),
       (UUID(), 'O(n log n)', 0, 'c83cb9b4-5b43-4c3d-93c1-7b724bba9926'),
       (UUID(), '10', 0, '6cec8812-eea1-485b-a6b9-653e265e64c2'),
       (UUID(), '9', 1, '6cec8812-eea1-485b-a6b9-653e265e64c2'),
       (UUID(), '8', 0, '6cec8812-eea1-485b-a6b9-653e265e64c2'),
       (UUID(), '7', 0, '6cec8812-eea1-485b-a6b9-653e265e64c2');

-- Árvore AVL
INSERT INTO quiz (q_id, q_pergunta, tp_id) VALUES
       ('acba8e37-61c8-4f43-a063-bf06b269bc0d', 'Qual é a principal característica de uma Árvore AVL?', '7528b862-419e-44b2-9565-3d1a239b9acb'),
       ('27f29b6a-3d82-4a6a-a5db-0b3a6f20ff37', 'Qual é a ordem de inserção de elementos em uma Árvore AVL?', '7528b862-419e-44b2-9565-3d1a239b9acb'),
       ('a6a1a871-d36c-450f-8a13-4f21c68d03b0', 'Qual é a complexidade de tempo para a busca em uma Árvore AVL?', '7528b862-419e-44b2-9565-3d1a239b9acb'),
       ('632ee59b-1df0-4a48-b2a9-37c7eb350b20', 'Qual é a complexidade de tempo para a inserção em uma Árvore AVL?', '7528b862-419e-44b2-9565-3d1a239b9acb'),
       ('1e202f06-3ad9-44c4-91b2-d0c32ef95f68', 'Qual é a altura de uma Árvore AVL com 10 nós?', '7528b862-419e-44b2-9565-3d1a239b9acb');

INSERT INTO quiz_opcao (qo_id, qo_descricao, qo_correta, q_id) VALUES
       (UUID(), 'Cada nó pode ter até 2 filhos.', 1, 'acba8e37-61c8-4f43-a063-bf06b269bc0d'),
       (UUID(), 'Cada nó pode ter até 3 filhos.', 0, 'acba8e37-61c8-4f43-a063-bf06b269bc0d'),
       (UUID(), 'Cada nó pode ter até 4 filhos.', 0, 'acba8e37-61c8-4f43-a063-bf06b269bc0d'),
       (UUID(), 'Cada nó pode ter até 5 filhos.', 0, 'acba8e37-61c8-4f43-a063-bf06b269bc0d'),
       (UUID(), 'Os elementos são inseridos em ordem crescente.', 0, '27f29b6a-3d82-4a6a-a5db-0b3a6f20ff37'),
       (UUID(), 'Os elementos são inseridos em ordem decrescente.', 0, '27f29b6a-3d82-4a6a-a5db-0b3a6f20ff37'),
       (UUID(), 'Os elementos são inseridos aleatoriamente.', 0, '27f29b6a-3d82-4a6a-a5db-0b3a6f20ff37'),
       (UUID(), 'Os elementos são inseridos em ordem alfabética.', 1, '27f29b6a-3d82-4a6a-a5db-0b3a6f20ff37'),
       (UUID(), 'O(1)', 0, 'a6a1a871-d36c-450f-8a13-4f21c68d03b0'),
       (UUID(), 'O(log n)', 1, 'a6a1a871-d36c-450f-8a13-4f21c68d03b0'),
       (UUID(), 'O(n)', 0, 'a6a1a871-d36c-450f-8a13-4f21c68d03b0'),
       (UUID(), 'O(n log n)', 0, 'a6a1a871-d36c-450f-8a13-4f21c68d03b0'),
       (UUID(), 'O(1)', 0, '632ee59b-1df0-4a48-b2a9-37c7eb350b20'),
       (UUID(), 'O(log n)', 1, '632ee59b-1df0-4a48-b2a9-37c7eb350b20'),
       (UUID(), 'O(n)', 0, '632ee59b-1df0-4a48-b2a9-37c7eb350b20'),
       (UUID(), 'O(n log n)', 0, '632ee59b-1df0-4a48-b2a9-37c7eb350b20'),
       (UUID(), '10', 0, '1e202f06-3ad9-44c4-91b2-d0c32ef95f68'),
       (UUID(), '9', 1, '1e202f06-3ad9-44c4-91b2-d0c32ef95f68'),
       (UUID(), '8', 0, '1e202f06-3ad9-44c4-91b2-d0c32ef95f68'),
       (UUID(), '7', 0, '1e202f06-3ad9-44c4-91b2-d0c32ef95f68');

-- Árvore Rubro-Negra
INSERT INTO quiz (q_id, q_pergunta, tp_id) VALUES
       ('b31816b1-129f-4f49-8a5a-6154d67abf36', 'Qual é a principal característica de uma Árvore Rubro-Negra?', 'e69393cf-05cd-4721-ac87-29139678213e'),
       ('82f15719-d5b0-4e3f-9888-3c4ecb496520', 'Qual é a ordem de inserção de elementos em uma Árvore Rubro-Negra?', 'e69393cf-05cd-4721-ac87-29139678213e'),
       ('153a0847-2ac6-4281-b1c5-7d7bc61a68c4', 'Qual é a complexidade de tempo para a busca em uma Árvore Rubro-Negra?', 'e69393cf-05cd-4721-ac87-29139678213e'),
       ('9e6e586f-712c-4ef3-86f0-b14a470b4c06', 'Qual é a complexidade de tempo para a inserção em uma Árvore Rubro-Negra?', 'e69393cf-05cd-4721-ac87-29139678213e'),
       ('d56a3721-0052-464d-aa0b-9d9389564f4f', 'Qual é a altura de uma Árvore Rubro-Negra com 10 nós?', 'e69393cf-05cd-4721-ac87-29139678213e');

INSERT INTO quiz_opcao (qo_id, qo_descricao, qo_correta, q_id) VALUES
       (UUID(), 'Cada nó pode ter até 2 filhos.', 0, 'b31816b1-129f-4f49-8a5a-6154d67abf36'),
       (UUID(), 'Cada nó pode ter até 3 filhos.', 0, 'b31816b1-129f-4f49-8a5a-6154d67abf36'),
       (UUID(), 'Cada nó pode ter até 4 filhos.', 1, 'b31816b1-129f-4f49-8a5a-6154d67abf36'),
       (UUID(), 'Cada nó pode ter até 5 filhos.', 0, 'b31816b1-129f-4f49-8a5a-6154d67abf36'),
       (UUID(), 'Os elementos são inseridos em ordem crescente.', 0, '82f15719-d5b0-4e3f-9888-3c4ecb496520'),
       (UUID(), 'Os elementos são inseridos em ordem decrescente.', 0, '82f15719-d5b0-4e3f-9888-3c4ecb496520'),
       (UUID(), 'Os elementos são inseridos aleatoriamente.', 0, '82f15719-d5b0-4e3f-9888-3c4ecb496520'),
       (UUID(), 'Os elementos são inseridos em ordem alfabética.', 1, '82f15719-d5b0-4e3f-9888-3c4ecb496520'),
       (UUID(), 'O(1)', 0, '153a0847-2ac6-4281-b1c5-7d7bc61a68c4'),
       (UUID(), 'O(log n)', 1, '153a0847-2ac6-4281-b1c5-7d7bc61a68c4'),
       (UUID(), 'O(n)', 0, '153a0847-2ac6-4281-b1c5-7d7bc61a68c4'),
       (UUID(), 'O(n log n)', 0, '153a0847-2ac6-4281-b1c5-7d7bc61a68c4'),
       (UUID(), 'O(1)', 0, '9e6e586f-712c-4ef3-86f0-b14a470b4c06'),
       (UUID(), 'O(log n)', 1, '9e6e586f-712c-4ef3-86f0-b14a470b4c06'),
       (UUID(), 'O(n)', 0, '9e6e586f-712c-4ef3-86f0-b14a470b4c06'),
       (UUID(), 'O(n log n)', 0, '9e6e586f-712c-4ef3-86f0-b14a470b4c06'),
       (UUID(), '10', 0, 'd56a3721-0052-464d-aa0b-9d9389564f4f'),
       (UUID(), '9', 1, 'd56a3721-0052-464d-aa0b-9d9389564f4f'),
       (UUID(), '8', 0, 'd56a3721-0052-464d-aa0b-9d9389564f4f'),
       (UUID(), '7', 0, 'd56a3721-0052-464d-aa0b-9d9389564f4f');

COMMIT;
