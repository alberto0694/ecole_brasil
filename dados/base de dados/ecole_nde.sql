-- --------------------------------------------------------
-- Servidor:                     navdrone.com.br
-- Versão do servidor:           5.5.51-38.2 - Percona Server (GPL), Release 38.2, Revision 727
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para navdr123_ecole_nde
CREATE DATABASE IF NOT EXISTS `navdr123_ecole_nde` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `navdr123_ecole_nde`;

-- Copiando estrutura para tabela navdr123_ecole_nde.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela navdr123_ecole_nde.migrations: 2 rows
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela navdr123_ecole_nde.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela navdr123_ecole_nde.password_resets: 1 rows
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('mairaqlobo@hotmail.com', '$2y$10$9IwKTOBde5LjArl1G5xPIeCN4xtv70UNeG0EuMTsFc.Fm.l12xYUu', '2017-11-20 13:51:50');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela navdr123_ecole_nde.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela navdr123_ecole_nde.users: 19 rows
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Teste', 'social@it360digital.com.br', '$2y$10$dkqaYyWFD5KiPwxBHAvZ7eFBqIkvWj6Yq/3Xpkax7NrRKPCKTYG.C', '51WDBdQWJaZA6HNjHGC7kwxwdxcVyxywQivmhVeBFFMuPEFp8RWduWpN10lO', '2017-09-13 19:20:36', '2017-09-13 19:20:36'),
	(2, 'Aluno', 'aluno@aluno.com.br', '$2y$10$2eXMO0VV/rxBD5nBZOMEJuqAjo5fNoGUQSgGdFkR8Fsi9rjAtaBau', 'f56jGvNgy0JvKOUgT9qYVKLq5dmYqTQVplYc1JEzLOjPhXquRBj4ZLZme2SK', '2017-09-14 03:10:03', '2017-09-14 03:10:03'),
	(3, 'aluno1@aluno.com.br', 'aluno1@aluno.com.br', '$2y$10$JTWLXdSQc.nmG380RGZlFuMULzshew.QapVHXkwuoVBrJbg5ennNa', NULL, '2017-09-18 03:31:31', '2017-09-18 03:31:31'),
	(4, 'Patrícia Chiela', 'patricia@patriciachiela.com.br', '$2y$10$NHdDu3w9CzRPbnp49IlK3.Pq5t7NiFM9Kg/FYCJhtl5AkQzVp2Sa6', 'OvtkejgNH5lWmfQQHVN7pzKBdRi1Ydb21ZorGzs5Emzn9y7kvh2rBMrA1uVl', '2017-09-18 12:44:57', '2017-09-18 12:44:57'),
	(5, 'Aldrey Zago', 'aldrey.zago@azmcambio.com.br', '$2y$10$WtB1UJtpDF8R/gQzJHqajet89ix20qhpV7wdtVS1d0Fg5MeiOO8MK', 'gCMAap00ZFTs1et3E9qxTrD4LIrcojr42AMIL6YQFaLMcqrJUFr8oLMAyDyc', '2017-09-18 12:50:25', '2017-09-18 12:50:25'),
	(6, 'Alessander Bellaver', 'azm@azmcambio.com.br', '$2y$10$0jBDQV9gzpcLYuefD24lI.Ie.q.ZNaf.MsgtjkIcZRz9ycXvX8cF2', 'SRZHoylNljDyKWI2v1ZrTZJemAT4uIqkKfiP2rREHyvxFRI4uMZOkflbaniz', '2017-09-18 12:51:21', '2017-09-18 12:51:21'),
	(7, 'Danielle Bertagnolli', 'danielle@bertagnolli.adv.br', '$2y$10$zaFSF05e/MwVQHNSWggvauqwDnOvaMkLJx4JRE3p98mFjLHkZnbDC', 'rc0BF1US1eEeYLnytnHVgq9ERuwBU9ZjeFm0LoqtwRGyQ8Kb79A8Hwy2IezZ', '2017-09-18 12:51:51', '2017-09-18 12:51:51'),
	(8, 'Vandressa Pretto', 'vandressa@esrelooking.com', '$2y$10$3XqZ7yYUQ90bLhmW5UR4bu/czZe8Qp6mBNrH6M7vP8WQLiuWgyn8C', 'KmlqxMYb1jqOPJAksGBWeCbQOFOz18ZK2SNJ0h47Ir1vWdFHbj4fKwX07bXK', '2017-09-18 12:52:23', '2017-09-18 12:52:23'),
	(9, 'Manuela Teixeira', 'manuela.ts@outlook.com', '$2y$10$ltWyY19ceF4xSdZTtRVaKu/wyKLB5XUqryZGnYMAwsfdpoH38YGkW', 'cHYJOND7LNSPYtgPErzFgh0xvqZyZxK1HPJ6AlSm2dBf4FVQsTNhANEtItXi', '2017-09-18 13:57:58', '2017-09-18 13:57:58'),
	(10, 'Angela Pessotto', 'adm@unna.net.br', '$2y$10$3oqpnxtZAguYOSq.JvR.AOJ8QwmL1s1BB.HuxKWoQ1MIAGUAvN3AO', 'uAhux3MxiTsHISUVYMRNnP9qscUGbkTMjiue1e57c8r5K0xt6MptGhBZwT8E', '2017-09-18 13:59:10', '2017-09-18 13:59:10'),
	(11, 'Veridiana Davila', 'vmdavila1980@gmail.com', '$2y$10$cuNshwUzEwIIR0Q3UL/AceIVM7iaI1OAiP4MYCdYMFF6LOr3VjEF6', 'EzboN3KoiM0iZU0VrNXlvnrYiTDcF077KE2w5mIZras2r36srf7cC0siUq9p', '2017-09-18 14:00:17', '2017-09-18 14:00:17'),
	(12, 'Maíra Lobo', 'mairaqlobo@hotmail.com', '$2y$10$Tq6yOsnMgm5TqJ0Zun72oOH4aFGr1IBz/5Kg.CofduX5yJ8rbKiwW', 'hYskd53V9scdDdrI81m4V99nhn7SHxvqeJeJamvb2sC1bIJIfqf919U3KO0s', '2017-09-18 14:01:07', '2017-09-18 14:01:07'),
	(13, 'Renata Kapitanski', 'renatakapitanski@gmail.com', '$2y$10$.5rKJKI.RvWpr7v.sQmOSORygMKIce5i/TjpQmti1l6K.6oOso6XK', '3iqqVxjCHqKLcSaNdW2lYbvNhDJfRcChbFZyho7542vCaOXnhhz74d0BLLnD', '2017-09-18 14:07:40', '2017-09-18 14:07:40'),
	(14, 'Rita', 'ritageog@yahoo.com.br', '$2y$10$7BOYXAqtcQrQfCiCdp4Hmey..CLAqZ8bWid1v9M3WRjGDQK1yuI9O', 'eYD0gc40Sn47ECGuHTbl7dq4yjlskxeL2W8GmBRsVyOR18yY31Ek7kPvpMh1', '2017-09-18 14:10:58', '2017-09-18 14:10:58'),
	(15, 'Angela Quinto', 'angelaquintomoda@gmail.com', '$2y$10$W8bgQfy7Dr7WrLRIYXNfVe/Tx8l3hpJQ3lXXrLOgx2JX4pVsP48rm', 'Jgs7whjOidur19Z5c9xFNq2vchkauCGs8Rzz2MixYyWnnmQT071gsBM0jnpf', '2017-09-18 14:11:34', '2017-09-18 14:11:34'),
	(16, 'Luana Bossardi', 'luanabossardi@gmail.com', '$2y$10$ql0th1fVgOYhiM83aPpzkOANUlIgK.L5BpR2HgmOPAjxAK4u2oNi2', 'yh7lBL0Ylu4H4ZTxJqHIfHsvTnvXPJRYaQIrAeY9zMgV90P3ZvMgN32kmNIW', '2017-09-18 14:12:11', '2017-09-18 14:12:11'),
	(17, 'Catarina Guimaraes', 'essence.catarina@gmail.com', '$2y$10$UbAdAdlua/Wi5Y0b6TJEUOxedyzn9c78RXnb1000nJmUURokjFFZS', 'tZcaXZ73ZaHvlmeyxP6xTW7UUuW81S3PsXG1NDojDcQXuWgWbTAafLBG1FMy', '2017-09-18 17:33:40', '2017-09-18 17:33:40'),
	(18, 'Patricia Justino', 'pattyjustino@hotmail.com', '$2y$10$tBJ1trZu7c//u2ZLQA410.RN4kF7imClG3MM4FT5SwvZjhiu7.r86', 'IAKtyi4JbuvQ85uMT6bEsfShFolRTeQq98g77mxt11lG9k1V2XFwtgcZxGOh', '2017-09-18 17:34:42', '2017-09-18 17:34:42'),
	(19, 'Monica', 'toquedeclasse1@hotmail.com', '$2y$10$xorto9Ei6W0i/BrQhAauA.q.jzt/52ZKOrnooHx6RP5iHWef8nVuy', 'akYnUOhg5iDSpcnzG2kgpnSJCcMLcVDN6pP1RWmLIsRQwrDsy4K4jGCjzmSi', '2017-09-18 20:26:49', '2017-09-18 20:26:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
