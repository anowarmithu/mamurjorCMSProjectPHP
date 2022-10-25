-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 06:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `code` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `code`, `created_at`) VALUES
(1, 'Anowar', '101', '2022-10-21 16:07:30'),
(4, 'Hosen', 'dddd', '2022-10-22 04:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `short_description` longtext NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(300) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `short_description`, `description`, `image`, `category_id`, `user_id`, `status`, `created_at`) VALUES
(1, 'Unde magnam et magni Id voluptates enim  While we nvv', 'Id voluptates enim  While we need some time to understand the extent of damage Cyclone Sitrang has caused, I assume that the overall damage would be much less than previous such calamities. I have learnt from the Bangladesh Water Development Board', 'Id voluptates enim  While we need some time to understand the extent of damage Cyclone Sitrang has caused, I assume that the overall damage would be much less than previous such calamities. I have learnt from the Bangladesh Water Development Board (BWDB) that Sitrang could not do much damage to the beribadhs (embankments) and polders in the affected areas. This is because the polders in this region are in a relatively good condition, compared to those in the western and southwestern areas of the country. And perhaps the wind speed of the cyclone was not as fast as feared at first. If the cyclone had made its landfall in the southwestern coastal areas, it would have caused more damage. So, we could say we were somewhat lucky this time. ', '', 1, 0, 'active', '2022-10-25 15:56:43'),
(3, 'Et sit esse tenetur', 'Voluptates nihil et ', '', '', 4, 0, 'Inactive', '2022-10-25 15:10:53'),
(4, 'Quis ut nulla maiore', 'Ut sit sint molestia', 'vvvv', '', 1, 0, 'active', '2022-10-25 15:56:51'),
(5, 'Error aspernatur rem', 'Officia adipisci ass', '', '', 1, 0, 'Active', '2022-10-25 15:16:00'),
(6, 'Eos sapiente ea duc', 'Deleniti unde aut id', '', '', 4, 0, 'Active', '2022-10-25 15:17:38'),
(7, 'gggg', 'gggg', '', '', 1, 0, 'Active', '2022-10-25 15:23:30'),
(8, 'ggsgsd', 'gsgsdg', '', '', 1, 0, 'Active', '2022-10-25 15:26:55'),
(9, 'ddd', 'ddd', '', '', 1, 0, 'Active', '2022-10-25 15:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'anowar', 'anowar@gmail.com', '12345', '2022-10-19 12:54:31'),
(2, 'mithu', 'mithu@gmail.com', '1234', '2022-10-19 13:37:36'),
(3, 'testdd', 'test@test.com', '7777', '2022-10-19 14:12:26'),
(16, 'anowarhosenmithu', 'anowarhosenmithu@gmail.com', '123456', '2022-10-21 03:52:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
