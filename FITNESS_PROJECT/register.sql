-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 07:24 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquire`
--

CREATE TABLE `enquire` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `contact_time` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `comments` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquire`
--

INSERT INTO `enquire` (`id`, `name`, `email`, `phone`, `contact_time`, `city`, `comments`) VALUES
(1, 'Sukhpreet Kaur', '', '', '', '', ''),
(2, 'sehaj', 'sehaj@gmail.com', '234566', '12 30', 'hsp', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alt_email` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `alt_phone` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `alt_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `coverimage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `username`, `email`, `alt_email`, `phone_number`, `alt_phone`, `gender`, `date_of_birth`, `address`, `alt_address`, `password`, `image`, `coverimage`) VALUES
(1, 'Harmandeep Kaur', 'haru@gmail.com', '', '123456789', '', '', '', '', '', 'harman', '12.jpg', ''),
(2, 'Sukhpreet Kaur', 'sukhi@gmail.com', 'sukhi11@gmail.com', '1234567890', '4677777777', 'female', '11/03/1997', 'tagore nagar', 'subhash nagar', 'sukhpreet', '1498735855_Health_Club_2.png', 'about_img.jpg'),
(3, 'Gaganpreet Kaur', 'gagan@ymail.com', '', '333333333', '444444444', 'female', '3/12/1988', 'Phagwara', '', 'gags', 'lok.jpg', 'lok.jpg'),
(4, 'Sehajpreet Singh', 'sehaj@gmail.com', '', '2222222222', '', 'male', '', '', '', 'suraj', 'quotation.png', ''),
(5, 'Sandeep Singh', 'sandy@yahoo.com', '', '444444', '', '', '', '', '', 'sandeep', '1498735697_dumbbell.png', ''),
(6, 'kriti', 'kriti@gmail.com', '', '5555555', '', '', '', '', '', 'saini', 'michael-hull-2283.jpg', 'class_img.jpg'),
(7, 'Rahul Vishwakarma', 'rahul@gmail.com', '', '6666666', '', '', '', '', '', 'vishwa', '1498735697_dumbbell.png', ''),
(8, 'Meghna Kumari', 'megh@ymail.com', 'meghna@ymail.com', '88888', '', '', '', '', '', 'kum', 'pin.png', ''),
(9, 'Monika Panghal', 'monika@live.com', '', '111111111', '22222222', '', '12/12/1992', '', '', 'pan', 'about_img1.jpg', ''),
(10, 'Sheetal Balotra', 'sheetalbal@gmail.com', 'sheetal@gmail.com', '7777777', '', '', '', '', '', 'bal', '1498735697_dumbbell.png', ''),
(11, 'Rahul Raj', 'rahull@gmail.com', '', '567890', '', 'male', '', '', '', 'raj', '1498735697_dumbbell.png', 'about_img1.jpg'),
(12, 'Lokesh Arora', 'lokesh@gmail.com', '', '5678907', '', 'male', '19/03/1991', 'Delhi', 'Jalandhar', 'arora', '1 (1).png', '1 (4).jpg'),
(13, 'Neeshank Mahajan', 'neeshank@ymail.com', '', '45454545', '', '', '', '', '', 'maha', '', ''),
(14, 'Navjot Sharma', 'navjot@ymail.com', '', '3333333333', '', '', '', '', '', 'navu', '', ''),
(15, 'Alokika Vashisht', 'alokika@live.com', '', '4444444444455', '', '', '', '', '', 'vashi', '', ''),
(16, 'Geeta Alhan', 'geeta@gmail.com', '', '1234512345', '', '', '', '', '', 'geet', '', ''),
(17, 'Harneet Kaur', 'harneet@gmail.com', '', '2343442', '', '', '', '', '', 'neetu', '', ''),
(18, 'Shubhi Mohta', 'shubhi@gmail.com', '', '343456456', '', '', '', '', '', 'mohta', '', ''),
(19, 'Divya Jot Kaur', 'divya@gmail.com', '', '', '', 'female', '', '', '', 'divya', '', ''),
(20, 'Sonia Loi', 'sonia@yahoo.com', '', '2345345678', '', 'female', '', '', '', 'sonia', '1498735777_Yoga_Mat_2.png', 'francesco-gallarotti-2756.jpg'),
(21, 'Mohreet Sandhu', 'mohreet@gmail.com', '', '12345678987', '', '', '', '', '', 'moh', '', ''),
(22, 'Sunny Loi', 'sunny@ymail.com', '', '12345678987', '', '', '', '', '', 'loi', '', ''),
(23, 'Hunny Loi', 'hunny@gmail.com', '', '23456', '', '', '', '', '', 'hunnyyloirocks', '', ''),
(24, 'Simran Kaur', 'simran@gmail.com', '', '9999888887', '', '', '', '', '', 'simrankaurhoshiarpur', '', ''),
(25, 'Priya Aggarwal', 'priya@yahoo.com', '', '1234565432', '', '', '', '', '', 'priyaaaaaaaaaaaaa', '', ''),
(26, 'Jaggi Dhillon', 'jaggi@gmail.com', '', '1234445567', '', '', '', '', '', 'jaggi@2017', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `hobbies` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `phone_number`, `gender`, `date_of_birth`, `address`, `password`, `hobbies`, `image`) VALUES
(1, 'hey', NULL, NULL, '', '', '', 'hi', 'singing, driving, net surfing', ''),
(2, 'sukhi', NULL, NULL, '', '', '', 'hello', 'Singing,Gyming', ''),
(3, 'sukhi', '', '', '', '', '', 'hello', 'Singing,Gyming', ''),
(4, 'suki', 'sukhi@gmail.com', '433657564', '', '', '', 'hehe', '', ''),
(5, 'gagan', 'gagan@yahoo.com', '798700', '', '', '', 'gagan', 'Reading,Dancing', ''),
(6, 'gagan', 'gagan@yahoo.com', '798700', '', '', '', 'gagan', 'Reading,Dancing', ''),
(7, 'sehaj', 'sehaj@live.com', '24354765', '', '', '', 'sehajpreet', '', ''),
(11, 'Sandeep', 'sandy@ymail.com', '43657', '', '', '', 'sandy', '', ''),
(12, 'sukhi', 'sukhi@gmail.com', '5575765', '', '', '', 'sukh', 'Singing,Gyming', ''),
(13, 'sukhi', 'sukhi@gmail.com', '5476876', '', '', '', 'sukh', 'Singing,Gyming', ''),
(14, 'gagan', 'gagan@live.com', '444444', '', '', '', 'gags', 'Reading,Dancing', ''),
(15, 'gagan', 'gagan@live.com', '444444', '', '', '', 'gags', 'Reading,Dancing', ''),
(16, 'suraj', 'suraj@ymail.com', '55555', '', '', '', 'suraj', '', ''),
(17, 'suraj', 'suraj@ymail.com', '55555', '', '', '', 'suraj', '', ''),
(18, 'sand', '', '', '', '', '', '', '', ''),
(19, 'sandy', 'sandy@ymail.com', '22222', '', '', '', 'sand', '', ''),
(20, 'sukha', 'sukhi@gmail.com', '44444', '', '', '', 'sukh', '', ''),
(21, 'kriti', 'kriti@gmail.com', '44444444', '', '', '', 'kriti', '', ''),
(22, 'monika', 'monika@live.com', '456', '', '', '', '', '', ''),
(23, 'monika', 'monika@live.com', '456', '', '', '', 'mon', '', ''),
(24, 'harman', 'haru@gmail.com', '123456789', '', '', '', 'harman', '', ''),
(25, NULL, NULL, NULL, '', '', '', NULL, 'c3', ''),
(26, NULL, NULL, NULL, '', '', '', NULL, 'c', ''),
(27, NULL, NULL, NULL, '', '', '', NULL, 'c', ''),
(28, NULL, NULL, NULL, '', '', '', NULL, 'c', ''),
(29, NULL, NULL, NULL, '', '', '', NULL, 'c', ''),
(30, NULL, NULL, NULL, '', '', '', NULL, 'c', ''),
(31, NULL, NULL, NULL, '', '', '', NULL, 'c', ''),
(32, NULL, NULL, NULL, '', '', '', NULL, 'c', ''),
(33, NULL, NULL, NULL, '', '', '', NULL, 'c3', ''),
(34, NULL, NULL, NULL, '', '', '', NULL, 'c4', ''),
(35, NULL, NULL, NULL, '', '', '', NULL, 'c5', ''),
(36, NULL, NULL, NULL, '', '', '', NULL, 'c2', ''),
(37, NULL, NULL, NULL, '', '', '', NULL, 'c3', ''),
(38, NULL, NULL, NULL, '', '', '', NULL, 'c4', ''),
(39, NULL, NULL, NULL, '', '', '', NULL, 'c3', ''),
(40, NULL, NULL, NULL, '', '', '', NULL, 'c4', ''),
(41, NULL, NULL, NULL, '', '', '', NULL, 'c5', ''),
(42, NULL, NULL, NULL, '', '', '', NULL, 'c3', ''),
(43, NULL, NULL, NULL, '', '', '', NULL, 'c4', ''),
(44, NULL, NULL, NULL, '', '', '', NULL, 'c5', ''),
(45, NULL, NULL, NULL, '', '', '', NULL, 'c4', ''),
(46, NULL, NULL, NULL, '', '', '', NULL, 'c5', ''),
(47, NULL, NULL, NULL, '', '', '', NULL, 'c4', ''),
(48, NULL, NULL, NULL, '', '', '', NULL, 'c5', ''),
(49, NULL, NULL, NULL, '', '', '', NULL, 'c4', ''),
(50, NULL, NULL, NULL, '', '', '', NULL, 'c5', ''),
(51, NULL, NULL, NULL, '', '', '', NULL, 'c3', ''),
(52, NULL, NULL, NULL, '', '', '', NULL, 'c4', ''),
(53, NULL, NULL, NULL, '', '', '', NULL, 'c3,c4', '');

-- --------------------------------------------------------

--
-- Table structure for table `regtrainer`
--

CREATE TABLE `regtrainer` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alt_email` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `alt_phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_of_joining` varchar(50) NOT NULL,
  `courses` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `alt_address` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `coverimage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regtrainer`
--

INSERT INTO `regtrainer` (`id`, `username`, `email`, `alt_email`, `phone_number`, `alt_phone`, `password`, `gender`, `date_of_birth`, `address`, `date_of_joining`, `courses`, `branch`, `alt_address`, `image`, `coverimage`) VALUES
(1, 'suukh', 'sukh@gmail.com', 'sukhii@gmail.com', '5432567899', '6666666666', 'sukhi11@2017', 'female', '11/03/1997', 'Chandigarh', '12/3/1205', 'Aerobics,Legs/Arms Exercises', 'Jalandhar', 'new delhi', '1 (1).png', 'deal1-10.jpg'),
(2, 'Lokesh Arora', 'loki19@gmail.com', 'lokesh@gmail.com', '2345675643', '1234565432', 'loki@2017', 'male', '23/11/2016', 'Delhi', '24/12/2017', 'Yoga,Bhangra', ' Hoshiarpur', '', '1 (7).jpg', 'deal1-14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t1`
--

CREATE TABLE `t1` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone number` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquire`
--
ALTER TABLE `enquire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regtrainer`
--
ALTER TABLE `regtrainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t1`
--
ALTER TABLE `t1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquire`
--
ALTER TABLE `enquire`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `regtrainer`
--
ALTER TABLE `regtrainer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t1`
--
ALTER TABLE `t1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
