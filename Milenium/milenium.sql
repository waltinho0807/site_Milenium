-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jan-2020 às 23:38
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `milenium`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_topo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `imagem_1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imagem_2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`id`, `titulo`, `descricao_topo`, `descricao`, `imagem_1`, `imagem_2`, `data`) VALUES
(13, 'Matricula Abertas', 'Matricula Abertas', 'O ColÃ©gio Novo Milleniun Ã© feito de famÃ­lias que pensaram e desejaram um lugar perfeito para a educaÃ§Ã£o dos seus filhos.\r\n\r\nBuscamos sempre melhorias e ofertamos uma infraestrutura para tornar o ', 'fundo7.jpg', 'a_fundo5.jpg', '2020-01-11'),
(14, 'ENSINO MÃ‰DIO !', 'ENSINO MÃ‰DIO !', 'fvsvdsf', 'a_fundo6.jpg', 'amizade3.jpg', '2020-01-11');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
