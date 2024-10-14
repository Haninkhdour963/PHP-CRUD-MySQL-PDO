-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2024 at 12:34 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Salary` decimal(10,2) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `Name`, `Address`, `Salary`, `Image`) VALUES
(1, 'heno hanoon', 'Amman', 2000.00, 'https://www.bing.com/ck/a?!&&p=8a2b8dc12956330fJmltdHM9MTcyODc3NzYwMCZpZ3VpZD0xY2ZkOGViNi04NjlhLTZkODktMzMwZS05YTQ2ODc2NTZjMTMmaW5zaWQ9NTQ5MA&ptn=3&ver=2&hsh=3&fclid=1cfd8eb6-869a-6d89-330e-9a4687656c13&u=a1L2ltYWdlcy9zZWFyY2g_cT1pbWFnZSZpZD05MUFBNkY4NTFG'),
(2, 'heno', 'Amman', 2000.00, 'https://www.bing.com/th?id=OIP.RDStdOWibsHTs0f08IQdUAHaEo&w=158&h=100&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
