-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2024 a las 03:18:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `testcrud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_users`
--

CREATE TABLE `login_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `deparment_user` varchar(225) NOT NULL,
  `password_user` varchar(250) NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `login_users`
--

INSERT INTO `login_users` (`id`, `user_name`, `email_user`, `deparment_user`, `password_user`, `estado`) VALUES
(10, 'looc', 'dds', 'dsds', '$2y$10$yZGcsap0mQLyND/L6A6AQe/6cH2W58JfBNL0ZadC3OzVF/7rUfL.a', b'0'),
(11, 'looc', 'dds', 'dsds', '$2y$10$yJrFQRFMncV4iuU7OjteIeaBJRdogOCGv4jM9N4Rt6ZIwAZFi35Gm', b'0'),
(12, 'Prueba', 'Prueba@gmail.com', 'Bolivar', '$2y$10$V7H2wwmH.gaVwGPoG4stSek4WQqkDwSyPWyTfx8YpVTLX4qA7jY76', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nombre` varchar(100) NOT NULL,
  `usuario_email` varchar(100) NOT NULL,
  `usuario_departamento` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_email`, `usuario_departamento`) VALUES
(23, 'Prueba', 'Prueba@gmail.com', 'Bolivar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login_users`
--
ALTER TABLE `login_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login_users`
--
ALTER TABLE `login_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
