-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 08:21 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rehab`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_descript` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `level_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `rating_id` int(10) UNSIGNED NOT NULL,
  `emoji_id` int(10) UNSIGNED NOT NULL,
  `tip_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `short_descript`, `description`, `picture`, `level_id`, `category_id`, `rating_id`, `emoji_id`, `tip_id`, `created_at`, `updated_at`) VALUES
(1, 'Do the Twist', 'Help your child', 'Help your child practice twisting to the right and left while sitting.', '1527428194.png', 3, 1, 2, 1, NULL, '2018-05-27 12:36:34', '2018-05-27 12:36:34'),
(2, 'Where is it?', 'Help your child', 'Help your child to find hidden objects and to understand that objects still exist even after the have been hidden', '1527428315.png', 2, 2, 1, 1, NULL, '2018-05-27 12:38:35', '2018-05-27 12:38:35'),
(3, 'Want a Cracker?', 'Help them learn', 'Help your child to learn what words mean', '1527527567.png', 1, 4, 3, 3, NULL, '2018-05-27 12:43:47', '2018-05-27 12:43:47'),
(4, 'Dancing with the Stars', 'Help enjoy music', 'Help your child to enjoy music and making a connection with you by getting a positive reaction.', '1527428839.png', 1, 2, 2, 1, NULL, '2018-05-27 12:47:19', '2018-05-27 12:47:19'),
(5, 'Life’s a Beach!', 'Stimulate child’s', 'To stimulate your child’s tactile sense...', '1527428952.png', 2, 3, 2, 3, NULL, '2018-05-27 12:49:13', '2018-05-27 12:49:13'),
(6, 'Snack Time for Two', 'Small food item', 'Any small food item will help with this activity.', '1527429088.png', 4, 1, 2, 1, NULL, '2018-05-27 12:51:28', '2018-05-27 12:51:28'),
(7, 'Animal Magic', 'Ability to imitate', 'Your child’s ability to imitate and copy sounds is vital to overall development including speech and language.', '1527429232.png', 4, 4, 2, 1, NULL, '2018-05-27 12:53:52', '2018-05-27 12:53:52'),
(8, 'Bedtime', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527501658.png', 1, 4, 1, 1, NULL, '2018-05-28 09:00:58', '2018-05-28 09:00:58'),
(9, 'Playtime', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527520231.png', 2, 1, 2, 1, NULL, '2018-05-28 14:10:31', '2018-05-28 14:10:31'),
(10, 'Party Time', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527520337.png', 2, 5, 3, 3, NULL, '2018-05-28 14:12:17', '2018-05-28 14:12:17'),
(11, 'Fetch', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527520972.jpg', 2, 1, 1, 4, NULL, '2018-05-28 14:22:53', '2018-05-28 14:22:53'),
(12, 'Happy Hippo', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527521256.png', 4, 4, 2, 1, NULL, '2018-05-28 14:27:36', '2018-05-28 14:27:36'),
(13, 'Happy Heart', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527521327.png', 3, 5, 2, 1, NULL, '2018-05-28 14:28:47', '2018-05-28 14:28:47'),
(14, 'The Crown Jewel', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus.', '1527521399.png', 4, 1, 3, 3, NULL, '2018-05-28 14:29:59', '2018-05-28 14:29:59'),
(15, 'Picnic', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527521527.png', 1, 4, 1, 1, NULL, '2018-05-28 14:32:07', '2018-05-28 14:32:07'),
(16, 'Lion Heart', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527429232.png', 2, 1, 2, 1, NULL, '2018-05-28 14:38:15', '2018-05-28 14:38:15'),
(17, 'Spring Time', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus.', '1527521969.png', 4, 2, 2, 1, NULL, '2018-05-28 14:39:29', '2018-05-28 14:39:29'),
(18, 'Happy in Pink', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527522034.jpg', 3, 4, 1, 4, NULL, '2018-05-28 14:40:34', '2018-05-28 14:40:34'),
(19, 'Animal Sounds', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus.', '1527522134.jpg', 3, 4, 1, 1, NULL, '2018-05-28 14:42:15', '2018-05-28 14:42:15'),
(20, 'Sing a Song', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527527138.png', 2, 4, 3, 3, NULL, '2018-05-28 16:05:38', '2018-05-28 16:05:38'),
(21, 'Bedtime Story', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527527222.jpg', 4, 2, 2, 1, NULL, '2018-05-28 16:07:02', '2018-05-28 16:07:02'),
(22, 'How to?', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527527315.png', 4, 5, 3, 2, NULL, '2018-05-28 16:08:35', '2018-05-28 16:08:35'),
(23, 'Friendship', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527527395.png', 4, 1, 2, 1, NULL, '2018-05-28 16:09:55', '2018-05-28 16:09:55'),
(24, 'Dinner Time', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527428627.png', 1, 3, 2, 1, NULL, '2018-05-28 16:12:47', '2018-05-28 16:12:47'),
(25, 'Space Explorer', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527527651.jpg', 4, 3, 3, 3, NULL, '2018-05-28 16:14:11', '2018-05-28 16:14:11'),
(26, 'Exotic Animal', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527527708.png', 2, 3, 2, 1, NULL, '2018-05-28 16:15:08', '2018-05-28 16:15:08'),
(27, 'Flower Power', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus.', '1527527929.png', 3, 3, 1, 1, NULL, '2018-05-28 16:18:49', '2018-05-28 16:18:49'),
(28, 'Sharing', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527529017.png', 1, 5, 1, 1, NULL, '2018-05-28 16:36:57', '2018-05-28 16:36:57'),
(29, 'Counting', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus. Maecenas dapibus, lacus a commodo tristique, mauris tellus vestibulum dui, eu lacinia dolor lacus metus.', '1527529121.jpg', 3, 3, 2, 1, NULL, '2018-05-28 16:38:41', '2018-05-28 16:38:41'),
(30, 'Painting', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus.', '1527530339.jpg', 1, 1, 1, 1, NULL, '2018-05-28 16:58:59', '2018-05-28 16:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `activity_step`
--

CREATE TABLE `activity_step` (
  `id` int(10) UNSIGNED NOT NULL,
  `activity_id` int(10) UNSIGNED NOT NULL,
  `step_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_step`
--

INSERT INTO `activity_step` (`id`, `activity_id`, `step_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2018-05-27 12:37:08', '2018-05-27 12:37:08'),
(2, 1, 3, '2018-05-27 12:37:08', '2018-05-27 12:37:08'),
(3, 1, 4, '2018-05-27 12:37:08', '2018-05-27 12:37:08'),
(4, 2, 5, '2018-05-27 12:39:29', '2018-05-27 12:39:29'),
(5, 2, 6, '2018-05-27 12:39:29', '2018-05-27 12:39:29'),
(6, 2, 7, '2018-05-27 12:39:29', '2018-05-27 12:39:29'),
(7, 2, 8, '2018-05-27 12:39:29', '2018-05-27 12:39:29'),
(8, 3, 9, '2018-05-27 12:45:28', '2018-05-27 12:45:28'),
(9, 3, 10, '2018-05-27 12:45:28', '2018-05-27 12:45:28'),
(10, 3, 11, '2018-05-27 12:45:28', '2018-05-27 12:45:28'),
(11, 4, 12, '2018-05-27 12:47:54', '2018-05-27 12:47:54'),
(12, 4, 13, '2018-05-27 12:47:54', '2018-05-27 12:47:54'),
(13, 4, 14, '2018-05-27 12:47:54', '2018-05-27 12:47:54'),
(14, 4, 15, '2018-05-27 12:47:54', '2018-05-27 12:47:54'),
(15, 5, 16, '2018-05-27 12:50:07', '2018-05-27 12:50:07'),
(16, 5, 17, '2018-05-27 12:50:07', '2018-05-27 12:50:07'),
(17, 5, 18, '2018-05-27 12:50:07', '2018-05-27 12:50:07'),
(18, 6, 19, '2018-05-27 12:52:21', '2018-05-27 12:52:21'),
(19, 6, 20, '2018-05-27 12:52:21', '2018-05-27 12:52:21'),
(20, 6, 21, '2018-05-27 12:52:21', '2018-05-27 12:52:21'),
(21, 6, 22, '2018-05-27 12:52:21', '2018-05-27 12:52:21'),
(22, 7, 23, '2018-05-27 12:54:19', '2018-05-27 12:54:19'),
(23, 7, 24, '2018-05-27 12:54:19', '2018-05-27 12:54:19'),
(24, 7, 25, '2018-05-27 12:54:19', '2018-05-27 12:54:19'),
(25, 8, 2, '2018-05-28 09:01:12', '2018-05-28 09:01:12'),
(26, 8, 3, '2018-05-28 09:01:12', '2018-05-28 09:01:12'),
(27, 8, 4, '2018-05-28 09:01:12', '2018-05-28 09:01:12'),
(28, 9, 5, '2018-05-28 14:10:48', '2018-05-28 14:10:48'),
(29, 9, 6, '2018-05-28 14:10:48', '2018-05-28 14:10:48'),
(30, 9, 7, '2018-05-28 14:10:48', '2018-05-28 14:10:48'),
(31, 10, 9, '2018-05-28 14:12:41', '2018-05-28 14:12:41'),
(32, 10, 10, '2018-05-28 14:12:41', '2018-05-28 14:12:41'),
(33, 10, 11, '2018-05-28 14:12:41', '2018-05-28 14:12:41'),
(34, 11, 27, '2018-05-28 14:23:11', '2018-05-28 14:23:11'),
(35, 11, 28, '2018-05-28 14:23:11', '2018-05-28 14:23:11'),
(36, 11, 29, '2018-05-28 14:23:11', '2018-05-28 14:23:11'),
(37, 12, 26, '2018-05-28 14:27:48', '2018-05-28 14:27:48'),
(38, 12, 27, '2018-05-28 14:27:48', '2018-05-28 14:27:48'),
(39, 12, 28, '2018-05-28 14:27:48', '2018-05-28 14:27:48'),
(40, 13, 27, '2018-05-28 14:28:59', '2018-05-28 14:28:59'),
(41, 13, 28, '2018-05-28 14:28:59', '2018-05-28 14:28:59'),
(42, 13, 29, '2018-05-28 14:28:59', '2018-05-28 14:28:59'),
(43, 14, 27, '2018-05-28 14:30:14', '2018-05-28 14:30:14'),
(44, 14, 28, '2018-05-28 14:30:14', '2018-05-28 14:30:14'),
(45, 14, 29, '2018-05-28 14:30:14', '2018-05-28 14:30:14'),
(46, 15, 26, '2018-05-28 14:32:18', '2018-05-28 14:32:18'),
(47, 15, 27, '2018-05-28 14:32:18', '2018-05-28 14:32:18'),
(48, 15, 28, '2018-05-28 14:32:18', '2018-05-28 14:32:18'),
(49, 16, 26, '2018-05-28 14:38:32', '2018-05-28 14:38:32'),
(50, 16, 27, '2018-05-28 14:38:32', '2018-05-28 14:38:32'),
(51, 16, 28, '2018-05-28 14:38:32', '2018-05-28 14:38:32'),
(52, 17, 26, '2018-05-28 14:39:50', '2018-05-28 14:39:50'),
(53, 17, 27, '2018-05-28 14:39:50', '2018-05-28 14:39:50'),
(54, 17, 28, '2018-05-28 14:39:50', '2018-05-28 14:39:50'),
(55, 18, 27, '2018-05-28 14:40:44', '2018-05-28 14:40:44'),
(56, 18, 28, '2018-05-28 14:40:44', '2018-05-28 14:40:44'),
(57, 18, 29, '2018-05-28 14:40:44', '2018-05-28 14:40:44'),
(58, 19, 27, '2018-05-28 14:42:26', '2018-05-28 14:42:26'),
(59, 19, 28, '2018-05-28 14:42:26', '2018-05-28 14:42:26'),
(60, 19, 29, '2018-05-28 14:42:26', '2018-05-28 14:42:26'),
(61, 20, 26, '2018-05-28 16:05:49', '2018-05-28 16:05:49'),
(62, 20, 27, '2018-05-28 16:05:49', '2018-05-28 16:05:49'),
(63, 20, 28, '2018-05-28 16:05:49', '2018-05-28 16:05:49'),
(64, 21, 27, '2018-05-28 16:07:15', '2018-05-28 16:07:15'),
(65, 21, 28, '2018-05-28 16:07:15', '2018-05-28 16:07:15'),
(66, 21, 29, '2018-05-28 16:07:15', '2018-05-28 16:07:15'),
(67, 22, 27, '2018-05-28 16:08:53', '2018-05-28 16:08:53'),
(68, 22, 28, '2018-05-28 16:08:53', '2018-05-28 16:08:53'),
(69, 22, 29, '2018-05-28 16:08:53', '2018-05-28 16:08:53'),
(70, 23, 26, '2018-05-28 16:10:11', '2018-05-28 16:10:11'),
(71, 23, 27, '2018-05-28 16:10:11', '2018-05-28 16:10:11'),
(72, 23, 28, '2018-05-28 16:10:11', '2018-05-28 16:10:11'),
(73, 24, 27, '2018-05-28 16:12:58', '2018-05-28 16:12:58'),
(74, 24, 28, '2018-05-28 16:12:58', '2018-05-28 16:12:58'),
(75, 24, 29, '2018-05-28 16:12:58', '2018-05-28 16:12:58'),
(76, 25, 27, '2018-05-28 16:14:21', '2018-05-28 16:14:21'),
(77, 25, 28, '2018-05-28 16:14:21', '2018-05-28 16:14:21'),
(78, 25, 29, '2018-05-28 16:14:21', '2018-05-28 16:14:21'),
(79, 26, 26, '2018-05-28 16:15:24', '2018-05-28 16:15:24'),
(80, 26, 27, '2018-05-28 16:15:24', '2018-05-28 16:15:24'),
(81, 26, 28, '2018-05-28 16:15:24', '2018-05-28 16:15:24'),
(82, 27, 27, '2018-05-28 16:19:03', '2018-05-28 16:19:03'),
(83, 27, 28, '2018-05-28 16:19:03', '2018-05-28 16:19:03'),
(84, 27, 29, '2018-05-28 16:19:03', '2018-05-28 16:19:03'),
(85, 28, 27, '2018-05-28 16:37:08', '2018-05-28 16:37:08'),
(86, 28, 28, '2018-05-28 16:37:08', '2018-05-28 16:37:08'),
(87, 28, 29, '2018-05-28 16:37:08', '2018-05-28 16:37:08'),
(88, 29, 26, '2018-05-28 16:38:54', '2018-05-28 16:38:54'),
(89, 29, 27, '2018-05-28 16:38:54', '2018-05-28 16:38:54'),
(90, 29, 28, '2018-05-28 16:38:54', '2018-05-28 16:38:54'),
(91, 30, 26, '2018-05-28 16:59:11', '2018-05-28 16:59:11'),
(92, 30, 27, '2018-05-28 16:59:11', '2018-05-28 16:59:11'),
(93, 30, 28, '2018-05-28 16:59:11', '2018-05-28 16:59:11'),
(94, 30, 29, '2018-05-28 16:59:11', '2018-05-28 16:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `activity_user`
--

CREATE TABLE `activity_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `activity_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_user`
--

INSERT INTO `activity_user` (`id`, `activity_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-05-27 12:55:06', '2018-05-27 12:55:06'),
(2, 2, 1, '2018-05-27 12:55:06', '2018-05-27 12:55:06'),
(3, 3, 1, '2018-05-27 12:55:06', '2018-05-27 12:55:06'),
(4, 4, 1, '2018-05-27 12:55:06', '2018-05-27 12:55:06'),
(5, 5, 1, '2018-05-27 12:55:06', '2018-05-27 12:55:06'),
(6, 6, 1, '2018-05-27 12:55:06', '2018-05-27 12:55:06'),
(7, 7, 1, '2018-05-27 12:55:06', '2018-05-27 12:55:06'),
(8, 8, 1, '2018-05-28 09:01:24', '2018-05-28 09:01:24'),
(9, 9, 1, '2018-05-28 14:17:32', '2018-05-28 14:17:32'),
(10, 10, 1, '2018-05-28 14:17:32', '2018-05-28 14:17:32'),
(11, 11, 1, '2018-05-28 14:23:23', '2018-05-28 14:23:23'),
(12, 12, 1, '2018-05-28 14:32:36', '2018-05-28 14:32:36'),
(13, 13, 1, '2018-05-28 14:32:36', '2018-05-28 14:32:36'),
(14, 14, 1, '2018-05-28 14:32:36', '2018-05-28 14:32:36'),
(15, 15, 1, '2018-05-28 14:32:36', '2018-05-28 14:32:36'),
(16, 16, 1, '2018-05-28 14:42:40', '2018-05-28 14:42:40'),
(17, 17, 1, '2018-05-28 14:42:40', '2018-05-28 14:42:40'),
(18, 18, 1, '2018-05-28 14:42:40', '2018-05-28 14:42:40'),
(19, 19, 1, '2018-05-28 14:42:40', '2018-05-28 14:42:40'),
(20, 20, 1, '2018-05-28 16:06:03', '2018-05-28 16:06:03'),
(21, 21, 1, '2018-05-28 16:10:34', '2018-05-28 16:10:34'),
(22, 22, 1, '2018-05-28 16:10:34', '2018-05-28 16:10:34'),
(23, 23, 1, '2018-05-28 16:10:34', '2018-05-28 16:10:34'),
(24, 24, 1, '2018-05-28 16:21:04', '2018-05-28 16:21:04'),
(25, 25, 1, '2018-05-28 16:21:04', '2018-05-28 16:21:04'),
(26, 26, 1, '2018-05-28 16:21:04', '2018-05-28 16:21:04'),
(27, 27, 1, '2018-05-28 16:21:04', '2018-05-28 16:21:04'),
(28, 28, 1, '2018-05-28 16:52:37', '2018-05-28 16:52:37'),
(29, 29, 1, '2018-05-28 16:52:37', '2018-05-28 16:52:37'),
(30, 30, 1, '2018-05-28 16:59:28', '2018-05-28 16:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'Physical', '2018-05-27 11:45:32', '2018-05-27 11:45:32'),
(2, 'Cognitive / Thinking Skills', '2018-05-27 11:45:34', '2018-05-27 11:46:10'),
(3, 'Sensory', '2018-05-27 11:45:37', '2018-05-27 11:45:37'),
(4, 'Language', '2018-05-27 11:45:45', '2018-05-27 11:45:45'),
(5, 'Social - Emotional', '2018-05-27 11:45:57', '2018-05-27 11:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `emojis`
--

CREATE TABLE `emojis` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emojis`
--

INSERT INTO `emojis` (`id`, `name`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Happy', 'default.jpg', '2018-05-27 11:14:56', '2018-05-27 11:14:56'),
(2, 'Sad', 'default.jpg', '2018-05-27 11:15:02', '2018-05-27 11:15:02'),
(3, 'Tired', 'default.jpg', '2018-05-27 11:15:41', '2018-05-27 11:15:41'),
(4, 'Bored', 'default.jpg', '2018-05-28 08:57:21', '2018-05-28 08:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Any Stage', '2018-05-27 11:45:09', '2018-05-27 11:45:09'),
(2, 'Infant Stage', '2018-05-27 11:45:15', '2018-05-27 11:45:15'),
(3, 'Older Infant Stage', '2018-05-27 11:45:19', '2018-05-27 11:45:19'),
(4, 'Pre-school Stage', '2018-05-27 11:45:24', '2018-05-27 11:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_04_121819_create_roles_table', 1),
(4, '2018_02_04_121952_create_role_user_table', 1),
(5, '2018_02_04_123619_create_categories_table', 1),
(6, '2018_02_04_123700_create_levels_table', 1),
(7, '2018_02_04_123904_create_emojis_table', 1),
(8, '2018_03_09_203334_create_tips_table', 1),
(9, '2018_03_09_203405_create_steps_table', 1),
(10, '2018_03_23_111338_create_ratings_table', 1),
(11, '2018_03_23_112127_create_activities_table', 1),
(12, '2018_03_23_112258_create_activity_user_table', 1),
(13, '2018_03_23_112319_create_activity_step_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tip_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `name`, `tip_id`, `created_at`, `updated_at`) VALUES
(1, 'Too easy', NULL, '2018-05-27 11:15:55', '2018-05-27 11:15:55'),
(2, 'Just right', NULL, '2018-05-27 11:16:03', '2018-05-27 11:16:03'),
(3, 'Too hard', NULL, '2018-05-27 11:16:09', '2018-05-27 11:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'user', 'A parent', '2018-05-27 11:14:10', '2018-05-27 11:14:10'),
(2, 'admin', 'A therapist', '2018-05-27 11:14:10', '2018-05-27 11:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-05-27 11:14:10', '2018-05-27 11:14:10'),
(2, 2, '2018-05-27 11:14:10', '2018-05-27 11:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tip_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `description`, `tip_id`, `created_at`, `updated_at`) VALUES
(2, 'Sit on the floor across from your child and put a few small toys on their right and left sides.', NULL, '2018-05-27 11:55:02', '2018-05-27 11:55:02'),
(3, 'Pick a toy and offer it to your child on the right side while holding their right hand. This will require them to twist and reach out for the toy with their left hand.', NULL, '2018-05-27 12:09:01', '2018-05-27 12:09:01'),
(4, 'Repeat by offering toy on the left side and holding their left hand. Watch them rotate and reach out for the toy using the right hand.', NULL, '2018-05-27 12:09:14', '2018-05-27 12:09:14'),
(5, 'Place a small toy in front of your child.', NULL, '2018-05-27 12:09:33', '2018-05-27 12:20:10'),
(6, 'While she is looking at it, cover it with 1-3 pieces of cloth e.g. a towel, scarf or napkin.', NULL, '2018-05-27 12:09:50', '2018-05-27 12:09:50'),
(7, 'Ask your child to find the ball or toy, saying “Where is it?” and gesturing with open hands and questioning facial expression.', NULL, '2018-05-27 12:10:15', '2018-05-27 12:10:15'),
(8, 'Repeat a number of times with either a different number or set of coverings, and offer help when needed.', NULL, '2018-05-27 12:10:30', '2018-05-27 12:10:30'),
(9, 'At mealtime put a cracker or other food within easy reach of your child. Ask them to take the cracker.', NULL, '2018-05-27 12:10:45', '2018-05-27 12:20:22'),
(10, 'Practice using only 1-3 words when introducing your child to new vocabulary and use consistent gestures.  E.g., touch the cracker when you say, “take the cracker”.', NULL, '2018-05-27 12:10:57', '2018-05-27 12:20:41'),
(11, 'Give your child time to process what you have said and narrate what they do. If they reach out for the cracker and get it praise them, saying “You took the cracker!”', NULL, '2018-05-27 12:11:13', '2018-05-27 12:11:13'),
(12, 'Play your child’s favourite song or any song your family enjoys. If they start moving and dancing straight away, join in the dance party. If not start dancing to the first song.', NULL, '2018-05-27 12:11:30', '2018-05-27 12:11:30'),
(13, 'If your child copies you applaud and cheer them on. Try a variety of songs and repeat, just make sure not to overwhelm your child with too much variety.', NULL, '2018-05-27 12:11:59', '2018-05-27 12:11:59'),
(14, 'Make sure to notice what your child is dawn to or excited about and focus your positive attention and words on that.', NULL, '2018-05-27 12:13:02', '2018-05-27 12:13:02'),
(15, 'Pay attention to the volume and the length of time you spend doing this activity. Discontinue if there is any negative response and perhaps try again another time.', NULL, '2018-05-27 12:13:28', '2018-05-27 12:13:28'),
(16, 'To complete this activity play in a sandbox, if this is not possible, fill a container with sand.', NULL, '2018-05-27 12:13:49', '2018-05-27 12:13:49'),
(17, 'Next invite your child to play with the sand by smoothing it out, flattening and patting it. Lead by example-show your child how to do it!', NULL, '2018-05-27 12:14:02', '2018-05-27 12:14:02'),
(18, 'Observe your child’s movements and how they experiment and react to contact with different textures. Sensory activities like this enhance your child’s tactile sense.', NULL, '2018-05-27 12:14:42', '2018-05-27 12:14:42'),
(19, 'Sit at the table next to your child. As you eat a snack together ask your child to perform simple tasks related to eating.', NULL, '2018-05-27 12:17:26', '2018-05-27 12:17:26'),
(20, 'Examples include: “pick up the food”,” open your mouth”,” drink your water” and “pass me the spoon” Now is a wonderful time to model manners, make sure to say “please” and “thank-you”.', NULL, '2018-05-27 12:17:36', '2018-05-27 12:24:36'),
(21, 'Give your child time (5-8 seconds) to respond before helping. Look at them encouragingly. When they complete the actin, praise and confirm what they did: “You picked up the food! Thank-you.”', NULL, '2018-05-27 12:17:54', '2018-05-27 12:17:54'),
(22, 'If your child would rather do their own thing, model the action for them and narrate what you are doing.', NULL, '2018-05-27 12:18:06', '2018-05-27 12:18:06'),
(23, 'Using a stuffed animal initiate a conversation with your child as you voice the puppet. Focused on your child’s face so you can continue doing whatever your child likes most.', NULL, '2018-05-27 12:19:21', '2018-05-27 12:19:21'),
(24, 'Examples of what you can say are “Hi there! I am a sheep. I say ‘baa baa’! Can you say ‘Baa’?” Exaggerate the sounds you make and the actions of the toy.', NULL, '2018-05-27 12:19:37', '2018-05-27 12:25:10'),
(25, 'Wait for your child to respond to the animal chatter and then imitate what she says.', NULL, '2018-05-27 12:19:53', '2018-05-27 12:19:53'),
(26, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus.', NULL, '2018-05-28 14:16:09', '2018-05-28 14:16:09'),
(27, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis tristique tortor, sed vestibulum magna tristique a. Vivamus orci est, consequat ut lectus at, vulputate imperdiet metus.', NULL, '2018-05-28 14:16:36', '2018-05-28 14:16:36'),
(28, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis tristique tortor, sed vestibulum magna tristique a. Vivamus orci est, consequat ut lectus at, vulputate imperdiet metus.', NULL, '2018-05-28 14:16:55', '2018-05-28 14:16:55'),
(29, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis lectus nec felis aliquet sagittis. Nulla sed hendrerit nulla, sit amet posuere lacus.', NULL, '2018-05-28 14:17:15', '2018-05-28 14:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'As your child learns to twist around, be watchful when they are seated in their high chair, buggy or shopping trolley. Make sure safety belts are fastened', '2018-05-27 11:47:05', '2018-05-27 11:47:05'),
(2, 'Your child may get into a crawling position instead of twisting. If they seem interested in trying to twist, gently hold their hips while sitting to help them twist', '2018-05-27 11:47:22', '2018-05-27 11:47:22'),
(3, 'Watch to see of your child looks or gestures at the area where you’ve hidden the object.', '2018-05-27 11:47:44', '2018-05-27 11:47:44'),
(4, 'As you continue to play this game, you are working on your child’s memory and persistence in completing a task.', '2018-05-27 11:47:57', '2018-05-27 11:47:57'),
(5, 'Your child cannot process more than 1-3 words when learning new vocabulary or trying to pair a motor movement with the matching language', '2018-05-27 11:48:19', '2018-05-27 11:48:19'),
(6, 'Watch to see if your child follows your gaze and looks at the correct object. Try using 1-2-word phrases to make it even simpler (e.g. “Take cracker”, or “Look Cracker”)', '2018-05-27 11:48:34', '2018-05-27 11:48:34'),
(7, 'Avoid asking too many questions or giving too many directions. Just repeat 1-2 simple requests and don’t put pressure on your child to respond', '2018-05-27 11:48:46', '2018-05-27 11:48:46'),
(8, 'Children love attention and will take note of anything they do that gets then noticed. Look for your child to repeat actions that get positive reactions from you or other adults.', '2018-05-27 11:49:02', '2018-05-27 11:49:02'),
(9, 'Experiments with and reacts to different textures', '2018-05-27 11:50:25', '2018-05-27 11:50:25'),
(10, 'Uses his/her hands to make intentional movements', '2018-05-27 11:50:36', '2018-05-27 11:50:36'),
(11, 'Your child may demonstrate understanding of your request by looking, gesturing or touching-even if they don’t complete the action as described.', '2018-05-27 11:50:50', '2018-05-27 11:50:50'),
(12, 'Your child might take several seconds before they demonstrate understanding of the request Avoid asking too many questions or going too fast to avoid pressuring your child', '2018-05-27 11:51:00', '2018-05-27 11:51:00'),
(13, 'Watch to see if your child copies you when you pair a consonant with a vowel (consonant first).', '2018-05-27 11:51:28', '2018-05-27 11:51:28'),
(14, 'Developmentally we see this combination first, as it is harder to pair a vowel with consonants. The vowel sounds “ah”, “aaah”, “uh” are probably the easiest to produce at this stage.', '2018-05-27 11:51:41', '2018-05-27 11:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `consent` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `consent`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mary Bloggs', 'mary@bloggs.com', '$2y$10$vRQOTVTatPpvYWA9QMEVU.D268THRAYAzPSCvBQ3UPa3PF5apNAri', 0, 1, 'JDuis0Ic1aaxockOzNe96QkPeIwLwYy3NSBo0sfg04OvYiQ4ucFip2KTEfGr', '2018-05-27 11:14:10', '2018-05-27 11:14:10'),
(2, 'Joe Bloggs', 'joe@bloggs.com', '$2y$10$R61.k3qGOuYZwcmmYL9IOu6D41E/IhZCIIdLxDvU0FqsL5jYEjaVS', 1, 1, '6SCSilaM95jUVq5OIFUKq6QSUzRuqTaylqUYfuJXthcJagYA60D0otnMVFqm', '2018-05-27 11:14:10', '2018-05-27 11:14:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_level_id_foreign` (`level_id`),
  ADD KEY `activities_category_id_foreign` (`category_id`),
  ADD KEY `activities_rating_id_foreign` (`rating_id`),
  ADD KEY `activities_emoji_id_foreign` (`emoji_id`),
  ADD KEY `activities_tip_id_foreign` (`tip_id`);

--
-- Indexes for table `activity_step`
--
ALTER TABLE `activity_step`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_step_activity_id_foreign` (`activity_id`),
  ADD KEY `activity_step_step_id_foreign` (`step_id`);

--
-- Indexes for table `activity_user`
--
ALTER TABLE `activity_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_user_activity_id_foreign` (`activity_id`),
  ADD KEY `activity_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emojis`
--
ALTER TABLE `emojis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_tip_id_foreign` (`tip_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `steps_tip_id_foreign` (`tip_id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `activity_step`
--
ALTER TABLE `activity_step`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `activity_user`
--
ALTER TABLE `activity_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emojis`
--
ALTER TABLE `emojis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `activities_emoji_id_foreign` FOREIGN KEY (`emoji_id`) REFERENCES `emojis` (`id`),
  ADD CONSTRAINT `activities_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `activities_rating_id_foreign` FOREIGN KEY (`rating_id`) REFERENCES `ratings` (`id`),
  ADD CONSTRAINT `activities_tip_id_foreign` FOREIGN KEY (`tip_id`) REFERENCES `tips` (`id`);

--
-- Constraints for table `activity_step`
--
ALTER TABLE `activity_step`
  ADD CONSTRAINT `activity_step_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `activity_step_step_id_foreign` FOREIGN KEY (`step_id`) REFERENCES `steps` (`id`);

--
-- Constraints for table `activity_user`
--
ALTER TABLE `activity_user`
  ADD CONSTRAINT `activity_user_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `activity_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_tip_id_foreign` FOREIGN KEY (`tip_id`) REFERENCES `tips` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `steps`
--
ALTER TABLE `steps`
  ADD CONSTRAINT `steps_tip_id_foreign` FOREIGN KEY (`tip_id`) REFERENCES `tips` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
