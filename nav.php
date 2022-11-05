<?php if (isset($_SESSION['id_p'])&&$_SESSION['id_tipo'] == 1 ){

 ?>
  

<header> 



 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
   <a class="navbar-brand" href="#">
      <img src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Expediente
    </a>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" onclick="perfil()">Usuario: <?php  echo $padre_name; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="user()">Usuarios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false" href="index.php">
            Registrar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" onclick="hijos()">Registrar Hijos</a></li>
            <li><a class="dropdown-item" onclick="padres()">Registrar padres/admin</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Registrar documentos</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link" onclick="doc()">Documentos</a>
        </li>
         <li class="nav-item">
           <a class="btn1 btn btn-danger nav-link" onclick="logout()">Cerrar sesion</a>

        </li>
      </ul>
    
    </div>
  </div>
</nav><br>

</header>

<?php } elseif(isset($_SESSION['id_h'])){
 
?>

<header> 



 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
   <a class="navbar-brand" href="#">
      <img src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Expediente
    </a>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" onclick="perfil()">Usuario: <?php  echo $user_name ; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="reg_doc()">Subir documento</a>
        </li>
         <li class="nav-item">
           <a class="btn1 btn btn-danger nav-link" onclick="logout()">Cerrar sesion</a>

        </li>
      </ul>
    
    </div>
  </div>
</nav><br>

</header>

<?php } elseif (isset($_SESSION['id_p'])) {

?>

<header> 



 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
   <a class="navbar-brand" href="#">
      <img src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Expediente
    </a>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" onclick="perfil()">Usuario: <?php  echo $padre_name; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="reg_doc()" >Subir documento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="son()">Hijos</a>
        </li>
         <li class="nav-item">
           <a class="btn1 btn btn-danger nav-link" onclick="logout()">Cerrar sesion</a>

        </li>
      </ul>
    
    </div>
  </div>
</nav><br>

</header>


<?php  }  ?>