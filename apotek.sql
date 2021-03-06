-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2015 at 04:24 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_lengkap`, `email`, `level`) VALUES
('galvaninatasya', 'wagnrusyd23', 'galvani natasya', 'galvaninatasya@gmail.com', 'admin'),
('admin', 'admin', 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `detail_restock`
--

CREATE TABLE `detail_restock` (
  `no_faktur_restock` varchar(11) NOT NULL COMMENT 'FR-0xxx',
  `id_supplier` varchar(50) NOT NULL COMMENT '111xxx',
  `id_produk` varchar(50) NOT NULL,
  `tgl_faktur` date NOT NULL,
  `jumlah_restock` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `jasa_kirim` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `rekening` int(10) NOT NULL,
  `biaya` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_restock`
--

INSERT INTO `detail_restock` (`no_faktur_restock`, `id_supplier`, `id_produk`, `tgl_faktur`, `jumlah_restock`, `harga_satuan`, `jasa_kirim`, `bank`, `rekening`, `biaya`) VALUES
('6', '111001', '1', '2015-11-03', 50, 11500, 'JNE', 'BNI', 76564334, 575000),
('222000001', '111001', '1', '2015-11-03', 50, 11500, 'JNE', 'BNI', 21343455, 575000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `username` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_handphone` bigint(15) NOT NULL,
  `no_telp` int(15) DEFAULT NULL,
  `pwd_pelanggan` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`username`, `nama_pelanggan`, `alamat`, `no_handphone`, `no_telp`, `pwd_pelanggan`) VALUES
('abdan.s', 'Abdan Syakuron', 'Jalan Mangga', 87342434121, 3122432, 'abdans'),
('galvaninatasya', 'Wirda Astari Galvani Natasya', 'Jalan Lubuk Semut', 85668110823, 777324545, 'wagnrusyd23'),
('falah.a', 'Falah Agung Anggara', 'Jalan Manggis', 687864432, 23545, 'falah.a'),
('muhzed.a', 'Muhammad Zaid Abdurrahman', 'Jalan Kemala', 128312098, 1409834, 'muhzed.a'),
('alfatih', 'Muhammad Al Fatih', 'Jalan Mataram', 93242394, 24543546, 'alfatih'),
('nanda.p', 'Nanda Okta Pratama', 'Jalan Warna', 23483928, 32432546, 'nanda.p'),
('syahputra', 'Muhammad Syahputra', 'Jalan Mangga', 3432456678, 34534234, 'syahputra13'),
('elsa.a', 'Elsa Dwi Agustine', 'Jalan Nusa Indah', 81242343, NULL, 'elsadwiagustine'),
('surya.s', 'Surya Bonardo Sinaga', 'Jalan Qerweff', 29845783408, 84353456, 'surya.s'),
('josi.a', 'Josi Aranda', 'Jalan Lfedfk', 39874925, NULL, 'josi.a'),
('zainal.p', 'Zainal F. Pratama', 'Jalan Rambutan', 32467236453, NULL, 'zainal.p'),
('rohmah.f', 'Rohmah Dewi Fitriati', 'Jalan Mancasan', 23435435, NULL, 'rohmah'),
('tyar.p', 'Tyar Kurnia Putra', 'Jalan FGWREF', 325346, NULL, 'tyur'),
('bapakekarta', 'Ir. Kartabuana, Syam', 'Jalan Lubuk Semut', 8000000000, 777324545, 'kartabap'),
('dra.maemunah', 'Prof. Dr. Maemunah Rusyaid, M.M', 'Jalan Lubuk Semut', 81277033235, 777324545, 'rusyaidmae'),
('bodat', 'Yuliana Mamerta Gultom', 'Jalan Sei Bati', 785747465653, NULL, 'bodat'),
('abba', 'Ba''ba Rusyaid Daeng Kalla', 'Jalan Sukawati', 374234, NULL, 'rusyaidkalla'),
('aminah', 'Mama Mina Haddade', 'Jalan Watampone', 9024978374, NULL, 'mamamina'),
('daengtompo', 'Syamsyuddin Daeng Tompo', 'Jalan Baruga', 342332432, NULL, 'daengtompo'),
('bola', 'Dra. Marsiah Daeng Bola', 'Jeneponto', 324324234, NULL, 'marsiahdgbola');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `no_faktur` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `id_produk` varchar(30) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `total` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL COMMENT '100xxx',
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jlh_produk` int(100) NOT NULL,
  `tgl` date NOT NULL,
  `komposisi` mediumtext NOT NULL,
  `keterangan` text NOT NULL,
  `id_supplier` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `gambar`, `jlh_produk`, `tgl`, `komposisi`, `keterangan`, `id_supplier`) VALUES
