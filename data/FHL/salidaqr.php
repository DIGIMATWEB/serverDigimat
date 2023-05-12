<?php
include "DBFHL.php";

$json = file_get_contents('php://input');
$data = json_decode($json);

try {
    // Validar la conexión a la base de datos
    if (!$conn) {
        throw new Exception("Error en la conexión a la base de datos: " . mysqli_connect_error());
    }

    // Validar la entrada
    if ($data == null) {
        throw new Exception("Datos no encontrados");
    }

    // Obtener los valores de entrada
    $Vtoken = $data->token;
    $salidaId = $data->salida;

    // Buscar la salida correspondiente
    $sql = "SELECT * FROM `salida` WHERE `idSalida` = '$salidaId'";
    $stmt = mysqli_query($conn, $sql);
    $countElement = $stmt->num_rows;
    if ($countElement != null) {  
        if ($countElement > 0) {
            // Si se encuentra la salida, obtener su id de manifiesto
            while ($row = $stmt->fetch_assoc()) {
                $idSalida = $row['idSalida'];
                $idManifest = $row['idManifest'];
                $qrSalida=$row['qrSalida'];
                $envio = $row['destinoSalida'];
            }
            if ($idManifest != null) {
                // Si se encuentra el id del manifiesto, buscar los tickets correspondientes
                $sql2 = "SELECT * FROM `tickets` WHERE `id_manifest` = '$idManifest'";
                $stmt2 = mysqli_query($conn, $sql2);
                $countElements2 = $stmt2->num_rows;

                if ($countElements2 != null) {
                    // Si se encuentran tickets, construir el array de respuesta
                    if ($countElements2 > 0) {
                        $tickets = array();
                        while ($row2 = $stmt2->fetch_assoc()) {
                            $idTicket = $row2['idTicket'];
                            $folio = $row2['folioTicket'];
                            $numeroTicket = $row2['numero_de_ticket'];
                            $sellos = array();

                            $sql3 = "SELECT * FROM `sellos` WHERE `idTicket` = '$idTicket'";
                            $stmt3 = mysqli_query($conn, $sql3);
                            $countElements3 = $stmt3->num_rows;

                            if($countElements3!=null && $countElements3 > 0){
                                while ($row3= $stmt3->fetch_assoc()) {
                                    $nombreSello = $row3['nombreSello'];
                                    $folioSello = $row3['folioSello'];
                                    $sellos[] = array('nombreSello' => $nombreSello,'folio'=>$folioSello);
                                }
                            }
                            $tickets[] = array(
                                'folio' => $folio,
                                'numerodeTicket' =>  $idTicket,
                                'Sellos' => $sellos
                            );
                        }
                        $response = array(
                            'messge' => 'Succes',
                            'code' => 105,
                            'qr' =>  $qrSalida,
                            'envio' => $envio,
                            'Tickets' => $tickets
                        );
                        echo json_encode($response);
                    } else {
                        throw new Exception("No se asignaron tickets");
                    }
                } else {
                    $tickets = array();
                    $response = array(
                        'messge' => 'Succes',
                        'code' => 105,
                        'qr' =>  $qrSalida,
                        'envio' => $envio,
                        'Tickets' => $tickets
                    );
                    echo json_encode($response);
                    //throw new Exception("No se pudo buscar los tickets");
                }
            } else {
                throw new Exception("No se asignaron datos");
            }
        } else {
            throw new Exception("No se encontraron filas");
        }
    }else {
        throw new Exception("No se encontraron filas de salida");
    }
} catch (Exception $e) {
    // Capturar excepciones y mostrar el mensaje de error correspondiente
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>