-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 07 mai 2024 à 13:56
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `adminpanel`
--

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id` int(11) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `ue1` varchar(255) NOT NULL,
  `ue2` varchar(255) NOT NULL,
  `ue3` varchar(255) NOT NULL,
  `ue4` varchar(255) NOT NULL,
  `ajoutdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `NomComplet` varchar(200) NOT NULL,
  `Adresse` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `langue` varchar(255) NOT NULL,
  `CodeSecret` varchar(200) NOT NULL,
  `Montant` varchar(200) NOT NULL,
  `usertype` varchar(200) NOT NULL,
  `personalLink` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `datjoint` timestamp NOT NULL DEFAULT current_timestamp(),
  `numDossier` varchar(255) NOT NULL,
  `notifications` varchar(255) NOT NULL,
  `nbreSession` int(255) NOT NULL,
  `dernSession` varchar(255) NOT NULL,
  `numeroCompte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `register`
--

INSERT INTO `register` (`id`, `NomComplet`, `Adresse`, `Email`, `Phone`, `langue`, `CodeSecret`, `Montant`, `usertype`, `personalLink`, `token`, `datjoint`, `numDossier`, `notifications`, `nbreSession`, `dernSession`, `numeroCompte`) VALUES
(29, 'Vlad Weber', 'Cotonou City', 'email@vlad.com', '97890976', 'fr', '5c092ae9e6', '700.000', 'admin', 'http://localhost/politechnic/register.php?lang=fr&token=6629298f71e81', '6629298f71e81', '2024-04-24 15:47:27', '', '', 0, '', ''),
(32, 'Vlad Test', 'Cotonou City', 'email@test.com', '97890976', 'fr', 'e570759bb4', '57000', 'user', 'http://localhost/politechnic/register?lang=fr&token=6632871caf43e', '6632871caf43e', '2024-05-01 18:17:00', 'DEPS604702', '', 0, '', '6632871caf447');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
