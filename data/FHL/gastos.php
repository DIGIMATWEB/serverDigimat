<?php
include "DBFHL.php";
$json = file_get_contents('php://input');//este es el input que recives en raw desde el postman
$data = json_decode($json);//esta es el formato que necesitamos para manejar en php los valores de arrays
if(!$conn)
{
    die("Conexion fallida" . mysqli_connect_error());
}
if($data!=null){
$Vidm= $data->token;//aqui si no hace nada jejeje

$sql = "SELECT * FROM `gastos`";//valor dl QR e el QR
$stmt = mysqli_query($conn,$sql);
$countElement = $stmt->num_rows;
        if($countElement > 0) {
            while ($row = $stmt->fetch_assoc()) {//aqui deberia ir un array con toda la informacion de manifest contuctor y unidad como
            $manifestGastos= $row['manifestGastos'];
            $operadorGastos = $row['operadorGastos'];
            $statusGastos =  $row['statusGastos'];
            $jsonDataOutput=array("manifestGastos"=>$manifestGastos,"operadorGastos"=>$operadorGastos,"statusGastos"=>$statusGastos);
            $finaldata[] =$jsonDataOutput;
            }
            $jsonOutput=array("resconseCode"=>105,"message"=>"succes","data"=>$finaldata);
            echo   json_encode($jsonOutput);
            
        }else{
            echo "not rows found";
        }
}else{
    echo "data not found";
}
?>