<?php
require_once 'dbconnection.php'; 
?>
<html>
    <head>
        <title>Home Page</title>
        <?php include 'imports.php';?>
    </head>
    <body>
        <h1>You have logged in successfully, <?php echo $_SESSION ['username'] ?> !</h1>
    </body>
</html>
