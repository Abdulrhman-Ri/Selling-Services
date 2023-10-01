-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2023 at 01:58 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `react-crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` char(100) NOT NULL,
  `subject` char(25) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Abdulrhman Ri', 'abdalrhman@ri.com', 'test message', 'test project, i witch is run success');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` char(30) NOT NULL,
  `email` char(100) NOT NULL,
  `titleService` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` char(50) NOT NULL,
  `category` char(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `title`, `category`, `description`) VALUES
(10, 'IMG-647b0bee729188.75741462.png', 'website', 'html, css and javascript', 'professional website'),
(11, 'IMG-647b22ba324058.30220847.png', 'MOBILE APPS', 'using flutter with dart and firebase', 'professional mobile application'),
(12, 'IMG-647b23001c7bc3.89688954.png', 'Deskop APPS', 'using C# with SQL Server', 'professional desktop application'),
(13, 'IMG-647b233a907342.89390074.png', 'WEB APPS', 'using php and mysql', 'professional web application'),
(14, 'IMG-647b2398123f47.82454778.png', 'web design', 'using Photoshop and illustrator', 'professional designs'),
(16, 'IMG-647b8b8367a3b5.97126341.png', 'presentation', 'using power point', 'professional presentation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
