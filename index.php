<?php

 $temp = file_get_contents('https://api.thingspeak.com/channels/345345/fields/1/last.txt');
$humidity = file_get_contents('https://api.thingspeak.com/channels/345345/fields/2/last.txt');

 echo "temp is = ".$temp."<br>";
 echo "humidity is = ".$humidity;

?>
