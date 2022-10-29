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


  $Vtoken = $data->token;

  $sql = "SELECT * FROM `zones`";
  $stmt = mysqli_query($conn,$sql);
  $countElement = $stmt->num_rows;
//spendiente validar request correcto
  if($countElement > 0) {
     while ($row = $stmt->fetch_assoc()) {
              $idzone=   $row['id_zone'] ;
              $zonename =  $row['zone_name'];
              $ratioZone=$row['ratio'];
              $dots= $row['dots'];
              $dotsF=json_decode($dots);
              $jsonDataOutput=array("zoneId"=>$idzone,"zoneName"=>$zonename,"ratio"=>$ratioZone,"dots"=>$dotsF);
              $finaldata[] =$jsonDataOutput;

             }
               $jsonOutput=array("resconseCode"=>105,"message"=>"succes","data"=>$finaldata);
             print json_encode($jsonOutput);




        }else {

        echo "not rows found";
        }
}else {

  echo   "data not found";
}
//mysqli_close($conn);
?>
