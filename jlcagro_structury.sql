-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2023 a las 08:26:46
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jlcagro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idArticulo` int(11) NOT NULL,
  `tituloArticulo` text NOT NULL,
  `contenidoArticulo` text NOT NULL,
  `resumenArticulo` text NOT NULL,
  `rutaimagenArticulo` text NOT NULL,
  `fechaArticulo` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demanda`
--

CREATE TABLE `demanda` (
  `demandaidexpediente` int(10) NOT NULL,
  `demandanumexpediente` varchar(9) DEFAULT NULL,
  `juntasidjunta` smallint(6) DEFAULT NULL,
  `secretariasidsecretaria` smallint(6) DEFAULT NULL,
  `demandaidusuario` smallint(6) DEFAULT NULL,
  `demandafechapresentacion` datetime DEFAULT NULL,
  `demandahorapresentacion` datetime DEFAULT NULL,
  `demandaubicacion` varchar(100) DEFAULT NULL,
  `demandacopias` smallint(6) DEFAULT NULL,
  `demandaanexos` smallint(6) DEFAULT NULL,
  `demandanompresento` varchar(200) DEFAULT NULL,
  `demandaenvio` int(11) DEFAULT NULL,
  `demandaestado` smallint(6) DEFAULT NULL,
  `demandamotivoconflicto` smallint(6) DEFAULT NULL,
  `demandamuniubicacion` smallint(6) DEFAULT NULL,
  `demandaetapa` varchar(15) DEFAULT NULL,
  `demandanaturaleza` smallint(6) DEFAULT NULL,
  `demandatotaltrabajador` smallint(6) DEFAULT NULL,
  `demandatotalhombres` smallint(6) DEFAULT NULL,
  `demandatotalmujeres` smallint(6) DEFAULT NULL,
  `demandaidactividadeco` smallint(6) DEFAULT NULL,
  `demandaclaveactividadeco` smallint(6) DEFAULT NULL,
  `demandamodalidadcontrato` smallint(6) DEFAULT NULL,
  `demandatipoconflicto` varchar(150) DEFAULT NULL,
  `demandasolucionconflicto` smallint(6) DEFAULT NULL,
  `demandatipolaudo` smallint(6) DEFAULT NULL,
  `demandamontoconflicto` decimal(9,2) DEFAULT NULL,
  `demandaidacumulado` int(11) DEFAULT NULL,
  `demandafechaetapa` datetime DEFAULT NULL,
  `demandanompromovent` varchar(50) DEFAULT NULL,
  `demandaapepatpromov` varchar(50) DEFAULT NULL,
  `demandaapematpromov` varchar(50) DEFAULT NULL,
  `demandatipodemandado` char(1) DEFAULT NULL,
  `demandanomdemandado` varchar(50) DEFAULT NULL,
  `demandaapepatdemanda` varchar(50) DEFAULT NULL,
  `demandaapematdemanda` varchar(50) DEFAULT NULL,
  `demandamoraldemandad` varchar(255) DEFAULT NULL,
  `demandapromoventes` longtext DEFAULT NULL,
  `demandademandados` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandaamparos`
--

CREATE TABLE `demandaamparos` (
  `demandaidexpediente` int(10) NOT NULL,
  `demandaamparosidamparo` int(10) NOT NULL,
  `demandaamparosidjunta` smallint(6) DEFAULT NULL,
  `demandaamparosidsecretaria` smallint(6) DEFAULT NULL,
  `demandaamparosnumamparo` varchar(15) DEFAULT NULL,
  `demandaamparosnumexpediente` varchar(9) DEFAULT NULL,
  `demandaamparosfecpresentacion` datetime DEFAULT NULL,
  `demandaamparoshorapresentacion` datetime DEFAULT NULL,
  `demandaamparosfecacuerdo` datetime DEFAULT NULL,
  `demandaamparoshoraacuerdo` datetime DEFAULT NULL,
  `demandaamparostipoamparo` varchar(50) DEFAULT NULL,
  `demandaamparosresultado` varchar(100) DEFAULT NULL,
  `demandaamparosjuzgado` varchar(100) DEFAULT NULL,
  `demandaamparosnompresento` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandaaudiencias`
--

CREATE TABLE `demandaaudiencias` (
  `demandaidexpediente` int(10) NOT NULL,
  `demandaaudienciasidaudiencias` int(10) NOT NULL,
  `demandaaudienciasnumexpediente` varchar(9) NOT NULL,
  `demandaaudienciasfecpresentaci` datetime NOT NULL,
  `demandaaudienciashorapresentac` datetime DEFAULT NULL,
  `demandaaudienciasfecgenero` datetime DEFAULT NULL,
  `demandaaudienciashoragenero` datetime DEFAULT NULL,
  `demandaaudienciasturnado` varchar(4) DEFAULT NULL,
  `demandaaudienciasidturnado` smallint(6) DEFAULT NULL,
  `demandaaudienciastipoplantilla` varchar(150) DEFAULT NULL,
  `demandaaudienciasestado` smallint(6) DEFAULT NULL,
  `demandaaudienciasfecliberacion` datetime DEFAULT NULL,
  `demandaaudienciashoraliberacio` datetime DEFAULT NULL,
  `demandaaudienciasfeclista` datetime DEFAULT NULL,
  `demandaaudienciasidacumulado` int(11) DEFAULT NULL,
  `motivodiferidodescripcion` varchar(150) DEFAULT NULL,
  `demandaaudienciastipoaudiencia` varchar(150) DEFAULT NULL,
  `demandaaudienciasidjunta` smallint(6) DEFAULT NULL,
  `demandaaudienciasidsecretaria` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandadocumentoinicial`
--

CREATE TABLE `demandadocumentoinicial` (
  `demandaidexpediente` int(10) NOT NULL,
  `demandadocumentoinicialidjunta` smallint(6) NOT NULL,
  `demandadocumentoinicialidsecretaria` smallint(6) DEFAULT NULL,
  `demandadocumentoinicialiddocum` int(10) NOT NULL,
  `demandadocumentoinicialnumexpe` varchar(9) NOT NULL,
  `demandadocumentoinicialturnado` varchar(4) DEFAULT NULL,
  `demandadocumentoinicialidturna` smallint(6) DEFAULT NULL,
  `demandadocumentoinicialfecgene` datetime DEFAULT NULL,
  `demandadocumentoinicialhoragen` datetime DEFAULT NULL,
  `demandadocumentoinicialfecpres` datetime NOT NULL,
  `demandadocumentoinicialhorapre` datetime NOT NULL,
  `demandadocumentoinicialespreve` bit(1) DEFAULT NULL,
  `demandadocumentoinicialnombred` varchar(40) DEFAULT NULL,
  `demandadocumentoinicialtipopla` varchar(150) DEFAULT NULL,
  `demandadocumentoinicialfeclibe` datetime DEFAULT NULL,
  `demandadocumentoinicialhoralib` datetime DEFAULT NULL,
  `demandadocumentoinicialnompres` varchar(200) DEFAULT NULL,
  `demandadocumentoinicialestado` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandalaudos`
--

CREATE TABLE `demandalaudos` (
  `demandaidexpediente` int(11) NOT NULL,
  `demandalaudosidlaudos` int(11) NOT NULL,
  `demandalaudosfecpresentacion` datetime DEFAULT NULL,
  `demandalaudoshorapresentacion` datetime DEFAULT NULL,
  `demandalaudosfecgenero` datetime DEFAULT NULL,
  `demandalaudoshoragenero` datetime DEFAULT NULL,
  `demandalaudosidjunta` smallint(6) DEFAULT NULL,
  `demandalaudosidsecretaria` smallint(6) DEFAULT NULL,
  `demandalaudosturnado` varchar(4) DEFAULT NULL,
  `demandalaudosidturnado` smallint(6) DEFAULT NULL,
  `demandalaudostipoplantilla` varchar(150) DEFAULT NULL,
  `demandalaudosestado` smallint(6) DEFAULT NULL,
  `demandalaudosfecliberacion` datetime DEFAULT NULL,
  `demandalaudoshoraliberacion` datetime DEFAULT NULL,
  `demandalaudossintesis` varchar(150) DEFAULT NULL,
  `demandalaudosfeclista` datetime DEFAULT NULL,
  `demandalaudosidacumulado` int(11) DEFAULT NULL,
  `demandalaudosnumexpediente` varchar(9) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandanotificacion`
--

CREATE TABLE `demandanotificacion` (
  `demandaidexpediente` int(10) NOT NULL,
  `demandanotificacionidnotificac` int(10) NOT NULL,
  `demandanotificacionidjunta` smallint(6) DEFAULT NULL,
  `demandanotificacionidsecretaria` smallint(6) DEFAULT NULL,
  `demandanotificacionnumexpedien` varchar(9) DEFAULT NULL,
  `demandanotificacionfecha` datetime DEFAULT NULL,
  `demandanotificaciondescripcion` varchar(80) DEFAULT NULL,
  `demandanotificaciongeneral` varchar(100) DEFAULT NULL,
  `demandanotificacionfechaelaboracion` datetime DEFAULT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandanotificacionlista`
--

CREATE TABLE `demandanotificacionlista` (
  `demandaidexpediente` int(10) NOT NULL,
  `demandanotificacionlistaidnotificac` int(10) NOT NULL,
  `demandanotificacionlistaidjunta` smallint(6) DEFAULT NULL,
  `demandanotificacionlistaidsecretaria` smallint(6) DEFAULT NULL,
  `demandanotificacionlistanumexpedien` varchar(9) DEFAULT NULL,
  `demandanotificacionlistafecha` datetime DEFAULT NULL,
  `demandanotificacionlistadescripcion` varchar(80) DEFAULT NULL,
  `demandanotificacionlistageneral` varchar(100) DEFAULT NULL,
  `demandanotificacionlistafechaelaboracion` datetime DEFAULT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandaoficios`
--

CREATE TABLE `demandaoficios` (
  `demandaidexpediente` int(10) NOT NULL,
  `demandaoficiosidoficios` int(10) NOT NULL,
  `demandaoficiosnumexpediente` varchar(9) DEFAULT NULL,
  `demandaoficiosturnado` varchar(4) DEFAULT NULL,
  `demandaoficiosidturnado` smallint(6) DEFAULT NULL,
  `demandaoficiosfecgenero` datetime DEFAULT NULL,
  `demandaoficioshoragenero` datetime DEFAULT NULL,
  `demandaoficiosnumoficio` int(11) DEFAULT NULL,
  `demandaoficiosaniooficio` smallint(6) DEFAULT NULL,
  `demandaoficiosdirigidooficina` varchar(200) DEFAULT NULL,
  `demandaoficiosdirigidopersona` varchar(150) DEFAULT NULL,
  `demandaoficioslocalidad` varchar(150) DEFAULT NULL,
  `demandaoficiosidusuario` int(11) DEFAULT NULL,
  `demandaoficiostipoplantilla` varchar(150) DEFAULT NULL,
  `demandaoficiosequiplibero` varchar(25) DEFAULT NULL,
  `demandaoficiosfecliberacion` datetime DEFAULT NULL,
  `demandaoficioshoraliberacion` datetime DEFAULT NULL,
  `demandaoficiosestado` smallint(6) DEFAULT NULL,
  `demandaoficiosidacumulado` int(11) DEFAULT NULL,
  `demandaoficiosidjunta` smallint(6) DEFAULT NULL,
  `demandaoficiosidsecretaria` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandapromociones`
--

CREATE TABLE `demandapromociones` (
  `demandaidexpediente` int(10) NOT NULL,
  `demandapromocionesidpromocione` int(10) NOT NULL,
  `demandapromocionesnumexpedient` varchar(9) DEFAULT NULL,
  `demandapromocionesturnado` varchar(4) DEFAULT NULL,
  `demandapromocionesidturnado` smallint(6) DEFAULT NULL,
  `demandapromocionesfecgenero` datetime DEFAULT NULL,
  `demandapromocioneshoragenero` datetime DEFAULT NULL,
  `demandapromocionesfecpresentac` datetime DEFAULT NULL,
  `demandapromocioneshorapresenta` datetime DEFAULT NULL,
  `demandapromocionesidusuario` int(11) DEFAULT NULL,
  `demandapromocionestipoplantill` varchar(150) DEFAULT NULL,
  `demandapromocionesfecliberacio` datetime DEFAULT NULL,
  `demandapromocioneshoraliberaci` datetime DEFAULT NULL,
  `demandapromocionesnompresento` varchar(200) DEFAULT NULL,
  `demandapromocionesestado` smallint(6) DEFAULT NULL,
  `demandapromocionesidacumulado` int(11) DEFAULT NULL,
  `demandapromocionesimprocedente` bit(1) DEFAULT NULL,
  `demandapromocionescomentarios` varchar(255) DEFAULT NULL,
  `demandapromocionesopcionpromoc` smallint(6) DEFAULT NULL,
  `demandapromocionesnumoficio` varchar(20) DEFAULT NULL,
  `demandapromocionesidjunta` smallint(6) DEFAULT NULL,
  `demandapromocionesidsecretaria` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandaresoluciones`
--

CREATE TABLE `demandaresoluciones` (
  `demandaidexpediente` decimal(10,0) NOT NULL,
  `demandaresolucionesidresolucio` int(10) NOT NULL,
  `demandaresolucionesnumexpedien` varchar(9) DEFAULT NULL,
  `demandaresolucionesturnado` varchar(4) DEFAULT NULL,
  `demandaresolucionesidturnado` smallint(6) DEFAULT NULL,
  `demandaresolucionesfecgenero` datetime DEFAULT NULL,
  `demandaresolucioneshoragenero` datetime DEFAULT NULL,
  `demandaresolucionesidusuario` int(11) DEFAULT NULL,
  `demandaresolucionestipoplantil` varchar(150) DEFAULT NULL,
  `demandaresolucionesequiplibero` varchar(25) DEFAULT NULL,
  `demandaresolucionesfecliberaci` datetime DEFAULT NULL,
  `demandaresolucioneshoraliberac` datetime DEFAULT NULL,
  `demandaresolucionesestado` smallint(6) DEFAULT NULL,
  `demandaresolucionesidacumulado` int(11) DEFAULT NULL,
  `demandaresolucionesidjunta` smallint(6) DEFAULT NULL,
  `demandaresolucionesidsecretaria` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandavistos`
--

CREATE TABLE `demandavistos` (
  `demandaidexpediente` decimal(10,0) NOT NULL,
  `demandavistosidvistos` int(10) NOT NULL,
  `demandavistosnumexpediente` varchar(9) DEFAULT NULL,
  `demandavistosturnado` varchar(4) DEFAULT NULL,
  `demandavistosidturnado` smallint(6) DEFAULT NULL,
  `demandavistosfecgenero` datetime DEFAULT NULL,
  `demandavistoshoragenero` datetime DEFAULT NULL,
  `demandavistosidusuario` int(11) DEFAULT NULL,
  `demandavistosnombredocumento` smallint(6) DEFAULT NULL,
  `demandavistostipoplantilla` varchar(150) DEFAULT NULL,
  `demandavistosequiplibero` varchar(25) DEFAULT NULL,
  `demandavistosfecliberacion` datetime DEFAULT NULL,
  `demandavistoshoraliberacion` datetime DEFAULT NULL,
  `demandavistosestado` smallint(6) DEFAULT NULL,
  `demandavistoshoranota` datetime DEFAULT NULL,
  `demandavistoslapsonota` smallint(6) DEFAULT NULL,
  `demandavistosnota` varchar(150) DEFAULT NULL,
  `demandavistosacordarvarios` int(11) DEFAULT NULL,
  `demandavistosidacumulado` int(11) DEFAULT NULL,
  `demandavistosidjunta` smallint(6) DEFAULT NULL,
  `demandavistosidsecretaria` smallint(6) DEFAULT NULL,
  `demandavistosnomdemandad` varchar(255) DEFAULT NULL,
  `demandavistosnompromoven` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa`
--

CREATE TABLE `etapa` (
  `etapaidetapa` smallint(6) NOT NULL,
  `etapadescripcion` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechaultimaactualizacion`
--

CREATE TABLE `fechaultimaactualizacion` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juntas`
--

CREATE TABLE `juntas` (
  `juntasidjunta` smallint(6) NOT NULL,
  `juntasnombrejunta` varchar(100) DEFAULT NULL,
  `juntasidmunicipio` smallint(6) DEFAULT NULL,
  `juntasanioactual` smallint(6) DEFAULT NULL,
  `juntasnumdemanda` int(11) DEFAULT NULL,
  `juntassorteodemanda` bit(1) DEFAULT NULL,
  `juntassorteotitularidad` bit(1) DEFAULT NULL,
  `juntasnumcomparecencia` int(11) DEFAULT NULL,
  `juntasnumoficio` int(11) DEFAULT NULL,
  `juntasnumamparo` int(11) DEFAULT NULL,
  `juntasnumexhorto` int(11) DEFAULT NULL,
  `juntassorteoexhorto` bit(1) DEFAULT NULL,
  `juntasnumreginterior` int(11) DEFAULT NULL,
  `juntassorteoreginterior` bit(1) DEFAULT NULL,
  `juntasnumcontindividual` int(11) DEFAULT NULL,
  `juntassorteocontindividual` bit(1) DEFAULT NULL,
  `juntasnumparaprocesal` int(11) DEFAULT NULL,
  `juntassorteoparaprocesal` bit(1) DEFAULT NULL,
  `juntasnumactaadmin` int(11) DEFAULT NULL,
  `juntassorteoactaadmin` bit(1) DEFAULT NULL,
  `juntasnumsindicato` int(11) DEFAULT NULL,
  `juntassorteosindicato` bit(1) DEFAULT NULL,
  `juntasnumemplazamiento` int(11) DEFAULT NULL,
  `juntassorteoemplazamiento` bit(1) DEFAULT NULL,
  `juntasnumcontrato` int(11) DEFAULT NULL,
  `juntassorteocontrato` bit(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `puestosidpuesto` int(10) NOT NULL,
  `puestosnombrepuesto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretarias`
--

CREATE TABLE `secretarias` (
  `secretariasidsecretaria` int(10) NOT NULL,
  `secretariasnombresecretaria` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretarioturno`
--

CREATE TABLE `secretarioturno` (
  `secretarioturnoidusuario` int(11) DEFAULT NULL,
  `secretarioturnoidjunta` int(11) DEFAULT NULL,
  `secretarioturnofecha1` datetime DEFAULT NULL,
  `secretarioturnofecha2` datetime DEFAULT NULL,
  `secretarioturnoidsecretaria` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumentos`
--

CREATE TABLE `tipodocumentos` (
  `tipodocumentosidtipodocumentos` smallint(6) NOT NULL,
  `tipodocumentosdescripcion` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipojuicios`
--

CREATE TABLE `tipojuicios` (
  `tipojuiciosidtipojuicios` int(10) NOT NULL,
  `tipojuiciosdescripcion` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuariosidusuario` int(10) DEFAULT NULL,
  `usuariosnombreusuario` varchar(15) DEFAULT NULL,
  `usuariosnombre2` varchar(15) DEFAULT NULL,
  `usuariosapepaterno` varchar(15) DEFAULT NULL,
  `usuariosapematerno` varchar(15) DEFAULT NULL,
  `usuariosiniciales` varchar(4) DEFAULT NULL,
  `usuariospassword` varchar(6) DEFAULT NULL,
  `juntasidjunta` smallint(6) DEFAULT NULL,
  `secretariasidsecretaria` smallint(6) DEFAULT NULL,
  `puestosidpuesto` decimal(10,0) DEFAULT NULL,
  `usuariosfoto` varchar(50) DEFAULT NULL,
  `usuariosconsultaexpord` bit(1) DEFAULT NULL,
  `usuariosserverchat` varchar(50) DEFAULT NULL,
  `usuariosadminchat` varchar(50) DEFAULT NULL,
  `usuariosvervarioschat` bit(1) DEFAULT NULL,
  `usuariosterminacion1` bit(1) DEFAULT NULL,
  `usuariosterminacion2` bit(1) DEFAULT NULL,
  `usuariosterminacion3` bit(1) DEFAULT NULL,
  `usuariosterminacion4` bit(1) DEFAULT NULL,
  `usuariosterminacion5` bit(1) DEFAULT NULL,
  `usuariosterminacion6` bit(1) DEFAULT NULL,
  `usuariosterminacion7` bit(1) DEFAULT NULL,
  `usuariosterminacion8` bit(1) DEFAULT NULL,
  `usuariosterminacion9` bit(1) DEFAULT NULL,
  `usuariosterminacion0` bit(1) DEFAULT NULL,
  `usuariosterminacionpar` bit(1) DEFAULT NULL,
  `usuariosterminacionnon` bit(1) DEFAULT NULL,
  `usuariosfechaturnado2` datetime DEFAULT NULL,
  `usuariosfechaturnado1` datetime DEFAULT NULL,
  `usuariosfechasecreturno1` datetime DEFAULT NULL,
  `usuariosfechasecreturno2` datetime DEFAULT NULL,
  `usuariosdomiciliosecre` varchar(200) DEFAULT NULL,
  `usuariostelsecre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idArticulo`);

--
-- Indices de la tabla `demanda`
--
ALTER TABLE `demanda`
  ADD PRIMARY KEY (`demandaidexpediente`),
  ADD KEY `demandaidexpediente` (`demandaidexpediente`);

--
-- Indices de la tabla `demandaamparos`
--
ALTER TABLE `demandaamparos`
  ADD PRIMARY KEY (`demandaidexpediente`,`demandaamparosidamparo`);

--
-- Indices de la tabla `demandaaudiencias`
--
ALTER TABLE `demandaaudiencias`
  ADD PRIMARY KEY (`demandaidexpediente`,`demandaaudienciasidaudiencias`);

--
-- Indices de la tabla `demandadocumentoinicial`
--
ALTER TABLE `demandadocumentoinicial`
  ADD PRIMARY KEY (`demandaidexpediente`,`demandadocumentoinicialiddocum`);

--
-- Indices de la tabla `demandalaudos`
--
ALTER TABLE `demandalaudos`
  ADD PRIMARY KEY (`demandalaudosidlaudos`,`demandaidexpediente`);

--
-- Indices de la tabla `demandanotificacion`
--
ALTER TABLE `demandanotificacion`
  ADD PRIMARY KEY (`demandaidexpediente`,`demandanotificacionidnotificac`);

--
-- Indices de la tabla `demandanotificacionlista`
--
ALTER TABLE `demandanotificacionlista`
  ADD PRIMARY KEY (`demandaidexpediente`,`demandanotificacionlistaidnotificac`);

--
-- Indices de la tabla `demandaoficios`
--
ALTER TABLE `demandaoficios`
  ADD PRIMARY KEY (`demandaidexpediente`,`demandaoficiosidoficios`);

--
-- Indices de la tabla `demandapromociones`
--
ALTER TABLE `demandapromociones`
  ADD PRIMARY KEY (`demandaidexpediente`,`demandapromocionesidpromocione`);

--
-- Indices de la tabla `demandaresoluciones`
--
ALTER TABLE `demandaresoluciones`
  ADD PRIMARY KEY (`demandaidexpediente`,`demandaresolucionesidresolucio`);

--
-- Indices de la tabla `demandavistos`
--
ALTER TABLE `demandavistos`
  ADD PRIMARY KEY (`demandaidexpediente`,`demandavistosidvistos`);

--
-- Indices de la tabla `etapa`
--
ALTER TABLE `etapa`
  ADD PRIMARY KEY (`etapaidetapa`);

--
-- Indices de la tabla `fechaultimaactualizacion`
--
ALTER TABLE `fechaultimaactualizacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juntas`
--
ALTER TABLE `juntas`
  ADD PRIMARY KEY (`juntasidjunta`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`puestosidpuesto`);

--
-- Indices de la tabla `secretarias`
--
ALTER TABLE `secretarias`
  ADD PRIMARY KEY (`secretariasidsecretaria`);

--
-- Indices de la tabla `tipodocumentos`
--
ALTER TABLE `tipodocumentos`
  ADD PRIMARY KEY (`tipodocumentosidtipodocumentos`);

--
-- Indices de la tabla `tipojuicios`
--
ALTER TABLE `tipojuicios`
  ADD PRIMARY KEY (`tipojuiciosidtipojuicios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `demanda`
--
ALTER TABLE `demanda`
  MODIFY `demandaidexpediente` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `demandaamparos`
--
ALTER TABLE `demandaamparos`
  MODIFY `demandaamparosidamparo` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `demandaaudiencias`
--
ALTER TABLE `demandaaudiencias`
  MODIFY `demandaaudienciasidaudiencias` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `demandadocumentoinicial`
--
ALTER TABLE `demandadocumentoinicial`
  MODIFY `demandadocumentoinicialiddocum` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `demandalaudos`
--
ALTER TABLE `demandalaudos`
  MODIFY `demandalaudosidlaudos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `demandanotificacion`
--
ALTER TABLE `demandanotificacion`
  MODIFY `demandanotificacionidnotificac` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `demandanotificacionlista`
--
ALTER TABLE `demandanotificacionlista`
  MODIFY `demandanotificacionlistaidnotificac` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `demandaoficios`
--
ALTER TABLE `demandaoficios`
  MODIFY `demandaoficiosidoficios` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `demandapromociones`
--
ALTER TABLE `demandapromociones`
  MODIFY `demandapromocionesidpromocione` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `demandaresoluciones`
--
ALTER TABLE `demandaresoluciones`
  MODIFY `demandaresolucionesidresolucio` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `demandavistos`
--
ALTER TABLE `demandavistos`
  MODIFY `demandavistosidvistos` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fechaultimaactualizacion`
--
ALTER TABLE `fechaultimaactualizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `juntas`
--
ALTER TABLE `juntas`
  MODIFY `juntasidjunta` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `puestosidpuesto` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `secretarias`
--
ALTER TABLE `secretarias`
  MODIFY `secretariasidsecretaria` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipodocumentos`
--
ALTER TABLE `tipodocumentos`
  MODIFY `tipodocumentosidtipodocumentos` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipojuicios`
--
ALTER TABLE `tipojuicios`
  MODIFY `tipojuiciosidtipojuicios` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
