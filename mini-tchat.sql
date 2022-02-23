-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 23 fév. 2022 à 12:18
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mini-tchat`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `adress_ip` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `date_time`, `adress_ip`, `content`) VALUES
(1, 1, '2022-02-01 14:27:12', '::1', 'hjkolmiokjhyrgtrefz'),
(2, 1, '2022-02-01 14:30:21', '::1', 'k,tu,fntfd'),
(3, 1, '2022-02-01 15:53:30', '::1', 'je suis un dino !\r\n'),
(4, 1, '2022-02-01 15:53:34', '::1', 'revgtrehrt'),
(5, 1, '2022-02-01 15:54:04', '::1', 'fdbeqgreqb'),
(11, 1, '2022-02-01 16:32:30', '::1', 'ngn'),
(12, 1, '2022-02-02 10:05:32', '::1', 'jkyrkjt'),
(13, 5, '2022-02-02 10:30:52', '::1', 'coucou'),
(14, 6, '2022-02-02 10:56:22', '::1', 'HEY HEY\r\n'),
(15, 6, '2022-02-02 10:56:31', '::1', '8U4U6'),
(16, 6, '2022-02-02 12:15:28', '::1', 'sdfvsded'),
(17, 6, '2022-02-02 12:29:40', '::1', 'BLAH'),
(18, 6, '2022-02-02 15:13:03', '::1', 'puhyumio'),
(19, 1, '2022-02-03 14:34:04', '::1', 'gerge'),
(20, 1, '2022-02-03 16:10:35', '::1', 'hr!lyotikrmethk'),
(21, 5, '2022-02-03 16:11:44', '::1', 'gbvztrhzrghrt');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`) VALUES
(1, 'Miharu', 'petons'),
(5, 'Saint-Hamza', 'toto'),
(6, 'Frederic1er', '12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
