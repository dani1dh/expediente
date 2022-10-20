<?php 

$con = new mysqli("localhost","root","","prueba_login");

if($con->connect_errno)
{
	echo"algo salio mal con la base de datos:(
	".$mysqli-> connect_errno.")".$mysqli ->
	connect_errno;
}


 ?>