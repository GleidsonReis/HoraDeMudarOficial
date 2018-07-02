-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 27-Jun-2018 às 21:21
-- Versão do servidor: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horademudar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

DROP TABLE IF EXISTS `imovel`;
CREATE TABLE IF NOT EXISTS `imovel` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipoImovel` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tipoNegocio` varchar(255) CHARACTER SET latin1 NOT NULL,
  `titulo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `imagem1` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `localizacao` varchar(255) NOT NULL,
  `contato` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`id`, `tipoImovel`, `tipoNegocio`, `titulo`, `imagem1`, `descricao`, `localizacao`, `contato`) VALUES
(1, '1', '1', 'Titulo de Teste', 'img/Casa1.jpg', 'Casa secundária 5 (nº 168-D): 60 m2, com piso em cerâmica, com 02 quartos, sala, cozinha, banheiro e pequeno quintal privativo. Forrada com PVC. ', '1', '1'),
(2, '2', '2', 'Titulo de Teste2', 'img/Casa2.jpg', 'Casa secundária 4 (nº 168-C): 50 m2, com piso em cerâmica, com 02 quartos, sala, cozinha, banheiro e pequeno quintal privativo. Forrada com PVC.', '2', '2'),
(3, '3', '3', 'Titulo de Teste2', 'img/Casa3.jpg', 'Alugo Sobrado no bairro Arraial D\'angola com 5 quartos, Sala, copa, cozinha, sala de tv, 2 banheiros, área de serviço, garragem para 2 carros.\r\nExcelente localização. ', '3', '3'),
(4, '4', '4', 'Titulo de Teste2', 'img/Casa4.jpg', 'Descrição Teste4', '4', '4'),
(5, '5', '5', 'Titulo de Teste2', 'img/Casa5.jpg', 'Descrição Teste5', '5', '5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(16) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `telefone` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`, `telefone`, `email`) VALUES
(1, 'Gleidson', '12345', NULL, ''),
(2, 'Guilherme', '123', NULL, ''),
(3, 'JoÃ£o', '321', NULL, ''),
(4, 'Teste', '123456', NULL, ''),
(5, 'loginTeste', 'SenhaTeste', NULL, ''),
(6, 'Oliver', '12345', NULL, ''),
(7, 'TesteTeste', '123456', NULL, ''),
(8, '11111', '11111', NULL, ''),
(9, 'TesteTeste1', '10', NULL, ''),
(10, 'test', '111111111', NULL, ''),
(11, 'nome', 'senha', 'telefone', 'email'),
(12, 'nome1', 'senha1', 'telefone1', 'email1'),
(13, 'ttt', 'tttt', 'tttt', 'ttt'),
(14, 'tt', 'tt', 'tt', 'tt'),
(15, 'teste', '231', '8888', 'TesteE@g'),
(16, 'testeee', '231e', '88888e', 'TesteE@g'),
(17, 'AAAAAA', 'AAAAAA', 'AAAAAA', 'AAAAAA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
