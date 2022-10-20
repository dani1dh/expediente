<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="funciones.js"></script>
    <title>Consulta</title>
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

    <?php if (isset($_POST['id'])) {
        ?>


    <center><h1>Modifica</h1></center>
  
    <div class="container"> 
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
<form>
    <?php
        $id_usuario = $_POST['id'];
        require("conexion.php");
        $modifica = mysqli_query($con, "SELECT p.*, g.nombre, u.tipo
        FROM padres p
        INNER JOIN generos g on g.id_g = p.genero  
        INNER JOIN user_tipo u on u.id_u = p.id_tipo
        where id_p = '$id_usuario' ") or die('query failed');
        WHILE($pa = mysqli_fetch_array($modifica)){
    ?>
    <div class="mb-3">
         <label for="id_p" class="form-label">No. Usuario:</label>
         <input type="text" id="id_p" value="<?php echo $pa['id_p']?>" class="form-control"  readonly>
    </div>
    <div class="mb-3">
         <label for="nombre_p" class="form-label">Nombre:</label>
         <input type="text" id="nombre_p" value="<?php echo $pa['nombre_p']?>" class="form-control" >
    </div>
    <div class="mb-3">
         <label for="user_p" class="form-label">Usuario:</label>
         <input type="text" id="user_p" value="<?php echo $pa['user_p']?>" class="form-control" >
    </div>
    <div class="mb-3">
         <label for="password_p" class="form-label">Password:</label>
         <input type="text" id="password_p" value="<?php echo $pa['password_p']?>" class="form-control" >
    </div>
     <div class="mb-3">
         <label for="correo" class="form-label">Correo:
         </label>
         <input type="text" id="correo" value="<?php echo $pa['correo']?>" class="form-control" >
    </div>
     <div class="mb-3">

 <label for="status" class="form-label">Status:
         </label>
    <select id="status" class="form-control">

    
    <option value="<?php echo $pa['status']?>"><?php if ($pa['status'] == 1) {
        echo "ACTIVA";
    } ?></option>
      <option >---------------</option>
      <?php $uno = 1; $cero = 0; ?>
    <option value="<?php echo $cero ?>">Inactiva</option>
    <option value="<?php echo $uno ?>">Activa</option>
              </select>
    
    </div>



     <div class="mb-3">
          <?php 

$genero = mysqli_query($con, "SELECT * FROM generos") or die('query failed');

    
      ?>
 <label for="genero" class="form-label">Genero:
         </label>
    <select id="genero" class="form-control">

     <option value="<?php echo $pa['genero']; ?>"><?php echo $pa['nombre']; ?></option>
     <option >---------------</option>
     <?php while($ge = mysqli_fetch_assoc($genero)){ ?>
                  <option value="<?php echo $ge['id_g']; ?>"><?php echo $ge['nombre']; ?></option>
    <?php  } ?> 
              </select>


    </div>

    <div class="mb-3">
          <?php 

$tipo = mysqli_query($con, "SELECT * FROM user_tipo") or die('query failed');

    
      ?>
 <label for="id_tipo" class="form-label">Tipo de cuenta:
         </label>
    <select id="id_tipo" class="form-control">

    
    <option value="<?php echo $pa['id_tipo']?>"><?php echo $pa['tipo']; ?></option>
      <option >---------------</option>
      <?php while($ti = mysqli_fetch_assoc($tipo)){ ?>
                  <option value="<?php echo $ti['id_u']; ?>"><?php echo $ti['tipo']; ?></option>
    <?php  } ?> 
              </select>


    </div>


    <div class="mb-3">
         <label for="archivoId" class="form-label">Imagen:</label>
        
         <input type="file"  id="archivoId" value="<?php echo $pa['archivo']?>  class="form-control">
    </div>

    <center><input type="button"  value="Modificar" class="btn btn-primary" style="width: 100%;" onclick="modificacion()"></center><br>

 <?php } ?>
</form>
</div>




 <?php   } elseif (isset($_POST['id_h'])) {
 ?>

  <center><h1>Modifica</h1></center>
  
    <div class="container"> 
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
<form>
    <?php
        $id_hijo = $_POST['id_h'];
        require("conexion.php");
        $modifica = $con->query("SELECT h.*, g.nombre FROM hijos h
        INNER JOIN generos g ON h.genero = g.id_g
        WHERE id_h = '$id_hijo'");
        WHILE($si = mysqli_fetch_array($modifica)){
    ?>
    <div class="mb-3">
         <label for="id_h" class="form-label">No. Usuario:</label>
         <input type="text" id="id_h" value="<?php echo $si['id_h']?>" class="form-control"  readonly>
    </div>
    <div class="mb-3">
         <label for="nombre_h" class="form-label">Nombre:</label>
         <input type="text" id="nombre_h" value="<?php echo $si['nombre_h']?>" class="form-control" >
    </div>
    <div class="mb-3">
         <label for="user_h" class="form-label">Usuario:</label>
         <input type="text" id="user_h" value="<?php echo $si['user_h']?>" class="form-control" >
    </div>
    <div class="mb-3">
         <label for="password_h" class="form-label">Password:</label>
         <input type="text" id="password_h" value="<?php echo $si['password_h']?>" class="form-control" >
    </div>
    <div class="mb-3">
         <label for="genero" class="form-label">Genero:
         </label>
    <select id="genero" class="form-control">
     <?php 

$genero = mysqli_query($con, "SELECT * FROM generos") or die('query failed');

    
      ?>
     <option value="<?php echo $si['genero']; ?>"><?php echo $si['nombre']; ?></option>
     <option >---------------</option>
     <?php while($ge = mysqli_fetch_assoc($genero)){ ?>
                  <option value="<?php echo $ge['id_g']; ?>"><?php echo $ge['nombre']; ?></option>
    <?php  } ?> 
              </select>
    </div>

     <div class="mb-3">
         <label for="madre" class="form-label">Madre:
         </label>
    <select id="madre" class="form-control">
     <?php 

$select = mysqli_query($con, "SELECT h.*, p.nombre_p, p.id_p FROM hijos h INNER JOIN padres p ON h.id_parentesco2 = p.id_p  WHERE id_h = '$id_hijo'") or die('query failed');
while($proy= mysqli_fetch_assoc($select)){
    
      ?>
     <option value="<?php echo $proy['id_p']; ?>"><?php echo $proy['nombre_p']; ?></option>
       <?php  } ?> 


       <?php 

$padre = mysqli_query($con, "SELECT * FROM padres where genero = '2'") or die('query failed');

    
      ?>
     <option >---------------</option>
     <?php while($pa = mysqli_fetch_assoc($padre)){ ?>
                  <option value="<?php echo $pa['id_p']; ?>"><?php echo $pa['nombre_p']; ?></option>
    <?php  } ?> 
              </select>
    </div>

      <div class="mb-3">
         <label for="padre" class="form-label">Padre:
         </label>
    <select id="padre" class="form-control">
     <?php 

$select = mysqli_query($con, "SELECT h.*, p.nombre_p, p.id_p FROM hijos h INNER JOIN padres p ON h.id_parentesco = p.id_p  WHERE id_h = '$id_hijo'") or die('query failed');
while($pro= mysqli_fetch_assoc($select)){
    
      ?>
     <option value="<?php echo $pro['id_p']; ?>"><?php echo $pro['nombre_p']; ?></option>
       <?php  } ?> 


       <?php 

$padre = mysqli_query($con, "SELECT * FROM padres where genero = '1' and id_tipo = '2'") or die('query failed');

    
      ?>
     <option >---------------</option>
     <?php while($pa = mysqli_fetch_assoc($padre)){ ?>
                  <option value="<?php echo $pa['id_p']; ?>"><?php echo $pa['nombre_p']; ?></option>
    <?php  } ?> 
              </select>
    </div>

 <div class="mb-3">

 <label for="status" class="form-label">Status:
         </label>
    <select id="status" class="form-control">

    
    <option value="<?php echo $si['status']?>"><?php if ($si['status'] == 1) {
        echo "ACTIVA";
    } ?></option>
      <option >---------------</option>
      <?php $uno = 1; $cero = 0; ?>
    <option value="<?php echo $cero ?>">Inactiva</option>
    <option value="<?php echo $uno ?>">Activa</option>
              </select>
    
    </div>


    <div class="mb-3">
         <label for="archivoId" class="form-label">Imagen:</label>
        
         <input type="file"  id="archivoId" value="<?php echo $si['archivo']?>  class="form-control">
    </div>
    <center><input type="button" name="enviar" value="GUARDAR" class="btn btn-primary" style="width: 100%;" onclick="update()"></center><br>

 <?php } ?>
</form>
</div>

<?php } ?>



</body>
</html>