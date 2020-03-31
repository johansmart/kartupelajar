-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 05:03 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE IF NOT EXISTS `identitas` (
`id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `sekolah` varchar(225) NOT NULL,
  `kepsek` varchar(225) NOT NULL,
  `nip` varchar(225) NOT NULL,
  `jln` varchar(225) NOT NULL,
  `kel` varchar(225) NOT NULL,
  `kec` varchar(225) NOT NULL,
  `kab` varchar(225) NOT NULL,
  `prov` varchar(225) NOT NULL,
  `pos` varchar(225) NOT NULL,
  `telp` varchar(225) NOT NULL,
  `hp` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `web` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id`, `gambar`, `title`, `sekolah`, `kepsek`, `nip`, `jln`, `kel`, `kec`, `kab`, `prov`, `pos`, `telp`, `hp`, `email`, `web`) VALUES
(1, 'daerah.png', 'Apk Kartu Pelajar', 'SD Negeri 1 Tombatu', 'Bambang Hadi Saputra, ST', '11011011200021221', 'Siswa', 'Betelen', 'Tombatu', 'Minahasa Tenggara', 'Sulawesi Utara', '95996', '085256651656', '085256651656', 'info@sdn1tombatu.sch.idf', 'sdn1tombatu.sch.id');

-- --------------------------------------------------------

--
-- Table structure for table `lupa_password`
--

