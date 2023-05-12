<?php
$db_host    ="localhost";
$db_user    ="digimat";
$db_password="12345Aa1!";
$db_name    ="fhl";

$conn  =new mysqli($db_host,$db_user,$db_password, $db_name);
mysqli_set_charset($conn,'utf8');
if(!$conn)
{
    echo "conexion exitosa";
    die("Conexion fallida" . mysqli_connect_error());
}
//mysqli_close($conn);
?>
