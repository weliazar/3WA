-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 16 jan. 2019 à 14:31
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.2.11-2+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `Author`
--

CREATE TABLE `Author` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Author`
--

INSERT INTO `Author` (`Id`, `FirstName`, `LastName`) VALUES
(1, 'Denis', 'Brogniart'),
(2, 'Baruch', 'Spinoza'),
(3, 'Albert', 'Camus');

-- --------------------------------------------------------

--
-- Structure de la table `Category`
--

CREATE TABLE `Category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Category`
--

INSERT INTO `Category` (`Id`, `Name`) VALUES
(1, 'Musiques'),
(2, 'Voyages');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `Pseudo` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  `CreationDate` datetime NOT NULL,
  `PostId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `Id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  `CreationDate` datetime NOT NULL,
  `AuthorId` int(10) NOT NULL,
  `CategoryId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`Id`, `Title`, `Content`, `CreationDate`, `AuthorId`, `CategoryId`) VALUES
(3, 'test 1', 'hello\r\n', '2019-01-11 10:33:32', 1, 1),
(5, 'test 2', 'Je suis le test 2', '2019-01-15 16:00:15', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Users`
--

INSERT INTO `Users` (`id`, `mail`, `password`, `nom`, `prenom`, `pseudo`, `role`) VALUES
(2, 'wilkenson.eliazar@gmail.com', 'aze', 'azerty', 'junior', 'asvb', 'user'),
(4, 'wa@gmail.com', '1234', 'azerty', 'junior', '', 'user'),
(5, 'aze@a.fr', '$2y$11$14bec9e756bdcc14cfdbcuMW0FsJ/.6V.lsnmJ9zal0ceH8/99Ugi', 'ee', 'ef', 'asvb', 'user'),
(6, 'test@mail.com', '$2y$11$16c066a25de58b4719ac2u//uj7PPl7XdI8OpsUDiZdeXhwYY/s7e', 'azerty', 'junior', 'azertyv', 'user'),
(7, 'test1', '$2y$11$949afccf89cf991728ad4Oy9NiLx6De3D6aNIC2DUWUmliP/guL2u', 'azerty', 'junior', 'wil', 'user'),
(8, 'test2', '$2y$11$b9aa7a8ed03bdb01790b2u.2.xSR3TD1p4ONbAjA8WR7RBAt.hTPm', 'azerty', 'junior', 'wil', 'user'),
(9, 'admin@test.fr', '$2y$11$bbcfb413fd9aa0e6756b3u/un/SY/6DZSbL.etAtZWkRNP3KGa5wO', 'azerty', 'junior', 'H', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Author`
--
ALTER TABLE `Author`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Category`
--
ALTER TABLE `Category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
