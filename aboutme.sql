-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 01:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybio`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutme`
--

CREATE TABLE `aboutme` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `desc2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutme`
--

INSERT INTO `aboutme` (`id`, `name`, `desc`, `desc2`) VALUES
(1, 'Muhammad Insan Fadilah', 'Mahasiswa | Teknik Informatika', 'Saya Muhammad Insan Fadilah. Mahasiswa Dari Universitas Muhammadiyah Kota Sukabumi Program Studi S1Teknik Informatika. Keahlian saya di bidang programming dan IT. Saya terampil dalam membuat web design. Dengan rasa ingin tahu yang kuat, saya suka mempelajari hal baru, khususnya tentang IT dan bahasa programming.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutme`
--
ALTER TABLE `aboutme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutme`
--
ALTER TABLE `aboutme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
