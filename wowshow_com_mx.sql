-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 31-03-2025 a las 21:58:57
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wowshow.com.mx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_eventos`
--

CREATE TABLE `tbl_eventos` (
  `e_id` int(11) NOT NULL,
  `e_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `e_url` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `e_imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `e_lugar` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `e_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `e_fecha` year(4) NOT NULL,
  `e_activo` int(11) NOT NULL,
  `e_fregistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_eventos`
--

INSERT INTO `tbl_eventos` (`e_id`, `e_nombre`, `e_url`, `e_imagen`, `e_lugar`, `e_descripcion`, `e_fecha`, `e_activo`, `e_fregistro`) VALUES
(1, 'Flashmob The Big Bang Theory', 'flashmob-the-big-bang-theory', '', 'Monumento a la Revolución', 'Despedimos a una de las series más exitosas de los tiempos con un increíble Flashmob en el Monumento a la Revolución, con una convocatoria al público en general y más de 100 bailarines profesionales en escena. ', 2019, 1, '2024-11-14 02:39:02'),
(2, 'MLB Home', 'mlb-home', '', '', 'La casa de experiencias más divertida del beisbol. Nuestro personal estuvo encargado de los Experience rooms para que todos los asistentes pudieran divertirse y hacer un Home Run.', 2019, 1, '2024-11-14 02:39:13'),
(3, 'Lanzamiento Supra, Toyota', 'lanzamiento-supra-toyota', '', 'Frontón México', 'Toyota realizó el lanzamiento del Supra 2019 y tuvimos el honor de realizar el show de Opening con nuestras bailarinas de Ballet, percusionistas y Flashmob de Cantantes', 2024, 1, '2024-11-14 02:39:30'),
(4, 'Warner House', 'warner-house', '', 'CDMX', 'Vivimos la experiencia de la Warner House, dónde nuestros animadores se encargaron de realizar divertidas trivias para descubrir que tan fan eran de los programas de Warner. ', 2019, 1, '2024-11-14 02:39:39'),
(5, 'Casa de Terror', 'casa-de-terror', '', ' Instituto Thomas Jefferson', 'Realizamos una terrorífica casa de Terror con nuestros personajes caracterizados: Monja Conjuro, zombies, Pennywise, Anabelle, espantapájaros y muchos más...', 0000, 1, '2024-11-14 02:39:53'),
(6, 'Ponle Play By Kromasol', 'ponle-play-by-kromasol', '', 'Arena CDMX', 'Como cada año, tenemos el honor de participar en la convención anual de Kromasol, nos encargamos de los happenigs con nuestros bailarines, damos servicio de maquillaje, nuestros edecanes están encargados de dar la bienvenida a los invitados y premiamos a los distribuidores con nuestros bellos ramos de flores', 0000, 1, '2024-11-14 02:40:12'),
(7, 'Up Front Turner', 'up-front-turner', '', 'Hotel Live Aqua, CDMX', 'Contamos con show Disruptivos para asombrar a los invitados, y Warner nos dio la oportunidad de participar en su Up Front 2020 con nuestros personajes White Experience. ', 2020, 1, '2024-11-14 02:40:34'),
(8, 'Inauguración de oficinas en México de agencia VB Group', 'inauguracion-de-oficinas-en-mexico-de-agencia-vb-group', '', 'CDMX', 'Nos encargamos de la inauguración de las oficinas de VB GROUP en México, realizando servicio de mobiliario, deliciosos canapés y barra de Vino Español.', 2024, 1, '2024-11-14 02:41:22'),
(9, 'Flashmob para Bodega Aurrera', 'flashmob-para-bodega-aurrera', '', ' Vialidades de la CDMX', 'Tuvimos una increíble promoción para Bodega Aurrera con nuestro Flashmob en vialidades de la CDMX, dónde Facundo acompañado de las Morrallitas y nuestros bailarines sorprendieron a todos los espectadores.', 2024, 1, '2024-11-14 05:37:38'),
(10, 'Activación Movistar', 'activacion-movistar', '', 'Estadio Alfredo Harp Helú', 'Activación con Animadores, zanqueros y bailarines para Movistar en la casa de los Diablos Rojos. ', 2024, 1, '2024-11-14 05:37:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_servicios`
--

CREATE TABLE `tbl_servicios` (
  `s_id` int(11) NOT NULL,
  `s_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `s_url` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `s_imagen` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `s_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `s_activo` int(11) NOT NULL,
  `s_fregistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_servicios`
--

INSERT INTO `tbl_servicios` (`s_id`, `s_nombre`, `s_url`, `s_imagen`, `s_descripcion`, `s_activo`, `s_fregistro`) VALUES
(1, 'Activaciones BTL', 'activaciones-btl', 'activaciones-btl.webp', 'Producimos y coordinamos Activaciones BTL para que nuestros clientes puedan promocionar sus productos o servicios. Siempre contando con talento profesional y especializado en las necesidades del cliente.', 1, '2024-09-26 03:54:38'),
(2, 'Personal Especializado', 'personal-especializado', 'personal-especializado.webp', 'Atendiendo las necesidades de nuestros clientes ponemos a su disposición cualquier tipo de talento Artístico y Personal operativo con la mayor calidad para que sus eventos sean inolvidables.\r\n\r\nEjemplo: Staff, Caricaturistas, magos, atletas, actores, y más...', 1, '2024-09-26 03:57:17'),
(3, 'Producción de Shows', 'produccion-de-shows', 'producciones-shows.webp', 'Nos especializamos en la producción, dirección y coordinación de shows y performance para cualquier tipo de evento, transformamos las ideas de nuestros clientes en los mejores espectáculos.', 1, '2024-09-26 03:59:03'),
(4, 'Edecanes y Animadores', 'edecanes-y-animadores', 'edecanes-animadores.webp', 'Contamos con servicio de Edecanía, Animación, conducción y promotoría con todos los perfiles (A, AA, AAA), para que tus eventos tengan un sello único y sobre todo un excelente servicio al cliente.', 1, '2024-09-26 04:00:56'),
(5, 'Maquillaje y Caracterizaciones', 'maquillaje-y-caracterizaciones', 'maquillaje.webp', 'Contamos con profesionales del maquillaje y peinado beauty y FX para realizar cualquier tipo de diseño, siempre con el compromiso de utilizar productos 100% de calidad.\r\n\r\nServicios: Maquillaje social, caracterizaciones, glitter bar, tattoo temporal, etc...', 1, '2024-09-26 04:04:49'),
(6, 'Catering y Mobiliario', 'catering-y-mobiliario', 'catering-y-mobiliario.webp', 'Ofrecemos servicio de alimentos, catering, banquetes, parrilladas, barra de snacks y mobiliario, casino, puestos de feria y mucho más, para complementar tus eventos y tus invitados tengan una increíble experiencia.', 1, '2024-09-26 04:06:31'),
(7, 'Barras de Alimentos', 'barras-de-alimentos', 'barras-de-alimentos.webp', 'Tenemos las mejores barras de alimentos para tus eventos, haz que tus invitados tengan una experiencia deliciosa.\r\n<ul>\r\n    <li>Barra de Snacks</li>\r\n    <li>Barra de Micheladas</li>\r\n    <li>Barra de Maruchan</li>\r\n    <li>Barra de Mini hot cakes</li>\r\n    <li>Barra de esquites</li>\r\n    <li>Barra de Mixología</li>\r\n</ul>', 1, '2024-09-26 04:08:32'),
(8, 'Arreglos de Flores', 'arreglos-de-flores', 'arreglos-de-flores.webp', 'Dale un toque de color y elegancia a tus eventos con hermosos arreglos de flores naturales o artificiales. Tenemos los mejores diseños para cualquier ocasión.', 1, '2024-09-26 04:15:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_eventos`
--
ALTER TABLE `tbl_eventos`
  ADD PRIMARY KEY (`e_id`);

--
-- Indices de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_eventos`
--
ALTER TABLE `tbl_eventos`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
