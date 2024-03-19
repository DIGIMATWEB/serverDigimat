<?php
include "f1conn.php";

// Get the JSON data from the request
$json = file_get_contents('php://input');
$data = json_decode($json);

if (!$conn) {
    die("Conexion fallida" . mysqli_connect_error());
}

if ($data != null && isset($data->available) && isset($data->nameApp)) {
    $available = $data->available;
    $nameApp = $data->nameApp;

    // Update the value in the database
    $sql = "UPDATE `apps` SET `available` = $available WHERE `nameApp` = '$nameApp'"; // Change the condition as needed
    if (mysqli_query($conn, $sql)) {
        $jsonOutput = array("responseCode" => 105, "message" => "Success: Updated available value in the apps table");
        echo json_encode($jsonOutput);
    } else {
        $jsonOutput = array("responseCode" => 500, "message" => "Error: Failed to update available value in the apps table");
        echo json_encode($jsonOutput);
    }
} else {
    $jsonOutput = array("responseCode" => 400, "message" => "Error: Invalid data provided");
    echo json_encode($jsonOutput);
}
?>
