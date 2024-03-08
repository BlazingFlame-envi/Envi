-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 05 mars 2024 à 18:30
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `envi3`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `emplacement_id` int(11) NOT NULL,
  `nom_c` varchar(255) NOT NULL,
  `nom_tuteur` varchar(255) NOT NULL,
  `date_c` date NOT NULL,
  `duree_c` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `emplacement_id`, `nom_c`, `nom_tuteur`, `date_c`, `duree_c`, `id_user`) VALUES
(1, 1, 'djebbi', 'feryel', '2024-03-28', 5, NULL),
(2, 2, 'recyclage', 'firas', '2024-05-17', 4, NULL),
(3, 3, 'ENVI', 'kamel', '2024-03-29', 2, NULL),
(4, 2, 'water', 'hello', '2024-03-28', 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240303195131', '2024-03-03 20:51:36', 715);

-- --------------------------------------------------------

--
-- Structure de la table `emplacement`
--

CREATE TABLE `emplacement` (
  `id` int(11) NOT NULL,
  `nom_em` varchar(255) NOT NULL,
  `cout` double NOT NULL,
  `capacite` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `emplacement`
--

INSERT INTO `emplacement` (`id`, `nom_em`, `cout`, `capacite`, `id_user`) VALUES
(1, 'tunis', 100, 50, NULL),
(2, 'paris', 234, 123, NULL),
(3, 'Hammamet', 190, 100, 3),
(4, 'kamel', 100, 50, 3);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `nom_e` varchar(255) NOT NULL,
  `emplacement` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mail_e` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom_e`, `emplacement`, `tel`, `mail_e`, `image`, `id_user`) VALUES
(31, 'azeqsdqsd', 'qsdqsdqdqsd', '65555855', 'qsdqsdqsd@qsdqdsqs.fr', '65e705cec35ec.jpg', 2),
(33, 'kamel', 'ghazella', '74123659', 'kamelhajsalah1@gmail.com', '65e63f8ea8f7f.png', 3),
(34, 'saiff', 'aaaaa', '74123654', 'kamelhajsalah1@gmail.com', '65e63fd80ff39.png', 3),
(35, 'saif', 'aaaa', '78954123', 'kamelhajsalah1@gmail.com', '65e703be506f2.jpg', NULL),
(36, 'grissa', 'aaaaaa', '74123654', 'kamelhajsalah1@gmail.com', '65e704187179b.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `id` int(11) NOT NULL,
  `nom_eq` varchar(255) NOT NULL,
  `type_eq` varchar(255) NOT NULL,
  `disponibilite_eq` varchar(255) NOT NULL,
  `quantite_eq` int(11) NOT NULL,
  `prix_eq` double NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipement`
--

INSERT INTO `equipement` (`id`, `nom_eq`, `type_eq`, `disponibilite_eq`, `quantite_eq`, `prix_eq`, `id_user`) VALUES
(24, 'bgbgbg', 'gbbggbgb7', 'oui', 525225, 2222.2, 2),
(25, 'test', 'aa45', 'oui', 100, 12.3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id` int(11) NOT NULL,
  `nom_fr` varchar(255) NOT NULL,
  `prenom_fr` varchar(255) NOT NULL,
  `age_fr` int(11) NOT NULL,
  `adress_fr` varchar(255) NOT NULL,
  `equipement_id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id`, `nom_fr`, `prenom_fr`, `age_fr`, `adress_fr`, `equipement_id`, `id_user`) VALUES
(21, 'aaaaz', 'adddd', 20, 'aaz58', 25, 3);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `id` int(11) NOT NULL,
  `entreprise_id` int(11) NOT NULL,
  `nom_o` varchar(255) NOT NULL,
  `type_o` varchar(255) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`id`, `entreprise_id`, `nom_o`, `type_o`, `id_user`) VALUES
(19, 33, 'diamond', 'Money', 2),
(20, 34, 'Nour', 'Samar', 3);

-- --------------------------------------------------------

--
-- Structure de la table `succes`
--

CREATE TABLE `succes` (
  `id` int(11) NOT NULL,
  `type_s` varchar(255) NOT NULL,
  `nombenef_s` varchar(255) NOT NULL,
  `nomspon_s` varchar(255) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `succes`
--

INSERT INTO `succes` (`id`, `type_s`, `nombenef_s`, `nomspon_s`, `id_user`) VALUES
(3, 'money', 'Saif', 'Kamel', 2);

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `id` int(11) NOT NULL,
  `succes_id` int(11) NOT NULL,
  `date_t` date NOT NULL,
  `type_t` varchar(255) NOT NULL,
  `nom_t` varchar(255) NOT NULL,
  `nbpart_t` int(11) DEFAULT NULL,
  `empl_t` varchar(255) NOT NULL,
  `favoris` tinyint(1) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id`, `succes_id`, `date_t`, `type_t`, `nom_t`, `nbpart_t`, `empl_t`, `favoris`, `id_user`) VALUES
(3, 3, '2026-01-01', 'invest in energy', 'kamel', 700, 'tunis', 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `dn` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `num_tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `role`, `mail`, `motdepasse`, `dn`, `status`, `num_tel`) VALUES
(1, 'youssef', 'grissa', 'employé', 'youssef.grissa.yg@gmail.com', '$2y$13$MYJ9DY8Zp1/buRSkHICsIu8jw9/KknmKadzgd4ns9e4MRWlRGa70i', '2023-01-01', 'active', '52307610'),
(2, 'sabsoub', 'sabsoub', 'benevole', 'sabsoub@sabsoub.com', '$2y$13$Q6lvh47MdfOADpnHGi0aGOzShBQBGqEJfC3i/0SmUEAVnAcqoPRqq', '2020-01-01', 'active', '52307610'),
(3, 'kamel', 'haj salah', 'agence', 'kamel@kamel.com', '$2y$13$htqmCaqDY5WJgJK2SULxm.6eb5.WmddpAiXZtOeS/edF0UTw36aCO', '2026-01-01', 'active', '52307610'),
(5, 'admin', 'admin', 'admin', 'admin.admin@gmail.com', '$2y$13$bJ8drN5M5Wkxg2NdBpx4HeP/I2GcC8de62pAWcH1L018RKHkneG0u', '2026-01-01', 'active', '27231453');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FDCA8C9CC4598A51` (`emplacement_id`),
  ADD KEY `Fk_id_user2` (`id_user`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `emplacement`
--
ALTER TABLE `emplacement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk3_userid` (`id_user`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk1_userid` (`id_user`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk2_userid` (`id_user`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_AF86866FA4AEAFEA` (`entreprise_id`),
  ADD KEY `user_id` (`id_user`);

--
-- Index pour la table `succes`
--
ALTER TABLE `succes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userid` (`id_user`);

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3BF2CD984EF1B4AB` (`succes_id`),
  ADD KEY `Fk_id_user` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `emplacement`
--
ALTER TABLE `emplacement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `succes`
--
ALTER TABLE `succes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `FK_FDCA8C9CC4598A51` FOREIGN KEY (`emplacement_id`) REFERENCES `emplacement` (`id`),
  ADD CONSTRAINT `Fk_id_user2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `emplacement`
--
ALTER TABLE `emplacement`
  ADD CONSTRAINT `fk3_userid` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD CONSTRAINT `fk1_userid` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD CONSTRAINT `fk2_userid` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `succes`
--
ALTER TABLE `succes`
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `taches`
--
ALTER TABLE `taches`
  ADD CONSTRAINT `FK_3BF2CD984EF1B4AB` FOREIGN KEY (`succes_id`) REFERENCES `succes` (`id`),
  ADD CONSTRAINT `Fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
