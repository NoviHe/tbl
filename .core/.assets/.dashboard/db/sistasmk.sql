-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 11:54 AM
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
-- Database: `sistasmk`
--

-- --------------------------------------------------------

--
-- Table structure for table `akreditasi_sekolah`
--

CREATE TABLE `akreditasi_sekolah` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `nama_kompetisi` varchar(50) NOT NULL,
  `tahun_akreditasi` varchar(50) NOT NULL,
  `nilai_akreditasi` varchar(50) NOT NULL,
  `predikat_akreditasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelamin_guru` varchar(50) NOT NULL,
  `tempat_lahir_guru` varchar(50) NOT NULL,
  `tanggal_lahir_guru` date NOT NULL,
  `nik_guru` varchar(50) NOT NULL,
  `nuptk_guru` varchar(50) NOT NULL,
  `jenis_ptk_guru` varchar(50) NOT NULL,
  `status_kepegawaian_guru` varchar(50) NOT NULL,
  `nama_mata_pelajaran_guru` varchar(50) NOT NULL,
  `no_hp_guru` varchar(50) NOT NULL,
  `email_guru` varchar(50) NOT NULL,
  `alamat_rumah_guru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id` int(50) NOT NULL,
  `tipe_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `status_sekolah` varchar(50) NOT NULL,
  `suku_dinas_wilayah` varchar(50) NOT NULL,
  `status_kepemilikan` varchar(50) NOT NULL,
  `sk_pendirian_sekolah` varchar(50) NOT NULL,
  `tanggal_sk` date NOT NULL,
  `sk_izin_operasional` varchar(50) NOT NULL,
  `akreditasi_sekolah` varchar(50) NOT NULL,
  `nama_kepala_sekolah` varchar(50) NOT NULL,
  `nip_kepala_sekolah` varchar(50) NOT NULL,
  `pangkat_kepala_sekolah` varchar(50) NOT NULL,
  `golongan_kepala_sekolah` varchar(50) NOT NULL,
  `no_hp_kepala_sekolah` varchar(50) NOT NULL,
  `email_kepala_sekolah` varchar(50) NOT NULL,
  `alamat_kepala_sekolah` text NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `kota_sekolah` varchar(50) NOT NULL,
  `kecamatan_sekolah` varchar(50) NOT NULL,
  `kelurahan_sekolah` varchar(50) NOT NULL,
  `rt_rw_sekolah` varchar(50) NOT NULL,
  `kode_pos_sekolah` varchar(50) NOT NULL,
  `link_gmaps_sekolah` text NOT NULL,
  `no_telp_sekolah` varchar(50) NOT NULL,
  `email_sekolah` varchar(50) NOT NULL,
  `website_sekolah` varchar(50) NOT NULL,
  `nama_pengawas_sekolah` varchar(50) NOT NULL,
  `nip_pengawas_sekolah` varchar(50) NOT NULL,
  `pangkat_pengawas_sekolah` varchar(50) NOT NULL,
  `golongan_pengawas_sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `nis_siswa` varchar(50) NOT NULL,
  `nisn_siswa` varchar(50) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin_siswa` varchar(50) NOT NULL,
  `tempat_lahir_siswa` varchar(50) NOT NULL,
  `tanggal_lahir_siswa` date NOT NULL,
  `agama_siswa` varchar(50) NOT NULL,
  `nik_orang_tua_siswa` varchar(50) NOT NULL,
  `nama_orang_tua_siswa` varchar(50) NOT NULL,
  `kelas_siswa` varchar(50) NOT NULL,
  `jurusan_siswa` varchar(50) NOT NULL,
  `no_ujian_siswa` varchar(50) NOT NULL,
  `no_hp_siswa` varchar(50) NOT NULL,
  `email_siswa` varchar(50) NOT NULL,
  `alamat_rumah_siswa` text NOT NULL,
  `jenis_bantuan_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_manager`
--

CREATE TABLE `user_manager` (
  `id` int(255) NOT NULL,
  `tipe_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `nama_operator` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `no_wa` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akreditasi_sekolah`
--
ALTER TABLE `akreditasi_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_manager`
--
ALTER TABLE `user_manager`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akreditasi_sekolah`
--
ALTER TABLE `akreditasi_sekolah`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_manager`
--
ALTER TABLE `user_manager`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
