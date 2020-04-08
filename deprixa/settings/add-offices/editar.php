<?php


include('../../database-settings.php');
// asignamos la función de conexion a una variable
$con = conexion();
// recuperamos el id del usuario enviado por ajax
$id = $_POST['id'];
// recuperamos los datos del usuario hacemos una consulta SQL
$q = "SELECT * FROM offices WHERE id=$id";
// enviamos la consulta al método query
$result = $con->query($q);
// creamos una variable del tipo array la cual almacena todos los datos del usuario
$datos = array();
while ($row=$result->fetch_assoc()) {
	$datos[]=$row; 
}
// convertimos el array al formato json y mostramos
echo json_encode($datos);

?>