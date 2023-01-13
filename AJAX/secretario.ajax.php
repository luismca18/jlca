<?php 


require_once "../controladores/jlca.controlador.php";
require_once "../modelos/jlca.modelo.php";


/*=============================================
Clase de AJAX
=============================================*/

class AjaxSecretario{

	public $validarSecre;

	public function ajaxValidarSecre(){

		
		$valor = $this->validarSecre;

		$respuesta = ControladorJlca::ctrSecretario($valor);
		
		//echo json_encode($respuesta);
		echo ($respuesta);
	}

}

if(isset($_POST["idJunta"])){

	$valJunta = new AjaxSecretario();
	$valJunta -> validarSecre = $_POST["idJunta"];
	$valJunta -> ajaxValidarSecre();

}


