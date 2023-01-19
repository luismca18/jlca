<?php

require_once "conexion.php";

class ModeloJlca{

	
	static public function mdlAsignacion($fecha,$hora)	{

		if($fecha != null && $hora!= null){

			$stmt = Conexion::conectar()->prepare("SELECT demandanumexpediente AS expediente,juntas.juntasnombrejunta as junta,etapa.etapadescripcion as etapa,secretarias.secretariasnombresecretaria as secretaria,demandaubicacion as ubicacion, demandanompresento as presento,concat(demandanompromovent,' ',demandaapepatpromov,' ',demandaapematpromov) as promovente,if(demandatipodemandado=1,demandamoraldemandad,concat(demandanomdemandado,' ',demandaapepatdemanda,' ' ,demandaapematdemanda)) as demandado FROM demanda LEFT join juntas on demanda.juntasidjunta=juntas.juntasidjunta left join etapa on demanda.demandaetapa=etapa.etapaidetapa left join secretarias on demanda.secretariasidsecretaria=secretarias.secretariasidsecretaria WHERE DATE_FORMAT(demandafechapresentacion, '%Y-%m-%d')='".$fecha."'  and  demandahorapresentacion='".$hora."'  LIMIT 1");
			//$stmt->bindParam(":$fecha", $fecha, PDO::PARAM_STR);
			//$stmt->bindParam(":$hora", $hora, PDO::PARAM_STR);
			$stmt->execute();

			return $stmt -> fetchAll();
		}else{
			return "error";
		}

	}

	static public function mdlSecretario($idJunta)	{

		if($idJunta != null ){

			$stmt = Conexion::conectar()->prepare("SELECT CONCAT_WS(' ',trim(`usuariosnombreusuario`),trim(`usuariosnombre2`), trim(`usuariosapepaterno`),trim(`usuariosapematerno`)) AS NombreSecretario,`usuariosdomiciliosecre`,`usuariostelsecre`, DATE_FORMAT(secretarioturno.secretarioturnofecha1, '%d-%m-%Y') AS secretarioturnofecha1, DATE_FORMAT(secretarioturno.secretarioturnofecha2, '%d-%m-%Y') AS secretarioturnofecha2,secretarias.secretariasnombresecretaria as secretaria from usuarios left join secretarioturno ON usuarios.usuariosidusuario= secretarioturno.secretarioturnoidusuario left join secretarias on usuarios.secretariasidsecretaria=secretarias.secretariasidsecretaria WHERE JuntasIdJunta=$idJunta AND PuestosIdPuesto=2 AND DATE_FORMAT(secretarioturno.secretarioturnofecha1, '%Y-%m-%d')<=DATE_FORMAT(date(now()), '%Y-%m-%d') AND DATE_FORMAT(secretarioturno.secretarioturnofecha2 , '%Y-%m-%d')>=DATE_FORMAT(date(now()), '%Y-%m-%d') limit 1;");
			//$stmt->bindParam(":$fecha", $fecha, PDO::PARAM_STR);
			//$stmt->bindParam(":$hora", $hora, PDO::PARAM_STR);
			$stmt->execute();

			return $stmt -> fetchAll();
		}else{
			return "error";
		}

	}


	static public function mdlLstAudiencias( $idJunta, $Sec, $fecha)	{

 		$stmt = Conexion::conectar()->prepare("SELECT `demandaaudienciasnumexpediente` as numexped,DATE_FORMAT(`demandaaudienciasfecpresentaci`,'%d/%m/%Y') as fecha, DATE_FORMAT(`demandaaudienciashorapresentac`, '%r') as hora,  `demandaaudienciastipoaudiencia` as tipo, demanda.demandapromoventes as promovente, demanda.demandademandados as demandado, secretarias.secretariasnombresecretaria as secretaria FROM `demandaaudiencias` left join demanda on demandaaudiencias.demandaaudienciasnumexpediente=demanda.demandanumexpediente and demandaaudiencias.demandaaudienciasidjunta =demanda.juntasidjunta left join secretarias on demandaaudiencias.demandaaudienciasidsecretaria=secretarias.secretariasidsecretaria where demandaaudienciasidsecretaria=:Sec  and demandaaudienciasidjunta=:idJunta and  demandaaudienciasfecpresentaci=:fecha ORDER BY demandaaudienciasfecpresentaci, demandaaudienciashorapresentac;");
			//	`demandaaudienciasturnado`, `demandaaudienciasidjunta`,
			$stmt->bindParam(":Sec", $Sec, PDO::PARAM_INT);
			$stmt->bindParam(":idJunta", $idJunta, PDO::PARAM_INT);
			$stmt->bindParam(":fecha", $fecha, PDO::PARAM_STR);
			
			$stmt->execute();

			return $stmt -> fetchAll();
		
			//return "error";
		

	}