(10001, 'Minyak Gosok Cap Tawon DD (30ml)', 17200, 'minyak_tawon.png', 50, '2015-11-11', 'Mengandung oleum cocos 60ml, oleum cajuputi 5ml, oleum citronellae 5ml, oleum terebinthinae 5ml, piperis folium 3g, zingiberis rhizoma 2g, curcumae rhizoma 2g, allium sativum 1.5g.', 'Membantu meredakan nyeri sendi, sakit gigi, bisul, sakit kepala, kudis, panu, gatal-gatal akibat digigit serangga, muntah, sakit perut dan batuk. \r\n', '111001'),
(10002, 'Betadine Antiseptic Solution (30ml)', 24500, 'betadine_antiseptic.jpg', 50, '2015-12-01', 'Mengandung Povine Iodine 10%', 'Pertolongan pertama pada luka dan mencegah infeksi', '111001'),
(10003, 'Betadine Antiseptic Solution (60ml)', 42900, 'betadine_antiseptic.jpg', 50, '2015-12-01', 'Mengandung Povine Iodine 10%', 'Pertolongan pertama pada luka dan mencegah infeksi', '111001'),
(10004, 'Betadine Antiseptic Solution (15ml)', 13500, 'betadine_antiseptic.jpg', 50, '2015-12-01', 'Mengandung Povine Iodine 10%', 'Pertolongan pertama pada luka dan mencegah infeksi', '111001'),
(10005, 'Betadine Antiseptic Solution (5ml)', 4500, 'betadine_antiseptic.jpg', 20, '2015-12-01', 'Mengandung Povine Iodine 10%', 'Pertolongan pertama pada luka dan mencegah infeksi', '111001'),
(10006, 'Betadine Stick Sariawan (10 Sachets)', 14000, 'betadine_stick_sariawan.jpg', 20, '2015-12-01', 'Mengandung Povine Iodine 10%', 'Membunuh kuman penyebab infeksi pada luka dan sariawan. \r\n\r\nKemasan box isi 10 sachet x 2 stick. ', '111001'),
(10007, 'Hufagripp Syrup Obat Batuk Pilek Anak (60ml)', 12000, 'hufagripp_syrup_obat_batuk_pilek_anak_60ml.jpg', 15, '2015-12-01', 'Tiap sendok takar (5ml) mengandung : Dextromethorphan HBr 7.5mg, Pseudoephedrine HCl 15mg, Chlorpheniramine Maleat 0.5mg.', 'Untuk meringankan batuk tidak berdahak dan pilek pada anak', '111003'),
(10008, 'Albothyl Botol (10ml)', 46000, 'albothyl.jpg', 15, '2015-12-14', 'Mengandung policresulen (produk kondensasi asam metakresolsulfonat dan metanal). ', 'Membantu pengobatan lokal pada peradangan leher rahim dan vagina bersamaan dengan keputihan, kolpitis (radang liang vagina) dan servitis (radang leher rahim), erosi servikal, trikomoniasis dan kandiliasis. Membantu menghentikan pendarahan setelah biopsi & pembuangan polip servikal. Kutil pada alat kelamin. ', '111004'),
(10009, 'Albothyl Botol (5ml)', 27900, 'albothyl.jpg', 10, '2015-12-08', 'Mengandung policresulen (produk kondensasi asam metakresolsulfonat dan metanal). ', 'Membantu pengobatan lokal pada peradangan leher rahim dan vagina bersamaan dengan keputihan, kolpitis (radang liang vagina) dan servitis (radang leher rahim), erosi servikal, trikomoniasis dan kandiliasis. Membantu menghentikan pendarahan setelah biopsi & pembuangan polip servikal. Kutil pada alat kelamin. ', ''),
(10010, 'Mylanta Tablet (10pcs)', 6000, 'mylanta_tablet.jpg', 13, '2015-12-09', 'Per tablet mengandung Mg(OH)2 200mg, Al(OH)3 200mg, simetikon 20mg.', 'Membantu meredakan rasa panas pada ulu hati, rasa tidak enak pada perut, hiperasiditas yang berhubungan dengan diagnosis ulkus peptikum, gastritis (maag), mengatasi perut kembung.', '111003');

-- --------------------------------------------------------

--
-- Table structure for table `restock`
--

CREATE TABLE `restock` (
  `id_restock` int(8) NOT NULL COMMENT '222xxx',
  `id_supplier` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status_order` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT 'Baru',
  `tgl_order` datetime NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `restock`
--

INSERT INTO `restock` (`id_restock`, `id_supplier`, `status_order`, `tgl_order`, `jumlah`) VALUES
(222000006, '111001', 'Lunas', '2012-06-07 15:09:02', 2),
(222000004, '111001', 'Tunggu', '2012-06-13 05:10:00', 24),
(222000003, '111001', 'Tunggu', '2015-06-13 05:10:00', 24),
(222000002, '111001', 'Lunas', '2015-06-13 14:02:49', 12),
(222000017, '111001', 'Lunas', '2016-06-13 14:02:50', 12),
(222000001, '111001', 'Lunas', '2015-11-18 00:00:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(6) NOT NULL COMMENT '111xxx',
  `password` varchar(255) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT 'supplier'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `password`, `nama_supplier`, `email`, `no_hp`, `alamat`, `kota`, `provinsi`, `tanggal_daftar`, `level`) VALUES
(111001, 'kimiafarma', 'Kimia Farma', 'kimiafarma@gmail.com', '085766130', 'Yogyakarta', 'Yogyakarta', 'Yogyakarta', '2015-11-01', 'supplier'),
(111002, 'apaaja', 'Sukadewe', 'sukadewe@yow.com', '082731243423', 'Alamatnya ya ini', 'Entah', 'Entah', '2015-11-26', 'supplier'),
(111003, 'asmaulhusna99', 'Ibnu Rusyd', 'ibnurusyd@gmail.com', '0777324545', 'Jalan Lubuk Semut', 'Batam', 'Kepulauan Riau', '2015-11-11', 'supplier'),
(111004, 'natasya', 'Natasya', 'natasyarusyd', '0121434324', 'Jalan Teluk Air, Kajang', 'Kajang', 'Kajang, Malay', '2015-11-01', 'supplier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `restock`
--
ALTER TABLE `restock`
  ADD PRIMARY KEY (`id_restock`),
  ADD UNIQUE KEY `id_restock` (`id_restock`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT COMMENT '100xxx', AUTO_INCREMENT=10011;
--
-- AUTO_INCREMENT for table `restock`
--
ALTER TABLE `restock`
  MODIFY `id_restock` int(8) NOT NULL AUTO_INCREMENT COMMENT '222xxx', AUTO_INCREMENT=222000018;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(6) NOT NULL AUTO_INCREMENT COMMENT '111xxx', AUTO_INCREMENT=111005;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
