<?php
//.str_replace('plantillaadmin.php','',$_SERVER["REQUEST_URI"])
$url_actual = "http://" . $_SERVER["SERVER_NAME"]."/jlca/vistas/";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>titulo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- ======================
	    plugins de ccs
======================-->


<link rel="stylesheet" href="<?php echo $url_actual;?>css/bootstrap.min.css" crossorigin="anonymous" >
<link rel="stylesheet" href="<?php echo $url_actual;?>css/notie.css" >
<link rel="stylesheet" href="<?php echo $url_actual;?>css/sweetalert2.css" >
<link rel="stylesheet" href="<?php echo $url_actual;?>css/fontawesome-free/all.min.css" >

<link rel="stylesheet" href="<?php echo $url_actual;?>css/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Ionicons -->
<!-- DataTables -->
<!-- daterange picker -->
<link rel="stylesheet" href="<?php echo $url_actual;?>css/daterangepicker.css">
<link rel="stylesheet" href="<?php echo $url_actual;?>css/datatables-bs4/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $url_actual;?>css/datatables-responsive/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $url_actual;?>css/jlca.css">
<!-- Theme style -->
<!-- Google Font: Source Sans Pro -->
  



<style type="text/css">/* Chart.js */
	@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
</style>

<!-- ======================
	      plugins de JS
     ======================-->
<script src="<?php echo $url_actual;?>js/jquery.min.js"></script>
<script src="<?php echo $url_actual;?>js/notie.js"></script>
<script src="<?php echo $url_actual;?>js/sweetalert2.js"></script>
<script src="<?php echo $url_actual;?>js/e632f1f723.js" crossorigin="anonymous"></script>
<script src="<?php echo $url_actual;?>js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?php echo $url_actual;?>js/popper.min.js"></script>
<script src="<?php echo $url_actual;?>js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/ed07566918.js" crossorigin="anonymous"></script>

</head>
<body  style="height: auto;">
	<div class="container-fluid">		
		<div class="row cabeza">
			<div class="col"><img src="vistas/img/escudo.png" height="80%" class="pl-1"></div>
			<div class="col"><h2 class="titulo">Juntas Locales de Conciliación y Arbitraje</h1></div>
			<div class="col"></div>
			
		</div>
	
		<div class="row menu">
			<p class="bg-primary text-white ">Menu</p>
		</div>
		<div class="row carrucel">
			<p class="text-dark"></p>
		</div>
		<div class="row mnjlca bg-ligth">
			  <div class="col-2 "></div>
			  <div class="col m-2 bg-dark text-white"><i class="fa-solid fa-file-certificate"></i></div>
			  <div class="col m-2 bg-dark text-white"></div>
			  <div class="col m-2 bg-dark text-white"></div>
			  <div class="col m-2 bg-dark text-white"></div>
			  <div class="col m-2 bg-dark text-white"></div>
			  <div class="col-2 "></div>

		</div>
		<div class="row bg-secundary contenido">
			<div class="col-6 m-2"></div>
			<div class="col-6 m-2"></div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row pie">
			
		</div>
	</div>