	static public function mdlLstNotificacion( $idJunta, $Sec, $fecha)	{
		//demandanotificacionlistadescripcion,
 		$stmt = Conexion::conectar()->prepare("SELECT demandanotificacionlistanumexpedien AS numexped, DATE_FORMAT(`demandanotificacionlistafecha`,'%d/%m/%Y') as fecha, DATE_FORMAT(`demandanotificacionlistafechaelaboracion`,'%d/%m/%Y') as fechaElabora, demandanotificacionlistageneral as tipo, demanda.demandapromoventes as promovente, demanda.demandademandados as demandado, secretarias.secretariasnombresecretaria as secretaria FROM demandanotificacionlista left join demanda on demandanotificacionlista.demandanotificacionlistanumexpedien=demanda.demandanumexpediente and demandanotificacionlista.demandanotificacionlistaidjunta =demanda.juntasidjunta left join secretarias on demandanotificacionlista.demandanotificacionlistaidsecretaria=secretarias.secretariasidsecretaria where `demandanotificacionlistaidjunta`=:idJunta and `demandanotificacionlistaidsecretaria`=:Sec and `demandanotificacionlistafecha`=:fecha ORDER BY demandanotificacionlistageneral;");
			//	`demandaaudienciasturnado`, `demandaaudienciasidjunta`,
			$stmt->bindParam(":Sec", $Sec, PDO::PARAM_INT);
			$stmt->bindParam(":idJunta", $idJunta, PDO::PARAM_INT);
			$stmt->bindParam(":fecha", $fecha, PDO::PARAM_STR);
			
			$stmt->execute();

			return $stmt -> fetchAll();
		
			//return "error";
		

	}


	static public function mdExpdAudiencias($idJunta, $expediente)	{

		//if($Opc ==2 ){

			$stmt = Conexion::conectar()->prepare("SELECT `demandaaudienciasnumexpediente` as numexped,DATE_FORMAT(`demandaaudienciasfecpresentaci`,'%d/%m/%Y') as fecha, DATE_FORMAT(`demandaaudienciashorapresentac`, '%r') as hora,  `demandaaudienciastipoaudiencia` as tipo, demanda.demandapromoventes as promovente, demanda.demandademandados as demandado, secretarias.secretariasnombresecretaria as secretaria FROM `demandaaudiencias` left join demanda on demandaaudiencias.demandaaudienciasnumexpediente=demanda.demandanumexpediente and demandaaudiencias.demandaaudienciasidjunta =demanda.juntasidjunta left join secretarias on demandaaudiencias.demandaaudienciasidsecretaria=secretarias.secretariasidsecretaria where demandaaudienciasnumexpediente=:expediente and demandaaudienciasidjunta=:idJunta  and demandaaudienciasfecpresentaci>=now()  ORDER BY demandaaudienciasfecpresentaci, demandaaudienciashorapresentac;");
			//	`demandaaudienciasturnado`, `demandaaudienciasidjunta`,
			
			$stmt->bindParam(":idJunta", $idJunta, PDO::PARAM_INT);
			$stmt->bindParam(":expediente", $expediente, PDO::PARAM_STR);
			
			$stmt->execute();

			return $stmt -> fetchAll();
		//}else{
		//	return "error";
		//}

	}

