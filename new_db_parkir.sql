-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2011 at 05:26 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dropd`
--

CREATE TABLE IF NOT EXISTS `tb_dropd` (
  `no` int(2) NOT NULL,
  `nama_drop` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dropd`
--

INSERT INTO `tb_dropd` (`no`, `nama_drop`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komen`
--

CREATE TABLE IF NOT EXISTS `tb_komen` (
  `nama` varchar(15) NOT NULL,
  `Email` varchar(15) NOT NULL,
  `komen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komen`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_parkir`
--

CREATE TABLE IF NOT EXISTS `tb_parkir` (
  `no_` int(4) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `jenis_kend` varchar(10) NOT NULL,
  `merk_kend` varchar(15) NOT NULL,
  `no_polisi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_parkir`
--

INSERT INTO `tb_parkir` (`no_`, `nama_pemilik`, `jenis_kend`, `merk_kend`, `no_polisi`) VALUES
(1, 'Jamil', 'Mobil', 'Ferarri', 'AX 123 Y'),
(0, 'He', 'Mobil', 'Honda', 'SF 2635 F'),
(0, 'fg', 'fg', 'fg', 'fgs');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `no_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `user_display` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`no`, `no_user`, `nama`, `username`, `password`, `user_display`, `email`, `alamat`) VALUES
(1, 1, 'Jamil', 'jamil', '0e2cc23df7e37a854499f9d918b0219d', 'j5435a3154m5354i3458L', 'jamil_IM', 'IM'),
(2, 0, 'Udin', 'udin', '6bec9c852847242e384a4d5ac0962ba0', 'u288d268i1458n15', 'udin_pa', 'HGL'),
(3, 0, 'Linda', 'Linda', 'eaf450085c15c3b880c66d0b78f2c041', 'L967i8575n85d876a', 'Linda_MS', 'IM');
