START TRANSACTION;

DROP TABLE IF EXISTS `quiz_resposta`;
DROP TABLE IF EXISTS `quiz_opcao`;
DROP TABLE IF EXISTS `quiz`;
DROP TABLE IF EXISTS `tipo_pergunta`;
DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `usu_id` varchar(36) NOT NULL PRIMARY KEY,
  `usu_login` varchar(45) NOT NULL,
  `usu_email` varchar(320) NOT NULL,
  `usu_senha` varchar(100) NOT NULL,
  `usu_avatar` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `tipo_pergunta` (
  `tp_id` varchar(36) NOT NULL PRIMARY KEY,
  `tp_descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `quiz` (
  `q_id` varchar(36) NOT NULL PRIMARY KEY,
  `q_pergunta` mediumtext NOT NULL,
  `tp_id` varchar(36) NOT NULL,
  FOREIGN KEY (`tp_id`) REFERENCES `tipo_pergunta`(`tp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `quiz_opcao` (
  `qo_id` varchar(36) NOT NULL PRIMARY KEY,
  `qo_descricao` mediumtext NOT NULL,
  `qo_correta` tinyint(1) NOT NULL,
  `q_id` varchar(36) NOT NULL,
  FOREIGN KEY (`q_id`) REFERENCES `quiz`(`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `quiz_resposta` (
  `qr_id` varchar(36) NOT NULL PRIMARY KEY,
  `q_id` varchar(36) NOT NULL,
  `usu_id` varchar(36) NOT NULL,
  `qr_acertou` tinyint(1) NOT NULL,
  FOREIGN KEY (`q_id`) REFERENCES `quiz`(`q_id`),
  FOREIGN KEY (`usu_id`) REFERENCES `usuario`(`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

COMMIT;