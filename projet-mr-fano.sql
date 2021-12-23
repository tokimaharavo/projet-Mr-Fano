-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 22 déc. 2021 à 09:15
-- Version du serveur :  10.1.40-MariaDB
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet-mr-fano`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'technology', NULL, NULL),
(2, 'maison-deco', NULL, NULL),
(3, 'outil-de-cuisine', NULL, NULL),
(4, 'outil-de-sport', NULL, NULL),
(5, 'outil-pour-bebe', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_12_13_082011_create_posts_table', 1),
(2, '2021_12_20_120201_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `name`, `price`, `qty`, `img`, `created_at`, `updated_at`, `category_id`) VALUES
(16, 'rape-a-choux', '5000Ar', 50, 'images/datasheets/tokyrape-a-choux.jpg', '2021-12-20 16:25:34', '2021-12-20 16:45:07', 3),
(17, 'couvre-lit', '135000Ar', 50, 'images/datasheets/tokycouvre-lit.jpg', '2021-12-20 16:37:43', '2021-12-20 16:37:43', 2),
(18, 'bavoir-en-silicone-pour-bebe', '20000Ar', 100, 'images/datasheets/tokybavoir-en-silicone-pour-bebe.jpg', '2021-12-20 16:39:08', '2021-12-20 16:42:32', 5),
(19, 'boite-de-stockage-de-riz', '70000Ar', 20, 'images/datasheets/tokyboite-de-stockage-de-riz.jpg', '2021-12-20 16:44:52', '2021-12-20 16:44:52', 2),
(20, 'chaise-pivotante-personnel', '220000Ar', 20, 'images/datasheets/tokychaise-pivotante-personnel.jpg', '2021-12-20 16:46:56', '2021-12-20 16:46:56', 2),
(21, 'velo-de-rotation-pliant', '2100000Ar', 10, 'images/datasheets/tokyvelo-de-rotation-pliant.jpg', '2021-12-20 16:48:41', '2021-12-20 16:48:41', 4),
(22, 'velo-poussette-pour-enfant', '370000Ar', 15, 'images/datasheets/tokyvelo-poussette-pour-enfant.jpg', '2021-12-20 16:51:13', '2021-12-20 16:51:13', 5),
(23, 'rangement-de-salle-de-bain-mural', '53000Ar', 20, 'images/datasheets/tokyrangement-de-salle-de-bain-mural.jpg', '2021-12-20 16:52:35', '2021-12-20 16:52:35', 2),
(25, 'ballon-yoga', '5000Ar', 50, 'images/datasheets/tokyballon-yoga.jpg', '2021-12-21 05:49:45', '2021-12-21 05:49:45', 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'toky', 'toky@gmail.com', NULL, '$2y$10$21K2jEvG.rbeNaQ0Oal9A.mz5ciTvaVj5PcEmU56/fOVKmMosiNAm', NULL, '2021-12-13 10:32:14', '2021-12-13 10:32:14'),
(2, 'noria marie odette', 'noria@gmail.com', NULL, '$2y$10$pE.3Ac78ygWV5TDQlpt.W.LmAKGvG9UsR4Sk7m5SMosaXvU5YaJUW', NULL, '2021-12-13 16:12:29', '2021-12-13 16:12:29'),
(3, 'jenia', 'jenia@gmail.com', NULL, '$2y$10$G486x1tvlTgl28U1Wg/xhOW8Ge9i6c07IZUdo9MCsTsF9.030As6S', NULL, '2021-12-13 17:11:41', '2021-12-13 17:11:41'),
(4, 'dembal', 'dembal@gmail.com', NULL, '$2y$10$Kj/TgA65ywGewzTcyDbwoeSiQTJKIdYVfI595FrR3OMf/lw/Rl6q6', NULL, '2021-12-13 21:40:29', '2021-12-13 21:40:29');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_index` (`category_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
