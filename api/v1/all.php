<?php

$ch = curl_init('http://microservice-two/api/v1/all.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$all_rez = curl_exec($ch);
curl_close($ch);
echo $all_rez;