<?php

include "f1conn.php";
$json = file_get_contents('php://input');//este es el input que recives en raw desde el postman
$data = json_decode($json);//esta es el formato que necesitamos para manejar en php los valores de arrays


if(!$conn)
{
    die("Conexion fallida" . mysqli_connect_error());
}else{
   
    if($data!=null)
    {   
         
        $Mtoken=$data->token;
        
        $sql = "SELECT * FROM `datos` WHERE `token` = '$Mtoken'";
        $stmt = mysqli_query($conn,$sql);
        $countElement = $stmt->num_rows;

        if($countElement > 0) {
            
            $sql2 =  "SELECT * FROM `vehicles`";
            $stmt2=mysqli_query($conn,$sql2);
            if($stmt2)
            {
               // echo   "query succed ";
                  while($row = $stmt2->fetch_assoc()){
                 $mVehicleId= $row['id_vehicle'];
                 $mVehicleLat= $row['vehicle_latitude'];
                 $mVehiclelong= $row['vehicle_longitude'];
                 $mVehicleType= $row['vehicle_type'];
                 $mVehiclegForce= $row['vehicle_gforce'];
                 $mVehicleStatus= $row['vehicle_status'];
                 $mVehicleTrayectory= $row['vehicle_trayectory'];
                 $jsonDataOutput=array("mVehicleId"=>$mVehicleId,"mVehicleLat"=>$mVehicleLat,"mVehiclelong"=>$mVehiclelong,"mVehicleType"=>$mVehicleType,"mVehiclegForce"=>$mVehiclegForce,"mVehicleStatus"=>$mVehicleStatus,"mVehicleTrayectory"=>$mVehicleTrayectory);
                 $finaldata[] =$jsonDataOutput;
                }
            }else{
                echo   "query did not succed ";
            }
            $jsonOutput=array("resconseCode"=>105,"message"=>"succes","data"=>$finaldata);
            echo   json_encode($jsonOutput);
            
    }else {

        echo "not rows found";
        }
 

    }
}


?>