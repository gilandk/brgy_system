-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 01:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brgysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_user` varchar(255) NOT NULL,
  `position` varchar(50) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `all_priv` varchar(10) NOT NULL,
  `blotter` varchar(10) NOT NULL,
  `announcement` varchar(10) NOT NULL,
  `health` varchar(10) NOT NULL,
  `secretary` varchar(10) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`admin_id`, `admin_name`, `admin_user`, `position`, `admin_pass`, `all_priv`, `blotter`, `announcement`, `health`, `secretary`, `status`) VALUES
(1, 'Aron', 'admin', 'Super Admin', '123456', '1', '0', '0', '0', '0', '1'),
(2, 'DIO', 'adminsec', 'Secretary', '12345', '0', '0', '0', '0', '1', '1'),
(3, 'Aron Ramirez', 'adminblotter', 'Blotter Officer', '12345', '0', '1', '0', '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblannounce`
--

CREATE TABLE `tblannounce` (
  `id_announcement` int(11) NOT NULL,
  `announcement` text NOT NULL,
  `dateposted` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblblotter`
--

CREATE TABLE `tblblotter` (
  `id_blotter` int(11) NOT NULL,
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dateposted` varchar(100) NOT NULL,
  `datecreated` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblbusclearance`
--

CREATE TABLE `tblbusclearance` (
  `id_bclearance` int(255) NOT NULL,
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `dateposted` varchar(100) NOT NULL,
  `daterequested` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblclearance`
--

CREATE TABLE `tblclearance` (
  `id_clearance` int(255) NOT NULL,
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `issued_date` varchar(255) NOT NULL,
  `daterequested` varchar(100) NOT NULL,
  `street_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcommunity`
--

CREATE TABLE `tblcommunity` (
  `id_comm` int(11) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `birthplace` varchar(100) NOT NULL,
  `housenum` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `voter_status` varchar(100) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_household` int(100) NOT NULL,
  `fam_head` int(5) NOT NULL,
  `archive` int(10) NOT NULL,
  `archiveDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcommunity`
--

INSERT INTO `tblcommunity` (`id_comm`, `lname`, `fname`, `mname`, `alias`, `email`, `contact`, `gender`, `birthday`, `birthplace`, `housenum`, `street`, `barangay`, `municipality`, `province`, `civil_status`, `voter_status`, `datecreated`, `username`, `password`, `image`, `id_household`, `fam_head`, `archive`, `archiveDate`) VALUES
(6, 'Roque', 'Aaron Paul', 'Ramirez', '', 'asdasd@gmail.com', '09199569072', 'Male', '1995-11-19', 'Guiguinto', '123', 'Purok 3', 'Tabang', 'test', 'test', 'single', 'Yes', '2020-04-01 11:12:31', '', '', '', 14, 1, 0, '0000-00-00 00:00:00'),
(8, 'German', 'Chad', 'Joselito', 'Junior', 'chading@gmail.com', '123123123123', 'Male', '1990-11-11', 'Pandi', '123', 'test', 'test', 'test', 'test', 'Single', 'Yes', '2020-04-03 10:32:00', '', '', '', 13, 1, 0, '2020-04-04 14:41:09'),
(9, 'Valencia', 'Rean', 'C', '', 'reanvalencia@gmail.com', '45665465465', 'Female', '1995-11-11', 'asdasd', '12312', 'sdasd', 'asad', 'asdasd', 'asdasd', 'single', 'Yes', '2020-04-03 12:46:16', '', '', '', 13, 0, 0, '2020-04-04 14:41:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbldmanage`
--

CREATE TABLE `tbldmanage` (
  `id_disaster` int(11) NOT NULL,
  `id_household` int(100) NOT NULL,
  `disaster` varchar(100) NOT NULL,
  `reports` text NOT NULL,
  `location` varchar(250) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `archive` int(10) NOT NULL,
  `archiveDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldmanage`
--

INSERT INTO `tbldmanage` (`id_disaster`, `id_household`, `disaster`, `reports`, `location`, `datecreated`, `archive`, `archiveDate`) VALUES
(1, 13, 'Flood', 'Heavy damage', 'Tabang', '2020-04-20 10:08:56', 0, '2020-05-01 13:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbldots`
--

CREATE TABLE `tbldots` (
  `id_dots` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `patient` varchar(255) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `dayscure` varchar(255) NOT NULL,
  `severaltimesdrug` varchar(255) NOT NULL,
  `typemedicine` varchar(255) NOT NULL,
  `durationuse` varchar(255) NOT NULL,
  `consultationsched` varchar(255) NOT NULL,
  `requirements` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `datecreated` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblhealth`
--

CREATE TABLE `tblhealth` (
  `id_health` int(11) NOT NULL,
  `id_resident` int(11) NOT NULL,
  `appointment` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `datecreated` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `dateSet` varchar(100) NOT NULL,
  `archive` int(11) NOT NULL,
  `archiveDate` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblhealth`
--

INSERT INTO `tblhealth` (`id_health`, `id_resident`, `appointment`, `details`, `status`, `datecreated`, `dateSet`, `archive`, `archiveDate`) VALUES
(1, 9, 'Bakuna', 'Baby', 'Pending', '2020-05-01 15:34:22.722908', '', 0, '2020-05-01 15:34:22.722908'),
(2, 8, 'Tuli', '20 years na di tuli', 'Pending', '2020-05-05 10:51:39.192436', '2020-05-29', 0, '2020-05-05 10:51:39.192436');

-- --------------------------------------------------------

--
-- Table structure for table `tblhousehold`
--

CREATE TABLE `tblhousehold` (
  `id_household` int(11) NOT NULL,
  `famname` varchar(100) NOT NULL,
  `housenum` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `archive` int(10) NOT NULL,
  `archiveDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblhousehold`
--

INSERT INTO `tblhousehold` (`id_household`, `famname`, `housenum`, `street`, `barangay`, `municipality`, `province`, `datecreated`, `archive`, `archiveDate`) VALUES
(13, 'German', '123', 'asdasd', 'asdasd', 'asdasd', 'asdasd', '2020-04-03 12:46:34', 0, '0000-00-00 00:00:00'),
(14, 'Roque', '126', 'Purok 3', 'Tabang', 'Guiguinto', 'Bulacan', '2020-04-04 14:20:53', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblindigency`
--

CREATE TABLE `tblindigency` (
  `id_indigency` int(255) NOT NULL,
  `id` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `issued_date` varchar(255) NOT NULL,
  `daterequested` varchar(100) NOT NULL,
  `street_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblofficials`
--

CREATE TABLE `tblofficials` (
  `id_officials` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `dateposted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tblannounce`
--
ALTER TABLE `tblannounce`
  ADD PRIMARY KEY (`id_announcement`);

--
-- Indexes for table `tblblotter`
--
ALTER TABLE `tblblotter`
  ADD PRIMARY KEY (`id_blotter`);

--
-- Indexes for table `tblbusclearance`
--
ALTER TABLE `tblbusclearance`
  ADD PRIMARY KEY (`id_bclearance`);

--
-- Indexes for table `tblclearance`
--
ALTER TABLE `tblclearance`
  ADD PRIMARY KEY (`id_clearance`);

--
-- Indexes for table `tblcommunity`
--
ALTER TABLE `tblcommunity`
  ADD PRIMARY KEY (`id_comm`);

--
-- Indexes for table `tbldmanage`
--
ALTER TABLE `tbldmanage`
  ADD PRIMARY KEY (`id_disaster`);

--
-- Indexes for table `tbldots`
--
ALTER TABLE `tbldots`
  ADD PRIMARY KEY (`id_dots`);

--
-- Indexes for table `tblhealth`
--
ALTER TABLE `tblhealth`
  ADD PRIMARY KEY (`id_health`);

--
-- Indexes for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  ADD PRIMARY KEY (`id_household`);

--
-- Indexes for table `tblindigency`
--
ALTER TABLE `tblindigency`
  ADD PRIMARY KEY (`id_indigency`);

--
-- Indexes for table `tblofficials`
--
ALTER TABLE `tblofficials`
  ADD PRIMARY KEY (`id_officials`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblannounce`
--
ALTER TABLE `tblannounce`
  MODIFY `id_announcement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblblotter`
--
ALTER TABLE `tblblotter`
  MODIFY `id_blotter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblbusclearance`
--
ALTER TABLE `tblbusclearance`
  MODIFY `id_bclearance` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblclearance`
--
ALTER TABLE `tblclearance`
  MODIFY `id_clearance` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcommunity`
--
ALTER TABLE `tblcommunity`
  MODIFY `id_comm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbldmanage`
--
ALTER TABLE `tbldmanage`
  MODIFY `id_disaster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbldots`
--
ALTER TABLE `tbldots`
  MODIFY `id_dots` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblhealth`
--
ALTER TABLE `tblhealth`
  MODIFY `id_health` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  MODIFY `id_household` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblindigency`
--
ALTER TABLE `tblindigency`
  MODIFY `id_indigency` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblofficials`
--
ALTER TABLE `tblofficials`
  MODIFY `id_officials` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
