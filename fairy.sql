-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2025 at 03:54 PM
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
(21, 4, 'Quand tu vois un mème de \"Distracted Boyfriend\" mais avec des personnages de Marvel...', 'https://link-to-image1.com', NULL, '{\"likes\": 128}', '{\"meme\": true, \"marvel\": true, \"distracted_boyfriend\": true}', '2025-04-10 07:15:00'),
(22, 1, 'Le \"Drake Hotline Bling\" quand tu choisis de ne pas regarder un spoiler de série...', 'https://link-to-image2.com', NULL, '{\"likes\": 356}', '{\"meme\": true, \"drake\": true, \"hotline_bling\": true}', '2025-04-10 07:20:00'),
(23, 1, 'Quand tu utilises le mème \"Is This a Pigeon?\" mais avec des références à Star Wars...', 'https://link-to-image3.com', NULL, '{\"likes\": 245}', '{\"meme\": true, \"star_wars\": true, \"is_this_a_pigeon\": true}', '2025-04-10 07:25:00'),
(24, 1, 'Le moment où tu réalises que \"Pepe the Frog\" a traversé toutes les générations de mèmes...', 'https://link-to-image4.com', NULL, '{\"likes\": 678}', '{\"meme\": true, \"nostalgie\": true, \"pepe_the_frog\": true}', '2025-04-10 07:30:00'),
(25, 1, 'La transformation d’un mème \"Mocking SpongeBob\" sur TikTok...', 'https://link-to-image5.com', NULL, '{\"likes\": 132}', '{\"meme\": true, \"mocking\": true, \"spongebob\": true}', '2025-04-10 07:35:00'),
(26, 1, 'Quand tu te rappelles des mèmes \"Success Kid\" de 2007...', 'https://link-to-image6.com', NULL, '{\"likes\": 540}', '{\"meme\": true, \"old_school\": true, \"success_kid\": true}', '2025-04-10 07:40:00'),
(27, 1, 'Quand le mème \"This is Fine\" correspond à ta journée...', 'https://link-to-image7.com', NULL, '{\"likes\": 289}', '{\"meme\": true, \"calme\": true, \"this_is_fine\": true}', '2025-04-10 07:45:00'),
(28, 1, 'Quand tu vois un mème \"Change My Mind\" mais avec une opinion de \"Harry Potter\"...', 'https://link-to-image8.com', NULL, '{\"likes\": 412}', '{\"meme\": true, \"harry_potter\": true, \"change_my_mind\": true}', '2025-04-10 07:50:00'),
(29, 1, 'Quand tu utilises \"Woman Yelling at a Cat\" pour expliquer une scène de Game of Thrones...', 'https://link-to-image9.com', NULL, '{\"likes\": 310}', '{\"meme\": true, \"game_of_thrones\": true, \"woman_yelling_at_cat\": true}', '2025-04-10 07:55:00'),
(30, 1, 'Quand tu partages un mème \"Expanding Brain\" en comparant des films de Marvel...', 'https://link-to-image10.com', NULL, '{\"likes\": 233}', '{\"meme\": true, \"marvel\": true, \"expanding_brain\": true}', '2025-04-10 08:00:00'),
(31, 1, 'Le mème \"Two Buttons\" appliqué aux choix dans les films de Star Wars...', 'https://link-to-image11.com', NULL, '{\"likes\": 156}', '{\"meme\": true, \"star_wars\": true, \"two_buttons\": true}', '2025-04-10 08:05:00'),
(32, 1, 'Le mème \"Arthur Fist\" utilisé pour exprimer l’agacement à propos de la fin de Lost...', 'https://link-to-image12.com', NULL, '{\"likes\": 567}', '{\"lost\": true, \"meme\": true, \"arthur_fist\": true}', '2025-04-10 08:10:00'),
(33, 1, 'Quand tu vois un mème \"Gru’s Plan\" pour expliquer la série Breaking Bad...', 'https://link-to-image13.com', NULL, '{\"likes\": 432}', '{\"meme\": true, \"grus_plan\": true, \"breaking_bad\": true}', '2025-04-10 08:15:00'),
(34, 1, 'Quand tu utilises \"Drake Approval\" pour choisir entre deux séries Netflix...', 'https://link-to-image14.com', NULL, '{\"likes\": 312}', '{\"meme\": true, \"netflix\": true, \"drake_approval\": true}', '2025-04-10 08:20:00'),
(35, 1, 'Quand tu mets un \"Mocking SpongeBob\" pour décrire un argument de fandom de Star Wars...', 'https://link-to-image15.com', NULL, '{\"likes\": 198}', '{\"meme\": true, \"fandom\": true, \"star_wars\": true, \"mocking_spongebob\": true}', '2025-04-10 08:25:00'),
(36, 1, 'Le mème \"Distracted Boyfriend\" mais avec des personnages de The Office...', 'https://link-to-image16.com', NULL, '{\"likes\": 500}', '{\"meme\": true, \"the_office\": true, \"distracted_boyfriend\": true}', '2025-04-10 08:30:00'),
(37, 1, 'Quand tu vois le mème \"Hide the Pain Harold\" pour exprimer tes émotions après avoir vu le dernier épisode de Friends...', 'https://link-to-image17.com', NULL, '{\"likes\": 290}', '{\"meme\": true, \"friends\": true, \"hide_the_pain_harold\": true}', '2025-04-10 08:35:00'),
(38, 1, 'Quand tu utilises \"Expanding Brain\" pour décrire les différentes phases de Star Wars...', 'https://link-to-image18.com', NULL, '{\"likes\": 175}', '{\"meme\": true, \"star_wars\": true, \"expanding_brain\": true}', '2025-04-10 08:40:00'),
(39, 1, 'Le mème \"Surprised Pikachu\" utilisé après avoir vu un twist dans un film de Marvel...', 'https://link-to-image19.com', NULL, '{\"likes\": 600}', '{\"meme\": true, \"marvel\": true, \"surprised_pikachu\": true}', '2025-04-10 08:45:00'),
(40, 1, 'Quand tu utilises \"I’m the Captain Now\" pour décrire ta montée en grade dans ton fandom...', 'https://link-to-image20.com', NULL, '{\"likes\": 135}', '{\"meme\": true, \"fandom\": true, \"i_m_the_captain_now\": true}', '2025-04-10 08:50:00');

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
(1, 'Romainqdqd', 'TEST@TESTMAIL.COM', '$2y$13$gKRIf.qe38zmhAkcY2qV7e8CSdF8ncNkylzutbuM3OGa4uVJ44k96', 'oruebvseroubveorv', NULL, 0, 'user', NULL),
(2, 'Romain', 'rlombard2005@gmail.com', '$2y$13$vjRpVPUb4ivSCjTtBJlDc.2K9dwRRmuRl7bWU0dfuNp8zs7gAeZXa', 'ezdqzedqdqezd', NULL, 0, 'user', NULL),
(4, 'romain1021', 'rlombard333\"2005@gmail.com', '$2y$13$Lp4Gc4iuRT87XDBOBBNoY.2pv4J2dJI2Yg3OGlZkZI60bJCxphSA6', 'je ne sais pas', NULL, 0, 'user', NULL),
(5, 'tana', 'tanamail@mail.com', '$2y$13$UzmE6f934KmnBAvYlrSP7uYmyG8k9fqpDv8V8fHDPy9IoTRIycTwK', 'nonnnnn', NULL, 0, 'user', NULL),
(6, 'romainlebest', 'bestromain@mail.com', '$2y$12$7sDrgpNaMDoHRlC4aG9Jcul9wtokEmLiu.UYz/LLalTRBltrxNVLC', 'isubvpeirbfpzeçubf', NULL, 0, 'user', NULL);

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
  ADD KEY `user_id` (`user_id`),
  ADD KEY `parent_post_id` (`parent_post_id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
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
