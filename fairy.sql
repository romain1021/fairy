-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2025 at 09:36 AM
-- Server version: 8.4.4
-- PHP Version: 8.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fairy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_stats`
--

CREATE TABLE `admin_stats` (
  `id` int NOT NULL,
  `metric_name` varchar(255) NOT NULL,
  `metric_value` int NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banned_words`
--

CREATE TABLE `banned_words` (
  `id` int NOT NULL,
  `word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int NOT NULL,
  `follower_id` int DEFAULT NULL,
  `followed_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `follower_id`, `followed_id`, `created_at`) VALUES
(1, 7, 8, '2025-04-16 20:07:51'),
(2, 7, 8, '2025-04-16 20:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `content` text NOT NULL,
  `media_url` varchar(255) DEFAULT NULL,
  `parent_post_id` int DEFAULT NULL,
  `likes` json DEFAULT NULL,
  `hashtags` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `content`, `media_url`, `parent_post_id`, `likes`, `hashtags`, `created_at`) VALUES
(41, 7, 'Salut', NULL, NULL, '[7]', NULL, '2025-04-14 06:36:45'),
(42, 7, '', NULL, NULL, '[7]', NULL, '2025-04-14 06:49:06'),
(43, 8, 'blablabli blah blah', NULL, NULL, '[7, 8]', NULL, '2025-04-14 07:49:18'),
(44, 7, 'test', NULL, NULL, '[7, 8]', NULL, '2025-04-14 14:01:42'),
(62, 7, 'coucou ça focntionne ?', NULL, NULL, '[7, 8]', NULL, '2025-04-15 14:14:54'),
(64, 7, 'banana', NULL, 62, NULL, NULL, '2025-04-15 19:33:40'),
(65, 7, 'banana', NULL, 62, NULL, NULL, '2025-04-15 19:34:19'),
(66, 7, 'banana', NULL, 62, NULL, NULL, '2025-04-15 19:34:21'),
(67, 7, 'Okay sympa', NULL, 64, NULL, NULL, '2025-04-15 19:35:46'),
(68, 7, 'Balerina', NULL, 67, NULL, NULL, '2025-04-15 19:40:13'),
(69, 7, 'nan mais ça vas pas', NULL, 68, '[7]', NULL, '2025-04-15 19:40:46'),
(70, 7, 'bla bla bli\r\n', NULL, 69, '[7]', NULL, '2025-04-15 19:45:56'),
(71, 7, 'encore un test', NULL, 41, NULL, NULL, '2025-04-15 19:51:12'),
(72, 7, 'Morgan makup', NULL, NULL, NULL, NULL, '2025-04-16 17:50:38'),
(73, 7, 'nan mais wesh', NULL, NULL, NULL, NULL, '2025-04-16 17:50:59'),
(74, 7, 'banana', NULL, NULL, NULL, NULL, '2025-04-16 17:53:06'),
(79, 7, 'Voici mon projet', '6800283f3c401.png', NULL, NULL, NULL, '2025-04-16 19:59:27'),
(80, 7, 'Et il sert a quoi ?', NULL, 79, NULL, NULL, '2025-04-16 20:00:15'),
(81, 7, 'mes vacances', '68002905e1f61.jpg', NULL, NULL, NULL, '2025-04-16 20:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `post_id` int DEFAULT NULL,
  `reason` text NOT NULL,
  `status` enum('pending','reviewed','resolved') DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bio` text,
  `profile_picture` varchar(255) DEFAULT NULL,
  `is_verified` tinyint(1) DEFAULT '0',
  `role` varchar(255) DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `bio`, `profile_picture`, `is_verified`, `role`, `created_at`) VALUES
(7, 'romain1021', 'rlombard2005@gmail.com', '$2y$12$p1MpitdbxJV/xn8tTUC7qejlWnZDTlkoH6L1JEu5Lkt.tHPHWaeoa', 'Elève de BTS SIO', NULL, 0, 'user', NULL),
(8, 'potato', 'ehuvfqhfvezihrf@liugezfirug.com', '$2y$12$I7boEkhWlmAz61vls89ktORDezY.xcW8hR0NI4.Zss8gA0jF962y2', 'bananahibcqzelbcze', NULL, 0, 'user', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_stats`
--
ALTER TABLE `admin_stats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `metric_name` (`metric_name`);

--
-- Indexes for table `banned_words`
--
ALTER TABLE `banned_words`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `word` (`word`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `follower_id` (`follower_id`),
  ADD KEY `followed_id` (`followed_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_post_id` (`parent_post_id`),
  ADD KEY `posts_ibfk_1` (`user_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_stats`
--
ALTER TABLE `admin_stats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banned_words`
--
ALTER TABLE `banned_words`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_ibfk_1` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `followers_ibfk_2` FOREIGN KEY (`followed_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`parent_post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
