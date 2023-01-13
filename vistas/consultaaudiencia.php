<?php
include "modulos/cabecera.php";
include "modulos/menu.php";
include "./controladores/jlca.controlador.php";
include "./modelos/jlca.modelo.php";

$url_actual = "http://" . $_SERVER["SERVER_NAME"]."/jlca/vistas/";
require_once "controladores/Autoload.php";
$autoload= new Autoload();

?>
<script type="text/javascript">
	$(document).ready(function()
  	{
  		var consultaE=document.getElementById("consultaExp");
  		consultaE.setAttribute("style", "display:none;");
  		var consultaS=document.getElementById("consultaSec");
  		consultaS.setAttribute("style", "display:none;");
  		var opcion1=document.getElementById("numexped");
  		opcion1.setAttribute("style", "display:none;");
  		var opcion2=document.getElementById("opsecre");
  		opcion2.setAttribute("style", "display:none;");
  		var opcion3=document.getElementById("consultaFecha");
  		opcion3.setAttribute("style", "display:none;"); 
  		var opcion4=document.getElementById("opcFecha");
  		opcion4.setAttribute("style", "display:none;");  		 		
  		var btn=document.getElementById("btnConsulta");
  		btn.setAttribute("style", "display:none;");
  	});
</script>

<script src="<?php echo $url_actual;?>js/consultas.js"></script>	    
    <div class="container-fluid text-center text-danger">
    	<h1 class="m-4">Elija la junta para consultar las audiencias futuras</h1>
    	<div class="d-sm-inline col m-3 ">
    		<button type="button" class="btn btn-info mt-2" onclick="Seleccion(1,1)">
    			<i class="fa-solid fa-scale-balanced fa-4x"></i>
    			<br>H. Primera Junta Local de Conciliación y Arbitraje de Acapulco
    		</button>
    	</div>
    	
    	<div class="d-sm-inline col m-3 ">
    		<button type="button" class="btn btn-primary mt-2" onclick="Seleccion(1,2)">
    			<i class="fa-solid fa-scale-balanced fa-4x"></i>
    			<br>H. Segunda Junta Local de Conciliación y Arbitraje de Acapulco
    		</button>
    	</div>	    		
	</div>

	<div class="container-fluid text-center mt-5 mb-5" id="mdlExpediente"  style="display:none;" >
		<div class="container-fluid" >
			<div class="row">
				<div class="col text-center">            
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title text-center text-danger">Consulta de Audiencias Futuras</h3>
						</div>
						<div class="card-body">
							<div class="container-fluid"> 
								
								<table  class="table table-striped">
									
									<tr>
			    						<td class="text-right">	  									
			    							<label for="junta">Junta:</label>
			    						</td>
			    						<td class="text-left">	  									
			    							<input type="text" id="opcjunta"  size="53" value=""disabled>
			    						</td>
			    					</tr>
			    					<tr>
			    						<td class="text-right">	  									
	  										<label for="expediente">Consultar por:</label>
	  									</td>
	  									<td class="text-left">	  									
	  										<button class="btn btn-warning" onclick="muestraOpc(1)">Expediente</button>
	  										<button class="btn btn-success" onclick="muestraOpc(2)">Secretaría</button>
	  									</td>
	  								</tr>
	  								<tr>
	  									<td class="text-right">
	  										<label for="expediente" id="consultaExp" >Expediente:</label>
	  										<label for="expediente" id="consultaSec" >Secretaría:</label>
	  									</td>
	  									<td class="text-left">
	  										<input  class="form-control" type="text" id="numexped" name="expediente" min="1" placeholder="00010/2010" maxlength="10" size="15" onkeypress="return cadena(event)"  >
	  										<select class="form-control" id="opsecre" name="secre"  >
										        <option value="1">PRIMER SECRETARÍA</option>
										        <option value="2">SEGUNDA SECRETARÍA</option>
										        <option value="3">TERCER SECRETARÍA</option>
										        <option value="4">CUARTA SECRETARÍA</option>
										        <option value="5">QUINTA SECRETARÍA</option>
									      	</select>
	  									</td>
	  								</tr>
	  								<tr>
										<td class="text-right" id="consultaFecha">
											Fecha de la audiencia: 
										</td>
										<td class="text-left">
											<input type="date" name="fecha"  id="opcFecha">
										</td>
	  								</tr>
								</table>
								<input type="number" id="junta" name="junta" value="" hidden size="1">
								<input type="number" id="opcC" name="opcC" value="" hidden size="1">
								<button class="btn btn-primary" id="btnConsulta" onclick="consultaAudi();">Consultar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<div class="container-fluid text-center mt-5 mb-5">
		<div class="container-fluid" style="display:none;" id="resultado">
			<div class="row">
				<div class="col text-center">            
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title text-center text-danger">Lista de audiencias</h3>
						</div>
						<div class="card-body">
							<div class="container-fluid"> 
								<div id="miTabla2">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		include "modulos/pie.php";
	?>
	<script src="<?php echo $url_actual;?>js/consultas.js"></script>

