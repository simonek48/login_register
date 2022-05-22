CREATE DATABASE IF NOT EXISTS `loginandregister`;
USE `loginandregister`;

CREATE TABLE IF NOT EXISTS `profileimg` (
  `imagename` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
);



