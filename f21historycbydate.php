<?php
include "f1conn.php";

// Check connection
if ($conn->connect_error) {
    $jsonResponse = array("responseCode" => 500, "message" => "Connection failed: " . $conn->connect_error);
    echo json_encode($jsonResponse);
    die();
}

// SQL query to retrieve information
$sql = "SELECT h.*
        FROM historicVehicles h
        JOIN datos d ON h.serialNumber = d.email
        ORDER BY h.dateTime DESC";

// Execute query
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Fetch data
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    
    // Group data by date and vehicleName
    $groupedData = array();
    foreach ($data as $entry) {
        $date = date("Y-m-d", strtotime($entry["dateTime"]));
        $vehicleName = $entry["serialNumber"];
        $groupedData[$date][$vehicleName][] = $entry;
    }
    
    // Insert or update data in historyByDay table
foreach ($groupedData as $date => $vehicles) {
    foreach ($vehicles as $vehicleName => $records) {
        $historical = json_encode(array("historic" => $records));
        
        // Check if the entry exists for today's date and vehicleName
        $checkQuery = "SELECT * FROM `historyByDay` WHERE `date` = '$date' AND `vehicleName` = '$vehicleName'";
        $checkResult = $conn->query($checkQuery);
        
        if ($checkResult->num_rows > 0) {
            // If the entry exists, update the historical field
            $updateQuery = "UPDATE `historyByDay` SET `historical` = '$historical' WHERE `date` = '$date' AND `vehicleName` = '$vehicleName'";
            $conn->query($updateQuery);
        } else {
            // If the entry doesn't exist, insert a new record
            $insertQuery = "INSERT INTO `historyByDay` (`date`, `vehicleName`, `historical`) VALUES ('$date', '$vehicleName', '$historical')";
            $conn->query($insertQuery);
        }
    }
}
    
    // Prepare JSON response
    $jsonResponse = array("responseCode" => 106, "message" => "Success", "data" => $data);
    echo json_encode($jsonResponse);
} else {
    // No results
    $jsonResponse = array("responseCode" => 404, "message" => "No records found");
    echo json_encode($jsonResponse);
}

// Close connection
$conn->close();
?>