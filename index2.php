<?php

$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];



if ($text == ""){
    $res = "CON Welcome to Seritrex Applio System.\n";
    $res .= "1. Register With Us \n";
    $res .= "2. Request Payment \n";
    $res .= "3. Go for bailout \n";
    
}

header("Content-type: text/plain");
echo $res;