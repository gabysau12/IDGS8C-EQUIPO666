<h1>REGISTRO DE USUARIO</h1>

<form method="post" onsubmit="return validarRegistro()">

  <label for="usuarioRegistro">Usuario</label><br>
	<input type="text" placeholder="Máximo 6 caracteres" maxlength="6" name="usuarioRegistro" id="usuarioRegistro" required>

  <label for="passwordRegistro">Contraseña</label><br>
	<input type="password" placeholder="Mínimo 6 caracteres, incluir números(s) y una mayúscula" name="passwordRegistro" id="passwordRegistro" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

  <label for="emailRegistro">Correo electrónico</label><br>
	<input type="email" placeholder="Escriba su correo electrónico correctamente" name="emailRegistro" id="emailRegistro" required>

	<p style="text-align: center"><input type="checkbox" id="terminos"><a href="#">Acepta términos y condiciones</a></p>
  
	<input type="submit" value="Enviar">

	<a   class="btn" href=http://localhost/DISPETS/dispets.html>DISPETS</a>
	
</form>

<?php

$registro = new MvcController();
$registro -> registroUsuarioController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";

	}
}


  ?>