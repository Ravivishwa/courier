<?php

 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('database.php');
require_once('library.php');

isUser();
$name = $_GET['cid'];
mysql_query("DELETE FROM courier_online WHERE cid='$name'");
echo "<script type=\"text/javascript\">
						alert(\"Selected Users successfully Removed form Database.\");
						window.location = \"admin.php/\"
					</script>";

?>