-- UPDATED BY IVAN - THURSDAY - NOVEMBER 17, 2022

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 04:32 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET IMPLICIT_TRANSACTIONS OFF
BEGIN TRANSACTION;
GO

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: "db_hor"
--

-- --------------------------------------------------------

--
-- Table structure for table "admin"
--

CREATE TABLE "admin" (
  "admin_id" int NOT NULL IDENTITY (1, 1) PRIMARY KEY,
  "name" varchar(50) NOT NULL,
  "username" varchar(24) NOT NULL,
  "password" varchar(24) NOT NULL
);

--
-- Dumping data for table "admin"
--

INSERT INTO "admin" ("admin_id", "name", "username", "password") VALUES
(1, 'Administrator', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table "guest"
--

CREATE TABLE guest (
  "guest_id" int NOT NULL IDENTITY (1, 1) PRIMARY KEY,
  "firstname" varchar(50) NOT NULL,
  "middlename" varchar(30) NOT NULL,
  "lastname" varchar(40) NOT NULL,
  "address" varchar(50) NOT NULL,
  "contactno" varchar(13) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table "room"
--

CREATE TABLE room (
  "room_id" int NOT NULL IDENTITY (1, 1) PRIMARY KEY,
  "room_type" varchar(50) NOT NULL,
  "price" varchar(11) NOT NULL,
  "photo" varchar(100) NOT NULL
);

--
-- Dumping data for table "room"
--

INSERT INTO room ("room_id", "room_type", "price", "photo") VALUES
(1, 'Studio', '', '03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table "transaction"
--

CREATE TABLE "transaction" (
  "transaction_id" int NOT NULL IDENTITY (1, 1) PRIMARY KEY,
  "guest_id" int NOT NULL,
  "room_id" int NOT NULL,
  "room_no" int NOT NULL,
  "extra_bed" int NOT NULL,
  "status" varchar(20) NOT NULL,
  "days" int NOT NULL,
  "checkin" date NOT NULL,
  "checkin_time" time NOT NULL,
  "checkout" date NOT NULL,
  "checkout_time" time NOT NULL,
  "bill" varchar(10) NOT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table "admin"
--
ALTER TABLE "admin"
  ADD PRIMARY KEY ("admin_id");

--
-- Indexes for table "guest"
--
ALTER TABLE "guest"
  ADD PRIMARY KEY ("guest_id");

--
-- Indexes for table "room"
--
ALTER TABLE "room"
  ADD PRIMARY KEY ("room_id");

--
-- Indexes for table "transaction"
--
ALTER TABLE "transaction"
  ADD PRIMARY KEY ("transaction_id");

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

