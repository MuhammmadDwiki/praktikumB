-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 11:16 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

CREATE TABLE `regist` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regist`
--

INSERT INTO `regist` (`id`, `username`, `email`, `age`, `password`) VALUES
(1, 'bii', 'bii@gmail.com', 20, '$2y$10$uWEWSuiJ0I0gimv6w.ErAOwExvuYksp.6cdHPhFRK6CCJa7LBWBX6'),
(2, 'ocan', 'b@gmail.com', 19, '$2y$10$kp19AYIKUZMo7sFe6MePq.qPWiMUJFegdYGZlKEXJLzf4cDzO8xby'),
(3, 'ripai', 'bcd@gmail.com', 21, '$2y$10$8kMUWNzGy5NIxGkm/2sKVe.jhEwOsF2jZHvehLzlw0VIBF53NY1ha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mainan`
--
ALTER TABLE `mainan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `regist`
--
ALTER TABLE `regist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mainan`
--
ALTER TABLE `mainan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `regist`
--
ALTER TABLE `regist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
