-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2021 a las 03:03:11
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_livebook`
--
CREATE DATABASE IF NOT EXISTS `base_livebook` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `base_livebook`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasesmateria`
--

CREATE TABLE `clasesmateria` (
  `materia` varchar(250) NOT NULL,
  `tituloC` varchar(250) NOT NULL,
  `descripcionC` text NOT NULL,
  `entrega` text NOT NULL,
  `codigoM` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clasesmateria`
--

INSERT INTO `clasesmateria` (`materia`, `tituloC`, `descripcionC`, `entrega`, `codigoM`) VALUES
('MATEMATICAS', 'Analisis de variables', 'cada estudiante debe realizar una lectura y luego una redaccion de informe sobre el tema asignado', '', 'Match'),
('NATURALES', 'Cuerpo Humano', 'Estaremos tratando el cuerpo humano desde la cabeza hasta los pies', '', 'LENG'),
('MATEMATICA', 'TREIGONOMETRIA', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque quo, doloribus nisi corrupti ipsam laboriosam laborum saepe quasi, enim perferendis, ex iste ullam illo aliquam. Autem odio omnis at cupiditate?', '', 'Match');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(250) NOT NULL,
  `cursos` varchar(50) NOT NULL,
  `seccion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `cursos`, `seccion`) VALUES
