-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 04:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lelang`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `tahun_kendaraan` int(4) NOT NULL,
  `merek_kendaraan` varchar(100) NOT NULL,
  `model_kendaraan` varchar(100) NOT NULL,
  `transmisi_kendaraan` varchar(100) NOT NULL,
  `plat_no_kendaraan` varchar(100) NOT NULL,
  `nilai_kondisi_interior` int(100) NOT NULL,
  `nilai_kondisi_mesin` int(100) NOT NULL,
  `nilai_kondisi_exterior` int(100) NOT NULL,
  `harga_awal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `tahun_kendaraan`, `merek_kendaraan`, `model_kendaraan`, `transmisi_kendaraan`, `plat_no_kendaraan`, `nilai_kondisi_interior`, `nilai_kondisi_mesin`, `nilai_kondisi_exterior`, `harga_awal`) VALUES
(1, 2001, 'dadad', 'adadad', 'dasdada', 'dasdada', 12, 12, 12, 34),
(2, 2001, 'sadad', 'sad', 'automatic', '321', 23, 23, 21, 23),
(3, 2001, 'sadad', 'adadad', 'Automatic', 'adad', 23, 34, 32, 2000),
(4, 0, '', '', '', '', 0, 0, 0, 0),
(5, 231, 'safsfs', 'asdad', 'Manual', 'adada', 213, 32, 23, 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
