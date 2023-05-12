<?php
function sendNotif ($to, $notif){

    $feilds = array('to'=>$to, 'notification'=>$notif);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($feilds));
    
    $headers = array();
    $headers[] = 'Authorization: Key= AAAAtI_-dE4:APA91bEneLk2DTJbvZvak9VFTswLSpoy7yoYxIBaji-Y3xjQlYOdi3OMC1Fe67biVKVWqc6Hz0kOV2dVzfISIAYFEeY3w-CbeGsgWshKZTUESH86s5k6hDmojZDTjfmDZWPHCDdwoJiY';
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