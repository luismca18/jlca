<?php 


require_once "../controladores/jlca.controlador.php";
require_once "../modelos/jlca.modelo.php";


/*=============================================
Clase de AJAX
=============================================*/

class AjaxArticulos{

	
	public $validarDato;
	public function ajaxValidar(){

		
		$valorDato = $this->validarDato;


		$respuesta = ControladorJlca::ctrArticulos(null);

		//echo json_encode($respuesta);
		echo json_encode($respuesta);
		//echo ("error");
	}

	public $validarDatoId;
	public function ajaxValidarId(){

		
		$valorDatoId = $this->validarDatoId;


		$respuesta = ControladorJlca::ctrArticulos($valorDatoId);

		//echo json_encode($respuesta);
		echo json_encode($respuesta);
		//echo ("error");
	}

}




if(isset($_POST["dato"])){

	$valDato = new AjaxArticulos();
	$valDato -> validarDato = $_POST["dato"];
	$valDato -> ajaxValidar();

}


if(isset($_POST["IdVal"])){

	$valDato = new AjaxArticulos();
	$valDato -> validarDatoId = $_POST["IdVal"];
	$valDato -> ajaxValidarId();

}

