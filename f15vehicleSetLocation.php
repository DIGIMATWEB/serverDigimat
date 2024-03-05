<?php
include "f1conn.php";
$json = file_get_contents('php://input');//este es el input que recives en raw desde el postman
$data = json_decode($json);//esta es el formato que necesitamos para manejar en php los valores de arrays

if($data!=null){

  $VuserSerial = $data->serialNumber;
  $VuserLat = $data->lat;
  $VuserLong = $data->long;
  $sql = "INSERT INTO `historicVehicles` (` serialNumber`, `lat`,`long`) VALUES ('".$VuserSerial."','".$VuserLat."','".$VuserLong."')";

  if (mysqli_query($conn, $sql)) {



    //$jsonResponse='{"code":"200","message":"New record created successfully","data":"[]"}';
    $jsonResponse=array("responseCode"=>200,"message"=>"Register Succes","data"=>$data);
      echo   json_encode($jsonResponse);
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}else {

  echo   "data not found";
  mysqli_close($conn);
}

?>