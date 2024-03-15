<?php
include "f1conn.php";
$json = file_get_contents('php://input');//este es el input que recives en raw desde el postman
$data = json_decode($json);//esta es el formato que necesitamos para manejar en php los valores de arrays


if($data!=null){
//echo('valor del output    '."\n".$json."\n");
//echo($data->name);

$VidApp = $data->idApp;
$VappName = $data->appName;

if($VappName!="")
  {
    $sql = "SELECT * FROM `apps` WHERE `id` = '$VidApp' AND nameApp='$VappName'";
    $stmt = mysqli_query($conn,$sql);
    $countElement = $stmt->num_rows;
  
    if($countElement > 0) {
        while ($row = $stmt->fetch_assoc()) {
            

                      $myAppName = $row['nameApp'];
                      $myStatus =$row['available'];
                      $jsonDataOutput=array("nameApp"=>$myAppName,"available"=>$myStatus);
                      $jsonOutput=array("resconseCode"=>200,"message"=>"succes","data"=>$jsonDataOutput);
                      echo   json_encode($jsonOutput);
                 }
    }else{
        $finaldata[] =$jsonDataOutput;
        $jsonOutput=array("resconseCode"=>104,"message"=>"fail no rows found","data"=>$jsonDataOutput);
        echo   json_encode($jsonOutput);
    }
  }else{
    $finaldata[] =$jsonDataOutput;
    $jsonOutput=array("resconseCode"=>106,"message"=>"fbad request","data"=>$jsonDataOutput);
    echo   json_encode($jsonOutput);
  }
mysqli_close($conn);
}
?>