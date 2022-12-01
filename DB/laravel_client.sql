-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 05:51 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_client`
--

-- --------------------------------------------------------

--
-- Table structure for table `attend_lists`
--

CREATE TABLE `attend_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `register_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_categories`
--

CREATE TABLE `group_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_categories`
--

INSERT INTO `group_categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Golf', 'golf', '2022-10-24 09:03:38', '2022-10-24 09:03:38', NULL),
(2, 'Fishing', 'fishing', '2022-10-24 09:05:32', '2022-10-24 09:05:32', NULL),
(3, 'Networking', 'networking', '2022-10-24 09:05:32', '2022-10-24 09:05:32', NULL),
(4, 'Messaging', 'messaging', '2022-10-24 09:05:32', '2022-10-24 09:05:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_lists`
--

CREATE TABLE `group_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `participate_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `participate_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `participate_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `participate_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `participate_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `participate_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `participate_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `participate_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `Attend_status` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_lists`
--

INSERT INTO `group_lists` (`id`, `participate_1`, `participate_2`, `participate_3`, `participate_4`, `participate_5`, `participate_6`, `participate_7`, `participate_8`, `category_id`, `subcategory_id`, `Attend_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, '16', '19', NULL, NULL, NULL, NULL, NULL, NULL, 1, 8, 0, NULL, '2022-10-27 04:11:01', '2022-10-28 13:18:17'),
(3, '19', '16', NULL, NULL, NULL, NULL, NULL, NULL, 1, 8, 0, NULL, '2022-10-27 05:51:38', '2022-10-28 00:21:18'),
(4, '12', '14', NULL, NULL, NULL, NULL, NULL, NULL, 2, 6, 0, NULL, '2022-10-28 00:36:58', '2022-10-28 00:36:58'),
(5, '21', '14', NULL, NULL, NULL, NULL, NULL, NULL, 2, 8, 0, NULL, '2022-10-28 00:37:31', '2022-10-28 00:47:33'),
(6, '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 6, 0, NULL, '2022-10-28 00:57:10', '2022-10-28 00:57:10'),
(11, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 8, 0, NULL, '2022-10-28 01:19:27', '2022-10-28 01:53:50'),
(13, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 8, 0, NULL, '2022-10-28 01:45:39', '2022-10-28 01:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `group_sub_categories`
--

CREATE TABLE `group_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_sub_categories`
--

INSERT INTO `group_sub_categories` (`id`, `name`, `slug`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'A', 'a', 2, '2022-10-25 00:48:56', NULL, NULL),
(7, 'A', 'a', 1, '2022-10-25 00:50:25', NULL, NULL),
(8, 'B', 'b', 2, '2022-10-25 02:50:21', NULL, NULL),
(9, 'C', 'c', 2, '2022-10-27 06:13:25', NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_10_17_113332_create_wp_evr_attendee_table', 3),
(7, '2022_10_24_061817_create_group_categories_table', 4),
(8, '2022_10_24_061841_create_group_sub_categories_table', 4),
(12, '2022_10_25_094331_create_registers_table', 5),
(14, '2022_10_26_064225_create_attend_lists_table', 7),
(16, '2022_10_28_085420_create_payments_table', 8),
(17, '2022_10_28_150021_create_prices_table', 9),
(18, '2022_10_28_150606_add_column_to_payments_table', 9);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `register_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `register_id`, `transaction_id`, `deleted_at`, `created_at`, `updated_at`, `price_id`) VALUES
(1, 12, '0', NULL, '2022-10-28 13:54:09', NULL, 0),
(2, 12, '0', NULL, '2022-10-28 13:57:50', NULL, 0),
(3, 12, '0', NULL, '2022-10-28 13:59:46', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 575.00, '2022-10-28 15:18:49', '2022-10-28 14:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `badge_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr_line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr_line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_conf_first` tinyint(1) NOT NULL DEFAULT 2,
  `company_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `if_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emerg_cont_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emerg_cont_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_Cat_Id` bigint(20) UNSIGNED NOT NULL,
  `Attend_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golfHandicup` int(11) DEFAULT NULL,
  `rentalClubs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `messagePreferredTime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wedWelReception` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `thursdayBreakfast` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `thursdayLuncheon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `thursdayDinner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `spouseDinnerTicket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `spouseFirstName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouseLastName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fridayBreakfast` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `dietaryRestrictions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_amount` double(8,2) DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `card_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `first_name`, `slug`, `last_name`, `badge_name`, `email`, `second_email`, `org_name`, `job_title`, `addr_line1`, `addr_line2`, `city`, `state`, `country`, `zip`, `mobile`, `office_phone`, `is_conf_first`, `company_type`, `if_other`, `emerg_cont_name`, `emerg_cont_phone`, `group_Cat_Id`, `Attend_status`, `golfHandicup`, `rentalClubs`, `messagePreferredTime`, `wedWelReception`, `thursdayBreakfast`, `thursdayLuncheon`, `thursdayDinner`, `spouseDinnerTicket`, `spouseFirstName`, `spouseLastName`, `fridayBreakfast`, `dietaryRestrictions`, `payment_method`, `payment_amount`, `payment_status`, `card_name`, `card_number`, `deleted_at`, `created_at`, `updated_at`) VALUES
