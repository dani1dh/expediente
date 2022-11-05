 <?php require("conexion.php"); 
session_start();

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

<?php 	if(isset($_SESSION['id_p'])) {
	$padre_id =   $_SESSION['id_p'];

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



  
	
   
    <div class="col">
       <?php 

$padre = mysqli_query($con, "SELECT * FROM hijos where id_parentesco = '$padre_id' or id_parentesco2 = '$padre_id'") or die('query failed');

	
      ?>
 <label for="tipo">Subir documento para:</label>
    <select id="tipo" class="form-control">
<?php while($pa = mysqli_fetch_assoc($padre)){ ?>
                  <option value="<?php echo $pa['id_h']; ?>"><?php echo $pa['nombre_h']; ?></option>
    <?php  } ?> 
    <option value="0">Para mi</option>
              </select>
    </div><br>
  
 

     

 

<input type="button" class="btn btn-info" value="Seleccionar" onclick="selec()">




</form>


	</div>
	 <div class="card-footer text-muted">
      
      </div>
</div>
</div>
</div><br><br>
</div>
<?php } ?>

<div  id="respuesta2"></div>


</body>
</html>