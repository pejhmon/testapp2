<?php

/**
 * dbconnection contains all of the connection functions required for the application.
 *
 * @version 1.0
 * @author pejhmon
 */

$serverName = "tcp:appetite.database.windows.net,1433";
$dbname = 'testdb1';
$dbid = "app@appetite";
$dbpwd = iconv('','UTF-8','Admin12£');

$connectionOptions = array( "Database"=>$dbname, "UID"=>$dbid, "PWD"=>$dbpwd);
$conn = sqlsrv_connect($serverName, $connectionOptions);
if($conn == false) {
    echo 'Connection failed';
    die(print_r(sqlsrv_errors(), true));
}

session_start();

?>