(1, '1A Primaria', '1A'),
(2, '1B Primaria', '1B'),
(3, '1C Primaria', '1C '),
(4, '2A Primaria', '2A'),
(5, '2B Primaria', '2B '),
(6, '3A Primaria', '3A '),
(7, '1A Secundaria', '1A'),
(8, '1B Secundaria', '1B'),
(9, '2A Secundaria', '2A'),
(10, '3A Secundaria', '3A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `titulo` varchar(250) NOT NULL,
  `autor` varchar(75) NOT NULL,
  `fecha` date NOT NULL,
  `editorial` varchar(75) NOT NULL,
  `portada` text NOT NULL,
  `ubicacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`titulo`, `autor`, `fecha`, `editorial`, `portada`, `ubicacion`) VALUES
('los locos', 'pedro', '2021-07-22', '', '', ''),
('los locos', 'pedro', '2021-07-22', 'consuegra', '', '../biblioteca/los locos'),
('hombre de valor', 'enrique', '2021-07-22', 'mi loquera', '', '../biblioteca/hombre de valor'),
('sin dudas', 'perez', '2021-07-22', 'mi cabeza', '', '../biblioteca/sin dudas'),
('sin dudas', 'perez', '2021-07-22', 'mi cabeza', '', '../biblioteca/sin dudas'),
('sin dudas', 'perez', '2021-07-22', 'mi cabeza', '', '../biblioteca/sin dudas'),
('no me falles', 'raimin r', '2021-07-23', 'oceano', '', '../biblioteca/no me falles'),
('mi mama me ama', 'yo', '2021-07-01', 'estefany', '', '../biblioteca/mi mama me ama'),
('cocolo', 'enrique', '2021-07-09', 'prensa', '', '../biblioteca/cocolo'),
('PERDONADOS', 'cocolo', '2021-07-26', 'SIN ROSTRO', '', '../biblioteca/24-07-21-04-06-34_Credimax.docx'),
('zosin', 'pierre', '2021-07-15', 'cine', '', '../biblioteca/24-07-21-04-06-41_Credimax.docx'),
('PERDONADOS', 'cocolo', '2021-07-26', 'SIN ROSTRO', '', '../biblioteca/24-07-21-04-09-19_Credimax.docx'),
('PERDONADOS', 'cocolo', '2021-07-26', 'SIN ROSTRO', '', '../biblioteca/24-07-21-04-10-27_Credimax.docx'),
('PERDONADOS', 'cocolo', '2021-07-26', 'SIN ROSTRO', '../biblioteca/24-07-21-04-15-28_Credimax.docx.img', '../biblioteca/24-07-21-04-15-28_Credimax.docx'),
('PERDONADOS', 'cocolo', '2021-07-26', 'SIN ROSTRO', '../biblioteca/24-07-21-04-19-22_Credimax.docx.jpg', '../biblioteca/24-07-21-04-19-22_Credimax.docx'),
('trigo', 'loco', '2021-07-01', 'tonto', '../biblioteca/24-07-21-04-21-17_actividad 6.docx.jpg', '../biblioteca/24-07-21-04-21-17_actividad 6.docx'),
('tit', 'sadjfkfla', '2021-07-06', 'asdf', '../biblioteca/24-07-21-05-51-11_actividad 6.docx.jpg', '../biblioteca/24-07-21-05-51-11_actividad 6.docx'),
('Discrete-Mathematics', 'Oscar Levin', '2021-07-24', 'coral', '../biblioteca/24-07-21-19-30-40_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-19-30-40_Discrete-Mathematics.pdf'),
('sin titulo', 'sin autor', '2021-07-01', 'sin editorial', '../biblioteca/24-07-21-19-37-25_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-19-37-25_Discrete-Mathematics.pdf'),
('los locos', 'Oscar Levin', '2021-07-24', 'oceano', '../biblioteca/24-07-21-20-28-53_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-20-28-53_Discrete-Mathematics.pdf'),
('pepito', 'renald', '2021-08-01', 'social', '../biblioteca/24-07-21-20-37-45_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-20-37-45_Discrete-Mathematics.pdf'),
('Discrete-Mathematics', 'per', '2021-07-03', 'zoca', '../biblioteca/24-07-21-21-12-02_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-21-12-02_Discrete-Mathematics.pdf'),
('zosin', 'zosin', '2021-07-24', 'zosin', '../biblioteca/24-07-21-22-07-57_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-22-07-57_Discrete-Mathematics.pdf'),
('duran', 'duran', '0000-00-00', 'duran', '../biblioteca/24-07-21-22-19-31_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-22-19-31_Discrete-Mathematics.pdf'),
('pepe', 'pepe', '2021-07-24', 'pedro', '../biblioteca/24-07-21-22-31-06_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-22-31-06_Discrete-Mathematics.pdf'),
('la gloria de Dios', 'ricardo montanel', '2021-07-26', 'musica', '../biblioteca/27-07-21-02-06-50_Discrete-Mathematics.pdf.jpg', '../biblioteca/27-07-21-02-06-50_Discrete-Mathematics.pdf'),
('santa', 'petronila', '2021-07-01', 'jdfklsa', '../biblioteca/30-07-21-01-53-48_Discrete-Mathematics.pdf.jpg', '../biblioteca/30-07-21-01-53-48_Discrete-Mathematics.pdf'),
('lucas', 'KITO', '2001-02-07', 'oceano', '../biblioteca/30-07-21-01-57-46_Discrete-Mathematics.pdf.jpg', '../biblioteca/30-07-21-01-57-46_Discrete-Mathematics.pdf'),
('pinto', 'purpe', '2021-12-21', 'dfkj', '../biblioteca/30-07-21-02-02-39_Discrete-Mathematics.pdf.jpg', '../biblioteca/30-07-21-02-02-39_Discrete-Mathematics.pdf'),
('gabinete', 'pedro', '0000-00-00', 'jfaks', '../biblioteca/30-07-21-02-04-35_Discrete-Mathematics.pdf.jpg', '../biblioteca/30-07-21-02-04-35_Discrete-Mathematics.pdf'),
('LINDO', 'LINDO', '2021-02-01', 'JOSE', '../biblioteca/30-07-21-05-30-48_Discrete-Mathematics.pdf.jpg', '../biblioteca/30-07-21-05-30-48_Discrete-Mathematics.pdf'),
('tacos', 'tacos', '2021-12-30', 'tacos', '../biblioteca/31-07-21-00-38-06_Discrete-Mathematics.pdf.jpg', '../biblioteca/31-07-21-00-38-06_Discrete-Mathematics.pdf'),
('titu', 'tuttu', '2021-12-21', 'djfkas', '../biblioteca/07-08-21-05-09-14_Discrete-Mathematics.pdf.jpg', '../biblioteca/07-08-21-05-09-14_Discrete-Mathematics.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `materia` varchar(50) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `curso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`materia`, `codigo`, `curso`) VALUES
('Artistica', 'ARTE', ''),
('Ingles', 'INGL', ''),
('Lengua y Escritura', 'LENG', ''),
('Matematicas', 'MATCH', ''),
('Naturales', 'NATU', ''),
('Religion', 'RELI', ''),
('Sociales', 'SOCS', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_usuario`
--

CREATE TABLE `reg_usuario` (
  `id` int(7) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol_usuario` int(11) NOT NULL,
  `cursos` varchar(300) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reg_usuario`
--

INSERT INTO `reg_usuario` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `password`, `rol_usuario`, `cursos`, `foto`) VALUES
(1, 'Enrique', 'martinez', 21333, 'joseenriquep55@gmail.com', 'P', 1, 'MATCH', 'perfiles/Discrete-Mathematics.png'),
(2, 'jose', 'martinez', 21333, 'ardilla8260@gmail.com', 'p', 2, '', ''),
(55, 'estefany', 'encarnacion', 2147483647, 'tifanyenc@gmail.com', 'encarnacion', 2, '', 'perfiles/Discrete-Mathematics.png'),
(56, 'Luz', 'Martinez', 2147483647, 'licda.acostamartinez@gmail.com', 'q', 0, '', ''),
(63, 'PEDRO ', 'SANCHEZ', 343, 'JKL@K', 'JKD', 0, '', ''),
(64, 'piy', 'kgjk', 343, 'jks2#@fdj', 'djkf', 0, '', ''),
(65, 'pipe', 'pipe', 83984293, 'p@gmail.com', 'p', 0, '', ''),
(68, 'pipe', 'pipe', 34343, 'pipe@gmail.com', 'p', 0, '', ''),
(69, 'kinke', 'kinke', 888888, 'jose@g.com', 'p', 0, '', ''),
(77, 'kira', 'kira', 9098098, 'kira@hotmail.com', 'p', 2, '', 'perfiles/undraw_profile.svg'),
(90, 'jessica', 'concepcion', 2147483647, 'jessicac@gmail.com', 'j', 2, '', 'perfiles/undraw_profile.svg'),
(91, 'cacahuate', 'cacahuate', 999999999, 'cacahuate@gmail.com', 'c', 2, '', 'perfiles/undraw_profile.svg'),
(92, 'enrique', 'eekjqlw```', 2147483647, 'jose3#@fdsf', 'ss', 1, '', 'perfiles/undraw_profile.svg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `rol` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Cliente'),
(3, 'superAdmin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `reg_usuario`
--
ALTER TABLE `reg_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_usuario` (`rol_usuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `reg_usuario`
--
ALTER TABLE `reg_usuario`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Volcado de datos para la tabla `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'base_livebook', '{\"quick_or_custom\":\"custom\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"libros\",\"reg_usuario\",\"rol\"],\"table_structure[]\":[\"libros\",\"reg_usuario\",\"rol\"],\"table_data[]\":[\"libros\",\"reg_usuario\",\"rol\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Estructura de la tabla @TABLE@\",\"latex_structure_continued_caption\":\"Estructura de la tabla @TABLE@ (continúa)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Contenido de la tabla @TABLE@\",\"latex_data_continued_caption\":\"Contenido de la tabla @TABLE@ (continúa)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"base_livebook\",\"table\":\"reg_usuario\"},{\"db\":\"base_livebook\",\"table\":\"cursos\"},{\"db\":\"base_livebook\",\"table\":\"clasesmateria\"},{\"db\":\"base_livebook\",\"table\":\"materias\"},{\"db\":\"base_livebook\",\"table\":\"libros\"},{\"db\":\"base_livebook\",\"table\":\"rol\"},{\"db\":\"base_livebook\",\"table\":\"regusuario\"},{\"db\":\"base_livebook\",\"table\":\"regUsuario\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

--
-- Volcado de datos para la tabla `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('base_livebook', 'reg_usuario', 'rol_usuario', 'base_livebook', 'rol', 'id');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('base_livebook', 'reg_usuario', 'nombre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Volcado de datos para la tabla `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'base_livebook', 'reg_usuario', '{\"sorted_col\":\"`id`  ASC\"}', '2021-08-11 20:29:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-08-14 01:02:46', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"es\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
