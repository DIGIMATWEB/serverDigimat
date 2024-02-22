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
        $sql = "SELECT * FROM `Aspect` WHERE `id_aspect` = '$Mtoken'";
        $stmt = mysqli_query($conn,$sql);
        $countElement = $stmt->num_rows;

        if( $stmt) { //$countElement > 0) {
            
            //$sql2 =  "SELECT * FROM `vehicles`";
            //$stmt2=mysqli_query($conn,$sql2);
            //if($stmt2)
           // {
               // echo   "query succed ";
                  while($row = $stmt->fetch_assoc()){
                 $mVehicleId= $row['backgroundColor'];
                 $mVehicleLat= $row['backgroundImage'];
                 $mVehiclelong= $row['logo'];
                 $mVehicleType= $row['typeAnimation'];
                 $jsonDataOutput=array("mVehicleId"=>$mVehicleId,"mVehicleLat"=>$mVehicleLat,"mVehiclelong"=>$mVehiclelong,"mVehicleType"=>$mVehicleType);
                 $finaldata[] =$jsonDataOutput;
                 }
            //}
            //else{
            //    echo   "query did not succed ";
           // }
            $jsonOutput=array("resconseCode"=>105,"message"=>"succes","data"=>$finaldata);
            echo   json_encode($jsonOutput);
            
    }else {

        echo "not rows found";
        }
        mysqli_close($conn);

    }
}


?>