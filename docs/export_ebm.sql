-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 20 Mars 2017 à 17:02
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ebm`
--

-- --------------------------------------------------------

--
-- Structure de la table `fractivitescles`
--

CREATE TABLE `fractivitescles` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TYPECANAUX` enum('1','2','3') COLLATE utf8_unicode_ci NOT NULL,
  `CONTENU` text COLLATE utf8_unicode_ci NOT NULL,
  `TITRE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ID_HELP` int(10) UNSIGNED NOT NULL,
  `ID_MATRICE` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `frcanaux`
--

CREATE TABLE `frcanaux` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TYPECANAUX` enum('1','2','3','4','5') COLLATE utf8_unicode_ci NOT NULL,
  `RECONNAISSANCE` text COLLATE utf8_unicode_ci NOT NULL,
  `EVALUATION` text COLLATE utf8_unicode_ci NOT NULL,
  `ACHAT` text COLLATE utf8_unicode_ci NOT NULL,
  `PRESTATION` text COLLATE utf8_unicode_ci NOT NULL,
  `VENTE` text COLLATE utf8_unicode_ci NOT NULL,
  `CONTENU` text COLLATE utf8_unicode_ci NOT NULL,
  `TITRE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ID_HELP` int(10) UNSIGNED NOT NULL,
  `ID_MATRICE` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `frhelp`
--

CREATE TABLE `frhelp` (
  `ID` int(10) UNSIGNED NOT NULL,
  `LIBELLEHELP` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CONTENU` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `frlangue`
--

