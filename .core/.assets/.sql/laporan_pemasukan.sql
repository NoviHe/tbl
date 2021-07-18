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
-- Table structure for table `laporan_pemasukan`
--

CREATE TABLE `laporan_pemasukan` (
  `no_resi` varchar(50) NOT NULL,
  `username_agen` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` int(50) NOT NULL,
  `kategori` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_pemasukan`
--

INSERT INTO `laporan_pemasukan` (`no_resi`, `username_agen`, `username`, `tanggal`, `jumlah`, `kategori`, `keterangan`) VALUES
('BTS-000001', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-05 18:29:43', 276000, '', 'BTS-000001'),
('BTS-000003', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-07 17:33:56', 250000, '', 'BTS-000003'),
('BTS-000004', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-07 17:51:00', 90000, '', 'BTS-000004'),
('BTS-000006', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 15:30:16', 773500, '', 'BTS-000006'),
('BTS-000007', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 15:39:37', 408000, '', 'BTS-000007'),
('BTS-000008', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 16:10:36', 65000, '', 'BTS-000008'),
('BTS-000009', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 16:18:18', 40000, '', 'BTS-000009'),
('BTS-000010', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 19:47:02', 2200000, '', 'BTS-000010'),
('BTS-000011', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-09 14:45:50', 528000, '', 'BTS-000011'),
('BTS-000012', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-09 14:59:13', 75000, '', 'BTS-000012'),
('BTS-000013', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-09 15:11:56', 170000, '', 'BTS-000013'),
('BTS-000014', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-09 15:19:24', 30000, '', 'BTS-000014'),
('BTS-000015', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 09:20:11', 137000, '', 'BTS-000015'),
('BTS-000016', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 11:02:05', 1800000, '', 'BTS-000016'),
('BTS-000017', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-10 14:06:13', 724000, '', 'BTS-000017'),
('BTS-000018', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-10 14:19:09', 1078000, '', 'BTS-000018'),
('BTS-000019', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 14:57:19', 200000, '', 'BTS-000019'),
('BTS-000021', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 17:57:34', 71000, '', 'BTS-000021'),
('BTS-000022', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 18:01:27', 142000, '', 'BTS-000022'),
('BTS-000023', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 18:05:46', 345600, '', 'BTS-000023'),
('BTS-000024', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-10 21:34:43', 3160000, '', 'BTS-000024'),
('BTS-000025', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-12 10:42:39', 2200000, '', 'BTS-000025'),
('BTS-000026', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 14:31:17', 40000, '', 'BTS-000026'),
('BTS-000027', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 14:47:19', 150000, '', 'BTS-000027'),
('BTS-000028', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 17:14:09', 2476000, '', 'BTS-000028'),
('BTS-000029', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 17:32:29', 30000, '', 'BTS-000029'),
('BTS-000030', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 20:30:46', 260000, '', 'BTS-000030'),
('BTS-000031', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 20:36:59', 164000, '', 'BTS-000031'),
('BTS-000032', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 21:11:22', 172500, '', 'BTS-000032'),
('BTS-000033', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 21:35:03', 1060000, '', 'BTS-000033'),
('BTS-000034', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 21:38:49', 40000, '', 'BTS-000034'),
('BTS-000035', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-13 14:25:49', 30000, '', 'BTS-000035'),
('BTS-000036', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 16:03:04', 33000, '', 'BTS-000036'),
('BTS-000038', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-13 16:11:19', 100000, '', 'BTS-000038'),
('BTS-000039', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 16:16:56', 67000, '', 'BTS-000039'),
('BTS-000041', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 18:22:36', 1500000, '', 'BTS-000041'),
('BTS-000043', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-14 09:03:04', 300000, '', 'BTS-000043'),
('BTS-000044', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 09:32:52', 160000, '', 'BTS-000044'),
('BTS-000045', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 12:04:02', 87500, '', 'BTS-000045'),
('BTS-000046', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 16:03:07', 52500, '', 'BTS-000046'),
('BTS-000047', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 16:31:18', 50000, '', 'BTS-000047'),
('BTS-000048', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 16:53:42', 150000, '', 'BTS-000048'),
('BTS-000049', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 19:19:26', 2580000, '', 'BTS-000049'),
('BTS-000050', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-14 21:29:07', 2000000, '', 'BTS-000050'),
('BTS-000051', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-15 16:10:10', 100000, '', 'BTS-000051'),
('BTS-000052', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 21:47:13', 100000, '', 'BTS-000052'),
('BTS-000053', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-15 09:46:55', 2200000, '', 'BTS-000053'),
('BTS-000054', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-15 13:30:51', 100000, '', 'BTS-000054'),
('BTS-000055', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-15 14:46:34', 70000, '', 'BTS-000055'),
('BTS-000056', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 12:00:13', 30000, '', 'BTS-000056'),
('BTS-000057', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 13:00:04', 17500, '', 'BTS-000057'),
('BTS-000058', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 13:04:35', 35000, '', 'BTS-000058'),
('BTS-000059', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 13:22:19', 400000, '', 'BTS-000059'),
('BTS-000060', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-16 17:40:27', 288000, '', 'BTS-000060'),
('BTS-000061', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-16 17:45:44', 342000, '', 'BTS-000061'),
('BTS-000062', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-16 19:35:13', 700000, '', 'BTS-000062'),
('BTS-000063', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-16 21:11:11', 1100000, '', 'BTS-000063'),
('BTS-000064', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 12:57:41', 1000000, '', 'BTS-000064'),
('BTS-000065', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 13:21:39', 50000, '', 'BTS-000065'),
('BTS-000066', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 13:24:05', 150000, '', 'BTS-000066'),
('BTS-000067', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 14:01:10', 342000, '', 'BTS-000067'),
('BTS-000068', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 14:12:24', 2200000, '', 'BTS-000068'),
('BTS-000069', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 14:26:50', 738500, '', 'BTS-000069'),
('BTS-000070', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 14:36:58', 52500, '', 'BTS-000070'),
('BTS-000071', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 16:09:11', 138000, '', 'BTS-000071'),
('BTS-000072', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 16:12:30', 153000, '', 'BTS-000072'),
('BTS-000073', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 16:15:00', 172000, '', 'BTS-000073'),
('BTS-000074', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 17:35:01', 20000, '', 'BTS-000074'),
('BTS-000075', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 12:18:08', 175000, '', 'BTS-000075'),
('BTS-000076', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 13:17:10', 70000, '', 'BTS-000076'),
('BTS-000077', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:33:06', 296000, '', 'BTS-000077'),
('BTS-000078', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:38:22', 248000, '', 'BTS-000078'),
('BTS-000079', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:43:47', 204000, '', 'BTS-000079'),
('BTS-000080', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:47:17', 228000, '', 'BTS-000080'),
('BTS-000081', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:58:34', 258000, '', 'BTS-000081'),
('BTS-000082', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:22:35', 48000, '', 'BTS-000082'),
('BTS-000083', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:29:05', 375000, '', 'BTS-000083'),
('BTS-000084', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:40:18', 96000, '', 'BTS-000084'),
('BTS-000085', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:45:09', 44000, '', 'BTS-000085'),
('BTS-000086', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:49:19', 70000, '', 'BTS-000086'),
('BTS-000087', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:57:04', 124000, '', 'BTS-000087'),
('BTS-000088', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 18:01:43', 128000, '', 'BTS-000088'),
('BTS-000089', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 19:02:55', 246400, '', 'BTS-000089'),
('BTS-000090', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 19:06:05', 367200, '', 'BTS-000090'),
('BTS-000091', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-20 11:18:59', 87500, '', 'BTS-000091'),
('BTS-000092', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-20 11:37:04', 950000, '', 'BTS-000092'),
('BTS-000093', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-20 13:42:58', 40000, '', 'BTS-000093'),
('BTS-000094', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-20 14:22:25', 1000000, '', 'BTS-000094'),
('BTS-000095', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-20 15:01:51', 600000, '', 'BTS-000095'),
('BTS-000096', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-20 16:24:04', 171000, '', 'BTS-000096'),
('BTS-000097', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-20 16:40:30', 65000, '', 'BTS-000097'),
('BTS-000098', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-21 11:49:54', 1290000, '', 'BTS-000098'),
('BTS-000099', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-22 09:45:38', 17500, '', 'BTS-000099'),
('BTS-000101', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-22 14:00:13', 450000, '', 'BTS-000101'),
('BTS-000102', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-22 15:48:36', 80000, '', 'BTS-000102'),
('BTS-000103', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-22 16:00:15', 120000, '', 'BTS-000103'),
('BTS-000104', 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-22 17:54:17', 225000, '', 'BTS-000104'),
('BTS-000105', 'SOLO-001', 'solo@bts-cargo.com', '2020-10-22 23:27:49', 1500000, '', 'BTS-000105'),
('BTS-000106', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 09:04:52', 850000, '', 'BTS-000106'),
('BTS-000107', 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-23 09:50:18', 225000, '', 'BTS-000107'),
('BTS-000108', 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-23 10:19:38', 225000, '', 'BTS-000108'),
('BTS-000109', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 11:47:23', 1078000, '', 'BTS-000109'),
('BTS-000110', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 14:28:42', 400000, '', 'BTS-000110'),
('BTS-000111', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 14:46:31', 420000, '', 'BTS-000111'),
('BTS-000112', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 15:12:20', 857500, '', 'BTS-000112'),
('BTS-000113', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 15:25:37', 110000, '', 'BTS-000113'),
('BTS-000114', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 15:29:17', 38000, '', 'BTS-000114'),
('BTS-000115', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 15:30:58', 46000, '', 'BTS-000115'),
('BTS-000116', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 15:33:45', 41000, '', 'BTS-000116'),
('BTS-000117', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-24 11:02:56', 450000, '', 'BTS-000117'),
('BTS-000118', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-24 13:32:50', 150000, '', 'BTS-000118'),
('BTS-000119', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-26 14:35:50', 642000, '', 'BTS-000119'),
('BTS-000120', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-26 14:38:58', 1500000, '', 'BTS-000120'),
('BTS-000121', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-26 14:57:21', 180000, '', 'BTS-000121'),
('BTS-000122', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-26 15:35:23', 1000000, '', 'BTS-000122'),
('BTS-000123', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-26 16:20:06', 160000, '', 'BTS-000123'),
('BTS-000124', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-27 12:53:00', 87500, '', 'BTS-000124'),
('BTS-000125', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-27 12:56:08', 420000, '', 'BTS-000125'),
('BTS-000126', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-27 15:48:24', 444000, '', 'BTS-000126'),
('BTS-000127', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 10:58:32', 66000, '', 'BTS-000127'),
('BTS-000128', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 13:17:11', 175000, '', 'BTS-000128'),
('BTS-000129', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-28 14:06:54', 264800, '', 'BTS-000129'),
('BTS-000130', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 14:35:42', 194000, '', 'BTS-000130'),
('BTS-000131', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-28 15:25:42', 75000, '', 'BTS-000131'),
('BTS-000132', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 16:22:37', 242000, '', 'BTS-000132'),
('BTS-000133', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 17:09:50', 120000, '', 'BTS-000133'),
('BTS-000134', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 18:09:31', 176000, '', 'BTS-000134'),
('BTS-000135', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-30 16:46:40', 77000, '', 'BTS-000135'),
('BTS-000136', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-30 16:49:55', 246000, '', 'BTS-000136'),
('DBT-000035', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 22:02:56', 1006000, '', 'Droping Kas Budiah Untuk Biaya Operasional '),
('DBT-000036', 'SOLO-001', 'solo@bts-cargo.com', '2020-10-16 12:34:38', 3000000, '', 'modal'),
('DBT-000037', 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-23 15:42:17', 1000000, '', 'Droping kas Surabaya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_pemasukan`
--
ALTER TABLE `laporan_pemasukan`
  ADD PRIMARY KEY (`no_resi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
