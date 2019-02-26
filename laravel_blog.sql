-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2019 at 04:25 PM
-- Server version: 5.7.25-0ubuntu0.18.10.2
-- PHP Version: 7.2.15-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_status` tinyint(1) DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL,
  `viewed` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `description_short`, `description`, `image`, `image_status`, `meta_title`, `meta_description`, `meta_keyword`, `published`, `viewed`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 'სიახლე ნომერი 1', 'siakhle-nomeri-1-1201192111', '<p>სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა,&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა.</p>', '<p>სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა,&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა.&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა,&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა.&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა,&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა&nbsp;სიახლის მოკლე აღწერა.</p>', NULL, NULL, 'მეტა სათაური', 'მეტა აღწერა', 'ტეგი 1, ტეგი 2, ტეგი 3', 1, NULL, 1, NULL, '2019-01-12 17:11:45', '2019-01-12 17:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `published` tinyint(4) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `parent_id`, `published`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(2, 'პირველი', 'pirveli', 0, 1, NULL, NULL, '2019-01-12 09:01:03', '2019-01-12 09:01:03'),
(3, 'მეორე', 'meore', 0, 1, NULL, NULL, '2019-01-12 09:02:12', '2019-01-12 09:02:12'),
(4, 'მესამე', 'mesame', 0, 1, NULL, NULL, '2019-01-12 09:02:20', '2019-01-12 09:02:20'),
(5, 'ქვე კატეგორია პირველი', 'kve-kategoria-pirveli', 4, 1, NULL, NULL, '2019-01-12 09:03:00', '2019-01-12 09:03:00'),
(6, 'ქვე კატეგორია მეორე', 'kve-kategoria-meore', 4, 1, NULL, NULL, '2019-01-12 09:03:09', '2019-01-12 09:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `categoryables`
--

CREATE TABLE `categoryables` (
  `category_id` int(11) NOT NULL,
  `categoryable_id` int(11) NOT NULL,
  `categoryable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoryables`
--

INSERT INTO `categoryables` (`category_id`, `categoryable_id`, `categoryable_type`) VALUES
(2, 1, 'App\\Article');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_03_191332_create_categories_table', 1),
(4, '2019_01_08_170638_create_articles_table', 1),
(5, '2019_01_10_085509_create_categoryable_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'Admin', 'admin@domain.ge', NULL, '$2y$10$FjzdPGUc3X1VKRwFy63ePOAZhvRzepcloeF.KlnYkmsbY/DogRcue', 'xPq69EFT9XAPkGLNTggkhgx6vX64lRhntfUNnprxf99izfGk21RJyO6zbH2r', '2019-01-14 16:07:29', '2019-02-26 07:51:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
