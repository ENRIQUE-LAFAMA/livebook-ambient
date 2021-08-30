-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2021 a las 04:09:57
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
  `id` int(11) NOT NULL,
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

INSERT INTO `libros` (`id`, `titulo`, `autor`, `fecha`, `editorial`, `portada`, `ubicacion`) VALUES
(12, 'PERDONADOS', 'cocolo', '2021-07-26', 'SIN ROSTRO', '', '../biblioteca/24-07-21-04-09-19_Credimax.docx'),
(13, 'PERDONADOS', 'cocolo', '2021-07-26', 'SIN ROSTRO', '', '../biblioteca/24-07-21-04-10-27_Credimax.docx'),
(14, 'PERDONADOS', 'cocolo', '2021-07-26', 'SIN ROSTRO', '../biblioteca/24-07-21-04-15-28_Credimax.docx.img', '../biblioteca/24-07-21-04-15-28_Credimax.docx'),
(16, 'trigo', 'loco', '2021-07-01', 'tonto', '../biblioteca/24-07-21-04-21-17_actividad 6.docx.jpg', '../biblioteca/24-07-21-04-21-17_actividad 6.docx'),
(18, 'Discrete-Mathematics', 'Oscar Levin', '2021-07-24', 'coral', '../biblioteca/24-07-21-19-30-40_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-19-30-40_Discrete-Mathematics.pdf'),
(19, 'sin titulo', 'sin autor', '2021-07-01', 'sin editorial', '../biblioteca/24-07-21-19-37-25_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-19-37-25_Discrete-Mathematics.pdf'),
(20, 'los locos', 'Oscar Levin', '2021-07-24', 'oceano', '../biblioteca/24-07-21-20-28-53_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-20-28-53_Discrete-Mathematics.pdf'),
(21, 'pepito', 'renald', '2021-08-01', 'social', '../biblioteca/24-07-21-20-37-45_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-20-37-45_Discrete-Mathematics.pdf'),
(22, 'Discrete-Mathematics', 'per', '2021-07-03', 'zoca', '../biblioteca/24-07-21-21-12-02_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-21-12-02_Discrete-Mathematics.pdf'),
(23, 'zosin', 'zosin', '2021-07-24', 'zosin', '../biblioteca/24-07-21-22-07-57_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-22-07-57_Discrete-Mathematics.pdf'),
(24, 'duran', 'duran', '0000-00-00', 'duran', '../biblioteca/24-07-21-22-19-31_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-22-19-31_Discrete-Mathematics.pdf'),
(25, 'pepe', 'pepe', '2021-07-24', 'pedro', '../biblioteca/24-07-21-22-31-06_Discrete-Mathematics.pdf.jpg', '../biblioteca/24-07-21-22-31-06_Discrete-Mathematics.pdf'),
(26, 'la gloria de Dios', 'ricardo montanel', '2021-07-26', 'musica', '../biblioteca/27-07-21-02-06-50_Discrete-Mathematics.pdf.jpg', '../biblioteca/27-07-21-02-06-50_Discrete-Mathematics.pdf'),
(27, 'santa', 'petronila', '2021-07-01', 'jdfklsa', '../biblioteca/30-07-21-01-53-48_Discrete-Mathematics.pdf.jpg', '../biblioteca/30-07-21-01-53-48_Discrete-Mathematics.pdf'),
(29, 'pinto', 'purpe', '2021-12-21', 'dfkj', '../biblioteca/30-07-21-02-02-39_Discrete-Mathematics.pdf.jpg', '../biblioteca/30-07-21-02-02-39_Discrete-Mathematics.pdf'),
(30, 'gabinete', 'pedro', '0000-00-00', 'jfaks', '../biblioteca/30-07-21-02-04-35_Discrete-Mathematics.pdf.jpg', '../biblioteca/30-07-21-02-04-35_Discrete-Mathematics.pdf'),
(31, 'LINDO', 'LINDO', '2021-02-01', 'JOSE', '../biblioteca/30-07-21-05-30-48_Discrete-Mathematics.pdf.jpg', '../biblioteca/30-07-21-05-30-48_Discrete-Mathematics.pdf'),
(32, 'tacos', 'tacos', '2021-12-30', 'tacos', '../biblioteca/31-07-21-00-38-06_Discrete-Mathematics.pdf.jpg', '../biblioteca/31-07-21-00-38-06_Discrete-Mathematics.pdf'),
(38, 'PINTURA', 'PINTURA', '2021-08-21', 'PINTOR', '../biblioteca/21-08-21-22-16-27_ING jose enrique perez.pdf.jpg', '../biblioteca/21-08-21-22-16-27_ING jose enrique perez.pdf'),
(39, 'tente', 'tente', '2021-08-21', 'tente', '../biblioteca/21-08-21-22-31-07_ING jose enrique perez.pdf.jpg', '../biblioteca/21-08-21-22-31-07_ING jose enrique perez.pdf'),
(42, 'APRENDE INGLES', 'Pedro Morla', '2021-08-24', 'Santillana', '../biblioteca/25-08-21-03-31-26_ingles.pdf.jpg', '../biblioteca/25-08-21-03-31-26_ingles.pdf'),
(43, 'Fisica Y Quimica', 'Saber Hacer', '2021-08-24', 'Santillana', '../biblioteca/25-08-21-03-34-36_fisicaquimica.pdf.jpg', '../biblioteca/25-08-21-03-34-36_fisicaquimica.pdf'),
(44, 'La liga de la ortografia', 'Mision: escribir mejor', '2021-08-24', 'Santillana', '../biblioteca/25-08-21-03-36-52_ortografia.pdf.jpg', '../biblioteca/25-08-21-03-36-52_ortografia.pdf'),
(45, 'Los matematicos', 'Pedro Lara', '2021-07-31', 'Santillana', '../biblioteca/25-08-21-03-39-27_matematicas.pdf.jpg', '../biblioteca/25-08-21-03-39-27_matematicas.pdf');

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
(1, 'Enrique', 'martinez', 21333, 'joseenriquep55@gmail.com', 'P', 1, 'MATCH, LENG', 'perfiles/Discrete-Mathematics.png'),
(2, 'jose', 'martinez', 21333, 'ardilla8260@gmail.com', 'p', 2, ',ESTELENG,', ''),
(55, 'ESTEFANY', 'encarnacion', 2147483647, 'tifanyenc@gmail.com', 'encarnacion', 2, '', '../panel/perfiles/'),
(56, 'Luz', 'Martinez', 2147483647, 'licda.acostamartinez@gmail.com', 'q', 0, 'Array', ''),
(63, 'PEDRO ', 'SANCHEZ', 343, 'JKL@K', 'JKD', 0, 'Array', ''),
(64, 'piy', 'kgjk', 343, 'jks2#@fdj', 'djkf', 0, 'Array', ''),
(65, 'pipe', 'pipe', 83984293, 'p@gmail.com', 'p', 0, 'Array', ''),
(68, 'pipe', 'pipe', 34343, 'pipe@gmail.com', 'p', 0, 'Array', ''),
(69, 'kinke', 'kinke', 888888, 'jose@g.com', 'p', 0, 'Array', ''),
(77, 'kira', 'kira', 9098098, 'kira@hotmail.com', 'p', 2, 'Array', 'perfiles/undraw_profile.svg'),
(90, 'jessica', 'concepcion', 2147483647, 'jessicac@gmail.com', 'j', 2, 'Array', 'perfiles/undraw_profile.svg'),
(91, 'cacahuate', 'cacahuate', 999999999, 'cacahuate@gmail.com', 'c', 2, 'Array', 'perfiles/undraw_profile.svg'),
(92, 'enrique', 'eekjqlw```', 2147483647, 'jose3#@fdsf', 'ss', 1, 'Array', 'perfiles/undraw_profile.svg'),
(93, 'pepito', 'OREJA', 2147483647, 'pepito@gmail.com', 'pepito', 2, '', 'perfiles/undraw_profile.svg'),
(94, 'jj', 'jj', 33, 'jj@jj', 'j', 2, '', 'perfiles/undraw_profile.svg'),
(95, 'TETE', 'encarnacion', 2147483647, 'tete1@hotmail.com', 't', 2, '', 'perfiles/undraw_profile.svg');

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
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `reg_usuario`
--
ALTER TABLE `reg_usuario`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;