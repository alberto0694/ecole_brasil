-- --------------------------------------------------------
-- Servidor:                     108.167.188.23
-- Versão do servidor:           5.5.51-38.2 - Percona Server (GPL), Release 38.2, Revision 727
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para ecole378_ecole
CREATE DATABASE IF NOT EXISTS `ecole378_ecole` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `ecole378_ecole`;

-- Copiando estrutura para tabela ecole378_ecole.administradors
CREATE TABLE IF NOT EXISTS `administradors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobrenome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `nascimento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `administradors_user_id_foreign` (`user_id`),
  CONSTRAINT `administradors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.administradors: ~2 rows (aproximadamente)
DELETE FROM `administradors`;
/*!40000 ALTER TABLE `administradors` DISABLE KEYS */;
INSERT INTO `administradors` (`id`, `nome`, `sobrenome`, `avatar`, `user_id`, `nascimento`, `created_at`, `updated_at`) VALUES
	(1, 'Administrador Ecole Brasil', 'Admin', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/administradors/ed00c1d330f07788b1d8c80345eaea30.jpeg', 1, '2018-01-11 15:55:44', NULL, '2018-03-06 15:55:44'),
	(2, 'Admin\r\n', 'Admin', '', 1, '2018-01-11 14:38:21', NULL, NULL);
/*!40000 ALTER TABLE `administradors` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.agendas
CREATE TABLE IF NOT EXISTS `agendas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carga_horaria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_parcelas` int(11) NOT NULL DEFAULT '0',
  `transacao` int(11) NOT NULL,
  `ministrantes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `curso_id` int(10) unsigned NOT NULL,
  `avatar` longtext COLLATE utf8mb4_unicode_ci,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `agendas_curso_id_foreign` (`curso_id`),
  CONSTRAINT `agendas_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.agendas: ~41 rows (aproximadamente)
DELETE FROM `agendas`;
/*!40000 ALTER TABLE `agendas` DISABLE KEYS */;
INSERT INTO `agendas` (`id`, `descricao`, `carga_horaria`, `datas`, `modelo`, `valor`, `max_parcelas`, `transacao`, `ministrantes`, `data_inicio`, `curso_id`, `avatar`, `cidade`, `created_at`, `updated_at`, `visible`) VALUES
	(2, 'MORFOPSICOLOGIA', '36h', '26/02 a 03/03', 'P', '5400.00', 8, 8, 'Lygya', '2018-02-26 01:40:23', 3, NULL, 'São Paulo', '2018-01-11 16:53:34', '2018-02-28 01:40:23', '1'),
	(3, 'Consultoria e Coaching de imagem', '36h', '05/03 a 10/03', 'P', '5400.00', 8, 8, 'Vandressa Pretto', '2018-02-05 01:42:25', 3, NULL, 'Porto Alegre', '2018-01-15 15:10:53', '2018-02-28 01:42:25', '1'),
	(5, 'Consultoria e Coaching de imagem', '6 dias, totalizando 48 horas.', '07/05 a 12/05', 'P', '5400.00', 8, 8, 'Vandressa Pretto', '2018-05-07 10:21:20', 3, NULL, 'Florianópolis', '2018-01-15 15:15:11', '2018-02-28 10:21:20', '1'),
	(8, 'psicologia da autoimagem', '34h', '6/03 a 24/04', 'D', '2500.00', 8, 8, NULL, '2018-03-06 01:44:55', 6, NULL, 'Online', '2018-02-22 16:00:17', '2018-02-28 01:44:55', '1'),
	(11, '-', '6 dias, totalizando 48 horas.', '19/03 a 24/03', 'P', '5400.00', 8, 8, 'Lygia Falcão', '2018-03-19 01:44:13', 3, NULL, 'Belo Horizonte', '2018-02-28 01:44:13', '2018-02-28 01:44:13', '1'),
	(12, '-', '6 dias, totalizando 48 horas.', '02/04 a 07/04', 'P', '5400.00', 8, 8, 'Lygia Falcão', '2018-04-02 01:46:15', 3, NULL, 'São Paulo', '2018-02-28 01:46:15', '2018-02-28 01:46:15', '1'),
	(13, '-', '30 horas', '09/04 a 21/05', 'D', '1.00', 0, 4, 'Patrícia Chiela, Kelly Possebon e Vandressa Pretto', '2018-04-09 20:42:02', 1, NULL, 'Online', '2018-02-28 01:47:55', '2018-03-22 20:42:02', '1'),
	(14, '-', '6 dias, totalizando 48 horas.', '23/04 a 28/04', 'P', '5400.00', 8, 8, 'Vandressa Pretto', '2018-04-23 01:49:11', 3, NULL, 'Brasília', '2018-02-28 01:49:11', '2018-02-28 01:49:11', '1'),
	(15, '-', '6 dias, totalizando 48 horas.', '23/04 a 28/04', 'P', '5400.00', 8, 8, NULL, '2018-04-23 01:50:00', 3, NULL, 'Curitiba', '2018-02-28 01:49:50', '2018-02-28 01:50:00', '1'),
	(16, '-', '6h', '20 a 21', 'P', '480.00', 0, 4, 'Vandressa Pretto e Patrícia Chiela', '2018-06-20 20:36:03', 7, NULL, 'Porto Alegre', '2018-02-28 01:56:23', '2018-03-22 20:36:03', '1'),
	(17, '-', '6 dias, totalizando 48 horas.', '04 a 09', 'P', '5400.00', 8, 8, 'Vandressa Pretto', '2018-06-04 14:13:57', 3, NULL, 'Porto Alegre', '2018-02-28 10:47:09', '2018-04-02 14:13:57', '1'),
	(18, '-', '6 dias, totalizando 48 horas.', '18 a 23', 'P', '5400.00', 8, 8, 'Lygia Falcão', '2018-06-18 14:13:14', 3, NULL, 'São Paulo', '2018-02-28 10:48:03', '2018-04-02 14:13:14', '1'),
	(19, 'Turma 2', '48h', '03/07 a 21/08', 'D', '2500.00', 8, 8, 'Eliza Guerra', '2018-07-03 10:49:47', 6, NULL, 'Online', '2018-02-28 10:49:23', '2018-02-28 10:49:47', '1'),
	(20, 'Março2018', '20h', '16 a 18', 'P', '3360.00', 4, 8, 'Alexandre Lima', '2018-03-16 14:58:53', 11, NULL, 'Porto Alegre', '2018-02-28 14:58:53', '2018-02-28 14:58:53', '1'),
	(21, 'Belo Horizonte', '6 dias, totalizando 48 horas.', '19/03 a 24/03', 'P', '5400.00', 8, 8, 'Lygia Falcão', '2018-03-19 20:42:25', 3, NULL, 'BH', '2018-03-05 15:40:40', '2018-03-21 20:42:25', '1'),
	(22, 'Março', '20h', '16, 17 e 18', 'P', '3360.00', 0, 4, 'Alexandre Lima', '2018-03-16 12:44:53', 11, NULL, 'Porto Alegre', '2018-03-07 12:44:53', '2018-03-07 12:44:53', '1'),
	(23, 'Março', '8h', '20 e 21', 'P', '0.00', 0, 4, 'Vandressa e Patricia', '2018-03-20 12:45:47', 7, NULL, 'porto alegre', '2018-03-07 12:45:47', '2018-03-07 12:45:47', '1'),
	(24, 'Março', '20h', '22 e 23', 'P', '0.00', 0, 4, 'Claudete', '2018-03-22 12:46:23', 9, NULL, 'porto alegre', '2018-03-07 12:46:23', '2018-03-07 12:46:23', '1'),
	(25, 'Março', '20h', '28/03', 'P', '1.00', 0, 4, 'Joana Burigo', '2018-03-28 11:02:13', 5, NULL, 'porto alegre', '2018-03-07 12:47:25', '2018-03-12 11:02:13', '1'),
	(26, 'Abril', '20h', '10 a 12', 'P', '0.00', 0, 4, 'Madeleine', '2018-04-10 20:33:28', 12, NULL, 'porto alegre', '2018-03-07 12:48:28', '2018-03-22 20:33:28', '1'),
	(27, 'Abril', '1', '23 a 25', 'P', '0.00', 0, 4, 'Audrey', '2018-04-23 16:13:26', 15, NULL, 'porto alegre', '2018-03-07 13:24:02', '2018-03-09 16:13:26', '1'),
	(28, 'Abril', '6h', '7', 'P', '0.00', 0, 4, 'Patricia Chiela', '2018-04-02 11:33:24', 14, NULL, 'porto alegre', '2018-03-07 13:25:17', '2018-04-02 14:33:24', '0'),
	(29, 'Março', '6h', '27 e 28', 'P', '0.00', 0, 4, 'Patricia Chiela', '2018-04-02 11:33:40', 10, NULL, 'porto alegre', '2018-03-07 13:26:14', '2018-04-02 14:33:40', '0'),
	(30, 'Maio', '6h', '2 e 3', 'P', '0.00', 0, 4, 'Patricia Chiela', '2018-04-02 11:34:12', 16, NULL, 'porto alegre', '2018-03-07 13:27:49', '2018-04-02 14:34:12', '0'),
	(31, 'Maio', '6h', '19', 'P', '0.00', 0, 4, 'Patricia Chiela', '2018-04-02 11:34:04', 10, NULL, 'porto alegre', '2018-03-07 13:29:22', '2018-04-02 14:34:04', '0'),
	(32, 'Maio', '20h', '28 a 30', 'P', '0.00', 0, 4, 'Leila', '2018-05-28 13:30:00', 4, NULL, 'porto alegre', '2018-03-07 13:30:00', '2018-03-07 13:30:00', '1'),
	(33, 'Junho', '6h', '6 e 7', 'P', '0.00', 0, 4, 'Patricia Chiela', '2018-04-02 11:33:54', 14, NULL, 'porto alegre', '2018-03-07 13:31:10', '2018-04-02 14:33:54', '0'),
	(34, '-', '48h', '14 a 19', 'P', '0.00', 0, 4, 'Lygia Falcão', '2018-05-14 14:12:38', 3, NULL, 'Rio de Janeiro', '2018-03-22 20:45:47', '2018-04-02 14:12:38', '1'),
	(35, 'Novo', '34h', '8/05 a 26/06', 'D', '0.00', 0, 4, 'Eliza Guerra', '2018-05-08 20:47:08', 19, NULL, 'Online', '2018-03-22 20:47:08', '2018-03-22 20:47:08', '1'),
	(36, '-', '9h', '18 e 19', 'P', '0.00', 4, 8, '-', '2018-05-18 16:44:37', 17, NULL, 'Porto Alegre', '2018-03-22 20:48:57', '2018-04-04 16:44:37', '1'),
	(37, 'Junho', '24h', '15 a 17', 'P', '3360.00', 0, 4, 'Alexandre Lima', '2018-03-27 12:34:28', 11, NULL, 'São Paulo', '2018-03-27 15:34:27', '2018-03-27 15:34:28', '1'),
	(38, 'Outubro', '24h', '25 a 27', 'P', '3360.00', 0, 4, 'Alexandre Lima', '2018-10-15 15:35:16', 11, NULL, 'Porto Alegre', '2018-03-27 15:35:16', '2018-03-27 15:35:16', '1'),
	(39, 'Maio', '24h', '28 a 30', 'P', '0.00', 6, 8, 'Leila', '2018-05-28 14:20:52', 4, NULL, 'Porto Alegre', '2018-04-02 14:20:52', '2018-04-02 14:20:52', '1'),
	(40, 'Agosto', '42h', '13 a 18', 'P', '0.00', 6, 8, 'Alessandra e Jessica Bueno', '2018-08-13 14:37:34', 2, NULL, 'Porto Alegre', '2018-04-02 14:37:34', '2018-04-02 14:37:34', '1'),
	(41, 'Agosto', '42h', '20 a 25', 'P', '0.00', 6, 8, 'Jessica Bueno e Alessandra Bueno', '2018-08-20 14:38:29', 2, NULL, 'São Paulo', '2018-04-02 14:38:29', '2018-04-02 14:38:29', '1'),
	(42, '-', '48h', '30/07 a 4/08', 'P', '5400.00', 6, 8, 'Vandressa Pretto', '2018-07-30 16:08:11', 3, NULL, 'Passo Fundo', '2018-04-03 16:08:11', '2018-04-03 16:08:11', '1'),
	(43, 'Outubro', '48h', '1 a 6', 'P', '5400.00', 6, 8, 'Lygia Falcão', '2018-10-01 16:09:25', 3, NULL, 'Belo Horizonte', '2018-04-03 16:09:25', '2018-04-03 16:09:25', '1'),
	(44, 'Setembro', '48h', '17 a 22', 'P', '5400.00', 6, 8, 'Lygia Falcão', '2018-09-17 16:12:08', 3, NULL, 'Vitória', '2018-04-03 16:12:08', '2018-04-03 16:12:08', '1'),
	(45, 'Outubro', '48h', '22 a 27', 'P', '5400.00', 6, 8, 'Marcela', '2018-10-22 16:13:38', 3, NULL, 'Campo Grande', '2018-04-03 16:13:38', '2018-04-03 16:13:38', '1'),
	(46, 'Novembro', '48h', '19 a 24', 'P', '5400.00', 6, 8, 'Marcela', '2018-11-19 16:14:38', 3, NULL, 'Cuiabá', '2018-04-03 16:14:38', '2018-04-03 16:14:38', '1'),
	(47, 'Dezembro', '48h', '10 a 15', 'P', '5400.00', 0, 4, 'Marcela', '2018-12-10 16:17:02', 3, NULL, 'Fortaleza', '2018-04-03 16:17:02', '2018-04-03 16:17:02', '1');
/*!40000 ALTER TABLE `agendas` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.alunos
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `sobrenome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nascimento` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` longtext COLLATE utf8mb4_unicode_ci,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci,
  `profissao` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `alunos_user_id_foreign` (`user_id`),
  CONSTRAINT `alunos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.alunos: ~26 rows (aproximadamente)
DELETE FROM `alunos`;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` (`id`, `nome`, `user_id`, `sobrenome`, `nascimento`, `avatar`, `descricao_html`, `profissao`, `created_at`, `updated_at`, `visible`) VALUES
	(1, 'Aluno', 3, 'Ecole', '1994-06-08 01:26:36', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/alunos/22c1ea298ad32592f42cab1ce8405d9f.png', '<p>Descrição Aluno</p>', 'Aluno', '2018-01-11 16:39:30', '2018-03-02 01:26:36', '1'),
	(10, 'roberta', 12, 'selistre', '1980-07-27 21:37:05', 'base64/alunos/cb454b16fbcd5e5eceb74b498c5eb0c6.jpeg', '<p>teste</p>', 'coordenadora', '2018-03-02 16:06:14', '2018-03-06 21:37:05', '1'),
	(11, 'Claudia', 13, 'Alvim', '1977-09-26 01:09:04', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/alunos/bf91908fd6c09092b0adaa3260b6a558.png', '<p>Turma 6/03 a24/04 Psicologia da Autoimagem</p>', 'psicóloga', '2018-03-04 14:49:08', '2018-03-07 01:09:04', '1'),
	(12, 'Denise', 14, 'Brasil', '1980-09-19 14:46:50', 'base64/alunos/fbb3faa2cc3ef5dcffeb8fceb00fbe6f.jpeg', '<p>Turma 6/03 a24/04 Psicologia da Autoimagem</p>', 'Consultora de Imagem', '2018-03-04 14:50:36', '2018-03-06 14:46:50', '1'),
	(13, 'Fernanda', 15, 'Zaffari', '1984-11-21 21:55:28', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/alunos/c9e47497577aab43309e59631ca7c932.png', '<p>Turma 6/03 a24/04 Psicologia da Autoimagem</p>', '-consultora de imagem', '2018-03-04 14:51:54', '2018-03-06 21:55:28', '1'),
	(14, 'Jacqueline', 17, 'Brossi', '1985-11-09 16:13:45', 'base64/alunos/f17774de5f6a8b83c1faafcaa3921b35.jpeg', '<p>Turma 6/03 a 24/4 Psicologia da Autoimagem</p>', 'Consultora de Imagem e Personal Stylist', '2018-03-04 14:55:24', '2018-03-06 16:13:45', '1'),
	(15, 'Flavia', 18, 'Almeida', NULL, 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/alunos/3165c6df8368b1a0cd56361406dc2f8d.png', '<p>Turma 6/03 a 24/4 Psicologia da Autoimagem</p>', '-administradora', '2018-03-04 14:58:44', '2018-03-06 14:39:21', '1'),
	(16, 'Bruna', 19, 'Lisboa', '1989-05-09 13:08:15', 'base64/alunos/346681d221a8c146d1caaec2c5c507a0.jpeg', '<p><img alt="heart" src="http://br356.teste.website/~ecole378/ecolebrasil.com/public/js/ckeditor/plugins/smiley/images/heart.png" style="height:23px; width:23px" title="heart" /></p>', 'Psicóloga e Consultora de Imagem', '2018-03-04 15:02:29', '2018-03-06 13:08:15', '1'),
	(17, 'Suporte Técnico', 10, '-', '2018-03-05 21:05:04', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/alunos/e4f837da3af9322094d6af40648a37a7.png', '<p>alberto.pimentel.94@gmail.com</p>', '-', '2018-03-04 15:04:01', '2018-03-06 21:05:04', '1'),
	(18, 'Marcia', 20, 'Paron', '1973-07-13 15:40:37', 'http://ecolebrasil.com/base64/alunos/b90779ebb9a7fc83147e0fecafd32131.jpeg', '<p>Psicologia da Autoimagem 6/03 a 24/04</p>', 'Gerente de Negócios', '2018-03-05 18:27:26', '2018-03-27 15:40:37', '1'),
	(19, 'Jaqueline Almeida', 16, 'Almeida', '2018-03-05 11:04:03', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/alunos/b2ba7c5eca3b93f14571a105d252be0e.png', '<p>-</p>', '-', '2018-03-05 18:53:41', '2018-03-06 11:04:03', '1'),
	(20, 'Priscila', 21, 'Carrano', '1981-03-27 14:06:22', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/alunos/2a9d5dc375fe3a61edf70174e0d4b240.png', '<p>Psicologia da Autoimagem de 6/03 a 24/04</p>', '-', '2018-03-06 12:40:25', '2018-03-06 14:06:22', '1'),
	(21, 'Michelle', 22, 'Carva', '2018-03-06 12:41:40', 'base64/alunos/b42cc69ebff7c13e7d61f114f809f5d3.png', '<p>Psicologia da Autoimagem de 6/03 a 24/04</p>', '-', '2018-03-06 12:41:40', '2018-03-06 12:41:40', '1'),
	(22, 'Cristiany', 23, 'Zart', '1990-02-06 19:24:47', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/alunos/76b7772fb8a453c18e95f85d6895a50d.jpeg', '<p>Psicologia da Autoimagem de 6/03 a 24/04</p>', '-psicóloga', '2018-03-06 12:43:04', '2018-03-07 19:24:47', '1'),
	(23, 'Luana', 24, 'Bossardi', '2018-03-06 22:41:31', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/alunos/cc3ebe5cbd1050890642064e34636bb9.png', '<p>Psicologia da Autoimagem 6/03 a 24/04</p>', '-', '2018-03-06 12:50:25', '2018-03-06 22:41:31', '1'),
	(24, 'Patricia', 25, 'Cuisse', '1972-11-29 17:18:56', 'base64/alunos/d37243f830c5a16e5552cb3d7e278b4f.jpeg', '<p>Psicologia da Autoimagem 6/03 a 24/04</p>', 'Designer', '2018-03-06 14:08:34', '2018-04-02 17:18:56', '1'),
	(25, 'Marlise', 26, '-', '2018-03-06 14:28:39', 'base64/alunos/4ff104b8e7d9903584766343265c366f.png', '<p>Psicologia da Autoimagem 6/03 a 24/04</p>', '-', '2018-03-06 14:28:39', '2018-03-06 14:28:39', '1'),
	(26, 'Deborah', 27, 'Zandonna', '1990-08-15 16:38:02', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/alunos/ea6f536a82d967f1957e9582a4366071.png', '<p>Psicologia</p>', 'Blogueira', '2018-03-06 16:32:24', '2018-03-06 16:38:02', '1'),
	(27, 'Fernanda', 28, 'Mendonça', '1977-01-05 22:01:34', 'base64/alunos/7d726a332a7cdac6bf979a574b76074f.jpeg', '<p>Psicologia da Autoimagem</p>', 'Coach e consultora', '2018-03-06 18:02:55', '2018-03-06 22:01:34', '1'),
	(28, 'Daniela', 29, 'Soares', '1979-09-08 12:41:23', 'base64/alunos/8446cc9cf9293e086bf56b8de5fa33df.png', '<p>Psicologia da Autoimagem&nbsp;</p>', '-', '2018-03-13 12:41:23', '2018-03-13 12:41:23', '1'),
	(29, 'Estefanio', 30, '-', NULL, 'base64/alunos/b77aee9af27bbdb685451d431810213c.png', '<p>-</p>', '-', '2018-03-13 15:23:14', '2018-03-13 15:23:14', '1'),
	(30, 'Caroline', 31, 'Amaral', NULL, 'base64/alunos/b884727a54ce405eab34e4aa858bc12b.png', '<p>-</p>', '-', '2018-03-13 15:24:16', '2018-03-13 15:24:16', '1'),
	(31, 'Aluno', 32, 'Consultor', '2018-03-29 16:34:31', 'http://www.ecolebrasil.com/base64/alunos/b0d4cf1991ee0ccea83552e1ba5646b5.png', '<p>-</p>', 'Consultor', '2018-03-13 15:44:15', '2018-03-29 19:34:31', '1'),
	(32, 'Ana Paula', 33, 'Santos', '1985-12-06 20:04:29', 'base64/alunos/5a7589d0ffdb8b65a15993cc81d0c426.jpeg', '<p>Psicologia da Autoimagem</p>', '-', '2018-03-14 18:06:36', '2018-03-14 20:04:29', '1'),
	(33, 'Aline', 34, 'Rabelo', '2018-03-19 17:51:55', 'base64/alunos/0972f5f20169776b354463e1dfb2568e.jpeg', '<p>Psicologia da Autoimagem</p>', '-', '2018-03-19 13:53:51', '2018-03-20 17:51:55', '1'),
	(34, 'Roberta', 12, 'Selistre', '1980-07-27 20:40:34', 'base64/alunos/48b5631f9d526b02fb6deb294c0d710e.jpeg', '<p>NE</p>', '-', '2018-03-27 20:40:34', '2018-03-27 20:40:34', '1');
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.aluno_agendas
CREATE TABLE IF NOT EXISTS `aluno_agendas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `aluno_id` int(10) unsigned NOT NULL,
  `agenda_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aluno_agendas_aluno_id_foreign` (`aluno_id`),
  KEY `aluno_agendas_agenda_id_foreign` (`agenda_id`),
  CONSTRAINT `aluno_agendas_agenda_id_foreign` FOREIGN KEY (`agenda_id`) REFERENCES `agendas` (`id`),
  CONSTRAINT `aluno_agendas_aluno_id_foreign` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.aluno_agendas: ~28 rows (aproximadamente)
DELETE FROM `aluno_agendas`;
/*!40000 ALTER TABLE `aluno_agendas` DISABLE KEYS */;
INSERT INTO `aluno_agendas` (`id`, `created_at`, `updated_at`, `aluno_id`, `agenda_id`) VALUES
	(25, NULL, NULL, 1, 19),
	(26, NULL, NULL, 1, 8),
	(41, NULL, NULL, 11, 8),
	(42, NULL, NULL, 12, 8),
	(43, NULL, NULL, 13, 8),
	(44, NULL, NULL, 14, 8),
	(46, NULL, NULL, 16, 8),
	(48, NULL, NULL, 19, 8),
	(50, NULL, NULL, 21, 8),
	(54, NULL, NULL, 15, 8),
	(55, NULL, NULL, 20, 8),
	(56, NULL, NULL, 24, 8),
	(57, NULL, NULL, 25, 8),
	(58, NULL, NULL, 10, 8),
	(59, NULL, NULL, 26, 8),
	(60, NULL, NULL, 27, 8),
	(61, NULL, NULL, 17, 8),
	(64, NULL, NULL, 22, 8),
	(66, NULL, NULL, 23, 8),
	(67, NULL, NULL, 28, 8),
	(68, NULL, NULL, 29, 2),
	(69, NULL, NULL, 30, 18),
	(71, NULL, NULL, 32, 8),
	(72, NULL, NULL, 33, 8),
	(73, NULL, NULL, 18, 8),
	(74, NULL, NULL, 34, 13),
	(75, NULL, NULL, 31, 14);
/*!40000 ALTER TABLE `aluno_agendas` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.aluno_restritos
CREATE TABLE IF NOT EXISTS `aluno_restritos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.aluno_restritos: ~0 rows (aproximadamente)
DELETE FROM `aluno_restritos`;
/*!40000 ALTER TABLE `aluno_restritos` DISABLE KEYS */;
/*!40000 ALTER TABLE `aluno_restritos` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.aulas
CREATE TABLE IF NOT EXISTS `aulas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `modulo_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `aulas_modulo_id_foreign` (`modulo_id`),
  CONSTRAINT `aulas_modulo_id_foreign` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.aulas: ~8 rows (aproximadamente)
DELETE FROM `aulas`;
/*!40000 ALTER TABLE `aulas` DISABLE KEYS */;
INSERT INTO `aulas` (`id`, `titulo`, `url_video`, `descricao_html`, `modulo_id`, `created_at`, `updated_at`, `visible`) VALUES
	(4, 'Aula 1', 'https://player.vimeo.com/video/210973472', '<p>Aula 1 Psicologia da autoimagem</p>', 6, '2018-02-28 10:15:58', '2018-03-04 17:13:10', '1'),
	(5, 'Aula 2', 'https://player.vimeo.com/video/211048055', '<p>-</p>', 7, '2018-02-28 10:27:25', '2018-02-28 10:27:25', '1'),
	(6, 'Aula 3', 'https://player.vimeo.com/video/211048744', '<p>-</p>', 10, '2018-03-02 00:55:55', '2018-03-02 00:55:55', '1'),
	(7, 'Aula 4', 'https://player.vimeo.com/video/211038935', '<p>-</p>', 9, '2018-03-02 00:56:21', '2018-03-02 00:56:21', '1'),
	(8, 'Aula 5', 'https://player.vimeo.com/video/211040340', '<p>-</p>', 11, '2018-03-02 01:21:16', '2018-03-02 01:21:16', '1'),
	(9, 'Aula 6', 'https://player.vimeo.com/video/211042297', '<p>-</p>', 12, '2018-03-02 09:58:54', '2018-03-02 09:58:54', '1'),
	(10, 'Aula 7', 'https://player.vimeo.com/video/211044484', '<p>-</p>', 13, '2018-03-02 10:16:00', '2018-03-02 10:16:00', '1'),
	(11, 'Aula 8', 'https://player.vimeo.com/video/211046714', '<p>-</p>', 14, '2018-03-02 10:16:28', '2018-03-02 10:16:28', '1');
/*!40000 ALTER TABLE `aulas` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.aula_comentarios
CREATE TABLE IF NOT EXISTS `aula_comentarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aula_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `comentario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aula_comentarios_aula_id_foreign` (`aula_id`),
  KEY `aula_comentarios_user_id_foreign` (`user_id`),
  CONSTRAINT `aula_comentarios_aula_id_foreign` FOREIGN KEY (`aula_id`) REFERENCES `aulas` (`id`),
  CONSTRAINT `aula_comentarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.aula_comentarios: ~3 rows (aproximadamente)
DELETE FROM `aula_comentarios`;
/*!40000 ALTER TABLE `aula_comentarios` DISABLE KEYS */;
INSERT INTO `aula_comentarios` (`id`, `aula_id`, `user_id`, `comentario`, `created_at`, `updated_at`) VALUES
	(1, 4, 20, 'qual o nome do pioneiro da psicologia da autoimagem e da psicóloga Teresa?', '2018-03-06 20:04:41', '2018-03-06 20:04:41'),
	(2, 4, 27, 'Acho que o nome dele é Prescott Lecky', '2018-03-06 22:25:46', '2018-03-06 22:25:46'),
	(3, 4, 25, 'esse exercício proposto parece fácil, mas é bem difícil tentar se definir', '2018-03-06 22:27:49', '2018-03-06 22:27:49');
/*!40000 ALTER TABLE `aula_comentarios` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `midia` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ativo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.banners: ~1 rows (aproximadamente)
DELETE FROM `banners`;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `titulo`, `midia`, `link_url`, `ativo`, `created_at`, `updated_at`, `visible`) VALUES
	(1, 'Banner', 'base64/banners/d9bec48a71c769e9a1e840095b05efa6.webm', NULL, 1, '2018-01-11 17:17:08', '2018-01-11 17:46:28', '1');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.blogs: ~1 rows (aproximadamente)
DELETE FROM `blogs`;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `titulo`, `descricao`, `descricao_html`, `created_at`, `updated_at`) VALUES
	(1, 'CONSULTORIA DE IMAGEM, PERSONALSTYLIST E O MERCADO DE TRABALHO', 'Quase todo mundo, na hora de escolher a profissão, lá no auge dos seus 16, 17 anos, teve  aquela motivação intrínseca de “ mudar o mundo”, e “ ajudar as pessoas” através do seu trabalho, né? Eu escolhi mudar o mundo ajudando as pessoas a elevar a sua autoestima e potencializar o autoconhecimento. Por isso digo e repito: a Consultoria de Imagem é uma das melhores profissões do mundo!', '<p>Quase todo mundo, na hora de escolher a profissão, lá no auge dos seus 16, 17 anos, teve&nbsp; aquela motivação intrínseca de “ mudar o mundo”, e “ ajudar as pessoas” através do seu trabalho, né? Eu escolhi mudar o mundo ajudando as pessoas a elevar a sua autoestima e potencializar o autoconhecimento. Por isso digo e repito: a&nbsp;<em>Consultoria de Imagem</em>&nbsp;é uma das melhores profissões do mundo!</p>\r\n\r\n<p><img alt="" src="http://ecolebrasil.com/upload_post/blog3.jpg" style="height:209px; width:312px" />E não só isso: nessa profissão, conhecemos muitas pessoas e histórias de vida, desenvolvemos nossa criatividade, não temos rotina, distribuímos felicidades e soluções. Lindo né? ´</p>\r\n\r\n<p>Mas, diferente do que muitas pessoas pensam, essa profissão exige muito estudo, capacitação, e desenvolvimento de várias habilidades. Não tem absolutamente nada a ver com simplesmente “ajudar os outros a se vestir”, há muitas técnicas e metodologias aliadas ao processo de atendimento. É um trabalho sério e por isso é importante o profissional ter conhecimento dessas técnicas para se diferenciar no mercado. Senão acaba virando algo do tipo “ajudar a melhor amiga”.</p>\r\n\r\n<p>Para começar, existem diferenças entre PersonalStylist e Consultoria de Imagem.<img alt="" src="http://ecolebrasil.com/upload_post/blog1.jpg" style="height:204px; width:304px" /></p>\r\n\r\n<p>PersonalStylis é o profissional com ação mais pontual, breve, refere-se a uma situação específica. Pode ser: uma vestimenta para uma festa, um look para reunião importante, ou algo similar. Nesse caso, priorizamos mais o “externo”, consideramosa ocasião, o dresscode necessário, o tipo físico, o local, etc. Já a Consultoria de Imagem olha mais para o lado “interno”.</p>\r\n\r\n<p>No processo completo de Consultoria de Imagem aprofundamos o nosso olhar ao cliente, levamos a ele a reflexão sobre quem é, o que quer e quais seus objetivos com o trabalho.&nbsp; Através de técnicas específicas, consideramos o seu estilo, morfologia e complexos, cores que lhe favorecem, seu objetivo de imagem, além das informações do “externo”, assim como no PersonalStylist. Nesse caso, passamos mais tempo envolvidos no processo, descobrimos e mergulhamos muito mais a fundo.</p>\r\n\r\n<p><img alt="" src="http://ecolebrasil.com/upload_post/blog2.jpg" style="float:left; height:282px; margin:4px 8px; width:282px" />E o mercado de trabalho? De um modo geral, aqui no Brasil, é crescente essa profissão e bastante valorizada. As pessoas estão entendendo cada vez mais o quanto podem se beneficiar desse serviço e o boca a boca é algo que funciona muito bem. Profissionais sérios tem sido reconhecidos, e ainda, com criatividade, visão e iniciativa é possível expandir para outros formatos de serviços, como por exemplo, atuações em lojas, palestras, empresas, etc.</p>\r\n\r\n<p>Eu, como diretora e professora da Ecole Supérieure de Relooking, que é a melhor escola francesa de Consultoria de Imagem e Visagismo, tenho o privilégio de atuar com conteúdo, metodologia e técnicas sem precisar ir pra Paris. As alunas, ao final do curso, recebem certificação internacional, tem aulas práticas e teóricas e saem prontas e qualificadas para atuarem como “Consultoras de Imagem” no mercado.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Por isso eu digo e repito: não é tão simples, mas ao mesmo tempo é realmente “empoderador” o processo de Consultoria de Imagem, tanto para a consultora quanto para a cliente.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Vandressa Pretto</p>', '2018-02-04 20:14:35', '2018-02-04 20:14:35');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.chats
CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.chats: ~0 rows (aproximadamente)
DELETE FROM `chats`;
/*!40000 ALTER TABLE `chats` DISABLE KEYS */;
/*!40000 ALTER TABLE `chats` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.consultoras
CREATE TABLE IF NOT EXISTS `consultoras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.consultoras: ~17 rows (aproximadamente)
DELETE FROM `consultoras`;
/*!40000 ALTER TABLE `consultoras` DISABLE KEYS */;
INSERT INTO `consultoras` (`id`, `nome`, `cidade`, `site`, `avatar`, `created_at`, `updated_at`, `visible`) VALUES
	(1, 'Juliana Queiroz', 'São Paulo', 'http://julianaqueiroz.com.br/blog/', 'base64/consultoras/265a7718a6488a68e9837243370a30e3.jpeg', '2018-01-11 17:30:32', '2018-01-11 17:30:32', '1'),
	(2, 'Sabrina Tuma', 'Bélem / PA', 'https://www.instagram.com/sabrina_tuma/', 'base64/consultoras/01ba7cc20641f547c35b7ca84c2f55e2.jpeg', '2018-01-11 17:31:44', '2018-01-11 17:31:44', '1'),
	(3, 'Sabrina Silvian', 'Brasília/ DF', 'http://sabrinasilvian.com.br/', 'base64/consultoras/2ba3cd97f845e4164cc6803c18e48fdb.jpeg', '2018-02-28 10:41:25', '2018-02-28 10:41:25', '1'),
	(4, 'Silvia Soares', 'Capivari/SP', 'https://www.facebook.com/Silvia-Soares-Imagem-e-Estilo-Pessoal-e-Corporativo-1251755428174535/?__mref=message_bubble', 'base64/consultoras/76db81da70e2dac3ae9418b6b7fdb00c.jpeg', '2018-02-28 10:41:52', '2018-02-28 10:41:52', '1'),
	(5, 'Marcela Fabrício de Souza Bellé', 'Campo Grande/MS', NULL, 'base64/consultoras/ab517d20b9a753ead1c06e1ea68c9de2.jpeg', '2018-02-28 10:43:26', '2018-02-28 10:43:26', '1'),
	(6, 'Carol Amaral', 'São Paulo', 'https://www.facebook.com/carol.amaral.37', 'base64/consultoras/2e1d0cb7a57b2484d3b07a3484dc9135.jpeg', '2018-02-28 10:43:40', '2018-02-28 10:44:17', '1'),
	(7, 'Laylah El Ishtar', 'Rio de Janeiro', 'http://www.laylah.com.br/', 'base64/consultoras/1c75e5f04ec793a3bf59f0b9f026d57b.jpeg', '2018-02-28 10:44:02', '2018-02-28 10:44:02', '1'),
	(8, 'Renata Maria', 'Porto Alegre', 'https://www.relookimagem.com/', 'base64/consultoras/c76a47dd5a847f5a8d81032a1ad1bba2.jpeg', '2018-02-28 10:44:36', '2018-02-28 10:44:51', '1'),
	(9, 'Tamara Ramos', 'Santos/SP', 'https://www.tamararamosfeijo.com/', 'base64/consultoras/e186061ed27f40e71c628d70ee985c24.png', '2018-03-25 23:18:07', '2018-03-25 23:18:07', '1'),
	(10, 'Michelle Malaggi', 'Cuiabá e Médio norte matogrossense', 'https://www.instagram.com/mimalaggisaito/', 'base64/consultoras/082145175e026dea818c7891a1395e9b.jpeg', '2018-03-25 23:20:11', '2018-03-25 23:20:11', '1'),
	(11, 'Nathalia Bernardes', 'Porto Alegre/RS', 'https://www.facebook.com/nathaliabernardesconsultoria', 'base64/consultoras/1907359593ccb2802fe6b718252ecd06.jpeg', '2018-03-25 23:22:38', '2018-03-25 23:22:38', '1'),
	(12, 'Anna Macedo', 'Mogi Mirim, Campinas e São Paulo', 'https://www.instagram.com/imagemestiloepoder/', 'base64/consultoras/318d09aad9d37b097c9294a3f3367f79.jpeg', '2018-03-25 23:24:00', '2018-03-25 23:24:00', '1'),
	(13, 'Márcia Salem', 'São Paulo', 'https://instagram.com/p/Bf4gcv4hg1H/', 'base64/consultoras/63569c2c212975d4f122cfd92e401e60.png', '2018-03-27 19:11:53', '2018-03-27 19:11:53', '1'),
	(14, 'Ana Tolardo', 'Blumenau e Balneário Camboriú/SC', 'https://www.instagram.com/_at.style_/', 'base64/consultoras/1b6a601adb1111f749e80ee49e79a252.jpeg', '2018-03-27 19:15:03', '2018-03-27 19:15:03', '1'),
	(15, 'Guta Leonel', 'Itapema/SC', 'https://www.instagram.com/guta_leonel/', 'base64/consultoras/774596112743d653341df5d4c039d37e.jpeg', '2018-04-02 14:06:23', '2018-04-02 14:06:23', '1'),
	(16, 'Jaqueline Almeida Farias', 'João Pessoa, Paraíba', 'https://www.instagram.com/jackefariasoficial/', 'base64/consultoras/0bbf0da0d64c51e23583959600341840.jpeg', '2018-04-05 16:42:58', '2018-04-05 16:42:58', '1'),
	(17, 'Poliana Valadres', 'Belo Horizonte', '31 98771-6248', 'http://ecolebrasil.com/base64/consultoras/3edc1bcb28c7fd45023f5e5309b2ffaf.jpeg', '2018-04-06 13:42:40', '2018-04-06 13:43:43', '1');
/*!40000 ALTER TABLE `consultoras` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.contatos
CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contato` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade_curso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ecole` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensagem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.contatos: ~14 rows (aproximadamente)
DELETE FROM `contatos`;
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` (`id`, `contato`, `telefone`, `cidade`, `cidade_curso`, `ecole`, `mensagem`, `email`, `created_at`, `updated_at`) VALUES
	(11, 'Nathalia', '51992833563', 'Porto Alegre/RS', 'Porto Alegre', 'Indicação', 'Não vão ter aulas a noite? Esses horários são inviáveis pra quem trabalha.', 'nanahva@gmail.com', '2018-03-23 14:47:42', '2018-03-23 14:47:42'),
	(12, 'Jefferson  tozzo', '67992015901', 'Três lagoas ms', 'São Paulo ou algum lugar próximo  ou online', 'Através de uma colaboradora', 'Curso para trabalhar meu nome é minha imagem \r\nSão Paulo ou algum lugar próximo  ou online', 'Jeffersonrg3l@hotmail.com', '2018-03-25 16:16:25', '2018-03-25 16:16:25'),
	(20, 'Silvia Martins Moraes', '21981777369', 'Rio de janeiro', 'Rio de janeiro', 'Silvia Moraes', 'Boa noite . Gostaria de saber se o curso de coaching de imagem existe em módulo on-line e detalhes. Obrigada', 'silvia.adayme@gmail.com', '2018-03-26 21:49:21', '2018-03-26 21:49:21'),
	(21, 'Silvanya Brandão', '(99)984046345', 'São Mateus do Maranhão', 'São Mateus, São Luís ou Bacabal', 'Pelo YouTube, pesquisando sobre o assunto.', 'Gostaria de saber o valor do curso e se pretendem trazer o curso para o Maranhão. Me interessei pela escola,. após assistir um vídeo de Cínthia Ferreira, no YouTube.', 'silvanya_brandao@hotmail.com', '2018-04-03 22:22:35', '2018-04-03 22:22:35'),
	(22, 'Fabiane Severo', '5198252944', 'São Leopoldo', 'Porto Alegre', 'Internet', 'Gostaria de saber se tem este curso a noite ou aos sábados?', 'fabianesevero@hotmail.com', '2018-04-04 17:33:57', '2018-04-04 17:33:57'),
	(23, 'yaidith', '993941994', 'manaus', 'manaus', 'internet', 'cursos', 'yaidithmartinez08@gmail.com', '2018-04-05 01:41:58', '2018-04-05 01:41:58'),
	(24, 'maria aparecida da cruz', '077-98119-0118', 'vitoria da conquista', 'santos', 'aluna de vcs.', 'tem esse curso na Bahia ? aguardo obrigada', 'marycannd@hotmail.com', '2018-04-06 18:27:01', '2018-04-06 18:27:01'),
	(25, 'Leila Maria Carvalho Garcia', '32999291577', 'Juiz de Fora/MG', 'Juiz de Fora', 'Instagram', 'Gostaria de fazer cursos', 'leilamcg@hotmail.com', '2018-04-08 09:51:33', '2018-04-08 09:51:33');
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `formacao_id` int(10) unsigned NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background_img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `card` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `carga_horaria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ementa` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagina_inicial` int(11) NOT NULL,
  `ministrantes` longtext COLLATE utf8mb4_unicode_ci,
  `conteudo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `apresentacao` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `informacoes` longtext COLLATE utf8mb4_unicode_ci,
  `objetivos` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `cursos_formacao_id_foreign` (`formacao_id`),
  CONSTRAINT `cursos_formacao_id_foreign` FOREIGN KEY (`formacao_id`) REFERENCES `formacaos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.cursos: ~14 rows (aproximadamente)
DELETE FROM `cursos`;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` (`id`, `formacao_id`, `nome`, `link_video`, `background_img`, `card`, `carga_horaria`, `modelo`, `ementa`, `pagina_inicial`, `ministrantes`, `conteudo`, `apresentacao`, `informacoes`, `objetivos`, `material`, `created_at`, `updated_at`, `visible`) VALUES
	(1, 3, 'Negócios de Estilo', 'https://www.youtube.com/embed/HbD2i6WsJPc', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/df7e2eace99e5eeb9c5b361ab55f6758.png', 'base64/cursos/951eec9b8114f8f4e8d79818b53d96ae.png', '30h', 'À Distância', 'base64/cursos/13d5d5d9d3dcb2e4f81f548422122222.pdf', 1, NULL, '<h2>&nbsp;<span style="font-size:12px">MARKETING:</span></h2>\r\n\r\n<h2><span style="font-size:12px">•&nbsp;Formatação do negócio – mercado, consumidor e público.</span></h2>\r\n\r\n<h2><span style="font-size:12px">•&nbsp;Construção de marca.</span></h2>\r\n\r\n<h2><span style="font-size:12px">•&nbsp;Plano de Comunicação.</span></h2>\r\n\r\n<h2><span style="font-size:12px">FINANÇAS:</span></h2>\r\n\r\n<h2><span style="font-size:12px">•&nbsp;</span></h2>\r\n\r\n<h2 style="text-align:left"><span style="font-size:12px"><span style="font-family:Arial">•</span><span style="font-family:Helvetica">Preço x valor</span></span></h2>\r\n\r\n<h2 style="text-align:left"><span style="font-size:12px"><span style="font-family:Arial">•</span><span style="font-family:Helvetica">Custeio Básico (formação de preço</span></span></h2>\r\n\r\n<h2 style="text-align:left"><span style="font-size:12px"><span style="font-family:Helvetica">de <strong>venda para serviços</strong>)</span></span></h2>\r\n\r\n<h2 style="text-align:left"><span style="font-size:12px"><span style="font-family:Arial">•</span><span style="font-family:Helvetica">Ponto de equilíbrio</span></span></h2>\r\n\r\n<h2 style="text-align:left"><span style="font-size:12px"><span style="font-family:Arial">•</span><span style="font-family:Helvetica">Política de crédito inteligente – como</span></span></h2>\r\n\r\n<h2 style="text-align:left"><span style="font-size:12px"><span style="font-family:Helvetica">conceder prazos e descontos</span></span></h2>\r\n\r\n<h2 style="text-align:left"><span style="font-size:12px"><span style="font-family:Arial">•</span><span style="font-family:Helvetica">Separando a vida financeira pessoal</span></span></h2>\r\n\r\n<h2 style="text-align:left"><span style="font-size:12px"><span style="font-family:Helvetica">da empresarial (pessoa física x pessoa jurídica)</span></span></h2>\r\n\r\n<h2 style="text-align:left"><span style="font-size:12px"><span style="font-family:Arial">•</span><span style="font-family:Helvetica">Mei ou Micro empresa?</span></span>&nbsp;</h2>\r\n\r\n<p><span style="font-size:12px">NETWORK:</span></p>\r\n\r\n<p><span style="font-size:12px">•&nbsp; Como realizar networking.</span></p>\r\n\r\n<p><span style="font-size:12px">•&nbsp; Prospecção /captação de contatos.</span></p>\r\n\r\n<p><span style="font-size:12px">•&nbsp;Como manter a rede ativa com qualidade.</span></p>', '<p>Desenvolve a percepção do aluno sobre os fatores determinantes no processo de ser dono de um negócio, amplia a percepção sobre o potencial da sua empresa e prepara sua atuação comercial.</p>', '<p>Online</p>', '<p>O curso tem como proposta auxiliar de forma conceitual e prática no processo de&nbsp;<em>start</em>, desenvolvimento ou profissionalização de uma empresa com foco em três pilares: marketing, finanças e network.</p>', '<p>•&nbsp;Vídeo aulas;</p>\r\n\r\n<p>•&nbsp;Vídeo conferências;</p>\r\n\r\n<p>•&nbsp;Materiais complementares;</p>\r\n\r\n<p>•&nbsp;Atividades práticas.</p>', '2018-01-11 16:46:05', '2018-03-20 19:47:49', '1'),
	(2, 1, 'Morfopsicologia', 'https://www.youtube.com/embed/m7bmRdQBfNQ', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/5254432144fa9442936378164b911fa6.png', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/09de0ab6f22d9f561bae5ae22bb82885.png', '42h', 'Presencial', 'http://ecolebrasil.com/base64/cursos/316f8112b6c4579613bf149b8e51c730.pdf', 1, NULL, '<p>•&nbsp;O que é morfopsicologia e suas abordagens;<br />\r\n•&nbsp;O inato, o adquirido, a formação do Ser;<br />\r\n•&nbsp;A observação do rosto: a estrutura o formato e a forma;<br />\r\n•&nbsp;Os diferentes tipos de formatos e características;<br />\r\n•&nbsp;A Morfocomunicação;<br />\r\n•&nbsp;A Morfomaquiagem.</p>', '<p>A morfopsicologia é uma ferramenta de compreensão da personalidade das pessoas através das características do rosto. É uma ciência que estuda os traços, linhas, formas, cicatrizes, e detalhes do rosto, que traduzem a personalidade do indivíduo. Aborda sobre morfocomunicação (como se comunicar com cada tipo de personalidade) e morfomaquiagem (como maquiar de acordo com cada tipo de personalidade).</p>', '<p>Certificação Internacional</p>\r\n\r\n<p>Formação para atuar no mercado de trabalho</p>', '<table border="0" style="height:79px; width:654px">\r\n	<tbody>\r\n		<tr>\r\n			<td>Qualificar a atuação de profissionais das áreas da imagem, beleza, estética, psicologia e RH&nbsp;através de ferramentas de Morfopsicologia.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<p>•&nbsp;apostila de conteúdos.<br />\r\n•&nbsp;kit de maquiagem da MAC.</p>', '2018-01-11 16:50:28', '2018-04-02 14:35:30', '1'),
	(3, 1, 'Consultoria e Coaching de Imagem', 'https://www.youtube.com/embed/cTsPNDpAqPg', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/2d990165034fe234c88b38051175e423.png', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/459e8c7f19687ce303c97fcd7b0250ea.png', '48h', 'Presencial', 'base64/cursos/e84613d5c64dddf2e465708cd3d8d3dc.pdf', 1, NULL, '<p>•&nbsp;Processo de consultoria de imagem.</p>\r\n\r\n<p>•&nbsp;Coaching de imagem.</p>\r\n\r\n<p>•&nbsp;Técnicas de colorimetria.</p>\r\n\r\n<p>•&nbsp;Análise morfológica.</p>\r\n\r\n<p>•&nbsp;Objetivos e complexos.</p>\r\n\r\n<p>•&nbsp;Estilo do vestuário, tecidos e tendências.</p>', '<p>O Consultor de Imagem possui as ferramentas certas para traduzir a imagem que melhor representa a essência e personalidade de seus clientes. Leva em conta os objetivos, a rotina diária, o estilo, tipo de corpo, gostos e as cores que mais favorecem. Considerando que a imagem tem um grande impacto nos nossos resultados diários e na autoestima, o Consultor de Imagem é um profissional capaz de promover mudanças expressivas que refletem em vários segmentos da vida de seu cliente.&nbsp;</p>', '<p>Certificação Internacional&nbsp;</p>\r\n\r\n<p>A Formação capacita o profissional a atuar tanto como Consultor de Image como Coaching de Imagem e Personal Stylist</p>\r\n\r\n<p>A Formação oferece material completo para já começar a trabalhar - tecidos, cartela de cores, apostila, círculo cromático.</p>\r\n\r\n<p> </p>', '<p>O curso habilita o aluno para atuar como Consultor ou Coaching de Imagem,&nbsp;<br />\r\ncapacitando-o para auxiliar as pessoas na busca por uma imagem pessoal legítima.</p>', '<p>•&nbsp;Apostila de conteúdos;<br />\r\n•&nbsp;Caderno de exercicios;<br />\r\n•&nbsp;Círculo cromático;<br />\r\n•&nbsp;Jogo de tecidos;<br />\r\n•&nbsp;Cartelas de harmonia de cores;<br />\r\n•&nbsp;Cartelas de cores.</p>', '2018-01-12 17:40:41', '2018-03-27 14:48:43', '1'),
	(4, 2, 'Acessórios', '0', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/1c5359c4b20fee8963be9e9a65192e3d.png', 'http://ecolebrasil.com/base64/cursos/4e7e3e1ec2d9b229c68a5688cebd5d1e.png', '24h', 'Presencial', 'base64/cursos/edfb893ae6e3802e441c4573deb87e90.pdf', 1, NULL, '<p>Acessórios, joias e bijuterias, na identificação de estilo, morfologia, dress code para eventos e planejamento de looks.</p>', '<p>Sabendo que os acessórios são parte de uma fatia importante da moda, o curso com foco no uso das joias e bijuterias como acessórios de efeito na imagem pessoal oferece noções importantes para quem quer vesti-los melhor, para quem trabalha ou tem interesse em atuar na área da moda ou imagem e oferecer assim, um serviço específico ou integrado.</p>\r\n\r\n<p>Voltado para quem deseja aprender técnicas de imagem dentro de uma visão geral sobre o uso assertivo dos acessórios, joias e bijuterias, na identificação de estilo, morfologia, dress code para eventos e planejamento de looks.</p>', '<p>Certificação Internacional</p>', '<p>Capacitar o aluno para conseguir entender o universo dos acessórios: joias e bijuterias, de maneira aprofundada e de modo a oferecer soluções no atendimento de coaching de imagem ou áreas afins.</p>', '<p>Apostila teórica.</p>', '2018-01-12 18:05:09', '2018-04-04 20:01:50', '1'),
	(5, 3, 'Desmistificando Gênero', '0', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/8709807b0e5d70b8d1d55ebd3d2c3a55.png', 'base64/cursos/b0de4507b4a9cd0ae84c4f2cbc08074b.png', '21h', 'À Distância', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/9d7d07785de7726efa17ff58f654c626.pdf', 1, NULL, '<p>Conceitos teóricos sobre gênero, feminismo e teoria queer, considerações básicas para aplicação da teoria na prática, e explorar conflitos entre discursos ideológicos e preconceituosos.</p>', '<p>Muito tem se falado sobre gênero – mas do que se trata esse conceito? No senso comum a palavra “gênero” costuma ser usada para descrever o que entendemos, social e culturalmente, como feminino e masculino. Mas gênero também pode ser compreendido como uma ordem social, um marcador de identidade, e um ângulo de análise – que já engendrou um corpo teórico significativo.&nbsp;</p>\r\n\r\n<p> </p>\r\n\r\n<p>Gênero é um campo de estudos interdisciplinares, mas para aquém e além da teoria existe a vivência. Como esses novos discursos afetam nosso dia-a-dia, e como podemos estar preparados para os avanços que o debate acerca de igualdade traz? Compreender estas questões é a proposta deste curso.</p>', '<p>Certificação Internacional</p>\r\n\r\n<p>Primeiro curso sobre Gêneros</p>\r\n\r\n<p>Curso online</p>', '<p>O curso vai apresentar conceitos teóricos sobre gênero, feminismo e teoria queer, considerações básicas para aplicação da teoria na prática*, e explorar conflitos entre discursos ideológicos e preconceituosos. Ao final, alunas terão treinado seus olhares para perceber novos ângulos de observação de fenômenos sociais, bem como desenvolvido capacidades críticas para debater e (des)fazer padrões hegemônicos de comportamento. Debateremos como o discurso de gênero está influenciando o agora, faremos uma introdução básica ao feminismo, e desenvolveremos estratégias a respeito de como podemos nos comunicar sem oprimir e valorizando a inclusão.</p>\r\n\r\n<p> </p>\r\n\r\n<p>* objetificação, representação/representatividade, “mansplaining, bropriating, manterrupting, gaslighting”, falsa simetria e sororidade</p>', '<p>Vídeo aulas;</p>\r\n\r\n<p>Vídeo conferências;</p>\r\n\r\n<p>Materiais complementares;</p>\r\n\r\n<p>Atividades práticas.</p>', '2018-01-12 18:16:04', '2018-03-23 18:27:47', '1'),
	(6, 3, 'Psicologia da Autoimagem', 'https://www.youtube.com/embed/RHRkDAPvvFs', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/5b04987a4a2031f7eaf6ad1a7ba7aa29.png', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/80df334df7864d4a17b5e3b7a83b538f.png', '34h', 'À Distância', 'http://ecolebrasil.com/base64/cursos/8c017600d074d694e40012e6cd4cc9a6.pdf', 1, NULL, '<p>1) O que é Psicologia da Autoimagem? Exercício de visualização criativa.</p>\r\n\r\n<p>2) O desenvolvimento da autoimagem. Imagem Corporal, Autoimagem e Autoestima. Eu Real x Eu Ideal.</p>\r\n\r\n<p>3) O Estágio do espelho. Relação com a imagem.</p>\r\n\r\n<p>4) Corpo e Bem Estar. Psicossomática; Pesos e Medidas.</p>\r\n\r\n<p>5) Estágio Estético. A relação com as roupas, objetos e marcas; O sujeito estético; A questão do desapego.</p>\r\n\r\n<p>6) Sentir-se bem na própria pele. Liberdade de ser quem tu és, autenticidade e empatia.</p>\r\n\r\n<p>7) A questão da felicidade. Psicologia Positiva.&nbsp;Construir felicidade através da autoimagem.</p>\r\n\r\n<p>8) Projeto Original de Imagem. Metas e Objetivos. Realizar escolhas, traçar metas e objetivos.</p>', '<p>A relação com a autoimagem hoje pode ser grande fonte de insatisfação. O mesmo ocorre com o corpo quando para atingir padrões estéticos e estereótipos abrimos mão de nossa identidade. Fazemos parte da cultura da imagem, porém os índices de obesidade, transtornos alimentares e dismórfico se tornam cada vez mais recorrentes. Quanto menos conectados com nossos desejos, mais estaremos à merce do que é oferecido socialmente, em um processo de adoecimento e dependência.</p>', '<p>Certificação Internacional</p>\r\n\r\n<p>Curso online</p>', '<p>Utilizar conhecimentos da psicologia para os atendimentos de profissionais de imagem, estética e saúde, levando o cliente a escolhas reais no desenvolvimento de seu projeto de imagem, através do despertar da autenticidade. Utilizar ferramentas de investigação na relação do cliente com seu corpo, imagem e aparência. Desenvolver soluções criativas para questões relacionadas ao corpo e à imagem.&nbsp;</p>', '<p>Vídeo aulas;&nbsp;</p>\r\n\r\n<p>Vídeoconferências toda terça-feira de 1h de duração;&nbsp;</p>\r\n\r\n<p>Materiais complementares.</p>', '2018-01-12 18:16:24', '2018-04-06 16:59:19', '1'),
	(7, 2, 'Budget', 'https://www.youtube.com/embed/kl6QfPa0wCM', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/0271af5b57a2e91a90141ca75b63eb32.png', 'http://ecolebrasil.com/base64/cursos/061e64151d4f1acb0d042e4005aacf8d.png', '6h', 'Presencial', 'base64/cursos/1388b4723e78e3992c18201e5ca5c391.pdf', 1, NULL, '<p>1˚ parte: Atitude empreendedora;</p>\r\n\r\n<p>2˚ parte: Onde estão as oportunidades?;</p>\r\n\r\n<p>3˚ parte: Comunicação com pouca ou nenhuma verba;</p>\r\n\r\n<p>4˚ parte: Você como cartão de visitas.</p>', '<p>O sucesso de um negócio é muito mais uma questão de ATITUDE do que de investimentos.<br />\r\nNesse curso, vamos ensinar sobre postura e comportamento empreendedor para quem quer desenvolver ou abrir um negócio com pouca grana.<br />\r\nVamos expandir as suas ideias e fazer você sair da zona de conforto, mostrando como pensar além do dinheiro para fazer um negócio acontecer.<br />\r\nAs duas professoras, experts em empreendedorismo, vão te mostrar que o comportamento empreendedor é sobre ter as ideias certas e saber usá-las da forma certa.</p>', '<p>Certificação Internacional</p>', '<p>Expandir as ideias dos alunos para uma visão mais ampla e assertiva sobre negócios, postura e comportamento empreendedor.</p>', '<p>Apostila.</p>', '2018-01-12 18:19:02', '2018-04-05 19:39:22', '1'),
	(8, 1, 'Bastidores de Moda em Paris', 'https://www.youtube.com/embed/A-XlD-uZPN0', 'http://ecolebrasil.com/base64/cursos/67ec3aef549541bf71754d24de59641d.png', 'http://ecolebrasil.com/base64/cursos/d62b65969d1560769b3044dceaaee255.png', '72h', 'Presencial', 'http://ecolebrasil.com/base64/cursos/a7a30b5a64fb7ba1ed26cd0c3210847d.pdf', 1, NULL, '<p>•&nbsp;<strong>cultura de moda&nbsp;</strong>em museus e exposições que apresentam os grandes criadores<br />\r\n•&nbsp;<strong>história de moda</strong>&nbsp;uma volta no tempo em conteúdo e acesso a moda vintage na prática<br />\r\n•&nbsp;<strong>aulas na sede da escola em Paris</strong><br />\r\n•&nbsp;<strong>palestras com profissionais de grandes marcas</strong>.<br />\r\n•&nbsp;visitas guiadas a famosos&nbsp;<strong>ateliers de moda e beleza</strong>&nbsp;em Paris</p>', '<p>Venha&nbsp;conhecer de perto a cultura da moda e imagem na cidade mais charmosa do mundo, Paris. Aulas exclusivas na Ecole francesa, visitas guiadas à exposições, museus e ateliers de moda e perfumaria, tudo isso acompanhadas de profissionais renomados no mercado parisiense.</p>', '<p>Vivência em Paris</p>', '<p>Experiência que une conceitos e prática, permitindo ao profissional enriquecer o aprendizado através de um roteiro guiado de visitas em Paris.</p>', '<p>•&nbsp;apostila de conteúdo;</p>\r\n\r\n<p>• sacola da Ecole;</p>\r\n\r\n<p>• bloco de notas.</p>', '2018-01-12 18:30:31', '2018-04-04 14:34:53', '1'),
	(9, 2, 'Visagismo', 'https://www.youtube.com/embed/-HI0KSZrgjY', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/bd8d81ae8a42377e62416d320fc6256b.png', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/9b096a71aa60b8ec907f337f48c9d5e5.png', '16h', 'Presencial', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/f7da7f095abaa28c37ccec3c6c37f22a.pdf', 1, NULL, '<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">O que é beleza;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">História, princípios e fundamentos do visagismo;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">Beleza estética do rosto e harmonia facial;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">Divisões da face;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">Linhas e Formas;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">Teste Gestual na consultoria;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">Análise dos formatos de rosto;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">Análise do rosto: Testa, Olhos, Sobrancelhas, Nariz, Boca, Maxilar e pescoço;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">Geometria das sobrancelhas;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">Perfis de temperamentos;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">Ficha diagnóstico;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">Temperatura da pele;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">círculo cromático; </span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">Visagismo aplicado na maquiagem;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">Visagismo aplicado nos penteados, cortes e cores de cabelo;</span></span></p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#999999">Visagismo aplicado à barba.</span></span></p>\r\n\r\n<p> </p>', '<p><span style="font-family:Tahoma,Geneva,sans-serif"><span style="color:#999999">O profissional visagista não trabalha com a padronização da moda porque cada cliente tem uma beleza única e diferenciada. Este curso irá capacitar o aluno a realizar um diagnóstico da cliente através da leitura das linhas, formas e cores, temperamento e temperatura da pele, para que ele possa adequar e harmonizar sua imagem evidenciando suas qualidades e revelando uma beleza externa que reflita seu interior e aumente sua auto-estima. </span></span></p>', '<p><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif"><span style="color:#999999">Certificação Internacional</span></span></p>\r\n\r\n<p> </p>', '<p><span style="font-family:Tahoma,Geneva,sans-serif"><span style="color:#999999">Apresentar os princípios da consultoria visagista para que o profissional da Beleza e da Consultoria de Imagem e Estilo potencialize seu atendimento e encante sua cliente estabelecendo uma relação de fidelidade e confiança. </span></span></p>', '<p>Apostila</p>', '2018-02-26 20:13:03', '2018-03-06 16:14:33', '1'),
	(10, 2, 'Estratégia de Negócio', '0', 'http://ecolebrasil.com/base64/cursos/7a6c4a33b20c1305cbe1c48fc15c9d7e.png', 'http://ecolebrasil.com/base64/cursos/28b22c8d9a1b5d3cdb8187a4f800e48e.png', '6h', 'Presencial', 'http://ecolebrasil.com/base64/cursos/c0b67a19d7a87e75cd4d4e0c373669c7.pdf', 1, NULL, '<p>·&nbsp;&nbsp; &nbsp; Pensamento estratégico como prática de gestão.<br />\r\n·&nbsp;&nbsp; &nbsp; Princípios Norteadores de Negócio.<br />\r\n·&nbsp;&nbsp; &nbsp; Ciclos de negócios.<br />\r\n·&nbsp;&nbsp; &nbsp; Diferencial competitivo.<br />\r\n·&nbsp;&nbsp; &nbsp; Fatores chave de sucesso como orientação de marketing.<br />\r\n·&nbsp;&nbsp; &nbsp; Construção de Macro e Micro Objetivos.<br />\r\n·&nbsp;&nbsp; &nbsp; Objetivos de Posicionamento.<br />\r\n·&nbsp;&nbsp; &nbsp; Construção de Plano de Ação organizado por objetivos e frentes</p>', '<p>Elaborar de forma prática um plano&nbsp;tático que defina a estratégia,&nbsp;o foco e as ações para atingir&nbsp;os seus objetivos como empresa&nbsp;<br />\r\nou profissional liberal.</p>', '<p>Certificação Internacional</p>\r\n\r\n<p>Oficina 100% prática</p>\r\n\r\n<p> </p>', '<p>&nbsp;Exercitar o pensamento estratégico através da&nbsp;construção prática &nbsp;de um plano de ações que auxilie&nbsp;na definição de objetivos, foco e ações,&nbsp;ajudando o empreendedor na tomada&nbsp;de decisão e no direcionamento de&nbsp;esforços no dia a dia da empresa. &nbsp; &nbsp; &nbsp;&nbsp;</p>', '<p>Apostila</p>', '2018-02-26 20:24:51', '2018-03-27 14:44:33', '0'),
	(11, 2, 'Perfil Profissional', 'https://www.youtube.com/embed/Y_JElVgjvGM', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/cd01ebaf6687884a99b79a3d1ba43353.png', 'base64/cursos/e96e30ef1ea9fc23b20a10e1d7cc22ca.png', '24h', 'Presencial', 'http://ecolebrasil.com/base64/cursos/2cf8493e4b53600a54ba88054d812b99.pdf', 1, NULL, '<ol start="1" style="list-style-type:decimal">\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Conversas difíceis: Cliente, mercado, posicionamento</strong></span></span></span></li>\r\n</ol>\r\n\r\n<p><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; As diferenças entre você e seu negócio. Quais os fatores que melhoram meus resultados, o que sua personalidade tem a ver com seus resultados.</span></span></span></p>\r\n\r\n<ul style="list-style-type:disc">\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Perfil e comportamento empreendedor</span></span></span></li>\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Motivação x resultado</span></span></span></li>\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Posicionamento estratégico</span></span></span></li>\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Mapa de Empatia e reflexões sobre o cliente</span></span></span></li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<ol start="2" style="list-style-type:decimal">\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Pés no chão, cabeça nas estrelas: estratégia para pequenos negócios</strong></span></span></span></li>\r\n</ol>\r\n\r\n<ul style="list-style-type:disc">\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">The Business Model Canvas</span></span></span></li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<ol start="3" style="list-style-type:decimal">\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Antes só, do que mal acompanhado: qual o momento de construir sua equipe</strong></span></span></span></li>\r\n</ol>\r\n\r\n<ul style="list-style-type:disc">\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">O melhor momento para começar a construir um time</span></span></span></li>\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Nível de Execução x Gestão</span></span></span></li>\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Ferramentas básicos para lidar com seu time</span></span></span></li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<ol start="4" style="list-style-type:decimal">\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Se eu fosse você, eu teria sucesso? Perfil de personalidade e como não se sabotar</strong></span></span></span></li>\r\n</ol>\r\n\r\n<ul style="list-style-type:disc">\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Os nove tipos de personalidade, segundo o Eneagrama</span></span></span></li>\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Bençãos de cada estilo e tendências de auto-sabotagem</span></span></span></li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<ol start="5" style="list-style-type:decimal">\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>O cliente sempre tem razão? Como lidar com os diferentes perfis de personalidade</strong></span></span></span></li>\r\n</ol>\r\n\r\n<ul style="list-style-type:disc">\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Motivações e interesses fundamentais dos nove tipos de personalidade</span></span></span></li>\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Como lidar com cada tipo</span></span></span></li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<ol start="6" style="list-style-type:decimal">\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>O caminho das pedras: seu plano de desenvolvimento pessoal, para você brilhar</strong></span></span></span></li>\r\n</ol>\r\n\r\n<ul style="list-style-type:disc">\r\n	<li><span style="color:#999999"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Desenvolvendo seu plano de ação, para grandes resultados.</span></span></span></li>\r\n</ul>', '<p style="text-align:justify"><span style="color:#999999"><span style="background-color:white">Desencolver o dia a dia profissional com crescimento e realização, requer acima de tudo auto conhecimento e apropriação das suas caracteristicas, competencias e habilidades. Nessa imersão, propomos reflexões práticas para alavancar o seu negócio e potencializar os seus resultados, de maneira assertiva, personalizada e focada. </span></span></p>', '<p><span style="color:#999999">Certificação Internacional</span></p>', '<p style="text-align:justify"><span style="color:#999999">Compreender o seu perfil emprendednor, e como se relacionar com o mercado e diferentes clientes. Quais os momentos de seu negócios e o seu melhor funcionamento. Capacitar para que você identifique as suas potencialidade e sabotadores e como usar em benefício do seu negócio. </span></p>', '<p><span style="color:#999999">Apostila</span></p>\r\n\r\n<p><span style="color:#999999">Cards perfil de personalidade</span></p>\r\n\r\n<p><span style="color:#999999">Post it</span></p>\r\n\r\n<p><span style="color:#999999">A3 Mapa da Empatia</span></p>\r\n\r\n<p><span style="color:#999999">A3 Canvas</span></p>', '2018-02-26 20:34:23', '2018-04-05 19:37:11', '1'),
	(12, 2, 'Produção de Moda', '0', 'http://ecolebrasil.com/base64/cursos/a52ecd81a0a5a11f788aa0d57f118bdf.png', 'http://ecolebrasil.com/base64/cursos/40220fd32b73451a10e5877897a80f5f.png', '21h', 'Presencial', 'base64/cursos/c7ec3fd905b729b59eac45cead301c00.pdf', 1, NULL, '<p><span style="font-size:12pt"><span style="color:black">Aula 1 Definições e aspectos da profissão. </span></span></p>\r\n\r\n<p><span style="font-size:12pt"><span style="color:black"><span style="font-size:11.0pt">- </span><span style="font-size:11.0pt">Comunicação e cultura de moda.</span></span></span></p>\r\n\r\n<p><span style="font-size:12pt"><span style="color:black"><span style="font-size:11.0pt">- </span><span style="font-size:11.0pt">O mercado de trabalho, áreas de atuação.</span></span></span></p>\r\n\r\n<p><span style="font-size:12pt"><span style="color:black"><span style="font-size:11.0pt">- </span><span style="font-size:11.0pt">Fotografia, moda e o papel do stylist.</span></span></span></p>\r\n\r\n<p><span style="font-size:12pt"><span style="color:black"><span style="font-size:11.0pt">- </span><span style="font-size:11.0pt">Prática de exercício – desenvolvimento de moodboard e projeto para apresentação de styling para campanha de moda.</span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<p><span style="font-size:12pt"><span style="color:black"><span style="font-size:11.0pt">Aula 2- </span>Conceito, percepção e desenvolvimento.</span></span></p>\r\n\r\n<p><span style="font-size:12pt"><span style="color:black"><span style="font-size:11.0pt">- </span><span style="font-size:11.0pt">História da moda e a evolução da comunicação no meio.</span></span></span></p>\r\n\r\n<p><span style="font-size:12pt"><span style="color:black"><span style="font-size:11.0pt">- </span><span style="font-size:11.0pt">Semiótica: análise e estudo de cases – o que está por trás daquilo que a gente não vê.</span></span></span></p>\r\n\r\n<p><span style="font-size:12pt"><span style="color:black"><span style="font-size:11.0pt">- </span><span style="font-size:11.0pt">Prática de exercício: identificação e análise de cases. </span></span></span></p>\r\n\r\n<p><span style="font-size:12pt"><span style="color:black">- <span style="font-size:11.0pt">Prática de exercício 2: desenvolvimento de produção de moda com modelo, fotógrafo + cenário / locação previamente estudados.</span></span></span></p>\r\n\r\n<p><span style="font-size:12pt"><span style="color:black">&nbsp;</span></span></p>\r\n\r\n<p><span style="font-size:12pt"><span style="color:black">Aula 3 –Análise, Estudo e<span style="font-size:11.0pt"> Resultado Final.</span></span></span></p>\r\n\r\n<p><span style="font-size:12pt"><span style="color:black"><span style="font-size:11.0pt">- </span><span style="font-size:11.0pt">Apresentação do material concluído – campanha executada. </span></span></span></p>\r\n\r\n<p><span style="font-size:12pt"><span style="color:black"><span style="font-size:11.0pt">- </span><span style="font-size:11.0pt">Análise final dos trabalhos de alunos. &nbsp;</span></span></span></p>', '<p style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="color:black">O curso de <strong>Styling | Produção de Moda</strong> &nbsp;promove o desenvolvimento de profissionais que saibam atender o mercado de moda construindo editoriais e campanhas de moda, atribuindo conhecimentos de processo, concepção e prática.</span></span></span></p>', '<p>Presencial</p>\r\n\r\n<p> </p>', '<p style="text-align:justify"><span style="font-size:12pt"><span style="color:black">Desenvolver profissionais que atendam o mercado / cliente, seja ele empresa, marca ou veículo de comunicação, compreendendo as necessidades e transformando seus objetivos em resultado através da imagem final. Instruir e capacitar novos olhares para com a moda e a relação com o público final. </span></span></p>', '<p>Apostila</p>', '2018-03-06 16:20:35', '2018-04-05 20:27:31', '1'),
	(13, 2, 'Oficina Estratégia de Negócio', '0', 'http://ecolebrasil.com/base64/cursos/aac57dbd197e9ccddca3c582cc9773e2.png', 'http://ecolebrasil.com/base64/cursos/14db6cdab20a85b419d69664c84d9583.png', '6h', 'Presencial', 'http://ecolebrasil.com/base64/cursos/8dd9a96c37cff00509a04d31cf05628e.pdf', 1, NULL, '<div style="border:none black 1.0pt; margin-left:18.0pt; margin-right:0cm; padding:0cm 0cm 0cm 0cm">\r\n<p style="text-align:justify"><span style="font-size:12pt"><span style="color:black"><span style="font-family:Symbol"><span style="color:#434343">· </span></span><span style="font-family:DIN"><span style="color:#434343">Pensamento estratégico como prática de gestão.</span></span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:12pt"><span style="color:black"><span style="font-family:Symbol"><span style="color:#434343">· </span></span><span style="font-family:DIN"><span style="color:#434343">Princípios Norteadores de Negócio.</span></span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:12pt"><span style="color:black"><span style="font-family:Symbol"><span style="color:#434343">· </span></span><span style="font-family:DIN"><span style="color:#434343">Ciclos de negócios.</span></span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:12pt"><span style="color:black"><span style="font-family:Symbol"><span style="color:#434343">· </span></span><span style="font-family:DIN"><span style="color:#434343">Diferencial competitivo.</span></span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:12pt"><span style="color:black"><span style="font-family:Symbol"><span style="color:#434343">· </span></span><span style="font-family:DIN"><span style="color:#434343">Fatores chave de sucesso como orientação de marketing.</span></span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:12pt"><span style="color:black"><span style="font-family:Symbol"><span style="color:#434343">· </span></span><span style="font-family:DIN"><span style="color:#434343">Construção de Macro e Micro Objetivos.</span></span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:12pt"><span style="color:black"><span style="font-family:Symbol"><span style="color:#434343">· </span></span><span style="font-family:DIN"><span style="color:#434343">Objetivos de Posicionamento.</span></span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:12pt"><span style="color:black"><span style="font-family:Symbol"><span style="color:#434343">· </span></span><span style="font-family:DIN"><span style="color:#434343">Construção de Plano de Ação organizado por objetivos e frentes</span></span></span></span></p>\r\n</div>', '<p><span style="font-size:12pt"><span style="background-color:white"><span style="color:black"><span style="font-family:DIN"><span style="color:#222222">Elaborar de forma prática um plano tático que defina a estratégia, o foco e as ações para atingir os seus objetivos como empresa ou profissional liberal.</span></span></span></span></span></p>', '<p>Presencial</p>\r\n\r\n<p>100% prático</p>', '<div style="border:none black 1.0pt; padding:0cm 0cm 0cm 0cm">\r\n<p style="text-align:justify"><span style="font-size:12pt"><span style="color:black"><span style="font-family:DIN"><span style="color:#434343"><span style="background-color:#ffffff">Exercitar o pensamento estratégico através da construção prática de um plano de ações que auxilie na definição de objetivos, foco e ações, ajudando o empreendedor na tomada de decisão e no direcionamento de esforços no dia a dia da empresa.</span></span></span></span></span></p>\r\n</div>', '<p>Apostila</p>', '2018-03-07 13:00:28', '2018-03-27 14:44:43', '0'),
	(14, 2, 'Mindset', '0', 'base64/cursos/7da8c5011b9d9ef142705231f7cb1a8c.png', 'base64/cursos/c11e1128b74c4caba69677a2925d5a6c.png', '6h', 'Presencial', 'base64/cursos/14a5f576f16bb8ff8d8781679322b27a.pdf', 1, NULL, '<p>·&nbsp;&nbsp; &nbsp; Conceitos de inovação e melhoria contínua.<br />\r\n·&nbsp;&nbsp; &nbsp; Tipos e modelos de inovação.<br />\r\n·&nbsp;&nbsp; &nbsp; Inovação como caminho para a sustentabilidade de uma empresa.<br />\r\n·&nbsp;&nbsp; &nbsp; Ciclos de inovação.<br />\r\n·&nbsp;&nbsp; &nbsp; Universo e caminhos da inovação.</p>', '<p>A atualização constante é um dos caminhos&nbsp;para a sobrevivência das empresas nos dias de hoje.&nbsp;Mas, de onde vem a inovação?&nbsp;Como manter o seu negócio competitivo&nbsp;através da renovação constante&nbsp;sem perder a consistência na atuação&nbsp;de mercado? É hora de abandonar&nbsp;manuais antigos e se reinventar.</p>', '<p>Workshop</p>\r\n\r\n<p>Presencial</p>', '<p>Ajudar o aluno a enxergar os caminhos da inovação&nbsp;&nbsp;e melhoria contínua para o seu negócio&nbsp;auxiliando-o para que identifique oportunidades&nbsp;<br />\r\nde renovação na sua empresa. &nbsp; &nbsp; &nbsp;&nbsp;</p>', '<p>Apostila</p>', '2018-03-07 13:07:58', '2018-03-27 14:44:27', '0'),
	(15, 2, 'Personal Organizer', 'https://www.youtube.com/embed/xMpVuN7EGsA', 'http://ecolebrasil.com/base64/cursos/dbb16ef2c8b1bfb9420c1a00764d3bc7.png', 'http://ecolebrasil.com/base64/cursos/123fc802e40eaede95a1567af396beb0.png', '24h', 'Presencial', 'base64/cursos/9f36a3a454c98f73e84c2effb356513c.pdf', 1, NULL, '<p>&nbsp;O papel do organizador profissional e suas características,&nbsp;perfil e postura profissional, áreas de atuação.<br />\r\n&nbsp;Tipos de serviços prestados.<br />\r\nMateriais e equipamentos necessários.<br />\r\nProjetos de organização – prioridades e etapas.<br />\r\nDescarte de objetos e roupas.<br />\r\nDesapego no guarda roupa para abrir espaço para o novo em sua vida.<br />\r\n&nbsp;Adendos: Visita Técnica de Prospecção, Roteiro de Visita Técnica,&nbsp;Modelo de Orçamento.</p>', '<p>Este curso é pensado para quem deseja iniciar&nbsp;uma carreira em Organização Profissional ou&nbsp;atualizar-se e aprofundar conhecimentos na área da&nbsp;Organização com foco na Consultoria de Imagem.</p>', '<p>Presencial</p>', '<p>O curso Personal Organizer tem por objetivo capacitar aqueles que&nbsp;buscam se profissionalizar em organização de ambientes.&nbsp;<br />\r\nVisa trabalhar técnicas de organização de&nbsp;forma que sejam otimizados ficando mais organizados&nbsp;e práticos. É um curso para quem deseja iniciar carreira em&nbsp;Organização Profissional ou, até mesmo,&nbsp;para profissionais que desejam atualizar-se ou aprofundar&nbsp;conhecimentos na área da organização e Consultoria de Imagem. &nbsp; &nbsp; &nbsp;&nbsp;</p>', '<p>Apostila</p>', '2018-03-07 13:16:05', '2018-03-27 16:25:26', '1'),
	(16, 2, 'Redes Sociais1', '0', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/58164dca5c93e7878b800eff0240b753.png', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/4c29ebe29de223210c08807e24311382.png', '6h', 'Presencial', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/f974b2cf56c30efe829f9ba56b831c85.pdf', 1, NULL, '<p><br />\r\n·&nbsp;&nbsp; &nbsp;Posicionamento de marca<br />\r\n·&nbsp;&nbsp; &nbsp;Construção de Plano Editorial.<br />\r\n·&nbsp;&nbsp; &nbsp;Relação do Plano Editorial com os objetivos de posicionamento.<br />\r\n·&nbsp;&nbsp; &nbsp;Construção dos Objetivos Editoriais.<br />\r\n·&nbsp;&nbsp; &nbsp;Construção de Conteúdo.</p>', '<p>O conteúdo das redes sociais precisa estar&nbsp;cada vez mais próximo dos objetivos do negócio&nbsp;e do posicionamento da marca. Quem sua marca é,&nbsp;do que ela fala, como se comporta e vive?&nbsp;Essas respostas interferem na construção de reputação&nbsp;e precisam estar alinhadas com seus&nbsp;valores e fortalecendo os diferenciais da&nbsp;empresa no conteúdo gerado pela marca.</p>', '<p>Presencial</p>', '<p>Ensinar a pensar de forma estratégica e&nbsp;executar cada postagem alinhada com os objetivos&nbsp;da marca para redes sociais,&nbsp;em um plano que defina&nbsp;objetivos para a presença digital do negócio.&nbsp;</p>', '<p>Apostila</p>', '2018-03-07 13:22:21', '2018-03-25 21:21:18', '0'),
	(17, 2, 'Tecidos', '0', 'http://ecolebrasil.com/base64/cursos/e9d284f44d6e426721a0868900af6631.png', 'http://ecolebrasil.com/base64/cursos/33f773ddb8968effb6c45a4d7a7475f4.png', '9h', 'Presencial', 'base64/cursos/a978268d0fd349d743eb4bd8d7b01961.pdf', 1, NULL, '<p>•Histórico, tipos de fibras, informações técnicas, variações de tecidos, texturas, aplicações.</p>', '<p>Estudo teórico e prático sobre os diferentes tipos de tecidos e suas aplicações.</p>', '<p>•Estudo técnico e aplicação prática de conteúdo desenvolvido por uma consultora de imagem especialista em tecidos.<br />\r\n•Estudo dos tecidos relacionados aos objetivos de imagem.<br />\r\n•Construção de cartela de tecidos. Materiais incluídos no valor.</p>', '<p>Tornar o aluno apto a compreender as diferenças dos tecidos e suas aplicações de acordo com a os objetivos definidos.</p>', '<p>Apostila</p>', '2018-03-20 19:45:26', '2018-04-04 17:34:25', '1'),
	(18, 3, 'Consultoria Masculina', '0', 'base64/cursos/b0b7b990de1d2e24f9e71618172422af.png', 'base64/cursos/1e1f5e69e2857956cc0031b0da6c23ef.png', '-', 'Presencial', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/', 1, NULL, '<p>Informações sendo desenvolvidas.</p>', '<p>Informações sendo desenvolvidas.</p>', '<p>Informações sendo desenvolvidas.</p>', '<p>Informações sendo desenvolvidas.</p>', '<p>Informações sendo desenvolvidas.</p>', '2018-03-20 20:19:14', '2018-03-20 20:19:14', '1'),
	(19, 3, 'Metamorfose', '0', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/bf6c8da49616244999c9f09508a77fb0.png', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/d2687702cd61e5a67ca50961fe14a66d.png', '34h', 'À Distância', 'http://ecolebrasil.com/base64/cursos/2dfe4fd971a6c163fb6fd89a89d5c086.pdf', 1, NULL, '<p style="text-align:justify"><strong><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Módulo 1: </span></span></span></strong></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Introdução </span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Primeira fase </span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Adolescência </span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Crise de Identidade</span></span></span></p>\r\n\r\n<p style="text-align:justify"> </p>\r\n\r\n<p style="text-align:justify"><strong><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Módulo 2: </span></span></span></strong></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">O jovem adulto</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Sensações e Emoções </span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Crise dos talentos</span></span></span></p>\r\n\r\n<p style="text-align:justify"> </p>\r\n\r\n<p style="text-align:justify"><strong><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Módulo 3: </span></span></span></strong></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Adulto</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Crise de autenticidade</span></span></span></p>\r\n\r\n<p style="text-align:justify"> </p>\r\n\r\n<p style="text-align:justify"><strong><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Módulo 4: </span></span></span></strong></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Maturidade</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Aceitação de Si</span></span></span></p>\r\n\r\n<p style="text-align:justify"> </p>\r\n\r\n<p style="text-align:justify"><strong><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Módulo 5: </span></span></span></strong></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Maturidade</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Crise Existencial</span></span></span></p>\r\n\r\n<p style="text-align:justify"> </p>\r\n\r\n<p style="text-align:justify"><strong><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Módulo 6: </span></span></span></strong></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Declínio</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Fase Inspirativa</span></span></span></p>\r\n\r\n<p style="text-align:justify"> </p>\r\n\r\n<p style="text-align:justify"><strong><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Módulo 7: </span></span></span></strong></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Envelhecimento</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Fase Intuitiva</span></span></span></p>\r\n\r\n<p style="text-align:justify"> </p>\r\n\r\n<p style="text-align:justify"><strong><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Módulo 8: </span></span></span></strong></p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Posições Existenciais</span></span></span></p>', '<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:12px">Ao longo da vida nos transformamos e passamos por momentos diversos. E em cada fase vivenciamos mudanças biológicas, internas e externas na relação com o outro; sendo que dentro de cada etapa algo é esperado de nós de acordo com o nosso desenvolvimento e amadurecimento. Desta forma nos preparamos para o fim da vida e de nossa trajetória, onde saber envelhecer e respeitar cada fase é condição primordial para o encontro com nossa essência. Cada mudança movimenta a forma como nos vemos, possibilitando a reconstrução da autoimagem e o desenvolvimento do ser. </span></span></span></p>\r\n\r\n<p style="text-align:justify"> </p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Público Alvo: </strong>Consultores de Imagem, Terapeutas e Coach’s. </span></span></span></p>\r\n\r\n<p style="text-align:justify"> </p>\r\n\r\n<p style="text-align:justify"><span style="color:#7f8c8d"><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Pré-requisito recomendado:</strong> Curso de Psicologia da Autoimagem </span></span></span></p>', '<p>Curso Online</p>\r\n\r\n<p>Certificação Internacional</p>', '<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#7f8c8d"><span style="font-size:12px"><strong>Compreender as fases do desenvolvimento para complementação no atendimento de clientes em Coaching, Consultoria de Imagem e processos de autoconhecimento e desenvolvimento pessoal. Refletir sobre intervenções em imagem de acordo com cada fase especifica. </strong></span></span></span></p>', '<p>-</p>', '2018-03-20 20:44:56', '2018-04-06 16:58:23', '1');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.depoimentos
CREATE TABLE IF NOT EXISTS `depoimentos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci,
  `avatar` longtext COLLATE utf8mb4_unicode_ci,
  `video` longtext COLLATE utf8mb4_unicode_ci,
  `apenas_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.depoimentos: ~6 rows (aproximadamente)
DELETE FROM `depoimentos`;
/*!40000 ALTER TABLE `depoimentos` DISABLE KEYS */;
INSERT INTO `depoimentos` (`id`, `descricao_html`, `avatar`, `video`, `apenas_video`, `autor`, `created_at`, `updated_at`, `visible`) VALUES
	(1, '“Conhecer o trabalho da Vandressa e a Escola foi um grande marco em minha vida profissional. Descobrir que a minha paixão pelo universo da beleza e da moda poderia se tornar uma profissão e que além de eu me redescobrir como mulher poderia ajudar outras pessoas a se encontrarem, foi simplesmente fantástico. Através da formação de consultoria de imagem e estilo pude me conhecer na essência, aceitar como sou e me libertar de padrões alheios. Essa “transformação” permitiu revelar a minha melhor versão ao universo e proporcionou conhecimento e ferramentas para que eu contribua com propriedade no processo de autoconhecimento de pessoas que buscam resgatar ou aumentar sua estima, dar um “UP” no visual e elevar suas relações pessoais e profissionais através de sua imagem.”', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/depoimentos/1286defd8b4dc802f3408ffd56ec9461.png', '0', NULL, 'Nathalia Bernardes, aluna da formação em Consultoria de Imagem.', '2018-01-13 13:56:52', '2018-03-27 15:34:16', '1'),
	(2, '"Aprender, segundo o dicionário, significa ficar sabendo, tomando conhecimento; isto resume bem a minha experiência com a escola. Ter tido a oportunidade em ser o primeiro aluno homem a formar-se com a EcoleSupérieure de Relooking aqui no Brasil é algo muito especial, principalmente quando vemos no mercado a diferença que um bom aprendizado te propicia e o peso de ter um certificado internacional agregado as minhas experiências e demais formações profissionais. Acredito na educação e acredito na capacidade que o Brasil tem, por isso me sinto um privilegiado em ter tido a oportunidade de aprender toda a formação que recebi."', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/depoimentos/1ad1368c2879234da5a963f29f267883.png', '0', NULL, 'Matheus Rocca Vecchio Almeida, aluno da formação em Consultoria de Imagem.', '2018-01-13 13:57:46', '2018-03-27 15:34:25', '1'),
	(3, '“O Método francês, ainda é considerado o mais atual e eficiente para Consultoria de Imagem e Relooking. Em vista disso, procurei escolas que pudessem me desenvolver tecnicamente e aprimorar as minhas habilidades para atuar  com segurança e construir uma carreira consistente.\r\n\r\nÉ um mercado que vem crescendo e se destacando. Existem várias ofertas de cursos no Brasil e fora dele. O que me fez optar pela Ecole foi a proposta diferenciada em trabalhar com a essência do indivíduo, ou seja, identificando através da personalidade algo maior do que simplesmente vesti-lo.Desenvolvemos técnicas de Coaching próprias para aplicação na consultoria de imagem e estilo. É necessário objetivar com o cliente o resultado a ser alcançado através de metas trazidas por ele. Feito isso, busquei mais conhecimento através do Curso de Visagismo e Morfopsicologia do Rosto, onde fazemos uma leitura facial através dos traços existentes no rosto do cliente. Esses traços não só ajudam a identificar a personalidade do cliente como o ajudarão a se conhecer melhor, por que age de um jeito que ainda não identificou o motivo. Porque suas feições são assim e que não necessita de plástica. Como ele pode trabalhar melhor a sua comunicação com as pessoas agora que se conhece e ainda, para mulheres como a morfomaquigem facilita a sua apresentação para o complento da sua imagem de sucesso.”', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/depoimentos/1a45c58c5b725301f8e0d267d0ac6d99.png', '0', NULL, 'Cris Guimas, aluna da formação em Morfopsicologia e Consultoria de Imagem.', '2018-01-13 13:59:03', '2018-02-25 13:12:45', '1'),
	(4, 'Buscando um diferencial para o seu trabalho como designer de joias, se especializou em cursos de Coaching de Imagem e Visagismo com ênfase em Morfopsicologia pela escola francesa EcoleSupérieure de Relooking - Paris. "Estudar na EcoleSupérieure de Relooking é ter a oportunidade de receber formação de qualidade, com metodologia de ensino e material diferenciados com professores treinados em Paris, onde tu receberás sua certificação internacional na escola que é reconhecida ainda na França, pela Comissão Nacional de Centro Profissional (CNCP). Minha formação na Ecole é um importante diferencial para o meu trabalho que prima pela exclusividade e qualidade nos projetos que desenvolvo, pois se o estilo do meu cliente é único, o projeto da sua joia também será e isso a Ecole me ensinou".', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/depoimentos/e92e6f9fe4982f37a96fc10fca2903f8.png', '0', NULL, 'Leila Fraga, alunas das formações em Consultoria de Imagem e Mosfopsicologia.', '2018-01-13 13:59:38', '2018-02-25 13:13:03', '1'),
	(5, 'A experiência de realizar o curso pela EcoleSuperièure de Relooking foi espetacular. A didática é maravilhosa. Hoje me sinto plenamente preparada para atender pois tendo em minha mente claramente todas as etapas necessárias para um processo de relooking eficaz e gratificante para o cliente! Os grandes diferenciais são as técnicas de coaching e o aprendizado do teste revelador da colorimetria pessoal, que são fundamentais para um trabalho exclusivo e diferenciado no mercado de trabalho. A professora é muito competente, transmitindo segurança no que transmite e assim gerando um aprendizado bastante sólido. Além disso é acessível e disposta a participar ativamente de todo o processo de aprendizado e estruturação da carreira de cada aluna – incentivando e se colocando à disposição mesmo após o curso. Estou muito feliz pela oportunidade que tive e hoje estou muito mais segura da minha competência! Obrigada àEcole e a querida Vandressa!', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/depoimentos/51b243346fdaac2fa76681311278db1f.png', '0', NULL, 'Verônica Tavaniello, aluna da formação em Consultoria de Imagem', '2018-01-13 14:00:21', '2018-02-25 13:13:18', '1'),
	(6, NULL, 'http://ecolebrasil.com/', 'https://www.youtube.com/embed/Axm0XxGcFXw', 'on', 'Thais Franca', '2018-03-27 19:10:13', '2018-03-27 19:10:13', '1');
/*!40000 ALTER TABLE `depoimentos` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.ebooks
CREATE TABLE IF NOT EXISTS `ebooks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `transacao` int(11) NOT NULL,
  `max_parcelas` int(11) NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.ebooks: ~3 rows (aproximadamente)
DELETE FROM `ebooks`;
/*!40000 ALTER TABLE `ebooks` DISABLE KEYS */;
INSERT INTO `ebooks` (`id`, `titulo`, `valor`, `card`, `transacao`, `max_parcelas`, `link`, `file`, `created_at`, `updated_at`, `visible`) VALUES
	(1, 'Ebook 1', '34.43', 'base64/ebooks/d2fdf5b8ef7e8b36c698cedaf920a9a4.png', 4, 0, NULL, 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/ebooks/d5ff898e1bbb361e81487cc4c05d092e.pdf', '2018-02-04 19:25:19', '2018-02-19 15:59:18', '1'),
	(2, 'teste', '1.00', 'base64/ebooks/4c4396c61ff2f1dc5e1ab8d5df8d3a81.jpeg', 4, 0, NULL, 'base64/ebooks/23bfc6b611749a6bef41c6f72ff479db.jpeg', '2018-02-04 19:26:21', '2018-02-07 03:00:16', '1'),
	(3, 'teste', '1.00', 'base64/ebooks/530b1720e57b671d7e15f4c91bfb577e.png', 4, 0, NULL, 'base64/ebooks/b2b4088bf83cc92b660279b00fedaca2.png', '2018-02-07 14:07:40', '2018-02-07 14:07:40', '1');
/*!40000 ALTER TABLE `ebooks` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.exercicios
CREATE TABLE IF NOT EXISTS `exercicios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arquivo` longtext COLLATE utf8mb4_unicode_ci,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `modulo_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `exercicios_modulo_id_foreign` (`modulo_id`),
  CONSTRAINT `exercicios_modulo_id_foreign` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.exercicios: ~26 rows (aproximadamente)
DELETE FROM `exercicios`;
/*!40000 ALTER TABLE `exercicios` DISABLE KEYS */;
INSERT INTO `exercicios` (`id`, `titulo`, `link`, `arquivo`, `descricao_html`, `modulo_id`, `created_at`, `updated_at`, `visible`) VALUES
	(2, 'Atividade Módulo 1', '0', 'base64/exercicios/36223cb388c75f4656198dd98ef47059.pdf', '<p>Psicologia da autoimagem</p>', 6, '2018-02-28 10:16:53', '2018-02-28 10:16:53', '1'),
	(3, 'Caso Ilustrativo', '0', 'base64/exercicios/4131b4c0f563fba52a0f045cd16352d7.pdf', '<p>-</p>', 6, '2018-02-28 10:17:15', '2018-02-28 10:17:15', '1'),
	(5, 'Atividade 2.1', '0', 'base64/exercicios/a14ffb7fbf920735a0a9bf9ebac562b7.pdf', '<p>-</p>', 7, '2018-02-28 10:28:00', '2018-02-28 10:28:00', '1'),
	(6, 'Atividade 2.2', '0', 'base64/exercicios/50c9b66458aa79a5abf3e0bd432206b5.pdf', '<p>-</p>', 7, '2018-02-28 10:28:20', '2018-02-28 10:28:20', '1'),
	(7, 'Visão de si mesmo', '0', 'base64/exercicios/5822b26e2e709fa5eddbd60ec8ed49b8.pdf', '<p>-</p>', 7, '2018-02-28 10:28:54', '2018-02-28 10:28:54', '1'),
	(8, 'Atividade', '0', 'base64/exercicios/b5c661928664f2361e0a9370f5a9eca6.pdf', '<p>-</p>', 10, '2018-03-02 00:57:07', '2018-03-02 00:57:07', '1'),
	(9, 'Caso Ilustrativo', '0', 'base64/exercicios/a56871dd257b39b1d1cf889cbc306c55.pdf', '<p>-</p>', 10, '2018-03-02 00:59:02', '2018-03-02 00:59:02', '1'),
	(10, 'Exercicio', '0', 'base64/exercicios/765bcd5afa12747e7acd7bf6a8080427.pdf', '<p>-</p>', 10, '2018-03-02 00:59:42', '2018-03-02 00:59:42', '1'),
	(11, 'Atividade 1', '0', 'base64/exercicios/7341c83443d332a521c6de105925af7a.pdf', '<p>-</p>', 9, '2018-03-02 01:11:07', '2018-03-02 01:11:07', '1'),
	(12, 'Atividade 2', '0', 'base64/exercicios/b6120dd506d232a4a624e8ecd54af5e7.pdf', '<p>-</p>', 9, '2018-03-02 01:11:33', '2018-03-02 01:11:33', '1'),
	(15, 'Desapego', '0', 'base64/exercicios/f6b2fcb32683985fc5e5f5b311d32a23.pdf', '<p>-</p>', 11, '2018-03-02 01:23:09', '2018-03-02 09:57:17', '1'),
	(16, 'Exercício Módulo 5', '0', 'base64/exercicios/2741c017fa29eca4e4f54e4c9daa9bcb.pdf', '<p>-</p>', 11, '2018-03-02 09:57:47', '2018-03-02 09:57:47', '1'),
	(17, 'Atividades', '0', 'base64/exercicios/dc2ea3eb08138f3c4ac97d9a00e7becf.pdf', '<p>-</p>', 12, '2018-03-02 10:03:34', '2018-03-02 10:03:34', '1'),
	(18, 'Caso Ilustrativo', '0', 'base64/exercicios/18eddfce90e440b90182adfe6f340e95.pdf', '<p>-</p>', 12, '2018-03-02 10:03:54', '2018-03-02 10:03:54', '1'),
	(19, 'Exercício Módulo 6', '0', 'base64/exercicios/1be2c467ea19b0c84ce4f5dcc30fcc43.pdf', '<p>-</p>', 12, '2018-03-02 10:04:19', '2018-03-02 10:04:19', '1'),
	(20, 'Estilo de Vida', '0', 'base64/exercicios/1c4b23ca95a9b06c642083907a1090df.pdf', '<p>-</p>', 13, '2018-03-02 10:07:16', '2018-03-02 10:07:16', '1'),
	(21, 'Exercicios', '0', 'base64/exercicios/3d8d6454f5d224156ad52ea698d9377c.pdf', '<p>-</p>', 13, '2018-03-02 10:07:34', '2018-03-02 10:07:34', '1'),
	(22, 'At. 8.2 - Projeto Original de Imagem', '0', 'base64/exercicios/c4c155487f3c51aa5d0738ccd3dc2fb7.pdf', '<p>-</p>', 14, '2018-03-02 10:17:20', '2018-03-02 10:17:20', '1'),
	(23, 'Atividade 1', '0', 'base64/exercicios/3012ee0b65084688f61177a9db3b0fab.pdf', '<p>-</p>', 14, '2018-03-02 10:17:35', '2018-03-02 10:17:35', '1'),
	(24, 'Atividade 2', '0', 'base64/exercicios/e246ffa7dab48a4692ea61bde90f85e2.pdf', '<p>-</p>', 14, '2018-03-02 10:18:08', '2018-03-02 10:18:08', '1'),
	(25, 'Atividade 3', '0', 'base64/exercicios/13f798bfddee7f9571dbb230ece8421d.pdf', '<p>-</p>', 14, '2018-03-02 10:18:25', '2018-03-02 10:18:25', '1'),
	(26, 'Objetivos', '0', 'base64/exercicios/1beb7d7e9e8ea7b053320dd431852153.pdf', '<p>-</p>', 14, '2018-03-02 10:18:40', '2018-03-02 10:18:40', '1'),
	(27, 'Exercícios', '0', 'base64/exercicios/3f09348013b03cc456ba41031acc53f7.pdf', '<p>-</p>', 14, '2018-03-02 10:19:04', '2018-03-02 10:19:04', '1'),
	(28, 'Prós e Contras', '0', 'base64/exercicios/89779d0c0249c6a9c47b2703bb36ab92.pdf', '<p>-</p>', 14, '2018-03-02 10:19:21', '2018-03-02 10:19:21', '1'),
	(29, 'Testes e Forças', '0', 'base64/exercicios/0dc1281518d1a7a1a5f34afa25b54c76.pdf', '<p>-</p>', 14, '2018-03-02 10:19:59', '2018-03-02 10:19:59', '1'),
	(30, 'Atividade', '0', 'base64/exercicios/be524a8419070ddb7784fe6e93b5ba78.pdf', '<p>Exercício Módulo 1</p>', 6, '2018-03-04 16:59:06', '2018-03-04 16:59:06', '1');
/*!40000 ALTER TABLE `exercicios` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.exercicio_comentarios
CREATE TABLE IF NOT EXISTS `exercicio_comentarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `exercicio_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `comentario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exercicio_comentarios_exercicio_id_foreign` (`exercicio_id`),
  KEY `exercicio_comentarios_user_id_foreign` (`user_id`),
  CONSTRAINT `exercicio_comentarios_exercicio_id_foreign` FOREIGN KEY (`exercicio_id`) REFERENCES `exercicios` (`id`),
  CONSTRAINT `exercicio_comentarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.exercicio_comentarios: ~2 rows (aproximadamente)
DELETE FROM `exercicio_comentarios`;
/*!40000 ALTER TABLE `exercicio_comentarios` DISABLE KEYS */;
INSERT INTO `exercicio_comentarios` (`id`, `exercicio_id`, `user_id`, `comentario`, `created_at`, `updated_at`) VALUES
	(1, 2, 18, 'as respostas do exercício envio para o email da Ecole?', '2018-03-11 21:26:55', '2018-03-11 21:26:55'),
	(2, 9, 18, 'nesse caso acho que ela esqueceu da pessoa principal todo esse tempo, ela mesmo! Se sente insegura e tem baixa autoestima pois à todo momento precisa ser uma pessoa ideal e não a real.', '2018-03-23 20:41:53', '2018-03-23 20:41:53');
/*!40000 ALTER TABLE `exercicio_comentarios` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.formacaos
CREATE TABLE IF NOT EXISTS `formacaos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.formacaos: ~3 rows (aproximadamente)
DELETE FROM `formacaos`;
/*!40000 ALTER TABLE `formacaos` DISABLE KEYS */;
INSERT INTO `formacaos` (`id`, `nome`, `descricao_html`, `created_at`, `updated_at`, `visible`) VALUES
	(1, 'Formações', '<p>Cursos de Formação</p>', '2018-01-11 16:40:04', '2018-01-11 18:22:58', '1'),
	(2, 'Cursos Intensivos', '<p>Cursos Intensivos</p>', '2018-01-11 16:43:09', '2018-01-11 18:22:38', '1'),
	(3, 'Cursos Online', '<p>Cursos Online</p>', '2018-01-11 18:23:22', '2018-01-11 18:23:22', '1');
/*!40000 ALTER TABLE `formacaos` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.imprensas
CREATE TABLE IF NOT EXISTS `imprensas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.imprensas: ~1 rows (aproximadamente)
DELETE FROM `imprensas`;
/*!40000 ALTER TABLE `imprensas` DISABLE KEYS */;
INSERT INTO `imprensas` (`id`, `titulo`, `descricao`, `descricao_html`, `created_at`, `updated_at`) VALUES
	(1, 'teste', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-01-11 18:34:22', '2018-01-11 18:34:22');
/*!40000 ALTER TABLE `imprensas` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.inadimplencias
CREATE TABLE IF NOT EXISTS `inadimplencias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_parcelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razao_pagamento` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagar_data` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pago` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `vencimento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `transacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.inadimplencias: 1 rows
DELETE FROM `inadimplencias`;
/*!40000 ALTER TABLE `inadimplencias` DISABLE KEYS */;
INSERT INTO `inadimplencias` (`id`, `email`, `nome`, `valor`, `max_parcelas`, `razao_pagamento`, `pagar_data`, `pago`, `vencimento`, `created_at`, `updated_at`, `transacao`) VALUES
	(1, 'administrador@ecole.com', 'alert', '1.00', '5', '<p>ewewqewqeww</p>', 'S', 'N', '2018-02-26 07:18:06', '2018-02-26 02:40:19', '2018-02-26 02:41:02', '08');
/*!40000 ALTER TABLE `inadimplencias` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.materials
CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arquivo` longtext COLLATE utf8mb4_unicode_ci,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `modulo_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `materials_modulo_id_foreign` (`modulo_id`),
  CONSTRAINT `materials_modulo_id_foreign` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.materials: ~46 rows (aproximadamente)
DELETE FROM `materials`;
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` (`id`, `titulo`, `link`, `arquivo`, `descricao_html`, `modulo_id`, `created_at`, `updated_at`, `visible`) VALUES
	(2, 'Apostila', '0', 'base64/materiais/46ceee6c2453da53f4cf76d0f93b88db.pdf', '<p>-</p>', 6, '2018-02-28 10:18:52', '2018-03-06 15:46:11', '1'),
	(3, 'Auto Imagem- Maxwell Maltz', '0', 'base64/materiais/878e03e954f7f3b22e3ac8817e4104a0.pdf', '<p>-</p>', 6, '2018-02-28 10:19:24', '2018-02-28 10:19:24', '1'),
	(4, 'Primeiras Entrevistas Emilio Romero', '0', 'base64/materiais/c86e0f6c1d294659122197eb0c601862.pdf', '<p>-</p>', 6, '2018-02-28 10:19:58', '2018-02-28 10:19:58', '1'),
	(6, 'Video', 'https://www.youtube.com/embed/Il0nz0LHbcM', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/', '<p>-</p>', 6, '2018-02-28 10:25:57', '2018-02-28 10:25:57', '1'),
	(7, 'Aula 2', '0', 'base64/materiais/0f820a8751832787cd978815ff156276.pdf', '<p>-</p>', 7, '2018-02-28 10:29:24', '2018-02-28 10:29:24', '1'),
	(8, 'Caso ilustrativo', '0', 'base64/materiais/a05b46dc1bad2485cde6b24ca89338e7.pdf', '<p>-</p>', 7, '2018-02-28 10:29:40', '2018-02-28 10:29:40', '1'),
	(9, 'Apostila', '0', 'base64/materiais/4fc82494380796cfa8f9532b0e543f1c.pdf', '<p>-</p>', 7, '2018-02-28 10:30:02', '2018-02-28 10:30:02', '1'),
	(10, 'Auto Imagem Tereza Erthal', '0', 'base64/materiais/eec1f707df41995be8d51b562b6cceb4.pdf', '<p>-</p>', 7, '2018-02-28 10:30:34', '2018-02-28 10:30:34', '1'),
	(12, 'Video', 'https://www.youtube.com/embed/paVED2TFvEk', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/', '<p>-</p>', 7, '2018-02-28 10:31:28', '2018-02-28 10:31:28', '1'),
	(13, 'Espelho', '0', 'base64/materiais/f1932e63098d34f1556e39bda7fa5212.pdf', '<p>-</p>', 10, '2018-03-02 01:00:31', '2018-03-02 01:00:31', '1'),
	(14, 'Apostila', '0', 'base64/materiais/952dffdcc80d9a040e06b661f1466f61.pdf', '<p>-</p>', 10, '2018-03-02 01:03:06', '2018-03-02 01:03:06', '1'),
	(15, 'Espelho Neurônios', '0', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/materiais/a66f609f221f093c013274b502ab1605.pdf', '<p>-</p>', 10, '2018-03-02 01:03:45', '2018-03-02 01:07:32', '1'),
	(16, 'Espelho Winicott', '0', 'base64/materiais/1afc9f95b44ad9bff3efcee239f0932d.pdf', '<p>-</p>', 10, '2018-03-02 01:04:46', '2018-03-02 01:04:46', '1'),
	(17, 'Caso Ilustrativo', '0', 'base64/materiais/d5bc932e45926b06087b3534272dda77.pdf', '<p>-</p>', 9, '2018-03-02 01:12:36', '2018-03-02 01:12:36', '1'),
	(18, 'Cérebro e Corpo', '0', 'base64/materiais/7f3046dd446333aa5cdcb82a01af1be7.pdf', '<p>-</p>', 9, '2018-03-02 01:17:58', '2018-03-02 01:17:58', '1'),
	(19, 'Wellness Coaching', '0', 'base64/materiais/cc61392f1dc3634a0e69cc95fef31cb8.pdf', '<p>-</p>', 9, '2018-03-02 01:19:19', '2018-03-02 01:19:19', '1'),
	(20, 'Apostila', '0', 'base64/materiais/7ebbd1352239daf77d082223b57a9578.pdf', '<p>-</p>', 9, '2018-03-02 01:20:48', '2018-03-02 01:20:48', '1'),
	(21, 'A roupa como linguagem', '0', 'base64/materiais/0aeab44068fc5bfacf21566012da11f1.pdf', '<p>-</p>', 11, '2018-03-02 01:23:50', '2018-03-02 01:23:50', '1'),
	(22, 'Roupas e marcas', '0', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/materiais/2437431cadf3c9643730315594bffaa0.pdf', '<p>-</p>', 11, '2018-03-02 01:25:18', '2018-03-02 09:55:38', '1'),
	(23, 'Aula 6.1', '0', 'base64/materiais/2141c4f40600e2493a4605825d9808ab.pdf', '<p>-</p>', 12, '2018-03-02 09:59:33', '2018-03-02 09:59:33', '1'),
	(24, 'Aula 6.2', '0', 'base64/materiais/238360556df862c3f8b506e0c2bd4cf5.pdf', '<p>-</p>', 12, '2018-03-02 09:59:51', '2018-03-02 09:59:51', '1'),
	(25, 'Atitudes do terapeuta', '0', 'base64/materiais/dbe0cafedb89472c84060ad54485ecf7.pdf', '<p>-</p>', 12, '2018-03-02 10:00:14', '2018-03-02 10:00:14', '1'),
	(26, 'relação terapêutica', '0', 'base64/materiais/e685c22bf18fcdc832ad7004bb49e016.pdf', '<p>-</p>', 12, '2018-03-02 10:00:36', '2018-03-02 10:00:36', '1'),
	(27, 'Responsabilidade e Autenticidade', '0', 'base64/materiais/738c9029bf8cc8b2f3164c1bce142c96.pdf', '<p>-</p>', 12, '2018-03-02 10:01:14', '2018-03-02 10:01:14', '1'),
	(28, 'Apostila', '0', 'base64/materiais/00946642dcc3cb754e415c14ab71bcac.pdf', '<p>-</p>', 12, '2018-03-02 10:01:31', '2018-03-02 10:01:31', '1'),
	(29, 'Video 1', 'https://www.youtube.com/embed/VRXmsVF_QFY', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/', '<p>-</p>', 12, '2018-03-02 10:01:55', '2018-03-02 10:01:55', '1'),
	(30, 'Video 2', 'https://www.youtube.com/embed/UpJFE8UcFcU', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/', '<p>-</p>', 12, '2018-03-02 10:02:15', '2018-03-02 10:02:15', '1'),
	(31, 'Caso Ilustrativo', '0', 'base64/materiais/1d8031d52735c1528528c6ee2eecfb9c.pdf', '<p>-</p>', 13, '2018-03-02 10:04:55', '2018-03-02 10:04:55', '1'),
	(32, 'Flow', '0', 'base64/materiais/4f2a5ca9cc3c2e925c4cbed023b800db.pdf', '<p>-</p>', 13, '2018-03-02 10:05:16', '2018-03-02 10:05:16', '1'),
	(33, 'Psicologia Positiva', '0', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/materiais/ca70383a013ef60c1e1b6082bcc653af.pdf', '<p>-</p>', 13, '2018-03-02 10:05:42', '2018-03-04 17:56:36', '1'),
	(34, 'Apostila', '0', 'base64/materiais/c0147ac5931d3faf6eec6ec31f481878.pdf', '<p>-</p>', 13, '2018-03-02 10:06:18', '2018-03-02 10:06:18', '1'),
	(35, 'Felicidade', '0', 'base64/materiais/06faab6ba0d36632af9fdd8cdabdc62e.pdf', '<p>-</p>', 13, '2018-03-02 10:06:36', '2018-03-02 10:06:36', '1'),
	(36, 'Video 1', 'https://www.youtube.com/embed/uOrzmFUJtrs', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/', '<p>-</p>', 13, '2018-03-02 10:06:57', '2018-03-02 10:06:57', '1'),
	(37, 'Um bom atendimento', '0', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/materiais/d201e9ac04ace200cc93b572525ee1db.pdf', '<p>-</p>', 14, '2018-03-02 10:08:02', '2018-03-02 10:15:12', '1'),
	(38, 'Escuta e atenção plena', '0', 'base64/materiais/3b3cd2704b3a3ebd32c251073e2755ad.pdf', '<p>-</p>', 14, '2018-03-02 10:12:06', '2018-03-02 10:12:06', '1'),
	(39, 'Emilio Romero', '0', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/materiais/0ec7b2278413d54bf826c92d01d28a86.pdf', '<p>-</p>', 14, '2018-03-02 10:12:29', '2018-03-02 10:14:59', '1'),
	(40, 'Processo de mudança', '0', 'base64/materiais/ef549ce1798e7acc7592e12b7f884b62.pdf', '<p>-</p>', 14, '2018-03-02 10:12:51', '2018-03-02 10:12:51', '1'),
	(41, 'Apostila', '0', 'base64/materiais/aeb27f3ad652e0b95be7c0ca12de9fd0.pdf', '<p>-</p>', 14, '2018-03-02 10:13:33', '2018-03-02 10:13:33', '1'),
	(42, 'Roteiro de Conceitos', '0', 'base64/materiais/0d9d26e4d78c7d9d40f16ccd018f2524.pdf', '<p>-</p>', 14, '2018-03-02 10:13:51', '2018-03-02 10:13:51', '1'),
	(43, 'Projeto Original', '0', 'base64/materiais/419fd5ffbbe5b8fe6273ba8d9d904139.pdf', '<p>-</p>', 14, '2018-03-02 10:14:07', '2018-03-02 10:14:07', '1'),
	(45, 'Referências Bibliográficas', '0', 'base64/materiais/592106812ee7e98b8e4ae6dbdd0a83d6.pdf', '<p>Referências Bibliográficas Módulo 1</p>', 6, '2018-03-04 14:22:23', '2018-03-04 14:22:23', '1'),
	(46, 'Video', 'https://www.youtube.com/embed/_iAcJdvUgEQ', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/', '<p>-</p>', 10, '2018-03-04 14:25:44', '2018-03-04 14:25:44', '1'),
	(47, 'Apostila', '0', 'base64/materiais/aebe7a11b5700f991d13f91e328bd000.pdf', '<p>Conteúdo Apostila 5</p>', 11, '2018-03-04 17:47:22', '2018-03-04 17:47:22', '1'),
	(48, 'Texto Pascale Navarri', '0', 'base64/materiais/b7e92a4c8351529b2b44998ddd592861.pdf', '<p>Texto Pascale</p>', 11, '2018-03-04 17:49:04', '2018-03-04 17:49:04', '1'),
	(49, 'Video', 'https://www.youtube.com/embed/xeQszT-mlGU', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/', '<p>-</p>', 9, '2018-03-04 17:52:02', '2018-03-04 17:52:02', '1'),
	(50, 'Video', 'https://www.youtube.com/embed/Z-A2NE6mA64', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/', '<p>-</p>', 11, '2018-03-04 17:53:07', '2018-03-04 17:53:07', '1');
/*!40000 ALTER TABLE `materials` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.material_comentarios
CREATE TABLE IF NOT EXISTS `material_comentarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `material_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `comentario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `material_comentarios_material_id_foreign` (`material_id`),
  KEY `material_comentarios_user_id_foreign` (`user_id`),
  CONSTRAINT `material_comentarios_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`),
  CONSTRAINT `material_comentarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.material_comentarios: ~8 rows (aproximadamente)
DELETE FROM `material_comentarios`;
/*!40000 ALTER TABLE `material_comentarios` DISABLE KEYS */;
INSERT INTO `material_comentarios` (`id`, `material_id`, `user_id`, `comentario`, `created_at`, `updated_at`) VALUES
	(2, 3, 20, 'adorei o texto. Ele diz que autoimagem pode ser modificada. Mas como?', '2018-03-06 20:03:10', '2018-03-06 20:03:10'),
	(3, 6, 26, 'Muito bom o vídeo. Não vou conseguir ver todo agora, mas com ele tenho certeza que o curso será incrível.', '2018-03-06 21:57:04', '2018-03-06 21:57:04'),
	(4, 45, 1, '.', '2018-03-19 15:49:14', '2018-03-19 15:49:14'),
	(5, 45, 10, '.', '2018-03-19 15:49:21', '2018-03-19 15:49:21'),
	(6, 45, 10, '.', '2018-03-19 15:51:30', '2018-03-19 15:51:30'),
	(7, 45, 1, '.', '2018-03-19 15:52:28', '2018-03-19 15:52:28'),
	(8, 20, 26, 'Olá, não consigo fazer download da apostila.', '2018-03-23 20:27:13', '2018-03-23 20:27:13'),
	(9, 20, 13, 'Também não consegui, dá erro.', '2018-03-25 20:52:50', '2018-03-25 20:52:50');
/*!40000 ALTER TABLE `material_comentarios` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.material_restritos
CREATE TABLE IF NOT EXISTS `material_restritos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.material_restritos: ~21 rows (aproximadamente)
DELETE FROM `material_restritos`;
/*!40000 ALTER TABLE `material_restritos` DISABLE KEYS */;
INSERT INTO `material_restritos` (`id`, `titulo`, `link`, `file`, `created_at`, `updated_at`, `visible`) VALUES
	(1, 'Cartela de Cores', '0', 'base64/material_restritos/e7a8ce6369edbd35fe8a90afa0c2e05a.pdf', '2018-01-11 17:22:46', '2018-03-13 15:12:56', '1'),
	(2, 'Ser para vestir', 'https://www.youtube.com/embed/cTsPNDpAqPg', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/', '2018-01-11 17:23:10', '2018-03-13 15:13:11', '1'),
	(3, 'Mercado de Trabalho', 'https://www.youtube.com/embed/DCegkmbBjTg', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/', '2018-03-13 15:13:33', '2018-03-13 15:13:33', '1'),
	(4, 'BUDGET ESR', '0', 'base64/material_restritos/3ad232edf69290f2221d7bfe3baba220.pdf', '2018-03-13 15:14:05', '2018-03-13 15:14:05', '1'),
	(5, 'Consultoria e Coaching de Imagem', '0', 'base64/material_restritos/54621d3734a184524918c0ba1a9c1d30.pdf', '2018-03-13 15:14:37', '2018-03-13 15:14:37', '1'),
	(6, 'Conteudo Golas', '0', 'base64/material_restritos/9da1ce5d7c1a3cc7982709afd59865ee.pdf', '2018-03-13 15:14:58', '2018-03-13 15:14:58', '1'),
	(7, 'ESR 1410 TABELA DE CORES 90x10 AF', '0', 'base64/material_restritos/256c8da6fb16fde2934fda49d80cd129.pdf', '2018-03-13 15:15:29', '2018-03-13 15:15:29', '1'),
	(8, 'ESR 1410 TABELA DE CORES 148x210 AF', '0', 'base64/material_restritos/a177c818221b2525d1cb7fdfb485a97e.pdf', '2018-03-13 15:15:58', '2018-03-13 15:15:58', '1'),
	(9, 'Estratégias de Investigação', '0', 'base64/material_restritos/debb498ab507a23190ddd0054b7caae5.pdf', '2018-03-13 15:16:18', '2018-03-13 15:16:18', '1'),
	(10, 'LÂMPADA PARA COLORIMETRIA', '0', 'base64/material_restritos/d12f364ac4fb42f55985f4fbeb0df711.pdf', '2018-03-13 15:16:39', '2018-03-13 15:16:39', '1'),
	(11, 'Lexique', '0', 'base64/material_restritos/a445d1b62f8d65631294a26425a8c3c6.pdf', '2018-03-13 15:16:58', '2018-03-13 15:16:58', '1'),
	(12, 'Linguagem Não verbal de Vestimenta', '0', 'base64/material_restritos/09e4ebe88350abf4a7c1c811f6e477ad.pdf', '2018-03-13 15:17:18', '2018-03-13 15:17:18', '1'),
	(13, 'Livro Psicologia das Cores', '0', 'base64/material_restritos/bfbec05934d6bf9bab5d1e9e12633c4e.pdf', '2018-03-13 15:17:40', '2018-03-13 15:17:40', '1'),
	(14, 'Morfologias - fotos', '0', 'base64/material_restritos/a52ffce72750fa798fc42db49ebdee89.pdf', '2018-03-13 15:18:24', '2018-03-13 15:18:24', '1'),
	(15, 'Morfopsicologia ESR', '0', 'base64/material_restritos/61431384a97198322e77d51c4fbc40bf.pdf', '2018-03-13 15:18:48', '2018-03-13 15:18:48', '1'),
	(16, 'Movimentos do Consultor de Imagem', '0', 'base64/material_restritos/87bbf699ddc9c54134f43542e127456f.pdf', '2018-03-13 15:19:09', '2018-03-13 15:19:09', '1'),
	(17, 'Nome e temperatura CORES', '0', 'base64/material_restritos/f0581bb4bd5d9b040c6df311b2153b79.pdf', '2018-03-13 15:19:42', '2018-03-13 15:19:42', '1'),
	(18, 'O Mito da Beleza', '0', 'base64/material_restritos/7768362d1e19d88705c2edfd0dba2e71.pdf', '2018-03-13 15:20:02', '2018-03-13 15:20:02', '1'),
	(19, 'Psicologia da Autoimagem ESR', '0', 'base64/material_restritos/25f4ba1b24563aa103d00aa0a8fe441e.pdf', '2018-03-13 15:20:19', '2018-03-13 15:20:19', '1'),
	(20, 'Questionario Coaching de Imagem', '0', 'base64/material_restritos/5d3e8d52a5a57680452e3c1b9903fa78.pdf', '2018-03-13 15:20:41', '2018-03-13 15:20:41', '1'),
	(21, 'Tecidos ESR', '0', 'base64/material_restritos/d68d95014a9680c761d56da53e18e38e.pdf', '2018-03-13 15:21:07', '2018-03-13 15:21:07', '1');
/*!40000 ALTER TABLE `material_restritos` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.migrations: ~41 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '1017_11_09_131329_create_formacaos_table', 1),
	(2, '2014_10_12_000000_create_users_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2016_12_05_000141_create_cursos_table', 1),
	(5, '2016_12_05_000758_create_agendas_table', 1),
	(6, '2016_12_10_173415_create_professors_table', 1),
	(7, '2017_11_10_172617_create_consultoras_table', 1),
	(8, '2017_12_05_000114_create_alunos_table', 1),
	(9, '2017_12_05_000226_create_modulos_table', 1),
	(10, '2017_12_05_000349_create_materials_table', 1),
	(11, '2017_12_05_000530_create_videos_table', 1),
	(12, '2017_12_05_000558_create_chats_table', 1),
	(13, '2017_12_05_000825_create_imprensas_table', 1),
	(14, '2017_12_05_000852_create_respostas_table', 1),
	(15, '2017_12_05_000923_create_administradors_table', 1),
	(16, '2017_12_05_001328_create_depoimentos_table', 1),
	(17, '2017_12_05_002902_create_aulas_table', 1),
	(18, '2017_12_05_004149_create_exercicios_table', 1),
	(19, '2017_12_05_007001_create_aluno_agendas_table', 1),
	(20, '2017_12_17_150335_create_planos_table', 1),
	(21, '2017_12_17_172720_create_banners_table', 1),
	(22, '2017_12_18_152526_create_contatos_table', 1),
	(23, '2017_12_18_160844_create_material_restritos_table', 1),
	(24, '2017_12_26_230722_create_aluno_restritos_table', 1),
	(25, '2018_01_04_180053_create_ebooks_table', 1),
	(26, '2018_01_10_004436_create_aula_comentarios_table', 1),
	(27, '2018_01_11_013825_create_exercicio_comentarios_table', 1),
	(28, '2018_01_11_013916_create_material_comentarios_table', 1),
	(29, '2018_01_11_014011_create_video_comentarios_table', 1),
	(30, '2018_01_14_115644_create_blogs_table', 2),
	(31, '2018_02_26_001531_create_inadimplencias_table', 3),
	(32, '2018_02_26_004841_alter_v1_inadimplencias', 3),
	(33, '2018_02_27_003545_create_news_letters_table', 4),
	(34, '2018_03_25_155436_alter_formacoes', 5),
	(35, '2018_03_25_155607_alter_cursos', 5),
	(36, '2018_03_25_173925_alter_agendas', 5),
	(37, '2018_03_25_173957_alter_modulos', 5),
	(38, '2018_03_25_180341_alter_modulos_relationships', 5),
	(39, '2018_03_25_185520_alter_professor', 5),
	(40, '2018_03_25_195413_alter_aluno', 5),
	(41, '2018_03_25_204110_alter_website', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.modulos
CREATE TABLE IF NOT EXISTS `modulos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card` longtext COLLATE utf8mb4_unicode_ci,
  `data_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `habilitado` int(11) DEFAULT NULL,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `agenda_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `modulos_agenda_id_foreign` (`agenda_id`),
  CONSTRAINT `modulos_agenda_id_foreign` FOREIGN KEY (`agenda_id`) REFERENCES `agendas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.modulos: ~11 rows (aproximadamente)
DELETE FROM `modulos`;
/*!40000 ALTER TABLE `modulos` DISABLE KEYS */;
INSERT INTO `modulos` (`id`, `titulo`, `card`, `data_inicio`, `habilitado`, `descricao_html`, `agenda_id`, `created_at`, `updated_at`, `visible`) VALUES
	(6, 'Módulo 1', NULL, '2018-02-26 13:40:48', NULL, '<p>Módulo 1 Psicologia da autoimagem</p>', 8, '2018-02-28 10:13:44', '2018-03-04 13:40:48', '1'),
	(7, 'Módulo 2', NULL, '2018-03-07 13:08:33', NULL, '<p>Módulo 2&nbsp;Psicologia da autoimagem</p>', 8, '2018-02-28 10:14:05', '2018-03-07 13:08:33', '1'),
	(8, 'Módulo ---', NULL, '2018-03-25 19:29:38', NULL, '<p>Módulo 3 Psicologia da autoimagem</p>', 5, '2018-02-28 10:14:23', '2018-03-25 22:29:38', '0'),
	(9, 'Módulo 4', NULL, '2018-03-20 20:52:45', NULL, '<p>Módulo 4 Psicologia da autoimagem</p>', 8, '2018-02-28 10:14:52', '2018-03-15 20:52:45', '1'),
	(10, 'Módulo 3', NULL, '2018-03-13 20:52:36', NULL, '<p>-</p>', 8, '2018-02-28 10:35:11', '2018-03-15 20:52:36', '1'),
	(11, 'Módulo 5', NULL, '2018-03-26 15:43:32', NULL, '<p>-</p>', 8, '2018-03-02 01:08:22', '2018-03-27 15:43:32', '1'),
	(12, 'Módulo 6', NULL, '2018-04-03 20:53:06', NULL, '<p>-</p>', 8, '2018-03-02 01:09:09', '2018-03-15 20:53:06', '1'),
	(13, 'Módulo 7', NULL, '2018-04-10 01:09:37', NULL, '<p>-</p>', 8, '2018-03-02 01:09:37', '2018-03-02 01:09:37', '1'),
	(14, 'Módulo 8', NULL, '2018-04-17 01:10:27', NULL, '<p>-</p>', 8, '2018-03-02 01:10:27', '2018-03-02 01:10:27', '1'),
	(15, 'Módulo 1', NULL, '2018-04-08 23:15:28', NULL, '<p>-</p>', 13, '2018-03-25 23:15:28', '2018-03-25 23:15:28', '1'),
	(16, 'Módulo 2', NULL, '2018-04-15 23:20:57', NULL, '<p>-</p>', 13, '2018-03-25 23:20:57', '2018-03-25 23:20:57', '1');
/*!40000 ALTER TABLE `modulos` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.news_letters
CREATE TABLE IF NOT EXISTS `news_letters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contato` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.news_letters: 28 rows
DELETE FROM `news_letters`;
/*!40000 ALTER TABLE `news_letters` DISABLE KEYS */;
INSERT INTO `news_letters` (`id`, `email`, `contato`, `created_at`, `updated_at`) VALUES
	(9, 'ckarvat@gmail.com', 'Carolina', '2018-03-26 18:46:43', '2018-03-26 18:46:43'),
	(2, 'lrsantos15@hotmail.com', 'Luciano Ribeiro Dos Santos', '2018-03-24 05:03:33', '2018-03-24 05:03:33'),
	(3, 'Cyntiaogama@hotmail.com', 'Cyntia ogama@hotmail.com', '2018-03-25 02:11:31', '2018-03-25 02:11:31'),
	(5, 'kacrismatos@gmail.com', 'Kácris Matos', '2018-03-25 02:30:24', '2018-03-25 02:30:24'),
	(6, 'ladisleneamorim@gmail.com', 'Ladislene', '2018-03-25 11:53:30', '2018-03-25 11:53:30'),
	(10, 'onildott74@gmail.com', 'Onildo Mattos', '2018-03-28 23:27:52', '2018-03-28 23:27:52'),
	(11, 'carlaeandrade@gmail.com', 'Carla Andrade de Oliveira', '2018-03-29 01:59:05', '2018-03-29 01:59:05'),
	(12, 'ginnasancoalves@yahoo.com.br', 'Ginna Sanco Alves', '2018-03-29 22:32:54', '2018-03-29 22:32:54'),
	(13, 'ginnasancoalves@yahoo.com.br', 'Ginna Sanco Alves', '2018-03-29 22:33:00', '2018-03-29 22:33:00'),
	(14, 'ginnasancoalves@yahoo.com.br', 'Ginna Sanco Alves', '2018-03-29 22:33:01', '2018-03-29 22:33:01'),
	(15, 'ginnasancoalves@yahoo.com.br', 'Ginna Sanco Alves', '2018-03-29 22:33:02', '2018-03-29 22:33:02'),
	(16, 'ginnasancoalves@yahoo.com.br', 'Ginna Sanco Alves', '2018-03-29 22:33:03', '2018-03-29 22:33:03'),
	(17, 'ginnasancoalves@yahoo.com.br', 'Ginna Sanco Alves', '2018-03-29 22:33:03', '2018-03-29 22:33:03'),
	(18, 'nizacapiberibe@hotmail.com', 'Joaniza', '2018-03-30 18:28:05', '2018-03-30 18:28:05'),
	(19, 'nizacapiberibe@hotmail.com', 'Joaniza', '2018-03-30 18:28:06', '2018-03-30 18:28:06'),
	(20, 'daianeoro@icloud.com', 'Daiane oro', '2018-03-31 03:55:21', '2018-03-31 03:55:21'),
	(21, 'daianeoro@icloud.com', 'Daiane oro', '2018-03-31 03:55:22', '2018-03-31 03:55:22'),
	(22, 'marijs13@hotmail.com', 'Mariana Jara', '2018-04-01 01:39:11', '2018-04-01 01:39:11'),
	(23, 'centopeiavicosamg@gmail.com', 'Jeane', '2018-04-01 02:12:09', '2018-04-01 02:12:09'),
	(24, 'marlyandrade@aol.com', 'Marly de Araújo Sampaio', '2018-04-02 01:23:15', '2018-04-02 01:23:15'),
	(25, 'lucianeseide@gmail.com', 'Luciane Seide', '2018-04-03 01:40:58', '2018-04-03 01:40:58'),
	(26, 'onildott74@gmail.com', 'Onildo Mattos', '2018-04-03 21:35:10', '2018-04-03 21:35:10'),
	(27, 'brunapcampos@gmail.com', 'Bruna Campos', '2018-04-04 12:37:06', '2018-04-04 12:37:06'),
	(28, 'vitaeadesso@hotmail.com', 'Andrea fronchetti', '2018-04-06 11:51:27', '2018-04-06 11:51:27'),
	(29, 'marycannd@hotmail.com.br', 'maria aparecida da cruz', '2018-04-06 18:24:46', '2018-04-06 18:24:46'),
	(30, 'julianasimoes@yahoo.com.br', 'Juliana', '2018-04-07 00:04:26', '2018-04-07 00:04:26'),
	(31, 'virginiaazevedoc@gmail.com', 'Virgínia Azevedo', '2018-04-07 10:04:37', '2018-04-07 10:04:37'),
	(32, 'leilamcg@hotmail.com', 'Leila Maria Carvalho Garcia', '2018-04-08 09:49:34', '2018-04-08 09:49:34');
/*!40000 ALTER TABLE `news_letters` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.planos
CREATE TABLE IF NOT EXISTS `planos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.planos: ~0 rows (aproximadamente)
DELETE FROM `planos`;
/*!40000 ALTER TABLE `planos` DISABLE KEYS */;
/*!40000 ALTER TABLE `planos` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.professors
CREATE TABLE IF NOT EXISTS `professors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobrenome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nascimento` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `apresentacao_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `professors_user_id_foreign` (`user_id`),
  CONSTRAINT `professors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.professors: ~1 rows (aproximadamente)
DELETE FROM `professors`;
/*!40000 ALTER TABLE `professors` DISABLE KEYS */;
INSERT INTO `professors` (`id`, `nome`, `sobrenome`, `nascimento`, `avatar`, `user_id`, `apresentacao_video`, `descricao_html`, `created_at`, `updated_at`, `visible`) VALUES
	(1, 'Professor Ecole Brasil', 'professor', '2018-03-01 15:55:59', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/professores/cd988ccbbf9e3092aa97671323489cee.jpeg', 2, '0', '<p>teste de descrição</p>', '2018-02-19 02:43:11', '2018-03-06 15:55:59', '1');
/*!40000 ALTER TABLE `professors` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.respostas
CREATE TABLE IF NOT EXISTS `respostas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.respostas: ~0 rows (aproximadamente)
DELETE FROM `respostas`;
/*!40000 ALTER TABLE `respostas` DISABLE KEYS */;
/*!40000 ALTER TABLE `respostas` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.users: ~29 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `permission`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Alsssuno Ecole', 'administrador@ecole.com', '$2y$10$NJ9q8J5Gxr6p7HUNZnhz8O94How3k97AmO915TsQnJuGcphK4dBQm', 'AD', 'lJDslkkMF2EiwoRO38Bh3ddJJsoymO2fqiJX2csegiqwXJzJDe6gYnPjvqUD', '2018-01-11 16:37:02', '2018-01-11 16:37:02'),
	(2, 'Professor Ecole', 'professor@ecole.com', '$2y$10$x2QccUfs/5i7WFXzYq1TYuw.h3snW0fq/RaIgVL/0HOYrZwW7EidS', 'PF', '8WslAaprovczQTJDTwiP1ZgKtKjimi00vmIALLRb6N6QsJVj6ezEtK9qRBFa', '2018-01-11 16:37:02', '2018-01-11 16:37:02'),
	(3, 'Aluno Ecole', 'aluno@ecole.com', '$2y$10$Db2mZN9DyM8N4z2VG4Pb2uclECAVaRPMNUC6uzyeucJvU0bQGK556', 'AL', 'cu0F4EdepF7WJ9cJzsinDAIa16GFe9hmDnbUTwWbdV9OLyFikQD2lzDt3qGm', '2018-01-11 16:37:02', '2018-01-11 16:37:02'),
	(4, 'Aluno Restrito Ecole', 'aluno_restrito@ecole.com', '$2y$10$r0rqCwHiJP5VOa.qEnGyFOYTE6OoZ3ha9OKa6pHkBHcoXaFDt6BSi', 'AR', NULL, '2018-01-11 16:37:02', '2018-01-11 16:37:02'),
	(10, 'Alberto', 'alberto.pimentel.94@gmail.com', '$2y$10$u2q5qljhUQuXScRqGNvsJ.LZlZTFfh97J6aywRXVk3Jd6r39t0jLm', 'AL', 'LzCye1BvBnalBP43feqBSKvp34B1rqjaiDNFeWg0D75HzUISmv4dwJQ892S1', '2018-02-23 03:13:50', '2018-03-06 21:05:04'),
	(11, 'Alberto Pimentel Antunes', 'alberto_bc_sc@hotmail.com', '$2y$10$pz7LyxJVGTKCwYuIU/C06ObTMLoPRDKrL4nBP37MtsTRS8ZsXKIG6', 'AR', NULL, '2018-02-23 15:00:27', '2018-02-23 15:00:27'),
	(12, 'roberta', 'betaselistre@hotmail.com', '$2y$10$1VJSXTnc5Mw9dofCtaYREO4bIg3Ri4m4EWnVmXlRR8pnrqgokRpR.', 'AL', 'KSZiSlOD4SGkZVH6ONyyHU99b43qlf0wVBbR3WMaTQUKNqG6PDHcyf75t0Du', '2018-03-02 16:06:14', '2018-03-06 14:36:04'),
	(13, 'Claudia', 'claudiaeccel@hotmail.com', '$2y$10$uI9qgx5GRfQuLm43N4O0JOVTYPZ0wf5tOTsib0rzoMR99M1dJf9Am', 'AL', 'ccpwFkQFaP8i0N3VDFX2Kc2XcY49Qx1BtjASZ4qr92xaahhJI2yBrDEwL8HO', '2018-03-04 14:49:08', '2018-03-07 01:09:04'),
	(14, 'Denise', 'debrasilaraujo@gmail.com', '$2y$10$Xhfjz5nuEqfDw5nB9sbmV.lKDhwO74weGxxg8oRgPer.OfPAUy3Ze', 'AL', 'i3aQsxbydTI9JpjWhgELJ02JLiSUAswjrtOpvYfi6ebSBsQEJkagfCpEWsd6', '2018-03-04 14:50:36', '2018-03-06 11:02:08'),
	(15, 'Fernanda', 'fernandadacostazaffari@gmail.com', '$2y$10$6Vrw5z9zqoaykITjVyidvemEcALN9qPFoNtsxEu/82d7iPTyFyS9a', 'AL', 'uT0TS5y3BXTAyj4J14PXQBY4X1omHIzobCmveFvClz5VhA1GI2dYeDDQhhdM', '2018-03-04 14:51:54', '2018-03-06 21:55:28'),
	(16, 'JaquelineA', 'jackealfar@gmail.com', '$2y$10$ai7T4IpYr3ZoeTlAYOxKbuGY/37GsrTIJOcZzBnMBZwInpmbgi9Wy', 'AL', 'YfHjP7g2b9XLQDLY9543GmRMRaOhVvT7qbcNhn369gNhRJQqV4WLK1Bq8n5w', '2018-03-04 14:53:33', '2018-03-06 11:04:03'),
	(17, 'JaquelineB', 'contato@jackbrossi.com.br', '$2y$10$D2KF1orJ2uOh3xkNlucS2e6LtPn8ctadJcHG/j3lqt/1JrweKyjAq', 'AL', '3Dosa7ctKuxIydWIBTGwkPY2J4JYY5W6y5VvOk81kAx3UwMxAzGXKHgnQRrH', '2018-03-04 14:55:24', '2018-03-06 16:13:45'),
	(18, 'Flavia', 'flavialmeida73@gmail.com', '$2y$10$cu7e6NuPHxMvUM6/nakNOuunoWHCnH2uDetv9K70tIuh0G1zV0LE2', 'AL', 'pfVSlsX6VPS9U0C4p3SZ5PPvMsmoKz3YjFLWK9HK9mQpp4OmN1KgYJzvBscw', '2018-03-04 14:58:44', '2018-03-06 14:39:21'),
	(19, 'Bruna', 'bru_llz@hotmail.com', '$2y$10$gEan/.M5bT4ZOuyRlNdgLuOvna5QDuvpgkU2XQJtrqFlNKQoIlVla', 'AL', NULL, '2018-03-04 15:02:29', '2018-03-06 13:08:15'),
	(20, 'Marcia', 'marciaparon@gmail.com', '$2y$10$qBKriKIB4mDzZiySPN4vxu9yF.XacTMy4P.pEJYm/2hNFK7qDVZxW', 'AL', 'qPfjcu6d4MXRWGPed2JxO7y1stEBY7rWPNDGj7hVtrAbMnEsmEdC0nEvNfBz', '2018-03-05 18:27:26', '2018-03-27 15:40:37'),
	(21, 'Priscila', 'pricarrano@gmail.com', '$2y$10$qxHmrkYpKx0X3zgJybFUUOBzHwkatpf5mwwXkgPMsal/XLGCnLR2K', 'AL', '7fU9msGSWhfNavzY10q8w8AUmvys7Pbpeunew7QmnFi8uIVanNQcW2aFgAYK', '2018-03-06 12:40:25', '2018-03-06 14:06:22'),
	(22, 'Michelle', 'michellecarva@hotmail.com', '$2y$10$Jo/NQzK5cZtQLI46TAGzB.G6HAABy8j4HBCMCx/2rkk1h8vGEeE7S', 'AL', NULL, '2018-03-06 12:41:13', '2018-03-06 12:41:13'),
	(23, 'Cristiany', 'cristianybidel@gmail.com', '$2y$10$uX9.n30GzYxu3gDDxANR3un4DExdz/TTV2c5DD31IibvTIHwmtTQa', 'AL', 'g1wG1KvQbQcgnSCe12PkAIWWeHLvgt6IIp4V63Bb4b9fECMtKjBvyK39FcTA', '2018-03-06 12:43:04', '2018-03-07 19:24:47'),
	(24, 'Luana', 'luanabossardi@gmail.com', '$2y$10$BAT318hHtkMC50N5LqbxtOrZP8UXxVO0JLUZ2MdmGK3HkM5DbeEke', 'AL', 'ZTqnoGq4ISdl1OosL9iTW9nGdDft0n2plSl6zm8zEEjKdFaHU4oG5TkhciBe', '2018-03-06 12:50:25', '2018-03-06 22:41:31'),
	(25, 'Patricia', 'patisse@gmail.com', '$2y$10$krWfgdxlnmo0bpc9a37hIePJxb/IEFacSMJvn0JutgdZkKJnQwuua', 'AL', 'RD4lOSu4qaSIYU8arqW9dz6UunfW3DxqaDrKht9HkzBHxrIEQlCW5c9cXReZ', '2018-03-06 14:08:34', '2018-03-06 14:08:34'),
	(26, 'Marlise', 'meparme@yahoo.com.br', '$2y$10$.tOkfC5l9EmiGAT85gdjte1GJ0.ulKnQO8pIOaGedFxVmROJ5WQ66', 'AL', 'U7jzWsf2k6aG4dlp2QsTvHaUwF5vmmO2FLAe2xd6eLWaxDy0Sfg6XoViQsjC', '2018-03-06 14:28:23', '2018-03-06 14:28:23'),
	(27, 'Debora', 'Deborahzandonna@gmail.com', '$2y$10$fUNN.LBqLW.JjX3d4Hqh0.CvRuQMYgGxIMCwOmYd30rGJ8.tR/x2G', 'AL', 'ccbrPLuiKNidbtkoQgx8wsp0WlppgFcAwCUQcTuFqZ79bu7G5BFTLXmtG7ng', '2018-03-06 16:32:24', '2018-03-06 16:32:24'),
	(28, 'Fernanda', 'fernanda@ebasiko.com.br', '$2y$10$UY.c8QnMubpr98ek2m9exe36/zbMDfaXe45z1Z5FrRcGawMn7GSRy', 'AL', 'tMRTjbTSeJii890sYtZe8gXtGcuTz5fL8fWOHq9LbDMyFpIY57HCCU8ijXza', '2018-03-06 18:02:55', '2018-03-06 18:02:55'),
	(29, 'Daniela', 'danielasoares.sa@gmail.com', '$2y$10$3YbE4qarSg3aJotyEKZ/B.P.JQOtXwHsLjewXH5xDXmfk7GsbasK6', 'AL', NULL, '2018-03-13 12:41:23', '2018-03-13 12:41:23'),
	(30, 'Estefanio', 'estefanio@teste.com', '$2y$10$RfW0CZtWGVNmVLEM.dg3PelKTDmze7gsuHxSXPOk/Vb/GwiYCJcH2', 'AL', NULL, '2018-03-13 15:23:14', '2018-03-13 15:23:14'),
	(31, 'Caroline', 'carols_amaral@hotmail.com', '$2y$10$tWRgVBPKJKzHs7bJJkUu.uWGtIMgcbhS30SVfWherx5eJAadUWGyO', 'AL', 'Je40NrPSFCBloHlMulPIb3eq2b7Q5Jk05TeLqiqvN7ylNI7LgiobahG5Ed5M', '2018-03-13 15:24:16', '2018-03-13 15:24:16'),
	(32, 'Aluno', 'alunoconsultor@ecolebrasil.com', '$2y$10$AaQj9XYMq05Wws9PzodNu.25mVffQlech6KbaVjRBwr0BPjiEdoX6', 'AL', 'A6GvTej1eOJgklJvXcIf0NLCYvojFCKsX6bbC3i04bWMNlkkS9qlBnNTvWL4', '2018-03-13 15:44:15', '2018-03-29 19:34:31'),
	(33, 'Ana Paula', 'mr.anapaulasantos@gmail.com', '$2y$10$bHuZiWN/OI5IEEFAGhH5B.4lp.LXIRnIMydyL4iKeCGq5uQEwyDV6', 'AL', 'lCTgaxUuuV4zID8myN4o2jr7coYs2Bg4KsmQ8999MOc3qOQpajjcE1tH3qcp', '2018-03-14 18:06:36', '2018-03-14 18:06:36'),
	(34, 'Aline', 'alinerabelo@hotmail.com', '$2y$10$1FwK3D3BGM565xzaSjLsoeGkkBzFGth8oh94r3XfDhE3e68s.V46e', 'AL', 'c9llpC9GylHNVhqxBwpmAhlw78xSC6FnBomxiiopKiqyEbkfQeRwyFWn05iI', '2018-03-19 13:53:51', '2018-03-19 13:53:51');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link_video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `modulo_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `videos_modulo_id_foreign` (`modulo_id`),
  CONSTRAINT `videos_modulo_id_foreign` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.videos: ~8 rows (aproximadamente)
DELETE FROM `videos`;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id`, `link_video`, `titulo`, `descricao_html`, `modulo_id`, `created_at`, `updated_at`, `visible`) VALUES
	(8, 'https://www.youtube.com/embed/NnPOGYyX3UQ', 'Videoconferência Módulo 1', '<p>-</p>', 6, '2018-03-06 15:36:29', '2018-03-06 15:36:29', '1'),
	(9, 'https://www.youtube.com/embed/iUXV9vhA81Y', 'Videoconferência Módulo 2', '<p>-</p>', 7, '2018-03-13 15:53:15', '2018-03-13 15:53:15', '1'),
	(10, 'https://www.youtube.com/embed/qwN19OQ7M7Y', 'Videoconferência Módulo 3', '<p>-</p>', 10, '2018-03-20 15:37:38', '2018-03-20 15:37:38', '1'),
	(11, 'https://www.youtube.com/embed/onDhl7iTq1w', 'Videoconferência Módulo 4', '<p>-</p>', 9, '2018-03-27 15:40:04', '2018-03-27 15:40:04', '1'),
	(12, 'https://www.youtube.com/embed/8fBgzzdsHfE', 'Videoconferência Módulo 5', '<p>-</p>', 11, '2018-03-27 15:47:22', '2018-03-27 15:47:22', '1'),
	(13, 'https://www.youtube.com/embed/Ur_Vn2GvRzw', 'Videoconferência Módulo 6', '<p>-</p>', 12, '2018-03-27 15:47:55', '2018-03-27 15:47:55', '1'),
	(14, 'https://www.youtube.com/embed/0O4wLm3grgQ', 'Videoconferência Módulo 7', '<p>-</p>', 13, '2018-03-27 15:48:22', '2018-03-27 15:48:22', '1'),
	(15, 'https://www.youtube.com/embed/Uyde_lxSso0', 'Videoconferência Módulo 8', '<p>-</p>', 14, '2018-03-27 15:48:46', '2018-03-27 15:48:46', '1');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.video_comentarios
CREATE TABLE IF NOT EXISTS `video_comentarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `video_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `comentario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `video_comentarios_video_id_foreign` (`video_id`),
  KEY `video_comentarios_user_id_foreign` (`user_id`),
  CONSTRAINT `video_comentarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `video_comentarios_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.video_comentarios: ~141 rows (aproximadamente)
DELETE FROM `video_comentarios`;
/*!40000 ALTER TABLE `video_comentarios` DISABLE KEYS */;
INSERT INTO `video_comentarios` (`id`, `video_id`, `user_id`, `comentario`, `created_at`, `updated_at`) VALUES
	(6, 8, 10, 'Olá Pessoal. A videoconferência terá início às 19:00h, se por um acaso quando derem play no vídeo e não iniciar, por favor, atualizem a página e tentem novamente. Sejam muito bem vindas!', '2018-03-06 21:06:55', '2018-03-06 21:06:55'),
	(7, 8, 2, 'olá alunas\r\nBoa noite!', '2018-03-06 21:58:58', '2018-03-06 21:58:58'),
	(8, 8, 20, 'olá', '2018-03-06 22:00:15', '2018-03-06 22:00:15'),
	(9, 8, 20, 'boa noite !', '2018-03-06 22:00:27', '2018-03-06 22:00:27'),
	(10, 8, 28, 'Olá! Boa noite.', '2018-03-06 22:00:34', '2018-03-06 22:00:34'),
	(11, 8, 26, 'ola', '2018-03-06 22:02:45', '2018-03-06 22:02:45'),
	(12, 8, 18, 'pronta', '2018-03-06 22:02:57', '2018-03-06 22:02:57'),
	(13, 8, 12, 'Boa noite', '2018-03-06 22:05:02', '2018-03-06 22:05:02'),
	(14, 8, 20, 'ainda não vejo o vídeo,, Já começou?', '2018-03-06 22:07:00', '2018-03-06 22:07:00'),
	(15, 8, 28, 'Ja começou sim Marcia,', '2018-03-06 22:07:55', '2018-03-06 22:07:55'),
	(16, 8, 20, 'não vejo nada', '2018-03-06 22:08:11', '2018-03-06 22:08:11'),
	(17, 8, 12, 'tenta f5', '2018-03-06 22:08:23', '2018-03-06 22:08:23'),
	(18, 8, 20, 'já consegui, entrei de novo . Obrigada', '2018-03-06 22:09:40', '2018-03-06 22:09:40'),
	(19, 8, 12, ':)', '2018-03-06 22:10:21', '2018-03-06 22:10:21'),
	(20, 8, 28, 'acho que perdi: isso é o incongruente, certo?', '2018-03-06 22:16:12', '2018-03-06 22:16:12'),
	(21, 8, 2, 'elizaguerra.oliveira@hotmail.com', '2018-03-06 22:33:11', '2018-03-06 22:33:11'),
	(22, 8, 28, 'Ja entendi agora. foi no começo.', '2018-03-06 22:34:25', '2018-03-06 22:34:25'),
	(23, 8, 20, 'Eliza, depois vc pode repetir o começo do vídeo, sobre como seguir cada módulo? vemos o vídeo, os materiais e depois da video, fazemos exercícios, correto?', '2018-03-06 22:34:52', '2018-03-06 22:34:52'),
	(24, 8, 20, 'fui eu sim.', '2018-03-06 22:35:20', '2018-03-06 22:35:20'),
	(25, 8, 18, 'quais são os passos do exercício mesmo?', '2018-03-06 22:40:19', '2018-03-06 22:40:19'),
	(26, 8, 18, 'sim', '2018-03-06 22:44:34', '2018-03-06 22:44:34'),
	(27, 8, 18, 'obrigada', '2018-03-06 22:44:43', '2018-03-06 22:44:43'),
	(28, 8, 22, 'perdi o inicio do video!', '2018-03-06 22:45:31', '2018-03-06 22:45:31'),
	(29, 8, 22, 'ok!\r\nobrigada!', '2018-03-06 22:46:18', '2018-03-06 22:46:18'),
	(30, 8, 20, '99% de minhas clientes têm imagem distorcida e fica realmente difícil a consultoria de estilo, porque elas nao enxergam os resultados. É como o Dr Matz explica, certo?', '2018-03-06 22:46:37', '2018-03-06 22:46:37'),
	(31, 8, 23, 'oi! então,nessa semana já temos que enviar o exercício do módulo 2 por email, antes da videoconferencia?', '2018-03-06 22:46:55', '2018-03-06 22:46:55'),
	(32, 8, 20, 'A roupa está ali, adequada, vc vê a mudança, mas a cliente continua se achando horrível, inadequada..', '2018-03-06 22:47:34', '2018-03-06 22:47:34'),
	(33, 8, 22, 'tenho clientes com auto estima baixa! Se auto depreciam e acabam transmitindo uma imagem negativa.', '2018-03-06 22:47:47', '2018-03-06 22:47:47'),
	(34, 8, 22, 'primeiro dia, estamos nos adaptando a conexao do curso on-line.\r\nestou acessando pela primeira vez', '2018-03-06 22:56:00', '2018-03-06 22:56:00'),
	(35, 8, 26, 'sim,certo...grata', '2018-03-06 22:57:45', '2018-03-06 22:57:45'),
	(36, 8, 22, 'obrigada', '2018-03-06 22:57:46', '2018-03-06 22:57:46'),
	(37, 8, 25, 'é bem difícil tentar se auto definir', '2018-03-06 23:00:49', '2018-03-06 23:00:49'),
	(38, 9, 10, 'Olá, pedimos para que ao utilizar a plataforma utilizem o navegador Google Chrome.', '2018-03-13 21:03:27', '2018-03-13 21:03:27'),
	(39, 9, 28, 'Oi Eliza, boa noite. Gostei muito do material apresentado. Se for possível, gostaria de aprofundar a visão de integração do eu real e eu ideal (Rogers). \r\nUm beijo!', '2018-03-13 21:55:05', '2018-03-13 21:55:05'),
	(40, 9, 20, 'Boa noite. Também adorei o material e tema do mod 2', '2018-03-13 21:57:53', '2018-03-13 21:57:53'),
	(41, 9, 17, 'boa noite', '2018-03-13 21:58:28', '2018-03-13 21:58:28'),
	(42, 9, 2, 'Boa noite alunas!', '2018-03-13 22:00:42', '2018-03-13 22:00:42'),
	(43, 9, 26, 'Olá, este é o grande desafio= equilíbrio entre o eu real e o ideal.', '2018-03-13 22:00:52', '2018-03-13 22:00:52'),
	(44, 9, 20, 'Interessante Eliza', '2018-03-13 22:01:54', '2018-03-13 22:01:54'),
	(45, 9, 20, 'Não é então  buscar o eu ideal no outro, mas sim  melhorar e potencializar o eu real, certo?', '2018-03-13 22:23:17', '2018-03-13 22:23:17'),
	(46, 9, 20, 'Muito bom, perfeita interpretação . Obrigada !', '2018-03-13 22:30:25', '2018-03-13 22:30:25'),
	(47, 9, 20, 'Perdi a conexão , travou', '2018-03-13 22:35:22', '2018-03-13 22:35:22'),
	(48, 9, 2, 'elizaguerra.oliveira@hotmail.com', '2018-03-13 22:36:22', '2018-03-13 22:36:22'),
	(49, 9, 18, 'repete o das 5 pessoas', '2018-03-13 22:36:45', '2018-03-13 22:36:45'),
	(50, 9, 18, 'e quando passamos para o outro lado e é pior que a entrada?', '2018-03-13 22:43:23', '2018-03-13 22:43:23'),
	(51, 9, 18, 'esse outro lado é externo?', '2018-03-13 22:51:00', '2018-03-13 22:51:00'),
	(52, 9, 20, 'Para mim foi assustador fora, a paisagem era linda, mas havia um penhasco e eu assustei.. preferi voltar para dentro da caverna, pois era mais confortável', '2018-03-13 22:51:11', '2018-03-13 22:51:11'),
	(53, 9, 18, 'obrigada', '2018-03-13 22:52:19', '2018-03-13 22:52:19'),
	(54, 9, 28, 'Você sugere que a gente dê essa devolutiva para nossos clientes? Mesmo sem a formação em psicologia? Talvez perguntando para a pessoa o que ela associa a cada símbolo?', '2018-03-13 22:53:23', '2018-03-13 22:53:23'),
	(55, 9, 20, 'nossa, muito bom! perfeito ! obrigada', '2018-03-13 22:53:50', '2018-03-13 22:53:50'),
	(56, 9, 28, 'Ok, foi o que imaginei. Obrigada', '2018-03-13 22:57:22', '2018-03-13 22:57:22'),
	(57, 9, 20, 'ótima colocação.. até onde NÃO dói?', '2018-03-13 23:02:56', '2018-03-13 23:02:56'),
	(58, 9, 20, 'boa noite, beijo', '2018-03-13 23:09:44', '2018-03-13 23:09:44'),
	(59, 9, 28, 'boa noite pra todas!', '2018-03-13 23:10:02', '2018-03-13 23:10:02'),
	(60, 8, 33, 'Adorei a vídeoconferência.', '2018-03-16 00:00:16', '2018-03-16 00:00:16'),
	(61, 9, 33, 'Estou adorando o conteúdo do curso.', '2018-03-16 03:18:27', '2018-03-16 03:18:27'),
	(62, 10, 10, 'Olá Pessoal. A videoconferência terá início às 19:00h, se por um acaso quando derem play no vídeo e não iniciar, por favor, atualizem a página e tentem novamente.', '2018-03-20 15:39:27', '2018-03-20 15:39:27'),
	(63, 10, 2, 'Boa noite alunas!', '2018-03-20 21:55:49', '2018-03-20 21:55:49'),
	(64, 10, 33, 'Boa noite.', '2018-03-20 21:56:54', '2018-03-20 21:56:54'),
	(65, 10, 28, 'Boa noite!', '2018-03-20 21:59:19', '2018-03-20 21:59:19'),
	(66, 10, 23, 'boa noite!', '2018-03-20 22:01:51', '2018-03-20 22:01:51'),
	(67, 10, 27, 'Boa Noite!', '2018-03-20 22:01:57', '2018-03-20 22:01:57'),
	(68, 10, 25, 'Boa noite!', '2018-03-20 22:02:23', '2018-03-20 22:02:23'),
	(69, 10, 16, 'oi.boa \r\nnoite a todas', '2018-03-20 22:09:32', '2018-03-20 22:09:32'),
	(70, 10, 27, 'Tenho uma dúvida em relação ao adulto que se cuida, que foi uma criança que foi bem cuidada. Uma pessoa que se cuida também não pode indicar uma pessoa insegura e ate com baixa auto estima?', '2018-03-20 22:13:19', '2018-03-20 22:13:19'),
	(71, 10, 25, 'Uma mãe muito bem sucedida pode deixar a filha se tornar uma adulta mais insegura?', '2018-03-20 22:15:51', '2018-03-20 22:15:51'),
	(72, 10, 16, 'gostaria se possível vc mostra-se a capa do livro do psicologo que e referencia pra estudarmos.', '2018-03-20 22:25:48', '2018-03-20 22:25:48'),
	(73, 10, 23, 'é possível trabalhar a baixa autoestima de alguém de forma tão rápida, como na consultoria de imagem, mesmo quando a raiz do problema é tão profunda - relação mãe/bebê-?', '2018-03-20 22:34:02', '2018-03-20 22:34:02'),
	(74, 10, 16, 'envie o seu email novamente por favor', '2018-03-20 22:39:03', '2018-03-20 22:39:03'),
	(75, 10, 34, 'Minha pergunta é parecida com a da Deborah. \r\n\r\nA pessoa que não se cuida quase sempre tem baixa autoestima? \r\n\r\nOu pode ser que a sua autoestima seja ótima e ela não ligue para se cuidar?', '2018-03-20 22:44:57', '2018-03-20 22:44:57'),
	(76, 10, 27, 'Siiim, entendi agora!! Obrigada!!', '2018-03-20 22:45:24', '2018-03-20 22:45:24'),
	(77, 10, 16, 'ok. e que gosto de pesquisar mais a fundo', '2018-03-20 22:47:47', '2018-03-20 22:47:47'),
	(78, 10, 2, 'elizaguerra.oliveira@hotmail.com', '2018-03-20 22:48:29', '2018-03-20 22:48:29'),
	(79, 10, 25, 'Eliza, não entendi muito bem a técnica do espelho 2', '2018-03-20 22:49:11', '2018-03-20 22:49:11'),
	(80, 10, 34, 'Exato. Eu quis dizer isso. Se priorizar. Pode ser quer ele não se priorize e sua autoestima seja ok?', '2018-03-20 22:50:34', '2018-03-20 22:50:34'),
	(81, 10, 34, 'Entendi.', '2018-03-20 22:50:56', '2018-03-20 22:50:56'),
	(82, 10, 34, 'Obrigada!', '2018-03-20 22:51:06', '2018-03-20 22:51:06'),
	(83, 10, 28, 'Na apostila você comentou sobre espelho simples, concavo e convexo, tridimensional. Tem até exemplo. Gostei. Durante o exercício, podemos abordar o cliente com esse tipo de fala?', '2018-03-20 22:51:24', '2018-03-20 22:51:24'),
	(84, 10, 25, 'interessante essas pessoas que costumam se negligenciar, gostam de julgar quem se cuida.', '2018-03-20 22:52:17', '2018-03-20 22:52:17'),
	(85, 10, 25, 'tipo um personagem?', '2018-03-20 22:53:07', '2018-03-20 22:53:07'),
	(86, 10, 34, 'Essa pessoa criada pode existir de verdade?? Tipo o cliente visualiza uma pessoa conhecida? Ou visualiza ele mesmo?', '2018-03-20 22:53:36', '2018-03-20 22:53:36'),
	(87, 10, 25, 'deu sim, obrigada!', '2018-03-20 22:53:47', '2018-03-20 22:53:47'),
	(88, 10, 33, 'No caso dessa visualização pode ser esse Eu ideal? Vc respondeu agora, obrigada', '2018-03-20 22:55:19', '2018-03-20 22:55:19'),
	(89, 10, 25, 'Cliente não criança', '2018-03-20 22:56:38', '2018-03-20 22:56:38'),
	(90, 10, 34, 'Ela não disse criança. Ela disse pessoa.', '2018-03-20 22:57:06', '2018-03-20 22:57:06'),
	(91, 10, 25, 'obrigada!!!', '2018-03-20 22:57:48', '2018-03-20 22:57:48'),
	(92, 10, 25, 'vira um espelho inverso?', '2018-03-20 22:58:29', '2018-03-20 22:58:29'),
	(93, 10, 33, 'Isso mesmo Eliza, muitas mulheres ficam criticando uma mulher que se cuida ou faz algo pq elas não conseguem fazer. Muito bom.', '2018-03-20 22:58:37', '2018-03-20 22:58:37'),
	(94, 10, 34, 'ok. Obrigada', '2018-03-20 22:59:55', '2018-03-20 22:59:55'),
	(95, 10, 34, 'A Patricia perguntou se vira um espelho inverso.', '2018-03-20 23:01:45', '2018-03-20 23:01:45'),
	(96, 10, 34, 'Tem um grupo de whatsapp da turma? Pode me incluir? Hoje é minha primeira aula.', '2018-03-20 23:02:53', '2018-03-20 23:02:53'),
	(97, 10, 34, 'Muito obrigada!', '2018-03-20 23:04:37', '2018-03-20 23:04:37'),
	(98, 10, 16, 'oi aline seja bem vinda querida', '2018-03-20 23:05:05', '2018-03-20 23:05:05'),
	(99, 10, 34, 'Obrigada Jaqueline :)', '2018-03-20 23:05:28', '2018-03-20 23:05:28'),
	(100, 10, 33, 'Eu ADOREI as explicações Eliza.', '2018-03-20 23:06:25', '2018-03-20 23:06:25'),
	(101, 10, 26, 'ok. boa noite e obrigada', '2018-03-20 23:07:37', '2018-03-20 23:07:37'),
	(102, 11, 17, 'Oi boa noite, se eu não conseguir escrever aqui, porque as vezes trava, vou enviar por WhatsApp boa noite', '2018-03-27 21:58:11', '2018-03-27 21:58:11'),
	(103, 11, 26, 'Boa noite¹', '2018-03-27 22:00:34', '2018-03-27 22:00:34'),
	(104, 11, 34, 'Bouaaa :)', '2018-03-27 22:01:03', '2018-03-27 22:01:03'),
	(105, 11, 2, 'Boa noite alunas!', '2018-03-27 22:05:49', '2018-03-27 22:05:49'),
	(106, 11, 33, 'Boa noite.', '2018-03-27 22:05:56', '2018-03-27 22:05:56'),
	(107, 11, 25, 'boa noite', '2018-03-27 22:06:22', '2018-03-27 22:06:22'),
	(108, 11, 17, 'Eu tive essa resposta. Estava 30 quilos a cima do peso e foi no processo de psicanálise que eu comecei a emagrecer pois passei a ter mais consciências sobre meus sentimentos', '2018-03-27 22:14:21', '2018-03-27 22:14:21'),
	(109, 11, 34, 'Que maravilha, Jacqueline!! Parabéns', '2018-03-27 22:15:23', '2018-03-27 22:15:23'),
	(110, 11, 25, 'Você grava os atendimentos?', '2018-03-27 22:36:06', '2018-03-27 22:36:06'),
	(111, 11, 34, 'Ao longo de +/- quantas sessões com o cliente se realizam hipóteses diagnósticas, intervenções verbais, ações de mudanças do cliente e etc?', '2018-03-27 22:47:34', '2018-03-27 22:47:34'),
	(112, 11, 20, 'Peguei para o fim', '2018-03-27 22:57:09', '2018-03-27 22:57:09'),
	(113, 11, 25, 'Obrigada!', '2018-03-27 23:00:05', '2018-03-27 23:00:05'),
	(114, 11, 34, 'Mas realizo todo esse trabalho de descobertas (mesmo que leve muitas sessões) pra DEPOIS olhar pras roupas da cliente? É isso?', '2018-03-27 23:01:38', '2018-03-27 23:01:38'),
	(115, 11, 25, 'A gente usa os dois métodos então?', '2018-03-27 23:03:46', '2018-03-27 23:03:46'),
	(116, 11, 34, 'Obrigada!!', '2018-03-27 23:13:01', '2018-03-27 23:13:01'),
	(117, 11, 25, 'entendi sim, obrigada!', '2018-03-27 23:13:02', '2018-03-27 23:13:02'),
	(118, 12, 2, 'Boa noite alunas! ;)', '2018-04-03 21:57:39', '2018-04-03 21:57:39'),
	(119, 12, 26, 'boa noite', '2018-04-03 21:58:02', '2018-04-03 21:58:02'),
	(120, 12, 33, 'Boa noite Eliza e demais alunas.', '2018-04-03 21:58:09', '2018-04-03 21:58:09'),
	(121, 12, 25, 'Boa noite!!!', '2018-04-03 21:59:37', '2018-04-03 21:59:37'),
	(122, 12, 27, 'Boa noite!', '2018-04-03 22:00:09', '2018-04-03 22:00:09'),
	(123, 12, 34, 'boa noite', '2018-04-03 22:02:27', '2018-04-03 22:02:27'),
	(124, 12, 20, 'não consigo acessar', '2018-04-03 22:02:27', '2018-04-03 22:02:27'),
	(125, 12, 28, 'Boa noite!', '2018-04-03 22:03:19', '2018-04-03 22:03:19'),
	(126, 12, 16, 'ola meninas lindas boa noite', '2018-04-03 22:03:32', '2018-04-03 22:03:32'),
	(127, 12, 20, 'Boa noite Eliza, boa noite meninas', '2018-04-03 22:03:57', '2018-04-03 22:03:57'),
	(128, 12, 23, 'boa noite! :)', '2018-04-03 22:06:53', '2018-04-03 22:06:53'),
	(129, 12, 27, 'está travando um pouco', '2018-04-03 22:08:21', '2018-04-03 22:08:21'),
	(130, 12, 16, 'esse modulo me retrata muito passei por esse processo durante algum tempo.', '2018-04-03 22:12:59', '2018-04-03 22:12:59'),
	(131, 12, 16, 'hoje tenho metas, sonhos e objetivos.', '2018-04-03 22:14:37', '2018-04-03 22:14:37'),
	(132, 12, 33, 'A Bia precisa de possuir algo ou ter alguém para se sentir inteira.', '2018-04-03 22:16:16', '2018-04-03 22:16:16'),
	(133, 12, 33, 'E fica muita claro a questão do Status para se sentir segura e até mesmo "feliz"', '2018-04-03 22:17:11', '2018-04-03 22:17:11'),
	(134, 12, 16, 'um dos melhores investimentos da minha vida foi fazer o curso de consultoria e agora esse, esta me enriquecendo de maneira transformadora.', '2018-04-03 22:21:44', '2018-04-03 22:21:44'),
	(135, 12, 33, 'Concordo Jaqueline, tbm tenho certeza que fiz um excelente investimento.', '2018-04-03 22:23:36', '2018-04-03 22:23:36'),
	(136, 12, 26, 'O problema esta nas pessoas “Fashion victims” que precisam usar o último lançamento, nem sabem ao certo se é algo de que ela  realmente gosta, mas por estar na moda – compra.', '2018-04-03 22:26:10', '2018-04-03 22:26:10'),
	(137, 12, 26, 'Agora, com o curso esta claro pq agem assim.', '2018-04-03 22:28:00', '2018-04-03 22:28:00'),
	(138, 12, 25, 'Eliza, de acordo com esse processo descrito, se bem feito a transição acaba sendo natural?', '2018-04-03 22:43:20', '2018-04-03 22:43:20'),
	(139, 12, 16, 'tenho sido minha melhor cliente pois me identifico em muito que tenho estudado e aprendido o caminho da restauração.', '2018-04-03 22:48:43', '2018-04-03 22:48:43'),
	(140, 12, 33, 'Eliza, eu gostaria que vc explicasse um pouco sobre o exemplo da apostila, não ficou claro pra mim. Por favor.', '2018-04-03 22:50:49', '2018-04-03 22:50:49'),
	(141, 12, 33, 'O caso do Terapeuta e a paciente Beverly', '2018-04-03 22:52:55', '2018-04-03 22:52:55'),
	(142, 12, 33, 'ela não tinha posicionamento', '2018-04-03 22:53:18', '2018-04-03 22:53:18'),
	(143, 12, 25, 'durante a consultoria, se nossa abordagem e métodos forem bem feitos, a transição da nossa cliente para seu "eu ideal" acaba sendo natural?', '2018-04-03 22:53:49', '2018-04-03 22:53:49'),
	(144, 12, 33, 'Obrigada , ficou claro agora. Gostei muito Eliza.', '2018-04-03 22:57:48', '2018-04-03 22:57:48'),
	(145, 12, 25, 'se fica mais fácil para ele se aceitar e mudar, tipo começa a se gostar e vai mudando...', '2018-04-03 22:59:39', '2018-04-03 22:59:39'),
	(146, 12, 25, 'Legal, obrigada!', '2018-04-03 23:00:57', '2018-04-03 23:00:57');
/*!40000 ALTER TABLE `video_comentarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
