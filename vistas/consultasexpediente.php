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
	function cadena(e) {

	    tecla = (document.all) ? e.keyCode : e.which;

	    //Tecla de retroceso para borrar, siempre la permite
	    
	    if (tecla == 8) {
	        return true;
	    }

	    // Patron de entrada, en este caso solo acepta numeros y letras
	    patron = /[0-9]/;
	    tecla_final = String.fromCharCode(tecla).toUpperCase();
	   
	    var datos = $('#numexped').val();
        var prueba = new String(datos);

        if (prueba.length==6){
            $('#numexped').val(prueba.substring(0,5)+"/"+prueba.substring(5,6));
        }else{
            if (prueba.length==9){
                $('#numexped').val(prueba.substring(0,5)+"/"+prueba.substring(6,9));
            }
        }
		
		return patron.test(tecla_final);

	}

</script>
    <div class="container-fluid text-center text-danger p-5">
    	<h1 class="m-4">Elija la Junta para consultar el Expediente electrónico</h1>
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
							<h3 class="card-title text-center text-danger">Expediente Electrónico</h3>
						</div>
						<div class="card-body">
							<div class="container-fluid"> 
								<div class="table-responsive">
									<table  class="table table-striped">
										<tr>
											<td class="text-right">	  									
												<label for="junta">Junta:</label>
											</td>
											<td class="text-left">	  									
												<input class="cajatext" type="text" id="opcjunta"  size="53" value=""disabled>
											</td>
										</tr>
										<tr>
											<td class="text-right">	  									
												<label for="expediente">No. de Expediente:</label>
											</td>
											<td class="text-left">	  									
											<input  class="form-control cajatext" type="text" id="numexped" name="expediente" min="1" placeholder="00010/2010" maxlength="10" onkeypress="return cadena(event)" >
											</td>
										</tr>
										<tr>
											<td class="text-right"><label for="expediente">Tipo de Documento:</label></td>
											<td class="text-left">

												<select class="form-control cajatext" id="documento" name="documento" >
													
													<option value="1">TODOS LOS DOCUMENTOS</option>
													<option value="2">RADICACION</option>
													<option value="3">PREVENCION</option>	  				
													<option value="4">AUDIENCIA</option>
													<option value="5">PROMOCION</option>
													<option value="6">RESOLUCION</option>
													<option value="7">AMPARO</option>
													<option value="8">OFICIO</option>
													<option value="9">LAUDO</option>
													<option value="10">NOTIFICACION</option>
													
												</select>
											</td>
										</tr>
									</table>
								</div>
								<input type="number" id="junta" name="junta" value="" hidden size="1">
								<button class="btn btn-primary" onclick="consultaExpediente();">Consultar</button>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	


	<div class="container-fluid text-center mt-5 mb-5" id="contenido"  style="display:none;">
		<div class="container-fluid" id="datos">
			<div class="row">
				<div class="col text-center">            
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title text-center text-danger">Datos del Expediente</h3>
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


<div class="container-fluid text-center mt-5 mb-5" id="divRadicacion"  style="display:none;">
		<div class="container-fluid" id="datos">
			<div class="row">
				<div class="col text-center">            
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title text-center text-danger">Radicación</h3>
						</div>
						<div class="card-body">
							<div class="container-fluid"> 
								<div id="tablaRadicacion">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>		


<div class="container-fluid text-center mt-5 mb-5" id="divPrevencion"  style="display:none;">
		<div class="container-fluid" id="datos">
			<div class="row">
				<div class="col text-center">            
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title text-center text-danger">Prevención</h3>
						</div>
						<div class="card-body">
							<div class="container-fluid"> 
								<div id="tablaPrevencion">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>		
	

	<div class="container-fluid text-center mt-5 mb-5" id="divAudiencia"  style="display:none;">
		<div class="container-fluid" id="datos">
			<div class="row">
				<div class="col text-center">            
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title text-center text-danger">Audiencias</h3>
						</div>
						<div class="card-body">
							<div class="container-fluid"> 
								<div id="tablaAudiencias">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid text-center mt-5 mb-5" id="divPromocion"  style="display:none;">
		<div class="container-fluid" id="datos">
			<div class="row">
				<div class="col text-center">            
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title text-center text-danger">Promociones</h3>
						</div>
						<div class="card-body">
							<div class="container-fluid"> 
								<div id="tablaPromociones">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid text-center mt-5 mb-5" id="divResolucion"  style="display:none;">
		<div class="container-fluid" id="datos">
			<div class="row">
				<div class="col text-center">            
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title text-center text-danger">Resoluciones</h3>
						</div>
						<div class="card-body">
							<div class="container-fluid"> 
								<div id="tablaResoluciones">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid text-center mt-5 mb-5" id="divAmparo" style="display:none;" >
		<div class="container-fluid" id="datos">
			<div class="row">
				<div class="col text-center">            
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title text-center text-danger">Amparos Indirectos</h3>
						</div>
						<div class="card-body">
							<div class="container-fluid"> 
								<div id="tablaAmparos">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid text-center mt-5 mb-5" id="divOficio"  style="display:none;">
		<div class="container-fluid" id="datos">
			<div class="row">
				<div class="col text-center">            
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title text-center text-danger">Oficios</h3>
						</div>
						<div class="card-body">
							<div class="container-fluid"> 
								<div id="tablaOficios">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<div class="container-fluid text-center mt-5 mb-5" id="divLaudo" style="display:none;" >
		<div class="container-fluid" id="datos">
			<div class="row">
				<div class="col text-center">            
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title text-center text-danger">Laudo</h3>
						</div>
						<div class="card-body">
							<div class="container-fluid"> 
								<div id="tablaLaudo">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

<div class="container-fluid text-center mt-5 mb-5" id="divNotificacion"  style="display:none;">
		<div class="container-fluid" id="datos">
			<div class="row">
				<div class="col text-center">            
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title text-center text-danger">Notificación</h3>
						</div>
						<div class="card-body">
							<div class="container-fluid"> 
								<div id="tablaNotificacion">
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

	