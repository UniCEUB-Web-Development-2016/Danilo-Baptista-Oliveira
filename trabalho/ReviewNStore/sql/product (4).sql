-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jun-2016 às 22:02
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reviewnstore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `first_name` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `console` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `store` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL,
  `images` blob NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`first_name`, `genre`, `console`, `date`, `store`, `price`, `review`, `images`, `id_product`) VALUES
('MegaManX', 'Plataforma', 'snes', '1993-09-02', 'americanas.com', '250', 'Exclente', 0x494d475f303136382e4a5047, 8),
('MetroidPrime', 'Plataforma', 'GC', '2005-09-09', 'www.americanas.com', '180', 'MelhorjogoMetroid', 0x494d475f303236312e4a5047, 9),
('MetalGearSolid', 'RPG', 'ps3', '2016-06-21', 'americanas.com', 'nenhum', 'mtobom', 0x616d65726963616e61732e636f6d2e706e67, 10),
('SuperMarioWorld', 'Plataforma', 'SNES', '1994-06-05', 'NENHUMA', '250', 'bom', 0x494d475f303239342e4a5047, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
