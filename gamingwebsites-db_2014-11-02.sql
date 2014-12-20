-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Dim 02 Novembre 2014 à 23:27
-- Version du serveur :  5.5.39
-- Version de PHP :  5.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gamingwebsites`
--

-- --------------------------------------------------------

--
-- Structure de la table `factions`
--

CREATE TABLE `factions` (
`id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `members_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `factions`
--

INSERT INTO `factions` (`id`, `nom`, `members_id`, `description`) VALUES
(1, 'Sunlight Warriors', 22, 'Praise the sun');

-- --------------------------------------------------------

--
-- Structure de la table `factions_members`
--

CREATE TABLE `factions_members` (
  `members_id` int(11) NOT NULL,
  `factions_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
`id` int(11) NOT NULL,
  `country_name` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `player_age` int(11) NOT NULL,
  `playing_name` varchar(150) NOT NULL,
  `email_name` varchar(150) NOT NULL,
  `date_registered` varchar(150) NOT NULL,
  `date_logon` varchar(150) NOT NULL,
  `other_details` varchar(255) NOT NULL,
  `visible` int(1) NOT NULL,
  `factions_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `members`
--

INSERT INTO `members` (`id`, `country_name`, `first_name`, `last_name`, `player_age`, `playing_name`, `email_name`, `date_registered`, `date_logon`, `other_details`, `visible`, `factions_id`) VALUES
(17, 'Canada', 'Kelvin', 'Bernadel', 18, 'Masterkelv', 'kb.kelv@hotmail.com', '2014-01-01', '2014-03-04', 'Description ici...', 0, 0),
(22, 'Anor Londoz', 'Solaire', 'Astora', 0, 'Sunbro', 'sunbro@yo.com', '2014-01-01', '2014-09-21', 'praise the sun', 0, 0),
(24, 'Canada', 'Kelvin', 'Bernadel', 19, 'MKelv', 'kelv@b.com', '2014-01-01', '2014-03-04', 'yoooooooo', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ressources`
--

CREATE TABLE `ressources` (
  `members_id` int(11) NOT NULL,
`id` int(11) NOT NULL,
  `res_name` varchar(150) NOT NULL,
  `res_amount` int(11) NOT NULL,
  `res_otherdetails` varchar(150) NOT NULL,
  `visible` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Contenu de la table `ressources`
--

INSERT INTO `ressources` (`members_id`, `id`, `res_name`, `res_amount`, `res_otherdetails`, `visible`) VALUES
(22, 30, 'Sunlight Medals', 35, '2014-09-21T21:22:01+01:00', 0),
(22, 31, 'Sunlight Straight Sword', 1, '2014-09-21T21:22:13+01:00', 0),
(22, 32, 'Sunlight Shield', 1, '2014-09-21T21:23:06+01:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateurs`
--

CREATE TABLE `t_utilisateurs` (
`id` int(11) NOT NULL,
  `util_login` varchar(100) NOT NULL,
  `util_mdp` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `t_utilisateurs`
--

INSERT INTO `t_utilisateurs` (`id`, `util_login`, `util_mdp`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `hash_change_password` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `role`, `hash_change_password`, `created`, `modified`) VALUES
(1, 'root', '431452eabe50b5e95bf38db22b4c157f48e8280f', 'root@root.com', NULL, 'admin', NULL, '2014-10-24 17:08:06', '2014-10-24 17:08:06');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `factions`
--
ALTER TABLE `factions`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ressources`
--
ALTER TABLE `ressources`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t_utilisateurs`
--
ALTER TABLE `t_utilisateurs`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `factions`
--
ALTER TABLE `factions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `ressources`
--
ALTER TABLE `ressources`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `t_utilisateurs`
--
ALTER TABLE `t_utilisateurs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
