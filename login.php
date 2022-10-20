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
		.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
 .si{
      background-image: linear-gradient(to left, #30cfd0 0%, #330867 100%);
      width: 100%;
      font-size: 30px;
      text-align: center;
      font-weight: bload;
      text-transform: uppercase;
      color: #fff;
      padding: 15px 15px;


    }
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
	</style>
	
</head>
<body>

<div class="respuesta2">	
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="recursos/si.svg"
          class="img-fluid" alt="Sample image" width="500px">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
      

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Inicio de sesion</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="user">Usuario</label>
            <input type="email" id="user" class="form-control form-control-lg"
              placeholder="Introdusca su usuario" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="password">Contraseña</label>
            <input type="password" id="password" class="form-control form-control-lg"
              placeholder="Introduzca la contraseña" />
            
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
          
            <a href="#!" class="text-body">Recuperar contraseña?</a>
            
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem; width: 100%;" onclick="login()">Inicio de sesion</button>
             
            <p class="small fw-bold mt-2 pt-1 mb-0">No tienes cuenta? <a href="#!"
                class="link-danger">Registrarse</a></p><br>
          </div>
          <div id="respuesta" >   </div><br>

        </form>
      </div>
    </div>
  </div>

</section>

</div>


</body>
</html>