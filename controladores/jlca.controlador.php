<?php

class ControladorJlca{

	static public function ctrAsignacion($fecha,$hora)
	{
				// = "hotel";
		$respuesta = ModeloJlca::mdlAsignacion($fecha,$hora);
		return $respuesta;
	}




	static public function ctrSecretario($idJunta)
	{
				// = "hotel";
		if(isset($idJunta)) 
		{
			$respuesta = ModeloJlca::mdlSecretario($idJunta);	
			
			if(!empty($respuesta)){
			$respuesta2 = '<table  class="table table-responsive table-striped">
					<tr>
			    		<td class="text-right">Secretaría:</td>
				     	<td class="text-left">'.$respuesta[0]['secretaria'].'</td>
				     </tr>
				     <tr>
				     	<td class="text-right">Nombre del Secretario:</td>
				     	<td class="text-left">'.$respuesta[0]['NombreSecretario'].'</td>
				     <tr>
				     	<td class="text-right">Domicilio:</td>
				     	<td class="text-left">'.$respuesta[0]['usuariosdomiciliosecre'].'</td>                			     
				     </tr>
				     <tr>
				     	<td class="text-right">Telefono:</td>
				     	<td class="text-left">'.$respuesta[0]['usuariostelsecre'].'</td>                			     
				     </tr>
						 <tr>
				     	<td class="text-right">Periodo:</td>
				     	<td class="text-left">'.$respuesta[0]['secretarioturnofecha1'].'-'.$respuesta[0]['secretarioturnofecha2'].'</td>                			     
				     </tr>
				 </table>';
			}else{
			$respuesta2 = '<table  class="table table-responsive table-striped">
					<tr>
			    		<td class="text-right">Secretaría:</td>
				     	<td class="text-left text-danger">No se encontro ningun registro</td>
				     </tr>
				     <tr>
				     	<td class="text-right">Nombre del Secretario:</td>
				     	<td class="text-left text-danger">No se encontro ningun registro</td>
				     <tr>
				     	<td class="text-right">Domicilio:</td>
				     	<td class="text-left text-danger">No se encontro ningun registro</td>                			     
				     </tr>
				     <tr>
				     	<td class="text-right">Telefono:</td>
				     	<td class="text-left text-danger">No se encontro ningun registro</td>                			     
				     </tr>
						 <tr>
				     	<td class="text-right">Periodo:</td>
				     	<td class="text-left text-danger">No se encontro ningun registro</td>                			     
				     </tr>
				 </table>';				
			}

		}
		return $respuesta2;
	}
	
	static public function ctrExpediente($expediente,$junta)
	{
				// = "hotel";
		$respuesta = ModeloJlca::mdlExpediente($expediente,$junta);
		if(!empty($respuesta)){
			$respuesta2 = '<table  class="table table-responsive table-striped">';
	  		foreach ($respuesta as $key => $value)
		  	{
				
				//echo ' '.$row['demandaidexpediente'];	
				$respuesta3= '	     <tr>
							    		<td>Secretaría:</td>
	                			     	<td>'.$value['Secretaria'].'</td>
	                			     </tr>
	                			     	<td>Número de Expediente:</td>
	                			     	<td>'.$value['Expediente'].'</td>
	                			     <tr>
	                			     	<td>Tipo de Juicio:</td>
	                			     	<td>'.$value['TipoJuicio'].'</td>                			     
	                			     </tr>
	                			     <tr>
	                			     	<td>Promovente:</td>
	                			     	<td>'.$value['Promovente'].'</td>                			     
	                			     </tr>
	 								 <tr>
	                			     	<td>Demandado:</td>
	                			     	<td>'.$value['Demandado'].'</td>                			     
	                			     </tr>
	 								 <tr>
	                			     	<td>Ubicación:</td>
	                			     	<td>'.$value['Ubicacion'].'</td>                			     
	                			     </tr>                			     
	                			     <tr>
	                			     	<td>Fecha de Presentación:</td>
	                			     	<td>'.$value['Fecha'].'</td>                			     
	                			     </tr>                			     
	                			     <tr>
	                			     	<td>Hora de Presentación:</td>
	                			     	<td>'.$value['Hora'].'</td>                			     
	                			     </tr>                			     
	                			     <tr>
	                			     	<td>Demanda Presentada por:</td>
	                			     	<td>'.$value['Presento'].'</td>                			     
	                			     </tr>                			     
							';
			}
			$respuesta2 = $respuesta2.$respuesta3.'</table><input id="idExped" name="IdExp" hidden value="'.$value['idExped'].'">';
		}else{
			$respuesta2 =null;
		}

		return $respuesta2;
	}

