function login() {
	var user = document.getElementById('user').value;
	var password = document.getElementById('password').value;

	var datos = "User="+user+"&Pass="+password;
	$.ajax({
		url: 'validar.php', 
		type: 'POST', 
		data: datos,
	})

	.done(function(res){ 
		$('#respuesta').html(res);
	})
}

function logout() {
	

	$.ajax({
		url: 'logout.php', //Hacia donde van a enviar los valores
		
	})

	.done(function(res){ //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})
}

function user() {
	

	$.ajax({
		url: 'usuarios.php', //Hacia donde van a enviar los valores
		
	})

	.done(function(res){ //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})
}


function hijos() {
	

	$.ajax({
		url: 'registro_h.php', //Hacia donde van a enviar los valores
		
	})

	.done(function(res){ //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})
}

function perfil() {
	

	$.ajax({
		url: 'perfil.php', //Hacia donde van a enviar los valores
		
	})

	.done(function(res){ //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})
}


function insertar() {
  			
			var madre = document.getElementById('madre').value;
  			var padre = document.getElementById('padre').value;
            var genero = document.getElementById('genero').value;
			var nombre = document.getElementById('nombre').value;
			var user = document.getElementById('user').value;
			var password = document.getElementById('password').value;
     		var miArchivo = $("#archivoId").prop('files')[0];
 			var datosForm = new FormData;
 			datosForm.append("madre",madre);
 			datosForm.append("padre",padre);
 			datosForm.append("genero",genero);
 			datosForm.append("nombre",nombre);
 			datosForm.append("archivoId",miArchivo);
 			datosForm.append("user",user);
 			datosForm.append("password",password);
			var destino = "subir_h.php";

	$.ajax({

		type:'POST',
		cache:false,
		contentType:false,
		processData:false,
		data: datosForm,
		url:destino
	})

	.done(function(res){  //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})

}

function registrar() {
  			
			var nombre = document.getElementById('nombre').value;
			var user = document.getElementById('user').value;
			var correo = document.getElementById('correo').value;
			var tipo = document.getElementById('tipo').value;
            var miArchivo = $("#archivoId").prop('files')[0];
			var password = document.getElementById('password').value;
			var genero = document.getElementById('genero').value;
     		
 			var datosForm = new FormData;
 			datosForm.append("nombre",nombre);
 			datosForm.append("user",user);
 			datosForm.append("correo",correo);
 			datosForm.append("tipo",tipo);
 			datosForm.append("archivoId",miArchivo);
 			datosForm.append("password",password);
 			datosForm.append("genero",genero);
 			
			var destino = "subir_p.php";

	$.ajax({

		type:'POST',
		cache:false,
		contentType:false,
		processData:false,
		data: datosForm,
		url:destino
	})

	.done(function(res){  //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})

}

function eliminar(id){
	var idusuario = {"id" : id}

	$.ajax ({
		url: 'eliminar.php',
		type: 'POST',
		data : idusuario,
		
	})

	.done(function(res){
		$('#respuesta1').html(res);
	})
}

function delet(id_h){
	var idusuario = {"id_h" : id_h}

	$.ajax ({
		url: 'eliminar.php',
		type: 'POST',
		data : idusuario,
		
	})

	.done(function(res){
		$('#respuesta1').html(res);
	})
}

function mod(id){
	var idusuario = {"id" : id}

	$.ajax ({
		url: 'view.php',
		type: 'POST',
		data : idusuario,
		
	})

	.done(function(res){
		$('#respuesta1').html(res);
	})
}

function modificar(id_h){
	var idusuario = {"id_h" : id_h}

	$.ajax ({
		url: 'view.php',
		type: 'POST',
		data : idusuario,
		
	})

	.done(function(res){
		$('#respuesta1').html(res);
	})
}

function modificacion() {

			var id_p =document.getElementById('id_p').value;
			var nombre_p =document.getElementById('nombre_p').value;
			var user_p =document.getElementById('user_p').value
			var password_p =document.getElementById('password_p').value;
			var status =document.getElementById('status').value; 
			var genero =document.getElementById('genero').value;
			var id_tipo =document.getElementById('id_tipo').value;
			var correo =document.getElementById('correo').value;
     		var miArchivo = $("#archivoId").prop('files')[0];
 			var datosForm = new FormData;
 			datosForm.append("id_tipo",id_tipo);
 			datosForm.append("id_p",id_p);
 			datosForm.append("nombre_p",nombre_p);
 			datosForm.append("user_p",user_p);
 			datosForm.append("password_p",password_p);
 			datosForm.append("status",status);
 			datosForm.append("genero",genero);
 			datosForm.append("correo",correo);
 			datosForm.append("archivoId",miArchivo);
			var destino = "update.php";
			

	$.ajax({

		type:'POST',
		cache:false,
		contentType:false,
		processData:false,
		data: datosForm,
		url:destino
	})

	.done(function(res){  //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})

}

function update() {

			var id_h =document.getElementById('id_h').value;
			var nombre_h =document.getElementById('nombre_h').value;
			var user_h =document.getElementById('user_h').value
			var password_h =document.getElementById('password_h').value;
			var genero =document.getElementById('genero').value;
			var madre =document.getElementById('madre').value; 
			var padre =document.getElementById('padre').value;
			var status =document.getElementById('status').value;
     		var miArchivo = $("#archivoId").prop('files')[0];
 			var datosForm = new FormData;
 			datosForm.append("id_h",id_h);
 			datosForm.append("nombre_h",nombre_h);
 			datosForm.append("user_h",user_h);
 			datosForm.append("password_h",password_h);
 			datosForm.append("genero",genero);
 			datosForm.append("madre",madre);	
 			datosForm.append("padre",padre);
 			datosForm.append("status",status);
 			datosForm.append("archivoId",miArchivo);
			var destino = "update.php";
			

	$.ajax({

		type:'POST',
		cache:false,
		contentType:false,
		processData:false,
		data: datosForm,
		url:destino
	})

	.done(function(res){  //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})

}

function padres() {
	

	$.ajax({
		url: 'registro_p.php', //Hacia donde van a enviar los valores
		
	})

	.done(function(res){ //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})
}