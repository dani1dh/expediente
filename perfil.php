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
	<?php if (isset($_SESSION['id_p'])) { 
$padre_id = $_SESSION['id_p'];
$tipo = $_SESSION['id_tipo'];
		?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-3"></div>
 		<div class="col-md-8">
 			 <?php 

$padres = mysqli_query($con, "SELECT p.*, g.nombre, u.tipo FROM padres p 
	INNER JOIN user_tipo u on u.id_u = p.id_tipo
	INNER JOIN generos g on g.id_g = p.genero
	where id_p = '$padre_id' ") or die('query failed');
while($proyecto = mysqli_fetch_assoc($padres)){
	
      ?>
      <div class="card" style="width: 450px; ">
  <img src="img/<?php echo $proyecto['archivo']; ?>" alt="perfil" class="card-img-top" height="380px">
  <div class="card-body">
    <p class="card-text"><b>Nombre:</b> <?php echo $proyecto['nombre_p']; ?></p>
    <p class="card-text"><b>Nickname:</b>  <?php echo $proyecto['user_p']; ?></p>
    <p class="card-text"><b>Contraseña:</b> <?php echo $proyecto['password_p']; ?></p>
    <p class="card-text"><b>Correo:</b> <?php echo $proyecto['correo']; ?></p>
    <p class="card-text"><b>Cuenta:</b>  <?php if ($proyecto['status'] == 1) {
			  	echo "Activa";
			  }else{
			  	echo "Inactiva";
			  } ?></p>
	<p class="card-text"><b>Genero:</b> <?php echo $proyecto['nombre']; ?></p>
    <p class="card-text"><b>Tipo:</b> <?php echo $proyecto['tipo']; ?></p>


    <?php if ($tipo == 2) { ?>
    	<button type="button" class="btn btn-primary" onclick="mod(<?php echo $proyecto['id_p'];?>)">Modificar</button>
  <?php  } ?>
    

  </div>
</div>


 		</div>
 	</div>
 </div><br>
<?php } } elseif (isset($_SESSION['id_h'])) { 
$user_id = $_SESSION['id_h'];
	?>

<div class="container">
 	<div class="row">
 		<div class="col-md-3"></div>
 		<div class="col-md-8">
 			 <?php 

$hijos = mysqli_query($con, "SELECT h.*, g.nombre, p.nombre_p FROM hijos h
  INNER JOIN generos g on  g.id_g = h.genero
  INNER JOIN padres p ON h.id_parentesco2 = p.id_p
	where id_h = '$user_id' ") or die('query failed');
while($son = mysqli_fetch_assoc($hijos)){
	
      ?>
      <div class="card" style="width: 450px;">
  <img src="img/<?php echo $son['archivo']; ?>" alt="perfil" class="card-img-top" height="400px">
  <div class="card-body">
    <p class="card-text"><b>Nombre:</b> <?php echo $son['nombre_h']; ?></p>
    <p class="card-text"><b>Nickname:</b>  <?php echo $son['user_h']; ?></p>
    <p class="card-text"><b>Contraseña:</b> <?php echo $son['password_h']; ?></p>
    <?php 

$select = mysqli_query($con, "SELECT h.*, p.nombre_p FROM hijos h INNER JOIN padres p ON h.id_parentesco = p.id_p") or die('query failed');
while($son1 = mysqli_fetch_assoc($select)){
	
      ?>
    <p class="card-text"><b>Padre: </b><?php echo $son1['nombre_p']; ?></p>
  <?php } ?>
    <p class="card-text"><b>Madre:</b> <?php echo $son['nombre_p']; ?></p>
    <p class="card-text"><b>Cuenta:</b>  <?php if ($son['status'] == 1) {
			  	echo "activa";
			  } ?></p>
	<p class="card-text"><b>Genero:</b> <?php echo $son['nombre']; ?></p>
    

  </div>
</div>


 		</div>
 	</div>
 </div><br>


<?php } } ?>

</body>
</html>


