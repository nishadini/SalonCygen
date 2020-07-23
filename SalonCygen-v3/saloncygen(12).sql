-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 12:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saloncygen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'saloncygen@gmail.com', 'salon@123');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `bookingId` int(11) NOT NULL,
  `cusId` int(11) NOT NULL,
  `cusUsername` varchar(45) DEFAULT NULL,
  `cusEmail` varchar(30) NOT NULL,
  `salonId` int(11) NOT NULL,
  `salonName` varchar(45) DEFAULT NULL,
  `service` varchar(30) NOT NULL,
  `bookingDate` date NOT NULL,
  `slotId` int(11) NOT NULL,
  `employeeId` int(11) NOT NULL,
  `employeeName` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `rated` tinyint(1) NOT NULL,
  `blocked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`bookingId`, `cusId`, `cusUsername`, `cusEmail`, `salonId`, `salonName`, `service`, `bookingDate`, `slotId`, `employeeId`, `employeeName`, `status`, `view`, `rated`, `blocked`) VALUES
(36, 1, NULL, 'sitharanishadini001@gmail.com', 17, 'Salon Bonitha', 'Facial treatments', '2020-07-22', 2, 2, 'kalana maleesha  ', 0, 1, 0, 0),
(50, 9, NULL, 'sitharanishadini001@gmail.com', 17, 'Salon Bonitha', 'Hair dressing', '2020-07-22', 3, 11, 'Sahani Sineka  ', 0, 0, 0, 0),
(51, 9, NULL, 'sitharanishadini001@gmail.com', 17, 'Salon Bonitha', 'Hair dressing', '2020-07-22', 2, 11, 'Sahani Sineka  ', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE `cancel` (
  `cancelId` int(10) NOT NULL,
  `salonId` int(11) NOT NULL,
  `cusEmail` varchar(40) NOT NULL,
  `bookingDate` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `employeeName` varchar(40) NOT NULL,
  `service` varchar(40) NOT NULL,
  `view` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancel`
--

INSERT INTO `cancel` (`cancelId`, `salonId`, `cusEmail`, `bookingDate`, `time`, `employeeName`, `service`, `view`) VALUES
(6, 17, 'sitharanishadini001@gmail.com', '2020-07-22', '10.00-10.30', 'Ashini ', '', 1),
(8, 17, 'sitharanishadini001@gmail.com', '2020-07-15', '08.30-09.00', 'Ashini ', '', 0),
(9, 17, 'ashiniishara2@gmail.com', '2020-07-15', '09.00-09.30', 'kalana maleesha ', '', 0),
(10, 17, 'sitharanishadini001@gmail.com', '2020-07-22', '09.00-09.30', 'Ashini ', 'Hair dressing', 0),
(11, 17, 'sitharanishadini001@gmail.com', '2020-07-30', '09.30-10.00', 'Ashini ', 'Facial treatments', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cusId` int(10) NOT NULL,
  `cusEmail` varchar(50) NOT NULL,
  `cusUsername` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `re_pass` varchar(10) NOT NULL,
  `homeNumber` varchar(10) NOT NULL,
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `NUM` int(10) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cusId`, `cusEmail`, `cusUsername`, `pass`, `re_pass`, `homeNumber`, `street`, `city`, `NUM`, `DOB`, `gender`) VALUES
(9, 'sitharanishadini001@gmail.com', 'Sithara Nishadini', 'asdf', 'asdf', '0177156478', '44', 'jj', 719801632, '2020-07-20', 'Female'),
(10, 'ashiniishara2@gmail.com', 'ashini ishara', 'asdf', 'asdf', '123', 'asdf', 'galle', 719801636, '2020-07-06', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `discountId` int(10) NOT NULL,
  `discount` varchar(30) NOT NULL,
  `salonId` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`discountId`, `discount`, `salonId`, `status`) VALUES
(1, '20%', 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeId` int(11) NOT NULL,
  `employeeName` varchar(30) NOT NULL,
  `employeeEmail` varchar(30) NOT NULL,
  `salonId` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeId`, `employeeName`, `employeeEmail`, `salonId`, `status`) VALUES
