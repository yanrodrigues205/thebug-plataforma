DROP TABLE IF EXISTS `usuario`;
DROP TABLE IF EXISTS `quiz_opcao`;
DROP TABLE IF EXISTS `quiz`;
DROP TABLE IF EXISTS `tipo_pergunta`;

CREATE TABLE `usuario` (
  `usu_id` varchar(36) NOT NULL,
  `usu_login` varchar(45) NOT NULL,
  `usu_email` varchar(320) NOT NULL,
  `usu_senha` varchar(100) NOT NULL,
  `usu_avatar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD UNIQUE KEY `usu_login_UNIQUE` (`usu_login`),
  ADD UNIQUE KEY `usu_email_UNIQUE` (`usu_email`);

CREATE TABLE `tipo_pergunta` (
  `tp_id` varchar(36) NOT NULL,
  `tp_descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `tipo_pergunta`
  ADD PRIMARY KEY (`tp_id`);

CREATE TABLE `quiz` (
    `q_id` varchar(36) NOT NULL,
    `q_pergunta` mediumtext NOT NULL,
    `tp_id` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `quiz`
  ADD PRIMARY KEY (`q_id`),
  ADD CONSTRAINT `fk_q_tp` FOREIGN KEY (tp_id) REFERENCES tipo_pergunta(tp_id);

CREATE TABLE `quiz_opcao` (
    `qo_id` varchar(36) NOT NULL,
    `qo_descricao` mediumtext NOT NULL,
    `qo_correta` tinyint(1) NOT NULL,
    `q_id` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `quiz_opcao`
  ADD PRIMARY KEY (`qo_id`),
  ADD CONSTRAINT `fk_qo_q` FOREIGN KEY (q_id) REFERENCES quiz(q_id);