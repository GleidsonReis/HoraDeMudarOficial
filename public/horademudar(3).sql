-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Jul-2018 às 19:41
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
  `imagem1` varchar(255) DEFAULT NULL,
  `imagem2` varchar(255) DEFAULT NULL,
  `imagem3` varchar(255) DEFAULT NULL,
  `imagem4` varchar(255) DEFAULT NULL,
  `imagem5` varchar(255) DEFAULT NULL,
  `descricao` varchar(1000) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `contato` varchar(255) NOT NULL,
  `qntcomodos` int(11) NOT NULL,
  `qntquartos` int(11) NOT NULL,
  `valor` float NOT NULL,
  `dataExpiracao` datetime NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `idUsuario` bigint(20) UNSIGNED DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`id`, `tipoImovel`, `tipoNegocio`, `titulo`, `imagem1`, `imagem2`, `imagem3`, `imagem4`, `imagem5`, `descricao`, `endereco`, `bairro`, `cidade`, `contato`, `qntcomodos`, `qntquartos`, `valor`, `dataExpiracao`, `status`, `idUsuario`) VALUES
(1, '1', '1', 'Casa no Alto do Corrego', 'img/casa1.jpg', '', '0', '', '', 'Linda casa em terreno alto, face leste e com 200m/quadrados de area privativa em local privilegiado em Paracatu, proximo ao Centro e seus comercios local e das praias do Leste e Sul da Ilha! Possui 03 dormitorios, , sala de estar e jantar, cozinha com moveis planejados, area de estar, otima area externa com jardim, churrasqueira, deposito podendo ser utilizado como home office e 02 vagas de garagem.', '1', '0', '', '1', 0, 0, 0, '0000-00-00 00:00:00', 0, 0),
(2, '2', '2', 'Sobrado no Paracatuzinho', 'img/casa2.jpg', '', '0', '', '', 'Linda casa em terreno alto, face leste e com 200m/quadrados de area privativa em local privilegiado em Paracatu, proximo ao Centro e seus comercios local e das praias do Leste e Sul da Ilha! Possui 03 dormitorios, , sala de estar e jantar, cozinha com moveis planejados, area de estar, otima area externa com jardim, churrasqueira, deposito podendo ser utilizado como home office e 02 vagas de garagem.', '2', '0', '', '2', 0, 0, 0, '0000-00-00 00:00:00', 0, 0),
(3, '3', '3', 'Sobrado valores Baixos', 'img/casa3.jpg', '', '0', '', '', 'Linda casa em terreno alto, face leste e com 200m/quadrados de area privativa em local privilegiado em Paracatu, proximo ao Centro e seus comercios local e das praias do Leste e Sul da Ilha! Possui 03 dormitorios, , sala de estar e jantar, cozinha com moveis planejados, area de estar, otima area externa com jardim, churrasqueira, deposito podendo ser utilizado como home office e 02 vagas de garagem.', '3', '0', '', '3', 0, 0, 0, '2018-07-15 00:00:00', 1, 0),
(4, '4', '4', 'Imovel Bem localizado, Baixo valor', 'img/casa4.jpg', '', '0', '', '', 'Linda casa em terreno alto, face leste e com 200m/quadrados de area privativa em local privilegiado em Paracatu, proximo ao Centro e seus comercios local e das praias do Leste e Sul da Ilha! Possui 03 dormitorios, , sala de estar e jantar, cozinha com moveis planejados, area de estar, otima area externa com jardim, churrasqueira, deposito podendo ser utilizado como home office e 02 vagas de garagem.', '4', '0', '', '4', 0, 0, 0, '2018-07-15 00:00:00', 1, 0),
(5, '5', '5', 'Titulo de Imovel Feito', 'img/casa5.jpg', '', '0', '', '', 'Linda casa em terreno alto, face leste e com 200m/quadrados de area privativa em local privilegiado em Paracatu, proximo ao Centro e seus comercios local e das praias do Leste e Sul da Ilha! Possui 03 dormitorios, , sala de estar e jantar, cozinha com moveis planejados, area de estar, otima area externa com jardim, churrasqueira, deposito podendo ser utilizado como home office e 02 vagas de garagem.', '5', '0', '', '5', 2018, 0, 0, '2018-07-15 00:00:00', 1, 0),
(78, '5', '6', 'Titulo Imovel', 'img/iconeDespesas.PNG', 'img/logo_app.png', 'img/logo_principal3.png', 'img/logo_principal4.png', 'img/Guia-de-despesas-condominiais-quem-paga-o-quÃª.png', 'Linda casa em terreno alto, face leste e com 200m/quadrados de area privativa em local privilegiado em Paracatu, proximo ao Centro e seus comercios local e das praias do Leste e Sul da Ilha! Possui 03 dormitorios, , sala de estar e jantar, cozinha com moveis planejados, area de estar, otima area externa com jardim, churrasqueira, deposito podendo ser utilizado como home office e 02 vagas de garagem.', '8', '8', '8', '8', 8, 8, 8, '2018-07-15 00:00:00', 1, 1),
(82, 'Casa', 'Negocio Alterado3', 'Linda Casa - Aconchegante', 'img/01.jpg', 'img/011.jpg', 'img/021.jpg', 'img/de-casas-bonitas-en-honduras-rancho-2018-modelos-frentes-s.jpg', 'img/IMG_2279.jpg', 'Linda casa em terreno alto, face leste e com 200m/quadrados de area privativa em local privilegiado em Paracatu, proximo ao Centro e seus comercios local e das praias do Leste e Sul da Ilha! Possui 03 dormitorios, , sala de estar e jantar, cozinha com moveis planejados, area de estar, otima area externa com jardim, churrasqueira, deposito podendo ser utilizado como home office e 02 vagas de garagem.', '1', '1', '1', '1', 1, 1, 1, '2018-07-25 00:00:00', 1, 29),
(84, 'Casa', '1', 'Casa Aconchego Alterado2', 'img/000casamod.jpg', 'img/01.jpg', 'img/011.jpg', 'img/021.jpg', 'img/Casa PrÃ© moldado convencional telhado de barro, colonial,  MARTONI PRE MOLDADOS 061-9607-3520 casa 02.jpg', 'Linda casa em terreno alto, face leste e com 200m/quadrados de area privativa em local privilegiado em Paracatu, proximo ao Centro e seus comercios local e das praias do Leste e Sul da Ilha! Possui 03 dormitorios, , sala de estar e jantar, cozinha com moveis planejados, area de estar, otima area externa com jardim, churrasqueira, deposito podendo ser utilizado como home office e 02 vagas de garagem.', '1', '1', '1', '1', 1, 1, 1, '2018-07-19 00:00:00', 1, 29),
(85, 'Casa', 'Aluguel', 'Casa para Alugar perto de Area Silenciosa', 'img/01.jpg', 'img/011.jpg', 'img/021.jpg', 'img/de-casas-bonitas-en-honduras-rancho-2018-modelos-frentes-s.jpg', 'img/IMG_2279.jpg', 'Casa tal com tal coisas, contendo tais imoveis, em area de descanso e lazer', 'Rua Um', 'Parque do Principe', 'Paracatu - MG', '38-3671-0000', 12, 3, 200, '2018-07-15 00:00:00', 0, 29);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(70) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`, `telefone`, `email`) VALUES
(1, 'Gleidson', '12345', NULL, ''),
(2, 'Guilherme', '123', NULL, ''),
(3, 'João', '321', NULL, ''),
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
(17, 'AAAAAA', 'AAAAAA', 'AAAAAA', 'AAAAAA'),
(18, '5', '5', '5', '5'),
(19, '7', '7', '7', '7'),
(20, 'GG', 'GG', 'GG', 'GG'),
(21, 'HH', 'HH', 'HH', 'HH'),
(22, '77', '77', '77', '77'),
(23, '99', '99', '99', '99'),
(24, '88', '88', '88', '88@hotmail.com'),
(25, 'João da Silva Cachaça', '55', '55', '88@hotmail.com'),
(26, 'JoÃ£o da Silva CachaÃ§a2', '55', '55', '88@hotmaiil.com'),
(27, 'JosÃ© CachaÃ§a SÃ£o Trolado', '1234564656', '156416546', 'teste@hotmail.com'),
(28, 'Oliver2', '12345', '12345', 'oliver2@hotmail.com'),
(29, 'Usuario Teste', '827ccb0eea8a706c4c34a16891f84e7b', '3671-9986', 'gleidson_paracatu@hotmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
