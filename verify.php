<?php
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:zH7bCPxiSXy2zy7';

$access_token = 'Dj/fyxcVSFBdnf61vPwFQLZaXOj6YL9XZ68K0AJQeqMOAGkcKK1vPc8K3DsAdKvOVR5RxR91N+lRE/gJY0bFyK4NjQq9NAdYXrzLA0jSWWRk3nlKno0rcEe58yUmvtaZ7bG8PcMz7RUghxztTMXNqwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;