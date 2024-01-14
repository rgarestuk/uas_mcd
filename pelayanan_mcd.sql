-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 01:46 PM
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
-- Database: `db_mcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan_mcd`
--

CREATE TABLE `pelayanan_mcd` (
  `id` int(11) NOT NULL,
  `no` varchar(3) DEFAULT NULL,
  `waktu_kedatangan` time DEFAULT NULL,
  `selisih_kedatangan` varchar(2) DEFAULT NULL,
  `waktu_awal_pelayanan` time DEFAULT NULL,
  `selisih_pelayanan_kasir` varchar(2) DEFAULT NULL,
  `waktu_selesai` time DEFAULT NULL,
  `selisih_keluar_antrian` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelayanan_mcd`
--

INSERT INTO `pelayanan_mcd` (`id`, `no`, `waktu_kedatangan`, `selisih_kedatangan`, `waktu_awal_pelayanan`, `selisih_pelayanan_kasir`, `waktu_selesai`, `selisih_keluar_antrian`) VALUES
(1, NULL, '04:31:00', '0', '04:31:20', '1', '04:32:50', '0'),
(2, NULL, '16:32:00', '1', '16:32:00', '2', '16:34:00', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelayanan_mcd`
--
ALTER TABLE `pelayanan_mcd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelayanan_mcd`
--
ALTER TABLE `pelayanan_mcd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
