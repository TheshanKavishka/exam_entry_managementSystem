-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2023 at 06:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentms`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coursecode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coursename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genorspec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `coursecode`, `coursename`, `year`, `semester`, `genorspec`, `degree`, `department`, `faculty`, `created_at`, `updated_at`) VALUES
(1, 'ENS1112', 'Fundamentals in Environmental Chemistry', '1', '1', 'spec', 'Bachelor of Science Honours in Environmental Science', 'Department of bio-science', 'Faculty of Applied Science', NULL, NULL),
(2, 'ENS1121', 'Analysis of Chemical Elements and\r\nCompounds\r\n', '1', '1', 'spec', 'Bachelor of Science Honours in Environmental Science', 'Department of bio-science', 'Faculty of Applied Science', NULL, NULL),
(3, 'ENS1212', 'Environment and Agriculture', '1', '2', 'spec', 'Bachelor of Science Honours in Environmental Science', 'Department of bio-science', 'Faculty of Applied Science', NULL, NULL),
(4, 'ENS1223', 'Soil Science', '1', '2', 'spec', 'Bachelor of Science Honours in Environmental Science', 'Department of bio-science', 'Faculty of Applied Science', NULL, NULL),
(5, 'ENS2112', 'Biodiversity and Conservation', '2', '1', 'spec', 'Bachelor of Science Honours in Environmental Science', 'Department of bio-science', 'Faculty of Applied Science', NULL, NULL),
(6, 'ENS2213 ', 'Applied Hydrology and Water Re\r\nsource Management\r\n', '2', '2', 'spec', 'Bachelor of Science Honours in Environmental Science', 'Department of bio-science', 'Faculty of Applied Science', NULL, NULL),
(7, 'ENS2222', 'Applied Ecology and Community \r\nEnvironment\r\n', '2', '2', 'spec', 'Bachelor of Science Honours in Environmental Science', 'Department of bio-science', 'Faculty of Applied Science', NULL, NULL),
(8, 'ENS3113', 'Geographic Information System and Remote Sensing', '3', '1', 'spec', 'Bachelor of Science Honours in Environmental Science', 'Department of bio-science', 'Faculty of Applied Science', NULL, NULL),
(9, 'ENS3122', 'Wildlife Biology and Management', '3', '1', 'spec', 'Bachelor of Science Honours in Environmental Science', 'Department of bio-science', 'Faculty of Applied Science', NULL, NULL),
(10, 'ENS3213', 'Statistics for Environmental Science', '3', '2', 'spec', 'Bachelor of Science Honours in Environmental Science', 'Department of bio-science', 'Faculty of Applied Science', NULL, NULL),
(11, 'ENS4112', 'Project Planning and Management', '4', '1', 'spec', 'Bachelor of Science Honours in Environmental Science', 'Department of bio-science', 'Faculty of Applied Science', NULL, NULL),
(12, 'ENS4211', 'Industrial Training', '4', '2', 'spec', 'Bachelor of Science Honours in Environmental Science', 'Department of bio-science', 'Faculty of Applied Science', NULL, NULL),
(14, 'AMA1113 ', 'Differential Equations', '1', '1', 'gen', 'Bachelor of Science in Applied Mathematics and Computing ', 'Department of physical science ', 'Faculty of Applied Science', NULL, NULL),
(15, 'PMA1113', 'Foundation of Mathematics', '1', '1', 'gen', 'Bachelor of Science in Applied Mathematics and Computing ', 'Department of physical science', 'Faculty of Applied Science', NULL, NULL),
(16, 'AMA1213', 'Methods of Applied Mathematics', '1', '2', 'gen', 'Bachelor of Science in Applied Mathematics and Computing', 'Department of physical science', 'Faculty of Applied Science', NULL, NULL),
(17, 'AMA1213 ', 'Methods of Applied Mathematics', '1', '2', 'gen', 'Bachelor of Science in Applied Mathematics and Computing ', 'Department of physical science', 'Faculty of Applied Science', NULL, NULL),
(18, 'AMA2113', 'Optimization I', '2', '1', 'gen', 'Bachelor of Science in Applied Mathematics and Computing', 'Department of physical science', 'Faculty of Applied Science', NULL, NULL),
(19, 'AMA2213', 'Mechanics', '2', '2', 'gen', 'Bachelor of Science in Applied Mathematics and Computing', 'Department of physical science', 'Faculty of Applied Science', NULL, NULL),
(20, 'AMA3113 ', 'Mathematical Modelling', '3', '1', 'gen', 'Bachelor of Science in Applied Mathematics and ', 'Department of physical science', 'Faculty of Applied Science', NULL, NULL),
(21, 'AMA3213', 'Analytical Dynamics', '3', '2', 'gen', 'Bachelor of Science in Applied Mathematics and Computing', 'Department of physical science', 'Faculty of Applied Science', NULL, NULL),
(22, 'TICT1114', 'Essentials of ICT', '1', '1', 'spec', 'Bachelor of Information and Communication Technology', 'Technological Studies', 'Faculty of Technological Studies', NULL, NULL),
(23, 'TICT1123', 'Mathematics for Technology', '1', '1', 'spec', 'Bachelor of Information and Communication Technology', 'Technological Studies', 'Faculty of Technological Studies', NULL, NULL),
(24, 'TICT1212', 'Discrete Structures', '1', '2', 'spec', 'Bachelor of Information and Communication Technology', 'Faculty of Technological Studies', 'Technological Studies', NULL, NULL),
(25, 'TICT2212', 'Data Structures and Algorithms', '2', '1', 'spec', 'Bachelor of Information and Communication Technology', 'Technological Studies', 'Faculty of Technological Studies', NULL, NULL),
(26, 'TICT2113', 'Operational Research', '2', '2', 'spec', 'Bachelor of Information and Communication Technology', 'Technological Studies', 'Faculty of Technological Studies', NULL, NULL),
(27, 'TICT3113', 'Computer Architecture and Organization', '3', '1', 'spec', 'Bachelor of Information and Communication Technology', 'Technological Studies', 'Faculty of Technological Studies', NULL, NULL),
(28, 'TICT3214', 'Advanced Computer Networks and Administration', '3', '2', 'spec', 'Bachelor of Information and Communication Technology', 'Technological Studies', 'Faculty of Technological Studies', NULL, NULL),
(29, 'TICT4116', 'Group Research Project', '4', '1', 'spec', 'Bachelor of Information and Communication Technology', 'Technological Studies', 'Faculty of Technological Studies', NULL, NULL),
(30, 'TICT4213', 'Data Mining and Data Warehousing', '4', '2', 'spec', 'Bachelor of Information and Communication Technology', 'Technological Studies', 'Faculty of Technological Studies', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `examuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examcid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examyear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examsem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examca` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `examatt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lech` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `hodch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deanch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `drch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `examuid`, `examcid`, `examname`, `examyear`, `examsem`, `examca`, `examatt`, `lech`, `hodch`, `deanch`, `drch`, `created_at`, `updated_at`) VALUES
(1, '001', '1', 'end', '1', '1', '10', 'true', '1', '1', '1', '1', '2023-01-29 10:15:48', '2023-01-29 10:15:48'),
(2, '001', ' 2', 'end', '1', '1', NULL, NULL, '0', '0', '0', '0', '2023-01-29 10:15:48', '2023-01-29 10:15:48');

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
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_01_25_123817_create_sessions_table', 1),
(7, '2023_01_25_134600_create_students_table', 1),
(8, '2023_01_25_134831_create_courses_table', 1),
(9, '2023_01_25_152918_create_lecturers_table', 1),
(10, '2023_01_26_193734_create_exams_table', 1),
(11, '2023_01_28_204307_create_sigs_table', 2),
(12, '2023_01_29_045003_create_roles_table', 2);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HZJcTqDv24TREXjR3vebXnXTQyN3DuGtzgt7c7U2', 3, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicThkblRWZGRmZDh5eWp4dVBBYzhnVmVKZW92REQyR0pVR1dtMkFrYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sZWN0dXJlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRYc0xXUWtvV21wcEtDM3dQVmlUeTJlR250d1BIQThZZGdzOXozTlFiSTRkeHFvdTNUOGY1VyI7fQ==', 1675014232);

-- --------------------------------------------------------

--
-- Table structure for table `sigs`
--

CREATE TABLE `sigs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `suid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sparth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sigs`
--

