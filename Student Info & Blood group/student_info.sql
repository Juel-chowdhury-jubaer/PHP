-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 08:47 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `ice_2nd`
--

CREATE TABLE IF NOT EXISTS `ice_2nd` (
  `id` varchar(30) NOT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `full_name` tinytext,
  `nick_name` tinytext,
  `address` tinytext,
  `contact_no` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `blood_group` varchar(20) DEFAULT NULL,
  `ssc_gpa` double DEFAULT NULL,
  `hsc_gpa` double DEFAULT NULL,
  `special_info` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ice_2nd`
--

INSERT INTO `ice_2nd` (`id`, `serial_no`, `full_name`, `nick_name`, `address`, `contact_no`, `email`, `blood_group`, `ssc_gpa`, `hsc_gpa`, `special_info`) VALUES
('', NULL, NULL, 'Jisan', NULL, NULL, 'jisan@gmail.com', NULL, NULL, NULL, NULL),
('ASH1411001M', 1, 'Riazul Haider', 'Robi', 'Begumgonj,Noakhali', '01933056866', 'riazulrobi01@gmail.com', 'B+', 5, 5, 'Robi is a special guy .......'),
('ASH1411006M', 2, 'Ashikul Islam', 'Ashik', '', '', '', '', 0, 0, 'Ashik is a special guy .......'),
('ASH1411008M', 4, 'Anjan Rhudra Paul', 'Anjan', 'Comilla', '01836154254', 'anjanrhudrapaul2@gmail.com', 'B-', 5, 4.5, 'Anjan is a special guy .......'),
('ASH1411009M', 5, 'Md.Asif Hossen', 'Asif', 'Pabna', '01761130490', 'asif.ice2@gmail.com', 'B+', 5, 5, 'Asif is a special guy .......'),
('ASH1411010M', 6, 'Sagar Mahmud', 'sagar', 'Kishoreganj', '01954618970', 'sagarmahmud52@gmail.com', 'B+', 5, 5, 'Sagar is a special guy .......'),
('ASH1411011M', 7, 'Md. Aynal Haque', 'Aynal', '', '', '', '', 0, 0, 'Aynal is a special guy .......'),
('ASH1411012M', 8, 'Md. Hafiz Ullah', 'Hafiz', 'Comilla', '01821033649', 'uhafiz2425@gmail.com', 'O+', 5, 5, 'Hafiz is a special guy .......'),
('ASH1411016M', 12, 'Abdullah Al Mahmud Rosi', 'Rosi', 'Jessor', '01628018615', 'aam.rosi46@gmail.com', 'A+', 5, 5, 'Rosi is a special guy .......'),
('ASH1411018M', 13, 'Ratul Prosad', 'Ratul', 'Tangail', '01764158636', 'ratulprosad36@gmail.com', 'A+', 5, 5, 'Ratul is a special guy .......'),
('ASH1411021M', 16, 'MD. Shakib', 'Shakib', 'Chittagong', '01823891664', 'mdsakib2161@gmail.com', 'O+', 5, 4.9, 'Shakib is a special guy .......'),
('ASH1411022M', 17, 'Aminul Islam', 'Akash', 'B.Baria', '01745018382', 'Aminul_ice838@yahoo.com', 'A+', 4.63, 4.5, 'Akash is a special guy .......'),
('ASH1411023M', 18, 'Farsim Mahmud', 'Farsim', 'Comilla', '01758025766', '', 'B+', 0, 0, 'Farsim is a special guy .......'),
('ASH1411024M', 19, 'Ali Azgar', 'Mishor', 'Noakhali', '01915839118', 'Aliazgar@gmail.com', 'A+', 5, 4.5, 'Mishor is a special guy .......'),
('ASH1411025M', 20, 'Md. Roman Bhuiyan', 'Roman', '', '', '', '', 0, 0, 'Roman is a special guy .......'),
('ASH1411026M', 21, 'Shahabuddin Ahammed', 'Shahabuddin', 'Rajshahi', '01719476289', 'Shahabuddinahammed89@gmail.com', 'B+', 5, 5, 'Shahabuddin is a special guy .......'),
('ASH1411029M', 23, 'Mithun Chandra Debnath', 'Mithun', 'Comilla', '01671929362', 'mithunict@gmail.com', 'A+', 5, 5, 'Mithun is a special guy .......'),
('ASH1411032M', 26, 'Abdullah Al Mamun', 'Mamun', '', '', '', '', 0, 0, 'Mamun is a special guy .......'),
('ASH1411034M', 28, 'Md. Shahid Ullah', 'Sojib', 'Chandpur', '01622549191', 'shahid.ice.nstu@gmail.com', 'O+', 5, 4.8, 'Shahid is a special guy .......'),
('ASH1411036M', 30, 'Imtiazur Rahman', 'Imtiaz', 'Noakhali', '01726791880', 'mahrabimtiaz@gmail.com', 'O+', 5, 5, 'Imtiaz is a special guy .......'),
('ASH1411038M', 31, 'Hridoy Mojumder', 'Hridoy', '', '', '', '', 0, 0, 'Hridoy is a special guy .......'),
('ASH1411039M', 32, 'A.K.M Mashuqur Rahman Mazumder', 'Tonmoy', '', '', '', '', 0, 0, 'Tonmoy is a special guy .......'),
('ASH1411040M', 33, 'Rumon Paul', 'Rumon', '', '', '', '', 0, 0, 'Rumon is a special guy .......'),
('ASH1411042M', 34, 'Md.Majharul Islam', 'Saikat', 'Lakshmipur', '01682478402', 'majharulislam394@gmail.com', 'O+', 5, 5, 'Saikat is a special guy .......'),
('ASH1411045M', 36, 'Shakhawat Hossain', 'Shakawat', 'Cox`s Bazar', '01843400927', 'skshakawat@gmail.com', 'O+', 5, 4.8, 'Shakawat is a special guy .......'),
('ASH1411046M', 37, 'Md.Badhon Khan', 'Badhon', '', '', '', '', 0, 0, 'Badhon is a special guy .......'),
('ASH1411047M', 38, 'Shough Roy', 'Shough', '', '', '', '', 0, 0, 'Shough is a special guy .......'),
('ASH1411048M', 39, 'Ishtiaq Ahammad', 'Ishtiaq', 'Netrokona', '01953252919', 'ishtiaqahammadict@gmail.com', 'A+', 5, 4.5, 'Ishtiaq is a special guy .......'),
('ASH1411049M', 40, 'Md.Taslim Mahmud Bhuiyan', 'Tonoy', 'Comilla', '01965610966', 'taslimmahmud93@yahoo.com', 'B+', 5, 4.5, 'Tonoy is a special guy .......'),
('ASH1411053M', 42, 'Shakh Mizanur Rahman', 'Mizan', 'Lakshmipur', '01794109043', 'nstu.mizan.ict34@gmail.com', 'B+', 5, 5, 'Mizan is a special guy .......'),
('ASH1411054M', 43, 'Md. Shobuj Islam', 'Shobuj', '', '', '', '', 0, 0, 'Shobuj is a special guy .......'),
('ASH1411056M', 44, 'Golam Zilani', 'Zilani', 'Comilla', '01867929097', 'zilani123@gmail.com', 'A+', 5, 5, 'Zilani is a special guy .......'),
('ASH1411058M', 46, 'Md.Salahuddin', 'Salahuddin', 'B.Baria', '01676506360', 'msalahuddin641@gmail.com', 'O+', 5, 5, 'Salahuddin is a special guy .......'),
('ASH1411064M', 49, 'MD.Kawsar Rahman', 'Kawsar', 'Sirajgonj', '01776218512', 'rkawsar92@gmail.com', 'A+', 5, 4.8, 'Kawsar is a special guy .......'),
('BKH1411007F', 3, 'Shamia Ahmed Chowdhury', 'Shamia', 'Comilla', '', 'shamiaice@gmail.com', 'O+', 4.88, 5, 'Shamia is a special guy .......'),
('BKH1411013F', 9, 'Shahina Akter Sathi', 'Sathi', 'Chandpur', '', 'sathiice@gmail.com', 'O+', 5, 5, 'Sathi is a special guy .......'),
('BKH1411014F', 10, 'Tanzila Akter', 'Zinia', 'Lakshmipur', '', 'tanzilazinia02@gmail.com', 'O+', 5, 5, 'Tanzila Zinia is a special guy .......'),
('BKH1411015F', 11, 'Nafija Arbe', 'Nafija', 'Chandpur', '', 'nafija.arbe16@gmail.com', 'A+', 5, 5, 'Nafija is a special guy .......'),
('BKH1411019F', 14, 'Alam Ara Nafisy', 'Nafisy', 'Comilla', '', 'alamaranafisy@gmail.com', 'A+', 5, 5, 'Nafisy is a special guy .......'),
('BKH1411020F', 15, 'Ayeasha Akter', 'Ayesha', 'Lakshmipur', '', 'ayshaa057@gmail.com', 'O+', 5, 5, 'Nafisy is a special guy .......'),
('BKH1411028F', 22, 'Ummeh Fatema', 'Binty', 'Comilla', '', 'Bintybinu@gmail.com', 'O+', 5, 5, 'Binty is a special guy .......'),
('BKH1411030F', 24, 'Asma Akter', 'Asma', 'Comilla', '', 'asma.alo574@gmail.com', 'B+', 5, 5, 'Asma is a special guy .......'),
('BKH1411031F', 25, 'Naushin Jahan', 'Naushin', 'Comilla', '', 'naushinpromi@gmail.com', 'A+', 5, 5, 'Naushin is a special guy .......'),
('BKH1411033F', 27, 'Jannatul Ferdous', 'Onu', '', '', '', '', 0, 0, 'Onu is a special guy .......'),
('BKH1411035F', 29, 'Rifat Fatema', 'Rifat', 'Netrokona', '', 'hredoy.ice@gmail.com', 'O+', 5, 5, 'Rifat is a special guy .......'),
('BKH1411043F', 35, 'Lulumar Jahan Nisa', 'Nisa', 'B.Baria', '', 'nisaict0@gmail.com', 'O+', 5, 5, 'Nisa is a special guy .......'),
('BKH1411051f', 41, 'Farjana Afroz Nila', 'Nila', 'Dhaka', '', 'nila.farzanaafroz@gamil.com', 'B+', 5, 5, 'Nila is a special guy .......'),
('BKH1411057f', 45, 'Mahfuza Akter', 'Mahfuza', '', '', '', '', 0, 0, 'Mahfuza is a special guy .......'),
('BKH1411059F', 47, 'Farzana Akter Mukta', 'Mukta', 'Noakhali', '', 'farzanamukta90@gmail.com', 'B+', 5, 5, 'Mukta is a special guy .......'),
('BKH1411062F', 48, 'khin A Rakhine', 'Khin', 'Cox`s bazar', '', 'akhank72@gmail.com', 'A+', 5, 4.3, 'Khin is a special guy .......'),
('BKH1411063F', 49, 'Jony Akter', 'Jony', 'B.Baria', '', 'lamisaferdous05@gmail.com', 'B+', 5, 4.9, 'Jony is a special guy .......');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
