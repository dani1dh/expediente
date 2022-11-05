<?php 
session_start();
$con = new mysqli("localhost","root","","prueba_login");

$user = $_POST['User'];
$password = $_POST['Pass'];

if (empty($user)||empty($password)) {

   echo '<p class="si">llenar todos los datos</p>';
}

else{ 

    $sql=$con->query("SELECT * FROM  padres WHERE user_p = '$user'");
    $sql2=$con->query("SELECT * FROM  hijos WHERE user_h = '$user'");
        

                   if(mysqli_num_rows($sql) > 0){
                        if($f2 =$sql->fetch_array()){
                            $_SESSION['id_p'] = $f2['id_p'];
                            $_SESSION['user_p'] = $f2['user_p'];
                            $_SESSION['nombre_p'] = $f2['nombre_p'];
                            $_SESSION['id_tipo'] = $f2['id_tipo'];

                                 if($password == $f2['password_p'] 
                                    && $user == $f2['user_p']){

                                     echo"<script>
                                     location.href='index.php'
                                     </script>";
                                     echo '<p class="si">Bienvenido!</p>';
                                 }elseif ($password != $f2['password_p']) {
                                    echo '<p class="si">contraseña incorrecta</p>';
                                 }
                              
                   
      
                        }

                   }

                   elseif (mysqli_num_rows($sql2) > 0) {
                        if($f =$sql2->fetch_array()){
                            $_SESSION['id_h'] = $f['id_h'];
                            $_SESSION['user_h'] = $f['user_h'];
                                 if($password == $f['password_h'] 
                                    && $user == $f['user_h']){

                                     echo"<script>
                                     location.href='index.php'
                                     </script>";
                                     echo '<p class="si">Bienvenido!</p>';
                                 }elseif ($password != $f['password_h']) {
                                    echo '<p class="si">contraseña incorrecta</p>';
                                 }          
                        }

                   }
                   else{
                              echo '<p class="si">Usuario incorrecto o inexistente</p>';
                   }
   

}





 ?>