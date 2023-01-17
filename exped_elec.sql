SELECT  
  `demandaidexpediente`,
  `demandaamparosidamparo`,
  `demandaamparosidjunta`,
  `demandaamparosidsecretaria`,
  `demandaamparosnumamparo`,
  `demandaamparosnumexpediente`,
  `demandaamparosfecpresentacion`,
  `demandaamparoshorapresentacion`,
  `demandaamparosfecacuerdo`,
  `demandaamparoshoraacuerdo`,
  `demandaamparostipoamparo`,
  `demandaamparosresultado`,
  `demandaamparosjuzgado`,
  `demandaamparosnompresento`
FROM `demandaamparos`

SELECT  
  `demandaidexpediente`,
  `demandaaudienciasidaudiencias`,
  `demandaaudienciasnumexpediente` ,
  `demandaaudienciasfecpresentaci`,
  `demandaaudienciashorapresentac`,
  `demandaaudienciasfecgenero`,
  `demandaaudienciashoragenero`,
  `demandaaudienciasturnado`,
  `demandaaudienciasidturnado`,
  `demandaaudienciastipoplantilla`,
  `demandaaudienciasestado`,
  `demandaaudienciasfecliberacion`,
  `demandaaudienciashoraliberacio`,
  `demandaaudienciasfeclista`,
  `demandaaudienciasidacumulado`,
  `motivodiferidodescripcion`,
  `demandaaudienciastipoaudiencia`,
  `demandaaudienciasidjunta`,
  `demandaaudienciasidsecretaria`
FROM `demandaaudiencias`

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandadocumentoinicial`
--

SELECT  
  `demandaidexpediente`,
  `demandadocumentoinicialidjunta`,
  `demandadocumentoinicialidsecretaria`,
  `demandadocumentoinicialiddocum`,
  `demandadocumentoinicialnumexpe` ,
  `demandadocumentoinicialturnado`,
  `demandadocumentoinicialidturna`,
  `demandadocumentoinicialfecgene`,
  `demandadocumentoinicialhoragen`,
  `demandadocumentoinicialfecpres`,
  `demandadocumentoinicialhorapre`,
  `demandadocumentoinicialespreve`,
  `demandadocumentoinicialnombred`,
  `demandadocumentoinicialtipopla`,
  `demandadocumentoinicialfeclibe`,
  `demandadocumentoinicialhoralib`,
  `demandadocumentoinicialnompres`,
  `demandadocumentoinicialestado`
FROM `demandadocumentoinicial`

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandalaudos`
--

SELECT  
  `demandaidexpediente`,
  `demandalaudosidlaudos`,
  `demandalaudosfecpresentacion`,
  `demandalaudoshorapresentacion`,
  `demandalaudosfecgenero`,
  `demandalaudoshoragenero`,
  `demandalaudosidjunta`,
  `demandalaudosidsecretaria`,
  `demandalaudosturnado`,
  `demandalaudosidturnado`,
  `demandalaudostipoplantilla`,
  `demandalaudosestado`,
  `demandalaudosfecliberacion`,
  `demandalaudoshoraliberacion`,
  `demandalaudossintesis`,
  `demandalaudosfeclista`,
  `demandalaudosidacumulado`,
  `demandalaudosnumexpediente`
FROM `demandalaudos`

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandanotificacion`
--

SELECT  
  `demandaidexpediente`,
  `demandanotificacionidnotificac`,
  `demandanotificacionidjunta`,
  `demandanotificacionidsecretaria`,
  `demandanotificacionnumexpedien`,
  `demandanotificacionfecha`,
  `demandanotificaciondescripcion`,
  `demandanotificaciongeneral`,
  `demandanotificacionfechaelaboracion`,
FROM `demandanotificacion`

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandanotificacionlista`
--

