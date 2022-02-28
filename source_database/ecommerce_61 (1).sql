-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Feb 28, 2022 at 08:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_61`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Women', NULL, '2022-02-18 18:30:54'),
(2, 'Men', NULL, NULL),
(3, 'Accessorise', NULL, NULL),
(4, 'Girls', NULL, NULL);

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
(5, '2022_02_16_145203_create_roles_table', 1),
(6, '2022_02_16_183518_create_products_table', 1),
(8, '2022_02_17_193211_add_role_to_user_table', 1),
(9, '2022_02_17_193357_add_image_to_product_table', 1),
(10, '2022_02_17_231335_add_category_to_product_table', 1),
(12, '2022_02_18_134144_create_categories_table', 2),
(13, '2022_02_25_112816_add_social_login_field', 3),
(17, '2022_02_26_203203_create_posts_table', 6),
(18, '2022_02_26_221532_add_image_to_users_table', 7),
(19, '2022_02_27_215136_add_product_to_post_table', 8);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `desc`, `author`, `user_id`, `created_at`, `updated_at`, `pro_id`) VALUES
(1, 'rings', 'very good in this site', 'Fatma Karam Hussein', 19, '2022-02-27 10:17:06', '2022-02-27 10:17:06', 1),
(2, 'good material', 'good material', 'Fatma Karam Hussein', 19, '2022-02-28 14:44:04', '2022-02-28 14:44:04', 12),
(3, 'good material', 'googd job', 'Fatma Karam Hussein', 19, '2022-02-28 14:44:39', '2022-02-28 14:44:39', 14),
(4, 'material', 'nice', 'fatma', 2, '2022-02-28 15:17:56', '2022-02-28 15:17:56', 19),
(5, 'nice', 'good material', 'fatma', 2, '2022-02-28 16:11:57', '2022-02-28 16:11:57', 8),
(6, 'not good', 'yes', 'fatma', 2, '2022-02-28 16:14:41', '2022-02-28 16:14:41', 9),
(7, 'best', 'best product', 'fatma', 2, '2022-02-28 16:21:20', '2022-02-28 16:21:20', 18);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `proname`, `desc`, `price`, `created_at`, `updated_at`, `image`, `cat_id`) VALUES
(8, 'rings', 'gold rings', '220 LE', '2022-02-20 12:59:14', '2022-02-26 20:46:47', '1645915607_banner4.jpg', 4),
(9, 'Rehan Trousers Comfort Fit For Women', 'Cotton and polister', '350LE', '2022-02-20 17:26:21', '2022-02-23 18:06:36', '1645385181_p-6.jpg', 1),
(10, 'CROCODILE SKINE HAND BAG', 'black', '190LE', '2022-02-20 17:28:36', '2022-02-23 18:06:09', '1645385316_p-2.jpg', 3),
(11, 'Brand Stores Clutches Bag For Men- Black', 'BrandStores', '55 LE', '2022-02-20 17:32:01', '2022-02-23 18:06:58', '1645385521_nf0015_1.jpg', 2),
(12, 'Light Sweat pants from groowii', 'Lycra MEn doors', '200LE', '2022-02-20 17:33:08', '2022-02-23 18:07:44', '1645385588_t1.jpg', 2),
(13, 'Cotton Contrast Side Stripe', 'Waist Straight-Fit Sweatpants for Men', '129LE', '2022-02-20 18:24:32', '2022-02-23 18:07:58', '1645388672_p-1.jpg', 2),
(14, 'Mens Sweatpants', 'cotton and polyester', '120LE', '2022-02-20 18:25:12', '2022-02-23 18:08:15', '1645388712_t1.jpg', 2),
(15, 'adidas Diablo Small Duffel Bag', 'Cotton', '250LE', '2022-02-20 18:25:48', '2022-02-23 18:08:28', '1645388748_p-4.jpg', 1),
(16, 'Travel Duffel Bag, Sports Tote Gym Bag for women', 'black', '400LE', '2022-02-20 18:26:25', '2022-02-23 18:08:42', '1645388785_p-2.jpg', 1),
(17, 'Girls Fashion Backpack Mini Backpack Purse for Women', 'Brown original brand', '700LE', '2022-02-20 18:27:04', '2022-02-23 18:08:56', '1645388824_p-3.jpg', 4),
(18, 'PinkSheep Little Girl Jewel Rings', 'gold and pink', '500LE', '2022-02-20 18:29:24', '2022-02-23 18:09:13', '1645388964_banner4.jpg', 4),
(19, 'adidas Diablo Small Duffel Bag', 'bags', '700LE', '2022-02-20 18:29:58', '2022-02-23 18:09:31', '1645388998_t1.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'moderator', NULL, NULL),
(3, 'user', NULL, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `social_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `social_id`, `social_type`, `image`) VALUES
(2, 'fatma', 'admin@amit.com', NULL, '$2y$10$YyRIhNAjFUTF9VjJMfHOwOYgFfTlwreEwTJWJjw9i.Y8Vs79GP6Vi', NULL, '2022-02-18 11:15:24', '2022-02-26 21:06:01', 1, NULL, NULL, '1645916761_banner4.jpg'),
(3, 'khairy', 'dina@amit.com', NULL, '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', NULL, '2022-02-18 11:15:49', '2022-02-26 21:00:25', 2, NULL, NULL, '1645916425_avatar.jpg'),
(4, 'nona', 'amany@info.com', NULL, '$2y$10$ZbQ5LgMmpTksEP2zTQ/OuOFFXlexZWJ23LjqArnE.fQ0WKsm9U8A2', NULL, '2022-02-18 11:16:05', '2022-02-18 11:16:05', 2, NULL, NULL, ''),
(5, 'piere', 'piere@amit.com', NULL, '7b52009b64fd0a2a49e6d8a939753077792b0554', NULL, '2022-02-18 11:16:21', '2022-02-18 11:16:21', 2, NULL, NULL, ''),
(6, 'mona mohamed khairy', 'flower@admin.com', NULL, '$2y$10$nySpALT5vTZ.l7WUnQacOuPAGnmKU5pVRoV4vxTZnJMSc84S30Jdi', NULL, '2022-02-18 11:16:42', '2022-02-18 11:16:42', 2, NULL, NULL, ''),
(7, 'ahmed', 'ahmed@gmail.com', NULL, '$2y$10$QpaXdm78xHzVCh2OCr4s3.K/D5rJfCZswdEmoEg9NMlXcKSBBPxai', NULL, '2022-02-18 18:02:27', '2022-02-18 18:02:27', 2, NULL, NULL, ''),
(8, 'user', 'user@amit.com', NULL, '$2y$10$Sm8K5SnUoCWh3VJ0rpY90.wl8yE6HJiGGzGFudaKZ93JoLKUtlDp.', NULL, '2022-02-21 06:01:51', '2022-02-26 14:29:24', 3, NULL, NULL, ''),
(19, 'Fatma Karam Hussein', 'fatma.karam2010@gmail.com', '2022-02-25 16:38:45', '$2y$10$yP6GLSA8Vd6Mum1ZFAELf.fLJdI.EhE/AXtyxm1qMfX.60ljQxKjO', 'WqQCW0S2OTCPNQ2gUBAHA0cfjpmS4ji61Df95LcQCNKzcZQDlyCG0X6ryt7o', '2022-02-25 16:36:37', '2022-02-27 05:50:29', 1, NULL, NULL, '1645948229_kal-visuals-square.jpg'),
(20, 'sawsan', 'sawsan@info.com', NULL, '$2y$10$82cTEPjRY1ZMLUMh1/Ovo.DQX0c9pSFO.e32Bdg2ks9D1BYecWSV2', NULL, '2022-02-26 14:30:58', '2022-02-26 14:34:15', 2, NULL, NULL, ''),
(21, 'salma', 'salma@gmail.com', NULL, '$2y$10$/ZDUKNGGKT/QvI.gJUCyKepweBupdxzEDeF7N7gNvNezhpgCOHMTi', NULL, '2022-02-26 20:29:58', '2022-02-26 20:29:58', 1, NULL, NULL, NULL),
(22, 'donia', 'donia@amit.com', NULL, '$2y$10$iow9XLeKGemqgk0nEsPAo.QpKFCo/VAxO92opMUVJdoYdZRrE4dfW', NULL, '2022-02-26 20:32:14', '2022-02-26 20:32:14', 2, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
