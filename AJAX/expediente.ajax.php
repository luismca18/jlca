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

	public $validarOpc;
	public $validarIdExped;

	public function ajaxValidarIdExped(){

		
		$valorOpc = $this->validarOpc;
		$valorIdE = $this->validarIdExped;


		switch ($valorOpc) {
			case 1:
				//$respuesta = ControladorJlca::ctrExpAmparos($valorIdE);
				break;
			case 2:
				$respuesta = ControladorJlca::ctrExpRadica($valorIdE);
				break;
			case 3:
				$respuesta = ControladorJlca::ctrExpPrevencion($valorIdE);
				break;
			case 4:
				$respuesta = ControladorJlca::ctrExpAudiencias($valorIdE);
				break;
			case 5:
				$respuesta = ControladorJlca::ctrExpPromociones($valorIdE);
				break;			
			case 6:
				$respuesta = ControladorJlca::ctrExpResoluciones($valorIdE);
				break;				
			case 7:
				$respuesta = ControladorJlca::ctrExpAmparos($valorIdE);
				break;
			case 8:
				$respuesta = ControladorJlca::ctrExpOficio($valorIdE);
				break;				
			case 9:
				$respuesta = ControladorJlca::ctrExpLaudos($valorIdE);
				break;					
			case 10:
				$respuesta = ControladorJlca::ctrExpNotifica($valorIdE);
				break;
			default:
				$respuesta = ' <div class="text-center text-danger">No se encontraron resultados por expediente</div>';
				break;
		}
		
		//$respuesta = ControladorJlca::ctrExpediente($valorExped,intval($valorIdJunta));

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

if(isset($_POST["idExp"]) AND isset($_POST["Opc"])){

	$valJunta = new AjaxExpediente();
	$valJunta -> validarOpc = $_POST["Opc"];
	$valJunta -> validarIdExped = $_POST["idExp"];
	$valJunta -> ajaxValidarIdExped();

}



