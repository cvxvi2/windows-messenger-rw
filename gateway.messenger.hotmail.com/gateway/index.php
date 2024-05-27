<?php
session_start();
#Cobs Windows Messenger Rewritten Server Side
$storedSessionID = 0;
$action = "close";
header('X-MSN-Messenger: SessionID=954547325.13160');
header('GW-IP: 86.210.200.9');
header('Content-Type: application/x-msn-messenger');
if($_SERVER["REQUEST_METHOD"] == "POST") { 
    $action = $_GET["Action"];
    $saction = $_GET["Server"];
    $SwitchIP = $_GET["IP"];
    if($action == "poll") {
      
    } else {

    }
    



} else {
    $action = $_GET["Action"];
    $saction = $_GET["Server"];
    $SwitchIP = $_GET["IP"];

    
}   



?>