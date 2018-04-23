-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Apr 2018 la 18:50
-- Versiune server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licenta`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `city_details`
--

CREATE TABLE `city_details` (
  `id` int(11) NOT NULL,
  `details_section` varchar(50) NOT NULL,
  `destination_type` int(11) NOT NULL,
  `details_info` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `destinations`
--

CREATE TABLE `destinations` (
  `destination_id` tinyint(4) NOT NULL,
  `destination_name` varchar(50) NOT NULL,
  `destination_type` int(11) NOT NULL,
  `destination_time` int(11) NOT NULL,
  `destination_price` int(11) NOT NULL,
  `destination_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `destinations`
--

INSERT INTO `destinations` (`destination_id`, `destination_name`, `destination_type`, `destination_time`, `destination_price`, `destination_image`) VALUES
(1, 'Palatul parlamentului', 1, 60, 10, 'parlament.jpg'),
(2, 'Arcul de triumf', 1, 20, 10, 'arculDeTriumf.jpg'),
(3, 'Carul cu bere', 5, 90, 30, 'caruCuBere.jpg'),
(4, 'Parcul Kiseleff', 2, 90, 0, 'kiseleff.jpg'),
(5, 'Muzeul National de Arta Bucuresti', 4, 60, 7, 'muzeulDeArta.jpg'),
(6, 'Muzeul National de Istorie a Romaniei', 1, 40, 7, 'muzeulDeIstorie.jpg'),
(7, 'Parcul Cismigiu', 2, 60, 0, 'cismigiu.jpg'),
(9, 'AFI Cotroceni', 3, 60, 0, 'afi.jpg'),
(10, 'Promenada Mall Bucuresti', 3, 60, 0, 'promenada.jpg'),
(12, 'Muzeul de Arta Contemporana Bucuresti', 4, 60, 10, 'mnac.jpg'),
(13, 'Museum of Senses Bucuresti', 4, 60, 35, 'museulOfSenses.jpg'),
(14, 'Romanian Kitsch Museum', 4, 60, 35, 'romanianKitchMuseum.jpg'),
(15, 'Hanul lui Manuc', 5, 90, 40, 'hanulLuiManux.jpg'),
(16, 'The Artist Bucuresti', 5, 90, 40, 'theArtist.jpg'),
(18, 'Biserica Stavropoleos', 1, 20, 0, 'stavropoleos.jpg'),
(19, 'Grigore Antipa Museum of Natural History', 1, 60, 20, 'grigoreAntipa.jpg'),
(24, 'Parcul Carol I Bucuresti', 2, 60, 0, 'parculCarol.jpg'),
(28, 'Stadio Bucuresti', 5, 90, 35, 'stadio.jpg\r\n'),
(30, 'Trattoria Buongiorno Primaverii', 5, 90, 35, 'TrattoriaBuongiornoPrimaverii.jpg'),
(31, 'Muzeul Colectiilor de Arta Bucuresti', 4, 40, 10, 'muzeulColectionarilorDeArta.jpg'),
(33, 'Muzeul George Enescu Bucuresti', 1, 60, 15, 'muzeulGeorgeEnescu.jpg'),
(34, 'Palatul Cotroceni Bucuresti', 1, 90, 25, 'palatulCotroceni.jpg'),
(35, 'Gradina Icoanei', 2, 30, 0, 'gradinaIcoanei.jpg'),
(39, 'Unirea Shopping Center', 3, 60, 0, 'unirea.jpg'),
(41, 'Baneasa Shopping City', 3, 60, 0, 'baneasa.jpg'),
(45, 'Artmark Bucuresti', 4, 60, 30, 'artmark.jpg');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `detailed_destinations`
--

