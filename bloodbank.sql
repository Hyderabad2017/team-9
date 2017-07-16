-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2017 at 06:46 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'nishu0505@gmail.com', 'nishu0505');

-- --------------------------------------------------------

--
-- Table structure for table `bank_info`
--

CREATE TABLE `bank_info` (
  `bank_id` int(11) NOT NULL,
  `orgname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank_info`
--

INSERT INTO `bank_info` (`bank_id`, `orgname`, `location`, `email`, `password`, `contact`) VALUES
(1, 'RedCross', 'hyderabad', 'vineela.aari@gmail.com', '28d58b23474397087b3674f4901955a2', '9177696908'),
(2, 'Chiranjeevi blood bank', 'hyderabad', 'vineela.aari@gmail.com', '87aa6f0e31737011537be8a7801c3437', '8000000000'),
(3, 'Chiranjeevi blood bank', 'hyderabad', 'vineela.aari@gmail.com', '28d58b23474397087b3674f4901955a2', '9177696908');

-- --------------------------------------------------------

--
-- Table structure for table `bank_inventory`
--

CREATE TABLE `bank_inventory` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `BloodGroup` varchar(20) NOT NULL,
  `units` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank_inventory`
--

INSERT INTO `bank_inventory` (`id`, `name`, `BloodGroup`, `units`) VALUES
(1, 'Social service blood bank', 'A negative', 100),
(3, 'Chiranjeevi eye & blood bank', 'AB negative', 120),
(2, 'ITMR Blood Bank', 'o positive', 100);

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_info`
--

CREATE TABLE `bloodbank_info` (
  `bank_id` int(11) NOT NULL,
  `orgname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bloodbank_info`
--

INSERT INTO `bloodbank_info` (`bank_id`, `orgname`, `location`, `email`, `password`, `contact`) VALUES
(1, 'redcross', 'hyderabad', 'manasa.susarla@gmail.com', 'manasa123', '9177696908');

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequests`
--

CREATE TABLE `bloodrequests` (
  `id` int(11) NOT NULL,
  `bankid` int(11) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `units` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bloodrequests`
--

INSERT INTO `bloodrequests` (`id`, `bankid`, `bloodtype`, `units`, `time`) VALUES
(1, 2423, 'on', 123, '24'),
(2, 2423, 'on', 245, '25'),
(3, 2423, 'on', 123, '24'),
(4, 2423, 'on', 234, '25'),
(5, 2423, 'on', 245, '25'),
(6, 2423, 'on', 245, '25');

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE `donor_info` (
  `donor_id` int(11) NOT NULL,
  `donor_weight` int(11) NOT NULL,
  `donor_age` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `donor_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donor_login`
--

CREATE TABLE `donor_login` (
  `donor_id` int(11) NOT NULL,
  `donor_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor_login`
--

INSERT INTO `donor_login` (`donor_id`, `donor_name`, `email`, `password`, `contact`, `city`, `address`, `bloodgroup`) VALUES
(1, 'Manasa Susarla', 'manu.susarla@gmail.com', '754796fdf3071f8aa6ce693cc75945cd', '7416791415', 'Hyderabad', 'Gachibowli', 'A'),
(2, 'Sri kaavya', 'srikaavya.toodi@gmail.com', 'a1b4902650c317c7921f3594f52e326e', '7331120374', 'hyderabad', 'srinagar colony', 'O+'),
(3, 'Manasa Susarla', '', '87aa6f0e31737011537be8a7801c3437', '7416791415', 'Hyderabad', 'Gachibowli, Telecomnagar', 'A'),
(4, 'Lion ', 'lion@gmail.com', 'c1c7678ea7730848325ecf86944ecde3', '8000000000', 'Hyderabad', 'Gachibowli, Telecomnagar', 'A'),
(5, 'Lion ', 'aaaa@a.com', 'c1c7678ea7730848325ecf86944ecde3', '8000000000', 'Hyderabad', 'Gachibowli, Telecomnagar', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`) VALUES
(1, 'Blood Donation camp at gachibowli'),
(2, 'Blood Donation camp at Secunderabad');

-- --------------------------------------------------------

--
-- Table structure for table `regevent`
--

CREATE TABLE `regevent` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `donor_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regevent`
--

INSERT INTO `regevent` (`id`, `event_name`, `donor_name`) VALUES
(1, 'Blood Donation camp at gachibowli', 'xyz'),
(2, 'Blood Donation camp at gachibowli', 'xyz'),
(3, 'Blood Donation camp at gachibowli', 'xyz'),
(4, 'Blood Donation camp at gachibowli', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `donor_username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`donor_username`, `password`) VALUES
('manasa', 'manasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_info`
--
ALTER TABLE `bank_info`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `bloodbank_info`
--
ALTER TABLE `bloodbank_info`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `bloodrequests`
--
ALTER TABLE `bloodrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_login`
--
ALTER TABLE `donor_login`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regevent`
--
ALTER TABLE `regevent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_info`
--
ALTER TABLE `bank_info`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bloodbank_info`
--
ALTER TABLE `bloodbank_info`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bloodrequests`
--
ALTER TABLE `bloodrequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `donor_login`
--
ALTER TABLE `donor_login`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `regevent`
--
ALTER TABLE `regevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;