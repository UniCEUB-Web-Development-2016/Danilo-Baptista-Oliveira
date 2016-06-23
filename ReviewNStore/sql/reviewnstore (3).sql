-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jun-2016 às 18:07
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

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
('MetroidPrime', 'Plataforma', 'GC', '2005-09-09', 'www.americanas.com', '180', 'MelhorjogoMetroid', 0x494d475f303236312e4a5047, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `review`
--

CREATE TABLE `review` (
  `reviewname` varchar(50) NOT NULL,
  `text` varchar(1500) NOT NULL,
  `tips` varchar(200) NOT NULL,
  `videos` varchar(200) NOT NULL,
  `images` varchar(20) NOT NULL,
  `id_Review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `review`
--

INSERT INTO `review` (`reviewname`, `text`, `tips`, `videos`, `images`, `id_Review`) VALUES
('Review', 'reviewjogo', 'Nenhuma', 'TaticaDF', 'image.jpg', 3),
('ReviewGOW', 'OjogoÃ©mtobom', 'nenhuma', 'taticaGOW', 'imagem.jpg', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `first_name`, `address`, `phone`, `email`, `pass`) VALUES
(121, 'Danilo', 'sqn214', '32726098', 'accountultra@hotmail.com', 'Danilo18'),
(122, 'Caio', 'RuaDasPalmeir', '32678901', 'caio@hotmail.com', 'hul'),
(124, 'Negresco', 'RuaPalmares', '32678909', 'palmares@hotmail.com', 'Mario'),
(125, 'Adriano', 'RuaConsolata', '33567898', 'adriano@msn.com', 'Adriano10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_Review`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `first_name` (`first_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_Review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
