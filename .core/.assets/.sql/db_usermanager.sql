-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 05:36 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bts`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_usermanager`
--

CREATE TABLE `db_usermanager` (
  `id` int(50) NOT NULL,
  `tipe_akun` varchar(50) NOT NULL,
  `username_agen` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `username_kurir` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` text NOT NULL,
  `no_telp` text NOT NULL,
  `kota` text NOT NULL,
  `alamat` text NOT NULL,
  `terdaftar_sejak` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_usermanager`
--

INSERT INTO `db_usermanager` (`id`, `tipe_akun`, `username_agen`, `username`, `username_kurir`, `password`, `nama`, `no_telp`, `kota`, `alamat`, `terdaftar_sejak`) VALUES
(1, 'owner', '', 'owner@bts-cargo.com', '', 'e0a9f54f27149b5e4a342687fa36b7c2', '', '', '', '', '2020-10-31 18:17:37'),
(2, 'admin', '', 'admin', '', 'e0a9f54f27149b5e4a342687fa36b7c2', '', '', '', '', '2020-01-01 00:00:00'),
(3, 'agen', '', 'BDG-001', '', '1953061d05f85155f2e613a4148aed3c', '', '022-2056-5695', 'BANDUNG', 'Jl. Pagarsih, Ruko Plaza Pagarsih Blok 1<br>\r\n17-18, Kota Bandung, Jawa Barat.<br>\r\nIndonesia - 40231', '2020-10-31 19:06:57'),
(4, 'agen', '', 'JAK-001', '', '9c88e44f8b3339b44471e09eb96ffbc9', '', '021-2206-8933 / 0813-9444-1833', 'JAKARTA', 'Jl. KH Moh Mansyur, No. 45<br>\r\nJembatan Lima<br>\r\nJakarta Barat, Indonesia.', '2020-10-31 19:07:57'),
(5, 'agen', '', 'SOLO-001', '', '6fd16961e1530517ea1e7228bc217ce0', '', '0812-2821-1076 / 0821-1808-3044', 'SOLO', 'Jl. Raya Solo, Purwodadi<br>\r\nGondangrejo (Belakang Apotek Kaliyoso)<br>\r\nSolo, Indonesia.', '2020-10-31 19:08:08'),
(6, 'agen', '', 'SRBY-001', '', 'f50e9310a8b50e1546829d56ebdda6fe', '', '031-9902-1844', 'SURABAYA', 'Ruko Semut Indah, Blok B20<br>\r\nJalan Semut Kali, Surabaya<br>\r\nJawa Timur, Indonesia.', '2020-10-31 19:08:27'),
(7, 'finance', 'BDG-001', 'finance.bdg@bts-cargo.com', '', '1953061d05f85155f2e613a4148aed3c', '', '', '', '', '2020-10-31 19:29:50'),
(8, 'finance', 'JAK-001', 'finance.jkt@bts-cargo.com', '', '9c88e44f8b3339b44471e09eb96ffbc9', '', '', '', '', '2020-10-31 19:33:34'),
(9, 'finance', 'SOLO-001', 'finance.solo@bts-cargo.com', '', '6fd16961e1530517ea1e7228bc217ce0', '', '', '', '', '2020-10-31 19:33:50'),
(10, 'finance', 'SRBY-001', 'finance.srby@bts-cargo.com', '', 'f50e9310a8b50e1546829d56ebdda6fe', '', '', '', '', '2020-10-31 19:34:02'),
(13, 'staf_karyawan', 'BDG-001', 'staf_karyawan.bdg@bts-cargo.com', '', '1953061d05f85155f2e613a4148aed3c', 'Staf Karyawan Bandung', '', '', '', '2020-10-31 20:00:27'),
(14, 'staf_karyawan', 'JAK-001', 'staf_karyawan.jkt@bts-cargo.com', '', '9c88e44f8b3339b44471e09eb96ffbc9', 'Staf Karyawan Jakarta', '', '', '', '2020-10-31 20:00:48'),
(15, 'kurir', 'BDG-001', 'kurir.bdg@bts-cargo.com', 'kurir.bdg@bts-cargo.com', '1953061d05f85155f2e613a4148aed3c', 'Kurir Bandung', '', '', '', '2020-10-31 22:01:10'),
(16, 'kurir', 'JAK-001', 'kurir.jkt@bts-cargo.com', 'kurir.jkt@bts-cargo.com', '9c88e44f8b3339b44471e09eb96ffbc9', 'Kurir Jakarta', '', '', '', '2020-10-31 22:01:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_usermanager`
--
ALTER TABLE `db_usermanager`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_usermanager`
--
ALTER TABLE `db_usermanager`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
