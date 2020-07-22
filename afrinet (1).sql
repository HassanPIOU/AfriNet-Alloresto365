-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 22 juil. 2020 à 11:47
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `afrinet`
--

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `state` int(1) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `company_name`, `email`, `phone_number`, `addresse`, `country`, `city`, `type`, `state`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Arthurossa', 'Bonneau', 'Grenier SARL', 'glouis@live.com', '0973441061456', '51, rue Delaunay53387 Monnier-sur-Courtois', 'Danemark', 'Diasnec', 1, 1, '2003-03-23 02:05:46', 'GVfzhsu_ekwV!$!>', NULL, NULL, '2003-03-23 02:05:46', '2020-07-21 11:43:44'),
(3, 'Isaaca', 'Rocher', 'Garcia', 'theodore22@dupre.fr', '07 85 80 74 05', '30, rue Barre25 284 Descamps', 'Mali', 'Boulay', 1, 1, '2003-03-23 02:05:46', 'pvZ4mE[DF0P', NULL, NULL, '2003-03-23 02:05:46', '2020-07-20 17:08:39'),
(4, 'Benjamin', 'Gomez', 'Ferreira Diallo SARL', 'jean.bernard@ifrance.com', '+33 3 07 44 12 47', '94, rue de Richard\n92 108 Gay', 'Cuba', 'Lenoir-sur-Mer', 1, 1, '2003-03-23 02:05:46', ']2;6^z.Gc!J0mbd', NULL, NULL, '2003-03-23 02:05:46', '2020-07-09 15:28:57'),
(5, 'Alexandre', 'Blanc', 'Caron Guillou S.A.S.', 'andree.roux@maillard.com', '+33 9 99 53 27 42', '33, place Joséphine Hubert\n72 581 Lemaitredan', 'Tonga', 'Millet-sur-Letellier', 1, 1, '2003-03-23 02:05:46', 'TZ\\/mOh', NULL, NULL, '2003-03-23 02:05:46', NULL),
(6, 'David', 'Pichon', 'Lebon et Fils', 'daniel.joseph@bousquet.fr', '03 53 40 57 09', 'avenue de Pages\n04 109 Moulin', 'Fidji (République des)', 'Masse', 1, 1, '2003-03-23 02:05:46', 'hAgXcPd9@mr\'q2oFYgO(', NULL, NULL, '2003-03-23 02:05:46', NULL),
(7, 'Auguste', 'Fischer', 'Morel', 'poulain.zoe@gmail.com', '09 10 39 21 88', 'boulevard Lebon\n55 915 BigotBourg', 'France', 'Allard', 1, 1, '2003-03-23 02:05:46', 'kt7H05g=<-3wx|', NULL, NULL, '2003-03-23 02:05:46', NULL),
(8, 'Léon', 'Michaud', 'Rey', 'olivie61@herve.net', '0166102089', '510, place Denis\n51 556 Diallo', 'Pitcairn (Îles)', 'Couturier-la-Forêt', 1, 1, '2003-03-23 02:05:46', '>Q6I+l!Vp2zA982Y\'`S>', NULL, NULL, '2003-03-23 02:05:46', NULL),
(9, 'Frédéric', 'Riviere', 'Carlier Allard S.A.R.L.', 'jgrenier@leveque.fr', '0535254601', 'place de Lenoir\n79 143 Riviere', 'Philippines', 'Bourgeois', 1, 1, '2003-03-23 02:05:46', 'fSn!`_=O8HW!', NULL, NULL, '2003-03-23 02:05:46', NULL),
(10, 'Étienne', 'Clerc', 'Benard', 'leduc.zacharie@live.com', '+33 (0)6 78 39 03 23', '58, boulevard de Fabre\n26 359 Gaillard', 'Paraguay', 'Gregoire-les-Bains', 1, 1, '2003-03-23 02:05:46', '<Q7k?.7;', NULL, NULL, '2003-03-23 02:05:46', NULL),
(12, 'Timothée', 'Raynaud', 'Gaudin', 'rene.marechal@bouygtel.fr', '0574441304', '8, avenue Gaillard\n64 711 Lenoirdan', 'Bahrain', 'Costa', 1, 1, '2019-03-23 02:05:46', 'D@j$p*\"', NULL, NULL, '2019-03-23 02:05:46', NULL),
(13, 'Paul', 'Girard', 'Bouchet', 'bonnet.martin@yahoo.fr', '04 95 22 31 07', 'rue Marcel Roux\n68 232 Gaydan', 'Zambie', 'CouturierBourg', 1, 1, '2003-03-23 02:05:46', '>RkhPHokBVirW)?', NULL, NULL, '2003-03-23 02:05:46', NULL),
(14, 'Gilbert', 'Bernier', 'Dos Santos S.A.R.L.', 'colette47@wanadoo.fr', '0297165946', 'avenue Frédéric Hardy\n05 951 Dumont', 'Andorre', 'MoulinVille', 1, 1, '2003-03-23 02:05:46', '}$kvz:', NULL, NULL, '2003-03-23 02:05:46', NULL),
(15, 'Lorraine', 'Morvan', 'Bourgeois S.A.S.', 'oceane80@wanadoo.fr', '+33 5 03 73 77 84', '8, chemin de Roy\n29 121 Remy-les-Bains', 'Pitcairn (Îles)', 'MarionVille', 1, 1, '2003-03-23 02:05:46', 'SeOrRBjPg', NULL, NULL, '2003-03-23 02:05:46', NULL),
(16, 'Tristan', 'Charles', 'Marchal', 'llefevre@dbmail.com', '01 08 28 37 25', '73, avenue Etienne\n56110 Gonzalez', 'Vietnam', 'Brunelboeuf', 1, 1, '2017-03-23 02:05:46', 'v>Nx9\\8TJ^%', NULL, NULL, '2017-03-23 02:05:46', NULL),
(17, 'Matthieu', 'Lecomte', 'Parent SA', 'ppotier@noos.fr', '09 12 73 32 63', '3, avenue Arnaud\n18600 Simon-sur-Mer', 'Saint Pierre et Miquelon', 'Diasboeuf', 1, 1, '2003-03-23 02:05:46', '}R>N$g!)vamlypq8', NULL, NULL, '2003-03-23 02:05:46', NULL),
(18, 'Antoine', 'Bigot', 'Gillet Ruiz SA', 'elise.jacques@garnier.fr', '+33 3 53 90 64 34', 'avenue de Hoarau\n85 431 Lopez', 'Thailande', 'Gaillard', 1, 1, '2003-03-23 02:05:46', 'dI`6,\\2#utX|>]A', NULL, NULL, '2003-03-23 02:05:46', NULL),
(19, 'Corinne', 'Voisin', 'Marty', 'marc.francois@vallet.org', '+33 (0)1 67 43 94 24', '26, avenue Boucher\n81716 Leduc', 'Philippines', 'David-la-Forêt', 1, 1, '2003-03-23 02:05:46', 'W(&Z$PA\'F}mYZi$<<{', NULL, NULL, '2003-03-23 02:05:46', NULL),
(20, 'Nathalie', 'Muller', 'Mary Godard S.A.R.L.', 'kblanchet@ifrance.com', '0673335168', '6, avenue Blondel\n96 359 Bourgeois', 'Arménie', 'Leroy', 1, 1, '2003-03-23 02:05:46', '_VmaoE(N\\/@a?+', NULL, NULL, '2003-03-23 02:05:46', NULL),
(21, 'Thibaut', 'Marty', 'Roux', 'hugues.leroux@ifrance.com', '0290086215', '38, chemin Gilbert\n48804 Monnier', 'Somalie', 'Baudry-sur-Masse', 1, 1, '2003-03-23 02:05:46', '[ng:D>8=VyN', NULL, NULL, '2003-03-23 02:05:46', NULL),
(22, 'Grégoire', 'Guichard', 'Thierry Vaillant SAS', 'mclerc@lemoine.fr', '0910318422', '871, place de Lemaire\n86524 Michaud', 'Syrie', 'BrunBourg', 1, 1, '2003-03-23 02:05:46', 'L`0US)kC', NULL, NULL, '2003-03-23 02:05:46', '2020-07-22 09:32:03'),
(23, 'Robert', 'Guyon', 'Guillet', 'diane91@orange.fr', '0794170346', 'place de Fontaine\n57552 Cordier', 'Indonésie', 'Tanguy', 1, 1, '2003-03-23 02:05:46', 'v?71g6', NULL, NULL, '2003-03-23 02:05:46', NULL),
(24, 'Édith', 'Jacquet', 'Barbier', 'stephane24@noos.fr', '0172108881', '23, boulevard Teixeira\n65604 Gerard-sur-Mer', 'Mexique', 'Jacques', 1, 1, '2003-03-23 02:05:46', '$^Yg-~', NULL, NULL, '2003-03-23 02:05:46', NULL),
(25, 'Thomas', 'Gonzalez', 'Carpentier', 'margaud.nicolas@guyon.net', '+33 9 65 04 37 97', '737, rue de Chauveau\n38575 Simon', 'Suède', 'Ribeironec', 1, 1, '2003-03-23 02:05:46', 'H/NP&72-Ch62p1', NULL, NULL, '2003-03-23 02:05:46', NULL),
(26, 'Bertrand', 'Moreau', 'Guillet', 'perez.augustin@richard.com', '+33 1 19 40 69 66', '5, rue de Thomas\n42375 Parentboeuf', 'Pakistan', 'DenisBourg', 1, 1, '2003-03-23 02:05:46', '$0PR-mmh]aCi`HjRJsXT', NULL, NULL, '2003-03-23 02:05:46', NULL),
(27, 'Thibaut', 'Petitjean', 'Riviere SARL', 'petitjean.victor@sfr.fr', '03 16 35 36 25', '57, avenue de Blanchet\n48 833 Pasquier', 'Jordanie', 'MaryVille', 1, 1, '0000-00-00 00:00:00', 'V1}j3#\'', NULL, NULL, '2017-03-23 02:05:46', NULL),
(28, 'Charles', 'Buisson', 'Ferrand SARL', 'zledoux@live.com', '02 97 13 23 35', '425, rue Auger\n20 381 Lambert', 'Kenya', 'Payet-sur-Le Roux', 1, 1, '2003-03-23 02:05:46', 'gZGhAx8', NULL, NULL, '2003-03-23 02:05:46', NULL),
(29, 'Émile', 'Le Roux', 'Hoarau Pottier SAS', 'lemaire.agathe@simon.com', '+33 9 77 85 29 19', 'chemin Alphonse Brunet\n04450 CarreBourg', 'Italie', 'Fischerdan', 1, 1, '2003-03-23 02:05:46', '#ACB*ac>f%;4q{t', NULL, NULL, '2003-03-23 02:05:46', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `customers_subscription`
--

CREATE TABLE `customers_subscription` (
  `id_sub` bigint(20) UNSIGNED NOT NULL,
  `started_at` date DEFAULT NULL,
  `ended_at` date DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `state` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `customers_subscription`
--

INSERT INTO `customers_subscription` (`id_sub`, `started_at`, `ended_at`, `duration`, `customer_id`, `package_id`, `state`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 1, 5, 2, 2, '2020-07-21 21:35:45', '2020-07-21 23:19:52'),
(4, NULL, NULL, 2, 5, 1, 1, '2020-07-22 06:46:55', '2020-07-22 06:46:55');

-- --------------------------------------------------------

--
-- Structure de la table `customer_package`
--

CREATE TABLE `customer_package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` enum('expired','progressing') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'progressing',
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `customer_id`, `user_id`, `ticket_id`, `content`, `created_at`, `updated_at`) VALUES
(12, 4, NULL, 6, 'Aenean commodo aliquam tempor. Suspendisse vulputate hendrerit fermentum. Sed lobortis, velit at gravida sodales, libero turpis congue ligula, sit amet ultrices dui nulla in metus. Quisque non enim et mauris volutpat aliquam. Morbi posuere vulputate neque, sit amet commodo nibh viverra eget. Nulla lacinia feugiat felis at dignissim. Cras dolor ante, accumsan et ex et, lobortis tristique nunc. Suspendisse mi urna, eleifend id elit dapibus, pulvinar bibendum neque. In diam quam, pretium blandit eleifend non, porta a metus. Praesent finibus sapien non volutpat dictum. Ut ornare, turpis et hendrerit venenatis, leo magna egestas dui, vel consequat lorem erat at diam. Integer porttitor turpis vitae tortor viverra, quis congue velit semper. Vivamus ut consequat ipsum. Sed ullamcorper quam in mauris eleifend, non', '2020-07-21 11:42:26', '2020-07-21 11:42:26');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_08_111602_create_customers_table', 1),
(5, '2020_07_08_111739_create_tickets_table', 1),
(6, '2020_07_08_122745_create_subscriptions_table', 1),
(7, '2020_07_08_123552_create_packages_table', 1),
(8, '2020_07_08_123959_create_client_subscription_table', 1),
(9, '2020_07_08_124622_create_client_package_table', 1),
(10, '2020_07_08_125224_create_messages_table', 1),
(11, '2020_07_08_130205_create_roles_table', 1),
(12, '2020_07_08_130339_create_role_user_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `packages`
--

INSERT INTO `packages` (`id`, `title`, `data`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '5 Giga', 5000, NULL, '2020-07-21 11:59:30', '2020-07-21 21:11:19'),
(2, '10 Giga', 10000, NULL, '2020-07-21 11:59:45', '2020-07-21 21:11:34');

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
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrateur', '2020-07-08 23:30:56', '2020-07-08 23:30:56');

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration_value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `title`, `duration_value`, `created_at`, `updated_at`) VALUES
(1, '1 Mois', 30, '2020-07-21 14:18:59', NULL),
(2, '3 Mois', 90, '2020-07-21 00:00:00', NULL),
(3, '6 Mois', 180, '2020-07-21 00:00:00', NULL),
(4, '12 Mois', 365, '2020-07-21 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('request','complaint') COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` int(11) NOT NULL DEFAULT 1,
  `ticketable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticketable_id` bigint(20) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`id`, `title`, `type`, `state`, `ticketable_type`, `ticketable_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 'SERVICE 4G+', 'request', 5, 'App\\Http\\Controllers\\User', 1, NULL, '2020-07-21 11:42:26', '2020-07-22 06:56:25');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` int(1) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `state`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Hassan', 'PIOU', 'admin@test.com', '22892328454', 1, '2020-07-08 07:11:36', '$2y$10$bIl90mFyCLlB71wpc9287unsu31d8.Ph1QBTHQV43WGKaVKKW35Ee', NULL, NULL, '2020-07-08 21:38:32', NULL),
(2, 'Tabea', 'Riedmayer', 'job@neoskop.de', '96061025', 1, NULL, '$2y$10$.e10Jz3ekDw.Eo5w9Nyy8.LtXkNcZPzvQc.RfHKR0fVt3nfv3m.au', NULL, NULL, '2020-07-22 09:00:31', '2020-07-22 09:45:11'),
(3, 'Alfred', 'kardachien', 'piouladere@outlook.fr', '+22892363533', 1, NULL, '$2y$10$R8D3Bz9dsxiusUBkfHQ4S.h1v4q55pxyjdZLoNv.nAfL1vfJ/VpVm', NULL, NULL, '2020-07-22 09:02:08', '2020-07-22 09:42:24'),
(5, 'Ataviste', 'karmen', 'akakka@gmail.com', '94328454', 1, NULL, '$2y$10$gwESPMtkxbbBMyeH2j0yCO6rdyNCO0QMo1WNKzWY8Ke5sTgdiW1e.', NULL, NULL, '2020-07-22 09:44:38', '2020-07-22 09:44:38');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_phone_number_unique` (`phone_number`);

--
-- Index pour la table `customers_subscription`
--
ALTER TABLE `customers_subscription`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `customers_subscription_subscription_id_foreign` (`package_id`);

--
-- Index pour la table `customer_package`
--
ALTER TABLE `customer_package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_package_customer_id_foreign` (`customer_id`),
  ADD KEY `customer_package_package_id_foreign` (`package_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_customer_id_foreign` (`customer_id`),
  ADD KEY `messages_user_id_foreign` (`user_id`),
  ADD KEY `messages_ticket_id_foreign` (`ticket_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Index pour la table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `customers_subscription`
--
ALTER TABLE `customers_subscription`
  MODIFY `id_sub` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `customer_package`
--
ALTER TABLE `customer_package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `customers_subscription`
--
ALTER TABLE `customers_subscription`
  ADD CONSTRAINT `customers_subscription_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `customers_subscription_subscription_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `customer_package`
--
ALTER TABLE `customer_package`
  ADD CONSTRAINT `customer_package_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_package_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
