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
			$.ajax({	
				url:"ajax/articulos.ajax.php",
				type:"POST",
				data: {IdVal:'.$id.'},
				beforeSend:function(){},
				dataType: "json",
				success:function(respuesta){
					obj =JSON.parse(respuesta);
					let Tabla = document.getElementById("Result");
					console.log(obj);
					let texto=`<div class="card-header">
									<h3 class="card-title mr-3 mt-2 text-center text-danger">${obj[0].Dtitle}</h3>
								</div>
								<div class="card-body">
									<div class="container-fluid">  
										<img  class="mx-auto d-block" src="${obj[0].Dimage}" width=70%>
										<div class="text-justify p-4">${obj[0].Dcontent}</div>
									</div>
								</div>
								<div class="card-footer bg-secondary text-white">
									<div class="row"><div class="col-6"></div><div class="col-6 text-right"><span >${obj[0].Ddate}</span></div></div>
								</div>`;
					Tabla.innerHTML=texto;
				}
			});
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
		<div class="card card-success ml-3 mr-3 " id="Result">

		</div>
	</div>


<?php
    include "modulos/pie.php";