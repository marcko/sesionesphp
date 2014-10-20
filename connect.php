<?php
$host = "localhost";
$bd = "register";
$user = "root";
$pass = "root";

//conexión al servidor y base de datos mysql
$connection = mysql_connect($host, $user, $pass);
if (!$connection) {
    die('ola k ase fallo la conexión con el servidor: ' . mysql_error());
}else{

$db_selected = mysql_select_db($bd, $connection);
if (!$db_selected) {
    die ('ola k ase fallo la  base de datos: ' . mysql_error());
}
}

?>