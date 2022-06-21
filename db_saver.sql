-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 09:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_saver`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `adminId` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `NIS` bigint(25) NOT NULL,
  `roleId` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomorTelp` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`adminId`, `nama`, `NIS`, `roleId`, `password`, `nomorTelp`, `alamat`) VALUES
(1, 'Hasan', 89130010, 1, 'MWK95tClV1MFySWfoOy93w==', '085875149774', 'Sidareja'),
(2, 'Ma\'mun', 89160012, 1, 'PsYx+eZh5J9IHebesdNvhw==', '081229338498', 'Sidareja'),
(3, 'Wafaa', 89160011, 1, 'AeCVccflINLQGUPyBJWNTg==', '089776774837', 'Kesugihan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nasabah`
--

CREATE TABLE `tb_nasabah` (
  `nasabahId` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `NIS` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `saldo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nasabah`
--

INSERT INTO `tb_nasabah` (`nasabahId`, `nama`, `NIS`, `alamat`, `saldo`) VALUES
(12, 'arif', 89131201, 'cilacap', 6000),
(13, 'marif', 89140011, 'sidareja', 20000),
(14, 'sutris', 122, 'cilacap\r\n', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penarikan`
--

CREATE TABLE `tb_penarikan` (
  `tarikId` int(11) NOT NULL,
  `nasabahId` int(11) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penarikan`
--

INSERT INTO `tb_penarikan` (`tarikId`, `nasabahId`, `jumlah`, `timestamp`) VALUES
(20, 12, 5000, '2022-06-21 05:40:23'),
(21, 12, 2000, '2022-06-21 07:06:06');

--
-- Triggers `tb_penarikan`
--
DELIMITER $$
CREATE TRIGGER `pengurangan_saldo` AFTER INSERT ON `tb_penarikan` FOR EACH ROW BEGIN
UPDATE tb_nasabah SET saldo = saldo-NEW.jumlah
where nasabahId = NEW.nasabahId;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyetoran`
--

CREATE TABLE `tb_penyetoran` (
  `setorId` int(11) NOT NULL,
  `nasabahId` int(11) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyetoran`
--

INSERT INTO `tb_penyetoran` (`setorId`, `nasabahId`, `jumlah`, `timestamp`) VALUES
(24, 12, 4000, '2022-06-21 05:48:16'),
(26, 12, 4000, '2022-06-21 06:23:43'),
(27, 12, 2000, '0000-00-00 00:00:00'),
(28, 12, 2000, '0000-00-00 00:00:00');

--
-- Triggers `tb_penyetoran`
--
DELIMITER $$
CREATE TRIGGER `penambahan_saldo` AFTER INSERT ON `tb_penyetoran` FOR EACH ROW BEGIN
UPDATE tb_nasabah SET saldo = saldo+new.jumlah
WHERE nasabahId=new.nasabahId;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `roleId` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`roleId`, `name`) VALUES
(1, 'admin'),
(2, 'super admin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_admin`
-- (See below for the actual view)
--
CREATE TABLE `view_admin` (
`adminId` int(11)
,`nama` varchar(25)
,`NIS` bigint(25)
,`name` varchar(11)
,`password` varchar(255)
,`nomorTelp` varchar(25)
,`alamat` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_penarikan`
-- (See below for the actual view)
--
CREATE TABLE `view_penarikan` (
`tarikId` int(11)
,`nama` varchar(25)
,`jumlah` int(20)
,`timestamp` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_penyetoran`
-- (See below for the actual view)
--
CREATE TABLE `view_penyetoran` (
`setorId` int(11)
,`nama` varchar(25)
,`jumlah` int(20)
,`timestamp` timestamp
);

-- --------------------------------------------------------

--
-- Structure for view `view_admin`
--
DROP TABLE IF EXISTS `view_admin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_admin`  AS SELECT `admin`.`adminId` AS `adminId`, `admin`.`nama` AS `nama`, `admin`.`NIS` AS `NIS`, `role`.`name` AS `name`, `admin`.`password` AS `password`, `admin`.`nomorTelp` AS `nomorTelp`, `admin`.`alamat` AS `alamat` FROM (`tb_admin` `admin` join `tb_role` `role`) WHERE `admin`.`roleId` = `role`.`roleId``roleId`  ;

-- --------------------------------------------------------

--
-- Structure for view `view_penarikan`
--
DROP TABLE IF EXISTS `view_penarikan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_penarikan`  AS SELECT `tarik`.`tarikId` AS `tarikId`, `nasabah`.`nama` AS `nama`, `tarik`.`jumlah` AS `jumlah`, `tarik`.`timestamp` AS `timestamp` FROM (`tb_penarikan` `tarik` join `tb_nasabah` `nasabah`) WHERE `tarik`.`nasabahId` = `nasabah`.`nasabahId``nasabahId`  ;

-- --------------------------------------------------------

--
-- Structure for view `view_penyetoran`
--
DROP TABLE IF EXISTS `view_penyetoran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_penyetoran`  AS SELECT `setor`.`setorId` AS `setorId`, `nasabah`.`nama` AS `nama`, `setor`.`jumlah` AS `jumlah`, `setor`.`timestamp` AS `timestamp` FROM (`tb_penyetoran` `setor` join `tb_nasabah` `nasabah`) WHERE `setor`.`nasabahId` = `nasabah`.`nasabahId``nasabahId`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`adminId`),
  ADD KEY `roleId` (`roleId`);

--
-- Indexes for table `tb_nasabah`
--
ALTER TABLE `tb_nasabah`
  ADD PRIMARY KEY (`nasabahId`);

--
-- Indexes for table `tb_penarikan`
--
ALTER TABLE `tb_penarikan`
  ADD PRIMARY KEY (`tarikId`),
  ADD KEY `nasabahId` (`nasabahId`);

--
-- Indexes for table `tb_penyetoran`
--
ALTER TABLE `tb_penyetoran`
  ADD PRIMARY KEY (`setorId`),
  ADD KEY `nasabahId` (`nasabahId`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`roleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_nasabah`
--
ALTER TABLE `tb_nasabah`
  MODIFY `nasabahId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_penarikan`
--
ALTER TABLE `tb_penarikan`
  MODIFY `tarikId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_penyetoran`
--
ALTER TABLE `tb_penyetoran`
  MODIFY `setorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `roleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `tb_admin_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `tb_role` (`roleId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penarikan`
--
ALTER TABLE `tb_penarikan`
  ADD CONSTRAINT `tb_penarikan_ibfk_1` FOREIGN KEY (`nasabahId`) REFERENCES `tb_nasabah` (`nasabahId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penyetoran`
--
ALTER TABLE `tb_penyetoran`
  ADD CONSTRAINT `tb_penyetoran_ibfk_1` FOREIGN KEY (`nasabahId`) REFERENCES `tb_nasabah` (`nasabahId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
