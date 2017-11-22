-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2017 at 02:01 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skincare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(100) NOT NULL,
  `email_member` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `alamat_member` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `email_member`, `password`, `nama_member`, `alamat_member`) VALUES
(1, 'aldofadillaputra@gmail.com', '12345678', 'Aldo Fadilla Putra', 'Jl. Limbungan No.19 Rumbai Pesisir Pekanbaruuuu'),
(2, 'raja@gmail.com', '123', 'raja', 'rumbai'),
(3, 'tam@gmail.com', '567', 'tam', 'usa'),
(6, 'cut@gmail.com', 'cut', 'cut', 'kulim'),
(7, 'iwan@gmail.com', 'iwan', 'iwan', 'rowosari');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_skincare`
--

CREATE TABLE `pesan_skincare` (
  `id_pesanskincare` int(100) NOT NULL,
  `id_member` int(100) NOT NULL,
  `id_skincare` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pesan_treatment`
--

CREATE TABLE `pesan_treatment` (
  `id_pesantreatment` int(100) NOT NULL,
  `id_treatment` int(100) NOT NULL,
  `id_member` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `skincare`
--

CREATE TABLE `skincare` (
  `id_skincare` int(100) NOT NULL,
  `nama_skincare` varchar(100) NOT NULL,
  `harga_skincare` varchar(100) NOT NULL,
  `deskripsi_skincare` varchar(300) NOT NULL,
  `gambar_skincare` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skincare`
--

INSERT INTO `skincare` (`id_skincare`, `nama_skincare`, `harga_skincare`, `deskripsi_skincare`, `gambar_skincare`) VALUES
(1, ' Eau de Parfum', '150000', ' Fuchsia Ballerina (Orchid) Eau de Parfum 55 mL... ', '1511186571.jpg'),
(2, ' Scented Bar Soap', '100000', ' Fuchsia Ballerina (Orchid) Scented Bar Soap 75 g... ', '1511186610.jpg'),
(3, ' Scented Hand Cream', '85000', ' Fuchsia Ballerina (Orchid) Scented Hand Cream 50 mL', '1511187096.jpg'),
(4, ' Scented Shampoo & Body Wash ', '120000', 'Fuchsia Ballerina (Orchid) Scented Shampoo & Body Wash 200 mL', '1511187134.jpg'),
(5, ' Scented Deodorant ', '100000', 'Fuchsia Ballerina (Orchid) Scented Deodorant 100 mL', '1511187177.jpg'),
(6, ' Scented Body Cream ', '200000', 'Fuchsia Ballerina (Orchid) Scented Body Cream 200 mL', '1511187222.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id_treatment` int(100) NOT NULL,
  `nama_treatment` varchar(100) NOT NULL,
  `deskripsi_treatment` varchar(300) NOT NULL,
  `harga_treatment` varchar(100) NOT NULL,
  `gambar_treatment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id_treatment`, `nama_treatment`, `deskripsi_treatment`, `harga_treatment`, `gambar_treatment`) VALUES
(5, 'Laser Dual Yellow', 'Laser CuBr kombinasi panjang gelombang 578 nanometer dan 511 nanometer. Panjang gelombang 578 adalah gelombang warna kuning,  bekerja di jaringan vaskuler, paling kuat diabsorpsi dalam…', '500000', '1511183642.jpg'),
(6, 'Laser Peel', 'Tindakan medis laseryang paling efektif untuk mengecilkan pori-pori besar dan mengurangi minyakyang berlebihan pada wajah. Juga bekerja meningkatkan pembentukan kolagen,menghaluskan tekstur kulit, dan mengurangi jumlah…', '680000', '1511183725.jpg'),
(7, 'Botanical Mesotherapy Modern', 'Perawatan mesotherapy  menggunakan teknologi elektroporesis dan ultrasound untuk memasukkan serum botanical  ke dalam kulit, tanpa rasa sakit dan tidak menimbulkan bekas. Berfungsi untuk peremajaan, melembabkan, mencerahkan…', '600000', '1511187485.jpg'),
(8, 'Photodynamic Therapy Infra Red', ' Perawatan photo rejuvenation menggunakan sinar  panjang gelombang 830 nm, terbukti secara klinis meremajakan kulit, mengurangi kemerahan, dan  menyembuhkan peradangan pada kulit.  ', '850000', '1511187596.jpg'),
(9, 'Botanical MeshoTherapy', 'Perawatan  menggunakan alat mesogun untuk memasukan serum botanical ke dalam kulit yang berfungsi untuk peremajaan, melembabkan,mencerahkan dan mengurangi noda hitam kulit.', '700000', '1511187684.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pesan_skincare`
--
ALTER TABLE `pesan_skincare`
  ADD PRIMARY KEY (`id_pesanskincare`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_skincare` (`id_skincare`);

--
-- Indexes for table `pesan_treatment`
--
ALTER TABLE `pesan_treatment`
  ADD PRIMARY KEY (`id_pesantreatment`),
  ADD KEY `id_treatment` (`id_treatment`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `skincare`
--
ALTER TABLE `skincare`
  ADD PRIMARY KEY (`id_skincare`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id_treatment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pesan_skincare`
--
ALTER TABLE `pesan_skincare`
  MODIFY `id_pesanskincare` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pesan_treatment`
--
ALTER TABLE `pesan_treatment`
  MODIFY `id_pesantreatment` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skincare`
--
ALTER TABLE `skincare`
  MODIFY `id_skincare` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id_treatment` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesan_skincare`
--
ALTER TABLE `pesan_skincare`
  ADD CONSTRAINT `pesan_skincare_ibfk_1` FOREIGN KEY (`id_skincare`) REFERENCES `skincare` (`id_skincare`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_skincare_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan_treatment`
--
ALTER TABLE `pesan_treatment`
  ADD CONSTRAINT `pesan_treatment_ibfk_1` FOREIGN KEY (`id_treatment`) REFERENCES `treatment` (`id_treatment`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_treatment_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
