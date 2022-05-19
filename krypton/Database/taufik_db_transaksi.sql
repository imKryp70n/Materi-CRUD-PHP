-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2022 at 02:29 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taufik_db_transaksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailorder`
--

CREATE TABLE `detailorder` (
  `Id_detail_order` int(11) NOT NULL,
  `Id_Order` varchar(11) NOT NULL,
  `Id_Masakan` int(11) NOT NULL,
  `Keterangan` text NOT NULL,
  `Status_detail_order` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailorder`
--

INSERT INTO `detailorder` (`Id_detail_order`, `Id_Order`, `Id_Masakan`, `Keterangan`, `Status_detail_order`) VALUES
(2, '1', 5, '1', 'Belum Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `masakan_taufik`
--

CREATE TABLE `masakan_taufik` (
  `id_masakan` int(11) NOT NULL,
  `nama_masakan` varchar(40) NOT NULL,
  `harga_masakan` double NOT NULL,
  `status_masakan` enum('Tersedia','Habis',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masakan_taufik`
--

INSERT INTO `masakan_taufik` (`id_masakan`, `nama_masakan`, `harga_masakan`, `status_masakan`) VALUES
(1, 'Fried Vegetable from Cibuntu', 10000, 'Tersedia'),
(2, 'Tea with ice and sugar', 5000, 'Tersedia'),
(3, 'Chicken Tiren + Rice', 25000, 'Tersedia'),
(4, 'Salad with peanut sauce', 12000, 'Tersedia'),
(5, 'Sweet Fried Banana', 2000, 'Tersedia'),
(6, 'Milkshake', 10000, 'Habis'),
(7, 'Tukul Arwana', 999999, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `ordermasakan`
--

CREATE TABLE `ordermasakan` (
  `ID_Order_Taufik` varchar(11) NOT NULL,
  `No_Meja_Taufik` varchar(30) NOT NULL,
  `Tanggal_Taufik` date NOT NULL,
  `Id_User_Taufik` varchar(50) NOT NULL,
  `Keterangan_Taufik` text NOT NULL,
  `Status_Order_Taufik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordermasakan`
--

INSERT INTO `ordermasakan` (`ID_Order_Taufik`, `No_Meja_Taufik`, `Tanggal_Taufik`, `Id_User_Taufik`, `Keterangan_Taufik`, `Status_Order_Taufik`) VALUES
('1', '1', '2022-05-19', '2', '2000', 'Belum Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Id_Role` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Id_Role`, `Nama`) VALUES
(1, 'Manager'),
(2, 'Kasir'),
(4, 'Pelayan');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_bayar` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_order`, `tanggal`, `total_bayar`) VALUES
(1, 2, 2, '2022-05-19', 30001),
(2, 2, 2, '2022-05-19', 30001),
(3, 2, 2, '2022-05-19', 30001),
(4, 2, 3, '2022-05-19', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_role`, `username`, `password`, `nama_user`) VALUES
(1, 1, 'taufik', 'taufik123', 'AxxelXD'),
(2, 2, 'admin', 'admin', 'Admin'),
(3, 1, 'Mod', 'moderator', 'Moderator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailorder`
--
ALTER TABLE `detailorder`
  ADD PRIMARY KEY (`Id_detail_order`);

--
-- Indexes for table `masakan_taufik`
--
ALTER TABLE `masakan_taufik`
  ADD PRIMARY KEY (`id_masakan`);

--
-- Indexes for table `ordermasakan`
--
ALTER TABLE `ordermasakan`
  ADD PRIMARY KEY (`ID_Order_Taufik`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id_Role`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailorder`
--
ALTER TABLE `detailorder`
  MODIFY `Id_detail_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `masakan_taufik`
--
ALTER TABLE `masakan_taufik`
  MODIFY `id_masakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Id_Role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
