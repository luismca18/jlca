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


		$respuesta = ControladorJlca::ctrArticulos();

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



