
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 26/09/2016 às 13:52:03
-- Versão do Servidor: 10.0.22-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u947965840_almox`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE IF NOT EXISTS `estoque` (
  `est_cod` int(5) NOT NULL AUTO_INCREMENT,
  `est_nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `est_qtd` int(11) NOT NULL,
  `est_preco` float NOT NULL,
  `est_pto` float NOT NULL,
  `est_for` int(5) NOT NULL,
  PRIMARY KEY (`est_cod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`est_cod`, `est_nome`, `est_qtd`, `est_preco`, `est_pto`, `est_for`) VALUES
(1, 'Maça', 600, 2.6, 40, 2),
(2, 'Maçã', 700, 3, 40, 2),
(3, 'Pc do Tico e Teco', 27, 1550, 9, 1),
(4, 'Pc Movido a formiga', 37, 1600, 16, 3),
(5, 'Pc Movido a ratazana', 33, 1500, 6, 2),
(6, 'Pc do Naruto', 55, 1700, 33, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE IF NOT EXISTS `fornecedor` (
  `for_cod` int(5) NOT NULL AUTO_INCREMENT,
  `for_nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `for_end` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `for_fone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `for_contato` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`for_cod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`for_cod`, `for_nome`, `for_end`, `for_fone`, `for_contato`) VALUES
(1, 'Empresa Chronos Corp', 'Avenida das ampulhetas', '921424415', 'chronoscorp@gmail.co'),
(2, 'Empresa Dan Dan', 'Rua dos Doidos', '924515826', 'dandan@gmail.com'),
(3, 'Empresa Dragxes', 'Rua do Blur ', '934356723', 'dragxes@hotmail.com'),
(4, 'Empresa Tudo Massa', 'Rua Pismelxinha', '957582195', 'tudomassa@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usu_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usu_Nome` varchar(30) NOT NULL,
  `usu_Usuario` varchar(20) NOT NULL,
  `usu_Senha` varchar(15) NOT NULL,
  `usu_Email` varchar(40) NOT NULL,
  `usu_Telefone` varchar(18) NOT NULL,
  PRIMARY KEY (`usu_Codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usu_Codigo`, `usu_Nome`, `usu_Usuario`, `usu_Senha`, `usu_Email`, `usu_Telefone`) VALUES
(1, 'Daniel', 'Dennyfentow', 'qwerasdf1', 'megabradock@gmail.com', '(91)98284-3482'),
(2, 'Maria', 'usuariaMaria', 'senhamaria1', 'maria123@hotmail.com', '(91)92141-1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
