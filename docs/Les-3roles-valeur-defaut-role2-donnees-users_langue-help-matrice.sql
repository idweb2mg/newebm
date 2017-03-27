-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 23 Mars 2017 à 04:13
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10


--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`ID_ROLES`, `TITLE`, `SLUG`, `DATECREATION`, `DATEENREGISTREMENT`) VALUES
(1, '1', 'admin', '2017-03-23 04:11:05', '2017-03-23 04:11:05'),
(2, '2', 'moderateur', '2017-03-23 04:12:51', '2017-03-23 04:12:51'),
(3, '3', 'membre', '2017-03-23 04:13:10', '2017-03-23 04:13:10');



--
-- Valeur par defaut IDROLE de la table `users`
--

ALTER TABLE `users` CHANGE `ID_ROLES` `ID_ROLES` INT(10) UNSIGNED NOT NULL DEFAULT '2';

-
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `ID_ROLES`, `seen`, `valid`, `confirmed`, `confirmation_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'alexis', 'newalexisss@gmail.com', '$2y$10$gp1gLJuJy9lOPsyO9udI3OpDVIK.MmiwiE3p3sAYmL1G7Ow7Lsddi', 2, 0, 0, 0, NULL, 'Tfsuu2VTuCVVqZhtmBlQWnfEq7mX2Q07xxXCnY92ceCiJeKzSxZSZcuALCAP', '2017-03-22 11:57:47', '2017-03-22 11:57:47');

--
-- Contenu de la table `frprojet`
--

INSERT INTO `frprojet` (`ID_PROJET`, `LIBELLEPROJET`, `TYPEPROJET`, `ID_LANGUE`, `ID_HELP`, `ID_USERS`, `DATECREATION`, `DATEENREGISTREMENT`) VALUES
(1, 'projetTest', '1', 1, 1, 2, '2017-03-23 14:52:54', '2017-03-23 14:52:54');


--
-- Contenu de la table `frmatrice`
--

INSERT INTO `frmatrice` (`ID_MATRICE`, `TITREMATRICE`, `ID_PROJET`, `ID_HELP`, `DATECREATION`, `DATEENREGISTREMENT`) VALUES
(1, 'matriceTest', 1, 1, '2017-03-23 14:53:23', '2017-03-23 14:53:23');

