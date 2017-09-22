<?php
$access_token = 'gubnE7WIUL1RccP5RZbHB3en8EKwUq8v6SxhsvwkzfypBP13ztGghrIdc0YEHOj5xKL75e/FtxNzwryggr1msV//b3Pk1G06ZbZC1FX+vsppw/AhcvOnIJgX5U32e8lGTqnPnesJ4c6/vJsngSSGQgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
