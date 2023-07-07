<?php
include "m1conn.php";

// Get the JSON data from the request body
$json = file_get_contents('php://input');

// Decode the JSON data
$data = json_decode($json);

// Check if the JSON decoding was successful
if ($data != null) {
    // Escape the data to prevent SQL injection
    $escapedData = mysqli_real_escape_string($conn, json_encode($data));

    // Construct the SQL query with the escaped data
    $sql = "UPDATE `miBand` SET info='$escapedData ' WHERE idmi= 1 ";

    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        // Prepare the response data
        $response = array(
            "responseCode" => 200,
            "message" => "Register Success",
            "data" => $data
        );

        // Convert the response data to JSON
        $jsonResponse = json_encode($response);

        // Output the JSON response
        echo $jsonResponse;
    } else {
        $errorResponse = array(
            "responseCode" => 500,
            "message" => "Error registering data",
            "error" => mysqli_error($conn)
        );

        // Convert the error response data to JSON
        $jsonErrorResponse = json_encode($errorResponse);

        // Output the JSON error response
        echo $jsonErrorResponse;
    }
} else {
    $errorResponse = array(
        "responseCode" => 400,
        "message" => "Invalid JSON data",
        "error" => "Failed to decode JSON"
    );

    // Convert the error response data to JSON
    $jsonErrorResponse = json_encode($errorResponse);

    // Output the JSON error response
    echo $jsonErrorResponse;
}

?>