INSERT INTO `sigs` (`id`, `suid`, `sparth`, `created_at`, `updated_at`) VALUES
(1, '1', '1675007611.png', '2023-01-29 10:23:31', '2023-01-29 10:23:31'),
(2, '1', '1675007624.jpg', '2023-01-29 10:23:44', '2023-01-29 10:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `address`, `tel`, `regno`, `signature`, `faculty`, `doa`, `year`, `degree`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'supun', 'supun@gmail.com', 'test', '00000000000', '001', '', 'Faculty of Applied Science', '', '1', 'Bachelor of Science Honours in Environmental Science', '1', NULL, NULL);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '5',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'supun', 'supun@gmail.com', NULL, '$2y$10$XsLWQkoWmppKC3wPViTy2eGntwPHA8Ydgs9z3NQbI4dxqou3T8f5W', NULL, NULL, NULL, '1', NULL, NULL, NULL, '2023-01-28 15:19:30', '2023-01-28 15:19:30'),
(2, 'student', 'student@gmail.com', NULL, '$2y$10$XsLWQkoWmppKC3wPViTy2eGntwPHA8Ydgs9z3NQbI4dxqou3T8f5W', NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL),
(3, 'lecture', 'lecture@gmail.com', NULL, '$2y$10$XsLWQkoWmppKC3wPViTy2eGntwPHA8Ydgs9z3NQbI4dxqou3T8f5W', NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL),
(4, 'hod', 'hod@gmail.com', NULL, '$2y$10$XsLWQkoWmppKC3wPViTy2eGntwPHA8Ydgs9z3NQbI4dxqou3T8f5W', NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL),
(5, 'dean', 'dean@gmail.com', NULL, '$2y$10$XsLWQkoWmppKC3wPViTy2eGntwPHA8Ydgs9z3NQbI4dxqou3T8f5W', NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL),
(6, 'dr', 'dr@gmail.com', NULL, '$2y$10$XsLWQkoWmppKC3wPViTy2eGntwPHA8Ydgs9z3NQbI4dxqou3T8f5W', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sigs`
--
ALTER TABLE `sigs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sigs`
--
ALTER TABLE `sigs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
