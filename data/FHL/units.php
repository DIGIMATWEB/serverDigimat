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

$sql = "SELECT * FROM `unidades`";//where id del codigo del vehiculo en codigo de barras o valor
$stmt = mysqli_query($conn,$sql);
$countElement = $stmt->num_rows;
        if($countElement > 0) {
            while ($row = $stmt->fetch_assoc()) {
            $id=$row['id'];   
            $nameVehicle = $row['nameVehicle'];
            $vehicleType =  $row['vehicleType'];
            $plate =  $row['plate'];
            $photo =  $row['photo'];
            
            $jsonDataOutput=array("id"=>$id,"nameVehicle"=>$nameVehicle,"vehicleType"=>$vehicleType,"plate"=>$plate,"photo"=>$photo);
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