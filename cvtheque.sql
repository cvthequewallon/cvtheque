-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 21 fév. 2024 à 08:44
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cvtheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `company_signin`
--

CREATE TABLE `company_signin` (
  `id_company` int(100) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `siren` bigint(100) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `signin_since` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `company_signin`
--

INSERT INTO `company_signin` (`id_company`, `company_name`, `siren`, `mail`, `password`, `phone`, `town`, `postcode`, `country`, `signin_since`) VALUES
(1, 'CompanyTest', 123456789123, 'company.test@gmail.com', 'CompanyTest1!', 0758462325, 'Valenciennes', 59300, 'France', '2024-02-21 07:36:34');

-- --------------------------------------------------------

--
-- Structure de la table `user_signin`
--

CREATE TABLE `user_signin` (
  `id_user` int(100) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` int(10) UNSIGNED ZEROFILL NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `town` varchar(255) DEFAULT NULL,
  `postcode` int(100) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `signin_since` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user_signin`
--

INSERT INTO `user_signin` (`id_user`, `first_name`, `last_name`, `mail`, `password`, `phone`, `birthday`, `town`, `postcode`, `country`, `signin_since`) VALUES
(1, 'kylian', 'chaboche', 'kylian.chaboche@gmail.fr', 'UserPassword1!', 0647896352, '2024-02-21 07:44:16', 'Valenciennes', 59300, 'France', '2024-02-21 07:39:06');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `company_signin`
--
ALTER TABLE `company_signin`
  ADD PRIMARY KEY (`id_company`);

--
-- Index pour la table `user_signin`
--
ALTER TABLE `user_signin`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `company_signin`
--
ALTER TABLE `company_signin`
  MODIFY `id_company` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user_signin`
--
ALTER TABLE `user_signin`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
