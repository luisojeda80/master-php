<?php
//var_dump($_POST);
if(isset($_POST['submit'])){
	
	$nombre = isset($_POST['nombre']) ? $_POST['nombre']:false;
	} else{
		$nombre = false;
	}
	if(isset($_POST['apellido'])){
		$apellido = $_POST['apellido'];
	}else{
		$apellido = false;
	}
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}else{
		$email = false;
	}
	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}else{
		$password = false;
	}
//Array de Errores
	$errores = array();

//Validar los datos
//nombre
if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
		$nombre_validado = true;
		//el nombre es correcto";
	}else{
		$nombre_validado = false;
		$errores['nombre'] = "el nombre es incorrecto";
	}
//validar apellido

if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/",$apellido)){
		$apellido_validado = true;
		//el nombre es correcto";
	}else{
		$apellido_validado = false;
		$errores['apellido'] = "el apellido es incorrecto";
	}

//validar email

if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$email_validado = true;
		//el nombre es correcto";
	} else { 
		$email_validado = false;
		$errores['email'] = "el email es incorrecto";
	}

//validar password

if(!empty($password)){
		$password_validado = true;
		//el nombre es correcto";
	} else { 
		$password_validado = false;
		$errores['password'] = "el password no debe estar en blanco";
	}
if(empty($errores)){
	echo "Datos correctos"; 
} else{
	var_dump($errores);
}	
	
?>