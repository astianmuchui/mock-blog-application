-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 09:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(255) NOT NULL,
  `post_title` text NOT NULL,
  `post` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post`, `time`) VALUES
(1, 'paradigm shift', 'formal. : an important change that happens when the usual way of thinking about or doing something is replaced by a new and different way This discovery will bring about a paradigm shift in our understanding of evolution.', '2020-12-19 07:12:48'),
(16, 'wwe Ice cream bars', 'SHARE\r\n1 COMMENT\r\nUPDATE: Good Humor’s WWE Superstars Cookie Sandwiches, a new take on the popular wrestling ice cream bars that were discontinued in 2009, are now available for home delivery in select cities around the country. And Nerdist got a chance t', '2020-12-19 07:58:22'),
(20, 'momentum', '\r\nTheir are two big differences between these new ice cream sandwiches and the old bars, one in flavor the other in texture. The old bars had a chocolate back. The sandwiches feature vanilla wafer cookies with a vanilla “frozen dairy dessert,” rather than actual ice cream. (That sounds like a bad thing but it’s not.) The flavor profile of the new sandwiches are a lot more one-note than the old bars were.\r\n\r\n', '2020-12-19 08:10:21'),
(21, 'Daniel bryan', 'Those who are fans of the Daniel Bryan ice cream bars consume the product religiously and they don\'t let anybody speak out against the treats. \r\n\r\nBryan ice cream bar lovers wouldn\'t dare be caught dead near a Baskin-Robbins or a Ben & Jerry.  Too mainstream.  Too national...unless, of course the popular ice cream chains decide to carry the Daniel Bryan product. ', '2020-12-19 08:12:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
