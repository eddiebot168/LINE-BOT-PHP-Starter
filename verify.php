<?php
$access_token = 'w1jwgGzYfqozplzfp1ohG4xhQ3i1pn5zAES69UuzPYsez+9PyOrGbh3TAFyDJf1NwBclAmTqPFgf52BHEMlMVcMfTnkqSbtPZY3ACybtfE1ziA8cQsflvJ7zWKvkeDeZp53ByQigSR/Fr1dR+d9y1QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
