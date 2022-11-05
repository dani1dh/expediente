<?php 
require("conexion.php");
 if (isset($_FILES['archivoId'])) {
	



			if (isset($_POST['id'])) {

			   $id= $_POST['id'];
			   $id_p = $_POST['id_p'];
			   $fecha_img = new DateTime();
			   $image = $fecha_img->getTimestamp()."_".$_FILES['archivoId']['name'];
			   $tmp_name = $_FILES['archivoId']['tmp_name'];
			   $image_folder = 'documentos/'.$image;

		  $inser = "INSERT INTO documentos( id_hijo, id_padre, nombre_doc,  status) VALUES('$id', '$id_p', '$image', '1')";
		      
		      $upload = mysqli_query($con,$inser);

							      if($upload){
							         move_uploaded_file($tmp_name, $image_folder);
							         echo '<p class="si">documento guardado</p>';
							      }else{
							          echo '<p class="si">documento no guardado</p>';
							      }

			}elseif ($_POST['id_h']) {
				
			   $id_h= $_POST['id_h'];
			   $fecha_img = new DateTime();
			   $image = $fecha_img->getTimestamp()."_".$_FILES['archivoId']['name'];
			   $tmp_name = $_FILES['archivoId']['tmp_name'];
			   $image_folder = 'documentos/'.$image;

		  $inser = "INSERT INTO documentos_pa(  id_padre, nombre_doc,  status) VALUES('$id_h',  '$image', '1')";
		      
		      $upload = mysqli_query($con,$inser);

							      if($upload){
							         move_uploaded_file($tmp_name, $image_folder);
							         echo '<p class="si">documento guardado</p>';
							      }else{
							          echo '<p class="si">documento no guardado</p>';
							      }


			}

}else{
	echo '<p class="si">llenar todos los datos</p>';
}




 ?>