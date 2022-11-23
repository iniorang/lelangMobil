-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 04:54 PM
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
  `status_kendaraan` varchar(10) NOT NULL,
  `harga_awal` int(100) NOT NULL,
  `file_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `tahun_kendaraan`, `merek_kendaraan`, `model_kendaraan`, `transmisi_kendaraan`, `plat_no_kendaraan`, `nilai_kondisi_interior`, `nilai_kondisi_mesin`, `nilai_kondisi_exterior`, `status_kendaraan`, `harga_awal`, `file_gambar`) VALUES
(35, 213, '132', 'sdf', 'Manual', '3424', 43, 43, 43, 'Garasi', 213122, 'file.JPG');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
