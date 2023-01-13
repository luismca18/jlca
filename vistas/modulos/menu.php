<?php
$url_ok= $_SERVER["REQUEST_URI"];
?>		

<nav >
  <input type="checkbox" id="check">
  <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
  </label>
  
  <ul >

    <li >
      <a class="nav-link <?php 
      		if (strpos($url_ok,'principal')>0) echo 'active';
      	?>" href="principal">Inicio</a>
    </li>
    <li >
      <a class="nav-link <?php 
      		if (strpos($url_ok,'asignacion')>0) echo 'active';
      	?>" href="asignacion">Asignacion</a>
    </li>
    <li >
      <a class="nav-link <?php 
      		if (strpos($url_ok,'expediente')>0) echo 'active';
      	?>" href="expediente">Expediente Electrónico</a>
    </li>
    <li >
      <a class="nav-link <?php 
      		if (strpos($url_ok,'audiencias')>0) echo 'active';
      	?>" href="audiencias">Audiencias</a>
    </li>
    <li >
      <a class="nav-link <?php 
      		if (strpos($url_ok,'notificacion')>0) echo 'active';
      	?>" href="notificacion">Notificaciones</a>
    </li>    
    <li >
      <a class="nav-link <?php 
      		if (strpos($url_ok,'secretario')>0) echo 'active';
      	?>" href="secretario">Secretario en Turno</a>
    </li>        
  </ul>
</nav>
