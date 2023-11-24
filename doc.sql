-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla horarios.docentes: ~21 rows (aproximadamente)
DELETE FROM `docentes`;
INSERT INTO `docentes` (`id`, `nombre`, `base`, `fecha_nacimiento`, `categoria`, `comision`, `desc_comision`, `perfil`, `fecha_contrato_inicio`, `fecha_contrato_fin`, `fecha_horario`, `pe_id`, `created_at`, `updated_at`) VALUES
	(1, 'ARAGON GUAJARDO JESUS RAMIRO', '8860', '01/01/2022', 'PTC/ASOC2', 'Educación continua de IIM', 'xx', 'NA', '15/01/2024', '31/05/2024', '22/01/2024', 1, '2023-11-14 00:17:53', '2023-11-14 00:17:53'),
	(2, 'ESPINOZA ZALLAS EDGAR ALBERTO', '7909', '03/03/1991', 'PTC/ASOC3', 'Responsable de academia de Ingeniería en Mecatrónica', 'Responsable de academia de Ingeniería en Mecatrónica', 'PD', '15/01/2024', '31/05/2024', '22/01/2024', 1, '2023-11-25 05:53:45', '2023-11-25 05:53:45'),
	(3, 'GONZALEZ RODRIGUEZ HOMERO', '8863', '14/10/1982', 'PA 2', 'Educación continua de IM', 'Educación continua de IM', 'NA', '15/01/2024', '31/05/2024', '22/01/2024', 1, '2023-11-25 05:54:46', '2023-11-25 05:54:46'),
	(4, 'HERNANDEZ PANIAGUA ANTONIO RAFAEL', '8392', '04/05/1993', 'PA 2', 'NA', 'NA', 'NA', '15/01/2024', '31/05/2024', '22/01/2024', 1, '2023-11-25 05:55:22', '2023-11-25 05:55:22'),
	(5, 'MARTINEZ SANDOVAL ERNESTO', '9582', '24/01/1988', 'PA 3', 'Docente guía del programa educativo de IM.', 'Docente guía del programa educativo de IM.', 'NA', '15/01/2024', '31/05/2024', '22/01/2024', 1, '2023-11-25 05:56:04', '2023-11-25 05:56:04'),
	(6, 'MORALES QUINTERO CARLOS ALBERTO', '8233', '23/08/1979', 'PA 1', 'Docente guía del PE IH.', 'Docente guía del PE IH.', 'NA', '15/01/2024', '31/05/2024', '22/01/2024', 1, '2023-11-25 05:56:35', '2023-11-25 05:56:35'),
	(7, 'RAMIREZ YOCUPICIO SUSANA', '9425', '23/01/1990', 'PTC/ASOC2', 'Responsable de prácticas profesionales de IM', 'Responsable de prácticas profesionales de IM', 'NA', '15/01/2024', '31/05/2024', '22/01/2024', 1, '2023-11-25 05:57:06', '2023-11-25 05:57:06'),
	(8, 'RUIZ IBARRA JOEL', '6501', '12/08/1981', 'PTC/T1', 'Responsable Programa Institucional de Tutorías de los programas educativos IM e IIM.', 'Responsable Programa Institucional de Tutorías de los programas educativos IM e IIM.', 'NA', '01/01/2024', '31/12/2024', '22/01/2024', 1, '2023-11-25 05:57:40', '2023-11-25 05:57:52'),
	(9, 'AGUILAR LIMON JUAN PABLO', '760', '12/03/1973', 'PTC/ASOC4', 'Responsable de academia de Ingeniero Industrial en Manufactura y Responsable del Laboratorio de Ingeniería.Perfil deseable.', 'Responsable de academia de Ingeniero Industrial en Manufactura y Responsable del Laboratorio de Ingeniería.Perfil deseable.', 'PD', '01/01/2024', '31/12/2024', '22/01/2024', 2, '2023-11-25 05:58:26', '2023-11-25 05:58:26'),
	(10, 'ANDRADE SALINAS PATRICIA RAMONA', '6726', '31/08/1977', 'PTC/ASOC2', 'NA', 'NA', 'NA', '15/01/2024', '31/05/2024', '22/01/2024', 2, '2023-11-25 05:59:08', '2023-11-25 05:59:08'),
	(11, 'ARIAS HURTADO MARTHA PATRICIA', '7918', '01/08/1979', 'PA 2', 'NA', 'NA', 'NA', '15/01/2024', '31/05/2024', '22/01/2024', 2, '2023-11-25 05:59:32', '2023-11-25 05:59:32'),
	(12, 'ESPINOZA ZALLAS GAEL ALEJANDRO', '9767', '21/09/1992', 'PA 2', 'Responsable de Seguimiento de egresados del programa educativo de IIM', 'Responsable de Seguimiento de egresados del programa educativo de IIM', 'NA', '15/01/2024', '31/05/2024', '22/01/2024', 2, '2023-11-25 06:00:13', '2023-11-25 06:00:13'),
	(13, 'GARCIA VILCHES SUSANA', '8649', '17/08/1994', 'PA 2', 'NA', 'NA', 'NA', '15/01/2024', '31/05/2024', '22/01/2024', 2, '2023-11-25 06:00:46', '2023-11-25 06:00:46'),
	(14, 'GUTIERREZ MOROYOQUI MANUEL DE JESUS', '8079', '04/04/1966', 'PA 1', 'NA', 'NA', 'NA', '15/01/2024', '31/05/2024', '22/01/2024', 2, '2023-11-25 06:01:27', '2023-11-25 06:01:27'),
	(15, 'JUAREZ MORENO GABRIELA DONAJI', '6768', '17/05/1973', 'PA 2', 'Docente guía del Programa de Apoyo y Seguimiento Académico (PASA) del PE IIM.', 'Docente guía del Programa de Apoyo y Seguimiento Académico (PASA) del PE IIM.', 'NA', '15/01/2024', '31/05/2024', '22/01/2024', 2, '2023-11-25 06:01:55', '2023-11-25 06:01:55'),
	(16, 'MORGAN GARCIA DE LEON ADRIANA', '7922', '05/06/1982', 'PA 1', 'NA', 'NA', 'NA', '15/01/2024', '31/05/2024', '22/01/2024', 2, '2023-11-25 06:02:23', '2023-11-25 06:02:23'),
	(17, 'OCHOA SILVA ROSA GABRIELA GUADALUPE', '1', '10/12/1961', '1', '1', '1', '1', '15/01/2024', '31/05/2024', '22/01/2024', 2, '2023-11-25 06:02:59', '2023-11-25 06:02:59'),
	(18, 'PEREZ CRUZ RIGOBERTO ALONSO', '1', '10/12/1961', '1', '1', '1', '1', '15/01/2024', '31/05/2024', '22/01/2024', 2, '2023-11-25 06:03:11', '2023-11-25 06:03:11'),
	(19, 'TERMINEL ACOSTA JOSE MARIA', '143', '14/11/1956', '1', '1', '1', '1', '15/01/2024', '31/05/2024', '22/01/2024', 2, '2023-11-25 06:03:29', '2023-11-25 06:03:29'),
	(20, 'TORRES MORAN DAVID ENRIQUE', '7790', '13/03/1974', 'PA 2', '1', '1', '1', '15/01/2024', '31/05/2024', '22/01/2024', 2, '2023-11-25 06:04:00', '2023-11-25 06:04:00'),
	(21, 'YOCUPICIO SOLORIO ADRIANA GUADALUPE', '8021', '26/03/1980', 'PTC/ASOC2', '1', '1', '1', '15/01/2024', '31/05/2024', '22/01/2024', 2, '2023-11-25 06:04:26', '2023-11-25 06:04:26');

