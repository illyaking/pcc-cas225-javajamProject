-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2020 at 11:39 PM
-- Server version: 5.6.45
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kingwebn_javajam`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `body`, `image`, `date`) VALUES
(1, 'Follow the Winding Road to JavaJam', '<p>We\'re a little out of the way, but take a drive down Route 42 to JavaJam today! Indulge in our locally roasted free-trade coffee and home-made pastries. You\'ll feel right at home at JavaJam!</p>\r\n<h3>JavaJam Coffee House features:</h3>\r\n<ul>\r\n  <li>Specialty Coffee and Tea</li>\r\n  <li>Bagels, Muffins, and Organic Snacks</li>\r\n  <li>Music and Poetry Readings</li>\r\n  <li>Open Mic Night</li>\r\n</ul>\r\n', 'images/heroroad.jpg', '2017-07-28'),
(2, 'Coffee at JavaJam', 'Indulge in our locally roasted free-trade coffee and enjoy the aroma, the smooth taste, the caffeine! Join our Mug Club and get a 10% discount on each cup of coffee you purchase â€” ask the barista for details.', 'images/heromugs.jpg', '2017-08-03'),
(3, 'Music at JavaJam', 'The first Friday night each month at JavaJam is a special night. Join us from 8 pm to 11 pm for some music you won\'t want to miss!', 'images/heroguitar.jpg', '2017-08-03'),
(4, 'Jobs at JavaJam', 'Want to work at JavaJam? Fill out the form below to start your application. Required fields are marked with an asterisk (*).', 'images/heroroad.jpg', '2017-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `experience` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `email`, `experience`) VALUES
(1, 'myName', 'example@example.com', 'myExperience'),
(2, 'Rocco', 'rocco@pcc.edu', 'This is a test'),
(3, 'myName', 'example@example.com', 'myExperience'),
(4, 'rocco', 'rocco@test.com', 'test'),
(5, 'rocco', 'rocco@test.com', 'test'),
(6, 'illya king', 'illyaking1978@gmail.com', 'Test 03');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` text,
  `description` text,
  `price` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `description`, `price`) VALUES
(1, 'Just Java', 'Regular house blend, decaffeinated coffee, or flavor of the day.', '$2.00'),
(2, 'Cafe au Lait', 'House blended coffee infused into a smooth, steamed milk.', '$3.00'),
(3, 'Iced Cappuccino', 'Sweetened espresso blended with icy-cold milk and served in a chilled glass.', '$4.75');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `month` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `month`, `description`, `image`) VALUES
(1, 'January', 'Melanie Morris entertains with her melodic folk style.', 'images/melaniethumb.jpg'),
(2, 'February', 'Tahoe Greg is back from his tour. New songs. New stories.', 'images/gregthumb.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
