-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2021 at 03:16 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14236590_signedusers`
--

-- --------------------------------------------------------

--
-- Table structure for table `custFeedbacks`
--

CREATE TABLE `custFeedbacks` (
  `custName` varchar(150) NOT NULL,
  `feedbackMessage` varchar(255) NOT NULL,
  `ratingStarCust` int(30) NOT NULL,
  `foodID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custFeedbacks`
--

INSERT INTO `custFeedbacks` (`custName`, `feedbackMessage`, `ratingStarCust`, `foodID`) VALUES
('rr', 'cccccccccccc', 5, 10),
('cc', 'yyyyyyyyyyyyyyyy', 3, 10),
('zz', 'aaaaaaaaaaaaaaa', 5, 7),
('nn', 'bbbbbbbbbbbbb', 3, 10),
('Alexender', 'I am from China and Chinese food here are as good as back in my home.', 5, 1),
('Philip', 'Love to visit again.', 4, 1),
('Raju', 'fantastic ', 5, 15),
('batista', 'awesome', 5, 20),
('testing', 'hello ', 5, 20),
('sashawk bhurtel', 'kabadi lal', 5, 1),
('manoj', 'sarai ghatiya', 5, 3),
('', '', 0, 0),
('Durbhagya neupanya', 'Henus taw kati namitho khana pakako.....', 4, 14),
('Durbhagya neupanya', 'Henus taw kati namitho khana pakako.....', 4, 99),
('Sujan', 'chkfc', 5, 10),
('Bikash pandey', 'it was really nice Momo jhol tannai', 5, 7),
('Wildstarz', 'ramrai thyo arko Pali ni aaula', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `employeeDetails`
--

CREATE TABLE `employeeDetails` (
  `username` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `post` text NOT NULL,
  `employeeID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeeDetails`
--

INSERT INTO `employeeDetails` (`username`, `password`, `firstname`, `lastname`, `email`, `phone`, `address`, `post`, `employeeID`) VALUES
('Hari', '11', 'harihar', 'Upadh', 'har@gmail.com', 332, 'alaska', 'chef', 9),
('ala', '11', 'biniram', 'pandey', 'bin@gmail.com', 5521, 'baneshwor', 'chef', 12),
('bunu', '11', 'biniram', 'pandey', 'bin@gmail.com', 3341, 'baneshwor', 'chef', 13),
('bali', '11', 'Bahubali', 'andra', 'binary.science98@gmail.com', 876547, 'holland', 'chef', 15),
('swami', '87', 'Rama', 'Swami', 'hallalujah@outlook.com', 222222, 'Haryana', 'waiter', 16),
('Ballu', '11', 'bali', 'raja', 'bals@gmail.com', 9399039, 'Bethani, Israel', 'cashier', 17),
('admin', 'admin', 'Sujan', 'Khanal', 'Sk@gmail.com', 999900000, 'Nepal', 'manager', 18);

-- --------------------------------------------------------

--
-- Table structure for table `foodMenu`
--

CREATE TABLE `foodMenu` (
  `foodID` int(100) NOT NULL,
  `foodCategory` varchar(100) NOT NULL,
  `foodName` varchar(100) NOT NULL,
  `serveType` text NOT NULL,
  `Description` text NOT NULL,
  `image` blob DEFAULT NULL,
  `price` int(30) NOT NULL,
  `ratingStar` int(30) NOT NULL,
  `prepareTime` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodMenu`
--

