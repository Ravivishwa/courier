<?php

 

function conexion()
{ 
// ** MySQL ** // 
global $DB_HOST; 
global $DB_USER; 
global $DB_PASSWORD; 
global $DB_NAME; 

$DB_HOST = 'localhost';
$DB_USER = 'deprixa25';
$DB_PASSWORD = 'Mega@09731';
$DB_NAME = 'deprixa25';

$mysqli = @new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME); 
 if (mysqli_connect_errno()) {
    printf(error_db_connect());
    exit();
    }
    return $mysqli;
}

?>