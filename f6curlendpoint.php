<?php
//
// A very simple PHP example that sends a HTTP POST to a remote site
//

$ch = curl_init();
$token = "bQBh-HIAd-BlAH-ALAA";
$fields = array( 'token'=>$token);
$postdata = json_encode($fields);

//echo "\n";
//echo $postdata;

$url = "http://gomosystem-001-site2.etempurl.com/api/[Delivery_Repartidores_Mas_Cercanos_ListaController]/Find";
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
curl_setopt($ch,CURLOPT_POSTFIELDS,$postdata);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
//print "curl response is:" . $response;
print $response;
curl_close ($ch);
?>