-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2011 at 10:00 AM
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
  `no` int(4) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `jenis_kend` varchar(10) NOT NULL,
  `merk_kend` varchar(15) NOT NULL,
  `no_polisi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_parkir`
--

INSERT INTO `tb_parkir` (`no`, `nama_pemilik`, `jenis_kend`, `merk_kend`, `no_polisi`) VALUES
(1, 'Jamil', 'Mobil', 'Ferarri', 'AX 123 Y');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `no` int(4) NOT NULL,
  `no_user` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_display` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`no`, `no_user`, `username`, `password`, `user_display`, `Email`) VALUES
(1, 1, 'jamil', '21232f297a57a5a743894a0e4a801fc3', 'jkl156utjk', 'dzamiel_12'),
(2, 2, 'jenal', '21232f297a57a5a743894a0e4a801fc3', 'agahga258hf', 'jenalale');
