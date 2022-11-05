<?php require("conexion.php"); 
session_start();
	$padre_id =   $_SESSION['id_p'];

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
	

<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
			<div class="col-md-10">
			<div class="table-responsive">
<table class="table ">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre de usuario</th>
			<th>Usuario</th>
			<th>Contraseña:</th>
			<th>Padre:</th>
			<th>Madre:</th>
			<th>Archivos:</th>
			<th>Status:</th>
            <th>Genero:</th>
			<th>Eliminar</th>
			<th>Modificar</th>
		</tr>
	</thead>
	<tbody class="table-group-divider">

     <?php 

$select_product = mysqli_query($con, "SELECT h.*, g.nombre, p.nombre_p FROM hijos h INNER JOIN padres p ON h.id_parentesco = p.id_p 
    INNER JOIN generos g on  g.id_g = h.genero 
    WHERE id_parentesco = '$padre_id' OR id_parentesco2 = '$padre_id'") or die('query failed');

$select = mysqli_query($con, "SELECT h.*, p.nombre_p FROM hijos h INNER JOIN padres p ON h.id_parentesco2 = p.id_p WHERE id_parentesco = '$padre_id' OR id_parentesco2 = '$padre_id'") or die('query failed');

while($proyecto = mysqli_fetch_assoc($select_product)){
	
      ?>

		<tr>
			<td><?php echo $proyecto['id_h']; ?></td>
			<td><?php echo $proyecto['nombre_h']; ?></td>
			<td><?php echo $proyecto['user_h']; ?></td>
			<td><?php echo $proyecto['password_h']; ?></td>
			<td><?php echo $proyecto['nombre_p']; ?></td>
			<td>
			 <?php 


$proy= mysqli_fetch_assoc($select);
	
      ?>
			<?php echo $proy['nombre_p']; ?>
		
			</td>
			<td><a class="btn btn-primary" onclick="">Ver</a></td>

            <td><?php if ($proyecto['status'] == 1) {
			  	echo "Activa";
			  }else{
			  	echo "Inactiva";
			  } ?></td>
			<td><?php echo $proyecto['nombre']; ?></td>
	        <td><a class="btn btn-danger " onclick="delet(<?php echo $proyecto['id_h'];?>)">Eliminar</a></td>
            <td><a class="btn btn-success " onclick="modificar(<?php echo $proyecto['id_h'];?>)">Modificar</a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>

</div>
		</div>


	</div>
	<div class="col-md-1"></div>
</div>

</body>
</html>
