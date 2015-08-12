<?php

/**
 * dbconnection contains all of the connection functions required for the application.
 *
 * @version 1.0
 * @author pejhmon
 */

$serverName = "appetite";
$dbname = 'testdb1';
$dbid = "app@".$serverName;
$dbpwd = iconv('','UTF-8','Admin12£');

$server = "tcp:".$serverName.".database.windows.net,1433";
$connectionOptions = array( "Database"=>$dbname, "UID"=>$dbid, "PWD"=>$dbpwd);
$conn = sqlsrv_connect($server, $connectionOptions);
if($conn == false) {
    echo 'Connection failed';
    die(print_r(sqlsrv_errors(), true));
}

session_start();

?>
