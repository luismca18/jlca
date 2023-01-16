<?php


include "modulos/cabecera.php";
include "modulos/menu.php";

$url_actual = "http://" . $_SERVER["SERVER_NAME"]."/jlca/vistas/";
require_once "controladores/Autoload.php";
$autoload= new Autoload();

?>
	    
    <div class="container-fluid text-center text-danger">
    	<h1 class="m-4">Elija la Junta para consultar el Secretario en Turno</h1>
    	<div class="d-sm-inline col m-3 ">
    		<button type="button" class="btn btn-info mt-2" onclick="Seleccion(4,1)">
    			<i class="fa-solid fa-scale-balanced fa-4x"></i>
    			<br>H. Primera Junta Local de Conciliación y Arbitraje de Acapulco
    		</button>
    	</div>
    	
    	<div class="d-sm-inline col m-3 ">
    		<button type="button" class="btn btn-primary mt-2" onclick="Seleccion(4,2)">
    			<i class="fa-solid fa-scale-balanced fa-4x"></i>
    			<br>H. Segunda Junta Local de Conciliación y Arbitraje de Acapulco
    		</button>
    	</div>	    		
	</div>

	<div class="container-fluid text-center mt-5 mb-5">
		<div class="container-fluid" style="display:none;" id="secretario">
			<div class="row">
				<div class="col text-center">            
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title text-center text-danger">Secretario en turno</h3>
						</div>
						<div class="card-body">
							<div class="container-fluid"> 
								<div id="miTabla">
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
	<div id="mdlExpediente"></div>
	<script src="<?php echo $url_actual;?>js/consultas.js"></script>
