<?php
include "m1conn.php";

// Get the text value from the request body
$text = file_get_contents('php://input');





// Escape the text value to prevent SQL injection
$escapedText = mysqli_real_escape_string($conn, $text);

// Construct the SQL query with the escaped text value
$sql = "UPDATE `miBand` SET info='$escapedText ' WHERE idmi = 1 ";


// Execute the SQL query
if (mysqli_query($conn, $sql)) {
    $response = array(
        "responseCode" => 200,
        "message" => "Register Success",
        "data" => $text
    );

    echo json_encode($response);
} else {
    $errorResponse = array(
        "responseCode" => 500,
        "message" => "Error registering data",
        "error" => mysqli_error($conn)
    );

    echo json_encode($errorResponse);
}

?>