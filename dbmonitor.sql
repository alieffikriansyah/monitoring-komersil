-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2025 at 02:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmonitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(11) NOT NULL,
  `id_pulau` int(11) DEFAULT NULL,
  `kode_cabang` varchar(50) NOT NULL,
  `provinsi_cabang` text,
  `name_cabang` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `id_pulau`, `kode_cabang`, `provinsi_cabang`, `name_cabang`, `status`) VALUES
(1, 1, 'IAS', 'Indonesia', 'IAS_PUSAT', 1),
(2, NULL, 'tes', NULL, 'tes_cabang', 8),
(3, 2, 'BTJ', 'Aceh', 'Banda Aceh', 1),
(4, 2, 'MES', 'Sumatra Utara', 'Medan', 1),
(5, 2, 'PLM', 'Sumatra Selatan', 'Palembang', 1),
(6, 2, 'PDG', 'Sumatra Barat', 'Padang', 1),
(7, 2, 'BKS', 'Bengkulu', 'Bengkulu', 1),
(8, 2, 'PKU', 'Riau', 'Pekanbaru', 1),
(9, 3, 'JKT', 'DKI Jakarta', 'Jakarta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` text,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `status`) VALUES
(1, 'Business as Usual', '1'),
(2, 'One shot project', '1'),
(3, 'Market Penetration Growth', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login_log`
--

CREATE TABLE `login_log` (
  `ip_address` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nik` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tiime_log` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_log`
--

INSERT INTO `login_log` (`ip_address`, `username`, `id_cabang`, `nama`, `email`, `nik`, `tiime_log`) VALUES
('::1', 'superadmin', 1, 'superadmin', NULL, '111111', '2025-08-13 21:21:31'),
('::1', 'user', 3, 'pengguna1', NULL, '', '2025-08-13 21:22:26'),
('::1', 'manager', 1, 'Manager1', NULL, '', '2025-08-13 21:22:55'),
('::1', 'manager', 1, 'Manager1', NULL, '', '2025-08-13 21:23:50'),
('::1', 'user', 3, 'pengguna1', NULL, '', '2025-08-13 21:28:01'),
('::1', 'user', 3, 'pengguna1', NULL, '', '2025-08-13 21:29:38'),
('::1', 'user', 3, 'pengguna1', NULL, '', '2025-08-13 21:32:52'),
('::1', 'user', 3, 'pengguna1', NULL, '', '2025-08-13 21:39:00'),
('::1', 'manager', 1, 'Manager1', NULL, '', '2025-08-13 21:39:23'),
('::1', 'user', 3, 'pengguna1', NULL, '', '2025-08-13 21:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `url` text,
  `position` text,
  `icon` varchar(50) NOT NULL,
  `insertdate` date DEFAULT NULL,
  `updatedate` date DEFAULT NULL,
  `createby` varchar(150) DEFAULT NULL,
  `updateby` varchar(150) DEFAULT NULL,
  `parent` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `name`, `url`, `position`, `icon`, `insertdate`, `updatedate`, `createby`, `updateby`, `parent`, `status`) VALUES
(1, 'Master Data', NULL, NULL, 'feather icon-book', NULL, NULL, NULL, NULL, '-1', 1),
(3, 'Menu Sistem', 'menu_aplikasi', NULL, '', NULL, NULL, NULL, NULL, '1', 0),
(5, 'Role Pengguna', 'role_user', NULL, '', NULL, NULL, NULL, NULL, '1', 0),
(9, 'Pengguna', 'user/master', NULL, 'feather icon-users', NULL, NULL, NULL, NULL, '1', 0),
(39, 'Cabang', 'cabang', NULL, '', NULL, NULL, NULL, NULL, '1', 0),
(40, 'Pulau', 'pulau', NULL, '', NULL, NULL, NULL, NULL, '1', 0),
(41, 'Kategori Program', 'kategori', NULL, '', NULL, NULL, NULL, NULL, '1', 0),
(42, 'Transaksi', NULL, NULL, '', NULL, NULL, NULL, NULL, '-1', 0),
(43, 'Kontrak', NULL, NULL, '', NULL, NULL, NULL, NULL, '42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pulau`
--

CREATE TABLE `pulau` (
  `id_pulau` int(11) NOT NULL,
  `nama_pulau` text,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pulau`
--

INSERT INTO `pulau` (`id_pulau`, `nama_pulau`, `status`) VALUES
(1, 'Indonesia', 1),
(2, 'Sumatra', 1),
(3, 'Jawa', 1),
(5, 'Bali', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name_code` varchar(15) DEFAULT NULL,
  `name_role` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name_code`, `name_role`, `status`) VALUES
(1, 'SA', 'super_admin', 1),
(2, 'M', 'Manager', 1),
(3, 'User', 'pengguna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role_akses`
--

CREATE TABLE `role_akses` (
  `id_roleakses` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `create` int(11) DEFAULT NULL,
  `read` int(11) DEFAULT NULL,
  `update` int(11) DEFAULT NULL,
  `delete` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_akses`
--

INSERT INTO `role_akses` (`id_roleakses`, `id_role`, `id_menu`, `create`, `read`, `update`, `delete`) VALUES
(1, 1, 1, 1, 1, 1, 1),
(2, 1, 3, 1, 1, 1, 1),
(3, 1, 4, 1, 1, 1, 1),
(4, 1, 5, 1, 1, 1, 1),
(5, 1, 6, 1, 1, 1, 1),
(6, 1, 7, 0, 0, 0, 0),
(7, 1, 8, 0, 0, 0, 0),
(8, 1, 9, 1, 1, 1, 1),
(9, 1, 10, 0, 0, 0, 0),
(10, 1, 11, 1, 1, 1, 0),
(11, 1, 12, 1, 1, 1, 1),
(12, 2, 1, 1, 1, 1, 1),
(13, 2, 3, 1, 1, 1, 1),
(14, 2, 4, 0, 0, 0, 0),
(15, 2, 5, 1, 1, 1, 1),
(16, 2, 6, 0, 0, 0, 0),
(17, 2, 7, 0, 0, 0, 0),
(18, 2, 8, 0, 0, 0, 0),
(19, 2, 9, 1, 1, 1, 1),
(20, 2, 10, 0, 0, 0, 0),
(21, 2, 11, 1, 1, 1, 1),
(22, 2, 12, 1, 1, 1, 1),
(23, 4, 1, 1, 1, 1, 1),
(24, 4, 3, 1, 1, 1, 1),
(25, 4, 4, 1, 1, 1, 1),
(26, 4, 5, 1, 1, 1, 1),
(27, 4, 6, 1, 1, 1, 1),
(28, 4, 7, 1, 1, 1, 1),
(29, 4, 8, 1, 1, 1, 1),
(30, 4, 9, 1, 1, 1, 1),
(31, 4, 10, 1, 1, 1, 1),
(32, 4, 11, 1, 1, 1, 1),
(33, 4, 12, 1, 1, 1, 1),
(34, 4, 13, 1, 1, 1, 1),
(35, 2, 13, 1, 1, 1, 1),
(36, 2, 15, 1, 1, 1, 1),
(37, 2, 16, 1, 1, 1, 1),
(38, 2, 17, 1, 1, 1, 1),
(39, 2, 18, 1, 1, 1, 1),
(40, 2, 19, 1, 1, 1, 1),
(41, 2, 20, 1, 1, 1, 1),
(42, 2, 21, 1, 1, 1, 1),
(43, 2, 22, 1, 1, 1, 1),
(44, 99, 1, 1, 1, 1, 1),
(45, 99, 3, 1, 1, 1, 1),
(46, 99, 4, 1, 1, 1, 1),
(47, 99, 5, 0, 0, 0, 1),
(48, 99, 6, 0, 0, 0, 0),
(49, 99, 9, 1, 1, 1, 1),
(50, 99, 11, 1, 1, 1, 1),
(51, 99, 12, 1, 1, 1, 1),
(52, 99, 13, 1, 1, 1, 1),
(53, 99, 15, 1, 1, 1, 1),
(54, 99, 16, 1, 1, 1, 1),
(55, 99, 17, 1, 1, 1, 1),
(56, 99, 18, 1, 1, 1, 1),
(57, 99, 19, 1, 1, 1, 1),
(58, 99, 20, 1, 1, 1, 1),
(59, 99, 21, 1, 1, 1, 1),
(60, 99, 22, 1, 1, 1, 1),
(61, 1, 13, 1, 1, 1, 1),
(62, 1, 15, 1, 1, 1, 1),
(63, 1, 16, 0, 0, 0, 0),
(64, 1, 17, 0, 0, 0, 0),
(65, 1, 18, 1, 1, 1, 0),
(66, 1, 19, 1, 1, 1, 1),
(67, 1, 20, 0, 0, 0, 0),
(68, 1, 21, 1, 1, 1, 1),
(69, 1, 22, 1, 1, 1, 1),
(70, 1, 24, 0, 0, 0, 0),
(71, 5, 1, 1, 1, 1, 1),
(72, 5, 3, 1, 1, 1, 1),
(73, 5, 4, 0, 0, 0, 0),
(74, 5, 5, 1, 1, 1, 1),
(75, 5, 6, 0, 0, 0, 0),
(76, 5, 9, 1, 1, 1, 1),
(77, 5, 11, 1, 1, 1, 1),
(78, 5, 12, 1, 1, 1, 1),
(79, 5, 13, 1, 1, 1, 1),
(80, 5, 15, 1, 1, 1, 1),
(81, 5, 16, 1, 1, 1, 1),
(82, 5, 17, 1, 1, 1, 1),
(83, 5, 18, 1, 1, 1, 1),
(84, 5, 19, 1, 1, 1, 1),
(85, 5, 20, 1, 1, 1, 1),
(86, 5, 21, 1, 1, 1, 1),
(87, 5, 22, 1, 1, 1, 1),
(88, 5, 24, 0, 0, 0, 0),
(89, 5, 25, 0, 0, 0, 0),
(90, 5, 26, 0, 0, 0, 0),
(91, 5, 27, 0, 0, 0, 0),
(92, 5, 28, 0, 0, 0, 0),
(93, 1, 25, 1, 1, 1, 1),
(94, 1, 26, 1, 1, 1, 1),
(95, 1, 27, 1, 1, 1, 1),
(96, 1, 28, 0, 0, 0, 0),
(97, 99, 25, 0, 0, 0, 0),
(98, 99, 26, 1, 1, 1, 1),
(99, 99, 27, 1, 1, 1, 1),
(100, 99, 28, 1, 1, 1, 1),
(101, 2, 25, 0, 0, 0, 0),
(102, 2, 26, 0, 0, 0, 0),
(103, 2, 27, 0, 0, 0, 0),
(104, 2, 28, 0, 0, 0, 0),
(105, 1, 30, 1, 1, 1, 1),
(106, 1, 31, 1, 1, 1, 1),
(107, 1, 32, 1, 1, 1, 1),
(108, 2, 30, 0, 0, 0, 0),
(109, 2, 31, 0, 0, 0, 0),
(110, 2, 32, 0, 0, 0, 0),
(111, 1, 34, 1, 1, 1, 1),
(112, 1, 36, 0, 0, 0, 0),
(113, 1, 37, 1, 1, 1, 1),
(114, 1, 38, 1, 1, 1, 1),
(115, 1, 39, 1, 1, 1, 1),
(116, 1, 40, 1, 1, 1, 1),
(117, 1, 42, 0, 0, 0, 0),
(118, 101, 1, 1, 1, 1, 1),
(119, 101, 3, 1, 1, 1, 1),
(120, 101, 4, 1, 1, 1, 1),
(121, 101, 5, 1, 1, 1, 1),
(122, 101, 6, 1, 1, 1, 1),
(123, 101, 9, 1, 1, 1, 1),
(124, 101, 12, 1, 1, 1, 1),
(125, 101, 13, 1, 1, 1, 1),
(126, 101, 15, 1, 1, 1, 1),
(127, 101, 16, 1, 1, 1, 1),
(128, 101, 17, 1, 1, 1, 1),
(129, 101, 19, 1, 1, 1, 1),
(130, 101, 22, 1, 1, 1, 1),
(131, 101, 25, 1, 1, 1, 1),
(132, 101, 27, 1, 1, 1, 1),
(133, 101, 28, 1, 1, 1, 1),
(134, 101, 30, 1, 1, 1, 1),
(135, 101, 31, 1, 1, 1, 1),
(136, 101, 32, 1, 1, 1, 1),
(137, 101, 34, 1, 1, 1, 1),
(138, 101, 36, 1, 1, 1, 1),
(139, 101, 37, 1, 1, 1, 1),
(140, 101, 38, 1, 1, 1, 1),
(141, 101, 39, 1, 1, 1, 1),
(142, 101, 40, 1, 1, 1, 1),
(143, 101, 42, 1, 1, 1, 1),
(144, 1, 41, 1, 1, 1, 1),
(145, 2, 39, 1, 1, 1, 1),
(146, 2, 40, 1, 1, 1, 1),
(147, 2, 41, 1, 1, 1, 1),
(148, 2, 42, 1, 1, 1, 1),
(149, 2, 43, 1, 1, 1, 1),
(150, 3, 1, 0, 0, 0, 0),
(151, 3, 3, 0, 0, 0, 0),
(152, 3, 5, 0, 0, 0, 0),
(153, 3, 9, 0, 0, 0, 0),
(154, 3, 39, 0, 0, 0, 0),
(155, 3, 40, 0, 0, 0, 0),
(156, 3, 41, 0, 0, 0, 0),
(157, 3, 42, 1, 1, 1, 1),
(158, 3, 43, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE `terminal` (
  `id` int(11) NOT NULL,
  `nama_terminal` varchar(250) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terminal`
--

INSERT INTO `terminal` (`id`, `nama_terminal`, `parent_id`, `status`) VALUES
(1, 'Terminal 1', -1, 8),
(2, 'Terminal 2', -1, 8),
(3, 'Terminal 3', -1, 8),
(4, 'Jalan Raya Perkantoran', -1, 8),
(5, 'Gedung 641', 4, 8),
(7, 'Checkin', 1, 8),
(8, 'Boarding', 1, 8),
(9, 'Arrival', 1, 8),
(10, 'Boarding', 1, 8),
(11, 'Departure', 1, 8),
(12, 'Breakdown', 1, 8),
(13, 'Parkiran', 4, 8),
(18, 'Gedung 601', 4, 8),
(19, 'Skytrain', 1, 8),
(21, 'Linking', 1, 8),
(22, 'Baggage', 1, 8),
(24, 'Checkin', 2, 8),
(25, 'Boarding', 2, 8),
(26, 'Departure', 2, 8),
(27, 'Baggage', 2, 8),
(28, 'Breakdown', 2, 8),
(29, 'Arrival', 2, 8),
(30, 'Linking', 2, 8),
(31, 'SkyTrain', 2, 8),
(32, 'SkyTrain', 3, 8),
(33, 'Arrival', 3, 8),
(34, 'Departure', 3, 8),
(35, 'Boarding', 3, 8),
(36, 'Checkin', 3, 8),
(37, 'Baggage Claim', 3, 8),
(38, 'Breakdown', 3, 8),
(39, 'Shoping Arcade', 1, 8),
(40, 'Shoping Arcade', 2, 8),
(41, 'Shopping Arcade', 3, 8),
(42, 'Perimeter', -1, 8),
(43, 'Perimeter Utara', 42, 8),
(44, 'Perimeter Selatan', 42, 8),
(45, 'asdsdddd', -1, 8),
(47, 'Terminal 1A', 1, 8),
(48, 'Terminal 1B', 1, 8),
(49, 'Terminal 2D', 2, 8),
(50, 'Terminal 2E', 2, 8),
(51, 'Terminal 2F', 2, 8),
(52, 'Terminal 1C', 1, 8),
(53, 'Terminal 3 Internasional', 3, 8),
(54, 'Terminal 3 Domestik', 3, 8),
(55, 'Runway Utara 2', 57, 1),
(56, 'Runway Utara 3', 57, 1),
(57, 'Runway', -1, 1),
(58, 'Runway Selatan', 57, 1),
(59, 'NP3', 57, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_privilege` tinyint(1) NOT NULL COMMENT '1 = su; 2 = ap2; 3 = OM, 4 = operator',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(16) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `cabang_kerja` varchar(255) NOT NULL,
  `type_user` varchar(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_privilege`, `username`, `password`, `nik`, `nama`, `email`, `no_hp`, `tanggal_lahir`, `jabatan`, `cabang_kerja`, `type_user`, `created`, `status`) VALUES
(1, 0, 'superadmin', '$2y$12$5r5FVToVmz5krroYo0qgcuayJzFVExNfoFGgdK0eG4O1McMDCtalO', '111111', 'superadmin', NULL, NULL, NULL, 'superadmin', '1', '1', '2025-08-10 04:58:54', 1),
(2, 0, 'manager', '$2y$12$pN9bN2YPgINK7SX0n1BgN.CcfEExTkEZ1AaLYZxfKdDvLo9rgYJ2W', '', 'Manager1', NULL, NULL, NULL, NULL, '1', '2', '2025-08-13 14:09:10', 1),
(3, 0, 'user', '$2y$12$0tZOmF7HGmJJorIKdp/gG.bmMoHBo8f1eesuIY5QBWyetizdm/Fim', '', 'pengguna1', NULL, NULL, NULL, NULL, '3', '3', '2025-08-13 14:10:20', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `pulau`
--
ALTER TABLE `pulau`
  ADD PRIMARY KEY (`id_pulau`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_akses`
--
ALTER TABLE `role_akses`
  ADD PRIMARY KEY (`id_roleakses`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pulau`
--
ALTER TABLE `pulau`
  MODIFY `id_pulau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_akses`
--
ALTER TABLE `role_akses`
  MODIFY `id_roleakses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
