<?php 
require ("conexion.php");

if (isset($_POST['id'])) {
	$id_usuario = $_POST['id'];



$eliminar = $con->query("DELETE FROM padres WHERE id_p = $id_usuario ");

			if ($eliminar) {
				echo 'Usuario Eliminado';
			    
			}

			else{
				echo 'Problemas al borrar, debido al uso o relacion con otros usuarios';
			 }

}elseif (isset($_POST['id_h'])) {
	$id = $_POST['id_h'];

$delete = $con->query("DELETE FROM hijos WHERE id_h = $id ");

			if ($delete) {
				echo 'Usuario Eliminado';
			    
			}

			else{
				echo 'Problemas al borrar, debido al uso o relacion con otros usuarios';
			 }
}

?>