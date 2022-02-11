-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 06:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengelolaan_data_atlit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`, `Nama`, `Email`) VALUES
(1, 'Diana', '5f4dcc3b5aa765d61d8327deb882cf99', 'Diana', 'dianakusuma104@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota_aktif`
--

CREATE TABLE `data_anggota_aktif` (
  `Id_Atlit` char(15) NOT NULL,
  `Nama_Atlit` varchar(30) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(15) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Cabang_Olahraga` varchar(50) NOT NULL,
  `Tgl_Hadir` date NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_anggota_aktif`
--

INSERT INTO `data_anggota_aktif` (`Id_Atlit`, `Nama_Atlit`, `Tempat_Lahir`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Alamat`, `Cabang_Olahraga`, `Tgl_Hadir`, `Status`) VALUES
('1', 'Diana Kusuma', 'Kuala Kapuas', '2000-12-03', 'Perempuan', 'Jl.Pemuda', 'Bulutangkis', '2022-02-01', 'Aktif'),
('123', 'Juju', 'Sampit', '2007-09-16', 'Laki-Laki', 'Jl.Bubuy', 'Basket', '2022-02-05', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_atlit`
--

CREATE TABLE `data_atlit` (
  `Id_Atlit` char(14) NOT NULL,
  `Nama_Atlit` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `No_Hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_atlit`
--

INSERT INTO `data_atlit` (`Id_Atlit`, `Nama_Atlit`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_lahir`, `Alamat`, `Agama`, `No_Hp`) VALUES
('1', 'Diana Kusuma', 'Perempuan', 'Kuala Kapuas', '2000-12-03', 'Jl.Pemuda', 'Islam', '080987654321'),
('2', 'Bayu Kusuma', 'Laki-laki', 'Kuala Kapuas', '2002-01-02', 'Jl.Patih Rumbih', 'Islam', '081234567890'),
('3', 'Atlit Coba', 'Perempuan', 'kuala kapuas', '2000-06-06', 'jalan melati', 'Islam', '082102222222'),
('4', 'Hadu', 'Laki-Laki', 'Bogor', '2000-07-03', 'Hindu', 'Jl.Teratai', '0987743656728'),
('5', 'GU', 'Waria', 'ghh', '2000-06-18', 'fejc', 'fvhnxb', '086235718638');

-- --------------------------------------------------------

--
-- Table structure for table `data_atlit_aktif_perbulan`
--

CREATE TABLE `data_atlit_aktif_perbulan` (
  `Id_Atlit` char(15) NOT NULL,
  `Nama_Atlit` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(19) NOT NULL,
  `Cabang_Olahraga` varchar(100) NOT NULL,
  `Bulan` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_atlit_aktif_perbulan`
--

INSERT INTO `data_atlit_aktif_perbulan` (`Id_Atlit`, `Nama_Atlit`, `Jenis_Kelamin`, `Cabang_Olahraga`, `Bulan`) VALUES
('1', 'Diana Kusuma', 'Perempuan', 'Bulutangkis', '12'),
('123', 'Juju', 'Laki-Laki', 'Tinju', '1'),
('2', 'Bayu Kusuma', 'Laki-Laki', 'Volly', '5');

-- --------------------------------------------------------

--
-- Table structure for table `data_cabang_olahraga`
--

CREATE TABLE `data_cabang_olahraga` (
  `Id_Atlit` char(15) NOT NULL,
  `Nama_Atlit` varchar(30) NOT NULL,
  `Cabang_Olahraga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_cabang_olahraga`
--

INSERT INTO `data_cabang_olahraga` (`Id_Atlit`, `Nama_Atlit`, `Cabang_Olahraga`) VALUES
('1', 'Diana Kusuma', 'Bulutangkis'),
('2', 'Bayu Kusuma', 'Volly');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengurus_cabang_olahraga`
--

CREATE TABLE `data_pengurus_cabang_olahraga` (
  `Id_Pengurus` char(15) NOT NULL,
  `Nama_Pengurus` varchar(30) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Agama` varchar(15) NOT NULL,
  `Cabang_Olahraga` varchar(50) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No_Hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pengurus_cabang_olahraga`
--

INSERT INTO `data_pengurus_cabang_olahraga` (`Id_Pengurus`, `Nama_Pengurus`, `Tempat_Lahir`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Agama`, `Cabang_Olahraga`, `Jabatan`, `Alamat`, `No_Hp`) VALUES
('123', 'Bambang', 'Jakarta', '1990-01-02', 'Laki-Laki', 'Islam', 'Bulutangkis', 'Ketua', 'Jl.Melati', ''),
('456', 'Boni', 'Kalbar', '1976-10-17', 'Laki-Laki', 'Katolik', 'Tenis Meja', 'Sekertaris', 'Jl.Bubuy', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_prestasi_atlit`
--

CREATE TABLE `data_prestasi_atlit` (
  `Id_Atlit` char(15) NOT NULL,
  `Nama_Atlit` varchar(50) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Agama` varchar(15) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No_Hp` varchar(13) NOT NULL,
  `Cabang_Olahraga` varchar(15) NOT NULL,
  `Prestasi` varchar(50) NOT NULL,
  `Tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_prestasi_atlit`
--

INSERT INTO `data_prestasi_atlit` (`Id_Atlit`, `Nama_Atlit`, `Tempat_Lahir`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Agama`, `Alamat`, `No_Hp`, `Cabang_Olahraga`, `Prestasi`, `Tahun`) VALUES
('1', 'Diana Kusuma', 'Kuala Kapuas', '2000-12-03', 'Perempuan', 'Islam', 'Jl.Pemuda', '080987654321', 'Bulutangkis', 'Juara 1 Porprov', 2018),
('2', 'Bayu Kusuma', 'Kuala Kapuas', '2002-07-02', 'Laki-Laki', 'Islam', 'Jl.Patih Rumbih', '081234567890', 'Volly', 'Juara 1 porprov', 2018),
('3', 'Jingga', 'Maluku', '1999-09-12', 'Perempuan', 'Jl.Veteran', 'Budha', '09843656278', 'Karate', 'Juara 3 Kejurprov', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `data_sk_cabang_olahraga`
--

CREATE TABLE `data_sk_cabang_olahraga` (
  `Cabang_Olahraga` varchar(50) NOT NULL,
  `SK` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_sk_cabang_olahraga`
--

INSERT INTO `data_sk_cabang_olahraga` (`Cabang_Olahraga`, `SK`) VALUES
('Bulutangkis', 'Ada'),
('Volly', 'Tidak Ada'),
('Basket', 'Ada'),
('Angkat beban', 'Tidak Ada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `data_anggota_aktif`
--
ALTER TABLE `data_anggota_aktif`
  ADD PRIMARY KEY (`Id_Atlit`);

--
-- Indexes for table `data_atlit`
--
ALTER TABLE `data_atlit`
  ADD PRIMARY KEY (`Id_Atlit`);

--
-- Indexes for table `data_atlit_aktif_perbulan`
--
ALTER TABLE `data_atlit_aktif_perbulan`
  ADD PRIMARY KEY (`Id_Atlit`);

--
-- Indexes for table `data_cabang_olahraga`
--
ALTER TABLE `data_cabang_olahraga`
  ADD PRIMARY KEY (`Id_Atlit`);

--
-- Indexes for table `data_pengurus_cabang_olahraga`
--
ALTER TABLE `data_pengurus_cabang_olahraga`
  ADD PRIMARY KEY (`Id_Pengurus`);

--
-- Indexes for table `data_prestasi_atlit`
--
ALTER TABLE `data_prestasi_atlit`
  ADD PRIMARY KEY (`Id_Atlit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
