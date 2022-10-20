<?php require("conexion.php"); ?>

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
			margin-left: 50vw;
		}
	</style>
</head>
<body>

	
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
      <label for="user">Nombre del usuario</label>
       <input type="text" class="form-control"  id="nombre" autocomplete="off" >
    </div>
    <div class="col">
      <label for="user">Nickname:</label>
       <input type="text" class="form-control"  id="user" autocomplete="off" >
    </div>
  </div><br>

  <div class="row">
    <div class="col">
         <?php 

$padre = mysqli_query($con, "SELECT * FROM padres where id_tipo = '2' AND genero ='1'") or die('query failed');

	
      ?>
 <label for="padre">Padre:</label>
    <select id="padre" class="form-control">
<?php while($pa = mysqli_fetch_assoc($padre)){ ?>
                  <option value="<?php echo $pa['id_p']; ?>"><?php echo $pa['nombre_p']; ?></option>
    <?php  } ?> 
              </select>
    </div>
    <div class="col">
      <?php 

$padre = mysqli_query($con, "SELECT * FROM padres where genero = '2'") or die('query failed');

	
      ?>
 <label for="madre">Madre:</label>
    <select id="madre" class="form-control">
<?php while($pa = mysqli_fetch_assoc($padre)){ ?>
                  <option value="<?php echo $pa['id_p']; ?>"><?php echo $pa['nombre_p']; ?></option>
    <?php  } ?> 
              </select>
    </div>
  </div><br>


       

     <!--  <input type="text" class="form-control" name="describcion" id="desc">--><br>
     <label for="password">Foto de perfil:</label>
<input type="file" class="form-control"  id="archivoId" autocomplete="off" ><br>
     <!--  <input type="text" class="form-control" name="describcion" id="desc">--><br>

  

 
    <div class="row">
    <div class="col">
      <label for="password">Contraseña:</label>
<input type="number" class="form-control"  id="password" autocomplete="off" >
    </div>
    <div class="col">
      <?php 

$padre = mysqli_query($con, "SELECT * FROM generos ") or die('query failed');

	
      ?>
 <label for="genero">Genero:</label>
    <select id="genero" class="form-control">
<?php while($pa = mysqli_fetch_assoc($padre)){ ?>
                  <option value="<?php echo $pa['id_g']; ?>"><?php echo $pa['nombre']; ?></option>
    <?php  } ?> 
              </select>
    </div>
  </div><br>
     

 

<input type="button" class="btn btn-success" value="Registrar usuario" onclick="insertar()">




</form>


	</div>
	 <div class="card-footer text-muted">
      
      </div>
</div>
</div>
</div><br><br>
</div>
	
</body>
</html>