-- phpMyAdmin SQL Dump
-- version 4.6.0-alpha1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 06 Mar 2018 la 18:10
-- Versiune server: 5.7.16-log
-- PHP Version: 7.0.4RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benkyou`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `profileimg`
--

CREATE TABLE `profileimg` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `profileimg`
--

INSERT INTO `profileimg` (`id`, `userid`, `status`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 0);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `first` varchar(10) NOT NULL,
  `last` varchar(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `user`
--

INSERT INTO `user` (`id`, `first`, `last`, `uid`, `pwd`, `email`) VALUES
(1, 'Ciaciru', 'Ana', 'Swen', 'parola', 'ciaciruanamaria@yahoo.com'),
(2, 'Popa', 'Mihai', 'mihai2001', 'a123', 'mihaipopa@yahoo.com'),
(3, 'Arsene', 'Andreea', 'adre', 'ceva', 'andreeaarsene@yahoo.com'),
(4, 'Raul', 'Birnoschi', 'warren', 'salut', 'raul@gmail.com'),
(5, 'Ana', 'Popa', 'anna', 'ma', 'anna@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profileimg`
--
ALTER TABLE `profileimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profileimg`
--
ALTER TABLE `profileimg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
