<?php
	$server = "localhost"; //direccion del servidor de mysql
	$mysql_usr = "root"; //usuario del servidor de mysql
	$mysql_pass = "root"; //contraseña del servidor de mysql
	$mysql_db = "mipaginaweb"; //base de datos que vamos a usar
	//conectamos al servidor con todos esos parametros
	$BBDD = mysqli_connect($server, $mysql_usr, $mysql_pass, $mysql_db)
		or die("Error al conectar con la base de datos :'(");
	//recogemos los datos del formulario mediante POST
	$usuario = $_POST["cajanombre"];
	$contrasenya = $_POST["cajacontra"];
    $email = $_POST["cajaemail"];

	//hacemos la consulta sobre el usuario
	$query = "SELECT usuario, contrasenya FROM usuarios WHERE usuario ='$usuario' AND contrasenya ='$contrasenya'";
	$result = mysqli_query($BBDD, $query);
	//comprobamos que no de ningun error la consulta
	if(!$result){
	  echo mysqli_error($BBDD);
	}
	//comprobamos que el usuario y contraseña sean correctos
	if(mysqli_num_rows($result) == 1){
		echo  Header("Location: home.html");
	} else {
		echo "usuarios o contrassenya incorrectos!!";
	}
	//cerramos la conexion con mysql
	mysqli_close($BBDD);
?>