(12, 'Swaoal', 'swadip', 'Hossien', 'swadip', 'jahidmy@gmail.com', 'admin1@gmail.com', 'it', 'Affiliater', '230/a', '240/a', 'zxcz', 'zcxc', 'Bangladesh', '1206', '654535434535', '7655453453345', 0, 'Other', 'bdg', 'ghjgjgj', '3453545', 2, 'Fishing', 24, 'I will bring my own', '8:00 AM- 10:00 AM', '1', '1', '1', '1', '2', 'sada', NULL, '1', 'sdcs', 'offline', 34.00, '2', NULL, NULL, NULL, '2022-10-26 06:19:51', '2022-10-28 00:36:58'),
(14, 'Swadip Dutta', 'raj', 'dip', 'raj', 'admin@gmail.com', 'admin@gmail.com', 'it', 'Affiliater', '230/a', '240/a', 'zxcz', 'zcxc', 'Bangladesh', '44553', '654535434535', '7655453453345', 0, 'Media', 'bdg', 'ghjgjgj', '3453545', 2, 'Fishing', 23, 'I will bring my own', '8:00 AM- 10:00 AM', '1', '1', '1', '1', '2', 'scs', NULL, '1', NULL, 'offline', 340.00, '2', NULL, NULL, '2022-10-28 00:36:58', '2022-10-26 06:24:12', '2022-10-28 00:36:58'),
(15, 'sdf', 'serw', 'sdfsf', 'serw', 'cxv@gmail.com', 'cxv@gmail.com', 's', 'sf', 'wqe', 'sdf', 'dv', 'sdc', 'zxc', 'c3e', '4343344', '3322323', 0, 'Other', 'sfsdf', 'dffdfs', '23332323', 3, 'Networking', 32, 'I will bring my own', '8:00 AM- 10:00 AM', '1', '1', '1', '1', '2', 'sdcsd', NULL, '1', 'vdv', 'offline', 322.00, '2', NULL, NULL, '2022-10-28 00:57:10', '2022-10-27 02:27:37', '2022-10-28 00:57:10'),
(16, 'erfx', 'svvd', 'sds', 'svvd', 'adminee@gmail.com', 'adminee@gmail.com', 's', 'sf', '230/a', '240/a', 'dv', 'zcxc', 'xczx', '1206', '654535434535', '7655453453345', 0, 'Supplier: Consultant', 'sfsdf', 'ghjgjgj', '3453545', 1, 'Golf', 23, 'I will bring my own', '8:00 AM- 10:00 AM', '1', '1', '1', '1', '2', 'scs', NULL, '1', 'sdcs', 'offline', 343.00, '2', NULL, NULL, '2022-10-27 10:59:54', '2022-10-27 02:29:23', '2022-10-27 04:11:01'),
(17, 'Ferdosh', 'ferdosh', 'sds', 'Ferdosh', 'ferdosh@gmail.com', 'ferdosh@gmail.com', 'it', 'sf', '230/a', '240/a', 'zxcz', 'zcxc', 'xczx', '44553', '34535345', '3322323', 0, 'Media', 'bdg', 'dffdfs', '23332323', 4, 'Massage', 12, 'I will bring my own', '8:00 AM- 10:00 AM', '1', '1', '1', '1', '2', 'sada', NULL, '1', 'vdv', 'offline', 345.00, '2', NULL, NULL, '2022-10-28 00:59:29', '2022-10-27 02:42:50', '2022-10-28 00:59:29'),
(19, 'Swaoal', 'swaoal', 'Hossien', 'Swaoal', 'Swaoal@gmail.com', 'Swaoal@gmail.com', 'it', 'sf', 'wqe', '240/a', 'dv', 'zcxc', 'Bangladesh', '1206', '654535434535', '3322323', 0, 'Supplier: Consultant', 'bdg', 'ghjgjgj', '3453545', 1, 'Golf', 10, 'I will bring my own', '8:00 AM- 10:00 AM', '1', '1', '1', '1', '2', 'sada', NULL, '1', 'sdcs', 'offline', 345.00, '2', NULL, NULL, '2022-10-27 05:51:38', '2022-10-27 05:19:02', '2022-10-27 05:51:38'),
(21, 'Ferdosh', 'ferdosh', 'dip', 'Ferdosh', 'ferdosh23@gmail.com', 'ferdosh23@gmail.com', 's', 'sf', '230/a', '240/a', 'zxcz', 'dsvds', 'Bangladesh', '44553', '654535434535', '7655453453345', 0, 'Utility Company', 'bdg', 'ghjgjgj', '3453545', 2, 'Fishing', 10, 'I will bring my own', '8:00 AM- 10:00 AM', '1', '1', '1', '1', '2', 'sada', NULL, '1', 'sdcs', 'online', 345.00, '2', NULL, NULL, '2022-10-28 00:37:31', '2022-10-28 00:30:58', '2022-10-28 00:37:31'),
(22, 'ksdjlks', 'ksdjlks', 'dss', 'ksdjlks', 'ksdjlks@gmail.com', 'ksdjlks@gmail.com', 'it', 'sf', '230/a', '240/a', 'zxcz', 'zcxc', 'Bangladesh', '44553', '654535434535', '3322323', 0, 'Supplier: Coal Mine/Coal Producer', 'bdg', 'dffdfs', '3453545', 3, 'Networking', 12, 'I will bring my own', '8:00 AM- 10:00 AM', '1', '1', '1', '1', '2', 'scs', NULL, '1', 'sdcs', 'online', 345.00, '2', NULL, NULL, '2022-10-28 01:19:28', '2022-10-28 00:55:30', '2022-10-28 01:19:28'),
(23, 'dfgasg', 'dfgasg', 'Hossien', 'dfgasg', 'dfgasg@gmail.com', 'dfgasg@gmail.com', 'sdfs', 'xds', '43534', '233', 'zxcz', 'dsvds', 'xczx', '1206', '654535434535', '7655453453345', 0, 'Supplier: Trader / Broker', 'sfsdf', 'dffdfs', '3453545', 4, 'Massage', 24, 'Left-handed mens', '8:00 AM- 10:00 AM', '1', '1', '1', '1', '2', 'sada', NULL, '1', NULL, 'offline', 456.00, '2', NULL, NULL, '2022-10-28 01:45:39', '2022-10-28 00:56:50', '2022-10-28 01:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'Rajdip', '2183091033@uttarauniversity.edu.bd', NULL, '$2y$10$Vqw1UBipx4ndXwQsaXtUoO3Udy.uxhYOIOoNor4Vyahaw/VlkkfE.', NULL, '2022-10-22 01:47:45', NULL, '2022-10-22 01:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `wp_evr_attendee`
--

CREATE TABLE `wp_evr_attendee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attend_lists`
--
ALTER TABLE `attend_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `group_categories`
--
ALTER TABLE `group_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_lists`
--
ALTER TABLE `group_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_sub_categories`
--
ALTER TABLE `group_sub_categories`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registers_email_unique` (`email`),
  ADD UNIQUE KEY `registers_second_email_unique` (`second_email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wp_evr_attendee`
--
ALTER TABLE `wp_evr_attendee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attend_lists`
--
ALTER TABLE `attend_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_categories`
--
ALTER TABLE `group_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `group_lists`
--
ALTER TABLE `group_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `group_sub_categories`
--
ALTER TABLE `group_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wp_evr_attendee`
--
ALTER TABLE `wp_evr_attendee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
