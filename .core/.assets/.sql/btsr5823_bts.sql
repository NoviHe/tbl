-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2020 at 06:03 PM
-- Server version: 10.2.33-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btsr5823_bts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'bumitranssuhaya');

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `username_agen` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_email` text NOT NULL,
  `kota_agen` text NOT NULL,
  `no_agen` text NOT NULL,
  `terdaftar_sejak` date NOT NULL,
  `no_telp_agen` text NOT NULL,
  `alamat_agen` text NOT NULL,
  `nama_pj` text NOT NULL,
  `no_telp_pj` text NOT NULL,
  `alamat_pj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`username_agen`, `password`, `email`, `password_email`, `kota_agen`, `no_agen`, `terdaftar_sejak`, `no_telp_agen`, `alamat_agen`, `nama_pj`, `no_telp_pj`, `alamat_pj`) VALUES
('bdg-001', 'bandung123', 'bandung@bts-cargo.com', 'bandung123', 'bandung', 'bdg-001', '2020-09-30', '022-2056-5695', 'Jl. Pagarsih, Ruko Plaza Pagarsih Blok 1<br>\r\n17-18, Kota Bandung, Jawa Barat.<br>\r\nIndonesia - 40231', '', '', ''),
('jak-001', 'jakarta123', 'jakarta@bts-cargo.com', 'jakarta123', 'JAKARTA', 'jak-001', '2020-10-03', '021-2206-8933 / 0813-9444-1833', 'Jl. KH Moh Mansyur, No. 45<br>\r\nJembatan Lima<br>\r\nJakarta Barat, Indonesia.', '', '', ''),
('SOLO-001', 'solo123', 'solo@bts-cargo.com', 'solo123', 'SOLO', 'SOLO-001', '2020-10-03', '0812-2821-1076 / 0821-1808-3044', 'Jl. Raya Solo, Purwodadi<br>\r\nGondangrejo (Belakang Apotek Kaliyoso)<br>\r\nSolo, Indonesia.', '', '', ''),
('SRBY-001', 'surabaya123', 'surabaya@bts-cargo.com', 'surabaya123', 'SURABAYA', 'SRBY-001', '2020-10-03', '031-9902-1844', 'Ruko Semut Indah, Blok B20<br>\r\nJalan Semut Kali, Surabaya<br>\r\nJawa Timur, Indonesia.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `apk_login`
--

CREATE TABLE `apk_login` (
  `id` int(50) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telp` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apk_login`
--

INSERT INTO `apk_login` (`id`, `nama`, `email`, `password`, `no_telp`, `alamat`) VALUES
(1, 'Dian Diah', 'owner@bts-cargo.com', 'owner', '082118383003', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `data_breadcrumb`
--

CREATE TABLE `data_breadcrumb` (
  `id` int(50) NOT NULL,
  `gambar_1` text NOT NULL,
  `gambar_2` text NOT NULL,
  `gambar_3` text NOT NULL,
  `judul_1` text NOT NULL,
  `judul_2` text NOT NULL,
  `judul_3` text NOT NULL,
  `warna_font` text NOT NULL,
  `warna_bg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_breadcrumb`
--

INSERT INTO `data_breadcrumb` (`id`, `gambar_1`, `gambar_2`, `gambar_3`, `judul_1`, `judul_2`, `judul_3`, `warna_font`, `warna_bg`) VALUES
(1, '2474tentangkami-jaringan.png', '2263tentangkami-harga.png', '1817tentangkami-tracking.png', 'Jaringan Luas', 'Harga Kompetitif', 'Tracking System', 'white', '#9b111e');

-- --------------------------------------------------------

--
-- Table structure for table `data_cs`
--

CREATE TABLE `data_cs` (
  `id` int(50) NOT NULL,
  `judul` text NOT NULL,
  `no_cs` text NOT NULL,
  `email` text NOT NULL,
  `warna_font` text NOT NULL,
  `warna_bg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_cs`
--

INSERT INTO `data_cs` (`id`, `judul`, `no_cs`, `email`, `warna_font`, `warna_bg`) VALUES
(1, 'Customer Service :', '- 022-2056-5695', '- admin@bts-cargo.com', '#9b111e', '#F3F3F3');

-- --------------------------------------------------------

--
-- Table structure for table `data_informasi`
--

CREATE TABLE `data_informasi` (
  `id` int(50) NOT NULL,
  `gambar` text NOT NULL,
  `judul` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_informasi`
--

INSERT INTO `data_informasi` (`id`, `gambar`, `judul`, `url`) VALUES
(1, '3952tentang-kami.png', 'Tentang Kami', 'tentang-kami'),
(2, '7152FAQ.png', 'FAQ', 'faq'),
(4, '2588SK.png', 'Syarat & Ketentuan', 'syarat-ketentuan');

-- --------------------------------------------------------

--
-- Table structure for table `data_kontak`
--

CREATE TABLE `data_kontak` (
  `id` int(50) NOT NULL,
  `alamat` text NOT NULL,
  `detail_alamat` text NOT NULL,
  `detail_maps` text NOT NULL,
  `email` text NOT NULL,
  `no_wa` text NOT NULL,
  `link_wa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kontak`
--

INSERT INTO `data_kontak` (`id`, `alamat`, `detail_alamat`, `detail_maps`, `email`, `no_wa`, `link_wa`) VALUES
(1, 'Kantor Pusat Bandung', 'Jl. Pagarsih, Ruko Plaza Pagarsih Blok I\r\n<br>\r\n17-18, Kota Bandung, Jawa Barat.\r\n<br>\r\nIndonesia - 40231', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.732266540994!2d107.58761211414475!3d-6.922574869679144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e61ba28019cf%3A0x5cd9916542ae9c5a!2sRuko%20Plaza%20Pagarsih!5e0!3m2!1sid!2sid!4v1599449436336!5m2!1sid!2sid', 'admin@bts-cargo.com', '022-2056-5695', 'tel:02220565695'),
(4, 'Kantor Cabang Jakarta', 'Jl. KH Moh Mansyur, No. 45,  Jembatan Lima,\r\n<br>\r\nJakarta Barat, DKI Jakarta.\r\n<br>\r\nIndonesia - 14045', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.865313881462!2d106.80481531413689!3d-6.148784661982988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f60fccfaa2a7%3A0x2b43f0749ce4f576!2sJl.%20KH.Moh.Mansyur%20No.45%2C%20RT.4%2FRW.1%2C%20Krendang%2C%20Kec.%20Tambora%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011260!5e0!3m2!1sid!2sid!4v1599455714913!5m2!1sid!2sid', 'admin@bts-cargo.com', '021-2206-8933', 'tel:02122068933'),
(5, 'Kantor Cabang Solo', 'Jl. Raya Solo Purwodadi, Gondangrejo\r\n<br>\r\n Kota Solo, Jawa Tengah.\r\n<br>\r\nIndonesia - 14045', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.0267028282574!2d110.80308751415062!3d-7.462297475624488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a121dd73365f5%3A0x7cc2fdc7ab5bb08d!2sApotek%20Kaliyoso!5e0!3m2!1sid!2sid!4v1599455897156!5m2!1sid!2sid', 'admin@bts-cargo.com', '0812-2821-1075', 'https://api.whatsapp.com/send?phone=6281228211075&text=Halo *Customer Service BTS Cargo Solo*, saya ingin bertanya soal layanan dan produknya. Pertanyaan saya : '),
(6, 'Kantor Cabang Surabaya', 'Jl. Semut Kali, Ruko Semut Indah Blok B 20\r\n<br>\r\n Kota Surabaya, Jawa Timur.\r\n<br>\r\nIndonesia - 14045', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.970923828782!2d112.74080066393572!3d-7.244148519493492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f91496aaa587%3A0x59303c1e0b39f4ff!2sKimochi%20Massage%20Semut%20Square!5e0!3m2!1sid!2sid!4v1599456126658!5m2!1sid!2sid', 'admin@bts-cargo.com', '031-9902-1844', 'tel:03199021844');

-- --------------------------------------------------------

--
-- Table structure for table `data_konten_website`
--

CREATE TABLE `data_konten_website` (
  `id` int(50) NOT NULL,
  `menu` text NOT NULL,
  `url` text NOT NULL,
  `judul` text NOT NULL,
  `logo` text NOT NULL,
  `isi` text NOT NULL,
  `isi_html` text NOT NULL,
  `data_sliders_status` text NOT NULL,
  `data_breadcrumb_status` text NOT NULL,
  `data_layanan_service_status` text NOT NULL,
  `data_produk_status` text NOT NULL,
  `data_informasi_status` text NOT NULL,
  `data_kontak_status` text NOT NULL,
  `data_cs_status` text NOT NULL,
  `data_top_bar_status` text NOT NULL,
  `data_redirect_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_konten_website`
--

INSERT INTO `data_konten_website` (`id`, `menu`, `url`, `judul`, `logo`, `isi`, `isi_html`, `data_sliders_status`, `data_breadcrumb_status`, `data_layanan_service_status`, `data_produk_status`, `data_informasi_status`, `data_kontak_status`, `data_cs_status`, `data_top_bar_status`, `data_redirect_url`) VALUES
(1, 'Beranda', 'beranda', 'Beranda', '7755lokasi.png', '<h2><strong>Hemat, Cepat &amp; Bersahabat.</strong></h2>\r\n\r\n<p>BTS Cargo adalah perusahaan yang bergerak dalam bidang jasa pengiriman barang baik padat, cair, alat berat, Kendaraan, dan Hewan.&nbsp;BTS Cargo memiliki beberapa jalur pengiriman diantaranya ada pengiriman lewat darat, laut dan udara.<br />\r\n<br />\r\nDengan semakin banyaknya kebutuhan pengiriman barang kesetiap daerah saat ini, BTS Cargo berkomitmen dan amanah untuk bisa melayani berbagai kebutuhan pengiriman barang keberbagai daerah atau pulau yang ada di Indonesia, maka kami membuka kantor pusat kami di Jl. Pagarsih, Ruko Plaza Pagarsih Blok I 17-18, Kota Bandung, Jawa Barat. Indonesia - 40231</p>\r\n', '<style>\r\n.section_layanan_service {\r\ndisplay:block;\r\nmargin:-10px 0px -5px 0px;\r\n}\r\n.section_cs {\r\ndisplay:block;\r\nmargin: 20px 0px 0px 0px;\r\n}\r\n.section_html {\r\ndisplay:block;\r\nmargin: 0px 0px 35px 0px;\r\n}\r\n@media (max-width: 1024px) {\r\np.p_laut_mobile {\r\ndisplay:block;\r\nmargin-bottom:-10px;\r\n}\r\n}\r\n</style>\r\n<div class=\"row\">\r\n<div class=\"col-12 col-md-6 mb-3\">\r\n<h2>\r\n<strong>\r\nLayanan Ekspedisi Darat\r\n</strong>\r\n</h2>\r\n<p>\r\nUntuk Anda yang membutuhkan layanan pengiriman barang. BTS Cargo siap membantu dengan pilihan ekspedisi darat dengan tarif yang #NggakPerluMahal.\r\n<br><br>\r\nKetepatan waktu dalam pengiriman barang yang terjadwal menjadi bagian paling penting untuk memaksimalkan layanan pada customer. Oleh sebab itu kami sangat fokus pada poin ini dimana kemudian armada yang digunakan dipilih dari armada darat yang berkualitas yang sudah berpuluh-puluh tahun berpengalaman di bidang jasa ekspedisi darat.\r\n</p>\r\n</div>	\r\n<div class=\"col-12 col-md-6 mb-3\">\r\n<img src=\"files/4412darat.jpg\" style=\"width:100%;\">\r\n</div>	\r\n</div>	\r\n<hr style=\"border:1px dashed #eee; display:block; margin:30px 0px 40px 0px;\">\r\n\r\n<div class=\"row\">	\r\n<div class=\"col-12 col-md-6 mb-3\">\r\n<img src=\"files/7755laut.png\" style=\"width:100%;\">\r\n</div>	\r\n<div class=\"col-12 col-md-6 mb-3\">\r\n<h2>\r\n<strong>\r\nLayanan Ekspedisi Laut\r\n</strong>\r\n</h2>\r\n<p class=\"p_laut_mobile\">\r\nUntuk Anda yang membutuhkan layanan pengiriman barang. BTS Cargo siap membantu dengan pilihan ekspedisi laut dengan tarif yang #NggakPerluMahal.\r\n<br><br>\r\nKetepatan waktu dalam pengiriman barang yang terjadwal menjadi bagian paling penting untuk memaksimalkan layanan pada customer. Oleh sebab itu kami sangat fokus pada poin ini dimana kemudian armada yang digunakan dipilih dari armada laut yang berkualitas yang sudah berpuluh-puluh tahun berpengalaman di bidang jasa ekspedisi laut.\r\n</p>\r\n</div>\r\n</div>	\r\n<hr style=\"border:1px dashed #eee; display:block; margin:30px 0px 40px 0px;\">\r\n\r\n<div class=\"row\">\r\n<div class=\"col-12 col-md-6 mb-3\">\r\n<h2>\r\n<strong>\r\nLayanan Ekspedisi Udara\r\n</strong>\r\n</h2>\r\n<p>\r\nUntuk Anda yang membutuhkan layanan pengiriman barang. BTS Cargo siap membantu dengan pilihan ekspedisi udara dengan tarif yang #NggakPerluMahal.\r\n<br><br>\r\nKetepatan waktu dalam pengiriman barang yang terjadwal menjadi bagian paling penting untuk memaksimalkan layanan pada customer. Oleh sebab itu kami sangat fokus pada poin ini dimana kemudian armada yang digunakan dipilih dari pesawat yang berkualitas yang sudah berpuluh-puluh tahun berpengalaman di bidang jasa ekspedisi udara.\r\n</p>\r\n</div>	\r\n<div class=\"col-12 col-md-6 mb-3\">\r\n<img src=\"files/175udara.jpg\" style=\"width:100%;\">\r\n</div>	\r\n</div>	', 'block', 'block', 'block', 'none', 'none', 'none', 'block', 'none', '<script>document.location.href=\"https://bts-cargo.com/\"</script>'),
(2, 'Layanan & Service', 'layanan-service', 'Layanan & Service', '6779produk.png', '<h2><strong>LAYANAN &amp; SERVICE</strong></h2>\r\n\r\n<p>Layanan &amp; Service BTS Cargo meliputi :</p>\r\n\r\n<ul>\r\n	<li>Free Pickup (Area Cabang dan Pusat)<br />\r\n	Memberikan pelayanan free pickup bagi customer sehingga memudahkan customer.</li>\r\n	<li>Repacking Barang<br />\r\n	Memastikan pengiriman barang lebih aman dengan packing standard ekspedisi.</li>\r\n	<li>Customer Care dan Monitoring Service<br />\r\n	Update rute per hari, menerima keluhan, dan memastikan barang diterima dengan baik dan benar. Pengembalian surat jalan 15 hari maksimal setelah barang diterima oleh penerima dan memberikan laporan secara berkala.</li>\r\n	<li>Garansi Pengiriman 100%<br />\r\n	Kerusakan dan kehilangan pada saat melakukan proses <em>pickup delivery</em> yang di akibatkan oleh kelalaian timOPS, akan di ganti dengan 100% biaya kerusakan barang dan pergantian barang.</li>\r\n	<li>Asuransi Barang yang Akan Dikirim<br />\r\n	Menawarkan asuransi (include) kepada customer untuk barang / produk yang akan dikirim.</li>\r\n</ul>\r\n', '<style>\r\n.section_layanan_service {\r\ndisplay:block;\r\nmargin:-40px 0px -70px 0px;\r\n}\r\n</style>', 'none', 'none', 'block', 'none', 'none', 'none', 'none', 'block', ''),
(3, 'Produk', 'produk', 'Produk BTS Cargo', '6779produk.png', '<h2><strong>PRODUK BTS CARGO</strong></h2>\r\n\r\n<p>BTS Cargo merupakan jasa expedisi domestik dan&nbsp;Heavyweight Delivery yang akan membantu anda dalam pengiriman barang paket atau dokumen penting ke semua wilayah yang ada di Indonesia. Hubungi kami sekarang juga untuk pengiriman barang tercepat dan termurah anda. Karena kepuasan anda merupakan prioritas utama kami, maka kami akan memberikan pelayanan yang terbaik.</p>\r\n', '<style>\r\n.section_produk {\r\ndisplay:block;\r\nmargin:-40px 0px -100px 0px;\r\n}\r\n</style>', 'none', 'none', 'none', 'block', 'none', 'none', 'none', 'block', ''),
(4, 'Informasi', 'informasi', 'Informasi', '5697sk-logo.png', '<h2><strong>INFORMASI</strong></h2>\r\n\r\n<p>BTS Cargo merupakan perusahaan yang &nbsp;mulai ber-operasional secara mandiri sejak tahun 2020 yang bergerak dalam bidang jasa pengiriman barang baik padat , cair , alat berat, kendaraan, dan hewan. Pengiriman barang BTS Cargo memiliki beberapa jalur pengiriman diantaranya ada pengiriman lewat darat, laut dan udara dengan harga yang murah.</p>\r\n', '<style>\r\n.section_informasi {\r\ndisplay:block;\r\nmargin:-40px 0px -100px 0px;\r\n}\r\n</style>', 'none', 'none', 'none', 'none', 'block', 'none', 'none', 'block', ''),
(5, 'Customer Service', 'customer-service', 'Customer Service', '557informasi.png', '', '<style>\r\n.section_cs {\r\ndisplay:block;\r\nmargin:-20px 0px -30px 0px;\r\n}\r\n</style>', 'none', 'none', 'none', 'none', 'none', 'block', 'block', 'block', ''),
(6, 'Tracking Resi', 'tracking-resi', 'Tracking Resi', '9550Location@2x.png', '<h2><strong>Anda akan dialihkan ke halaman Tracking Resi!</strong></h2>\r\n', '<style>\r\n.section_isi {\r\ndisplay:block;\r\nmargin:0px 0px -50px 0px;\r\n}\r\n</style>\r\n<script>document.location.href=\"tracking\"</script>', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'block', ''),
(7, 'Door To Door', 'door-to-door', 'Door To Door', '6779produk.png', '<h2><strong>Layanan Door To Door </strong></h2>\r\n\r\n<p>Barang Diambil oleh Perusahaan Kargo Dari Tempat Pengiriman &amp; Sesudah Sampai Diambil Sendiri oleh Penerima</p>\r\n\r\n<p>Dalam dunia ekspedisi cargo, layanan door to door mempunyai arti sebuah layanan dimana barang yang hendak di kirimkan akan dijemput oleh kurir ke tempat barang costumer berada, kemudian akan di antarkan sampai ke tangan penerima di tempat ditujuan. Jadi bisa dikatakan, layanan ini sangat cocok untuk costumer yang tidak mau repot dan memerlukan pelayanan yang cepat. Ini dikarenakan costumer tidak harus mengantarkan barangnya ke kantor jasa ekspedisi yang dipakai. Tetapi kekurangan dari layanan ini adalah tarif nya yang lebih tinggi jika dibandingkan dengan barang diantarkan sendiri ke kantor jasa ekspedisi nya.</p>\r\n\r\n<p>Manfaat dari layanan door to door, yaitu :</p>\r\n\r\n<p>1. Customer tidak perlu repot mengantarkan barangnya ke kantor jasa ekspedisi, apalagi barang tersebut berukuran besar atau bertonase tinggi.<br />\r\n2.&nbsp;Proses pengiriman akan terasa lebih cepat karena begitu barang sampai ke kota tujuan akan langsung di kirimkan ke tangan konsumen.</p>\r\n', '<style>\r\n.active_link_layanan-service {\r\ncolor:#252525!important;\r\n}\r\n.section_isi {\r\ndisplay:block;\r\nmargin:0px 0px -50px 0px;\r\n}\r\n</style>', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'block', ''),
(8, 'Door To Port', 'door-to-port', 'Layanan Door To Port', '6779produk.png', '<h2><strong>Layanan Door To Port</strong></h2>\r\n\r\n<p>Barang Diambil oleh Perusahaan Kargo Dari Tempat Pengiriman &amp; Sesudah Sampai Diambil Sendiri oleh Penerima</p>\r\n', '<style>\r\n.active_link_layanan-service {\r\ncolor:#252525!important;\r\n}\r\n.section_isi {\r\ndisplay:block;\r\nmargin:0px 0px -50px 0px;\r\n}\r\n</style>', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'block', ''),
(9, 'Port To Port', 'port-to-port', 'Layanan Port To Port', '6779produk.png', '<h2><strong>Layanan Port To Port</strong></h2>\r\n\r\n<p>Barang Dikirim Sendiri oleh Pengirim ke Perusahaan Kargo &amp; Sesudah Sampai Diambil Sendiri oleh Penerima.</p>\r\n\r\n<p>Layanan port to port adalah layanan yang paling umum digunakan oleh para costumer. Tidak berbeda jauh dengan layanan door to door, tapi hal mendasar yang membedakannya adalah layanan ini tidak menjemput barang ke tempat costumer berada. Melainkan costumer sendiri yang mengantarkannya ke kantor jasa ekspedisi dan mengurus segala macam dokumen yang diperlukan saat itu juga. Kemudian jika barang telah sampai di kota tujuan, maka barang tersebut hanya dibiarkan tersimpan di gudang pelabuhan atau bandara cargo. Tugas si penerima adalah menjemput sendiri barang tersebut dengan menggunakan alat transportasi sendiri. Layanan ini lebih banyak di pakai oleh para pengiriman barang karena biaya nya yang lebih murah di bandingkan door to door.</p>\r\n\r\n<p>Kelebihan dari layanan port to port :</p>\r\n\r\n<p>1. Dapat meminimalisir biaya pengiriman<br />\r\n2.&nbsp;Dapat lebih seksama memantau barang anda pada saat di antar ke kantor ekspedisinya</p>\r\n\r\n<p>Demikianlah penjelasan soal layanan port to port dan dor to door, Perlu anda ketahui, sebagai jasa ekspedisi besar dan sudah berpengalaman dibidangnya, Klik Logistics tentu saja mempunyai kedua layanan tersebut yang tidak hanya biaya nya murah tetapi juga pelayanannya yang profesional dan staff yang ahli dibidangnya. Pada dasarnya kedua layanan ini mempunyai kelebihan dan kekurangan nya masing-masing. Sekarang setelah anda mengetahui arti dari kedua layanan tersebut semoga bisa lebih bijak memilih layanan mana yang paling cocok untuk Anda.</p>\r\n', '<style>\r\n.active_link_layanan-service {\r\ncolor:#252525!important;\r\n}\r\n.section_isi {\r\ndisplay:block;\r\nmargin:0px 0px -50px 0px;\r\n}\r\n</style>', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'block', ''),
(10, 'Express', 'express', 'Layanan Express', '6779produk.png', '<h2><strong>Layanan Express</strong></h2>\r\n\r\n<p>Salah satu nilai rahasia terbaik dalam sejarah logistik dalam memilih perusahaan&nbsp;pengiriman express&nbsp;yang tepat untuk pengiriman barang Anda. Kami sangat menyarankan Anda untuk membuat keputusan yang tepat dengan memilih jenis penyedia jasa pengiriman express 1 hari yang memiliki nilai 4,8 paling terpercaya.</p>\r\n\r\n<p>Menemukan jasa pengiriman ekspress 1 hari murah dengan muatan berat, kini tidak sesulit sebelumnya!</p>\r\n\r\n<p>Jasa pengiriman express lebih cepat daripada layanan pos kilat tradisional karena barang Anda tidak melewati pusat penyortiran. Sebagai gantinya pengemudi mengambil barang di lokasi manapun yang Anda tetapkan dan mengarahkan langsung ke tujuan yang Anda pilih. Dijamin pengiriman 1 hari. Keuntungan dari ini adalah pelacakan kecepatan tiap menit menggunakan aplikasi BTS Cargo.&nbsp;</p>\r\n\r\n<p>Jika Anda khawatir memiliki barang dalam ukuran atau volume yang cukup besar, BTS Cargo memiliki banyak pilihan jalur, baik itu jalur darat, laut dan udara.</p>\r\n', '<style>\r\n.active_link_layanan-service {\r\ncolor:#252525!important;\r\n}\r\n.section_isi {\r\ndisplay:block;\r\nmargin:0px 0px -50px 0px;\r\n}\r\n</style>', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'block', ''),
(11, 'Reguler', 'reguler', 'Layanan Reguler', '6779produk.png', '<h2><strong>Layanan Reguler</strong></h2>\r\n\r\n<p>Layanan reguler adalah layanan pengiriman ke seluruh wilayah Indonesia, dengan perkiraan waktu penyampaian kiriman 1-7 hari kerja, tergantung pada zona daerah yang menjadi tujuan pengiriman.</p>\r\n\r\n<p><strong>Ketentuan :</strong></p>\r\n\r\n<ul>\r\n	<li>Tidak melayani pengiriman di hari minggu dan libur nasional</li>\r\n	<li>Tidak berlaku garansi uang kembali <em>(money back guarantee)</em></li>\r\n	<li>Anda dapat melacak status pengiriman dan informasi penerimaan menggunakan nomor resi BTS Cargo&nbsp;melalui website BTS Cargo.</li>\r\n</ul>\r\n', '<style>\r\n.active_link_layanan-service {\r\ncolor:#252525!important;\r\n}\r\n.section_isi {\r\ndisplay:block;\r\nmargin:0px 0px -50px 0px;\r\n}\r\n</style>', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'block', ''),
(12, 'Domestik', 'domestik', 'Pengiriman Domestik', '6779produk.png', '<h2><strong>Layanan Cargo dan Ekspedisi Barang Domestik Murah Terpercaya Di Indonesia</strong></h2>\r\n\r\n<p><strong>Ekspedisi Domestik</strong>&nbsp;sangatlah dibutuhkan oleh masyarakat Indonesia. Hal ini tidak lain karena kebutuhan jasa pengiriman&nbsp;barang dan pendistribusian barang atau yang disebut dengan ekspedisi sangat vital. Dewasa ini, ekspedisi menjadi hal yang penting dan juga krusial. Sebab dengan adanya expedisi domestik murah, tentu bisa dirasakan baik bagi perorangan, pebisnis dan juga pemilik usaha domestik.</p>\r\n\r\n<h2><strong>Pengiriman Cargo Domestik Murah</strong></h2>\r\n\r\n<p>Dalam sebuah bisnis, ekspedisi menjadi pasar khusus yang memungkinkan semua yang berkaitan untuk mempromosikan produk serta layanan sebuah perusahaan. Menghasilkan penjualan baru dan menjangkau pelanggan baru. Dengan menggunakan jasa ekspedisi, maka mereka akan memberikan pengunjung kesempatan dalam mencari tahu produk serta layanan yang diberikan.</p>\r\n\r\n<p>Dengan ekspedisi, dapat memberikan kesempatan pelaku bisnis dalam berjejaring dan membuat kontak bermanfaat dengan orang lain yang bekerja dalam industri mereka. Tujuan dari hal ini adalah untuk membantu anda memperoleh yang terbaik dari bisnis ekspedisi.</p>\r\n\r\n<blockquote>\r\n<p><em>BTS Cargo merupakan jasa expedisi domestik yang akan membantu anda dalam pengiriman barang paket atau dokumen penting ke semua wilayah yang ada di Indonesia. Hubungi kami sekarang juga untuk pengiriman barang tercepat dan termurah anda. Karena kepuasan anda merupakan prioritas utama kami, maka kami akan memberikan pelayanan yang terbaik.</em></p>\r\n</blockquote>\r\n\r\n<p>Untuk itu BTS Cargo hadir sebagai perusahaan jasa ekspedisi baik melalui darat, laut dan juga udara. Kami siap melayani kebutuhan pengiriman barang anda dengan tarif yang murah dan proses yang cepat.</p>\r\n\r\n<p>Dengan murahnya biaya pengiriman ekspedisi domestik, bisa menjadikan barang ataupun produk dapat dijual dengan mengambil keuntungan yang optimal. Kemudian kenapa jasa transportasi ataupun jasa ekspedisi sekarang ini menjadi sangat penting? Sebab transportasi menghubungkan lintas kota antar pulau dan juga daerah.</p>\r\n\r\n<p>BTS Cargo&nbsp;hadir sebagai perusahaan yang menyediakan semua layanan ekspedisi ke seluruh wilayah yang ada di Indonesia. Dengan demikian, anda bisa mengirimkan barang kendaraan ataupun dokumen dengan cepat dan aman serta tarif yang murah.</p>\r\n\r\n<h2><strong>Kelebihan Ekspedisi Domestik BTS Cargo</strong></h2>\r\n\r\n<p>Ada berbagai macam alasan yang membuat anda bisa memilih kami sebagai jasa pengiriman barang domestik Anda,&nbsp;diantaranya adalah:</p>\r\n\r\n<p><strong>1. Pengiriman Barang Lebih Cepat</strong></p>\r\n\r\n<p>Sebagai perusahaan pengiriman barang resmi dan legal, maka kami selalu diprioritaskan oleh maskapai penerbangan dalam pengiriman paket via pesawat. Sehingga target waktu penyampaian yang dijanjikan bisa tercapai dengan tepat.</p>\r\n\r\n<p><strong>2. Sistem Komputerisasi</strong></p>\r\n\r\n<p>Dengan menggunakan sistem komputerisasi yang lebih efektif, maka proses pengiriman barang sejak berada di pickup hingga ke tujuan bisa menjadi lebih cepat. Setiap barang ataupun paket yang anda kirimkan tentu akan ditimbang serta di barcode dengan otomatis untuk dimasukkan ke dalam sistem.</p>\r\n\r\n<p><strong>3. Pengiriman Barang Aman</strong></p>\r\n\r\n<p>Keamanan dan juga kecepatan pengiriman merupakan prioritas BTS Cargo dalam pengiriman barang dan juga paket anda. Setiap armada pengiriman barang ekspedisi telah kamu lengkapi dengan GPS tracking system. Serta dilengkapi pula dengan CCTV 24jam pada setiap cabang kami. Sehingga proses pengiriman tentunya aman sebab ditangani oleh staf yang sudah berpengalaman.</p>\r\n\r\n<p><strong>4. Jangkauan Nasional</strong></p>\r\n\r\n<p>Karena kami memberikan pelayanan ekspedisi untuk domestik, maka layanan kami menjangkau semua kota besar dan kota kecil yang ada di nusantara. Selain itu, pengiriman barang langsung di handle oleh tenaga yang profesional dalam bidang pengiriman. Sehingga pengiriman dari dan ke kota-kota yang ada di seluruh Indonesia menjadi lebih cepat dan mudah prosesnya.</p>\r\n', '<style>\r\n.active_link_produk {\r\ncolor:#252525!important;\r\n}\r\n.section_isi {\r\ndisplay:block;\r\nmargin:0px 0px -50px 0px;\r\n}\r\n</style>', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'block', ''),
(13, 'Heavyweight Delivery', 'heavyweight-delivery', 'Heavyweight Delivery', '6779produk.png', '<h2><strong>Heavyweight Delivery</strong></h2>\r\n\r\n<p>Dengan layanan Heavyweight Delivery, Anda dapat mengirim barang yang sangat besar, berat atau yang tidak standar, seperti pipa, generator, pompa dan alat pengeboran lainnya atau peralatan lepas pantai.</p>\r\n\r\n<p>Untuk pengiriman cepat kargo penting Anda, kami memiliki layanan Equation. Pengantaran ekonomis dari airpot ke airport dapat menggunakan DIMENSION, yaitu produk kargo dasar kami&nbsp; untuk semua komoditas. Dan untuk non-standar, solusi ultra-handal, dapat mencoba COHESION, layanan kelas satu, layanan khusus&nbsp;<em>tailor-made</em>.</p>\r\n\r\n<p>Selain itu, kami menawarkan layanan untuk tujuan yang&nbsp; aksesnya sulit namun merupakan daerah tujuan utama perusahaan minyak dan gas yang terkait dengan area jalur penerbangan kami.</p>\r\n', '<style>\r\n.active_link_produk {\r\ncolor:#252525!important;\r\n}\r\n.section_isi {\r\ndisplay:block;\r\nmargin:0px 0px -50px 0px;\r\n}\r\n</style>', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'block', ''),
(14, 'Tentang Kami', 'tentang-kami', 'Tentang Kami', '2816logo-256.png', '<h2><strong>RIWAYAT PERUSAHAAN</strong></h2>\r\n\r\n<p>CV. Bumi Trans Suhaya mulai beroperasional secara mandiri sejak tahun 2020 dengan bisnis utama ekspedisi angkutan darat (trucking), laut &amp; udara&nbsp;dan juga merupakan perusahaan yang independen, dalam arti kata bahwa perusahaan bukan merupakan perusahaan yang terafiliasi atau bukan merupakan anak perusahaan dari suatu group, tetapi murni merupakan perusahaan yang beroperasi secara mandiri. Kecepatan, Ketepatan dan Keamanan barang sampai di tempat tujuan adalah merupakan Prioritas Kami.</p>\r\n\r\n<p>Saat ini kami telah memiliki beberapa cabang pembantu operasional kegiatan perusahaan kami yakni :</p>\r\n\r\n<p>1. &nbsp;Kantor Pusat Bandung<br />\r\n2. Kantor Cabang Jakarta<br />\r\n3. Kantor Cabang Solo<br />\r\n4. Kantor Cabang Surabaya</p>\r\n\r\n<h2><strong>ORGANISASI PERUSAHAAN</strong></h2>\r\n\r\n<p>Perusahaan dalam mewujudkan visi dan misi-nya memiliki struktur organisasi yang jelas dan merupakan birokrasi yang efektif, yang memberikan gambaran tentang wewenang dan tanggung jawab setiap fungsi secara jelas.</p>\r\n\r\n<h2><strong>LEGALITAS PERUSAHAAN</strong></h2>\r\n\r\n<p>Perusahaan didirikan dihadapan Notaris In Abdul Jalil ., SH., Sp.N dengan nomor akta 09 tanggal 13 Juli 2020. Dengan rincian legalitas usaha sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li>NPWP : 95.339.034.1-422.000 atas nama CV. BUMI TRANS SUHAYA</li>\r\n	<li>IZIN BERUSAHA : 0220101732926 atas nama CV. BUMI TRANS SUHAYA</li>\r\n	<li>DOMISILI PERUSAHAAN : 503/03-Kel-JMK atas nama CV. BUMI TRANS SUHAYA</li>\r\n</ul>\r\n\r\n<h2><strong>SUMBER DAYA MANUSIA</strong></h2>\r\n\r\n<p>Perusahaan menyadari bahwa keberhasilan suatu bisnis terletak pada kualitas sumber daya manusianya. Perusahaan kami didukung oleh tenaga-tenaga muda dan professional dengan latar pendidikan yang sesuai dengan bidang yang dikerjakan. Di dalam meningkatkan skill dan keahlian dari personil, perusahaan terus menerus mengadakan peningkatan melalui pelatihan yang diadakan oleh intern perusahaan maupun diluar perusahaan.</p>\r\n\r\n<h2><strong>BIDANG USAHA</strong></h2>\r\n\r\n<p><strong>Trucking</strong><br />\r\nCV. Bumi Trans Suhaya menyediakan Jasa Transportasi Angkutan Barang sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li>Transportasi Darat dari Bandung ke Jabodetabek dan Banten.</li>\r\n	<li>Transportasi Darat dari Bandung ke Kota-kota Wilayah Jawatengah</li>\r\n	<li>Transportasi Darat dari Bandung ke Kota-kota Wilayah Jawatimur</li>\r\n</ul>\r\n\r\n<p><strong>Jasa Angkutan</strong><br />\r\nCV. Bumi Trans Suhaya menyediakan Jasa Angkutan Barang (Retail) sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li>Transportasi Darat Dari Bandung Ke Jakarta</li>\r\n	<li>Jakarta Ke kota kota diseputar Jakarta diantaranya : Karawang, Bekasi, Bogor, Tanggerang, Serang, Cilegon, Anyer, Pandeglang, Cianjur, Sukabumi</li>\r\n	<li>Jakarta Ke kota kota diluar Pulau diantaranya : Sumatra, Batam, Riau, Kalimantan Barat</li>\r\n	<li>Transportasi Darat Dari Bandung ke Solo</li>\r\n	<li>Solo ke Kota kota di seputar Jawa tengah diantaranya : Boyolali, Salatiga, Semarang, Demak, Kudus, Jepara, Pati, Rembang, Surakarta, Klaten, Jogja, Sragen, Ngawi, Madiun.</li>\r\n	<li>Transportasi Darat dari Bandung ke Surabaya</li>\r\n	<li>Surabaya ke Kota kota diluar pulau diantaranya : Kalimantan Tengah, Kalimantan Timur, Sulawesi, Maluku, Papua, Bali, NTB, NTT, Waikabubak, Flores, Kupang, Atambua</li>\r\n</ul>\r\n\r\n<p>Untuk pengiriman barang ke luar pulau via Expedisi Laut dari Jakarta atau Surabaya, kami banyak bekerjasama dengan Expedisi/Jasa Angkutan di Jakarta dan Surabaya, keamanan dan ketepatan waktu pengiriman barang tetap dalam pengawasan kami.</p>\r\n\r\n<h2><strong>SARANA USAHA</strong></h2>\r\n\r\n<ul>\r\n	<li>KANTOR PUSAT OPERASIONAL = 1 KANTOR</li>\r\n	<li>POOL KENDARAAN = 1 POOL</li>\r\n	<li>GUDANG = 1 GUDANG</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>KANTOR PUSAT OPERASIONAL<br />\r\n	Lokasi : JL. Pagarsih No.151 Plaza Pagarsih Blok I No.18, Bandung</li>\r\n	<li>POOL KENDARAAN<br />\r\n	Lokasi : Plaza Pagarsih</li>\r\n	<li>GUDANG<br />\r\n	Lokasi : Plaza Pagarsih</li>\r\n	<li>KANTOR Cabang Jakarta<br />\r\n	Lokasi :Jalan KH Moh Mansyur no 45 -Jembatan Lima, Jakarta Barat</li>\r\n	<li>KANTOR Cabang Solo<br />\r\n	Lokasi : Jalan Raya Solo Purwodadi, Sambirejo, Kaliyoso, Kab. Karang Anyar</li>\r\n	<li>KANTOR Cabang Surabaya<br />\r\n	Lokasi : Surabaya</li>\r\n</ul>\r\n\r\n<h2><strong>KOMITMEN PERUSAHAAN</strong></h2>\r\n\r\n<p>Dalam mewujudkan visi perusahaan menjadi Transporter terbaik dan diprioritaskan pelanggan dengan system manajemen yang professional, CV Bumi Trans Suhaya melakukan beberapa langkah atau strategi, antara lain sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li>Peningkatan jaringan kantor cabang / perwakilan di beberapa daerah dalam rangka peningkatan pelayanan kepada customer / pelanggan.</li>\r\n	<li>Program pelatihan karyawan secara berkesinambungan untuk semua level jabatan.</li>\r\n	<li>Kami menerapkan system layanan 24 jam agar pelanggan dapat menikmati kemudahan pelayanan terutama dalam peristiwa yang sifatnya penting dan mendesak.</li>\r\n	<li>Pengiriman barang tepat waktu sampai ditujuan adalah keyakinan kami untuk mewujudkan suatu pelayanan transportasi yang professional ini semua dilakukan demi memenuhi komitmen kami untuk memenuhi prinsip &quot;Kepuasan Pelanggan&quot; adalah keberhasilan kami.</li>\r\n	<li>Keamanan Barang merupakan suatu bentuk tanggung jawab dari kami guna menjamin barang dari customer yang dikirim aman dan selamat sampai tujuan. Untuk itu kami menerapkan :\r\n	<ul>\r\n		<li>Pengalaman mengangkut barang di route sepanjang wilayah Pulau Jawa, Bali dan Lombok merupakan suatu realitas bahwa keamanan barang yang kami angkut sungguh-sungguh terjamin. Hal ini semua berkat kerja sama yang terjalin erat dengan aparat hukum maupun penguasa keamanan jalan sepanjang jalur yang dilalui.</li>\r\n		<li>Pengemudi yang terampil, tangguh dan bertanggung jawab yang menjalankan truk dengan kewaspadaan tinggi dan hati-hati terhadap gangguan keamanan di jalan, juga terhadap resiko rusaknya barang dijalan yang disebabkan oleh rusaknya barang.</li>\r\n		<li>Kami bertanggung jawab dan mengganti kerugian yang timbul diakibatkan rusaknya barang karena kesalahan handling pengemudi kami.</li>\r\n	</ul>\r\n	</li>\r\n	<li>Peningkatan control keamanan perjalanan kendaraan ketempat tujuan, antara lain :\r\n	<ul>\r\n		<li>Seluruh petugas lapangan (krani) diberikan fasilitas handphone untuk melaporkan setiap pergerakan kendaraan.</li>\r\n		<li>Kendaraan diinstruksikan untuk tidak melakukan perjalan pada tengah malam dilokasi yang rawan.</li>\r\n		<li>Menjalin hubungan baik dengan penduduk setempat didaerah-daerah yang sering dilalui kendaraan PT. Rafa Trans Indo</li>\r\n		<li>Seluruh pengemudi diberikan training dan pengarahan setiap minggu mengenai perkembangan dan permasalahan pengemudi.</li>\r\n		<li>Dibuatkan laporan rutin perjalanan kendaraan.</li>\r\n		<li>Melakukan check up rutin terhadap seluruh kendaraan seusai jadwal yang telah ditetapkan.</li>\r\n		<li>Bak dan bok kendaraan termasuk dalam jadwal perawatan berkala perusahaan untuk menjaga kondisi barang yang diangkut bebas dari kebocoran (hujan) dan kotoran.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n', '<style>\r\n.active_link_informasi {\r\ncolor:#252525!important;\r\n}\r\n.img_cv {\r\ndisplay:block; \r\nmargin: -20px auto; \r\nwidth:800px;\r\nheight:auto;\r\n}\r\n</style>\r\n<img src=\"files/5211CV-2.png\" class=\"img_cv\">', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'block', ''),
(15, 'FAQ', 'faq', 'FAQ', '1978faq-logo.png', '<h2>Apa itu BTS Cargo?</h2>\r\n\r\n<p>Perusahaan Jasa Pengirim, Yang menyediakan layanan pengiriman melalui modal transportasi :&nbsp; Darat, laut dan udara.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Apa Kelebihan dari BTS Cargo?</h2>\r\n\r\n<p>Memberikan service ketepatan dan kecepatan pengiriman dengan harga ekonomis, memberikan free pickup dengan barang yang minim.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Apa Perbedaan BTS Cargo dengan Cargo lain?</h2>\r\n\r\n<p>1. Update informasi status pengiriman rutin.</p>\r\n\r\n<p>2. Barang sampai sesuai jadwal yang sudah ditentukan.</p>\r\n\r\n<p>3. Menjamin barang sampai dalam kondisi baik dan utuh.</p>\r\n\r\n<p>4. Dokumen pengiriman/surat jalan kembali dan terupdate</p>\r\n\r\n<p>5. Disediakan team monitoring siaga : untuk memberikan pelayan bagi costumer.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Barang apa saja yang bisa dikerjakan oleh BTS Cargo?</h2>\r\n\r\n<p>1. Retail Regular &amp; Express dengan berat minimal 50kg</p>\r\n\r\n<p>2. Barang Project &nbsp;/ Heavyweight Cargo</p>\r\n', '<style>\r\n.active_link_informasi {\r\ncolor:#252525!important;\r\n}\r\n.section_isi {\r\ndisplay:block;\r\nmargin:0px 0px -50px 0px;\r\n}\r\n</style>', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'block', ''),
(16, 'Syarat & Ketentuan', 'syarat-ketentuan', 'Syarat & Ketentuan', '5697sk-logo.png', '<h2><strong>Halaman Masih Dalam Tahap Pengembangan!</strong></h2>\r\n', '<style>\r\n.active_link_informasi {\r\ncolor:#252525!important;\r\n}\r\n.section_isi {\r\ndisplay:block;\r\nmargin:0px 0px -50px 0px;\r\n}\r\n</style>', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'block', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_layanan_service`
--

CREATE TABLE `data_layanan_service` (
  `id` int(50) NOT NULL,
  `gambar` text NOT NULL,
  `judul` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_layanan_service`
--

INSERT INTO `data_layanan_service` (`id`, `gambar`, `judul`, `url`) VALUES
(2, '4777layanan-1.png', 'Layanan : Door To Door', 'door-to-door'),
(3, '8560layanan-2.png', 'Layanan : Door To Port', 'door-to-port'),
(4, '7676layanan-3.png', 'Layanan : Port To Port', 'port-to-port'),
(5, '7873layanan-4.png', 'Service : Express', 'express'),
(6, '5431layanan-5.png', 'Service : Reguler', 'reguler'),
(7, '4626produk-logo.png', 'Produk BTS Cargo', 'produk');

-- --------------------------------------------------------

--
-- Table structure for table `data_login`
--

CREATE TABLE `data_login` (
  `id` int(50) NOT NULL,
  `logo_login` text NOT NULL,
  `bg_login` text NOT NULL,
  `informasi_login` text NOT NULL,
  `tagline_login_footer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_login`
--

INSERT INTO `data_login` (`id`, `logo_login`, `bg_login`, `informasi_login`, `tagline_login_footer`) VALUES
(1, '1114logo.png', '9017bg-login.jpg', 'BTS Cargo merupakan perusahaan yang  mulai ber-operasional secara mandiri sejak tahun 2020 yang bergerak dalam bidang jasa pengiriman barang baik padat , cair , alat berat, kendaraan, dan hewan. Pengiriman barang BTS Cargo memiliki beberapa jalur pengiriman diantaranya ada pengiriman lewat darat, laut dan udara dengan harga yang murah.', 'Copyright &copy; 2020 - Solution on Your Package Everywhere | BTS Cargo');

-- --------------------------------------------------------

--
-- Table structure for table `data_marketing`
--

CREATE TABLE `data_marketing` (
  `id` int(50) NOT NULL,
  `dari` text NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_marketing`
--

INSERT INTO `data_marketing` (`id`, `dari`, `nama`) VALUES
(1, 'BANDUNG', '3111 Yani H'),
(2, 'BANDUNG', '3112 Yusup Sobarna'),
(3, 'BANDUNG', '3113 Ujang Hendrayana'),
(4, 'BANDUNG', '3114 Diki Saepudin'),
(5, 'BANDUNG', '3115 Asep Sopian'),
(6, 'JAKARTA', '3116 Feby'),
(7, 'SURABAYA', '3117 Rukmana'),
(8, 'SURABAYA', '3118 Eko Irawan'),
(9, 'SOLO', '3119 Irhana'),
(10, 'SOLO', '3120 Setio'),
(11, 'BANDUNG', '3116 Feby');

-- --------------------------------------------------------

--
-- Table structure for table `data_media`
--

CREATE TABLE `data_media` (
  `id` int(50) NOT NULL,
  `gambar` text NOT NULL,
  `tipe_gambar` text NOT NULL,
  `ukuran_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_media`
--

INSERT INTO `data_media` (`id`, `gambar`, `tipe_gambar`, `ukuran_gambar`) VALUES
(4, '1058logo-96.png', 'image/png', '25727'),
(5, '2824logo-326.png', 'image/png', '26124'),
(6, '1114logo.png', 'image/png', '145130'),
(7, '9017bg-login.jpg', 'image/jpeg', '60237'),
(8, '6332facebook.png', 'image/png', '1002'),
(9, '3047instagram.png', 'image/png', '3522'),
(10, '5986linkedin.png', 'image/png', '1532'),
(11, '5961slide-1.jpg', 'image/jpeg', '156235'),
(12, '4933slide-2.jpg', 'image/jpeg', '433512'),
(16, '2816logo-256.png', 'image/png', '36918'),
(17, '502CV-1.jpg', 'image/jpeg', '188882'),
(18, '557informasi.png', 'image/png', '15802'),
(19, '3426customer-service.png', 'image/png', '16585'),
(20, '6779produk.png', 'image/png', '17072'),
(21, '5697sk-logo.png', 'image/png', '15888'),
(22, '9550Location@2x.png', 'image/png', '22591'),
(23, '7755lokasi.png', 'image/png', '16012'),
(24, '4693pengiriman.png', 'image/png', '15394'),
(25, '1978faq-logo.png', 'image/png', '15399'),
(26, '3952tentang-kami.png', 'image/png', '22484'),
(27, '7152FAQ.png', 'image/png', '19128'),
(28, '2588SK.png', 'image/png', '21698'),
(29, '2894layanan-6.png', 'image/png', '19707'),
(30, '8407layanan-7.png', 'image/png', '20652'),
(31, '9917layanan-service.png', 'image/png', '20933'),
(32, '4777layanan-1.png', 'image/png', '18141'),
(33, '8560layanan-2.png', 'image/png', '18311'),
(34, '7676layanan-3.png', 'image/png', '17719'),
(35, '7873layanan-4.png', 'image/png', '17711'),
(36, '5431layanan-5.png', 'image/png', '16601'),
(37, '4626produk-logo.png', 'image/png', '22700'),
(40, '4807slider1.jpg', 'image/jpeg', '121667'),
(41, '8462slider2.jpg', 'image/jpeg', '1770219'),
(42, '8631slider3.jpg', 'image/jpeg', '148099'),
(43, '4533slider6.jpg', 'image/jpeg', '326008'),
(44, '2076slider4.jpg', 'image/jpeg', '256377'),
(45, '9887slider7.jpg', 'image/jpeg', '424633'),
(46, '9273slider8.jpg', 'image/jpeg', '1346122'),
(47, '2474tentangkami-jaringan.png', 'image/png', '6579'),
(48, '2263tentangkami-harga.png', 'image/png', '3531'),
(49, '1817tentangkami-tracking.png', 'image/png', '3470'),
(50, '4412darat.jpg', 'image/jpeg', '88114'),
(51, '7755laut.png', 'image/png', '370479'),
(52, '175udara.jpg', 'image/jpeg', '79375'),
(54, '5501slider-1-bts.png', 'image/png', '566008'),
(55, '8423slider-2-bts.png', 'image/png', '748388'),
(56, '5794slider-3-bts.png', 'image/png', '694139'),
(57, '5211CV-2.png', 'image/png', '31540');

-- --------------------------------------------------------

--
-- Table structure for table `data_medsos`
--

CREATE TABLE `data_medsos` (
  `id` int(50) NOT NULL,
  `logo` text NOT NULL,
  `nama` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_medsos`
--

INSERT INTO `data_medsos` (`id`, `logo`, `nama`, `link`) VALUES
(1, '6332facebook.png', '/BTS Cargo', 'https://web.facebook.com/?_rdc=1&_rdr'),
(2, '3047instagram.png', '@BTS_Cargo', 'https://www.instagram.com/'),
(3, '5986linkedin.png', '/BTS Cargo', 'https://id.linkedin.com/');

-- --------------------------------------------------------

--
-- Table structure for table `data_menu_tambahan`
--

CREATE TABLE `data_menu_tambahan` (
  `id` int(50) NOT NULL,
  `menu` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_menu_tambahan`
--

INSERT INTO `data_menu_tambahan` (`id`, `menu`, `url`) VALUES
(1, 'Door To Door', 'door-to-door'),
(2, 'Door To Port', 'door-to-port'),
(3, 'Port To Port', 'port-to-port'),
(4, 'Express', 'express'),
(5, 'Reguler', 'reguler'),
(6, 'Domestik', 'domestik'),
(7, 'Heavyweight Delivery', 'heavyweight-delivery'),
(8, 'Tentang Kami', 'tentang-kami'),
(9, 'FAQ', 'faq'),
(10, 'Syarat & Ketentuan', 'syarat-ketentuan');

-- --------------------------------------------------------

--
-- Table structure for table `data_menu_utama`
--

CREATE TABLE `data_menu_utama` (
  `id` int(50) NOT NULL,
  `menu` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_menu_utama`
--

INSERT INTO `data_menu_utama` (`id`, `menu`, `url`) VALUES
(1, 'Beranda', 'beranda'),
(2, 'Layanan & Service', 'layanan-service'),
(3, 'Produk', 'produk'),
(4, 'Informasi', 'informasi'),
(5, 'Customer Service', 'customer-service'),
(6, 'Tracking Resi', 'tracking-resi');

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE `data_produk` (
  `id` int(50) NOT NULL,
  `gambar` text NOT NULL,
  `judul` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`id`, `gambar`, `judul`, `url`) VALUES
(1, '2894layanan-6.png', 'Produk : Domestik', 'domestik'),
(2, '8407layanan-7.png', 'Produk : Heavyweight Delivery', 'heavyweight-delivery'),
(3, '9917layanan-service.png', 'Layanan & Service', 'layanan-service');

-- --------------------------------------------------------

--
-- Table structure for table `data_resi`
--

CREATE TABLE `data_resi` (
  `id` int(50) NOT NULL,
  `dari` text NOT NULL,
  `tujuan` text NOT NULL,
  `harga` int(50) NOT NULL,
  `estimasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_resi`
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
(47, 'BANDUNG', 'MAMUU', 14500, '7-10 Hari'),
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
(122, 'SOLO', 'YOGYAKARTA', 3500, '1-2 Hari'),
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
(206, 'Jakarta', 'Malang', 5000, '2-3 hari'),
(207, 'BANDUNG', 'LAMONGAN', 4000, '3-4 hari'),
(208, 'Jakarta', 'Mojokerto', 3500, '4-5 hari '),
(209, 'Jakarta', 'Tanggerang', 2500, '1-2 hari'),
(210, 'Jakarta', 'depok', 2500, '1-2 hari'),
(211, 'Jakarta', 'bogor', 4000, '1-2 hari'),
(212, 'Jakarta', 'KEBUMEN ', 4000, '2-3 hari'),
(213, 'Jakarta', 'KEDIRI', 4000, '2-3 hari'),
(214, 'Jakarta', 'BANTUL ', 6000, '2-3 hari'),
(215, 'jakarta ', 'cimahi ', 3000, '1-2 hari');

-- --------------------------------------------------------

--
-- Table structure for table `data_sliders`
--

CREATE TABLE `data_sliders` (
  `id` int(50) NOT NULL,
  `gambar` text NOT NULL,
  `nama` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_sliders`
--

INSERT INTO `data_sliders` (`id`, `gambar`, `nama`, `link`) VALUES
(1, '5501slider-1-bts.png', 'Sliders-1', ''),
(2, '8423slider-2-bts.png', 'Sliders-2', ''),
(3, '5794slider-3-bts.png', ' Sliders-3', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_website`
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
-- Dumping data for table `data_website`
--

INSERT INTO `data_website` (`id`, `tagline`, `nama_website`, `favicon`, `logo_website`, `logo_footer`, `tagline_footer`) VALUES
(1, 'Solution on Your Package Everywhere | BTS Cargo', 'BTS Cargo', '1058logo-96.png', '2824logo-326.png', '1114logo.png', 'Copyright &copy; 2020 - Solution on Your Package Everywhere | BTS Cargo');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `username_kurir` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `kota_kurir` text NOT NULL,
  `no_kurir` text NOT NULL,
  `terdaftar_sejak` date NOT NULL,
  `nama_kurir` text NOT NULL,
  `no_telp_kurir` text NOT NULL,
  `alamat_kurir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`username_kurir`, `password`, `kota_kurir`, `no_kurir`, `terdaftar_sejak`, `nama_kurir`, `no_telp_kurir`, `alamat_kurir`) VALUES
('kur-001', 'bandung123', 'bandung', 'kur-001', '2020-09-30', '', '', ''),
('kur-002', 'jakarta123', 'jakarta', 'kur-002', '2020-09-30', '', '', ''),
('KUR-003', 'solo123', 'SOLO', 'KUR-003', '2020-10-03', '', '', ''),
('KUR-004', 'surabaya123', 'SURABAYA', 'KUR-004', '2020-10-03', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pemasukan`
--

CREATE TABLE `laporan_pemasukan` (
  `no_resi` varchar(50) NOT NULL,
  `username_agen` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` int(50) NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_pemasukan`
--

INSERT INTO `laporan_pemasukan` (`no_resi`, `username_agen`, `email`, `tanggal`, `jumlah`, `uraian`) VALUES
('BTS-000001', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-05 18:29:43', 276000, 'BTS-000001'),
('BTS-000003', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-07 17:33:56', 250000, 'BTS-000003'),
('BTS-000004', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-07 17:51:00', 90000, 'BTS-000004'),
('BTS-000006', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 15:30:16', 773500, 'BTS-000006'),
('BTS-000007', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 15:39:37', 408000, 'BTS-000007'),
('BTS-000008', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 16:10:36', 65000, 'BTS-000008'),
('BTS-000009', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 16:18:18', 40000, 'BTS-000009'),
('BTS-000010', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 19:47:02', 2200000, 'BTS-000010'),
('BTS-000011', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-09 14:45:50', 528000, 'BTS-000011'),
('BTS-000012', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-09 14:59:13', 75000, 'BTS-000012'),
('BTS-000013', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-09 15:11:56', 170000, 'BTS-000013'),
('BTS-000014', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-09 15:19:24', 30000, 'BTS-000014'),
('BTS-000015', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 09:20:11', 137000, 'BTS-000015'),
('BTS-000016', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 11:02:05', 1800000, 'BTS-000016'),
('BTS-000017', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-10 14:06:13', 724000, 'BTS-000017'),
('BTS-000018', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-10 14:19:09', 1078000, 'BTS-000018'),
('BTS-000019', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 14:57:19', 200000, 'BTS-000019'),
('BTS-000021', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 17:57:34', 71000, 'BTS-000021'),
('BTS-000022', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 18:01:27', 142000, 'BTS-000022'),
('BTS-000023', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 18:05:46', 345600, 'BTS-000023'),
('BTS-000024', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-10 21:34:43', 3160000, 'BTS-000024'),
('BTS-000025', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-12 10:42:39', 2200000, 'BTS-000025'),
('BTS-000026', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 14:31:17', 40000, 'BTS-000026'),
('BTS-000027', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 14:47:19', 150000, 'BTS-000027'),
('BTS-000028', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 17:14:09', 2476000, 'BTS-000028'),
('BTS-000029', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 17:32:29', 30000, 'BTS-000029'),
('BTS-000030', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 20:30:46', 260000, 'BTS-000030'),
('BTS-000031', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 20:36:59', 164000, 'BTS-000031'),
('BTS-000032', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 21:11:22', 172500, 'BTS-000032'),
('BTS-000033', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 21:35:03', 1060000, 'BTS-000033'),
('BTS-000034', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 21:38:49', 40000, 'BTS-000034'),
('BTS-000035', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-13 14:25:49', 30000, 'BTS-000035'),
('BTS-000036', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 16:03:04', 33000, 'BTS-000036'),
('BTS-000038', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-13 16:11:19', 100000, 'BTS-000038'),
('BTS-000039', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 16:16:56', 67000, 'BTS-000039'),
('BTS-000041', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 18:22:36', 1500000, 'BTS-000041'),
('BTS-000043', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-14 09:03:04', 300000, 'BTS-000043'),
('BTS-000044', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 09:32:52', 160000, 'BTS-000044'),
('BTS-000045', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 12:04:02', 87500, 'BTS-000045'),
('BTS-000046', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 16:03:07', 52500, 'BTS-000046'),
('BTS-000047', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 16:31:18', 50000, 'BTS-000047'),
('BTS-000048', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 16:53:42', 150000, 'BTS-000048'),
('BTS-000049', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 19:19:26', 2580000, 'BTS-000049'),
('BTS-000050', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-14 21:29:07', 2000000, 'BTS-000050'),
('BTS-000051', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-15 16:10:10', 100000, 'BTS-000051'),
('BTS-000052', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 21:47:13', 100000, 'BTS-000052'),
('BTS-000053', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-15 09:46:55', 2200000, 'BTS-000053'),
('BTS-000054', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-15 13:30:51', 100000, 'BTS-000054'),
('BTS-000055', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-15 14:46:34', 70000, 'BTS-000055'),
('BTS-000056', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 12:00:13', 30000, 'BTS-000056'),
('BTS-000057', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 13:00:04', 17500, 'BTS-000057'),
('BTS-000058', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 13:04:35', 35000, 'BTS-000058'),
('BTS-000059', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 13:22:19', 400000, 'BTS-000059'),
('BTS-000060', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-16 17:40:27', 288000, 'BTS-000060'),
('BTS-000061', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-16 17:45:44', 342000, 'BTS-000061'),
('BTS-000062', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-16 19:35:13', 700000, 'BTS-000062'),
('BTS-000063', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-16 21:11:11', 1100000, 'BTS-000063'),
('BTS-000064', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 12:57:41', 1000000, 'BTS-000064'),
('BTS-000065', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 13:21:39', 50000, 'BTS-000065'),
('BTS-000066', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 13:24:05', 150000, 'BTS-000066'),
('BTS-000067', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 14:01:10', 342000, 'BTS-000067'),
('BTS-000068', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 14:12:24', 2200000, 'BTS-000068'),
('BTS-000069', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 14:26:50', 738500, 'BTS-000069'),
('BTS-000070', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 14:36:58', 52500, 'BTS-000070'),
('BTS-000071', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 16:09:11', 138000, 'BTS-000071'),
('BTS-000072', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 16:12:30', 153000, 'BTS-000072'),
('BTS-000073', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 16:15:00', 172000, 'BTS-000073'),
('BTS-000074', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 17:35:01', 20000, 'BTS-000074'),
('BTS-000075', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 12:18:08', 175000, 'BTS-000075'),
('BTS-000076', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 13:17:10', 70000, 'BTS-000076'),
('BTS-000077', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:33:06', 296000, 'BTS-000077'),
('BTS-000078', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:38:22', 248000, 'BTS-000078'),
('BTS-000079', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:43:47', 204000, 'BTS-000079'),
('BTS-000080', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:47:17', 228000, 'BTS-000080'),
('BTS-000081', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:58:34', 258000, 'BTS-000081'),
('BTS-000082', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:22:35', 48000, 'BTS-000082'),
('BTS-000083', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:29:05', 375000, 'BTS-000083'),
('BTS-000084', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:40:18', 96000, 'BTS-000084'),
('BTS-000085', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:45:09', 44000, 'BTS-000085'),
('BTS-000086', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:49:19', 70000, 'BTS-000086'),
('BTS-000087', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:57:04', 124000, 'BTS-000087'),
('BTS-000088', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 18:01:43', 128000, 'BTS-000088'),
('BTS-000089', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 19:02:55', 246400, 'BTS-000089'),
('BTS-000090', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 19:06:05', 367200, 'BTS-000090'),
('BTS-000091', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-20 11:18:59', 87500, 'BTS-000091'),
('BTS-000092', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-20 11:37:04', 950000, 'BTS-000092'),
('BTS-000093', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-20 13:42:58', 40000, 'BTS-000093'),
('BTS-000094', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-20 14:22:25', 1000000, 'BTS-000094'),
('BTS-000095', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-20 15:01:51', 600000, 'BTS-000095'),
('BTS-000096', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-20 16:24:04', 171000, 'BTS-000096'),
('BTS-000097', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-20 16:40:30', 65000, 'BTS-000097'),
('BTS-000098', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-21 11:49:54', 1290000, 'BTS-000098'),
('BTS-000099', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-22 09:45:38', 17500, 'BTS-000099'),
('BTS-000101', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-22 14:00:13', 450000, 'BTS-000101'),
('BTS-000102', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-22 15:48:36', 80000, 'BTS-000102'),
('BTS-000103', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-22 16:00:15', 120000, 'BTS-000103'),
('BTS-000104', 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-22 17:54:17', 225000, 'BTS-000104'),
('BTS-000105', 'SOLO-001', 'solo@bts-cargo.com', '2020-10-22 23:27:49', 1500000, 'BTS-000105'),
('BTS-000106', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 09:04:52', 850000, 'BTS-000106'),
('BTS-000107', 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-23 09:50:18', 225000, 'BTS-000107'),
('BTS-000108', 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-23 10:19:38', 225000, 'BTS-000108'),
('BTS-000109', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 11:47:23', 1078000, 'BTS-000109'),
('BTS-000110', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 14:28:42', 400000, 'BTS-000110'),
('BTS-000111', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 14:46:31', 420000, 'BTS-000111'),
('BTS-000112', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 15:12:20', 857500, 'BTS-000112'),
('BTS-000113', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 15:25:37', 110000, 'BTS-000113'),
('BTS-000114', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 15:29:17', 38000, 'BTS-000114'),
('BTS-000115', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 15:30:58', 46000, 'BTS-000115'),
('BTS-000116', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 15:33:45', 41000, 'BTS-000116'),
('BTS-000117', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-24 11:02:56', 450000, 'BTS-000117'),
('BTS-000118', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-24 13:32:50', 150000, 'BTS-000118'),
('BTS-000119', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-26 14:35:50', 642000, 'BTS-000119'),
('BTS-000120', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-26 14:38:58', 1500000, 'BTS-000120'),
('BTS-000121', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-26 14:57:21', 180000, 'BTS-000121'),
('BTS-000122', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-26 15:35:23', 1000000, 'BTS-000122'),
('BTS-000123', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-26 16:20:06', 160000, 'BTS-000123'),
('BTS-000124', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-27 12:53:00', 87500, 'BTS-000124'),
('BTS-000125', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-27 12:56:08', 420000, 'BTS-000125'),
('BTS-000126', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-27 15:48:24', 444000, 'BTS-000126'),
('BTS-000127', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 10:58:32', 66000, 'BTS-000127'),
('BTS-000128', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 13:17:11', 175000, 'BTS-000128'),
('BTS-000129', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-28 14:06:54', 264800, 'BTS-000129'),
('BTS-000130', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 14:35:42', 194000, 'BTS-000130'),
('BTS-000131', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-28 15:25:42', 75000, 'BTS-000131'),
('BTS-000132', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 16:22:37', 242000, 'BTS-000132'),
('BTS-000133', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 17:09:50', 120000, 'BTS-000133'),
('BTS-000134', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 18:09:31', 176000, 'BTS-000134'),
('BTS-000135', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-30 16:46:40', 77000, 'BTS-000135'),
('BTS-000136', 'bdg-001', 'bandung@bts-cargo.com', '2020-10-30 16:49:55', 246000, 'BTS-000136'),
('DBT-000035', 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 22:02:56', 1006000, 'Droping Kas Budiah Untuk Biaya Operasional '),
('DBT-000036', 'SOLO-001', 'solo@bts-cargo.com', '2020-10-16 12:34:38', 3000000, 'modal'),
('DBT-000037', 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-23 15:42:17', 1000000, 'Droping kas Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pengeluaran`
--

CREATE TABLE `laporan_pengeluaran` (
  `no_resi` varchar(50) NOT NULL,
  `username_agen` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` int(50) NOT NULL,
  `kategori` text NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_pengeluaran`
--

INSERT INTO `laporan_pengeluaran` (`no_resi`, `username_agen`, `email`, `tanggal`, `jumlah`, `kategori`, `uraian`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `laporan_resi`
--

CREATE TABLE `laporan_resi` (
  `id` int(50) NOT NULL,
  `username_agen` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `no_resi` text NOT NULL,
  `layanan` text NOT NULL,
  `kota_agen` text NOT NULL,
  `tujuan_pengiriman` text NOT NULL,
  `biaya_pengiriman` text NOT NULL,
  `berat_kiriman` int(50) NOT NULL,
  `jenis_barang` text NOT NULL,
  `dimensi_panjang` int(50) NOT NULL,
  `dimensi_lebar` int(50) NOT NULL,
  `dimensi_tinggi` int(50) NOT NULL,
  `jumlah_barang` int(50) NOT NULL,
  `total_harga` text NOT NULL,
  `metode_pembayaran` text NOT NULL,
  `nama_pengirim` text NOT NULL,
  `nama_penerima` text NOT NULL,
  `no_telp_pengirim` text NOT NULL,
  `no_telp_penerima` text NOT NULL,
  `keterangan` text NOT NULL,
  `alamat_penerima` text NOT NULL,
  `nama_marketing` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_resi`
--

INSERT INTO `laporan_resi` (`id`, `username_agen`, `email`, `tanggal`, `no_resi`, `layanan`, `kota_agen`, `tujuan_pengiriman`, `biaya_pengiriman`, `berat_kiriman`, `jenis_barang`, `dimensi_panjang`, `dimensi_lebar`, `dimensi_tinggi`, `jumlah_barang`, `total_harga`, `metode_pembayaran`, `nama_pengirim`, `nama_penerima`, `no_telp_pengirim`, `no_telp_penerima`, `keterangan`, `alamat_penerima`, `nama_marketing`) VALUES
(1, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-06 21:12:29', 'BTS-000001', 'REGULER', 'bandung', 'JAKARTA', '2400000', 1, 'SAYUR', 0, 0, 0, 0, '2400000', 'KEMBALI KE BANDUNG ( INVOICE )', 'PT HASNUR GROUP', 'BP DANI ( FORIN )', '0', '0', 'CHARTER CDD CHILLER LONG', 'GUDANG FAS CARGO AREA BANDARA SOEKARNO HATTA CENGKARENG', '3112 Bpk Yusup Sobarna'),
(3, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-07 17:33:56', 'BTS-000003', 'REGULER', 'bandung', 'BANDUNG', '250000', 1, 'BEKAL POLRI', 0, 0, 0, 1, '250000', 'LUNAS', 'BP AHMAD', 'BP DENI', '087718158555', '081323218195', 'Dalam kota Grandmax', 'Jl. Tengah No. 18 Margaasih, Bandung', '3112 Bpk Yusup Sobarna'),
(5, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-07 17:51:00', 'BTS-000004', 'REGULER', 'bandung', 'SURABAYA', '3000', 30, 'Furniture', 40, 37, 61, 1, '90000', 'KEMBALI KE BANDUNG ( INVOICE )', 'IMAGI KIDDY', 'DEA', '08122033316', '082111169992', 'Jangan dibanting dan ditindih', 'PALM HILL 1 TELAGA UTAMA ROAD, KEC. LAKAR SANTRI\r\nSURABAYA', '3112 Bpk Yusup Sobarna'),
(7, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 15:30:16', 'BTS-000006', 'REGULER', 'bandung', 'PROBOLINGGO', '	3500', 221, 'SANDAL', 0, 0, 0, 8, '773500', 'KEMBALI KE BANDUNG ( INVOICE )', 'BP AGUNG', 'SIMPLE ONE STORE #1 ( NAWIE )', '087821951385', '082336476688', '-', 'JL MT HARYONO NO 386 ( SELATAN PASAR SEMAMPIR, DEPAN INDOMART ) KERAKSAAN, KAB. PROBOLINGGO\r\nJATIM', '3115 Asep Sopian'),
(8, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 15:39:37', 'BTS-000007', 'REGULER', 'bandung', 'MAKASAR', '6000', 68, 'BASO ACI', 0, 0, 0, 2, '408000', 'KEMBALI KE BANDUNG ( INVOICE )', 'BAPPER FOOD', 'MAGFIRAH', '0', '081355520337', '-', 'JL. TODDOPULI 10 KOMP. GRAND SULAWESI BLOK A NO. 4 KEL. BORONG KEC MANGGALA MAKASAR', '3112 Yusup Sobarna'),
(9, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 16:10:36', 'BTS-000008', 'REGULER', 'bandung', 'BOGOR', '65000', 1, 'KAIN', 0, 0, 0, 1, '65000', 'BAYAR TUJUAN', 'KANDA FUBRIC', 'ANAYAH HIJAB', '087714497633', '081511574868', '-', 'VILLA NUSA INDAH 2 BLOK VI NO 1 RT 01/24 BOJONG KULUR GUNUNG PUTRI KAB. BOGOR ( DEPAN TAMAN BURUNG )', '3114 Diki Saepudin'),
(10, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 16:18:18', 'BTS-000009', 'REGULER', 'bandung', 'JAKARTA', '40000', 1, 'MAINAN', 0, 0, 0, 1, '40000', 'LUNAS', 'H. UJANG', 'HOLLY MAJU', '0', '02189614162', '-', 'JL PANGERAN TUBAGUS ANGKE RAYA NO. 170 KOPM. RUKO PERMATA KOTA BLOK V NO. 21 PANJAGALAN, PANJARINGAN JAKARTA UTARA', '3111 Yani H'),
(11, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-08 19:47:02', 'BTS-000010', 'REGULER', 'bandung', 'JAKARTA', '2200000', 1, 'SAYUR', 0, 0, 0, 1, '2200000', 'KEMBALI KE BANDUNG ( INVOICE )', 'PT HASNUR GROUP', 'DANI PT FORIN', '0', '0', 'CDD CHILLER STANDAR', 'CARGO BANDARA SOEKARNK HATTA CENGKARENG ( GUDANG FAS )', '3112 Yusup Sobarna'),
(12, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-09 14:45:50', 'BTS-000011', 'REGULER', 'JAKARTA', 'BANDUNG', '12000', 44, 'BARANG PECAH BELAH ', 0, 0, 0, 44, '528000', 'BAYAR TUJUAN ', 'MATAHARI ', 'SAIFUL ', '0', '0', '0', 'BANDUNG ', '3116 Feby'),
(13, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-09 14:59:13', 'BTS-000012', 'REGULER', 'JAKARTA', 'BANDUNG', '15000', 5, 'ACCESORIS', 0, 0, 0, 5, '75000', 'BAYAR TUJUAN ', 'SUFANG', 'X-MAT SOUVENIR ', '082157195484', '081931207354', '0', 'Jl. Sutur 18 karang anyar cibadak \r\nBandung ', '3116 Feby'),
(14, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-09 15:11:56', 'BTS-000013', 'REGULER', 'JAKARTA', 'BANDUNG', '21250', 8, 'ACCESORIES', 0, 0, 0, 8, '170000', 'BAYAR TUJUAN ', 'SANTI MAKMUR ', 'HJ UJANG MAINAN ', '081281189898', '0', '0', 'BANDUNG ', '3116 Feby'),
(15, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-09 15:19:24', 'BTS-000014', 'REGULER', 'JAKARTA', 'BANDUNG', '15000', 2, 'ACCESORIES', 0, 0, 0, 2, '30000', 'BAYAR TUJUAN ', 'PAK EDY ', 'X-MAT SOUVENIR ', '0', '0', '0', 'Jl. Sutur 18 Karang Anyar cibadak \r\nBandung ', '3116 Feby'),
(16, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 09:20:11', 'BTS-000015', 'REGULER', 'bandung', 'JAKARTA', '1000', 137, 'FURNITURE', 100, 122, 45, 1, '137000', 'KEMBALI KE BANDUNG ( INVOICE )', 'IMAGI KIDDY', 'LILIS LEONARD', '08122033316', '8119502058', '-', 'APARTEMEN REGATTA TOWER MIAMI UNIT 19C PANTAI MUTIARA, PLUIT JAKARTA UTARA', '3112 Yusup Sobarna'),
(17, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 11:02:05', 'BTS-000016', 'REGULER', 'bandung', 'JAKARTA', '1800000', 1, 'VAKSIN', 0, 0, 0, 50, '1800000', 'LUNAS', 'PT BIOFARMA', 'Satuan Pengamanan PT BIOFARMA', '0222033755', '0', 'Carter', 'Cengkareng', '3113 Ujang Hendrayana'),
(18, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-10 14:06:13', 'BTS-000017', 'REGULER', 'JAKARTA', 'Malang', '4000', 181, 'BAJU', 0, 0, 0, 6, '724000', 'LUNAS', 'JACK CLOTH ', 'ADIT ', '0', '0881036754496', '0', 'Jl. Gajayana No.534A, Dinoyo, Kec. Lowokwaru, Kota Malang \r\nJawa Barat  65144', '3116 Feby'),
(19, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-10 14:19:09', 'BTS-000018', 'REGULER', 'JAKARTA', 'BANDUNG', '1078000', 1, 'PLASTIK', 0, 0, 0, 49, '1078000', 'BAYAR TUJUAN ', 'DOREMI', 'HJ UJANG MAINAN ', '0', '0', '0', 'BANDUNG ', '3116 Feby'),
(20, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 14:57:19', 'BTS-000019', 'EXPRESS', 'bandung', 'LAMONGAN', '4000', 50, 'KAIN', 0, 0, 0, 1, '200000', 'KEMBALI KE BANDUNG ( INVOICE )', 'SAGARA', 'IBU SITI ( MUBIN', '0', '085232534161', 'Nomor hanya bisa dipakai WA', 'JL. MAWAR SELATAN RT 05/03 SEDAYU LAWAS BRONDONG LAMONGAN', '3114 Diki Saepudin'),
(22, 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-10 17:21:50', 'BTS-000020', 'REGULER', 'SURABAYA', 'JAKARTA', '1500', 2187, 'BUAH', 0, 0, 0, 151, '3280500', '( INVOICE )', 'CHANDRA GOOTANI', 'HELLO FRESH / HELLO BANANA RIKI ( WARE HOUSE )', '081359983003', '081213832344', '-', 'JL. INSPEKSI CAKUNG DRAIN CILINCING JAKARTA UTARA', '3118 Eko Irawan'),
(25, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 17:57:34', 'BTS-000021', 'REGULER', 'bandung', 'JAKARTA', '1000', 71, 'KONVEKSI', 0, 0, 0, 1, '71000', 'BAYAR TUJUAN', 'DEDI', 'AJE SURFING', '0', '081221642222', '-', 'PGMTA 2 LANTAI 5 B 180. METRO TANAH ABANG JAKARTA PUSAT', '3115 Asep Sopian'),
(26, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 18:01:27', 'BTS-000022', 'REGULER', 'bandung', 'SURABAYA', '2000', 71, 'KONVEKSI', 0, 0, 0, 1, '142000', 'BAYAR TUJUAN', 'DEDI', 'TK CRAZY RICH', '0', '081221642222', '-', 'TOKO CRAZY RICH LT 1 BLOK 2 NO. 32-35 PASAR KAPASAN SURABAYA', '3115 Asep Sopian'),
(27, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-10 18:05:46', 'BTS-000023', 'REGULER', 'bandung', 'JAKARTA', '800', 432, 'KONVEKSI', 0, 0, 0, 3, '345600', 'KEMBALI KE BANDUNG ( INVOICE )', 'Hung, RAHMAT TEX', 'MR RAJIV, HEMA TEX', '0', '0216124771', 'Biaya tambahan Kilo Akhir Rp. 30.000', 'GRAND BOUTIQUE CENTER, BLOK E NO.23 MANGGA DUA RAYA JAKARTA UTARA', '3114 Diki Saepudin'),
(28, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-10 21:34:43', 'BTS-000024', 'REGULER', 'JAKARTA', 'Mojokerto', '4000', 790, 'BAJU', 0, 0, 0, 24, '3160000', 'LUNAS', 'JACK CLOTH ', 'PUTRA', '0', '81259093421', '0', 'Jl. Raya Jabon RT 016/09 No. 159 Gayaman. Kec, Mojoanyar. Kabupaten, Mojokerto. Jawa Timur 61363 ( Depan Stikes bina sehat PPNI ). ', '3116 Feby'),
(29, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-12 10:42:39', 'BTS-000025', 'REGULER', 'bandung', 'JAKARTA', '2200000', 1, 'SAYUR', 0, 0, 0, 242, '2200000', 'KEMBALI KE BANDUNG ( INVOICE )', 'PT HASNUR GROUP', 'BP DANI ( FORIN )', '0', '0', 'CDD CHILLER ', 'CARGO BANDARA SOEKARNO HATTA CENGKARENG ( GUDANG FAS )', '3112 Yusup Sobarna'),
(30, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 14:31:17', 'BTS-000026', 'REGULER', 'JAKARTA', 'BANDUNG', '40000', 1, 'ACCESORIS', 0, 0, 0, 2, '40000', 'BAYAR TUJUAN ', 'LH ACC', 'HJ UJANG MAINAN ', '081295183050', '0', 'JANGAN DI BANTING !', 'BANDUNG ', '3116 Feby'),
(31, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 14:47:19', 'BTS-000027', 'REGULER', 'JAKARTA', 'BANDUNG', '150000', 1, 'BAJU', 0, 0, 0, 3, '150000', 'BAYAR TUJUAN ', 'BU IMAS (TANAH ABANG )', 'DAVIN BANDUNG ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(33, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 17:14:09', 'BTS-000028', 'REGULER', 'JAKARTA', 'Mojokerto', '4000', 619, 'BAJU', 0, 0, 0, 18, '2476000', 'LUNAS', 'JACK CLOTH ', 'PUTRA', '0', '081259093422', '-', 'Jl. Raya Jabon RT 16/09 No.159 Gayaman. Kec, Mojoanyar. Kabupaten, Mojokerto Jawa Timur 61363\r\n(Depan Stikes bina sehat PPNI ) ', '3116 Feby'),
(34, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 17:32:29', 'BTS-000029', 'REGULER', 'JAKARTA', 'BANDUNG', '30000', 1, 'Accesoris', 0, 0, 0, 2, '30000', 'BAYAR TUJUAN ', 'Pak Edi ', 'X-MAT SOUVENIR ', '08129408592', '081931207354', 'Jangan Dibanting !', 'Jl. Sutur 18 Karang Anyar. Cibadak Bandung ', '3116 Feby'),
(35, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 20:30:46', 'BTS-000030', 'REGULER', 'JAKARTA', 'BANDUNG', '4000', 65, 'BAJU', 0, 0, 0, 1, '260000', 'LUNAS', 'JACK CLOTH ', 'MAXIUS (DENI)', '0', '089617514795', '-', 'Curug Candung RT 04/05 No.59B. Kec, Mekar Wangi . Kec , Bojongloa Kidul. Kota Bandung ', '3116 Feby'),
(36, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 20:36:59', 'BTS-000031', 'REGULER', 'JAKARTA', 'bogor', '4000', 41, 'BAJU', 0, 0, 0, 1, '164000', 'LUNAS', 'JACK CLOTH ', 'Rivaldi Dwi ', '0', '085716147672', '-', 'Kp. Babakan (gang kujang ) Rt 04/02. Kel, Banjarwali . Kab, Bogor-Ciawi . jawa Barat. 16720', '3116 Feby'),
(37, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 21:11:22', 'BTS-000032', 'REGULER', 'JAKARTA', 'depok', '2500', 69, 'BAJU', 0, 0, -3, 3, '172500', 'LUNAS', 'JACK CLOTH ', 'Gudang Roughneck', '0', '0', '-', 'Gudang JNE Pekapuran Curug, Kec. Cimanggis, Kota Depok . Jawa Barat 16453', '3116 Feby'),
(38, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 21:35:03', 'BTS-000033', 'REGULER', 'JAKARTA', 'Tanggerang', '2500', 424, 'BAJU', 0, 0, 0, 19, '1060000', 'LUNAS', 'JACK CLOTH ', 'HEYHO GRUP INDONESIA ', '0', '0', '-', 'Jl. Masjid Nurul Farji No.5. Pondok Jaya . pondok aren . kota Tanggerang Selatan.', '3116 Feby'),
(39, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-12 21:38:49', 'BTS-000034', 'REGULER', 'JAKARTA', 'Tanggerang', '2500', 16, 'BAJU', 0, 0, 0, 1, '40000', 'LUNAS', 'JACK CLOTH ', 'FREEDOM (BAMBANG)', '0', '081311548887', '-', 'Bitung jaya Rt.04/02 Jl. Raya Serang KM. 11,5 Kec, Cikupa. Tanggerang 15710', '3116 Feby'),
(40, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-13 14:25:49', 'BTS-000035', 'REGULER', 'JAKARTA', 'BANDUNG', '30000', 1, 'BOX SPERPART', 0, 0, 0, 2, '30000', 'LUNAS', 'TOKO YK ', 'RX GALERI AQILAPORT', '0', '089605680026', '-', 'Jl. sekelimus utara No.5 (Sebrang tribun jabar ) Bandung Kidul. Jawa Barat ', '3116 Feby'),
(41, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 16:03:04', 'BTS-000036', 'REGULER', 'bandung', 'JAKARTA', '1000', 33, 'FURNITURE', 74, 39, 45, 1, '33000', 'KEMBALI KE BANDUNG ( INVOICE )', 'IMAGI KIDDY', 'IBU YENI', '08122033316', '0', 'Barang Jangan Ditindih', 'APARTEMEN ST MORITZ TOWER NEW ROYAL UNIT 0506 RT 03/02 JL. PURI INDAH RAYA BLOK U1-3 KEMBANGAN', '3112 Yusup Sobarna'),
(43, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-13 16:11:19', 'BTS-000038', 'REGULER', 'JAKARTA', 'BANDUNG', '100000', 1, 'BAJU', 0, 0, 0, 2, '100000', 'BAYAR TUJUAN ', 'BU IMAS (TANAH ABANG )', 'DAVIN BANDUNG ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(44, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 16:16:56', 'BTS-000039', 'REGULER', 'bandung', 'JAKARTA', '1000', 67, 'FURNITURE', 0, 0, 0, 2, '67000', 'KEMBALI KE BANDUNG ( INVOICE )', 'IMAGI KIDDY', 'IBU HANNI', '08122033316', '0', 'Barang Jangan Ditindih', 'JL RAWA KEPA RAYA NO.21 KEC. GROGOL PETAMBURAN KEL. TOMANG', '3112 Yusup Sobarna'),
(46, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-13 18:22:36', 'BTS-000041', 'REGULER', 'bandung', 'JAKARTA', '1500000', 1, 'ALAT OLAHRAGA', 0, 0, 0, 2, '1500000', 'BAYAR TUJUAN', 'I ROBORN', 'I REBORN', '0', '0', 'CARTER', 'KOMPLEK PURI DELTA MAS BLOK D/29 PENJARINGAN', '3113 Ujang Hendrayana'),
(49, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-14 09:03:04', 'BTS-000043', 'REGULER', 'bandung', 'MEDAN', '6000', 50, 'KAIN', 0, 0, 0, 1, '300000', 'BAYAR TUJUAN', 'KANDA FUBRIC', 'YANTI OSAKA', '0', '088262035773', 'minimum charge', 'Jl Citra Land Gama City, Ruko R6 No 11, Medan Kota\r\n', '3114 Diki Saepudin'),
(50, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 09:32:52', 'BTS-000044', 'REGULER', 'JAKARTA', 'BANDUNG', '160000', 1, 'ACCECORIS', 0, 0, 0, 8, '160000', 'BAYAR TUJUAN ', 'LH ACC JAKARTA', 'HJ UJANG BANDUNG ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(51, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 12:04:02', 'BTS-000045', 'REGULER', 'JAKARTA', 'BANDUNG', '87500', 1, 'ACCECORIS', 0, 0, 0, 5, '87500', 'BAYAR TUJUAN ', 'LH ACC JAKARTA', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(52, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 16:03:07', 'BTS-000046', 'REGULER', 'JAKARTA', 'BANDUNG', '52500', 1, 'ACCECORIS', 0, 0, 0, 3, '52500', 'BAYAR TUJUAN ', 'LH ACC JAKARTA', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(53, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 16:31:18', 'BTS-000047', 'REGULER', 'JAKARTA', 'BANDUNG', '50000', 1, 'BAJU', 0, 0, 0, 1, '50000', 'BAYAR TUJUAN ', 'BAPA WADI (TANAH ABANG )', 'DAVIN BANDUNG ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(54, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 16:53:42', 'BTS-000048', 'REGULER', 'JAKARTA', 'BANDUNG', '150000', 1, 'ACCECORIS', 0, 0, 0, 10, '150000', 'BAYAR TUJUAN ', 'Serbaguna Collection (bang aril)', 'X-MAT SOUVENIR ', '081318382969', '0', '-', 'Jl. Sutur 18 Karang Anyar , Cibadak Bandung ', '3116 Feby'),
(55, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 19:19:26', 'BTS-000049', 'REGULER', 'JAKARTA', 'KEBUMEN ', '4000', 645, 'BAJU', 0, 0, 0, 19, '2580000', 'LUNAS', 'JACK CLOTH ', 'Pak RT & Pak Fajar ', '0', '0', '-', 'Toko Jack Cloth Kebumen . Jl. Yos Sudarso timur No.158. Kec, gombong. Kabupaten , Kebumen . Sebelah nasi padang.', '3116 Feby'),
(56, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-14 21:29:07', 'BTS-000050', 'REGULER', 'bandung', 'JAKARTA', '2000000', 1, 'Sayur', 0, 0, 0, 1, '2000000', 'KEMBALI KE BANDUNG ( INVOICE )', 'PT HASNUR GROUP', 'BP DANI ( FORIN )', '0', '0', 'CDD CHILLER STANDAR', 'CARGO BANDARA SOEKARNO HATTA CENGKARENG ( GUDANG FAS )', '3112 Yusup Sobarna'),
(57, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 21:32:18', 'BTS-000050', 'REGULER', 'JAKARTA', 'Mojokerto', '100000', 1, 'BAJU', 0, 0, 0, 1, '100000', 'LUNAS', 'JACK CLOTH ', 'GILANG ', '0', '081247499909', '-', 'Jl. Raya Jabon No. 159 RT 16/09 Gayaman. Kec, Mojoanyar . Kabupaten Mojokerto. Jawa Timur. 61363 ( Depan Stikes Bina Sehat PPNI ).', '3116 Feby'),
(58, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 21:44:30', 'BTS-000051', 'REGULER', 'JAKARTA', 'KEDIRI', '100000', 1, 'BAJU', 0, 0, 0, 1, '100000', 'LUNAS', 'JACK CLOTH ', 'THORIQ ', '0', '08118333309', '-', 'Jl. Kh wahid hasim 213 B . DS bandar kidul, Kec Mojoroto , Kediri , Jawa Timur.', '3116 Feby'),
(59, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 21:46:11', 'BTS-000051', 'REGULER', 'JAKARTA', 'BANDUNG', '1500000', 1, 'PARABOLA', 0, 0, 0, 1200, '1500000', 'BAYAR TUJUAN', 'BANGUN MAJU MANDIRI', 'IBU INAYANA ', '0', '082126340667', '-', 'JL MARGAWANGI RAYA III NO. 1 CIWASTRA', '3116 Feby'),
(60, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-14 21:47:13', 'BTS-000052', 'REGULER', 'JAKARTA', 'Malang', '100000', 1, 'BAJU', 0, 0, 0, 1, '100000', 'LUNAS', 'JACK CLOTH ', 'TIA ', '0', '089504887398', '-', 'Jl. Gajayana No. 534A, Dinoyo , Kec, Lowokwaru , Kota Malang . Jawa Timur 65144', '3116 Feby'),
(61, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-15 09:46:55', 'BTS-000053', 'REGULER', 'bandung', 'JAKARTA', '2200000', 1, 'SAYUR', 0, 0, 0, 421, '2200000', 'KEMBALI KE BANDUNG ( INVOICE )', 'PT HASNUR GROUP', 'BP DANI ( FORIN )', '0', '0', 'CDD Chiller Standar', 'CARGO BANDARA  SOEKARNO HATTA CENGKARENG ( GUDANG FAS )', '3112 Yusup Sobarna'),
(62, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-15 13:30:51', 'BTS-000054', 'REGULER', 'JAKARTA', 'BANDUNG', '100000', 1, 'BARANG PECAH BELAH ', 0, 0, 0, 5, '100000', 'BAYAR TUJUAN ', 'MATAHARI ', 'MIFTAH BANDUNG ', '0', '081213063300', 'BARANG JANGAN DI BANTING !', 'Jl. Garunggang Kulon No.27 Rt 06/12 Sukabungah , Sukajadi ', '3116 Feby'),
(63, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-15 14:46:34', 'BTS-000055', 'REGULER', 'JAKARTA', 'BANDUNG', '70000', 1, 'ACCECORIS', 0, 0, 0, 4, '70000', 'BAYAR TUJUAN ', 'LH ACC JAKARTA', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(64, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 12:00:13', 'BTS-000056', 'REGULER', 'JAKARTA', 'BANDUNG', '30000', 1, 'Walpaper dinding ', 0, 0, 0, 2, '30000', 'BAYAR TUJUAN ', 'Feby ( Cv. Bumi Trans Suhaya  Jakarta) ', 'SAIFUL  ', '0', '0', '-', 'Cibaduyut Bandung ', '3116 Feby'),
(65, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 13:00:04', 'BTS-000057', 'REGULER', 'JAKARTA', 'BANDUNG', '17500', 1, 'ACCECORIS', 0, 0, 0, 1, '17500', 'BAYAR TUJUAN ', 'MAJU JAYA ACC', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(67, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 13:04:35', 'BTS-000058', 'REGULER', 'JAKARTA', 'BANDUNG', '35000', 1, 'ACCECORIS', 0, 0, 0, 2, '35000', 'BAYAR TUJUAN ', 'LH ACC JAKARTA', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(68, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-16 13:22:19', 'BTS-000059', 'REGULER', 'JAKARTA', 'BANDUNG', '400000', 1, 'ACCECORIS', 0, 0, 0, 20, '400000', 'BAYAR TUJUAN ', 'ANDRY', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(69, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-16 17:40:27', 'BTS-000060', 'REGULER', 'bandung', 'TANGERANG', '2000', 144, 'KONVEKSI', 0, 0, 0, 3, '288000', 'BAYAR TUJUAN', 'DENDI', 'HEYHO GROUP INDONESIA', '087822944777', '08119937078', '-', 'Jl. Masjid Nurul Fajri 1 No. 5 Pd. Jaya Kec. Pd. Aren, Tanggerang Selatan ', '3114 Diki Saepudin'),
(70, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-16 17:45:44', 'BTS-000061', 'REGULER', 'bandung', 'TANGERANG', '4500', 76, 'APD', 0, 0, 0, 3, '342000', 'KEMBALI KE BANDUNG ( INVOICE )', 'BERKAH LANGGENG SUKSES', 'PT ASIA PACIFIC FORTUNA SARI', '0', '0', 'Dimensi', 'Jl. Pertigaan H. Dasim Ds. Cirarab Kec. Legok Tangerang', '3113 Ujang Hendrayana'),
(71, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-16 19:35:13', 'BTS-000062', 'REGULER', 'bandung', 'SUKABUMI', '700000', 1, 'KAIN', 0, 0, 0, 7, '700000', 'BAYAR TUJUAN', 'ROYAL MANDIRI TEKSTIL', 'ARAFA HIJAB', '082115386423', '082125314635', 'Hitungan Per KOLI', 'Sebrang Masjid Baiturahim Kamp. Lamping Rt 03/06 Kel. Jaya Mekar Baros Sukabumi', '3114 Diki Saepudin'),
(72, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-16 21:11:11', 'BTS-000063', 'REGULER', 'bandung', 'JAKARTA', '1100000', 1, 'KAOS', 0, 0, 0, 24, '1100000', 'KEMBALI KE BANDUNG ( INVOICE )', 'PT SELARAS JAYA ABADI', 'PT FIDES DUO TEKNOLOGI  ( JEFRI )', '081214271078', '087846788203', 'Carter Engkel', 'Jl. Melati Kav 40D Ampera Kec. Cilandak Timur Kel. Pasar Minggu Jakarta Selatan', '3112 Yusup Sobarna'),
(73, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 12:57:41', 'BTS-000064', 'REGULER', 'JAKARTA', 'BANDUNG', '1000000', 1, 'MAINAN', 0, 0, 0, 181, '1000000', 'BAYAR TUJUAN ', 'ERWIN JAKARTA', 'HJ UJANG MAINAN ', '0', '0', '-', 'Bandung', '3116 Feby'),
(74, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 13:21:39', 'BTS-000065', 'REGULER', 'JAKARTA', 'BANDUNG', '50000', 1, 'BAJU ', 0, 0, 0, 1, '50000', 'BAYAR TUJUAN ', 'BOM KIDS', 'DAVIN BANDUNG ', '0', '0', '-', 'Bandung ', '3116 Feby'),
(75, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 13:24:05', 'BTS-000066', 'REGULER', 'JAKARTA', 'BANDUNG', '150000', 1, 'BAJU ', 0, 0, 0, 3, '150000', 'BAYAR TUJUAN ', 'BAPA WADI ', 'DAVIN BANDUNG ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(76, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 14:01:10', 'BTS-000067', 'REGULER', 'bandung', 'JAKARTA', '1000', 342, 'KONVEKSI', 0, 0, 0, 3, '342000', 'KEMBALI KE BANDUNG ( INVOICE )', 'IBU ANGEL', 'TK. RIZKY BUSANA ( HWU )', '0', '02164700279', '-', 'Komp. Ruko Marinatama Blok J No.1 Jl. Gunung Sahari Jakarta', '3112 Yusup Sobarna'),
(77, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 14:12:24', 'BTS-000068', 'REGULER', 'bandung', 'JAKARTA', '2200000', 1, 'Sayuran', 0, 0, 0, 1, '2200000', 'KEMBALI KE BANDUNG ( INVOICE )', 'PT HASNUR GROUP', 'BP DANI ( FORIN )', '0', '0', 'CDD Chiller Standar', 'Cargo Bandara Soekarno Hatta Cengkareng ( Gudang Fast )', '3112 Yusup Sobarna'),
(78, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 14:26:50', 'BTS-000069', 'REGULER', 'bandung', 'DENPASAR', '3500', 211, 'PAKAIAN', 0, 0, 0, 2, '738500', 'KEMBALI KE BANDUNG ( INVOICE )', 'BACIP 126', 'SHAMROCK', '08122005936', '0', '-', 'Jl. Tukad Malangit No. 3 Panjer Denpasar', '3111 Yani H'),
(79, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 14:36:58', 'BTS-000070', 'REGULER', 'JAKARTA', 'BANDUNG', '52500', 1, 'ACCECORIS', 0, 0, 0, 3, '52500', 'BAYAR TUJUAN ', 'LH ACC JAKARTA', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(80, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 16:09:11', 'BTS-000071', 'REGULER', 'bandung', 'JAKARTA', '1000', 138, 'KONVEKSI', 0, 0, 0, 1, '138000', 'KEMBALI KE BANDUNG ( INVOICE )', 'IBU ANGEL', 'PT AMPALU INDAH LESTARI', '0', '0215413630', '-', 'Jl. Kapuk Raya No. 8 Jakarta Barat', '3112 Yusup Sobarna'),
(81, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 16:12:30', 'BTS-000072', 'REGULER', 'bandung', 'JAKARTA', '1000', 153, 'KONVEKSI', 0, 0, 0, 1, '153000', 'KEMBALI KE BANDUNG ( INVOICE )', 'IBU ANGEL', 'PT AMPALU INDAH LESTARI', '0', '0215413630', '-', 'Jl. Kapuk Raya No. 8 Jakarta Barat', '3112 Yusup Sobarna'),
(82, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-17 16:15:00', 'BTS-000073', 'REGULER', 'bandung', 'JAKARTA', '1000', 172, 'KONVEKSI', 0, 0, 0, 1, '172000', 'KEMBALI KE BANDUNG ( INVOICE )', 'IBU ANGEL', 'PT AMPALU INDAH LESTARI', '0', '0215413630', '-', 'Jl. Kapuk Raya No. 8 Jakarta Barat', '3112 Yusup Sobarna'),
(83, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-17 17:35:01', 'BTS-000074', 'REGULER', 'JAKARTA', 'BANDUNG', '20000', 1, 'ACCECORIS', 0, 0, 0, 1, '20000', 'BAYAR TUJUAN ', 'MAJU JAYA ACC ', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(84, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 12:18:08', 'BTS-000075', 'REGULER', 'JAKARTA', 'BANDUNG', '175000', 1, 'ACCECORIS', 0, 0, 0, 10, '175000', 'BAYAR TUJUAN ', 'Toko Keong ', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(86, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 13:17:10', 'BTS-000076', 'REGULER', 'JAKARTA', 'BANDUNG', '70000', 1, 'ACCECORIS', 0, 0, 0, 4, '70000', 'BAYAR TUJUAN ', 'LH ACC JAKARTA', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG', '3116 Feby'),
(87, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:33:06', 'BTS-000077', 'REGULER', 'JAKARTA', 'bogor', '4000', 74, 'BAJU', 0, 0, 0, 2, '296000', 'LUNAS', 'POP UP STORE ', 'PROBLEM ', '081314226363', '085716447672', '-', 'Kampung babakan gang kujang Rt 04/02 Kec, Banjar Waru. Kab, Bogor ', '3116 Feby'),
(88, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:38:22', 'BTS-000078', 'REGULER', 'JAKARTA', 'BANDUNG', '4000', 62, 'BAJU', 0, 0, 0, 1, '248000', 'BAYAR TUJUAN ', 'POP UP STORE ', 'TDE ORIGINAL ', '081314226363', '081320974536', '-', 'Jl Gumuruh No. 165 RT 09/06 Kel, Kemaruh . Kel Batu Nunggal . Bandung ', '3116 Feby'),
(89, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:43:47', 'BTS-000079', 'REGULER', 'JAKARTA', 'BANDUNG', '4000', 51, 'BAJU ', 0, 0, 0, 2, '204000', 'LUNAS', 'POP UP STORE ', 'MAGOT ', '081314226363', '081321040974', '-', 'Jl Sauyunan Raya No. 21 Kel , Kebon Loa. Kec, Bojong loa kidul Bandung ', '3116 Feby'),
(90, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:47:17', 'BTS-000080', 'REGULER', 'JAKARTA', 'BANDUNG', '4000', 57, 'BAJU ', 0, 0, 0, 2, '228000', 'LUNAS', 'POP UP STORE ', 'OFFICIAL SOMEONE', '081314226363', '087778164185', '-', 'Jl. Raya H. Bardan No. 71B Kel, Kujang Sari . Kec, Bandung Kidul . Kota Bandung ', '3116 Feby'),
(91, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-19 16:58:34', 'BTS-000081', 'REGULER', 'JAKARTA', 'BANTUL ', '6000', 43, 'BAJU', 0, 0, 0, 1, '258000', 'LUNAS', 'POP UP STORE ', 'ANDY HAFE WORD WIDE ', '081314226363', '089673567776', '-', 'Jl. Plakaran. Batu Retno Rt 01. Bangun tapan  Bantul ', '3116 Feby'),
(93, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:22:35', 'BTS-000082', 'REGULER', 'bandung', 'JAKARTA', '12000', 4, 'PANGGANGAN & KOMPOR', 0, 0, 0, 4, '48000', 'BAYAR TUJUAN', 'GLORIA', 'PT. IDEA LIFE MAKMUR', '4238177', '02156982691', '/Ball', 'Komp. Sentra Industri Terpadu Blok D1 No.49, Jl. Kamal Muara VII PIK Jakarta Utara', '3116 Feby'),
(94, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:29:05', 'BTS-000083', 'REGULER', 'bandung', 'MAKASAR', '7500', 50, 'BASO ACI', 0, 0, 0, 2, '375000', 'KEMBALI KE BANDUNG ( INVOICE )', 'BAPPER FOOD', 'SRI HARDINA JAMIL', '0', '085244036052', 'Charge Minimum', 'Jl. Sukamaju 6 No. 66 Tamamaung Panakukang Makasar', '3112 Yusup Sobarna'),
(95, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:40:18', 'BTS-000084', 'REGULER', 'bandung', 'JAKARTA', '1000', 96, 'FURNITURE', 83, 41, 112, 1, '96000', 'KEMBALI KE BANDUNG ( INVOICE )', 'IMAGI KIDDY', 'VIERDA VALENTINA', '08122033316', '081212577885', 'JANGAN DI TINDIH', 'GREEN HARMONIS RESIDENCE KAV. 8 \r\nJL. CILIWUNG 1 RT10/76 CANDET \r\nJAKARTA TIMUR', '3112 Yusup Sobarna'),
(96, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:45:09', 'BTS-000085', 'REGULER', 'bandung', 'JAKARTA', '1000', 44, 'FURNITURE', 137, 63, 20, 1, '44000', 'KEMBALI KE BANDUNG ( INVOICE )', 'IMAGI KIDDY', 'MERRY LAURA', '08122033316', '081217899903', 'FRAGILE', 'APARTEMEN SUNTER ICON TOWER WEST\r\nUNIT 705\r\nJL. GRIYA SEJAHTERA NO 1 SUNTER JAKARTA UTARA', '3112 Yusup Sobarna'),
(97, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:49:19', 'BTS-000086', 'REGULER', 'bandung', 'SURABAYA', '2000', 35, 'FURNITURE', 103, 21, 64, 1, '70000', 'KEMBALI KE BANDUNG ( INVOICE )', 'IMAGI KIDDY', 'FELICIA TANJAYA ', '08122033316', '081235415151', 'FRAGILE', 'GRAHA FAMILY-N , 155 BATATAN WIYUNG SURABAYA ', '3112 Yusup Sobarna'),
(98, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 17:57:04', 'BTS-000087', 'REGULER', 'bandung', 'SURABAYA', '2000', 62, 'FURNITURE', 47, 43, 122, 1, '124000', 'KEMBALI KE BANDUNG ( INVOICE )', 'IMAGI KIDDY', 'ELISSA', '08122033316', '082232925288', 'FRAGILE', 'JL. LEBAK PERMAI 2 NO.11 GADING TAMBAK SARI \r\nSURABAYA', '3112 Yusup Sobarna'),
(99, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 18:01:43', 'BTS-000088', 'REGULER', 'bandung', 'TANGERANG', '2000', 64, 'FURNITURE', 0, 0, 0, 2, '128000', 'KEMBALI KE BANDUNG ( INVOICE )', 'IMAGI KIDDY', 'DIAN ', '08122033316', '87883308831', 'DIMENSI', 'GREEN LAKE CITY CLUSTER EUROPE TANGERANG', '3112 Yusup Sobarna'),
(100, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 19:02:55', 'BTS-000089', 'REGULER', 'bandung', 'JAKARTA', '800', 308, 'KAIN', 0, 0, 0, 4, '246400', 'KEMBALI KE BANDUNG ( INVOICE )', 'Hung, RAHMAT TEX', 'MR RAJIV, HEMA TEX', '0', '0216124771', 'Kilo Akhir Rp 25.000', 'Grand Boutique Center Blok E No. 23 Jl. Mangga Dua Raya Jakarta', '3114 Diki Saepudin'),
(101, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-19 19:06:05', 'BTS-000090', 'REGULER', 'bandung', 'JAKARTA', '800', 459, 'KAIN', 0, 0, 0, 4, '367200', 'KEMBALI KE BANDUNG ( INVOICE )', 'Hung, RAHMAT TEX', 'Surya Tirta Mas', '0', '0216128330', 'Kilo Akhir Rp 25.000', 'Mangga Dua Raya Ruko Textile Blok D2 No 5 Jakarta', '3114 Diki Saepudin'),
(102, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-20 11:18:59', 'BTS-000091', 'REGULER', 'JAKARTA', 'BANDUNG', '87500', 1, 'ACCECORIS', 0, 0, 0, 5, '87500', 'BAYAR TUJUAN ', 'LH ACC JAKARTA', 'HJ UJANG MAINAN ', '0', '0', '-', 'Bandung ', '3116 Feby'),
(103, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-20 11:37:04', 'BTS-000092', 'REGULER', 'bandung', 'TANGERANG', '2000', 475, 'KONVEKSI', 0, 0, 0, 13, '950000', 'BAYAR TUJUAN', 'DENDI', 'HEYHO GROUP INDONESIA', '087822944777', '08119937078', '-', 'Jl. Masjid Nurul Fajri 1 No. 5 Pd. Jaya Kec. Pd. Aren Tangerang Selatan', '3114 Diki Saepudin'),
(104, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-20 13:42:58', 'BTS-000093', 'REGULER', 'JAKARTA', 'BANDUNG', '40000', 1, 'MAINAN', 0, 0, 0, 1, '40000', 'LUNAS', 'HANS TOY', 'LIDIA ', '0216904026', '081225585023', '-', 'Kota baru parahyangan tatar wangsakerta Jl, Wangsamadya Wetan 5. Padalarang. Kab bandung Barat.', '3116 Feby'),
(105, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-20 14:22:25', 'BTS-000094', 'REGULER', 'bandung', 'YOGYAKARTA', '1000000', 1, 'ECO RACING', 0, 0, 0, 71, '1000000', 'KEMBALI KE BANDUNG', 'DERY', 'AJI', '0', '0', '-', 'Jl. Jambon No. 100 Yogyakarta', '3113 Ujang Hendrayana'),
(106, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-20 15:01:51', 'BTS-000095', 'REGULER', 'bandung', 'BANDUNG', '600000', 1, 'KAIN', 0, 0, 0, 99, '600000', 'LUNAS', 'PT POPULAR DAENONG INDONESIA', 'BPK. HERY', '0', '0', 'CARTER', 'Jl. Pelajar Pejuang No 122 Bandung', '3112 Yusup Sobarna'),
(109, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-20 16:24:04', 'BTS-000096', 'REGULER', 'bandung', 'BEKASI', '1500', 114, 'APD', 0, 0, 0, 6, '171000', 'KEMBALI KE BANDUNG ( INVOICE )', 'BERKAH LANGGENG SUKSES', 'AMELIA NAAMAN', '0226675024', '087877555818', '-', 'RS SILOAM BEKASI TIMUR BLU PLAZA\r\nJL. CHAIRIL ANWAR NO 27 RT 04/09\r\nMARGAHAYU BEKASI TIMUR ', '3113 Ujang Hendrayana'),
(110, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-20 16:40:30', 'BTS-000097', 'REGULER', 'JAKARTA', 'BANDUNG', '65000', 1, 'ACCECORIS', 0, 0, 0, 3, '65000', 'BAYAR TUJUAN ', 'Toko Iwan ', 'HJ UJANG MAINAN ', '085280803388', '0', '-', 'Bandung ', '3116 Feby'),
(111, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-21 11:49:54', 'BTS-000098', 'REGULER', 'JAKARTA', 'MAKASSAR', '10000', 129, 'TEMPAT SAMPAH PLASTIK ', 0, 0, 0, 14, '1290000', 'LUNAS', 'BASRI ', 'DANIYAL MANAI ', '0', '081342976264', 'JANGAN DI BANTING !', 'POROS ABDULLAH DG SIRVA. JL. PAROPO 3 NO. 17A KELURAHAN PAROPO. KECAMATAN PANAKKUKANG. MAKASAR 90233', '3116 Feby'),
(112, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-22 09:45:38', 'BTS-000099', 'REGULER', 'JAKARTA', 'BANDUNG', '17500', 1, 'ACCECORIS', 0, 0, 0, 1, '17500', 'BAYAR TUJUAN ', 'LH ACC JAKARTA', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG', '3116 Feby'),
(114, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-22 14:00:13', 'BTS-000101', 'REGULER', 'JAKARTA', 'BANDUNG', '450000', 1, 'ACCECORIS', 0, 0, 0, 30, '450000', 'BAYAR TUJUAN ', 'SUFANG', 'X-MAT SOUVENIR ', '082157195487', '081931207354', 'JANGAN DI BANTING!', 'JL. SUTUR 18 KARANG ANYAR CIBADAK BANDUNG ', '3116 Feby'),
(115, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-22 15:48:36', 'BTS-000102', 'REGULER', 'bandung', 'JAKARTA', '80000', 1, 'KONVEKSI', 0, 0, 0, 1, '80000', 'LUNAS', 'Mozart', 'mandy jesika', '0', '081806710661', 'minimum charge', 'PT Toffin Indonesia Jl. Pluit Permai No. 4 Rt 20/02 Pluit Penjaringan Jakarta Utara ', '3115 Asep Sopian'),
(116, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-22 16:00:15', 'BTS-000103', 'REGULER', 'JAKARTA', 'BANDUNG', '120000', 1, 'ACCECORIS', 0, 0, 0, 8, '120000', 'BAYAR TUJUAN ', 'Bapa Edi ', 'X-MAT SOUVENIR ', '08129408592', '081991207354', 'JANGAN DI BANTING!', 'JL. SUTUR 18 KARANG ANYAR. CIBADAK BANDUNG ', '3116 Feby'),
(117, 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-22 17:54:17', 'BTS-000104', 'REGULER', 'SURABAYA', 'MEDAN', '7500', 30, 'kain', 0, 0, 0, 1, '225000', 'bayar tujuan', 'ibu Agnes', 'Yanti', '081235614700', '088262035773', 'cas minimum 30kg', 'ibu Yanti Citra land Gama city ruko RG No 11 Medan', '3117 Rukmana'),
(118, 'SOLO-001', 'solo@bts-cargo.com', '2020-10-22 23:27:49', 'BTS-000105', 'REGULER', 'SOLO', 'BEKASI', '5000', 300, 'crank shaft', 0, 0, 0, 4, '1500000', 'Cash', 'Bp. Ari', 'PT. Technospray Metalindo', '082220353744', '081210814828', 'DP 1.000.000', 'Jl. Cikunir Raya NO 36, Jaka Mulya, Kec. Jatiasih, Kota Bekasi. Jawa Barat 17423', '3120 Setio'),
(119, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 09:04:52', 'BTS-000106', 'REGULER', 'JAKARTA', 'BANDUNG', '850000', 1, 'VAVE / ROKOK ELEKTRIK', 0, 0, 0, 20, '850000', 'LUNAS', 'BAPAK HANS (FRENTE)', 'BAPA GALIH ', '0', '087710789142', '-', 'KOMPLEK DAICHI NO.52 JALAN TERUSAN JAKARTA UTARA ANTAPANI BANDUNG 40291', '3116 Feby'),
(120, 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-23 09:50:18', 'BTS-000107', 'REGULER', 'SURABAYA', 'MEDAN', '7500', 30, 'kain', 0, 0, 0, 1, '225000', 'bayar tujuan', 'ibu Agnes', 'Yanti', '081235614700', '088262035773', '.', 'Ibu Yanti  Citra Land Gama City Ruko RG No 11 -Medan', '3117 Rukmana'),
(121, 'SRBY-001', 'surabaya@bts-cargo.com', '2020-10-23 10:19:38', 'BTS-000108', 'REGULER', 'SURABAYA', 'MEDAN', '7500', 30, 'kain', 0, 0, 0, 1, '225000', 'bayar tujuan', 'ibu Agnes', 'Yanti', '081235614700', '088262035773', '.', 'Ibu Yanti   Citra Land Gama City Ruko RG No 11-Medan', '3117 Rukmana'),
(122, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 11:47:23', 'BTS-000109', 'REGULER', 'JAKARTA', 'BANDUNG', '1078000', 1, 'PELASTIK', 0, 0, 0, 49, '1078000', 'BAYAR TUJUAN ', 'DOREMI', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(123, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 14:28:42', 'BTS-000110', 'REGULER', 'JAKARTA', 'BANDUNG', '400000', 1, 'DRUM ', 0, 0, 0, 1, '400000', 'LUNAS', 'PT GRAHA MANUNGGAL GEMILANG ', 'PT BHUMIADYA INDONESIA ( BAPAK KIKI)', '082213403788', '08112070383', '-', 'JL. RAYA CITATAH KM.29 RT 03. DESA CITATAH, KEC, CIPATA. BANDUNG BARAT - JAWA BARAT ', '3116 Feby'),
(124, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 14:46:31', 'BTS-000111', 'REGULER', 'bandung', 'MAKASAR', '6000', 70, 'BASO ACI', 0, 0, 0, 2, '420000', 'BAYAR TUJUAN', 'BAPPER FOOD', 'MAGFIRAH', '0', '081355520346', '-', 'Jl. Todopuli 10, Perum Grand Sulawesi Blok A No. 4, Kec. Manggala Kel. Barong\r\n', '3112 Yusup Sobarna'),
(125, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-23 15:12:20', 'BTS-000112', 'REGULER', 'JAKARTA', 'BANDUNG', '857500', 1, 'BALON ', 0, 0, 0, 49, '857500', 'BAYAR TUJUAN ', 'ESQUIRE JAKARTA ', 'HJ UJANG MAINAN ', '0216011770', '0', '-', 'BANDUNG ', '3116 Feby'),
(126, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 15:25:37', 'BTS-000113', 'REGULER', 'bandung', 'JAKARTA', '1000', 110, 'KONVEKSI', 0, 0, 0, 1, '110000', 'KEMBALI KE BANDUNG ( INVOICE )', 'BSM Bandung', 'PT AMPALU INDAH LESTARI', '081220955674', '0215413630', 'F4722', 'Jl Kapuk Raya No.8 Jakarta Barat', '3112 Yusup Sobarna'),
(127, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 15:29:17', 'BTS-000114', 'REGULER', 'bandung', 'JAKARTA', '1000', 38, 'KONVEKSI', 0, 0, 0, 1, '38000', 'KEMBALI KE BANDUNG ( INVOICE )', 'BSM Bandung', 'PT AMPALU INDAH LESTARI', '081220955674', '0215413630', 'F4723', 'Jl. Kapuk Raya No. 8 Jakarta Barat', '3112 Yusup Sobarna'),
(128, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 15:30:58', 'BTS-000115', 'REGULER', 'bandung', 'JAKARTA', '1000', 46, 'KONVEKSI', 0, 0, 0, 1, '46000', 'KEMBALI KE BANDUNG ( INVOICE )', 'BSM Bandung', 'PT AMPALU INDAH LESTARI', '081220955674', '0215413630', 'F724', 'Jl. Kapuk Raya No.8 Jakarta Barat', '3112 Yusup Sobarna'),
(129, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-23 15:33:45', 'BTS-000116', 'REGULER', 'bandung', 'JAKARTA', '1000', 41, 'KONVEKSI', 0, 0, 0, 1, '41000', 'KEMBALI KE BANDUNG ( INVOICE )', 'BSM Bandung', 'PT AMPALU INDAH LESTARI', '081220955674', '0215413630', 'F4725', 'Jl. Kapuk Raya No. 8 Jakarta Barat', '3112 Yusup Sobarna'),
(130, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-24 11:02:56', 'BTS-000117', 'REGULER', 'bandung', 'TANGERANG', '2000', 225, 'KONVEKSI', 0, 0, 0, 7, '450000', 'BAYAR TUJUAN', 'DENDI', 'HEYHO GROUP INDONESIA', '087822944777', '08119937078', '-', 'Jl. Masjid Nurul Fajri 1 No. 5 Pd. Jaya Kec. Pd. Aren Tangerang Selatan', '3114 Diki Saepudin'),
(131, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-24 13:32:50', 'BTS-000118', 'REGULER', 'JAKARTA', 'BANDUNG', '150000', 1, 'BAJU', 0, 0, 0, 3, '150000', 'BAYAR TUJUAN ', 'BAPA WADI ', 'DAVIN BANDUNG ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(132, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-26 14:35:50', 'BTS-000119', 'REGULER', 'bandung', 'MEDAN', '6000', 107, 'KAIN', 0, 0, 0, 1, '642000', 'BAYAR TUJUAN', 'KANDA FABRIC', 'YANTI OSAKA', '081287156587', '088262035773', '-', 'Citraland Gama City Ruko R6 No. 11 Medan', '3114 Diki Saepudin'),
(133, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-26 14:38:05', 'BTS-000119', 'REGULER', 'JAKARTA', 'cimahi ', '40000', 1, 'NAMPAN ', 0, 0, 0, 1, '40000', 'LUNAS', 'MONICA ', 'TAUFIK/CEOT ', '081315109939', '088229378840', 'JANGAN DI BANTING !', 'JL KOLONEL MASTURI NO.85 CIPANGERAN, CIMAHI UTARA ( MASUK RUKO YANG ADA ALEXA VAPE, UJUNG SAMPE MENTOK) ', '3116 Feby'),
(134, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-26 14:38:58', 'BTS-000120', 'REGULER', 'bandung', 'JAKARTA', '1500000', 1, 'KAIN', 0, 0, 0, 0, '1500000', 'LUNAS', 'PT POPULAR DAENONG INDONESIA', 'Gudang KBN Cakung Priok', '0', '0', 'Carter', 'Gudang KBN Cakung Priok', '3112 Yusup Sobarna'),
(135, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-26 14:57:21', 'BTS-000121', 'EXPRESS', 'bandung', 'GARUT', '6000', 30, 'KIMIA', 0, 0, 0, 1, '180000', 'LUNAS', 'MATAPEL', 'ASEP SUHERMAN', '0', '081394561956', '-', 'Desa Cibiuk Kaler Rt 04/05 KP. Gandayayi  Kec. Cibiuk Kab. Garut', '3114 Diki Saepudin'),
(136, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-26 15:35:23', 'BTS-000122', 'REGULER', 'bandung', 'YOGYAKARTA', '1000000', 1, 'ECO RACING', 0, 0, 0, 58, '1000000', 'KEMBALI KE BANDUNG ( INVOICE )', 'DERY', 'AJI', '0', '0', '-', 'Jl. Jambon No. 100 Yogyakarta', '3113 Ujang Hendrayana'),
(138, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-26 16:20:06', 'BTS-000123', 'REGULER', 'JAKARTA', 'BANDUNG', '160000', 1, 'ALAT PANJAT TIANG ', 0, 0, 0, 2, '160000', 'BAYAR TUJUAN ', 'Feby ( Cv. Bumi Trans Suhaya  Jakarta) ', 'BAPAK HERI ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(140, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-27 12:53:00', 'BTS-000124', 'REGULER', 'JAKARTA', 'BANDUNG', '87500', 1, 'ACCECORIS', 0, 0, 0, 7, '87500', 'BAYAR TUJUAN ', 'MATAHARI ', 'SAIFUL ', '0', '0', 'JANGAN DI BANTING !', 'BANDUNG ', '3116 Feby'),
(141, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-27 12:56:08', 'BTS-000125', 'REGULER', 'bandung', 'MAKASAR', '6000', 70, 'BASO ACI', 0, 0, 0, 2, '420000', 'KEMBALI KE BANDUNG ( INVOICE )', 'BAPPER FOOD', 'MAGFIRAH', '0', '081355520340', '-', 'Grand Sulawesi Blok A No. 4 Barong Mangala Makasar', '3112 Yusup Sobarna'),
(142, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-27 15:48:24', 'BTS-000126', 'REGULER', 'bandung', 'JAKARTA', '800', 555, 'KAIN', 0, 0, 0, 8, '444000', 'KEMBALI KE BANDUNG ( INVOICE )', 'Hung, RAHMAT TEX', 'DHARAMDAS', '0', '0216128081', 'KG akhir Rp. 25.000', 'Ruko Textile Mangga Dua Blok D2 No. 31, Jakarta Utara', '3114 Diki Saepudin'),
(143, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 10:58:32', 'BTS-000127', 'REGULER', 'JAKARTA', 'BANDUNG', '22000', 3, 'ACCECORIS', 0, 0, 0, 3, '66000', 'BAYAR TUJUAN ', 'LH ACC JAKARTA', 'HJ UJANG MAINAN ', '02122634148', '0', '-', 'BANDUNG', '3116 Feby'),
(144, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 13:17:11', 'BTS-000128', 'REGULER', 'JAKARTA', 'BANDUNG', '17500', 10, 'ACCECORIS', 0, 0, 0, 10, '175000', 'BAYAR TUJUAN ', 'LH ACC JAKARTA', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG', '3116 Feby'),
(145, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-28 14:06:54', 'BTS-000129', 'REGULER', 'bandung', 'JAKARTA', '800', 331, 'KAIN', 0, 0, 0, 4, '264800', 'KEMBALI KE BANDUNG ( INVOICE )', 'Hung, RAHMAT TEX', 'MS TEX ( MR. SONY)', '0', '0216015306', 'Kg Akhir Rp. 25.000', 'Jl. Mangga Dua Raya Komp. Ruko Textile Mangga dua Blok C2-27, Jakarta', '3114 Diki Saepudin'),
(146, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 14:35:42', 'BTS-000130', 'REGULER', 'JAKARTA', 'BANDUNG', '2000', 97, 'ALAT LISTRIK ', 0, 0, 0, 4, '194000', 'BAYAR TUJUAN ', 'Feby ( Cv. Bumi Trans Suhaya  Jakarta) ', 'BAPAK EVAN ', '0', '081221205367', 'JANGAN DI BANTING!', 'KAV. NUSA INDAH RT 01/14 DESA RANCAMANYAR. KEC, BALEENDAH NO.122', '3116 Feby'),
(147, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-28 15:25:42', 'BTS-000131', 'REGULER', 'bandung', 'BEKASI', '1500', 50, 'APD', 0, 0, 0, 2, '75000', 'KEMBALI KE BANDUNG ( INVOICE )', 'PT BERKAH LANGGENG SUKSES', 'RS SILOAM', '0', '087877555818', 'Minimum Charge 50 Kg', 'BLU Plaza Jl. Chairil Anwar No. 27 Rt/ 04/09 Margahayu Bekasi Timur', '3113 Ujang Hendrayana'),
(148, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 16:22:37', 'BTS-000132', 'REGULER', 'JAKARTA', 'BANDUNG', '22000', 11, 'PELASTIK', 0, 0, 0, 11, '242000', 'BAYAR TUJUAN ', 'DOREMI', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(149, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 17:09:50', 'BTS-000133', 'REGULER', 'JAKARTA', 'BANDUNG', '20000', 6, 'ACCECORIS', 0, 0, 0, 6, '120000', 'BAYAR TUJUAN ', 'LH ACC JAKARTA', 'HJ UJANG MAINAN ', '0', '0', '-', 'BANDUNG', '3116 Feby'),
(150, 'jak-001', 'jakarta@bts-cargo.com', '2020-10-28 18:09:31', 'BTS-000134', 'REGULER', 'JAKARTA', 'BANDUNG', '4000', 44, 'FURNITURE', 110, 38, 79, 3, '176000', 'BAYAR TUJUAN ', 'IBU VIERDA VALENTINA', 'IBU MEILINE (IMAGI KIDDY)', '0', '0', '-', 'BANDUNG ', '3116 Feby'),
(151, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-30 16:46:40', 'BTS-000135', 'REGULER', 'bandung', 'JAKARTA', '1000', 77, 'KONVEKSI', 0, 0, 0, 1, '77000', 'KEMBALI KE BANDUNG ( INVOICE )', 'BSM Bandung', 'CINTA SAUDARA', '081220955674', '0', '-', 'Jl. KH. Wahid Hasyim 159A Tanah Abang', '3113 Ujang Hendrayana'),
(152, 'bdg-001', 'bandung@bts-cargo.com', '2020-10-30 16:49:55', 'BTS-000136', 'REGULER', 'bandung', 'JAKARTA', '1000', 246, 'KONVEKSI', 0, 0, 0, 2, '246000', 'KEMBALI KE BANDUNG ( INVOICE )', 'BSM Bandung', 'MEDAN EXPRESS', '081220955674', '02139103851', '-', 'Jl. Kebon Kacang I No. 32 Jakarta Pusat', '3113 Ujang Hendrayana');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_resi`
--

CREATE TABLE `tracking_resi` (
  `id` int(50) NOT NULL,
  `no_resi` text NOT NULL,
  `username_kurir` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tracking_resi`
--

INSERT INTO `tracking_resi` (`id`, `no_resi`, `username_kurir`, `waktu`, `keterangan`) VALUES
(3, 'BTS-000004', 'kur-001', '2020-09-25 23:56:25', 'engkau bagai air yang jernih'),
(4, 'BTS-000005', 'kur-001', '2020-09-25 23:56:51', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that '),
(7, 'BTS-000004', 'kur-001', '2020-10-03 11:56:27', 'SUDAH DI PICK UP OLEH KURIR'),
(8, 'BTS-000004', 'kur-001', '2020-10-03 11:56:51', 'SUDAH SAMPAI DI KOTA TASIKMALAYA'),
(9, 'BTS-000004', 'kur-001', '2020-10-03 11:57:20', 'SUDAH DITERIMA OLEH: ,,,,'),
(10, 'BTS-000005', 'kur-001', '2020-10-03 12:48:31', 'GUDANG BANDUNG'),
(11, 'BTS-000008', 'kur-001', '2020-10-03 15:34:47', 'Begok Kebingungan'),
(12, 'BTS-000008', 'kur-001', '2020-10-03 15:42:05', 'SAMPAI DI BANDUNG'),
(13, 'BTS-000008', 'kur-001', '2020-10-03 15:42:18', 'BARANG SUDAH SAMPAI'),
(14, 'BTS-000009', 'kur-001', '2020-10-03 15:49:50', 'SEDANG DI  JALAN'),
(15, 'BTS-000009', 'kur-001', '2020-10-03 15:50:09', 'MAKAN'),
(16, 'BTS-000011', 'KUR-003', '2020-10-04 13:47:11', 'BARANG DITERIMA DI KANTOR BTS'),
(17, 'BTS-000011', 'KUR-003', '2020-10-04 13:48:25', 'BARANG DITERUSKAN KE TUJUAN'),
(18, 'BTS-000001', 'kur-001', '2020-10-07 15:40:25', 'sUDAH SAMPAI CENGKARENG'),
(20, 'BTS-000004', 'kur-001', '2020-10-08 12:48:38', 'gUDANG bANDUNG'),
(21, 'BTS-000003', 'kur-001', '2020-10-08 12:49:56', 'sUDAH SAMPAI ALAMAT TUJUAN'),
(22, 'BTS-000004', 'kur-001', '2020-10-09 10:20:22', 'SEDANG DALAM PERJALANAN'),
(24, 'BTS-000006', 'kur-001', '2020-10-09 10:21:28', 'sEDANG DALAM pERJALANAN'),
(25, 'BTS-000007', 'kur-001', '2020-10-09 10:21:41', 'SEDANG DALAM PERJALANAN'),
(26, 'BTS-000005', 'kur-001', '2020-10-09 10:23:04', 'bARANG sUDAH SAMPAI aLAMAT TUJUAN'),
(27, 'BTS-000008', 'kur-001', '2020-10-09 10:23:38', 'gUDANG bANDUNG'),
(28, 'BTS-000009', 'kur-001', '2020-10-09 10:24:03', 'gUDANG BANDUNG'),
(29, 'BTS-000010', 'kur-001', '2020-10-09 10:24:56', 'bARANG SUDAH SAMAPAI ALAMAT TUJUAN'),
(30, 'BTS-000004', 'kur-001', '2020-10-09 13:56:35', 'Sudah sampai surabaya'),
(31, 'BTS-000006', 'kur-001', '2020-10-09 13:57:07', 'Sudah sampai surabaya'),
(32, 'BTS-000007', 'kur-001', '2020-10-09 13:57:26', 'Sudah sampai surabaya'),
(33, 'BTS-000011', 'kur-002', '2020-10-09 16:26:20', 'SEDANG DI PROSES '),
(34, 'BTS-000012', 'kur-002', '2020-10-09 16:26:39', 'SEDANG DI PROSES '),
(35, 'BTS-000013', 'kur-002', '2020-10-09 16:27:06', 'SEDANG DI PROSES '),
(36, 'BTS-000014', 'kur-002', '2020-10-09 16:27:17', 'SEDANG DI PROSES '),
(37, 'BTS-000011', 'kur-002', '2020-10-09 17:50:55', 'Dalam PERJALANAN KE BANDUNG '),
(38, 'BTS-000012', 'kur-002', '2020-10-09 17:51:07', 'DALAM PERJALANAN KE BANDUNG '),
(39, 'BTS-000013', 'kur-002', '2020-10-09 17:51:17', 'DALAM PERJALANAN KE BANDUNG '),
(40, 'BTS-000014', 'kur-002', '2020-10-09 17:51:28', 'DALAM PERJALANAN KE BANDUNG '),
(41, 'BTS-000011', 'kur-002', '2020-10-10 10:02:41', 'Sampai Ke gudang bandung '),
(42, 'BTS-000012', 'kur-002', '2020-10-10 10:02:52', 'SAMPAI KE GUDANG BANDUNG '),
(43, 'BTS-000013', 'kur-002', '2020-10-10 10:03:08', 'SAMPAI KE GUDANG BANDUNG '),
(44, 'BTS-000014', 'kur-002', '2020-10-10 10:03:39', 'SAMPAI KE GUDANG BANDUNG '),
(45, 'BTS-000012', 'kur-002', '2020-10-10 12:11:14', 'bARANG SUDAH SAMPAI DI ALAMAT TUJUAN'),
(46, 'BTS-000014', 'kur-002', '2020-10-10 12:11:48', 'BARANG SUDAH SAMPAI DI ALAMAT TUJUAN'),
(47, 'BTS-000004', 'kur-001', '2020-10-20 12:07:52', 'barang sudah Diterima oleh dea'),
(48, 'BTS-000006', 'kur-001', '2020-10-20 12:46:50', 'barang sudah diterima oleh bpk. indra'),
(49, 'BTS-000018', 'kur-002', '2020-10-10 14:25:31', 'SEDANG DI PROSES'),
(50, 'BTS-000013', 'kur-002', '2020-10-10 15:02:32', 'barang sudah sampai di alamat tujuan '),
(51, 'BTS-000017', 'kur-002', '2020-10-10 15:35:06', 'SEDANG DI PROSES \r\n'),
(52, 'BTS-000020', 'kur-002', '2020-10-10 17:51:33', 'SEDANG DI PROSES'),
(53, 'BTS-000024', 'kur-002', '2020-10-10 21:40:10', 'SEDANG DI PROSES'),
(54, 'BTS-000017', 'kur-002', '2020-10-10 22:14:56', 'jalan ke gudang bandung '),
(55, 'BTS-000018', 'kur-002', '2020-10-10 22:15:53', 'JALAN KE GUDANG BANDUNG '),
(56, 'BTS-000020', 'kur-002', '2020-10-10 22:16:08', 'JALAN KE GUDANG BANDUNG '),
(57, 'BTS-000024', 'kur-002', '2020-10-10 22:16:23', 'JALAN KE GUDANG BANDUNG '),
(60, 'BTS-000017', 'kur-002', '2020-10-12 10:04:20', 'sedang dalam perjalanan ke gudang surabaya '),
(61, 'BTS-000020', 'kur-002', '2020-10-12 10:05:03', 'sedang dalam perjalanan ke gudang surabaya '),
(62, 'BTS-000024', 'kur-002', '2020-10-12 10:05:19', 'SEDANG DALAM PERJALANAN KE GUDANG SURABAYA '),
(63, 'BTS-000011', 'kur-002', '2020-10-12 10:29:52', 'SEDANG DALAM PERJALANAN KE ALAMAT PENERIMA '),
(64, 'BTS-000011', 'kur-002', '2020-10-12 11:33:09', 'BARANG SUDAH DI TERIMA '),
(65, 'BTS-000007', 'kur-001', '2020-10-12 11:34:20', 'BARANG DALAM PERJALANAN SURABAYA - MAKASAR'),
(66, 'BTS-000015', 'kur-001', '2020-10-12 11:36:30', 'SUDAH SAMPAI JAKARTA'),
(67, 'BTS-000021', 'kur-001', '2020-10-12 11:37:46', 'sUDAH SAMPAI JAKARTA'),
(68, 'BTS-000023', 'kur-001', '2020-10-12 11:38:07', 'sUDAH sAMPAI jAKARTA'),
(69, 'BTS-000009', 'kur-001', '2020-10-12 14:10:19', 'barang sudah sampai alamat tujuan'),
(70, 'BTS-000023', 'kur-001', '2020-10-20 12:26:14', 'Sudah diterima oleh ibu lia'),
(71, 'BTS-000015', 'kur-001', '2020-10-12 14:10:57', 'barang sudah sampai alamat tujuan'),
(72, 'BTS-000026', '', '2020-10-12 14:34:55', 'SEDANG DI PROSES '),
(73, 'BTS-000027', 'kur-002', '2020-10-12 15:30:12', 'SEDANG DI PROSES \r\n'),
(74, 'BTS-000018', 'kur-002', '2020-10-12 15:32:13', 'SAMPAI KE GUDANG BANDUNG '),
(75, 'BTS-000029', '', '2020-10-12 17:35:49', 'SEDANG DI PROSES'),
(76, 'BTS-000018', 'kur-002', '2020-10-12 17:41:06', 'BARANG SUDAH SAMPAI DIALAMAT TUJUAN '),
(77, 'BTS-000017', 'kur-002', '2020-10-12 17:55:36', 'sedang dalam perjalanan ke alamat tujuan '),
(78, 'BTS-000017', 'kur-002', '2020-10-12 19:26:51', 'Barang sudah sampai di alamat tujuan '),
(79, 'BTS-000028', 'kur-002', '2020-10-12 19:28:29', 'BarANG SUDAH SAMPAI DI GUDANG SURABAYA '),
(80, 'BTS-000024', 'kur-002', '2020-10-12 19:28:55', 'BARANG SUDAH SAMPAI DI GUDANG SURABAYA'),
(81, 'BTS-000029', 'kur-002', '2020-10-12 21:00:24', 'SEDANG DALAM PROSES '),
(82, 'BTS-000030', 'kur-002', '2020-10-12 21:00:41', 'SEDANG DALAM PROSES '),
(83, 'BTS-000031', 'kur-002', '2020-10-12 21:13:20', 'SEDANG DALAM PROSES '),
(84, 'BTS-000032', 'kur-002', '2020-10-12 21:13:33', 'SEDANG DALAM PROSES '),
(85, 'BTS-000033', 'kur-002', '2020-10-12 21:50:23', 'SEDANG DALAM PROSES '),
(86, 'BTS-000034', 'kur-002', '2020-10-12 21:50:39', 'SEDANG DALAM PROSES '),
(87, 'BTS-000019', 'kur-001', '2020-10-13 10:18:59', 'sedang menuju Lamongan'),
(88, 'BTS-000008', 'kur-001', '2020-10-20 12:15:11', 'barang sudah diterima oleh Budi'),
(89, 'BTS-000015', 'kur-001', '2020-10-20 12:27:40', 'Sudah Diterima oleh ibu gina'),
(90, 'BTS-000021', 'kur-001', '2020-10-20 12:26:42', 'sudah diterima oleh pak ikal'),
(91, 'BTS-000023', 'kur-001', '2020-10-13 10:37:56', 'Sudah sampai alamat tujuan'),
(92, 'BTS-000032', '', '2020-10-13 14:44:17', 'SEdANG DALAM PERJALANAN KE ALAMAT TUJUAN'),
(93, 'BTS-000031', 'kur-002', '2020-10-13 14:45:19', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(94, 'BTS-000035', 'kur-002', '2020-10-13 16:34:20', 'SEDANG DALAM PROSES'),
(95, 'BTS-000038', 'kur-002', '2020-10-13 16:35:01', 'SEDANG DALAM PROSES'),
(96, 'BTS-000028', 'kur-002', '2020-10-13 16:43:58', 'TELAH SAMPAI DI ALAMAT TUJUAN '),
(97, 'BTS-000024', 'kur-002', '2020-10-13 16:44:22', 'TELAH SAMPAI DI ALAMAT TUJUAN '),
(98, 'BTS-000032', 'kur-002', '2020-10-13 16:53:28', 'TELAH SAMPAI DI ALAMAT TUJUAN '),
(99, 'BTS-000031', 'kur-002', '2020-10-13 17:44:19', 'SUDAH SAMPAI DI ALAMAT TUJUAN '),
(100, 'BTS-000033', 'kur-002', '2020-10-14 10:24:27', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(101, 'BTS-000034', 'kur-002', '2020-10-14 10:24:39', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(102, 'BTS-000033', 'kur-002', '2020-10-14 11:14:21', 'BARANG SUDAH SAMPAI DI ALAMAT TUJUAN '),
(103, 'BTS-000034', 'kur-002', '2020-10-14 12:54:19', 'BARANG SUDAH SAMPAI DIALAMAT TUJUAN '),
(104, 'BTS-000041', 'kur-001', '2020-10-20 13:06:44', 'Barang Sudah Diterima Oleh bpk. Heri'),
(105, 'BTS-000007', 'kur-001', '2020-10-14 14:44:55', 'Sudah Sampai alamat tujuan'),
(106, 'BTS-000027', 'kur-002', '2020-10-15 10:12:09', 'Barang sampai gudang bandung '),
(107, 'BTS-000026', 'kur-002', '2020-10-15 10:12:49', 'SEDANG DI PROSES'),
(108, 'BTS-000026', 'kur-002', '2020-10-15 10:13:13', 'BARANG SAMPAI DI GUDANG BANDUNG '),
(109, 'BTS-000029', 'kur-002', '2020-10-15 10:13:44', 'BARANG SUDAH SAMPAI DI GUDANG BANDUNG '),
(110, 'BTS-000030', 'kur-002', '2020-10-15 10:15:52', 'BARANG SUDAH SAMPAI DI GUDANG BANDUNG '),
(111, 'BTS-000035', 'kur-002', '2020-10-15 10:16:16', 'BARANG SUDAH SAMPAI DI GUDANG BANDUNG '),
(112, 'BTS-000038', 'kur-002', '2020-10-15 10:16:46', 'BARANG SUDAH SAMPAI DI GUDANG BANDUNG '),
(113, 'BTS-000044', 'kur-002', '2020-10-15 10:17:08', 'BARANG SUDAH SAMPAI DI GUDANG BANDUNG '),
(114, 'BTS-000045', 'kur-002', '2020-10-15 10:18:13', 'BARANG SUDAH SAMPAI DI GUDANG BANDUNG '),
(115, 'BTS-000046', 'kur-002', '2020-10-15 10:18:41', 'BARANG SUDAH SAMPAI DI GUDANG BANDUNG '),
(116, 'BTS-000047', 'kur-002', '2020-10-15 10:19:06', 'BARANG SUDAH SAMPAI DI GUDANG BANDUNG '),
(117, 'BTS-000048', 'kur-002', '2020-10-15 10:19:33', 'BARANG SUDAH SAMPAI DI GUDANG BANDUNG '),
(118, 'BTS-000049', 'kur-002', '2020-10-15 10:20:06', 'BARANG SAMPAI DI GUDANG BANDUNG '),
(119, 'BTS-000050', 'kur-002', '2020-10-15 10:20:24', 'BARANG SAMPAI DI GUDANG BANDUNG '),
(120, 'BTS-000051', 'kur-002', '2020-10-15 10:20:51', 'BARANG SAMPAI DI GUDANG BANDUNG '),
(121, 'BTS-000052', 'kur-002', '2020-10-15 10:21:08', 'BARANG SUDAH SAMPAI DI GUDANG BANDUNG '),
(122, 'BTS-000051', 'kur-001', '2020-10-15 10:41:55', 'Sudah sampai alamat tujuan'),
(123, 'BTS-000049', '', '2020-10-15 11:14:01', 'SEDANG DALAM PERJALANAN MENUJU SOLO'),
(124, 'BTS-000054', 'kur-002', '2020-10-15 13:40:35', 'SEDANG DI PROSES '),
(125, 'BTS-000048', 'kur-002', '2020-10-15 14:31:28', 'BARANG SUDAH SAMPAI DI ALAMAT TUJUAN '),
(126, 'BTS-000029', 'kur-002', '2020-10-15 14:35:29', 'BARANG SUDAH SAMPAI DI ALAMAT TUJUAN '),
(127, 'BTS-000055', '', '2020-10-15 14:58:55', 'sedang di proses'),
(128, 'BTS-000026', 'kur-002', '2020-10-15 15:33:23', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(129, 'BTS-000044', 'kur-002', '2020-10-15 15:34:32', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(130, 'BTS-000045', 'kur-002', '2020-10-15 15:34:43', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(131, 'BTS-000046', 'kur-002', '2020-10-15 15:34:58', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(132, 'BTS-000036', 'kur-001', '2020-10-20 14:17:49', 'barang sudah diterima oleh bpk. andi'),
(133, 'BTS-000026', 'kur-002', '2020-10-15 15:52:45', 'BARANG SUDAH SAMPAI DI ALAMAT TUJUAN '),
(134, 'BTS-000049', 'kur-002', '2020-10-15 15:55:29', 'DI CIREBON'),
(135, 'BTS-000027', 'kur-002', '2020-10-15 17:12:17', 'BARANG SUDAH SAMPAI DI ALAMAT TUJUAN '),
(136, 'BTS-000030', 'kur-002', '2020-10-15 17:12:46', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(137, 'BTS-000035', 'kur-002', '2020-10-15 17:13:08', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(138, 'BTS-000038', 'kur-002', '2020-10-15 17:13:30', 'BARANG SUDAH SAMPAI KE ALAMAT TUJUAN '),
(139, 'BTS-000044', 'kur-002', '2020-10-15 17:14:43', 'BARANG SUDAH DITERIMA'),
(140, 'BTS-000045', 'kur-002', '2020-10-15 17:15:00', 'BARANG SUDAH DI TERIMA '),
(141, 'BTS-000046', 'kur-002', '2020-10-15 17:15:19', 'BARANG SUDAH DI TERIMA '),
(142, 'BTS-000047', 'kur-002', '2020-10-15 17:16:35', 'BARANG SUDAH DI TERIMA '),
(143, 'BTS-000049', 'kur-002', '2020-10-15 17:18:46', 'DI KEBUMEN '),
(144, 'BTS-000049', 'kur-002', '2020-10-16 09:20:40', 'BARANG TERKIRIM '),
(145, 'BTS-000030', 'kur-002', '2020-10-16 09:21:18', 'BARANG SUDAH TERKIRIM '),
(146, 'BTS-000035', 'kur-002', '2020-10-16 09:21:38', 'BARANG SUDAH TERKIRIM '),
(149, 'BTS-000058', 'kur-002', '2020-10-16 13:45:28', 'SEDANG DI PROSES'),
(150, 'BTS-000056', 'kur-002', '2020-10-16 13:46:13', 'SEDANG DI PROSES'),
(151, 'BTS-000057', 'kur-002', '2020-10-16 13:46:24', 'SEDANG DI PROSES'),
(152, 'BTS-000059', 'kur-002', '2020-10-16 13:46:35', 'SEDANG DI PROSES'),
(153, 'BTS-000051', 'kur-002', '2020-10-16 14:09:45', 'DI  GUDANG SURABAYA '),
(154, 'BTS-000050', 'kur-002', '2020-10-16 14:10:11', 'DI GUDANG SURABAYA '),
(155, 'BTS-000052', 'kur-002', '2020-10-16 14:10:30', 'DI GUDANG SURABAYA '),
(156, 'BTS-000063', 'kur-001', '2020-10-20 12:09:35', 'barang sudah diterima oleh Arif'),
(157, 'BTS-000054', '', '2020-10-17 15:09:28', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(158, 'BTS-000055', 'kur-002', '2020-10-17 15:09:58', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(159, 'BTS-000056', 'kur-002', '2020-10-17 15:10:09', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(160, 'BTS-000057', 'kur-002', '2020-10-17 15:10:29', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(161, 'BTS-000058', 'kur-002', '2020-10-17 15:10:44', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(162, 'BTS-000059', 'kur-002', '2020-10-17 15:11:00', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(163, 'BTS-000064', 'kur-002', '2020-10-17 15:11:19', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(164, 'BTS-000065', 'kur-002', '2020-10-17 15:11:37', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(165, 'BTS-000066', 'kur-002', '2020-10-17 15:12:00', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(166, 'BTS-000070', 'kur-002', '2020-10-17 15:12:13', 'SEDANG DI PROSES'),
(167, 'BTS-000062', 'kur-001', '2020-10-20 12:25:18', 'Sudah diterima oleh pak Riki'),
(168, 'BTS-000074', 'kur-002', '2020-10-17 17:38:46', 'SEDANG DI PROSES '),
(169, 'BTS-000054', 'kur-002', '2020-10-19 09:13:48', 'BARANG TERKIRIM '),
(170, 'BTS-000055', 'kur-002', '2020-10-19 09:14:10', 'BARANG TERKIRIM '),
(171, 'BTS-000056', 'kur-002', '2020-10-19 09:14:29', 'BARANG TERKIRIM '),
(172, 'BTS-000057', 'kur-002', '2020-10-19 09:14:50', 'BARANG TERKIRIM '),
(173, 'BTS-000058', 'kur-002', '2020-10-19 09:15:08', 'BARANG TERKIRIM '),
(174, 'BTS-000059', 'kur-002', '2020-10-19 09:15:23', 'BARANG TERKIRIM '),
(176, 'BTS-000065', 'kur-002', '2020-10-19 09:15:54', 'BARANG TERKIRIM '),
(177, 'BTS-000066', 'kur-002', '2020-10-19 09:16:10', 'BARANG TERKIRIM '),
(178, 'BTS-000050', 'kur-002', '2020-10-19 09:20:16', 'BARANG TERKIRIM '),
(179, 'BTS-000051', 'kur-002', '2020-10-19 09:20:29', 'BARANG TERKIRIM '),
(180, 'BTS-000052', 'kur-002', '2020-10-19 09:20:41', 'BARANG TERKIRIM '),
(181, 'BTS-000061', 'kur-001', '2020-10-20 12:34:08', 'barang sudah diterima oleh ibu elly r'),
(182, 'BTS-000060', 'kur-001', '2020-10-20 12:48:26', 'Barang Sudah Diterima Oleh Ibu Ocha'),
(183, 'BTS-000075', '', '2020-10-19 12:26:42', 'SEDANG DIPROSES'),
(184, 'BTS-000076', 'kur-002', '2020-10-19 13:21:57', 'SEDANG DI PROSES'),
(185, 'BTS-000077', 'kur-002', '2020-10-19 17:25:34', 'SEDANG DI PROSES'),
(186, 'BTS-000081', 'kur-002', '2020-10-19 17:25:51', 'SEDANG DI PROSES'),
(187, 'BTS-000075', 'kur-002', '2020-10-19 17:26:34', 'SEDANG DI PROSES'),
(188, 'BTS-000078', 'kur-002', '2020-10-19 17:27:18', 'SEDANG DI PROSES'),
(189, 'BTS-000079', 'kur-002', '2020-10-19 17:27:31', 'SEDANG DI PROSES'),
(190, 'BTS-000080', 'kur-002', '2020-10-19 17:27:51', 'SEDANG DI PROSES'),
(191, 'BTS-000063', 'kur-001', '2020-10-20 09:36:03', 'Sudah Sampai Jakarta'),
(192, 'BTS-000071', 'kur-001', '2020-10-20 09:37:06', 'Sudah Sampai Jakarta'),
(193, 'BTS-000072', 'kur-001', '2020-10-20 09:37:36', 'Sudah sampai jakarta'),
(194, 'BTS-000073', 'kur-001', '2020-10-20 09:38:41', 'Sudah sampai jakarta'),
(195, 'BTS-000082', 'kur-001', '2020-10-20 09:39:16', 'Sudah sampai jakarta'),
(196, 'BTS-000084', 'kur-001', '2020-10-20 09:39:47', 'Sudah Sampai jakarta'),
(197, 'BTS-000085', 'kur-001', '2020-10-20 12:38:31', 'Sudah diterima Oleh ibu/bpk sarmin'),
(198, 'BTS-000088', 'kur-001', '2020-10-20 09:40:25', 'sudah sampai jakarta'),
(199, 'BTS-000089', 'kur-001', '2020-10-20 09:40:44', 'sudah sampai jakarta'),
(200, 'BTS-000090', 'kur-001', '2020-10-20 09:41:00', 'sudah sampai jakarta'),
(201, 'BTS-000090', 'kur-001', '2020-10-20 10:03:39', 'Sudah sampai alamat tujuan'),
(202, 'BTS-000089', 'kur-001', '2020-10-20 12:40:25', 'barang sudah diterima oleh ibu Lia'),
(203, 'BTS-000039', 'kur-001', '2020-10-20 12:11:06', 'barang sudah diterima oleh Yuli'),
(204, 'BTS-000091', 'kur-002', '2020-10-20 14:27:06', 'SEDANG DI PROSES'),
(205, 'BTS-000093', 'kur-002', '2020-10-20 14:27:28', 'SEDANG DI PROSES'),
(206, 'BTS-000072', 'kur-001', '2020-10-20 14:59:14', 'Barang sudah diterima oleh BPk. barnai'),
(207, 'BTS-000073', 'kur-001', '2020-10-20 15:39:00', 'Barang sudah diterima oleh bpk barnai'),
(208, 'BTS-000067', 'kur-001', '2020-10-20 15:51:58', 'BARANG SUDAH DI TERIMA OLEH IBU IRA S'),
(209, 'BTS-000097', 'kur-002', '2020-10-20 16:50:32', 'SEDANG DI PROSES'),
(210, 'BTS-000064', 'kur-002', '2020-10-20 18:22:34', 'SAMPAI DI GUDANG BANDUNG '),
(211, 'BTS-000070', 'kur-002', '2020-10-20 18:23:20', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(212, 'BTS-000074', 'kur-002', '2020-10-20 18:23:40', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(213, 'BTS-000075', 'kur-002', '2020-10-20 18:23:55', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(214, 'BTS-000076', 'kur-002', '2020-10-20 18:24:09', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(215, 'BTS-000078', 'kur-002', '2020-10-20 18:24:22', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(216, 'BTS-000079', 'kur-002', '2020-10-20 18:24:37', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(217, 'BTS-000080', 'kur-002', '2020-10-20 18:24:49', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(218, 'BTS-000081', 'kur-002', '2020-10-20 18:25:03', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(219, 'BTS-000091', 'kur-002', '2020-10-20 18:25:22', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(220, 'BTS-000093', 'kur-002', '2020-10-20 18:25:35', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(221, 'BTS-000070', 'kur-002', '2020-10-21 09:30:22', 'SAMPAI DI GUDANG BANDUNG '),
(222, 'BTS-000074', 'kur-002', '2020-10-21 09:30:39', 'SAMPAI DI GUDANG BANDUNG '),
(223, 'BTS-000075', 'kur-002', '2020-10-21 09:30:53', 'SAMPAI DI GUDANG BANDUNG '),
(224, 'BTS-000076', 'kur-002', '2020-10-21 09:31:19', 'SAMPAI DI GUDANG BANDUNG '),
(225, 'BTS-000078', 'kur-002', '2020-10-21 09:31:34', 'SAMPAI DI GUDANG BANDUNG '),
(226, 'BTS-000079', 'kur-002', '2020-10-21 09:31:48', 'SAMPAI DI GUDANG BANDUNG '),
(227, 'BTS-000080', 'kur-002', '2020-10-21 09:32:01', 'SAMPAI DI GUDANG BANDUNG '),
(228, 'BTS-000081', 'kur-002', '2020-10-21 09:32:11', 'SAMPAI DI GUDANG BANDUNG '),
(229, 'BTS-000091', 'kur-002', '2020-10-21 09:32:28', 'SAMPAI DI GUDANG BANDUNG '),
(230, 'BTS-000093', 'kur-002', '2020-10-21 09:32:41', 'SAMPAI DI GUDANG BANDUNG '),
(231, 'BTS-000064', 'kur-002', '2020-10-21 09:48:35', 'SEDANG MENUJU KE ALAMAT TUJUAN '),
(232, 'BTS-000070', 'kur-002', '2020-10-21 09:48:55', 'SEDANG MENUJU KE ALAMAT TUJUAN '),
(233, 'BTS-000074', 'kur-002', '2020-10-21 09:49:12', 'SEDANG MENUJU KE ALAMAT TUJUAN '),
(234, 'BTS-000075', 'kur-002', '2020-10-21 09:49:29', 'SEDANG MENUJU KE ALAMAT TUJUAN '),
(235, 'BTS-000076', 'kur-002', '2020-10-21 09:49:43', 'SEDANG MENUJU KE ALAMAT TUJUAN '),
(236, 'BTS-000091', 'kur-002', '2020-10-21 09:50:18', 'SEDANG MENUJU KE ALAMAT TUJUAN '),
(237, 'BTS-000090', 'kur-001', '2020-10-21 09:52:27', 'barang Telah diterima oleh Surya Tirta Mas'),
(238, 'BTS-000084', 'kur-001', '2020-10-21 10:22:21', 'Sudah Diterima Oleh ibu Vierda'),
(239, 'BTS-000098', '', '2020-10-21 11:53:41', 'SEDANG DI PROSES'),
(240, '', '', '2020-10-21 12:07:58', ''),
(241, 'BTS-000088', 'kur-001', '2020-10-21 14:10:24', 'Barang telah diterima oleh bpk. dian'),
(242, 'BTS-000080', 'kur-002', '2020-10-21 13:16:51', 'TELAH DI TERIMA OLEH OFFICIAL SOMEONE'),
(243, 'BTS-000094', 'kur-001', '2020-10-21 13:55:29', 'Barang telah diterima oleh bpk. aji'),
(244, 'BTS-000082', 'kur-001', '2020-10-21 14:09:59', 'Sudah Diterima Oleh Ibu Sandra'),
(245, 'BTS-000078', 'kur-002', '2020-10-21 14:12:44', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(246, 'BTS-000079', 'kur-002', '2020-10-21 14:13:12', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(247, 'BTS-000093', 'kur-002', '2020-10-21 14:13:38', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(248, 'BTS-000070', 'kur-002', '2020-10-21 14:28:35', 'BARANG TELAH DI TERIMA OLEH IBU ELA '),
(249, 'BTS-000074', 'kur-002', '2020-10-21 14:29:39', 'BARANG TELAH DI TERIMA OLEH IBU ELA '),
(250, 'BTS-000091', 'kur-002', '2020-10-21 14:30:29', 'BARANG TELAH DI TERIMA OLEH IBU ELA'),
(251, 'BTS-000076', 'kur-002', '2020-10-21 14:31:29', 'BARANG TELAH DI TERIMA OLEH IBU ELA'),
(252, 'BTS-000064', 'kur-002', '2020-10-21 14:32:05', 'BARANG TELAH DI TERIMA OLEH IBU SANDRA'),
(253, 'BTS-000075', 'kur-002', '2020-10-21 14:36:33', 'BARANG TELAH DI TERIMA OLEH IBU ELA'),
(254, 'BTS-000093', 'kur-002', '2020-10-21 14:38:34', 'BARANG TELAH DI TERIMA OLEH IBU LIDIA'),
(255, 'BTS-000079', 'kur-002', '2020-10-21 14:39:42', 'BARANG TELAH DI TERIMA OLEH IBU TRI.W.'),
(256, 'BTS-000081', 'kur-002', '2020-10-21 14:40:53', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(257, 'BTS-000083', 'kur-001', '2020-10-21 14:56:48', 'transit surabaya '),
(258, 'BTS-000086', 'kur-001', '2020-10-21 14:57:13', 'transit surabaya'),
(259, 'BTS-000087', 'kur-001', '2020-10-21 14:57:26', 'transit surabaya'),
(260, 'BTS-000081', 'kur-002', '2020-10-21 15:07:59', 'BARANG TELAH DI TERIMA OLEH BAPA ANDI '),
(261, 'BTS-000078', 'kur-002', '2020-10-21 15:17:32', 'BARANG TELAH DI TERIMA OLEH NDA'),
(262, 'BTS-000086', 'kur-001', '2020-10-21 16:37:22', 'barang telah diterima oleh ibu tia'),
(263, 'BTS-000083', 'kur-001', '2020-10-21 17:28:38', 'Barang dalam perjalana laut dari surabaya menuju bali'),
(264, 'BTS-000087', 'kur-001', '2020-10-21 18:05:52', 'Barang telah diterima oleh ibu elissa'),
(265, 'BTS-000083', 'KUR-004', '2020-10-21 18:10:29', 'Barang sudah naik kapal'),
(266, 'BTS-000086', 'KUR-004', '2020-10-21 18:13:24', 'Barang sudah di terima(PRT) :Tia..'),
(267, 'BTS-000087', 'KUR-004', '2020-10-21 18:14:46', 'Barang sudah di terima Elisa.'),
(268, 'BTS-000043', 'kur-001', '2020-10-21 19:43:18', 'Barang telah diterima oleh ibu yanti'),
(270, 'BTS-000098', 'kur-002', '2020-10-21 20:33:00', 'sedang dalam perjalanan ke gudang bandung '),
(271, 'BTS-000096', 'kur-001', '2020-10-22 06:18:08', 'Barang telah diterima oleh BPK. Dedi'),
(272, 'BTS-000098', 'kur-002', '2020-10-22 09:25:19', 'SAMPAI DI GUDANG BANDUNG '),
(273, 'BTS-000099', '', '2020-10-22 10:04:42', 'sedang di proses'),
(274, 'BTS-000092', 'kur-001', '2020-10-22 10:07:02', 'barang dari jakarta menuju tangerang '),
(275, 'BTS-000099', 'kur-002', '2020-10-22 14:44:54', 'SEDANG DI PROSES'),
(276, 'BTS-000100', 'kur-002', '2020-10-22 14:45:03', 'SEDANG DI PROSES'),
(277, 'BTS-000101', 'kur-002', '2020-10-22 14:45:12', 'SEDANG DI PROSES'),
(278, 'BTS-000092', 'kur-001', '2020-10-22 14:59:03', 'BARANG TELAH DITERIMA OLEH BPK. NURSAAD'),
(279, 'BTS-000103', 'kur-002', '2020-10-22 16:08:39', 'SEDANG DI PROSES'),
(280, 'BTS-000097', 'kur-002', '2020-10-23 09:34:03', 'sedang dalam perjalanan ke gudang bandung '),
(281, 'BTS-000099', 'kur-002', '2020-10-23 09:34:53', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(282, 'BTS-000103', 'kur-002', '2020-10-23 09:35:16', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(283, 'BTS-000101', 'kur-002', '2020-10-23 09:35:29', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(284, 'BTS-000106', 'kur-002', '2020-10-23 09:35:42', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(285, 'BTS-000109', 'kur-002', '2020-10-23 11:51:09', 'SEDANG Di proses'),
(286, 'BTS-000106', 'kur-002', '2020-10-23 13:48:40', 'sUDAH DI TERIMA OLEH BAPAK SUKMA'),
(287, 'BTS-000097', 'kur-002', '2020-10-23 14:03:34', 'sudah sampai di gudang bandung '),
(288, 'BTS-000099', 'kur-002', '2020-10-23 14:04:13', 'SUDAH SAMPAI DI GUDANG BANDUNG '),
(289, 'BTS-000101', 'kur-002', '2020-10-23 14:04:39', 'SUDAH SAMPAI DI GUDANG BANDUNG '),
(290, 'BTS-000103', 'kur-002', '2020-10-23 14:04:49', 'SUDAH SAMPAI DI GUDANG BANDUNG '),
(291, 'BTS-000110', 'kur-002', '2020-10-23 14:44:31', 'sedang di proses'),
(292, 'BTS-000112', 'kur-002', '2020-10-23 15:34:20', 'SEDANG DI PROSES'),
(295, 'BTS-000101', 'kur-002', '2020-10-24 12:06:41', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(296, 'BTS-000103', 'kur-002', '2020-10-24 12:06:53', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(297, 'BTS-000102', 'kur-001', '2020-10-24 13:01:05', 'Barang Berada Di Gudang BAndung'),
(298, 'BTS-000113', 'kur-001', '2020-10-24 13:01:30', 'Barang Berada Di Gudang BAndung'),
(299, 'BTS-000114', 'kur-001', '2020-10-24 13:02:19', 'Barang Berada Di Gudang BAndung'),
(300, 'BTS-000115', 'kur-001', '2020-10-24 13:02:39', 'Barang Berada Di Gudang BAndung'),
(301, 'BTS-000116', 'kur-001', '2020-10-24 13:02:58', 'Barang Berada Di Gudang BAndung'),
(302, 'BTS-000117', 'kur-001', '2020-10-24 13:03:19', 'Barang Berada Di Gudang BAndung'),
(303, 'BTS-000101', 'kur-002', '2020-10-24 13:27:11', 'DITERIMA OLEH BAPA LENDI'),
(304, 'BTS-000103', 'kur-002', '2020-10-24 13:27:21', 'DITERIMA OLEH BAPA LENDI'),
(305, 'BTS-000118', 'kur-002', '2020-10-24 13:53:56', 'sedang di proses'),
(306, 'BTS-000111', 'kur-001', '2020-10-24 14:16:39', 'Barang Transit Surabaya'),
(307, 'BTS-000109', 'kur-002', '2020-10-24 18:49:23', 'SEDANG DALAM PERJALANAN MENUJU GUDANG BANDUNG '),
(308, 'BTS-000110', 'kur-002', '2020-10-24 18:49:39', 'SEDANG DALAM PERJALANAN MENUJU GUDANG BANDUNG '),
(309, 'BTS-000112', 'kur-002', '2020-10-24 18:49:52', 'SEDANG DALAM PERJALANAN MENUJU GUDANG BANDUNG '),
(310, 'BTS-000118', 'kur-002', '2020-10-24 18:50:01', 'SEDANG DALAM PERJALANAN MENUJU GUDANG BANDUNG '),
(311, 'BTS-000117', 'kur-001', '2020-10-26 09:56:37', 'Barang Transit JAkarta'),
(312, 'BTS-000116', 'kur-001', '2020-10-26 09:57:46', 'Barang transit Jakarta'),
(313, 'BTS-000115', 'kur-001', '2020-10-26 09:58:04', 'Barang transit Jakarta'),
(314, 'BTS-000114', 'kur-001', '2020-10-26 09:58:25', 'Barang transit Jakarta'),
(315, 'BTS-000113', 'kur-001', '2020-10-26 10:06:54', 'Barang transit Jakarta'),
(316, 'BTS-000108', 'kur-001', '2020-10-26 10:07:27', 'Barang transit Jakarta'),
(317, 'BTS-000102', 'kur-001', '2020-10-26 10:08:09', 'Barang transit Jakarta'),
(318, 'BTS-000110', 'kur-002', '2020-10-26 10:58:18', 'TELAH DI TERIMA OLEH BAPA MUSTOFA '),
(319, 'BTS-000099', 'kur-002', '2020-10-26 11:23:10', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(320, 'BTS-000109', 'kur-002', '2020-10-26 11:23:26', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN'),
(321, 'BTS-000109', 'kur-002', '2020-10-26 11:23:26', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN'),
(322, 'BTS-000112', 'kur-002', '2020-10-26 11:23:47', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN'),
(323, 'BTS-000118', 'kur-002', '2020-10-26 11:28:44', 'SAMPAI DI GUDANG BANDUNG '),
(324, 'BTS-000117', 'kur-001', '2020-10-26 11:35:21', 'Telah diterima Oleh Ibu Rani'),
(325, 'BTS-000102', 'kur-001', '2020-10-26 12:59:59', 'Barang Telah Diterima Oleh Bpk. Andi'),
(326, 'BTS-000097', 'kur-002', '2020-10-26 13:55:25', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN'),
(327, 'BTS-000097', 'kur-002', '2020-10-26 13:56:42', 'BARANG SUDAH DI TERIMA OLEH HJ UJANG MAMAN '),
(328, 'BTS-000099', 'kur-002', '2020-10-26 13:57:00', 'BARANG SUDAH DI TERIMA OLEH HJ UJANG MAMAN '),
(329, 'BTS-000109', 'kur-002', '2020-10-26 13:57:26', 'BARANG SUDAH DI TERIMA OLEH HJ UJANG MAMAN '),
(330, 'BTS-000012', 'kur-002', '2020-10-26 13:57:41', 'BARANG SUDAH DI TERIMA OLEH HJ UJANG MAMAN '),
(331, 'BTS-000119', 'kur-002', '2020-10-26 15:00:57', 'SEDANG DI PROSES'),
(332, 'BTS-000123', 'kur-002', '2020-10-26 16:24:06', 'sedang di proses'),
(333, 'BTS-000121', 'kur-001', '2020-10-27 08:49:13', 'barang telah diterima oleh bpk asep suherman'),
(334, 'BTS-000122', 'kur-001', '2020-10-27 08:50:05', 'barang telah diterima oleh bpk aji'),
(335, 'BTS-000118', 'kur-002', '2020-10-27 09:11:05', 'barang sudah di terima oleh ibu roroh '),
(336, 'BTS-000120', 'kur-001', '2020-10-27 10:45:26', 'barang telah diterima oleh Bpk.uddin'),
(337, 'BTS-000113', 'kur-001', '2020-10-27 11:28:24', 'Barang telah diterima oleh bapak barnay'),
(338, 'BTS-000114', 'kur-001', '2020-10-27 11:28:39', 'Barang telah diterima oleh bapak barnay'),
(339, 'BTS-000115', 'kur-001', '2020-10-27 11:28:59', 'Barang telah diterima oleh bapak barnay'),
(340, 'BTS-000116', 'kur-001', '2020-10-27 11:29:12', 'Barang telah diterima oleh bapak barnay'),
(341, 'BTS-000124', '', '2020-10-27 13:01:50', 'SEDANG DI PROSES'),
(342, 'BTS-000119', 'kur-002', '2020-10-27 19:28:52', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(343, 'BTS-000124', 'kur-002', '2020-10-27 19:29:13', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(344, 'BTS-000123', 'kur-002', '2020-10-27 19:29:40', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(345, 'BTS-000119', 'kur-002', '2020-10-28 10:31:03', 'sampai di gudang bandung'),
(346, 'BTS-000124', 'kur-002', '2020-10-28 10:31:22', 'SAMPAI DI GUDANG BANDUNG'),
(347, 'BTS-000123', 'kur-002', '2020-10-28 10:31:31', 'SAMPAI DI GUDANG BANDUNG'),
(348, 'BTS-000111', 'kur-001', '2020-10-28 10:42:44', 'BArang telah diterima oleh Ibu Magfirah'),
(349, 'BTS-000125', 'kur-001', '2020-10-28 10:45:47', 'Barang Transit Surabaya \r\n'),
(350, 'BTS-000127', 'kur-002', '2020-10-28 11:09:27', 'SEDANG DI PROSES'),
(351, 'BTS-000128', 'kur-002', '2020-10-28 13:42:03', 'SEDANG DI PROSES'),
(352, 'BTS-000119', 'kur-002', '2020-10-28 13:55:43', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(353, 'BTS-000123', 'kur-002', '2020-10-28 13:56:04', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(354, 'BTS-000124', 'kur-002', '2020-10-28 13:56:27', 'SEDANG DALAM PERJALANAN KE ALAMAT TUJUAN '),
(355, 'BTS-000119', 'kur-002', '2020-10-28 14:37:03', 'BARANG SUDAH DI TERIMA OLEH BAPAK TAUFIK'),
(356, 'BTS-000124', 'kur-002', '2020-10-28 14:37:36', 'BARANG SUDAH DI TERIMA OLEH BAPAK SAIFUL'),
(357, 'BTS-000123', 'kur-002', '2020-10-28 14:37:55', 'BARANG SUDAH DI TERIMA OLEH BAPAK EVAN '),
(358, 'BTS-000130', 'kur-002', '2020-10-28 14:41:16', 'sedang di proses'),
(359, 'BTS-000132', 'kur-002', '2020-10-28 16:26:15', 'sedang di proses'),
(360, 'BTS-000125', 'kur-001', '2020-10-28 16:43:50', 'Barang Transit Surabaya'),
(361, 'BTS-000133', 'kur-002', '2020-10-28 17:31:22', 'sedang di proses'),
(362, 'BTS-000134', 'kur-002', '2020-10-28 18:16:53', 'SEDANG DI PROSES'),
(363, 'BTS-000127', 'kur-002', '2020-10-28 18:57:04', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(364, 'BTS-000128', 'kur-002', '2020-10-28 18:57:18', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(365, 'BTS-000130', 'kur-002', '2020-10-28 18:57:33', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(366, 'BTS-000132', 'kur-002', '2020-10-28 18:57:49', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(367, 'BTS-000133', 'kur-002', '2020-10-28 18:58:07', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(368, 'BTS-000134', 'kur-002', '2020-10-28 18:58:14', 'SEDANG DALAM PERJALANAN KE GUDANG BANDUNG '),
(369, 'BTS-000131', 'kur-001', '2020-10-29 08:43:32', 'Barang telah diterima oleh Bpk. Abdul'),
(370, 'BTS-000129', 'kur-001', '2020-10-29 10:51:32', 'Barang Berada Di Gudang Jakarta'),
(371, 'BTS-000126', 'kur-001', '2020-10-29 10:52:24', 'Barang Berada Di Gudang Jakarta'),
(372, 'BTS-000130', 'kur-001', '2020-10-29 11:28:13', 'Barang telah diterima Oleh Bpk Evan'),
(373, 'BTS-000134', 'kur-001', '2020-10-29 12:13:57', 'BARANG BERADA DI GUDANG bANDUNG'),
(374, 'BTS-000133', 'kur-001', '2020-10-29 12:14:38', 'BARANG BERADA DI GUDANG bANDUNG'),
(375, 'BTS-000132', 'kur-001', '2020-10-29 12:14:58', 'BARANG BERADA DI GUDANG bANDUNG'),
(376, 'BTS-000127', 'kur-001', '2020-10-29 12:15:27', 'BARANG BERADA DI GUDANG bANDUNG'),
(377, 'BTS-000128', 'kur-001', '2020-10-29 12:15:47', 'BARANG BERADA DI GUDANG bANDUNG'),
(378, 'BTS-000134', 'kur-001', '2020-10-29 14:27:38', 'Barang telah diterima oleh bpk ito ho'),
(379, 'BTS-000127', 'kur-001', '2020-10-30 09:33:05', 'bARANG sEDANG dI dOORING KE ALAMAT tUJUAN'),
(380, 'BTS-000128', 'kur-001', '2020-10-30 09:33:27', 'bARANG sEDANG dI dOORING KE ALAMAT tUJUAN'),
(381, 'BTS-000132', 'kur-001', '2020-10-30 09:33:56', 'bARANG sEDANG dI dOORING KE ALAMAT tUJUAN'),
(382, 'BTS-000133', 'kur-001', '2020-10-30 09:34:28', 'bARANG sEDANG dI dOORING KE ALAMAT tUJUAN'),
(383, 'BTS-000133', 'kur-001', '2020-10-30 10:56:33', 'bARANG tELAH dITERIMA oLEH hAJI UJANG'),
(384, 'BTS-000132', 'kur-001', '2020-10-30 10:56:55', 'bARANG tELAH dITERIMA oLEH hAJI UJANG'),
(385, 'BTS-000128', 'kur-001', '2020-10-30 10:57:25', 'bARANG tELAH dITERIMA oLEH hAJI UJANG'),
(386, 'BTS-000127', 'kur-001', '2020-10-30 10:57:43', 'bARANG tELAH dITERIMA oLEH hAJI UJANG'),
(387, 'BTS-000135', 'kur-001', '2020-10-30 16:51:49', 'Barang Berada Di Gudang Bandung'),
(388, 'BTS-000136', 'kur-001', '2020-10-30 16:52:08', 'Barang Berada Di Gudang Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `user_manager`
--

CREATE TABLE `user_manager` (
  `id` int(50) NOT NULL,
  `tipe_akun` text NOT NULL,
  `username_agen` varchar(50) NOT NULL,
  `username_kurir` text NOT NULL,
  `password` text NOT NULL,
  `kota_agen` text NOT NULL,
  `kota_kurir` text NOT NULL,
  `no_agen` text NOT NULL,
  `no_kurir` text NOT NULL,
  `terdaftar_sejak` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_manager`
--

INSERT INTO `user_manager` (`id`, `tipe_akun`, `username_agen`, `username_kurir`, `password`, `kota_agen`, `kota_kurir`, `no_agen`, `no_kurir`, `terdaftar_sejak`, `email`, `password_email`) VALUES
(1, 'AKUN AGEN', 'bdg-001', '', 'bandung123', 'bandung', '', 'bdg-001', '', '2020-09-30', 'bandung@bts-cargo.com', 'bandung123'),
(3, 'AKUN KURIR', '', 'kur-001', 'bandung123', '', 'bandung', '', 'kur-001', '2020-09-30', '', ''),
(4, 'AKUN KURIR', '', 'kur-002', 'jakarta123', '', 'jakarta', '', 'kur-002', '2020-09-30', '', ''),
(6, 'AKUN AGEN', 'SOLO-001', '', 'solo123', 'SOLO', '', 'SOLO-001', '', '2020-10-03', 'solo@bts-cargo.com', 'solo123'),
(7, 'AKUN AGEN', 'SRBY-001', '', 'surabaya123', 'SURABAYA', '', 'SRBY-001', '', '2020-10-03', 'surabaya@bts-cargo.com', 'surabaya123'),
(8, 'AKUN KURIR', '', 'KUR-003', 'solo123', '', 'SOLO', '', 'KUR-003', '2020-10-03', '', ''),
(9, 'AKUN KURIR', '', 'KUR-004', 'surabaya123', '', 'SURABAYA', '', 'KUR-004', '2020-10-03', '', ''),
(10, 'AKUN AGEN', 'jak-001', '', 'jakarta123', 'JAKARTA', '', 'jak-001', '', '2020-10-03', 'jakarta@bts-cargo.com', 'jakarta123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`username_agen`);

--
-- Indexes for table `apk_login`
--
ALTER TABLE `apk_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_breadcrumb`
--
ALTER TABLE `data_breadcrumb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_cs`
--
ALTER TABLE `data_cs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_informasi`
--
ALTER TABLE `data_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kontak`
--
ALTER TABLE `data_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_konten_website`
--
ALTER TABLE `data_konten_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_layanan_service`
--
ALTER TABLE `data_layanan_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_login`
--
ALTER TABLE `data_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_marketing`
--
ALTER TABLE `data_marketing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_media`
--
ALTER TABLE `data_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_medsos`
--
ALTER TABLE `data_medsos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_menu_tambahan`
--
ALTER TABLE `data_menu_tambahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_menu_utama`
--
ALTER TABLE `data_menu_utama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_resi`
--
ALTER TABLE `data_resi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_sliders`
--
ALTER TABLE `data_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_website`
--
ALTER TABLE `data_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`username_kurir`);

--
-- Indexes for table `laporan_pemasukan`
--
ALTER TABLE `laporan_pemasukan`
  ADD PRIMARY KEY (`no_resi`);

--
-- Indexes for table `laporan_pengeluaran`
--
ALTER TABLE `laporan_pengeluaran`
  ADD PRIMARY KEY (`no_resi`);

--
-- Indexes for table `laporan_resi`
--
ALTER TABLE `laporan_resi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking_resi`
--
ALTER TABLE `tracking_resi`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apk_login`
--
ALTER TABLE `apk_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_breadcrumb`
--
ALTER TABLE `data_breadcrumb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_cs`
--
ALTER TABLE `data_cs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_informasi`
--
ALTER TABLE `data_informasi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_kontak`
--
ALTER TABLE `data_kontak`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_konten_website`
--
ALTER TABLE `data_konten_website`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_layanan_service`
--
ALTER TABLE `data_layanan_service`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_login`
--
ALTER TABLE `data_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_marketing`
--
ALTER TABLE `data_marketing`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_media`
--
ALTER TABLE `data_media`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `data_medsos`
--
ALTER TABLE `data_medsos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_menu_tambahan`
--
ALTER TABLE `data_menu_tambahan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_menu_utama`
--
ALTER TABLE `data_menu_utama`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_resi`
--
ALTER TABLE `data_resi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `data_sliders`
--
ALTER TABLE `data_sliders`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_website`
--
ALTER TABLE `data_website`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporan_resi`
--
ALTER TABLE `laporan_resi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `tracking_resi`
--
ALTER TABLE `tracking_resi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- AUTO_INCREMENT for table `user_manager`
--
ALTER TABLE `user_manager`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
