<?php
include "f1conn.php";

// Check connection
if ($conn->connect_error) {
    $jsonResponse = array("responseCode" => 500, "message" => "Connection failed: " . $conn->connect_error);
    echo json_encode($jsonResponse);
    die();
}

// SQL query to retrieve serialNumber and lastDateTime
$sql = "SELECT DISTINCT h.serialNumber, m.lastDateTime
        FROM historicVehicles h
        JOIN (
            SELECT serialNumber, MAX(dateTime) AS lastDateTime
            FROM historicVehicles
            GROUP BY serialNumber
        ) m ON h.serialNumber = m.serialNumber AND h.dateTime = m.lastDateTime";

// Execute query
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Fetch data
    $data = array();
    while ($row = $result->fetch_assoc()) {
        // Additional query to fetch complete record based on lastDateTime
        $dateTime = $row["lastDateTime"];
        $additionalQuery = "SELECT * FROM historicVehicles WHERE dateTime = '$dateTime' ORDER BY id DESC LIMIT 1";
        $additionalResult = $conn->query($additionalQuery);
        $additionalRow = $additionalResult->fetch_assoc();
        
        // Construct data array with flattened structure
        $data[] = array(
            "serialNumber" => $row["serialNumber"],
            "lastDateTime" => $row["lastDateTime"],
            "id" => $additionalRow["id"],
            "lat" => $additionalRow["lat"],
            "long" => $additionalRow["long"]
        );
        
        // Update datos table if match serialNumber as row email
        $checkQuery = "SELECT * FROM datos WHERE email = '{$row["serialNumber"]}'";
        $checkResult = $conn->query($checkQuery);
        if ($checkResult->num_rows == 0) {
            // If email does not exist, insert a new row
            $insertQuery = "INSERT INTO `datos` (`email`, `lat_user`, `longUser`) VALUES ('{$row["serialNumber"]}', '{$additionalRow["lat"]}', '{$additionalRow["long"]}')";
            $conn->query($insertQuery);
        } else {
            $updateQuery = "UPDATE `datos` SET lat_user = '{$additionalRow["lat"]}', longUser = '{$additionalRow["long"]}' WHERE email = '{$row["serialNumber"]}'";
            $conn->query($updateQuery);
        }
    }
    
    // Prepare JSON response
    $jsonResponse = array("responseCode" => 105, "message" => "Success", "data" => $data);
    echo json_encode($jsonResponse);
} else {
    // No results
    $jsonResponse = array("responseCode" => 404, "message" => "No records found");
    echo json_encode($jsonResponse);
}

// Close connection
$conn->close();
?>