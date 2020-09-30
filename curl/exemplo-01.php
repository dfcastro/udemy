<?php 

$cep = "01310100";
$link= "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //se não colcoar essa opção, ela não vai funcionar, só se o o link não tiver http

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response,true);//true vira array

print_r($data);
 ?>