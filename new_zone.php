<?php
$db_host    ="localhost";
$db_user    ="digimat";
$db_password="12345Aa1!";
$db_name    ="Login";

$conn  =new mysqli($db_host,$db_user,$db_password, $db_name);
mysqli_set_charset($conn,'utf8');
if(!$conn)
{
    die("Conexion fallida" . mysqli_connect_error());
}


$json = file_get_contents('php://input');//este es el input que recives en raw desde el postman
$data = json_decode($json);//esta es el formato que necesitamos para manejar en php los valores de arrays

if($data!=null){


    $namezone = $data->zona->nombreZona;
    $mratio=$data->zona->radio;
    $dots=$data->zona->puntos;
    $dotsS= json_encode($dots);

    $sql = "INSERT INTO `zones` (`zone_name`,`ratio`,`dots`) VALUES('". $namezone."','". $mratio."','".$dotsS."')";

//falta comprobar que el dato existe por columna en vez de solo hacer output de la entrada data

  //   $stmt = mysqli_query($conn,$sql);
     //$countElement = $stmt->num_rows;
      //
      //
      // while ($row = $stmt->fetch_assoc()) {
      //
      //         $myzoneName = $row['zone_name'];
      //         $mydots =$row['dots'];
      //
      //         $jsonDataOutput=array("name"=>$myzoneName,"dots"=>$mydots);
      //         $jsonOutput=array("resconseCode"=>105,"message"=>"succes","data"=>$jsonDataOutput);
      //         echo json_encode($jsonOutput);
      //
      // }else {
          if (mysqli_query($conn, $sql)) {
            $jsonResponse=array("responseCode"=>105,"message"=>"Register Succes","data"=>$data);
              echo   json_encode($jsonResponse);
          }else{
          echo "not rows found";
          }

   }else {

    echo   "data not found";
  }
//  mysqli_close($conn);

  ?>
