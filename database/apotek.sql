-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2015 at 01:09 AM
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
  `id_supplier` varchar(50) NOT NULL COMMENT '111xxx',
  `id_produk` varchar(50) NOT NULL,
  `no_faktur_restock` varchar(11) NOT NULL COMMENT 'FR-0xxx',
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

INSERT INTO `detail_restock` (`id_supplier`, `id_produk`, `no_faktur_restock`, `tgl_faktur`, `jumlah_restock`, `harga_satuan`, `jasa_kirim`, `bank`, `rekening`, `biaya`) VALUES
('111001', '1', '6', '2015-11-03', 50, 11500, 'JNE', 'BNI', 76564334, 575000),
('111001', '1', '222000001', '2015-11-03', 50, 11500, 'JNE', 'BNI', 21343455, 575000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `username` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_handphone` int(12) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `pwd_pelanggan` varchar(30) NOT NULL,
  `level` varchar(11) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`username`, `nama_pelanggan`, `alamat`, `no_handphone`, `no_telp`, `pwd_pelanggan`, `level`) VALUES
('', 'gege natasya', 'yogyakarta', 2147483647, 0, 'wagnrusyd', 'pelanggan'),
('', 'dede arsyadi', 'karimun', 1234566672, 0, 'dedearsyadi', 'pelanggan'),
('', 'karta buana syam', 'karimun', 988771234, 777324545, 'karta', 'pelanggan');

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
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jlh_produk` int(100) NOT NULL,
  `tgl` date NOT NULL,
  `id_supplier` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `gambar`, `jlh_produk`, `tgl`, `id_supplier`) VALUES
(5, 'Paramex', 5000, '1334763616.jpg', 50, '2012-06-13', ''),
(6, 'Panadol', 8000, 'no-photo.jpg', 50, '2012-06-13', ''),
(1, 'Minyak Tawon', 12000, '', 50, '2015-11-11', '111001');

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
  `nama_supplier` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT 'supplier'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `password`, `tanggal_daftar`, `email`, `alamat`, `kota`, `provinsi`, `no_hp`, `level`) VALUES
(111001, 'Kimia Farma', 'kimiafarma', '2015-11-01', 'kimiafarma@gmail.com', 'Yogyakarta', 'Yogyakarta', 'Yogyakarta', '085766130', 'supplier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `restock`
--
ALTER TABLE `restock`
  ADD PRIMARY KEY (`id_restock`);

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
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `restock`
--
ALTER TABLE `restock`
  MODIFY `id_restock` int(8) NOT NULL AUTO_INCREMENT COMMENT '222xxx', AUTO_INCREMENT=222000018;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(6) NOT NULL AUTO_INCREMENT COMMENT '111xxx', AUTO_INCREMENT=111002;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