	static public function ctrAudiencias($opc,$Junta,$Sec,$valor)
	{
				// = "hotel";
		if($opc==1) 
		{
			$respuesta = ModeloJlca::mdExpdAudiencias($Junta,$valor);	
			if(!empty($respuesta)){
			$respuesta2 = '<table class="table table-responsive table-striped  table-hover">
    				<thead>
      					<tr>
      						<th>FECHA</th>
      						<th>HORA</th>
      						<th>EXPEDIENTE</th>
      						<th>TIPO DE AUDIENCIA</th>
      						<th>PROMOVENTE</th>
      						<th>DEMANDADO</th>
      						<th>SECRETARIA</th>
      					</tr>
      				</thead>
      				<tbody>';
						$respuesta3='';
						    foreach ($respuesta as $key => $value) 
    						{
    							$respuesta3=$respuesta3.'<tr>';
    							$respuesta3= $respuesta3.'<td>'.$value['fecha'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['hora'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['numexped'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['tipo'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['promovente'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['demandado'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['secretaria'].'</td>';
    							$respuesta3=$respuesta3.'</tr>';
    						}
					    $respuesta2 = $respuesta2.$respuesta3.'</tbody></table>';
			}else{
				$respuesta2 = ' <div class="text-center text-danger">No se encontraron resultados por expediente</div>';
			}

		} elseif($opc==2) 
		{
			$respuesta = ModeloJlca::mdlLstAudiencias($Junta,$Sec,$valor);	
			
			if(!empty($respuesta)){
			$respuesta2 = '<table class="table table-responsive table-striped  table-hover">
    				<thead>
      					<tr>
      						<th>FECHA</th>
      						<th>HORA</th>
      						<th>EXPEDIENTE</th>
      						<th>TIPO DE AUDIENCIA</th>
      						<th>PROMOVENTE</th>
      						<th>DEMANDADO</th>
      						<th>SECRETARIA</th>
      					</tr>
      				</thead>
      				<tbody>';
						$respuesta3='';
						    foreach ($respuesta as $key => $value) 
    						{
    							$respuesta3=$respuesta3.'<tr>';
    							$respuesta3= $respuesta3.'<td>'.$value['fecha'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['hora'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['numexped'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['tipo'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['promovente'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['demandado'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['secretaria'].'</td>';
    							$respuesta3=$respuesta3.'</tr>';
    						}
					    $respuesta2 = $respuesta2.$respuesta3.'</tbody></table>';
			}else{
			$respuesta2 = ' <div class="text-center text-danger"> No se encontraron resultados</div>';				
			}

		}
		return $respuesta2;
	}

	static public function ctrNotificacionLista($Junta,$Sec,$valor)
	{
				// = "hotel";

			$respuesta = ModeloJlca::mdlLstNotificacion($Junta,$Sec,$valor);	
			
			if(!empty($respuesta)){
			$respuesta2 = '<table class="table table-responsive  table-striped  table-hover">
    				<thead>
      					<tr>
      						<th>EXPEDIENTE</th>
      						<th>FECHA</th>
      						<th>FECHA ELABORACIÓN</th>
      						<th>TIPO DE DOCUMENTO</th>
      						<th>PROMOVENTE</th>
      						<th>DEMANDADO</th>
      						<th>SECRETARIA</th>
      					</tr>
      				</thead>
      				<tbody>';
						$respuesta3='';
						    foreach ($respuesta as $key => $value) 
    						{
    							$respuesta3=$respuesta3.'<tr>';
    							$respuesta3= $respuesta3.'<td>'.$value['numexped'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['fecha'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['fechaElabora'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['tipo'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['promovente'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['demandado'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['secretaria'].'</td>';
    							$respuesta3=$respuesta3.'</tr>';
    						}
					    $respuesta2 = $respuesta2.$respuesta3.'</tbody></table>';
			}else{
			$respuesta2 = ' <div class="text-center text-danger"> No se encontraron resultados</div>';				
			}


		return $respuesta2;
	}



	static public function ctrArticulos($datoId)
	{
			
			$respuesta = ModeloJlca::mdlArticulos($datoId);	
			
			if(!empty($respuesta)){
				$respuesta2 = json_encode($respuesta);
			}else{
				$respuesta2 = null;				
			}


		return $respuesta2;
	}

	static public function ctrExpAmparos($IdExp)
	{
		if($IdExp!=null) 
		{
			$respuesta = ModeloJlca::mdlAmparos($IdExp);	
			if(!empty($respuesta)){
			$respuesta2 = '<table  class="table table-responsive table-striped">
    				<thead>
      					<tr>
      						<th>NUM AMPARO</th>	
							<th>FECHA</th>
      						<th>HORA</th>
      						<th>DOCUMENTO PRESENTADO POR</th>
      					</tr>
      				</thead>
      				<tbody>';
						$respuesta3='';
						    foreach ($respuesta as $key => $value) 
    						{
    							$respuesta3=$respuesta3.'<tr>';
								$respuesta3= $respuesta3.'<td>'.$value['numAmparo'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("d-m-Y", strtotime($value['fecPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("H:i:s", strtotime($value['horPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['nomPresento'].'</td>';
    							$respuesta3=$respuesta3.'</tr>';
    						}
					    $respuesta2 = $respuesta2.$respuesta3.'</tbody></table>';
			}else{
				$respuesta2 = ' <div class="text-center text-danger">No se encontraron resultados por expediente</div>';
			}

		}
		return $respuesta2;
	}	


	static public function ctrExpAudiencias($IdExp)
	{
		if($IdExp!=null) 
		{
			$respuesta = ModeloJlca::mdlAudiencias($IdExp);	
			if(!empty($respuesta)){
			$respuesta2 = '<table  class="table table-responsive table-striped">
    				<thead>
      					<tr>
      						<th>FECHA</th>
      						<th>HORA</th>
      						<th>TIPO DE AUDIENCIA</th>
							<th>MOTIVO DIFERIDO</th>
      					</tr>
      				</thead>
      				<tbody>';
						$respuesta3='';
						    foreach ($respuesta as $key => $value) 
    						{
    							$respuesta3=$respuesta3.'<tr>';
    							$respuesta3= $respuesta3.'<td>'.date("d-m-Y", strtotime($value['fecPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("H:i:s", strtotime($value['horPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['tipoAudi'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['motDiref'].'</td>';
    							$respuesta3=$respuesta3.'</tr>';
    						}
					    $respuesta2 = $respuesta2.$respuesta3.'</tbody></table>';
			}else{
				$respuesta2 = ' <div class="text-center text-danger">No se encontraron resultados por expediente</div>';
			}

		}
		return $respuesta2;
	}	

	static public function ctrExpPromociones($IdExp)
	{
		if($IdExp!=null) 
		{
			$respuesta = ModeloJlca::mdExpdAudiencias($IdExp);	
			if(!empty($respuesta)){
			$respuesta2 = '<table class="table table-responsive table-striped  table-hover">
    				<thead>
      					<tr>
							<th>FECHA</th>
      						<th>HORA</th>
      						<th>DOCUMENTO PRESENTADO POR</th>
							<th>RESULTADO DEL DOCUMENTO</th>	
      					</tr>
      				</thead>
      				<tbody>';
						$respuesta3='';
						    foreach ($respuesta as $key => $value) 
    						{
    							$respuesta3=$respuesta3.'<tr>';
    							$respuesta3= $respuesta3.'<td>'.date("d-m-Y", strtotime($value['fecPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("H:i:s", strtotime($value['horPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['nomPresento'].'</td>';
								$respuesta3= $respuesta3.'<td>'.$value['tipoPlant'].'</td>';
    							$respuesta3=$respuesta3.'</tr>';
    						}
					    $respuesta2 = $respuesta2.$respuesta3.'</tbody></table>';
			}else{
				$respuesta2 = ' <div class="text-center text-danger">No se encontraron resultados por expediente</div>';
			}

		}
		return $respuesta2;
	}	

	static public function ctrExpVistos($IdExp)
	{
		if($IdExp!=null) 
		{
			$respuesta = ModeloJlca::mdExpdAudiencias($IdExp);	
			if(!empty($respuesta)){
				$respuesta2 = '<table class="table table-responsive table-striped  table-hover">
				<thead>
					  <tr>
						<th>FECHA</th>
						<th>HORA</th>
						<th>RESULTADO DEL DOCUMENTO</th>	
					  </tr>
				  </thead>
				  <tbody>';
					$respuesta3='';
						foreach ($respuesta as $key => $value) 
						{
							$respuesta3=$respuesta3.'<tr>';
							$respuesta3= $respuesta3.'<td>'.date("d-m-Y", strtotime($value['fecPresenta'])).'</td>';
							$respuesta3= $respuesta3.'<td>'.date("H:i:s", strtotime($value['horPresenta'])).'</td>';
							$respuesta3= $respuesta3.'<td>'.$value['tipoPlant'].'</td>';
							$respuesta3=$respuesta3.'</tr>';
						}
					$respuesta2 = $respuesta2.$respuesta3.'</tbody></table>';
			}else{
				$respuesta2 = ' <div class="text-center text-danger">No se encontraron resultados por expediente</div>';
			}

		}
		return $respuesta2;
	}	

	static public function ctrExpResoluciones($IdExp)
	{
		if($IdExp!=null) 
		{
			$respuesta = ModeloJlca::mdExpdAudiencias($IdExp);	
			if(!empty($respuesta)){
			$respuesta2 = '<table class="table table-responsive table-striped  table-hover">
    				<thead>
      					<tr>
							<th>FECHA</th>
      						<th>HORA</th>
      						<th>DOCUMENTO PRESENTADO POR</th>
							<th>COMENTARIO</th>	
      					</tr>
      				</thead>
      				<tbody>';
						$respuesta3='';
						    foreach ($respuesta as $key => $value) 
    						{
    							$respuesta3=$respuesta3.'<tr>';
    							$respuesta3= $respuesta3.'<td>'.date("d-m-Y", strtotime($value['fecPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("H:i:s", strtotime($value['horPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['nomPresento'].'</td>';
								$respuesta3= $respuesta3.'<td>'.$value['tipoPlant'].'</td>';								
    							$respuesta3=$respuesta3.'</tr>';
    						}
					    $respuesta2 = $respuesta2.$respuesta3.'</tbody></table>';
			}else{
				$respuesta2 = ' <div class="text-center text-danger">No se encontraron resultados por expediente</div>';
			}

		}
		return $respuesta2;
	}	


	
	static public function ctrExpLaudos($IdExp)
	{
		if($IdExp!=null) 
		{
			$respuesta = ModeloJlca::mdExpdAudiencias($IdExp);	
			if(!empty($respuesta)){
			$respuesta2 = '<table class="table table-responsive table-striped  table-hover">
    				<thead>
      					<tr>
      						<th>NUM AMPARO</th>	
							<th>FECHA</th>
      						<th>HORA</th>
      						<th>DOCUMENTO PRESENTADO POR</th>
      					</tr>
      				</thead>
      				<tbody>';
						$respuesta3='';
						    foreach ($respuesta as $key => $value) 
    						{
    							$respuesta3=$respuesta3.'<tr>';
								$respuesta3= $respuesta3.'<td>'.$value['numAmparo'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("d-m-Y", strtotime($value['fecPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("H:i:s", strtotime($value['horPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['nomPresento'].'</td>';
    							$respuesta3=$respuesta3.'</tr>';
    						}
					    $respuesta2 = $respuesta2.$respuesta3.'</tbody></table>';
			}else{
				$respuesta2 = ' <div class="text-center text-danger">No se encontraron resultados por expediente</div>';
			}

		}
		return $respuesta2;
	}	


	static public function ctrExpOficio($IdExp)
	{
		if($IdExp!=null) 
		{
			$respuesta = ModeloJlca::mdExpdAudiencias($IdExp);	
			if(!empty($respuesta)){
			$respuesta2 = '<table class="table table-responsive table-striped  table-hover">
    				<thead>
      					<tr>
      						<th>NUM AMPARO</th>	
							<th>FECHA</th>
      						<th>HORA</th>
      						<th>DOCUMENTO PRESENTADO POR</th>
      					</tr>
      				</thead>
      				<tbody>';
						$respuesta3='';
						    foreach ($respuesta as $key => $value) 
    						{
    							$respuesta3=$respuesta3.'<tr>';
								$respuesta3= $respuesta3.'<td>'.$value['numAmparo'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("d-m-Y", strtotime($value['fecPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("H:i:s", strtotime($value['horPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['nomPresento'].'</td>';
    							$respuesta3=$respuesta3.'</tr>';
    						}
					    $respuesta2 = $respuesta2.$respuesta3.'</tbody></table>';
			}else{
				$respuesta2 = ' <div class="text-center text-danger">No se encontraron resultados por expediente</div>';
			}

		}
		return $respuesta2;
	}	

	static public function ctrExpRadica($IdExp)
	{
		if($IdExp!=null) 
		{
			$respuesta = ModeloJlca::mdlRadicacion($IdExp);	
			if(!empty($respuesta)){
			$respuesta2 = '<table class="table table-responsive table-striped  table-hover">
    				<thead>
      					<tr>
							<th>FECHA</th>
      						<th>HORA</th>
      						<th>DOCUMENTO PRESENTADO POR</th>
							<th>COMENTARIO</th>	
      					</tr>
      				</thead>
      				<tbody>';
						$respuesta3='';
						    foreach ($respuesta as $key => $value) 
    						{
    							$respuesta3=$respuesta3.'<tr>';
    							$respuesta3= $respuesta3.'<td>'.date("d-m-Y", strtotime($value['fecPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("H:i:s", strtotime($value['horPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['nomPresento'].'</td>';
								$respuesta3= $respuesta3.'<td>'.$value['tipoPlant'].'</td>';
    							$respuesta3=$respuesta3.'</tr>';
    						}
					    $respuesta2 = $respuesta2.$respuesta3.'</tbody></table>';
			}else{
				$respuesta2 = ' <div class="text-center text-danger">No se encontraron resultados por expediente</div>';
			}

		}
		return $respuesta2;
	}	

	static public function ctrExpPrevencion($IdExp)
	{
		if($IdExp!=null) 
		{
			$respuesta = ModeloJlca::mdExpdAudiencias($IdExp);	
			if(!empty($respuesta)){
			$respuesta2 = '<table class="table table-responsive table-striped  table-hover">
    				<thead>
      					<tr>
      						<th>NUM AMPARO</th>	
							<th>FECHA</th>
      						<th>HORA</th>
      						<th>DOCUMENTO PRESENTADO POR</th>
      					</tr>
      				</thead>
      				<tbody>';
						$respuesta3='';
						    foreach ($respuesta as $key => $value) 
    						{
    							$respuesta3=$respuesta3.'<tr>';
								$respuesta3= $respuesta3.'<td>'.$value['numAmparo'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("d-m-Y", strtotime($value['fecPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("H:i:s", strtotime($value['horPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['nomPresento'].'</td>';
    							$respuesta3=$respuesta3.'</tr>';
    						}
					    $respuesta2 = $respuesta2.$respuesta3.'</tbody></table>';
			}else{
				$respuesta2 = ' <div class="text-center text-danger">No se encontraron resultados por expediente</div>';
			}

		}
		return $respuesta2;
	}	

	static public function ctrExpNotifica($IdExp)
	{
		if($IdExp!=null) 
		{
			$respuesta = ModeloJlca::mdExpdAudiencias($IdExp);	
			if(!empty($respuesta)){
			$respuesta2 = '<table class="table table-responsive table-striped  table-hover">
    				<thead>
      					<tr>
      						<th>NUM AMPARO</th>	
							<th>FECHA</th>
      						<th>HORA</th>
      						<th>DOCUMENTO PRESENTADO POR</th>
      					</tr>
      				</thead>
      				<tbody>';
						$respuesta3='';
						    foreach ($respuesta as $key => $value) 
    						{
    							$respuesta3=$respuesta3.'<tr>';
								$respuesta3= $respuesta3.'<td>'.$value['numAmparo'].'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("d-m-Y", strtotime($value['fecPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.date("H:i:s", strtotime($value['horPresenta'])).'</td>';
    							$respuesta3= $respuesta3.'<td>'.$value['nomPresento'].'</td>';
    							$respuesta3=$respuesta3.'</tr>';
    						}
					    $respuesta2 = $respuesta2.$respuesta3.'</tbody></table>';
			}else{
				$respuesta2 = ' <div class="text-center text-danger">No se encontraron resultados por expediente</div>';
			}

		}
		return $respuesta2;
	}	




}