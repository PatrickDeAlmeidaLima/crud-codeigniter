-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Dez-2021 às 18:55
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `codeigniter4-crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos`
--

DROP TABLE IF EXISTS `contratos`;
CREATE TABLE IF NOT EXISTS `contratos` (
  `contrato_id` int(11) NOT NULL AUTO_INCREMENT,
  `contrato_numero` varchar(25) DEFAULT NULL,
  `contrato_empresa` varchar(150) DEFAULT NULL,
  `contrato_cnpj` char(18) DEFAULT NULL,
  `contrato_data_ini` date DEFAULT NULL,
  `contrato_data_fim` date DEFAULT NULL,
  `contrato_descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`contrato_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contratos`
--

INSERT INTO `contratos` (`contrato_id`, `contrato_numero`, `contrato_empresa`, `contrato_cnpj`, `contrato_data_ini`, `contrato_data_fim`, `contrato_descricao`) VALUES
(9, '01', 'Marcos', '61065015601650', '2021-11-30', '2030-11-30', 'Contrato de serviço.'),
(2, '181060168', 'Patrick Digital', '91980980198', '1992-10-01', '2021-12-03', 'Venda de mão de obra.'),
(17, '', '', '', '0000-00-00', '0000-00-00', ''),
(18, '', '', '', '0000-00-00', '0000-00-00', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
