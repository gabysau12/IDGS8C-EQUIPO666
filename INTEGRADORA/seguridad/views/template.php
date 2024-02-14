<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Template</title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"content="IE-edge">
	<meta name= "viewport" content="width=device-width, initial-scale=1">
	<title>Boton</title>
</head>
</body>


     
 </body>

	<style>
		body{
			background-image:url(imagenes/fodo.jpg);
			background-size: cover;
			font-size: 20px;
			font-color: white;
			color: black;
			font-weight: bolder;
		}


		nav{
			position: relative;
			margin: auto;
			width: 100%;
			font-size: 20px;
			height: auto;
			background: #800080;
			
		}

		nav ul{
			position: relative;
			margin: auto;
			width: 50%;
			text-align: center;
		
		}

		nav ul li{
			display: inline-block;
			width: 24%;
			line-height: 50px;
			list-style: none;

		
		}

		nav ul li a{
			color: white;
			text-decoration: none;
			position: center

			
	  }

		section{
			position: relative;
			margin: auto;
			width: 400px;
			
		}

		section h1{
			position: relative;
			margin: auto;
			padding: 10px;
			text-align: center;
		
			
		}

		section form{
			position: relative;
			margin: auto;
			width: 400px;

		}

		section form input{
			display: inline-block;
			padding: 10px;
			width: 95%;
			margin: 5px;
			background-color: rgba(60, 60, 60, 0.3);

		
			
		}

		section form input[type="submit"]{
			position: relative;
			margin: 20px auto;
			left: 4.5%;
			background: #FFDAB9;
			color: black;
			font-size: 20px;
			text-align: center;
			background-color: rgba(255, 255, 255);

		

		
		}

		.btn{
		display:inline-block;
		background-color:#FFDAB9;
		color: black;
		text-transform: uppercase;
		text-decoration: none;
		font-weight: 700;
		margin: 25px;
		padding: 25;
		left: 45%;
		position: relative; 
		margin: auto;
		width: 50;
		height: 20;
		background-color: rgba(255, 255, 255);
		


	}

		table{

			position: relative;
			margin: auto;
			width: 50%;
			left: -50%;
			
		}

		table thead tr th{
			padding: 10px;
		}

		table tbody tr td{
			padding: 10px;
		}
	</style>
</head>
<body>

	<header>
		<h1></h1>
	</header>

	<?php
	    include "modules/navegacion.php";
	?>
<section>

<?php 

$mvc = new MvcController();
$mvc -> enlacesPaginasController();

?>

</section>

<script src="views/js/validarRegistro.js"></script>
<script src="views/js/validarIngreso.js"></script>
<script src="views/js/validarCambio.js"></script>

</body>
</html>