CREATE TABLE `frlangue` (
  `ID` int(10) UNSIGNED NOT NULL,
  `REFERENCELANGUE` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `frmatrice`
--

CREATE TABLE `frmatrice` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TITREMATRICE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ID_PROJET` int(10) UNSIGNED NOT NULL,
  `ID_HELP` int(10) UNSIGNED NOT NULL,
  `DATECREATION` timestamp NOT NULL,
  `DATEENREGISTREMENT` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `frpartenariat`
--

CREATE TABLE `frpartenariat` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TYPECANAUX` enum('1','2','3') COLLATE utf8_unicode_ci NOT NULL,
  `CONTENU` text COLLATE utf8_unicode_ci NOT NULL,
  `TITRE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ID_HELP` int(10) UNSIGNED NOT NULL,
  `ID_MATRICE` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `frprojet`
--

CREATE TABLE `frprojet` (
  `ID` int(10) UNSIGNED NOT NULL,
  `LIBELLEPROJET` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TYPEPROJET` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL,
  `ID_LANGUE` int(10) UNSIGNED NOT NULL,
  `ID_HELP` int(10) UNSIGNED NOT NULL,
  `DATECREATION` timestamp NOT NULL,
  `DATEENREGISTREMENT` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `frpropositiondevaleur`
--

CREATE TABLE `frpropositiondevaleur` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TYPEPROPOSITIONDEVALEUR` enum('1','2','3','4','5','6','7','8','9','10','11') COLLATE utf8_unicode_ci NOT NULL,
  `CONTENU` text COLLATE utf8_unicode_ci NOT NULL,
  `TITRE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ID_HELP` int(10) UNSIGNED NOT NULL,
  `ID_MATRICE` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `frrelationclient`
--

CREATE TABLE `frrelationclient` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TYPECANAUX` enum('1','2','3','4','5','6') COLLATE utf8_unicode_ci NOT NULL,
  `CONTENU` text COLLATE utf8_unicode_ci NOT NULL,
  `TITRE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ID_HELP` int(10) UNSIGNED NOT NULL,
  `ID_MATRICE` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `frressourcescles`
--

CREATE TABLE `frressourcescles` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TYPEPHYSIQUES` text COLLATE utf8_unicode_ci NOT NULL,
  `TYPEINTELLECTUELLES` text COLLATE utf8_unicode_ci NOT NULL,
  `TYPEHUMAINES` text COLLATE utf8_unicode_ci NOT NULL,
  `TYPEFINANCIERES` text COLLATE utf8_unicode_ci NOT NULL,
  `CONTENU` text COLLATE utf8_unicode_ci NOT NULL,
  `TITRE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ID_HELP` int(10) UNSIGNED NOT NULL,
  `ID_MATRICE` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `frsegmentsclients`
--

CREATE TABLE `frsegmentsclients` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TYPE` enum('1','2','3','4','5') COLLATE utf8_unicode_ci NOT NULL,
  `CONTENU` text COLLATE utf8_unicode_ci NOT NULL,
  `TITRE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ID_HELP` int(10) UNSIGNED NOT NULL,
  `ID_MATRICE` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `frsourcesderevenus`
--

CREATE TABLE `frsourcesderevenus` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TYPESOURCESDEREVENU` enum('1','2','3','4','5','6','7') COLLATE utf8_unicode_ci NOT NULL,
  `PRIXFIXE` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL,
  `PRIXVARIABLE` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL,
  `CONTENU` text COLLATE utf8_unicode_ci NOT NULL,
  `TITRE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ID_HELP` int(10) UNSIGNED NOT NULL,
  `ID_MATRICE` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `frstructuredecouts`
--

CREATE TABLE `frstructuredecouts` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TYPECANAUX` enum('1','2') COLLATE utf8_unicode_ci NOT NULL,
  `COUTSFIXES` text COLLATE utf8_unicode_ci NOT NULL,
  `COUTSVARIABLES` text COLLATE utf8_unicode_ci NOT NULL,
  `ECONOMIESDECHELLES` text COLLATE utf8_unicode_ci NOT NULL,
  `ECONOMIESENVERGURE` text COLLATE utf8_unicode_ci NOT NULL,
  `TITRE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ID_HELP` int(10) UNSIGNED NOT NULL,
  `ID_MATRICE` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_03_20_103406_create_ROLES_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2017_03_12_162624_create_FRHELP_table', 1),
(5, '2017_03_12_162637_create_FRLANGUE_table', 1),
(6, '2017_03_13_160810_create_FRPROJET_table', 1),
(7, '2017_03_16_161933_create_FRMATRICE_table', 1),
(8, '2017_03_17_161958_create_FRSEGMENTSCLIENTS_table', 1),
(9, '2017_03_17_162011_create_FRCANAUX_table', 1),
(10, '2017_03_17_162029_create_FRRELATIONCLIENT_table', 1),
(11, '2017_03_17_162046_create_FRPROPOSITIONSDEVALEUR_table', 1),
(12, '2017_03_17_162101_create_FRSOURCESDEREVENUS_table', 1),
(13, '2017_03_17_162121_create_FRRESSOURCESCLES_table', 1),
(14, '2017_03_17_162538_create_FRACTIVITESCLES_table', 1),
(15, '2017_03_17_162550_create_FRPARTENARIAT_table', 1),
(16, '2017_03_17_162610_create_FRSTRUCTUREDECOUTS_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TITLE` enum('1','2','3') COLLATE utf8_unicode_ci NOT NULL,
  `SLUG` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DATECREATION` timestamp NOT NULL,
  `DATEENREGISTREMENT` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ID_ROLES` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fractivitescles`
--
ALTER TABLE `fractivitescles`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fractivitescles_id_help_foreign` (`ID_HELP`),
  ADD KEY `fractivitescles_id_matrice_foreign` (`ID_MATRICE`);

--
-- Index pour la table `frcanaux`
--
ALTER TABLE `frcanaux`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `frcanaux_id_help_foreign` (`ID_HELP`),
  ADD KEY `frcanaux_id_matrice_foreign` (`ID_MATRICE`);

--
-- Index pour la table `frhelp`
--
ALTER TABLE `frhelp`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `frlangue`
--
ALTER TABLE `frlangue`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `frmatrice`
--
ALTER TABLE `frmatrice`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `frmatrice_id_projet_foreign` (`ID_PROJET`),
  ADD KEY `frmatrice_id_help_foreign` (`ID_HELP`);

--
-- Index pour la table `frpartenariat`
--
ALTER TABLE `frpartenariat`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `frpartenariat_id_help_foreign` (`ID_HELP`),
  ADD KEY `frpartenariat_id_matrice_foreign` (`ID_MATRICE`);

--
-- Index pour la table `frprojet`
--
ALTER TABLE `frprojet`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `frprojet_id_langue_foreign` (`ID_LANGUE`),
  ADD KEY `frprojet_id_help_foreign` (`ID_HELP`);

--
-- Index pour la table `frpropositiondevaleur`
--
ALTER TABLE `frpropositiondevaleur`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `frpropositiondevaleur_id_help_foreign` (`ID_HELP`),
  ADD KEY `frpropositiondevaleur_id_matrice_foreign` (`ID_MATRICE`);

--
-- Index pour la table `frrelationclient`
--
ALTER TABLE `frrelationclient`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `frrelationclient_id_help_foreign` (`ID_HELP`),
  ADD KEY `frrelationclient_id_matrice_foreign` (`ID_MATRICE`);

--
-- Index pour la table `frressourcescles`
--
ALTER TABLE `frressourcescles`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `frressourcescles_id_help_foreign` (`ID_HELP`),
  ADD KEY `frressourcescles_id_matrice_foreign` (`ID_MATRICE`);

--
-- Index pour la table `frsegmentsclients`
--
ALTER TABLE `frsegmentsclients`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `frsegmentsclients_id_help_foreign` (`ID_HELP`),
  ADD KEY `frsegmentsclients_id_matrice_foreign` (`ID_MATRICE`);

--
-- Index pour la table `frsourcesderevenus`
--
ALTER TABLE `frsourcesderevenus`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `frsourcesderevenus_id_help_foreign` (`ID_HELP`),
  ADD KEY `frsourcesderevenus_id_matrice_foreign` (`ID_MATRICE`);

--
-- Index pour la table `frstructuredecouts`
--
ALTER TABLE `frstructuredecouts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `frstructuredecouts_id_help_foreign` (`ID_HELP`),
  ADD KEY `frstructuredecouts_id_matrice_foreign` (`ID_MATRICE`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `roles_slug_unique` (`SLUG`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_roles_foreign` (`ID_ROLES`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `fractivitescles`
--
ALTER TABLE `fractivitescles`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `frcanaux`
--
ALTER TABLE `frcanaux`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `frhelp`
--
ALTER TABLE `frhelp`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `frlangue`
--
ALTER TABLE `frlangue`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `frmatrice`
--
ALTER TABLE `frmatrice`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `frpartenariat`
--
ALTER TABLE `frpartenariat`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `frprojet`
--
ALTER TABLE `frprojet`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `frpropositiondevaleur`
--
ALTER TABLE `frpropositiondevaleur`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `frrelationclient`
--
ALTER TABLE `frrelationclient`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `frressourcescles`
--
ALTER TABLE `frressourcescles`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `frsegmentsclients`
--
ALTER TABLE `frsegmentsclients`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `frsourcesderevenus`
--
ALTER TABLE `frsourcesderevenus`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `frstructuredecouts`
--
ALTER TABLE `frstructuredecouts`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `fractivitescles`
--
ALTER TABLE `fractivitescles`
  ADD CONSTRAINT `fractivitescles_id_help_foreign` FOREIGN KEY (`ID_HELP`) REFERENCES `frhelp` (`ID`),
  ADD CONSTRAINT `fractivitescles_id_matrice_foreign` FOREIGN KEY (`ID_MATRICE`) REFERENCES `frmatrice` (`ID`);

--
-- Contraintes pour la table `frcanaux`
--
ALTER TABLE `frcanaux`
  ADD CONSTRAINT `frcanaux_id_help_foreign` FOREIGN KEY (`ID_HELP`) REFERENCES `frhelp` (`ID`),
  ADD CONSTRAINT `frcanaux_id_matrice_foreign` FOREIGN KEY (`ID_MATRICE`) REFERENCES `frmatrice` (`ID`);

--
-- Contraintes pour la table `frmatrice`
--
ALTER TABLE `frmatrice`
  ADD CONSTRAINT `frmatrice_id_help_foreign` FOREIGN KEY (`ID_HELP`) REFERENCES `frhelp` (`ID`),
  ADD CONSTRAINT `frmatrice_id_projet_foreign` FOREIGN KEY (`ID_PROJET`) REFERENCES `frprojet` (`ID`);

--
-- Contraintes pour la table `frpartenariat`
--
ALTER TABLE `frpartenariat`
  ADD CONSTRAINT `frpartenariat_id_help_foreign` FOREIGN KEY (`ID_HELP`) REFERENCES `frhelp` (`ID`),
  ADD CONSTRAINT `frpartenariat_id_matrice_foreign` FOREIGN KEY (`ID_MATRICE`) REFERENCES `frmatrice` (`ID`);

--
-- Contraintes pour la table `frprojet`
--
ALTER TABLE `frprojet`
  ADD CONSTRAINT `frprojet_id_help_foreign` FOREIGN KEY (`ID_HELP`) REFERENCES `frhelp` (`ID`),
  ADD CONSTRAINT `frprojet_id_langue_foreign` FOREIGN KEY (`ID_LANGUE`) REFERENCES `frlangue` (`ID`);

--
-- Contraintes pour la table `frpropositiondevaleur`
--
ALTER TABLE `frpropositiondevaleur`
  ADD CONSTRAINT `frpropositiondevaleur_id_help_foreign` FOREIGN KEY (`ID_HELP`) REFERENCES `frhelp` (`ID`),
  ADD CONSTRAINT `frpropositiondevaleur_id_matrice_foreign` FOREIGN KEY (`ID_MATRICE`) REFERENCES `frmatrice` (`ID`);

--
-- Contraintes pour la table `frrelationclient`
--
ALTER TABLE `frrelationclient`
  ADD CONSTRAINT `frrelationclient_id_help_foreign` FOREIGN KEY (`ID_HELP`) REFERENCES `frhelp` (`ID`),
  ADD CONSTRAINT `frrelationclient_id_matrice_foreign` FOREIGN KEY (`ID_MATRICE`) REFERENCES `frmatrice` (`ID`);

--
-- Contraintes pour la table `frressourcescles`
--
ALTER TABLE `frressourcescles`
  ADD CONSTRAINT `frressourcescles_id_help_foreign` FOREIGN KEY (`ID_HELP`) REFERENCES `frhelp` (`ID`),
  ADD CONSTRAINT `frressourcescles_id_matrice_foreign` FOREIGN KEY (`ID_MATRICE`) REFERENCES `frmatrice` (`ID`);

--
-- Contraintes pour la table `frsegmentsclients`
--
ALTER TABLE `frsegmentsclients`
  ADD CONSTRAINT `frsegmentsclients_id_help_foreign` FOREIGN KEY (`ID_HELP`) REFERENCES `frhelp` (`ID`),
  ADD CONSTRAINT `frsegmentsclients_id_matrice_foreign` FOREIGN KEY (`ID_MATRICE`) REFERENCES `frmatrice` (`ID`);

--
-- Contraintes pour la table `frsourcesderevenus`
--
ALTER TABLE `frsourcesderevenus`
  ADD CONSTRAINT `frsourcesderevenus_id_help_foreign` FOREIGN KEY (`ID_HELP`) REFERENCES `frhelp` (`ID`),
  ADD CONSTRAINT `frsourcesderevenus_id_matrice_foreign` FOREIGN KEY (`ID_MATRICE`) REFERENCES `frmatrice` (`ID`);

--
-- Contraintes pour la table `frstructuredecouts`
--
ALTER TABLE `frstructuredecouts`
  ADD CONSTRAINT `frstructuredecouts_id_help_foreign` FOREIGN KEY (`ID_HELP`) REFERENCES `frhelp` (`ID`),
  ADD CONSTRAINT `frstructuredecouts_id_matrice_foreign` FOREIGN KEY (`ID_MATRICE`) REFERENCES `frmatrice` (`ID`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_roles_foreign` FOREIGN KEY (`ID_ROLES`) REFERENCES `roles` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
