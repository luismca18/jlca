<?php 


require_once "../controladores/jlca.controlador.php";
require_once "../modelos/jlca.modelo.php";


/*=============================================
Clase de AJAX
=============================================*/

class AjaxAudiencia{

	public $validarSecre;
	public $validarJunta;
	public $validarFecha;
	public $validarOpc;
	public $validarExped;

	public function ajaxValidarAudi(){

		
		$valorIdJunta = $this->validarJunta;
		$valorSecre = $this->validarSecre;
		$valorFecha = $this->validarFecha;
		$valorExped = $this->validarExped;
		$valorOpc = $this->validarOpc;

		if ($valorOpc==1){ 
			$respuesta = ControladorJlca::ctrAudiencias(intval($valorOpc),intval($valorIdJunta),0,$valorExped);
		}else if($valorOpc==2){
			$respuesta = ControladorJlca::ctrAudiencias(intval($valorOpc),intval($valorIdJunta),intval($valorSecre),$valorFecha);
		}
		
		//echo json_encode($respuesta);
		echo ($respuesta);
	}

}

if(isset($_POST["idJunta"]) AND isset($_POST["fecha"])){

	$valJunta = new AjaxAudiencia();
	$valJunta -> validarJunta = $_POST["idJunta"];
	$valJunta -> validarSecre = $_POST["secre"];
	$valJunta -> validarFecha = $_POST["fecha"];
	$valJunta -> validarOpc = $_POST["Opc"];
	$valJunta -> ajaxValidarAudi();

}

if(isset($_POST["idJunta"]) AND isset($_POST["exped"])){

	$valJunta = new AjaxAudiencia();
	$valJunta -> validarJunta = $_POST["idJunta"];
	$valJunta -> validarSecre = $_POST["secre"];
	$valJunta -> validarExped = $_POST["exped"];
	$valJunta -> validarOpc = $_POST["Opc"];
	$valJunta -> ajaxValidarAudi();

}




