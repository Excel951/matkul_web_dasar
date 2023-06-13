-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 02:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `harga` double NOT NULL,
  `harga_jual` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `satuan`, `harga`, `harga_jual`) VALUES
('M001', 'CPU', 'pcs', 3000, 4000),
('M002', 'VGA ', 'pcs ', 5000, 6000),
('M003', 'RAM', 'pcs', 1000, 1500),
('M004', 'Motherboard', 'pcs', 3000, 4500),
('M005', 'Fan CPU', 'pcs', 1000, 1500),
('M006', 'Fan Case', 'pcs', 500, 1000),
('M007', 'Casing', 'pcs', 400, 1000),
('M008', 'PSU', 'pcs', 1000, 1500),
('M009', 'Keyboard', 'pcs', 500, 900),
('M010', 'Mouse', 'pcs', 300, 700),
('M011', 'Monitor', 'pcs', 1300, 1900);

-- --------------------------------------------------------

--
-- Table structure for table `detailpemesanan`
--

CREATE TABLE `detailpemesanan` (
  `kodepem` varchar(20) NOT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `harga_beli` double NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailpemesanan`
--

INSERT INTO `detailpemesanan` (`kodepem`, `kode_barang`, `harga_beli`, `jumlah`) VALUES
('20236722283329', 'M010', 300, 100),
('202369135012485', 'M005', 1000, 3),
('20236128433691', 'M009', 500, 5),
('20236128433691', 'M003', 1000, 10),
('20236128545586', 'M010', 300, 50),
('20236128545586', 'M011', 1300, 20),
('20236128545586', 'M004', 3000, 100),
('202361287130', 'M004', 3000, 50),
('202361287130', 'M007', 400, 5),
('202361287130', 'M008', 1000, 10),
('20236128839339', 'M007', 400, 10),
('20236128839339', 'M008', 1000, 5),
('20236128839339', 'M011', 1300, 5),
('202361281043844', 'M007', 400, 5),
('202361281043844', 'M004', 3000, 5),
('202361281043844', 'M005', 1000, 10),
('202361281043844', 'M010', 300, 10),
('20236128142999', 'M003', 1000, 6),
('20236128142999', 'M005', 1000, 5),
('20236128142999', 'M001', 3000, 4),
('20236128142999', 'M004', 3000, 4),
('20236128142999', 'M006', 500, 7),
('20236128142999', 'M002', 5000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `detailpermintaan`
--

CREATE TABLE `detailpermintaan` (
  `kodeper` varchar(20) NOT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `harga_jual` double NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailpermintaan`
--

INSERT INTO `detailpermintaan` (`kodeper`, `kode_barang`, `harga_jual`, `jumlah`) VALUES
('202364214452385', 'M001', 4000, 1),
('202364214452385', 'M002', 6000, 2),
('202364214729560', 'M010', 700, 1),
('202365105623224', 'M003', 1500, 2),
('202365105623224', 'M006', 1000, 3),
('20236581011947', 'M001', 4000, 1),
('20236581011947', 'M009', 900, 2),
('20236581433439', 'M001', 4000, 1),
('20236581433439', 'M009', 900, 2),
('20236581433439', 'M011', 1900, 1),
('20236582138178', 'M002', 6000, 2),
('202365835633', 'M001', 3000, 3),
('202365835633', 'M002', 6000, 3),
('202365835633', 'M003', 4000, 3),
('202365877220', 'M002', 6000, 1),
('202365877220', 'M003', 1500, 2),
('202365877220', 'M004', 4500, 3),
('202366161040577', 'M009', 900, 6),
('20236913217612', 'M004', 4500, 3),
('20236913217612', 'M010', 700, 2),
('20236913540802', 'M003', 1500, 5),
('20236913540802', 'M007', 1000, 5),
('20236913540802', 'M008', 1500, 5),
('202369141253849', 'M006', 1000, 3),
('202369202538612', 'M010', 700, 5),
('202369202538612', 'M007', 1000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `kode_karyawan` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`kode_karyawan`, `nama`, `jabatan`, `telepon`, `email`, `password`) VALUES
('2', '2', 'Manajer', '2', '2', '2'),
('K001', 'Dika', 'Operator', '085253878423', 'dika@toko.com', 'dika123'),
('K002', 'Santoso', 'Manajer', '085678876784', 'santoso@toko.com', 'santoso123'),
('K003', 'Aldi', 'Admin', '083634758723', 'aldi@toko.com', 'aldi123'),
('K004', 'qwerty', 'Operator', '2000000', 'qwe123@qwe', '123312'),
('K005', 'Andikas', 'Admin', '08473487234', 'andikas@toko.com', 'andikatoko'),
('K006', 'Abi', 'Admin', '083492825423', 'abi@toko.com', 'abi123'),
('K007', 'Zero', 'Operator', '083473238452', 'zero@toko.com', 'zero12345');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kodepem` varchar(20) NOT NULL,
  `kodekar` varchar(10) NOT NULL,
  `kode_supp` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `totalitem` double NOT NULL,
  `totalhrg` double NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`kodepem`, `kodekar`, `kode_supp`, `tanggal`, `telepon`, `alamat`, `keterangan`, `totalitem`, `totalhrg`, `created_at`) VALUES
('202361281043844', 'K003', 'S001', '2023-06-13', '08537823487231', 'Jakarta', 'tes5', 33, 45000, '2023-06-12'),
('20236128142999', 'K003', 'S001', '2023-06-13', '08537823487231', 'Jakarta', 'keterangan', 31, 63500, '2023-06-12'),
('20236128347180', 'K003', 'S003', '2023-06-12', '085378937482', 'Tangerang', 'Beli stok', 18, 18900, '2023-06-12'),
('20236128433691', 'K001', 'S001', '2023-06-12', '08537823487231', 'Jakarta', 'tes', 15, 12500, '2023-06-12'),
('20236128545586', 'K005', 'S002', '2023-06-12', '08537954587231', 'Jakarta Utara', 'tes2', 170, 341000, '2023-06-12'),
('202361287130', 'K001', 'S002', '2023-06-12', '08537954587231', 'Jakarta Utara', 'tes3', 65, 162000, '2023-06-12'),
('20236128839339', 'K002', 'S001', '2023-06-12', '08537823487231', 'Jakarta', 'tes4', 20, 15500, '2023-06-12'),
('20236722283329', 'K006', 'S002', '2023-06-07', '08537954587231', 'Jakarta Utara', 'Beli Mouse', 100, 30000, '2023-06-07'),
('202369135012485', 'K002', 'S001', '2023-06-09', '08537823487231', 'Jakarta', 'tes', 5, 5000, '2023-06-09'),
('20236913756234', 'K004', 'S003', '2023-06-09', '085378937482', 'Tangerang', 'beli beli', 20, 60000, '2023-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `kodeper` varchar(20) NOT NULL,
  `kodekar` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `konsumen` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `totalitem` double NOT NULL,
  `totalhrg` double NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`kodeper`, `kodekar`, `tanggal`, `konsumen`, `telepon`, `alamat`, `keterangan`, `totalitem`, `totalhrg`, `created_at`) VALUES
('202364214452385', 'K001', '2023-06-04', 'Habib', '083471239543', 'Sidoarjo', 'Beli', 0, 0, '2023-06-04'),
('202364214729560', 'K004', '2023-06-04', 'Habib', '085375389123', 'Surabaya', 'beli beli', 0, 0, '2023-06-04'),
('202365105230577', 'K002', '2023-06-05', 'TES2', '086438234783', 'sidoarjo', 'tes2', 3, 2800, '2023-06-05'),
('202365105623224', 'K003', '2023-06-05', 'Abi', '08342872347', 'surabaya', 'beli', 5, 6000, '2023-06-05'),
('20236581011947', 'K002', '2023-06-05', 'Bengbeng', '0844462374618', 'Sidoarjo', 'tes', 0, 0, '2023-06-05'),
('20236581433439', 'K001', '2023-06-30', 'TES', '089999999999', 'us', 'tes', 0, 0, '2023-06-05'),
('20236582138178', 'K001', '2023-06-05', 'qwerty', '99734827323', 'surabaya', 'beli', 2, 12000, '2023-06-05'),
('202365835633', 'K005', '2023-06-05', 'Habib', '086274328123', 'Malang', 'beli beli', 0, 0, '2023-06-05'),
('202365877220', 'K001', '2023-06-05', 'Andi', '083242371236', 'Malang', 'beli', 0, 0, '2023-06-05'),
('202366161040577', 'K002', '2023-06-06', 'Zeus', '083475238534', 'Malang', 'tidak ada', 19, 27400, '2023-06-06'),
('20236913217612', 'K006', '2023-06-09', 'Herpes', '084567234856', 'Antartika', 'keterangan tidak ada', 5, 14900, '2023-06-09'),
('20236913540802', 'K002', '2023-06-09', 'Habib', '089999999999', 'TES', 'TES', 15, 20000, '2023-06-09'),
('202369141253849', 'K003', '2023-06-09', 'Andi', '087654213124', 'Surabaya', 'tidak ada', 5, 12000, '2023-06-09'),
('20236920211822', 'K003', '2023-06-09', 'TES123', '088811114444', 'Nowhere', 'nothing', 18, 18500, '2023-06-09'),
('202369202538612', 'K001', '2023-06-09', 'Nothing', '081111122223', 'Dimana', 'tidak ada', 7, 5500, '2023-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kode_supp` varchar(10) NOT NULL,
  `nama_sales` varchar(150) NOT NULL,
  `perusahaan` varchar(150) NOT NULL,
  `telepon_sales` varchar(15) NOT NULL,
  `telepon_kantor` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kode_supp`, `nama_sales`, `perusahaan`, `telepon_sales`, `telepon_kantor`, `email`, `alamat`) VALUES
('S001', 'Gunawan', 'PNY', '08537823487231', '0317548923471', 'sales@pny.com', 'Jakarta'),
('S002', 'Sidarto', 'Lenovo', '08537954587231', '0317548537332', 'sales@lenovo.com', 'Jakarta Utara'),
('S003', 'Seli', 'Dell', '085378937482', '031754943728', 'sales@dell.com', 'Tangerang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('admin', 'admin@toko.com', 'admin'),
('user123', 'user123@toko.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `detailpemesanan`
--
ALTER TABLE `detailpemesanan`
  ADD KEY `kodepem` (`kodepem`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `detailpermintaan`
--
ALTER TABLE `detailpermintaan`
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kodeper` (`kodeper`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`kode_karyawan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kodepem`),
  ADD KEY `kodekar` (`kodekar`),
  ADD KEY `kode_supp` (`kode_supp`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`kodeper`),
  ADD KEY `kodekar` (`kodekar`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailpemesanan`
--
ALTER TABLE `detailpemesanan`
  ADD CONSTRAINT `detailpemesanan_ibfk_1` FOREIGN KEY (`kodepem`) REFERENCES `pemesanan` (`kodepem`),
  ADD CONSTRAINT `detailpemesanan_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`);

--
-- Constraints for table `detailpermintaan`
--
ALTER TABLE `detailpermintaan`
  ADD CONSTRAINT `detailpermintaan_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`),
  ADD CONSTRAINT `detailpermintaan_ibfk_2` FOREIGN KEY (`kodeper`) REFERENCES `permintaan` (`kodeper`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`kodekar`) REFERENCES `karyawan` (`kode_karyawan`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`kode_supp`) REFERENCES `supplier` (`kode_supp`);

--
-- Constraints for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD CONSTRAINT `permintaan_FK_karyawan` FOREIGN KEY (`kodekar`) REFERENCES `karyawan` (`kode_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
