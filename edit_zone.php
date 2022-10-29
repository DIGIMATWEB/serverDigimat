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

  $existUser=0;
  $Vidzone = $data->idzone;
  $Vdots=$data->puntos;
  $Vratio=$data->radio;
//  echo($Vidzone."\n".json_encode($Vdots)."\n");//esta linea es pra probar la entrada


  $sql = "SELECT * FROM `zones` WHERE `id_zone` = '$Vidzone'";
  $stmt = mysqli_query($conn,$sql);
  $countElement = $stmt->num_rows;
  if($countElement > 0) {
     while ($row = $stmt->fetch_assoc()) {
       $Vid_zone = $row['id_zone'];
       $dotsFielt=$row['dots'];
       $existUser=1;

    //  echo   ($Vid_zone."\n". $dotsFielt );
      }
            if($existUser==0)
            {
              $jsonDataOutput=array("code"=>"107","message"=>"No data found");
        //      echo json_encode ($jsonDataOutput);
            }
            else if($existUser==1){
               //echo "\n"."el dato existe"."\n";

               $dotsS= json_encode($Vdots);
              $sql2 =  "UPDATE `zones` SET  dots  = '$dotsS' WHERE  id_zone =$Vidzone";
              if(mysqli_query($conn,$sql2))
                 {
                   $dotsF=json_decode($dotsS);

                      $sql3 =  "UPDATE `zones` SET  ratio  = '$Vratio' WHERE  id_zone =$Vidzone";
                      if(mysqli_query($conn,$sql3))
                         {
                           $jsonResponse=array("responseCode"=>105,"message"=>"Succes","Ratio"=>$Vratio,"dots"=>$dotsF);
                            echo   json_encode($jsonResponse);
                         }else {
                           echo "\n"."sql3 no succes";
                         }

                   //echo "\n"."success";
                 }else {
                   echo "\n"."sql2 no succes";
                 }
            }

  }else{
  echo "not rows found";
}
}else {

  echo   "data not found";
}
//mysqli_close($conn);
?>
