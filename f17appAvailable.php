<?php
include "f1conn.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL query to retrieve all data from the apps table
$sql = "SELECT * FROM `apps`";

// Execute query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Initialize an empty array to store all data
    $response = array();

    // Fetch all rows and store them in the response array
    while ($row = $result->fetch_assoc()) {
        $response[] = array(
            'id' => $row['id'],
            'nameApp' => $row['nameApp'],
            'version' => $row['version'],
            'available' => $row['available']
        );
    }

    // Close connection
    $conn->close();

    // Output response as JSON
    header('Content-Type: application/json');
    //echo json_encode($response);
    $jsonOutput=array("resconseCode"=>105,"message"=>"succes","data"=>$response);
    echo   json_encode($jsonOutput);

} else {
    // No results found
    echo "No data found.";
}

?>