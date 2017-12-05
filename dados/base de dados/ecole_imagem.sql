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


-- Copiando estrutura do banco de dados para navdr123_ecole_auto_imagem

USE `ecole378_auto_imagem`;

-- Copiando estrutura para tabela navdr123_ecole_auto_imagem.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela navdr123_ecole_auto_imagem.migrations: 2 rows
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela navdr123_ecole_auto_imagem.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela navdr123_ecole_auto_imagem.password_resets: 1 rows
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('giselycris@hotmail.com', '$2y$10$BAHSbMMlKweJuw2eIxNxWuSJGJdRtMAfKejiGKiKmaNq2GpVZVIBi', '2017-10-05 20:06:20');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela navdr123_ecole_auto_imagem.users
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela navdr123_ecole_auto_imagem.users: 13 rows
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(17, 'Daniella', 'daniellahl@hotmail.com', '$2y$10$DYDPju5w5t.nZ6bmQi3QCu6XNfSHvAYdoI70WBOJlsyyi/.GJnXle', '98CqrJVMtywXeOT81yLhCfGx1YtXSJqDM1z85C53aEjHDR3CbYm6kcYRzrTz', '2017-10-03 15:43:16', '2017-10-03 15:43:16'),
	(16, 'Raissa', 'racasitta@gmail.com', '$2y$10$M7m/LwBpIvao3rtvR6xqY.4Vrp158nbCFbmX73vUOTwhhOYo0kkSi', 'joqH5Te90mkiXdRkG4u5x18V4uhKxLiv1rAlqFUxxj8kEVD9U8VXsHHELrPq', '2017-10-03 15:41:07', '2017-10-03 15:41:07'),
	(15, 'Daniella', 'daniellahal@hotmail.com', '$2y$10$p2vk7ffb/FfiM1/9qMUDbu62FcIbd4OqI/Dsg3yhwxdDCDP.M.536', 'LL6IX4sKHyUYAtRuiJMJlGYeWKSDdwWNh1Q8k3vmIiqOvlZULb4LP1AJ1tSY', '2017-10-03 15:35:03', '2017-10-03 15:35:03'),
	(13, 'Maria', 'ximenescruz@bureaumodamercado.com.br', '$2y$10$nlkbxxPwTzfTJfK8/TjZROOh1yi2sE0e36b60LPVptajKvFI88Twe', 'DyOwr9kucJKAh78HI45xSjOzvuZkdL7dVftr0rO8qZhZiwEgewabaZr2D9mr', '2017-10-03 15:33:23', '2017-10-03 15:33:23'),
	(12, 'Silvia', 'silvia.neser@hotmail.com', '$2y$10$A.edtcap.iJlr3lAQCFA2.yxIjugtemLuj1OZWTcwGDPh.d74W5dK', 'Yw1iMxUPq0V9gPQCsSTiWTrBYdYWCzuMQ3Eu40SuNZEJF3Zm115adaArrjBZ', '2017-10-03 15:32:54', '2017-10-03 15:32:54'),
	(11, 'Andreza', 'andreza.steiger@hotmail.com', '$2y$10$eBssV8YDhl.0dPMJsCjrI.evCRYCWmhyUbMQ0Jn692tU1drmSUYvi', 'PNN1HmdRvKKpwSwp2x3i3WpUwV37KUIo195LiGXzv3z9H9FXIRb2gdCXv69M', '2017-10-03 15:31:58', '2017-10-03 15:31:58'),
	(10, 'Ana', 'contato@anaameliaracy.com.br', '$2y$10$BCrl3fxjJ1S0uno.qLg8PuFITKbK8reolumzd3exhAEmObV.VuvWG', 'ghrdnwSQxTkB04bWwt6SDzjeNKoGlYrPQpy5RT01AzJgwAF8Q42KK3QsFmKB', '2017-10-03 15:31:02', '2017-10-03 15:31:02'),
	(9, 'Beatriz', 'biafinazzi@terra.com.br', '$2y$10$lOKDGirEXfHVW0BQmskTNuzonnXJcsnStP27VVWRywpwXANv5n8xi', 'LBbskm30EccWwELsPdPrTyPWkVEJtZik4uoRiMxXQVI9LKbWsdlZr8cfnvQi', '2017-10-03 15:28:58', '2017-10-03 15:28:58'),
	(18, 'Eliza', 'elizaguerra.oliveira@hotmail.com', '$2y$10$L3sA7lvsk/Y4BXjcTE2iZ.BIHbcQlPuseZAoxP1mZD2r5oROhh2jS', 'Une7mW0r31AsJdnvkipeF1kC3p9t0PoEq3YMFWa43JweIOLBndwURqhW102L', '2017-10-03 21:22:34', '2017-10-03 21:22:34'),
	(19, 'Roberta', 'betap@hotmail.com', '$2y$10$uaXzN0MHXnZ5aDP.vRE0MejIAC4RV/cHnL1iOUWS9feud1cdfWcQu', NULL, '2017-10-03 22:20:40', '2017-10-03 22:20:40'),
	(20, 'aluno@aluno.com.br', 'aluno@aluno.com.br', '$2y$10$wSQoN1DMsbNOd3T5EiHX8O.qlVuJ2ucsPJ3iOlEnD4oJPBAs.HgrK', 'T24flDchzcAVYQ0E0NDRgZot1XPTDaBxRORKp0IDbuJJLv8q7wr2Ducl94Mz', '2017-10-03 22:23:10', '2017-10-03 22:23:10'),
	(21, 'Andreza', 'andreza.ecole@gmail.com', '$2y$10$DXflCNh9jMK.wXNFmKSR7uzN99U/tYg1AFffaaXVLjXT3OUbpXtRW', 'qefnakP73dcuDhQfTAcphRAJP2J3aThfp0S7j2MIsknlQvDPlpYqGtu9qknY', '2017-10-05 02:27:51', '2017-10-05 02:27:51'),
	(22, 'Gisely Figueiredo', 'giselycris@hotmail.com', '$2y$10$h5Z53lKtYvPdTe65HDgmCuWElwN.lVe98BFjNB.6GwPHMea16REsy', 'eP3OYeRS7W5ys2vhEGJNdNVZOjX0Q7WmtTKGypmbkEYo93FQKGzM6PedhjPz', '2017-10-05 12:53:19', '2017-10-05 12:53:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