SELECT  
  `demandaidexpediente`,
  `demandanotificacionlistaidnotificac`,
  `demandanotificacionlistaidjunta`,
  `demandanotificacionlistaidsecretaria`,
  `demandanotificacionlistanumexpedien`,
  `demandanotificacionlistafecha`,
  `demandanotificacionlistadescripcion`,
  `demandanotificacionlistageneral`,
  `demandanotificacionlistafechaelaboracion`,
FROM `demandanotificacionlista`

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandaoficios`
--

SELECT  
  `demandaidexpediente`,
  `demandaoficiosidoficios`,
  `demandaoficiosnumexpediente`,
  `demandaoficiosturnado`,
  `demandaoficiosidturnado`,
  `demandaoficiosfecgenero`,
  `demandaoficioshoragenero`,
  `demandaoficiosnumoficio`,
  `demandaoficiosaniooficio`,
  `demandaoficiosdirigidooficina`,
  `demandaoficiosdirigidopersona`,
  `demandaoficioslocalidad`,
  `demandaoficiosidusuario`,
  `demandaoficiostipoplantilla`,
  `demandaoficiosequiplibero`,
  `demandaoficiosfecliberacion`,
  `demandaoficioshoraliberacion`,
  `demandaoficiosestado`,
  `demandaoficiosidacumulado`,
  `demandaoficiosidjunta`,
  `demandaoficiosidsecretaria`
FROM `demandaoficios`

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandapromociones`
--

SELECT  
  `demandaidexpediente`,
  `demandapromocionesidpromocione`,
  `demandapromocionesnumexpedient`,
  `demandapromocionesturnado`,
  `demandapromocionesidturnado`,
  `demandapromocionesfecgenero`,
  `demandapromocioneshoragenero`,
  `demandapromocionesfecpresentac`,
  `demandapromocioneshorapresenta`,
  `demandapromocionesidusuario`,
  `demandapromocionestipoplantill`,
  `demandapromocionesfecliberacio`,
  `demandapromocioneshoraliberaci`,
  `demandapromocionesnompresento`,
  `demandapromocionesestado`,
  `demandapromocionesidacumulado`,
  `demandapromocionesimprocedente`,
  `demandapromocionescomentarios`,
  `demandapromocionesopcionpromoc`,
  `demandapromocionesnumoficio`,
  `demandapromocionesidjunta`,
  `demandapromocionesidsecretaria`
FROM `demandapromociones`
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandaresoluciones`
--

SELECT 
  `demandaidexpediente`,
  `demandaresolucionesidresolucio`,
  `demandaresolucionesnumexpedien`,
  `demandaresolucionesturnado`,
  `demandaresolucionesidturnado`,
  `demandaresolucionesfecgenero`,
  `demandaresolucioneshoragenero`,
  `demandaresolucionesidusuario`,
  `demandaresolucionestipoplantil`,
  `demandaresolucionesequiplibero`,
  `demandaresolucionesfecliberaci`,
  `demandaresolucioneshoraliberac`,
  `demandaresolucionesestado`,
  `demandaresolucionesidacumulado`,
  `demandaresolucionesidjunta`,
  `demandaresolucionesidsecretaria`
FROM `demandaresoluciones` 

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandavistos`
--

SELECT  
  `demandaidexpediente`,
  `demandavistosidvistos`,
  `demandavistosnumexpediente`,
  `demandavistosturnado`,
  `demandavistosidturnado`,
  `demandavistosfecgenero`,
  `demandavistoshoragenero`,
  `demandavistosidusuario`,
  `demandavistosnombredocumento`,
  `demandavistostipoplantilla`,
  `demandavistosequiplibero`,
  `demandavistosfecliberacion`,
  `demandavistoshoraliberacion`,
  `demandavistosestado`,
  `demandavistoshoranota`,
  `demandavistoslapsonota`,
  `demandavistosnota`,
  `demandavistosacordarvarios`,
  `demandavistosidacumulado`,
  `demandavistosidjunta`,
  `demandavistosidsecretaria`,
  `demandavistosnomdemandad`,
  `demandavistosnompromoven` 
  FROM `demandavistos`