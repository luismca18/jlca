<?php

include "modulos/cabecera.php";
include "modulos/menu.php";
include "./controladores/jlca.controlador.php";
include "./modelos/jlca.modelo.php";
	?>
	<div class="container-fluid  p-5">
		<div class="card card-success ml-3 mr-3 ">
			<div class="card-header ">
				<h3 class="card-title mr-3 mt-2 text-center text-danger">Consulte en que junta esta su demanda</h3>
			</div>
			<div class="card-body ">
				<div class="container-fluid">  
					<form  method="post" >
						<table  class="table table-striped">
							<tr>
			    				<td class="text-right">	  									
									Fecha de la demanda: 
								</td>
								<td class="text-left">
									<input type="date" name="fecha">
								</td>
							</tr>
							<tr>
								<td class="text-right">
									Hora de recepción:
								</td>
								<td class="text-left">
									<input type="time" step="1" name="hora">
								</td>								
							</tr>
							<tr>
								<td class="text-right">
									<input type="submit" value="Enviar datos">
								</td>
							</tr>
						</table>

					</form>
				</div>
			</div>
		</div>
	</div>
<?php
	

	if (isset($_POST['fecha'])){
		$fechaAsig=$_POST["fecha"];
		$horaAsig='1899-12-30 '.$_POST["hora"];
	  	$asignacion =ControladorJlca::ctrAsignacion($fechaAsig,$horaAsig);

		if ($asignacion==null)
		{
		  	echo 'nada';
		}
		else
		{ 
			//while ($row = mysql_fetch_assoc($asignacion) 
		  	 foreach ($asignacion as $key => $value)
		  	 {
				//echo ' '.$row['demandaidexpediente'];	
				echo ' 
					<div class="card card-success mt-3 mr-5 ml-5 mb-3">
		    			<div class="card-header ">
		    				<h3 class="card-title mr-3 mt-2 text-center  text-danger">Datos de la Demanda</h3>
		    			</div>
		    			<div class="card-body ">
							<div class="container-fluid">  
								<div class="table-responsive">
									<table  class="table table-striped">
										<tr>
											<td>Junta:</td>
											<td>'.$value['junta'].'</td>
										</tr>
											<td>Número de Expediente:</td>
											<td>'.substr($value['expediente'],1,5).'/'.substr($value['expediente'],5,4).'</td>
										<tr>
											<td>Secretaria:</td>
											<td>'.$value['secretaria'].'</td>                			     
										</tr>
										<tr>
											<td>Promovente:</td>
											<td>'.$value['promovente'].'</td>                			     
										</tr>
										<tr>
											<td>Demandado:</td>
											<td>'.$value['demandado'].'</td>                			     
										</tr>
										<tr>
											<td>Ubicación:</td>
											<td>'.$value['ubicacion'].'</td>                			     
										</tr>                			     
									</table>
								</div>
							</div>
						</div>
					</div>
							';
			}
		} 
	}
//	mysql_free_result($asignacion);
	include "modulos/pie.php";

    

