<?php
$db_host    ="localhost";
$db_user    ="digimat";
$db_password="12345Aa1!";
$db_name    ="fhl";

$conn  =new mysqli($db_host,$db_user,$db_password, $db_name);
mysqli_set_charset($conn,'utf8');
if(!$conn)
{
    die("Conexion fallida" . mysqli_connect_error());
}


$json = file_get_contents('php://input');//este es el input que recives en raw desde el postman
$data = json_decode($json);//esta es el formato que necesitamos para manejar en php los valores de arrays

if($data!=null){
  //echo('valor del output    '."\n".$json."\n"); // SELECT * FROM datos WHERE email="inghfrancisco.morales@gmail.com" AND pasword="12345";

  $Vemail = $data->email;
  $Vpassword = $data->password;
  //  echo $Vemail;
    //echo"\n";
  //  echo $Vpassword;
    //  echo"\n";
  $sql = "SELECT * FROM `Loginfhl` WHERE `user` = '$Vemail' AND pasword='$Vpassword'";

  $stmt = mysqli_query($conn,$sql);
  $countElement = $stmt->num_rows;

  if($countElement > 0) {
     while ($row = $stmt->fetch_assoc()) {
//datos de tabla data =>... id, name , lastname, email, country(city), terms , score, game, pasword
//$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
//echo json_encode($age);

          $myName =$row['user'];
          $myemail=$row['pasword'];
          $mytoken=$row['token'];

          $jsonDataOutput=array("name"=>$myName,"email"=>$myemail,"token"=>$mytoken);
          //$jsonOutput=array("resconseCode"=>200,"message"=>"succes","data"=>[$jsonDataOutput]); arreglo de objetos no necesario
          $jsonOutput=array("resconseCode"=>105,"message"=>"succes","data"=>$jsonDataOutput);
      //  $jsonResponse='{"code":"200","message":"Login succes","data":"[]"}';
      //  $jsonResponse.=$myName;
      //  $jsonResponse.=$myemail;
          echo   json_encode($jsonOutput);
     }
  }else {

  echo "not rows found";
  }



}else {

  echo   "data not found";
}

?>