<?php

include "f1conn.php";
$json = file_get_contents('php://input'); // This is the input received in raw format from Postman
$data = json_decode($json); // This is the format we need to handle array values in PHP

if (!$conn) {
    die("Conexion fallida" . mysqli_connect_error());
} else {
   
    if ($data != null) {   
        $Mtoken = $data->token;
        
        $sql = "SELECT `id`, `name`, `lastname`, `email`, `country`, `terms`, `score`, `game`, `lat_user`, `longUser`, `fecha` FROM `datos`";
        $stmt = mysqli_query($conn, $sql);
        $countElement = $stmt->num_rows;

        if ($countElement > 0) {
            $finaldata = array(); // Initialize empty array for final data
            
            // Loop through the results of the query
            while ($row = $stmt->fetch_assoc()) {
                // Prepare data structure for JSON output
                $jsonDataOutput = array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "lastname" => $row['lastname'],
                    "email" => $row['email'],
                    "country" => $row['country'],
                    "terms" => $row['terms'],
                    "score" => $row['score'],
                    "game" => $row['game'],
                    "lat_user" => $row['lat_user'],
                    "longUser" => $row['longUser'],
                    "fecha" => $row['fecha']
                );
                
                // Add data to final array
                $finaldata[] = $jsonDataOutput;
            }
            
            // Prepare JSON output
            $jsonOutput = array("resconseCode" => 105, "message" => "success", "data" => $finaldata);
            echo json_encode($jsonOutput);
            
        } else {
            echo "No rows found";
        }
    }
}

?>