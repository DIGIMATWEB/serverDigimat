<?php
include "f1conn.php";
$json = file_get_contents('php://input');//este es el input que recives en raw desde el postman
$data = json_decode($json);//esta es el formato que necesitamos para manejar en php los valores de arrays

if($data!=null){

  $VuserId = $data->userId;
  $sql = "SELECT * FROM `menusByUser` WHERE `userId` = '$VuserId' ";

  $stmt = mysqli_query($conn,$sql);
  $countElement = $stmt->num_rows;

  if($countElement > 0) {
     while ($row = $stmt->fetch_assoc()) {

          $menus = json_decode($row['menusJson']);

         // $jsonDataOutput = array("menus" => $menus); // Now $menus is an array se comento para evitar nesteo
          $jsonOutput = array("resconseCode" => 105, "message" => "success", "data" => $menus);
          echo json_encode($jsonOutput);
     }
  }else {

  echo "not rows found";
  }

  mysqli_close($conn);

}else {

  echo   "data not found";
  mysqli_close($conn);
}

?>