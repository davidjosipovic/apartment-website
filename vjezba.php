<?php
/*
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,'https://b2b.elektroprofi.hr/api/eracuni_get.php');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$server_response=curl_exec($ch);
curl_close($ch);
$server_response=file_get_contents('https://b2b.elektroprofi.hr/api/eracuni_get.php');
echo $server_response;
*/

//
// A very simple PHP example that sends a HTTP POST to a remote site
//

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,'https://b2b.elektroprofi.hr/api/eracuni_get.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close($ch);
echo $server_output;

?>