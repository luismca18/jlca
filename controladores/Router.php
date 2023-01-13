<?php
	class Router {
		public $route;
		public function __construct($route)
		{
			
			$session_options=array(
					'use_only_cookies'=>1,
					//'auto_start'=>1,
					'read_and_close'=>true
				);
				$login_form=new ViewController();

			if($route=='asignacion')$login_form->load_view('asignacion');
			elseif($route=='expediente') $login_form->load_view('expediente');
			elseif($route=='notificacion') $login_form->load_view('notificacion');
			elseif($route=='audiencias') $login_form->load_view('audiencias');
			elseif($route=='secretario') $login_form->load_view('secretario');
			elseif($route=='articulo') $login_form->load_view('articulo');
			else
			{ 
					$login_form=new ViewController();
					$login_form->load_view('principal');
				
			}
		}
	}