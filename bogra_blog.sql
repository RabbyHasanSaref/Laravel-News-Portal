-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2024 at 05:07 AM
-- Server version: 8.0.40-0ubuntu0.22.04.1
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bogra_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint UNSIGNED NOT NULL,
  `Post_Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Post_Content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category_Id` int NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  `Feature` tinyint(1) NOT NULL,
  `Tranding` tinyint(1) NOT NULL,
  `Post_Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `Post_Title`, `Post_Content`, `Category_Id`, `Status`, `Feature`, `Tranding`, `Post_Image`, `create_by`, `created_at`, `updated_at`) VALUES
(30, 'Bangladeshi killed by Israeli airstrike in Lebanon', 'A Bangladeshi expatriate was killed in an Israeli airstrike in Lebanon\'s capital Beirut yesterday.\r\n\r\nMohammad Nizam, 31, died at 3:23pm in Hazmiye area of Beirut, according to a social media post of Bangladesh embassy in Lebanon.\r\n\r\nNizam entered a coffee shop on way to his work, the embassy said.\r\n\r\nHailed from Kosba upazila of Brahmanbaria, Nizam is son of Mohammad Abdul Quddus and Anwara Begum.\r\n\r\nThis is the first incident of a Bangladeshi being killed in Israel-Hezbollah war.\r\n\r\nAmbassador of Bangladesh to Lebanon Air Vice Marshal Javed Tanveer Khan expressed deep shock over the death of the remittance fighter.\r\n\r\nHe prayed for his departed soul and also extended condolences to his bereaved family members.', 23, 1, 0, 1, '1730610458-6727051a43fd3.jpg', '2', '2024-11-02 23:07:38', '2024-11-02 23:11:29'),
(31, 'Win the vote but still lose? Behold America\'s Electoral College', 'When political outsider Donald Trump defied polls and expectations to defeat Hillary Clinton in the 2016 US presidential election, he described the victory as \"beautiful.\"\r\n\r\nNot everyone saw it that way -- considering that Democrat Clinton had received nearly three million more votes nationally than her Republican rival. Non-Americans were particularly perplexed that the second-highest vote-getter would be the one crowned president.\r\n\r\nBut Trump had done what the US system requires: win enough individual states, sometimes by very narrow margins, to surpass the 270 Electoral College votes necessary to win the White House.\r\n\r\nNow, on the eve of the 2024 election showdown between Trump and Democrat Kamala Harris, the rules of this enigmatic and, to some, outmoded, system is coming back into focus.\r\n\r\nWhy an Electoral College?\r\n\r\nThe 538 members of the US Electoral College gather in their state\'s respective capitals after the quadrennial presidential election to designate the winner.', 22, 1, 1, 0, '1730610511-6727054fe4c1d.jpg', '2', '2024-11-02 23:08:31', '2024-11-02 23:13:07'),
(32, '\'Keep Kamala and carry on-ala!\' Harris tells comedy show \'Saturday Night Live\'', 'US Vice President Kamala Harris wrapped a day on the campaign trail Saturday with a surprise appearance on \"Saturday Night Live,\" mocking her presidential election rival Donald Trump on the sketch show.\r\n\r\nAppearing in the long-running series\'s \"cold open\" -- the sketch before the opening titles -- Harris appeared as her own reflection in a dressing room mirror, joining in good-natured mockery of her laughter and playing on her own name for laughs.\r\n\r\nHarris, who was appearing on SNL for the first time, has been portrayed by Maya Rudolph as \"America\'s fun aunt\' -- an interpretation that Harris herself has proudly shared on social media and gushed about on TV.\r\n\r\nThe New York studio broke into raucous applause as Harris came onscreen and immediately began making fun of Trump\'s recent photo op in a garbage truck, after he almost fell over as he was trying to get into it.\r\n\r\n\"I\'m here to remind you, you got this because you can do something you cannot do -- you can open doors,\" Harris joked.\r\n\r\nThe vice president giggled as Rudolph roasted her for her distinctive laugh, which Republicans refer to as a \"cackle.\"', 22, 1, 1, 0, '1730610612-672705b4dad09.jpg', '2', '2024-11-02 23:10:12', '2024-11-02 23:13:12'),
(33, 'Bangladesh skips India, reroutes global textile exports through Maldives', 'Bangladesh, the world\'s second-largest garment producer, has opted to bypass India and ship its textiles to global markets through the Maldives, hurting the cargo revenue prospects of India\'s airports and ports amid strained bilateral ties, reports Mint.\r\n\r\nThe Indian business newspaper, citing three people aware of the development, reports that Bangladesh was rerouting its textile exports to the Maldives by sea and then dispatching cargoes by air to its global customers, including H&M and Zara.\r\n\r\n\"Previously, Bangladeshi goods were shipped through Indian airports, but now they are rerouting shipments from other locations,\" Deepak Tiwari, managing director of MSC Agency (India) Pvt Ltd, told Mint over the phone.', 24, 1, 0, 1, '1730610666-672705ea5bfb2.jpg', '2', '2024-11-02 23:11:06', '2024-11-02 23:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(22, 'World News', '2024-10-31 01:48:57', '2024-10-31 01:48:57'),
(23, 'Politics', '2024-10-31 01:49:25', '2024-10-31 01:49:25'),
(24, 'Business', '2024-10-31 01:49:34', '2024-10-31 01:49:34'),
(25, 'Technology', '2024-10-31 01:50:14', '2024-10-31 01:50:14'),
(26, 'Science', '2024-10-31 01:50:26', '2024-10-31 01:50:26'),
(27, 'Health', '2024-10-31 01:50:35', '2024-10-31 01:50:35'),
(28, 'Entertainment', '2024-10-31 01:50:46', '2024-10-31 01:50:46'),
(29, 'Sports', '2024-10-31 01:51:05', '2024-10-31 01:51:05'),
(30, 'Lifestyle', '2024-10-31 01:51:18', '2024-10-31 01:51:18'),
(31, 'Education', '2024-10-31 01:51:29', '2024-10-31 01:51:29'),
(32, 'Travel', '2024-10-31 01:51:38', '2024-10-31 01:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_post_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_post_id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(10, 30, 'Rabby Hasan Saref', 'rabby@gmail.com', 'Good News', '2024-11-26 05:25:29', '2024-11-26 05:25:29'),
(11, 30, 'Rabby Hasan Saref', 'superadmin@gmail.com', 'How', '2024-11-26 05:54:06', '2024-11-26 05:54:06'),
(12, 30, 'Rabby Hasan Saref', 'tmss-ict@gmail.com', 'Good', '2024-11-26 05:54:20', '2024-11-26 05:54:20'),
(13, 30, 'Rabby Hasan Saref', 'mohon@gmail.com', 'Bad', '2024-11-26 05:54:35', '2024-11-26 05:54:35'),
(14, 30, 'Rabby Hasan Saref', 'admin@gmail.com', 'Fak', '2024-11-26 05:54:51', '2024-11-26 05:54:51'),
(15, 30, 'Rabby Hasan Saref', 'shihab@gmail.com', 'Wow', '2024-11-26 05:55:14', '2024-11-26 05:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `develop_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedIn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `app_name`, `address`, `phone`, `email`, `develop_by`, `facebook`, `linkedIn`, `instagram`, `youtube`, `created_at`, `updated_at`) VALUES
(6, 'Bogra Blog', 'Bogra, Bangladesh', 1319422583, 'info@bograblog.com', 'Bogra Blog. All Rights Reserved. Develop by TMSS ICT LTD', 'https://www.facebook.com/rabbyhasansaref.cse', 'https://bd.linkedin.com/in/rabby-hasan-saref', 'https://www.instagram.com/', 'https://www.youtube.com/@rabbyhasansaref', '2024-11-26 00:17:08', '2024-11-26 22:52:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_29_044442_create_categories_table', 1),
(6, '2024_10_29_051020_create_blog_posts_table', 1),
(7, '2024_11_02_062135_create_subscribers_table', 2),
(8, '2024_11_26_041945_create_general_settings_table', 3),
(9, '2024_11_26_053354_general_setting', 4),
(10, '2024_11_26_094902_create_comments_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(22, 'rabbyhasansaref83@gmail.com', '2024-11-02 01:45:07', '2024-11-02 01:45:07'),
(23, 'superadmin@gmail.com', '2024-11-25 23:16:39', '2024-11-25 23:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', NULL, '$2y$10$wxEbDIwRYVWKdPYm3wM2hOm42/pu13HNw6sL6csSTzY2ksAYIZ0ce', NULL, '2024-10-29 21:46:04', '2024-10-29 21:46:04'),
(2, ' Admin', 'admin@gmail.com', NULL, '$2y$10$1HQQi6iU/tDNMQfrRQJmbuM4fHx5SQP/8JFlCwgErdGlvyY1MCTie', NULL, '2024-10-29 21:46:04', '2024-10-29 21:46:04'),
(3, 'Rabby Hasan Saref', 'rabbyhasansaref83@gmail.com', NULL, '$2y$10$2dRWfZJGbg0t2Z5nXq9JVu1yvytckyHv8BpzgUy1k/GNJtuvNP5ka', NULL, '2024-10-29 21:46:04', '2024-10-29 21:46:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
