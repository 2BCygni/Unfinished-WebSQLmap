-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 26 nov. 2018 à 23:00
-- Version du serveur :  10.1.33-MariaDB
-- Version de PHP :  7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `websqlmap`
--

-- --------------------------------------------------------

--
-- Structure de la table `dashboard`
--

CREATE TABLE `dashboard` (
  `visits` int(11) NOT NULL,
  `successtests` int(11) NOT NULL,
  `launchedtests` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dashboard`
--

INSERT INTO `dashboard` (`visits`, `successtests`, `launchedtests`) VALUES
(175, 43, 82);

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE `infos` (
  `sqlpath` text NOT NULL,
  `os` int(11) NOT NULL,
  `ready` int(11) NOT NULL,
  `preset` int(11) NOT NULL,
  `pypath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `infos`
--

INSERT INTO `infos` (`sqlpath`, `os`, `ready`, `preset`, `pypath`) VALUES
('', 1, 1, 0, 'C:\\Python27\\python.exe');

-- --------------------------------------------------------

--
-- Structure de la table `preset`
--

CREATE TABLE `preset` (
  `risk` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `createdate` char(50) DEFAULT NULL,
  `argv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `preset`
--

INSERT INTO `preset` (`risk`, `level`, `name`, `description`, `createdate`, `argv`) VALUES
(3, 5, 'Maximal', 'Maximal profile', '2018-11-26 22:16:45', '--maximal');

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

CREATE TABLE `tests` (
  `name` text NOT NULL,
  `description` text NOT NULL,
  `target` text NOT NULL,
  `launchdate` char(50) DEFAULT NULL,
  `state` text NOT NULL,
  `argv` text NOT NULL,
  `risk` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `url` text NOT NULL,
  `pvp` text NOT NULL,
  `step` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tests`
--

INSERT INTO `tests` (`name`, `description`, `target`, `launchdate`, `state`, `argv`, `risk`, `level`, `url`, `pvp`, `step`) VALUES
('Localhost', 'Attacking my localhost...', 'Localhost', '2018-10-21 12:07:06', 'Completed', '', 1, 1, 'http://localhost/faillesql/sql.php?id=1', 'id', 0),
('Test', 'Attack de fou', 'Test', '2018-11-26 18:24:58', 'Pending', '', 3, 5, 'http://localhost/faillesql/sql.php?id=1', 'id', 0);

-- --------------------------------------------------------

--
-- Structure de la table `userinfo`
--

CREATE TABLE `userinfo` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `userinfo`
--

INSERT INTO `userinfo` (`username`, `password`) VALUES
('admin', 'blank');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