	static public function mdlExpediente($expediente,$junta)	{

		if($expediente != null && $junta!= null){

			$stmt = Conexion::conectar()->prepare("SELECT T1.demandaidexpediente as idExped, T2.secretariasnombresecretaria AS Secretaria, `demandatipoconflicto` as TipoJuicio, CONCAT_WS('/',SUBSTR(demandanumexpediente, 1, 5),SUBSTR(demandanumexpediente, 6, 4)) AS Expediente , `juntasidjunta`, date_format(`demandafechapresentacion`, '%d-%m-%Y') as Fecha, date_format(`demandahorapresentacion`, '%r') as Hora, `demandaubicacion` as Ubicacion, t3.etapadescripcion as Etapa, `demandanompresento` as Presento, `demandapromoventes` as Promovente, `demandademandados` as Demandado FROM `demanda` as T1 LEFT join `secretarias` AS T2 on T1.secretariasidsecretaria=T2.secretariasidsecretaria left join etapa as T3 on T1.demandaetapa=t3.etapaidetapa where T1.demandanumexpediente=$expediente and T1.juntasidjunta=$junta limit 1;");
			//$stmt->bindParam(":$fecha", $fecha, PDO::PARAM_STR);
			//$stmt->bindParam(":$hora", $hora, PDO::PARAM_STR);
			$stmt->execute();

			return $stmt -> fetchAll();
		}else{
			return "error";
		}

	}	

