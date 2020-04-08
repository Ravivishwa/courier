<?php

 

include('../../database-settings.php');
// asignamos la función de conexion a una variable
$con = conexion();
// recuperamos el id del usuario enviado por ajax
$id = $_POST['id'];
// eliminamos de la tabla hacemos una consulta SQL
$q = "DELETE FROM offices WHERE id=$id";
// enviamos la consulta al método query
$con->query($q);
// retornamos un mensaje de confirmación
echo json_encode(array('msg' => 'ok'));

?>