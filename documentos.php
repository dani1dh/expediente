<?php require("conexion.php"); 
session_start();
if(isset($_SESSION['id_p'])) {
	$padre_id =   $_SESSION['id_p'];
$padre_nom = $_SESSION['nombre_p'];
	 }
?>

<!DOCTYPE html>	
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="funciones.js"></script>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	<title>Usuarios</title>
	<style type="text/css">
		.si{
			font-size: 30px;
			text-align: center;
			font-weight: bload;
			text-transform: uppercase;
			color: #ffbf00;

		}

		
		.nav-link{
			color: #fff;
			font-size: 20px;
			margin-right: 10px;
			cursor: pointer;
		}
		.btn1{
			margin-left: 45vw;
		}
	</style>
</head>
<body>

<?php $id = $_POST['id']; 

if ($id != 0) {
	?>






	
<div class="container">
	<div class="row">
<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="card">
	<div class="card-header">
		Datos de usuarios
	</div>
	<div class="card-body">
		<form enctype="multipart/form-data">

	<div class="row">
    <div class="col">
      <label for="user">Nombre del hijo:
   </label>
   <?php $hijo = mysqli_query($con, "SELECT * FROM hijos where id_h = '$id' ") or die('query failed'); 
while( $son = mysqli_fetch_assoc($hijo)){
   ?>
       <input type="text" class="form-control"    value="<?php echo $son['nombre_h']; ?>" readonly>
       <input type="hidden" class="form-control"  id="id"  value="<?php echo $id?>" >
<?php  } ?>

    </div>
    <div class="col">
      <label for="user">Nombre del padre que realiza el registro:</label>
       <input type="text" class="form-control"   autocomplete="off" value="<?php echo $padre_nom ?>" readonly>
       <input type="hidden" class="form-control"  id="id_p"  value="<?php echo $padre_id?>" >
    </div>
  </div><br>

 

       

     <!--  <input type="text" class="form-control" name="describcion" id="desc">--><br>
     <label for="password">Foto de perfil:</label>
<input type="file" class="form-control"  id="archivoId" autocomplete="off" ><br>
     <!--  <input type="text" class="form-control" name="describcion" id="desc">--><br>

  
     

 

<input type="button" class="btn btn-success" value="Registrar documento" onclick="in_p()">




</form>


	</div>
	 <div class="card-footer text-muted">
      
      </div>
</div>
</div>
</div><br><br>
</div>
	
<?php	
}else{ 
?>





	
<div class="container">
	<div class="row">
<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="card">
	<div class="card-header">
		Datos de usuarios
	</div>
	<div class="card-body">
		<form enctype="multipart/form-data">

	<div class="row">
    <div class="col">
      <label for="user">Nombre del hijo:
   </label>
   
       <input type="text" class="form-control"    value="<?php echo $padre_nom ?>" readonly>
       <input type="hidden" class="form-control"  id="id_h"  value="<?php echo $padre_id ?>" >
       	



    </div>
  
  </div><br>

 

       

     <!--  <input type="text" class="form-control" name="describcion" id="desc">-->
     <label for="password">Foto de perfil:</label>
<input type="file" class="form-control"  id="archivoId" autocomplete="off" ><br>
     <!--  <input type="text" class="form-control" name="describcion" id="desc">-->

  
     

 

<input type="button" class="btn btn-success" value="Registrar documento" onclick="in_h()">




</form>


	</div>
	 <div class="card-footer text-muted">
      
      </div>
</div>
</div>
</div><br><br>
</div>
	



<?php
}
?>


</body>
</html>