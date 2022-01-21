-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 jan. 2022 à 20:59
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `renting`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `email_user` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `token` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`email_user`, `name`, `phone`, `password`, `remember_token`, `token`) VALUES
('admin@admin', 'admin', '1111', 'admin', 'XiFMOtwhNWZPyw2SZZe7oU5xLxb3LYnuJZcgPmJ4k9pVLQk4zIVMsFFY9ugOa5XJ0eJqT3eLB3JVfnBwCf10oaTW5xrbB2Gftmrl9IeyPOfFLCKl7C6Ku1NYf7EKkQoC6Wp0DhGksZzJOAXBlIkUOIkSHAgYUNDYGi3yKmaYrnNa2wFa0o9yCs5LkAE3fFCwj9suyGVZ8FqYzEPq9SSGoOGvPwC7YErt2mVT36xbb3O3poW3zKuPkI038w9vfMZ', ''),
('jihen.benazzouz@etudiant-fst.utm.tn', 'admin', '2222222', '$2a$07$usesomesillystringforeiF5yiFh4MjL.yb4bO6qzG', '', 'T3mof5SjMVZ8sW7E02GUaU0BmTvQRaDgWoVP7BgscQkpRQkKRG8oh3xQ8enP');

-- --------------------------------------------------------

--
-- Structure de la table `villa`
--

CREATE TABLE `villa` (
  `id_villa` int(6) NOT NULL,
  `price` float NOT NULL,
  `nights` int(4) NOT NULL,
  `type` varchar(100) NOT NULL,
  `explanation` varchar(1000) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `max_person` int(2) NOT NULL,
  `checkin` varchar(100) NOT NULL,
  `checkout` varchar(100) NOT NULL,
  `door` int(3) NOT NULL,
  `building` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `equipments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `villa`
--

INSERT INTO `villa` (`id_villa`, `price`, `nights`, `type`, `explanation`, `email_user`, `max_person`, `checkin`, `checkout`, `door`, `building`, `street`, `state`, `country`, `equipments`) VALUES
(169748, 102, 6, 'regular', 'dddd', 'admin@admin', 7, '03:00,15:00', '04:00,06:00,10:00', 8, 'fe', '10, 1529', 'ddd', 'Tunisie', 'fridge, toaster, internet, tv'),
(216547, 125, 10, 'Regular', 'bla bla bla', 'admin@admin', 2, '16:00', '10:00', 5, 'jfjerfkelf', 'hello', 'Tunis', 'Tunisia', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email_user`),
  ADD KEY `email_user` (`email_user`);

--
-- Index pour la table `villa`
--
ALTER TABLE `villa`
  ADD PRIMARY KEY (`id_villa`),
  ADD KEY `id_villa` (`id_villa`),
  ADD KEY `email_user` (`email_user`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `villa`
--
ALTER TABLE `villa`
  ADD CONSTRAINT `villa_ibfk_3` FOREIGN KEY (`email_user`) REFERENCES `user` (`email_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
