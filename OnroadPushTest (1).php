
<?php
 

    $url = "https://fcm.googleapis.com/fcm/send";
    $token = "cHxFSXQXTPa91Hkf9NI0gb:APA91bFiWmu1Zs7INnjsRYrSSf0lUYoqNbFwmOJDNBWL-Wf64spjDx0aRpEEDA1T8roz5Kg4MOa1emlzjXQL4OYMqHql-LOpgDjyLxCbcGvDoF3KSDUjOQ3TPKT4uRVd0WrowMVhMFWk";  
    $serverKey = 'AAAAUcHAkS0:APA91bH0QQSvv87bZY_X9ho_euM9OgMrupA7JWhW6RmxdmbPO0XlGVey2ZOSzT_YZbCCIMASRSEG6lGuRCEHtezoxnQMWpGXsbNBXu0X7gHoGCepjNlA2cvcvigFrFZsUbN9dPCcZwRp';


$title="Onroad";
$body="Hola bienvenido a onroad esta es la primera notificacion";
$image="https://www.gpsphoenix.com/img/logos/logo-dark.png";
 /* envoi de notification via CURL  */

    $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'image' => $image, 'badge' => '1', 'priority' => 'high', 'icon' => 'ic_launcher');
     $data = array('lien' =>'https://newlandapps.com/');
    $arrayToSend = array('to' => $token, 'notification' => $notification, 'data' => $data,'priority'=>'high');
    $json = json_encode($arrayToSend);
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: key='. $serverKey;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //Send the request
    $response = curl_exec($ch);
    //Close request
    if ($response === FALSE) {
    die('FCM Send Error: ' . curl_error($ch));
    }
    curl_close($ch);




?>