<?php 
$con = new mysqli("localhost","root","","prueba_login");
session_start();

if (isset($_SESSION['id_p'])) {
    $padre_id =   $_SESSION['id_p'];
    unset($padre_id);
    
echo"<script>location.href='login.php'</script>";
}elseif (isset($_SESSION['id_h'])) {
    $user_id =   $_SESSION['id_h'];
    unset($user_id);


echo"<script>location.href='login.php'</script>";
}

session_destroy();


//$id_user = $_POST['log'];






 ?>