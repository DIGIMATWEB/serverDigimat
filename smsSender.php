<?php
/* watch the video for detailed instructions */
$to = "+527351846787@itelcel.com";
$from = "contact@digimat-interactive.com";
$message = "This is a text message\nNew line...";
$headers = "From: $from\n";
mail($to, '', $message, $headers);
?>