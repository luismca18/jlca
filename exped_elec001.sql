SELECT  demandaidexpediente as idExped,  demandaamparosidamparo as idAmparo, demandaamparosidjunta as idJunta, demandaamparosidsecretaria as idsecre,
  demandaamparosnumamparo as numAmparo, demandaamparosnumexpediente as numExped, demandaamparosfecpresentacion as fecPresenta, demandaamparoshorapresentacion as horPresenta,
  demandaamparosfecacuerdo as fecAcuerdo, demandaamparoshoraacuerdo as horaAcuerdo, demandaamparostipoamparo as tipoAmparo, demandaamparosresultado as resulAmparo,
  demandaamparosjuzgado as ampJuzgado, demandaamparosnompresento as nomPresento
FROM demandaamparos where demandaamparosnumexpediente= $numExped  demandaamparosidjunta = $idJunta

-- --------------------------------------------------------

SELECT demandaidexpediente as idExped,  demandaaudienciasidaudiencias as idAudi, demandaaudienciasnumexpediente as numExped, demandaaudienciasfecpresentaci as fecPresenta,
  demandaaudienciashorapresentac as horPresenta, demandaaudienciasfecgenero as fecGenero, demandaaudienciashoragenero as horGenero, demandaaudienciasturnado as turnado,
  demandaaudienciasidturnado as idTurnado, demandaaudienciastipoplantilla as tipoPlant, demandaaudienciasestado as estado, demandaaudienciasfecliberacion as fecLibero,
  demandaaudienciashoraliberacio as horLibero, demandaaudienciasfeclista as fecLista, demandaaudienciasidacumulado as idAcum, motivodiferidodescripcion as motDiref,
  demandaaudienciastipoaudiencia as tipoAudi, demandaaudienciasidjunta as idJunta, demandaaudienciasidsecretaria as idsecre FROM demandaaudiencias 
where demandaaudienciasnumexpediente= $numExped demandaaudienciasidjunta = $idJunta

-- --------------------------------------------------------

SELECT demandaidexpediente as idExped, demandapromocionesidpromocione as idPromo, demandapromocionesnumexpedient as numExped, demandapromocionesturnado as turnado,
  demandapromocionesidturnado as idTurnado, demandapromocionesfecgenero as fecGenero, demandapromocioneshoragenero as horGenero, demandapromocionesfecpresentac as fecPresenta,
  demandapromocioneshorapresenta as horPresenta, demandapromocionestipoplantill as tipoPlant, demandapromocionesfecliberacio as fecLibero, 
  demandapromocioneshoraliberaci as horLibero, demandapromocionesnompresento as nomPresento, demandapromocionesestado as estado, demandapromocionesidacumulado as idAcum,
  demandapromocionesimprocedente as improce, demandapromocionesidjunta as idJunta,  demandapromocionesidsecretaria as idSecre FROM demandapromociones 
where  demandapromocionesnumexpedient= $numExped demandapromocionesidjunta = $idJunta

-- --------------------------------------------------------

SELECT demandaidexpediente as idExped, demandavistosidvistos as idVisto, demandavistosnumexpediente as numExped, demandavistosturnado as turnado,
  demandavistosidturnado as idTurnado, demandavistosfecgenero as fecGenero, demandavistoshoragenero as horGenero,  demandavistosidusuario as idUsuario,
  demandavistosnombredocumento as nombreDocu, demandavistostipoplantilla as tipoPlant, demandavistosfecliberacion as fecLibero, demandavistoshoraliberacion as horLibero, 
  demandavistosestado as estado, demandavistosidacumulado as idAcum, demandavistosidjunta as idJunta, demandavistosidsecretaria as idsecre FROM demandavistos 
  where demandavistosnumexpediente = $numExped demandavistosidjunta = $idJunta

-- --------------------------------------------------------

SELECT demandaidexpediente AS idExped, demandaresolucionesidresolucio as idReso, demandaresolucionesnumexpedien as numExped, demandaresolucionesturnado as turnado,
  demandaresolucionesidturnado as idTurnado, demandaresolucionesfecgenero as fecGenero, demandaresolucioneshoragenero as horGenero, demandaresolucionesidusuario as idUsuario,
  demandaresolucionestipoplantil as tipoPlant, demandaresolucionesfecliberaci as fecLibero, demandaresolucioneshoraliberac as horLibero, demandaresolucionesestado as  estado,
  demandaresolucionesidacumulado as idAcum, demandaresolucionesidjunta as idJunta, demandaresolucionesidsecretaria as idSecre FROM demandaresoluciones
