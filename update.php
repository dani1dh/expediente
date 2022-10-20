<?php 
require("conexion.php");

if (isset($_POST['id_p'])) {
   

            $id_p = $_POST['id_p'];
            $nombre_p = $_POST['nombre_p'];
            $user_p = $_POST['user_p'];
            $password_p = $_POST['password_p'];
            $status = $_POST['status'];
            $genero = $_POST['genero'];
            $correo = $_POST['correo'];
            $id_tipo = $_POST['id_tipo'];
          
          if (empty($id_p)||empty($nombre_p)||empty($user_p)||empty($password_p)||empty($status)||empty($genero)||empty($correo)||empty($id_tipo)) {

            echo "llenar todos los datos";

         }else{ 

                  if (isset($_FILES['archivoId'])) {
                     $fecha_img = new DateTime();
                     $image =$fecha_img->getTimestamp()."_".$_FILES['archivoId']['name'];
                     $tmp_name = $_FILES['archivoId']['tmp_name'];
                     $image_folder = 'img/'.$image;

/*UPDATE `padres` SET `id_p`='[value-1]',`nombre_p`='[value-2]',`user_p`='[value-3]',`password_p`='[value-4]',`correo`='[value-5]',`status`='[value-6]',`genero`='[value-7]',`id_tipo`='[value-8]',`archivo`='[value-9]' WHERE 1*/
                  $modificaimg = $con->query("UPDATE padres SET nombre_p ='$nombre_p', user_p ='$user_p', password_p ='$password_p', correo ='$correo', status ='$status', genero ='$genero', id_tipo ='$id_tipo', archivo ='$image' WHERE id_p = '$id_p'");
                               move_uploaded_file($tmp_name, $image_folder);
                               echo 'Cambios Guardados';

                    
                  }else{ 

                      $modifica = $con->query("UPDATE padres SET nombre_p ='$nombre_p', user_p ='$user_p', password_p ='$password_p', correo ='$correo', status ='$status', genero ='$genero', id_tipo ='$id_tipo' WHERE id_p = '$id_p'");

                           echo "cambios guardados";

                                    
                  }
                         
         }        
  
}elseif (isset($_POST['id_h'])) {


            $id_h = $_POST['id_h'];
            $nombre_h = $_POST['nombre_h'];
            $user_h = $_POST['user_h'];
            $password_h = $_POST['password_h'];
            $genero = $_POST['genero'];
            $padre = $_POST['padre'];            
            $madre = $_POST['madre'];
            $status = $_POST['status'];
          
          if (empty($id_h)||empty($nombre_h)||empty($user_h)||empty($password_h)||empty($padre)||empty($genero)||empty($madre)) {

            echo "llenar todos los datos";

         }else{ 

                  if (isset($_FILES['archivoId'])) {
                     $fecha_img = new DateTime();
                     $image =$fecha_img->getTimestamp()."_".$_FILES['archivoId']['name'];
                     $tmp_name = $_FILES['archivoId']['tmp_name'];
                     $image_folder = 'img/'.$image;

/*UPDATE `hijos` SET `id_h`='[value-1]',`nombre_h`='[value-2]',`user_h`='[value-3]',`password_h`='[value-4]',`id_parentesco`='[value-5]',`genero`='[value-6]',`id_parentesco2`='[value-7]',`status`='[value-8]',`archivo`='[value-9]' WHERE 1*/
                  $modificaimg = $con->query("UPDATE hijos SET nombre_h ='$nombre_h', user_h ='$user_h', password_h ='$password_h',  id_parentesco ='$padre', genero ='$genero', id_parentesco2 ='$madre', status = '$status', archivo ='$image' WHERE id_h = '$id_h'");
                               move_uploaded_file($tmp_name, $image_folder);
                               echo 'Cambios Guardados';

                    
                  }else{ 

                       $modifica= $con->query("UPDATE hijos SET nombre_h ='$nombre_h', user_h ='$user_h', password_h ='$password_h',  id_parentesco ='$padre', genero ='$genero', id_parentesco2 ='$madre', status = '$status' WHERE id_h = '$id_h'");

                           echo "cambios guardados";

                                    
                  }
                         
         }    


}



?>