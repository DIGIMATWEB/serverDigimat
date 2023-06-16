<?php
include "k1conn.php";
$json = file_get_contents('php://input');//este es el input que recives en raw desde el postman
$data = json_decode($json);//esta es el formato que necesitamos para manejar en php los valores de arrays
if(!$conn)
{
    die("Conexion fallida" . mysqli_connect_error());
}
if($data!=null){
$Vidm= $data->token;//aqui si no hace nada jejeje
$Vmode= $data->mode;
$VidKey=$data->keyID;
//datos del set
$VnameKey=$data->nameKey;
$VcantidadKey=$data->cantidadKey;
$VimageKey=$data->imageKey;
$VpriceKeys=$data->priceKeys;
$VsocketKey=$data->socketKey;
$VpositionKey=$data->positionKey;
$VcomentsKeys=$data->comentsKeys;

if($Vmode==1)   ///modo 1 edita
        {
        $sql = "SELECT * FROM `tabKeys`WHERE `idKeys` = '$VidKey'" ;//where id del codigo del conductor en codigo de barras o valor
        $stmt = mysqli_query($conn,$sql);
        $countElement = $stmt->num_rows;
                if($countElement > 0) {
                    while ($row = $stmt->fetch_assoc()) {
                        $sql2 = "UPDATE tabKeys SET ".$VnameKey." = 'nameKey', ".$VcantidadKey." = 'cantidadKeys', ".$VimageKey." = 'imageKeys'
                        , ".$VpriceKeys." = 'priceKeys', ".$VsocketKey." = 'socketKey'
                        , ".$VpositionKey." = 'positionKey', ".$VcomentsKeys." = 'comentsKeys'";

                    
                        

                    $idKey=$row['idKeys'];   
                    $nameKey = $row['nameKey'];
                    $cantidadKey =  $row['cantidadKeys'];
                    $imageKeys =  $row['imageKeys'];
                    $priceKeys =  $row['priceKeys'];
                    $socketKey =  $row['socketKey'];
                    $positionKey =  $row['positionKey'];
                    $comentsKeys =  $row['comentsKeys'];
                    $jsonDataOutput=array("idKey"=>$idKey,"nameKey"=>$nameKey,"cantidadKey"=>$cantidadKey,"imageKeys"=>$imageKeys
                    ,"priceKeys"=>$priceKeys,"socketKey"=>$socketKey,"positionKey"=>$positionKey,"comentsKeys"=>$comentsKeys);
                    $finaldata[] =$jsonDataOutput;
                    }
                    if (mysqli_query($conn, $sql2)) {
                        $jsonOutput=array("resconseCode"=>105,"message"=>"succes","data"=>$finaldata);
                        echo   json_encode($jsonOutput);
                    } else {
                        $jsonOutput=array("resconseCode"=>107,"message"=>"fail","data"=>null);
                    echo   json_encode($jsonOutput);
                    }                    
                }else{
                    $jsonOutput=array("resconseCode"=>107,"message"=>"fail","data"=>null);
                    echo   json_encode($jsonOutput);
                    //echo "not rows found|";
                }
    }else if($Vmode==0){//esto debe insertar
        $sql = "INSERT INTO `tabKeys` (`nameKey`, `cantidadKeys`,`imageKeys`, `priceKeys`, `socketKey`, `positionKey`, `comentsKeys`)
                     VALUES ('".$VnameKey."','".$VcantidadKey."','".$VimageKey."', '".$VpriceKeys."', '".$VsocketKey."', '".$VpositionKey."','".$VcomentsKeys."')";
        $stmt = mysqli_query($conn,$sql);
        if (mysqli_query($conn, $sql)) {


            $jsonOutput=array("resconseCode"=>105,"message"=>"succes");
            echo   json_encode($jsonOutput);
          } else {
            $jsonOutput=array("resconseCode"=>107,"message"=>"fail","data"=>null);
            echo   json_encode($jsonOutput);
          }
    }
}else{
    echo "data not found";
}
?>