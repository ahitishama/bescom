-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 09:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bescom`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_uploads`
--

CREATE TABLE `file_uploads` (
  `fid` int(11) NOT NULL,
  `f_mid` int(11) NOT NULL,
  `f_sid` int(11) NOT NULL,
  `f_hid` int(11) NOT NULL,
  `f_fid` int(11) NOT NULL,
  `f_filename` varchar(255) NOT NULL,
  `f_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_uploads`
--

INSERT INTO `file_uploads` (`fid`, `f_mid`, `f_sid`, `f_hid`, `f_fid`, `f_filename`, `f_date`) VALUES
(1, 1, 1, 0, 0, '07-04-18-10-16-42_a&amp;rt.xlsx', '2018-04-07 13:46:42'),
(2, 3, 11, 3, 7, '07-04-18-10-16-56_7.xls', '2018-04-07 13:46:56'),
(3, 3, 11, 3, 8, '07-04-18-10-19-30_brazTotal.xlsx', '2018-04-07 13:49:30'),
(4, 3, 10, 1, 2, '07-04-18-10-20-36_BRAZ.xls', '2018-04-07 13:50:36'),
(5, 2, 6, 0, 0, '09-04-18-12-03-19_CTAZ-JAN.xlsx', '2018-04-09 15:33:19'),
(6, 2, 7, 0, 0, '09-04-18-12-07-34_BRAZ-JAN.cs', '2018-04-09 15:37:34'),
(7, 2, 6, 0, 0, '09-04-18-12-11-53_CTAZ-JAN.xlsx', '2018-04-09 15:41:53'),
(8, 2, 7, 0, 0, '09-04-18-12-12-39_BRAZ-JAN.xlsx', '2018-04-09 15:42:39'),
(9, 2, 8, 0, 0, '09-04-18-12-12-47_BMAZ.xlsx', '2018-04-09 15:42:47'),
(10, 2, 9, 0, 0, '09-04-18-12-12-54_24_TOWNS.xlsx', '2018-04-09 15:42:54'),
(11, 2, 6, 0, 0, '09-04-18-12-25-54_CTAZ-JAN.xlsx', '2018-04-09 15:55:54'),
(12, 2, 7, 0, 0, '09-04-18-12-26-02_BRAZ-JAN.xlsx', '2018-04-09 15:56:02'),
(13, 2, 8, 0, 0, '09-04-18-12-26-10_BMAZ.xlsx', '2018-04-09 15:56:10'),
(14, 2, 9, 0, 0, '09-04-18-12-26-16_24_TOWNS.xlsx', '2018-04-09 15:56:16'),
(15, 2, 6, 0, 0, '09-04-18-12-38-28_CTAZ-JAN.xlsx', '2018-04-09 16:08:28'),
(16, 2, 6, 0, 0, '09-04-18-12-39-29_CTAZ-JAN.xlsx', '2018-04-09 16:09:29'),
(17, 2, 6, 0, 0, '09-04-18-12-40-58_CTAZ-JAN.xlsx', '2018-04-09 16:10:58'),
(18, 2, 6, 0, 0, '09-04-18-12-43-45_CTAZ-JAN.xlsx', '2018-04-09 16:13:45'),
(19, 2, 7, 0, 0, '09-04-18-12-51-21_BRAZ-JAN.xlsx', '2018-04-09 16:21:21'),
(20, 2, 8, 0, 0, '09-04-18-12-52-33_BMAZ.xlsx', '2018-04-09 16:22:33'),
(21, 2, 8, 0, 0, '09-04-18-13-10-17_BMAZ.xlsx', '2018-04-09 16:40:17'),
(22, 2, 8, 0, 0, '09-04-18-13-24-19_BMAZ.xlsx', '2018-04-09 16:54:19'),
(23, 2, 6, 0, 0, '09-04-18-13-32-02_CTAZ-JAN.xlsx', '2018-04-09 17:02:02'),
(24, 2, 7, 0, 0, '09-04-18-13-32-10_BRAZ-JAN.xlsx', '2018-04-09 17:02:10'),
(25, 2, 8, 0, 0, '09-04-18-13-32-16_BMAZ.xlsx', '2018-04-09 17:02:16'),
(26, 2, 9, 0, 0, '09-04-18-13-32-27_24_TOWNS.xlsx', '2018-04-09 17:02:27'),
(27, 1, 1, 0, 0, '09-04-18-13-40-22_a&amp;rt.xlsx', '2018-04-09 17:10:22'),
(28, 1, 1, 0, 0, '09-04-18-13-43-30_a&amp;rt.xlsx', '2018-04-09 17:13:30'),
(29, 1, 1, 0, 0, '09-04-18-13-44-43_a&amp;rt.xlsx', '2018-04-09 17:14:43'),
(30, 1, 1, 0, 0, '09-04-18-13-48-55_a&amp;rt.xlsx', '2018-04-09 17:18:55'),
(31, 2, 6, 0, 0, '18-04-18-09-30-52_CTAZ-JAN.xlsx', '2018-04-18 13:00:52'),
(32, 2, 6, 0, 0, '18-04-18-09-31-13_CTAZ-JAN.xlsx', '2018-04-18 13:01:13'),
(33, 2, 7, 0, 0, '18-04-18-09-37-45_BRAZ-JAN.xlsx', '2018-04-18 13:07:45'),
(34, 2, 9, 0, 0, '18-04-18-09-52-02_24_TOWNS.xlsx', '2018-04-18 13:22:02'),
(35, 2, 8, 0, 0, '18-04-18-10-08-34_BMAZ.xlsx', '2018-04-18 13:38:34'),
(36, 2, 9, 0, 0, '18-04-18-12-00-04_24_TOWNS.xlsx', '2018-04-18 15:30:04'),
(37, 2, 9, 0, 0, '18-04-18-12-06-06_24_TOWNS.xlsx', '2018-04-18 15:36:06'),
(38, 2, 6, 0, 0, '18-04-18-12-40-11_CTAZ-JAN.xlsx', '2018-04-18 16:10:11'),
(39, 2, 8, 0, 0, '18-04-18-13-12-21_BMAZ.xlsx', '2018-04-18 16:42:21'),
(40, 2, 8, 0, 0, '18-04-18-13-26-57_BMAZ.xlsx', '2018-04-18 16:56:57'),
(41, 2, 9, 0, 0, '18-04-18-13-27-22_24_TOWNS.xlsx', '2018-04-18 16:57:22'),
(42, 1, 1, 0, 0, '18-04-18-14-28-00_a&amp;rt.xlsx', '2018-04-18 17:58:00'),
(43, 1, 1, 0, 0, '18-04-18-15-36-05_a&amp;rt.xlsx', '2018-04-18 19:06:05'),
(44, 2, 7, 0, 0, '24-04-18-13-50-27_BRAZ-JAN.xlsx', '2018-04-24 17:20:27'),
(45, 2, 8, 0, 0, '24-04-18-13-50-34_BMAZ.xlsx', '2018-04-24 17:20:34'),
(46, 2, 9, 0, 0, '24-04-18-13-50-41_24_TOWNS.xlsx', '2018-04-24 17:20:41'),
(47, 2, 6, 0, 0, '27-04-18-09-00-15_CTAZ-JAN.xlsx', '2018-04-27 12:30:15'),
(48, 2, 6, 0, 0, '27-04-18-09-00-54_CTAZ-JAN.xlsx', '2018-04-27 12:30:54'),
(49, 2, 6, 0, 0, '30-04-18-11-19-07_CTAZ-JAN.xlsx', '2018-04-30 14:49:07'),
(50, 2, 7, 0, 0, '30-04-18-11-19-14_BRAZ-JAN.xlsx', '2018-04-30 14:49:14'),
(51, 2, 8, 0, 0, '30-04-18-11-19-21_BMAZ.xlsx', '2018-04-30 14:49:21'),
(52, 2, 9, 0, 0, '30-04-18-11-19-31_24_TOWNS.xlsx', '2018-04-30 14:49:31'),
(53, 2, 6, 0, 0, '08-05-18-08-38-02_CTAZ-JAN.xlsx', '2018-05-08 12:08:02'),
(54, 1, 5, 0, 0, '20-06-18-08-25-31_DCM.xlsx', '2018-06-20 11:55:31'),
(55, 2, 6, 0, 0, '20-06-18-08-26-46_CTAZ-JAN.xlsx', '2018-06-20 11:56:46'),
(56, 1, 5, 0, 0, '20-06-18-08-27-52_DCM.xlsx', '2018-06-20 11:57:52'),
(57, 1, 1, 0, 0, '20-06-18-08-33-19_a&amp;rt.xlsx', '2018-06-20 12:03:19'),
(58, 1, 1, 0, 0, '20-06-18-08-34-33_a&amp;rt.xlsx', '2018-06-20 12:04:33'),
(59, 1, 1, 0, 0, '20-06-18-08-40-06_a&amp;rt.xlsx', '2018-06-20 12:10:06'),
(60, 1, 5, 0, 0, '20-06-18-08-40-44_DCM.xlsx', '2018-06-20 12:10:44'),
(61, 1, 1, 0, 0, '20-06-18-09-36-18_a&amp;rt.xlsx', '2018-06-20 13:06:18'),
(62, 1, 5, 0, 0, '20-06-18-11-38-26_DCM.xlsx', '2018-06-20 15:08:26'),
(63, 2, 6, 0, 0, '20-06-18-13-50-59_CTAZ-JAN.xlsx', '2018-06-20 17:20:59'),
(64, 1, 5, 0, 0, '21-06-18-09-20-44_DCM.xlsx', '2018-06-21 12:50:44'),
(65, 1, 5, 0, 0, '21-06-18-09-23-24_DCM.xlsx', '2018-06-21 12:53:24'),
(66, 1, 5, 0, 0, '21-06-18-09-25-02_DCM.xlsx', '2018-06-21 12:55:02'),
(67, 1, 5, 0, 0, '21-06-18-09-27-25_DCM.xlsx', '2018-06-21 12:57:25'),
(68, 1, 5, 0, 0, '21-06-18-09-28-03_DCM.xlsx', '2018-06-21 12:58:03'),
(69, 1, 5, 0, 0, '21-06-18-09-34-14_DCM.xlsx', '2018-06-21 13:04:14'),
(70, 1, 5, 0, 0, '21-06-18-09-35-37_DCM.xlsx', '2018-06-21 13:05:37'),
(71, 1, 5, 0, 0, '21-06-18-09-47-36_DCM.xlsx', '2018-06-21 13:17:36'),
(72, 1, 5, 0, 0, '21-06-18-09-48-32_DCM.xlsx', '2018-06-21 13:18:32'),
(73, 1, 5, 0, 0, '22-06-18-06-52-52_DCM.xlsx', '2018-06-22 10:22:52'),
(74, 1, 5, 0, 0, '22-06-18-07-53-21_DCM.xlsx', '2018-06-22 11:23:21'),
(75, 1, 5, 0, 0, '22-06-18-07-56-38_DCM.xlsx', '2018-06-22 11:26:38'),
(76, 1, 5, 0, 0, '22-06-18-08-03-28_DCM.xlsx', '2018-06-22 11:33:28'),
(77, 1, 5, 0, 0, '22-06-18-08-05-14_DCM.xlsx', '2018-06-22 11:35:14'),
(78, 1, 2, 0, 0, '22-06-18-09-22-47_Procurement.xls', '2018-06-22 12:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `menu_master`
--

CREATE TABLE `menu_master` (
  `mid` int(11) NOT NULL,
  `m_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_master`
--

INSERT INTO `menu_master` (`mid`, `m_name`) VALUES
(1, 'bescom'),
(2, 'm_c'),
(3, 'operations');

-- --------------------------------------------------------

--
-- Table structure for table `sub_file_name`
--

CREATE TABLE `sub_file_name` (
  `h_fid` int(11) NOT NULL,
  `f_hid` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_file_name`
--

INSERT INTO `sub_file_name` (`h_fid`, `f_hid`, `f_name`) VALUES
(1, 1, 'BMAZ'),
(2, 1, 'BRAZ'),
(3, 1, 'CTAZ'),
(4, 1, 'BESCOM_TOTAL'),
(5, 2, 'BMAZ'),
(6, 2, 'bmazTotal'),
(7, 3, 'BRAZ'),
(8, 3, 'brazTotal'),
(9, 4, 'CTAZ'),
(10, 4, 'ctazTotal'),
(11, 6, 'SCADA_AVERAGE'),
(12, 7, 'pie_page'),
(13, 8, 'barchart_page5'),
(14, 9, 'barchart_page6'),
(15, 10, 'line_page7'),
(16, 12, 'Sheet1'),
(17, 12, 'Sheet2'),
(18, 12, 'Sheet3'),
(19, 12, 'Sheet4'),
(20, 13, 'jan-18_Annexure-1'),
(21, 14, 'BMAZ(zones)'),
(22, 14, 'bmazTotal'),
(23, 15, 'BRAZ'),
(24, 15, 'brazTotal'),
(25, 16, 'CTAZ'),
(26, 16, 'ctazTotal');

-- --------------------------------------------------------

--
-- Table structure for table `sub_hirarchy`
--

CREATE TABLE `sub_hirarchy` (
  `hid` int(11) NOT NULL,
  `h_fid` int(11) NOT NULL,
  `h_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_hirarchy`
--

INSERT INTO `sub_hirarchy` (`hid`, `h_fid`, `h_name`) VALUES
(1, 10, 'Corporate_office'),
(2, 11, 'BMAZ'),
(3, 11, 'BRAZ'),
(4, 11, 'CTAZ'),
(5, 11, 'Bescom_htlt'),
(6, 12, 'page3'),
(7, 12, 'page4'),
(8, 12, 'page5'),
(9, 12, 'page6'),
(10, 12, 'page7'),
(11, 12, 'barchart_page8'),
(12, 13, 'Apr_anx_i_signed'),
(13, 14, 'Apr_anx_i_signed'),
(14, 15, 'W_BMAZ'),
(15, 15, 'BRAZ'),
(16, 15, 'W_CTAZ'),
(17, 15, 'Bescom_htlt_total');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `sid` int(11) NOT NULL,
  `s_mid` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sid`, `s_mid`, `s_name`) VALUES
(1, 1, 'a&rt'),
(2, 1, 'Procurement'),
(3, 1, 'Power_supply'),
(4, 1, 'Power_Purchase'),
(5, 1, 'DCM'),
(6, 2, 'CTAZ-JAN'),
(7, 2, 'BRAZ-JAN'),
(8, 2, 'BMAZ'),
(9, 2, '24_TOWNS'),
(10, 3, 'GKS'),
(11, 3, 'HTLT'),
(12, 3, 'Power_supply'),
(13, 3, 'RI_SAIFI'),
(14, 3, 'Transformer'),
(15, 3, 'Water_Works');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_uploads`
--
ALTER TABLE `file_uploads`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `menu_master`
--
ALTER TABLE `menu_master`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `sub_file_name`
--
ALTER TABLE `sub_file_name`
  ADD PRIMARY KEY (`h_fid`);

--
-- Indexes for table `sub_hirarchy`
--
ALTER TABLE `sub_hirarchy`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_uploads`
--
ALTER TABLE `file_uploads`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `menu_master`
--
ALTER TABLE `menu_master`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sub_file_name`
--
ALTER TABLE `sub_file_name`
  MODIFY `h_fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `sub_hirarchy`
--
ALTER TABLE `sub_hirarchy`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
