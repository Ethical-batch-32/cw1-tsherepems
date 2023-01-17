-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 05:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemba`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `Id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`Id`, `name`, `title`, `images`, `created_at`, `uid`) VALUES
(38, 'Nikesh Uprety', 'Welcome to our blogging site! ', '3.jpg', '2022-12-30 17:04:38', 1),
(49, 'Nikesh Uprety', 'Welcome to our blogging site!', 'hyyy.jpg', '2022-12-30 17:04:44', 0),
(50, 'Sonu Nayak', 'Welcome to our blogging site! ', 'IMG_20221031_114825.jpg', '2022-12-30 17:04:51', 0),
(53, 'Nikesh Uprety', 'Hello this from the ipad ', '183F6952-6473-4FBD-A223-CAD463DCB901.jpeg', '2022-12-30 17:01:48', 0),
(56, 'Nikesh Uprety', 'THIS IS A NEW POST.', 'pemba.jpg', '2022-12-30 17:05:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `up_image`
--

CREATE TABLE `up_image` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `up_image`
--

INSERT INTO `up_image` (`id`, `name`, `image_name`, `created_at`) VALUES
(47, 'Nikesh Uprety', 'uicon.jpg', '2023-01-17 15:54:33'),
(48, 'Pemba Don', 'img-02.jpg', '2023-01-17 15:55:05'),
(50, 'Nikesh Uprety', 'uiconn.png', '2023-01-17 16:09:52'),
(51, 'Nikesh Uprety', 'skrill pin.png', '2023-01-17 16:29:19'),
(52, 'Nikesh Uprety', '269802302_1061272754442082_7639577825518391943_n.jpg', '2023-01-17 16:34:06'),
(54, 'Pembba', '269802302_1061272754442082_7639577825518391943_n.jpg', '2023-01-17 16:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `Id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`Id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Nikesh Uprety', 'upretynikesh123@gmail.com', '1234', 'user'),
(17, 'Pembba', 'pemba@gmail.com', '111', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `up_image`
--
ALTER TABLE `up_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `up_image`
--
ALTER TABLE `up_image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
