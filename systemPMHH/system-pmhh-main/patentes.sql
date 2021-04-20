-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql313.epizy.com
-- Tempo de geração: 19/04/2021 às 22:38
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

--
-- Despejando dados para a tabela `patentes`
--

INSERT INTO `patentes` (`id`, `patente`, `patente_executivo`, `perm_promover`, `perm_rebaixar`, `perm_demitir`, `perm_contratar`) VALUES
(1, 'Presidente', 'Presidente', 1, 1, 1, 0),
(2, 'Vice-Presidente', 'Vice-Presidente', 2, 2, 3, 0),
(3, 'Supremo', 'Supremo', 4, 4, 4, 0),
(4, 'Diretor-Fundador', 'Líder-Geral', 5, 5, 5, 0),
(5, 'Diretor', 'Líder', 6, 6, 6, 0),
(6, 'Inspetor-Chefe', 'Staff-Geral', 11, 8, 8, 0),
(7, 'Inspetor', 'Staff', 12, 8, 8, 0),
(8, 'Coronel', 'Delegado', 13, 11, 11, 0),
(9, 'Tenente-Coronel', 'Comissário', 13, 12, 12, 0),
(10, 'Major', 'Escrivão', 14, 13, 13, 0),
(11, 'Capitão', 'Embaixador', 15, 0, 14, 0),
(12, 'Tenente', 'Promotor', 16, 0, 15, 0),
(13, 'Aspirante a Oficial', 'Perito', 0, 0, 0, 0),
(14, 'Subtenente', 'Investigador', 0, 0, 0, 0),
(15, 'Sargento', 'Agente', 0, 0, 0, 0),
(16, 'Cabo', 'Sócio', 0, 0, 0, 0),
(17, 'Soldado', 'Soldado', 0, 0, 0, 0),
(0, 'Desenvolvedor', 'Desenvolvedor', 1, 1, 1, 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `patentes`
--
ALTER TABLE `patentes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `patentes`
--
ALTER TABLE `patentes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
