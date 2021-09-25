-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 02 sep. 2021 à 16:54
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id17061002_groupe_sao_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`telephone`, `nom`, `prenom`, `password`) VALUES
('4383085853', 'Ngassa', 'Magloire', 'Magloiremag2021'),
('5144734430', 'Noudjio', 'Martial', 'Martialsao2021');

-- --------------------------------------------------------

--
-- Structure de la table `autre_entrer`
--

CREATE TABLE `autre_entrer` (
  `Id_autre_entrer` int(11) NOT NULL,
  `date_autre_entrer` date DEFAULT NULL,
  `libelle_autre_entrer` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `montant_autre_entrer` decimal(10,0) DEFAULT NULL,
  `detail_autre_entrer` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande_service`
--

CREATE TABLE `commande_service` (
  `Id_service` int(11) NOT NULL,
  `nom_client` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone_client` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `adresse_depart` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse_arrive` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `statut` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `montant` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `commande_service`
--

INSERT INTO `commande_service` (`Id_service`, `nom_client`, `telephone_client`, `service`, `date`, `heure`, `adresse_depart`, `adresse_arrive`, `statut`, `detail`, `montant`) VALUES
(39, 'Willy', '5146278697', 'Déménagement', '2021-09-04', '08:00:00', '905 Place Savoie broussard', '4 Rue des Érables Rivière du loup', 'programmer', '1) x4 matelas\r\n2) x3 sommiers\r\n3) x1 machine à laver\r\n4) x1 table de cuisine \r\n5) x1 fauteuils de 5 places \r\n6) x1 fauteuil de une place \r\n7) x1 table salon\r\n8) x1 canapé lit \r\n9) x2 télé plasma \r\n10) x15 boites\r\n11) x15 valises \r\n12) x2 vélos pour enfants \r\n13) x2 tapis salon \r\n14) x1 armoire de chambre (6 tiroirs)\r\n15) x4 roues de voiture\r\n16) x6 chaises de cuisines\r\n', 1600),
(40, 'Haitienne', '4383563995', 'Déménagement', '2021-08-03', '17:30:00', '12102 rue fillion', 'Anjou', 'terminer', 'Quelques boites\r\nlit de bb\r\ncommode de bb\r\nquelque sac', 250);

-- --------------------------------------------------------

--
-- Structure de la table `depots`
--

CREATE TABLE `depots` (
  `Id_depots` int(11) NOT NULL,
  `date_depot` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `libelle_depot` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `montant_depot` decimal(10,0) DEFAULT NULL,
  `detail_depot` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `depots`
--

INSERT INTO `depots` (`Id_depots`, `date_depot`, `libelle_depot`, `montant_depot`, `detail_depot`) VALUES
(3, '2021-08-15', 'Avance déposé ', 800, 'Avance déposé par Magloire pour arranger le camion somme qui devra etre remboursé plus tard'),
(4, '2021-08-01', 'Reste en caisse ', 467, 'Montant en caisse '),
(5, '2021-08-03', '', 200, 'Déménagement sofa ');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `Id_facture` int(11) NOT NULL,
  `Id_service` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `Id_notes` int(11) NOT NULL,
  `date_notes` date DEFAULT NULL,
  `notes` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `suivi_activites`
--

CREATE TABLE `suivi_activites` (
  `Id_suivi` int(11) NOT NULL,
  `date_suivi` date DEFAULT NULL,
  `libelle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `montant_suivi` decimal(10,0) DEFAULT NULL,
  `detail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `suivi_activites`
--

INSERT INTO `suivi_activites` (`Id_suivi`, `date_suivi`, `libelle`, `montant_suivi`, `detail`) VALUES
(9, '2021-08-06', '', 260, 'Assurance camion '),
(10, '2021-08-03', '', 125, 'Montant payé à Bovalis pour son aide pour le 02 et 03 août '),
(11, '2021-08-03', '', 25, 'Gaz diesel '),
(12, '2021-08-03', '', 25, 'Gaz diesel ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`telephone`);

--
-- Index pour la table `autre_entrer`
--
ALTER TABLE `autre_entrer`
  ADD PRIMARY KEY (`Id_autre_entrer`);

--
-- Index pour la table `commande_service`
--
ALTER TABLE `commande_service`
  ADD PRIMARY KEY (`Id_service`);

--
-- Index pour la table `depots`
--
ALTER TABLE `depots`
  ADD PRIMARY KEY (`Id_depots`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`Id_facture`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`Id_notes`);

--
-- Index pour la table `suivi_activites`
--
ALTER TABLE `suivi_activites`
  ADD PRIMARY KEY (`Id_suivi`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `autre_entrer`
--
ALTER TABLE `autre_entrer`
  MODIFY `Id_autre_entrer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande_service`
--
ALTER TABLE `commande_service`
  MODIFY `Id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `depots`
--
ALTER TABLE `depots`
  MODIFY `Id_depots` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `Id_facture` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `Id_notes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `suivi_activites`
--
ALTER TABLE `suivi_activites`
  MODIFY `Id_suivi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
