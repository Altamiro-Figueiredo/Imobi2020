-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 04-Nov-2020 às 15:28
-- Versão do servidor: 5.6.50
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imobi2020`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `Contrato_ID` int(10) NOT NULL,
  `Proprietario_Nome` varchar(150) NOT NULL,
  `Inquilino_Nome` varchar(150) NOT NULL,
  `Fiador_Nome` varchar(150) NOT NULL,
  `Data_inicio` date NOT NULL,
  `Data_final` date NOT NULL,
  `Valor_aluguel` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contrato`
--

INSERT INTO `contrato` (`Contrato_ID`, `Proprietario_Nome`, `Inquilino_Nome`, `Fiador_Nome`, `Data_inicio`, `Data_final`, `Valor_aluguel`) VALUES
(0, 'Altamiro Arruda de Figueiredo Neto', 'Paolo Antonio Spera Neto', 'Eduardo de Goes ', '2020-10-01', '2021-10-01', 500.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

CREATE TABLE `imovel` (
  `Imovel_ID` int(10) NOT NULL,
  `Proprietario_Nome` varchar(150) NOT NULL,
  `Proprietario_Telefone` varchar(50) NOT NULL,
  `Proprietario_CPF` varchar(20) NOT NULL,
  `Tamanho_imovel` int(5) NOT NULL,
  `QTD_quartos` int(2) NOT NULL,
  `QTD_Banheiro` int(2) NOT NULL,
  `Garagem_espaço` int(2) NOT NULL,
  `Localizacao` varchar(250) NOT NULL,
  `Situacao_locacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`Imovel_ID`, `Proprietario_Nome`, `Proprietario_Telefone`, `Proprietario_CPF`, `Tamanho_imovel`, `QTD_quartos`, `QTD_Banheiro`, `Garagem_espaço`, `Localizacao`, `Situacao_locacao`) VALUES
(1, 'Altamiro Arruda de Figueiredo Neto', '18996743655', '423.040.668-10', 150, 2, 1, 2, 'Rua:Primavera, 184, Vila Volga', 'Não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inquilino`
--

CREATE TABLE `inquilino` (
  `Inquilino_ID` int(10) NOT NULL,
  `Inquilino_Nome` varchar(150) NOT NULL,
  `Inquilino_CPF` varchar(20) NOT NULL,
  `Inquilino_Telefone` varchar(50) NOT NULL,
  `Fiador_Nome` varchar(150) NOT NULL,
  `Fiador_CPF` varchar(20) NOT NULL,
  `Fiador_Telefone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `inquilino`
--

INSERT INTO `inquilino` (`Inquilino_ID`, `Inquilino_Nome`, `Inquilino_CPF`, `Inquilino_Telefone`, `Fiador_Nome`, `Fiador_CPF`, `Fiador_Telefone`) VALUES
(1, 'Paolo Antonio Spera Neto', '234.342.221-05', '18996543711', 'Eduardo de Goes ', '345.665.831-21', '1898835412');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`Contrato_ID`),
  ADD KEY `Inquilino_Nome_FK` (`Inquilino_Nome`),
  ADD KEY `Fiador_Nome_FK` (`Fiador_Nome`),
  ADD KEY `Proprietario_Nome_FK` (`Proprietario_Nome`);

--
-- Índices para tabela `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`Imovel_ID`),
  ADD KEY `Proprietario_Nome` (`Proprietario_Nome`);

--
-- Índices para tabela `inquilino`
--
ALTER TABLE `inquilino`
  ADD PRIMARY KEY (`Inquilino_ID`),
  ADD UNIQUE KEY `Inquilino_ID` (`Inquilino_ID`),
  ADD KEY `Fiador_Nome` (`Fiador_Nome`),
  ADD KEY `Inquilino_Nome` (`Inquilino_Nome`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `Fiador_Nome_FK` FOREIGN KEY (`Fiador_Nome`) REFERENCES `inquilino` (`Fiador_Nome`),
  ADD CONSTRAINT `Inquilino_Nome_FK` FOREIGN KEY (`Inquilino_Nome`) REFERENCES `inquilino` (`Inquilino_Nome`),
  ADD CONSTRAINT `Proprietario_Nome_FK` FOREIGN KEY (`Proprietario_Nome`) REFERENCES `imovel` (`Proprietario_Nome`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
