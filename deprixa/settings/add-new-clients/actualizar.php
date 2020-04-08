<?php

 

include('../../database-settings.php');
// asignamos la función de conexion a una variable
$con = conexion();
// recuperamos el cid del off_name enviado por ajax
$id = $_POST['id'];
// recuperamos y asignamos a variables los campos enviados por ajax metodo POST
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
// verificamos si esta marcado el check box activo
if(isset($_POST['estado']))
$estado = $_POST['estado'];
else
$estado = 0;


// Cotroles Basicos, evitar campos vacios
if(empty($name)){
	echo json_encode(array('msg' => 'nomvacio')); //retornamos mensaje de error
	exit(); // salimos de la ejecución
}
elseif(empty($address)){
	echo json_encode(array('msg' => 'telvacio'));
	exit();
}
elseif(empty($phone)){
	echo json_encode(array('msg' => 'usuvacio'));
	exit();
}
elseif(empty($email)){
	echo json_encode(array('msg' => 'emavacio'));
	exit();
}
elseif(empty($password)){
	echo json_encode(array('msg' => 'apevacio'));
	exit();
}

else{	
	// verificamos si esta cambiando el password
	if(empty($password)) // actualizamos la información del off_name hacemos una consulta SQL
	$consulta = "UPDATE tbl_clients SET name='$name',  address='$address', email='$email', phone='$phone', password='$password', estado='$estado' WHERE id='$id'";
	else{
	$consulta = "UPDATE tbl_clients SET name='$name',  address='$address', email='$email', phone='$phone', password='$password', estado='$estado' WHERE id='$id'";	
	}

}

// enviamos la consulta al método query
$con->query($consulta);
// retornamos un mensaje de confirmación
echo json_encode(array('msg' => 'ok'));

?>