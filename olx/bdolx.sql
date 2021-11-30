-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 20-Out-2021 às 20:27
-- Versão do servidor: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdolx`
--
CREATE DATABASE IF NOT EXISTS `bdolx` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdolx`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anunciante`
--

CREATE TABLE `anunciante` (
  `codanunciante` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `apelido` varchar(40) NOT NULL,
  `datacadastro` date NOT NULL,
  `cpf` char(11) NOT NULL,
  `celular` char(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `datanascimento` date NOT NULL,
  `cep` char(8) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` char(2) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `codcategoria` int(11) NOT NULL,
  `nomecategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`codcategoria`, `nomecategoria`) VALUES
(1, 'Tecnologia'),
(2, 'Tecnologiaxs'),
(3, 'Doces');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `codfoto` int(11) NOT NULL,
  `codproduto` int(11) NOT NULL,
  `nomearquivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codproduto` int(11) NOT NULL,
  `codcategoria` int(11) NOT NULL,
  `codanunciante` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `preco` double NOT NULL,
  `descricao` text NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codusuario` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codusuario`, `nome`, `email`, `senha`, `acesso`) VALUES
(1, 'Anderson Spera', 'andersonspera@gmail.com', '$2y$10$3lpBa5A8Md1P7XFPzoOUBO8KzRRV5RZoOgJEJAA4HVHZgSvtlItTe', 1),
(2, 'LetÃ­cia Farias de Souza', 'leticiafariassouza@gmail.com', '$2y$10$3S2deHhgRGO7ka1HoTm//OQ4hVCVFZSZSEyEFvjRIUnxQobxkFHBi', 1),
(6, 'Vinicius de Oliveira', 'vinicius@gmail.com', '$2y$10$TCrdmDlSm9qNCPWfQMEaq.KCj6CYnEom1vSxFfpuokj.dURgxV4Em', 2),
(7, 'Novo UsuÃ¡rio', 'novo@gmail.com', '$2y$10$jdBlNBhzooSgAv/EoNYvZODj4uUJ9PK3cdnLTXEoUxN4jwSdIkCZq', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anunciante`
--
ALTER TABLE `anunciante`
  ADD PRIMARY KEY (`codanunciante`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codcategoria`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`codfoto`),
  ADD KEY `codproduto` (`codproduto`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codproduto`),
  ADD KEY `codcategoria` (`codcategoria`),
  ADD KEY `codanunciante` (`codanunciante`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anunciante`
--
ALTER TABLE `anunciante`
  MODIFY `codanunciante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `codfoto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `codproduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fkproduto` FOREIGN KEY (`codproduto`) REFERENCES `produto` (`codproduto`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fkanunciante` FOREIGN KEY (`codanunciante`) REFERENCES `anunciante` (`codanunciante`),
  ADD CONSTRAINT `fkcategoria` FOREIGN KEY (`codcategoria`) REFERENCES `categoria` (`codcategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
