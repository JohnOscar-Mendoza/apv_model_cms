-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2015 at 12:28 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dbmodels`
--

-- --------------------------------------------------------

--
-- Table structure for table `Models`
--

CREATE TABLE `Models` (
  `ModelID` int(11) NOT NULL,
  `ModelName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `FbLink` varchar(50) DEFAULT NULL,
  `TwitterLink` varchar(50) DEFAULT NULL,
  `InstagramLink` varchar(50) DEFAULT NULL,
  `Image` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Models`
--
ALTER TABLE `Models`
  ADD PRIMARY KEY (`ModelID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Models`
--
ALTER TABLE `Models`
  MODIFY `ModelID` int(11) NOT NULL AUTO_INCREMENT;