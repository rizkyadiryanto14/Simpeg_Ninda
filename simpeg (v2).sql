-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2022 at 02:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti_pegawai`
--

CREATE TABLE `cuti_pegawai` (
  `id_cutipegawai` int(25) NOT NULL,
  `id_pegawai` int(25) NOT NULL,
  `jenis_cuti` varchar(225) NOT NULL,
  `alasan_cuti` varchar(225) NOT NULL,
  `lama_cuti` varchar(225) NOT NULL,
  `ket_lama_cuti` varchar(225) NOT NULL,
  `dari_tanggal` varchar(225) NOT NULL,
  `sampai_dengan` varchar(225) NOT NULL,
  `panmud_kasubag` varchar(225) DEFAULT NULL,
  `panitera_sekretaris` varchar(225) DEFAULT NULL,
  `ketua` varchar(225) DEFAULT NULL,
  `app_panmud_kasubag` int(25) NOT NULL,
  `app_panitera_sekretaris` int(25) NOT NULL,
  `app_ketua` int(25) NOT NULL,
  `status_cuti` varchar(225) NOT NULL,
  `ket_status_cuti` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti_pegawai`
--

INSERT INTO `cuti_pegawai` (`id_cutipegawai`, `id_pegawai`, `jenis_cuti`, `alasan_cuti`, `lama_cuti`, `ket_lama_cuti`, `dari_tanggal`, `sampai_dengan`, `panmud_kasubag`, `panitera_sekretaris`, `ketua`, `app_panmud_kasubag`, `app_panitera_sekretaris`, `app_ketua`, `status_cuti`, `ket_status_cuti`) VALUES
(1, 29, 'Cuti Sakit', 'sakit', '3', 'Hari', '2022-07-03', '2022-07-07', '196709172000121002', NULL, NULL, 0, 0, 1, 'Diajukan', 'Menunggu Approval Kepala TU');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id_gaji` int(11) NOT NULL,
  `golongan` varchar(25) NOT NULL,
  `gaji_pegawai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `golongan`, `gaji_pegawai`) VALUES
(1, 'IVA', 5000000),
(2, 'IVB', 5211500),
(3, 'IVC', 5431900),
(4, 'IVD', 5661700),
(5, 'IVE', 5901200),
(6, 'IIIA', 4236400),
(7, 'IIIB', 4415600),
(8, 'IIIC', 4602400),
(9, 'IIID', 4797000),
(10, 'IIA', 3373600);

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int(25) NOT NULL,
  `nama_golongan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `nama_golongan`) VALUES
(1, 'IV A'),
(2, 'IV B'),
(3, 'IV C'),
(4, 'IV D'),
(5, 'IV E'),
(6, 'III A'),
(7, 'III B'),
(8, 'III C'),
(9, 'III D'),
(10, 'II A');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(25) NOT NULL,
  `nama_jabatan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'KEPALA SEKOLAH'),
(2, 'WAKIL KEPALA'),
(3, 'WAKA KESISWAAN'),
(4, 'WAKA KURIKULUM'),
(5, 'WAKA AKADEMIK'),
(6, 'BENDAHARA'),
(7, 'KEPALA TU'),
(8, 'KEPALA KOMITE'),
(9, 'KEPALA SAPRAS'),
(10, 'SEKRETARIS'),
(11, 'OPERATOR'),
(12, 'STAFF KESISWAAN'),
(13, 'STAFF AKADEMIK'),
(14, 'STAFF KURIKULUM'),
(15, 'STAFF BENDAHARA'),
(16, 'STAFF TU'),
(17, 'STAFF KOMITE'),
(18, 'STAFF SAPRAS'),
(19, 'GURU PNS'),
(20, 'WAKIL SAPRAS'),
(21, 'WALI KELAS');

-- --------------------------------------------------------

--
-- Table structure for table `kgb_pegawai`
--

