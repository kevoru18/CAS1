-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-03-2020 a las 15:05:45
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `suministroscomixmul`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activossigua`
--

CREATE TABLE IF NOT EXISTS `activossigua` (
  `Id` int(15) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_retiro` date NOT NULL,
  `valor_libro` int(15) NOT NULL,
  `valor_actual` int(15) NOT NULL,
  `depresiacion_mensual` int(15) NOT NULL,
  `depresiacion_acumulada` int(15) NOT NULL,
  `vida_util` int(15) NOT NULL,
  `cuenta_debito` int(15) NOT NULL,
  `cuenta_credito` int(15) NOT NULL,
  `valor_residual` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `ubicacion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `activossigua`
--

INSERT INTO `activossigua` (`Id`, `descripcion`, `cantidad`, `fecha_ingreso`, `fecha_retiro`, `valor_libro`, `valor_actual`, `depresiacion_mensual`, `depresiacion_acumulada`, `vida_util`, `cuenta_debito`, `cuenta_credito`, `valor_residual`, `ubicacion`) VALUES
(1, 'Camaras de vigilancia', 4, '2020-02-01', '0000-00-00', 1000, 1000, 5, 10, 5, 0, 0, '', ''),
(2, 'Impresora de carnets DataCard', 1, '2020-02-14', '2020-02-14', 15000, 15000, 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_pedido`
--

