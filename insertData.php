<?php

include("connection.php")
$name=$_POST['name'];
$email=$_POST['email'];
$pasword=$_POST['pasword'];


$query = mysqli_query($conn,"INSERT INTO datos (name,email,pasword) VALUES ('$name','$email','$pasword')";

if($query)
  $json= array("response" => 'success','status' => 0,"message"=>"Sumited successfully");
    //  echo "New record created successfully";
} else {
    $json= array("response" => 'error','status' => 1,"message"=>"Error")

}
header('Content-type:application/json;charset=utf-8');
echo json_encode($json);
mysqli_close($conn);
?>
