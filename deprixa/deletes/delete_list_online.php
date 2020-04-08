<?php

 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('../database.php');
require_once('../library.php');
require_once('../funciones.php');

$delete = getParam($_GET["cid"], "-1");
$action = getParam($_GET["action"], "");
if ($action == "del") {
$sql = "DELETE FROM courier_online WHERE cid = ".sqlValue($delete, "int");
mysql_query($sql,$dbConn);
header("location: ../admin.php");
}
?>