-- Volcando datos para la tabla horarios.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;

-- Volcando datos para la tabla horarios.generaciones: ~11 rows (aproximadamente)
DELETE FROM `generaciones`;
INSERT INTO `generaciones` (`id`, `nombre`, `semestre_id`, `created_at`, `updated_at`) VALUES
	(1, 'Gpo 01', 1, '2023-11-14 00:21:00', '2023-11-14 00:21:00'),
	(2, 'Gpo 02', 1, '2023-11-14 00:21:07', '2023-11-14 00:21:07'),
	(3, 'Gpo 01', 2, '2023-11-14 00:21:14', '2023-11-14 00:21:14'),
	(4, 'Gpo 01', 3, '2023-11-14 00:21:22', '2023-11-14 00:21:22'),
	(5, 'Gpo 01', 4, '2023-11-14 00:21:28', '2023-11-14 00:21:28'),
	(6, 'Gpo 02', 4, '2023-11-14 00:21:37', '2023-11-14 00:21:37'),
	(7, 'Gpo 01', 5, '2023-11-14 00:21:43', '2023-11-14 00:21:43'),
	(8, 'Gpo 02', 5, '2023-11-14 00:21:50', '2023-11-14 00:21:50'),
	(9, 'Gpo 01', 6, '2023-11-14 00:21:58', '2023-11-14 00:22:28'),
	(10, 'Gpo 02', 6, '2023-11-14 00:22:04', '2023-11-14 00:22:04'),
	(11, 'Gpo 01', 7, '2023-11-14 00:22:11', '2023-11-14 00:22:11'),
	(12, 'Gpo 01', 8, '2023-11-14 00:22:16', '2023-11-14 00:22:16');

-- Volcando datos para la tabla horarios.horarios: ~2 rows (aproximadamente)
DELETE FROM `horarios`;
INSERT INTO `horarios` (`id`, `materia_id`, `docente_id`, `salon_id`, `start_time`, `end_time`, `dia`, `hora_inicio`, `hora_fin`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, '2007-01-01 08:00:00', '2007-01-01 09:00:00', 'Lunes', 8, 9, '2023-11-14 04:25:57', '2023-11-14 04:25:57'),
	(2, 2, 1, 1, '2007-01-01 09:00:00', '2007-01-01 10:00:00', 'Lunes', 9, 10, '2023-11-14 04:36:20', '2023-11-14 04:49:56');

