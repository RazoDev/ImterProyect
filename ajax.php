<?php 
	if (isset($_POST)) {
		$nombre = $_POST["nombre"]
		$email = $_POST["email"]
		$telefono = $_POST["telefono"]
		$mensaje = $_POST["mensaje"]
		$captcha = sha1($_POST["nombre"]);
		$numero_captcha = $_COOKIE["captcha"];
		if(!preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $email))
		{
		echo "<p style='color:red'>El formato de email es incorrecto</p>";	
		}
		else if($captcha != $numero_captcha)
		{
			echo "<p style='color:red'>El Captcha no coincide</p>";
		}
		else{
			echo "<p style='color:blue'>mensaje enviado</p>";
			setcookie("captcha", "", -1);
	
 ?>

 <script>
 document.getElementById("formulario").reset();
 document.location.reload();
 </script>

 <?php 
 	}
	}
  ?>