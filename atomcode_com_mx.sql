-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 31-03-2025 a las 21:58:01
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
-- Base de datos: `atomcode.com.mx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_briefing`
--

CREATE TABLE `tbl_briefing` (
  `id_b` int(11) NOT NULL,
  `b_token` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `b_token_encrypt` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `b_company` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_firsname` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `b_address` text COLLATE utf8_spanish_ci NOT NULL,
  `b_email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_city` text COLLATE utf8_spanish_ci NOT NULL,
  `b_phone` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `b_otroContacto` int(70) NOT NULL,
  `b_dominioWeb` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_descripcionEmpresa` text COLLATE utf8_spanish_ci NOT NULL,
  `b_check_proposito` text COLLATE utf8_spanish_ci NOT NULL,
  `b_fLimite` date NOT NULL,
  `b_presupuesto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_webExito` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_hs_persona` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_foda` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_check_preferencias` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_1seccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_1nota` text COLLATE utf8_spanish_ci NOT NULL,
  `b_2seccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_2nota` text COLLATE utf8_spanish_ci NOT NULL,
  `b_3seccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_3nota` text COLLATE utf8_spanish_ci NOT NULL,
  `b_4seccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_4nota` text COLLATE utf8_spanish_ci NOT NULL,
  `b_5seccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_5nota` text COLLATE utf8_spanish_ci NOT NULL,
  `b_6seccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_6nota` text COLLATE utf8_spanish_ci NOT NULL,
  `b_7seccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_7nota` text COLLATE utf8_spanish_ci NOT NULL,
  `b_8seccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_8nota` text COLLATE utf8_spanish_ci NOT NULL,
  `b_9seccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_9nota` text COLLATE utf8_spanish_ci NOT NULL,
  `b_10seccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_10nota` text COLLATE utf8_spanish_ci NOT NULL,
  `b_textoImagen` text COLLATE utf8_spanish_ci NOT NULL,
  `b_primeraVez` text COLLATE utf8_spanish_ci NOT NULL,
  `b_colorLogo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_competencia1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_competencia2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_competencia3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_gustan1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_gustan2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_gustan3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_brandingAhora` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_brandingBefore` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_rrss` text COLLATE utf8_spanish_ci NOT NULL,
  `b_mailMark` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_dominio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_hosting` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_seccionesUpdate` text COLLATE utf8_spanish_ci NOT NULL,
  `b_updateUs` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `b_blog` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `b_paginaBefore` text COLLATE utf8_spanish_ci NOT NULL,
  `b_fecha` date NOT NULL,
  `b_hora` time NOT NULL,
  `b_fregistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_briefing`
--

INSERT INTO `tbl_briefing` (`id_b`, `b_token`, `b_token_encrypt`, `b_company`, `b_firsname`, `b_address`, `b_email`, `b_city`, `b_phone`, `b_otroContacto`, `b_dominioWeb`, `b_descripcionEmpresa`, `b_check_proposito`, `b_fLimite`, `b_presupuesto`, `b_webExito`, `b_hs_persona`, `b_foda`, `b_check_preferencias`, `b_1seccion`, `b_1nota`, `b_2seccion`, `b_2nota`, `b_3seccion`, `b_3nota`, `b_4seccion`, `b_4nota`, `b_5seccion`, `b_5nota`, `b_6seccion`, `b_6nota`, `b_7seccion`, `b_7nota`, `b_8seccion`, `b_8nota`, `b_9seccion`, `b_9nota`, `b_10seccion`, `b_10nota`, `b_textoImagen`, `b_primeraVez`, `b_colorLogo`, `b_competencia1`, `b_competencia2`, `b_competencia3`, `b_gustan1`, `b_gustan2`, `b_gustan3`, `b_brandingAhora`, `b_brandingBefore`, `b_rrss`, `b_mailMark`, `b_dominio`, `b_hosting`, `b_seccionesUpdate`, `b_updateUs`, `b_blog`, `b_paginaBefore`, `b_fecha`, `b_hora`, `b_fregistro`) VALUES
(1, 'BA-ato-ato-35461', '1956086d4aa534ae23cea6e306a489af8a6a278622e86486d7f15496d01fd155d92a968ae12d415d1486ea922949e48f1075b7c5d082d6792bf4668e3d81cb8e', 'ATOM CODE', 'GABRIEL ALCARAZ', '8', 'ATOMCODE16@GMAIL.COM', 'ECATEPEC', '(55) 2786-4236', 0, 'MIDOMINIO.COM.MX', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA. UT ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCITATION ULLAMCO LABORIS NISI UT ALIQUIP EX EA COMMODO CONSEQUAT. DUIS AUTE IRURE DOLOR IN REPREHENDERIT IN VOLUPTATE VELIT ESSE CILLUM DOLORE EU FUGIAT NULLA PARIATUR. EXCEPTEUR SINT OCCAECAT CUPIDATAT NON PROIDENT, SUNT IN CULPA QUI OFFICIA DESERUNT MOLLIT ANIM ID EST LABORUM.', '1.- EXPLICAR MIS PRODUCTOS Y SERVICIOS, 2.- INFORMAR DE NOTICIAS O CALENDARIO DE EVENTOS, 3.- CREAR UN BLOG QUE ABORDE TEMAS O INTERESES ESPECIFICOS,', '2023-03-12', 'NO', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE', '', '1.- HACER QUE LLAMEN, 2.- REGISTRO PARA MAILING, 3.- RELLENAR FORMULARIO DE CONTACTO, 4.- BUSCAR INF', '1S', '1N', '2S', '2N', '3S', '3N', '4S', '4N', '5S', '5N', '6S', '6N', '7S', '7N', '8S', '8N', '9S', '9N', '10S', '10N', '', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA. UT ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCITATION ULLAMCO LABORIS NISI UT ALIQUIP EX EA COMMODO CONSEQUAT. DUIS AUTE IRURE DOLOR IN REPREHENDERIT IN VOLUPTATE VELIT ESSE CILLUM DOLORE EU FUGIAT NULLA PARIATUR. EXCEPTEUR SINT OCCAECAT CUPIDATAT NON PROIDENT, SUNT IN CULPA QUI OFFICIA DESERUNT MOLLIT ANIM ID EST LABORUM.', 'VERDE', '1E', '2E', '3E', '1M', '2M', '3M', 'NO', 'NO', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA. UT ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCITATION ULLAMCO LABORIS NISI UT ALIQUIP EX EA COMMODO CONSEQUAT. DUIS AUTE IRURE DOLOR IN REPREHENDERIT IN VOLUPTATE VELIT ESSE CILLUM DOLORE EU FUGIAT NULLA PARIATUR. EXCEPTEUR SINT OCCAECAT CUPIDATAT NON PROIDENT, SUNT IN CULPA QUI OFFICIA DESERUNT MOLLIT ANIM ID EST LABORUM.', 'MICORREO@MIDOMINIO.COM.MX', 'MIDOMINIO.COM.MX', 'NO', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA. UT ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCITATION ULLAMCO LABORIS NISI UT ALIQUIP EX EA COMMODO CONSEQUAT. DUIS AUTE IRURE DOLOR IN REPREHENDERIT IN VOLUPTATE VELIT ESSE CILLUM DOLORE EU FUGIAT NULLA PARIATUR. EXCEPTEUR SINT OCCAECAT CUPIDATAT NON PROIDENT, SUNT IN CULPA QUI OFFICIA DESERUNT MOLLIT ANIM ID EST LABORUM.', 'NO', 'SI', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA. UT ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCITATION ULLAMCO LABORIS NISI UT ALIQUIP EX EA COMMODO CONSEQUAT. DUIS AUTE IRURE DOLOR IN REPREHENDERIT IN VOLUPTATE VELIT ESSE CILLUM DOLORE EU FUGIAT NULLA PARIATUR. EXCEPTEUR SINT OCCAECAT CUPIDATAT NON PROIDENT, SUNT IN CULPA QUI OFFICIA DESERUNT MOLLIT ANIM ID EST LABORUM.', '2023-03-12', '18:22:13', '2023-03-13 00:22:13'),
(2, 'BA-ato-caf-14009', '7737e5214336eaa549b9c80dfa4812f1d9a73cd02c6e339e232174939bddcc8ee3e14fa8b91f9d8f538c6214968977f1e610e0bda2e75b1653fab05437e64b7f', 'ATOMCODE', 'GABRIEL ALCARAZ', 'CALLE S/N', 'CAFE@ATOMCODE.COM.MX', 'MÉXICO', '0000000000', 0, 'ATOMCODE.COM.MX', 'DESCRIPCION', '1.- EXPLICAR MIS PRODUCTOS Y SERVICIOS, 2.- TRAER NUEVOS CLIENTES A MI NEGOCIO, 3.- PROPORCIONAR A MIS CLIENTES INFORMACIÓN SOBRE UN TEMA DETERMINADO, 4.- INFORMAR DE NOTICIAS O CALENDARIO DE EVENTOS, 5.- CREAR UN BLOG QUE ABORDE TEMAS O INTERESES ESPECIFICOS,', '2024-06-30', '5000', 'TODO', 'TODOS', 'TODOS', '1.- HACER QUE LLAMEN, 2.- REGISTRO PARA MAILING, 3.- RELLENAR FORMULARIO DE CONTACTO, 4.- BUSCAR INF', 'INICIO', 'TODOS', 'NOSOTROS', 'TODOS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TODOS', 'FELICIDAD', 'SI', 'WWW.ATOMCODE.COM.MX', 'WWW.ATOMCODE.COM.MX', 'WWW.ATOMCODE.COM.MX', 'WWW.ATOMCODE.COM.MX', 'WWW.ATOMCODE.COM.MX', 'WWW.ATOMCODE.COM.MX', 'IMAGEN', 'SI', 'SI', 'CAFE@ATOMCODE.COM.MX', 'WWW.ATOMCODE.COM.MX', 'SI', 'SI', 'NO', 'NO', 'NO', '2024-06-14', '00:58:15', '2024-06-14 05:58:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cafes`
--

CREATE TABLE `tbl_cafes` (
  `c_id` int(11) NOT NULL,
  `c_token` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `c_token_encrypt` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `c_nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `c_email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `c_telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `c_servicio` int(11) NOT NULL,
  `c_fecha` date NOT NULL,
  `c_hora` time NOT NULL,
  `c_fregistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_cafes`
--

INSERT INTO `tbl_cafes` (`c_id`, `c_token`, `c_token_encrypt`, `c_nombre`, `c_email`, `c_telefono`, `c_servicio`, `c_fecha`, `c_hora`, `c_fregistro`) VALUES
(3, 'caf-gab-Pe4)j2E|', 'ff603a6d22277caa46c72125d565e0126c475e1db1f178a3a2d5c00a4f5c23a1518ffdb2396d447310541d60f67e616c63b100166000bb29c3521ec3377325f1', 'GABRIEL ALCARAZ GARCIA', 'CAFE@ATOMCODE.COM.MX', '(55) 2786-4236', 2, '2022-09-12', '04:19:11', '2022-09-12 02:19:11'),
(4, 'caf-gab-3D~|)ur_', '3d3939f68c3bc5960d6400e90ea52bcdd1ee6eb92384a0ec95ae0202833edb8c151b802efd6f94731102d7644e05ef3ed979fb46a20b5ed70ac6f94cbffa7674', 'GABRIEL', 'CAFE@ATOMCODE.COM.MX', '0000000000', 1, '2022-09-13', '05:29:01', '2022-09-13 03:29:01'),
(7, 'ato-gab-b3@u*P3p', 'c94b240651a4578c38a5969fc1bf5602c7e01a9ac57598a6c186902dc926205e84d7b6743ad0fb5e2cbed1812dbb82b9b57f6fee3ddb46a208dd1c877dc0bd71', 'GABRIEL ALCARAZ GARCIA', 'ATOMCODE16@GMAIL.COM', '(55) 2786-4236', 6, '2023-04-27', '00:49:47', '2023-04-27 05:49:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE `tbl_categorias` (
  `ca_id` int(11) NOT NULL,
  `ca_servicio` int(11) NOT NULL,
  `ca_class` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `ca_icono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ca_categoria` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `ca_ruta` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `ca_activo` int(11) NOT NULL,
  `ca_fregistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`ca_id`, `ca_servicio`, `ca_class`, `ca_icono`, `ca_categoria`, `ca_ruta`, `ca_activo`, `ca_fregistro`) VALUES
(1, 1, '', 'fas fa-lightbulb', 'Logotipo', 'logotipo', 0, '2023-04-18 03:43:23'),
(2, 1, '', 'fa fa-address-card-o', 'Identidad Corporativa', 'identidad-corporativa', 0, '2023-08-06 02:41:54'),
(3, 2, 'active', 'fa fa-laptop', 'Desarrollo web', 'pagina-web', 1, '2024-03-29 01:31:35'),
(4, 3, '', 'fa-solid fa-envelope-circle-check', 'Email Marketing', 'email-marketing', 0, '2023-08-28 18:49:11'),
(5, 3, '', 'fa-solid fa-hashtag', 'Redes Sociales', 'redes-sociales', 0, '2023-08-28 18:49:13'),
(6, 3, '', 'fa-solid fa-fire-flame-curved', 'Campañas', 'ads', 1, '2024-03-29 01:31:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_private`
--

CREATE TABLE `tbl_private` (
  `p_id` int(11) NOT NULL,
  `p_producto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `p_site_key` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `p_secret_key` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `p_email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `p_password` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `p_fregistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_private`
--

INSERT INTO `tbl_private` (`p_id`, `p_producto`, `p_site_key`, `p_secret_key`, `p_email`, `p_password`, `p_fregistro`) VALUES
(1, 'reCAPTCHA v2', '6LeyMp0hAAAAAB31GJObrSJEetKWzwlSkDvl-1dM', '6LeyMp0hAAAAABPaw9YRDQFjzeIOyBALVodQA2KN', '', '', '2022-08-23 02:03:51'),
(2, 'email-atom', '', '', 'atomcode16@gmail.com', 'yodzttixyarahgbp', '2023-04-27 05:08:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `pr_id` int(11) NOT NULL,
  `pr_categoria` int(11) NOT NULL,
  `pr_imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pr_producto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `pr_ruta` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `pr_precio` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `pr_porcentaje` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `pr_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `pr_incluye` text COLLATE utf8_spanish_ci NOT NULL,
  `pr_sincluye` text COLLATE utf8_spanish_ci NOT NULL,
  `pr_tiempo` int(11) NOT NULL,
  `pr_notas` text COLLATE utf8_spanish_ci NOT NULL,
  `pr_requisitos` text COLLATE utf8_spanish_ci NOT NULL,
  `pr_etapa1` text COLLATE utf8_spanish_ci NOT NULL,
  `pr_etapa2` text COLLATE utf8_spanish_ci NOT NULL,
  `pr_etapa3` text COLLATE utf8_spanish_ci NOT NULL,
  `pr_etapa4` text COLLATE utf8_spanish_ci NOT NULL,
  `pr_activo` int(11) NOT NULL,
  `pr_fregistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`pr_id`, `pr_categoria`, `pr_imagen`, `pr_producto`, `pr_ruta`, `pr_precio`, `pr_porcentaje`, `pr_descripcion`, `pr_incluye`, `pr_sincluye`, `pr_tiempo`, `pr_notas`, `pr_requisitos`, `pr_etapa1`, `pr_etapa2`, `pr_etapa3`, `pr_etapa4`, `pr_activo`, `pr_fregistro`) VALUES
(1, 1, '', 'Logotipo', 'logotipo', '0', '67', '', '', '', 0, '', '', '', '', '', '', 0, '2023-04-18 03:40:53'),
(2, 2, '', 'Identidad Corporativa', 'identidad-corporativa', '0', '67', '', '', '', 0, '', '', '', '', '', '', 0, '2023-04-18 03:41:05'),
(3, 3, 'landingpage.webp', 'Landing Page', 'landing-page', '3100.00', '0', 'Una landing page o página de destino es una página web diseñada para convencer a los visitantes a realizar una acción especifica como comprar un producto, suscribirse a un servicio o descargar un archivo.', '<li>Link a redes sociales.</li>                   <li>1 Formulario de contacto.</li>                   <li>Diseño responsivo para desktop, laptop, tabletas y dispositivos móviles.</li>                   <li>Conexión a WhatsApp o Messenger.</li>                   <li>2 rondas de revisión.</li>                   <li>Hasta 5 ajustes por ronda de revisión.</li>', '<li>Atención al cliente personalizado</li>                   <li>Diseño y programación</li>                   <li>Sitio responsivo (adaptado a dispositivos moviles)</li>                   <li>Carga de archivos en el servidor</li>', 1, '<li>No incluye hosting, dominio.</li>                   <li>No incluye seguridad web ni acctualizaiones de contenido.</li>                   <li>Para iniciar su  proyecto es necesario contar con la información completa</li>', '<li><strong>Brief:</strong> Responder un pequeño brief el cual contiene preguntas especificas a cerca de tu proyecto, para entender las necesidades de tu proyecto.</li>                   <li><strong>Logotipo:</strong> Nos basamos en los colores, estilo e identidad gráfica de éste.</li>                   <li><strong>Contenidos:</strong> Información requerida para la creación de tu proyecto, como por ejemplo imágenes, textos, logos, etc.</li>                   <li><strong>Hosting y Dominio:</strong> Para tu proyecto es necesario que tengas contratado un paquete de hosting y dominio para subir y visualizar los archivos de tu página web</li>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">INICIO</h4>                           <p class=\"mt-2 mb-0\">Cuando el pedido este confirmado se te compartirá un cuestionario (brief) en el cual conoceremos más de tu proyecto.</p>                         </div>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">CONTENIDO</h4>                           <p class=\"mt-2 mb-0\">Se te pedira la información así como los contenidos que se van agregar a su proyecto (textos, logos, imágenes, etc.).</p>                         </div>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">DISEÑO Y DESARROLLO</h4>                           <p class=\"mt-2 mb-0\">Empezamos el proyecto y te enviaremos la propuesta basada en tus necesidades, haremos las modificaciones y una vez que tengamos el vo.bo empezaremos a programar su proyecto</p>                         </div>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">ENTREGA</h4>                           <p class=\"mt-2 mb-0\">Se publicará el proyecto final en el hosting y dominio acordado. Así mismo se entrega el proyecto completo al cliente para que este lo administre.</p>                         </div>', 1, '2023-08-28 18:42:09'),
(4, 3, 'onepage.webp', 'One Page', 'one-page', '4000.00', '0', 'Ideal para las startup, emprendedores y empresas pequeñas. Es un sitio web desarrollado en una sola página donde se presenta toda la información de tu marca como lo es productos o servicios y darlos a conocer a tus clientes potenciales a través de los distintos buscadores como lo es Google.', '<li>Hasta 5 secciones de navegación vertical.</li>                   <li>1 página de aviso de privacidad.</li>                   <li>Link a redes sociales.</li>                   <li>1 Formulario de contacto.</li>                   <li>Diseño responsivo para desktop, laptop, tabletas y dispositivos móviles.</li>                   <li>Conexión a WhatsApp o Messenger.</li>                   <li>2 rondas de revisión.</li>                   <li>Hasta 5 ajustes por ronda de revisión.</li>', '<li>Atención al cliente personalizado</li>                   <li>Diseño y programación</li>                   <li>Sitio responsivo (adaptado a dispositivos moviles)</li>                   <li>Carga de archivos en el servidor</li>', 2, '<li>No incluye hosting, dominio.</li>                   <li>No incluye seguridad web ni acctualizaiones de contenido.</li>                   <li>Para iniciar su  proyecto es necesario contar con la información completa</li>', '<li><strong>Brief:</strong> Responder un pequeño brief el cual contiene preguntas especificas a cerca de tu proyecto, para entender las necesidades de tu proyecto.</li>                   <li><strong>Logotipo:</strong> Nos basamos en los colores, estilo e identidad gráfica de éste.</li>                   <li><strong>Contenidos:</strong> Información requerida para la creación de tu proyecto, como por ejemplo imágenes, textos, logos, etc.</li>                   <li><strong>Hosting y Dominio:</strong> Para tu proyecto es necesario que tengas contratado un paquete de hosting y dominio para subir y visualizar los archivos de tu página web</li>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">INICIO</h4>                           <p class=\"mt-2 mb-0\">Cuando el pedido este confirmado se te compartirá un cuestionario (brief) en el cual conoceremos más de tu proyecto.</p>                         </div>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">CONTENIDO</h4>                           <p class=\"mt-2 mb-0\">Se te pedira la información así como los contenidos que se van agregar a su proyecto (textos, logos, imágenes, etc.).</p>                         </div>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">DISEÑO Y DESARROLLO</h4>                           <p class=\"mt-2 mb-0\">Empezamos el proyecto y te enviaremos la propuesta basada en tus necesidades, haremos las modificaciones y una vez que tengamos el vo.bo empezaremos a programar su proyecto</p>                         </div>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">ENTREGA</h4>                           <p class=\"mt-2 mb-0\">Se publicará el proyecto final en el hosting y dominio acordado. Así mismo se entrega el proyecto completo al cliente para que este lo administre.</p>                         </div>', 1, '2023-08-28 18:45:28'),
(5, 3, 'pagina_web5s.webp', 'Página web 5s', 'pagina-web-5s', '5350.00', '0', 'Una página web es una ventana virtual que permite a individuos y empresas mostrar su presencia en línea y compartir información, productos o servicios con el mundo entero. La gran ventaja es su accesibilidad global las 24 horas del día, los 7 días de la semana, lo que permite a los usuarios conectarse con su audiencia en cualquier momento.', '<li>Hasta 5 páginas con contenido(Ej. Inicio, Nosotros, Productos, Servicios, Contacto).</li>                 <li>1 página de aviso de privacidad.</li>                 <li>Link a redes sociales.</li>                 <li>1 Formulario de contacto.</li>                 <li>Diseño responsivo para desktop, laptop, tabletas y dispositivos móviles.</li>                 <li>Conexión a WhatsApp o Messenger.</li>                 <li>2 rondas de revisión.</li>                 <li>Hasta 5 ajustes por ronda de revisión.</li>', '<li>Atención al cliente personalizado</li>                   <li>Diseño y programación</li>                   <li>Sitio responsivo (adaptado a dispositivos moviles)</li>                   <li>Carga de archivos en el servidor</li>', 4, '<li>No incluye hosting, dominio.</li>                   <li>No incluye seguridad web ni acctualizaiones de contenido.</li>                   <li>Para iniciar su  proyecto es necesario contar con la información completa</li>', '<li><strong>Brief:</strong> Responder un pequeño brief el cual contiene preguntas especificas a cerca de tu proyecto, para entender las necesidades de tu proyecto.</li>                   <li><strong>Logotipo:</strong> Nos basamos en los colores, estilo e identidad gráfica de éste.</li>                   <li><strong>Contenidos:</strong> Información requerida para la creación de tu proyecto, como por ejemplo imágenes, textos, logos, etc.</li>                   <li><strong>Hosting y Dominio:</strong> Para tu proyecto es necesario que tengas contratado un paquete de hosting y dominio para subir y visualizar los archivos de tu página web</li>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">INICIO</h4>                           <p class=\"mt-2 mb-0\">Cuando el pedido este confirmado se te compartirá un cuestionario (brief) en el cual conoceremos más de tu proyecto.</p>                         </div>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">CONTENIDO</h4>                           <p class=\"mt-2 mb-0\">Se te pedira la información así como los contenidos que se van agregar a su proyecto (textos, logos, imágenes, etc.).</p>                         </div>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">DISEÑO Y DESARROLLO</h4>                           <p class=\"mt-2 mb-0\">Empezamos el proyecto y te enviaremos la propuesta basada en tus necesidades, haremos las modificaciones y una vez que tengamos el vo.bo empezaremos a programar su proyecto</p>                         </div>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">ENTREGA</h4>                           <p class=\"mt-2 mb-0\">Se publicará el proyecto final en el hosting y dominio acordado. Así mismo se entrega el proyecto completo al cliente para que este lo administre.</p>                         </div>', 1, '2023-08-28 18:45:30'),
(6, 3, 'pagina_web10s.webp', 'Página web 10s', 'pagina-web-10s', '8000.00', '0', 'Una página web es una ventana virtual que permite a individuos y empresas mostrar su presencia en línea y compartir información, productos o servicios con el mundo entero. La gran ventaja es su accesibilidad global las 24 horas del día, los 7 días de la semana, lo que permite a los usuarios conectarse con su audiencia en cualquier momento.', '<li>Hasta 10 páginas con contenido(Ej. Inicio, Nosotros, Productos, Servicios, Blog, Contacto).</li>                 <li>1 página de aviso de privacidad.</li>                 <li>Link a redes sociales.</li>                 <li>1 Formulario de contacto.</li>                 <li>Diseño responsivo para desktop, laptop, tabletas y dispositivos móviles.</li>                 <li>Conexión a WhatsApp o Messenger.</li>                 <li>2 rondas de revisión.</li>                 <li>Hasta 5 ajustes por ronda de revisión.</li>', '<li>Atención al cliente personalizado</li>                   <li>Diseño y programación</li>                   <li>Sitio responsivo (adaptado a dispositivos moviles)</li>                   <li>Carga de archivos en el servidor</li>', 6, '<li>No incluye hosting, dominio.</li>                   <li>No incluye seguridad web ni acctualizaiones de contenido.</li>                   <li>Para iniciar su  proyecto es necesario contar con la información completa</li>', '<li><strong>Brief:</strong> Responder un pequeño brief el cual contiene preguntas especificas a cerca de tu proyecto, para entender las necesidades de tu proyecto.</li>                   <li><strong>Logotipo:</strong> Nos basamos en los colores, estilo e identidad gráfica de éste.</li>                   <li><strong>Contenidos:</strong> Información requerida para la creación de tu proyecto, como por ejemplo imágenes, textos, logos, etc.</li>                   <li><strong>Hosting y Dominio:</strong> Para tu proyecto es necesario que tengas contratado un paquete de hosting y dominio para subir y visualizar los archivos de tu página web</li>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">INICIO</h4>                           <p class=\"mt-2 mb-0\">Cuando el pedido este confirmado se te compartirá un cuestionario (brief) en el cual conoceremos más de tu proyecto.</p>                         </div>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">CONTENIDO</h4>                           <p class=\"mt-2 mb-0\">Se te pedira la información así como los contenidos que se van agregar a su proyecto (textos, logos, imágenes, etc.).</p>                         </div>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">DISEÑO Y DESARROLLO</h4>                           <p class=\"mt-2 mb-0\">Empezamos el proyecto y te enviaremos la propuesta basada en tus necesidades, haremos las modificaciones y una vez que tengamos el vo.bo empezaremos a programar su proyecto</p>                         </div>', '<div class=\"media-body\">                           <h4 class=\"font-size-18 mb-3 text-dark\">ENTREGA</h4>                           <p class=\"mt-2 mb-0\">Se publicará el proyecto final en el hosting y dominio acordado. Así mismo se entrega el proyecto completo al cliente para que este lo administre.</p>                         </div>', 1, '2023-08-28 18:45:31'),
(7, 4, '1_envio.webp', '1 envío', '1-envio', '250.00', '0', 'El email marketing es una técnica de marketing digital que consiste en enviar correos electrónicos a una lista de contactos con el fin de promocionar productos o servicios, fidelizar clientes o generar leads. Las ventajas incluyen la posibilidad de llegar a una audiencia segmentada, personalizar los mensajes, medir los resultados y generar un retorno de inversión alto.', '<li>Hasta 10 páginas con contenido(Ej. Inicio, Nosotros, Productos, Servicios, Blog, Contacto).</li>                 <li>1 página de aviso de privacidad.</li>                 <li>Link a redes sociales.</li>                 <li>1 Formulario de contacto.</li>                 <li>Diseño responsivo para desktop, laptop, tabletas y dispositivos móviles.</li>                 <li>Conexión a WhatsApp o Messenger.</li>                 <li>2 rondas de revisión.</li>                 <li>Hasta 5 ajustes por ronda de revisión.</li>', '', 0, '', '', '', '', '', '', 1, '2023-08-28 18:45:33'),
(8, 4, '5_envios.webp', '5 Envíos', '5-envios', '1000.00', '0', 'El email marketing es una técnica de marketing digital que consiste en enviar correos electrónicos a una lista de contactos con el fin de promocionar productos o servicios, fidelizar clientes o generar leads. Las ventajas incluyen la posibilidad de llegar a una audiencia segmentada, personalizar los mensajes, medir los resultados y generar un retorno de inversión alto.', '', '', 0, '', '', '', '', '', '', 1, '2023-08-28 18:45:34'),
(9, 4, '10_envios.webp', '10 Envíos', '10-envios', '1500.00', '0', 'El email marketing es una técnica de marketing digital que consiste en enviar correos electrónicos a una lista de contactos con el fin de promocionar productos o servicios, fidelizar clientes o generar leads. Las ventajas incluyen la posibilidad de llegar a una audiencia segmentada, personalizar los mensajes, medir los resultados y generar un retorno de inversión alto.', '', '', 0, '', '', '', '', '', '', 1, '2023-08-28 18:45:36'),
(10, 5, '20_publicaciones.webp', '20 Posts', '20-posts', '0', '0', 'Tener presencia en las redes sociales ofrece varias ventajas, como llegar a una audiencia global, interactuar con los clientes, mejorar la reputación de la marca, obtener retroalimentación en tiempo real y aumentar el tráfico del sitio web. Los usos son variados, desde promocionar productos y servicios, compartir contenido relevante y de valor, hasta crear una comunidad en línea y fomentar la lealtad de los clientes', '', '', 0, '', '', '', '', '', '', 1, '2023-08-28 18:45:37'),
(11, 5, '30_publicaciones.webp', '30 Posts', '30-posts', '0', '0', 'Tener presencia en las redes sociales ofrece varias ventajas, como llegar a una audiencia global, interactuar con los clientes, mejorar la reputación de la marca, obtener retroalimentación en tiempo real y aumentar el tráfico del sitio web. Los usos son variados, desde promocionar productos y servicios, compartir contenido relevante y de valor, hasta crear una comunidad en línea y fomentar la lealtad de los clientes', '', '', 0, '', '', '', '', '', '', 1, '2023-08-28 18:45:39'),
(12, 5, '45_publicaciones.webp', '45 Posts', '45-posts', '0', '0', 'Tener presencia en las redes sociales ofrece varias ventajas, como llegar a una audiencia global, interactuar con los clientes, mejorar la reputación de la marca, obtener retroalimentación en tiempo real y aumentar el tráfico del sitio web. Los usos son variados, desde promocionar productos y servicios, compartir contenido relevante y de valor, hasta crear una comunidad en línea y fomentar la lealtad de los clientes', '', '', 0, '', '', '', '', '', '', 1, '2023-08-28 18:45:41'),
(13, 6, 'facebook_ads.webp', 'Facebook Ads', 'facebook-ads', '5000.00', '0', 'Facebook Ads es una plataforma de publicidad en línea que permite a las empresas crear anuncios y mostrarlos a una audiencia específica en Facebook e Instagram. Las ventajas de hacer campañas en Facebook Ads incluyen la posibilidad de llegar a un público altamente segmentado, aumentar el tráfico y las ventas, medir los resultados en tiempo real, y ajustar las estrategias de publicidad según los resultados. Además, Facebook Ads ofrece diferentes formatos de anuncios, como anuncios de imagen, video, carrusel y colección, lo que permite a las empresas elegir el formato más adecuado para sus objetivos y presupuestos de publicidad.', '<li>1 a 3 campañas</li> <li>Auditoria Inicial</li> <li>Investigación de Palabras Clave</li> <li>Estrategias de Puja</li> <li>Creación y Optimización de Anuncios</li> <li>Segmentación y Configuración de Audiencia</li> <li>Conversiones y Seguimiento</li> <li>Informes y Análisis</li> <li>Presupuesto y Gastos Publicitarios</li>', '<li>Atención al cliente personalizado</li>', 0, '<li>NO Incluye Inversión.</li>', '', '', '', '', '', 1, '2024-12-05 06:02:49'),
(14, 6, 'google_ads.webp', 'Google Ads', 'google-ads', '5000.00', '0', 'Google Ads es una plataforma de publicidad en línea que permite a las empresas crear anuncios y mostrarlos a una audiencia específica en Google y en otros sitios web asociados. Las ventajas de hacer campañas en Google Ads incluyen la posibilidad de llegar a un público altamente segmentado, aumentar el tráfico y las ventas, medir los resultados en tiempo real, y ajustar las estrategias de publicidad según los resultados. Además, Google Ads ofrece diferentes formatos de anuncios, como anuncios de búsqueda, display, shopping y video, lo que permite a las empresas elegir el formato más adecuado para sus objetivos y presupuestos de publicidad.', '<li>1 a 3 campañas</li> <li>Auditoria Inicial</li> <li>Investigación de Palabras Clave</li> <li>Estrategias de Puja</li> <li>Creación y Optimización de Anuncios</li> <li>Segmentación y Configuración de Audiencia</li> <li>Conversiones y Seguimiento</li> <li>Informes y Análisis</li> <li>Presupuesto y Gastos Publicitarios</li>', '<li>Atención al cliente personalizado</li>', 0, '<li>NO Incluye Inversión.</li>', '', '', '', '', '', 1, '2024-12-05 06:03:03'),
(15, 2, '', 'Firma electrónica', 'firma-electronica', '850', '0', '', '', '', 0, '', '', '', '', '', '', 0, '2023-08-28 18:45:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_servicios`
--

CREATE TABLE `tbl_servicios` (
  `s_id` int(11) NOT NULL,
  `s_class` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `s_icono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `s_servicio` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `s_ruta` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `s_activo` int(11) NOT NULL,
  `s_fregistrp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_servicios`
--

INSERT INTO `tbl_servicios` (`s_id`, `s_class`, `s_icono`, `s_servicio`, `s_ruta`, `s_activo`, `s_fregistrp`) VALUES
(1, '', 'fa fa-address-card-o', 'Diseño Gráfico', 'diseno-grafico', 1, '2023-03-29 05:52:04'),
(2, 'active', 'fa fa-laptop', 'Desarrollo web', 'diseno-web', 1, '2024-03-29 01:30:10'),
(3, '', 'fa-solid fa-fire-flame-curved', 'Marketing Digital', 'marketing-digital', 1, '2023-03-29 05:52:44'),
(4, '', '', 'Redes Sociales', 'redes-sociales', 1, '2023-08-06 02:15:52'),
(5, '', '', 'Camapañas', 'ads', 1, '2024-03-29 01:30:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ventas`
--

CREATE TABLE `tbl_ventas` (
  `v_id` int(11) NOT NULL,
  `v_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `v_empresa` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `v_chocolate` int(11) NOT NULL,
  `v_azucar` int(11) NOT NULL,
  `v_empanadas` int(11) NOT NULL,
  `v_precio` double NOT NULL,
  `v_deuda` double NOT NULL,
  `v_fecha_compra` date NOT NULL,
  `v_fregistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_ventas`
--

INSERT INTO `tbl_ventas` (`v_id`, `v_nombre`, `v_empresa`, `v_chocolate`, `v_azucar`, `v_empanadas`, `v_precio`, `v_deuda`, `v_fecha_compra`, `v_fregistro`) VALUES
(1, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-02-22', '2024-02-22 20:19:58'),
(2, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-02-22', '2024-03-07 20:41:05'),
(3, 'ESTEBAN', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-02-22', '2024-02-22 20:20:33'),
(4, 'VICTOR SANCHEZ', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-02-22', '2024-02-29 20:55:36'),
(5, 'ALDAHIR', 'CORPORATIVO STAFF', 2, 0, 0, 15, 0, '2024-02-22', '2024-02-22 20:35:34'),
(6, 'HECTOR CRUZ', 'TS PRINTMAX', 0, 2, 0, 15, 0, '2024-02-22', '2024-02-22 20:41:43'),
(7, 'SOFIA SUAREZ', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-02-22', '2024-02-28 23:04:46'),
(8, 'ALBERTO', 'CORPORATIVO STAFF', 0, 0, 1, 8, 0, '2024-02-22', '2024-02-22 20:42:10'),
(9, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-02-22', '2024-02-27 21:47:06'),
(10, 'MONICA SALAZAR', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-02-23', '2024-02-23 20:04:28'),
(11, 'FABIOLA ANGELES', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-02-23', '2024-02-29 20:56:28'),
(12, 'ADRIAN', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-02-23', '2024-02-27 21:45:04'),
(13, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-02-23', '2024-02-27 21:47:02'),
(14, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-02-23', '2024-02-27 11:25:39'),
(15, 'ESTEBAN', 'TS PRINTMAX', 1, 0, 0, 0, 0, '2024-02-23', '2024-02-27 21:44:15'),
(16, 'ROBERTO MONTOYA', 'MERIK', 4, 0, 0, 8, 0, '2024-02-23', '2024-03-16 03:42:06'),
(17, 'GABRIELA', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-02-23', '2024-02-23 20:39:02'),
(18, 'LORENA VELAZQUEZ', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-02-23', '2024-03-07 20:41:37'),
(19, 'LUIS', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-02-23', '2024-02-23 20:46:14'),
(20, 'CAROLINA ALCARAZ', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-02-23', '2024-02-23 21:05:00'),
(21, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-02-23', '2024-03-16 03:42:06'),
(22, 'VICTOR SANCHEZ', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-02-23', '2024-02-29 20:55:25'),
(23, 'ALDAHIR', 'CORPORATIVO STAFF', 0, 1, 1, 15, 0, '2024-02-23', '2024-02-23 21:47:08'),
(24, 'EDWIN RAMIREZ', 'EDUBYTES', 0, 1, 1, 15, 0, '2024-02-23', '2024-03-08 20:19:58'),
(25, 'PEDRO', 'CORPORATIVO STAFF', 0, 0, 1, 8, 0, '2024-02-23', '2024-02-23 21:52:58'),
(26, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 1, 15, 0, '2024-02-27', '2024-02-27 19:55:11'),
(27, 'ADRIANA', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-02-27', '2024-02-27 21:45:34'),
(28, 'ANDROS', 'MERHAL', 1, 0, 0, 8, 0, '2024-02-27', '2024-02-27 19:56:48'),
(29, 'LULU', 'TS PRINTMAX', 1, 0, 1, 15, 0, '2024-02-27', '2024-03-05 20:07:03'),
(30, 'TECNICO', 'COMERCIALIZADORA DOPAJ', 1, 0, 1, 15, 0, '2024-02-27', '2024-02-27 20:02:41'),
(31, 'ESTEBAN', 'TS PRINTMAX', 1, 0, 0, 0, 0, '2024-02-27', '2024-02-27 21:44:06'),
(32, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-02-27', '2024-02-27 20:26:44'),
(33, 'ALDAHIR', 'CORPORATIVO STAFF', 1, 0, 1, 15, 0, '2024-02-27', '2024-02-29 20:56:13'),
(34, 'ALCARAZ GARCIA GABRIEL', 'MERHAL', 1, 0, 1, 15, 0, '2024-02-27', '2024-02-27 20:27:16'),
(35, 'SOFIA SUAREZ', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-02-27', '2024-02-28 23:04:22'),
(36, 'ADRIAN', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-02-27', '2024-02-27 21:45:49'),
(37, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-02-27', '2024-03-16 03:42:06'),
(38, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-02-27', '2024-02-27 21:08:44'),
(39, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-02-27', '2024-02-27 21:12:03'),
(40, 'MONICA SALAZAR', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-02-27', '2024-02-27 21:12:12'),
(41, 'URIEL PEREZ', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-02-27', '2024-03-05 20:14:25'),
(42, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 1, 15, 0, '2024-02-28', '2024-02-28 20:22:33'),
(43, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-02-28', '2024-02-28 20:22:46'),
(44, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-02-28', '2024-03-16 03:42:06'),
(45, 'ANDROS', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-02-28', '2024-02-28 23:05:10'),
(46, 'HECTOR CRUZ', 'TS PRINTMAX', 1, 1, 0, 15, 0, '2024-02-28', '2024-03-15 20:34:20'),
(47, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-02-28', '2024-02-28 21:03:22'),
(48, 'MONICA SALAZAR', 'TS PRINTMAX', 0, 1, 0, 8, 0, '2024-02-28', '2024-02-28 22:59:31'),
(49, 'FABIOLA ANGELES', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-02-29', '2024-02-29 06:00:17'),
(50, 'LUCERO', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-02-29', '2024-02-29 06:00:39'),
(51, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 3, 0, 4, 53, 0, '2024-02-29', '2024-02-29 06:14:48'),
(52, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-02-29', '2024-03-16 03:42:06'),
(53, 'LAURA', 'COMERCIALIZADORA DOPAJ', 0, 0, 1, 8, 0, '2024-02-29', '2024-02-29 20:24:05'),
(54, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 1, 15, 0, '2024-02-29', '2024-02-29 20:24:20'),
(55, 'GREGORIO', 'CORPORATIVO STAFF', 0, 0, 3, 23, 0, '2024-02-29', '2024-02-29 20:25:38'),
(56, 'RECEPCIONISTA', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-02-29', '2024-02-29 20:28:13'),
(57, 'MONTSERRAT', 'COMERCIALIZADORA DOPAJ', 4, 0, 0, 30, 0, '2024-02-29', '2024-02-29 20:54:59'),
(58, 'GABRIEL ALCARAZ', 'MERHAL', 1, 0, 0, 0, -8, '2024-02-29', '2024-04-02 20:09:25'),
(59, 'ANDROS', 'MERHAL', 1, 0, 0, 8, 0, '2024-02-29', '2024-02-29 20:30:18'),
(60, 'NORA', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-02-29', '2024-02-29 21:40:51'),
(61, 'GABRIEL ALCARAZ', 'MERHAL', 1, 0, 1, 0, -15, '2024-03-01', '2024-04-02 20:09:28'),
(62, 'ADRIAN', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-03-01', '2024-03-01 20:00:47'),
(63, 'EDUARDO', 'CORPORATIVO STAFF', 1, 0, 2, 23, 0, '2024-03-01', '2024-03-01 20:25:29'),
(64, 'LORENA VELAZQUEZ', 'CORPORATIVO STAFF', 4, 0, 0, 30, 0, '2024-03-01', '2024-03-07 20:41:46'),
(65, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 1, 15, 0, '2024-03-01', '2024-03-01 20:37:53'),
(66, 'ALEIDA', 'TS PRINTMAX', 0, 2, 0, 15, 0, '2024-03-01', '2024-03-01 20:38:11'),
(67, 'ANTONIO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-01', '2024-03-01 20:38:24'),
(68, 'LUIS', 'CORPORATIVO STAFF', 1, 0, 2, 23, 0, '2024-03-01', '2024-03-01 20:38:43'),
(69, 'LUCERO', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-03-01', '2024-03-01 20:38:54'),
(70, 'CAROLINA ALCARAZ', 'EDUBYTES', 0, 0, 2, 15, 0, '2024-03-01', '2024-03-06 05:38:21'),
(71, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-03-01', '2024-03-16 03:42:06'),
(72, 'NORA', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-03-05', '2024-03-05 20:06:09'),
(73, 'RECEPCIONISTA', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-03-05', '2024-03-05 20:06:21'),
(74, 'ANDROS', 'MERHAL', 1, 0, 0, 8, 0, '2024-03-05', '2024-03-05 20:06:36'),
(75, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-03-05', '2024-03-16 03:42:06'),
(76, 'LULU', 'TS PRINTMAX', 1, 1, 0, 15, 0, '2024-03-05', '2024-03-05 20:07:23'),
(77, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 1, 15, 0, '2024-03-05', '2024-03-05 20:07:53'),
(78, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 1, 1, 0, 15, 0, '2024-03-05', '2024-03-05 20:13:32'),
(79, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-05', '2024-03-06 05:38:55'),
(80, 'ANTONIO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-05', '2024-03-05 20:14:02'),
(81, 'CAROLINA ALCARAZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-05', '2024-03-05 20:14:13'),
(82, 'LULU', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-03-06', '2024-04-17 04:07:54'),
(83, 'ANTONIO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-06', '2024-03-26 20:14:53'),
(84, 'TECNICO', '', 2, 0, 0, 15, 0, '2024-03-06', '2024-03-06 20:02:34'),
(85, 'LORENA VELAZQUEZ', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-03-06', '2024-03-06 20:26:28'),
(86, 'GUSTAVO LOPEZ', 'EDUBYTES', 0, 0, 1, 0, 0, '2024-03-06', '2024-03-15 20:46:29'),
(87, 'ALEIDA', 'TS PRINTMAX', 0, 2, 0, 15, 0, '2024-03-06', '2024-03-08 20:49:46'),
(88, 'SOFIA SUAREZ', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-03-06', '2024-03-06 21:22:41'),
(89, 'AARON MERCADO', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-03-06', '2024-03-07 20:41:16'),
(90, 'TECNICO', 'COMERCIALIZADORA DOPAJ', 0, 2, 0, 15, 0, '2024-03-07', '2024-03-07 20:10:36'),
(91, 'LULU', 'TS PRINTMAX', 1, 1, 0, 15, 0, '2024-03-07', '2024-04-17 04:08:02'),
(92, 'MONICA SALAZAR', 'TS PRINTMAX', 0, 1, 0, 8, 0, '2024-03-07', '2024-03-07 20:11:00'),
(93, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-07', '2024-03-07 20:41:29'),
(94, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-07', '2024-03-12 19:40:29'),
(95, 'AMELIA', 'TS PRINTMAX', 0, 1, 1, 15, 0, '2024-03-07', '2024-03-20 05:58:53'),
(96, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-07', '2024-03-15 23:16:58'),
(97, 'CAROLINA ALCARAZ', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-03-07', '2024-03-07 20:39:45'),
(98, 'ALBERTO', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-03-07', '2024-03-07 20:39:55'),
(99, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-03-07', '2024-03-16 03:42:06'),
(100, 'FABIOLA ANGELES', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-03-07', '2024-03-14 21:13:57'),
(101, 'ANTONIO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-08', '2024-03-26 20:14:44'),
(102, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-03-08', '2024-03-08 20:18:35'),
(103, 'SOFIA SUAREZ', 'TS PRINTMAX', 0, 0, 7, 50, 0, '2024-03-08', '2024-03-08 20:20:46'),
(104, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-08', '2024-03-12 19:41:16'),
(105, 'GUSTAVO LOPEZ', 'EDUBYTES', 2, 0, 0, 8, 0, '2024-03-08', '2024-03-15 23:17:17'),
(106, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-03-08', '2024-03-16 03:42:06'),
(107, 'MESA DE AYUDA', 'COMERCIALIZADORA DOPAJ', 0, 0, 1, 8, 0, '2024-03-08', '2024-03-08 20:46:03'),
(108, 'ANDROS', 'MERHAL', 1, 0, 0, 8, 0, '2024-03-11', '2024-03-11 20:34:40'),
(109, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-11', '2024-03-11 20:34:56'),
(110, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-11', '2024-03-16 03:44:45'),
(111, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-03-12', '2024-03-16 03:42:06'),
(112, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-12', '2024-03-12 19:37:48'),
(113, 'FABIOLA ANGELES', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-03-12', '2024-03-14 21:14:38'),
(114, 'LULU', 'TS PRINTMAX', 0, 1, 1, 15, 0, '2024-03-12', '2024-04-17 04:08:10'),
(115, 'NORA', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-03-12', '2024-03-12 20:06:53'),
(116, 'ALDAHIR', 'CORPORATIVO STAFF', 1, 0, 1, 15, 0, '2024-03-12', '2024-03-16 03:39:41'),
(117, 'TECNICO', 'COMERCIALIZADORA DOPAJ', 2, 0, 0, 15, 0, '2024-03-12', '2024-03-12 20:07:57'),
(118, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-03-12', '2024-03-16 03:42:06'),
(119, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-13', '2024-03-15 20:39:24'),
(120, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-13', '2024-03-15 23:17:29'),
(121, 'URIEL PEREZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-13', '2024-04-05 20:34:02'),
(122, 'TECNICO', 'COMERCIALIZADORA DOPAJ', 1, 0, 1, 15, 0, '2024-03-13', '2024-03-13 20:15:28'),
(123, 'GABRIEL ALCARAZ', 'MERHAL', 2, 0, 0, 0, -15, '2024-03-13', '2024-04-02 20:09:36'),
(124, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-03-13', '2024-03-13 20:16:14'),
(125, 'ROBERTO MONTOYA', 'MER', 1, 0, 0, 8, 0, '2024-03-13', '2024-03-16 03:42:06'),
(126, 'FABIOLA ANGELES', 'CORPORATIVO STAFF', 1, 0, 0, 0, 0, '2024-03-13', '2024-03-14 21:15:55'),
(127, 'ALDAHIR', 'CORPORATIVO STAFF', 1, 0, 1, 15, 0, '2024-03-13', '2024-03-16 03:39:52'),
(128, 'JUAN', 'COMERCIALIZADORA DOPAJ', 0, 1, 0, 8, 0, '2024-03-13', '2024-03-14 02:06:18'),
(129, 'TECNICO', 'COMERCIALIZADORA DOPAJ', 1, 0, 1, 15, 0, '2024-03-14', '2024-03-14 20:00:39'),
(130, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-03-14', '2024-03-14 20:00:53'),
(131, 'CAROLINA ALCARAZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-14', '2024-03-14 20:01:03'),
(132, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-03-14', '2024-03-16 03:42:06'),
(133, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-14', '2024-03-14 20:29:00'),
(134, 'MESA DE AYUDA', 'COMERCIALIZADORA DOPAJ', 0, 0, 1, 8, 0, '2024-03-14', '2024-03-14 20:29:19'),
(135, 'SOFIA SUAREZ', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-03-14', '2024-03-14 20:43:32'),
(136, 'SOFIA SUAREZ', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-03-14', '2024-03-14 20:51:26'),
(137, 'VICTOR SANCHEZ', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 0, 0, '2024-03-14', '2024-03-15 20:34:06'),
(138, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-03-14', '2024-03-16 03:42:06'),
(139, 'MONICA SALAZAR', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-03-14', '2024-03-20 05:59:58'),
(140, 'SOFIA SUAREZ', 'TS PRINTMAX', 0, 1, 0, 8, 0, '2024-03-14', '2024-03-15 04:01:56'),
(141, 'ALEIDA', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-03-14', '2024-03-15 04:48:40'),
(142, 'MARTIN', 'COMERCIALIZADORA DOPAJ', 0, 0, 1, 8, 0, '2024-03-14', '2024-03-15 04:49:15'),
(143, 'TECNICO', 'COMERCIALIZADORA DOPAJ', 1, 0, 1, 15, 0, '2024-03-15', '2024-03-15 20:12:12'),
(144, 'PAZ', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-03-15', '2024-03-15 20:12:35'),
(145, 'MESA DE AYUDA', 'COMERCIALIZADORA DOPAJ', 0, 0, 1, 8, 0, '2024-03-15', '2024-03-15 20:14:18'),
(146, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-03-15', '2024-03-15 20:14:49'),
(147, 'CAROLINA ALCARAZ', 'EDUBYTES', 1, 0, 1, 15, 0, '2024-03-15', '2024-03-15 23:18:46'),
(148, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-15', '2024-03-16 03:44:57'),
(149, 'ALBERTO', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-03-15', '2024-03-15 20:32:05'),
(150, 'GABRIEL CORDERO', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-03-15', '2024-03-15 20:32:17'),
(151, 'TECNICO', 'COMERCIALIZADORA DOPAJ', 3, 0, 0, 23, 0, '2024-03-15', '2024-03-15 20:33:16'),
(152, 'SOFIA SUAREZ', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-03-15', '2024-03-15 20:33:35'),
(153, 'FABIOLA ANGELES', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-03-15', '2024-04-16 19:50:54'),
(154, 'ANTONIO', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-03-15', '2024-03-15 23:18:20'),
(155, 'AMELIA', 'CORPORATIVO STAFF', 0, 2, 2, 15, 0, '2024-03-16', '2024-03-20 05:59:38'),
(156, 'RECEPCIONISTA', 'CORPORATIVO STAFF', 2, 2, 2, 45, 0, '2024-03-16', '2024-03-16 06:12:55'),
(157, 'ALDAHIR', 'EDUBYTES', 1, 0, 1, 15, 0, '2024-03-19', '2024-03-23 03:37:26'),
(158, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-19', '2024-03-20 05:59:06'),
(159, 'GUSTAVO LOPEZ', 'ED', 1, 0, 0, 8, 0, '2024-03-19', '2024-03-26 20:13:51'),
(160, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-03-19', '2024-03-20 05:59:17'),
(161, 'GABRIEL ALCARAZ', 'MERHAL', 1, 0, 0, 0, -8, '2024-03-19', '2024-04-02 20:09:43'),
(162, 'JOSE LUIS SANCHEZ', 'CORPORATIVO STAFF', 0, 2, 3, 38, 0, '2024-03-19', '2024-03-20 19:41:54'),
(163, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-03-20', '2024-03-20 19:38:29'),
(164, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-20', '2024-03-26 20:14:07'),
(165, 'JAVIER', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-03-20', '2024-03-20 19:42:08'),
(166, 'PEDRO', 'CORPORATIVO STAFF', 0, 0, 1, 8, 0, '2024-03-20', '2024-03-20 19:43:53'),
(167, 'ALDAHIR', 'CORPORATIVO STAFF', 1, 0, 1, 15, 0, '2024-03-20', '2024-03-23 03:37:49'),
(168, 'ALFONSO', 'TS PRINTMAX', 1, 0, 1, 15, 0, '2024-03-20', '2024-03-20 20:11:55'),
(169, 'JUAN CUELLAR', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-03-20', '2024-03-20 20:12:07'),
(170, 'MONICA SALAZAR', 'TS PRINTMAX', 0, 1, 0, 8, 0, '2024-03-20', '2024-03-20 20:20:00'),
(171, 'LORENA VELAZQUEZ', 'EDUBYTES', 0, 0, 2, 15, 0, '2024-03-20', '2024-04-03 04:54:26'),
(172, 'SOFIA SUAREZ', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-03-20', '2024-03-20 20:39:57'),
(173, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 1, 15, 0, '2024-03-20', '2024-03-22 20:25:16'),
(174, 'LUIS', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-03-20', '2024-03-22 20:24:37'),
(175, 'RECEPCIONISTA', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-03-21', '2024-03-21 20:04:58'),
(176, 'ALDAHIR', 'CORPORATIVO STAFF', 2, 1, 1, 30, 0, '2024-03-21', '2024-03-23 03:37:55'),
(177, 'ANTONIO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-21', '2024-03-21 20:05:41'),
(178, 'JUAN CUELLAR', 'COMERCIALIZADORA DOPAJ', 1, 1, 1, 23, 0, '2024-03-21', '2024-03-21 20:21:56'),
(179, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-21', '2024-03-21 20:37:03'),
(180, 'FABIOLA ANGELES', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-03-21', '2024-04-16 19:51:02'),
(181, 'PAULINA', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-03-21', '2024-03-21 22:54:22'),
(182, 'AARON MERCADO', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-03-21', '2024-04-03 05:00:29'),
(183, 'EDWIN RAMIREZ', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-03-21', '2024-03-21 22:54:55'),
(184, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-03-22', '2024-03-22 20:11:42'),
(185, 'ANTONIO', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-03-22', '2024-03-26 20:14:35'),
(186, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-22', '2024-04-09 03:48:15'),
(187, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-22', '2024-03-26 20:14:16'),
(188, 'JAVIER', 'EDUBYTES', 0, 1, 0, 8, 0, '2024-03-22', '2024-03-26 20:15:44'),
(189, 'URIEL', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-03-22', '2024-03-22 20:40:42'),
(190, 'LETY', 'CORPORATIVO STAFF', 3, 1, 0, 30, 0, '2024-03-22', '2024-03-22 21:00:02'),
(191, 'FABIOLA ANGELES', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-03-22', '2024-04-16 19:51:09'),
(192, 'LORENA VELAZQUEZ', 'EDUBYTES', 1, 0, 1, 15, 0, '2024-03-22', '2024-03-22 21:00:22'),
(193, 'LUCERO', 'CORPORATIVO STAFF', 0, 0, 1, 8, 0, '2024-03-22', '2024-03-22 21:25:11'),
(194, 'DANIEL', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-04-01', '2024-04-01 19:39:26'),
(195, 'ALDAHIR', 'CORPORATIVO STAFF', 1, 0, 1, 15, 0, '2024-04-01', '2024-04-01 19:39:38'),
(196, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-04-01', '2024-04-01 20:04:25'),
(197, 'PEDRO', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-04-01', '2024-04-01 22:09:07'),
(198, 'TECNICO', 'COMERCIALIZADORA DOPAJ', 0, 2, 1, 23, 0, '2024-04-01', '2024-04-01 22:09:20'),
(199, 'AMELIA', 'CORPORATIVO STAFF', 4, 0, 2, 45, 0, '2024-04-01', '2024-04-03 05:00:54'),
(200, 'JOSE LUIS SANCHEZ', 'CORPORATIVO STAFF', 0, 0, 5, 38, 0, '2024-04-02', '2024-04-02 06:09:41'),
(201, 'ALDAHIR', 'CORPORATIVO STAFF', 1, 0, 1, 15, 0, '2024-04-02', '2024-04-02 20:04:23'),
(202, 'ANDROS', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-02', '2024-04-02 20:04:39'),
(203, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-02', '2024-05-03 03:51:47'),
(204, 'GABRIEL ALCARAZ', 'MERHAL', 1, 0, 0, 0, -8, '2024-04-02', '2024-04-02 20:05:05'),
(205, 'GABRIEL ALCARAZ', 'MERHAL', 1, 0, 0, 0, -8, '2024-04-02', '2024-04-02 20:05:30'),
(206, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-04-02', '2024-04-02 20:21:41'),
(207, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-02', '2024-05-03 03:51:52'),
(208, 'AARON MERCADO', 'EDUBYTES', 2, 0, 0, 15, 0, '2024-04-02', '2024-04-03 05:00:42'),
(209, 'ALEIDA', 'TS PRINTMAX', 0, 2, 0, 15, 0, '2024-04-02', '2024-04-02 21:25:31'),
(210, 'EDWIN RAMIREZ', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-04-02', '2024-04-09 03:48:23'),
(211, 'NORA', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-04-02', '2024-04-03 05:55:03'),
(212, 'LORENA VELAZQUEZ', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-04-02', '2024-04-03 04:52:45'),
(213, 'POLI', 'CORPORATIVO STAFF', 1, 1, 0, 15, 0, '2024-04-03', '2024-04-03 20:09:40'),
(214, 'PAZ', 'TS PRINTMAX', 0, 1, 1, 15, 0, '2024-04-03', '2024-04-03 20:09:54'),
(215, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-03', '2024-04-05 19:26:40'),
(216, 'ALBERTO', 'CORPORATIVO STAFF', 2, 0, 0, 15, 0, '2024-04-03', '2024-04-03 20:10:23'),
(217, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-03', '2024-05-03 03:51:58'),
(218, 'GABRIEL ALCARAZ', 'MERHAL', 0, 0, 1, 0, -8, '2024-04-03', '2024-04-04 01:16:43'),
(219, 'DANIEL', 'COMERCIALIZADORA DOPAJ', 5, 0, 0, 38, 0, '2024-04-04', '2024-04-04 20:21:23'),
(220, 'ALMACEN', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-04-04', '2024-04-04 20:21:40'),
(221, 'SOFIA SUAREZ', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-04-04', '2024-04-04 20:52:22'),
(222, 'HECTOR CRUZ', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-04-04', '2024-04-05 20:34:46'),
(223, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-04', '2024-05-03 03:52:06'),
(224, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-04', '2024-04-05 19:26:30'),
(225, 'AMELIA', 'CORPORATIVO STAFF', 0, 2, 2, 30, 0, '2024-04-05', '2024-04-09 03:54:47'),
(226, 'JOSE LUIS SANCHEZ', 'CORPORATIVO STAFF', 0, 0, 1, 8, 0, '2024-04-05', '2024-04-05 06:11:40'),
(227, 'ISABEL', 'DESAYUNOS', 4, 3, 3, 80, 0, '2024-04-05', '2024-04-12 19:29:32'),
(228, 'POLI', 'CORPORATIVO STAFF', 1, 1, 0, 15, 0, '2024-04-05', '2024-04-05 19:24:23'),
(229, 'ALMACEN', 'TS PRINTMAX', 2, 0, 0, 15, 0, '2024-04-05', '2024-04-05 19:57:06'),
(230, 'ANTONIO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-05', '2024-04-05 20:00:16'),
(231, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-05', '2024-04-08 20:57:49'),
(232, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-05', '2024-04-05 20:25:27'),
(233, 'HECTOR CRUZ', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-04-05', '2024-04-12 19:29:37'),
(234, 'MONICA SALAZAR', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-04-05', '2024-04-05 20:32:21'),
(235, 'SOFIA SUAREZ', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-04-05', '2024-04-12 20:46:33'),
(236, 'TECNICO', 'COMERCIALIZADORA DOPAJ', 0, 0, 2, 15, 0, '2024-04-05', '2024-04-05 20:32:48'),
(237, 'JUDITH', 'CORPORATIVO STAFF', 0, 0, 1, 8, 0, '2024-04-05', '2024-04-05 20:33:00'),
(238, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-05', '2024-04-09 03:48:34'),
(239, 'LETY', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-04-08', '2024-04-08 19:47:33'),
(240, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-08', '2024-05-03 03:52:11'),
(241, 'AARON MERCADO', 'EDUBYTES', 2, 0, 0, 15, 0, '2024-04-08', '2024-04-08 20:57:59'),
(242, 'MARTIN', 'COMERCIALIZADORA DOPAJ', 0, 0, 1, 8, 0, '2024-04-08', '2024-04-08 20:33:51'),
(243, 'EDWIN RAMIREZ', 'EDUBYTES', 2, 0, 0, 15, 0, '2024-04-08', '2024-04-09 03:48:39'),
(244, 'GABRIEL ALCARAZ', 'MERHAL', 1, 0, 0, 0, -8, '2024-04-08', '2024-04-08 20:58:28'),
(245, 'LULU', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-04-09', '2024-04-17 04:08:20'),
(246, 'MARY', 'TS PRINTMAX', 1, 0, 1, 15, 0, '2024-04-09', '2024-04-09 20:19:20'),
(247, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-04-09', '2024-04-09 20:20:33'),
(248, 'GABRIEL ALCARAZ', 'MERHAL', 0, 0, 1, 0, -8, '2024-04-09', '2024-04-09 20:20:42'),
(249, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-09', '2024-05-03 03:52:18'),
(250, 'LETY', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-04-09', '2024-04-09 20:21:29'),
(251, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-09', '2024-04-09 20:34:28'),
(252, 'ADRIANA', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-04-09', '2024-04-23 20:34:55'),
(253, 'HECTOR CRUZ', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-04-09', '2024-04-24 21:16:21'),
(254, 'ANTONIO', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-04-10', '2024-04-10 19:54:29'),
(255, 'ESTEBAN', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-04-10', '2024-04-11 20:30:02'),
(256, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-10', '2024-05-03 03:52:24'),
(257, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-10', '2024-04-17 19:48:24'),
(258, 'DANIEL', 'COMERCIALIZADORA DOPAJ', 4, 1, 0, 38, 0, '2024-04-10', '2024-04-10 20:58:53'),
(259, 'LETY', 'CORPORATIVO STAFF', 0, 3, 0, 23, 0, '2024-04-10', '2024-04-10 20:59:13'),
(260, 'LAURA', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-04-10', '2024-04-10 21:29:28'),
(261, 'URIEL', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-10', '2024-04-10 21:29:40'),
(262, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-10', '2024-04-12 20:27:38'),
(263, 'MONICA SALAZAR', 'TS PRINTMAX', 0, 1, 0, 8, 0, '2024-04-10', '2024-04-10 21:37:50'),
(264, 'POLI', 'CORPORATIVO STAFF', 1, 1, 0, 15, 0, '2024-04-11', '2024-04-11 20:25:56'),
(265, 'TECNICO', 'COMERCIALIZADORA DOPAJ', 2, 0, 0, 15, 0, '2024-04-11', '2024-04-11 20:26:06'),
(266, 'GREGORIO', 'CORPORATIVO STAFF', 0, 0, 1, 8, 0, '2024-04-11', '2024-04-11 20:26:20'),
(267, 'LORENA VELAZQUEZ', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-11', '2024-04-11 20:26:37'),
(268, 'ESTEBAN', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-04-11', '2024-04-11 20:26:58'),
(269, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-11', '2024-05-03 03:52:36'),
(270, 'ESTEBAN', 'TS PRINTMAX', 0, 1, 0, 8, 0, '2024-04-11', '2024-04-11 20:34:10'),
(271, 'ARTURO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-11', '2024-04-11 23:50:48'),
(272, 'ISABEL', 'DESAYUNOS', 5, 0, 0, 40, 0, '2024-04-12', '2024-04-12 19:30:47'),
(273, 'LETY', 'CORPORATIVO STAFF', 3, 3, 0, 45, 0, '2024-04-12', '2024-04-12 19:52:48'),
(274, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-12', '2024-04-17 19:48:14'),
(275, 'ANDROS', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-12', '2024-04-12 19:48:33'),
(276, 'ALDAHIR', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-12', '2024-04-12 19:48:57'),
(277, 'DIANA', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-12', '2024-04-12 19:49:08'),
(278, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-04-12', '2024-04-12 20:22:07'),
(279, 'PEDRO', 'CORPORATIVO STAFF', 0, 0, 1, 8, 0, '2024-04-12', '2024-04-12 20:22:21'),
(280, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-12', '2024-04-12 20:22:33'),
(281, 'MARY', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-04-12', '2024-04-12 20:22:46'),
(282, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-12', '2024-04-12 20:23:49'),
(283, 'ARTURO', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-04-12', '2024-04-12 20:28:05'),
(284, 'ESTEBAN', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-04-12', '2024-04-12 20:45:50'),
(285, 'FABIOLA ANGELES', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-04-12', '2024-04-16 19:51:21'),
(286, 'SOFIA SUAREZ', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-04-12', '2024-04-12 20:46:10'),
(287, 'LAURA', 'COMERCIALIZADORA DOPAJ', 0, 0, 1, 8, 0, '2024-04-12', '2024-04-12 20:47:04'),
(288, 'GABRIEL ALCARAZ', 'MERHAL', 1, 0, 1, 0, -15, '2024-04-12', '2024-04-12 21:04:37'),
(289, 'AMELIA', 'CORPORATIVO STAFF', 1, 1, 2, 30, 0, '2024-04-12', '2024-04-16 19:50:26'),
(290, 'LETTY', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-04-16', '2024-04-17 19:48:48'),
(291, 'LORENA VELAZQUEZ', 'EDUBYTES', 3, 0, 0, 23, 0, '2024-04-16', '2024-04-16 20:35:20'),
(292, 'LAURA', 'COMERCIALIZADORA DOPAJ', 0, 0, 1, 8, 0, '2024-04-16', '2024-04-16 20:35:32'),
(293, 'JAVIER', 'EDUBYTES', 2, 0, 0, 15, 0, '2024-04-16', '2024-04-16 20:35:50'),
(294, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-16', '2024-05-03 03:52:48'),
(295, 'ALDAHIR', 'CORPORATIVO STAFF', 1, 0, 1, 15, 0, '2024-04-16', '2024-04-18 21:46:00'),
(296, 'JUAN CUELLAR', 'COMERCIALIZADORA DOPAJ', 0, 1, 0, 8, 0, '2024-04-16', '2024-04-16 21:06:05'),
(297, 'GUSTAVO LOPEZ', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-04-16', '2024-04-17 19:47:55'),
(298, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-16', '2024-04-18 21:45:11'),
(299, 'ARTURO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-16', '2024-04-16 21:54:57'),
(300, 'FABIOLA ANGELES', 'CORPORATIVO STAFF', 0, 0, 1, 8, 0, '2024-04-16', '2024-05-08 21:28:40'),
(301, 'JOSE LUIS SANCHEZ', 'CORPORATIVO STAFF', 2, 0, 2, 30, 0, '2024-04-17', '2024-04-17 19:49:14'),
(302, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-17', '2024-05-15 20:38:03'),
(303, 'LETTY', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-04-17', '2024-04-17 20:02:06'),
(304, 'JUAN CUELLAR', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-04-17', '2024-04-17 20:02:21'),
(305, 'ALFONSO', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-04-17', '2024-04-17 20:05:35'),
(306, 'ALFONSO', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-04-17', '2024-04-17 20:13:47'),
(307, 'PAZ', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-04-17', '2024-04-17 21:07:18'),
(308, 'FABIOLA ANGELES', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-17', '2024-05-08 21:28:48'),
(309, 'LUCERO', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-17', '2024-04-18 19:51:40'),
(310, 'ANTONIO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-18', '2024-04-18 19:49:35'),
(311, 'ANDROS', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-18', '2024-04-18 19:51:50'),
(312, 'ARTURO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-18', '2024-04-18 19:50:09'),
(313, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-04-18', '2024-04-18 20:18:35'),
(314, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-18', '2024-05-15 20:38:11'),
(315, 'JUAN CUELLAR', 'COMERCIALIZADORA DOPAJ', 2, 1, 0, 23, 0, '2024-04-18', '2024-04-18 20:30:59'),
(316, 'SOFIA SUAREZ', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-04-18', '2024-04-23 20:35:39'),
(317, 'EDWIN RAMIREZ', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-04-18', '2024-04-18 21:44:55'),
(318, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-18', '2024-04-18 21:45:00'),
(319, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-22', '2024-05-03 03:53:06'),
(320, 'LETTY', 'CORPORATIVO STAFF', 1, 2, 0, 23, 0, '2024-04-22', '2024-04-22 20:16:19'),
(321, 'ARTURO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-22', '2024-04-22 20:17:30'),
(322, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-22', '2024-05-16 05:18:27'),
(323, 'EDWIN RAMIREZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-22', '2024-04-26 22:47:26'),
(324, 'GABRIEL ALCARAZ', 'MERHAL', 1, 0, 0, 0, -8, '2024-04-22', '2024-04-22 20:18:20'),
(325, 'MONICA SALAZAR', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-04-22', '2024-04-22 20:43:12'),
(326, 'JAVIER', 'EDUBYTES', 0, 0, 1, 8, 0, '2024-04-22', '2024-05-01 04:33:21'),
(327, 'LULU', 'TS PRINTMAX', 1, 1, 0, 15, 0, '2024-04-22', '2024-05-01 05:15:34'),
(328, 'ISABEL', 'DESAYUNOS', 5, 0, 0, 40, 0, '2024-04-23', '2024-04-23 20:35:17'),
(329, 'POLI', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-04-23', '2024-04-23 19:43:21'),
(330, 'GABRIEL ALCARAZ', 'MERHAL', 1, 0, 0, 0, -8, '2024-04-23', '2024-04-23 19:43:30'),
(331, 'ARTURO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-23', '2024-04-24 19:56:20'),
(332, 'JUAN CUELLAR', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-04-23', '2024-05-01 05:54:01'),
(333, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-23', '2024-05-03 03:53:11'),
(334, 'LULU', 'TS PRINTMAX', 1, 0, 1, 15, 0, '2024-04-23', '2024-05-01 05:15:40'),
(335, 'ANDROS', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-23', '2024-04-23 20:31:11'),
(336, 'LAURA', 'COMERCIALIZADORA DOPAJ', 0, 1, 0, 8, 0, '2024-04-23', '2024-04-23 20:31:23'),
(337, 'ESTEBAN', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-04-23', '2024-04-23 20:31:36'),
(338, 'ALDAHIR', 'CORPORATIVO STAFF', 1, 0, 1, 15, 0, '2024-04-23', '2024-05-03 21:00:00'),
(339, 'ADRIANA', 'COMERCIALIZADORA DOPAJ', 0, 0, 1, 8, 0, '2024-04-23', '2024-04-23 20:32:05'),
(340, 'LULU', 'TS PRINTMAX', 0, 1, 1, 15, 0, '2024-04-24', '2024-05-01 05:15:47'),
(341, 'ISABEL', 'DESAYUNOS', 7, 0, 0, 53, 0, '2024-04-24', '2024-04-24 19:53:11'),
(342, 'ARTURO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-24', '2024-04-24 19:53:33'),
(343, 'ANDROS', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-24', '2024-04-24 19:53:53'),
(344, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-24', '2024-04-24 19:56:06'),
(345, 'LORENA VELAZQUEZ', 'EDUBYTES', 4, 0, 0, 30, 0, '2024-04-24', '2024-04-24 20:32:39'),
(346, 'GABRIEL ALCARAZ', 'MERHAL', 0, 0, 1, 0, -8, '2024-04-24', '2024-04-24 20:31:13'),
(347, 'URIEL', 'EDUBYTES', 0, 1, 0, 8, 0, '2024-04-24', '2024-04-24 20:35:33'),
(348, 'HECTOR CRUZ', 'TS PRINTMAX', 0, 1, 0, 8, 0, '2024-04-24', '2024-04-24 21:15:44'),
(349, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-24', '2024-05-03 03:54:40'),
(350, 'ARTURO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-25', '2024-04-25 20:03:47'),
(351, 'JUAN CUELLAR', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-04-25', '2024-04-25 20:04:04'),
(352, 'PEDRO', 'COMERCIALIZADORA DOPAJ', 0, 0, 1, 8, 0, '2024-04-25', '2024-04-25 20:04:26'),
(353, 'ANDROS', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-25', '2024-04-25 20:04:38'),
(354, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-04-25', '2024-04-25 20:06:56'),
(355, 'VICTOR SANCHEZ', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-04-25', '2024-05-17 00:32:45'),
(356, 'CAROLINA ALCARAZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-25', '2024-04-25 20:31:07'),
(357, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-25', '2024-05-03 03:53:49'),
(358, 'CAROLINA ALCARAZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-25', '2024-04-25 20:43:28'),
(359, 'BERTHA', 'MERHAL', 1, 0, 0, 8, 0, '2024-04-25', '2024-04-26 19:38:19'),
(360, 'SOFIA SUAREZ', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-04-25', '2024-05-02 21:01:31'),
(361, 'EDWIN RAMIREZ', 'EDUBYTES', 0, 0, 2, 15, 0, '2024-04-25', '2024-04-26 22:47:12'),
(362, 'ISABEL', 'DESAYUNOS', 5, 0, 0, 40, 0, '2024-04-26', '2024-04-26 19:37:47'),
(363, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-26', '2024-05-03 03:53:56'),
(364, 'LULU', 'TS PRINTMAX', 0, 1, 1, 15, 0, '2024-04-26', '2024-05-01 05:15:57'),
(365, 'GABRIELA', 'CORPORATIVO STAFF', 1, 0, 1, 15, 0, '2024-04-26', '2024-04-26 19:59:33'),
(366, 'ALFONSO', 'TS PRINTMAX', 0, 2, 0, 15, 0, '2024-04-26', '2024-04-26 19:59:42'),
(367, 'DIANA', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-26', '2024-04-26 20:21:01'),
(368, 'MONICA SALAZAR', 'TS PRINTMAX', 0, 1, 0, 8, 0, '2024-04-26', '2024-04-26 20:06:25'),
(369, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-26', '2024-05-06 21:24:49'),
(370, 'LETTY', 'CORPORATIVO STAFF', 3, 2, 1, 45, 0, '2024-04-26', '2024-04-26 20:06:51'),
(371, 'URIEL', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-26', '2024-04-26 20:08:40'),
(372, 'CAROLINA ALCARAZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-26', '2024-04-26 20:20:34'),
(373, 'HECTOR CRUZ', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-04-26', '2024-05-16 20:40:59'),
(374, 'JOSE LUIS SANCHEZ', 'CORPORATIVO STAFF', 0, 0, 2, 15, 0, '2024-04-29', '2024-04-29 20:40:02'),
(375, 'JUAN CUELLAR', 'COMERCIALIZADORA DOPAJ', 2, 0, 0, 15, 0, '2024-04-29', '2024-04-29 20:40:17'),
(376, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-04-29', '2024-04-29 20:40:31'),
(377, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-29', '2024-05-03 03:54:00'),
(378, 'LORENA VELAZQUEZ', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-29', '2024-04-30 21:06:44'),
(379, 'AARON MERCADO', 'EDUBYTES', 0, 1, 0, 8, 0, '2024-04-29', '2024-04-29 20:47:04'),
(380, 'URIEL', 'EDUBYTES', 0, 1, 0, 8, 0, '2024-04-29', '2024-04-29 21:04:51'),
(381, 'ESTEBAN', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-04-29', '2024-05-02 21:01:03'),
(382, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-30', '2024-05-06 21:25:59'),
(383, 'LULU', 'TS PRINTMAX', 1, 1, 0, 15, 0, '2024-04-30', '2024-05-01 05:16:06'),
(384, 'ALFONSO', 'TS PRINTMAX', 1, 0, 1, 15, 0, '2024-04-30', '2024-04-30 20:40:00'),
(385, 'LETY', 'CORPORATIVO STAFF', 2, 2, 0, 30, 0, '2024-04-30', '2024-04-30 20:40:22'),
(386, 'SOFIA SUAREZ', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-04-30', '2024-05-02 21:01:38'),
(387, 'MARIBEL', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-04-30', '2024-04-30 23:19:34'),
(388, 'MONICA SALAZAR', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-04-30', '2024-05-01 00:09:22'),
(389, 'AARON MERCADO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-30', '2024-05-01 04:32:35'),
(390, 'JAVIER', 'EDUBYTES', 1, 1, 0, 15, 0, '2024-04-30', '2024-05-01 04:32:58'),
(391, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-04-30', '2024-05-03 03:54:10'),
(392, 'AMELIA', 'CORPORATIVO STAFF', 3, 1, 0, 30, 0, '2024-04-30', '2024-05-01 05:50:03'),
(393, 'GUSTAVO LOPEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-04-30', '2024-05-02 21:02:31'),
(394, 'TECNICO', 'COMERCIALIZADORA DOPAJ', 2, 0, 0, 15, 0, '2024-05-02', '2024-05-02 20:40:03'),
(395, 'GABRIELA CORDERO', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-05-02', '2024-05-02 20:41:11'),
(396, 'URIEL', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-05-02', '2024-05-02 20:41:24'),
(397, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 8, 0, '2024-05-02', '2024-05-03 03:54:19'),
(398, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-05-02', '2024-05-02 20:42:21'),
(399, 'SOFIA SUAREZ', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-05-02', '2024-05-02 20:59:52'),
(400, 'GABRIEL ALCARAZ', 'MERHAL', 1, 0, 0, 0, -8, '2024-05-02', '2024-05-02 21:02:48'),
(401, 'LUIS', 'CORPORATIVO STAFF', 3, 0, 0, 23, 0, '2024-05-02', '2024-05-03 05:42:45'),
(402, 'ALDAHIR', 'CORPORATIVO STAFF', 0, 2, 1, 23, 0, '2024-05-02', '2024-05-03 20:59:49'),
(403, 'DIANA', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-05-03', '2024-05-03 19:33:20'),
(404, 'AMELIA', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-05-03', '2024-05-03 19:33:31'),
(405, 'AMPARO', 'COMERCIALIZADORA DOPAJ', 2, 0, 0, 15, 0, '2024-05-03', '2024-05-03 19:54:21'),
(406, 'VICTOR SANCHEZ', 'COMERCIALIZADORA DOPAJ', 0, 0, 1, 8, 0, '2024-05-03', '2024-05-17 00:32:51'),
(407, 'TECNICO', 'COMERCIALIZADORA DOPAJ', 0, 1, 1, 15, 0, '2024-05-03', '2024-05-03 20:39:56'),
(408, 'JAVIER', 'EDUBYTES', 0, 1, 0, 8, 0, '2024-05-03', '2024-05-03 20:40:10'),
(409, 'MONICA SALAZAR', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-05-03', '2024-05-04 00:18:20'),
(410, 'AMELIA', 'CORPORATIVO STAFF', 0, 1, 3, 30, 0, '2024-05-03', '2024-05-07 19:34:28'),
(411, 'AMELIA', 'CORPORATIVO STAFF', 0, 0, 2, 15, 0, '2024-05-04', '2024-05-07 19:34:35'),
(412, 'LETY', 'CORPORATIVO STAFF', 1, 1, 0, 15, 0, '2024-05-06', '2024-05-06 20:31:10'),
(413, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-05-06', '2024-05-06 20:31:19'),
(414, 'DANIEL', 'COMERCIALIZADORA DOPAJ', 3, 1, 3, 53, 0, '2024-05-06', '2024-05-06 20:32:41'),
(415, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 0, -8, '2024-05-06', '2024-05-07 00:47:07'),
(416, 'ISABEL', 'DESAYUNOS', 7, 0, 0, 56, 0, '2024-05-07', '2024-05-07 19:33:59'),
(417, 'GABRIELA', 'TS PRINTMAX', 0, 1, 0, 8, 0, '2024-05-07', '2024-05-07 20:23:40'),
(418, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 0, -8, '2024-05-07', '2024-05-07 20:37:25'),
(419, 'URIEL', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-05-07', '2024-05-07 20:44:02'),
(420, 'LAURA', 'TS PRINTMAX', 2, 0, 0, 15, 0, '2024-05-07', '2024-05-07 20:44:27'),
(421, 'SOFIA SUAREZ', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-05-07', '2024-05-09 20:33:30'),
(422, 'LULU', 'TS PRINTMAX', 1, 1, 0, 15, 0, '2024-05-07', '2024-05-16 05:16:57'),
(423, 'CARLOS', 'CORPORATIVO STAFF', 0, 0, 3, 23, 0, '2024-05-08', '2024-05-08 21:25:52'),
(424, 'LETTY', 'CORPORATIVO STAFF', 1, 2, 0, 23, 0, '2024-05-08', '2024-05-08 21:26:03'),
(425, 'FABIOLA ANGELES', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-05-08', '2024-05-08 21:26:17'),
(426, 'LUCERO', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-05-08', '2024-05-08 21:26:27'),
(427, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-05-08', '2024-05-08 21:26:40'),
(428, 'DIANA', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-05-08', '2024-05-08 21:26:48'),
(429, 'ANTONIO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-05-08', '2024-05-23 20:09:34'),
(430, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 0, -8, '2024-05-08', '2024-05-08 21:27:10'),
(431, 'TECNICO', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-05-08', '2024-05-08 21:27:33'),
(432, 'ALFONSO', 'COMERCIALIZADORA DOPAJ', 3, 1, 0, 30, 0, '2024-05-08', '2024-05-08 21:30:21'),
(433, 'ALFONSO', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-05-09', '2024-05-09 20:13:15'),
(434, 'POLI', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-05-09', '2024-05-09 20:09:26'),
(435, 'LUIS', 'CORPORATIVO STAFF', 0, 1, 1, 15, 0, '2024-05-09', '2024-05-09 20:09:49'),
(436, 'ALDAHIR', 'CORPORATIVO STAFF', 2, 0, 0, 15, 0, '2024-05-09', '2024-05-15 20:37:25'),
(437, 'VICTOR SANCHEZ', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-05-09', '2024-05-17 00:32:56'),
(438, 'ANDROS', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-05-09', '2024-05-09 20:31:13'),
(439, 'HECTOR CRUZ', 'TS PRINTMAX', 2, 0, 0, 15, 0, '2024-05-09', '2024-05-09 20:31:29'),
(440, 'MONICA SALAZAR', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-05-09', '2024-05-09 20:31:39'),
(441, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 0, -8, '2024-05-09', '2024-05-09 20:31:47'),
(442, 'SOFIA SUAREZ', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-05-09', '2024-05-09 20:32:49'),
(443, 'LULU', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-05-10', '2024-05-16 05:17:07'),
(444, 'DIANA', 'CORPORATIVO STAFF', 4, 0, 0, 23, 0, '2024-05-10', '2024-05-14 19:48:17'),
(445, 'LORENA VELAZQUEZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-05-10', '2024-05-10 20:07:47'),
(446, 'VICTOR SANCHEZ', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-05-10', '2024-05-17 00:33:01'),
(447, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 0, -8, '2024-05-10', '2024-05-10 20:08:05'),
(448, 'ESTEBAN', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-05-10', '2024-05-10 21:46:35'),
(449, 'GABRIELA', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-05-10', '2024-05-10 21:46:49'),
(450, 'LETY', 'CORPORATIVO STAFF', 0, 2, 1, 23, 0, '2024-05-10', '2024-05-10 21:47:22'),
(451, 'LULU', 'TS PRINTMAX', 1, 0, 0, 8, 0, '2024-05-14', '2024-05-16 05:17:13'),
(452, 'ANDROS', 'CORPORATIVO STAFF', 1, 1, 0, 15, 0, '2024-05-14', '2024-05-14 19:46:03'),
(453, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-05-14', '2024-05-14 19:46:17'),
(454, 'GABRIEL ALCARAZ', 'MERHAL', 1, 0, 0, 0, -8, '2024-05-14', '2024-05-14 19:46:28'),
(455, 'GABRIEL CORDERO', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-05-14', '2024-05-14 19:52:13'),
(456, 'JULIO', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-05-14', '2024-05-14 20:08:03'),
(457, 'PAZ', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-05-14', '2024-05-14 20:23:50'),
(458, 'MARY', 'TS PRINTMAX', 0, 1, 1, 15, 0, '2024-05-14', '2024-05-14 20:24:02'),
(459, 'CAROLINA ALCARAZ', 'EDUBYTES', 1, 0, 1, 15, 0, '2024-05-14', '2024-05-15 20:37:02'),
(460, 'HECTOR CRUZ', 'TS PRINTMAX', 0, 1, 0, 8, 0, '2024-05-14', '2024-05-16 20:41:06'),
(461, 'PAOLA', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-05-14', '2024-05-14 21:00:52'),
(462, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 0, -8, '2024-05-14', '2024-05-14 21:01:13'),
(463, 'DANIEL', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-05-14', '2024-05-14 21:30:46'),
(464, 'GABRIEL ALCARAZ', 'MERHAL', 1, 0, 0, 0, -8, '2024-05-14', '2024-05-14 21:34:20'),
(465, 'ISABEL', 'DESAYUNOS', 7, 0, 0, 56, 0, '2024-05-15', '2024-05-15 19:39:01'),
(466, 'PEDRO', 'CORPORATIVO STAFF', 0, 0, 1, 8, 0, '2024-05-15', '2024-05-15 19:39:10'),
(467, 'ESTEBAN', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-05-15', '2024-05-15 20:13:43'),
(468, 'ANDROS', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-05-15', '2024-05-15 20:13:56'),
(469, 'DIANA', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-05-15', '2024-05-15 20:14:06'),
(470, 'VICTOR SANCHEZ', 'COMERCIALIZADORA DOPAJ', 1, 0, 0, 8, 0, '2024-05-15', '2024-05-17 00:32:35'),
(471, 'ALDAHIR', 'CORPORATIVO STAFF', 1, 1, 0, 15, 0, '2024-05-15', '2024-05-15 20:36:52'),
(472, 'URIEL', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-05-15', '2024-05-15 20:14:53'),
(473, 'JULIO', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-05-15', '2024-05-15 20:15:05'),
(474, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 0, -8, '2024-05-15', '2024-05-15 20:15:13'),
(475, 'AARON MERCADO', 'EDUBYTES', 3, 0, 0, 23, 0, '2024-05-15', '2024-05-17 00:32:03'),
(476, 'ANDROS', 'MERHAL', 1, 0, 0, 8, 0, '2024-05-16', '2024-05-16 19:39:00'),
(477, 'JOSE LUIS SANCHEZ', 'MERHAL', 0, 0, 1, 8, 0, '2024-05-16', '2024-05-16 19:40:10'),
(478, 'MONICA SALAZAR', 'TS PRINTMAX', 0, 1, 0, 8, 0, '2024-05-16', '2024-05-16 19:46:38'),
(479, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-05-16', '2024-05-16 20:26:29'),
(480, 'LETY', 'CORPORATIVO STAFF', 0, 2, 1, 23, 0, '2024-05-16', '2024-05-16 20:33:07'),
(481, 'HECTOR CRUZ', 'TS PRINTMAX', 0, 1, 0, 5, -3, '2024-05-16', '2024-05-16 20:37:55'),
(482, 'SOFIA SUAREZ', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-05-16', '2024-05-16 20:38:15'),
(483, 'GABRIEL ALCARAZ', 'MERHAL', 2, 0, 0, 0, -15, '2024-05-16', '2024-05-17 00:32:20'),
(484, 'LUCERO', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-05-16', '2024-05-17 05:22:44'),
(485, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-05-17', '2024-05-17 20:11:35'),
(486, 'POLI', 'CORPORATIVO STAFF', 1, 0, 0, 8, 0, '2024-05-17', '2024-05-17 20:11:47'),
(487, 'VICTOR SANCHEZ', 'COMERCIALIZADORA DOPAJ', 1, 0, 1, 0, -15, '2024-05-17', '2024-05-17 20:11:58'),
(488, 'ANTONIO', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-05-17', '2024-05-23 20:09:42'),
(489, 'ALFONSO', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-05-17', '2024-05-17 20:20:59'),
(490, 'CAROLINA ALCARAZ', 'EDUBYTES', 0, 0, 3, 23, 0, '2024-05-17', '2024-05-17 20:37:42'),
(491, 'PEDRO', 'CORPORATIVO STAFF', 1, 0, 1, 15, 0, '2024-05-22', '2024-05-22 19:49:13'),
(492, 'PAZ', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-05-22', '2024-05-22 20:47:32'),
(493, 'GABRIEL GOROCIKA', 'CORPORATIVO STAFF', 0, 2, 0, 15, 0, '2024-05-22', '2024-05-22 20:47:41'),
(494, 'JULIO', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-05-22', '2024-05-22 20:48:08'),
(495, 'AMPARO', 'COMERCIALIZADORA DOPAJ', 4, 0, 0, 30, 0, '2024-05-22', '2024-05-22 20:48:20'),
(496, 'LETY', 'CORPORATIVO STAFF', 1, 1, 1, 23, 0, '2024-05-22', '2024-05-22 20:48:32'),
(497, 'CAROLINA ALCARAZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-05-22', '2024-05-22 20:48:44'),
(498, 'URIEL', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-05-22', '2024-05-22 20:48:52'),
(499, 'URIEL PEREZ', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-05-22', '2024-05-22 20:49:01'),
(500, 'JAVIER', 'EDUBYTES', 0, 1, 0, 8, 0, '2024-05-22', '2024-05-22 20:49:11'),
(501, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 0, -8, '2024-05-22', '2024-05-22 20:49:22'),
(502, 'ESTEBAN', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-05-22', '2024-05-22 21:12:16'),
(503, 'ISABEL', 'DESAYUNOS', 6, 0, 0, 48, 0, '2024-05-23', '2024-05-28 20:13:44'),
(504, 'LULU', 'TS PRINTMAX', 1, 0, 1, 0, -15, '2024-05-23', '2024-05-23 20:00:47'),
(505, 'ANTONIO', 'EDUBYTES', 0, 0, 1, 0, -8, '2024-05-23', '2024-05-23 20:01:02'),
(506, 'DAMARIS', 'CORPORATIVO STAFF', 2, 0, 0, 15, 0, '2024-05-23', '2024-05-23 20:06:33'),
(507, 'GABRIELA CORDERO', 'TS PRINTMAX', 0, 0, 1, 8, 0, '2024-05-23', '2024-05-23 20:06:59'),
(508, 'ESTEBAN', 'TS PRINTMAX', 0, 0, 2, 15, 0, '2024-05-23', '2024-05-23 20:09:51'),
(509, 'AARON MERCADO', 'EDUBYTES', 3, 0, 0, 23, 0, '2024-05-23', '2024-05-23 20:25:44'),
(510, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 0, -8, '2024-05-23', '2024-05-23 20:25:55'),
(511, 'URIEL', 'EDUBYTES', 1, 0, 0, 8, 0, '2024-05-23', '2024-05-23 20:26:07'),
(512, 'JULIO', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-05-23', '2024-05-23 20:42:05'),
(513, 'MONICA SALAZAR', 'TS PRINTMAX', 0, 1, 0, 8, 0, '2024-05-23', '2024-05-23 20:47:41'),
(514, 'LUCERO', 'CORPORATIVO STAFF', 2, 0, 0, 15, 0, '2024-05-23', '2024-05-23 21:18:24'),
(515, 'ANDROS', 'MERHAL', 0, 1, 0, 8, 0, '2024-05-23', '2024-05-23 21:18:36'),
(516, 'ALEIDA', 'TS PRINTMAX', 0, 1, 1, 0, -15, '2024-05-23', '2024-05-23 22:35:35'),
(517, 'CAROLINA ALCARAZ', 'EDUBYTES', 0, 1, 1, 15, 0, '2024-05-24', '2024-05-24 20:34:18'),
(518, 'JULIO', 'CORPORATIVO STAFF', 0, 1, 0, 8, 0, '2024-05-24', '2024-05-24 20:34:28'),
(519, 'ROBERTO MONTOYA', 'MERIK', 1, 0, 0, 0, -8, '2024-05-24', '2024-05-24 20:34:38'),
(520, 'MONICA SALAZAR', 'TS PRINTMAX', 0, 1, 0, 8, 0, '2024-05-24', '2024-05-24 21:32:41'),
(521, 'DIANA', 'CORPORATIVO STAFF', 2, 0, 0, 15, 0, '2024-05-24', '2024-05-28 20:13:14'),
(522, 'LAURA', 'COMERCIALIZADORA DOPAJ', 0, 0, 1, 8, 0, '2024-05-24', '2024-05-24 21:33:03'),
(523, 'ISABEL', 'DESAYUNOS', 7, 0, 0, 56, 0, '2024-05-28', '2024-05-28 19:52:05'),
(524, 'LULU', 'TS PRINTMAX', 1, 0, 1, 0, -15, '2024-05-28', '2024-05-28 19:52:17'),
(525, 'DIANA', 'CORPORATIVO STAFF', 4, 0, 0, 30, 0, '2024-05-28', '2024-05-28 20:13:00'),
(526, 'LETY', 'CORPORATIVO STAFF', 0, 2, 1, 23, 0, '2024-05-28', '2024-05-28 20:14:00'),
(527, 'ALDAHIR', 'COMERCIALIZADORA DOPAJ', 1, 1, 0, 0, -15, '2024-05-28', '2024-05-28 20:21:46'),
(1059, 'PRUEBA', 'PRUEBA', 1, 1, 1, 0, -23, '2024-06-11', '2024-06-11 05:35:46'),
(1060, 'PRUEBA', 'PRUEBA', 1, 1, 1, 0, -23, '2024-06-11', '2024-06-11 05:38:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_works`
--

CREATE TABLE `tbl_works` (
  `w_id` int(11) NOT NULL,
  `w_filtro` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `w_imagen` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `w_titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `w_url` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `w_activo` int(11) NOT NULL,
  `w_fregistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_works`
--

INSERT INTO `tbl_works` (`w_id`, `w_filtro`, `w_imagen`, `w_titulo`, `w_url`, `w_activo`, `w_fregistro`) VALUES
(1, 'web-design seo email-marketing rrss campaings', 'dopaj.webp', 'Comercializadora Dopaj', 'https://dopaj.com.mx/', 1, '2022-08-18 04:22:19'),
(2, 'web-design seo email-marketing rrss campaings', 'edubytes.webp', 'Edubytes', 'https://edubytes.com.mx/', 1, '2022-08-18 04:22:22'),
(3, 'web-design seo', 'forjas.webp', 'Forjas Merik', 'http://forjasmerik.com.mx/', 1, '2022-08-18 04:20:05'),
(4, 'web-design seo', 'idc.webp', 'IDC Fabricación y Diseño de Carrocerías', 'https://idcarrocerias.com.mx/', 1, '2022-08-18 04:20:08'),
(5, 'web-design seo', 'kirkwood.webp', 'Kirkwood Industrias', 'https://www.kirkwood.com.mx/', 1, '2022-08-18 04:20:12'),
(6, 'web-design seo', 'kwd.webp', 'KWD-reman', 'http://kwd-reman.com/', 1, '2022-08-18 04:20:18'),
(7, 'web-design seo', 'edu.webp', 'Punto Edu', 'https://puntoedu.com.mx/', 1, '2022-08-18 04:20:21'),
(8, 'web-design seo email-marketing rrss campaings', 'ts.webp', 'TS Printmax', 'https://tsprintmax.com.mx/', 1, '2022-08-18 04:22:28'),
(9, 'web-design seo rrss campaings', 'ugj.webp', 'Universidad Gauss Jordan', 'https://www.gaussjordan.edu.mx/', 1, '2022-08-18 04:23:26'),
(10, 'campaings', 'chsc.webp', 'Clínica Hacienda Santa Clara', '', 1, '2024-08-22 18:57:09'),
(11, 'campaings', 'cvav.webp', 'Clínica Volver a la Vida', '', 1, '2024-08-22 18:57:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_briefing`
--
ALTER TABLE `tbl_briefing`
  ADD PRIMARY KEY (`id_b`);

--
-- Indices de la tabla `tbl_cafes`
--
ALTER TABLE `tbl_cafes`
  ADD PRIMARY KEY (`c_id`);

--
-- Indices de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`ca_id`),
  ADD KEY `fk_ca_servicio` (`ca_servicio`);

--
-- Indices de la tabla `tbl_private`
--
ALTER TABLE `tbl_private`
  ADD PRIMARY KEY (`p_id`);

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `fk_pr_categoria` (`pr_categoria`);

--
-- Indices de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  ADD PRIMARY KEY (`s_id`);

--
-- Indices de la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  ADD PRIMARY KEY (`v_id`);

--
-- Indices de la tabla `tbl_works`
--
ALTER TABLE `tbl_works`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_briefing`
--
ALTER TABLE `tbl_briefing`
  MODIFY `id_b` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_cafes`
--
ALTER TABLE `tbl_cafes`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_private`
--
ALTER TABLE `tbl_private`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1061;

--
-- AUTO_INCREMENT de la tabla `tbl_works`
--
ALTER TABLE `tbl_works`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD CONSTRAINT `fk_ca_servicio` FOREIGN KEY (`ca_servicio`) REFERENCES `tbl_servicios` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD CONSTRAINT `fk_pr_categoria` FOREIGN KEY (`pr_categoria`) REFERENCES `tbl_categorias` (`ca_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
