-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 15, 2017 at 05:38 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bloodbank`
--

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
(3, 'Manasa Susarla', '', '87aa6f0e31737011537be8a7801c3437', '7416791415', 'Hyderabad', 'Gachibowli, Telecomnagar', 'A');

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
-- Indexes for table `donor_login`
--
ALTER TABLE `donor_login`
  ADD PRIMARY KEY (`donor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_login`
--
ALTER TABLE `donor_login`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;