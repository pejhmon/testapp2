<?php
require_once 'dbconnection.php'; 
?>

<?php
// REST import
$jsonURL = file_get_contents("https://nhs-json.azurewebsites.net/rest.json");
$json = json_decode($jsonURL, true);
echo $json['Server']['Name'];
echo $json['Server'][Admin];
echo $json[Server][Password];
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
