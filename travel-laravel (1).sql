-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 05:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `travel_packages_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/gallery/hSGSK5QNzCO1kL2qu4gq4bslKirPSgWkOIgE2Afl.jpg', NULL, '2024-06-07 06:55:01', '2024-06-07 06:55:01'),
(2, 1, 'assets/gallery/b4nYkLNdDLz1M1f2iIl7naPl6gtxOyQudEw2cK0l.jpg', NULL, '2024-06-07 06:56:02', '2024-06-07 06:56:02'),
(3, 1, 'assets/gallery/2IjjB90bzFkzWT8AdbCg3VGVw3tTb31cr8ifHqx6.jpg', NULL, '2024-06-07 06:56:21', '2024-06-07 06:56:21'),
(4, 1, 'assets/gallery/iUY7Dn2PgVMXdvjAtWtFUReJFRw4vLxAQPeXpc6J.jpg', NULL, '2024-06-07 06:56:42', '2024-06-07 06:56:42'),
(5, 2, 'assets/gallery/DwvZVncD2LKt0HdCzf8Nq64HekVUWyyijav4YUTw.jpg', NULL, '2024-06-07 07:00:42', '2024-06-07 07:00:42'),
(6, 2, 'assets/gallery/wP2G9dmnORmw2ayLQgYhJCcRbAT6Vx3vYGJ70ZYq.jpg', NULL, '2024-06-07 07:01:11', '2024-06-07 07:01:11'),
(7, 2, 'assets/gallery/nGGNauwWHJseEpnrqx5DZMFmtuSmoO8k1A1xWPjx.jpg', NULL, '2024-06-07 07:01:31', '2024-06-07 07:01:31'),
(8, 2, 'assets/gallery/ppCyIwf6izYNvSHp2rP23HTnCvoqTPFeA5gihtPf.jpg', NULL, '2024-06-07 07:01:48', '2024-06-07 07:01:48'),
(9, 3, 'assets/gallery/jaG7OLLWlE4UzZZF69JatNuRCqmYuN2y7RUDrlYe.jpg', NULL, '2024-06-08 09:25:23', '2024-06-08 09:25:23'),
(10, 3, 'assets/gallery/vIwARqLKEYPLB35jaasS5xqhtcKsaTZylTLAOjHB.jpg', NULL, '2024-06-08 09:25:44', '2024-06-08 09:25:44'),
(11, 3, 'assets/gallery/4pTvL82LLsQZ50Xy9TS2y8NVqNAq9dHG4pvJIM7U.jpg', NULL, '2024-06-08 09:26:06', '2024-06-08 09:26:06'),
(12, 3, 'assets/gallery/9TzP1eg25ZoebdFqZ7RQ7kRXKrIH4q5YSRyKjKr1.jpg', NULL, '2024-06-08 09:26:37', '2024-06-08 09:26:37'),
(13, 4, 'assets/gallery/ZDaToqnIcTpox3D1EhipTL5qcxGqX3JAr2rTHtKA.jpg', NULL, '2024-06-08 10:03:10', '2024-06-08 10:07:13'),
(14, 4, 'assets/gallery/Fem6K2APb2aAMFXIVoqFNmKeboeuHxMAyeYB4JMi.jpg', NULL, '2024-06-08 10:04:12', '2024-06-08 10:06:04'),
(15, 4, 'assets/gallery/5gI0sAgc5BsXD9IZy8EbtFUmBLc8pg3QhYHuV8aS.jpg', NULL, '2024-06-08 10:09:04', '2024-06-08 10:11:44'),
(16, 4, 'assets/gallery/JR9MRbgN2zA4igFJ8pw3GtyvYYYlxjMXXRpeFhs7.jpg', NULL, '2024-06-08 10:10:41', '2024-06-08 10:10:41'),
(17, 5, 'assets/gallery/YbP23wJNDEaeh7JOzbFwhAAe8FxJORowEKgHYCQh.jpg', NULL, '2024-06-08 10:14:56', '2024-06-08 10:14:56'),
(18, 5, 'assets/gallery/AyWVpCYzHrhFwSmRb2pVTRLEqCd0RO0EgYJSjiH0.jpg', NULL, '2024-06-08 10:15:33', '2024-06-08 10:15:33'),
(19, 5, 'assets/gallery/B2ARtJ6h9ciyFsgBAilEc5DJLzUrEW3SWdJPvn9w.jpg', NULL, '2024-06-08 10:16:00', '2024-06-08 10:16:00'),
(20, 5, 'assets/gallery/9W7j3hBMnhOdfV2jxOm0V2Vl4qYcYFlSL1JD5lOv.jpg', NULL, '2024-06-08 10:16:33', '2024-06-08 10:17:41'),
(21, 6, 'assets/gallery/ijmghYewOM5UAMmGQzPw6BTAPhC9R0fNHUPBRSis.jpg', NULL, '2024-06-08 10:20:49', '2024-06-08 10:20:49'),
(22, 6, 'assets/gallery/nV1wIe6vt2QIDBkBc4xuIgIOlzOfPH2f96XUbbZt.jpg', NULL, '2024-06-08 10:21:11', '2024-06-08 10:21:11'),
(23, 6, 'assets/gallery/K17Z8EXtVwG4a7AgJ9yXat7L5lMfqHtU7CxvE8dx.jpg', NULL, '2024-06-08 10:21:58', '2024-06-08 10:21:58'),
(24, 6, 'assets/gallery/oPeZVptotShunJrG8lFbNs042Ae4mGdhn3UyrhdQ.jpg', NULL, '2024-06-08 10:22:49', '2024-06-08 10:22:49'),
(25, 7, 'assets/gallery/2cWDQawISqoIuWL8THbCzOJZdU9jpjcJumEuKMen.jpg', NULL, '2024-06-09 07:54:02', '2024-06-09 07:54:02'),
(26, 8, 'assets/gallery/C4Uqj4Nxf4NZ2MEqs8IWgGaeyYrLtibrjnbnTQxY.jpg', NULL, '2024-06-09 07:54:15', '2024-06-09 07:55:54'),
(27, 7, 'assets/gallery/b4mbpamZgM0h5XMibfBq9nkAxgOCnM5RnTfeT9p2.jpg', NULL, '2024-06-09 07:54:38', '2024-06-09 07:54:38'),
(28, 7, 'assets/gallery/t5q83goKxXajfoZrP1Z7eyaZxtJhQIMcpP9JbW0Q.jpg', NULL, '2024-06-09 07:54:54', '2024-06-09 07:57:12'),
(29, 7, 'assets/gallery/Xo573eQn0q9zl5KMvM12KQMfKH2SQE3WAMNlysZK.jpg', NULL, '2024-06-09 07:56:09', '2024-06-09 07:56:09'),
(30, 8, 'assets/gallery/uK9l2h0Z8RCAQMpuqx8pVgZ8BUNLkdjMTfMmlxgE.jpg', NULL, '2024-06-09 07:58:04', '2024-06-09 07:58:04'),
(31, 8, 'assets/gallery/KFua1l2krWgSGF4RiQoIJWbc7RmkOOd150wOoPCz.jpg', NULL, '2024-06-09 07:58:49', '2024-06-09 07:59:12'),
(32, 8, 'assets/gallery/XWqHrZoE7uBsMhXWez2IPDXbSxQBgChB5s3q60VY.jpg', NULL, '2024-06-09 07:59:43', '2024-06-09 07:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_06_163145_create_travel_packages_table', 2),
(6, '2024_06_06_163420_create_galleries_table', 2),
(7, '2024_06_06_170105_create_transactions_table', 3),
(8, '2024_06_06_170254_create_transaction_details_table', 4),
(9, '2024_06_06_170428_add_username_field_to_users_table', 5),
(10, '2024_06_06_170643_add_roles_field_to_users_table', 5),
(11, '2024_06_06_170759_add__n_i_k_field_to_users_table', 6),
(12, '2014_10_12_100000_create_password_resets_table', 7),
(13, '2024_06_08_122043_create_bukti_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `NIK` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `travel_packages_id`, `users_id`, `NIK`, `image`, `transaction_total`, `transaction_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '330234567654', '', 1000000, 'IN_CART', NULL, '2024-06-07 07:04:04', '2024-06-09 06:11:40'),
(2, 1, 1, '330234567654', '', 1000000, 'IN_CART', NULL, '2024-06-07 07:45:59', '2024-06-09 06:11:39'),
(3, 1, 1, '330234567654', '', 1000000, 'IN_CART', NULL, '2024-06-07 07:46:38', '2024-06-09 06:11:38'),
(4, 2, 1, '330234567654', '', 3000000, 'IN_CART', NULL, '2024-06-07 07:46:51', '2024-06-09 06:11:37'),
(5, 2, 1, '330234567654', '', 6000000, 'PENDING', NULL, '2024-06-07 07:47:18', '2024-06-09 06:11:37'),
(6, 2, 1, '330234567654', '', 3000000, 'PENDING', NULL, '2024-06-07 10:33:51', '2024-06-09 06:11:36'),
(7, 1, 1, '330234567654', '', 1000000, 'IN_CART', NULL, '2024-06-07 11:15:11', '2024-06-09 06:11:35'),
(8, 2, 1, '330234567654', '', 9000000, 'PENDING', NULL, '2024-06-08 05:29:18', '2024-06-09 06:11:34'),
(9, 2, 1, '330234567654', '', 3000000, 'PENDING', NULL, '2024-06-08 06:36:34', '2024-06-09 06:11:32'),
(10, 2, 1, '330234567654', '', 9000000, 'PENDING', NULL, '2024-06-08 06:42:11', '2024-06-09 06:10:58'),
(11, 3, 1, '330234567654', '', 2000000, 'PENDING', NULL, '2024-06-08 09:27:26', '2024-06-09 06:10:56'),
(12, 3, 1, '330234567654', '', 1000000, 'PENDING', NULL, '2024-06-08 09:33:40', '2024-06-09 06:10:55'),
(13, 6, 1, '330234567654', '', 1000000, 'PENDING', NULL, '2024-06-08 10:28:22', '2024-06-09 06:10:53'),
(14, 7, 1, '330234567654', '', 5000000, 'PENDING', NULL, '2024-06-09 05:41:09', '2024-06-09 06:10:51'),
(15, 5, 1, '330234567654', '', 1000000, 'IN_CART', NULL, '2024-06-09 06:19:44', '2024-06-09 06:19:44'),
(16, 7, 1, '330234567654', '', 9000000, 'PENDING', '2024-06-09 06:41:39', '2024-06-09 06:19:57', '2024-06-09 06:41:39'),
(17, 7, 1, '330234567654', '', 3000000, 'IN_CART', '2024-06-09 06:46:38', '2024-06-09 06:42:03', '2024-06-09 06:46:38'),
(18, 2, 1, '330234567654', '', 3000000, 'IN_CART', '2024-06-09 06:46:36', '2024-06-09 06:46:03', '2024-06-09 06:46:36'),
(23, 6, 1, '330234567654', '', -2000000, 'IN_CART', '2024-06-09 07:48:02', '2024-06-09 07:11:14', '2024-06-09 07:48:02'),
(24, 6, 1, '330234567654', '', -1000000, 'IN_CART', '2024-06-09 07:47:59', '2024-06-09 07:31:49', '2024-06-09 07:47:59'),
(25, 6, 1, '330234567654', '', -1000000, 'IN_CART', '2024-06-09 07:47:56', '2024-06-09 07:34:43', '2024-06-09 07:47:56'),
(26, 6, 1, '330234567654', '', 2000000, 'PENDING', NULL, '2024-06-09 07:37:34', '2024-06-09 07:46:29'),
(27, 8, 1, '330234567654', '', 3000000, 'IN_CART', NULL, '2024-06-09 07:59:52', '2024-06-09 07:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transactions_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `NIK` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transactions_id`, `username`, `nationality`, `NIK`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin1', 'ID', '330234567654', '0', NULL, '2024-06-07 07:04:04', '2024-06-07 07:04:04'),
(2, 2, 'admin1', 'ID', '330234567654', '0', NULL, '2024-06-07 07:45:59', '2024-06-07 07:45:59'),
(3, 3, 'admin1', 'ID', '330234567654', '0', NULL, '2024-06-07 07:46:38', '2024-06-07 07:46:38'),
(4, 4, 'admin1', 'ID', '330234567654', '0', NULL, '2024-06-07 07:46:51', '2024-06-07 07:46:51'),
(5, 5, 'admin1', 'ID', '330234567654', '0', NULL, '2024-06-07 07:47:19', '2024-06-07 07:47:19'),
(6, 5, 'asasa', 'sasasa', 'asas', '0', NULL, '2024-06-07 07:54:16', '2024-06-07 07:54:16'),
(7, 6, 'admin1', 'ID', '330234567654', '0', NULL, '2024-06-07 10:33:51', '2024-06-07 10:33:51'),
(8, 7, 'admin1', 'ID', '330234567654', '0', NULL, '2024-06-07 11:15:11', '2024-06-07 11:15:11'),
(9, 8, 'admin1', 'ID', '330234567654', '0', NULL, '2024-06-08 05:29:18', '2024-06-08 05:29:18'),
(10, 8, 'qwqw', 'qw', 'wqwq', '0', NULL, '2024-06-08 06:24:34', '2024-06-08 06:24:34'),
(11, 8, 'qwqw', 'qw', 'wqwq', '0', NULL, '2024-06-08 06:25:15', '2024-06-08 06:25:15'),
(12, 8, 'QQQ', 'WW', 'QQQ', '0', NULL, '2024-06-08 06:27:31', '2024-06-08 06:27:31'),
(13, 8, 'QQQ', 'WW', 'QQQ', '0', NULL, '2024-06-08 06:28:34', '2024-06-08 06:28:34'),
(26, 14, 'admin1', 'ID', '330234567654', NULL, NULL, '2024-06-09 05:41:09', '2024-06-09 05:41:09'),
(27, 14, '11212', '1212', '1212', '2024-06-09Loginnomads.png', NULL, '2024-06-09 05:43:59', '2024-06-09 05:43:59'),
(28, 14, 'qqwqw', 'qwqwq', 'qwqw', NULL, NULL, '2024-06-09 06:05:15', '2024-06-09 06:05:15'),
(61, 25, 'admin1', 'ID', '330234567654', NULL, '2024-06-09 07:34:49', '2024-06-09 07:34:43', '2024-06-09 07:34:49'),
(62, 25, '121212', '12121', '12121', '2024-06-09awan-aR_sT7qaQKM-unsplash.jpg', '2024-06-09 07:37:15', '2024-06-09 07:35:04', '2024-06-09 07:37:15'),
(63, 25, '2121', '2121', 'qwqwq1', NULL, '2024-06-09 07:37:24', '2024-06-09 07:37:08', '2024-06-09 07:37:24'),
(64, 26, 'admin1', 'ID', '330234567654', NULL, NULL, '2024-06-09 07:37:34', '2024-06-09 07:37:34'),
(65, 26, '1212', '12121', '121212121', '2024-06-09awan-aR_sT7qaQKM-unsplash.jpg', NULL, '2024-06-09 07:40:00', '2024-06-09 07:40:00'),
(66, 26, 'mega', 'id', '33082727', NULL, NULL, '2024-06-09 07:44:48', '2024-06-09 07:44:48'),
(67, 26, '1231211', 'as', '0867563', '2024-06-09awan-aR_sT7qaQKM-unsplash.jpg', NULL, '2024-06-09 07:45:12', '2024-06-09 07:45:12'),
(68, 27, 'admin1', 'ID', '330234567654', NULL, NULL, '2024-06-09 07:59:52', '2024-06-09 07:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `travel_packages`
--

CREATE TABLE `travel_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `about` longtext NOT NULL,
  `featured_event` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `foods` varchar(255) NOT NULL,
  `departure_date` date NOT NULL,
  `duration` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_packages`
--

INSERT INTO `travel_packages` (`id`, `title`, `slug`, `location`, `about`, `featured_event`, `language`, `foods`, `departure_date`, `duration`, `type`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Discover the Majestic Mount Bromo: A Volcanic Adventure', 'discover-the-majestic-mount-bromo-a-volcanic-adventure', 'Jawa Timur, Indonesia', '<b>Discover the Majestic Mount Bromo: A Volcanic Adventure. </b> <br>\r\n<br>\r\nPackage Includes:<br>\r\nRound-trip Transportation: Comfortable transfers from Surabaya or Malang to Mount Bromo.<br>\r\nAccommodation: 2 nights stay at a charming mountain lodge.<br>\r\nMeals: Daily breakfast, one packed breakfast for the sunrise tour, and one traditional Javanese dinner.<br>\r\nGuided Tours: Expert-led tours to Mount Bromo and surrounding attractions.<br>\r\nActivities: Jeep ride, horseback riding, and local village visit.<br>\r\nAirport Transfers: Pickup and drop-off services to and from Surabaya or Malang airport.<br>\r\n<br>\r\nBook Your Adventure Today! <br>\r\nEmbark on an unforgettable adventure to Mount Bromo with our all-inclusive package. From the mesmerizing sunrise to the unique cultural encounters, this trip promises an experience of a lifetime. Join us to explore the natural wonders and rich heritage of East Java!', 'Ticket Event', 'Indonesia, Inggris', 'Local Foods', '2024-06-28', '3D 2N', 'Adventure', 1000000, NULL, '2024-06-07 06:52:14', '2024-06-07 06:52:14'),
(2, 'Explore Nusa Penida: A Tropical Paradise Adventure', 'explore-nusa-penida-a-tropical-paradise-adventure', 'Klungkung, Indonesia', '<b>Explore Nusa Penida: A Tropical Paradise Adventure</b> <br>\r\n<br>\r\nPackage Includes:<br>\r\nRound-trip Transportation: Convenient boat transfers from Bali to Nusa Penida.<br>\r\nAccommodation: 3 nights stay at a 4-star beachfront resort.<br>\r\nMeals: Daily breakfast, welcome dinner, and one special seafood lunch by the beach.<br>\r\nGuided Tours: Expert-led tours to Nusa Penida\'s most iconic spots.<br>\r\nActivities: Snorkeling, cliff diving, and beach hopping.<br>\r\nAirport Transfers: Pickup and drop-off services to and from Bali airport.<br>\r\n<br>\r\nBook Your Adventure Today!<br>\r\nExperience the untouched beauty of Nusa Penida with our all-inclusive package. Whether you\'re an adventure seeker or looking for a relaxing getaway, this trip offers something for everyone. Join us for an unforgettable journey to paradise!', 'Ticket Event', 'Indonesia, Inggris', 'Local Foods', '2024-09-28', '3D 2N', 'Adventure', 3000000, NULL, '2024-06-07 06:54:40', '2024-06-07 06:54:40'),
(3, 'Experience the Enchanting Dieng Plateau: A Journey Through Time and Nature', 'experience-the-enchanting-dieng-plateau-a-journey-through-time-and-nature', 'Wonosobo, Jawa Tengah', '<b>Experience the Enchanting Dieng Plateau: A Journey Through Time and Nature</b> <br>\r\n<br>\r\nPackage Includes:<br>\r\n<br>\r\nRound-trip Transportation: Comfortable transfers from Yogyakarta or Semarang to Dieng Plateau.<br>\r\nAccommodation: 2 nights stay at a cozy highland guesthouse.<br>\r\nMeals: Daily breakfast, one packed breakfast for the sunrise tour, and one traditional Javanese dinner.<br>\r\nGuided Tours: Expert-led tours to Dieng Plateau’s most iconic sites.<br>\r\nActivities: Temple visits, crater exploration, and trekking.<br>\r\nAirport Transfers: Pickup and drop-off services to and from Yogyakarta or Semarang airport.<br>\r\n<br>\r\nBook Your Adventure Today!<br>\r\nDiscover the mystical highlands of Dieng Plateau with our all-inclusive package. From ancient temples and steaming craters to stunning sunrises and serene lakes, this trip offers a perfect blend of nature and history. Join us for an unforgettable journey into the heart of Central Java!', 'Ticket Event', 'Indonesia, Inggris', 'Local Foods', '2024-09-28', '3D 2N', 'Adventure', 1000000, NULL, '2024-06-08 09:13:33', '2024-06-08 09:21:10'),
(4, 'Savor the Flavors of Yogyakarta: A Culinary Adventure', 'savor-the-flavors-of-yogyakarta-a-culinary-adventure', 'Yogyakarta, Jawa Tengah', '<b>Savor the Flavors of Yogyakarta: A Culinary Adventure  </b> <br>\r\n<br>\r\nPackage Includes:<br>\r\nRound-trip Transportation: Comfortable transfers from Yogyakarta airport to your hotel.<br>\r\nAccommodation: 3 nights stay at a 4-star city hotel.<br>\r\nMeals: Daily breakfast, three guided food tours, and one special dinner at a top-rated restaurant.<br>\r\nGuided Tours: Expert-led culinary tours to Yogyakarta’s best food spots.<br>\r\nActivities: Cooking class, market visits, and cultural experiences.<br>\r\nAirport Transfers: Pickup and drop-off services to and from Yogyakarta airport.<br>\r\n<br>\r\nBook Your Culinary Adventure Today!<br>\r\nEmbark on a delectable journey through Yogyakarta with our all-inclusive culinary package. From bustling markets and flavorful street food to hands-on cooking classes and cultural experiences, this trip offers a feast for the senses. Join us to explore and taste the rich culinary heritage of Yogyakarta!', 'Ticket Event', 'Indonesia, Inggris', 'Local Foods', '2024-06-28', '3D 2N', 'Adventure', 1000000, NULL, '2024-06-08 10:02:46', '2024-06-08 10:02:46'),
(5, 'Taste of Bali: A Culinary Journey Through the Island of the Gods', 'taste-of-bali-a-culinary-journey-through-the-island-of-the-gods', 'Bali, Indonesia', '<b>Taste of Bali: A Culinary Journey Through the Island of the Gods</b> <br>\r\n<br>\r\nPackage Includes:<br>\r\nRound-trip Transportation: Comfortable transfers from Ngurah Rai International Airport to your hotel.<br>\r\nAccommodation: 4 nights stay at a 4-star resort.<br>\r\nMeals: Daily breakfast, three guided food tours, and one special Balinese dinner.<br>\r\nGuided Tours: Expert-led culinary tours to Bali’s most renowned food spots.<br>\r\nActivities: Cooking class, market visits, and cultural experiences.<br>\r\nAirport Transfers: Pickup and drop-off services to and from Ngurah Rai International Airport.<br>\r\n<br>\r\nBook Your Culinary Adventure Today!<br>\r\nEmbark on a flavorful journey through Bali with our all-inclusive culinary package. From bustling markets and hands-on cooking classes to beachfront seafood feasts and gourmet street food, this trip offers an unforgettable taste of the island. Join us to explore and savor the rich culinary traditions of Bali!', 'Ticket Event', 'Indonesia, Inggris', 'Local Foods', '2025-02-05', '3D 2N', 'Culinary', 1000000, NULL, '2024-06-08 10:14:30', '2024-06-08 10:14:30'),
(6, 'Romantic Honeymoon Getaway to Labuan Bajo', 'romantic-honeymoon-getaway-to-labuan-bajo', 'Labuan Bajo, Indonesia', '<b>Honeymoon Getaway to Labuan Bajo</b> <br>\r\n<br>\r\nPackage Includes:<br>\r\nRound-trip Transportation: Comfortable transfers from Komodo Airport to your resort.<br>\r\nAccommodation: 4 nights stay at a luxurious beachfront resort.<br>\r\nMeals: Daily breakfast, one romantic dinner, and a sunset dinner cruise.<br>\r\nGuided Tours: Expert-led tours to Komodo National Park and nearby islands.<br>\r\nActivities: Snorkeling, island hopping, and beach excursions.<br>\r\nAirport Transfers: Pickup and drop-off services to and from Komodo Airport.<br>\r\n<br>\r\nBook Your Honeymoon Adventure Today!<br>\r\nCelebrate your love with an unforgettable honeymoon in Labuan Bajo. From encountering majestic Komodo dragons and exploring stunning islands to enjoying luxurious accommodations and romantic dinners, this package offers the perfect blend of adventure and relaxation. Join us for a dreamy getaway in the heart of Indonesia’s natural beauty!', 'Ticket Event', 'Indonesia, Inggris', 'Local Foods', '2025-04-24', '3D 2N', 'Honeymoon', 1000000, NULL, '2024-06-08 10:20:08', '2024-06-08 10:20:08'),
(7, 'Dual Destination Adventure: Lake Toba and Labuan Bajo', 'dual-destination-adventure-lake-toba-and-labuan-bajo', 'Labuan Bajo, Indonesia', '<b>Dual Destination Adventure: Lake Toba and Labuan Bajo</b> <br>\r\n<br>\r\nPackage Includes:<br>\r\nRound-trip Transportation: Comfortable transfers from Medan Airport to Lake Toba and from Komodo Airport to Labuan Bajo.<br>\r\nAccommodation: 3 nights stay at a lakeside resort in Lake Toba and 3 nights stay at a beachfront resort in Labuan Bajo.<br>\r\nMeals: Daily breakfast, one welcome dinner, one traditional Batak lunch, and one sunset dinner cruise.<br>\r\nGuided Tours: Expert-led tours to Samosir Island and Komodo National Park.<br>\r\nActivities: Boat rides, cultural experiences, snorkeling, island hopping, and beach excursions.<br>\r\nAirport Transfers: Pickup and drop-off services at Medan Airport and Komodo Airport.<br>\r\n<br>\r\n\r\nBook Your Dual Destination Adventure Today!<br>\r\nExperience the breathtaking beauty of Lake Toba and the exotic charm of Labuan Bajo with our all-inclusive package. From cultural explorations and scenic landscapes to thrilling encounters with Komodo dragons and serene beach moments, this trip offers an unforgettable adventure. Join us for a dual destination journey that promises the best of Indonesia\'s natural wonders and cultural treasures!', 'Ticket Event', 'Indonesia, Inggris', 'Local Foods', '2025-03-01', '3D 2N', 'Honeymoon', 1000000, NULL, '2024-06-08 10:25:57', '2024-06-08 10:25:57'),
(8, 'Discover the Charm of Bandung: A Blend of Nature and Culture', 'discover-the-charm-of-bandung-a-blend-of-nature-and-culture', 'Bandung, Jawa Barat', '<b>Discover the Charm of Bandung: A Blend of Nature and Culture</b> <br>\r\n<br>\r\nPackage Includes:<br>\r\nRound-trip Transportation: Comfortable transfers from Jakarta to Bandung.<br>\r\nAccommodation: 3 nights stay at a 4-star city hotel.<br>\r\nMeals: Daily breakfast, one welcome dinner, and one lunch at a local restaurant.<br>\r\nGuided Tours: Expert-led tours to Bandung’s top attractions.<br>\r\nActivities: Volcano trek, tea plantation visit, shopping tour, and cultural experiences.<br>\r\nAirport Transfers: Pickup and drop-off services to and from Jakarta airport.<br>\r\n<br>\r\n\r\nBook Your Destination Adventure Today!<br>\r\nExperience the diverse attractions of Bandung with our all-inclusive package. From volcanic landscapes and hot springs to tea plantations and vibrant city streets, this trip offers something for everyone. Join us for an unforgettable journey through the heart of West Java!', 'Ticket Event', 'Indonesia, Inggris', 'Local Foods', '2025-03-01', '3D 2N', 'Adventure and Culinary', 3000000, NULL, '2024-06-08 10:25:57', '2024-06-09 07:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL DEFAULT 'USER',
  `NIK` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `roles`, `NIK`) VALUES
(1, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$c6WZ3Knq6Q0REZl5YCAS4eqdx0CZLf9KKxr77FwS0sG4qnaptoai6', NULL, '2024-06-07 06:35:51', '2024-06-07 06:35:51', 'admin1', 'ADMIN', '330234567654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_packages`
--
ALTER TABLE `travel_packages`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `travel_packages`
--
ALTER TABLE `travel_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