INSERT INTO `foodMenu` (`foodID`, `foodCategory`, `foodName`, `serveType`, `Description`, `image`, `price`, `ratingStar`, `prepareTime`) VALUES
(1, 'Mo Mo', 'Chicken', 'Steam', 'nothing is done', NULL, 250, 4, 40),
(2, 'Mo Mo', 'Chicken', 'Fried', 'It has chicken in it.', NULL, 180, 4, 35),
(3, 'Mo Mo', 'Chicken', 'Chilly', 'It has chicken in it.', NULL, 220, 4, 40),
(4, 'Mo Mo', 'Chicken', 'Jhol', 'It has chicken in it.', NULL, 230, 5, 50),
(5, 'Mo Mo', 'Mutton', 'Chilly', 'It has mutton in it.', NULL, 250, 5, 40),
(6, 'Mo Mo', 'Mutton', 'Steam', 'It has mutton in it.', NULL, 230, 5, 45),
(7, 'Mo Mo', 'Mutton', 'Jhol', 'It has mutton in it.', NULL, 260, 4, 25),
(8, 'Mo Mo', 'Mutton', 'Spice Platter', 'It is spicy and has mutton in it.', NULL, 300, 5, 45),
(9, 'Mo Mo', 'Chicken', 'Spice Platter', 'It is spicy and has chicken in it.', NULL, 230, 5, 55),
(10, 'Mo Mo', 'Veg', 'Jhol', 'It is vegetarian meal', NULL, 150, 4, 40),
(11, 'Mo Mo', 'Veg', 'Chilly', 'It is spicy and has veg ingredients.', NULL, 180, 3, 30),
(12, 'Mo Mo', 'Veg', 'Fried', 'It is fried momo with veg ingredients', NULL, 160, 5, 30),
(13, 'Mo Mo', 'Veg', 'Steam', 'It is our special stream veg momo.', NULL, 120, 5, 15),
(14, 'Chowmen', 'Veg', 'jhol', 'It have chicken in it.', NULL, 150, 3, 15),
(15, 'Chowmen', 'Mutton', 'Dry', 'It have Mutton in it.', NULL, 200, 5, 15),
(16, 'Chowmen', 'Chicken', 'Thukpa', 'It is the best thuka in town.', NULL, 100, 5, 35),
(17, 'Burger', 'Chicken', 'Normal', 'It have chicken in it.', NULL, 200, 5, 30),
(18, 'Burger', 'Veg', 'Normal', 'It have vegetables in it.', NULL, 150, 4, 25),
(19, 'Burger', 'Mutton', 'Normal', 'It have Mutton in it.', NULL, 250, 5, 35),
(20, 'Burger', 'Mutton', 'Double cheese', 'It have Mutton in it.', NULL, 3000, 4, 35),
(26, 'Chinese', 'green momo', 'fried', 'It is green in color and delicious.', NULL, 490, 5, 25);

-- --------------------------------------------------------

--
-- Table structure for table `foodOrders`
--

CREATE TABLE `foodOrders` (
  `orderID` int(10) UNSIGNED NOT NULL,
  `foodID` int(100) DEFAULT NULL,
  `tableNum` int(10) NOT NULL,
  `orderStatus` int(10) NOT NULL,
  `quantity` int(30) NOT NULL,
  `extraRequest` varchar(30) NOT NULL,
  `checkout` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodOrders`
--

INSERT INTO `foodOrders` (`orderID`, `foodID`, `tableNum`, `orderStatus`, `quantity`, `extraRequest`, `checkout`) VALUES
(2, 7, 2, 3, 3, 'with coke', 1),
(3, 11, 1, 3, 3, 'Bring with tomato ketchup', 1),
(4, 15, 6, 3, 3, 'Make it little crispy', 1),
(5, 19, 6, 3, 2, 'Add more onions', 1),
(44, 4, 1, 3, 2, 'SIDE MA JHOL TANNA HAI', 1),
(47, 7, 7, 3, 2, 'JHOL ALLI SIDE MA HAI', 1),
(48, 5, 5, 3, 1, 'TadkaNoon', 0),
(49, 3, 5, 0, 1, 'Nun Kam ', 0),
(50, 1, 5, 0, 2, 'Ghfgh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tableInformation`
--

CREATE TABLE `tableInformation` (
  `tableNum` int(30) NOT NULL,
  `tableCapacity` int(30) NOT NULL,
  `status` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableInformation`
--

INSERT INTO `tableInformation` (`tableNum`, `tableCapacity`, `status`) VALUES
(1, 6, 1),
(2, 5, 0),
(3, 4, 0),
(4, 4, 0),
(5, 5, 1),
(6, 4, 1),
(7, 8, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeeDetails`
--
ALTER TABLE `employeeDetails`
  ADD PRIMARY KEY (`employeeID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `foodMenu`
--
ALTER TABLE `foodMenu`
  ADD PRIMARY KEY (`foodID`);

--
-- Indexes for table `foodOrders`
--
ALTER TABLE `foodOrders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `foodID` (`foodID`);

--
-- Indexes for table `tableInformation`
--
ALTER TABLE `tableInformation`
  ADD PRIMARY KEY (`tableNum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeeDetails`
--
ALTER TABLE `employeeDetails`
  MODIFY `employeeID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `foodMenu`
--
ALTER TABLE `foodMenu`
  MODIFY `foodID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `foodOrders`
--
ALTER TABLE `foodOrders`
  MODIFY `orderID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foodOrders`
--
ALTER TABLE `foodOrders`
  ADD CONSTRAINT `foodOrders_ibfk_1` FOREIGN KEY (`foodID`) REFERENCES `foodMenu` (`foodID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
