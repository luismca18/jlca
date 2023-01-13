<?php 


require_once "../controladores/jlca.controlador.php";
require_once "../modelos/jlca.modelo.php";


/*=============================================
Clase de AJAX
=============================================*/

class AjaxExpediente{

	
	public $validarJunta;
	public $validarExped;

	public function ajaxValidarExped(){

		
		$valorIdJunta = $this->validarJunta;
		$valorExped = $this->validarExped;

		$respuesta = ControladorJlca::ctrExpediente($valorExped,intval($valorIdJunta));

		//echo json_encode($respuesta);
		echo ($respuesta);
	}

}



if(isset($_POST["idJunta"]) AND isset($_POST["exped"])){

	$valJunta = new AjaxExpediente();
	$valJunta -> validarJunta = $_POST["idJunta"];
	$valJunta -> validarExped = $_POST["exped"];
	$valJunta -> ajaxValidarExped();

}




