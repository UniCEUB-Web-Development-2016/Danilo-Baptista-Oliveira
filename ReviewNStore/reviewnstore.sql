-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2016 às 03:23
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
  `name` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `console` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `store` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`name`, `genre`, `console`, `date`, `store`, `price`, `review`) VALUES
('fallout', 'tpg', 'ps4', '2016-02-02', 'americanas.com', '20', 'massa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `review`
--

CREATE TABLE `review` (
  `name` varchar(50) NOT NULL,
  `text` varchar(1500) NOT NULL,
  `tips` varchar(200) NOT NULL,
  `videos` varchar(30) NOT NULL,
  `images` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `review`
--

INSERT INTO `review` (`name`, `text`, `tips`, `videos`, `images`) VALUES
('reviewManeiro', 'pruu', 'dunno', 'dasdsa', 'images.jpg'),
('reviewManeiro', 'pruu', 'dunno', 'dasdsa', 'images.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `phone`, `email`, `pass`) VALUES
(1, 'danilo', 'ruawhatever', '123213', 'danilo@gat.jk', 'fdasfadsf'),
(2, 'gato', 'sqn216', '32726098', 'danilo.neves21@outlook.com', 'gatoreade'),
(3, 'danilo', 'ruawhatever', '123213', 'danilo@gat.jk', 'fdasfadsf'),
(4, 'buu', 'ruawhatever', '123213', 'danilo@gat.jk', 'fdasfadsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
