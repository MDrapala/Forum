-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 05 avr. 2018 à 08:36
-- Version du serveur :  5.7.21
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `titre` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id_p` int(11) NOT NULL,
  `contenu` text,
  `date_p` datetime DEFAULT NULL,
  `u_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_p`, `contenu`, `date_p`, `u_id`, `t_id`) VALUES
(47, '<p>Qui a un bon tuto de mecanique ?</p>\r\n', NULL, 40, 1),
(48, '<p>Un bon site : http://www.auto-technique.fr/fiche-technique/</p>\r\n', NULL, 41, 1);

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

CREATE TABLE `topic` (
  `id_t` int(11) NOT NULL,
  `titre` varchar(30) DEFAULT NULL,
  `description` text,
  `cat_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_u` int(11) NOT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `lvl` int(11) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `description` text,
  `inscription` datetime DEFAULT NULL,
  `last_co` datetime DEFAULT NULL,
  `question` varchar(100) NOT NULL,
  `reponse` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_u`, `pseudo`, `mdp`, `email`, `avatar`, `lvl`, `ip`, `description`, `inscription`, `last_co`, `question`, `reponse`) VALUES
(36, 'Mathieu', '0333830cd8feda3ff5f7462268dfc80b3dabf6d8', 'drapalamathieu95@gmail.com', NULL, 1, NULL, NULL, NULL, NULL, '', 'fr'),
(35, 'zeu', '8faf8d795d9c8eb6617c86a5f55ae6f406c208c6', 'zeu@zeu.fr', NULL, 1, NULL, NULL, NULL, NULL, '', 'y'),
(37, 'ma', '1382244e1784be148fb78b24983c206ebc95928f', 'ma@ma.com', NULL, NULL, NULL, NULL, NULL, NULL, '', 'y'),
(38, 'a', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'a@a.fr', NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(39, 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'a@a.fr', NULL, NULL, NULL, NULL, NULL, NULL, '', 'a'),
(40, 'FinTest', '166e7f4cf714fae54a2980715e2c471e05c90acb', 'fintest@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '', 'fr'),
(34, 'mathieu', '66468173c2b1642fcdd5bbb3e6b0f5ea20554ded', 'mat@mat.fr', NULL, 1, NULL, NULL, NULL, NULL, '', 'v'),
(41, 'pierre', '9c070113b1bbc137a3274b72b5984e3535068445', 'pierre@zingraff.net', NULL, NULL, NULL, NULL, NULL, NULL, '', 'ares');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Index pour la table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id_t`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `topic`
--
ALTER TABLE `topic`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
