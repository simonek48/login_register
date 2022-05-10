CREATE DATABASE IF NOT EXISTS `loginandregister` ;
USE `loginandregister`;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) DEFAULT NULL,
  `username` VARCHAR(11) DEFAULT NULL,
  `email` VARCHAR(11) DEFAULT NULL,
  `password` VARCHAR(11) DEFAULT NULL
);