(1, 'Ashini', 'ashiniishara2@gmail.com', 17, 1),
(2, 'kalana maleesha', '', 17, 1),
(4, 'Pramod shehan', 'ss@gmail.com', 0, 1),
(5, 'Shehara', 'shehara@gmail.com', 18, 1),
(6, 'Chamith Maleesha', 'chamithmaleesha@gmail.com', 0, 0),
(7, 'Shehara Grabau', 'sheharagrabau@gmail.com', 17, 1),
(10, 'Sith Nish', 'sitharanishadini001@gmail.com', 17, 1),
(11, 'Sahani Sineka', 'ashiniishara2@gmail.com', 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `rateId` int(11) NOT NULL,
  `salonId` int(11) NOT NULL,
  `serviceId` int(11) NOT NULL,
  `bookingId` int(11) NOT NULL,
  `rateCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salonowners`
--

CREATE TABLE `salonowners` (
  `salonUserId` int(11) NOT NULL,
  `salonUsername` varchar(30) DEFAULT NULL,
  `ownerName` varchar(40) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL,
  `re_pass` varchar(10) DEFAULT NULL,
  `homeAddress` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `NUM` int(10) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salonowners`
--

INSERT INTO `salonowners` (`salonUserId`, `salonUsername`, `ownerName`, `email`, `pass`, `re_pass`, `homeAddress`, `street`, `city`, `NUM`, `DOB`, `gender`) VALUES
(7, '', '', '', 'aa', 'aa', 'aa', 'aa', 'aa', 719801636, '2020-04-04', 'Female'),
(10, 'ashini ishara', '', 'ashiniishara2@gmail.com', 'asdfg', 'asdfg', '11', '22', 'Colombo', 713057663, '2020-06-02', 'Female'),
(14, 'Sithara Nishadini', 'Sith Nish', 'sitharanishadini001@gmail.com', 'aqwe', 'aqwe', 'bn', 'bn', 'bn', 719801636, '2020-07-29', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `salon_info`
--

CREATE TABLE `salon_info` (
  `salonName` varchar(100) NOT NULL,
  `salonId` int(50) NOT NULL,
  `location1` varchar(100) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullAddress` varchar(255) NOT NULL,
  `subtopic1` varchar(200) NOT NULL,
  `subtopic2` varchar(200) NOT NULL,
  `subtopic3` varchar(200) NOT NULL,
  `subtopic4` varchar(200) NOT NULL,
  `subtopic5` varchar(200) NOT NULL,
  `subtopic6` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `subtopic1Des` varchar(220) NOT NULL,
  `subtopic2Des` varchar(220) NOT NULL,
  `subtopic3Des` varchar(220) NOT NULL,
  `subtopic4Des` varchar(220) NOT NULL,
  `subtopic5Des` varchar(220) NOT NULL,
  `subtopic6Des` varchar(220) NOT NULL,
  `image1` varchar(222) NOT NULL,
  `image2` varchar(222) NOT NULL,
  `image3` varchar(222) NOT NULL,
  `image4` varchar(222) NOT NULL,
  `image5` varchar(222) NOT NULL,
  `image6` varchar(222) NOT NULL,
  `googlemap` text NOT NULL,
  `aboutimg1` varchar(225) NOT NULL,
  `aboutimg2` varchar(225) NOT NULL,
  `aboutimg3` varchar(225) NOT NULL,
  `aboutimg1info` varchar(225) NOT NULL,
  `aboutimg2info` varchar(225) NOT NULL,
  `aboutimg3info` varchar(225) NOT NULL,
  `newyeardiscount` varchar(200) NOT NULL,
  `totalRate` int(11) NOT NULL,
  `totalCount` int(11) NOT NULL,
  `remove` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salon_info`
--

INSERT INTO `salon_info` (`salonName`, `salonId`, `location1`, `mobile`, `email`, `fullAddress`, `subtopic1`, `subtopic2`, `subtopic3`, `subtopic4`, `subtopic5`, `subtopic6`, `about`, `subtopic1Des`, `subtopic2Des`, `subtopic3Des`, `subtopic4Des`, `subtopic5Des`, `subtopic6Des`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `googlemap`, `aboutimg1`, `aboutimg2`, `aboutimg3`, `aboutimg1info`, `aboutimg2info`, `aboutimg3info`, `newyeardiscount`, `totalRate`, `totalCount`, `remove`) VALUES
('Sample Salon', 1, 'Location (Please follow this format for an effective search your salon) District-City.', 0, 'sample@gmail.com', 'Address', 'Your Service', 'Your Service', 'Your Service', 'Your Service', 'Your Service', 'Your Service', 'Your Service Description', 'Your Service Description', 'Your Service Description', 'Your Service Description', 'Your Service Description', 'Your Service Description', 'Your Service Description', 'salona4.jpg', 'image3.jpg', 'hair-treatments.jpg', 'assorted-blur-close-up-container-1115128.jpg', '5.jpg', '6.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15870.289615790462!2d80.18955162524634!3d6.053244517905159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae17406659d46ef%3A0xf520f2d4ea069edf!2sGintota%20CTB%20Depot%2C%20Galle!5e0!3m2!1sen!2slk!4v1585540555442!5m2!1sen!2slk\" width=\"1150\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', ' 	6.jpg', ' 	6.jpg', ' 	6.jpg', 'The best Service provider', 'salona3.jpgThe Best Salon Award 2019', 'The bridal Show ', 'we have discount for you 111', 39, 9, 0),
('Salon Bonitha', 17, 'Colombo - Wellawatta', 719801636, 'sitharanishadini001@gmail.com', '', 'Hair Making', 'Make Up', 'Hair Colouring', 'Makeup tools', 'Face Tournaring', 'Event Dressing and Makeup', 'The Best Service Provider of the colombo.', 'We as a leading company in the field like to serve you the best services to make your big day colourful. So make your hands with us.', 'We as a leading company in the field like to serve you the best services to make your big day colourful. So make your hands with us.', 'We as a leading company in the field like to serve you the best services to make your big day colourful. So make your hands with us.', 'We as a leading company in the field like to serve you the best services to make your big day colourful. So make your hands with us.', 'We as a leading company in the field like to serve you the best services to make your big day colourful. So make your hands with us.', 'We as a leading company in the field like to serve you the best services to make your big day colourful. So make your hands with us.', 'salona4.jpg', 'Appoinment.png', 'hair-treatments.jpg', 'assorted-blur-close-up-container-1115128.jpg', '5.jpg', '6.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.704328838621!2d80.21497801427151!3d6.035252395629112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173bba7367d01%3A0xc62c8f1ccee68cc2!2sSalon%20Bonitha!5e0!3m2!1sen!2slk!4v1594377229321!5m2!1sen!2slk\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', '10-piece-black-makeup-brush-set-on-white-panel-2721977 (1).jpg', 'salon6.jpg', 'salona8.jpg', 'The best Service provider', 'The Best Salon Award 2019', 'The bridal Show ', '    80% discount for hair dressings', 54, 26, 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceId` int(4) NOT NULL,
  `service` varchar(20) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `salonId` int(50) NOT NULL,
  `status` varchar(1) NOT NULL,
  `rateTotal` int(10) NOT NULL,
  `ratedCount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceId`, `service`, `amount`, `salonId`, `status`, `rateTotal`, `ratedCount`) VALUES
(1, 'Hair dressing', 800, 17, '1', 0, 0),
(2, 'facial treatment', 1300, 1, '1', 25, 5),
(4, 'Facial treatments', 2000, 18, '0', 0, 0),
(5, 'Facial treatments', 1500, 17, '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

CREATE TABLE `timeslot` (
  `slotId` int(11) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeslot`
--

INSERT INTO `timeslot` (`slotId`, `time`) VALUES
(1, '08.30-09.00'),
(2, '09.00-09.30'),
(3, '09.30-10.00'),
(4, '10.00-10.30'),
(5, '10.30-11.00'),
(6, '11.00-11.30'),
(7, '11.30-12.00'),
(8, '12.00-12.30'),
(9, '12.30-01.00'),
(10, '01.00-01.30'),
(11, '01.30-02.00'),
(12, '02.00-02.30'),
(13, '02.30-03.00'),
(14, '03.00-03.30'),
(15, '03.30-04.00'),
(16, '04.00-04.30'),
(17, '04.30-05.00'),
(18, '05.00-05.30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `cancel`
--
ALTER TABLE `cancel`
  ADD PRIMARY KEY (`cancelId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cusId`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`discountId`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeId`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rateId`);

--
-- Indexes for table `salonowners`
--
ALTER TABLE `salonowners`
  ADD PRIMARY KEY (`salonUserId`);

--
-- Indexes for table `salon_info`
--
ALTER TABLE `salon_info`
  ADD PRIMARY KEY (`salonId`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceId`);

--
-- Indexes for table `timeslot`
--
ALTER TABLE `timeslot`
  ADD PRIMARY KEY (`slotId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cancel`
--
ALTER TABLE `cancel`
  MODIFY `cancelId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cusId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `discountId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `rateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `salonowners`
--
ALTER TABLE `salonowners`
  MODIFY `salonUserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `salon_info`
--
ALTER TABLE `salon_info`
  MODIFY `salonId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
