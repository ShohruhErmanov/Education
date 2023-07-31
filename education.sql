-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 13 2023 г., 13:19
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `education`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aboutimgs`
--

CREATE TABLE `aboutimgs` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `aboutimgs`
--

INSERT INTO `aboutimgs` (`id`, `image`, `created_at`, `updated_at`) VALUES
(3, '1689061307.jpg', '2023-07-11 04:41:47', '2023-07-11 04:41:47');

-- --------------------------------------------------------

--
-- Структура таблицы `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `number` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `span` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `abouts`
--

INSERT INTO `abouts` (`id`, `number`, `title`, `span`, `bg`, `created_at`, `updated_at`) VALUES
(1, 123, 'AVAILABLE', 'SUBJECTS', 'bg-success', '2023-07-11 03:07:51', '2023-07-11 03:07:51'),
(2, 1234, 'Online', 'Courses', 'bg-primary', '2023-07-11 03:08:44', '2023-07-11 03:08:44'),
(3, 123, 'Skilled', 'Instructors', 'bg-secondary', '2023-07-11 03:09:49', '2023-07-11 03:09:49'),
(4, 1234, 'Happy', 'Students', 'bg-warning', '2023-07-11 03:11:09', '2023-07-11 03:11:09');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `icon`, `text`, `created_at`, `updated_at`) VALUES
(2, 'Our Location', 'fa fa-2x fa-map-marker-alt', '123 Street, New York, USA', '2023-07-13 06:28:36', '2023-07-13 06:28:36'),
(3, 'Call Us', 'fa fa-2x fa-phone-alt', '+012 345 6789', '2023-07-13 06:29:51', '2023-07-13 06:29:51'),
(4, 'Email Us', 'fa fa-2x fa-envelope', 'info@example.com', '2023-07-13 06:31:12', '2023-07-13 06:31:12');

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `span1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `span2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `title`, `image`, `span1`, `span2`, `url`, `created_at`, `updated_at`) VALUES
(2, 'Web design & development courses for beginners', '1689165056.jpg', 'Jhon Doe', '4.5 (250)', '#!', '2023-07-12 09:30:56', '2023-07-12 09:30:56'),
(3, 'Web design & development courses for beginners', '1689165380.jpg', 'Jhon Doe', '4.5 (250)', '#!', '2023-07-12 09:36:20', '2023-07-12 09:36:20'),
(4, 'Web design & development courses for beginners', '1689165418.jpg', 'Jhon Doe', '4.5 (250)', '#!', '2023-07-12 09:36:58', '2023-07-12 09:36:58'),
(5, 'Web design & development courses for beginners', '1689165482.jpg', 'Jhon Doe', '4.5 (250)', '#!', '2023-07-12 09:38:02', '2023-07-12 09:38:02'),
(6, 'Web design & development courses for beginners', '1689165499.jpg', 'Jhon Doe', '4.5 (250)', '#!', '2023-07-12 09:38:19', '2023-07-12 09:38:19'),
(7, 'Web design & development courses for beginners', '1689165513.jpg', 'Jhon Doe', '4.5 (250)', '#!', '2023-07-12 09:38:33', '2023-07-12 09:38:33');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `featureimgs`
--

CREATE TABLE `featureimgs` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `featureimgs`
--

INSERT INTO `featureimgs` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '1689067850.jpg', '2023-07-11 06:30:50', '2023-07-11 06:30:50');

-- --------------------------------------------------------

--
-- Структура таблицы `features`
--

CREATE TABLE `features` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `features`
--

