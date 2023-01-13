<?php
if(isset($_POST['idJunta'])){
	$idJunta=$_POST['idJunta'];
}
$url_actual = "http://" . $_SERVER["SERVER_NAME"]."/jlca/vistas/";
require_once "controladores/Autoload.php";
$autoload= new Autoload();
?>
	    <section class="content">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="col-sm-8 col-md-8 col-lg-8 text-center">            
	            <div class="card card-success">
	              <div class="card-header">
	                <h3 class="card-title mr-3 mt-2 text-center">Eliga la opción que desea consultar</h3>
	              </div>
	              <div class="card-body p-3">
                  	<div class="container-fluid">  
                  		<div class="btn-group-vertical m-3">
						  <button type="button" class="btn btn-primary p-3" onclick="Seleccion(1,<?php echo $idJunta; ?>)">Expediente Electrónico</button>
						  <button type="button" class="btn btn-primary p-3" onclick="Seleccion(2,<?php echo $idJunta;?>)">Notificaciones por lista</button>
						  <button type="button" class="btn btn-primary p-3" onclick="Seleccion(3,<?php echo $idJunta;?>)">Audiencias Futuras</button>
						  <button type="button" class="btn btn-primary p-3" onclick="Seleccion(4,<?php echo $idJunta;?>)">secretario en turno</button>
						</div>
                  	</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

		<section class="content mt-3"  >
			<div class="container-fluid" style="display:none;" id="Expediente">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-lg-8 text-center">            
						<div class="card card-success">
							<div class="card-header">
								<h3 class="card-title mr-3 mt-2 text-center">Expediente Electrónico</h3>
							</div>
							<div class="card-body p-3">
								<div class="container-fluid"> 

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



		<section class="content mt-3"  >
			<div class="container-fluid" style="display:none;" id="Notifica">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-lg-8 text-center">            
						<div class="card card-success">
							<div class="card-header">
								<h3 class="card-title mr-3 mt-2 text-center">Lista de Notificaciones</h3>
							</div>
							<div class="card-body p-3">
								<div class="container-fluid"> 

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



		<section class="content mt-3"  >
			<div class="container-fluid" style="display:none;" id="Audiencia">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-lg-8 text-center">            
						<div class="card card-success">
							<div class="card-header">
								<h3 class="card-title mr-3 mt-2 text-center">Lista de Audiencias</h3>
							</div>
							<div class="card-body p-3">
								<div class="container-fluid"> 

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



		<section class="content mt-3"  >
			<div class="container-fluid" style="display:none;" id="secretario">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-lg-8 text-center">            
						<div class="card card-success">
							<div class="card-header">
								<h1 class="card-title mr-3 mt-2 text-center text-danger">Secretario en turno</h3>
							</div>
							<div class="card-body p-3">
								<div class="container-fluid"> 
									<div id="miTabla">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<script src="<?php echo $url_actual;?>js/consultas.js"></script>