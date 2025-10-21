-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2025 at 04:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Doki`
--

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `number` tinyint(4) DEFAULT NULL,
  `colour` varchar(7) DEFAULT NULL,
  `pet` text DEFAULT NULL,
  `teacher` varchar(50) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `naptime` time DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `dayrating` tinyint(4) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `submission_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `name`, `number`, `colour`, `pet`, `teacher`, `subject`, `genre`, `naptime`, `birthday`, `dayrating`, `comments`, `submission_time`) VALUES
(4, 'Atie', 7, '#a20b6b', 'cat, dragon', 'ati', 'COS10026, atis_subject', 'sci-fi', '15:40:00', '2025-10-18', 2, 'asgd asdsdj asdkhkjahd kajsd kasd', '2025-10-06 00:57:40'),
(5, 'Jack', 7, '#a20b6b', 'cat, dragon', 'ati', 'COS10026, atis_subject', 'sci-fi', '15:40:00', '2025-10-18', 2, 'asgd asdsdj asdkhkjahd kajsd kasd', '2025-10-06 00:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `friendship_status` enum('Friend','Unfriend') DEFAULT 'Unfriend'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `name`, `description`, `picture`, `friendship_status`) VALUES
(1, 'Babygurls', 'Bed bros: Grey, nap chief; Black, night shift.', 'images/friends/babygurls-m.jpg', 'Friend'),
(2, 'Binx & Minx ', 'Ninja duo. Binx patrols, Minx snuggles', 'images/friends/binx-minx-f.jpg', 'Unfriend'),
(3, 'blahaj-shark', 'Blahaj – Couch shark. Guards snacks, bites deadlines.', 'images/friends/blahaj-shark.jpg', 'Friend'),
(4, 'Chai', 'When Santa needs class, he sends this guy.', 'images/friends/chai-m.jpg', 'Unfriend'),
(5, 'Dessie', 'She’s not a cat, but don’t tell her that.', 'images/friends/Desssie.jpg', 'Unfriend'),
(6, 'Honey', 'polite paws, criminal mind.', 'images/friends/honey.jpg', 'Unfriend'),
(7, 'Cyril', 'Couch-nap pro. Tongue out, zero worries.', 'images/friends/cyril-m.jpg', 'Unfriend'),
(8, 'Wilma', 'too handsome to be a cat, but accepted anyway.', 'images/friends/Wilma.jpg', 'Unfriend'),
(9, 'Rascal', 'Eyes closed, but always judging.', 'images/friends/rascal.jpg', 'Unfriend'),
(10, 'Levi', 'Slow blink boss. Tail scarf, nap expert.', 'images/friends/levi-m.jpg', 'Unfriend'),
(11, 'Raili', 'Doki’s secret girlfriend. Floof queen.', 'images/friends/raili-f.jpg', 'Unfriend'),
(12, 'Skittles', 'Tank boss. Slow till snacks… then turbo.', 'images/friends/skittles_turtle.jpg', 'Unfriend');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'ati', '12345'),
(2, 'sirdoki', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
