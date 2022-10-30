<?php

include "f1conn.php";
if(!$conn)
{
    die("Conexion fallida" . mysqli_connect_error());
}else{
    $Mtoken = "af599b21642927b27963b1d66694896a";
    $sql = "SELECT * FROM `datos` WHERE `token` = '$Mtoken' ";
    $stmt = mysqli_query($conn,$sql);
    if($stmt)
    {
        $jsonDataOutput=array("token"=>$Mtoken);
        $jsonOutput=array("resconseCode"=>105,"message"=>"succes","data"=>$jsonDataOutput);
        echo   json_encode($jsonOutput);
    }else{
        echo   "data not found";
    }
}

?>