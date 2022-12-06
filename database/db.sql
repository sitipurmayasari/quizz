-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table quizz_online.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table quizz_online.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.migrations: ~10 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(11, '2014_10_12_000000_create_users_table', 1),
	(12, '2014_10_12_100000_create_password_resets_table', 1),
	(13, '2019_08_19_000000_create_failed_jobs_table', 1),
	(14, '2021_01_18_114814_create_permission_tables', 1),
	(15, '2021_01_18_204503_add_deleted_at_to_users_table', 1),
	(16, '2021_01_19_130702_create_quiz_table', 1),
	(17, '2021_01_19_131153_create_questions_table', 1),
	(18, '2021_01_19_131835_create_options_table', 1),
	(19, '2021_01_19_133427_create_user_question_answer_table', 1),
	(20, '2021_01_21_221609_create_quiz_invites_table', 1),
	(21, '2022_10_30_080753_create_open_materi_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table quizz_online.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.model_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Dumping structure for table quizz_online.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.model_has_roles: ~2 rows (approximately)
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\User', 1),
	(3, 'App\\User', 3);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Dumping structure for table quizz_online.open_materi
CREATE TABLE IF NOT EXISTS `open_materi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `materi_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.open_materi: ~15 rows (approximately)
/*!40000 ALTER TABLE `open_materi` DISABLE KEYS */;
INSERT INTO `open_materi` (`id`, `user_id`, `materi_code`, `status`, `created_at`, `updated_at`) VALUES
	(1, 3, 'pengertian', 1, '2022-12-06 11:32:41', '2022-12-06 11:32:42'),
	(2, 3, 'penjumlahanbiasa', 1, '2022-12-06 11:32:43', '2022-12-06 11:32:44'),
	(4, 3, 'penjumlahancampuran', 1, '2022-12-06 11:35:51', '2022-12-06 11:36:24'),
	(5, 3, 'penjumlahandesimal', 1, '2022-12-06 11:35:51', '2022-12-06 13:41:53'),
	(6, 3, 'penguranganbiasa', 1, '2022-12-06 11:35:52', '2022-12-06 14:06:17'),
	(7, 3, 'pengurangancampuran', 1, '2022-12-06 11:35:52', '2022-12-06 14:12:33'),
	(8, 3, 'pengurangandesimal', 1, '2022-12-06 11:35:52', '2022-12-06 14:18:42'),
	(9, 3, 'rangkuman_1', 1, '2022-12-06 11:35:53', '2022-12-06 14:20:48'),
	(10, 3, 'perkalianbiasa', 0, '2022-12-06 11:35:53', '2022-12-06 11:36:01'),
	(11, 3, 'perkaliancampuran', 0, '2022-12-06 11:35:54', '2022-12-06 14:46:39'),
	(12, 3, 'perkaliandesimal', 0, '2022-12-06 11:35:55', '2022-12-06 14:59:05'),
	(13, 3, 'pembagianbiasa', 0, '2022-12-06 11:35:55', '2022-12-06 15:01:41'),
	(14, 3, 'pembagiancampuran', 0, '2022-12-06 11:35:56', '2022-12-06 15:03:03'),
	(15, 3, 'pembagiandesimal', 0, '2022-12-06 11:35:56', '2022-12-06 15:19:18'),
	(16, 3, 'rangkuman_2', 0, '2022-12-06 11:35:57', '2022-12-06 15:19:33');
/*!40000 ALTER TABLE `open_materi` ENABLE KEYS */;

-- Dumping structure for table quizz_online.options
CREATE TABLE IF NOT EXISTS `options` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` bigint(20) unsigned NOT NULL,
  `option` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_right_option` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `options_question_id_foreign` (`question_id`),
  CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.options: ~12 rows (approximately)
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` (`id`, `question_id`, `option`, `is_right_option`) VALUES
	(1, 1, '<p>4</p>', 0),
	(2, 1, '<p>6</p>', 1),
	(3, 1, '<p>7</p>', 0),
	(4, 1, '<p>10</p>', 0),
	(5, 2, '<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>10</mn></mfrac></math></p>', 1),
	(6, 2, '<p>10</p>', 0),
	(7, 2, '<p>1</p>', 0),
	(8, 2, '<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>10</mn></mfrac></math></p>', 0),
	(9, 3, '<p>5</p>', 0),
	(10, 3, '<p>6</p>', 0),
	(11, 3, '<p>7</p>', 0),
	(12, 3, '<p>8</p>', 1);
/*!40000 ALTER TABLE `options` ENABLE KEYS */;

-- Dumping structure for table quizz_online.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table quizz_online.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.permissions: ~2 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'manage_user', 'web', '2022-10-29 02:48:50', '2022-10-29 02:48:50'),
	(2, 'manage_role', 'web', '2022-10-29 02:48:50', '2022-10-29 02:48:50'),
	(3, 'manage_quiz', 'web', '2022-10-29 02:48:50', '2022-10-29 02:48:50');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table quizz_online.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `quiz_id` bigint(20) unsigned NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_quiz_id_foreign` (`quiz_id`),
  CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.questions: ~0 rows (approximately)
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`id`, `quiz_id`, `question`, `type`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 1, '<p>3 * 2</p>', 'choice', 1, '2022-10-29 15:03:58', '2022-10-29 22:58:13'),
	(2, 1, '<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>10</mn></mfrac><mo>+</mo><mfrac><mn>1</mn><mn>8</mn></mfrac><mo>&#160;</mo><mo>=</mo><mo>&#160;</mo><mo>.</mo><mo>.</mo><mo>.</mo><mo>.</mo></math></p>', 'choice', 1, '2022-10-29 16:51:21', '2022-10-29 16:51:21'),
	(3, 3, '<p>8 * 1 = ... ?</p>', 'choice', 1, '2022-10-30 07:47:31', '2022-10-30 07:47:31');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;

