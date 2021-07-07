-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 29-Jun-2018 às 17:08
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6264501_pi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cod` int(11) UNSIGNED NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(300) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `endereco2` varchar(300) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `uf` varchar(45) NOT NULL,
  `cep` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cod`, `usuario`, `nome`, `email`, `senha`, `endereco`, `endereco2`, `pais`, `uf`, `cep`) VALUES
(7, 'vivi', 'Maria Victoria Camargo', 'vivi@gmail.com', 'MTIzNDU2', 'sad', 'sda', 'Brazil', 'São Paulo', '172000824'),
(8, 'carol', 'Carolina Freitas', 'carol@gmail.com', 'YWRtaW4xMjM=', 'rua luis dias', 'rua fernando modas', 'Brazil', 'São Paulo', '174003987'),
(9, 'carol1', 'Carolina camargo', 'carol@gmail.com1', 'MTIzNDU2', 'rua joão barbosa', 'rua luis motta', 'Brazil', 'São Paulo', '172000824'),
(10, 'admin', 'admin admin', 'admin@gmail.com', 'YWRtaW4xMjM=', 'rua joão barbosa', 'rua fernando modas', 'Brazil', 'São Paulo', '174003987'),
(11, 'vivi', 'Carolina Dias', 'vivi2@gmail.com', 'MTIzNDU2', 'rua luis dias', 'rua fernando modas', 'Brazil', 'São Paulo', '172000824');

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `newsletter`
--

INSERT INTO `newsletter` (`id`, `nome`, `email`, `telefone`) VALUES
(1, 'Carolina', 'vivi@gmail.com', '14997065500'),
(2, 'macarrão', 'maria.vik2222@gmail.com', '1497867618'),
(3, 'Mariana', 'mariana@gmail.com', '1497867618'),
(4, 'macaron', 'macaron@gmail.com', '1497867618');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `cod` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descritivo` varchar(300) NOT NULL,
  `img` text NOT NULL,
  `preco` double(10,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod`, `nome`, `descritivo`, `img`, `preco`) VALUES
(11, 'Guacamole', 'O guacamole é uma iguaria típica da culinária do México, servida com uma grande variedade de pratos e geralmente acompanhada com pico-de-gallo e nata azeda. ', 'https://mariavictoria-pi.000webhostapp.com/img/guacamole-certo.png', 20.00),
(13, 'Macarrão', 'Macarrão também conhecido como Alessandro, é um tipo de massa alimentícia com o formato de tubos curtos, em que se incluem os penne, ravioli e os cotovelos.', 'https://mariavictoria-pi.000webhostapp.com/img/macarrao001.png', 20.00),
(14, 'Macaron', 'Macaron é um pequeno bolo granulado e comumente produzido sob forma arredondada de 3 ou 5 cm de diâmetro, especialidade de Lorraine, na França. Não deve ser confundido com o massepain de Saint-Léonard-de-Noblat, em Limousin.', 'https://mariavictoria-pi.000webhostapp.com/img/macaron001.png', 25.00),
(15, 'Pizza', 'Pizza é uma preparação culinária que consiste em um disco de massa fermentada de farinha de trigo, coberto com molho de tomate e os ingredientes variados que normalmente incluem algum tipo de queijo.', 'https://mariavictoria-pi.000webhostapp.com/img/pizza001.png', 22.30),
(16, 'Taco', 'Taco é uma comida típica do México. Por causa da proximidade com os Estados Unidos, há diferenças entre as receitas dos dois países. O taco americano é diferente do taco mexicano original.', 'https://mariavictoria-pi.000webhostapp.com/img/taco0001.png', 25.00),
(18, 'Petit Gateau', 'Petit gâteau, é uma sobremesa composta de um pequeno bolo de chocolate com casca crocante e recheio cremoso servido geralmente acompanhado de sorvete.', 'https://mariavictoria-pi.000webhostapp.com/img/petigato.png', 25.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cod` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `cod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
