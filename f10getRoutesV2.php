<?php
include "f1conn.php";
$ch = curl_init();

$json = file_get_contents('php://input');
$data = json_decode($json);

$morigin = $data->origin;
$mdestination =  $data->destination;
$mwaypoints = $data->sucursal;
$key = "AIzaSyDPCfwKXZNrbDh1HKfphKr7yEAKIYUAciA";

$params = array(
    'origin' => $morigin,
    'destination' => $mdestination,
    'waypoints' => $mwaypoints,
    'key' => $key
);

$url = "https://maps.googleapis.com/maps/api/directions/json?" . http_build_query($params);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response);
//var_dump($data);
$json = json_encode($data);
echo $response;
?>