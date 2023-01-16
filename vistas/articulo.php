<?php
    include "modulos/cabecera.php";
    include "modulos/menu.php";
    include "./controladores/jlca.controlador.php";
    include "./modelos/jlca.modelo.php";
	$tamDt=strlen($_GET["valId"]);
	$posDt=strpos($_GET["valId"], "=");

	//$id= substr($_GET["valId"],$posDt+1, ($tamDt-$posDt));
	$id= $_GET["valId"];
	if (isset($_GET["valId"]))
	{
		
		echo '
		<script type="text/javascript">
			console.log("'.$id.'");
		</script>
		
		';
	}else{
		echo '
		<script type="text/javascript">
			console.log("'.$id.'");
		</script>
		
		';
	}
?>



<div class="container-fluid  p-5">
		<div class="card card-success ml-3 mr-3 ">
			<div class="card-header ">
				<h3 class="card-title mr-3 mt-2 text-center text-danger">Titulo</h3>
			</div>
			<div class="card-body">
				<div class="container-fluid">  
				    <img  class="mx-auto d-block" src="vistas/img/articulos/004.png" width=70%>
					<div class="text-justify p-4">
						sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						Why do we use it?
						It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
					</div>
				</div>
			</div>
			<div class="card-footer bg-secundary">
			</div>
		</div>
	</div>


<?php
    include "modulos/pie.php";