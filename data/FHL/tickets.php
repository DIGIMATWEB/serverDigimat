<?php
include "DBFHL.php";
$json = file_get_contents('php://input');//este es el input que recives en raw desde el postman
$data = json_decode($json);//esta es el formato que necesitamos para manejar en php los valores de arrays
if(!$conn)
{
    die("Conexion fallida" . mysqli_connect_error());
}
if($data!=null){
$Vidm= $data->idmanifest;

$sql = "SELECT * FROM `tickets` WHERE `id_manifest` = '$Vidm'";
$stmt = mysqli_query($conn,$sql);
$countElement = $stmt->num_rows;
        if($countElement > 0) {
            while ($row = $stmt->fetch_assoc()) {
            $id=$row['idTicket'];   
            $folioTicket=$row['folioTicket'];
            $cliente = $row['cliente'];
            $documentacion =  $row['documentacion'];
            $contacto =  $row['contacto'];
            $adjunto =  $row['adjunto'];
            $productos =  $row['productos'];
            $checklist =  $row['checklist'];
            $cierre =  $row['cierre'];
            $estado =  $row['estado'];
            $destino =  $row['destino'];
            $salida =  $row['salida'];
            $regreso =  $row['regreso'];
            $georeferencia =  $row['georeferencia'];
            $latituds =  $row['latituds'];
            $longituds =  $row['longituds'];
            $evidence =  $row['evidence'];
            $fecha =  $row['fecha'];
            $jsonDataOutput=array("idTicket"=>$id,"folioTicket"=>$folioTicket,"cliente"=>$cliente,"documentacion"=>$documentacion,"contacto"=>$contacto,"adjunto"=>$adjunto,"productos"=>$productos,"checklist"=>$checklist,"cierre"=>$cierre,"estado"=>$estado,"destino"=>$destino,"salida"=>$salida,"regreso"=>$regreso,"georeferencia"=>$georeferencia,"latituds"=>$latituds,"longituds"=>$longituds,"evidence"=>$evidence,"fecha"=>$fecha);
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