CREATE TABLE `detailed_destinations` (
  `id` int(11) NOT NULL,
  `first` int(11) NOT NULL,
  `second` int(11) NOT NULL,
  `third` int(11) NOT NULL,
  `fourth` int(11) NOT NULL,
  `fifth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `detailed_destinations`
--

INSERT INTO `detailed_destinations` (`id`, `first`, `second`, `third`, `fourth`, `fifth`) VALUES
(24, 9, 10, 4, 41, 7),
(25, 34, 19, 33, 1, 2),
(26, 7, 8, 4, 34, 19),
(27, 9, 10, 4, 41, 7),
(28, 9, 10, 39, 14, 13),
(29, 18, 6, 1, 2, 33),
(30, 7, 9, 4, 34, 19),
(31, 4, 7, 24, 14, 13),
(32, 4, 7, 24, 14, 13),
(33, 18, 6, 1, 15, 16),
(34, 10, 18, 41, 34, 19),
(35, 18, 5, 6, 14, 13),
(36, 4, 7, 24, 14, 13),
(37, 18, 6, 1, 15, 16);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `questionnare`
--

CREATE TABLE `questionnare` (
  `id` tinyint(4) NOT NULL,
  `qone` varchar(20) NOT NULL,
  `qtwo` varchar(20) NOT NULL,
  `qthree` varchar(20) NOT NULL,
  `qfour` varchar(20) NOT NULL,
  `qfive` varchar(20) NOT NULL,
  `qsix` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `questionnare`
--

INSERT INTO `questionnare` (`id`, `qone`, `qtwo`, `qthree`, `qfour`, `qfive`, `qsix`) VALUES
(18, 'art galleries', 'compass', 'hurry', 'walk', 'localFood', 'DRIVING'),
(19, 'art galleries', 'a lot of clothes', 'hurry', 'walk', 'localFood', 'DRIVING'),
(21, 'parks', 'tent', 'hurry', 'bus', 'localFood', 'DRIVING'),
(28, 'historical museums', 'tent', 'withoutHurry', 'bus', 'localFood', 'DRIVING'),
(29, 'shopping', 'a lot of clothes', 'unorganized', 'bus', 'experimentalFood', 'DRIVING'),
(31, 'parks', 'a lot of clothes', 'unorganized', 'walk', 'localFood', 'DRIVING'),
(32, 'art galleries', 'compass', 'unorganized', 'taxi', 'traditionalFood', 'DRIVING'),
(33, 'art galleries', 'a lot of clothes', 'unorganized', 'walk', 'traditionalFood', 'TRANSIT'),
(34, 'historical museums', 'a lot of clothes', 'organized', 'walk', 'localFood', 'DRIVING'),
(35, 'have a culinary expe', 'compass', 'organized', 'bus', 'experimentalFood', 'TRANSIT'),
(36, 'historical museums', 'a lot of clothes', 'withoutHurry', 'walk', 'localFood', 'TRANSIT'),
(37, 'art galleries', 'a lot of clothes', 'withoutHurry', 'bus', 'traditionalFood', 'TRANSIT'),
(38, 'have a culinary expe', 'books', 'withoutHurry', 'walk', 'traditionalFood', 'TRANSIT'),
(39, 'have a culinary expe', 'tent', 'hurry', 'taxi', 'experimentalFood', 'TRANSIT'),
(40, 'art galleries', 'compass', 'unorganized', 'walk', 'localFood', 'TRANSIT'),
(41, 'parks', 'compass', 'unorganized', 'walk', 'experimentalFood', 'DRIVING'),
(42, 'have a culinary expe', 'compass', 'withoutHurry', 'bus', 'experimentalFood', 'TRANSIT'),
(43, 'shopping', 'a lot of clothes', 'unorganized', 'bus', 'localFood', 'TRANSIT'),
(44, 'art galleries', 'books', 'withoutHurry', 'walk', 'traditionalFood', 'TRANSIT'),
(45, 'art galleries', 'compass', 'unorganized', 'walk', 'localFood', 'DRIVING'),
(46, 'historical museums', 'tent', 'unorganized', 'walk', 'localFood', 'DRIVING'),
(47, 'historical museums', 'tent', 'unorganized', 'walk', 'localFood', 'TRANSIT');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `transport_price`
--

CREATE TABLE `transport_price` (
  `id` tinyint(4) NOT NULL,
  `transport_subtype` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `transport_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `transport_price`
--

INSERT INTO `transport_price` (`id`, `transport_subtype`, `price`, `transport_type`) VALUES
(1, 'metro_2', 5, 'TRANSIT'),
(2, 'metro_day', 8, 'TRANSIT'),
(3, 'metro_10', 20, 'TRANSIT'),
(4, 'ratb_1', 1.3, 'TRANSIT'),
(5, 'ratb_day', 9.6, 'TRANSIT'),
(6, 'gas', 0.7, 'DRIVING');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `trips`
--

CREATE TABLE `trips` (
  `id` tinyint(4) NOT NULL,
  `typeOne` int(11) NOT NULL,
  `typeTwo` int(11) NOT NULL,
  `typeThree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `trips`
--

INSERT INTO `trips` (`id`, `typeOne`, `typeTwo`, `typeThree`) VALUES
(9, 1, 0, 0),
(10, 1, 3, 0),
(12, 2, 3, 0),
(13, 1, 2, 3),
(14, 3, 4, 0),
(15, 1, 0, 0),
(16, 5, 0, 0),
(17, 1, 3, 0),
(18, 3, 4, 0),
(19, 1, 5, 0),
(20, 1, 2, 3),
(21, 2, 4, 0),
(22, 2, 4, 0),
(23, 1, 5, 0),
(24, 1, 3, 0),
(25, 1, 4, 0),
(26, 2, 4, 0),
(27, 1, 5, 0),
(28, 1, 5, 0);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `trip_id` int(11) NOT NULL,
  `questionnare_id` tinyint(4) NOT NULL,
  `detailed_destinations_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trip_id`, `questionnare_id`, `detailed_destinations_id`) VALUES
(27, 'adam', 'adam@gmail.com', '1d7c2923c1684726dc23d2901c4d8157', 13, 32, 27),
(29, 'nou', 'nou@gmail.com', '8b75615d8a4116d8f385e51ed8c55329', 18, 37, 28),
(30, 'alex', 'alex@alex.com', '534b44a19bf18d20b71ecc4eb77c572f', 19, 38, 29),
(31, 'nora', 'nora@nora.com', '23f88ac14feead92f4fdf8e640507d3c', 20, 39, 30),
(32, 'anto', 'anto@gmail.com', '2c946c0178ec72aaefa54f786540d301', 21, 40, 31),
(33, 'dan', 'dan@gmail.com', '9180b4da3f0c7e80975fad685f7f134e', 22, 41, 32),
(35, 'alin', 'alin@gmail.com', '8df03bca3f48d310f74fe6092af08c95', 23, 42, 33),
(36, 'ion', 'ion@gmail.com', '31e6a7de72799d9cd2469a064d5f82bf', 24, 43, 34),
(37, 'ana', 'ana@gmail.com', '276b6c4692e78d4799c12ada515bc3e4', 25, 44, 35),
(38, 'gigel', 'gigel@gmail.com', 'e9e41adeddd1ae4e1af25354a4ebd051', 26, 45, 36),
(43, 'dana', 'dana@gmail.com', '21cb4e4be93c09542ffa73b2b5cb95ea', 28, 47, 37);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city_details`
--
ALTER TABLE `city_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`destination_id`);

--
-- Indexes for table `detailed_destinations`
--
ALTER TABLE `detailed_destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionnare`
--
ALTER TABLE `questionnare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_price`
--
ALTER TABLE `transport_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city_details`
--
ALTER TABLE `city_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `destination_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `detailed_destinations`
--
ALTER TABLE `detailed_destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `questionnare`
--
ALTER TABLE `questionnare`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `transport_price`
--
ALTER TABLE `transport_price`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
