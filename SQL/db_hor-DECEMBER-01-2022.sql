-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 08:48 AM
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
-- Database: `db_hor`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', 'test', 'test@test.com'),
(6, 'ivan', 'ivan', 'ivanadrey.dimagiba023@gmail.com'),
(7, 'qwe', 'qwe', 'qwe@qwe.qwe'),
(8, 'testing', 'testing', 'testing@gmail.com'),
(9, 'testing1', 'testing1', 'testing1@gmail.com'),
(10, 'test1', 'test1', 'test1@gmail.com'),
(11, 'asd', '123', 'asd@asd.com'),
(12, 'astig', 'astig', 'astig@asd.com');

-- --------------------------------------------------------

--
-- Table structure for table `accounts-recycled`
--

CREATE TABLE `accounts-recycled` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts-recycled`
--

INSERT INTO `accounts-recycled` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', 'test', 'test@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(2, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `middlename`, `lastname`, `address`, `contactno`) VALUES
(1, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(2, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(3, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(4, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(5, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(6, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(7, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(8, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(9, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(10, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(11, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(12, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(13, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(14, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(15, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(16, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(17, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(18, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(19, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(20, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(21, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(22, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(23, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(24, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(25, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(26, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(27, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(28, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(29, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(30, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(31, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(32, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(33, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(34, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(35, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(36, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(37, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(38, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(39, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(40, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(41, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(42, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(43, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(44, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(45, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(46, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(47, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(48, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(49, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(50, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(51, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(52, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(53, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(54, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(55, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(56, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(57, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(58, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(59, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(60, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(61, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(62, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(63, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(64, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(65, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(66, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(67, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(68, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(69, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(70, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(71, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(72, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(73, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(74, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(75, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(76, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(77, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(78, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(79, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(80, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(81, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(82, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(83, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(84, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(85, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(86, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(87, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(88, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(89, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(90, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(91, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(92, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(93, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(94, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(95, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(96, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(97, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(98, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(99, 'qwe', 'asd', 'zxc', 'qwe@asd.zxc', '123'),
(100, 'qwe', 'asd', 'zxc', 'asd@qwe.asd', '123'),
(101, 'qwe', 'asd', 'zxc', 'qwe@qwe.asd', '123'),
(102, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(103, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(104, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(105, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(106, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(107, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(108, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(109, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(110, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(111, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(112, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(113, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(114, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(115, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(116, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(117, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(118, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(119, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(120, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(121, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(122, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(123, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(124, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(125, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(126, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(127, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(128, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(129, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(130, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(131, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(132, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(133, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(134, 'qwe', 'asd', 'zxc', 'asd@asd.asd', '123'),
(135, 'qwe', 'qwe', 'qwe', 'qwe@qwe.qwe', '123'),
(136, 'Boss', 'Lodi', 'Papogs', 'boss@lods.qm', '123'),
(137, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(138, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(139, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(140, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(141, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(142, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(143, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(144, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(145, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(146, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(147, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(148, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(149, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(150, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(151, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(152, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(153, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(154, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(155, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(156, 'firstname', 'middlename', 'lastname', 'testing1@gmail.com', '123'),
(157, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(158, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(159, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(160, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(161, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(162, 'asd', 'asd', 'asd', 'asd@asd.asd', '123'),
(163, 'Ivan', 'Sembrano', 'Dimagiba', 'ivanadrey.dimagiba023@gmail.com', '09610986780'),
(164, 'Adrey', 'Sembrano', 'Dimagiba', 'ivanadrey.dimagiba@023@gmail.com', '09610986780'),
(165, 'Tom', 'Sembrano', 'Dimagiba', 'tomadriandimagiba@gmail.com', '09610986780'),
(166, 'Ivan', 'Sembrano', 'Dimagiba', 'ivanadrey.dimagiba023@gmail.com', '09610986780'),
(167, 'Ivan Adrey', 'Sembrano', 'Dimagiba', 'ivanadrey.dimagiba023@gmail.com', '09610986780'),
(168, 'Ivab', 'asd', 'asd', 'ivab.@aasd.com', '123'),
(169, 'Ivan', ' ', ' ', ' ', ' '),
(170, 'dsad', 'asd', 'asd', 'ivanadrey.dimagiba023@gmail.com', '123'),
(171, 'Ivan', 'Sembrano', 'Dimagiba', 'ivanadrey.dimagiba023@gmail.com', '09610986780'),
(172, 'Warren', 'Pogi', 'Loyal', 'warren@gmail.com', '09610986780'),
(173, 'Warren', 'Assurance', 'Sakalam', 'warren@gmail.com', '09610986780');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f64745ea784a86e3', '2022-12-01 18:55:01'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f647456ce60525bf', '2022-12-01 19:05:38'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f6474578a5b9195b', '2022-12-01 19:05:41'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f647458f65eadb58', '2022-12-01 19:05:47'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f6474567ca6d0920', '2022-12-01 19:05:47'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f647455a0998c849', '2022-12-01 19:05:47'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f647457a25255d31', '2022-12-01 19:05:48'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f64745e69657f583', '2022-12-01 19:05:48'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f64745dd45e81fa9', '2022-12-01 19:05:48'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f64745bf207b7549', '2022-12-01 19:05:48'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f64745b4cf115493', '2022-12-01 19:05:53'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f64745813e4d2f16', '2022-12-01 19:05:53'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f64745fb05f76fc2', '2022-12-01 19:05:53'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f647459934623533', '2022-12-01 19:05:54'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f64745ee150aa495', '2022-12-01 19:05:54'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f6474562bc4b8f37', '2022-12-01 19:05:54'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f64745fa0e4d711e', '2022-12-01 19:05:54'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f647456664df1a53', '2022-12-01 19:05:54'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f6474538de423123', '2022-12-01 19:06:27'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f64745b91fef1a05', '2022-12-01 19:06:27'),
('ivanadrey.dimagiba023@gmail.com', '768e78024aa8fdb9b8fe87be86f64745ba77121a2e', '2022-12-01 19:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `price` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `price`, `photo`) VALUES
(1, 'Studio', '', '03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_no` int(5) NOT NULL,
  `extra_bed` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `days` int(2) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `room_id`, `room_no`, `extra_bed`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(28, 165, 1, 33, 0, 'Check Out', 1, '2022-11-05', '00:01:12', '2022-11-03', '11:06:59', '0'),
(29, 164, 1, 33, 1, 'Check Out', 1, '2022-11-04', '23:52:01', '2022-11-03', '00:01:02', '1'),
(31, 168, 1, 33, 0, 'Check Out', 5, '2022-11-23', '11:07:12', '2022-11-27', '12:55:41', '0'),
(33, 170, 1, 33, 0, 'Check In', 2, '2022-12-02', '13:03:02', '2022-12-03', '00:00:00', '0'),
(34, 163, 1, 33, 1, 'Check Out', 3, '2022-12-03', '12:57:13', '2022-12-04', '13:02:07', '1'),
(36, 173, 1, 0, 0, 'Pending', 0, '2022-12-08', '00:00:00', '0000-00-00', '00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accounts-recycled`
--
ALTER TABLE `accounts-recycled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `accounts-recycled`
--
ALTER TABLE `accounts-recycled`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
