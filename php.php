<?php require_once('conexion.php'); ?>
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexion = "Host de la DB";
$database_conexion = "Nombre de la DB";
$username_conexion = "Nombre de Usuario";
$password_conexion = "Password de la DB";
$conexion = mysql_pconnect($hostname_conexion, $username_conexion, $password_conexion) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
