<?php

$cookie = file_get_contents("https://shz.al/~Tofcukies");

$headers = [
        'Authorization: ',
        'Origin: https://toffeelive.com',
        'Referer: https://toffeelive.com/', 
        'Cookie: x-Cache-Cookie=URLPrefix=aHR0cHM6Ly9ibGRjbXByb2QtY2RuLnRvZmZlZWxpdmUuY29tLw:Expires=1697526224:KeyName=prod_linear:Signature=K-8CKtLnINoahmf8sSqAD6NYNwm43Afw2D8DzZVSyhKSPsUeLrwE8X9H1uDmRAAbUcY8t55YgtjLcVNi44dfCQ',
];


if(isset($_GET['play'])) {
	
	header('Content-Type: application/vnd.apple.mpegurl');
	
$play = $_GET['play'];
$e = $_GET['e'];
$url = "https://ptvsports2.com/chd/$e/?id=$play";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$response = str_replace("ts.php?url=", "chd.php?ts=", $response);
echo $response;
}


if(isset($_GET['ts'])) {
	
	header('Content-Type: application/octet-stream');
	
$ts = $_GET['ts'];
$url = "$ts";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
echo $response;
}


?>
