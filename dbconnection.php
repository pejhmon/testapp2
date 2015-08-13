<?php

/**
 * dbconnection contains all of the connection functions required for the application.
 * 
 * @version 1.0
 * @author pejhmon
 */
// REST import
$jsonURL = file_get_contents("nhs-json.azurewebsites.net/rest.json");
$json = json_decode($jsonURL, true);
echo $json['ServerName'];
echo $json['ServerAdmin'];
echo $json['ServerPassword'];
// Server details
$serverName = "appetite";
$dbname = "testdb1";
$serverAdmin = "app";
$serverPassword = "Admin12£";

$serverID = $serverAdmin . "@" . $serverName;
$server = "tcp:" . $serverName . ".database.windows.net,1433";
$connectionOptions = array( "Database"=>$dbname, "UID"=>$serverID, "PWD"=>$serverPassword);
$conn = sqlsrv_connect($server, $connectionOptions);
if($conn == false) {
    echo 'Connection failed. ';
    die(print_r(sqlsrv_errors(), true));
}

session_start();

?>
