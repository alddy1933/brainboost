-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 04, 2024 at 03:54 PM
-- Server version: 10.3.39-MariaDB-1:10.3.39+maria~ubu2004
-- PHP Version: 8.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brainboost`
--

-- --------------------------------------------------------

--
-- Table structure for table `bb_user`
--

CREATE TABLE `bb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL DEFAULT 'default_profile.svg',
  `password` text DEFAULT NULL,
  `gender` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `roles` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bb_user`
--

INSERT INTO `bb_user` (`user_id`, `username`, `full_name`, `email`, `img`, `password`, `gender`, `birth`, `roles`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'admin@dmin.com', 'default_profile.svg', '$2y$10$uZKmuLltBaYVHtbpLXsgluSxNJNsxEyro9hdiRMHOB0yo.sJPZEYi', 'Laki-Laki', '2024-07-27', 'admin', '2024-07-27 06:00:55', '2024-08-03 16:56:21'),
(2, 'arthur_leywin', 'Arthur Leywin', 'arthur@admin.com', 'default_profile.svg', '$2y$10$nTp9bWZSmkXOgvnd86/NK.X6wDn0NR.lsRI/JjNihEQ2CL1U3lpn.', 'Laki-Laki', '2024-07-27', 'user', '2024-07-27 06:01:42', '2024-08-03 16:55:05'),
(3, 'asd', 'sadaea', '1212-12-12', '1722711825_c355f59b8b9f50d22e74.jpg', '$2y$10$uZKmuLltBaYVHtbpLXsgluSxNJNsxEyro9hdiRMHOB0yo.sJPZEYi', 'Perempuan', '1212-12-12', 'user', '2024-08-03 15:46:49', '2024-08-03 19:03:45'),
(4, 'jrione', 'jrione', 'jrione', 'default_profile.svg', '$2y$10$UW7OeCNXAom4FRsfYNKmCugnmZKziXFKnxGBMTKBaKWBLteefon1q', NULL, NULL, 'user', '2024-08-04 10:50:58', '2024-08-04 10:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `icon` text DEFAULT NULL,
  `icon_bg_colour` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `slug`, `icon`, `icon_bg_colour`, `created_at`, `updated_at`) VALUES
(1, 'Sport', 'sport', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon icon-tabler icons-tabler-outline icon-tabler-bike\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\" /><path d=\"M5 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0\" /><path d=\"M19 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0\" /><path d=\"M12 19l0 -4l-3 -3l5 -4l2 3l3 0\" /><path d=\"M17 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0\" /></svg>', '#d63939', '2024-08-03 07:57:35', '2024-08-03 08:36:12'),
(2, 'Music', 'music', '<svg  xmlns=\"http://www.w3.org/2000/svg\"  width=\"24\"  height=\"24\"  viewBox=\"0 0 24 24\"  fill=\"none\"  stroke=\"currentColor\"  stroke-width=\"2\"  stroke-linecap=\"round\"  stroke-linejoin=\"round\"  class=\"icon icon-tabler icons-tabler-outline icon-tabler-music\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M3 17a3 3 0 1 0 6 0a3 3 0 0 0 -6 0\" /><path d=\"M13 17a3 3 0 1 0 6 0a3 3 0 0 0 -6 0\" /><path d=\"M9 17v-13h10v13\" /><path d=\"M9 8h10\" /></svg>', '#ae3ec9', '2024-08-03 07:57:41', '2024-08-03 08:36:15'),
(3, 'Nature', 'nature', '<svg  xmlns=\"http://www.w3.org/2000/svg\"  width=\"24\"  height=\"24\"  viewBox=\"0 0 24 24\"  fill=\"none\"  stroke=\"currentColor\"  stroke-width=\"2\"  stroke-linecap=\"round\"  stroke-linejoin=\"round\"  class=\"icon icon-tabler icons-tabler-outline icon-tabler-leaf\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M5 21c.5 -4.5 2.5 -8 7 -10\" /><path d=\"M9 18c6.218 0 10.5 -3.288 11 -12v-2h-4.014c-9 0 -11.986 4 -12 9c0 1 0 3 2 5h3z\" /></svg>', '#0ca678', '2024-08-03 07:57:49', '2024-08-03 08:36:18'),
(4, 'History', 'history', '<svg  xmlns=\"http://www.w3.org/2000/svg\"  width=\"24\"  height=\"24\"  viewBox=\"0 0 24 24\"  fill=\"none\"  stroke=\"currentColor\"  stroke-width=\"2\"  stroke-linecap=\"round\"  stroke-linejoin=\"round\"  class=\"icon icon-tabler icons-tabler-outline icon-tabler-building-monument\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M8 18l2 -13l2 -2l2 2l2 13\" /><path d=\"M5 21v-3h14v3\" /><path d=\"M3 21l18 0\" /></svg>', '#d6336c', '2024-08-03 07:57:56', '2024-08-03 08:36:22'),
(5, 'Geography', 'geography', '<svg  xmlns=\"http://www.w3.org/2000/svg\"  width=\"24\"  height=\"24\"  viewBox=\"0 0 24 24\"  fill=\"none\"  stroke=\"currentColor\"  stroke-width=\"2\"  stroke-linecap=\"round\"  stroke-linejoin=\"round\"  class=\"icon icon-tabler icons-tabler-outline icon-tabler-world\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0\" /><path d=\"M3.6 9h16.8\" /><path d=\"M3.6 15h16.8\" /><path d=\"M11.5 3a17 17 0 0 0 0 18\" /><path d=\"M12.5 3a17 17 0 0 1 0 18\" /></svg>', '#4263eb', '2024-08-03 07:58:03', '2024-08-03 08:36:26'),
(6, 'Math', 'math', '<svg  xmlns=\"http://www.w3.org/2000/svg\"  width=\"24\"  height=\"24\"  viewBox=\"0 0 24 24\"  fill=\"none\"  stroke=\"currentColor\"  stroke-width=\"2\"  stroke-linecap=\"round\"  stroke-linejoin=\"round\"  class=\"icon icon-tabler icons-tabler-outline icon-tabler-math\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M19 5h-7l-4 14l-3 -6h-2\" /><path d=\"M14 13l6 6\" /><path d=\"M14 19l6 -6\" /></svg>', '#f59f00', '2024-08-03 07:58:10', '2024-08-03 08:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `events_id` int(11) NOT NULL,
  `events_name` varchar(50) DEFAULT NULL,
  `expired_at` datetime DEFAULT NULL,
  `points_up` int(11) DEFAULT NULL,
  `publish` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`events_id`, `events_name`, `expired_at`, `points_up`, `publish`) VALUES
(1, 'Halloween', '2024-08-04 23:11:07', 2, 'N'),
(2, 'New Year', '2024-08-23 01:27:00', 3, 'N'),
(3, 'End Year', '2024-08-10 01:28:00', 4, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `question_taken`
--

CREATE TABLE `question_taken` (
  `question_taken_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `question_taken`
