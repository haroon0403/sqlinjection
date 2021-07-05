-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 06:38 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqli`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '0',
  `author` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`) VALUES
(1, 'A Game of Thrones', 'George R. R. Martin'),
(2, 'A Clash of Kings', 'George R. R. Martin'),
(3, 'A Storm of Swords', 'George R. R. Martin'),
(4, 'A Feast for Crows', 'George R. R. Martin'),
(5, 'A Dance with Dragons', 'George R. R. Martin'),
(6, 'The Winds of Winter', 'George R. R. Martin'),
(7, 'A Dream of Spring', 'George R. R. Martin'),
(8, 'Software libero pensiero libero', 'Richard Stallman'),
(9, 'Perche'' sono vegetariana', 'Margherita hack'),
(10, 'I miei primi novant''anni laici e ribelli', 'Margherita hack'),
(11, 'A caccia dei misteri spaventosi del cielo', 'Margherita hack'),
(12, 'In piena liberta'' e consapevolezza', 'Margherita hack'),
(13, 'La mia vita in bicicletta', 'Margherita hack');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `pin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `pin`) VALUES
(110, 123456789),
(111, 432342198);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `release_year` varchar(100) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `main_character` varchar(100) DEFAULT NULL,
  `imdb` varchar(100) DEFAULT NULL,
  `tickets_stock` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `release_year`, `genre`, `main_character`, `imdb`, `tickets_stock`) VALUES
(1, 'G.I. Joe: Retaliation', '2013', 'action', 'Cobra Commander', 'tt1583421', 100),
(2, 'Iron Man', '2008', 'action', 'Tony Stark', 'tt0371746', 53),
(3, 'Man of Steel', '2013', 'action', 'Clark Kent', 'tt0770828', 78),
(4, 'Terminator Salvation', '2009', 'sci-fi', 'John Connor', 'tt0438488', 100),
(5, 'The Amazing Spider-Man', '2012', 'action', 'Peter Parker', 'tt0948470', 13),
(6, 'The Cabin in the Woods', '2011', 'horror', 'Some zombies', 'tt1259521', 666),
(7, 'The Dark Knight Rises', '2012', 'action', 'Bruce Wayne', 'tt1345836', 3),
(8, 'The Fast and the Furious', '2001', 'action', 'Brian O''Connor', 'tt0232500', 40),
(9, 'The Incredible Hulk', '2008', 'action', 'Bruce Banner', 'tt0800080', 23),
(10, 'World War Z', '2013', 'horror', 'Gerry Lane', 'tt0816711', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(0000000001, 'admin', 'pwd1'),
(0000000002, 'danilo', 'gasd12'),
(0000000003, 'filippo', 'postuy666'),
(0000000004, 'oreste', 'tmrchio82'),
(0000000005, 'luca', 'kd2jam'),
(0000000006, 'dario', '31lowrem'),
(0000000007, 'sebastiano', '4muniz4'),
(0000000008, 'antonio', 'ciuppi75'),
(0000000009, 'cristina', 'berfectqui2'),
(0000000010, 'jessica', 'ioryunzfrunz');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(4, 'haroon', 'khan@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2018-03-19 13:07:44'),
(5, 'haroon', 'khan@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2018-03-19 13:08:29'),
(6, 'zaid', 'zaid@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-03-19 13:10:16'),
(7, 'zaid', 'zaid@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-04-01 17:45:19'),
(8, 'rehman', 'rehman45@gmail.com', 'be48fa0602c227b4c030f1b558559e83', '2018-04-01 17:48:03'),
(9, 'haroon', 'dfhdf@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-04-10 16:51:18'),
(10, 'rahul', 'gfdgd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-04-10 17:00:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
