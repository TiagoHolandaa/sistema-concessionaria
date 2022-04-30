-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Abr-2022 às 14:10
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_autojva`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carro`
--

DROP TABLE IF EXISTS `tb_carro`;
CREATE TABLE IF NOT EXISTS `tb_carro` (
  `cr_codigo` int(5) NOT NULL AUTO_INCREMENT,
  `cr_marca` varchar(50) NOT NULL,
  `cr_modelo` varchar(50) NOT NULL,
  `cr_preco` double(10,3) NOT NULL,
  `cr_cor` varchar(10) NOT NULL,
  `cr_quant_acent` int(2) NOT NULL,
  `cr_ano` int(5) NOT NULL,
  `cr_km` double(10,3) NOT NULL,
  PRIMARY KEY (`cr_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `cd_codigo` int(5) NOT NULL AUTO_INCREMENT,
  `cd_nome` varchar(45) NOT NULL,
  `cd_sobrenome` varchar(45) NOT NULL,
  `cd_CPF` varchar(15) NOT NULL,
  PRIMARY KEY (`cd_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_email_cli`
--

DROP TABLE IF EXISTS `tb_email_cli`;
CREATE TABLE IF NOT EXISTS `tb_email_cli` (
  `emc_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cli_email` varchar(200) NOT NULL,
  `cli_senha` varchar(40) NOT NULL,
  `cd_cliente_codigo` int(11) NOT NULL,
  PRIMARY KEY (`emc_codigo`),
  KEY `fk_tb_email_cli_cd_cliente1_idx` (`cd_cliente_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_email_func`
--

DROP TABLE IF EXISTS `tb_email_func`;
CREATE TABLE IF NOT EXISTS `tb_email_func` (
  `emf_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `func_email` varchar(200) NOT NULL,
  `func_senha` varchar(40) NOT NULL,
  `cd_func_codigo` int(11) NOT NULL,
  PRIMARY KEY (`emf_codigo`),
  KEY `fk_tb_email_func_cd_func1_idx` (`cd_func_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco_cli`
--

DROP TABLE IF EXISTS `tb_endereco_cli`;
CREATE TABLE IF NOT EXISTS `tb_endereco_cli` (
  `edc_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `edc_uf` varchar(2) NOT NULL,
  `edc_cidade` varchar(45) NOT NULL,
  `edc_bairro` varchar(45) NOT NULL,
  `edc_rua` varchar(45) NOT NULL,
  `edc_nm` int(6) NOT NULL,
  `edc_compl` varchar(45) DEFAULT NULL,
  `edc_cep` varchar(45) NOT NULL,
  `cd_cliente_cd_codigo` int(11) NOT NULL,
  PRIMARY KEY (`edc_codigo`),
  KEY `fk_tb_endereco_cli_cd_cliente1_idx` (`cd_cliente_cd_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco_func`
--

DROP TABLE IF EXISTS `tb_endereco_func`;
CREATE TABLE IF NOT EXISTS `tb_endereco_func` (
  `edf_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `edf_uf` varchar(2) NOT NULL,
  `edf_cidade` varchar(45) NOT NULL,
  `edf_bairro` varchar(45) NOT NULL,
  `edf_rua` varchar(45) NOT NULL,
  `edf_nm` int(6) NOT NULL,
  `edf_compl` varchar(45) DEFAULT NULL,
  `edf_cep` varchar(45) NOT NULL,
  `cd_func_func_codigo` int(11) NOT NULL,
  PRIMARY KEY (`edf_codigo`),
  KEY `fk_tb_endereco_func_cd_func1_idx` (`cd_func_func_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ft`
--

DROP TABLE IF EXISTS `tb_ft`;
CREATE TABLE IF NOT EXISTS `tb_ft` (
  `ft_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ft_nome` varchar(100) NOT NULL,
  `tb_carro_cr_codigo` int(11) NOT NULL,
  PRIMARY KEY (`ft_codigo`),
  KEY `fk_tb_ft_tb_carro1_idx` (`tb_carro_cr_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_func`
--

DROP TABLE IF EXISTS `tb_func`;
CREATE TABLE IF NOT EXISTS `tb_func` (
  `func_codigo` int(5) NOT NULL AUTO_INCREMENT,
  `func_nome` varchar(45) NOT NULL,
  `func_sobrenome` varchar(45) NOT NULL,
  `func_CPF` varchar(15) NOT NULL,
  `func_salario` double(6,2) NOT NULL,
  PRIMARY KEY (`func_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_venda`
--

DROP TABLE IF EXISTS `tb_venda`;
CREATE TABLE IF NOT EXISTS `tb_venda` (
  `vd_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `preco_venda` double(8,2) NOT NULL,
  `data_venda` date NOT NULL,
  `tb_carro_codigo` int(11) NOT NULL,
  `cd_func_codigo` int(11) NOT NULL,
  `cd_cliente_codigo` int(11) NOT NULL,
  PRIMARY KEY (`vd_codigo`,`cd_cliente_codigo`),
  KEY `fk_tb_venda_tb_carro_idx` (`tb_carro_codigo`),
  KEY `fk_tb_venda_cd_func1_idx` (`cd_func_codigo`),
  KEY `fk_tb_venda_cd_cliente1_idx` (`cd_cliente_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