-- Dumping structure for table quizz_online.quiz
CREATE TABLE IF NOT EXISTS `quiz` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BAB I',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('AKTIF','TIDAK AKTIF') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'AKTIF',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.quiz: ~4 rows (approximately)
/*!40000 ALTER TABLE `quiz` DISABLE KEYS */;
INSERT INTO `quiz` (`id`, `type`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'BAB I', 'Penambahan dan Pengurangan Pecahan', 'bab-1', 'AKTIF', '2022-10-29 14:51:43', '2022-10-29 14:51:43'),
	(2, 'BAB II', 'Kuis Perkalian dan Pembagian Pecahan', 'kuis-perkalian-dan-pembagian-pecahan', 'AKTIF', '2022-10-30 01:50:14', '2022-10-30 01:50:14'),
	(3, 'EVALUASI', 'Evaluasi Akhir', 'evaluasi-akhir', 'AKTIF', '2022-10-30 07:45:40', NULL);
/*!40000 ALTER TABLE `quiz` ENABLE KEYS */;

-- Dumping structure for table quizz_online.quiz_invites
CREATE TABLE IF NOT EXISTS `quiz_invites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `quiz_invites_token_unique` (`token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.quiz_invites: ~0 rows (approximately)
/*!40000 ALTER TABLE `quiz_invites` DISABLE KEYS */;
INSERT INTO `quiz_invites` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
	(1, 'user@gmail.com', 'Ig5qsof6szpjKRWM', '2022-10-29 15:06:55', '2022-10-29 15:06:55');
/*!40000 ALTER TABLE `quiz_invites` ENABLE KEYS */;

-- Dumping structure for table quizz_online.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.roles: ~2 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'Admin / Guru', 'web', '2022-10-29 02:48:50', '2022-10-29 02:48:50'),
	(3, 'User / Siswa', 'web', '2022-10-29 02:48:50', '2022-10-29 02:48:50');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table quizz_online.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.role_has_permissions: ~3 rows (approximately)
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Dumping structure for table quizz_online.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `asal`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Maya', 'admin@gmail.com', NULL, '$2y$10$0pZFvab3j/SGUDxssajP8OUXc1n3xYocnKTPvmQydfiDqgoPynS3K', NULL, NULL, '2022-10-29 02:48:50', '2022-10-29 02:48:50', NULL),
	(3, 'user2', 'user@gmail.com', NULL, '$2y$10$F6EoBsl6sB6H66EXmJFpmOt1GxfRsfiVoOzjAhahz9dw6sY73t4H6', 'SDN 1', NULL, '2022-10-29 17:12:41', '2022-10-29 17:12:41', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table quizz_online.user_question_answer
CREATE TABLE IF NOT EXISTS `user_question_answer` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` bigint(20) unsigned NOT NULL,
  `option_id` bigint(20) unsigned NOT NULL,
  `is_right` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_question_answer_question_id_foreign` (`question_id`),
  KEY `user_question_answer_option_id_foreign` (`option_id`),
  CONSTRAINT `user_question_answer_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_question_answer_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table quizz_online.user_question_answer: ~3 rows (approximately)
/*!40000 ALTER TABLE `user_question_answer` DISABLE KEYS */;
INSERT INTO `user_question_answer` (`id`, `email`, `question_id`, `option_id`, `is_right`, `created_at`, `updated_at`) VALUES
	(19, 'user@gmail.com', 3, 12, 1, NULL, NULL),
	(22, 'user@gmail.com', 2, 5, 1, NULL, NULL),
	(23, 'user@gmail.com', 1, 1, 0, NULL, NULL);
/*!40000 ALTER TABLE `user_question_answer` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
