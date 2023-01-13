<?php
$url_ok= $_SERVER["REQUEST_URI"];
?>		

<nav class="navbar navbar-expand-sm navbar-dark menu ">
  <input type="checkbox" id="check">
  <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
  </label>
  
  <ul class="navbar-nav  d-lg-inline-flex d-xl-inline-flex d-sm-inline-flex d-md-inline-flex d-none">
    <li class="nav-item">
      <a class="nav-link <?php 
      		if (strpos($url_ok,'principal')>0) echo 'active';
      	?>" href="principal">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php 
      		if (strpos($url_ok,'asignacion')>0) echo 'active';
      	?>" href="asignacion">Asignacion</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php 
      		if (strpos($url_ok,'expediente')>0) echo 'active';
      	?>" href="expediente">Expediente Electrónico</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php 
      		if (strpos($url_ok,'audiencias')>0) echo 'active';
      	?>" href="audiencias">Audiencias</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php 
      		if (strpos($url_ok,'notificacion')>0) echo 'active';
      	?>" href="notificacion">Notificaciones</a>
    </li>    
    <li class="nav-item">
      <a class="nav-link <?php 
      		if (strpos($url_ok,'secretario')>0) echo 'active';
      	?>" href="secretario">Secretario en Turno</a>
    </li>        
  </ul>
</nav>
