<?php 
require("conexion.php");

if (isset($_FILES['archivoId'])) {
   $pa = $_POST['padre'];
   $ma = $_POST['madre'];
   $gen = $_POST['genero'];
   $nom = $_POST['nombre'];
   $user = $_POST['user'];
   $password = $_POST['password'];
   $fecha_img = new DateTime();
   $image = $fecha_img->getTimestamp()."_".$_FILES['archivoId']['name'];
   $tmp_name = $_FILES['archivoId']['tmp_name'];
   $image_folder = 'img/'.$image;

if (empty($user)||empty($password)||empty($pa)||empty($ma)) {
  echo '<p class="si">llenar todos los datos</p>';
}else{ 
 
      $insert = "SELECT * FROM hijos WHERE user_h = '$user'";

      $result = mysqli_query($con, $insert);
     
       if (mysqli_num_rows($result)>0) {
       echo '<p class="si">usuario existente</p>';
      }
      else{

         /*INSERT INTO `hijos`(`id_h`,  `user_h`, `password_h`, `id_parentesco`, `archivo`, `genero`, `id_parentesco2`, `status`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')*/
        
      $inser = "INSERT INTO hijos(nombre_h, user_h, password_h, id_parentesco, id_parentesco2, archivo, genero, status) VALUES('$nom', '$user', '$password', '$pa', '$ma', '$image','$gen','1')";
      
      $upload = mysqli_query($con,$inser);

      if($upload){
         move_uploaded_file($tmp_name, $image_folder);
         echo '<p class="si">usuario agregado</p>';
      }else{
          echo '<p class="si">usuario no agregado</p>';
      }

      }


   }


}else{
   echo "llenar todos los datos";
}



 ?>