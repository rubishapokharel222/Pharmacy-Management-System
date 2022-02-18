-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 08:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contact` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `address`, `contact`, `email`, `username`, `password`) VALUES
(30, 'don', 'ktm', '9876543210', 'don@gmail.com', 'don', 'don'),
(33, 'hero', 'bkt', '986765454', 'hero@gmail.com', 'hero', 'hero'),
(34, 'Hff', 'qwewef', '1234567890', 'hi@gmail.com', 'hi', 'hi'),
(35, 'anu', 'bkt', '7894561235', 'anu@gmail.com', 'anu', 'anu'),
(36, 'hey', 'suncity', '986765454', 'hey@gmail.com', 'hey', 'hey'),
(37, 'chhya', 'suncity', '986765454', 'don@gmail.com', 'chhya', 'chhya');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `medicine_image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `medicine_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `medicine_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_image`, `description`, `medicine_name`, `medicine_price`) VALUES
(17, 'antibiotics.jpg', 'Antibiotics are medicines that fight bacterial infections in people and animals.', 'Antibiotics', 302),
(18, 'paracetamol.jpg', 'Paracetamol is a painkiller used to treat aches and pain.It can be used to reduce a high temperature.', 'Paracetamol', 100),
(19, 'coughmedicine.jpg', 'Cough medicine is liquid medicine that you take when you have a cough.', 'Cough Medicine', 200),
(20, 'feza.jpg', ' Feza is an anti-inflammatory agent, prescribed for leprosy with other drugs.', 'Feza', 300),
(23, 'cetamol.jpg', 'cetamol is good for headache', 'cetamol', 50),
(26, 'healthcare.jpg', 'healthcare', 'healthcare', 50),
(27, 'vicks.jpg', 'it interacts with cold ', 'viks', 100),
(28, 'anzee.jpg', 'Anzee tablet', 'anzee', 700),
(29, 'asthma.jpg', 'asthma ', 'asthma', 1000),
(30, 'diarex.jpg', 'diarrhea control', 'diarex', 450),
(31, 'gasomax.jpg', 'gastric medicine', 'gasomex', 150),
(32, 'uti.jpg', 'for uit', 'UIT', 550),
(33, 'clotrimazol.jpg', 'clotrimazol', 'clotrimazool', 245),
(34, 'accutane.jpg', 'accutane is medicine', 'accutane', 125),
(35, 'gress.jpg', 'Gress ', 'Gress', 326),
(36, 'imodium.jpg', 'IMO', 'imodium', 260),
(37, 'coughmedicine.jpg', 'coughmedicine', 'coughmedicine', 190);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
