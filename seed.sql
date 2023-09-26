START TRANSACTION;
SET SQL_SAFE_UPDATES = 0;

DELETE FROM usuario;
DELETE FROM quiz_opcao;
DELETE FROM quiz;
DELETE FROM tipo_pergunta;

INSERT INTO usuario (usu_id, usu_login, usu_email, usu_senha) 
VALUES ("0874af4f-363b-447b-860d-b549be286f6a", "admin", "admin@admin.com", "1234abcd");

INSERT INTO tipo_pergunta (tp_id, tp_descricao) 
VALUES ("247ff6d7-2a83-48cb-8669-f21997008cb7", 'Lista Simplimente Encadeada'), 
       ("6a982574-9d71-4217-956c-dd7eb8ce519e", 'Lista Duplamente Encadeada');

INSERT INTO quiz (q_id, q_pergunta, tp_id) 
VALUES ("72ae3258-d107-47cc-a4f2-6218113ef738", "O que é uma lista simplesmente encadeada?", "247ff6d7-2a83-48cb-8669-f21997008cb7");

INSERT INTO quiz_opcao (qo_id, qo_descricao, qo_correta, q_id) 
VALUES ("1bbe0af4-b68e-4c12-853b-02b5fa69588d", "Uma lista que armazena elementos em uma estrutura bidimensional.", 0, "72ae3258-d107-47cc-a4f2-6218113ef738"),
       ("7adb195e-1cfc-4109-b2fa-09bfbe58e16c", "Uma lista que armazena elementos em uma sequência linear e cada elemento possui um ponteiro para o próximo elemento.", 1, "72ae3258-d107-47cc-a4f2-6218113ef738"),
       ("80bb1158-f32c-4e0d-b8c6-67d47019d14d", "Uma lista que armazena elementos em uma árvore hierárquica.", 0, "72ae3258-d107-47cc-a4f2-6218113ef738"),
       ("649157a0-58ca-4c99-974a-56a05beb48a4", "Uma lista que armazena elementos em uma ordem inversa.", 0, "72ae3258-d107-47cc-a4f2-6218113ef738");

INSERT INTO quiz (q_id, q_pergunta, tp_id)
VALUES ('fa6934b8-be24-4011-a83f-16fdb079200a', 'Qual é o elemento inicial de uma lista simplesmente encadeada?', '247ff6d7-2a83-48cb-8669-f21997008cb7');

INSERT INTO quiz_opcao (qo_id, qo_descricao, qo_correta, q_id)
VALUES ('1bbe0af4-b68e-4c12-853b-02b5fa69587e', 'O último elemento da lista.', 0, 'fa6934b8-be24-4011-a83f-16fdb079200a'),
       ('7adb195e-1cfc-4109-b2fa-09bfbe58e15d', 'O elemento que está no meio da lista.', 0, 'fa6934b8-be24-4011-a83f-16fdb079200a'),
       ('80bb1158-f32c-4e0d-b8c6-67d47019c19a', 'O primeiro elemento da lista.', 1, 'fa6934b8-be24-4011-a83f-16fdb079200a'),
       ('649157a0-58ca-4c99-974a-56a05beb48h3', 'Um elemento aleatório da lista.', 0, 'fa6934b8-be24-4011-a83f-16fdb079200a');

INSERT INTO quiz (q_id, q_pergunta, tp_id)
VALUES ('3c2e0e3a-6f82-4a0b-9f7e-584a12c21b5f', 'O que é um nó em uma lista encadeada?', '247ff6d7-2a83-48cb-8669-f21997008cb7');

INSERT INTO quiz_opcao (qo_id, qo_descricao, qo_correta, q_id)
VALUES ('49be24d8-6ab1-4b9a-9d1e-3c50b8e7b9c7', 'Um valor numérico armazenado na lista.', 0, '3c2e0e3a-6f82-4a0b-9f7e-584a12c21b5f'),
       ('7f0a819b-9e76-4a9e-a2f2-8878b1e62b07', 'Um ponteiro para o próximo elemento da lista.', 1, '3c2e0e3a-6f82-4a0b-9f7e-584a12c21b5f'),
       ('8fc8c366-9d89-4c1a-bc97-3b7edf25151b', 'Um índice que indica a posição de um elemento na lista.', 0, '3c2e0e3a-6f82-4a0b-9f7e-584a12c21b5f'),
       ('d4c1ebfb-35f2-47d3-8eb2-b96d0756c6c2', 'Uma operação de inserção em uma lista.', 0, '3c2e0e3a-6f82-4a0b-9f7e-584a12c21b5f');

INSERT INTO quiz (q_id, q_pergunta, tp_id)
VALUES ('4d9eb5a4-37a1-4e2e-b21a-93543dfedcc6', 'Como é possível inserir um novo elemento no início de uma lista encadeada?', '247ff6d7-2a83-48cb-8669-f21997008cb7');

INSERT INTO quiz_opcao (qo_id, qo_descricao, qo_correta, q_id)
VALUES ('5c6e741a-ded0-4d0d-8f8e-c30f0d8e9d5c', 'Criando um novo nó e definindo seu ponteiro para o último elemento da lista.', 0, '4d9eb5a4-37a1-4e2e-b21a-93543dfedcc6'),
       ('70a29b6b-8497-4d77-a9fc-1c2c3f39a05c', 'Atualizando o ponteiro do último elemento da lista para apontar para o novo elemento.', 1, '4d9eb5a4-37a1-4e2e-b21a-93543dfedcc6'),
       ('80bb1158-f32c-4e0d-b8c6-67d47019c14c', 'Atualizando o ponteiro do novo elemento para apontar para o primeiro elemento da lista.', 0, '4d9eb5a4-37a1-4e2e-b21a-93543dfedcc6'),
       ('9384df47-e449-4c8f-81f5-89e617c46dcb', 'Removendo o último elemento da lista e inserindo o novo elemento em seu lugar.', 0, '4d9eb5a4-37a1-4e2e-b21a-93543dfedcc6');

INSERT INTO quiz (q_id, q_pergunta, tp_id)
VALUES ('5b5ac91d-4619-4ab4-a1b8-2c62e00ed07f', 'Quais são as vantagens de uma lista encadeada em relação a um array (arranjo) tradicional?', '247ff6d7-2a83-48cb-8669-f21997008cb7');

INSERT INTO quiz_opcao (qo_id, qo_descricao, qo_correta, q_id)
VALUES ('47a4cf9e-7525-44c0-9c8f-2b70dd3acfb7', 'Facilidade de inserção e exclusão de elementos, mesmo em posições intermediárias.', 1, '5b5ac91d-4619-4ab4-a1b8-2c62e00ed07f'),
       ('5935c8e2-849e-485f-9ad3-43d9f76f896a', 'Facilidade de implementação e tamanho fixo.', 0, '5b5ac91d-4619-4ab4-a1b8-2c62e00ed07f'),
       ('621eb0d2-b6d5-4c9f-8efb-53a6d42a4e8c', 'Uso eficiente de memória e acesso aleatório rápido.', 0, '5b5ac91d-4619-4ab4-a1b8-2c62e00ed07f'),
       ('6e30e7f2-5c9e-4f27-941f-603363303dce', 'Armazenamento contíguo em memória e acesso rápido aos elementos intermediários.', 0, '5b5ac91d-4619-4ab4-a1b8-2c62e00ed07f');
COMMIT;