<?php 


require_once "../controladores/jlca.controlador.php";
require_once "../modelos/jlca.modelo.php";


/*=============================================
Clase de AJAX
=============================================*/

class AjaxNotificacion{

	public $validarSecre;
	public $validarJunta;
	public $validarFecha;


	public function ajaxValidarNoti(){

		
		$valorIdJunta = $this->validarJunta;
		$valorSecre = $this->validarSecre;
		$valorFecha = $this->validarFecha;

		$respuesta = ControladorJlca::ctrNotificacionLista(intval($valorIdJunta),intval($valorSecre),$valorFecha);
		
		//echo json_encode($respuesta);
		echo ($respuesta);
	}

}

if(isset($_POST["idJunta"]) AND isset($_POST["fecha"])){

	$valJunta = new AjaxNotificacion();
	$valJunta -> validarJunta = $_POST["idJunta"];
	$valJunta -> validarSecre = $_POST["secre"];
	$valJunta -> validarFecha = $_POST["fecha"];
	$valJunta -> ajaxValidarNoti();

}



