<?php
include "m1conn.php";

$sql = "SELECT * FROM `miBand`";//valor dl QR e el QR
$stmt = mysqli_query($conn,$sql);
$countElement = $stmt->num_rows;
        if($countElement > 0) {
            while ($row = $stmt->fetch_assoc()) {
            $info=$row ['info'];
            }
            $strippedData = stripslashes($info);
            $modifiedData = str_replace('"[', '[', $strippedData);
            $modifiedData2 = str_replace(']"', ']', $modifiedData);
                
            echo $modifiedData2;
        }else{
            echo "not rows found";
        }

?>