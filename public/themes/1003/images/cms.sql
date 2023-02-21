-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2020 a las 03:07:14
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `slug` varchar(500) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `excerpt` varchar(800) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `contenido` longtext NOT NULL,
  `idpagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `slug`, `titulo`, `excerpt`, `imagen`, `contenido`, `idpagina`) VALUES
(3, 'freddie_mercury_es_el_mejor_cantante_de_la_historia_lo_dice_la_ciencia_y_todos_debemos_rendir_pleitesia', 'Freddie Mercury es el mejor cantante de la historia: lo dice la ciencia y todos debemos rendir pleitesía', '¿Quién es el mejor cantante de la historia del rock y del pop? La respuesta a esta pregunta es absolutamente personal. Unos dirán que es Bruce Springsteen, por sus letras, por la emoción que transmite en directo y por lo majete que es. Otros dirán que es Bob Dylan, porque es el único que ha ganado el Premio', '1581181018.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p style=\"list-style-type: none;\" data-test-id=\"Paragraph\">&iquest;Qui&eacute;n es el mejor cantante de la historia del rock y del pop? La respuesta a esta pregunta es absolutamente personal. Unos dir&aacute;n que es&nbsp;<a href=\"https://www.revistagq.com/noticias/cultura/articulos/bruce-springsteen-en-67-canciones-cumpleanos/24635\" rel=\"follow\">Bruce Springsteen</a>, por sus letras, por la emoci&oacute;n que transmite en directo y por lo majete que es. Otros dir&aacute;n que es&nbsp;<a href=\"https://www.revistagq.com/noticias/cultura/articulos/bob-dylan-premio-nobel/24829\" rel=\"follow\">Bob Dylan</a>, porque es el &uacute;nico que ha ganado el&nbsp;Premio Nobel&nbsp;cantando como una grulla que fuma 6 paquetes de Ducados al d&iacute;a y desayuna doce carajillos. Y por &uacute;ltimo, habr&aacute; otros que digan que es&nbsp;<a href=\"https://www.revistagq.com/noticias/cultura/articulos/por-que-soy-un-fan-de-u2/29183\" rel=\"follow\">Bon</a>&nbsp;o, por sus inflexiones, por sus los&nbsp;matices de su canto&nbsp;y porque las entradas de sus conciertos cuestan un pastizal.</p>\r\n<p style=\"list-style-type: none;\" data-test-id=\"Paragraph\">&iquest;Y si preguntamos&nbsp;<a href=\"https://www.revistagq.com/tags/ciencia/5058\" rel=\"follow\">a la ciencia</a>&nbsp;cu&aacute;l es el mejor?&nbsp;Evidentemente, solo puede haber uno, y ese cantante ha de ser elegido por un m&eacute;todo emp&iacute;rico. Un grupo de investigadores&nbsp;suecos, austriacos y checos&nbsp;decidieron crear ese sistema y estudiar a varios solitas para determinar qui&eacute;n es el mejor de todos. Y ese, el m&aacute;s grande entre los grandes (cient&iacute;ficamente hablando) es&nbsp;Freddie Mercury.<iframe width=\"1\" height=\"1\" frameborder=\"0\" data-mce-fragment=\"1\"></iframe></p>\r\n<p style=\"list-style-type: none;\" data-test-id=\"Paragraph\">En el trabajo, titulado \'Freddie Mercury&mdash;acoustic analysis of speaking fundamental frequency, vibrato, and subharmonics\', y publicado en 2016 en la revista&nbsp;<a href=\"https://www.ncbi.nlm.nih.gov/pubmed/27079680\" rel=\"nofollow\">Logopedics Phoniatrics Vocology</a>, se examina la voz del frontman de Queen.</p>\r\n<p style=\"list-style-type: none;\" data-test-id=\"Paragraph\">Para hacerlo, el equipo cont&oacute; con la&nbsp;discograf&iacute;a del grupo, grabaciones en directo&nbsp;y tambi&eacute;n con entrevistas radiof&oacute;nicas realizadas&nbsp;al artista nacido en Zanz&iacute;bar en 1946. Todas estas piezas fueron digitalizadas y analizadas por un software llamado Prat, utilizado para realizar un registro fon&eacute;tico del habla. Para examinar&nbsp;el vibrato de Mercury&nbsp;se utiliz&oacute; otro programa llamado &lsquo;&nbsp;Acapella Collection&rsquo;.</p>\r\n</body>\r\n</html>', 6),
(4, 'however_around_four_years_into_their_relationship_austin_started_to_sense_something_had_changed_in_mercury', 'However, around four years into their relationship, Austin started to sense something had changed in Mercury.', 'FREDDIE MERCURY was a private person away from the outrageous and outgoing stage persona he created for himself with Queen, preferring to keep his personal life away from the spotlight. But, after his death, his ex-girlfriend Mary Austin shared an insight into what went on behind closed doors.', '1581195316.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>However, around four years into their relationship, Austin started to sense something had changed in Mercury.</p>\r\n<p>In a newly unearthed interview, which she gave as part of the 2000 documentary, Freddie Mercury: The Untold Story, Austin revealed: &ldquo;I knew that this man wasn&rsquo;t at one with himself over something.</p>\r\n<p>However, around four years into their relationship, Austin started to sense something had changed in Mercury.</p>\r\n<p>In a newly unearthed interview, which she gave as part of the 2000 documentary, Freddie Mercury: The Untold Story, Austin revealed: &ldquo;I knew that this man wasn&rsquo;t at one with himself over something.</p>\r\n</body>\r\n</html>', 6),
(5, 'napoleon_bonaparte_emperador', 'Napoleón Bonaparte, emperador', 'Napoleón I Bonaparte (Ajaccio, Córcega, Francia; 15 de agosto de 1769-Longwood, Santa Elena, Reino Unido; 5 de mayo de 1821) fue un militar y estadista francés, general republicano durante la Revolución y el Directorio, artífice del golpe de Estado del 18 de brumario que lo convirtió en primer cónsul (Premier Cónsul) de la República el 11 de noviembre de 1799', '1581197112.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Napole&oacute;n I Bonaparte&nbsp;(<a title=\"Ajaccio\" href=\"https://es.wikipedia.org/wiki/Ajaccio\">Ajaccio</a>,&nbsp;<a title=\"C&oacute;rcega\" href=\"https://es.wikipedia.org/wiki/C%C3%B3rcega\">C&oacute;rcega</a>,&nbsp;<a title=\"Francia\" href=\"https://es.wikipedia.org/wiki/Francia\">Francia</a>; 15 de agosto de 1769-<a title=\"Longwood (Santa Elena)\" href=\"https://es.wikipedia.org/wiki/Longwood_(Santa_Elena)\">Longwood</a>,&nbsp;<a title=\"Isla Santa Elena\" href=\"https://es.wikipedia.org/wiki/Isla_Santa_Elena\">Santa Elena</a>,&nbsp;<a title=\"Reino Unido\" href=\"https://es.wikipedia.org/wiki/Reino_Unido\">Reino Unido</a>; 5 de mayo de 1821) fue un&nbsp;<a title=\"Militar\" href=\"https://es.wikipedia.org/wiki/Militar\">militar</a>&nbsp;y&nbsp;<a title=\"Estadista\" href=\"https://es.wikipedia.org/wiki/Estadista\">estadista</a>&nbsp;franc&eacute;s, general republicano durante la&nbsp;<a title=\"Revoluci&oacute;n francesa\" href=\"https://es.wikipedia.org/wiki/Revoluci%C3%B3n_francesa\">Revoluci&oacute;n</a>&nbsp;y el&nbsp;<a title=\"Directorio (Francia)\" href=\"https://es.wikipedia.org/wiki/Directorio_(Francia)\">Directorio</a>, art&iacute;fice del&nbsp;<a title=\"Golpe de Estado del 18 de brumario\" href=\"https://es.wikipedia.org/wiki/Golpe_de_Estado_del_18_de_brumario\">golpe de Estado del 18 de brumario</a>&nbsp;que lo convirti&oacute; en&nbsp;<a title=\"Consulado (Francia)\" href=\"https://es.wikipedia.org/wiki/Consulado_(Francia)\">primer c&oacute;nsul</a>&nbsp;(Premier C&oacute;nsul) de la Rep&uacute;blica el 11 de noviembre de 1799; c&oacute;nsul vitalicio desde el 2 de agosto de 1802 hasta su proclamaci&oacute;n como&nbsp;<a title=\"Primer Imperio Franc&eacute;s\" href=\"https://es.wikipedia.org/wiki/Primer_Imperio_Franc%C3%A9s\">emperador de los franceses</a>&nbsp;(Empereur des Fran&ccedil;ais) el 18 de mayo de 1804, y fue coronado el 2 de diciembre; fue proclamado&nbsp;<a title=\"Rey de Italia\" href=\"https://es.wikipedia.org/wiki/Rey_de_Italia\">rey de Italia</a>&nbsp;el 18 de marzo de 1805 y coronado el 26 de mayo. Ostent&oacute; ambos t&iacute;tulos hasta el 11 de abril de 1814 y, desde el 20 de marzo hasta el 22 de junio de 1815.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Ingres%2C_Napoleon_on_his_Imperial_throne.jpg/245px-Ingres%2C_Napoleon_on_his_Imperial_throne.jpg\" alt=\"Ingres, Napoleon on his Imperial throne.jpg\" /></p>\r\n<p>Durante poco m&aacute;s de una d&eacute;cada, tom&oacute; el control de casi toda Europa Occidental y Central mediante una serie de conquistas y alianzas. Solo tras su derrota en la&nbsp;<a title=\"Batalla de las Naciones\" href=\"https://es.wikipedia.org/wiki/Batalla_de_las_Naciones\">batalla de las Naciones</a>, cerca de&nbsp;<a title=\"Leipzig\" href=\"https://es.wikipedia.org/wiki/Leipzig\">Leipzig</a>, en octubre de 1813, se vio obligado a abdicar meses m&aacute;s tarde. Regres&oacute; a Francia y al poder durante el periodo llamado los&nbsp;<a title=\"Cien D&iacute;as\" href=\"https://es.wikipedia.org/wiki/Cien_D%C3%ADas\">Cien D&iacute;as</a>&nbsp;y fue derrotado para siempre en la&nbsp;<a title=\"Batalla de Waterloo\" href=\"https://es.wikipedia.org/wiki/Batalla_de_Waterloo\">batalla de Waterloo</a>&nbsp;en&nbsp;<a title=\"B&eacute;lgica\" href=\"https://es.wikipedia.org/wiki/B%C3%A9lgica\">B&eacute;lgica</a>, el 18 de junio de 1815, cuando fue desterrado por los brit&aacute;nicos en la&nbsp;<a title=\"Isla de Santa Elena\" href=\"https://es.wikipedia.org/wiki/Isla_de_Santa_Elena\">isla de Santa Elena</a>, donde falleci&oacute;.</p>\r\n</body>\r\n</html>', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_footer`
--

