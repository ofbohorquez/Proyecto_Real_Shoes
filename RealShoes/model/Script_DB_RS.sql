-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2022 a las 02:51:07
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lawyer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoproceso`
--

CREATE TABLE `estadoproceso` (
  `estadoid` tinyint(4) NOT NULL,
  `estadoname` enum('Activo','Inactivo') DEFAULT NULL,
  `estadocreatedat` datetime NOT NULL DEFAULT current_timestamp(),
  `estadoupdatedat` datetime DEFAULT NULL,
  `estadodeletedat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE `proceso` (
  `procesoid` int(5) NOT NULL,
  `procesousercliente` int(10) NOT NULL,
  `procesoname` text NOT NULL,
  `procesoestadoid` tinyint(4) NOT NULL,
  `procesofinal` text DEFAULT NULL,
  `procesocreatedat` datetime NOT NULL DEFAULT current_timestamp(),
  `procesoupdatedat` datetime DEFAULT NULL,
  `procesodeletedat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesoa`
--

CREATE TABLE `procesoa` (
  `procesoaid` int(5) NOT NULL,
  `procesoid` int(5) NOT NULL,
  `abogadoid` int(10) NOT NULL,
  `procesoacreate` datetime NOT NULL DEFAULT current_timestamp(),
  `procesoaupdate` datetime DEFAULT NULL,
  `procesoadelete` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rolid` tinyint(4) NOT NULL,
  `rolname` varchar(32) NOT NULL,
  `roldesc` varchar(64) DEFAULT NULL,
  `rolcreatedat` datetime NOT NULL DEFAULT current_timestamp(),
  `rolupdatedat` datetime DEFAULT NULL,
  `roldeletedat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodoc`
--

CREATE TABLE `tipodoc` (
  `tipodocid` tinyint(4) NOT NULL,
  `tipodocname` varchar(40) NOT NULL,
  `tipodoccreatedat` datetime NOT NULL DEFAULT current_timestamp(),
  `tipodocupdatedat` datetime DEFAULT NULL,
  `tipodocdeletedat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `usertypeid` tinyint(4) NOT NULL,
  `usertypename` enum('Natural','Jurídico') DEFAULT NULL,
  `usertypecreatedat` datetime NOT NULL DEFAULT current_timestamp(),
  `usertypeupdatedat` datetime DEFAULT NULL,
  `usertypedeletedat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usertipodoc` tinyint(4) NOT NULL,
  `usertype` tinyint(4) NOT NULL,
  `userid` int(10) NOT NULL,
  `userfullname` varchar(64) NOT NULL,
  `userbirthday` date NOT NULL,
  `useraddress` varchar(64) NOT NULL,
  `userphone` varchar(15) NOT NULL,
  `useremail` varchar(64) NOT NULL,
  `userpassword` varchar(64) NOT NULL,
  `userprofescard` varchar(32) DEFAULT NULL,
  `userespecial` varchar(32) DEFAULT NULL,
  `useractivity` smallint(6) DEFAULT NULL,
  `userhired` date DEFAULT NULL,
  `userrolid` tinyint(4) NOT NULL,
  `usercreatedat` datetime NOT NULL DEFAULT current_timestamp(),
  `userupdatedat` datetime DEFAULT NULL,
  `userdeletedat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estadoproceso`
--
ALTER TABLE `estadoproceso`
  ADD PRIMARY KEY (`estadoid`);

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`procesoid`),
  ADD KEY `procesoestadoid` (`procesoestadoid`),
  ADD KEY `procesousercliente` (`procesousercliente`);

--
-- Indices de la tabla `procesoa`
--
ALTER TABLE `procesoa`
  ADD PRIMARY KEY (`procesoaid`),
  ADD KEY `procesoid` (`procesoid`),
  ADD KEY `abogadoid` (`abogadoid`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rolid`),
  ADD UNIQUE KEY `rolname` (`rolname`);

--
-- Indices de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  ADD PRIMARY KEY (`tipodocid`),
  ADD UNIQUE KEY `tipodocname` (`tipodocname`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`usertypeid`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `useremail` (`useremail`),
  ADD KEY `userrolid` (`userrolid`),
  ADD KEY `usertipodoc` (`usertipodoc`),
  ADD KEY `usertype` (`usertype`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estadoproceso`
--
ALTER TABLE `estadoproceso`
  MODIFY `estadoid` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proceso`
--
ALTER TABLE `proceso`
  MODIFY `procesoid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `procesoa`
--
ALTER TABLE `procesoa`
  MODIFY `procesoaid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rolid` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  MODIFY `tipodocid` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `usertypeid` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD CONSTRAINT `proceso_ibfk_1` FOREIGN KEY (`procesoestadoid`) REFERENCES `estadoproceso` (`estadoid`),
  ADD CONSTRAINT `proceso_ibfk_2` FOREIGN KEY (`procesousercliente`) REFERENCES `usuario` (`userid`);

--
-- Filtros para la tabla `procesoa`
--
ALTER TABLE `procesoa`
  ADD CONSTRAINT `procesoa_ibfk_1` FOREIGN KEY (`procesoid`) REFERENCES `proceso` (`procesoid`),
  ADD CONSTRAINT `procesoa_ibfk_2` FOREIGN KEY (`abogadoid`) REFERENCES `usuario` (`userid`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`userrolid`) REFERENCES `roles` (`rolid`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`usertipodoc`) REFERENCES `tipodoc` (`tipodocid`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`usertype`) REFERENCES `tipousuario` (`usertypeid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
