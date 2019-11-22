-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 05:10 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sell_quicker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `number`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', '12345', '$2y$10$Se0eJz2ztRic8lLE.8XQj.VYNfJEPqBKqenIDmP6bAbV5z1rkzdyW', NULL, '2019-06-12 05:03:11', NULL),
(3, 'Women In Digital', '123456', '$2y$10$4XoUPNQr5jRME585dt/wKusvbvehM0e9DGC0mYYvrXfMp62BvOHv.', NULL, '2019-06-24 00:37:42', '2019-06-24 00:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `populer` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_title`, `blog_description`, `image`, `populer`, `user_id`, `status`, `position`, `created_at`, `updated_at`) VALUES
(1, 1, 'Blog', 'ldf slfsd sdf', 'uploads/blog/posts/dhakacast.jpg', 1, 3, '1', '1', '2019-07-01 22:47:47', '2019-07-01 22:47:47'),
(2, 1, 'Blog', 'ldf slfsd sdf', 'uploads/blog/posts/dhakacast.jpg', 1, 3, '1', '1', '2019-07-01 22:47:47', '2019-07-01 22:47:47'),
(3, 1, 'Blog', 'ldf slfsd sdf', 'uploads/blog/posts/dhakacast.jpg', 1, 3, '1', '1', '2019-07-01 22:47:47', '2019-07-01 22:47:47'),
(4, 1, 'Blog', 'ldf slfsd sdf', 'uploads/blog/posts/dhakacast.jpg', 1, 3, '1', '1', '2019-07-01 22:47:47', '2019-07-01 22:47:47'),
(5, 1, 'Blog', 'ldf slfsd sdf', 'uploads/blog/posts/dhakacast.jpg', 1, 3, '1', '1', '2019-07-01 22:47:47', '2019-07-01 22:47:47'),
(6, 1, 'Blog', 'ldf slfsd sdf', 'uploads/blog/posts/dhakacast.jpg', 1, 3, '1', '1', '2019-07-01 22:47:47', '2019-07-01 22:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `position` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `brand_logo`, `status`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Nokia', 'sdfsd dfssdf', NULL, 1, 3, '2019-07-08 09:43:24', '2019-07-08 09:43:24'),
(2, 'HP', NULL, 'uploads/brand_logo/1562600742.jpg', 1, NULL, '2019-07-08 09:45:42', '2019-07-08 09:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `position` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `category_image`, `status`, `slug`, `position`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'web development', 'sdf sdf dsf', 'uploads/categroy/1562041555.jpg', 1, 'web-development', 1, 3, '2019-07-01 22:25:55', '2019-07-01 22:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Iqbal Ahmed Tuhin', 'ammin@admin.com', 'sdfds', 'dsfsdf', '', '2019-04-01 11:30:14', '2019-04-01 11:30:14'),
(2, 'Iqbal Ahmed Tuhin', 'wid@wid.com', 'sdfsdf', 'sfsdfsdf', '', '2019-04-02 04:37:14', '2019-04-02 04:37:14'),
(3, 'Iqbal Ahmed Tuhin', 'ammin@admin.com', '45345435', 'Accounting Software Screenshot', 'sdfsf sdfsdfsdf', '2019-04-07 07:20:43', '2019-04-07 07:20:43'),
(4, 'Iqbal Ahmed Tuhin', 'ammin@admin.com', '45345435', 'Accounting Software Screenshot', 'sdfsdfsdf', '2019-04-07 07:21:32', '2019-04-07 07:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `works_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `works_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menuses`
--

CREATE TABLE `menuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menuses`
--

INSERT INTO `menuses` (`id`, `menu`, `slug`, `position`, `order`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Home', '/', 1, 1, 1, '2019-03-31 21:59:42', '2019-04-11 04:40:58'),
(3, 'Research', 'research', 0, 4, 1, '2019-04-04 05:30:27', '2019-04-11 04:43:24'),
(4, 'Our Team', 'our-team', 0, 3, 1, '2019-04-04 05:30:39', '2019-04-04 05:30:39'),
(5, 'About Us', 'about-us', 0, 2, 1, '2019-04-04 05:30:53', '2019-04-11 04:43:10'),
(6, 'Gallery', 'gallery', 0, 5, 1, '2019-04-04 05:31:04', '2019-04-04 05:31:04'),
(7, 'News', 'news', 0, 7, 1, '2019-04-04 05:31:11', '2019-04-04 05:31:11');

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
(1, '2019_07_01_051427_create_doctors_table', 1),
(2, '2019_07_02_043351_create_blogs_table', 1),
(3, '2019_07_07_062347_create_brands_table', 2),
(4, '2019_07_09_145022_create_product_attrubates_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone_number` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `discount_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `paid_amount` decimal(10,2) NOT NULL,
  `payment_status` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `payment_details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `operational_status` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `order_nr` varchar(16) DEFAULT 'Pending',
  `processed_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `customer_name`, `customer_phone_number`, `address`, `city`, `postal_code`, `total_amount`, `discount_amount`, `paid_amount`, `payment_status`, `payment_details`, `operational_status`, `order_nr`, `processed_by`, `created_at`, `updated_at`) VALUES
(1, 57, 'Women In Digital', '45345', 'dhaka,bangladesh', 'dhaka', '345', '0.00', '0.00', '0.00', 'Pending', 'cash on delivery', 'Pending', 'Pending', NULL, '2019-05-08 22:22:21', '2019-05-08 22:22:21'),
(2, 57, 'Women In Digital', '45345', 'fgfdgdfgdf g', 'f', '4356', '404.00', '0.00', '404.00', 'Pending', 'cash on delivery', 'Pending', 'Pending', NULL, '2019-05-08 22:53:29', '2019-05-08 22:53:29'),
(3, 57, 'Women In Digital', '45345', 'fgfdgdfgdf g', 'f', '4356', '404.00', '0.00', '404.00', 'Pending', 'cash on delivery', 'Pending', 'Pending', NULL, '2019-05-08 23:00:13', '2019-05-08 23:00:13'),
(4, 57, 'Women In Digital', '45345', 'dsf sdf sdf', 'dhaka', '345', '520.00', '0.00', '520.00', 'Pending', 'cash on delivery', 'Pending', 'Pending', NULL, '2019-05-08 23:18:11', '2019-05-08 23:18:11'),
(5, 57, 'Women In Digital', '45345', 'dsf sdf sdf', 'dhaka', '345', '520.00', '0.00', '520.00', 'Pending', 'cash on delivery', 'Pending', 'Pending', NULL, '2019-05-08 23:18:39', '2019-05-08 23:18:39'),
(6, 57, 'Women In Digital', '45345', 'sdf sdfsf', 'ba', '43', '192.00', '0.00', '192.00', 'Pending', 'cash on delivery', 'Pending', '#00000006', NULL, '2019-05-08 23:39:37', '2019-05-08 23:39:37'),
(7, 57, 'Women In Digital', '45345', 'dsfsdf', 'dhaka', '43', '212.00', '0.00', '212.00', 'Pending', 'cash on delivery', 'Pending', '#00000007', NULL, '2019-05-08 23:58:14', '2019-05-08 23:58:14'),
(8, 57, 'Women In Digital', '45345', 'sdfdsfdsfds', 'dhaka', '5445', '32.00', '0.00', '32.00', 'Pending', 'cash on delivery', 'Pending', '#00000008', NULL, '2019-06-10 02:34:42', '2019-06-10 02:34:42'),
(9, 57, 'Women In Digital', '4356546', 'dsfdsf', 'dhaka', '4356', '100.00', '0.00', '100.00', 'Pending', 'cash on delivery', 'Pending', '#00000009', NULL, '2019-06-10 02:35:46', '2019-06-10 02:35:46'),
(10, 57, 'Women In Digital', '43634634', 'sdfsdf', 'dhaka', '4356', '100.00', '0.00', '100.00', 'Pending', 'cash on delivery', 'Pending', '#00000010', NULL, '2019-06-10 02:38:40', '2019-06-10 02:38:40'),
(11, 57, 'Women In Digital', '45345', 'dsfdsfdsf', 'dhaka', '5445', '32.00', '0.00', '32.00', 'Pending', 'cash on delivery', 'Pending', '#00000011', NULL, '2019-06-10 02:39:19', '2019-06-10 02:39:19'),
(12, 57, 'Women In Digital', '45345', 'fsdfsdf', 'dhaka', '43', '32.00', '0.00', '32.00', 'Pending', 'cash on delivery', 'Pending', '#00000012', NULL, '2019-06-10 02:41:19', '2019-06-10 02:41:19'),
(13, 57, 'Women In Digital', '45345', 'sdffdfds', 'dhaka', 'sdfds', '32.00', '0.00', '32.00', 'Pending', 'cash on delivery', 'Pending', '#00000013', NULL, '2019-06-10 02:43:21', '2019-06-10 02:43:21'),
(14, 57, 'Women In Digital', '456', 'sdfsdsfsf', 'sf', '345', '32.00', '0.00', '32.00', 'Pending', 'cash on delivery', 'Pending', '#00000014', NULL, '2019-06-10 02:48:27', '2019-06-10 02:48:27'),
(15, 57, 'Women In Digital', '45345', 'sdfdsf sdfdsf', 'dhaka', 'sdf', '120.00', '0.00', '120.00', 'Pending', 'cash on delivery', 'Pending', '#00000015', NULL, '2019-06-10 02:51:17', '2019-06-10 02:51:17'),
(16, 57, 'Women In Digital', '45345', 'sdfsdfds', 'ba', '43', '120.00', '0.00', '120.00', 'Pending', 'cash on delivery', 'Pending', '#00000016', NULL, '2019-06-10 02:52:38', '2019-06-10 02:52:38'),
(17, 57, 'Women In Digital', '45345', 'sdf dsfsdf', 'dhaka', '4356', '32.00', '0.00', '32.00', 'Pending', 'cash on delivery', 'Pending', '#00000017', NULL, '2019-06-10 02:54:01', '2019-06-10 02:54:01'),
(18, 57, 'Women In Digital', '45345', 'sdf fds sdfs fsdf', 'f', '5445', '32.00', '0.00', '32.00', 'Pending', 'cash on delivery', 'Pending', '#00000018', NULL, '2019-06-10 02:54:34', '2019-06-10 02:54:34'),
(19, 57, 'Women In Digital', '45345', 'sdfsdffsdf', 'dhaka', '345', '180.00', '0.00', '180.00', 'Pending', 'cash on delivery', 'Pending', '#00000019', NULL, '2019-06-10 02:56:33', '2019-06-10 02:56:33'),
(20, 57, 'Women In Digital', '45345', 'sfdsdfsfsdf', 'dhaka', '43', '160.00', '0.00', '160.00', 'Pending', 'cash on delivery', 'Pending', '#00000020', NULL, '2019-06-10 02:57:59', '2019-06-10 02:57:59'),
(21, 57, 'Women In Digital', '45345', 'dsfsdf', 'ba', '43', '120.00', '0.00', '120.00', 'Pending', 'cash on delivery', 'Pending', '#00000021', NULL, '2019-06-10 02:58:43', '2019-06-10 02:58:43'),
(22, 57, 'Women In Digital', '45345', 'dsfsdfsdfsdf', 'ba', '43', '32.00', '0.00', '32.00', 'Pending', 'cash on delivery', 'Pending', '#00000022', NULL, '2019-06-10 03:18:45', '2019-06-10 03:18:45'),
(23, 57, 'Women In Digital', '45345', 'sdfsfdfsfd', 'dhaka', '5445', '180.00', '0.00', '180.00', 'Pending', 'cash on delivery', 'Pending', '#00000023', NULL, '2019-06-10 03:19:40', '2019-06-10 03:19:40');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `tag_sale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1 = sale,hot=2,new =3',
  `product_feature` int(11) DEFAULT NULL,
  `in_stock` tinyint(4) NOT NULL DEFAULT '1',
  `is_slide` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `slug`, `product_category`, `description`, `image`, `price`, `sale_price`, `tag_sale`, `product_feature`, `in_stock`, `is_slide`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Napa extra', '', 1, 'gj jkh kh jk', 'uploads/product/3\\5ce0d76221734_thumb900.jpg,uploads/product/3\\2019-05-16_023436.jpg,uploads/product/3\\2019-05-16_023436.png', '123.00', '32.00', NULL, NULL, 1, 1, 1, '2019-06-30 02:55:13', '2019-06-30 02:55:13'),
(11, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/product/3\\5ce0d76221734_thumb900.jpg,uploads/product/3\\2019-05-16_023436.jpg,uploads/product/3\\2019-05-16_023436.png', '23.00', '32.00', '2', 1, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(12, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/product/3\\5ce0d76221734_thumb900.jpg,uploads/product/3\\2019-05-16_023436.jpg,uploads/product/3\\2019-05-16_023436.png', '23.00', '32.00', '2', 1, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(13, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/product/3\\5ce0d76221734_thumb900.jpg,uploads/product/3\\2019-05-16_023436.jpg,uploads/product/3\\2019-05-16_023436.png', '23.00', '32.00', '3', 1, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(14, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/product/3\\5ce0d76221734_thumb900.jpg,uploads/product/3\\2019-05-16_023436.jpg,uploads/product/3\\2019-05-16_023436.png', '23.00', '32.00', '2', 1, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(15, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/product/3\\5ce0d76221734_thumb900.jpg,uploads/product/3\\2019-05-16_023436.jpg,uploads/product/3\\2019-05-16_023436.png', '23.00', '32.00', '1', 2, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(16, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/product/3\\5ce0d76221734_thumb900.jpg,uploads/product/3\\2019-05-16_023436.jpg,uploads/product/3\\2019-05-16_023436.png', '23.00', '32.00', '3', 1, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(17, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/books/napa.jpg', '23.00', '32.00', '2', 3, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(18, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/books/napa.jpg', '23.00', '32.00', '1', 4, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(19, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/books/napa.jpg', '23.00', '32.00', '1', 4, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(20, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/books/napa.jpg', '23.00', '32.00', '3', 3, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(21, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/books/napa.jpg', '23.00', '32.00', '3', 4, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(22, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/books/napa.jpg', '23.00', '32.00', '2', 4, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(23, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/books/napa.jpg', '23.00', '32.00', '1', 2, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(24, 'Napa', '', 1, 'fdsdfsdcvxv', 'uploads/books/napa.jpg', '23.00', '32.00', '3', 4, 1, 0, 1, '2019-06-30 04:06:57', '2019-06-30 05:17:21'),
(25, 'HP 2018', '', 1, 'sdfsfs fds', '[\"5ce0d76221734_thumb900.jpg\",\"2019-05-16_023436.jpg\",\"2019-05-16_023436.png\"]', '11.00', '345.00', '1', 1, 1, 0, 1, '2019-07-08 10:57:51', '2019-07-08 10:57:51'),
(26, 'erwrw', '', 2, 'sdfdfdsf', 'uploads/product/3\\5ce0d76221734_thumb900.jpg,uploads/product/3\\2019-05-16_023436.jpg,uploads/product/3\\2019-05-16_023436.png', '11.00', '345.00', '1', 2, 1, 0, 1, '2019-07-08 11:36:47', '2019-07-08 11:36:47'),
(27, 'laptop', '', 1, 'sdfs sdf df', 'uploads/product/3\\5ce0d76221734_thumb900.jpg,uploads/product/3\\2019-05-16_023436.jpg,uploads/product/3\\2019-05-16_023436.png', '11.00', '345.00', '1', 1, 1, 0, 1, '2019-07-08 11:38:46', '2019-07-08 11:38:46'),
(28, 'router', '', 2, 'dfsd dsfs', 'uploads/product/3\\5ce0d76221734_thumb900.jpg,uploads/product/3\\2019-05-16_023436.jpg,uploads/product/3\\2019-05-16_023436.png', '11.00', '345.00', '1', 1, 1, 0, 1, '2019-07-08 11:42:25', '2019-07-08 11:42:25'),
(29, 'HP 2018', '', 2, 'sfdsdf', 'uploads/product/3\\5ce0d76221734_thumb900.jpg,uploads/product/3\\2019-05-16_023436.jpg,uploads/product/3\\2019-05-16_023436.png', '11.00', '345.00', '1', 2, 1, 0, 1, '2019-07-08 11:43:07', '2019-07-08 11:43:07'),
(30, 'HP 2018', '', 1, 'sdfsdfsdf', 'uploads/product/3\\5ce0d76221734_thumb900.jpg,uploads/product/3\\2019-05-16_023436.jpg,uploads/product/3\\2019-05-16_023436.png', '11.00', '345.00', NULL, 1, 1, 0, 1, '2019-07-08 11:44:19', '2019-07-08 11:44:19'),
(31, 'HP 2018', '', 3, 'sdfsdf', 'uploads/product/3\\5ce0d76221734_thumb900.jpg,uploads/product/3\\2019-05-16_023436.jpg,uploads/product/3\\2019-05-16_023436.png', '11.00', '345.00', '1', 1, 1, 0, 1, '2019-07-08 11:47:42', '2019-07-08 11:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `product_attrubates`
--

CREATE TABLE `product_attrubates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_stoke` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attrubates`
--

INSERT INTO `product_attrubates` (`id`, `product_id`, `product_size`, `sku`, `product_color`, `product_stoke`, `product_price`, `created_at`, `updated_at`) VALUES
(1, 10, 'l', '1', 'red', '333', 546, '2019-07-09 11:57:36', '2019-07-09 11:57:36'),
(2, 10, 'm', '2', 'grwwn', '100', 345, '2019-07-09 11:57:36', '2019-07-09 11:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `category_description` text COLLATE utf8mb4_unicode_ci,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `position` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_name`, `parent_id`, `category_description`, `category_image`, `slug`, `status`, `position`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Clothing', 0, 'sddsf dsfsf', NULL, 'clothing', 1, 1, 3, '2019-07-10 08:58:26', '2019-07-10 08:58:26'),
(2, 'Electronics', 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(3, 'Shoes', 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(4, 'Watches', 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(5, 'Jewellery', 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(6, 'Health and Beauty', 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(7, 'Kids and Babies', 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(8, 'Sports', 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(9, 'Home and Garden', 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(10, 'Hot deals', 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(12, 'Dresses', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(13, 'Shoes', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(14, 'Jackets', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(15, 'Sunglasses', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(16, 'Sport Wear', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(17, 'Blazers', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(18, 'Shirts', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(19, 'Shorts', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(20, 'Handbags', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(21, 'Jwellery', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(22, 'Swimwear', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(23, 'Tops', 0, '1', NULL, NULL, 1, NULL, 0, NULL, NULL),
(24, 'Flats', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(25, 'Shoes', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(26, 'Winter Wear', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(27, 'Night Suits', 1, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL),
(28, 'test', NULL, 'test', NULL, 'test', 1, NULL, 3, '2019-08-15 09:14:21', '2019-08-15 09:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `features_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features_description` text COLLATE utf8mb4_unicode_ci,
  `features_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `position` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_features`
--

INSERT INTO `product_features` (`id`, `features_name`, `features_description`, `features_image`, `status`, `position`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'New Products', 'dsfsd sdfsdfd', 'uploads/product/features/1561888307.jpg', 1, 1, 3, '2019-06-30 03:51:47', '2019-06-30 03:51:47'),
(2, 'Hot deals', 'fgdsgf sdf dsfsdf', NULL, 1, 2, 3, '2019-07-03 22:46:51', '2019-07-03 22:46:51'),
(3, 'Special Offer', 'df sdf', NULL, 1, 3, 3, '2019-07-03 22:47:16', '2019-07-03 22:47:16'),
(4, 'Featured Products', 'dsfsdfsdf', NULL, 1, 4, 3, '2019-07-03 22:47:28', '2019-07-03 22:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `position` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `slug`, `image`, `link`, `status`, `position`, `created_at`, `updated_at`) VALUES
(2, 'Change Maker Name', 'Change Maker Name Change Maker Name Change Maker Name Change Maker Name', 'test-slider-1', 'uploads/website/slider/dhaka.jpg', 'gdretewt', 1, 5, '2019-03-31 22:48:32', '2019-06-26 02:25:43'),
(3, 'Change Maker Name', 'Change Maker Name Change Maker Name Change Maker Name Change Maker Name', 'change-maker-name', 'uploads/website/slider/dhakacast.jpg', 'gdgffssdf', 1, 2, '2019-06-26 02:34:03', '2019-06-26 02:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `position` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`id`, `name`, `description`, `slug`, `image`, `status`, `position`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Cardiologist', NULL, 'cardiologist', 'uploads/specialities/1561541005.png', 1, 1, 3, '2019-06-26 03:23:25', '2019-06-26 03:23:25'),
(2, 'Cardiologist', NULL, 'cardiologist', 'uploads/specialities/1561541005.png', 1, 1, 3, '2019-06-26 03:23:25', '2019-06-26 03:23:25'),
(3, 'Cardiologist', NULL, 'cardiologist', 'uploads/specialities/1561541005.png', 1, 1, 3, '2019-06-26 03:23:25', '2019-06-26 03:23:25'),
(4, 'Cardiologist', NULL, 'cardiologist', 'uploads/specialities/1561541005.png', 1, 1, 3, '2019-06-26 03:23:25', '2019-06-26 03:23:25'),
(6, 'Cardiologist', NULL, 'cardiologist', 'uploads/specialities/1561541005.png', 1, 1, 3, '2019-06-26 03:23:25', '2019-06-26 03:23:25'),
(7, 'Cardiologist', NULL, 'cardiologist', 'uploads/specialities/1561541005.png', 1, 1, 3, '2019-06-26 03:23:25', '2019-06-26 03:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `submenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `submenu`, `menu_id`, `slug`, `position`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Our Courses', 2, 'our-courses', 1, 7, 1, '2019-06-09 05:20:22', '2019-06-09 05:55:12'),
(4, 'Our Misssion', 5, 'our-mission', 1, 7, 1, '2019-06-09 06:23:34', '2019-06-12 04:32:15'),
(5, 'Our Team', 5, 'our-team', 1, 2, 1, '2019-06-12 04:32:33', '2019-06-12 04:32:33'),
(6, 'Who We Are', 5, 'who-we-are', 1, 3, 1, '2019-06-12 04:32:58', '2019-06-12 04:32:58'),
(7, 'On site training center', 2, 'on-site-training-center', 1, 2, 1, '2019-06-12 07:50:09', '2019-06-12 07:50:09'),
(8, 'High School', 3, 'high-school', 1, 1, 1, '2019-06-12 11:26:09', '2019-06-12 11:26:09'),
(9, 'Collage', 3, 'collage', 1, 2, 1, '2019-06-12 11:26:21', '2019-06-12 11:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `sex`, `age`, `address`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Iqbal Ahmed Tuhin', NULL, NULL, NULL, '', NULL, '$2y$10$TXfZwzQiUEkrGP4w65WgFeFV0VcLdDEh/xYQYdFgJPpxTvSDPgzr6', NULL, '2019-08-26 05:15:34', '2019-08-26 05:15:34'),
(2, 'Iqbal Ahmed Tuhin', NULL, NULL, NULL, 'iqbal@gmail.com', NULL, '$2y$10$4V.neJ6zpBH/0sXsuFxwLOosjwIP2jNn5XlLebvbcjqbwTm/vVvr.', NULL, '2019-08-26 05:24:06', '2019-08-26 05:24:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`number`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuses`
--
ALTER TABLE `menuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menuses_menu_unique` (`menu`),
  ADD UNIQUE KEY `menuses_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attrubates`
--
ALTER TABLE `product_attrubates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_features`
--
ALTER TABLE `product_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menuses`
--
ALTER TABLE `menuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_attrubates`
--
ALTER TABLE `product_attrubates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
