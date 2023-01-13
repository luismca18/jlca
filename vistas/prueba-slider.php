<?php
//.str_replace('plantillaadmin.php','',$_SERVER["REQUEST_URI"])
$url_actual = "http://" . $_SERVER["SERVER_NAME"]."/jlca/vistas/";
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Juntas Locales de Conciliación y Arbitraje de Acapulco</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- ======================
	    plugins de ccs
======================-->
<link rel="icon" type="image/png" href="<?php echo $url_actual;?>img/favicon-16x16.png">

<link rel="stylesheet" href="<?php echo $url_actual;?>css/estilos.css">
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
<body>
	<div class="container-all">
		<input type="radio" id="1" name="image-slide" hidden >
		<input type="radio" id="2" name="image-slide" hidden>
		<input type="radio" id="3" name="image-slide" hidden>
		<div class="slide">
			<div class="item-slide">
				<img src="<?php echo $url_actual?>img/slide/001.jpg">
			</div>
			<div class="item-slide">
				<img src="<?php echo $url_actual?>img/slide/002.jpg">
			</div>				
			<div class="item-slide">				
				<img src="<?php echo $url_actual?>img/slide/003.jpg">
			</div>
		</div>
		<div class="pagination">
			<label class="pagination-item" for="1">
				<img src="<?php echo $url_actual?>img/slide/001.jpg">
			</label>
			<label class="pagination-item" for="2">
				<img src="<?php echo $url_actual?>img/slide/002.jpg">
			</label>
			<label class="pagination-item" for="3">
				<img src="<?php echo $url_actual?>img/slide/003.jpg">
			</label>
		</div>
	</div>


</body>