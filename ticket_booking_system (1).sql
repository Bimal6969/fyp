-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 09:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`username`, `password`) VALUES
('', ''),
('', ''),
('admin', '$2y$10$pzrnWV1/Yg5VbmYcBRYTjeB8ZOUQo6IeZHMZ/0LhT8/KpKliOwpLC'),
('admin', '$2y$10$BDDfevIm0cnjU/Hfq5nyd.h6NUXyKXW2pWhDj4SbLf5W8Ms38b8QW'),
('admin', '$2y$10$Ky5Ku6xEsC/YYfjDnaKE4uI0DdDuQr6xDhwGWB3m5LsaKphStLZJi');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Bus_number` varchar(50) NOT NULL,
  `departure_date` date NOT NULL,
  `departure_time` time(6) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `contactNumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `bus_id`, `city`, `Destination`, `Bus_number`, `departure_date`, `departure_time`, `cost`, `seat_id`, `fullName`, `contactNumber`, `email`, `gender`) VALUES
(4, 14, 'kathmandu', 'okhaldhunga', 'ba 1 cha 2009', '2023-04-14', '00:38:00.000000', '3000', 27, 'Bimal Thapa', '9815162960', 'thapabimal@gmail.com', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `Bus_id` int(11) NOT NULL,
  `Bus_number` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`Bus_id`, `Bus_number`, `mobile_number`) VALUES
(13, 'ba 1 cha 2007', '2378468723494'),
(14, 'ba 1 cha 2009', '987261287213');

-- --------------------------------------------------------

--
-- Table structure for table `bus_seats`
--

CREATE TABLE `bus_seats` (
  `Bus_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Bimal', 'bimal@gmail.com', 'hello ', 'hi i am bimal ');

-- --------------------------------------------------------

--
-- Table structure for table `owner_info`
--

CREATE TABLE `owner_info` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner_info`
--

INSERT INTO `owner_info` (`id`, `username`, `email`, `phone`, `password`) VALUES
(4, 'bimal', 'bimal12@gmail.com', '97665765675', '$2y$10$2Icg18KEq9A2QjnaufM7tOy4.HRj49kz43yAIBMOfgK'),
(6, 'hari', 'hari@gmail.com', '829374829', '$2y$10$IfSorK6Oy9VsUvdAKsCzfuIHu/TECWcbpSPMbVfgzE2'),
(7, 'Ram', 'ram@gmail.com', '28752873', '$2y$10$osuzRdrmM72nV1z/VqyGs.krbLL836FqlpBp0LUEhnK');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `Id` int(11) NOT NULL,
  `Bus_id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `Destination` varchar(100) NOT NULL,
  `Bus_number` varchar(100) NOT NULL,
  `Departure_date` date NOT NULL,
  `Departure_time` time NOT NULL,
  `Cost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`Id`, `Bus_id`, `city`, `Destination`, `Bus_number`, `Departure_date`, `Departure_time`, `Cost`) VALUES
(19, 14, 'kathamandu', 'okhaldhunga', 'ba 1 cha 2009', '2023-04-14', '00:38:00', '3000'),
(20, 13, 'jhapa', 'pokhara', '	ba 1 cha 2007', '2023-04-15', '09:31:00', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_name` varchar(50) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seat_name`, `seat_id`, `status`) VALUES
('A1', 1, 'available'),
('A2', 2, 'available'),
('A3', 3, 'available'),
('A4', 4, 'available'),
('A5', 5, 'available'),
('A6', 6, 'available'),
('A7', 7, 'available'),
('A8', 8, 'available'),
('A9', 9, 'available'),
('A10', 10, 'available'),
('A11', 11, 'available'),
('A12', 12, 'available'),
('A13', 13, 'available'),
('A14', 14, 'available'),
('A15', 15, 'available'),
('A16', 16, 'available'),
('A17', 17, 'available'),
('B1', 18, 'available'),
('B2', 19, 'available'),
('B3', 20, 'available'),
('B4', 21, 'available'),
('B5', 22, 'available'),
('B6', 23, 'available'),
('B7', 24, 'available'),
('B8', 25, 'available'),
('B9', 26, 'available'),
('B10', 27, 'available'),
('B11', 28, 'available'),
('B12', 29, 'available'),
('B13', 30, 'available'),
('B14', 31, 'available'),
('B15', 32, 'available'),
('B16', 33, 'available'),
('B17', 34, 'available'),
('B18', 35, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `fullname`, `email`, `mobile`, `password`, `gender`, `dob`) VALUES
(11, 'abcd', 'abcd@gmail.com', '987327673', '$2y$10$wX1u1hynIITzMiQIuDUc6u9kr3FVfC1r3YKs1uj02gxhKqC1F2Ode', 'male', '2001-01-01'),
(12, 'Utkarsh rimal', 'rimalutkarsh@gmail.com', '9876655657', '$2y$10$5x/H43Ank6232ESQ0.yQRu18gu/fZUcM.p0EervF8te.iIMwyzz0q', 'male', '2002-02-02'),
(13, 'Bimal', 'abcd@gmail.com', '983723786', '$2y$10$Et7a5KSrMOmVUpvI1L2rYOkgW7QNfEBYIIWJXeAJC00tU.uJIr2rO', 'male', '2001-01-01'),
(14, 'Ram karki', 'karkiram@gmail.com', '9887755464', '$2y$10$tkJxUHpv37UI3Rl/XYKGEehqlNqTtvNVsuYPh1i.LtEMbg.nXZpDa', 'male', '2002-01-02'),
(15, 'Nisha Thapa', 'Thapanisha@gmail.com', '9875656566', '$2y$10$ymRsa4qwNOq5OORzmHsNF.wWab8ur.JTvbwmlGo0UuF0PDcCxDlP6', 'female', '2000-01-02'),
(16, 'lalita wagle', 'yogesh123@gmail.com', '9876543210', '$2y$10$zI7GwDHJJ9eQwWuAJVd.uu3/uJZoDm8IjZ2j5rOWugJZhT96QZRm2', 'male', '2030-12-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `bus_id` (`bus_id`),
  ADD KEY `seat_id` (`seat_id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`Bus_id`);

--
-- Indexes for table `bus_seats`
--
ALTER TABLE `bus_seats`
  ADD KEY `Bus_id` (`Bus_id`),
  ADD KEY `seat_id` (`seat_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_info`
--
ALTER TABLE `owner_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Bus_id` (`Bus_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `Bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `owner_info`
--
ALTER TABLE `owner_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`Bus_id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`seat_id`) REFERENCES `seats` (`seat_id`);

--
-- Constraints for table `bus_seats`
--
ALTER TABLE `bus_seats`
  ADD CONSTRAINT `bus_seats_ibfk_1` FOREIGN KEY (`Bus_id`) REFERENCES `buses` (`Bus_id`),
  ADD CONSTRAINT `bus_seats_ibfk_2` FOREIGN KEY (`seat_id`) REFERENCES `seats` (`seat_id`);

--
-- Constraints for table `routes`
--
ALTER TABLE `routes`
  ADD CONSTRAINT `routes_ibfk_1` FOREIGN KEY (`Bus_id`) REFERENCES `buses` (`Bus_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `routes_ibfk_2` FOREIGN KEY (`Bus_id`) REFERENCES `buses` (`Bus_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
