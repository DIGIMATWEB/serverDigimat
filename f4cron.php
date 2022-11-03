<?php

include "f1conn.php";
mysqli_set_charset($conn,'utf8');
if(!$conn)
{
    die("Conexion fallida" . mysqli_connect_error());
}else{
    $Mtoken = "af599b21642927b27963b1d66694896a";
    $sql = "SELECT * FROM `datos` WHERE `token` = '$Mtoken' ";
    $stmt = mysqli_query($conn,$sql);
    $countElement = $stmt->num_rows;
    if($countElement > 0)
    {
        
        while ($row =$stmt->fetch_assoc()) {
           
            $myCore= $row['score'];
          //  echo   $myCore;
          
            

        }
        $Mscore=1;
        $Fvalue= $myCore+$Mscore;
           // $varcharFvalue=(string)$Fvalue;
           //este cron de momento solo actualiza un escore en la base de datos
           //este cron deberia de implementar el curl al endpoint de pedidos y enviar push notifications a la lista de usuarios que existan con token firebase
            $sql2 =  "UPDATE `datos` SET  score  = '$Fvalue' WHERE token ='$Mtoken'";
        // $stmt2 = mysqli_query($conn,$sql2);
            if(mysqli_query($conn,$sql2))
            {
           // $jsonDataOutput=array("token"=>$Mtoken,"score"=>$Fvalue);
            $jsonDataOutput=array("score"=>$Fvalue);
            $jsonOutput=array("resconseCode"=>105,"message"=>"succes","data"=>$jsonDataOutput);
            echo   json_encode($jsonOutput);
            }else{
                echo   "query did not succed 4";
            }


        
    }else{
        echo   "data not found";
    }
}

?>