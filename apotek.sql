-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2020 at 04:07 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(10) NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_obat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `satuan` int(10) NOT NULL,
  `tanggal_terima` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_kadaluarsa` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `suplier` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `no_faktur` int(15) NOT NULL,
  `tanda_terima` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `jenis_obat`, `satuan`, `tanggal_terima`, `tanggal_kadaluarsa`, `stok`, `suplier`, `no_faktur`, `tanda_terima`) VALUES
(5, 'paramex', 'obat pusing', 24, '2020-05-06', '2020-05-29', 50, 'dsdasdq', 21314, 'zatkimiaberbahayadalamrokok-670x446.jpg'),
(7, 'biogesic', 'obat pokok e', 34, '2019-12-11', '2020-04-17', 123, 'zahra', 42341, '20170906_104956-min.jpg'),
(11, 'amoxilin', 'sasdasd', 21313, '2020-05-02', '2020-05-30', 90, 'zahra', 42313, 'aripriharta.png');

-- --------------------------------------------------------

--
-- Table structure for table `obat_keluar`
--

CREATE TABLE `obat_keluar` (
  `id` int(10) NOT NULL,
  `tanggal` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` int(10) NOT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci NOT NULL,
  `pegawai` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat_keluar`
--

INSERT INTO `obat_keluar` (`id`, `tanggal`, `nama_obat`, `jumlah`, `keterangan`, `pegawai`) VALUES
(1, '2020-05-02', 'paramex', 31, 'apotek', 'sutilah'),
(2, '2020-05-02', 'paramex', 50, 'apotek', 'sutilawati');

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan_obat`
--

CREATE TABLE `penerimaan_obat` (
  `id` int(10) NOT NULL,
  `tanggal` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_obat` int(10) NOT NULL,
  `suplier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_kadaluarsa` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` int(15) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerimaan_obat`
--

INSERT INTO `penerimaan_obat` (`id`, `tanggal`, `nama_obat`, `jumlah_obat`, `suplier`, `tanggal_kadaluarsa`, `harga`, `status`) VALUES
(1, '2020-05-02', 'amoxilin', 90, 'zahra', '2020-05-30', 3453, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_obat`
--

CREATE TABLE `permintaan_obat` (
  `id` int(10) NOT NULL,
  `tanggal` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_permintaan` int(10) NOT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permintaan_obat`
--

INSERT INTO `permintaan_obat` (`id`, `tanggal`, `nama_obat`, `jumlah_permintaan`, `keterangan`, `status`) VALUES
(1, '2020-05-29', 'amoxilin', 90, 'stok obat habis', 'sudah dikirim'),
(2, '2020-05-27', 'adudu', 454, 'stok obat habis', 'sudah dikirim'),
(3, '2020-05-03', 'decolgen', 50, 'stok habis', 'belum dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id` int(10) NOT NULL,
  `nama_suplier` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `telp_hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id`, `nama_suplier`, `alamat`, `telp_hp`) VALUES
(1, 'tian', 'sjnaxhagbshxb', 12132),
(2, 'yuda', 'sffwefasfqwef', 1241231),
(3, 'dasasd', 'sada', 1312),
(4, 'fsdfqws', 'sdgdgetg', 1241),
(5, 'sdfgsdfs', 'sfjmghk', 1234124),
(7, 'zahra', 'alesya', 89319),
(8, 'sdasxc', 'dcsa', 1231242),
(9, 'edasd', 'dsedq', 123441),
(10, 'dscxas', 'svsdf', 1234124),
(11, 'dsdasdq', 'dfgerw', 124532),
(12, 'csdfd', 'dfvvdre', 4124124);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_depan` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_belakang` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `telp_hp` int(15) NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama_depan`, `nama_belakang`, `jabatan`, `telp_hp`, `password`) VALUES
('admin', 'kiki', 'rizki', 'Administrator', 1234, '123'),
('apotek', 'veli', 'tian', 'Operator Apotek', 182387617, '123'),
('gudang', 'tian', 'yuda', 'Operator Gudang', 897316676, '123'),
('pemilik', 'yuda', 'tian', 'Pemilik', 87123678, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat_keluar`
--
ALTER TABLE `obat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerimaan_obat`
--
ALTER TABLE `penerimaan_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permintaan_obat`
--
ALTER TABLE `permintaan_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `obat_keluar`
--
ALTER TABLE `obat_keluar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penerimaan_obat`
--
ALTER TABLE `penerimaan_obat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permintaan_obat`
--
ALTER TABLE `permintaan_obat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
