
<?php
//.str_replace('plantillaadmin.php','',$_SERVER["REQUEST_URI"])
$url_actual = "http://" . $_SERVER["SERVER_NAME"]."/jlca/vistas/";
?>
<script src="<?php echo $url_actual;?>js/consultas.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
	window.onload = function() {
    	notiNuevas();
	}
});

</script>
	<div class="container-flex">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<div class="container-all menuSld">
					<input type="radio" id="1" name="image-slide" hidden >
					<input type="radio" id="2" name="image-slide" hidden>
					<input type="radio" id="3" name="image-slide" hidden>
					<div class="slide">
						<div class="item-slide">
							<img src="<?php echo $url_actual?>img/slide/001.jpg">
						</div>
						<div class="item-slide">
							<img src="<?php echo $url_actual?>img/slide/002.jpg">
						</div>				
						<div class="item-slide">				
							<img src="<?php echo $url_actual?>img/slide/003.jpg">
						</div>
					</div>

					<div class="pagination">
						<label class="pagination-item" for="1">
							<img src="<?php echo $url_actual?>img/slide/001.jpg">
						</label>
						<label class="pagination-item" for="2">
							<img src="<?php echo $url_actual?>img/slide/002.jpg">
						</label>
						<label class="pagination-item" for="3">
							<img src="<?php echo $url_actual?>img/slide/003.jpg">
						</label>
					</div>
				</div>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
	<div class="row mnjlca bg-ligth">
		  <div class="col-lg-1 col-xl-1 m-3">
		  </div>
		  <div class="d-sm-inline col m-1 xl-m-3">
		  	<a href="asignacion">
		  		<button class="btn btn-secondary btn-lg texto-menu" onclick=""><i class="fa-solid fa-magnifying-glass fa-3x"></i><br>Busqueda de Demanda</button>
		  	</a>
		  </div>
		  <div class="d-sm-inline col m-1 xl-m-3">
		  	<a href="expediente">
		  		<button class="btn btn-secondary btn-lg texto-menu"><i class="fa-solid fa-book-open fa-3x"></i><br>Expediente Electrónico</button>
		  	</a>
		  </div>
		  <div class="d-sm-inline col m-1 xl-m-3">
		  	<a href="notificacion">
		  		<button class="btn btn-secondary btn-lg texto-menu"><i class="fa-solid fa-user-check fa-3x"></i><br>Lista de Notificaciones</button>
		  	</a>
		  </div>
		  <div class="d-sm-inline col m-1 xl-m-3">
		  	<a href="audiencias">
		  		<button class="btn btn-secondary btn-lg texto-menu"><i class="fa-solid fa-calendar-days fa-3x"></i><br>Audiencias Futuras</button>
		  	</a>
		  </div>
		  <div class="d-sm-inline col m-1 xl-m-3">
		  	<a href="secretario">
		  		<button class="btn btn-secondary btn-lg texto-menu"><i class="fa-solid fa-user-tie  fa-3x"></i><br>Secretario en turno</button>
		  	</a>
		  </div>
		  <div class="col-lg-1 col-xl-1 m-1 xl-m-3">
		  </div>
	</div>
	<div class="container-flex bg-secundary contenido pt-3 pl-3">
		<div class="row">
			<div class="d-none-sm col-md-1 col-lg-1 mb-1 ">
			</div>
			<div class="col-sm-12 col-md-10 col-lg-10 mb-1 ">
				<div class="card card-success mr-2">
					<div class="card-header ">
						<h2 class="card-title mr-3 mt-2 text-center ">Noticias</h2>
					</div>
					<div class="card-body " id="noti">
						
						<Table class="table table-borderless" id="TablaNoti"> <tbody>
						</tbody></Table>
							
						<div>
							Pagina: <span id="page"></span>	
							<button class="btnPrev btn btn-outline-secondary" onclick="prevPage()" id="btn_prev"><</button>
							<button class="btnNext btn btn-outline-secondary" onclick="nextPage()" id="btn_next">></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="mdlExpediente"></div>
	