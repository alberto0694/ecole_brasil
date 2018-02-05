-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.28-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para ecole378_ecole
CREATE DATABASE IF NOT EXISTS `ecole378_ecole` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
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

-- Copiando dados para a tabela ecole378_ecole.administradors: ~0 rows (aproximadamente)
DELETE FROM `administradors`;
/*!40000 ALTER TABLE `administradors` DISABLE KEYS */;
INSERT INTO `administradors` (`id`, `nome`, `sobrenome`, `avatar`, `user_id`, `nascimento`, `created_at`, `updated_at`) VALUES
	(1, 'adminsitrador', 'Admin', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/administradors/6e798f26f0a54a520a16047b85f6acd9.png', 1, '2018-01-11 19:40:30', NULL, '2018-01-19 19:40:30'),
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
  PRIMARY KEY (`id`),
  KEY `agendas_curso_id_foreign` (`curso_id`),
  CONSTRAINT `agendas_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.agendas: ~0 rows (aproximadamente)
DELETE FROM `agendas`;
/*!40000 ALTER TABLE `agendas` DISABLE KEYS */;
INSERT INTO `agendas` (`id`, `descricao`, `carga_horaria`, `datas`, `modelo`, `valor`, `max_parcelas`, `transacao`, `ministrantes`, `data_inicio`, `curso_id`, `avatar`, `cidade`, `created_at`, `updated_at`) VALUES
	(1, 'Negócios de Estilo: Como Fazer a Sua Empresa Acontecer', '36h', '19 a 24', 'D', '1.00', 0, 4, 'Vandressa', '2018-02-19 19:39:24', 3, NULL, 'Balneário camboriú', '2018-01-11 16:52:34', '2018-01-19 19:39:24'),
	(2, 'MORFOPSICOLOGIA', '36h', '26 a 03', 'P', '1.00', 0, 4, 'Lygya', '2018-02-26 15:09:50', 3, NULL, 'São Paulo', '2018-01-11 16:53:34', '2018-01-15 15:09:50'),
	(3, 'Acessórios', '36h', '27 a 01', 'D', '1.00', 0, 4, NULL, '2018-02-27 19:38:23', 4, NULL, 'ONLINE', '2018-01-15 15:10:53', '2018-01-19 19:38:23'),
	(4, 'Consultortia', '36h', '05 a 10', 'P', '1.00', 0, 4, 'Vandressa', '2018-03-05 15:13:19', 3, NULL, 'Porto Alegre', '2018-01-15 15:13:19', '2018-01-15 15:13:19'),
	(5, 'Budget', '36h', '20 a 21', 'P', '1.00', 0, 4, NULL, '2018-03-21 15:15:11', 7, NULL, 'ONLINE', '2018-01-15 15:15:11', '2018-01-15 15:15:11');
/*!40000 ALTER TABLE `agendas` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.alunos
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `sobrenome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nascimento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` longtext COLLATE utf8mb4_unicode_ci,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci,
  `profissao` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `alunos_user_id_foreign` (`user_id`),
  CONSTRAINT `alunos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.alunos: ~0 rows (aproximadamente)
DELETE FROM `alunos`;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` (`id`, `nome`, `user_id`, `sobrenome`, `nascimento`, `avatar`, `descricao_html`, `profissao`, `created_at`, `updated_at`) VALUES
	(1, 'Aluno', 3, 'Ecole', '1994-06-08 18:13:32', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/alunos/22c1ea298ad32592f42cab1ce8405d9f.png', '<p>Descrição Aluno</p>', 'Aluno', '2018-01-11 16:39:30', '2018-01-11 18:13:32'),
	(2, 'Alberto', 5, 'Pimentel Antunes', '1994-06-08 18:14:43', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/alunos/4e21ba21d2f4783d784cfe738de951dc.png', '<p>descricao</p>', 'Aluno', '2018-01-11 17:11:24', '2018-01-11 18:14:43');
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.aluno_agendas: ~0 rows (aproximadamente)
DELETE FROM `aluno_agendas`;
/*!40000 ALTER TABLE `aluno_agendas` DISABLE KEYS */;
INSERT INTO `aluno_agendas` (`id`, `created_at`, `updated_at`, `aluno_id`, `agenda_id`) VALUES
	(1, NULL, NULL, 2, 2),
	(2, NULL, NULL, 2, 1),
	(4, NULL, NULL, 1, 1);
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
  PRIMARY KEY (`id`),
  KEY `aulas_modulo_id_foreign` (`modulo_id`),
  CONSTRAINT `aulas_modulo_id_foreign` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.aulas: ~0 rows (aproximadamente)
DELETE FROM `aulas`;
/*!40000 ALTER TABLE `aulas` DISABLE KEYS */;
INSERT INTO `aulas` (`id`, `titulo`, `url_video`, `descricao_html`, `modulo_id`, `created_at`, `updated_at`) VALUES
	(1, 'Aula 1', 'https://player.vimeo.com/video/32672160', '<p>Descrição da aula 1</p>', 1, '2018-01-11 16:59:22', '2018-01-11 16:59:22'),
	(2, 'Aula 2', 'https://www.youtube.com/embed/6Fqozggi-44', '<p>Descrição da Aula 2</p>', 1, '2018-01-11 17:00:32', '2018-01-11 17:00:32');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.aula_comentarios: ~0 rows (aproximadamente)
DELETE FROM `aula_comentarios`;
/*!40000 ALTER TABLE `aula_comentarios` DISABLE KEYS */;
INSERT INTO `aula_comentarios` (`id`, `aula_id`, `user_id`, `comentario`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'Teste', '2018-01-11 17:02:14', '2018-01-11 17:02:14'),
	(2, 1, 5, 'mensagem', '2018-01-11 17:13:05', '2018-01-11 17:13:05'),
	(3, 1, 5, 'testando', '2018-01-11 17:13:16', '2018-01-11 17:13:16'),
	(4, 1, 1, 'tesntando', '2018-01-11 17:13:27', '2018-01-11 17:13:27'),
	(5, 1, 3, 'oi', '2018-01-11 18:17:12', '2018-01-11 18:17:12'),
	(6, 1, 5, 'oi', '2018-01-11 18:17:19', '2018-01-11 18:17:19'),
	(7, 1, 5, 'jsdhjsdjsadghsagdhsagdsdah', '2018-01-11 18:17:43', '2018-01-11 18:17:43'),
	(8, 1, 5, 'qwewqewq', '2018-01-11 18:18:14', '2018-01-11 18:18:14'),
	(9, 2, 1, '32423', '2018-01-19 19:39:45', '2018-01-19 19:39:45'),
	(10, 2, 1, '234234', '2018-01-19 19:39:49', '2018-01-19 19:39:49');
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.banners: ~0 rows (aproximadamente)
DELETE FROM `banners`;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `titulo`, `midia`, `link_url`, `ativo`, `created_at`, `updated_at`) VALUES
	(1, 'Banner', 'base64/banners/d9bec48a71c769e9a1e840095b05efa6.webm', NULL, 1, '2018-01-11 17:17:08', '2018-01-11 17:46:28');
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

-- Copiando dados para a tabela ecole378_ecole.blogs: ~0 rows (aproximadamente)
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
  `site` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.consultoras: ~0 rows (aproximadamente)
DELETE FROM `consultoras`;
/*!40000 ALTER TABLE `consultoras` DISABLE KEYS */;
INSERT INTO `consultoras` (`id`, `nome`, `cidade`, `site`, `avatar`, `created_at`, `updated_at`) VALUES
	(1, 'Juliana Queiroz', 'São Paulo', 'http://julianaqueiroz.com.br/blog/', 'base64/consultoras/265a7718a6488a68e9837243370a30e3.jpeg', '2018-01-11 17:30:32', '2018-01-11 17:30:32'),
	(2, 'Sabrina Tuma', 'Bélem / PA', 'https://www.instagram.com/sabrina_tuma/', 'base64/consultoras/01ba7cc20641f547c35b7ca84c2f55e2.jpeg', '2018-01-11 17:31:44', '2018-01-11 17:31:44');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.contatos: ~0 rows (aproximadamente)
DELETE FROM `contatos`;
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` (`id`, `contato`, `telefone`, `cidade`, `cidade_curso`, `ecole`, `mensagem`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'oi', 'oi', 'oi', 'oi', 'oi', 'oi', 'oi', '2018-01-11 18:40:25', '2018-01-11 18:40:25'),
	(2, 'Alberto', '99118571', 'Itajai', 'nde', 'site', 'mensagem', 'alberto.pimentel.94@gmail.com', '2018-01-11 18:42:03', '2018-01-11 18:42:03'),
	(3, 'Alberto', '99118571', 'São Paulo', 'nde', 'site', 'sdasdsada', 'alberto.pimentel.94@gmail.com', '2018-01-11 18:42:49', '2018-01-11 18:42:49');
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
  PRIMARY KEY (`id`),
  KEY `cursos_formacao_id_foreign` (`formacao_id`),
  CONSTRAINT `cursos_formacao_id_foreign` FOREIGN KEY (`formacao_id`) REFERENCES `formacaos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.cursos: ~0 rows (aproximadamente)
DELETE FROM `cursos`;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` (`id`, `formacao_id`, `nome`, `link_video`, `background_img`, `card`, `carga_horaria`, `modelo`, `ementa`, `pagina_inicial`, `ministrantes`, `conteudo`, `apresentacao`, `informacoes`, `objetivos`, `material`, `created_at`, `updated_at`) VALUES
	(1, 3, 'Negócios de Estilo', 'https://www.youtube.com/embed/ftLflR3sgWU', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/e092d18e4eac3f2515ed98dc2d86d754.png', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/794775429baf268110a26b4fcced5fc9.png', '36h', 'À Distância', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/11b1bcf389d112ccb17e6d724c322f46.pdf', 1, NULL, '<p>MARKETING:</p>\r\n\r\n<p>•&nbsp;Formatação do negócio – mercado, consumidor e público.</p>\r\n\r\n<p>•&nbsp;Construção de marca.</p>\r\n\r\n<p>•&nbsp;Plano de Comunicação.</p>\r\n\r\n<p>FINANÇAS:</p>\r\n\r\n<p>•&nbsp;Custeio Básico.</p>\r\n\r\n<p>•&nbsp;Gerenciando o dinheiro em uma pequena empresa.</p>\r\n\r\n<p>•&nbsp;Precificação.</p>\r\n\r\n<p>NETWORK:</p>\r\n\r\n<p>•&nbsp; Como realizar networking.</p>\r\n\r\n<p>•&nbsp; Prospecção /captação de contatos.</p>\r\n\r\n<p>•&nbsp;Como manter a rede ativa com qualidade.</p>', '<p>Desenvolve a percepção do aluno sobre os fatores determinantes no processo de ser dono de um negócio, amplia a percepção sobre o potencial da sua empresa e prepara sua atuação comercial.</p>', NULL, '<p>O curso tem como proposta auxiliar de forma conceitual e prática no processo de&nbsp;<em>start</em>, desenvolvimento ou profissionalização de uma empresa com foco em três pilares: marketing, finanças e network.</p>', '<p>•&nbsp;Vídeo aulas;</p>\r\n\r\n<p>•&nbsp;Vídeo conferências;</p>\r\n\r\n<p>•&nbsp;Materiais complementares;</p>\r\n\r\n<p>•&nbsp;Atividades práticas.</p>', '2018-01-11 16:46:05', '2018-01-12 18:18:44'),
	(2, 1, 'Morfopsicologia', 'https://www.youtube.com/embed/m7bmRdQBfNQ', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/40b100f5ebc54c24ce4566f159ed6b8e.jpeg', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/0a470938c51ffa794c20fd844e783935.png', '36h', 'Presencial', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/base64/cursos/c350007c9f63f1843fa6b6d35bd78561.pdf', 1, NULL, '<p>•&nbsp;O que é morfopsicologia e suas abordagens;<br />\r\n•&nbsp;O inato, o adquirido, a formação do Ser;<br />\r\n•&nbsp;A observação do rosto: a estrutura o formato e a forma;<br />\r\n•&nbsp;Os diferentes tipos de formatos e características;<br />\r\n•&nbsp;A Morfocomunicação;<br />\r\n•&nbsp;A Morfomaquiagem.</p>', '<p>A morfopsicologia é uma ferramenta de compreensão da personalidade das pessoas através das características do rosto. É uma ciência que estuda os traços, linhas, formas, cicatrizes, e detalhes do rosto, que traduzem a personalidade do indivíduo. Aborda sobre morfocomunicação (como se comunicar com cada tipo de personalidade) e morfomaquiagem (como maquiar de acordo com cada tipo de personalidade).</p>', NULL, '<table border="0" style="height:79px; width:654px">\r\n	<tbody>\r\n		<tr>\r\n			<td>Qualificar a atuação de profissionais das áreas da imagem, beleza, estética, psicologia e RH&nbsp;através de ferramentas de Morfopsicologia.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<p>•&nbsp;apostila de conteúdos.<br />\r\n•&nbsp;kit de maquiagem da MAC.</p>', '2018-01-11 16:50:28', '2018-01-12 18:19:01'),
	(3, 1, 'Consultoria e Coaching de Imagem', 'https://www.youtube.com/embed/ntve0xoyvdE', 'base64/cursos/e73529e6c85e56e3255d17e9ab2c3431.png', 'base64/cursos/526724bf13138add8559acdbd85ae1f2.png', '48h', 'Presencial', 'base64/cursos/8eb7a4c2855cd94b911cc0a8c34b82a0.pdf', 1, NULL, '<p>•&nbsp;Processo de consultoria de imagem.</p>\r\n\r\n<p>•&nbsp;Coaching de imagem.</p>\r\n\r\n<p>•&nbsp;Técnicas de colorimetria.</p>\r\n\r\n<p>•&nbsp;Análise morfológica.</p>\r\n\r\n<p>•&nbsp;Objetivos e complexos.</p>\r\n\r\n<p>•&nbsp;Estilo do vestuário, tecidos e tendências.</p>', '<p>O Consultor de Imagem possui as ferramentas certas para traduzir a imagem que melhor representa a essência e personalidade de seus clientes. Leva em conta os objetivos, a rotina diária, o estilo, tipo de corpo, gostos e as cores que mais favorecem. Considerando que a imagem tem um grande impacto nos nossos resultados diários e na autoestima, o Consultor de Imagem é um profissional capaz de promover mudanças expressivas que refletem em vários segmentos da vida de seu cliente.&nbsp;</p>', NULL, '<p>O curso habilita o aluno para atuar como Consultor ou Coaching de Imagem,&nbsp;<br />\r\ncapacitando-o para auxiliar as pessoas na busca por uma imagem pessoal legítima.</p>', '<p>•&nbsp;Apostila de conteúdos;<br />\r\n•&nbsp;Caderno de exercicios;<br />\r\n•&nbsp;Círculo cromático;<br />\r\n•&nbsp;Jogo de tecidos;<br />\r\n•&nbsp;Cartelas de harmonia de cores;<br />\r\n•&nbsp;Cartelas de cores.</p>', '2018-01-12 17:40:41', '2018-01-12 17:40:41'),
	(4, 1, 'Acessórios', 'https://www.youtube.com/embed/cTsPNDpAqPg', 'base64/cursos/7ca6d59466769159c1aa110c990051b5.png', 'base64/cursos/a51b50d523af0e925315c446d559b1ff.png', '24h', 'Presencial', 'base64/cursos/e912dd4fb11be3caed59ae19a2e1baf8.pdf', 1, NULL, '<p>Acessórios, joias e bijuterias, na identificação de estilo, morfologia, dress code para eventos e planejamento de looks.</p>', '<p>Sabendo que os acessórios são parte de uma fatia importante da moda, o curso com foco no uso das joias e bijuterias como acessórios de efeito na imagem pessoal oferece noções importantes para quem quer vesti-los melhor, para quem trabalha ou tem interesse em atuar na área da moda ou imagem e oferecer assim, um serviço específico ou integrado.</p>\r\n\r\n<p>Voltado para quem deseja aprender técnicas de imagem dentro de uma visão geral sobre o uso assertivo dos acessórios, joias e bijuterias, na identificação de estilo, morfologia, dress code para eventos e planejamento de looks.</p>', NULL, '<p>Capacitar o aluno para conseguir entender o universo dos acessórios: joias e bijuterias, de maneira aprofundada e de modo a oferecer soluções no atendimento de coaching de imagem ou áreas afins.</p>', '<p>Apostila teórica.</p>', '2018-01-12 18:05:09', '2018-01-12 18:05:09'),
	(5, 3, 'Desmistificando Gênero', 'https://www.youtube.com/embed/cTsPNDpAqPg', 'base64/cursos/6deb9bbe6b4005d90a9a6c57a1000f90.png', 'base64/cursos/bd0d5b01e85a72d1d72e800756088fe7.png', '21h', 'À Distância', 'base64/cursos/9d7d07785de7726efa17ff58f654c626.pdf', 1, NULL, '<p>Conceitos teóricos sobre gênero, feminismo e teoria queer, considerações básicas para aplicação da teoria na prática, e explorar conflitos entre discursos ideológicos e preconceituosos.</p>', '<p>Muito tem se falado sobre gênero – mas do que se trata esse conceito? No senso comum a palavra “gênero” costuma ser usada para descrever o que entendemos, social e culturalmente, como feminino e masculino. Mas gênero também pode ser compreendido como uma ordem social, um marcador de identidade, e um ângulo de análise – que já engendrou um corpo teórico significativo.&nbsp;</p>\r\n\r\n<p> </p>\r\n\r\n<p>Gênero é um campo de estudos interdisciplinares, mas para aquém e além da teoria existe a vivência. Como esses novos discursos afetam nosso dia-a-dia, e como podemos estar preparados para os avanços que o debate acerca de igualdade traz? Compreender estas questões é a proposta deste curso.</p>', NULL, '<p>O curso vai apresentar conceitos teóricos sobre gênero, feminismo e teoria queer, considerações básicas para aplicação da teoria na prática*, e explorar conflitos entre discursos ideológicos e preconceituosos. Ao final, alunas terão treinado seus olhares para perceber novos ângulos de observação de fenômenos sociais, bem como desenvolvido capacidades críticas para debater e (des)fazer padrões hegemônicos de comportamento. Debateremos como o discurso de gênero está influenciando o agora, faremos uma introdução básica ao feminismo, e desenvolveremos estratégias a respeito de como podemos nos comunicar sem oprimir e valorizando a inclusão.</p>\r\n\r\n<p> </p>\r\n\r\n<p>* objetificação, representação/representatividade, “mansplaining, bropriating, manterrupting, gaslighting”, falsa simetria e sororidade</p>', '<p>Vídeo aulas;</p>\r\n\r\n<p>Vídeo conferências;</p>\r\n\r\n<p>Materiais complementares;</p>\r\n\r\n<p>Atividades práticas.</p>', '2018-01-12 18:16:04', '2018-01-12 18:16:04'),
	(6, 3, 'Psicologia da Autoimagem', 'https://www.youtube.com/embed/cTsPNDpAqPg', 'base64/cursos/6b5800bc5d691fb3c5396e0e4fe1b43a.png', 'base64/cursos/923be2ca68f65c8345be3cd06a974920.vnd.adobe.photoshop', '34h', 'À Distância', 'base64/cursos/6a542762efd93cffdab7be66daf63c5c.pdf', 1, NULL, '<p>1) O que é Psicologia da Autoimagem? Exercício de visualização criativa.</p>\r\n\r\n<p>2) O desenvolvimento da autoimagem. Imagem Corporal, Autoimagem e Autoestima. Eu Real x Eu Ideal.</p>\r\n\r\n<p>3) O Estágio do espelho. Relação com a imagem.</p>\r\n\r\n<p>4) Corpo e Bem Estar. Psicossomática; Pesos e Medidas.</p>\r\n\r\n<p>5) Estágio Estético. A relação com as roupas, objetos e marcas; O sujeito estético; A questão do desapego.</p>\r\n\r\n<p>6) Sentir-se bem na própria pele. Liberdade de ser quem tu és, autenticidade e empatia.</p>\r\n\r\n<p>7) A questão da felicidade. Psicologia Positiva.&nbsp;Construir felicidade através da autoimagem.</p>\r\n\r\n<p>8) Projeto Original de Imagem. Metas e Objetivos. Realizar escolhas, traçar metas e objetivos.</p>', '<p>A relação com a autoimagem hoje pode ser grande fonte de insatisfação. O mesmo ocorre com o corpo quando para atingir padrões estéticos e estereótipos abrimos mão de nossa identidade. Fazemos parte da cultura da imagem, porém os índices de obesidade, transtornos alimentares e dismórfico se tornam cada vez mais recorrentes. Quanto menos conectados com nossos desejos, mais estaremos à merce do que é oferecido socialmente, em um processo de adoecimento e dependência.</p>', NULL, '<p>Utilizar conhecimentos da psicologia para os atendimentos de profissionais de imagem, estética e saúde, levando o cliente a escolhas reais no desenvolvimento de seu projeto de imagem, através do despertar da autenticidade. Utilizar ferramentas de investigação na relação do cliente com seu corpo, imagem e aparência. Desenvolver soluções criativas para questões relacionadas ao corpo e à imagem.&nbsp;</p>', '<p>Vídeo aulas;&nbsp;</p>\r\n\r\n<p>Vídeoconferências;&nbsp;</p>\r\n\r\n<p>Materiais complementares.</p>', '2018-01-12 18:16:24', '2018-01-12 18:16:24'),
	(7, 2, 'Budget', 'https://www.youtube.com/embed/cTsPNDpAqPg', 'base64/cursos/3ce034ae917479c81499195b145fc227.png', 'base64/cursos/8549704e9eb1cdf93c620ea08aeada0d.png', '6h', 'Presencial', 'base64/cursos/4df3b149632dcc79b9d4c9139989a7ef.pdf', 1, NULL, '<p>1˚ parte: Atitude empreendedora;</p>\r\n\r\n<p>2˚ parte: Onde estão as oportunidades?;</p>\r\n\r\n<p>3˚ parte: Comunicação com pouca ou nenhuma verba;</p>\r\n\r\n<p>4˚ parte: Você como cartão de visitas.</p>', '<p>O sucesso de um negócio é muito mais uma questão de ATITUDE do que de investimentos.<br />\r\nNesse curso, vamos ensinar sobre postura e comportamento empreendedor para quem quer desenvolver ou abrir um negócio com pouca grana.<br />\r\nVamos expandir as suas ideias e fazer você sair da zona de conforto, mostrando como pensar além do dinheiro para fazer um negócio acontecer.<br />\r\nAs duas professoras, experts em empreendedorismo, vão te mostrar que o comportamento empreendedor é sobre ter as ideias certas e saber usá-las da forma certa.</p>', NULL, '<p>Expandir as ideias dos alunos para uma visão mais ampla e assertiva sobre negócios, postura e comportamento empreendedor.</p>', '<p>Apostila.</p>', '2018-01-12 18:19:02', '2018-01-12 18:19:02'),
	(8, 1, 'Bastidores de Moda em Paris', 'https://www.youtube.com/embed/cTsPNDpAqPg', 'base64/cursos/a686faf83a4a3989c657aa38598ef780.png', 'base64/cursos/037d1315c7c6ec2296ffb32f27d8b9f5.png', '72h', 'Presencial', 'base64/cursos/8e337ffeb13a01c5afa53d86ae4caa55.pdf', 1, NULL, '<p>•&nbsp;<strong>cultura de moda&nbsp;</strong>em museus e exposições que apresentam os grandes criadores<br />\r\n•&nbsp;<strong>história de moda</strong>&nbsp;uma volta no tempo em conteúdo e acesso a moda vintage na prática<br />\r\n•&nbsp;<strong>aulas na sede da escola em Paris</strong><br />\r\n•&nbsp;<strong>palestras com profissionais de grandes marcas</strong>.<br />\r\n•&nbsp;visitas guiadas a famosos&nbsp;<strong>ateliers de moda e beleza</strong>&nbsp;em Paris</p>', '<p>Venha&nbsp;conhecer de perto a cultura da moda e imagem na cidade mais charmosa do mundo, Paris. Aulas exclusivas na Ecole francesa, visitas guiadas à exposições, museus e ateliers de moda e perfumaria, tudo isso acompanhadas de profissionais renomados no mercado parisiense.</p>', NULL, '<p>Experiência que une conceitos e prática, permitindo ao profissional enriquecer o aprendizado através de um roteiro guiado de visitas em Paris.</p>', '<p>•&nbsp;apostila de conteúdo;</p>\r\n\r\n<p>• sacola da Ecole;</p>\r\n\r\n<p>• bloco de notas.</p>', '2018-01-12 18:30:31', '2018-01-12 18:30:31');
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.depoimentos: ~0 rows (aproximadamente)
DELETE FROM `depoimentos`;
/*!40000 ALTER TABLE `depoimentos` DISABLE KEYS */;
INSERT INTO `depoimentos` (`id`, `descricao_html`, `avatar`, `video`, `apenas_video`, `autor`, `created_at`, `updated_at`) VALUES
	(1, '<p>“Conhecer o trabalho da Vandressa e a Escola foi um grande marco em minha vida profissional. Descobrir que a minha paixão pelo universo da beleza e da moda poderia se tornar uma profissão e que além de eu me redescobrir como mulher poderia ajudar outras pessoas a se encontrarem, foi simplesmente fantástico. Através da formação de consultoria de imagem e estilo&nbsp;<strong>pude me conhecer na essência, aceitar como sou e me libertar de padrões alheios.</strong>&nbsp;Essa “transformação” permitiu revelar a minha melhor versão ao universo e proporcionou conhecimento e ferramentas para que eu contribua com propriedade no processo de autoconhecimento de pessoas que buscam resgatar ou aumentar sua estima, dar um “UP” no visual e&nbsp;<strong>elevar suas relações pessoais e profissionais através de sua imagem</strong>.”</p>', 'base64/depoimentos/1286defd8b4dc802f3408ffd56ec9461.png', '0', NULL, 'Nathalia Bernardes, aluna da formação em Consultoria de Imagem.', '2018-01-13 13:56:52', '2018-01-13 13:56:52'),
	(2, '<p>"Aprender, segundo o dicionário, significa ficar sabendo, tomando conhecimento; isto resume bem a minha experiência com a escola.&nbsp;<strong>Ter tido a oportunidade em ser o primeiro aluno homem a formar-se com a EcoleSupérieure de Relooking aqui no Brasil é algo muito especial, principalmente quando vemos no mercado a diferença que um bom aprendizado te propicia e o peso de ter um certificado internacional agregado as minhas experiências e demais formações profissionais.</strong>&nbsp;Acredito na educação e acredito na capacidade que o Brasil tem, por isso me sinto um privilegiado em ter tido a oportunidade de aprender toda a formação que recebi."</p>', 'base64/depoimentos/1ad1368c2879234da5a963f29f267883.png', '0', NULL, 'Matheus Rocca Vecchio Almeida, aluno da formação em Consultoria de Imagem.', '2018-01-13 13:57:46', '2018-01-13 13:57:46'),
	(3, '<p>“O Método francês, ainda é considerado o mais atual e eficiente para Consultoria de Imagem e Relooking. Em vista disso, procurei escolas que pudessem me desenvolver tecnicamente e aprimorar as minhas habilidades para atuar&nbsp; com segurança e construir uma carreira consistente.</p>\r\n\r\n<p>É um mercado que vem crescendo e se destacando.&nbsp;<strong>Existem várias ofertas de cursos no Brasil e fora dele. O que me fez optar pela Ecole foi a proposta diferenciada em trabalhar com a essência do indivíduo, ou seja, identificando através da personalidade algo maior do que simplesmente vesti-lo.Desenvolvemos técnicas de Coaching próprias para aplicação na consultoria de imagem e estilo.</strong>&nbsp;É necessário objetivar com o cliente o resultado a ser alcançado através de metas trazidas por ele.&nbsp;<strong>Feito isso, busquei mais conhecimento através do Curso de Visagismo e Morfopsicologia do Rosto, onde fazemos uma leitura facial através dos traços existentes no rosto do cliente. Esses traços não só ajudam a identificar a personalidade do cliente como o ajudarão a se conhecer melhor, por que age de um jeito que ainda não identificou o motivo.</strong>&nbsp;Porque suas feições são assim e que não necessita de plástica. Como ele pode trabalhar melhor a sua comunicação com as pessoas agora que se conhece e ainda, para mulheres como a morfomaquigem facilita a sua apresentação para o complento da sua imagem de sucesso.”</p>', 'base64/depoimentos/1a45c58c5b725301f8e0d267d0ac6d99.png', '0', NULL, 'Cris Guimas, aluna da formação em Morfopsicologia e Consultoria de Imagem.', '2018-01-13 13:59:03', '2018-01-13 13:59:03'),
	(4, '<p>Buscando um diferencial para o seu trabalho como designer de joias, se especializou em cursos de Coaching de Imagem e Visagismo com ênfase em Morfopsicologia pela escola francesa EcoleSupérieure de Relooking - Paris. "Estudar na EcoleSupérieure de Relooking é ter a oportunidade de receber formação de qualidade, com metodologia de ensino e material diferenciados com professores treinados em Paris, onde tu receberás sua certificação internacional na escola que é reconhecida ainda na França, pela Comissão Nacional de Centro Profissional (CNCP). Minha formação na Ecole é um importante diferencial para o meu trabalho que prima pela exclusividade e qualidade nos projetos que desenvolvo, pois se o estilo do meu cliente é único, o projeto da sua joia também será e isso a Ecole me ensinou".</p>', 'base64/depoimentos/e92e6f9fe4982f37a96fc10fca2903f8.png', '0', NULL, 'Leila Fraga, alunas das formações em Consultoria de Imagem e Mosfopsicologia.', '2018-01-13 13:59:38', '2018-01-13 13:59:38'),
	(5, '<p>A experiência de realizar o curso pela EcoleSuperièure de Relooking foi espetacular. A didática é maravilhosa. Hoje me sinto plenamente preparada para atender pois tendo em minha mente claramente todas as etapas necessárias para um processo de relooking eficaz e gratificante para o cliente! Os grandes diferenciais são as técnicas de coaching e o aprendizado do teste revelador da colorimetria pessoal, que são fundamentais para um trabalho exclusivo e diferenciado no mercado de trabalho. A professora é muito competente, transmitindo segurança no que transmite e assim gerando um aprendizado bastante sólido. Além disso é acessível e disposta a participar ativamente de todo o processo de aprendizado e estruturação da carreira de cada aluna – incentivando e se colocando à disposição mesmo após o curso. Estou muito feliz pela oportunidade que tive e hoje estou muito mais segura da minha competência! Obrigada àEcole e a querida Vandressa!</p>', 'base64/depoimentos/51b243346fdaac2fa76681311278db1f.png', '0', NULL, 'Verônica Tavaniello, aluna da formação em Consultoria de Imagem', '2018-01-13 14:00:21', '2018-01-13 14:00:21');
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.ebooks: ~0 rows (aproximadamente)
DELETE FROM `ebooks`;
/*!40000 ALTER TABLE `ebooks` DISABLE KEYS */;
INSERT INTO `ebooks` (`id`, `titulo`, `valor`, `card`, `transacao`, `max_parcelas`, `link`, `file`, `created_at`, `updated_at`) VALUES
	(1, 'Ebook 1', '3443', 'base64/ebooks/887abb793df7be03ee70a2b60d623c0e.png', 4, 0, NULL, 'base64/ebooks/d5ff898e1bbb361e81487cc4c05d092e.pdf', '2018-02-04 19:25:19', '2018-02-04 19:25:19'),
	(2, 'teste', '45', 'base64/ebooks/38d6ffef64d2f33f170a903692880de0.png', 4, 0, NULL, 'base64/ebooks/59845887a26ece5b61f949a0cbe8f759.pdf', '2018-02-04 19:26:21', '2018-02-04 19:26:21');
/*!40000 ALTER TABLE `ebooks` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.exercicios
CREATE TABLE IF NOT EXISTS `exercicios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arquivo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `modulo_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exercicios_modulo_id_foreign` (`modulo_id`),
  CONSTRAINT `exercicios_modulo_id_foreign` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.exercicios: ~0 rows (aproximadamente)
DELETE FROM `exercicios`;
/*!40000 ALTER TABLE `exercicios` DISABLE KEYS */;
INSERT INTO `exercicios` (`id`, `titulo`, `link`, `arquivo`, `descricao_html`, `modulo_id`, `created_at`, `updated_at`) VALUES
	(1, 'Exercicio 1', '0', 'base64/exercicios/4daf699da328f88b2088bc6a8599055f.pdf', '<p>Exercicio 1</p>', 1, '2018-01-11 17:09:46', '2018-01-11 17:09:46');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.exercicio_comentarios: ~0 rows (aproximadamente)
DELETE FROM `exercicio_comentarios`;
/*!40000 ALTER TABLE `exercicio_comentarios` DISABLE KEYS */;
INSERT INTO `exercicio_comentarios` (`id`, `exercicio_id`, `user_id`, `comentario`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'grtr', '2018-02-04 21:35:11', '2018-02-04 21:35:11');
/*!40000 ALTER TABLE `exercicio_comentarios` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.formacaos
CREATE TABLE IF NOT EXISTS `formacaos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.formacaos: ~0 rows (aproximadamente)
DELETE FROM `formacaos`;
/*!40000 ALTER TABLE `formacaos` DISABLE KEYS */;
INSERT INTO `formacaos` (`id`, `nome`, `descricao_html`, `created_at`, `updated_at`) VALUES
	(1, 'Formações', '<p>Cursos de Formação</p>', '2018-01-11 16:40:04', '2018-01-11 18:22:58'),
	(2, 'Cursos Intensivos', '<p>Cursos Intensivos</p>', '2018-01-11 16:43:09', '2018-01-11 18:22:38'),
	(3, 'Cursos Online', '<p>Cursos Online</p>', '2018-01-11 18:23:22', '2018-01-11 18:23:22'),
	(4, 'Viagem de Estudos', '<p>Viagem de Estudos</p>', '2018-01-11 18:41:58', '2018-01-11 18:41:58');
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

-- Copiando dados para a tabela ecole378_ecole.imprensas: ~0 rows (aproximadamente)
DELETE FROM `imprensas`;
/*!40000 ALTER TABLE `imprensas` DISABLE KEYS */;
INSERT INTO `imprensas` (`id`, `titulo`, `descricao`, `descricao_html`, `created_at`, `updated_at`) VALUES
	(1, 'teste', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-01-11 18:34:22', '2018-01-11 18:34:22');
/*!40000 ALTER TABLE `imprensas` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.materials
CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arquivo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `modulo_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `materials_modulo_id_foreign` (`modulo_id`),
  CONSTRAINT `materials_modulo_id_foreign` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.materials: ~0 rows (aproximadamente)
DELETE FROM `materials`;
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` (`id`, `titulo`, `link`, `arquivo`, `descricao_html`, `modulo_id`, `created_at`, `updated_at`) VALUES
	(1, 'Material 1', '0', 'base64/materiais/8447cd22a31e438cc84a6685815f2cbf.pdf', '<p>descricao material 2</p>', 1, '2018-01-11 17:08:17', '2018-01-11 17:08:17');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.material_comentarios: ~0 rows (aproximadamente)
DELETE FROM `material_comentarios`;
/*!40000 ALTER TABLE `material_comentarios` DISABLE KEYS */;
INSERT INTO `material_comentarios` (`id`, `material_id`, `user_id`, `comentario`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'ggg', '2018-02-04 21:36:16', '2018-02-04 21:36:16');
/*!40000 ALTER TABLE `material_comentarios` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.material_restritos
CREATE TABLE IF NOT EXISTS `material_restritos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.material_restritos: ~0 rows (aproximadamente)
DELETE FROM `material_restritos`;
/*!40000 ALTER TABLE `material_restritos` DISABLE KEYS */;
INSERT INTO `material_restritos` (`id`, `titulo`, `link`, `file`, `created_at`, `updated_at`) VALUES
	(1, 'Cartela de Cores', '0', 'base64/material_restritos/90b08f138e4f18a118eaae587c425540.pdf', '2018-01-11 17:22:46', '2018-01-11 17:22:46'),
	(2, 'Consutloria de Imagem', 'https://www.youtube.com/embed/DCegkmbBjTg', 'http://br356.teste.website/~ecole378/ecolebrasil.com/public/', '2018-01-11 17:23:10', '2018-01-11 17:23:10');
/*!40000 ALTER TABLE `material_restritos` ENABLE KEYS */;

-- Copiando estrutura para tabela ecole378_ecole.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.migrations: ~30 rows (aproximadamente)
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
	(30, '2018_01_14_115644_create_blogs_table', 2);
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
  PRIMARY KEY (`id`),
  KEY `modulos_agenda_id_foreign` (`agenda_id`),
  CONSTRAINT `modulos_agenda_id_foreign` FOREIGN KEY (`agenda_id`) REFERENCES `agendas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.modulos: ~0 rows (aproximadamente)
DELETE FROM `modulos`;
/*!40000 ALTER TABLE `modulos` DISABLE KEYS */;
INSERT INTO `modulos` (`id`, `titulo`, `card`, `data_inicio`, `habilitado`, `descricao_html`, `agenda_id`, `created_at`, `updated_at`) VALUES
	(1, 'Módulo 1', NULL, '2018-01-08 16:54:08', NULL, '<p>Modulo 1</p>', 1, '2018-01-11 16:54:08', '2018-01-11 16:54:08'),
	(2, 'Módulo 2', NULL, '2018-02-01 16:54:40', NULL, '<p>Modulo 2</p>', 1, '2018-01-11 16:54:40', '2018-01-11 16:54:40'),
	(3, '3423423', NULL, '2018-01-16 19:38:42', NULL, '<p>3423423423423</p>', 3, '2018-01-19 19:38:42', '2018-01-19 19:38:42');
/*!40000 ALTER TABLE `modulos` ENABLE KEYS */;

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
  `nascimento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `apresentacao_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao_html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `professors_user_id_foreign` (`user_id`),
  CONSTRAINT `professors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.professors: ~0 rows (aproximadamente)
DELETE FROM `professors`;
/*!40000 ALTER TABLE `professors` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `permission`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Alsssuno Ecole', 'administrador@ecole.com', '$2y$10$NJ9q8J5Gxr6p7HUNZnhz8O94How3k97AmO915TsQnJuGcphK4dBQm', 'AD', 'PcUCLvm4uCt59MPrKOQ8ioDM16jGGTMvTCRCnl8QxNYKqmH8QpTEOfa9cT4W', '2018-01-11 16:37:02', '2018-01-11 16:37:02'),
	(2, 'Professor Ecole', 'professor@ecole.com', '$2y$10$x2QccUfs/5i7WFXzYq1TYuw.h3snW0fq/RaIgVL/0HOYrZwW7EidS', 'PF', NULL, '2018-01-11 16:37:02', '2018-01-11 16:37:02'),
	(3, 'Aluno Ecole', 'aluno@ecole.com', '$2y$10$Db2mZN9DyM8N4z2VG4Pb2uclECAVaRPMNUC6uzyeucJvU0bQGK556', 'AL', 'kE4K7XSp4xlV2xW6VrnvXy8bqqniNMDcXljrFw3zqJLFJWwy2dqDKhahgzvn', '2018-01-11 16:37:02', '2018-01-11 16:37:02'),
	(4, 'Aluno Restrito Ecole', 'aluno_restrito@ecole.com', '$2y$10$r0rqCwHiJP5VOa.qEnGyFOYTE6OoZ3ha9OKa6pHkBHcoXaFDt6BSi', 'AR', NULL, '2018-01-11 16:37:02', '2018-01-11 16:37:02'),
	(5, 'Alberto', 'alberto.pimentel.94@gmail.com', '$2y$10$XwPMTqP3UGyxrlLcPGqxEeSc6JK3RlNyjoiNUad6TNTlMptkQRf6S', 'AL', 'tCiuG3IEILQv8oDrYz8TlEOYHoMofbDFEnVcEnCaEjVojCVxpZSWCt4ZsMul', '2018-01-11 17:11:24', '2018-01-11 18:14:43');
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
  PRIMARY KEY (`id`),
  KEY `videos_modulo_id_foreign` (`modulo_id`),
  CONSTRAINT `videos_modulo_id_foreign` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.videos: ~0 rows (aproximadamente)
DELETE FROM `videos`;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id`, `link_video`, `titulo`, `descricao_html`, `modulo_id`, `created_at`, `updated_at`) VALUES
	(1, 'https://www.youtube.com/embed/z5hh_aJcnKo', 'Videoconferência 1', '<p>descrição videoconferencia 1</p>', 1, '2018-01-11 17:04:35', '2018-01-11 17:04:35'),
	(2, 'https://www.youtube.com/embed/z5hh_aJcnKo', 'Videoconferência 2', '<p>descricao</p>', 2, '2018-01-11 17:05:01', '2018-01-11 17:05:01');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ecole378_ecole.video_comentarios: ~0 rows (aproximadamente)
DELETE FROM `video_comentarios`;
/*!40000 ALTER TABLE `video_comentarios` DISABLE KEYS */;
INSERT INTO `video_comentarios` (`id`, `video_id`, `user_id`, `comentario`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'teste', '2018-01-11 17:27:15', '2018-01-11 17:27:15'),
	(2, 1, 5, 'teste', '2018-01-11 18:19:03', '2018-01-11 18:19:03');
/*!40000 ALTER TABLE `video_comentarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
