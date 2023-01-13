<?php
class ViewController 
{
	private static $view_path='vistas/';

	public function load_view($view)
	{
		if($view=='principal'){
			require_once(self::$view_path.'principal.php');
	    }elseif($view=='asignacion'){
			require_once(self::$view_path.'asignacion.php');
	    }elseif($view=='expediente'){
			require_once(self::$view_path.'consultasexpediente.php');
	    }elseif($view=='notificacion'){
			require_once(self::$view_path.'consultanotificacion.php');
	    }elseif($view=='audiencias'){
			require_once(self::$view_path.'consultaaudiencia.php');
	    }elseif($view=='secretario'){
			require_once(self::$view_path.'consultasecretario.php');
	    }elseif($view=='articulo'){
			require_once(self::$view_path.'articulo.php');
	    }

	}

	public function __destruct() {
		//unset ($this);
	}
}