CREATE TABLE `kgb_pegawai` (
  `id_kgbpegawai` int(25) NOT NULL,
  `id_pegawai` int(25) NOT NULL,
  `kgb_terakhir` varchar(225) NOT NULL,
  `kgb_datang` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `timestamp` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `knp_pegawai`
--

CREATE TABLE `knp_pegawai` (
  `id_knppegawai` int(25) NOT NULL,
  `id_pegawai` int(25) NOT NULL,
  `knp_terakhir` varchar(225) NOT NULL,
  `knp_datang` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `pensiun` varchar(225) NOT NULL,
  `timestamp` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(25) NOT NULL,
  `nama_pegawai` varchar(225) NOT NULL,
  `nip` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `TTL` varchar(100) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `id_jabatan` int(25) NOT NULL,
  `id_golongan` int(25) NOT NULL,
  `unit_kerja` varchar(225) NOT NULL,
  `id_pendidikan` int(25) NOT NULL,
  `tahun_masuk` varchar(100) NOT NULL,
  `tahun_keluar` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `jenis_kelamin`, `alamat`, `TTL`, `agama`, `id_jabatan`, `id_golongan`, `unit_kerja`, `id_pendidikan`, `tahun_masuk`, `tahun_keluar`, `gambar`) VALUES
(1, 'Dr. M. BASIR, M.H.', '196008161988031005', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 1, 7, 'SUMBAWA', 3, '2020', '2022', '../build/images/laki.jpg'),
(2, 'Drs. H. ABU AEMAN, S.H., M.H.', '196008161988031007', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Sumbawa, 14-Juli-1998', 'islam', 3, 4, 'SUMBAWA', 1, '2020', '2022', ''),
(3, 'Drs. H. R. A. SATIBI, S.H., M.H.', '196202151992031002', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 4, 3, 'SUMBAWA', 1, '2020', '2022', ''),
(4, 'Dra. Hj. ERAWATI, S.H., M.H.', '195704071992032001', 'Perempuan', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 4, 3, 'SUMBAWA', 1, '2020', '2022', ''),
(5, 'Drs. H. SYARIFUDIN, M.H.', '197002061994031004', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 4, 3, 'SUMBAWA', 1, '2020', '2022', ''),
(6, 'H. ABDILLAH, S.H., M.H.', '195708191984031002', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 3, 4, 'SUMBAWA', 1, '2020', '2022', ''),
(7, 'Dra. SITI MUNAWAROH, S.H.', '196708131992032001', 'Perempuan', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 4, 3, 'SUMBAWA', 1, '2020', '2022', ''),
(8, 'Drs. MOCHAMAD SUMANTRI, S.H.', '196410301992031005', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 4, 3, 'SUMBAWA', 1, '2020', '2022', ''),
(9, 'Drs. H. MOHD. ABDU A. RAMLY', '196305071991031004', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 3, 4, 'SUMBAWA', 1, '2020', '2022', ''),
(10, 'Drs. H. A. SYUYUTI, M.Sy.', '196901031995031001', 'Perempuan', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 4, 3, 'SUMBAWA', 1, '2020', '2022', ''),
(11, 'Drs. TAUHID, S.H., M.H.', '196403151991031002', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 4, 3, 'SUMBAWA', 2, '2020', '2022', ''),
(12, 'Drs. Ahmad S.kom', '196507021992031006', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 2, 3, 'SUMBAWA', 3, '2020', '2022', ''),
(13, 'Drs. E. ARIFUDIN', '196311151993031004', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 5, 1, 'SUMBAWA', 2, '2020', '2022', ''),
(14, 'ATO SUNARTO, S.Ag', '197208161994031002', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 6, 1, 'SUMBAWA', 2, '2020', '2022', ''),
(15, 'ABDUL HAKIM, SH., SHI, M.H.', '196709172000121002', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 7, 1, 'SUMBAWA', 1, '2020', '2022', ''),
(16, 'YUYU YULIANI, S.Ag.M.H.', '196211051983032004', 'Perempuan', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 8, 1, 'SUMBAWA', 1, '2020', '2022', ''),
(17, 'ASNALI, S.Ag', '196303071992031005', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 9, 9, 'SUMBAWA', 1, '2020', '2022', ''),
(18, 'Drs. Panmud S.Kom', '196709172000121004', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 10, 8, 'SUMBAWA', 2, '2020', '2022', ''),
(19, 'Drs. Staff Panmud Gugatan S.Kom', '196211051983032005', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 11, 6, 'SUMBAWA', 1, '2020', '2022', ''),
(20, 'STAF AKADEMIK S.T', '196303071992031006', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 13, 7, 'SUMBAWA', 1, '2020', '2022', ''),
(21, 'KHALIDA, S.Ag, M.H.', '197411022003122002', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 13, 1, 'SUMBAWA', 1, '2020', '2022', ''),
(22, 'AHYA SYARIFUDDIN', '196011261981021003', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 13, 8, 'SUMBAWA', 1, '2020', '2022', ''),
(23, 'AHMAD WASKITO, SEI', '197606082009041001', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 13, 8, 'SUMBAWA', 1, '2020', '2022', ''),
(24, 'WAHYU, S.Sy', '197209212003121004', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 13, 7, 'SUMBAWA', 1, '2020', '2022', ''),
(25, 'FADHLILLAH MUBARAK, S.Sy', '197908112006041002', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 13, 7, 'SUMBAWA', 1, '2020', '2022', ''),
(26, 'ENY KURNIASIH, S.H.', '196511091989102001', 'Perempuan', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 14, 9, 'SUMBAWA', 1, '2020', '2022', ''),
(27, 'SOLIKHIN, S.H.', '196512101992031001', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 14, 7, 'SUMBAWA', 1, '2020', '2022', ''),
(28, 'ADE SOLAHUDIN, SHI', '197905172014051001', 'Laki-Laki', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 14, 7, 'SUMBAWA', 1, '2020', '2022', ''),
(29, 'DWI YUNIANTI, S.H.', '198212132006042002', 'Perempuan', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 16, 8, 'SUMBAWA', 1, '2020', '2022', ''),
(30, 'USMANIAH, S.H.', '197006181990032001', 'Perempuan', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 17, 9, 'SUMBAWA', 2, '2020', '2022', ''),
(31, 'RATUSISKA ARIES TIANI, S.E.', '198304212011012013', 'Perempuan', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 18, 8, 'SUMBAWA', 1, '2020', '2022', ''),
(32, 'NINDA S.T', '199612022019032004', 'Perempuan', 'Wera, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 19, 6, 'SUMBAWA', 1, '2020', '2022', ''),
(33, 'INTAN MAHARANI, S.I.A', '199602122019032014', 'Perempuan', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 21, 6, 'SUMBAWA', 1, '2020', '2022', ''),
(34, 'RIZKY', '199602122019032015', '0', 'Kebayan, Sumbawa Besar', 'Kebayan, 14-Agustus-1990', 'islam', 20, 6, 'SUMBAWA', 1, '2020', '2022', '');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(25) NOT NULL,
  `nama_pendidikan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `nama_pendidikan`) VALUES
(1, 'S1'),
(2, 'S2'),
(4, 'S3'),
(5, 'SMA/SMK'),
(6, 'SD'),
(7, 'SMP');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(25) NOT NULL,
  `nip` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` text NOT NULL,
  `foto` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nip`, `password`, `role`, `foto`) VALUES
(1, '196008161988031005', '8561863b55faf85b9ad67c52b3b851ac', 'Kepsek', NULL),
(2, '196008161988031007', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(3, '196202151992031002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(4, '195704071992032001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(5, '197002061994031004', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(6, '195708191984031002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(7, '196708131992032001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(8, '196410301992031005', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(9, '196305071991031004', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(10, '196901031995031001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(11, '196403151991031002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(12, '196311151993031004', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(13, '197208161994031002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(14, '196709172000121002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(15, '196303071992031005', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(16, '196211051983032005', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(17, '197411022003122002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(18, '196011261981021003', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(19, '197606082009041001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(20, '197209212003121004', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(21, '197908112006041002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(22, '196511091989102001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(23, '197905172014051001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(24, '196512101992031001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(25, '198212132006042002', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(26, '197006181990032001', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(27, '199612022019032004', '21232f297a57a5a743894a0e4a801fc3', 'Admin', NULL),
(28, '199602122019032014', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(29, '198304212011012013', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(30, '196507021992031006', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(31, '196211051983032004', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(32, '199602122019032015', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(33, '196709172000121004', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL),
(34, '196303071992031006', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti_pegawai`
--
ALTER TABLE `cuti_pegawai`
  ADD PRIMARY KEY (`id_cutipegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kgb_pegawai`
--
ALTER TABLE `kgb_pegawai`
  ADD PRIMARY KEY (`id_kgbpegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `knp_pegawai`
--
ALTER TABLE `knp_pegawai`
  ADD PRIMARY KEY (`id_knppegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_golongan` (`id_golongan`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_pendidikan` (`id_pendidikan`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nip` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti_pegawai`
--
ALTER TABLE `cuti_pegawai`
  MODIFY `id_cutipegawai` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_golongan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kgb_pegawai`
--
ALTER TABLE `kgb_pegawai`
  MODIFY `id_kgbpegawai` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `knp_pegawai`
--
ALTER TABLE `knp_pegawai`
  MODIFY `id_knppegawai` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuti_pegawai`
--
ALTER TABLE `cuti_pegawai`
  ADD CONSTRAINT `cuti_pegawai_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kgb_pegawai`
--
ALTER TABLE `kgb_pegawai`
  ADD CONSTRAINT `kgb_pegawai_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `knp_pegawai`
--
ALTER TABLE `knp_pegawai`
  ADD CONSTRAINT `knp_pegawai_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_golongan`) REFERENCES `golongan` (`id_golongan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