--

INSERT INTO `question_taken` (`question_taken_id`, `user_id`, `question_id`) VALUES
(1, 3, 101),
(2, 3, 102),
(3, 3, 103),
(4, 3, 104),
(5, 4, 105);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answer`
--

CREATE TABLE `quiz_answer` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `is_correct` char(1) NOT NULL DEFAULT 'N',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `quiz_answer`
--

INSERT INTO `quiz_answer` (`answer_id`, `question_id`, `content`, `is_correct`, `created_at`, `updated_at`) VALUES
(14, 101, 'Ottawa', 'Y', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(15, 101, 'Toronto', 'N', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(16, 101, 'Vancouver', 'N', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(17, 101, 'Montreal', 'N', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(18, 102, 'Nile', 'Y', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(19, 102, 'Amazon', 'N', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(20, 102, 'Yangtze', 'N', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(21, 102, 'Mississippi', 'N', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(22, 103, 'Sahara', 'Y', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(23, 103, 'Gobi', 'N', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(24, 103, 'Arabian', 'N', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(25, 103, 'Kalahari', 'N', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(26, 104, 'Mount Everest', 'Y', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(27, 104, 'K2', 'N', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(28, 104, 'Kangchenjunga', 'N', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(29, 104, 'Lhotse', 'N', '2024-08-03 09:23:19', '2024-08-03 09:23:19'),
(34, 105, '21', 'Y', '2024-08-03 20:35:20', '2024-08-03 20:35:20'),
(35, 105, '19', 'N', '2024-08-03 20:35:20', '2024-08-03 20:35:20'),
(36, 105, '22', 'N', '2024-08-03 20:35:20', '2024-08-03 20:35:20'),
(37, 105, '39', 'N', '2024-08-03 20:35:20', '2024-08-03 20:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE `quiz_question` (
  `question_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `img` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`question_id`, `category_id`, `user_id`, `content`, `img`, `created_at`, `updated_at`) VALUES
