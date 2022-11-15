<?php

$luku1 = $_GET["x"];
$luku2 = $_GET["y"];

$summa = $luku1+$luku2;
$erotus = $luku1-$luku2;
$tulo = $luku1*$luku2;

$response = array();
$response["summa"] = $summa;
$response["erotus"] = $erotus;
$response["tulo"] = $tulo;

$responseJson = json_encode($response);
header('Content-type: application/json');
echo $responseJson;
