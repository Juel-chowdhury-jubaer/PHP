-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 08:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `roomdetail`
--

CREATE TABLE IF NOT EXISTS `roomdetail` (
  `id` varchar(12) NOT NULL,
  `username` text NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `room_type` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_of_room` int(11) NOT NULL,
  `total_amount` double NOT NULL,
  `paid_amount` double NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomdetail`
--

INSERT INTO `roomdetail` (`id`, `username`, `checkin_date`, `checkout_date`, `room_type`, `email`, `no_of_room`, `total_amount`, `paid_amount`) VALUES
('', 'borhan', '2017-01-05', '2017-01-10', 'moderate', 'borhan@gmail.com', 4, 280, 150),
('UAlKCY2wIA', 'jubaer', '2016-12-22', '2016-12-27', 'moderate', 'juel-ice@engineer.com', 4, 240, 100),
('Y3kBgT9JfZ', 'juel chowdhury jubaer', '2016-12-22', '2016-12-27', 'standard', 'juel@gmail.com', 5, 400, 300),
('n43mV5YONO', 'juel', '2016-12-22', '2016-12-27', 'moderate', 'juelchowdhuryjubaer@gmail.com', 6, 360, 200),
('I3U6c0y3em', 'jubaer', '2016-12-22', '2016-12-27', 'standard', 'mizan@gmail.com', 3, 240, 200);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
