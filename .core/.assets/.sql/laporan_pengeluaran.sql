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
-- Table structure for table `laporan_pengeluaran`
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

--
-- Dumping data for table `laporan_pengeluaran`
--

INSERT INTO `laporan_pengeluaran` (`no_resi`, `username_agen`, `username`, `tanggal`, `jumlah`, `kategori`, `keterangan`) VALUES
('KRD-000001', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-07 09:47:45', 1700000, 'PERLENGKAPAN', 'Pembelian Printer HP InkTank 310'),
('KRD-000002', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-07 15:42:04', 3150000, 'PERLENGKAPAN', 'pEMBELIANT PRINTER 1.575.000 X 2'),
('KRD-000004', 'bdg-001', '', '2020-10-07 19:13:40', 150000, 'PEMBERANGKATAN', 'kota-kota'),
('KRD-000005', '', '', '2020-10-09 16:52:58', 45000, 'PERLENGKAPAN', 'Kabel 5 Meter '),
('KRD-000006', '', '', '2020-10-09 16:55:04', 300000, 'KONSUMSI', 'Jumat Berkah '),
('KRD-000007', '', '', '2020-10-09 16:56:05', 15000, 'PARKIR', '-'),
('KRD-000008', 'bdg-001', '', '2020-10-10 09:58:00', 4000000, 'PERLENGKAPAN', 'STNK CDD'),
('KRD-000009', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 12:10:38', 50000, 'BENSIN', 'Dooring Xmart '),
('KRD-000010', 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-10 16:14:12', 217, 'LAIN-LAIN', 'Bensin,E tol,parkir&tambah angin ban.'),
('KRD-000011', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-10 23:16:45', 200000, 'BENSIN', 'Bensin '),
('KRD-000012', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-10 23:17:12', 25000, 'PARKIR', 'Parkir '),
('KRD-000013', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-10 23:19:31', 150000, 'ADMINISTRASI DAN UMUM', 'E-Tol '),
('KRD-000014', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-10 23:20:12', 125000, 'ADMINISTRASI DAN UMUM', 'Uang Jalan Pa Saiful & Pa sandi '),
('KRD-000015', '', '', '2020-10-12 15:08:12', 300000, 'LEMBURAN', 'pak Iyus, Pak Ikin, Pak Ujang, Pak Epul,Sandi, Asep'),
('KRD-000016', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-12 15:14:16', 300000, 'LEMBURAN', 'Lemburan Hari Minggu PAk Ikin,Pak Iyus, Pak Ujang, Pak Epul, Sandi, Asep'),
('KRD-000017', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-12 15:35:05', 50000, 'ADMINISTRASI DAN UMUM', 'Bayar Sampah'),
('KRD-000018', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-12 15:35:23', 4000000, 'PEMBERANGKATAN', 'STNK CDD 09/10/2020'),
('KRD-000019', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-12 15:26:02', 390000, 'PERLENGKAPAN', 'Pembelian Stampel Dan kartu Nama'),
('KRD-000020', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-12 15:29:00', 50000, 'PEMBERANGKATAN', 'Pak Ikin Dooring Saepul Jakarta Bandung'),
('KRD-000021', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-12 15:30:42', 698000, 'PEMBERANGKATAN', '09/10/2020 Bandung Cengkareng ( Saepul + Sandi )'),
('KRD-000022', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-12 15:31:33', 50000, 'PEMBERANGKATAN', '10/10/2020 Dooring X mart ( Barik )'),
('KRD-000023', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-12 15:32:47', 796000, 'PEMBERANGKATAN', '10/10/2020 Bandung Cengkareng ( Saepul + Sandi )'),
('KRD-000024', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-12 15:42:28', 7000, 'KONSUMSI', '09/10/2020 galon '),
('KRD-000025', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 21:58:45', 100000, 'LEMBURAN', 'Lemburan Bapak Sandi & Bapak Ofa Hari minggu '),
('KRD-000027', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-13 11:16:53', 52000, 'ADMINISTRASI DAN UMUM', 'Pembelian E-Tol Hari minggu '),
('KRD-000028', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-13 11:18:01', 30000, 'PARKIR', 'Biaya Parkir Hari Senin 12-10-2020'),
('KRD-000029', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 12:00:17', 3500000, 'PERLENGKAPAN', 'Timbangan Bench Scale '),
('KRD-000030', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 12:06:17', 2216000, 'PEMBERANGKATAN', '05/10/2020 PEmberangkatan Bandung - Surabaya ( Pak Yusuf )'),
('KRD-000031', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 14:50:32', 150000, 'PERLENGKAPAN', '1 ball bubble wrap '),
('KRD-000032', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 17:30:19', 156000, 'PEMBERANGKATAN', 'Dooring Saepul'),
('KRD-000033', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 17:30:58', 50000, 'LAIN-LAIN', 'Bridging Pak Ikin'),
('KRD-000034', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 17:31:22', 25000, 'BENSIN', 'Diki 10000 Pak Iyus 15000'),
('KRD-000035', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 17:33:00', 12000, 'PARKIR', 'Pak ikin + pak iyus 3000 Diki 9000'),
('KRD-000036', '', '', '2020-10-13 18:08:44', 102000, 'ADMINISTRASI DAN UMUM', 'E-TOL'),
('KRD-000037', '', '', '2020-10-13 18:09:02', 150000, 'BENSIN', '-'),
('KRD-000038', '', '', '2020-10-13 18:09:20', 10000, 'PARKIR', '-'),
('KRD-000039', '', '', '2020-10-13 18:09:38', 6000, 'KONSUMSI', 'Air Galon '),
('KRD-000040', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 22:31:57', 20000, 'BENSIN', 'Bensin Motor '),
('KRD-000041', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 22:33:24', 100000, 'ADMINISTRASI DAN UMUM', 'E-TOL'),
('KRD-000042', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 22:33:58', 150000, 'BENSIN', 'BENSIN MOBIL'),
('KRD-000043', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 22:34:15', 16000, 'PARKIR', '-'),
('KRD-000044', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 22:34:45', 10000, 'PERLENGKAPAN', 'Kertas HVS'),
('KRD-000045', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-15 17:01:06', 2500000, 'LAIN-LAIN', 'KASBON : NANDA, OFA , GILANG , IMAN , SANDI, FEBY'),
('KRD-000046', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-15 17:01:21', 21000, 'PARKIR', '-'),
('KRD-000047', 'SOLO-001', '', '2020-10-16 12:36:53', 1100000, 'LAIN-LAIN', 'tasyakuran 500000\r\n2x jumat berkah 600000'),
('KRD-000048', 'SOLO-001', '', '2020-10-16 12:38:33', 607553, 'BENSIN', 'uang bensin '),
('KRD-000049', 'SOLO-001', '', '2020-10-16 12:39:05', 450000, 'LAIN-LAIN', 'budget kos'),
('KRD-000050', 'SOLO-001', '', '2020-10-16 12:40:22', 128000, 'INTERNET', 'kuota data\r\n'),
('KRD-000051', 'SOLO-001', '', '2020-10-16 12:41:06', 69000, 'ADMINISTRASI DAN UMUM', 'fc dan atk lain'),
('KRD-000052', 'SOLO-001', '', '2020-10-16 12:42:11', 12000, 'LAIN-LAIN', 'pompa ban dan parkir'),
('KRD-000053', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 18:54:54', 15000, 'PARKIR', 'Parkir Cengkareng =  10.000\r\nParkir Asemka = 5.000'),
('KRD-000054', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 18:55:15', 195000, 'KONSUMSI', 'Jumat Berkah '),
('KRD-000055', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 11:34:55', 3500000, 'ADMINISTRASI DAN UMUM', 'Biaya web bts'),
('KRD-000056', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 11:36:38', 2825000, 'PEMBERANGKATAN', '11-10-2020 Tujuan Surabaya (Barik)'),
('KRD-000057', 'SOLO-001', '', '2020-10-17 13:42:20', 300000, 'KONSUMSI', 'jumat berkah'),
('KRD-000058', 'SOLO-001', '', '2020-10-17 13:43:25', 50000, 'PULSA', 'pulsa p tyo'),
('KRD-000059', 'SOLO-001', '', '2020-10-17 13:43:52', 26000, 'INTERNET', 'internet pc'),
('KRD-000060', 'jak-001', '', '2020-10-17 17:53:00', 100000, 'BENSIN', 'Bensin Mobil '),
('KRD-000061', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 17:54:07', 100000, 'BENSIN', 'Bensin Mobil '),
('KRD-000062', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 17:54:56', 10000, 'PARKIR', 'Parkir Tanah Abang = 5.000\r\nParkir Pick Up Kosambi = 5.000'),
('KRD-000063', 'SOLO-001', '', '2020-10-19 10:35:42', 30000, 'LEMBURAN', 'lemburan tgl 15. '),
('KRD-000064', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 11:40:55', 96000, 'PERLENGKAPAN', 'Selang 10m 70000, Kleman Selang X2 6000, Spidol X2 17000, Sunlight 3000.'),
('KRD-000065', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 19:05:04', 100000, 'BENSIN', 'BENSIN MOBIL '),
('KRD-000066', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 19:05:24', 10000, 'PARKIR', 'PARKIR DI HEYHO'),
('KRD-000067', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 19:08:56', 150000, 'KONSUMSI', 'KUE ULANG TAHUN UNTUK BAPA SANDI '),
('KRD-000068', 'bdg-001', '', '2020-10-20 15:11:06', 1000000, 'TRANSPORTASI', 'DP Sewa Bis Micro Anyer'),
('KRD-000069', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-20 17:24:31', 100000, 'BENSIN', 'BENSIN MOBIL'),
('KRD-000070', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-20 17:26:42', 15000, 'PARKIR', 'PARKIR RUKO MAHKOTA 5.000\r\nPARKIR RUKO PERMATA 5.000\r\nPARKIR MANGGA DUA TEXTILE 5.000'),
('KRD-000071', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-20 17:27:05', 15000, 'LAIN-LAIN', 'KULI VENDOR'),
('KRD-000072', 'SOLO-001', '', '2020-10-20 18:25:55', 4000, 'PARKIR', 'parkir di pusat grosir solo [BETENG]'),
('KRD-000073', 'SOLO-001', '', '2020-10-21 10:26:09', 600000, 'LAIN-LAIN', 'meja kantor'),
('KRD-000074', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-21 19:33:33', 20000, 'PARKIR', 'PARKIR PIK : 10.000\r\nPARKIR GREEN LIKE : 5.000\r\nPARKIR CONDET :5.000'),
('KRD-000075', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-21 19:33:55', 10000, 'PERLENGKAPAN', 'KERTAS HVS'),
('KRD-000076', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-22 17:50:31', 45000, 'PEMBERANGKATAN', 'Rel expres ke Surabaya tema electrik '),
('KRD-000077', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-22 17:51:13', 7000, 'KONSUMSI', 'Air galon'),
('KRD-000078', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-22 19:55:05', 200000, 'ADMINISTRASI DAN UMUM', 'BAYAR VENDOR KSI TUJUAN MEDAN '),
('KRD-000079', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-22 19:55:27', 100000, 'BENSIN', 'BENSIN MOBIL '),
('KRD-000080', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-22 19:55:45', 100000, 'ADMINISTRASI DAN UMUM', 'E-TOL'),
('KRD-000081', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-22 19:56:29', 20000, 'PARKIR', 'PARKIR DI PERMATA KOTA 5.000\r\nPARKIR DI BLU PLAZA 5.000\r\nPARKIR DI HEYHO 10.000'),
('KRD-000082', 'SOLO-001', '', '2020-10-23 08:55:49', 43000, 'ADMINISTRASI DAN UMUM', 'kertas A4'),
('KRD-000083', 'SOLO-001', '', '2020-10-23 08:56:18', 100000, 'PULSA', 'pa setyo'),
('KRD-000084', 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-23 15:49:26', 486000, 'LAIN-LAIN', 'BBM,Vendor,buat kartu nama(Rukmana),beli kertas A4 satu dus,Jumat berkah.\r\n'),
('KRD-000085', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 19:08:52', 100000, 'BENSIN', 'BENSIN MOBIL '),
('KRD-000086', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 19:09:08', 52000, 'ADMINISTRASI DAN UMUM', 'E-TOL '),
('KRD-000087', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 19:09:28', 500000, 'TENAGA KERJA', 'GAJIH ABAH CUCU '),
('KRD-000088', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 19:09:47', 150000, 'KONSUMSI', 'JUMAT BERKAH '),
('KRD-000089', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 19:10:21', 20000, 'PARKIR', 'PARKIR MANGGA DUA 10.000\r\nPARKIR PERMATA KOTA 10.000'),
('KRD-000090', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-24 16:15:14', 10000, 'PARKIR', 'PARKIR TANAH ABANG 10.000'),
('KRD-000091', 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-24 16:33:30', 274000, 'LAIN-LAIN', 'BBM,bayar vendor ke Bali Arviera,beli karung(3 buah),uang rokok pak Samosir pengelola ruko gudang'),
('KRD-000092', 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-26 17:22:50', 470000, 'PEMELIHARAAN KENDARAAN, MESIN, DAN ALAT', 'Servis ganti mobil APV;Oli shell helix,Filter oli,Filter udara&montir.parkir.'),
('KRD-000093', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-26 18:49:05', 100000, 'ADMINISTRASI DAN UMUM', 'E-TOL'),
('KRD-000094', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-26 18:49:40', 15000, 'PARKIR', 'PARKIR LTC 5.000\r\nPARKIR BEKASI 10.000'),
('KRD-000095', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-26 18:50:03', 200000, 'BENSIN', 'BENSIN MOBIL '),
('KRD-000096', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-27 19:30:48', 10000, 'PERLENGKAPAN', 'LAKBAN '),
('KRD-000097', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-27 19:31:17', 6000, 'KONSUMSI', 'AIR GALON '),
('KRD-000098', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-28 11:28:08', 50000, 'LAIN-LAIN', 'Kasbon Diki 27/10/2020'),
('KRD-000099', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-28 11:28:42', 20000, 'BENSIN', '27/10/2020 Bensin Pak Ujang Dan Pak Iyus'),
('KRD-000100', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-28 11:29:32', 200000, 'ADMINISTRASI DAN UMUM', '27/10/2020 Abudemen parkir September dan Oktober'),
('KRD-000101', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-28 11:40:22', 50000, 'LAIN-LAIN', '26/10/2020 Pak Ujang Kasbon '),
('KRD-000102', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-28 11:40:55', 40000, 'LAIN-LAIN', '28/10/2020 Sandi Om Barik Kasbon 20000'),
('KRD-000103', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 18:25:55', 10000, 'PERLENGKAPAN', 'KERTAS HVS'),
('KRD-000104', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 18:28:25', 20000, 'PARKIR', 'PARKIR TANGGERANG 5.000\r\nPARKIR CONDET 10.000\r\nPARKIR PERMATA KOTA 5.000'),
('KRD-000105', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-29 09:27:42', 175000, 'LAIN-LAIN', '28/10/2020 kasbon Diki 85.000, Pak. Ujang 50.000, Sandi 20.000, Barik 20.000'),
('KRD-000106', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-29 09:28:41', 70200, 'KONSUMSI', '28/10/2020 Gula 2 Kg 25000, Kopi KA X2 25.400, Redoxon 19.800');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_pengeluaran`
--
ALTER TABLE `laporan_pengeluaran`
  ADD PRIMARY KEY (`no_resi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
