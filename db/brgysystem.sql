-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 06:08 AM
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
  `name` varchar(255) NOT NULL,
  `complaint_for` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `details` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending',
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `archive` int(11) NOT NULL,
  `archiveDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblotter`
--

INSERT INTO `tblblotter` (`id_blotter`, `name`, `complaint_for`, `contact`, `details`, `location`, `status`, `datecreated`, `archive`, `archiveDate`) VALUES
(1, 'Brenn Dela Cruz', 'JM Ignacio', '9546546512', 'Fist fight', 'Bocaue', 'Pending', '2020-05-16 10:09:47', 0, '2020-05-22 03:50:17'),
(2, 'Dale Nicolas', 'Richard German', '09123456789', 'Rape', 'Tabang', 'Pending', '2020-05-22 04:06:37', 0, '2020-05-22 04:06:37');

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
  `age` int(11) NOT NULL,
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

INSERT INTO `tblcommunity` (`id_comm`, `lname`, `fname`, `mname`, `alias`, `email`, `contact`, `gender`, `birthday`, `age`, `birthplace`, `housenum`, `street`, `barangay`, `municipality`, `province`, `civil_status`, `voter_status`, `datecreated`, `username`, `password`, `image`, `id_household`, `fam_head`, `archive`, `archiveDate`) VALUES
(6, 'Roque', 'Aaron Paul', 'Ramirez', '', 'asdasd@gmail.com', '09199569072', 'Male', '1995-11-19', 24, 'Guiguinto', '123', 'Purok 3', 'Tabang', 'test', 'test', 'single', 'Yes', '2020-04-01 11:12:31', '', '', '', 14, 1, 0, '2020-05-13 05:26:35'),
(8, 'German', 'Chad', 'Joselito', 'Junior', 'chading@gmail.com', '123123123123', 'Male', '1947-01-07', 73, 'Pandi', '123', 'test', 'test', 'test', 'test', 'Single', 'Yes', '2020-04-03 10:32:00', '', '', '', 13, 1, 0, '2020-05-13 05:03:27'),
(9, 'Valencia', 'Rean', 'C', '', 'reanvalencia@gmail.com', '45665465465', 'Female', '1995-11-11', 0, 'asdasd', '12312', 'sdasd', 'asad', 'asdasd', 'asdasd', 'single', 'Yes', '2020-04-03 12:46:16', '', '', '', 15, 1, 0, '2020-05-13 05:43:23'),
(10, 'Joestar', 'Jonathan', 'Jojo', '', 'jonathanjojo@gmail.com', '45646546546', 'Male', '1960-01-12', 60, 'Japan', '123', 'test', 'test', 'test', 'test', 'Single', 'Yes', '2020-05-18 14:42:25', '', '', '', 0, 0, 0, NULL);

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
(1, 13, 'Flood', 'Heavy damage', 'Tabang', '2020-04-20 10:08:56', 0, '2020-05-01 13:32:48'),
(2, 14, 'Bagyo', 'binaha', 'Tabang', '2020-05-13 04:52:03', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbldots`
--

CREATE TABLE `tbldots` (
  `id_dots` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `medicine` text NOT NULL,
  `month_duration` varchar(100) NOT NULL,
  `daily_usage` varchar(100) NOT NULL,
  `medicine_type` varchar(255) NOT NULL,
  `diagnosis` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'for Return',
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sched_return` varchar(100) NOT NULL,
  `archive` int(11) NOT NULL,
  `archiveDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldots`
--

INSERT INTO `tbldots` (`id_dots`, `id_patient`, `medicine`, `month_duration`, `daily_usage`, `medicine_type`, `diagnosis`, `status`, `datecreated`, `sched_return`, `archive`, `archiveDate`) VALUES
(1, 9, '', '', '', '', '', 'for Return', '2020-05-18 13:28:38', '2020-05-17 19:18:37', 0, '2020-05-18 13:28:38'),
(2, 6, 'goodshit', '25', '3', 'DrugzzzZ', 'lit everyday', 'for Return', '2020-05-18 14:08:20', '2030-12-25', 0, '2020-05-18 14:08:20'),
(3, 6, 'Drugs', '', '3', 'DrugzzzZ', 'lit everyday', 'for Return', '2020-05-18 14:08:09', '2030-12-25', 1, '2020-05-18 14:08:09');

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
(2, 8, 'Tuli', '20 years na di tuli', 'Pending', '2020-05-05 10:51:39.192436', '2020-05-13', 0, '2020-05-05 10:51:39.192436'),
(3, 6, 'testing', 'testing', 'Finished', '2020-05-13 05:23:03.691655', '2020-05-16', 0, '2020-05-13 05:23:03.691655'),
(4, 6, 'test', 'test', 'Finished', '2020-05-13 05:23:49.866682', '2020-05-16', 0, '0000-00-00 00:00:00.000000');

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
(14, 'Roque', '126', 'Purok 3', 'Tabang', 'Guiguinto', 'Bulacan', '2020-04-04 14:20:53', 0, NULL),
(15, 'Valencia', '123', 'asd', 'asd', 'asd', 'asdasdas', '2020-05-13 05:27:11', 0, NULL);

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
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `title` varchar(250) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblofficials`
--

INSERT INTO `tblofficials` (`id_officials`, `name`, `position`, `title`, `logo`) VALUES
(1, 'Kagawad 1', 'Councilor', 'Committee of Peace and Order', '5ebb94610e6ca.jpg'),
(2, 'Kagawad 2', 'Councilor', 'Committee on Tourism', '5ebb94672fb04.jpg'),
(3, 'Kagawad 3', 'Councilor', 'Committee and Population', '5ebb946c39bbc.jpg'),
(4, 'Kagawad 4', 'Councilor', 'Committee on Aquatic and Resources ', '5ebb9472adbea.jpg'),
(5, 'Kagawad 5', 'Councilor', 'Committee on Sports and Developments', '5ec5fd9faaa99.jpg'),
(6, 'Kagawad 6', 'Councilor', 'Committee on Health', '5ebb948b1c86f.jpg'),
(7, 'Kagawad 7', 'Councilor', 'Committee on Agriculture', '5ebb94b79c746.png'),
(8, 'Kagawad 8', 'Councilor', 'Committee on Infrastructure', '5ebb94c508d32.jpg'),
(9, 'Captain Rindou', 'Brgy Captain', '', '5ec5fcbeb7449.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblsystem`
--

CREATE TABLE `tblsystem` (
  `id_system` int(11) NOT NULL,
  `brgyname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsystem`
--

INSERT INTO `tblsystem` (`id_system`, `brgyname`, `address`, `logo`) VALUES
(1, 'Tabang', 'Arterial RD', '5ec67ec4c68e4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_index`
--

CREATE TABLE `tbl_index` (
  `id_index` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `dateposted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_index`
--

INSERT INTO `tbl_index` (`id_index`, `header`, `content`, `image`, `dateposted`) VALUES
(1, 'Feeding Program', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', '5ec67d8e18bfd.jpg', '2020-05-21 13:09:34'),
(2, '2020 Basketball League', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra purus tempor, hendrerit leo a, dapibus tellus. Nam vel accumsan est. Cras vestibulum ipsum eget elementum pretium. Donec vitae auctor velit, eget fermentum urna. Duis sagittis ligula et sodales consectetur. Maecenas ullamcorper quis erat in venenatis. Nam feugiat nisi eu felis suscipit, eget tempus arcu dapibus. In mattis elementum massa ut ultricies. ', '5ec67dd808445.jpg', '2020-05-21 13:10:48'),
(3, '2020 Tree Planting', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra purus tempor, hendrerit leo a, dapibus tellus. Nam vel accumsan est. Cras vestibulum ipsum eget elementum pretium. Donec vitae auctor velit, eget fermentum urna. Duis sagittis ligula et sodales consectetur. Maecenas ullamcorper quis erat in venenatis. Nam feugiat nisi eu felis suscipit, eget tempus arcu dapibus. In mattis elementum massa ut ultricies. ', '5ec67de068b74.jpg', '2020-05-21 13:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id_slide` int(11) NOT NULL,
  `banners` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `dateposted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id_slide`, `banners`, `title`, `dateposted`) VALUES
(1, '5ec666af72266.jpg', 'Thank you Frontliners', '2020-05-21 08:53:34'),
(2, '5ec66707c1491.jpg', 'NBA Basketball Champion', '2020-05-21 08:53:34'),
(3, '5ec6678c01ea2.jpg', 'Tree Planting Program 2020', '2020-05-21 08:53:34');

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
-- Indexes for table `tblsystem`
--
ALTER TABLE `tblsystem`
  ADD PRIMARY KEY (`id_system`);

--
-- Indexes for table `tbl_index`
--
ALTER TABLE `tbl_index`
  ADD PRIMARY KEY (`id_index`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id_slide`);

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
  MODIFY `id_blotter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id_comm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbldmanage`
--
ALTER TABLE `tbldmanage`
  MODIFY `id_disaster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbldots`
--
ALTER TABLE `tbldots`
  MODIFY `id_dots` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblhealth`
--
ALTER TABLE `tblhealth`
  MODIFY `id_health` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  MODIFY `id_household` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblindigency`
--
ALTER TABLE `tblindigency`
  MODIFY `id_indigency` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblofficials`
--
ALTER TABLE `tblofficials`
  MODIFY `id_officials` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblsystem`
--
ALTER TABLE `tblsystem`
  MODIFY `id_system` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_index`
--
ALTER TABLE `tbl_index`
  MODIFY `id_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