where demandaresolucionesnumexpedien= $numExped demandaresolucionesidjunta= $idJunta

-- --------------------------------------------------------

SELECT demandaidexpediente as idExped,  demandalaudosidlaudos as idLaudo, demandalaudosfecpresentacion as fecPresenta, demandalaudoshorapresentacion as horPresenta, 
  demandalaudosfecgenero  as fecGenero, demandalaudoshoragenero as horGenero, demandalaudosidjunta as idJunta,  demandalaudosidsecretaria  as idSecre,  
  demandalaudosturnado as turnado, demandalaudosidturnado as idTurnado, demandalaudostipoplantilla as tipoPlant, demandalaudosestado as estado, 
  demandalaudosfecliberacion as fecLibero, demandalaudoshoraliberacion   as horLibero, demandalaudossintesis as sintesis, demandalaudosfeclista as fecLista,
  demandalaudosidacumulado   as idAcum, demandalaudosnumexpediente as numExped FROM demandalaudos 
  where demandalaudosnumexpediente= $numExped demandalaudosidjunta= $idJunta

-- --------------------------------------------------------

SELECT  demandaidexpediente as idExped, demandaoficiosidoficios as idOficio, demandaoficiosnumexpediente as numExped, demandaoficiosturnado as turnado,
  demandaoficiosidturnado as idTurnado, demandaoficiosfecgenero as fecGenero, demandaoficioshoragenero as horGenero, demandaoficiosnumoficio as numOficio,
  demandaoficiosaniooficio as anioOficio, demandaoficiosdirigidooficina as dirOficina, demandaoficiosdirigidopersona as dirPersona, demandaoficioslocalidad as localidad,
  demandaoficiosidusuario as idUsuario, demandaoficiostipoplantilla as tipoPlant, demandaoficiosfecliberacion as fecLibero, demandaoficioshoraliberacion as horLibero,
  demandaoficiosestado as estado, demandaoficiosidacumulado as idAcum, demandaoficiosidjunta as idJunta, demandaoficiosidsecretaria as idSecre FROM demandaoficios 
where demandaoficiosnumexpediente= $numExped demandaoficiosidjunta= $idJunta



-- --------------------------------------------------------

SELECT  demandaidexpediente as idExped, demandadocumentoinicialidjunta as idJunta, demandadocumentoinicialidsecretaria as idSecre, demandadocumentoinicialiddocum as idRadica,
  demandadocumentoinicialnumexpe as numExped, demandadocumentoinicialturnado as turnado, demandadocumentoinicialidturna as idTurnado, 
  demandadocumentoinicialfecgene as fecGenero, demandadocumentoinicialhoragen as horGenero, demandadocumentoinicialfecpres as fecPresenta, 
  demandadocumentoinicialhorapre as horPresenta, demandadocumentoinicialespreve as esPrevencion, demandadocumentoinicialnombred as nombreDocu,
  demandadocumentoinicialtipopla as tipoPlant,   demandadocumentoinicialfeclibe as fecLibero, demandadocumentoinicialhoralib as horLibero, 
  demandadocumentoinicialnompres as nomPresento, demandadocumentoinicialestado as estado FROM demandadocumentoinicial 
  where  demandadocumentoinicialnumexpe= $numExped demandadocumentoinicialidjunta= $idJunta

-- --------------------------------------------------------

SELECT demandaidexpediente as idExped,  demandanotificacionidnotificac as idNotifica, demandanotificacionidjunta as idJunta,  demandanotificacionidsecretaria as idSecre,
  demandanotificacionnumexpedien as numExped,  demandanotificacionfecha as fecha,  demandanotificaciondescripcion as notiDescrip, demandanotificaciongeneral as notiGeneral,
  demandanotificacionfechaelaboracion as fecElabora
FROM demandanotificacion where  demandanotificacionnumexpedien= $numExped demandanotificacionidjunta= $idJunta

-- --------------------------------------------------------

SELECT  
  demandaidexpediente as idExped, demandanotificacionlistaidnotificac as idNotifica, demandanotificacionlistaidjunta as idJunta, demandanotificacionlistaidsecretaria  as idSecre,
  demandanotificacionlistanumexpedien as numExped, demandanotificacionlistafecha as fecLista, demandanotificacionlistadescripcion as descripLista,
  demandanotificacionlistageneral as general, demandanotificacionlistafechaelaboracion as fecElabora
FROM demandanotificacionlista where demandanotificacionlistanumexpedien= $numExped demandanotificacionlistaidjunta= $idJunta





