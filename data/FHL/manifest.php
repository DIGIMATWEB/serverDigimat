<?php
include "DBFHL.php";
$json = file_get_contents('php://input');//este es el input que recives en raw desde el postman
$data = json_decode($json);//esta es el formato que necesitamos para manejar en php los valores de arrays
if(!$conn)
{
    die("Conexion fallida" . mysqli_connect_error());
}
if($data!=null){
$Vtoken = $data->token;

$sql = "SELECT * FROM `manifest` WHERE `token` = '$Vtoken'";//where id del codigo del manifiesto en codigo de barras o valor
$stmt = mysqli_query($conn,$sql);
$countElement = $stmt->num_rows;
        if($countElement > 0) {
            while ($row = $stmt->fetch_assoc()) {
            $manifest=   $row['manifestRef'] ;
            $cedis =  $row['cedis'];
            $referencia=$row['referencia'];
            $supervisor= $row['supervisor'];     
            $vehiculo=   $row['vehiculo'] ;
            $salida =  $row['salida'];
            $placa=$row['placa'];
            $regreso= $row['regreso'];  
            $validacion= $row['validacion'];  

            $jsonDataOutput=array("manifestRef"=>$manifest,"cedis"=>$cedis,"referencia"=>$referencia,
            "supervisor"=>$supervisor,"vehiculo"=>$vehiculo,"salida"=>$salida,"placa"=>$placa,"regreso"=>$regreso,
            "validacion"=>$validacion);
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