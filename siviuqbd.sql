-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2015 a las 02:34:07
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `siviuqbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptos`
--

CREATE TABLE IF NOT EXISTS `conceptos` (
`id` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conceptos`
--

INSERT INTO `conceptos` (`id`, `nombre`, `created`, `modified`) VALUES
(2, 'Favorable', 1432022899, 1432022899);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

CREATE TABLE IF NOT EXISTS `convocatorias` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(233) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `registradoPor` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `convocatorias`
--

INSERT INTO `convocatorias` (`id`, `nombre`, `descripcion`, `fechaInicio`, `fechaFin`, `registradoPor`, `created`, `modified`) VALUES
(1, 'Usabilidad', 'importancia de la usabilidad', '2015-03-26', '0000-00-00', 'william mena', '2015-03-18 02:43:47', NULL),
(2, 'Desarrollo', 'Desarrollo de frameworks', '2015-07-16', '0000-00-00', 'Daniel Rincon', '2015-03-18 03:11:25', NULL),
(3, 'HCI', 'Convocatoria para desarrollar proyectos de Hci', '2015-12-24', '0000-00-00', 'Omar Suarez', '2015-03-18 03:11:25', NULL),
(4, 'Desarollo Plataforma Movil', 'Convocatoria abierta para el desarrollo de una plataforma web que reemplace a academusoft para el acceso a notas mediante el uso de un dispositivo movil ', '2015-09-13', '0000-00-00', 'Sebastian Cordoba O.', '2015-03-19 02:23:58', '2015-03-19 02:23:58'),
(5, 'Desarollo Plataforma Movil', 'Convocatoria abierta para el desarrollo de una plataforma web que reemplace a academusoft para el acceso a notas mediante el uso de un dispositivo movil ', '2015-09-13', '0000-00-00', 'Sebastian Cordoba O.', '2015-03-19 02:23:58', '2015-03-19 02:23:58'),
(6, 'Auxiliar Docencia ', 'Convocatoria que se realiza al estudiante que quiere pertenecer a formar parte de un auxiliar de docencia en el espacio académico  de Lenguaje de programación ', '2015-08-03', '0000-00-00', 'Maria Cano', '2015-03-21 15:10:27', '2015-03-21 15:10:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacions`
--

CREATE TABLE IF NOT EXISTS `educacions` (
`id` int(20) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `institucion` varchar(300) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hoja_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `educacions`
--

INSERT INTO `educacions` (`id`, `titulo`, `institucion`, `ciudad`, `fecha`, `hoja_id`, `created`, `modified`) VALUES
(1, 'Ing. Sistemas y Computacion', 'Universidad del Quindio', 'Armenia ', '2012-10-17', 92, '2015-04-27 00:50:03', NULL),
(2, 'Ing. Sistemas y Computacion', 'Universidad Del Quindio', 'Armenia', '2012-12-14', 93, '2015-04-27 00:49:09', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidads`
--

CREATE TABLE IF NOT EXISTS `entidads` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `registradoPor` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entidads`
--

INSERT INTO `entidads` (`id`, `nombre`, `registradoPor`, `created`, `modified`) VALUES
(2, 'Icetex', 'Sandra Hernandez', '2015-04-27 00:50:53', NULL),
(3, 'Colciencias', '', '2015-04-27 00:51:40', NULL),
(4, 'Davivienda', '', '2015-04-27 00:51:40', NULL),
(5, 'Fondo Desarrollo Innovacion ', '', '2015-04-27 00:53:37', NULL),
(6, 'Bancolombia', 'Sandra Hernandez', '2015-05-17 18:54:34', '2015-05-17 18:54:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`, `created`, `modified`) VALUES
(1, 'Aprobado Por Consejo De Facultad', '2015-05-01 03:17:12', NULL),
(2, 'No Aprobado Por Comité Central De Investigaciones', '2015-05-01 03:17:44', NULL),
(3, 'Inscrito', '2015-05-01 05:16:03', NULL),
(4, 'Aprobado por comité central de investigaciones', '2015-05-01 08:08:06', NULL),
(5, 'Finalizado', '2015-05-01 08:05:21', NULL),
(6, 'En Ejecucion', '2015-05-01 11:27:30', NULL),
(7, 'ejemplo', '2015-05-19 21:31:50', '2015-05-19 21:31:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacions`
--

CREATE TABLE IF NOT EXISTS `evaluacions` (
`id` int(11) NOT NULL,
  `fechaEnvio` date NOT NULL,
  `fechaEntrega` date NOT NULL,
  `concepto` varchar(300) NOT NULL,
  `observaciones` varchar(500) NOT NULL,
  `calObjetivos` int(11) NOT NULL,
  `calTema` int(11) NOT NULL,
  `calPlanteamiento` int(11) NOT NULL,
  `calCronograma` int(11) NOT NULL,
  `calPresupuesto` int(11) NOT NULL,
  `calTotal` int(11) NOT NULL,
  `fechaCorreccion` date NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `revision_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `resgitradoPor` varchar(50) NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evaluacions`
--

INSERT INTO `evaluacions` (`id`, `fechaEnvio`, `fechaEntrega`, `concepto`, `observaciones`, `calObjetivos`, `calTema`, `calPlanteamiento`, `calCronograma`, `calPresupuesto`, `calTotal`, `fechaCorreccion`, `proyecto_id`, `revision_id`, `created`, `resgitradoPor`, `modified`) VALUES
(1, '2015-03-09', '2015-04-06', 'El proyecto es innovador ', 'ninguna', 0, 0, 0, 0, 0, 5, '2035-01-01', 3, 1, NULL, 'Sandra Hernandez', '2015-05-19 20:01:01'),
(2, '2015-02-12', '2015-03-12', 'El proyecto ha sido realizado satisfactoriamente mejorando el proceso técnico de producción de la empresa PROMAR.S.A', 'ninguna', 0, 0, 0, 0, 0, 5, '0000-00-00', 4, 0, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluadors`
--

CREATE TABLE IF NOT EXISTS `evaluadors` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `especializacion` varchar(100) NOT NULL,
  `universidad` varchar(200) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evaluadors`
--

INSERT INTO `evaluadors` (`id`, `nombre`, `apellido`, `titulo`, `especializacion`, `universidad`, `telefono`, `email`, `direccion`, `created`, `modified`) VALUES
(1, 'Pablo Hernan', 'Acevedo', 'Ing. Electronico', 'Dr. En Robotica', 'Universidad Pontificia De Suiza', 312789340, 'pabloha@hotmail.com', 'B/ Estandar mz 34 # 21', '2015-05-19 09:54:13', '2015-05-19 09:54:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultads`
--

CREATE TABLE IF NOT EXISTS `facultads` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `decano` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facultads`
--

INSERT INTO `facultads` (`id`, `nombre`, `email`, `decano`, `created`, `modified`) VALUES
(1, 'Ingenieria', 'ING', '0', '2015-04-26 10:16:45', NULL),
(2, 'Educacion', 'EDU', '0', '2015-04-26 10:16:45', NULL),
(3, 'Ciencias Humanas y Bellas Artes', 'CHBA', '0', '2015-04-26 10:18:58', NULL),
(4, 'Ciencias Básicas y Tecnológicas ', 'CBTEC', '0', '2015-04-26 10:19:37', NULL),
(5, 'Ciencias económicas y administrativas ', 'CEADM', '0', '2015-03-26 03:30:16', NULL),
(6, 'Ciencias De La Salud', 'CDSAL', '0', '2015-03-26 04:12:25', NULL),
(7, 'Ciencias Agroindustriales', 'CAGRO', '0', '2015-03-26 04:08:01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupoinves`
--

CREATE TABLE IF NOT EXISTS `grupoinves` (
`id` int(11) NOT NULL,
  `invesigador_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `Representante` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupolineas`
--

CREATE TABLE IF NOT EXISTS `grupolineas` (
`id` int(11) NOT NULL,
  `linea_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
`id` int(20) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `registradoPor` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `programa_id` int(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre`, `registradoPor`, `email`, `categoria`, `programa_id`, `created`, `modified`) VALUES
(1, 'Usabilidad', 'Benito Carmona Mena', 'benitocame@hotmail.com', 'A', 0, '2015-03-18 01:20:57', NULL),
(2, 'SINFOCI', 'Alberto Ramos', 'albera@hotmail.com', 'B', 0, '2015-03-18 01:26:02', NULL),
(3, 'Redes Y Distribucion', 'Maria Cano', 'macano@hotmail.com', 'C', 0, '2015-03-18 01:27:50', NULL),
(5, 'ROBUQ', 'Sandra Hernandez', 'robo@hotmail.com', 'A', 1, '2015-05-19 09:50:23', '2015-05-19 09:50:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hojas`
--

CREATE TABLE IF NOT EXISTS `hojas` (
`id` int(20) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `ciudadNacimiento` varchar(100) NOT NULL,
  `deptoNacimiento` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigadors`
--

CREATE TABLE IF NOT EXISTS `investigadors` (
`id` int(20) NOT NULL,
  `cedula` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` int(20) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `programa_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `investigadors`
--

INSERT INTO `investigadors` (`id`, `cedula`, `nombre`, `apellido`, `correo`, `telefono`, `usuario_id`, `programa_id`, `created`, `modified`) VALUES
(1, 1094922456, 'Sandra Paola', 'Castro Benavidez ', 'sanca@hotmail.com', 7472222, 0, 0, '2015-03-23 20:08:03', NULL),
(2, 1027332657, 'Camilo ', 'Buitrago', 'cabu@hotmail.com', 7475678, 0, 0, '2015-03-23 20:08:03', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

CREATE TABLE IF NOT EXISTS `lineas` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `registradoPor` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`id`, `nombre`, `registradoPor`, `created`, `modified`) VALUES
(1, 'Gestion Del Conocimiento', 'Sandra Hernandez', '2015-04-27 10:38:05', '2015-05-19 18:53:12'),
(2, 'HCI', 'Clarena Gomez', '2015-04-27 10:38:05', '2015-05-17 07:23:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidads`
--

CREATE TABLE IF NOT EXISTS `modalidads` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proentidads`
--

CREATE TABLE IF NOT EXISTS `proentidads` (
`id` int(11) NOT NULL,
  `aporte` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `proyecto_id` int(11) NOT NULL,
  `entidad_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proentidads`
--

INSERT INTO `proentidads` (`id`, `aporte`, `created`, `modified`, `proyecto_id`, `entidad_id`) VALUES
(1, '2000000', '2015-05-05 13:20:20', NULL, 1, 2),
(2, '4000000', '2015-05-01 06:33:49', NULL, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proentregas`
--

CREATE TABLE IF NOT EXISTS `proentregas` (
`id` int(20) NOT NULL,
  `fecha` date NOT NULL,
  `dosEjemplares` varchar(100) NOT NULL,
  `medioMagnetico` varchar(100) NOT NULL,
  `fichaResumen` varchar(300) NOT NULL,
  `adjunto` varchar(100) NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proentregas`
--

INSERT INTO `proentregas` (`id`, `fecha`, `dosEjemplares`, `medioMagnetico`, `fichaResumen`, `adjunto`, `proyecto_id`, `created`, `modified`) VALUES
(1, '2015-05-20', 'si ', 'si ', '00091', 'Informacion relacionada con la entrega', 1, '2015-05-20 02:01:00', '2015-05-20 02:01:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE IF NOT EXISTS `programas` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `director` varchar(50) NOT NULL,
  `iniciales` varchar(20) NOT NULL,
  `facultad_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `nombre`, `director`, `iniciales`, `facultad_id`, `created`, `modified`) VALUES
(1, 'Ingenieria Civil ', 'carlos arturo garcia ', 'INGCV', 1, '2015-03-27 12:24:35', NULL),
(2, 'Ingenieria Electronica', 'Hernesto Samper', 'INGELEC', 1, '2015-03-26 18:34:55', NULL),
(3, 'Sistemas y Computacion ', 'Robinson Pulgarin ', 'INGSISCO', 1, '2015-03-27 08:27:00', NULL),
(4, 'Lic. En Biologia y Educacion Ambiental ', 'Maria Prada', 'LBEA', 2, '2015-03-27 13:25:21', NULL),
(5, 'Lic. En Educacion Fisica Recreacion y Deportes ', 'Jorge Eduardo Garcia', 'LEFRD', 2, '2015-03-27 14:32:25', NULL),
(6, 'Lic. En Español y Literatura ', 'Liliana Gomez ', 'LELI', 2, '2015-03-26 11:23:20', NULL),
(7, 'Lic. Lenguas Modernas ', 'Aura Heano', 'LLMO', 2, '2015-03-27 07:22:22', NULL),
(8, 'Lic. En Matematicas ', 'Efrain Alberto hoyos', 'LEMAT', 2, '2015-03-26 09:31:32', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proinvestigadors`
--

CREATE TABLE IF NOT EXISTS `proinvestigadors` (
`id` int(11) NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `investigador_id` int(11) NOT NULL,
  `horasTrabajadas` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proinvestigadors`
--

INSERT INTO `proinvestigadors` (`id`, `proyecto_id`, `investigador_id`, `horasTrabajadas`, `created`, `modified`) VALUES
(1, 1, 1, 12, '2015-05-20 02:07:55', '2015-05-20 02:07:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `titulo` varchar(100) NOT NULL,
  `resumen` varchar(1000) NOT NULL,
  `objetivos` varchar(800) NOT NULL,
  `resultados` varchar(800) NOT NULL,
  `fechaInscripcion` date NOT NULL,
  `duracion` int(11) NOT NULL,
  `lugarEjecucion` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `estado_id` varchar(50) NOT NULL,
`id` int(11) NOT NULL,
  `prorroga` datetime DEFAULT NULL,
  `datos` varchar(200) NOT NULL,
  `cronograma` int(255) NOT NULL,
  `modalidad` varchar(50) NOT NULL,
  `linea_id` int(50) NOT NULL,
  `grupo_id` int(50) NOT NULL,
  `presupuesto` int(50) NOT NULL,
  `evaluador_id` int(50) DEFAULT NULL,
  `datosNombre` varchar(300) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`titulo`, `resumen`, `objetivos`, `resultados`, `fechaInscripcion`, `duracion`, `lugarEjecucion`, `ciudad`, `estado_id`, `id`, `prorroga`, `datos`, `cronograma`, `modalidad`, `linea_id`, `grupo_id`, `presupuesto`, `evaluador_id`, `datosNombre`, `created`, `modified`) VALUES
('Aplicativo para fomentar el aprendizaje de niños con deficid de atencion ', 'Aplicativo desarrollado para ayudar al aprendizaje de las matematicas de niños con deficid de atencion en el colegio Armenia', 'Fomentar el aprendizaje de los niños del colegio Armenia', 'Se espera mejorar el entendimiento y reforzar el aprendizaje de las matematicas de una manera mucho mas didactica ', '2014-12-09', 6, 'Colegio Armenia', 'Armenia, Quindio', '', 1, '2015-05-19 10:38:00', '', 0, 'Proyecto de Aplicacion', 1, 1, 3200000, 1, 'Hernando Alvarez', '2015-02-09 00:00:00', '2015-05-19 10:39:27'),
('Desarrollo de una guía de buenas practicas para la construcción de software por medio de modelos', 'A traves de una guia de buenas practica se evidencia la implementaciòn que se debe llevar a cabo a través de modelos al desarrollar un proyecto de software', 'Desarrollar una guía de buenas practicas para la construcción de software a través de modelado ', 'Obtener buena aceptación por parte de desarrolladores y estudiantes de ingeniería de software de la universidad nacional', '2014-11-04', 4, 'Universidad Nacional de Colombia', 'Bogota,Colombia', '', 2, NULL, '', 0, 'Proyecto de Aplicacion', 0, 0, 4000000, 1, 'Roberto Gomez', '2015-05-10 00:00:00', NULL),
('Creación de un DRON para el monitoreo del volcan machin ', 'Creación un DRON el cual sirva de soporte para el monitoreo del volcán machin en el departamento del Quindio ', 'Creación del DRON Para realizar un monitoreo del volcán machin ', 'Se espera el monitoreo constante por parte del DRON que sirva como base para ejecutar posibles planes de contingencia y mitigacion ', '2015-03-20', 5, 'Armenia', 'Armenia, Quindio ', '', 3, NULL, '', 0, 'Proyecto de Aplicación ', 0, 0, 2800000, 1, '', '2015-05-06 00:00:00', NULL),
('Mejoramiento del proceso técnico de producción de la empresa Promar.SA', 'Se llevara a cabo un mejoramiento del proceso técnico de producción de la empresa Promar.SA', 'Obtener el mayor beneficio en la empresa de acuerdo con el mejoramiento del proceso técnico de produccion ', 'Mejorar el proceso técnico de producción en la empresa Promar.SA', '2015-03-11', 4, 'Promar S.A.', 'Armenia, Quindio ', '', 4, NULL, '', 0, 'Proyecto Investigación ', 0, 0, 3700000, 1, '', '2015-05-01 09:45:43', NULL),
('Sistema de Información para el museo de Artrópodos de la Universidad del Quindio ', 'Se desarrollara un sistema de informacion con todo lo relacionado al museo de Artropodos de la universidad del Quindio, en donde sus estudiantes podrán evidenciar la diversidad de especies que habitan en las instalaciones y en el departamento del Quindio ', 'Diseñar un Sistema de Informacion ', 'De acuerdo con el sistema de información, los estudiantes podrán  aprender y reforzar sus conocimientos en cuanto a este tema ', '2015-03-15', 6, 'Universidad de Quindio ', 'Armenia, Quindio ', '3', 5, '2015-05-20 01:52:00', '', 2, 'Proyecto de Investigación ', 2, 2, 3400000, 1, 'Juan Guillermo ', '2015-05-20 01:57:34', '2015-05-20 01:57:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacions`
--

CREATE TABLE IF NOT EXISTS `publicacions` (
`id` int(20) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `link` varchar(100) NOT NULL,
  `revista` varchar(100) NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicacions`
--

INSERT INTO `publicacions` (`id`, `titulo`, `fecha`, `link`, `revista`, `proyecto_id`, `created`, `modified`) VALUES
(1, 'DRONES como parte de la vida cotidiana', '2014-02-02', 'www.dronart.es', 'Rebotica España independiente ', 4, '2015-05-19 18:42:53', '2015-05-19 18:43:36'),
(2, 'Herramientas computacionales como herramienta de aprendizaje ', '2015-02-03', 'www.armeniaaprende.gov.co/innovacion/hoy', 'Semana ', 1, '2015-05-19 18:42:53', '2015-05-19 18:47:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisions`
--

CREATE TABLE IF NOT EXISTS `revisions` (
`id` int(20) NOT NULL,
  `observaciones` varchar(300) NOT NULL,
  `numActa` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `concepto_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `revisions`
--

INSERT INTO `revisions` (`id`, `observaciones`, `numActa`, `fecha`, `concepto_id`, `created`, `modified`) VALUES
(1, 'Se debe programar capacitacion para el personal adecuado ', 193, '2015-03-15', 2, '2015-05-19 19:57:32', '2015-05-19 19:57:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
`id` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `hoja_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificadors`
--

CREATE TABLE IF NOT EXISTS `verificadors` (
  `id` int(20) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `invPrincipal` varchar(100) NOT NULL,
  `grupo` varchar(100) NOT NULL,
  `linea` varchar(100) NOT NULL,
  `facultad` varchar(100) NOT NULL,
  `asignacionHoras` varchar(100) NOT NULL,
  `modalidad` varchar(100) NOT NULL,
  `nombreInvestigadores` varchar(100) NOT NULL,
  `coInvestigadores` varchar(300) NOT NULL,
  `invAsociado` varchar(100) NOT NULL,
  `auxInvestigacion` varchar(300) NOT NULL,
  `estInvestigador` varchar(300) NOT NULL,
  `objGeneral` varchar(300) NOT NULL,
  `objEspecificos` varchar(500) NOT NULL,
  `estadoGeneral` varchar(100) NOT NULL,
  `marcoTeorico` varchar(800) NOT NULL,
  `impactoSocial` varchar(300) NOT NULL,
  `planteamientoProblema` varchar(800) NOT NULL,
  `justificacion` varchar(800) NOT NULL,
  `metodologia` varchar(11) NOT NULL,
  `resultadosEsperados` varchar(500) NOT NULL,
  `estrategiaComunicacion` varchar(500) NOT NULL,
  `bibliografia` varchar(500) NOT NULL,
  `cronograma` varchar(800) NOT NULL,
  `presupuesto` varchar(100) NOT NULL,
  `presentacionVigencias` varchar(100) NOT NULL,
  `descripcionGastos` varchar(500) NOT NULL,
  `softwareAdquirir` varchar(500) NOT NULL,
  `materialesInsumos` varchar(500) NOT NULL,
  `otrosRubros` varchar(500) NOT NULL,
  `viajes` varchar(500) NOT NULL,
  `hojaVida` varchar(500) NOT NULL,
  `observaciones` varchar(500) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conceptos`
--
ALTER TABLE `conceptos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `educacions`
--
ALTER TABLE `educacions`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entidads`
--
ALTER TABLE `entidads`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluacions`
--
ALTER TABLE `evaluacions`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluadors`
--
ALTER TABLE `evaluadors`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facultads`
--
ALTER TABLE `facultads`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupoinves`
--
ALTER TABLE `grupoinves`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupolineas`
--
ALTER TABLE `grupolineas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hojas`
--
ALTER TABLE `hojas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `investigadors`
--
ALTER TABLE `investigadors`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lineas`
--
ALTER TABLE `lineas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalidads`
--
ALTER TABLE `modalidads`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proentidads`
--
ALTER TABLE `proentidads`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proentregas`
--
ALTER TABLE `proentregas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proinvestigadors`
--
ALTER TABLE `proinvestigadors`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicacions`
--
ALTER TABLE `publicacions`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `revisions`
--
ALTER TABLE `revisions`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `verificadors`
--
ALTER TABLE `verificadors`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conceptos`
--
ALTER TABLE `conceptos`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `educacions`
--
ALTER TABLE `educacions`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `entidads`
--
ALTER TABLE `entidads`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `evaluacions`
--
ALTER TABLE `evaluacions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `evaluadors`
--
ALTER TABLE `evaluadors`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `facultads`
--
ALTER TABLE `facultads`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `grupoinves`
--
ALTER TABLE `grupoinves`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `grupolineas`
--
ALTER TABLE `grupolineas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `hojas`
--
ALTER TABLE `hojas`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `investigadors`
--
ALTER TABLE `investigadors`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `lineas`
--
ALTER TABLE `lineas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `modalidads`
--
ALTER TABLE `modalidads`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proentidads`
--
ALTER TABLE `proentidads`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `proentregas`
--
ALTER TABLE `proentregas`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `proinvestigadors`
--
ALTER TABLE `proinvestigadors`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `publicacions`
--
ALTER TABLE `publicacions`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `revisions`
--
ALTER TABLE `revisions`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
