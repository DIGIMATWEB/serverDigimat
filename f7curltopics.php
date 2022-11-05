<?php
function sendNotif ($to, $notif){

    $feilds = array('to'=>$to, 'notification'=>$notif);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($feilds));
    
    $headers = array();
    $headers[] = 'Authorization: Key= AAAAfzBPa_Q:APA91bFs5pfdSaM0jg7cX2mzK7Yc13lqzMFieEtxx9jkpOY2KVi17dRi1YymQU1YdQ1pzhkFirWCqgC57buxG7VzY5OO20zTxwJpuJSzi-KxwbJVdcuzyA-csTE18MxsPICf5pRrFBSV';
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    echo $result;
    curl_close($ch);
}

$to = "/topics/all";

$notification = array(
    'title' => "New tournament!!",
    'body' => "A new tournament is ready, Join now or miss out"
);

sendNotif($to, $notification);
?>