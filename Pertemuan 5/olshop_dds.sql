-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 06:35 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop_dds`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_admin` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'dede077', '202cb962ac59075b964b07152d234b70', 'dede saepulloh');

-- --------------------------------------------------------

--
-- Table structure for table `t_barang`
--

CREATE TABLE `t_barang` (
  `id_barang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(35) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `keterangan` tinytext NOT NULL,
  `foto` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_barang`
--

INSERT INTO `t_barang` (`id_barang`, `id_kategori`, `nama_barang`, `satuan`, `harga_beli`, `harga_jual`, `stok`, `keterangan`, `foto`) VALUES
(1, 1, 'Spongebob', 'pcs', 8000, 10000, 5, 'wakwaw', 'sp.jpg'),
(2, 1, 'Supreme', 'pcs', 10000, 15000, 5, '-', 'su.jpg'),
(3, 2, 'Levis', 'pcs', 50000, 70000, 5, '-', 'lv.png'),
(4, 3, 'adidas', 'pcs', 500000, 600000, 9, '-', 'adidas.png'),
(5, 5, 'nike', 'pcs', 100000, 150000, 8, '-', 'nk.png'),
(6, 1, 'Gamis Cantik', 'pcs', 50000, 1000000, 0, 'Hanya ada satu warna yaitu hitam', 'gamis.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Baju'),
(2, 'Celana'),
(3, 'Sepatu'),
(4, 'Topi'),
(5, 'Tas');

-- --------------------------------------------------------

--
-- Table structure for table `t_pelanggan`
--

CREATE TABLE `t_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pelanggan`
--

INSERT INTO `t_pelanggan` (`id_pelanggan`, `username`, `password`, `alamat`, `no_hp`, `tanggal_daftar`) VALUES
(1, 'dd', '202cb962ac59075b964b07152d234b70', 'panjalu', '085', '2019-10-15'),
(2, 'gojeng', '202cb962ac59075b964b07152d234b70', 'ciamis', '081', '2019-10-14'),
(3, 'gede', '202cb962ac59075b964b07152d234b70', 'tasik', '089', '2019-10-13'),
(4, 'bari', '202cb962ac59075b964b07152d234b70', 'tasik', '083', '2019-10-15'),
(5, 'zm', '202cb962ac59075b964b07152d234b70', 'tasik', '087', '2019-10-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `t_barang`
--
ALTER TABLE `t_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `FK_Kategori` (`id_kategori`);

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_barang`
--
ALTER TABLE `t_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_barang`
--
ALTER TABLE `t_barang`
  ADD CONSTRAINT `FK_Kategori` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori` (`id_kategori`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
