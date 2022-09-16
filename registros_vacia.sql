-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2022 a las 17:08:30
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registros_vacia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `ape_paterno` varchar(40) DEFAULT NULL,
  `ape_materno` varchar(40) DEFAULT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `matricula` varchar(40) DEFAULT NULL,
  `email_per` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `no_ss` varchar(11) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `id_procesos` int(10) NOT NULL,
  `id_carrera` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_def`
--

CREATE TABLE `alumno_def` (
  `id` int(11) NOT NULL,
  `grupo` varchar(55) DEFAULT NULL,
  `cuatrimestre` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_terminacion` time DEFAULT NULL,
  `fecha_terminacion` date DEFAULT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `id_proceso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor_academico`
--

CREATE TABLE `asesor_academico` (
  `id` int(11) NOT NULL,
  `ape_paterno_aa` varchar(40) DEFAULT NULL,
  `ape_materno_aa` varchar(40) DEFAULT NULL,
  `nombres_aa` varchar(100) DEFAULT NULL,
  `tel_lada_aa` varchar(10) DEFAULT NULL,
  `tel_num_aa` varchar(10) DEFAULT NULL,
  `email_aa` varchar(40) DEFAULT NULL,
  `id_cargo_aa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor_empresarial`
--

CREATE TABLE `asesor_empresarial` (
  `id` int(11) NOT NULL,
  `ape_paterno_ae` varchar(40) DEFAULT NULL,
  `ape_materno_ae` varchar(40) DEFAULT NULL,
  `nombres_ae` varchar(100) DEFAULT NULL,
  `tel_lada_ae` varchar(10) DEFAULT NULL,
  `tel_num_ae` varchar(10) DEFAULT NULL,
  `email_ae` varchar(40) DEFAULT NULL,
  `id_cargo_ae` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor_empresarial_def`
--

CREATE TABLE `asesor_empresarial_def` (
  `id` int(11) NOT NULL,
  `puesto` varchar(255) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_horaria`
--

CREATE TABLE `carga_horaria` (
  `id` int(11) NOT NULL,
  `nombre_c_h` varchar(50) DEFAULT NULL,
  `estado_c_h` int(1) DEFAULT NULL,
  `observaciones_c_h` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nombre_cargo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombre_cargo`) VALUES
(1, 'Lic.'),
(2, 'Ing.'),
(3, 'Mtro.'),
(4, 'Arq.'),
(5, 'Dr.'),
(6, 'Dra.'),
(7, 'C.P.T.'),
(8, 'Profr'),
(9, 'Profra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `nombre_carrera`) VALUES
(1, 'Ing. Biomédica'),
(2, 'Ing. Biotecnología'),
(3, 'Ing. Financiera'),
(4, 'Ing. Software'),
(5, 'Lic. Admon Y Gestion De PyMes'),
(6, 'Lic. Gestion Empresarial'),
(7, 'Lic. Terapia Fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta_aceptacion`
--

CREATE TABLE `carta_aceptacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta_liberacion`
--

CREATE TABLE `carta_liberacion` (
  `id` int(11) NOT NULL,
  `nombre_c_l` varchar(50) DEFAULT NULL,
  `estado_c_l` int(1) DEFAULT NULL,
  `observaciones_c_l` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta_presentacion`
--

CREATE TABLE `carta_presentacion` (
  `id` int(11) NOT NULL,
  `nombre_c_p` varchar(50) DEFAULT NULL,
  `estado_c_p` int(1) DEFAULT NULL,
  `observaciones_c_p` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta_responsiva`
--

CREATE TABLE `carta_responsiva` (
  `id` int(11) NOT NULL,
  `nombre_c_r` varchar(50) DEFAULT NULL,
  `estado_c_r` int(1) DEFAULT NULL,
  `observaciones_c_r` varchar(255) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cedula_registro`
--

CREATE TABLE `cedula_registro` (
  `id` int(11) NOT NULL,
  `nombre_c_r` varchar(50) DEFAULT NULL,
  `estado_c_r` int(1) DEFAULT NULL,
  `observaciones_c_r` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `constancia_derecho`
--

CREATE TABLE `constancia_derecho` (
  `id` int(11) NOT NULL,
  `nombre_c_d` varchar(50) DEFAULT NULL,
  `estado_c_d` int(1) DEFAULT NULL,
  `observaciones_c_d` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_proyecto`
--

CREATE TABLE `definicion_proyecto` (
  `id` int(11) NOT NULL,
  `nombre_d_p` varchar(50) DEFAULT NULL,
  `estado_d_p` int(1) DEFAULT NULL,
  `observaciones_d_p` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_def`
--

CREATE TABLE `detalle_def` (
  `id` int(11) NOT NULL,
  `actividades` text DEFAULT NULL,
  `resultados` text DEFAULT NULL,
  `evidencia` text DEFAULT NULL,
  `instrumentos` text DEFAULT NULL,
  `asignaturas` text DEFAULT NULL,
  `topicos` text DEFAULT NULL,
  `estrategias` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `id_c_horaria` int(11) DEFAULT NULL,
  `id_c_derecho` int(11) DEFAULT NULL,
  `id_c_responsiva` int(11) DEFAULT NULL,
  `id_c_presentacion` int(11) DEFAULT NULL,
  `id_c_aceptacion` int(11) DEFAULT NULL,
  `id_c_registro` int(11) DEFAULT NULL,
  `id_d_proyecto` int(11) DEFAULT NULL,
  `id_c_liberacion` int(11) DEFAULT NULL,
  `id_proceso` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre_emp` varchar(255) DEFAULT NULL,
  `giro` varchar(40) DEFAULT NULL,
  `direccion_emp` varchar(255) DEFAULT NULL,
  `ape_paterno_rh` varchar(40) DEFAULT NULL,
  `ape_materno_rh` varchar(40) DEFAULT NULL,
  `nombres_rh` varchar(100) DEFAULT NULL,
  `tel_lada` varchar(10) DEFAULT NULL,
  `tel_num` varchar(10) DEFAULT NULL,
  `tel_ext` varchar(10) DEFAULT NULL,
  `email_emp` varchar(40) DEFAULT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas_del_proyecto`
--

CREATE TABLE `etapas_del_proyecto` (
  `id` int(11) NOT NULL,
  `descripcion_etapas` text DEFAULT NULL,
  `semana_inicial` date DEFAULT NULL,
  `semana_final` date DEFAULT NULL,
  `horas` int(11) DEFAULT NULL,
  `descripcion_competencias` text DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `id_asesor_emp` int(11) DEFAULT NULL,
  `id_asesor_aca` int(11) DEFAULT NULL,
  `id_proyecto` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_def`
--

CREATE TABLE `formulario_def` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_asesor_emp` int(11) DEFAULT NULL,
  `id_proyecto` int(11) DEFAULT NULL,
  `id_detalle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `id_procesos` int(11) NOT NULL,
  `nombre_proceso` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`id_procesos`, `nombre_proceso`) VALUES
(1, 'Estancías 1'),
(2, 'Estancías 2'),
(3, 'Estadía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `nombre_proyecto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_def`
--

CREATE TABLE `proyecto_def` (
  `id` int(11) NOT NULL,
  `objetivos_proyecto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL,
  `id_formulario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_def`
--

CREATE TABLE `respuesta_def` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL,
  `id_formulario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_doc`
--

CREATE TABLE `respuesta_doc` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL,
  `id_documentos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_etapa`
--

CREATE TABLE `respuesta_etapa` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) UNSIGNED DEFAULT NULL,
  `id_etapa_proyecto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `nombre_tipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `nombre_tipo`) VALUES
(1, 'Micro'),
(2, 'Pequeña'),
(3, 'Mediana'),
(4, 'Grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidad`
--

CREATE TABLE `universidad` (
  `id` int(11) NOT NULL,
  `nombre_u` varchar(100) DEFAULT NULL,
  `cargo_u` varchar(100) DEFAULT NULL,
  `firma` varchar(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `universidad`
--

INSERT INTO `universidad` (`id`, `nombre_u`, `cargo_u`, `firma`, `updated_at`) VALUES
(1, 'Lic. Mario David Asencio Pérez', 'Encargado de la Dirección de Vinculación, Difusión y Extensión Universitaria', 'firma de Dir. Vinculación.png', '2022-04-27 15:33:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'soportestanciasyestadias@upqroo.edu.mx\r\n', '2022-05-02 15:05:32', '$2y$10$aRLx9bf7oJCHUhhbiGhCvuwYXJZfAMby593QxjpEWsKWfBkOPVcda', 'admin', NULL, NULL, NULL, '2022-05-02 17:05:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Proceso` (`id_procesos`),
  ADD KEY `ID_Carrera` (`id_carrera`);

--
-- Indices de la tabla `alumno_def`
--
ALTER TABLE `alumno_def`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asesor_academico`
--
ALTER TABLE `asesor_academico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Cargo` (`id_cargo_aa`);

--
-- Indices de la tabla `asesor_empresarial`
--
ALTER TABLE `asesor_empresarial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Cargo` (`id_cargo_ae`);

--
-- Indices de la tabla `asesor_empresarial_def`
--
ALTER TABLE `asesor_empresarial_def`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carga_horaria`
--
ALTER TABLE `carga_horaria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `carta_aceptacion`
--
ALTER TABLE `carta_aceptacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carta_liberacion`
--
ALTER TABLE `carta_liberacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carta_presentacion`
--
ALTER TABLE `carta_presentacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carta_responsiva`
--
ALTER TABLE `carta_responsiva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cedula_registro`
--
ALTER TABLE `cedula_registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `constancia_derecho`
--
ALTER TABLE `constancia_derecho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `definicion_proyecto`
--
ALTER TABLE `definicion_proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_def`
--
ALTER TABLE `detalle_def`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_c_aceptacion` (`id_c_aceptacion`),
  ADD KEY `id_c_registro` (`id_c_registro`),
  ADD KEY `id_d_proyecto` (`id_d_proyecto`),
  ADD KEY `id_c_liberacion` (`id_c_liberacion`),
  ADD KEY `id_proceso` (`id_proceso`),
  ADD KEY `id_c_horaria` (`id_c_horaria`),
  ADD KEY `id_c_derecho` (`id_c_derecho`),
  ADD KEY `id_c_responsiva` (`id_c_responsiva`),
  ADD KEY `id_c_presentacion` (`id_c_presentacion`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Tipo` (`id_tipo`);

--
-- Indices de la tabla `etapas_del_proyecto`
--
ALTER TABLE `etapas_del_proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Alumno` (`id_alumno`),
  ADD KEY `ID_Empresa` (`id_empresa`),
  ADD KEY `ID_Asesor_Emp` (`id_asesor_emp`),
  ADD KEY `ID_Asesor_Aca` (`id_asesor_aca`),
  ADD KEY `ID_Proyecto` (`id_proyecto`);

--
-- Indices de la tabla `formulario_def`
--
ALTER TABLE `formulario_def`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_asesor_emp` (`id_asesor_emp`),
  ADD KEY `id_proyecto` (`id_proyecto`),
  ADD KEY `id_detalle` (`id_detalle`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`id_procesos`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyecto_def`
--
ALTER TABLE `proyecto_def`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Usuario` (`id_usuario`),
  ADD KEY `ID_Formulario` (`id_formulario`);

--
-- Indices de la tabla `respuesta_def`
--
ALTER TABLE `respuesta_def`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_formulario` (`id_formulario`);

--
-- Indices de la tabla `respuesta_doc`
--
ALTER TABLE `respuesta_doc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_documentos` (`id_documentos`);

--
-- Indices de la tabla `respuesta_etapa`
--
ALTER TABLE `respuesta_etapa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_etapa_proyecto` (`id_etapa_proyecto`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `universidad`
--
ALTER TABLE `universidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT de la tabla `alumno_def`
--
ALTER TABLE `alumno_def`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `asesor_academico`
--
ALTER TABLE `asesor_academico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT de la tabla `asesor_empresarial`
--
ALTER TABLE `asesor_empresarial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT de la tabla `asesor_empresarial_def`
--
ALTER TABLE `asesor_empresarial_def`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `carga_horaria`
--
ALTER TABLE `carga_horaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `carta_aceptacion`
--
ALTER TABLE `carta_aceptacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `carta_liberacion`
--
ALTER TABLE `carta_liberacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `carta_presentacion`
--
ALTER TABLE `carta_presentacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `carta_responsiva`
--
ALTER TABLE `carta_responsiva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cedula_registro`
--
ALTER TABLE `cedula_registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `constancia_derecho`
--
ALTER TABLE `constancia_derecho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `definicion_proyecto`
--
ALTER TABLE `definicion_proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `detalle_def`
--
ALTER TABLE `detalle_def`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT de la tabla `etapas_del_proyecto`
--
ALTER TABLE `etapas_del_proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=856;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT de la tabla `formulario_def`
--
ALTER TABLE `formulario_def`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `id_procesos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT de la tabla `proyecto_def`
--
ALTER TABLE `proyecto_def`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuesta_def`
--
ALTER TABLE `respuesta_def`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuesta_doc`
--
ALTER TABLE `respuesta_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuesta_etapa`
--
ALTER TABLE `respuesta_etapa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `universidad`
--
ALTER TABLE `universidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_procesos`) REFERENCES `procesos` (`id_procesos`),
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id_carrera`);

--
-- Filtros para la tabla `asesor_academico`
--
ALTER TABLE `asesor_academico`
  ADD CONSTRAINT `asesor_academico_ibfk_1` FOREIGN KEY (`id_cargo_aa`) REFERENCES `cargo` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asesor_empresarial`
--
ALTER TABLE `asesor_empresarial`
  ADD CONSTRAINT `asesor_empresarial_ibfk_2` FOREIGN KEY (`id_cargo_ae`) REFERENCES `cargo` (`id_cargo`);

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`id_c_aceptacion`) REFERENCES `carta_aceptacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_2` FOREIGN KEY (`id_c_registro`) REFERENCES `cedula_registro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_3` FOREIGN KEY (`id_d_proyecto`) REFERENCES `definicion_proyecto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_4` FOREIGN KEY (`id_c_liberacion`) REFERENCES `carta_liberacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_5` FOREIGN KEY (`id_c_horaria`) REFERENCES `carga_horaria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_6` FOREIGN KEY (`id_c_derecho`) REFERENCES `constancia_derecho` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_7` FOREIGN KEY (`id_c_responsiva`) REFERENCES `carta_responsiva` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documentos_ibfk_8` FOREIGN KEY (`id_c_presentacion`) REFERENCES `carta_presentacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`);

--
-- Filtros para la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD CONSTRAINT `formulario_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_ibfk_2` FOREIGN KEY (`id_asesor_aca`) REFERENCES `asesor_academico` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_ibfk_3` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_ibfk_4` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_ibfk_5` FOREIGN KEY (`id_asesor_emp`) REFERENCES `asesor_empresarial` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `formulario_def`
--
ALTER TABLE `formulario_def`
  ADD CONSTRAINT `formulario_def_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno_def` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_def_ibfk_2` FOREIGN KEY (`id_asesor_emp`) REFERENCES `asesor_empresarial_def` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_def_ibfk_3` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto_def` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulario_def_ibfk_4` FOREIGN KEY (`id_detalle`) REFERENCES `detalle_def` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`id_formulario`) REFERENCES `formulario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `respuesta_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta_def`
--
ALTER TABLE `respuesta_def`
  ADD CONSTRAINT `respuesta_def_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `respuesta_def_ibfk_2` FOREIGN KEY (`id_formulario`) REFERENCES `formulario_def` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta_doc`
--
ALTER TABLE `respuesta_doc`
  ADD CONSTRAINT `respuesta_doc_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `respuesta_doc_ibfk_2` FOREIGN KEY (`id_documentos`) REFERENCES `documentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta_etapa`
--
ALTER TABLE `respuesta_etapa`
  ADD CONSTRAINT `respuesta_etapa_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `respuesta_etapa_ibfk_2` FOREIGN KEY (`id_etapa_proyecto`) REFERENCES `etapas_del_proyecto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
