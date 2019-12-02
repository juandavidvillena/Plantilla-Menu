-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2019 a las 10:36:09
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plantillamenu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compania`
--

CREATE TABLE `compania` (
  `idCompania` int(11) NOT NULL,
  `nom_com` varchar(255) DEFAULT NULL,
  `logo_com` varchar(255) DEFAULT NULL,
  `tel_com` int(9) NOT NULL,
  `dir_com` varchar(255) DEFAULT NULL,
  `admin_com` int(11) NOT NULL,
  `email_com` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compania`
--

INSERT INTO `compania` (`idCompania`, `nom_com`, `logo_com`, `tel_com`, `dir_com`, `admin_com`, `email_com`) VALUES
(1, 'Bocallena Teatinos', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTEhIWFhUVGBkYGBgYFRcaFRkWFhcYGBgYFhcYHSggGB0lHRcVIjEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGyslHSUtLS8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOYA2wMBIgACEQEDEQH/', 655554875, 'Av. Parménides, 10, 29010 Málaga', 1, 'contacto@bocallena.es'),
(2, 'Bocallena Marbella', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTEhIWFhUVGBkYGBgYFRcaFRkWFhcYGBgYFhcYHSggGB0lHRcVIjEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGyslHSUtLS8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOYA2wMBIgACEQEDEQH/', 655554875, 'Av. Estepona, 10, 29018 Marbella', 1, 'contacto@bocallena.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plato`
--

CREATE TABLE `plato` (
  `idPlato` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `ingredientes` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `alergeno` varchar(255) DEFAULT NULL,
  `disponible` tinyint(1) NOT NULL DEFAULT 1,
  `idTipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plato`
--

INSERT INTO `plato` (`idPlato`, `nombre`, `foto`, `ingredientes`, `precio`, `alergeno`, `disponible`, `idTipo`) VALUES
(1, 'Pasta', NULL, 'diarrea', 15, 'vomitivo', 1, 15),
(2, 'Jamón iberico', NULL, 'Ibérico de bellota - Cinco Jotas', 16, NULL, 1, 15),
(5, 'Buñuelos de bacalao', NULL, 'Bacalao rebozados con miel de caña', 6, NULL, 1, 15),
(6, 'Aceitunas', NULL, 'Combinado de la casa ', 2, NULL, 1, 15),
(9, 'Ensalada Cesar', NULL, 'Pollo, salsa cesar, pan , lechuga', 8, NULL, 1, 4),
(10, 'Rusa del mono', NULL, 'Patatas, mayonesa, guisantes, zanahoria y granada', 6, NULL, 1, 15),
(13, 'Croquetas de la casa', NULL, 'Pollo, leche, nuez moscada ', 6, NULL, 1, 15),
(19, 'Pluma de bellota a la brasa', NULL, 'Cortes finos de pluma con un toque de especias', 15, NULL, 1, 1),
(20, 'Canelones rabo de toro', NULL, 'salsa foie, bechamel, rabo de toro', 11, 'Lactosa', 1, 1),
(21, 'Brochetas de lechal', NULL, 'Tabule de quinoa, yogurt de remolacha y verduras', 8, '', 1, 1),
(22, 'Entrecot de lomo alto', NULL, '500g de entrecot madurado con patatas y pimientos', 27, '', 1, 1),
(23, 'Carrillera iberica', NULL, 'CErdo, cardamomo, pure de patatas', 12, '', 1, 1),
(29, 'Burger del mono', NULL, 'Ternera, mayonesa de mojo con cebolla caramelizada', 9, NULL, 1, 1),
(49, 'Tartar de Salmon', NULL, 'Salmón con cebolla caramelizada con alga wakame y lechuga', 15, NULL, 1, 2),
(50, 'Calamar a la parrila', NULL, 'Calamar a la parrilla con especies del chef', 13, NULL, 1, 2),
(51, 'Pulpo a la gallega', NULL, 'Pulpo cocido en su jugo con pimentón dulce', 17, NULL, 1, 2),
(52, 'Tacos de pilpo', NULL, 'Pulpo rebozado con aguacates y avellanas al curry', 13, NULL, 1, 2),
(53, 'tataki atún', NULL, 'Atún con salsa de limon con pimenton picante', 0, NULL, 1, 2),
(54, 'Bacalao al pil-pil', NULL, 'Bacalao a la plancha con salsa picante', 14, NULL, 1, 2),
(61, 'Helado italiano', NULL, 'Vainilla, coco, chocolate, fresa o kinder', 3, NULL, 1, 6),
(62, 'Tarta de galletas', NULL, 'Chocolate, coco, crema de mantequilla, galletas y cafe', 3, NULL, 1, 6),
(63, 'Crepes rellenos', NULL, 'Chocolate, fresa, kinder, nueces, azucar', 2, NULL, 1, 6),
(64, 'Torrija de la abuela', NULL, 'Pan, leche, huevo y vino', 5, NULL, 1, 6),
(67, 'Crepes rellenos', NULL, 'Chocolate, fresa, kinder, nueces, azucar', 2, NULL, 1, 6),
(68, 'Torrija de la abuela', NULL, 'Pan, leche, huevo y vino', 5, NULL, 1, 6),
(76, 'Abadia Retuerta', NULL, 'Botella 1l', 29, NULL, 1, 7),
(77, 'Agua mineral', NULL, 'Botella 500ml', 2, NULL, 1, 7),
(78, 'Refrescos', NULL, 'Botellin 430ml', 2, NULL, 1, 7),
(79, 'Bala perdida', NULL, 'Botella 1l', 15, NULL, 1, 7),
(80, 'Alegre Crianza', NULL, 'Botella 1l', 16, NULL, 1, 7),
(81, 'Rosado ', NULL, 'Copa', 3, NULL, 1, 7),
(90, '  prueba', 'esquina.jpg', 'dfs  ', 0, '12', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_plato`
--

CREATE TABLE `tipo_plato` (
  `idTipo` int(11) NOT NULL,
  `nom_tipo` varchar(100) NOT NULL,
  `especialidad_idPlato` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_plato`
--

INSERT INTO `tipo_plato` (`idTipo`, `nom_tipo`, `especialidad_idPlato`) VALUES
(1, 'Carnes', 22),
(2, 'Pescado', NULL),
(4, 'Ensaladas', 9),
(6, 'Postres', NULL),
(7, 'Bebidas', NULL),
(15, 'Entrantes', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `idCom` int(11) DEFAULT NULL,
  `nom_usu` varchar(255) NOT NULL,
  `email_usu` varchar(255) NOT NULL,
  `tel_usu` int(9) NOT NULL,
  `es_admin` tinyint(1) NOT NULL DEFAULT 0,
  `con_usu` varchar(255) NOT NULL,
  `foto_usu` varchar(255) DEFAULT NULL,
  `api` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `idCom`, `nom_usu`, `email_usu`, `tel_usu`, `es_admin`, `con_usu`, `foto_usu`, `api`) VALUES
(1, NULL, 'Juan David', 'admin@admin.com', 653602072, 1, 'f6fdffe48c908deb0f4c3bd36c032e72', NULL, 'aaaaaaaaa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compania`
--
ALTER TABLE `compania`
  ADD PRIMARY KEY (`idCompania`),
  ADD KEY `fk_compania_admin` (`admin_com`);

--
-- Indices de la tabla `plato`
--
ALTER TABLE `plato`
  ADD PRIMARY KEY (`idPlato`),
  ADD KEY `fk_plato_tipo_plato_idTipo` (`idTipo`);

--
-- Indices de la tabla `tipo_plato`
--
ALTER TABLE `tipo_plato`
  ADD PRIMARY KEY (`idTipo`),
  ADD KEY `fk_tipo_plato_plato` (`especialidad_idPlato`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `FK_UsuarioCompania` (`idCom`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compania`
--
ALTER TABLE `compania`
  MODIFY `idCompania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `plato`
--
ALTER TABLE `plato`
  MODIFY `idPlato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `tipo_plato`
--
ALTER TABLE `tipo_plato`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compania`
--
ALTER TABLE `compania`
  ADD CONSTRAINT `fk_compania_admin` FOREIGN KEY (`admin_com`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `plato`
--
ALTER TABLE `plato`
  ADD CONSTRAINT `fk_plato_tipo_plato_idTipo` FOREIGN KEY (`idTipo`) REFERENCES `tipo_plato` (`idTipo`);

--
-- Filtros para la tabla `tipo_plato`
--
ALTER TABLE `tipo_plato`
  ADD CONSTRAINT `fk_tipo_plato_plato` FOREIGN KEY (`especialidad_idPlato`) REFERENCES `plato` (`idPlato`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_UsuarioCompania` FOREIGN KEY (`idCom`) REFERENCES `compania` (`idCompania`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
