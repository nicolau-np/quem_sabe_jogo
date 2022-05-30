-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Out-2019 às 00:38
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quemsabe`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fases_grupo`
--

CREATE TABLE `fases_grupo` (
  `id_fase` int(11) NOT NULL,
  `grupo` varchar(3) NOT NULL,
  `disciplina` varchar(40) NOT NULL,
  `quantidade` varchar(5) NOT NULL,
  `valores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fases_grupo`
--

INSERT INTO `fases_grupo` (`id_fase`, `grupo`, `disciplina`, `quantidade`, `valores`) VALUES
(1, 'A', 'Quimica', '0', 0),
(2, 'A', 'Biologia', '0', 0),
(3, 'A', 'Geologia', '0', 0),
(4, 'A', 'Fisica', '0', 0),
(5, 'B', 'Quimica', '0', 0),
(6, 'B', 'Biologia', '0', 0),
(7, 'B', 'Geologia', '0', 0),
(8, 'B', 'Fisica', '0', 0),
(9, 'C', 'Quimica', '0', 0),
(10, 'C', 'Biologia', '0', 0),
(11, 'C', 'Geologia', '1', 0),
(12, 'C', 'Fisica', '0', 0),
(13, 'D', 'Quimica', '0', 0),
(14, 'D', 'Biologia', '0', 0),
(15, 'D', 'Geologia', '0', 0),
(16, 'D', 'Fisica', '0', 0),
(17, 'E', 'Quimica', '0', 0),
(18, 'E', 'Biologia', '0', 0),
(19, 'E', 'Geologia', '0', 0),
(20, 'E', 'Fisica', '0', 0),
(21, 'A', 'Matematica', '0', 0),
(22, 'A', 'Informatica', '0', 0),
(23, 'A', 'Geometria', '0', 0),
(24, 'B', 'Matematica', '0', 0),
(25, 'B', 'Geometria', '0', 0),
(26, 'B', 'Informatica', '0', 0),
(27, 'C', 'Matematica', '0', 0),
(28, 'C', 'Geometria', '0', 0),
(29, 'C', 'Informatica', '0', 0),
(30, 'D', 'Matematica', '0', 0),
(31, 'D', 'Geometria', '0', 0),
(32, 'D', 'Informatica', '0', 0),
(33, 'E', 'Matematica', '0', 0),
(34, 'E', 'Geometria', '0', 0),
(35, 'E', 'Informatica', '0', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id_pergunta` int(11) NOT NULL,
  `disciplina` varchar(60) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `pergunta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id_pergunta`, `disciplina`, `estado`, `pergunta`) VALUES
(1, 'Geologia', 'naovista', 'Quantas provÃ­ncias tem Angola?'),
(2, 'Geologia', 'vista', 'O que Ã© a Geologia?'),
(3, 'Geologia', 'naovista', 'Quais sÃ£o as diferentes formas que o relevo pode nos apresentar?'),
(4, 'Biologia', 'naovista', 'O que Ã© a MalÃ¡ria?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `id_resposta` int(11) NOT NULL,
  `id_pergunta` int(11) NOT NULL,
  `resposta` text NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id_resposta`, `id_pergunta`, `resposta`, `estado`) VALUES
(1, 1, '4', 'errada'),
(2, 1, '17', 'errada'),
(3, 1, '7', 'errada'),
(4, 1, '18', 'certa'),
(5, 2, 'Ã‰ a ciÃªncia que estuda a descriÃ§Ã£o da terra, das suas caracterÃ­sticas atÃ© as suas transformaÃ§Ãµes', 'certa'),
(6, 2, 'CiÃªncia que estuda a descriÃ§Ã£o territorial de um paÃ­s', 'errada'),
(7, 2, 'Conjunto de seres humanos que habitam na terra', 'errada'),
(8, 2, 'Estrutura de carreira', 'errada'),
(9, 3, 'PlanÃ­cies, Planaltos e Montanhas', 'certa'),
(10, 3, 'Plantas, Chanas e Terras', 'errada'),
(11, 3, 'Marte, Antartida e Relevro', 'errada'),
(12, 3, 'Planaltos, Relevos e Canibais', 'errada'),
(13, 4, 'Ã© a ciencia que estuda a geografia humana de todos os homens, animais plantas, casas, carros, e administra o paÃ­s, sendo que o salÃ¡rio da funÃ§Ã£o publica humano Ã© de 1246700 km2 assim podemos descrever q a malaria vem a ser tudom aquilo q abordamos', 'errada'),
(14, 4, 'Ã© uma doenÃ§a do cor cabeludo', 'errada'),
(15, 4, 'Nenhuma', 'errada'),
(16, 4, 'Ã© uma doenÃ§a causada pela picada do mosquito', 'certa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `estado` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `nome`, `senha`, `estado`) VALUES
(1, 'Nicolau', 'babaca', 'ON');

-- --------------------------------------------------------

--
-- Estrutura da tabela `valores`
--

CREATE TABLE `valores` (
  `id_valor` int(11) NOT NULL,
  `grupo` varchar(2) NOT NULL,
  `valor` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `valores`
--

INSERT INTO `valores` (`id_valor`, `grupo`, `valor`) VALUES
(1, 'A', '0'),
(2, 'B', '0'),
(3, 'C', '0'),
(4, 'D', '0'),
(5, 'E', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fases_grupo`
--
ALTER TABLE `fases_grupo`
  ADD PRIMARY KEY (`id_fase`);

--
-- Indexes for table `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id_pergunta`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id_resposta`),
  ADD KEY `id_pergunta` (`id_pergunta`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `valores`
--
ALTER TABLE `valores`
  ADD PRIMARY KEY (`id_valor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fases_grupo`
--
ALTER TABLE `fases_grupo`
  MODIFY `id_fase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id_pergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id_resposta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `valores`
--
ALTER TABLE `valores`
  MODIFY `id_valor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `respostas_ibfk_1` FOREIGN KEY (`id_pergunta`) REFERENCES `perguntas` (`id_pergunta`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
