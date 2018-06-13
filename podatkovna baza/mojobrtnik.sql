-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 13. jun 2018 ob 11.21
-- Različica strežnika: 10.1.32-MariaDB
-- Različica PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `mojobrtnik`
--

-- --------------------------------------------------------

--
-- Struktura tabele `kategorija`
--

CREATE TABLE `kategorija` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Odloži podatke za tabelo `kategorija`
--

INSERT INTO `kategorija` (`id`, `naziv`) VALUES
(1, 'Avtoličarstvo'),
(2, 'Čiščenje'),
(3, 'Dimnikarstvo'),
(4, 'Elektro inštalacije'),
(5, 'Fasaderstvo'),
(6, 'Fotografija'),
(7, 'Frizerstvo'),
(8, 'Gradbeništvo'),
(9, 'Kamnoseštvo'),
(10, 'Kovaštvo'),
(11, 'Kovinarstvo'),
(12, 'Kozmetičarstvo'),
(13, 'Optika'),
(14, 'Pogrebne storitve'),
(15, 'Prevozništvo'),
(16, 'Računovodstvo'),
(17, 'Steklarstvo'),
(18, 'Šoferstvo'),
(19, 'Urarstvo'),
(20, 'Vodovodarstvo'),
(21, 'Vrtnarstvo'),
(22, 'Vulkanizerstvo'),
(23, 'Tesarstvo'),
(24, 'Avtoličarstvo'),
(25, 'Čiščenje'),
(26, 'Dimnikarstvo'),
(27, 'Elektro inštalacije'),
(28, 'Fasaderstvo'),
(29, 'Fotografija'),
(30, 'Frizerstvo'),
(31, 'Gradbeništvo'),
(32, 'Kamnoseštvo'),
(33, 'Kovaštvo'),
(34, 'Kovinarstvo'),
(35, 'Kozmetičarstvo'),
(36, 'Optika'),
(37, 'Pogrebne storitve'),
(38, 'Prevozništvo'),
(39, 'Računovodstvo'),
(40, 'Steklarstvo'),
(41, 'Šoferstvo'),
(42, 'Urarstvo'),
(43, 'Vodovodarstvo'),
(44, 'Vrtnarstvo'),
(45, 'Vulkanizerstvo'),
(46, 'Tesarstvo');

-- --------------------------------------------------------

--
-- Struktura tabele `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) UNSIGNED NOT NULL,
  `komentar` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `storitev_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Odloži podatke za tabelo `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_30_144043_create_narocilo_table', 1),
(4, '2018_05_30_144454_create_komentar_table', 1),
(5, '2018_05_30_144716_create_kategorija_table', 1),
(6, '2018_05_30_145013_create_ocena_table', 1),
(7, '2018_05_30_145204_create_stanje_narocila_table', 1),
(8, '2018_05_30_145323_create_storitev_table', 1),
(9, '2018_06_07_151343_create_regija_table', 1),
(10, '2018_06_07_151441_alter', 1);

-- --------------------------------------------------------

--
-- Struktura tabele `narocilo`
--

CREATE TABLE `narocilo` (
  `id` int(10) UNSIGNED NOT NULL,
  `ime` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priimek` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `okvirna_cena` int(11) DEFAULT NULL,
  `komentar` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefon` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(320) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum_zacetka` date NOT NULL,
  `datum_konca` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stanje_narocila_id` int(10) UNSIGNED NOT NULL,
  `storitev_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Odloži podatke za tabelo `narocilo`
--

INSERT INTO `narocilo` (`id`, `ime`, `priimek`, `okvirna_cena`, `komentar`, `telefon`, `email`, `datum_zacetka`, `datum_konca`, `created_at`, `updated_at`, `stanje_narocila_id`, `storitev_id`) VALUES
(2, 'a', 'b', 1111, 'aaa', '031264813', 'aaaa@hotmail.com', '2018-01-01', '2018-12-31', '2018-06-12 09:46:32', '2018-06-12 09:47:02', 3, 1);

-- --------------------------------------------------------

--
-- Struktura tabele `ocena`
--

