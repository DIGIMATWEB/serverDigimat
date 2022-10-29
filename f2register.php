<?php
include 'f1conn.php';
//echo("second");
$json = file_get_contents('php://input');//este es el input que recives en raw desde el postman
$data = json_decode($json);//esta es el formato que necesitamos para manejar en php los valores de arrays

if($data!=null){
//echo('valor del output    '."\n".$json."\n");
//echo($data->name);



  $Vusuario = $data->name;
  $Vapellido = $data->apellido;
  $Vemail = $data->email;
  $Vpais = $data->pais;
  $Vterms = $data->terms;
  $Vpassword = $data->password;

  if($Vusuario!="")
  {
    $token = openssl_random_pseudo_bytes(16);
    $per = bin2hex($token);
    $t = bin2hex($p);
    $sql = "INSERT INTO `datos` (`name`, `lastname`,`email`, `country`, `terms`, `score`, `game`, `pasword`,`token`) VALUES ('".$Vusuario."','".$Vapellido."','".$Vemail."', '".$Vpais."', '".$Vterms."', '0', 'false','".$Vpassword."','".$per."')";
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

}
?>