(101, 5, 2, 'What is the capital city of Canada', NULL, '2024-08-03 09:23:19', '2024-08-03 20:41:02'),
(102, 5, 2, 'Which river is the longest in the world', NULL, '2024-08-03 09:23:19', '2024-08-03 20:41:05'),
(103, 5, 2, 'What is the largest desert in the world', NULL, '2024-08-03 09:23:19', '2024-08-03 20:41:08'),
(104, 5, 2, 'What is the highest mountain in the world', NULL, '2024-08-03 09:23:19', '2024-08-03 20:41:11'),
(105, 6, 3, 'What\'s 9+10?', '1722717320_729f3ddccb5eddb53ece.jpg', '2024-08-03 20:35:20', '2024-08-03 20:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_taken`
--

CREATE TABLE `quiz_taken` (
  `quiz_taken_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `date_taken` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `quiz_taken`
--

INSERT INTO `quiz_taken` (`quiz_taken_id`, `user_id`, `category_id`, `score`, `date_taken`) VALUES
(1, 2, 5, 1, '0000-00-00'),
(2, 2, 5, 1, '2024-08-03'),
(3, 2, 5, 3, '2024-08-03'),
(4, 3, 2, 0, '2024-08-03'),
(5, 3, 5, 4, '2024-08-03'),
(6, 3, 2, 0, '2024-08-03'),
(7, 3, 4, 0, '2024-08-03'),
(8, 3, 6, 0, '2024-08-03'),
(9, 3, 2, 0, '2024-08-03'),
(10, 3, 5, 4, '2024-08-03'),
(11, 3, 2, 0, '2024-08-03'),
(12, 3, 5, 4, '2024-08-03'),
(13, 3, 5, 4, '2024-08-03'),
(14, 3, 4, 0, '2024-08-04'),
(15, 4, 2, 0, '2024-08-04'),
(16, 4, 2, 0, '2024-08-04'),
(17, 4, 2, 0, '2024-08-04'),
(18, 4, 2, 0, '2024-08-04'),
(19, 4, 2, 0, '2024-08-04'),
(20, 4, 2, 0, '2024-08-04'),
(21, 4, 2, 0, '2024-08-04'),
(22, 4, 6, 4, '2024-08-04'),
(23, 4, 2, 0, '2024-08-04'),
(24, 4, 2, 0, '2024-08-04'),
(25, 4, 2, 0, '2024-08-04'),
(26, 4, 2, 0, '2024-08-04'),
(27, 4, 2, 0, '2024-08-04'),
(28, 4, 2, 0, '2024-08-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bb_user`
--
ALTER TABLE `bb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`events_id`);

--
-- Indexes for table `question_taken`
--
ALTER TABLE `question_taken`
  ADD PRIMARY KEY (`question_taken_id`);

--
-- Indexes for table `quiz_answer`
--
ALTER TABLE `quiz_answer`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `FK_quiz_question_TO_quiz_answer` (`question_id`);

--
-- Indexes for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `FK_category_TO_quiz_question` (`category_id`),
  ADD KEY `FK_bb_user_TO_quiz_question` (`user_id`);

--
-- Indexes for table `quiz_taken`
--
ALTER TABLE `quiz_taken`
  ADD PRIMARY KEY (`quiz_taken_id`),
  ADD KEY `FK_bb_user_TO_quiz_taken` (`user_id`),
  ADD KEY `FK_category_TO_quiz_taken` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bb_user`
--
ALTER TABLE `bb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `question_taken`
--
ALTER TABLE `question_taken`
  MODIFY `question_taken_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quiz_answer`
--
ALTER TABLE `quiz_answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `quiz_taken`
--
ALTER TABLE `quiz_taken`
  MODIFY `quiz_taken_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quiz_answer`
--
ALTER TABLE `quiz_answer`
  ADD CONSTRAINT `FK_quiz_question_TO_quiz_answer` FOREIGN KEY (`question_id`) REFERENCES `quiz_question` (`question_id`);

--
-- Constraints for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD CONSTRAINT `FK_bb_user_TO_quiz_question` FOREIGN KEY (`user_id`) REFERENCES `bb_user` (`user_id`),
  ADD CONSTRAINT `FK_category_TO_quiz_question` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `quiz_taken`
--
ALTER TABLE `quiz_taken`
  ADD CONSTRAINT `FK_bb_user_TO_quiz_taken` FOREIGN KEY (`user_id`) REFERENCES `bb_user` (`user_id`),
  ADD CONSTRAINT `FK_category_TO_quiz_taken` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `bb_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
