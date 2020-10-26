-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 05:40 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tes_bootcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_tb`
--

CREATE TABLE `book_tb` (
  `id` varchar(20) NOT NULL,
  `name` varchar(35) NOT NULL,
  `category_id` varchar(25) NOT NULL,
  `writer_id` varchar(20) NOT NULL,
  `publication_year` varchar(6) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_tb`
--

INSERT INTO `book_tb` (`id`, `name`, `category_id`, `writer_id`, `publication_year`, `img`) VALUES
('1001', 'Pemrograman Dasar PHP', '1001', '1201', '2018', ''),
('1002', 'Pemrograman Dasar Jacascript', '1002', '1202', '2017', '');

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

CREATE TABLE `category_tb` (
  `category_id` varchar(20) NOT NULL,
  `name_id` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tb`
--

INSERT INTO `category_tb` (`category_id`, `name_id`) VALUES
('1001', 'PHP'),
('1002', 'Javascript'),
('1003', 'Visual Basic'),
('1004', 'C++');

-- --------------------------------------------------------

--
-- Table structure for table `writer_tb`
--

CREATE TABLE `writer_tb` (
  `writer_id` varchar(20) NOT NULL,
  `writer_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writer_tb`
--

INSERT INTO `writer_tb` (`writer_id`, `writer_name`) VALUES
('1101', 'Ari'),
('1102', 'Wan'),
('1201', 'John'),
('1202', 'Heri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_tb`
--
ALTER TABLE `book_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `writer_id` (`writer_id`);

--
-- Indexes for table `category_tb`
--
ALTER TABLE `category_tb`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `writer_tb`
--
ALTER TABLE `writer_tb`
  ADD PRIMARY KEY (`writer_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_tb`
--
ALTER TABLE `book_tb`
  ADD CONSTRAINT `book_tb_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_tb` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_tb_ibfk_2` FOREIGN KEY (`writer_id`) REFERENCES `writer_tb` (`writer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
