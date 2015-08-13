<?php
require_once 'dbconnection.php'; 
?>

<?php
// REST import
$jsonURL = file_get_contents("https://nhs-json.azurewebsites.net/rest.json");
$json = json_decode($jsonURL, true);
echo $json['ServerName'];
echo $json['ServerAdmin'];
echo $json['ServerPassword'];
echo "Complete Dickhead";
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
