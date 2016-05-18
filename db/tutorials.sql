-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2016 at 08:47 AM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE IF NOT EXISTS `tutorials` (
  `Artist` varchar(50) NOT NULL,
  `Song` varchar(50) NOT NULL,
  `Difficulty` varchar(50) NOT NULL,
  `Cover` text,
  `Tutorial` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`Artist`, `Song`, `Difficulty`, `Cover`, `Tutorial`) VALUES
('Oasis', 'Songbird', 'Easy', '<a href="song.php?item=songbird"><img src="icons/play.png" height="32" width="32"></a>', '<a href="song.php?item=songbird-tutorial"><img src="icons/play.png" height="32" width="32"></a>'),
('Death Cab For Cutie', 'Your Heart Is An Empty Room', 'Easy', '<a href="song.php?item=your-heart-is-an-empty-room"><img src="icons/play.png" height="32" width="32"></a>', 'Coming soon'),
('Bob Dylan', 'Girl From The North Country', 'Intermediate', '<a href="song.php?item=girl-from-the-north-country"><img src="icons/play.png" height="32" width="32"></a>', 'Coming soon'),
('Air', 'Playground Love', 'Intermediate', '<a href="song.php?item=playground-love"><img src="icons/play.png" height="32" width="32"></a>', 'Coming soon');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
