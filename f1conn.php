<?php
$db_host    ="localhost";
$db_user    ="digimat";
$db_password="12345Aa1!";
$db_name    ="Login";

$conn  =new mysqli($db_host,$db_user,$db_password, $db_name);
mysqli_set_charset($conn,'utf8');
if(!$conn)
{
    die("Conexion fallida" . mysqli_connect_error());
}
//mysqli_close($conn);
?>