	static public function mdlAmparos($idExped)	{

		if($idExped != null){

			$stmt = Conexion::conectar()->prepare("SELECT  demandaidexpediente as idExped,  demandaamparosidamparo as idAmparo, demandaamparosidjunta as idJunta, demandaamparosidsecretaria as idsecre,
			demandaamparosnumamparo as numAmparo, demandaamparosnumexpediente as numExped, demandaamparosfecpresentacion as fecPresenta, demandaamparoshorapresentacion as horPresenta,
			demandaamparosfecacuerdo as fecAcuerdo, demandaamparoshoraacuerdo as horaAcuerdo, demandaamparostipoamparo as tipoAmparo, demandaamparosresultado as resulAmparo,
			demandaamparosjuzgado as ampJuzgado, demandaamparosnompresento as nomPresento FROM demandaamparos 
			where demandaidexpediente=$idExped");
			//$stmt->bindParam(":$fecha", $fecha, PDO::PARAM_STR);
			//$stmt->bindParam(":$hora", $hora, PDO::PARAM_STR);
			$stmt->execute();

			return $stmt -> fetchAll();
		}else{
			return "error";
		}

	}	

	static public function mdlAudiencias($idExped)	{

		if($idExped != null){

			$stmt = Conexion::conectar()->prepare("SELECT demandaidexpediente as idExped,  demandaaudienciasidaudiencias as idAudi, demandaaudienciasnumexpediente as numExped, demandaaudienciasfecpresentaci as fecPresenta,
			demandaaudienciashorapresentac as horPresenta, demandaaudienciasfecgenero as fecGenero, demandaaudienciashoragenero as horGenero, demandaaudienciasturnado as turnado,
			demandaaudienciasidturnado as idTurnado, demandaaudienciastipoplantilla as tipoPlant, demandaaudienciasestado as estado, demandaaudienciasfecliberacion as fecLibero,
			demandaaudienciashoraliberacio as horLibero, demandaaudienciasfeclista as fecLista, demandaaudienciasidacumulado as idAcum, motivodiferidodescripcion as motDiref,
			demandaaudienciastipoaudiencia as tipoAudi, demandaaudienciasidjunta as idJunta, demandaaudienciasidsecretaria as idsecre FROM demandaaudiencias  
			where demandaidexpediente=$idExped");
			//$stmt->bindParam(":$fecha", $fecha, PDO::PARAM_STR);
			//$stmt->bindParam(":$hora", $hora, PDO::PARAM_STR);
			$stmt->execute();

			return $stmt -> fetchAll();
		}else{
			return "error";
		}

	}	

	static public function mdlPromociones($idExped)	{

		if($idExped != null){

			$stmt = Conexion::conectar()->prepare(" SELECT demandaidexpediente as idExped, demandapromocionesidpromocione as idPromo, demandapromocionesnumexpedient as numExped, demandapromocionesturnado as turnado,
			demandapromocionesidturnado as idTurnado, demandapromocionesfecgenero as fecGenero, demandapromocioneshoragenero as horGenero, demandapromocionesfecpresentac as fecPresenta,
			demandapromocioneshorapresenta as horPresenta, demandapromocionestipoplantill as tipoPlant, demandapromocionesfecliberacio as fecLibero, 
			demandapromocioneshoraliberaci as horLibero, demandapromocionesnompresento as nomPresento, demandapromocionesestado as estado, demandapromocionesidacumulado as idAcum,
			demandapromocionesimprocedente as improce, demandapromocionesidjunta as idJunta,  demandapromocionesidsecretaria as idSecre FROM demandapromociones 
			where demandaidexpediente=$idExped");
			//$stmt->bindParam(":$fecha", $fecha, PDO::PARAM_STR);
			//$stmt->bindParam(":$hora", $hora, PDO::PARAM_STR);
			$stmt->execute();

			return $stmt -> fetchAll();
		}else{
			return "error";
		}

	}	

	static public function mdlVistos($idExped)	{

		if($idExped != null){

			$stmt = Conexion::conectar()->prepare(" SELECT demandaidexpediente as idExped, demandavistosidvistos as idVisto, demandavistosnumexpediente as numExped, demandavistosturnado as turnado,
			demandavistosidturnado as idTurnado, demandavistosfecgenero as fecGenero, demandavistoshoragenero as horGenero,  demandavistosidusuario as idUsuario,
			demandavistosnombredocumento as nombreDocu, demandavistostipoplantilla as tipoPlant, demandavistosfecliberacion as fecLibero, demandavistoshoraliberacion as horLibero, 
			demandavistosestado as estado, demandavistosidacumulado as idAcum, demandavistosidjunta as idJunta, demandavistosidsecretaria as idsecre FROM demandavistos 
			where demandaidexpediente=$idExped");
			//$stmt->bindParam(":$fecha", $fecha, PDO::PARAM_STR);
			//$stmt->bindParam(":$hora", $hora, PDO::PARAM_STR);
			$stmt->execute();

			return $stmt -> fetchAll();
		}else{
			return "error";
		}

	}	

	static public function mdlResoluciones($idExped)	{

		if($idExped != null){

			$stmt = Conexion::conectar()->prepare("SELECT demandaidexpediente AS idExped, demandaresolucionesidresolucio as idReso, demandaresolucionesnumexpedien as numExped, demandaresolucionesturnado as turnado,
			demandaresolucionesidturnado as idTurnado, demandaresolucionesfecgenero as fecGenero, demandaresolucioneshoragenero as horGenero, demandaresolucionesidusuario as idUsuario,
			demandaresolucionestipoplantil as tipoPlant, demandaresolucionesfecliberaci as fecLibero, demandaresolucioneshoraliberac as horLibero, demandaresolucionesestado as  estado,
			demandaresolucionesidacumulado as idAcum, demandaresolucionesidjunta as idJunta, demandaresolucionesidsecretaria as idSecre FROM demandaresoluciones 
			where demandaidexpediente=$idExped");
			//$stmt->bindParam(":$fecha", $fecha, PDO::PARAM_STR);
			//$stmt->bindParam(":$hora", $hora, PDO::PARAM_STR);
			$stmt->execute();

			return $stmt -> fetchAll();
		}else{
			return "error";
		}

	}	

	static public function mdlLaudos($idExped)	{

		if($idExped != null){

			$stmt = Conexion::conectar()->prepare("SELECT demandaidexpediente as idExped,  demandalaudosidlaudos as idLaudo, demandalaudosfecpresentacion as fecPresenta, demandalaudoshorapresentacion as horPresenta, 
			demandalaudosfecgenero  as fecGenero, demandalaudoshoragenero as horGenero, demandalaudosidjunta as idJunta,  demandalaudosidsecretaria  as idSecre,  
			demandalaudosturnado as turnado, demandalaudosidturnado as idTurnado, demandalaudostipoplantilla as tipoPlant, demandalaudosestado as estado, 
			demandalaudosfecliberacion as fecLibero, demandalaudoshoraliberacion   as horLibero, demandalaudossintesis as sintesis, demandalaudosfeclista as fecLista,
			demandalaudosidacumulado   as idAcum, demandalaudosnumexpediente as numExped FROM demandalaudos  
			where demandaidexpediente=$idExped");
			//$stmt->bindParam(":$fecha", $fecha, PDO::PARAM_STR);
			//$stmt->bindParam(":$hora", $hora, PDO::PARAM_STR);
			$stmt->execute();

			return $stmt -> fetchAll();
		}else{
			return "error";
		}

	}	

	static public function mdlOficios($idExped)	{

		if($idExped != null){

			$stmt = Conexion::conectar()->prepare("SELECT  demandaidexpediente as idExped, demandaoficiosidoficios as idOficio, demandaoficiosnumexpediente as numExped, demandaoficiosturnado as turnado,
			demandaoficiosidturnado as idTurnado, demandaoficiosfecgenero as fecGenero, demandaoficioshoragenero as horGenero, demandaoficiosnumoficio as numOficio,
			demandaoficiosaniooficio as anioOficio, demandaoficiosdirigidooficina as dirOficina, demandaoficiosdirigidopersona as dirPersona, demandaoficioslocalidad as localidad,
			demandaoficiosidusuario as idUsuario, demandaoficiostipoplantilla as tipoPlant, demandaoficiosfecliberacion as fecLibero, demandaoficioshoraliberacion as horLibero,
			demandaoficiosestado as estado, demandaoficiosidacumulado as idAcum, demandaoficiosidjunta as idJunta, demandaoficiosidsecretaria as idSecre FROM demandaoficios  
			where demandaidexpediente=$idExped");
			//$stmt->bindParam(":$fecha", $fecha, PDO::PARAM_STR);
			//$stmt->bindParam(":$hora", $hora, PDO::PARAM_STR);
			$stmt->execute();

			return $stmt -> fetchAll();
		}else{
			return "error";
		}

	}	

	static public function mdlRadicacion($idExped)	{

		if($idExped != null){

			$stmt = Conexion::conectar()->prepare(" SELECT  demandaidexpediente as idExped, demandadocumentoinicialidjunta as idJunta, demandadocumentoinicialidsecretaria as idSecre, demandadocumentoinicialiddocum as idRadica,
			demandadocumentoinicialnumexpe as numExped, demandadocumentoinicialturnado as turnado, demandadocumentoinicialidturna as idTurnado, 
			demandadocumentoinicialfecgene as fecGenero, demandadocumentoinicialhoragen as horGenero, demandadocumentoinicialfecpres as fecPresenta, 
			demandadocumentoinicialhorapre as horPresenta, demandadocumentoinicialespreve as esPrevencion, demandadocumentoinicialnombred as nombreDocu,
			demandadocumentoinicialtipopla as tipoPlant,   demandadocumentoinicialfeclibe as fecLibero, demandadocumentoinicialhoralib as horLibero, 
			demandadocumentoinicialnompres as nomPresento, demandadocumentoinicialestado as estado FROM demandadocumentoinicial 
			where demandaidexpediente=$idExped");
			//$stmt->bindParam(":$fecha", $fecha, PDO::PARAM_STR);
			//$stmt->bindParam(":$hora", $hora, PDO::PARAM_STR);
			$stmt->execute();

			return $stmt -> fetchAll();
		}else{
			return "error";
		}

	}	

	static public function mdlPrevencion($idExped)	{

		if($idExped != null){

			$stmt = Conexion::conectar()->prepare(" 
			where demandaidexpediente=$idExped");
			//$stmt->bindParam(":$fecha", $fecha, PDO::PARAM_STR);
			//$stmt->bindParam(":$hora", $hora, PDO::PARAM_STR);
			$stmt->execute();

			return $stmt -> fetchAll();
		}else{
			return "error";
		}

	}	



	static public function mdlArticulos($datoId)	
	{
		if($datoId==null){
			$stmt = Conexion::conectar()->prepare("SELECT `idArticulo` as Did, `tituloArticulo` as Dtitle, `resumenArticulo` as Dresumen, `contenidoArticulo` as Dcontent, `rutaimagenArticulo` as Dimage, `fechaArticulo` as Ddate FROM `articulos` order by fechaArticulo desc limit 10;");
			$stmt->execute();
			return $stmt -> fetchAll();
		}else{
			$stmt = Conexion::conectar()->prepare("SELECT `idArticulo` as Did, `tituloArticulo` as Dtitle, `resumenArticulo` as Dresumen, `contenidoArticulo` as Dcontent, `rutaimagenArticulo` as Dimage, `fechaArticulo` as Ddate FROM `articulos` where `idArticulo`=".$datoId.";");
			$stmt->execute();
			return $stmt -> fetchAll();
		}
	}	




}