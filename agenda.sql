-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/10/2024 às 21:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `barbeariadocareca`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `barbeiro` varchar(128) NOT NULL,
  `dia_da_semana` varchar(20) NOT NULL,
  `horario_inicio` time NOT NULL,
  `horario_saida_intervalo` time NOT NULL,
  `horario_volta_intervalo` time NOT NULL,
  `horario_fim` time NOT NULL,
  `id_usuario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `barbeiro`, `dia_da_semana`, `horario_inicio`, `horario_saida_intervalo`, `horario_volta_intervalo`, `horario_fim`, `id_usuario`) VALUES
(8, 'Cleiton', '3', '12:00:00', '12:40:00', '12:33:00', '12:03:00', ''),
(9, 'Selecione um Barbeiro', 'Selecione o dia da s', '00:00:00', '00:00:00', '00:00:00', '00:00:00', ''),
(10, 'Selecione um Barbeiro', 'Selecione o dia da s', '00:00:00', '00:00:00', '00:00:00', '12:31:00', ''),
(11, 'Selecione um Barbeiro', 'Selecione o dia da s', '00:00:00', '00:00:00', '00:00:00', '12:31:00', ''),
(12, 'Selecione um Barbeiro', 'Selecione o dia da s', '12:03:00', '21:03:00', '12:03:00', '12:03:00', ''),
(13, 'Selecione um Barbeiro', 'Selecione o dia da s', '21:03:00', '21:03:00', '12:03:00', '12:03:00', ''),
(14, 'Gabriel', '1', '06:59:00', '05:55:00', '05:55:00', '05:55:00', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