CREATE TABLE IF NOT EXISTS `orden_pedido` (
  `id_compra` int(15) NOT NULL AUTO_INCREMENT,
  `num_factura` int(15) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `costo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `id_producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_creador` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `id_proveedor` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `sub_total` decimal(15,0) NOT NULL,
  `ISV` decimal(15,0) NOT NULL,
  `descuento` decimal(15,0) NOT NULL,
  `total` decimal(15,0) NOT NULL,
  `modifico` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `hora_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `hora_modificacion` date NOT NULL,
  PRIMARY KEY (`id_compra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `rtn` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_p` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion_p` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_p` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `empresa` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `estatus` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` int(40) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `id_usuario_modi` int(40) NOT NULL,
  `fecha_modi` date NOT NULL,
  `oficina` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_proveedor`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_usuario_modi` (`id_usuario_modi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `rtn`, `nombre_p`, `direccion_p`, `telefono_p`, `empresa`, `estatus`, `id_usuario`, `fecha_creacion`, `id_usuario_modi`, `fecha_modi`, `oficina`) VALUES
(1, '03181988012544', 'Kevin Rubi', 'Siguatepeque', '9853-7733', 'RDG Design', 'Activo', 1, '2020-02-06', 1, '2020-02-06', 'Siguatepeque'),
(2, '03181988012544', 'Carlos', 'Siguatepeque', '9876-9876', 'COMIXMUL', 'Activo', 0, '0000-00-00', 0, '0000-00-00', ''),
(3, '', '', '', '', '', '', 0, '0000-00-00', 0, '0000-00-00', ''),
(4, '', '', '', '', '', '', 0, '0000-00-00', 0, '0000-00-00', ''),
(5, '', '', '', '', '', '', 0, '0000-00-00', 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `codigo_pedido` int(15) NOT NULL,
  `codigo_producto` int(15) NOT NULL,
  `descripcion_producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `costoU` int(15) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `costo_total` int(15) NOT NULL,
  `estado` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion_factura` date NOT NULL,
  `fecha_facturacion` date NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `codigo_proveedor` int(15) NOT NULL,
  `nombre_proveedor` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `temp`
--

INSERT INTO `temp` (`Id`, `codigo_pedido`, `codigo_producto`, `descripcion_producto`, `costoU`, `cantidad`, `costo_total`, `estado`, `fecha_creacion_factura`, `fecha_facturacion`, `usuario`, `codigo_proveedor`, `nombre_proveedor`) VALUES
(1, 1, 2, 'Impresora de carnets DataCard', 15000, 4, 60000, 'Pendiente', '0000-00-00', '0000-00-00', 'Kevin', 1, 'Kevin Rubi'),
(2, 1, 1, 'Camaras de vigilancia', 1000, 3, 3000, 'Pendiente', '0000-00-00', '0000-00-00', 'kevin', 1, 'Kevin Rubí'),
(3, 2, 1, 'Camaras de vigilancia', 1000, 3, 3000, 'Pendiente', '0000-00-00', '0000-00-00', 'kevin', 1, 'Kevin Rubí'),
(4, 3, 2, 'Impresora de carnets DataCard', 20000, 3, 60000, 'Pendiente', '0000-00-00', '0000-00-00', 'Kevin', 1, 'Kevin Rubi'),
(5, 3, 1, 'Camaras de vigilancia', 1000, 3, 3000, 'Pendiente', '0000-00-00', '0000-00-00', 'Kevin', 2, 'Carlos'),
(6, 4, 2, 'Impresora de carnets DataCard', 15000, 7, 105000, 'Pendiente', '0000-00-00', '0000-00-00', 'Kevin', 1, 'Kevin Rubi'),
(7, 4, 1, 'Camaras de vigilancia', 1000, 9, 9000, 'Pendiente', '0000-00-00', '0000-00-00', 'Kevin', 2, 'Carlos'),
(8, 5, 1, 'Camaras de vigilancia', 5000, 4, 20000, 'Pendiente', '0000-00-00', '0000-00-00', 'Kevin', 1, 'Kevin Rubi'),
(9, 6, 2, 'Impresora de carnets DataCard', 15000, 9, 135000, 'Pendiente', '0000-00-00', '0000-00-00', 'Kevin', 1, 'Kevin Rubi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Phone` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Position` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Office` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Acces_permits` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Status` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `User_Name` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `creation_date` date NOT NULL,
  `creator_user` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `modification_date` date NOT NULL,
  `modification_user` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `unsuscribe_date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`Id`, `Name`, `Phone`, `Position`, `Office`, `Acces_permits`, `Status`, `User_Name`, `Password`, `Email`, `img`, `creation_date`, `creator_user`, `modification_date`, `modification_user`, `unsuscribe_date`) VALUES
(1, 'Kevin RubÃ­', '9853-7733', 'Developer', 'TI', 'Administrador', 'Activo', 'kevo', '1234', 'kevoru@gmail.com', '', '0000-00-00', '', '0000-00-00', '0', '0000-00-00'),
(2, 'Carlos Bustillo', '9694-4224', 'Gerente', 'TI', 'Administrador', 'Activo', 'tux', '1234', 'tux@nada', '', '0000-00-00', '', '0000-00-00', '0', '0000-00-00'),
(10, 'prueba', 'prueba', 'prueba', 'prueba', 'Administrador', 'Inactivo', 'prueba', '$2y$10$/LkolbEewyVvO', 'kevoru@gmail.com', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
(11, 'Rolando Bustillo', '9888-5566', 'DBA', 'TI', 'Administrador', 'Activo', 'rolando', '$2y$10$88YlkEadixtVu', 'tux@comuxmul.hn', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
(12, 'kevin', '213123', 'rwer', 'fsdfsf', 'sdf', 'Activo', 'kevin', '$2y$10$VNJnYSI8WnDV3', 'sdfsd', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
(13, 'taula', '24234234', 'dba', 'Taulabe', 'Contador', 'Activo', 'taula1', '1234', 'kkk', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
(14, 'otoro', '444', 'Contador', 'Otoro', 'Contador', 'Activo', 'otoro1', '1234', 'otoro', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
(15, 'nacaome', '1', 'Contador', 'Nacaome', 'Contador', 'Activo', 'nacaome1', '1234', 'nacaome', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
(16, 'Kristel', '798798', 'Gerente', 'Taulabe', 'Contador', 'Activo', 'kriss', '$2y$10$et.SILN.lc.qn', 'kkk', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
(18, 'Luis', 'asdasd', 'Suplente', 'Taulabe', 'Contador', 'Inactivo', 'luis', '$2y$10$eQL90sMa3YM0g', 'kke', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
