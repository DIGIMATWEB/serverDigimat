<?php
include "f1conn.php";

// Check connection
if ($conn->connect_error) {
    $jsonResponse = array("responseCode" => 500, "message" => "Connection failed: " . $conn->connect_error);
    echo json_encode($jsonResponse);
    die();
}

// SQL query to truncate historicVehicles table
$truncateQuery = "TRUNCATE TABLE historicVehicles";

// Execute truncate query
if ($conn->query($truncateQuery) === TRUE) {
    $truncateResponse = array("responseCode" => 105, "message" => "historicVehicles table truncated successfully");
    echo json_encode($truncateResponse);
} else {
    $truncateResponse = array("responseCode" => 500, "message" => "Error truncating historicVehicles table: " . $conn->error);
    echo json_encode($truncateResponse);
}

// Close connection
$conn->close();
?>