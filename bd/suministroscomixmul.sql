-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2020 at 06:39 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suministroscomixmul`
--

-- --------------------------------------------------------

--
-- Table structure for table `activossigua`
--

CREATE TABLE IF NOT EXISTS `activossigua` (
  `Id` int(15) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Información de activo a crear',
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
  `tipo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `id_user` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `oficina` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_activo` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`),
  KEY `Id_2` (`Id`),
  KEY `Id_3` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `activossigua`
--

INSERT INTO `activossigua` (`Id`, `descripcion`, `cantidad`, `fecha_ingreso`, `fecha_retiro`, `valor_libro`, `valor_actual`, `depresiacion_mensual`, `depresiacion_acumulada`, `vida_util`, `cuenta_debito`, `cuenta_credito`, `valor_residual`, `ubicacion`, `tipo`, `id_user`, `oficina`, `tipo_activo`) VALUES
(34, 'Kia Sorento', 0, '2020-10-08', '0000-00-00', 80000, 80000, 3333, 0, 0, 0, 0, '', 'Siguatepeque', 'Activo', 'kevo', 'Siguatepeque', '0.5'),
(35, 'Papel bond tamaÃ±o carta', 0, '2020-10-11', '0000-00-00', 0, 95, 0, 0, 0, 0, 0, '', 'Contabilidad', 'Suministro', 'kevo', 'Siguatepeque', '');

-- --------------------------------------------------------

--
-- Table structure for table `orden_pedido`
--

