-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 14 fév. 2024 à 20:16
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
-- Base de données : `envi`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240210143239', '2024-02-10 15:33:27', 31),
('DoctrineMigrations\\Version20240210144732', '2024-02-10 15:47:43', 7),
('DoctrineMigrations\\Version20240213170922', '2024-02-13 18:09:39', 15),
('DoctrineMigrations\\Version20240213171407', '2024-02-13 18:14:12', 9),
('DoctrineMigrations\\Version20240213171600', '2024-02-13 18:16:04', 12),
('DoctrineMigrations\\Version20240214190700', '2024-02-14 20:07:04', 92);

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
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `dn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `role`, `mail`, `motdepasse`, `dn`) VALUES
(1, 'kamelhajsalah', 'aaa', 'aaa', 'aaa', 'aa', 'aa'),
(3, 'kamelhajsalah', 'aaaaa', 'benevole', 'saif.bou@live.com', 'aaa', '2019-01-01'),
(6, 'kamelhajsalah', 'aaaaa', 'benevole', 'saif.bou@live.com', 'aa', '2019-01-01'),
(7, 'kamelhajsalah', 'aaaaa', 'benevole', 'saif.bou@live.com', 'aa', '2019-01-01'),
(8, 'hatem', 'aaaaa', 'benevole', 'saif.bou@live.com', '1', '2019-01-01'),
(10, '1213', 'aaaaa', 'benevole', 'saif.bou@live.com', 'kamelhajsalah', '2019-01-01'),
(11, 'kamel', 'haj salah', 'benevole', 'saif.bou20@gmail.com', 'kamell', '2019-01-01'),
(12, 'hatem', 'asaaas', 'benevole', 'hamma.bou@live.com', 'aaaaa', '2019-01-01'),
(13, 'hatem', 'aaaaaaaa', 'benevole', 'saif.bou@live.com', 'hatemmm', '2019-01-01'),
(14, 'saif', 'bouhamed', 'benevole', 'saif.bou@live.com', 'hatemmm', '2019-01-01'),
(15, 'hatem', 'aaaaaaaa', 'benevole', 'saif.bou@live.com', 'aaaaaa', '2019-01-01'),
(16, 'aejahe', 'hezjeh', 'benevole', 'kamel.bou@live.com', '12345', '2019-01-01'),
(17, 'hdghsgdh', 'sghfsgfh', 'benevole', 'saif.bou20@gmail.com', 'hhhh', '2019-01-01'),
(18, 'sdhs', 'hsjfhdf', 'benevole', 'saif.bou@live.com', '$2y$13$GJdKeaEMjZ2JFIGBVInNq.iD9nxvkgxM08rqFNrjah.3sdOtkcbuW', '2019-01-01'),
(19, 'hatem', 'bouhamed', 'benevole', 'karbous.bou@gmail.com', '123', '2019-01-01'),
(20, 'akrem', 'bachta', 'agence', 'grissa@gmail.com', '$2y$13$JaTl3cVGmM65quqQfFS18Oa36hEOCS5zbDYcxQSdUzsMcL0ebWFzC', '2019-01-01'),
(21, 'akrem', 'bachta', 'agence', 'grissa@gmail.com', '$2y$13$p4qmhUlE6fb3HuR4UpRRlO1JGDI/iDsDh8bY2TLrXtd/rZTD35xCK', '2019-01-01'),
(22, 'akrem', 'bachta', 'agence', 'grissa@gmail.com', '$2y$13$oTiyNnIuqQousedqiZNOs.3.Q7QTx0Kiue.rLooxlqPZYgLCAZmmi', '2019-01-01'),
(23, 'akrem', 'bachta', 'agence', 'grissa@gmail.com', '$2y$13$VoV9cqScO9AE6p3M1YwFUuEi4QrxynWVLMDWp4Hh2MDQyAeG7ejhm', '2019-01-01'),
(24, 'akrem', 'bachta', 'benevole', 'grissa@gmail.com', '$2y$13$g/frkwQ7rnAi6yl9ceOO1e3dOq9/7HbFFOmkpDOQR1QOYKB2Pv4W.', '2019-10-01'),
(25, 'dhsjdh', 'hsjdhsdjh', 'benevole', 'kamel.bou@live.com', '$2y$13$l.2x7fyPNUyzawv/pCA8lePJl0HxMMY75/7oHo0sg6/ujR.mDHGeu', '2026-01-01'),
(26, 'nour', 'messai', 'agence', 'nour.Messai@gmail.com', '$2y$13$Tj2drP1fb8NGTBvT6rGS9ujXVaMdAO4uO0uescuUfatnsuPCUmQ5a', '2027-06-18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
