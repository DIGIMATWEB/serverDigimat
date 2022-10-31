<?php
 

    $url = "https://fcm.googleapis.com/fcm/send";
    $token = "du9In9XSTm6Ro1jVM8T3ua:APA91bFVNKt_PpEuSn7V3Ba5fBlPGqyxyclpXgavkI1_C_rWfiDfURnft1XfslihdxRlnsLS6K-8HsQYA_XRT_or6zxGmsu-BPwEL1bBIJYl--nH9cJHj3evEdOHehl64B5LVWmqwkGR";  
    $serverKey = 'AAAAfzBPa_Q:APA91bFs5pfdSaM0jg7cX2mzK7Yc13lqzMFieEtxx9jkpOY2KVi17dRi1YymQU1YdQ1pzhkFirWCqgC57buxG7VzY5OO20zTxwJpuJSzi-KxwbJVdcuzyA-csTE18MxsPICf5pRrFBSV';


$title="ADACO";
$body="Avant d épouser une femme, regarde la tête de sa mère";
$image="https://smaller-pictures.appspot.com/images/dreamstime_xxl_65780868_small.jpg";
 /* envoi de notification via CURL  */

    $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'image' => $image, 'badge' => '1', 'priority' => 'high', 'icon' => 'ic_launcher');
     $data = array('lien' =>'www.digimat-interactive.com');
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