INSERT INTO `features` (`id`, `title`, `text`, `icon`, `bg`, `created_at`, `updated_at`) VALUES
(2, 'Skilled Instructors', 'Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.', 'fa fa-2x fa-graduation-cap', 'bg-primary', '2023-07-11 05:43:35', '2023-07-11 05:43:35'),
(3, 'International Certificate', 'Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.', 'fa fa-2x fa-certificate', 'bg-secondary', '2023-07-11 05:47:32', '2023-07-11 05:47:32'),
(4, 'Online Classes', 'Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.', 'fa fa-2x fa-book-reader', 'bg-warning', '2023-07-11 05:48:38', '2023-07-11 05:48:38');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2023_07_11_032247_create_topbars_table', 2),
(9, '2023_07_11_042207_create_topbaricons_table', 2),
(11, '2023_07_11_051919_create_abouts_table', 3),
(12, '2023_07_11_061318_create_aboutimgs_table', 4),
(13, '2023_07_11_080016_create_features_table', 5),
(14, '2023_07_11_085154_create_featureimgs_table', 6),
(15, '2023_07_12_115922_create_courses_table', 7),
(16, '2023_07_13_041826_create_teachers_table', 8),
(17, '2023_07_13_074337_create_students_table', 9),
(18, '2023_07_13_090115_create_contacts_table', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
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
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `span` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `title`, `image`, `span`, `text`, `created_at`, `updated_at`) VALUES
(2, 'Student Name', '1689236350.jpg', 'Web Design', 'Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem', '2023-07-13 05:19:10', '2023-07-13 05:19:10'),
(3, 'Student Name', '1689236478.jpg', 'Web Design', 'Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem', '2023-07-13 05:21:18', '2023-07-13 05:21:18');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Instructor Name', 'Web Design & Development', '1689233920.jpg', '2023-07-13 04:38:40', '2023-07-13 04:38:40'),
(3, 'Instructor Name', 'Web Design & Development', '1689233974.jpg', '2023-07-13 04:39:34', '2023-07-13 04:39:34'),
(4, 'Instructor Name', 'Web Design & Development', '1689233987.jpg', '2023-07-13 04:39:47', '2023-07-13 04:39:47'),
(5, 'Instructor Name', 'Web Design & Development', '1689234002.jpg', '2023-07-13 04:40:02', '2023-07-13 04:40:02');

-- --------------------------------------------------------

--
-- Структура таблицы `topbaricons`
--

CREATE TABLE `topbaricons` (
  `id` bigint UNSIGNED NOT NULL,
  `topbaricon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `topbaricons`
--

INSERT INTO `topbaricons` (`id`, `topbaricon`, `link`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-facebook-f', '#!', '2023-07-11 01:48:55', '2023-07-11 01:48:55'),
(2, 'fab fa-twitter', '#!', '2023-07-11 01:56:51', '2023-07-11 01:56:51'),
(3, 'fab fa-linkedin-in', '#!', '2023-07-11 01:57:24', '2023-07-11 01:57:24'),
(4, 'fab fa-instagram', 'https://www.instagram.com/shohruhermanov2022/', '2023-07-11 01:58:21', '2023-07-11 02:15:18'),
(5, 'fab fa-youtube', '#!', '2023-07-11 01:59:37', '2023-07-11 01:59:37'),
(6, 'fab fa-telegram', 'https://t.me/Ermanov_Dev', '2023-07-11 02:03:13', '2023-07-11 02:03:13');

-- --------------------------------------------------------

--
-- Структура таблицы `topbars`
--

CREATE TABLE `topbars` (
  `id` bigint UNSIGNED NOT NULL,
  `topbar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topbaricon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `topbars`
--

INSERT INTO `topbars` (`id`, `topbar`, `topbaricon`, `link`, `created_at`, `updated_at`) VALUES
(1, '+998940552101', 'fa fa-phone-alt mr-2', 'tel:998940552101', '2023-07-11 01:52:52', '2023-07-11 01:52:52'),
(2, '@shohruhermanov5@gmail.com', 'fa fa-envelope mr-2', 'mailto:@shohruhermanov5@gmail.com', '2023-07-11 01:55:09', '2023-07-11 01:55:09');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
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
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shohruh', 'shohruhermanov5@gmail.com', NULL, '$2y$10$SfgHVSwVxaG7C9ER7q1B..ROd5CCrZQwPIo9UfgwvxUAC52IKQOcS', NULL, '2023-07-10 23:04:11', '2023-07-10 23:04:11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aboutimgs`
--
ALTER TABLE `aboutimgs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `featureimgs`
--
ALTER TABLE `featureimgs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `topbaricons`
--
ALTER TABLE `topbaricons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `topbars`
--
ALTER TABLE `topbars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aboutimgs`
--
ALTER TABLE `aboutimgs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `featureimgs`
--
ALTER TABLE `featureimgs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `topbaricons`
--
ALTER TABLE `topbaricons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `topbars`
--
ALTER TABLE `topbars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
