<?php
function sendNotif ($to, $notif){

    $feilds = array('to'=>$to, 'notification'=>$notif);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($feilds));
    
    $headers = array();
    $headers[] = 'Authorization: Key= AAAAUcHAkS0:APA91bH0QQSvv87bZY_X9ho_euM9OgMrupA7JWhW6RmxdmbPO0XlGVey2ZOSzT_YZbCCIMASRSEG6lGuRCEHtezoxnQMWpGXsbNBXu0X7gHoGCepjNlA2cvcvigFrFZsUbN9dPCcZwRp';
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
    'title' => "push by subscription",
    'body' => "esta es una notificacion por subscripcion",
    'image' => "https://smaller-pictures.appspot.com/images/dreamstime_xxl_65780868_small.jpg"
);

sendNotif($to, $notification);
?>