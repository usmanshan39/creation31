-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 09:26 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creation31`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `app_date` varchar(255) NOT NULL,
  `app_time` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `mobile`, `app_date`, `app_time`, `service_type`, `status`, `updated_at`) VALUES
(1, 'Mohsin', 'mohsin@gmail.com', '123454321123', '2023-06-05', '12:50', 'hair cut', 'Complete', '2023-06-16 07:05:20'),
(2, 'home', 'home1@gmail.com', '2312323232', '2023-06-14', '12:22', 'nails', 'Complete', '2023-06-16 07:24:46'),
(3, 'modal', 'modal@gmail.com', '23321232', '2023-06-26', '12:29', 'mackup', 'Pending', '2023-06-16 07:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `our_blogs`
--

CREATE TABLE `our_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `blog_desc` longtext NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` longtext NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_blogs`
--

INSERT INTO `our_blogs` (`id`, `title`, `blog_image`, `blog_desc`, `published`, `meta_title`, `meta_desc`, `updated_at`) VALUES
(1, 'one', '../uploads/foot-spa.jpg', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 'home-12', 'meta-desc', '2023-06-07 07:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`, `user_type`, `updated_at`) VALUES
(1, 'super', 'super@gmail.com', '$2y$10$CjmqvTVZwHFYxKM1jZ80pufEXtsU2l3enChV4OM4aN8vT3KMuCseC', 'super', '0000-00-00 00:00:00'),
(2, 'Admin', 'admin@gmail.com', '$2y$10$4fT1ADwjOTyOvvdIWBsRe.pAxFKtotsYPIckmw2woj5pzqRYWadW.', 'admin', '2023-05-29 12:45:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_blogs`
--
ALTER TABLE `our_blogs`
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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_blogs`
--
ALTER TABLE `our_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
