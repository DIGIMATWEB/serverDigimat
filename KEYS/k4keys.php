<?php
include "k1conn.php";

try {
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    if (!$conn) {
        throw new Exception("Conexion fallida: " . mysqli_connect_error());
    }

    if ($data != null) {
        $Vidm = $data->token;

        $sql = "SELECT * FROM `tabKeys`";
        $stmt = mysqli_query($conn, $sql);

        if (!$stmt) {
            throw new Exception("Query execution failed: " . mysqli_error($conn));
        }

        $countElement = $stmt->num_rows;

        if ($countElement > 0) {
            $finaldata = array();

            while ($row = $stmt->fetch_assoc()) {
                $idKey = $row['idKeys'];
                $nameKey = $row['nameKey'];
                $cantidadKey = $row['cantidadKeys'];
                $imageKeys = $row['imageKeys'];
                $priceKeys = $row['priceKeys'];
                $socketKey = $row['socketKey'];
                $positionKey = $row['positionKey'];
                $comentsKeys = $row['comentsKeys'];

                $jsonDataOutput = array(
                    "idKey" => $idKey,
                    "nameKey" => $nameKey,
                    "cantidadKey" => $cantidadKey,
                    "imageKeys" => $imageKeys,
                    "priceKeys" => $priceKeys,
                    "socketKey" => $socketKey,
                    "positionKey" => $positionKey,
                    "comentsKeys" => $comentsKeys
                );

                $finaldata[] = $jsonDataOutput;
            }

            $jsonOutput = array(
                "resconseCode" => 105,
                "message" => "success",
                "data" => $finaldata
            );

            echo json_encode($jsonOutput);
        } else {
            echo "No rows found";
        }
    } else {
        echo "Data not found";
    }
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
}
?>