CREATE TABLE `config_footer` (
  `id` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `background` varchar(50) NOT NULL,
  `cr` varchar(150) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `telefono` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `horarios` varchar(50) NOT NULL,
  `idpagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `config_footer`
--

INSERT INTO `config_footer` (`id`, `color`, `background`, `cr`, `direccion`, `telefono`, `correo`, `horarios`, `idpagina`) VALUES
(2, '#FFFFFF', '#22268A', 'Derechos reservados a Inmaculada', 'Miraflores 789', '789456123', 'inmaculada@edu.pe', 'Lunes - Sabado : 10am - 9pm', 6),
(5, '#fff', '#2471A3', 'Derechos reservados a Titulode pagina', 'Mi direccion', '123456789', 'micorreo@cmsexample.com', 'Mis horarios de atencion', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_general`
--

CREATE TABLE `config_general` (
  `id` int(11) NOT NULL,
  `fuente` varchar(150) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `logo` varchar(150) NOT NULL,
  `fondo_principal` varchar(150) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `favicon` varchar(250) NOT NULL,
  `mapa` varchar(1000) NOT NULL,
  `fondo` varchar(100) DEFAULT NULL,
  `idpagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `config_general`
--

INSERT INTO `config_general` (`id`, `fuente`, `size`, `logo`, `fondo_principal`, `titulo`, `favicon`, `mapa`, `fondo`, `idpagina`) VALUES
(2, NULL, NULL, 'logo.png', 'fondo.jpg', 'Inmaculada de la Merced', '1580668145.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d53261.75434467843!2d-77.06201885611185!3d-12.047054528330698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1581471118399!5m2!1ses-419!2spe\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'fondo6.png', 6),
(6, NULL, NULL, 'logo_default.png', 'principal_default.png', 'Titulo de pestaña', 'logo_default.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3656.1122124082067!2d-77.03452449497695!3d-12.072117744470335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1581270166517!5m2!1ses!2spe\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', NULL, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_item`
--

CREATE TABLE `config_item` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `enlace` varchar(350) NOT NULL,
  `icono` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `config_item`
--

INSERT INTO `config_item` (`id`, `titulo`, `enlace`, `icono`, `idmenu`) VALUES
(3, 'Inicio', 'http://127.0.0.1:8000/inmaculada', '<i class=\"fas fa-home\"></i>', 8),
(6, 'Inicio', 'http://127.0.0.1:8000/prevocacional', '<i class=\"fas fa-home\"></i>', 15),
(8, 'Historia', 'http://127.0.0.1:8000/inmaculada/contenido/historia', '<i class=\"far fa-newspaper\"></i>', 8),
(9, 'Blog', 'http://127.0.0.1:8000/inmaculada/contenido/pagina/blog', '<i class=\"far fa-newspaper\"></i>', 8),
(10, 'Galería', 'http://127.0.0.1:8000/inmaculada/contenido/pagina/galeria', '<i class=\"fas fa-photo-video\"></i>', 8),
(11, 'Contacto', 'http://127.0.0.1:8000/inmaculada/contenido/pagina/contacto', '<i class=\"fas fa-phone-alt\"></i>', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_menu`
--

CREATE TABLE `config_menu` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `color` varchar(50) NOT NULL,
  `background` varchar(50) NOT NULL,
  `idpagina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `config_menu`
--

INSERT INTO `config_menu` (`id`, `titulo`, `color`, `background`, `idpagina`) VALUES
(8, 'Inmaculada', '#FFFFFF', '#8F1E11', 6),
(15, 'Titulo de página', '#fff', '#2471A3', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombres` varchar(250) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `mensaje` varchar(800) NOT NULL,
  `idpagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombres`, `correo`, `telefono`, `mensaje`, `idpagina`) VALUES
(1, 'Vincent Murray', 'vincentmurray01@gmail.com', '987654321', 'Hola como estas', 6),
(2, 'Niggel Murray', 'niggelmurray@gmail.com', '987654321', 'Hola este es mi segundo mensaje', 6),
(3, 'Sheldon Cooper', 'sheldon75@gmail.com', '987654321', 'Hola soy sheldon y necesito ayuda', 6),
(4, 'Raul Mendoza', 'raul@gmail.com', '123456789', 'Hola soy raul, saludame', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enlace`
--

CREATE TABLE `enlace` (
  `id` int(11) NOT NULL,
  `idpagina` int(11) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `enlace` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `enlace`
--

INSERT INTO `enlace` (`id`, `idpagina`, `imagen`, `enlace`) VALUES
(3, 6, '1581180897.png', 'https://www.w3schools.com/tags/tag_div.asp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `id` int(11) NOT NULL,
  `slug` varchar(500) NOT NULL,
  `idpagina` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `contenido` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id`, `slug`, `idpagina`, `titulo`, `contenido`) VALUES
(4, 'mision_y_vision', 6, 'Mision y Vision', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Por H.J. Barraza</p>\r\n<p>No es secreto que durante la &uacute;ltima d&eacute;cada,las empresas han enfrentando retos para atraer y retener el&nbsp;mejor talento&nbsp;posible.</p>\r\n<p>En t&eacute;rminos simples, es porque, a diferencia que nuestros padres, nuestra generaci&oacute;n no s&oacute;lo busca un buen cheque y reconocimiento. Nuestro grupo de edad se encuentra sediento de poder tener un&nbsp;prop&oacute;sito de vida&nbsp;y ser congruente a nivel personal y personal.</p>\r\n<div>&nbsp;</div>\r\n<p>El enfrentar esta crisis de talento ha provocado una oleada muy positiva de empresas que quieren&nbsp;<a href=\"https://hjbarraza.com/atencion-plena/define-proposito-vida-3-horas/\" rel=\"nofollow\">definir su prop&oacute;sito m&aacute;s all&aacute; de hacer dinero</a>. Esto no siempre es f&aacute;cil. A veces porque se trata de una organizaci&oacute;n vieja (con m&aacute;s de 30 a&ntilde;os) y se hereda una pobre cultura organizacional. Sobre todo, es dif&iacute;cil cuando hay tanta cacofon&iacute;a entorno a los t&eacute;rminos disponibles. Para ayudarte en este proceso, veamos de que va cada uno de estos conceptos.</p>\r\n<h2>1. Prop&oacute;sito</h2>\r\n<p>El prop&oacute;sito de una empresa es su raz&oacute;n permanente de existir. Es el porqu&eacute; haces las cosas. La columna vertebral de la cual dependemos para tomar decisiones, ya sea en la vida diaria o cuando el tema es crucial. Con un&nbsp;prop&oacute;sito, podemos discernir entre decisiones que son correctas y generan valor real, de aquellas que son simplemente f&aacute;ciles o incluso t&eacute;cnicamente elegibles.</p>\r\n<p>Vamos a ponerlo en t&eacute;rminos reales.&nbsp;&iquest;Cu&aacute;ndo atiendes un cliente, le est&aacute;s sirviendo o &uacute;nicamente est&aacute;s maximizando utilidades?&nbsp;Esta es la pregunta que Sam Walton, fundador de Walmart, podr&iacute;a responder en un instante sin tener que pensar.</p>\r\n<p>Guiado por altruismo y compasi&oacute;n, Walton se dedic&oacute; a servir a sus clientes. En este sentido, el prop&oacute;sito reverber&oacute; a trav&eacute;s de toda la organizaci&oacute;n. Desde los directores ejecutivos hasta la gente de piso, todos en Walmart est&aacute;n listos para hacer la atenci&oacute;n y servicio al cliente su mayor prioridad. Esto dio a Walmart una gran ventaja sobre sus competidores, a quienes aventaj&oacute; a&ntilde;o tras a&ntilde;o.</p>\r\n<p>La realidad es que sin un prop&oacute;sito, solo tomar&aacute;s decisiones con un beneficio a corto plazo. La estrategia por s&iacute; misma no es suficiente sin un prop&oacute;sito. Tomemos a Enron como ejemplo, una corporaci&oacute;n que colaps&oacute;, siendo una de las bancarrotas m&aacute;s impresionantes del mundo.</p>\r\n<ul style=\"list-style-type: disc;\">\r\n<li style=\"list-style-type: disc;\"><a href=\"https://www.entrepreneur.com/article/267695\" target=\"_self\" rel=\"follow\">Para saber m&aacute;s: 3 pasos para forjar tu visi&oacute;n</a></li>\r\n</ul>\r\n<p>Ten&iacute;an una estrategia brillante, pero carec&iacute;an de un prop&oacute;sito. Lo &uacute;nico que les interesaba era hacer dinero, y estaban no solo dispuestos sino preparados para hacer lo que sea por ello. Esto les llev&oacute; a tomar decisiones con un juicio pobre, que envolv&iacute;an una estrategia muy arriesgada para ocultar sus p&eacute;rdidas. No es sorpresa que con el tiempo sus malas acciones los alcanzaron y al final m&aacute;s all&aacute; del esc&aacute;ndalo global, sirven de testamento que una buena estrategia sin un prop&oacute;sito pueden ser desastrosos.</p>\r\n</body>\r\n</html>'),
(5, 'freddie_mercury', 6, 'Freddie Mercury', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Tras haber regresado a Zanz&iacute;bar en 1964, a la edad de 18 a&ntilde;os, tuvo que mudarse con su familia a Inglaterra a causa de la&nbsp;<a title=\"Revoluci&oacute;n de Zanz&iacute;bar\" href=\"https://es.wikipedia.org/wiki/Revoluci%C3%B3n_de_Zanz%C3%ADbar\">revoluci&oacute;n de Zanz&iacute;bar</a>, que estaba socavando la estabilidad pol&iacute;tica del pa&iacute;s, revuelta que dio lugar al nacimiento del estado de&nbsp;<a title=\"Tanzania\" href=\"https://es.wikipedia.org/wiki/Tanzania\">Tanzania</a>.<a href=\"https://es.wikipedia.org/wiki/Freddie_Mercury#cite_note-StarIndia-29\">26</a>​<a href=\"https://es.wikipedia.org/wiki/Freddie_Mercury#cite_note-MTV-30\">27</a>​ As&iacute;, Bulsara se estableci&oacute; en una peque&ntilde;a casa en&nbsp;<a title=\"Feltham\" href=\"https://es.wikipedia.org/wiki/Feltham\">Feltham</a>, en&nbsp;<a title=\"Middlesex\" href=\"https://es.wikipedia.org/wiki/Middlesex\">Middlesex</a>, cerca del&nbsp;<a title=\"Aeropuerto de Heathrow\" href=\"https://es.wikipedia.org/wiki/Aeropuerto_de_Heathrow\">aeropuerto de Heathrow</a>, en&nbsp;<a title=\"Londres\" href=\"https://es.wikipedia.org/wiki/Londres\">Londres</a>.<a href=\"https://es.wikipedia.org/wiki/Freddie_Mercury#cite_note-31\">28</a>​ Freddie continu&oacute; su educaci&oacute;n en la escuela polit&eacute;cnica de&nbsp;<a title=\"Isleworth\" href=\"https://es.wikipedia.org/wiki/Isleworth\">Isleworth</a>&nbsp;(desde&nbsp;<a title=\"1993\" href=\"https://es.wikipedia.org/wiki/1993\">1993</a>&nbsp;<a title=\"College West Thames (a&uacute;n no redactado)\" href=\"https://es.wikipedia.org/w/index.php?title=College_West_Thames&amp;action=edit&amp;redlink=1\">College West Thames</a>); adem&aacute;s de sus estudios de arte, en sus primeros a&ntilde;os ingleses trabaj&oacute; en un servicio de c&aacute;terin cerca del aeropuerto y en un almac&eacute;n en la zona comercial en Feltham.<a href=\"https://es.wikipedia.org/wiki/Freddie_Mercury#cite_note-RUS-23\">21</a>​</p>\r\n<div>\r\n<div><a href=\"https://commons.wikimedia.org/wiki/File:Kensington_Buildings.JPG\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Kensington_Buildings.JPG/220px-Kensington_Buildings.JPG\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/8/89/Kensington_Buildings.JPG/330px-Kensington_Buildings.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/89/Kensington_Buildings.JPG/440px-Kensington_Buildings.JPG 2x\" alt=\"\" width=\"220\" height=\"165\" data-file-width=\"1656\" data-file-height=\"1242\" /></a>\r\n<div>\r\n<div>&nbsp;</div>\r\nUna calle de&nbsp;<a title=\"Kensington\" href=\"https://es.wikipedia.org/wiki/Kensington\">Kensington</a>, un barrio donde resid&iacute;an Bulsara y sus amigos a finales de los a&ntilde;os sesenta.</div>\r\n</div>\r\n</div>\r\n<p>En la primavera de 1966 obtuvo las m&aacute;s altas calificaciones en el examen de arte del Polit&eacute;cnico Isleworth, puntuaci&oacute;n que le permiti&oacute; su admisi&oacute;n a la&nbsp;<a title=\"Escuela de Arte Ealing (a&uacute;n no redactado)\" href=\"https://es.wikipedia.org/w/index.php?title=Escuela_de_Arte_Ealing&amp;action=edit&amp;redlink=1\">Escuela de Arte Ealing</a>&nbsp;de&nbsp;<a title=\"Londres\" href=\"https://es.wikipedia.org/wiki/Londres\">Londres</a>;<a href=\"https://es.wikipedia.org/wiki/Freddie_Mercury#cite_note-RUS-23\">21</a>​ donde estudi&oacute; arte y dise&ntilde;o gr&aacute;fico, al establecerse en el barrio de&nbsp;<a title=\"Kensington\" href=\"https://es.wikipedia.org/wiki/Kensington\">Kensington</a>&nbsp;en un apartamento, alquilado por un amigo, cercano al&nbsp;<a title=\"Mercado de Kensington (a&uacute;n no redactado)\" href=\"https://es.wikipedia.org/w/index.php?title=Mercado_de_Kensington&amp;action=edit&amp;redlink=1\">mercado de Kensington</a>.<a href=\"https://es.wikipedia.org/wiki/Freddie_Mercury#cite_note-Davis110-32\">29</a>​ Paralelamente a sus estudios, Freddie cre&oacute; una l&iacute;nea de ropa y escribi&oacute; algunos art&iacute;culos breves para peri&oacute;dicos londinenses.<a href=\"https://es.wikipedia.org/wiki/Freddie_Mercury#cite_note-Untold-21\">20</a>​&nbsp;<a title=\"Tim Staffell\" href=\"https://es.wikipedia.org/wiki/Tim_Staffell\">Tim Staffell</a>, compa&ntilde;ero de clase en Ealing, era cantante y bajista de&nbsp;<a title=\"Smile (banda)\" href=\"https://es.wikipedia.org/wiki/Smile_(banda)\">Smile</a>, banda en la que tambi&eacute;n estaban el guitarrista&nbsp;<a title=\"Brian May\" href=\"https://es.wikipedia.org/wiki/Brian_May\">Brian May</a>&nbsp;y el bater&iacute;a&nbsp;<a title=\"Roger Taylor\" href=\"https://es.wikipedia.org/wiki/Roger_Taylor\">Roger Taylor</a>; Staffell intent&oacute;, en un primer momento, convencer a Bulsara para que se uniera al grupo como segundo cantante, pero sin &eacute;xito.<a href=\"https://es.wikipedia.org/wiki/Freddie_Mercury#cite_note-BF-15\">14</a>​</p>\r\n</body>\r\n</html>'),
(6, 'historia', 6, 'Historia', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet</p>\r\n<p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Stet clita kasd gubergren, no sea takimata sanctus est</p>\r\n<article class=\"quote-classic quote-classic-2\">\r\n<div class=\"quote-classic-text\">\r\n<div class=\"q\">The lagoon of New Caledonia remains rather unknown internationally despite its huge size.</div>\r\n<div class=\"q\">&nbsp;</div>\r\n</div>\r\n</article>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://i.blogs.es/b7f1fe/iceberg-404966_1920/450_1000.jpg\" alt=\"Lo que vemos en la superficie es, realmente, la punta del icerberg\" /></p>\r\n<p>&nbsp;</p>\r\n<p>Friedrich ha explicado la historia de la imagen en&nbsp;<a href=\"https://www.wired.com/story/you-cant-take-this-iceberg-photo/\">Wired</a>, donde cuenta que, a pesar de que lo que vemos es un trozo de hielo afilado, angulado y recto, por debajo es como \"pelotas de golf gigantes\". Necesitaron&nbsp;tres viajes para conseguir la foto, siendo el &uacute;ltimo en marzo, cuando el fiordo de Tasiilaq, al este de Groenlandia, estaba congelado y, por lo tanto, los icebergs permanec&iacute;an inm&oacute;viles.</p>\r\n<p>Durante dos semanas, el fot&oacute;grafo y el buzo descendieron a 21,3 metros de profundidad todos los d&iacute;as hasta conseguir retratar lo que un iceberg oculta bajo el agua. No es un tarea sencilla, puesto que el agua salada a esa profundidad estaba a 27 grados Fahrenheit, que vienen a ser&nbsp;-2,7 grados cent&iacute;grados. El agua salada tiene un punto de congelaci&oacute;n m&aacute;s bajo que el agua dulce, y depende de cu&aacute;l sea su concentraci&oacute;n de sal el punto de congelaci&oacute;n var&iacute;a. Seg&uacute;n la&nbsp;<a href=\"https://oceanservice.noaa.gov/facts/oceanfreeze.html\">NOAA</a>, el agua de los oc&eacute;anos se congela a -1,9&ordm;C.</p>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id` int(11) NOT NULL,
  `idpagina` int(11) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `nombres` varchar(250) NOT NULL,
  `cargo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `idpagina`, `imagen`, `nombres`, `cargo`) VALUES
(5, 6, '1581194350.jpg', 'Napoleon Bonaparte', 'Emperador'),
(6, 6, '1581194372.jpg', 'Vincent Murray', 'Diseñador'),
(7, 6, '1581194529.jpg', 'Sheldon Cooper', 'Teorico'),
(8, 6, '1581194545.jpg', 'Penny Hoffatater', 'Teorico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `idpagina` int(11) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `idpagina`, `imagen`) VALUES
(4, 6, '1581180804.jpg'),
(5, 6, '1581180812.jpg'),
(6, 6, '1581180823.jpg'),
(7, 6, '1581196614.jpg'),
(8, 6, '1581196652.jpg'),
(9, 6, '1581196659.jpg'),
(10, 6, '1581196668.jpg');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE `pagina` (
  `id` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idplantilla` int(11) DEFAULT NULL,
  `dominio` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`id`, `iduser`, `idplantilla`, `dominio`, `estado`) VALUES
(6, 2, 1003, 'inmaculada', 'activo'),
(14, 2, 1001, 'prevocacional', 'activo');

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
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descripcion` longtext NOT NULL,
  `portada` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plantilla`
--

INSERT INTO `plantilla` (`id`, `titulo`, `descripcion`, `portada`) VALUES
(1001, 'Plantilla #1', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia eius distinctio doloribus accusantium voluptas, corporis facilis deleniti delectus nam rem iure eaque ullam, iste illum ipsam optio voluptatibus ut ducimus?', '1581179776.PNG'),
(1002, 'Plantilla #2', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque dignissimos consequatur quasi ratione quod. Consequuntur voluptatum vero numquam quam error?', '1581200526.PNG'),
(1003, 'Plantilla #3', 'Mi tercera plantilla', '1581468673.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_dos`
--

CREATE TABLE `seccion_dos` (
  `id` int(11) NOT NULL,
  `idpagina` int(11) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `descripcion` longtext NOT NULL,
  `titulo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion_dos`
--

INSERT INTO `seccion_dos` (`id`, `idpagina`, `imagen`, `descripcion`, `titulo`) VALUES
(2, 6, '1581194621.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div>\r\n<div>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Voluptatibus&nbsp;assumenda&nbsp;nobis&nbsp;molestias&nbsp;architecto.&nbsp;Obcaecati&nbsp;ipsa&nbsp;perferendis&nbsp;qui,&nbsp;accusamus&nbsp;adipisci&nbsp;sapiente&nbsp;reprehenderit&nbsp;dicta&nbsp;doloribus&nbsp;ipsam&nbsp;iusto&nbsp;doloremque&nbsp;in&nbsp;neque&nbsp;id&nbsp;error&nbsp;quas&nbsp;repudiandae,&nbsp;vitae&nbsp;asperiores&nbsp;molestiae.&nbsp;Ipsa&nbsp;laborum&nbsp;explicabo&nbsp;odit&nbsp;molestiae!</div>\r\n</div>\r\n</body>\r\n</html>', 'Seccion dos'),
(9, 14, 'default_seccion_dos.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates a cupiditate, odio sint laboriosam laudantium id ea earum nemo dolores? Dicta mollitia necessitatibus optio eaque ipsum porro enim officia vitae ut numquam sit temporibus quis consectetur, libero nemo sequi fuga.', 'Titulo de mi sección');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_uno`
--

CREATE TABLE `seccion_uno` (
  `id` int(11) NOT NULL,
  `idpagina` int(11) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `descripcion` longtext NOT NULL,
  `titulo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion_uno`
--

INSERT INTO `seccion_uno` (`id`, `idpagina`, `imagen`, `descripcion`, `titulo`) VALUES
(2, 6, '1580838740.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div>\r\n<div>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Delectus,&nbsp;eum&nbsp;rerum&nbsp;reiciendis&nbsp;voluptas&nbsp;iste&nbsp;ratione&nbsp;inventore&nbsp;excepturi&nbsp;soluta&nbsp;ex&nbsp;animi&nbsp;beatae.&nbsp;Labore&nbsp;tempore&nbsp;velit&nbsp;et&nbsp;quidem&nbsp;aut,&nbsp;harum&nbsp;amet,&nbsp;saepe&nbsp;perferendis&nbsp;nam&nbsp;voluptatibus&nbsp;laborum.&nbsp;Ratione&nbsp;minima&nbsp;tempora&nbsp;quas&nbsp;mollitia&nbsp;amet.</div>\r\n</div>\r\n</body>\r\n</html>', 'PRESENTACION DE INMACULADA'),
(9, 14, 'default_seccion_uno.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates a cupiditate, odio sint laboriosam laudantium id ea earum nemo dolores? Dicta mollitia necessitatibus optio eaque ipsum porro enim officia vitae ut numquam sit temporibus quis consectetur, libero nemo sequi fuga.</p>\r\n</body>\r\n</html>', 'TITULO DE PREVOCACIONAL EDITADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `idpagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `imagen`, `titulo`, `idpagina`) VALUES
(5, '1581192359.jpg', 'Slider uno', 6),
(6, '1581180784.jpg', 'Slider Dos', 6),
(7, '1581180792.jpg', 'Slider Tres', 6),
(8, 'slider_1.jpg', 'Mi primer slider1', 14),
(9, 'slider_2.jpg', 'Mi primer slider2', 14),
(10, 'slider_3.jpg', 'Mi primer slider3', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_page` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `portada`, `current_page`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vincent Murray', 'vincentmurray01@gmail.com', NULL, '$2y$10$mWvFJxQ/LZEGipIXixNxouf2vkTlB1Ie2vh7JUMafnsTo2cuerS.O', 'ADMIN', NULL, 0, 'u8jYtkhagVoy87UXR23Hhc7h3TNzwZzIsUnVhF7fUMV57TcDyJphAoDLNv5g', '2020-02-02 00:51:29', '2020-02-02 00:51:29'),
(2, 'Diego Arroyo Arca', 'diegoarca02@gmail.com', NULL, '$2y$10$BvrZ0xvv6MfzzcoR3D5/FuApBzq0sJAMdPfyiGNogG3m3CtBaKSDe', 'USUARIO', NULL, 6, 'buyOdSRNOEPK8aIJESQMaiqrDCydGlSpo1KmX8sxlVBBs2ZqYDVnUJxfKUWs', NULL, NULL),
(3, 'Sheldon Cooper', 'sheldon@gmail.com', NULL, '$2y$10$aKaLTO39TcPI3cVBGgmqjuNlgfRw7FslshFzsaY9L6ZQWnSKuaf6O', 'USUARIO', NULL, NULL, 'DFznapYJ2ReaIWD3iuWIvEIh3cTX36dOrVOKAZcP6uF8iwgNQ0U7rXVN6iNY', NULL, NULL),
(4, 'Howard Woulowitz', 'howart@gmail.com', NULL, '$2y$10$.HtdbBimNnikQpbbXd6PdesuOh0qBE.NBU9.eLy0UDrNtsipNR35m', 'USUARIO', NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_blog_pagina` (`idpagina`);

--
-- Indices de la tabla `config_footer`
--
ALTER TABLE `config_footer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_configfooter_pagina` (`idpagina`);

--
-- Indices de la tabla `config_general`
--
ALTER TABLE `config_general`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_configgeneral_pagina` (`idpagina`);

--
-- Indices de la tabla `config_item`
--
ALTER TABLE `config_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_configitem_menu` (`idmenu`);

--
-- Indices de la tabla `config_menu`
--
ALTER TABLE `config_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_configmenu_pagina` (`idpagina`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `enlace`
--
ALTER TABLE `enlace`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_enlace_pagina` (`idpagina`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_entrada_pagina` (`idpagina`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_equipo_pagina` (`idpagina`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_galeria_pagina` (`idpagina`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pagina_plantilla` (`idplantilla`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion_dos`
--
ALTER TABLE `seccion_dos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_secciondos_pagina` (`idpagina`);

--
-- Indices de la tabla `seccion_uno`
--
ALTER TABLE `seccion_uno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_seccionuno_pagina` (`idpagina`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_slider_pagina` (`idpagina`);

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
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `config_footer`
--
ALTER TABLE `config_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `config_general`
--
ALTER TABLE `config_general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `config_item`
--
ALTER TABLE `config_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `config_menu`
--
ALTER TABLE `config_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `enlace`
--
ALTER TABLE `enlace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT de la tabla `seccion_dos`
--
ALTER TABLE `seccion_dos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `seccion_uno`
--
ALTER TABLE `seccion_uno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fk_blog_pagina` FOREIGN KEY (`idpagina`) REFERENCES `pagina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `config_footer`
--
ALTER TABLE `config_footer`
  ADD CONSTRAINT `fk_configfooter_pagina` FOREIGN KEY (`idpagina`) REFERENCES `pagina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `config_general`
--
ALTER TABLE `config_general`
  ADD CONSTRAINT `fk_configgeneral_pagina` FOREIGN KEY (`idpagina`) REFERENCES `pagina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `config_item`
--
ALTER TABLE `config_item`
  ADD CONSTRAINT `fk_configitem_menu` FOREIGN KEY (`idmenu`) REFERENCES `config_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `config_menu`
--
ALTER TABLE `config_menu`
  ADD CONSTRAINT `fk_configmenu_pagina` FOREIGN KEY (`idpagina`) REFERENCES `pagina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `enlace`
--
ALTER TABLE `enlace`
  ADD CONSTRAINT `fk_enlace_pagina` FOREIGN KEY (`idpagina`) REFERENCES `pagina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `fk_entrada_pagina` FOREIGN KEY (`idpagina`) REFERENCES `pagina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `fk_equipo_pagina` FOREIGN KEY (`idpagina`) REFERENCES `pagina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `fk_galeria_pagina` FOREIGN KEY (`idpagina`) REFERENCES `pagina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD CONSTRAINT `fk_pagina_plantilla` FOREIGN KEY (`idplantilla`) REFERENCES `plantilla` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seccion_dos`
--
ALTER TABLE `seccion_dos`
  ADD CONSTRAINT `fk_secciondos_pagina` FOREIGN KEY (`idpagina`) REFERENCES `pagina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seccion_uno`
--
ALTER TABLE `seccion_uno`
  ADD CONSTRAINT `fk_seccionuno_pagina` FOREIGN KEY (`idpagina`) REFERENCES `pagina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `fk_slider_pagina` FOREIGN KEY (`idpagina`) REFERENCES `pagina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
