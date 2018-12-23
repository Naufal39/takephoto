-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2018 pada 08.08
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_auh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Preweding', 'preweding', NULL, NULL),
(2, 'Baby Shower', 'babyShower', NULL, NULL),
(3, 'Weding', 'weding', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'haha', '2018-12-22 01:39:31', '2018-12-22 01:39:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_15_162620_create_categories_table', 1),
(4, '2018_12_15_163054_create_posts_table', 1),
(5, '2018_12_15_163405_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesans`
--

CREATE TABLE `pesans` (
  `id` int(11) NOT NULL,
  `id_pemesan` int(10) UNSIGNED NOT NULL,
  `id_photographer` int(10) UNSIGNED NOT NULL,
  `id_categori` int(11) UNSIGNED NOT NULL,
  `no_hp` char(20) NOT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `note` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesans`
--

INSERT INTO `pesans` (`id`, `id_pemesan`, `id_photographer`, `id_categori`, `no_hp`, `tanggal`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, '3454654845', '12-26-2018', '234', '2018-12-22 23:23:59', '2018-12-22 23:23:59'),
(2, 1, 2, 2, '089634747284', '12-31-2018', 'ayo photo', '2018-12-22 23:24:49', '2018-12-22 23:24:49'),
(11, 1, 2, 2, '753', '12-31-2018', 'ayo photo yooooo', '2018-12-22 23:34:32', '2018-12-22 23:34:32'),
(12, 1, 2, 2, '753', '12-31-2018', 'ayo photo yooooo1', '2018-12-22 23:35:19', '2018-12-22 23:35:19'),
(13, 1, 2, 2, '753', '12-31-2018', 'ayo photo yooooo1', '2018-12-22 23:36:40', '2018-12-22 23:36:40'),
(14, 1, 1, 3, '34234', '12-28-2018', 'sdfsdfse', '2018-12-23 00:08:14', '2018-12-23 00:08:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `categori_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `categori_id`, `title`, `slug`, `content`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 'test', 'test', 'xcvxcvxd 444 44 nkjn 98789 dgsd', '11426203_B_V1.jpg', '2018-12-21 05:59:36', '2018-12-22 22:10:20'),
(3, 1, 2, 'edit', 'edit', '+45 asds jbjbjbj', '4organza.jpg', '2018-12-21 06:03:15', '2018-12-21 23:21:43'),
(4, 1, 1, 'asd', 'asd', 'asd', '2018-Summer-5XL-Plus-Size-Women-Shirts-Linen-Tunic-Shirt-V-Neck-Big-Bow-Batwing-Tie.jpg_640x640.jpg', '2018-12-21 07:54:09', '2018-12-21 07:54:09'),
(5, 1, 3, 'lknlknlk', 'lknlknlk', 'sdfsdfsd', '1a.jpg', '2018-12-21 22:31:52', '2018-12-21 22:31:52'),
(6, 1, 2, 'edit', 'edit', 'lknlknlknlk', '2018-Summer-5XL-Plus-Size-Women-Shirts-Linen-Tunic-Shirt-V-Neck-Big-Bow-Batwing-Tie.jpg_640x640.jpg', '2018-12-21 22:56:27', '2018-12-21 22:56:27'),
(7, 2, 2, 'Photo murah', 'photo-murah', 'sdfsdfsdf', '2018-Summer-5XL-Plus-Size-Women-Shirts-Linen-Tunic-Shirt-V-Neck-Big-Bow-Batwing-Tie.jpg_640x640.jpg', '2018-12-21 23:52:54', '2018-12-21 23:52:54'),
(8, 1, 1, 'asf', 'asf', '456132132', '4organza.jpg', '2018-12-22 19:28:50', '2018-12-22 19:28:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'naufalsetyanto', 'user@mail.com', NULL, '$2y$10$yU.ZvVKEAf9KYLSP/.EuvuxeARfd9vYRDNm19bedtDpUIWI9jUhpm', 'YVKYYlZVduzQ12GbnWaPbifoIiWhNsCC40Wv8HZLUvxH7CLNHTh60HgVqtf5', '2018-12-21 05:30:42', '2018-12-21 05:30:42'),
(2, 'kasepEgi', 'user2@mail.com', NULL, '$2y$10$K1blzLfhb73VRD/OMg70MOVqim9CC1LTRxUWUbPxQsG5OiGJ2Vys2', 'BGZG0zS2JAipKcDjOfMaeKeQBBU9CXVxQBl9Bu9TdgoOCgkKvEKDpygJIWqm', '2018-12-21 23:52:20', '2018-12-21 23:52:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_photographer` (`id_photographer`),
  ADD KEY `fk_id_pemesan` (`id_pemesan`),
  ADD KEY `fk_id_categori` (`id_categori`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_categori_id_foreign` (`categori_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesans`
--
ALTER TABLE `pesans`
  ADD CONSTRAINT `fk_id_categori` FOREIGN KEY (`id_categori`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_pemesan` FOREIGN KEY (`id_pemesan`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_photographer` FOREIGN KEY (`id_photographer`) REFERENCES `posts` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_categori_id_foreign` FOREIGN KEY (`categori_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
