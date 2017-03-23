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
