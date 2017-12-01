-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2017 a las 19:45:53
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `museo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienes`
--

CREATE TABLE `bienes` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_id` int(10) UNSIGNED NOT NULL,
  `autor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lugar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `tomo` int(11) DEFAULT NULL,
  `folio` int(11) DEFAULT NULL,
  `paginas` int(11) DEFAULT NULL,
  `legajo` int(11) DEFAULT NULL,
  `material_id` int(10) UNSIGNED NOT NULL,
  `completo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procedencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotografo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bienes`
--

INSERT INTO `bienes` (`id`, `codigo`, `tipo_id`, `autor`, `nombre`, `lugar`, `fecha`, `tomo`, `folio`, `paginas`, `legajo`, `material_id`, `completo`, `procedencia`, `estado_id`, `foto`, `fotografo`, `descripcion`, `observacion`, `created_at`, `updated_at`) VALUES
(1, 'COD5a1781a68cccc', 1, 'jdhfijk', 'prueba', 'jdksfnsdkjnjds', '2017-11-24', NULL, NULL, NULL, NULL, 1, 'no', 'ñlg,ñldgmlkdsmlfmg', 1, 'XclxM63A5XcTQ8swz5sWmVRtRDnxakkBlkgOEcho.jpeg', 'klmlkmfs', 'fklmsdlkfmlsadmklf', 'fklamsdlfñmñlsmdplkfñm', '2017-11-24 05:19:18', '2017-11-24 05:19:18'),
(2, 'COD5a19caea26433', 1, 'jhdkfsjhnskd', 'Cuadro', 'lkmdflkmdslkfm', '2017-11-25', NULL, NULL, NULL, NULL, 1, 'si', 'lkjsgfklsjndk', 2, '38qO2xy9vSe1uf27hgSeASFvbj0WHa2O2YIYpNA2.jpeg', 'lkjmfkgnmfl', 'skdgnkjsndkgjms', 'sdnmgfdsklnksn', '2017-11-25 22:56:26', '2017-11-25 22:57:01'),
(3, 'COD5a1b0f38c196f', 5, 'juan perez', 'Cuadro-pintura', 'nose', '2011-02-09', 1, 23, NULL, 1232, 3, 'si', 'Nose', 4, 'gQeUVUfqD37UL4QtxXXVnoRt1CG4JHio7NqVpfmI.jpeg', 'bart simpson', 'Perros jugando al poker', 'nose', '2017-11-26 22:00:08', '2017-11-26 22:00:08'),
(4, 'COD5a1c121fa75f2', 6, 'juan perez', 'Bien documental', 'rawson', '2001-02-09', 1, 23, 456, 90087, 3, 'si', 'Chubut', 3, '1gdmBzaDMLy4ok3ZLCUpnlKfZiT33lOIcP3tttpM.jpeg', 'yo', 'perros jugando al poker', 'perros', '2017-11-27 16:24:47', '2017-11-27 16:31:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienes_descriptores`
--

CREATE TABLE `bienes_descriptores` (
  `id` int(10) UNSIGNED NOT NULL,
  `bienes_id` int(10) UNSIGNED NOT NULL,
  `descriptores_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bienes_descriptores`
--

INSERT INTO `bienes_descriptores` (`id`, `bienes_id`, `descriptores_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 3, NULL, NULL),
(12, 2, 1, NULL, NULL),
(13, 2, 2, NULL, NULL),
(14, 2, 4, NULL, NULL),
(16, 3, 5, NULL, NULL),
(20, 4, 1, NULL, NULL),
(21, 4, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descriptores`
--

CREATE TABLE `descriptores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `descriptores`
--

INSERT INTO `descriptores` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Arte religioso', '', NULL, NULL),
(2, 'Escultura', '', NULL, NULL),
(3, 'Arte precolombino', '', NULL, NULL),
(4, 'Antiguo', 'Descriptor antiguo', '2017-11-26 01:02:56', '2017-11-26 01:02:56'),
(5, 'Pintura', 'describe que el bien es una pintura o cuadro', '2017-11-26 21:56:22', '2017-11-26 21:57:22'),
(6, 'Arte antiguo', 'descripcion de un bien', '2017-11-27 16:21:14', '2017-11-27 16:21:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Regular', 'Estado de bien en condiciones normales', NULL, NULL),
(2, 'Malo', 'Estado de bien en condiciones malas', NULL, NULL),
(3, 'Bueno', 'Estado de bien en buenas condiciones', NULL, NULL),
(4, 'Muy bueno', 'bien en muy buenas condiciones', '2017-11-26 21:54:59', '2017-11-26 21:54:59'),
(5, 'Muy Malo', 'descripcion de un bien', '2017-11-27 16:17:30', '2017-11-27 16:17:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Plata', '', NULL, NULL),
(2, 'Oro', '', NULL, NULL),
(3, 'Papel', '', NULL, NULL),
(4, 'Algodon', '', NULL, NULL),
(5, 'Terciopelo', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_01_141538_create_materiales_table', 1),
(4, '2017_11_02_002852_create_tipos_table', 1),
(5, '2017_11_02_022248_create_descriptores_table', 1),
(6, '2017_11_02_022941_create_estados_table', 1),
(7, '2017_11_02_023828_create_bienes_table', 1),
(8, '2017_11_03_182405_create_bienes_descriptores_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Planos', '', NULL, NULL),
(2, 'Pintura', '', NULL, NULL),
(3, 'Orfebreria', '', NULL, NULL),
(4, 'Ceramica', '', NULL, NULL),
(5, 'Pintura antigua', 'descripcion', '2017-11-26 21:55:41', '2017-11-26 21:55:41'),
(6, 'Reliquia antigua', 'descripcion del bien', '2017-11-27 16:19:01', '2017-11-27 16:19:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@hotmail.com', '$2y$10$I.oPEeKSB4bJOIGsLWpRHe4QLT24wjlF3OZE50Vv4REV6/0AauJCu', 'l2bswvMRrpJPbyX26P3qSoFday7uoiZKoavXT8SZviW0zRXoYRJ0SVPThTWA', '2017-11-24 05:18:23', '2017-11-24 05:18:23'),
(2, 'gonzalo', 'gonzalo@hotmail.com', '$2y$10$F8CiBjKCZG1YfijeovZyyeew5LZQkODOBR54953g5VJOLhKy.1n5O', 'XngNG3dMrRFnShaNKkTIF9lLJu9kAKSCr86ozN4yB9NNrTB0owb5HjObD82W', '2017-11-26 21:53:59', '2017-11-26 21:53:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bienes`
--
ALTER TABLE `bienes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bienes_tipo_id_foreign` (`tipo_id`),
  ADD KEY `bienes_material_id_foreign` (`material_id`),
  ADD KEY `bienes_estado_id_foreign` (`estado_id`);

--
-- Indices de la tabla `bienes_descriptores`
--
ALTER TABLE `bienes_descriptores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bienes_descriptores_bienes_id_foreign` (`bienes_id`),
  ADD KEY `bienes_descriptores_descriptores_id_foreign` (`descriptores_id`);

--
-- Indices de la tabla `descriptores`
--
ALTER TABLE `descriptores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bienes`
--
ALTER TABLE `bienes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `bienes_descriptores`
--
ALTER TABLE `bienes_descriptores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `descriptores`
--
ALTER TABLE `descriptores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bienes`
--
ALTER TABLE `bienes`
  ADD CONSTRAINT `bienes_estado_id_foreign` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`),
  ADD CONSTRAINT `bienes_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materiales` (`id`),
  ADD CONSTRAINT `bienes_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tipos` (`id`);

--
-- Filtros para la tabla `bienes_descriptores`
--
ALTER TABLE `bienes_descriptores`
  ADD CONSTRAINT `bienes_descriptores_bienes_id_foreign` FOREIGN KEY (`bienes_id`) REFERENCES `bienes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bienes_descriptores_descriptores_id_foreign` FOREIGN KEY (`descriptores_id`) REFERENCES `descriptores` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
