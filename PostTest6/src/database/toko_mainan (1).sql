-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 10:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_mainan`
--

-- --------------------------------------------------------

--
-- Table structure for table `mainan`
--

CREATE TABLE `mainan` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `ALAMAT` varchar(50) NOT NULL,
  `JENIS_MAINAN` varchar(50) NOT NULL,
  `JUMLAH_MAINAN` int(21) NOT NULL,
  `NO_HP` varchar(12) NOT NULL,
  `GAMBAR_MAINAN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mainan`
--

INSERT INTO `mainan` (`ID`, `NAMA`, `ALAMAT`, `JENIS_MAINAN`, `JUMLAH_MAINAN`, `NO_HP`, `GAMBAR_MAINAN`) VALUES
(22, 'Tommy', 'Jl. Sempaja', 'Aquaman Endless Winter', 5, '081298765432', '2023-10-24.Tommy.mcfarlane.png'),
(25, 'Fadil', 'Jl. Gunung Lingai', 'Plum', 12, '081243562435', '2023-10-25.Fadil.superrobot.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mainan`
--
ALTER TABLE `mainan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mainan`
--
ALTER TABLE `mainan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
