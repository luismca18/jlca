<?php
    include "modulos/cabecera.php";
    include "modulos/menu.php";
    include "./controladores/jlca.controlador.php";
    include "./modelos/jlca.modelo.php";
	if (isset($_GET['id']))
	{
		$id=$_GET['id'];
		echo '
		<script type="text/javascript">
			console.log("'.$id.'");
			alert("hola");
		</script>
		
		';
	}else{
		echo '
		<script type="text/javascript">
			console.log("'.$id.'");
			alert("hola");
		</script>
		
		';
	}
?>


    <div class="container-fluid  p-5">
		<div class="card card-success ml-3 mr-3 ">
			<div class="card-header ">
				<h3 class="card-title mr-3 mt-2 text-center text-danger"></h3>
			</div>
			<div class="card-body ">
				<div class="container-fluid">  
					<form  method="post" >
						<table  class="table table-striped">
							<tr>
			    				<td class="text-right">	  									
									Indica la fecha de la demanda: 
								</td>
								<td class="text-left">
									<input type="date" name="fecha">
								</td>
							</tr>
							<tr>
								<td class="text-right">
									Elije un límite de tiempo:
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
    include "modulos/pie.php";