CREATE TABLE IF NOT EXISTS `orden_pedido` (
  `id_compra` int(15) NOT NULL AUTO_INCREMENT,
  `num_factura` int(15) NOT NULL,
  `cod_producto` int(11) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `costo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `desc_producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `proveedor` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `sub_total` decimal(15,0) NOT NULL,
  `modifico` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `oficina` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_compra`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `orden_pedido`
--

INSERT INTO `orden_pedido` (`id_compra`, `num_factura`, `cod_producto`, `cantidad`, `costo`, `desc_producto`, `nombre_usuario`, `proveedor`, `sub_total`, `modifico`, `estado`, `fecha_creacion`, `fecha_modificacion`, `oficina`) VALUES
(2, 2, 1, 3, '1000', 'Camaras de vigilancia', 'kevin', '1', '3000', '', 'Procesado', '0000-00-00', '0000-00-00', ''),
(3, 5, 1, 5, '5000', 'Camaras de vigilancia', 'Kevin', '1', '25000', '', 'Procesado', '0000-00-00', '0000-00-00', ''),
(4, 6, 2, 10, '15000', 'Impresora de carnets DataCard', 'Kevin', '1', '150000', '', 'Procesado', '0000-00-00', '0000-00-00', ''),
(5, 7, 1, 5, '1000', 'Camaras de vigilancia', 'Kevin', '1', '5000', '', 'Procesado', '0000-00-00', '0000-00-00', ''),
(6, 8, 1, 10, '1000', 'Camaras de vigilancia', 'Kevin', '6', '10000', '', 'Procesado', '0000-00-00', '0000-00-00', ''),
(7, 4, 2, 1, '15000', 'Impresora de carnets DataCard', 'Kevin', '1', '15000', '', 'Procesado', '0000-00-00', '0000-00-00', ''),
(8, 4, 1, 1, '1000', 'Camaras de vigilancia', 'Kevin', '2', '1000', '', 'Procesado', '0000-00-00', '0000-00-00', ''),
(9, 11, 1, 5, '1000', 'Camaras de vigilancia', 'Kevin Rubi', '1', '5000', '', 'Inactivo', '0000-00-00', '0000-00-00', ''),
(10, 12, 1, 6, '1000', 'Camaras de vigilancia', 'Kevin Rubi', '1', '6000', '', 'Procesado', '2020-09-23', '0000-00-00', ''),
(11, 13, 1, 5, '1000', 'Camaras de vigilancia', 'Kevin Rubi', '1', '5000', '', 'Procesado', '2020-09-24', '0000-00-00', ''),
(12, 14, 1, 5, '1000', 'Camaras de vigilancia', 'Kevin Rubi', '1', '5000', '', 'Procesado', '2020-09-24', '0000-00-00', ''),
(13, 15, 1, 5, '1000', 'Camaras de vigilancia', 'Kevin Rubi', '2', '5000', '', 'Procesado', '2020-09-24', '0000-00-00', ''),
(14, 16, 1, 1, '1000', 'Camaras de vigilancia', 'Kevin Rubi', '1', '1000', '', 'Procesado', '2020-09-24', '0000-00-00', ''),
(15, 16, 1, 5, '1000', 'Camaras de vigilancia', 'Kevin Rubi', '1', '5000', '', 'Procesado', '2020-09-24', '0000-00-00', ''),
(16, 16, 2, 1, '15000', 'Impresora de carnets DataCard', 'Kevin Rubi', '1', '15000', '', 'Procesado', '2020-09-24', '0000-00-00', ''),
(17, 17, 1, 1, '1000', 'Camaras de vigilancia', 'Kevin Rubi', '1', '1000', '', 'Procesado', '2020-09-24', '0000-00-00', ''),
(18, 17, 1, 5, '1000', 'Camaras de vigilancia', 'Kevin Rubi', '1', '5000', '', 'Procesado', '2020-09-24', '0000-00-00', ''),
(19, 17, 2, 5, '15000', 'Impresora de carnets DataCard', 'Kevin Rubi', '1', '75000', '', 'Procesado', '2020-09-24', '0000-00-00', ''),
(20, 18, 1, 5, '1000', 'Camaras de vigilancia', 'Kevin Rubi', 'Kevin Rubí', '5000', '', 'Procesado', '2020-09-25', '0000-00-00', ''),
(21, 18, 1, 1, '1000', 'Camaras de vigilancia', 'Kevin Rubi', 'Kevin Rubí', '1000', '', 'Procesado', '2020-09-25', '0000-00-00', ''),
(22, 18, 2, 5, '15000', 'Impresora de carnets DataCard', 'Kevin Rubi', 'Kevin Rubí', '75000', '', 'Procesado', '2020-09-25', '0000-00-00', ''),
(23, 18, 2, 2, '15000', 'Impresora de carnets DataCard', 'Kevin Rubi', 'Kevin Rubí', '30000', '', 'Procesado', '2020-09-25', '0000-00-00', ''),
(24, 18, 3, 3, '1000', 'Celular Lg', 'Kevin Rubi', 'Kevin Rubí', '3000', '', 'Procesado', '2020-09-25', '0000-00-00', ''),
(25, 18, 3, 4, '1000', 'Celular Lg', 'Kevin Rubi', 'Kevin Rubí', '4000', '', 'Procesado', '2020-09-25', '0000-00-00', ''),
(26, 18, 4, 1, '15000', 'Televisor LG', 'Kevin Rubi', 'Kevin Rubí', '15000', '', 'Procesado', '2020-09-25', '0000-00-00', ''),
(27, 18, 5, 1, '6000', 'Mueble', 'Kevin Rubi', 'Kevin Rubí', '6000', '', 'Procesado', '2020-09-25', '0000-00-00', ''),
(28, 18, 4, 1, '15000', 'Televisor LG', 'Kevin Rubi', 'Kevin Rubí', '15000', '', 'Procesado', '2020-09-25', '0000-00-00', ''),
(29, 19, 1, 15, '1000', 'Camaras de vigilancia', 'Kevin Rubi', 'Kevin Rubi', '15000', '', 'Procesado', '2020-09-25', '0000-00-00', ''),
(30, 20, 1, 4, '1000', 'Camaras de vigilancia', 'Kevin Rubi', '1', '4000', '', 'Procesado', '2020-09-25', '0000-00-00', ''),
(31, 21, 1, 5, '1000', 'Camaras de vigilancia', 'Kevin Rubi', 'Kevin Rubi', '5000', '', 'Eliminado', '2020-09-25', '0000-00-00', ''),
(32, 22, 2, 4, '600', 'Impresora de carnets DataCard', 'Kristel', 'Carlos Bustillo', '2400', '', 'Procesado', '2020-09-30', '0000-00-00', ''),
(33, 23, 1, 5, '500', 'Camaras de vigilancia', 'Kristel', 'Kevin Rubi', '2500', 'kriss', 'Procesado', '2020-09-30', '2020-09-29', ''),
(34, 24, 1, 4, '500', 'Camaras de vigilancia', 'Kristel', 'Kevin Rubi', '2000', 'kriss', 'Procesado', '2020-09-29', '2020-09-29', ''),
(35, 25, 1, 5, '1000', 'Camaras de vigilancia', 'Kristel', 'Carlos Bustillo', '5000', 'kriss', 'Procesado', '2020-09-30', '2020-09-30', 'Taulabe'),
(36, 27, 3, 5, '1000', 'Celular Lg', 'kevo', 'Kevin Rubi', '5000', 'kriss', 'Procesado', '2020-09-30', '2020-09-30', 'Taulabe'),
(37, 29, 1, 4, '500', 'Camaras de vigilancia', 'kevo', 'Kevin Rubi', '2000', 'kevo', 'Procesado', '2020-09-30', '2020-09-30', 'Taulabe'),
(38, 26, 1, 4, '1000', 'Camaras de vigilancia', 'tux', 'Kevin Rubi', '4000', '', 'Pendiente', '2020-10-01', '0000-00-00', 'Siguatepeque');

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `rtn` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_p` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion_p` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_p` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `empresa` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `estatus` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `id_usuario_modi` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_modi` date NOT NULL,
  `oficina` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_proveedor`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_usuario_modi` (`id_usuario_modi`),
  KEY `id_proveedor` (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `rtn`, `nombre_p`, `direccion_p`, `telefono_p`, `empresa`, `estatus`, `id_usuario`, `fecha_creacion`, `id_usuario_modi`, `fecha_modi`, `oficina`) VALUES
(1, '03181988012544', 'Kevin Rubi', 'Siguatepeque', '9853-7733', 'RDG Design', 'Activo', '1', '2020-02-06', '1', '2020-02-06', 'Siguatepeque'),
(2, '03181988012544', 'Carlos Bustillo', 'Siguatepeque', '9876-9876', 'COMIXMUL', 'Activo', '0', '0000-00-00', '0', '0000-00-00', ''),
(6, '03181988012545', 'Jose Pablo', 'Col. Los Angeles', '98537733', 'RDG DESIGN', 'Activo', '0', '0000-00-00', '0', '0000-00-00', ''),
(7, '031820100000', 'Onix Rubi', 'Col. Los Angeles', '98537733', 'RDG DESIGN', 'Activo', '0', '0000-00-00', '0', '0000-00-00', ''),
(8, '03181988012545', 'fs', '', '', '', '', '0', '0000-00-00', '0', '0000-00-00', ''),
(9, '03181988012545', 'fsd', 'dfd', '', '', '', '0', '0000-00-00', '0', '0000-00-00', ''),
(10, '03181988012545', 'Jose Argutia', 'SPS', '9853-7733', 'RDGAMES', 'Activo', '0', '0000-00-00', '0', '0000-00-00', ''),
(11, '03181988001248', 'Karla', 'SAnta MArtha', '9837-5599', 'Gustitos', 'Activo', '0', '2020-09-22', '0', '0000-00-00', ''),
(12, '0801-1988-00124', 'Jose Carlos', 'Tgu', '6578-8999', 'Donas externas', 'Activo', '0', '2020-09-22', '0', '0000-00-00', ''),
(13, '0318201007045', 'Dayanne Rubi', 'Col. Los Angeles', '9853-7733', 'RDG Designs', 'Activo', '0', '2020-09-22', '0', '0000-00-00', ''),
(14, '03181992000715', 'Onix Degrandez', 'Col. Los Angeles', '9914-5004', 'RDG Designs', 'Activo', '0', '2020-09-22', '0', '0000-00-00', ''),
(15, '0318198801557', 'Rosangel', 'Col. Los', '987553333', 'RDG DESIGN', 'Activo', '0', '2020-09-22', '0', '0000-00-00', ''),
(16, '55', 'Pedro', '5', '55', 'd', 'Activo', '0', '2020-09-30', '0', '0000-00-00', 'Taulabe'),
(17, '', 'Juan Jose', 'Siguatepeque', '98555', 'RDG', 'Activo', 'kriss', '2020-09-30', 'kriss', '2020-09-29', 'Taulabe');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
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
  `user_modi` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `codigo_proveedor` int(15) NOT NULL,
  `nombre_proveedor` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `oficina` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=92 ;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`Id`, `codigo_pedido`, `codigo_producto`, `descripcion_producto`, `costoU`, `cantidad`, `costo_total`, `estado`, `fecha_creacion_factura`, `fecha_facturacion`, `usuario`, `user_modi`, `codigo_proveedor`, `nombre_proveedor`, `oficina`) VALUES
(3, 2, 1, 'Camaras de vigilancia', 1000, 3, 3000, 'Procesado', '0000-00-00', '0000-00-00', 'kevin', '', 1, 'Kevin Rubí', ''),
(6, 4, 2, 'Impresora de carnets DataCard', 15000, 1, 15000, 'Procesado', '0000-00-00', '0000-00-00', 'Kevin', '', 1, 'Kevin Rubi', ''),
(7, 4, 1, 'Camaras de vigilancia', 1000, 1, 1000, 'Procesado', '0000-00-00', '0000-00-00', 'Kevin', '', 2, 'Carlos', ''),
(8, 5, 1, 'Camaras de vigilancia', 5000, 5, 25000, 'Procesado', '0000-00-00', '0000-00-00', 'Kevin', '', 1, 'Kevin Rubi', ''),
(9, 6, 2, 'Impresora de carnets DataCard', 15000, 10, 150000, 'Procesado', '0000-00-00', '0000-00-00', 'Kevin', '', 1, 'Kevin Rubi', ''),
(17, 8, 1, 'Camaras de vigilancia', 1000, 10, 10000, 'Procesado', '0000-00-00', '0000-00-00', 'Kevin', '', 6, 'Jose Pablo', ''),
(18, 9, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '0000-00-00', '0000-00-00', 'Kevin', '', 1, 'Kevin Rubi', ''),
(19, 9, 2, 'Impresora de carnets DataCard', 15000, 1, 15000, 'Procesado', '0000-00-00', '0000-00-00', 'Kevin', '', 1, 'Kevin Rubi', ''),
(58, 10, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-23', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(59, 11, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-23', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(60, 12, 1, 'Camaras de vigilancia', 1000, 6, 6000, 'Procesado', '2020-09-23', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(61, 13, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(62, 14, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(63, 15, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 2, 'Carlos Bustillo', ''),
(64, 16, 1, 'Camaras de vigilancia', 1000, 1, 1000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(65, 16, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(66, 16, 2, 'Impresora de carnets DataCard', 15000, 1, 15000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(67, 17, 1, 'Camaras de vigilancia', 1000, 1, 1000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(68, 17, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(69, 17, 2, 'Impresora de carnets DataCard', 15000, 5, 75000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(70, 18, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(71, 18, 1, 'Camaras de vigilancia', 1000, 1, 1000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(72, 18, 2, 'Impresora de carnets DataCard', 15000, 5, 75000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(73, 18, 2, 'Impresora de carnets DataCard', 15000, 2, 30000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(74, 18, 3, 'Celular Lg', 1000, 3, 3000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(75, 18, 3, 'Celular Lg', 1000, 4, 4000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(76, 18, 4, 'Televisor LG', 15000, 1, 15000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(77, 18, 5, 'Mueble', 6000, 1, 6000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(78, 18, 4, 'Televisor LG', 15000, 1, 15000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(79, 19, 1, 'Camaras de vigilancia', 1000, 15, 15000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(80, 20, 1, 'Camaras de vigilancia', 1000, 4, 4000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(81, 21, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-24', '0000-00-00', 'Kevin Rubi', '', 1, 'Kevin Rubi', ''),
(82, 22, 2, 'Impresora de carnets DataCard', 600, 4, 2400, 'Procesado', '2020-09-29', '0000-00-00', 'Kristel', '', 2, 'Carlos Bustillo', ''),
(83, 23, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-29', '0000-00-00', 'Kristel', '', 1, 'Kevin Rubi', ''),
(84, 24, 1, 'Camaras de vigilancia', 500, 4, 2000, 'Procesado', '2020-09-29', '2020-09-29', 'Kristel', 'kriss', 1, 'Kevin Rubi', ''),
(85, 25, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-30', '2020-09-30', 'Kristel', 'kevo', 2, 'Carlos Bustillo', 'Taulabe'),
(86, 26, 1, 'Camaras de vigilancia', 1000, 4, 4000, 'Procesado', '2020-09-30', '2020-10-01', 'Kevin Rubi', 'tux', 1, 'Kevin Rubi', 'Siguatepeque'),
(87, 27, 3, 'Celular Lg', 1000, 5, 5000, 'Procesado', '2020-09-30', '2020-09-30', 'Kristel', 'kevo', 1, 'Kevin Rubi', 'Taulabe'),
(88, 28, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-30', '2020-09-30', 'Kristel', 'kevo', 1, 'Kevin Rubi', 'Taulabe'),
(89, 29, 1, 'Camaras de vigilancia', 500, 4, 2000, 'Procesado', '2020-09-30', '2020-09-30', 'Kristel', 'kevo', 1, 'Kevin Rubi', 'Taulabe'),
(90, 30, 1, 'Camaras de vigilancia', 500, 4, 2000, 'Pendiente', '2020-10-01', '0000-00-00', 'Carlos Bustillo', '', 1, 'Kevin Rubi', 'Siguatepeque'),
(91, 31, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Pendiente', '2020-10-04', '0000-00-00', 'Kristel', '', 1, 'Kevin Rubi', 'Taulabe');

-- --------------------------------------------------------

--
-- Table structure for table `tempentrada`
--

CREATE TABLE IF NOT EXISTS `tempentrada` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `codigo_pedido` int(15) NOT NULL,
  `codigo_producto` int(15) NOT NULL,
  `descripcion_producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `costoU` int(15) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `costo_total` int(15) NOT NULL,
  `estado` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion_factura` date NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_proveedor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `oficina` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=69 ;

--
-- Dumping data for table `tempentrada`
--

INSERT INTO `tempentrada` (`Id`, `codigo_pedido`, `codigo_producto`, `descripcion_producto`, `costoU`, `cantidad`, `costo_total`, `estado`, `fecha_creacion_factura`, `usuario`, `nombre_proveedor`, `oficina`) VALUES
(30, 0, 0, '', 0, 0, 0, '', '0000-00-00', '', '', ''),
(33, 2, 5, 'Mueble', 6000, 5, 30000, 'Procesado', '2020-09-25', 'Kevin Rubi', 'dfs', ''),
(34, 2, 3, 'Celular Lg', 1000, 5, 5000, 'Procesado', '2020-09-25', 'Kevin Rubi', 'dfs', ''),
(35, 3, 1, 'Camaras de vigilancia', 500, 4, 2000, 'Procesado', '2020-09-28', 'Kevin Rubi', 'Entrada por traslado', ''),
(36, 4, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-28', 'Kevin Rubi', 'hhhh', ''),
(37, 5, 2, 'Impresora de carnets DataCard', 600, 4, 2400, 'Procesado', '2020-09-28', 'Kevin Rubi', 'ssss', ''),
(38, 5, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-28', 'Kevin Rubi', 'ssss', ''),
(39, 6, 3, 'Celular Lg', 1000, 4, 4000, 'Procesado', '2020-09-28', 'Kevin Rubi', 'gdhfg', ''),
(40, 7, 3, 'Celular Lg', 1000, 5, 5000, 'Procesado', '2020-09-28', 'Kevin Rubi', 'hhh', ''),
(41, 8, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-28', 'Kevin Rubi', 'r', ''),
(42, 9, 4, 'Televisor LG', 15000, 5, 75000, 'Procesado', '2020-09-28', 'Kevin Rubi', 'dff', ''),
(43, 10, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-28', 'Kevin Rubi', 'f', ''),
(44, 11, 2, 'Impresora de carnets DataCard', 600, 6, 3600, 'Procesado', '2020-09-28', 'Kevin Rubi', 'yy', ''),
(45, 12, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-28', 'Kevin Rubi', 'd', ''),
(46, 13, 5, 'Mueble', 6000, 5, 30000, 'Procesado', '2020-09-28', 'Kevin Rubi', 'fff', ''),
(47, 13, 1, 'Camaras de vigilancia', 500, 6, 3000, 'Procesado', '2020-09-28', 'Kevin Rubi', 'fff', ''),
(49, 14, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-28', 'Kevin Rubi', 'g', ''),
(50, 15, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-28', 'Kevin Rubi', 'c', ''),
(51, 16, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-28', 'Kevin Rubi', 'd', ''),
(53, 17, 4, 'Televisor LG', 15000, 5, 75000, 'Procesado', '2020-09-28', 'Kevin Rubi', 'f', ''),
(54, 18, 1, 'Camaras de vigilancia', 500, 4, 2000, 'Procesado', '2020-09-28', 'Kevin Rubi', 'f', ''),
(55, 19, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-28', 'Kevin Rubi', 'd', ''),
(56, 20, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-28', 'Kevin Rubi', 'g', ''),
(57, 21, 1, 'Camaras de vigilancia', 500, 4, 2000, 'Procesado', '2020-09-28', 'Kevin Rubi', 'd', ''),
(60, 22, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-30', 'Kristel', 'k', 'Taulabe'),
(61, 22, 2, 'Impresora de carnets DataCard', 500, 5, 2500, 'Procesado', '2020-09-30', 'Kristel', 'k', 'Taulabe'),
(62, 23, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-30', 'Kristel', 'h', ''),
(63, 23, 2, 'Impresora de carnets DataCard', 500, 5, 2500, 'Procesado', '2020-09-30', 'Kristel', 'h', ''),
(64, 24, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-30', 'Kristel', 'y', 'Taulabe'),
(65, 25, 1, 'Camaras de vigilancia', 1000, 5, 5000, 'Procesado', '2020-09-30', 'Kevin Rubi', 'h', 'Siguatepeque'),
(66, 25, 1, 'Camaras de vigilancia', 1000, 4, 4000, 'Procesado', '2020-09-30', 'Kristel', 'h', 'Taulabe'),
(67, 25, 1, 'Camaras de vigilancia', 1000, 1, 1000, 'Procesado', '2020-09-30', 'Kristel', 'h', 'Taulabe'),
(68, 26, 2, 'Impresora de carnets DataCard', 15000, 1, 15000, 'Pendiente', '2020-10-01', 'Carlos Bustillo', 'Entrada de articulos por salida de oficina Taulabe salida#123', 'Siguatepeque');

-- --------------------------------------------------------

--
-- Table structure for table `tempsalidas`
--

CREATE TABLE IF NOT EXISTS `tempsalidas` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `codigo_pedido` int(15) NOT NULL,
  `codigo_producto` int(15) NOT NULL,
  `descripcion_producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `costoU` int(15) NOT NULL,
  `cantidad` int(15) NOT NULL,
  `costo_total` int(15) NOT NULL,
  `estado` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion_factura` date NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_proveedor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `oficina` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tempsalidas`
--

INSERT INTO `tempsalidas` (`Id`, `codigo_pedido`, `codigo_producto`, `descripcion_producto`, `costoU`, `cantidad`, `costo_total`, `estado`, `fecha_creacion_factura`, `usuario`, `nombre_proveedor`, `oficina`) VALUES
(1, 0, 0, '', 0, 0, 0, '', '0000-00-00', '', '', ''),
(2, 1, 1, 'Camaras de vigilancia', 500, 4, 2000, 'Procesado', '2020-09-28', 'Kevin Rubi', 'd', ''),
(3, 1, 2, 'Impresora de carnets DataCard', 600, 5, 3000, 'Procesado', '2020-09-28', 'Kevin Rubi', 'd', ''),
(4, 2, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-29', 'Kevin Rubi', 'f', ''),
(5, 3, 1, 'Camaras de vigilancia', 500, 4, 2000, 'Procesado', '2020-09-30', 'kevo', 'd', 'Siguatepeque'),
(6, 4, 1, 'Camaras de vigilancia', 500, 5, 2500, 'Procesado', '2020-09-30', 'kriss', 'g', 'Taulabe');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
  `Password` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `creation_date` date NOT NULL,
  `creator_user` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Phone`, `Position`, `Office`, `Acces_permits`, `Status`, `User_Name`, `Password`, `Email`, `creation_date`, `creator_user`) VALUES
(1, 'Kevin Rubi', '9853-7733', 'Developer', 'Siguatepeque', 'Administrador', 'Activo', 'kevo', '$2y$10$.Pfb1q2c/nhURKCztVbuEOuFRqfjMXYCJ3zvi0S8Bsg4LBuor1fBC', 'kevoru@gmail.com', '0000-00-00', ''),
(2, 'Carlos Bustillo', '9694-4224', 'Gerente', 'Siguatepeque', 'Administrador', 'Activo', 'tux', '$2y$10$5/vWMPCrEDYLg7zP7icThOwc/JT8lB3Vqgmwyfr6/GB9KO2coqDD2', 'tux@nada', '0000-00-00', ''),
(10, 'prueba', 'prueba', 'prueba', 'prueba', 'Administrador', 'Inactivo', 'prueba', '$2y$10$/LkolbEewyVvO', 'kevoru@gmail.com', '0000-00-00', ''),
(11, 'Rolando Bustillo', '9888-5566', 'DBA', '', 'Administrador', 'Activo', 'rolando', '81dc9bdb52d04dc20036dbd8313ed055', 'tux@comuxmul.hn', '0000-00-00', ''),
(12, 'kevin', '213123', 'rwer', 'fsdfsf', 'sdf', 'Activo', 'kevin', '$2y$10$VNJnYSI8WnDV3', 'sdfsd', '0000-00-00', ''),
(13, 'taula', '24234234', 'dba', 'Taulabe', 'Contador', 'Activo', 'taula1', '1234', 'kkk', '0000-00-00', ''),
(14, 'otoro', '444', 'Contador', 'Otoro', 'Contador', 'Activo', 'otoro1', '$2y$10$Hq3t3bHmQWD9050sxhxgX.PrxVGCgE7epeMzCDWWQXdHx0RDLIq1C', 'otoro', '0000-00-00', ''),
(15, 'nacaome', '1', 'Contador', 'Nacaome', 'Contador', 'Activo', 'nacaome1', '1234', 'nacaome', '0000-00-00', ''),
(16, 'Kristel', '798798', 'Gerente', 'Taulabe', 'Contador', 'Activo', 'kriss', '$2y$10$vVlwiPuQDzj0MOUhn6.Uu.wYGlq9TtEl7UxlSCX5xudlE6ihHTkq.', 'kkk', '0000-00-00', ''),
(18, 'Luis', 'asdasd', 'Suplente', 'Taulabe', 'Contador', 'Inactivo', 'luis', '$2y$10$eQL90sMa3YM0g', 'kke', '0000-00-00', ''),
(19, 'rubi', 'rubi', 'rubi', 'Siguatepeque', 'Administrador', 'Activo', 'rubi', '$2y$10$.nyNHSokqKiKU', '', '0000-00-00', ''),
(20, 'jasiely', '', '', 'Siguatepeque', 'Administrador', 'Activo', 'jasiely', '$2y$10$XQLfBEHG2rrDv', '', '0000-00-00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
