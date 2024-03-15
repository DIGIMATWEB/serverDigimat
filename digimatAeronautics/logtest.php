<?php
include 'A1con.php';
//echo("second");
$json = file_get_contents('php://input');//este es el input que recives en raw desde el postman
$data = json_decode($json);//esta es el formato que necesitamos para manejar en php los valores de arrays

if($data!=null){
//echo('valor del output    '."\n".$json."\n");
//echo($data->name);



  $Vusuario = $data->name;
  $Vapellido = $data->apellido;

  if($Vusuario!="")
  {
    $token = openssl_random_pseudo_bytes(16);
    $per = bin2hex($token);
    $t = bin2hex($p);
    $sql = "INSERT INTO `Log` (`namelog`, `valueLog`) VALUES ('".$Vusuario."','".$Vapellido."')";
    //var_dump($sql);
    if (mysqli_query($conn, $sql)) {
          //$jsonResponse='{"code":"200","message":"New record created successfully","data":"[]"}';
          $jsonResponse=array("responseCode"=>200,"message"=>"Register Succes","data"=>$data);
            echo   json_encode($jsonResponse);
        } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
  }  else{
  //  echo"wrong data request";
  }
mysqli_close($conn);
}
?>