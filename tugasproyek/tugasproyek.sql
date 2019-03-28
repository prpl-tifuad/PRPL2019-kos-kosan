-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 11:14 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasproyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` varchar(10) NOT NULL,
  `nama_fasilitas` varchar(20) NOT NULL,
  `ket_fasilitas` varchar(100) NOT NULL,
  `harga_fasilitas` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `ket_fasilitas`, `harga_fasilitas`) VALUES
('123AE', 'wifi', 'merupakan fasilitas wifi bagi pemilik kos yang ber', 100000),
('232JR', 'ac', 'merupakan pendingin ruangan bagi penyewa kos yg berminat memasang.', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `no_ktp` varchar(16) NOT NULL,
  `id_kamar` varchar(6) NOT NULL,
  `no_kamar` varchar(5) NOT NULL,
  `luas_kamar` varchar(15) NOT NULL,
  `harga_kamar` int(15) NOT NULL,
  `status` enum('berisi','kosong') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`no_ktp`, `id_kamar`, `no_kamar`, `luas_kamar`, `harga_kamar`, `status`) VALUES
('1234121289346781', '12315', '1', '3x3', 500000, 'berisi'),
('1235122689034571', '12657', '2', '3x3', 500000, 'berisi'),
('7193579739481211', '12893', '3', '3x3', 500000, 'berisi'),
('8967264901645372', '21590', '5', '4x4', 650000, 'berisi'),
('8264738901234578', '25613', '4', '3x4', 600000, 'berisi');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `no_ktp` varchar(16) NOT NULL,
  `nama_pel` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `no_ortu` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`no_ktp`, `nama_pel`, `no_hp`, `no_ortu`, `alamat`, `jk`) VALUES
('1234121289346781', 'Andi Ariando', '085211667788', '085367901341', 'Jl.Lely 3, No.981, Yogyakarta', 'L'),
('1235122689034571', 'Ivan Gunawan', '087798134516', '088519239182', 'Jl.Diponegoro, No.908, Jawa Tengah ', 'L'),
('1700018013', 'Refaldi', '08525252678', '08526776453', 'Jl,Warungboto', 'L'),
('7193579739481211', 'Roni Derian', '081311221231', '085287094671', 'Jl.C Simanjuntak, No112, Jawa Timur', 'L'),
('8264738901234578', 'Ivan Gunawan', '087766853910', '081323678913', 'Jl.Diponegoro, No.908, Jawa Tengah ', 'L'),
('876744655765', 'Reza', '8987787876', '43543654654', 'Jl.Ani', 'L'),
('8967264901645372', 'Rei Yahian', '085378609914', '085276389155', 'Jl.Ahmad Yani, No882, Kalimantan Selatan', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `pemakaian`
--

CREATE TABLE `pemakaian` (
  `no_ktp` varchar(16) NOT NULL,
  `id_fasilitas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemakaian`
--

INSERT INTO `pemakaian` (`no_ktp`, `id_fasilitas`) VALUES
('1234121289346781', '123AE'),
('8967264901645372', '123AE'),
('7193579739481211', '232JR');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `no_ktp` varchar(16) NOT NULL,
  `no_pemesanan` varchar(5) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `ket_pemesanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`no_ktp`, `no_pemesanan`, `tgl_pemesanan`, `ket_pemesanan`) VALUES
('1234121289346781', '1232A', '2018-11-01', ''),
('8967264901645372', '1OP27', '2018-10-05', ''),
('8264738901234578', '2S12A', '2018-12-02', ''),
('1235122689034571', '45B12', '2018-11-16', ''),
('7193579739481211', 'C3412', '2018-12-07', '');

-- --------------------------------------------------------

--
-- Table structure for table `tester`
--

CREATE TABLE `tester` (
  `data2` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `no_ktp` (`no_ktp`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `pemakaian`
--
ALTER TABLE `pemakaian`
  ADD PRIMARY KEY (`no_ktp`),
  ADD KEY `id_fasilitas` (`id_fasilitas`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`no_pemesanan`),
  ADD KEY `no_ktp` (`no_ktp`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`no_ktp`) REFERENCES `pemesanan` (`no_ktp`);

--
-- Constraints for table `pemakaian`
--
ALTER TABLE `pemakaian`
  ADD CONSTRAINT `pemakaian_ibfk_1` FOREIGN KEY (`no_ktp`) REFERENCES `pelanggan` (`no_ktp`),
  ADD CONSTRAINT `pemakaian_ibfk_2` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`no_ktp`) REFERENCES `pelanggan` (`no_ktp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
