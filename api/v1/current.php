<?php

error_reporting(E_ALL & ~E_WARNING);

$get = array(
    'id'  => $_GET["id"]
);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://microservice-two/api/v1/current.php?'.http_build_query($get));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HEADER, false);
$out = curl_exec($curl);
curl_close($curl);
echo $out;