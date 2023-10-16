<?php

$cookie = file_get_contents("https://shz.al/~Tofcukies");

$options = array(
    'http' => array(
        'method' => 'GET',
        'header' => "Referer: https://ntuplay.xyz/\r\n" 
    )
);

$context = stream_context_create($options);


if(isset($_GET['play'])) {
	
	header('Content-Type: application/vnd.apple.mpegurl');
	
$play = $_GET['play'];
$e = $_GET['e'];
$url = "https://ddh2.vipboxtv.stream/ddh2/$play/tracks-v1a1/$e";  
$resp = file_get_contents($url, false, $context);
$resp = str_replace("2023/", "ddh2.php?ts=$play/tracks-v1a1/2023/", $resp);
echo $resp;
}


if(isset($_GET['ts'])) {
	
	header('Content-Type: application/octet-stream');
	
$ts = $_GET['ts'];
$url = "https://ddh2.vipboxtv.stream/ddh2/$ts";
$resp = file_get_contents($url, false, $context);
echo $resp;
}


?>