CREATE TABLE `ocena` (
  `id` int(10) UNSIGNED NOT NULL,
  `ocena` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `storitev_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `regija`
--

CREATE TABLE `regija` (
  `id` int(10) UNSIGNED NOT NULL,
  `regija` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Odloži podatke za tabelo `regija`
--

INSERT INTO `regija` (`id`, `regija`) VALUES
(1, 'Osrednjeslovenska'),
(2, 'Podravska'),
(3, 'Savinjska'),
(4, 'Pomurska'),
(5, 'Gorenjska'),
(6, 'Koroška'),
(7, 'Goriška'),
(8, 'Jugo-vzhodna Slovenija'),
(9, 'Primorsko-Notranjska'),
(10, 'Obalno-kraška'),
(11, 'Zasavska'),
(12, 'Posavska'),
(13, 'Osrednjeslovenska'),
(14, 'Podravska'),
(15, 'Savinjska'),
(16, 'Pomurska'),
(17, 'Gorenjska'),
(18, 'Koroška'),
(19, 'Goriška'),
(20, 'Jugo-vzhodna Slovenija'),
(21, 'Primorsko-Notranjska'),
(22, 'Obalno-kraška'),
(23, 'Zasavska'),
(24, 'Posavska');

-- --------------------------------------------------------

--
-- Struktura tabele `stanje_narocila`
--

CREATE TABLE `stanje_narocila` (
  `id` int(10) UNSIGNED NOT NULL,
  `stanje` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Odloži podatke za tabelo `stanje_narocila`
--

INSERT INTO `stanje_narocila` (`id`, `stanje`) VALUES
(1, 'V čakanju'),
(2, 'Sprejeto'),
(3, 'Zavrnjeno');

-- --------------------------------------------------------

--
-- Struktura tabele `storitev`
--

CREATE TABLE `storitev` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slika` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `kategorija_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Odloži podatke za tabelo `storitev`
--

INSERT INTO `storitev` (`id`, `naziv`, `opis`, `slika`, `created_at`, `updated_at`, `user_id`, `kategorija_id`) VALUES
(1, 'Kaput', 'ejejejje', 'noimage.png', '2018-06-12 09:45:58', '2018-06-12 09:45:58', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabele `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `davcna` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slika` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regija_id` int(10) UNSIGNED NOT NULL,
  `opis` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Odloži podatke za tabelo `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `surname`, `telefon`, `davcna`, `slika`, `regija_id`, `opis`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Luka Gričar', 'luka.lukec10@hotmail.com', '$2y$10$.yu3fncbWhgqp7nbxg4oNe0xxAb48G0XW6Xvdo8jDf6z0IYgE4YLW', 'Gričar', '031264813', '12345678', 'noprofile.png', 1, NULL, 'FPCWLUvO2hadZZ2TKJJnMw9unwQ22uc2u11Z83GtWQOABNm0YyLv75eDUCID', '2018-06-12 09:45:41', '2018-06-12 09:45:41');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komentar_storitev_id_foreign` (`storitev_id`);

--
-- Indeksi tabele `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `narocilo`
--
ALTER TABLE `narocilo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `narocilo_stanje_narocila_id_foreign` (`stanje_narocila_id`),
  ADD KEY `narocilo_storitev_id_foreign` (`storitev_id`);

--
-- Indeksi tabele `ocena`
--
ALTER TABLE `ocena`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ocena_storitev_id_foreign` (`storitev_id`);

--
-- Indeksi tabele `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksi tabele `regija`
--
ALTER TABLE `regija`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `stanje_narocila`
--
ALTER TABLE `stanje_narocila`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `storitev`
--
ALTER TABLE `storitev`
  ADD PRIMARY KEY (`id`),
  ADD KEY `storitev_user_id_foreign` (`user_id`),
  ADD KEY `storitev_kategorija_id_foreign` (`kategorija_id`);

--
-- Indeksi tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_regija_id_foreign` (`regija_id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT tabele `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabele `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT tabele `narocilo`
--
ALTER TABLE `narocilo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT tabele `ocena`
--
ALTER TABLE `ocena`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabele `regija`
--
ALTER TABLE `regija`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT tabele `stanje_narocila`
--
ALTER TABLE `stanje_narocila`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT tabele `storitev`
--
ALTER TABLE `storitev`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Omejitve tabel za povzetek stanja
--

--
-- Omejitve za tabelo `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_storitev_id_foreign` FOREIGN KEY (`storitev_id`) REFERENCES `storitev` (`id`) ON DELETE CASCADE;

--
-- Omejitve za tabelo `narocilo`
--
ALTER TABLE `narocilo`
  ADD CONSTRAINT `narocilo_stanje_narocila_id_foreign` FOREIGN KEY (`stanje_narocila_id`) REFERENCES `stanje_narocila` (`id`),
  ADD CONSTRAINT `narocilo_storitev_id_foreign` FOREIGN KEY (`storitev_id`) REFERENCES `storitev` (`id`) ON DELETE CASCADE;

--
-- Omejitve za tabelo `ocena`
--
ALTER TABLE `ocena`
  ADD CONSTRAINT `ocena_storitev_id_foreign` FOREIGN KEY (`storitev_id`) REFERENCES `storitev` (`id`) ON DELETE CASCADE;

--
-- Omejitve za tabelo `storitev`
--
ALTER TABLE `storitev`
  ADD CONSTRAINT `storitev_kategorija_id_foreign` FOREIGN KEY (`kategorija_id`) REFERENCES `kategorija` (`id`),
  ADD CONSTRAINT `storitev_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Omejitve za tabelo `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_regija_id_foreign` FOREIGN KEY (`regija_id`) REFERENCES `regija` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