CREATE TABLE IF NOT EXISTS `lupa_password` (
`id` int(11) NOT NULL,
  `nama_perusahaan` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `telp` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lupa_password`
--

INSERT INTO `lupa_password` (`id`, `nama_perusahaan`, `email`, `telp`) VALUES
(1, 'Yoyo Pudding', 'info@yoyopudding.com', '085266446655');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `link` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `link`) VALUES
(1, 'printkartupelajar'),
(2, 'printkartuperpus');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_akun`
--

CREATE TABLE IF NOT EXISTS `permintaan_akun` (
`id` int(11) NOT NULL,
  `nama_perusahaan` varchar(225) NOT NULL,
  `nama_pemilik` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `telp` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stempel`
--

CREATE TABLE IF NOT EXISTS `stempel` (
`id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stempel`
--

INSERT INTO `stempel` (`id`, `gambar`) VALUES
(1, 'Stempel2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tkapel`
--

CREATE TABLE IF NOT EXISTS `tkapel` (
`id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkapel`
--

INSERT INTO `tkapel` (`id`, `gambar`) VALUES
(1, 'kpel.png');

-- --------------------------------------------------------

--
-- Table structure for table `tkaper`
--

CREATE TABLE IF NOT EXISTS `tkaper` (
`id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkaper`
--

INSERT INTO `tkaper` (`id`, `gambar`) VALUES
(1, 'kper.png');

-- --------------------------------------------------------

--
-- Table structure for table `ttangan`
--

CREATE TABLE IF NOT EXISTS `ttangan` (
`id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttangan`
--

INSERT INTO `ttangan` (`id`, `gambar`) VALUES
(1, 'ttd_kepsek.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nis` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nisn` varchar(225) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tmp_lhr` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_lhr` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jk` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(225) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nis`, `nisn`, `nama_lengkap`, `tmp_lhr`, `tgl_lhr`, `jk`, `email`, `alamat`, `no_telp`, `gambar`, `level`, `blokir`, `id_session`) VALUES
('admin', 'admin', '', '', 'Administrator', '', '', '', 'bhs.11011011@gmail.com', '', '085256005691', 'twh.png', 'admin', 'N', 'q173s8hs1jl04st35169ccl8o7'),
('user18', 'pass18', '12363', '121423542', 'Elisabet Ester', 'Manado', '6/12/1993', 'Perempuan', 'email@gmail.com', 'Tomohon', '85256651673', 'blank.png', 'user', 'N', '12363'),
('user19', 'pass19', '12364', '121423543', 'Jafray Pelealu', 'Manado', '7/12/1993', 'Laki-laki', 'Tomohon', 'Tomohon', '85256651674', 'blank.png', 'user', 'N', '12364'),
('user17', 'pass17', '12362', '121423541', 'Gandy Bomba', 'Amurang', '5/12/1993', 'Laki-laki', 'email@gmail.com', 'Tomohon', '85256651672', 'blank.png', 'user', 'N', '12362'),
('user16', 'pass16', '12361', '121423540', 'Ko Hengky', 'Manado', '4/12/1993', 'Laki-laki', 'email@gmail.com', 'Tomohon', '85256651671', 'blank.png', 'user', 'N', '12361'),
('user15', 'pass15', '12360', '121423539', 'Rina Sengkey', 'Manado', '3/12/1993', 'Perempuan', 'email@gmail.com', 'Tomohon', '85256651670', 'blank.png', 'user', 'N', '12360'),
('user14', 'pass14', '12359', '121423538', 'Jois Mamahit', 'Tombatu', '2/12/1993', 'Perempuan', 'email@gmail.com', 'Tomohon', '85256651669', 'blank.png', 'user', 'N', '12359'),
('user13', 'pass13', '12358', '121423537', 'Tri Sumangkut', 'Manado', '1/12/1993', 'Perempuan', 'email@gmail.com', 'Tomohon', '85256651668', 'blank.png', 'user', 'N', '12358'),
('user12', 'pass12', '12357', '121423536', 'Fikler Gusaw', 'Buli', '12/12/1992', 'Laki-laki', 'email@gmail.com', 'Tomohon', '85256651667', 'blank.png', 'user', 'N', '12357'),
('user11', 'pass11', '12356', '121423535', 'Yursen Batawi', 'Manado', '11/12/1992', 'Laki-laki', 'email@gmail.com', 'Tomohon', '85256651666', 'blank.png', 'user', 'N', '12356'),
('user10', 'pass10', '12355', '121423534', 'Mariano Lala', 'Manado', '10/12/1992', 'Laki-laki', 'email@gmail.com', 'Tomohon', '85256651665', 'blank.png', 'user', 'N', '12355'),
('user9', 'pass9', '12354', '121423533', 'Aprilliano Rares', 'Manado', '9/12/1992', 'Laki-laki', 'email@gmail.com', 'Tomohon', '85256651664', 'blank.png', 'user', 'N', '12354'),
('user8', 'pass8', '12353', '121423532', 'Arido Lapod', 'Manado', '8/12/1992', 'Laki-laki', 'email@gmail.com', 'Tomohon', '85256651663', 'blank.png', 'user', 'N', '12353'),
('user7', 'pass7', '12352', '121423531', 'Rekos Susanto', 'Gorontalo', '7/12/1992', 'Laki-laki', 'email@gmail.com', 'Tomohon', '85256651662', 'blank.png', 'user', 'N', '12352'),
('user6', 'pass6', '12351', '121423530', 'Livi Pungus', 'Manado', '6/12/1992', 'Perempuan', 'email@gmail.com', 'Tomohon', '85256651661', 'blank.png', 'user', 'N', '12351'),
('user5', 'pass5', '12350', '121423529', 'Kiki Pelealu', 'Manado', '5/12/1992', 'Laki-laki', 'email@gmail.com', 'Tomohon', '85256651660', 'blank.png', 'user', 'N', '12350'),
('user1', 'user1', '12346', '121423525', 'Bambang Saputra', 'Gorontalo', '', 'Laki-laki', 'email@gmail.com', 'Tomohon', '85256651656', '3x4.jpg', 'user', 'N', '12346'),
('user2', 'pass2', '12347', '121423526', 'Arthnisandy Pondaag', 'Manado', '2/12/1992', 'Perempuan', 'email@gmail.com', 'Tomohon', '85256651657', 'blank.png', 'user', 'N', '12347'),
('user3', 'pass3', '12348', '121423527', 'Julia Ransulangi', 'Manado', '3/12/1992', 'Perempuan', 'email@gmail.com', 'Tomohon', '85256651658', 'blank.png', 'user', 'N', '12348'),
('user4', 'pass4', '12349', '121423528', 'Fidel Raja', 'Buli', '4/12/1992', 'Laki-laki', 'email@gmail.com', 'Tomohon', '85256651659', 'blank.png', 'user', 'N', '12349');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lupa_password`
--
ALTER TABLE `lupa_password`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permintaan_akun`
--
ALTER TABLE `permintaan_akun`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stempel`
--
ALTER TABLE `stempel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkapel`
--
ALTER TABLE `tkapel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkaper`
--
ALTER TABLE `tkaper`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ttangan`
--
ALTER TABLE `ttangan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lupa_password`
--
ALTER TABLE `lupa_password`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permintaan_akun`
--
ALTER TABLE `permintaan_akun`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stempel`
--
ALTER TABLE `stempel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tkapel`
--
ALTER TABLE `tkapel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tkaper`
--
ALTER TABLE `tkaper`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ttangan`
--
ALTER TABLE `ttangan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
