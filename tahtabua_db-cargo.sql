-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Jul 2021 pada 14.28
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tblcargo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_login`
--

CREATE TABLE `data_login` (
  `id` int(50) NOT NULL,
  `judul_informasi` text NOT NULL,
  `informasi_login` text NOT NULL,
  `tagline_login_footer` text NOT NULL,
  `logo_login` text NOT NULL,
  `bg_login` text NOT NULL,
  `bg_color` text NOT NULL,
  `color_copyright` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_login`
--

INSERT INTO `data_login` (`id`, `judul_informasi`, `informasi_login`, `tagline_login_footer`, `logo_login`, `bg_login`, `bg_color`, `color_copyright`) VALUES
(1, 'Infomasi', 'Some description text here...', 'Copyright &copy; 2021 - Tahta Buana Logistic', 'logo-tbl-white.png', 'bg.png', '#ebebec', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_resi`
--

CREATE TABLE `data_resi` (
  `id` int(50) NOT NULL,
  `dari` text NOT NULL,
  `tujuan` text NOT NULL,
  `harga` int(50) NOT NULL,
  `estimasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_resi`
--

INSERT INTO `data_resi` (`id`, `dari`, `tujuan`, `harga`, `estimasi`) VALUES
(1, 'BANDUNG', 'JAKARTA', 2500, '1-2 Hari'),
(2, 'BANDUNG', 'BOGOR', 3000, '1-2 Hari'),
(3, 'BANDUNG', 'DEPOK', 3000, '1-2 Hari'),
(4, 'BANDUNG', 'TANGERANG', 3000, '1-2 Hari'),
(5, 'BANDUNG', 'BEKASI', 3000, '1-2 Hari'),
(6, 'BANDUNG', 'ACEH', 17500, '7-9 Hari'),
(7, 'BANDUNG', 'MEDAN', 10000, '6-7 Hari'),
(8, 'BANDUNG', 'PADANG', 10000, '6-7 Hari'),
(9, 'BANDUNG', 'DUMAI', 15000, '7-10 Hari'),
(10, 'BANDUNG', 'PEKANBARU', 10000, '6-8 Hari'),
(11, 'BANDUNG', 'JAMBI', 9000, '5-7 Hari'),
(12, 'BANDUNG', 'PALEMBANG', 8500, '3-5 Hari'),
(13, 'BANDUNG', 'PRABUWULIH', 14500, '5-7 Hari'),
(14, 'BANDUNG', 'BENGKULU', 9000, '5-7 Hari'),
(15, 'BANDUNG', 'BANDAR LAMPUNG', 6500, '2-3 Hari'),
(16, 'BANDUNG', 'METRO', 8500, '3-5Hari'),
(17, 'BANDUNG', 'BANGKA BELITUNG', 13000, '7-10 Hari'),
(18, 'BANDUNG', 'PANGKAL PINANG', 9500, '6-8 Hari'),
(19, 'BANDUNG', 'BATAM', 13500, '7-10 Hari'),
(20, 'BANDUNG', 'SUBANG', 3000, '2-3 Hari'),
(21, 'BANDUNG', 'SUKABUMI', 4000, '2-3 Hari'),
(22, 'BANDUNG', 'CIAMIS', 6500, '2-3 Hari'),
(23, 'BANDUNG', 'TASIK MALAYA', 4500, '2-3 Hari'),
(24, 'BANDUNG', 'GARUT', 4000, '2-3 Hari'),
(25, 'BANDUNG', 'SURABAYA', 4000, '1-2 Hari'),
(26, 'BANDUNG', 'YOGYAKARTA', 3500, '1-2 Hari'),
(27, 'BANDUNG', 'SOLO', 3500, '1-2 Hari'),
(28, 'BANDUNG', 'SEMARANG', 3500, '1-2 Hari'),
(29, 'BANDUNG', 'CILEGON', 5000, '2-3 Hari'),
(30, 'BANDUNG', 'SERANG', 5000, '2-3 Hari'),
(31, 'BANDUNG', 'DENPASAR', 7000, '5-6 Hari'),
(32, 'BANDUNG', 'BIMA', 11000, '7-8 Hari'),
(33, 'BANDUNG', 'MATARAM', 8000, '7-8 Hari'),
(34, 'BANDUNG', 'KUPANG', 14000, '10-15 Hari'),
(35, 'BANDUNG', 'PONTIANAK', 9500, '5-7  Hari'),
(36, 'BANDUNG', 'PALANGKARAYA', 13000, '8-12 Hari'),
(37, 'BANDUNG', 'BANJARMASIN', 8000, '6-8  Hari'),
(38, 'BANDUNG', 'TABALONG', 16000, '6-8  Hari'),
(39, 'BANDUNG', 'BALIKPAPAN', 9000, '7-9  Hari'),
(40, 'BANDUNG', 'KUTAI KARTANEGARA', 19000, '8-12 Hari'),
(41, 'BANDUNG', 'TARAKAN', 21500, '10-15 Hari'),
(42, 'BANDUNG', 'MANADO', 16000, '10-15 Hari'),
(43, 'BANDUNG', 'PALU', 15000, '10-15 Hari'),
(44, 'BANDUNG', 'MAKASAR', 9000, '7-10 Hari'),
(45, 'BANDUNG', 'KEDARI', 15000, '10-15 Hari'),
(46, 'BANDUNG', 'GORONTALO', 17000, '10-15 Hari'),
(48, 'BANDUNG', 'AMBON', 17000, '12-15 Hari'),
(49, 'BANDUNG', 'TERNATE', 18000, '12-15 Hari'),
(50, 'BANDUNG', 'JAYAPURA', 23000, '12-15 Hari'),
(51, 'BANDUNG', 'MANOKWARI', 25500, '15-20 Hari'),
(52, 'BANDUNG', 'SORONG', 23000, '15-20 Hari'),
(53, 'JAKARTA', 'BANDUNG', 4000, '1-2 Hari'),
(54, 'JAKARTA', 'KAB.BANDUNG', 4500, '1-2 Hari'),
(55, 'JAKARTA', 'ACEH', 17500, '7-9 Hari'),
(56, 'JAKARTA', 'MEDAN', 10000, '6-7 Hari'),
(57, 'JAKARTA', 'PADANG', 10000, '6-7 Hari'),
(58, 'JAKARTA', 'DUMAI', 15000, '7-10 Hari'),
(59, 'JAKARTA', 'PEKANBARU', 10000, '6-8  Hari'),
(60, 'JAKARTA', 'JAMBI', 9000, '5-7  Hari'),
(61, 'JAKARTA', 'PALEMBANG', 8500, '3-5  Hari'),
(62, 'JAKARTA', 'PRABUWULIH', 14500, '5-7  Hari'),
(63, 'JAKARTA', 'BENGKULU', 9000, '5-7  Hari'),
(64, 'JAKARTA', 'BANDAR LAMPUNG', 6500, '2-3  Hari'),
(65, 'JAKARTA', 'METRO', 8500, '3-5  Hari'),
(66, 'JAKARTA', 'BANGKA BELITUNG', 13000, '7-10 Hari'),
(67, 'JAKARTA', 'PANGKAL PINANG', 9500, '6-8 Hari'),
(68, 'JAKARTA', 'BATAM', 13500, '7-10 Hari'),
(69, 'JAKARTA', 'CIAMIS', 6500, '2-3 Hari'),
(70, 'JAKARTA', 'TASIK MALAYA', 4500, '2-3 Hari'),
(71, 'JAKARTA', 'GARUT', 4000, '2-3 Hari'),
(72, 'JAKARTA', 'YOGYAKARTA', 3500, '1-2 Hari'),
(73, 'JAKARTA', 'SURABAYA', 4000, '1-2 Hari'),
(74, 'JAKARTA', 'SEMARANG', 3500, '1-2 Hari'),
(75, 'JAKARTA', 'CILEGON', 5000, '2-3 Hari'),
(76, 'JAKARTA', 'SERANG', 5000, '2-3 Hari'),
(77, 'JAKARTA', 'DENPASAR', 7000, '5-6 Hari'),
(78, 'JAKARTA', 'BIMA', 11000, '7-8 Hari'),
(79, 'JAKARTA', 'MATARAM', 8000, '7-8 Hari'),
(80, 'JAKARTA', 'KUPANG', 14000, '10-15 Hari'),
(81, 'JAKARTA', 'PONTIANAK', 9500, '5-7  Hari'),
(82, 'JAKARTA', 'PALANGKARAYA', 13000, '8-12 Hari'),
(83, 'JAKARTA', 'BANJARMASIN', 8000, '6-8  Hari'),
(84, 'JAKARTA', 'TABALONG', 16000, '6-8  Hari'),
(85, 'JAKARTA', 'BALIKPAPAN', 9000, '7-9  Hari'),
(86, 'JAKARTA', 'KUTAI KARTANEGARA', 19000, '8-12 Hari'),
(87, 'JAKARTA', 'TARAKAN', 21500, '10-15 Hari'),
(88, 'JAKARTA', 'MANADO', 16000, '10-15 Hari'),
(89, 'JAKARTA', 'PALU', 15000, '10-15 Hari'),
(90, 'JAKARTA', 'MAKASSAR', 9000, '7-10 Hari'),
(91, 'JAKARTA', 'KEDARI', 15000, '10-15 Hari'),
(92, 'JAKARTA', 'GORONTALO', 17000, '10-15 Hari'),
(93, 'JAKARTA', 'MAMUU', 14500, '7-10 Hari'),
(94, 'JAKARTA', 'AMBON', 17000, '12-15 Hari'),
(95, 'JAKARTA', 'TERNATE', 18000, '12-15 Hari'),
(96, 'JAKARTA', 'JAYAPURA', 23000, '12-15 Hari'),
(97, 'JAKARTA', 'MANOKWARI', 25500, '15-20 Hari'),
(98, 'JAKARTA', 'SORONG', 23000, '15-20 Hari'),
(99, 'SOLO', 'JAKARTA', 5000, '1-2 Hari'),
(100, 'SOLO', 'BOGOR', 5000, '1-2 Hari'),
(101, 'SOLO', 'DEPOK', 5000, '1-2 Hari'),
(102, 'SOLO', 'TANGGERANG', 5000, '1-2 Hari'),
(103, 'SOLO', 'BEKASI', 5000, '1-2 Hari'),
(104, 'SOLO', 'ACEH', 17500, '7-9 Hari'),
(105, 'SOLO', 'MEDAN', 10000, '6-7 Hari'),
(106, 'SOLO', 'PADANG', 10000, '6-7 Hari'),
(107, 'SOLO', 'DUMAI', 15000, '7-10 Hari'),
(108, 'SOLO', 'PEKANBARU', 10000, '6-8  Hari'),
(109, 'SOLO', 'JAMBI', 9000, '5-7  Hari'),
(110, 'SOLO', 'PALEMBANG', 8500, '3-5  Hari'),
(111, 'SOLO', 'PRABUWULIH', 14500, '5-7  Hari'),
(112, 'SOLO', 'BENGKULU', 9000, '5-7  Hari'),
(113, 'SOLO', 'BANDAR LAMPUNG', 6500, '2-3  Hari'),
(114, 'SOLO', 'METRO', 8500, '3-5  Hari'),
(115, 'SOLO', 'BANGKA BELITUNG', 13000, '7-10 Hari'),
(116, 'SOLO', 'PANGKAL PINANG', 9500, '6-8 Hari'),
(117, 'SOLO', 'BATAM', 13500, '7-10 Hari'),
(118, 'SOLO', 'CIAMIS', 6500, '2-3 Hari'),
(119, 'SOLO', 'TASIK MALAYA', 4500, '2-3 Hari'),
(120, 'SOLO', 'GARUT', 4000, '2-3 Hari'),
(121, 'SOLO', 'BANDUNG', 4000, '1-2 Hari'),
(122, 'SOLO', 'YOGYAKARTA', 2000, '1-2 Hari'),
(123, 'SOLO', 'SURABAYA', 4000, '1-2 Hari'),
(124, 'SOLO', 'SEMARANG', 3500, '1-2 Hari'),
(125, 'SOLO', 'CILEGON', 5000, '2-3 Hari'),
(126, 'SOLO', 'SERANG', 5000, '2-3 Hari'),
(127, 'SOLO', 'DENPASAR', 7000, '5-6 Hari'),
(128, 'SOLO', 'BIMA', 11000, '7-8 Hari'),
(129, 'SOLO', 'MATARAM', 8000, '7-8 Hari'),
(130, 'SOLO', 'KUPANG', 14000, '10-15 Hari'),
(131, 'SOLO', 'PONTIANAK', 9500, '5-7  Hari'),
(132, 'SOLO', 'PALANGKARAYA', 13000, '8-12 Hari'),
(133, 'SOLO', 'BANJARMASIN', 8000, '6-8  Hari'),
(134, 'SOLO', 'TABALONG', 16000, '6-8  Hari'),
(135, 'SOLO', 'BALIKPAPAN', 9000, '7-9  Hari'),
(136, 'SOLO', 'KUTAI KARTANEGARA', 19000, '8-12 Hari'),
(137, 'SOLO', 'TARAKAN', 21500, '10-15 Hari'),
(138, 'SOLO', 'MANADO', 16000, '10-15 Hari'),
(139, 'SOLO', 'PALU', 15000, '10-15 Hari'),
(140, 'SOLO', 'MAKASAR', 9000, '7-10 Hari'),
(141, 'SOLO', 'KEDARI', 15000, '10-15 Hari'),
(142, 'SOLO', 'GORONTALO', 17000, '10-15 Hari'),
(143, 'SOLO', 'MAMUJU', 14500, '7-10 Hari'),
(144, 'SOLO', 'AMBON', 17000, '12-15 Hari'),
(145, 'SOLO', 'TERNATE', 18000, '12-15 Hari'),
(146, 'SOLO', 'JAYAPURA', 23000, '12-15 Hari'),
(147, 'SOLO', 'MANOKWARI', 25500, '15-20 Hari'),
(148, 'SOLO', 'SORONG', 23000, '15-20 Hari'),
(149, 'SOLO', 'KAB.BANDUNG', 4500, '15-20 Hari'),
(150, 'SURABAYA', 'JAKARTA', 5000, '1-2 Hari'),
(151, 'SURABAYA', 'BOGOR', 5000, '1-2 Hari'),
(152, 'SURABAYA', 'DEPOK', 5000, '1-2 Hari'),
(153, 'SURABAYA', 'TANGGERANG', 5000, '1-2 Hari'),
(154, 'SURABAYA', 'BEKASI', 5000, '1-2 Hari'),
(155, 'SURABAYA', 'ACEH', 17500, '7-9 Hari'),
(156, 'SURABAYA', 'MEDAN', 10000, '6-7 Hari'),
(157, 'SURABAYA', 'PADANG', 10000, '6-7 Hari'),
(158, 'SURABAYA', 'DUMAI', 15000, '7-10 Hari'),
(159, 'SURABAYA', 'PEKANBARU', 10000, '6-8  Hari'),
(160, 'SURABAYA', 'JAMBI', 9000, '5-7  Hari'),
(161, 'SURABAYA', 'PALEMBANG', 8500, '3-5  Hari'),
(162, 'SURABAYA', 'PRABUWULIH', 14500, '5-7  Hari'),
(163, 'SURABAYA', 'BENGKULU', 9000, '5-7  Hari'),
(164, 'SURABAYA', 'BANDAR LAMPUNG', 6500, '2-3  Hari'),
(165, 'SURABAYA', 'METRO', 8500, '3-5  Hari'),
(166, 'SURABAYA', 'BANGKA BELITUNG', 13000, '7-10 Hari'),
(167, 'SURABAYA', 'PANGKAL PINANG', 9500, '6-8 Hari'),
(168, 'SURABAYA', 'BATAM', 13500, '7-10 Hari'),
(169, 'SURABAYA', 'CIAMIS', 6500, '2-3 Hari'),
(170, 'SURABAYA', 'TASIK MALAYA', 4500, '2-3 Hari'),
(171, 'SURABAYA', 'GARUT', 4000, '2-3 Hari'),
(172, 'SURABAYA', 'BANDUNG', 4000, '1-2 Hari'),
(173, 'SURABAYA', 'YOGYAKARTA', 3500, '1-2 Hari'),
(174, 'SURABAYA', 'SOLO', 3500, '1-2 Hari'),
(175, 'SURABAYA', 'SEMARANG', 3500, '1-2 Hari'),
(176, 'SURABAYA', 'CILEGON', 5000, '2-3 Hari'),
(177, 'SURABAYA', 'SERANG', 5000, '2-3 Hari'),
(178, 'SURABAYA', 'DENPASAR', 7000, '5-6 Hari'),
(179, 'SURABAYA', 'BIMA', 11000, '7-8 Hari'),
(180, 'SURABAYA', 'MATARAM', 8000, '7-8 Hari'),
(181, 'SURABAYA', 'KUPANG', 14000, '10-15 Hari'),
(182, 'SURABAYA', 'PONTIANAK', 9500, '5-7  Hari'),
(183, 'SURABAYA', 'PALANGKARAYA', 13000, '8-12 Hari'),
(184, 'SURABAYA', 'BANJARMASIN', 8000, '6-8  Hari'),
(185, 'SURABAYA', 'TABALONG', 16000, '6-8  Hari'),
(186, 'SURABAYA', 'BALIKPAPAN', 9000, '7-9  Hari'),
(187, 'SURABAYA', 'KUTAI KARTANEGARA', 19000, '8-12 Hari'),
(188, 'SURABAYA', 'TARAKAN', 21500, '10-15 Hari'),
(189, 'SURABAYA', 'MANADO', 16000, '10-15 Hari'),
(190, 'SURABAYA', 'PALU', 15000, '10-15 Hari'),
(191, 'SURABAYA', 'MAKASSAR', 9000, '7-10 Hari'),
(192, 'SURABAYA', 'KEDARI', 15000, '10-15 Hari'),
(193, 'SURABAYA', 'GORONTALO', 17000, '10-15 Hari'),
(194, 'SURABAYA', 'MAMUJU', 14500, '7-10 Hari'),
(195, 'SURABAYA', 'AMBON', 17000, '12-15 Hari'),
(196, 'SURABAYA', 'TERNATE', 18000, '12-15 Hari'),
(197, 'SURABAYA', 'JAYAPURA', 23000, '12-15 Hari'),
(198, 'SURABAYA', 'MANOKWARI', 25500, '15-20 Hari'),
(199, 'SURABAYA', 'SORONG', 23000, '15-20 Hari'),
(200, 'SURABAYA', 'KAB.BANDUNG', 4500, '2-3 Hari'),
(204, 'BANDUNG', 'BANDUNG', 500, '1-2 HARI'),
(205, 'bandung', 'PROBOLINGGO', 3500, '3-4 hari '),
(206, 'Jakarta', 'MALANG', 5000, '2-3 hari'),
(207, 'BANDUNG', 'LAMONGAN', 4000, '3-4 hari'),
(208, 'Jakarta', 'MOJOKERTO', 3500, '4-5 hari '),
(209, 'Jakarta', 'TANGGERANG', 2500, '1-2 hari'),
(210, 'Jakarta', 'DEPOK', 2500, '1-2 hari'),
(211, 'Jakarta', 'BOGOR', 4000, '1-2 hari'),
(212, 'Jakarta', 'KEBUMEN ', 4000, '2-3 hari'),
(213, 'Jakarta', 'KEDIRI', 4000, '2-3 hari'),
(214, 'Jakarta', 'BANTUL ', 6000, '2-3 hari'),
(215, 'jakarta ', 'CIMAHI', 3000, '1-2 hari'),
(217, 'BANDUNG', 'LOMBOK', 8000, ''),
(218, 'SURABAYA', 'PROBOLINGGO', 2000, ''),
(219, 'BANDUNG', 'PURWAKARTA', 2500, ''),
(220, 'BANDUNG', 'MALUKU', 25000, ''),
(221, 'JAKARTA', 'PURWOKERTO', 5000, ''),
(222, 'JAKARTA', 'SALATIGA', 5000, ''),
(223, 'BANDUNG', 'PURWOREJO', 4500, ''),
(224, 'BANDUNG', 'KEBUMEN', 4000, ''),
(225, 'BANDUNG', 'MAGETAN', 5000, ''),
(226, 'BANDUNG', 'GENTENG BANYUWANGI', 9000, ''),
(227, 'BANDUNG', 'SEPANJANG SIDOARJO', 4000, ''),
(228, 'BANDUNG', 'TULUNGAGUNG', 6500, ''),
(229, 'BANDUNG', 'PONOROGO', 6000, ''),
(230, 'BANDUNG', 'BONDOWOSO', 8000, ''),
(231, 'BANDUNG', 'LUMAJANG', 6000, ''),
(232, 'BANDUNG', 'SUMENEP', 9500, ''),
(233, 'BANDUNG', 'PAMEKASAN', 9000, ''),
(234, 'BANDUNG', 'TUBAN', 7500, ''),
(235, 'BANDUNG', 'BAU-BAU SULTENG', 23000, ''),
(236, 'SOLO', 'SOLO', 1000, ''),
(237, 'SOLO', 'DEMAK', 1250, ''),
(238, 'SOLO', 'JEPARA', 2000, ''),
(239, 'SOLO', 'KUDUS', 1500, ''),
(240, 'SOLO', 'REMBANG', 2500, ''),
(241, 'SOLO', 'BLORA', 1500, ''),
(242, 'SOLO', 'PURWODADI', 1500, ''),
(243, 'SOLO', 'SRAGEN', 2000, ''),
(244, 'SOLO', 'KARANGANYAR', 1500, ''),
(245, 'SOLO', 'KLATEN', 1500, ''),
(246, 'SOLO', 'MAGELANG', 2000, ''),
(247, 'SOLO', 'TEMANGGUNG', 2500, ''),
(248, 'SOLO', 'PURWOREJO', 2500, ''),
(249, 'SOLO', 'KEBUMEN', 2500, ''),
(250, 'SOLO', 'WONOSOBO', 2500, ''),
(251, 'SOLO', 'BANJARNEGARA', 2500, ''),
(252, 'SOLO', 'PURBALINGGA', 3000, ''),
(253, 'SOLO', 'PURWOKERTO', 2500, ''),
(254, 'SOLO', 'TEGAL', 2500, ''),
(255, 'SOLO', 'BREBES', 2500, ''),
(256, 'SOLO', 'PEKALONGAN', 2500, ''),
(257, 'SOLO', 'PEMALANG', 3000, ''),
(258, 'SOLO', 'KENDAL', 2000, ''),
(259, 'SOLO', 'SALATIGA', 2500, ''),
(260, 'SOLO', 'WONOGIRI', 3000, ''),
(261, 'SOLO', 'WONOSARI', 3000, ''),
(262, 'SURABAYA', 'PURWOREJO', 5000, ''),
(263, 'SURABAYA', 'KEBUMEN', 5000, ''),
(264, 'SURABAYA', 'MAGETAN', 4000, ''),
(265, 'SURABAYA', 'GENTENG BANYUWANGI', 5000, ''),
(266, 'SURABAYA', 'SEPANJANG SIDOARJO', 3500, ''),
(267, 'SURABAYA', 'TULUNGAGUNG', 5000, ''),
(268, 'SURABAYA', 'PONOROGO', 5000, ''),
(269, 'SURABAYA', 'BONDOWOSO', 6000, ''),
(270, 'SURABAYA', 'LUMAJANG', 3500, ''),
(271, 'SURABAYA', 'SUMENEP', 7500, ''),
(272, 'SURABAYA', 'PAMEKASAN', 7000, ''),
(273, 'SURABAYA', 'TUBAN', 4000, ''),
(274, 'SURABAYA', 'BAU-BAU SULTENG', 21000, ''),
(275, 'JAKARTA', 'KAPUK', 2000, ''),
(276, 'BANDUNG', 'CIREBON', 2000, ''),
(277, 'BANDUNG', 'PASURUAN', 7000, ''),
(278, 'BANDUNG', 'Bandung', 1000, ''),
(281, 'MAKASSAR', 'CIKARANG', 0, ''),
(283, 'BANDUNG', 'CIKARANG', 1500, ''),
(284, 'BANDUNG', 'SERAGEN', 3000, ''),
(285, 'BANDUNG', 'KUNINGAN', 5000, ''),
(286, 'BANDUNG', 'JEPARA', 5000, ''),
(287, 'SOLO', 'KAB. MALINAU', 14000, ''),
(288, 'SURABAYA', 'PATI', 6000, ''),
(289, 'BANDUNG', 'BREBES', 6000, ''),
(290, 'JAKARTA', 'KUDUS', 8000, ''),
(291, 'JAKARTA', 'SURAKARTA', 8000, ''),
(292, 'JAKARTA', 'MAGELANG ', 5000, ''),
(293, 'JAKARTA', 'TEGAL', 8000, ''),
(294, 'JAKARTA', 'KLATEN', 4000, ''),
(295, 'JAKARTA', 'CILACAP', 8000, ''),
(296, 'JAKARTA', 'DEMAK', 8000, ''),
(297, 'JAKARTA', 'WONOGIRI', 8000, ''),
(299, 'JAKARTA', 'KAB. PESISIR SELATAN', 0, ''),
(300, 'BANDUNG', 'MONGONDOW', 17000, ''),
(301, 'JAKARTA', 'SUMATERA SELATAN ', 12500, ''),
(302, 'JAKARTA', 'PONOROGO', 7000, ''),
(303, 'JAKARTA', 'SIDOARJO', 3500, ''),
(304, 'JAKARTA', 'SURABAYA BARAT ', 3500, ''),
(305, 'JAKARTA', 'SURABAYA UTARA ', 3500, ''),
(306, 'JAKARTA', 'PAMEKASAN ', 8000, ''),
(307, 'JAKARTA', 'BOJONEGORO', 7000, ''),
(308, 'JAKARTA', 'PASURUAN ', 6000, ''),
(309, 'JAKARTA', 'SITUBONDO', 7000, ''),
(310, 'JAKARTA', 'GRESIK', 3500, ''),
(311, 'JAKARTA', 'JAPAN ', 292000, ''),
(312, 'JAKARTA', 'CHIKUSEI IBARAKI, JEPANG', 292000, ''),
(313, 'BANDUNG', 'LUWU', 20000, ''),
(314, 'BANDUNG', 'INDRAMAYU', 5000, ''),
(315, 'BANDUNG', 'WONOSOBO', 10000, ''),
(316, 'BANDUNG', 'BATANG', 8000, ''),
(317, 'BANDUNG', 'PEKALONGAN', 7000, ''),
(318, 'JAKARTA', 'SURABAYA SELATAN ', 3500, ''),
(319, 'JAKARTA', 'JEMBER', 8000, ''),
(320, 'JAKARTA', 'BANYUWANGI', 8500, ''),
(321, 'BANDUNG', 'MALANG', 3500, ''),
(322, 'JAKARTA', 'SUKABUMI ', 5000, ''),
(323, 'BANDUNG', 'REMBANG', 7000, ''),
(324, 'JAKARTA', 'CIKARANG UTARA ', 2000, ''),
(325, 'BANDUNG', 'MOJOKERTO', 6000, ''),
(326, 'BANDUNG', 'OSAKA', 165000, ''),
(327, 'JAKARTA', 'KUCHING, MALAYSIA', 120000, ''),
(328, 'BANDUNG', 'CILACAP', 5000, '3-4 Hari'),
(329, 'BANDUNG', 'BALI', 6000, '4-5 Hari'),
(330, 'BANDUNG', 'SIDOARJO', 5000, '3-4 Hari'),
(334, 'SURABAYA', 'Samarinda', 5000, ''),
(335, 'JAKARTA', 'JAKARTA ', 2500, ''),
(337, 'SEMARANG', 'CAYENNE, FRANCE', 0, ''),
(338, 'BANDUNG', 'BAU-BAU', 17000, ''),
(339, 'BANDUNG', 'JEMBER', 5000, ''),
(340, 'JAKARTA', 'SRAGEN', 7500, ''),
(341, 'SURABAYA', 'CIREBON', 0, ''),
(342, 'JAKARTA', 'JAKARTA TIMUR ', 800, ''),
(343, 'JAKARTA', 'PEKALONGAN ', 8000, ''),
(344, 'BANDUNG', 'MAJALENGKA', 7000, ''),
(345, 'BANDUNG', 'SAMPIT', 12000, ''),
(346, 'BANDUNG', 'LUWUK', 15000, ''),
(347, 'BANDUNG', 'TIONGKOK', 0, ''),
(348, 'SEMARANG', 'JAKARTA', 5000, ''),
(349, 'BANDUNG', 'LABUHAN BANTU', 20000, ''),
(351, 'BANDUNG', 'MAMUJU', 14500, ''),
(352, 'dari', 'tujuan', 0, 'estimasi'),
(353, 'SEMARANG', 'BOGOR', 3000, ''),
(354, 'SEMARANG', 'DEPOK', 3000, ''),
(355, 'SEMARANG', 'TANGGERANG', 3000, ''),
(356, 'SEMARANG', 'BEKASI', 3000, ''),
(357, 'SEMARANG', 'ACEH', 17500, ''),
(358, 'SEMARANG', 'MEDAN', 10000, ''),
(359, 'SEMARANG', 'PADANG', 10000, ''),
(360, 'SEMARANG', 'DUMAI', 15000, ''),
(361, 'SEMARANG', 'PEKANBARU', 10000, ''),
(362, 'SEMARANG', 'JAMBI', 9000, ''),
(363, 'SEMARANG', 'PALEMBANG', 8500, ''),
(364, 'SEMARANG', 'PRABUWULIH', 14500, ''),
(365, 'SEMARANG', 'BENGKULU', 9000, ''),
(366, 'SEMARANG', 'BANDAR LAMPUNG', 6500, ''),
(367, 'SEMARANG', 'METRO', 8500, ''),
(368, 'SEMARANG', 'BANGKA BELITUNG', 13000, ''),
(369, 'SEMARANG', 'PANGKAL PINANG', 9500, ''),
(370, 'SEMARANG', 'BATAM', 13500, ''),
(371, 'SEMARANG', 'SUBANG', 3000, ''),
(372, 'SEMARANG', 'SUKABUMI', 4000, ''),
(373, 'SEMARANG', 'CIAMIS', 6500, ''),
(374, 'SEMARANG', 'TASIK MALAYA', 4500, ''),
(375, 'SEMARANG', 'GARUT', 4000, ''),
(376, 'SEMARANG', 'SURABAYA', 4000, ''),
(377, 'SEMARANG', 'YOGYAKARTA', 3500, ''),
(378, 'SEMARANG', 'SOLO', 3500, ''),
(379, 'SEMARANG', 'SEMARANG', 3500, ''),
(380, 'SEMARANG', 'CILEGON', 5000, ''),
(381, 'SEMARANG', 'SERANG', 5000, ''),
(382, 'SEMARANG', 'DENPASAR', 7000, ''),
(383, 'SEMARANG', 'BIMA', 11000, ''),
(384, 'SEMARANG', 'MATARAM', 8000, ''),
(385, 'SEMARANG', 'KUPANG', 14000, ''),
(386, 'SEMARANG', 'PONTIANAK', 9500, ''),
(387, 'SEMARANG', 'PALANGKARAYA', 13000, ''),
(388, 'SEMARANG', 'BANJARMASIN', 8000, ''),
(389, 'SEMARANG', 'TABALONG', 16000, ''),
(390, 'SEMARANG', 'BALIKPAPAN', 9000, ''),
(391, 'SEMARANG', 'KUTAI KARTANEGARA', 19000, ''),
(392, 'SEMARANG', 'TARAKAN', 21500, ''),
(393, 'SEMARANG', 'MANADO', 16000, ''),
(394, 'SEMARANG', 'PALU', 15000, ''),
(395, 'SEMARANG', 'MAKASAR', 9000, ''),
(396, 'SEMARANG', 'KEDARI', 15000, ''),
(397, 'SEMARANG', 'GORONTALO', 17000, ''),
(398, 'SEMARANG', 'MAMUU', 14500, ''),
(399, 'SEMARANG', 'AMBON', 17000, ''),
(400, 'SEMARANG', 'TERNATE', 18000, ''),
(401, 'SEMARANG', 'JAYAPURA', 23000, ''),
(402, 'SEMARANG', 'MANOKWARI', 25500, ''),
(403, 'SEMARANG', 'SORONG', 23000, ''),
(404, 'SEMARANG', 'BANDUNG', 4000, ''),
(405, 'SEMARANG', 'KAB.BANDUNG', 4500, ''),
(406, 'SEMARANG', 'ACEH', 17500, ''),
(407, 'SEMARANG', 'MEDAN', 10000, ''),
(408, 'SEMARANG', 'PADANG', 10000, ''),
(409, 'SEMARANG', 'DUMAI', 15000, ''),
(410, 'SEMARANG', 'PEKANBARU', 10000, ''),
(411, 'SEMARANG', 'JAMBI', 9000, ''),
(412, 'SEMARANG', 'PALEMBANG', 8500, ''),
(413, 'SEMARANG', 'PRABUWULIH', 14500, ''),
(414, 'SEMARANG', 'BENGKULU', 9000, ''),
(415, 'SEMARANG', 'BANDAR LAMPUNG', 6500, ''),
(416, 'SEMARANG', 'METRO', 8500, ''),
(417, 'SEMARANG', 'BANGKA BELITUNG', 13000, ''),
(418, 'SEMARANG', 'PANGKAL PINANG', 9500, ''),
(419, 'SEMARANG', 'BATAM', 13500, ''),
(420, 'SEMARANG', 'CIAMIS', 6500, ''),
(421, 'SEMARANG', 'TASIK MALAYA', 4500, ''),
(422, 'SEMARANG', 'GARUT', 4000, ''),
(423, 'SEMARANG', 'YOGYAKARTA', 3500, ''),
(424, 'SEMARANG', 'SURABAYA', 4000, ''),
(425, 'SEMARANG', 'SEMARANG', 3500, ''),
(426, 'SEMARANG', 'CILEGON', 5000, ''),
(427, 'SEMARANG', 'SERANG', 5000, ''),
(428, 'SEMARANG', 'DENPASAR', 7000, ''),
(429, 'SEMARANG', 'BIMA', 11000, ''),
(430, 'SEMARANG', 'MATARAM', 8000, ''),
(431, 'SEMARANG', 'KUPANG', 14000, ''),
(433, 'SEMARANG', 'PALANGKARAYA', 13000, ''),
(434, 'SEMARANG', 'BANJARMASIN', 8000, ''),
(435, 'SEMARANG', 'TABALONG', 16000, ''),
(436, 'SEMARANG', 'BALIKPAPAN', 9000, ''),
(437, 'SEMARANG', 'KUTAI KARTANEGARA', 19000, ''),
(438, 'SEMARANG', 'TARAKAN', 21500, ''),
(439, 'SEMARANG', 'MANADO', 16000, ''),
(440, 'SEMARANG', 'PALU', 15000, ''),
(441, 'SEMARANG', 'MAKASAR', 9000, ''),
(442, 'SEMARANG', 'KEDARI', 15000, ''),
(443, 'SEMARANG', 'GORONTALO', 17000, ''),
(444, 'SEMARANG', 'MAMUU', 14500, ''),
(445, 'SEMARANG', 'AMBON', 17000, ''),
(446, 'SEMARANG', 'TERNATE', 18000, ''),
(447, 'SEMARANG', 'JAYAPURA', 23000, ''),
(448, 'SEMARANG', 'MANOKWARI', 25500, ''),
(449, 'SEMARANG', 'SORONG', 23000, ''),
(450, 'SEMARANG', 'JAKARTA', 5000, ''),
(451, 'SEMARANG', 'BOGOR', 5000, ''),
(452, 'SEMARANG', 'DEPOK', 5000, ''),
(453, 'SEMARANG', 'TANGGERANG', 5000, ''),
(454, 'SEMARANG', 'BEKASI', 5000, ''),
(455, 'SEMARANG', 'ACEH', 17500, ''),
(456, 'SEMARANG', 'MEDAN', 10000, ''),
(457, 'SEMARANG', 'PADANG', 10000, ''),
(458, 'SEMARANG', 'DUMAI', 15000, ''),
(459, 'SEMARANG', 'PEKANBARU', 10000, ''),
(460, 'SEMARANG', 'JAMBI', 9000, ''),
(461, 'SEMARANG', 'PALEMBANG', 8500, ''),
(462, 'SEMARANG', 'PRABUWULIH', 14500, ''),
(463, 'SEMARANG', 'BENGKULU', 9000, ''),
(464, 'SEMARANG', 'BANDAR LAMPUNG', 6500, ''),
(465, 'SEMARANG', 'METRO', 8500, ''),
(466, 'SEMARANG', 'BANGKA BELITUNG', 13000, ''),
(467, 'SEMARANG', 'PANGKAL PINANG', 9500, ''),
(468, 'SEMARANG', 'BATAM', 13500, ''),
(469, 'SEMARANG', 'CIAMIS', 6500, ''),
(470, 'SEMARANG', 'TASIK MALAYA', 4500, ''),
(471, 'SEMARANG', 'GARUT', 4000, ''),
(472, 'SEMARANG', 'BANDUNG', 4000, ''),
(473, 'SEMARANG', 'YOGYAKARTA', 3500, ''),
(474, 'SEMARANG', 'SURABAYA', 4000, ''),
(475, 'SEMARANG', 'SEMARANG', 3500, ''),
(476, 'SEMARANG', 'CILEGON', 5000, ''),
(477, 'SEMARANG', 'SERANG', 5000, ''),
(478, 'SEMARANG', 'DENPASAR', 7000, ''),
(479, 'SEMARANG', 'BIMA', 11000, ''),
(480, 'SEMARANG', 'MATARAM', 8000, ''),
(481, 'SEMARANG', 'KUPANG', 14000, ''),
(483, 'SEMARANG', 'PALANGKARAYA', 13000, ''),
(484, 'SEMARANG', 'BANJARMASIN', 8000, ''),
(485, 'SEMARANG', 'TABALONG', 16000, ''),
(486, 'SEMARANG', 'BALIKPAPAN', 9000, ''),
(487, 'SEMARANG', 'KUTAI KARTANEGARA', 19000, ''),
(488, 'SEMARANG', 'TARAKAN', 21500, ''),
(489, 'SEMARANG', 'MANADO', 16000, ''),
(490, 'SEMARANG', 'PALU', 15000, ''),
(491, 'SEMARANG', 'MAKASAR', 9000, ''),
(492, 'SEMARANG', 'KEDARI', 15000, ''),
(493, 'SEMARANG', 'GORONTALO', 17000, ''),
(494, 'SEMARANG', 'MAMUJU', 14500, ''),
(495, 'SEMARANG', 'AMBON', 17000, ''),
(496, 'SEMARANG', 'TERNATE', 18000, ''),
(497, 'SEMARANG', 'JAYAPURA', 23000, ''),
(498, 'SEMARANG', 'MANOKWARI', 25500, ''),
(499, 'SEMARANG', 'SORONG', 23000, ''),
(500, 'SEMARANG', 'KAB.BANDUNG', 4500, ''),
(501, 'SEMARANG', 'JAKARTA', 5000, ''),
(502, 'SEMARANG', 'BOGOR', 5000, ''),
(503, 'SEMARANG', 'DEPOK', 5000, ''),
(504, 'SEMARANG', 'TANGGERANG', 5000, ''),
(505, 'SEMARANG', 'BEKASI', 5000, ''),
(506, 'SEMARANG', 'ACEH', 17500, ''),
(507, 'SEMARANG', 'MEDAN', 10000, ''),
(508, 'SEMARANG', 'PADANG', 10000, ''),
(509, 'SEMARANG', 'DUMAI', 15000, ''),
(510, 'SEMARANG', 'PEKANBARU', 10000, ''),
(511, 'SEMARANG', 'JAMBI', 9000, ''),
(512, 'SEMARANG', 'PALEMBANG', 8500, ''),
(513, 'SEMARANG', 'PRABUWULIH', 14500, ''),
(514, 'SEMARANG', 'BENGKULU', 9000, ''),
(515, 'SEMARANG', 'BANDAR LAMPUNG', 6500, ''),
(516, 'SEMARANG', 'METRO', 8500, ''),
(517, 'SEMARANG', 'BANGKA BELITUNG', 13000, ''),
(518, 'SEMARANG', 'PANGKAL PINANG', 9500, ''),
(519, 'SEMARANG', 'BATAM', 13500, ''),
(520, 'SEMARANG', 'CIAMIS', 6500, ''),
(521, 'SEMARANG', 'TASIK MALAYA', 4500, ''),
(522, 'SEMARANG', 'GARUT', 4000, ''),
(523, 'SEMARANG', 'BANDUNG', 4000, ''),
(524, 'SEMARANG', 'YOGYAKARTA', 3500, ''),
(525, 'SEMARANG', 'SOLO', 3500, ''),
(526, 'SEMARANG', 'SEMARANG', 3500, ''),
(527, 'SEMARANG', 'CILEGON', 5000, ''),
(528, 'SEMARANG', 'SERANG', 5000, ''),
(529, 'SEMARANG', 'DENPASAR', 7000, ''),
(530, 'SEMARANG', 'BIMA', 11000, ''),
(531, 'SEMARANG', 'MATARAM', 8000, ''),
(532, 'SEMARANG', 'KUPANG', 14000, ''),
(534, 'SEMARANG', 'PALANGKARAYA', 13000, ''),
(535, 'SEMARANG', 'BANJARMASIN', 8000, ''),
(536, 'SEMARANG', 'TABALONG', 16000, ''),
(537, 'SEMARANG', 'BALIKPAPAN', 9000, ''),
(538, 'SEMARANG', 'KUTAI KARTANEGARA', 19000, ''),
(539, 'SEMARANG', 'TARAKAN', 21500, ''),
(540, 'SEMARANG', 'MANADO', 16000, ''),
(541, 'SEMARANG', 'PALU', 15000, ''),
(542, 'SEMARANG', 'MAKASAR', 9000, ''),
(543, 'SEMARANG', 'KEDARI', 15000, ''),
(544, 'SEMARANG', 'GORONTALO', 17000, ''),
(545, 'SEMARANG', 'MAMUJU', 14500, ''),
(546, 'SEMARANG', 'AMBON', 17000, ''),
(547, 'SEMARANG', 'TERNATE', 18000, ''),
(548, 'SEMARANG', 'JAYAPURA', 23000, ''),
(549, 'SEMARANG', 'MANOKWARI', 25500, ''),
(550, 'SEMARANG', 'SORONG', 23000, ''),
(551, 'SEMARANG', 'KAB.BANDUNG', 4500, ''),
(552, 'SEMARANG', 'bandung', 6000, ''),
(553, 'SEMARANG', 'REMBANG', 550000, ''),
(554, 'JAKARTA', 'ZIMBABWE', 0, ''),
(555, 'BANDUNG', 'BALIKPAPAN', 0, ''),
(556, 'BANDUNG', 'KARAWANG', 2000, ''),
(558, 'JAKARTA', 'KAB. MAGELANG', 6000, ''),
(559, 'BANDUNG', 'KOLAKA', 20000, ''),
(560, 'SEMARANG', 'KLATEN', 600000, ''),
(561, 'BANDUNG', 'CIANJUR', 7000, ''),
(562, 'SEMARANG', 'pontianak', 650000, ''),
(563, 'BANDUNG', 'BANJAR PATROMAN', 8000, ''),
(564, 'BANDUNG', 'PELABUHAN RATU', 10000, ''),
(565, 'BANDUNG', 'KLATEN', 0, ''),
(566, 'BANDUNG', 'BANYUMAS', 0, ''),
(567, 'BANDUNG', 'SUMEDANG', 7000, ''),
(568, 'BANDUNG', 'SUKOHARJO', 7500, ''),
(569, 'JAKARTA', 'BRUNEI DARUS SALAM', 105000, ''),
(570, 'BANDUNG', 'banyuwangi', 10000, ''),
(571, 'SEMARANG', 'MALAYSIA', 100000, ''),
(572, 'JAKARTA', 'TAIWAN', 160000, ''),
(573, 'JAKARTA', 'JAKARTA ', 2000, ''),
(574, 'BANDUNG', 'waingapu', 0, ''),
(575, 'SURABAYA', 'GRESIK', 0, ''),
(576, 'BANDUNG', 'Lebak', 25000, ''),
(577, 'BANDUNG', 'PANDEGLANG', 20000, ''),
(578, 'BANDUNG', 'SUMATERA', 50000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_website`
--

CREATE TABLE `data_website` (
  `id` int(50) NOT NULL,
  `tagline` text NOT NULL,
  `nama_website` text NOT NULL,
  `favicon` text NOT NULL,
  `logo_website` text NOT NULL,
  `logo_footer` text NOT NULL,
  `tagline_footer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_website`
--

INSERT INTO `data_website` (`id`, `tagline`, `nama_website`, `favicon`, `logo_website`, `logo_footer`, `tagline_footer`) VALUES
(1, 'Tahta Buana Logistic', 'TBL', 'fav.png', 'logo-tbl-white.png', 'logo-tbl-black.png', 'Copyright &copy; 2021 - Tahta Buana Logistic');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_invoice`
--

CREATE TABLE `db_invoice` (
  `no_resi` varchar(50) NOT NULL,
  `metode_pembayaran` text NOT NULL,
  `tanggal_dibuat_invoice` date NOT NULL,
  `jumlah_harga` text NOT NULL,
  `jangka_waktu_bulanan` text NOT NULL,
  `total_harga_bulanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_karyawan`
--

CREATE TABLE `db_karyawan` (
  `id` int(50) NOT NULL,
  `jenis_absen` text NOT NULL,
  `username_agen` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_marketing`
--

CREATE TABLE `db_marketing` (
  `id` int(50) NOT NULL,
  `dari` text NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_marketing`
--

INSERT INTO `db_marketing` (`id`, `dari`, `nama`) VALUES
(2, 'BANDUNG', '3112 Yusup Sobarna'),
(3, 'BANDUNG', '3113 Ujang Hendrayana'),
(4, 'BANDUNG', '3114 Diki Saepudin'),
(7, 'SURABAYA', '3117 Rukmana'),
(10, 'SOLO', '3120 Setiyo'),
(15, 'JAKARTA', 'Yelly Yulianti'),
(16, 'JAKARTA', 'Listyo Winarto'),
(19, 'JAKARTA', 'Diki Saepudin'),
(20, 'SEMARANG', 'Edy Gunawan'),
(22, 'SURABAYA', 'Sindhutama'),
(23, 'SURABAYA', 'Fachrudin'),
(24, 'BANDUNG', '3115 AEP SAEPUDIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_tracking_resi`
--

CREATE TABLE `db_tracking_resi` (
  `id` int(50) NOT NULL,
  `no_resi` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` text NOT NULL,
  `status` text NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_usermanager`
--

CREATE TABLE `db_usermanager` (
  `id` int(50) NOT NULL,
  `tipe_akun` varchar(50) NOT NULL,
  `username_agen` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` text,
  `no_telp` text NOT NULL,
  `kota` text NOT NULL,
  `alamat` text NOT NULL,
  `terdaftar_sejak` datetime NOT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_usermanager`
--

INSERT INTO `db_usermanager` (`id`, `tipe_akun`, `username_agen`, `username`, `password`, `nama`, `no_telp`, `kota`, `alamat`, `terdaftar_sejak`, `foto`) VALUES
(1, 'owner', '', 'owner@tahtabuanalogistic.com', 'owner', 'Dian Diah', '082118383003', 'Bandung', 'Bandung', '2020-10-31 18:17:37', ''),
(2, 'admin', '', 'admin@tahtabuanalogistic.com', 'e0a9f54f27149b5e4a342687fa36b7c2', '', '', '', '', '2020-01-01 00:00:00', '318_novi.jpg'),
(3, 'agen', '', 'BDG-001', 'e3d206e83abd6a3eae5aff8fe3b7f71e', '', '0852-1352-2035', 'BANDUNG', 'Jl.PSM No.40 RT 05/13, Kel. Kebon Jayanti, Kec. Kiaracondong, Kota Bandung 40281 - Indonesia', '2020-10-31 19:06:57', '6354_ryan.png'),
(123, 'finance', 'BDG-001', 'finance@tahtabuanalogistic.com', 'e3d206e83abd6a3eae5aff8fe3b7f71e', 'finance 01', '0812345788', 'BANDUNG', 'Bandung', '2021-07-07 19:59:02', NULL),
(124, 'kurir', 'BDG-001', 'kurir@tahtabuanalogistic.com', 'e3d206e83abd6a3eae5aff8fe3b7f71e', 'kurir 01', '087654321323', 'BANDUNG', 'bandung', '2021-07-07 20:00:02', NULL),
(125, 'staf_karyawan', 'BDG-001', '129876543', 'e3d206e83abd6a3eae5aff8fe3b7f71e', 'Karyawan 01', '0812474436431', 'BANDUNG', 'bandung', '2021-07-07 20:00:46', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_invoice`
--

CREATE TABLE `laporan_invoice` (
  `id` varchar(50) NOT NULL,
  `username_agen` varchar(50) NOT NULL,
  `tanggal_resi` datetime NOT NULL,
  `tanggal_diterima` datetime NOT NULL,
  `tanggal_tempo` datetime NOT NULL,
  `total_harga` text NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `nama_barang` text NOT NULL,
  `jenis_barang` text NOT NULL,
  `asuransi` text,
  `qty` text NOT NULL,
  `berat` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_pemasukan`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_pengeluaran`
--

CREATE TABLE `laporan_pengeluaran` (
  `no_resi` varchar(50) NOT NULL,
  `username_agen` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` int(50) NOT NULL,
  `kategori` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_resi`
--

CREATE TABLE `laporan_resi` (
  `no_resi` varchar(50) NOT NULL,
  `username_agen` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `layanan` text NOT NULL,
  `kota_agen` text NOT NULL,
  `tujuan_pengiriman` text NOT NULL,
  `biaya_pengiriman` text NOT NULL,
  `berat_kiriman` int(50) NOT NULL,
  `jenis_barang` text NOT NULL,
  `dimensi_panjang` int(50) NOT NULL,
  `dimensi_lebar` int(50) NOT NULL,
  `dimensi_tinggi` int(50) NOT NULL,
  `jumlah_barang` text NOT NULL,
  `total_harga` text NOT NULL,
  `metode_pembayaran` text NOT NULL,
  `nama_pengirim` text NOT NULL,
  `nama_penerima` text NOT NULL,
  `no_telp_pengirim` text NOT NULL,
  `no_telp_penerima` text NOT NULL,
  `alamat_penerima` text NOT NULL,
  `nama_marketing` text NOT NULL,
  `keterangan` text NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `patokan` text NOT NULL,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_login`
--
ALTER TABLE `data_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_resi`
--
ALTER TABLE `data_resi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_website`
--
ALTER TABLE `data_website`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_invoice`
--
ALTER TABLE `db_invoice`
  ADD PRIMARY KEY (`no_resi`);

--
-- Indeks untuk tabel `db_karyawan`
--
ALTER TABLE `db_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_marketing`
--
ALTER TABLE `db_marketing`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_tracking_resi`
--
ALTER TABLE `db_tracking_resi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_usermanager`
--
ALTER TABLE `db_usermanager`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_invoice`
--
ALTER TABLE `laporan_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_pemasukan`
--
ALTER TABLE `laporan_pemasukan`
  ADD PRIMARY KEY (`no_resi`);

--
-- Indeks untuk tabel `laporan_pengeluaran`
--
ALTER TABLE `laporan_pengeluaran`
  ADD PRIMARY KEY (`no_resi`);

--
-- Indeks untuk tabel `laporan_resi`
--
ALTER TABLE `laporan_resi`
  ADD PRIMARY KEY (`no_resi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_login`
--
ALTER TABLE `data_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_resi`
--
ALTER TABLE `data_resi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=579;

--
-- AUTO_INCREMENT untuk tabel `data_website`
--
ALTER TABLE `data_website`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `db_karyawan`
--
ALTER TABLE `db_karyawan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `db_marketing`
--
ALTER TABLE `db_marketing`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `db_tracking_resi`
--
ALTER TABLE `db_tracking_resi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `db_usermanager`
--
ALTER TABLE `db_usermanager`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
