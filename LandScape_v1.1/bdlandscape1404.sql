-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Abr-2023 às 03:44
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdlandscape`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `personalidades_cliente`
--

CREATE TABLE `personalidades_cliente` (
  `id_personalidade` int(11) NOT NULL,
  `nome_personalidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `personalidades_cliente`
--

INSERT INTO `personalidades_cliente` (`id_personalidade`, `nome_personalidade`) VALUES
(1, 'Aventureiro'),
(2, 'Romântico'),
(3, 'Radical'),
(4, 'Cultural'),
(5, 'Musical'),
(6, 'Intercâmbio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cad_viagem`
--

CREATE TABLE `tbl_cad_viagem` (
  `id_viagem` int(11) NOT NULL,
  `nome_viagem` varchar(50) NOT NULL,
  `local_viagem` varchar(50) NOT NULL,
  `checkin_viagem` date NOT NULL,
  `checkout_viagem` date NOT NULL,
  `quarto_viagem` int(2) NOT NULL,
  `personalidade_viagem` int(2) NOT NULL,
  `experiencia_viagem` int(255) NOT NULL,
  `adultos_viagem` int(2) NOT NULL,
  `crianca_viagem` int(2) DEFAULT NULL,
  `refeicao_viagem` varchar(3) DEFAULT NULL,
  `descricao_viagem` longtext NOT NULL,
  `file_img` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_cad_viagem`
--

INSERT INTO `tbl_cad_viagem` (`id_viagem`, `nome_viagem`, `local_viagem`, `checkin_viagem`, `checkout_viagem`, `quarto_viagem`, `personalidade_viagem`, `experiencia_viagem`, `adultos_viagem`, `crianca_viagem`, `refeicao_viagem`, `descricao_viagem`, `file_img`) VALUES
(8, 'Casa na Árvore', 'Cunha - SP', '2023-04-15', '2023-04-22', 3, 1, 0, 2, 2, 'S', 'Experiência exótica com toda família, vivem no topo das arvores mais incríveis e majestosas do vale ', 'img1.jpg'),
(9, 'Rapel Radical', 'São Paulo - Zona Norte', '2023-04-15', '2023-06-22', 0, 1, 0, 0, 0, 'S', 'Evento disponibilizado no centro das maior cidade do mundo, vamos se aventurar dando uma volta pelos ares', 'img3.jpg'),
(10, 'Into to the Jungle', 'Campos de Jordão', '2023-04-15', '2023-07-15', 0, 1, 0, 5, 3, 'N', 'Vamos nos aventurar em trilha à dentro da Mantiqueira, conhecendo locais e historias memoráveis!!', 'img2.jpg'),
(11, 'Cultural', 'asdfsf', '2023-04-14', '2023-04-15', 1, 4, 2, 1, 0, 'N', 'sdfsadgsdg', 'pinacoteca.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `email_cliente` varchar(255) NOT NULL,
  `senha_cliente` varchar(50) NOT NULL,
  `end_cliente` varchar(255) NOT NULL,
  `uf_cliente` varchar(255) NOT NULL,
  `cidade_cliente` varchar(255) NOT NULL,
  `pais_cliente` varchar(255) NOT NULL,
  `personalidade_cliente` int(1) NOT NULL,
  `salario_cliente` varchar(255) NOT NULL,
  `gosto_cliente` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_cliente`
--

INSERT INTO `tbl_cliente` (`id_cliente`, `nome_cliente`, `email_cliente`, `senha_cliente`, `end_cliente`, `uf_cliente`, `cidade_cliente`, `pais_cliente`, `personalidade_cliente`, `salario_cliente`, `gosto_cliente`) VALUES
(1, 'Ana', 'ana@gmail.com', '1234', 'Avenida Aparecida', 'SP', 'Guaratinguetá', 'Brasil', 1, '1', 'Com familia'),
(2, 'Ana Flávia', 'ana12@gmail.com', '1234', 'Avenida Aparecida', 'PA', 'Guaratinguetá', 'Brasil', 2, '1', 'Com familia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_imagem`
--

CREATE TABLE `tbl_imagem` (
  `id_imagem` int(11) NOT NULL,
  `nome_img` varchar(255) COLLATE utf8_bin NOT NULL,
  `des_img` varchar(800) COLLATE utf8_bin NOT NULL,
  `file_img` longtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tbl_imagem`
--

INSERT INTO `tbl_imagem` (`id_imagem`, `nome_img`, `des_img`, `file_img`) VALUES
(4, 'Imagem2', 'DESCRIÇÃO', '2023-04-14 20:08:20'),
(5, 'imge', 'teste imagens', ''),
(6, 'aaa', 'asdasf', ''),
(7, 'Maria', 'marieta', 'img1.jpg'),
(8, 'Imagem2', 'gfdgsdf', 'Atividade1508.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_procura`
--

CREATE TABLE `tbl_procura` (
  `id_cliente` int(11) NOT NULL,
  `checkin_cliente` date NOT NULL,
  `checkout_cliente` date NOT NULL,
  `quarto_cliente` int(2) NOT NULL,
  `personalidade_cliente` int(2) NOT NULL,
  `experiencia_cliente` int(255) NOT NULL,
  `adulto_cliente` int(2) DEFAULT NULL,
  `crianca_cliente` int(2) DEFAULT NULL,
  `refeicao_cliente` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_procura`
--

INSERT INTO `tbl_procura` (`id_cliente`, `checkin_cliente`, `checkout_cliente`, `quarto_cliente`, `personalidade_cliente`, `experiencia_cliente`, `adulto_cliente`, `crianca_cliente`, `refeicao_cliente`) VALUES
(0, '2023-04-15', '2023-04-16', 1, 1, 0, 2, 0, 'S'),
(0, '2023-04-15', '2023-04-16', 1, 1, 0, 1, 2, 'S'),
(0, '0000-00-00', '0000-00-00', 0, 4, 0, 0, 0, 'S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personalidades_cliente`
--
ALTER TABLE `personalidades_cliente`
  ADD PRIMARY KEY (`id_personalidade`);

--
-- Indexes for table `tbl_cad_viagem`
--
ALTER TABLE `tbl_cad_viagem`
  ADD PRIMARY KEY (`id_viagem`);

--
-- Indexes for table `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `tbl_imagem`
--
ALTER TABLE `tbl_imagem`
  ADD PRIMARY KEY (`id_imagem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personalidades_cliente`
--
ALTER TABLE `personalidades_cliente`
  MODIFY `id_personalidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_cad_viagem`
--
ALTER TABLE `tbl_cad_viagem`
  MODIFY `id_viagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_imagem`
--
ALTER TABLE `tbl_imagem`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