-- Volcando datos para la tabla horarios.materias: ~4 rows (aproximadamente)
DELETE FROM `materias`;
INSERT INTO `materias` (`id`, `nombre`, `clave`, `plan`, `horas`, `horas_aula`, `horas_pla`, `generacion_id`, `created_at`, `updated_at`) VALUES
	(1, 'Inglés II', '022CB002', '21', 5, 5, 0, 1, '2023-11-14 02:09:21', '2023-11-14 04:32:16'),
	(2, 'Inglés II', '022CB002', '21', 5, 5, 0, 2, '2023-11-14 02:09:52', '2023-11-14 02:09:52'),
	(3, 'Costos Industriales', 'Costos Industriales', '21', 1, 1, 1, 1, '2023-11-14 04:52:53', '2023-11-14 04:52:53'),
	(4, 'Costos Industriales', 'Costos  Industriales', '21', 1, 1, 1, 2, '2023-11-14 04:53:17', '2023-11-14 04:53:17'),
	(5, 'Mecánica', 'Mecánica', '21', 1, 1, 1, 1, '2023-11-14 04:53:36', '2023-11-14 04:53:36');

-- Volcando datos para la tabla horarios.migrations: ~0 rows (aproximadamente)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2023_11_11_165030_create_educational_programs_table', 1),
	(7, '2023_11_11_165047_create_semesters_table', 1),
	(8, '2023_11_11_165057_create_generations_table', 1),
	(9, '2023_11_11_165101_create_subjects_table', 1),
	(10, '2023_11_11_165106_create_teachers_table', 1),
	(11, '2023_11_11_165109_create_classrooms_table', 1),
	(12, '2023_11_11_165113_create_schedules_table', 1);

-- Volcando datos para la tabla horarios.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;

-- Volcando datos para la tabla horarios.password_reset_tokens: ~0 rows (aproximadamente)
DELETE FROM `password_reset_tokens`;

-- Volcando datos para la tabla horarios.personal_access_tokens: ~0 rows (aproximadamente)
DELETE FROM `personal_access_tokens`;

-- Volcando datos para la tabla horarios.pes: ~2 rows (aproximadamente)
DELETE FROM `pes`;
INSERT INTO `pes` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'IM', '2023-11-14 00:09:43', '2023-11-14 00:09:43'),
	(2, 'IIM', '2023-11-14 00:09:48', '2023-11-14 00:09:48');

-- Volcando datos para la tabla horarios.salones: ~9 rows (aproximadamente)
DELETE FROM `salones`;
INSERT INTO `salones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'E01', '2023-11-14 00:19:30', '2023-11-14 00:19:30'),
	(2, 'E02', '2023-11-14 00:19:35', '2023-11-14 00:19:35'),
	(3, 'E03', '2023-11-14 00:19:40', '2023-11-14 00:19:40'),
	(4, 'E04', '2023-11-14 00:19:45', '2023-11-14 00:19:45'),
	(5, 'E05', '2023-11-14 00:19:49', '2023-11-14 00:19:49'),
	(6, 'E06', '2023-11-14 00:19:54', '2023-11-14 00:19:54'),
	(7, 'E07', '2023-11-14 00:19:59', '2023-11-14 00:19:59'),
	(8, 'E08', '2023-11-14 00:20:04', '2023-11-14 00:20:04'),
	(9, 'SAA2', '2023-11-14 00:20:10', '2023-11-14 00:20:10'),
	(10, 'PLA', '2023-11-14 04:42:58', '2023-11-14 04:42:58');

-- Volcando datos para la tabla horarios.semestres: ~8 rows (aproximadamente)
DELETE FROM `semestres`;
INSERT INTO `semestres` (`id`, `nombre`, `pe_id`, `created_at`, `updated_at`) VALUES
	(1, '2do', 1, '2023-11-14 00:18:30', '2023-11-14 00:18:30'),
	(2, '4to', 1, '2023-11-14 00:18:38', '2023-11-14 00:18:38'),
	(3, '6to', 1, '2023-11-14 00:18:44', '2023-11-14 00:18:44'),
	(4, '8vo', 1, '2023-11-14 00:18:52', '2023-11-14 00:18:52'),
	(5, '2do', 2, '2023-11-14 00:18:58', '2023-11-14 00:18:58'),
	(6, '4to', 2, '2023-11-14 00:19:06', '2023-11-14 00:19:06'),
	(7, '6to', 2, '2023-11-14 00:19:13', '2023-11-14 00:19:13'),
	(8, '8vo', 2, '2023-11-14 00:19:19', '2023-11-14 00:19:19');

-- Volcando datos para la tabla horarios.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Alan Espinoza', 'admin@admin.com', NULL, '$2y$12$3s5AY1eF.7ZBKPM14YJ1w.V6yFXtRXqwtzXLJZku9ZRJd.eAQD22a', NULL, '2023-11-14 00:09:32', '2023-11-14 00:09:32');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
