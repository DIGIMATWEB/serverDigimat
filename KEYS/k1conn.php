<?php
$db_host    ="localhost";
$db_user    ="digimat";
$db_password="digimat";
$db_name    ="KEYS";

try {
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    mysqli_set_charset($conn, 'utf8');

    if ($conn->connect_error) {
        throw new Exception("Conexion fallida: " . $conn->connect_error);
    }

    // Rest of your code...

} catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
}
?>