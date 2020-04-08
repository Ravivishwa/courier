<?php

 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('../database.php');
require_once('../library.php');
require_once('../funciones.php');

$delete = getParam($_GET["id"], "-1");
$action = getParam($_GET["action"], "");
if ($action == "del") {
$sql = "DELETE FROM online_booking WHERE id = ".sqlValue($delete, "int");
mysql_query($sql);
header("location: ../online-bookings.php");
}
?>