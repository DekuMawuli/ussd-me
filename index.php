<?php

$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

$response = "";

if ($text == ""){
    $resp = "CON Welcome to Seritrex Applio System.\n";
    $res .= "Kindly Select your options: \n";
    $res .= "1. Register With Us \n";
    $res .= "2. Request Payment \n";
    $res .= "3. Go for bailout \n";
    echo $res;
}