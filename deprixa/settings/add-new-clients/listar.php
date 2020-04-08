<?php


include('../../database-settings.php');
  // asignamos la función de conexion a una variable
  $con = conexion();
  // realizamos la consulta SQL para recuperar todos los registros de la tabla
  $resultado = $con->query("SELECT * FROM tbl_clients");
  // creamo una variable del tipo array la cual almacena todos los registros
  $datos = array();
  // iteramos todos los registros devueltos y llenamos el array
  while ($row = $resultado->fetch_assoc()){

   $datos[] = $row;
   
  }

  // convertimos el array al formato json y mostramos para que el Plugin Data Tables pueda formatera la información
  echo json_encode($datos);

?>