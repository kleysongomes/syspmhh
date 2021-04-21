-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql313.epizy.com
-- Tempo de geração: 19/04/2021 às 21:53
-- Versão do servidor: 5.6.48-88.0
-- Versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `epiz_27045101_system`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avais`
--

CREATE TABLE `avais` (
  `id` int(255) NOT NULL,
  `user` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_fim` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(3) NOT NULL DEFAULT '0',
  `motivo` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `avisos`
--

CREATE TABLE `avisos` (
  `id` int(255) NOT NULL,
  `usr_habbo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mensagem` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `guias`
--

CREATE TABLE `guias` (
  `id` int(255) NOT NULL,
  `nickname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cargo` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `historico`
--

CREATE TABLE `historico` (
  `id` int(255) NOT NULL,
  `enviado_por` varchar(255) CHARACTER SET utf8 NOT NULL,
  `usr_habbo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tipo` int(10) NOT NULL,
  `msg` varchar(10000) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `instrutores`
--

CREATE TABLE `instrutores` (
  `id` int(255) NOT NULL,
  `nickname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cargo` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `logs`
--

CREATE TABLE `logs` (
  `id` bigint(255) NOT NULL,
  `usr_habbo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `msg` varchar(10000) DEFAULT NULL,
  `usr_ip` varchar(255) NOT NULL,
  `log_tipo` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `membros`
--

CREATE TABLE `membros` (
  `id` int(255) NOT NULL,
  `usr_habbo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `usr_patente` int(11) NOT NULL,
  `usr_promo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_responsavel` varchar(255) CHARACTER SET utf8 NOT NULL,
  `usr_status` int(11) NOT NULL DEFAULT '1',
  `usr_executivo` int(2) NOT NULL DEFAULT '0',
  `usr_destaque` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `notificacoes`
--

CREATE TABLE `notificacoes` (
  `id` int(255) NOT NULL,
  `enviado_por` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user` varchar(255) CHARACTER SET utf8 NOT NULL,
  `msg` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_read` int(10) NOT NULL DEFAULT '0',
  `noti_type` int(10) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `painel`
--

CREATE TABLE `painel` (
  `id` int(255) NOT NULL,
  `usr_habbo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `usr_senha` varchar(255) CHARACTER SET utf8 NOT NULL,
  `usr_perm` int(2) NOT NULL DEFAULT '0',
  `usr_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `patentes`
--

CREATE TABLE `patentes` (
  `id` int(255) NOT NULL,
  `patente` varchar(255) NOT NULL,
  `patente_executivo` varchar(255) NOT NULL,
  `perm_promover` int(10) NOT NULL,
  `perm_rebaixar` int(10) NOT NULL,
  `perm_demitir` int(10) NOT NULL,
  `perm_contratar` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
--

CREATE TABLE `professores` (
  `id` int(255) NOT NULL,
  `nickname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cargo` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `relatorios`
--

CREATE TABLE `relatorios` (
  `id` int(255) NOT NULL,
  `usr_habbo` varchar(255) NOT NULL,
  `recrutas` varchar(255) NOT NULL,
  `observacoes` varchar(255) NOT NULL,
  `tipo` int(5) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `avais`
--
ALTER TABLE `avais`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `guias`
--
ALTER TABLE `guias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `instrutores`
--
ALTER TABLE `instrutores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `membros`
--
ALTER TABLE `membros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usr_habbo` (`usr_habbo`);

--
-- Índices de tabela `notificacoes`
--
ALTER TABLE `notificacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `painel`
--
ALTER TABLE `painel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `patentes`
--
ALTER TABLE `patentes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `relatorios`
--
ALTER TABLE `relatorios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `avais`
--
ALTER TABLE `avais`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `guias`
--
ALTER TABLE `guias`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `historico`
--
ALTER TABLE `historico`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `instrutores`
--
ALTER TABLE `instrutores`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `membros`
--
ALTER TABLE `membros`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `notificacoes`
--
ALTER TABLE `notificacoes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `painel`
--
ALTER TABLE `painel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `patentes`
--
ALTER TABLE `patentes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `relatorios`
--
ALTER TABLE `relatorios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
