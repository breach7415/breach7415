-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 05:56 PM
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
-- Database: `cdn_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `alliance_master`
--

CREATE TABLE `alliance_master` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Description` longtext NOT NULL,
  `Imagepath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alliance_master`
--

INSERT INTO `alliance_master` (`ID`, `Title`, `Description`, `Imagepath`) VALUES
(1, 'Tata Communications is a digital ecosystem enabler that powers today’s fast-growing digital economy.', 'The Company enables the digital transformation of enterprises globally, including 300 of the Fortune 500 – unlocking opportunities for businesses by enabling borderless growth, boosting product innovation and customer experience, improving productivity and efficiency, building agility and managing risk. With its solutions orientated approach, proven managed service capabilities and cutting- edge infrastructure, Tata Communications drives the next level of intelligence powered by cloud, mobility, Internet of Things (IoT), collaboration, security and network services. Tata Communications carries around 30% of the world’s internet routes and connects businesses to 60% of the world’s cloud giants and 4 out of 5 mobile subscribers.', '1652282781.jpg'),
(3, 'Newgen Software Technologies Limited', 'Newgen Software Technologies Limited, incorporated in 1992, in India, is a 2300 person organization having offices across India, USA, UAE, Singapore, Canada and UK. Newgen has got a global installation base across 60+ countries. More than 100 of these implementations are large, mission-critical solutions deployed at the world’s leading Government, BFSI, BPO and Fortune Global 500 companies. The company has four software development centers; three located in New Delhi and one in HO Location. Newgen Software Technologies provides Business Process Management (BPM), Enterprise Content Management (ECM), Customer Communication Management (CCM), Document Management System (DMS), Workflow and Process Automation software.', '1652284533.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `ID` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `textValue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ID`, `name`, `email`, `textValue`) VALUES
(1, 'Test Name', 'test@gmail.com', 'test want to connect with you!'),
(2, 'Test 1', 'test_student@gmail.com', 'Test Message!');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`ID`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alliance_master`
--
ALTER TABLE `alliance_master`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alliance_master`
--
ALTER TABLE `alliance_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
