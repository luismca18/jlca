<?php

require_once "controladores/Autoload.php";
$autoload= new Autoload();

$route=isset($_GET['pagina'])?$_GET['pagina']:'home';
$jlca=new Router($route);