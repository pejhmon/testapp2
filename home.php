<?php
require_once 'dbconnection.php'; 
?>

<?php
// REST import
$RESTstring = file_get_contents('http://nhs-json.azurewebsites.net');

//$json = json_decode($jsonURL, true);
//echo $json['Server']['Name'];
//echo $json['Server'][Admin];
//echo $json[Server][Password];
//echo "Complete Dickhead";
//echo $jsonURL;
//echo $json;

$RESTarray = explode(':::',$RESTstring);
//echo $RESTarray[0];
//echo '<br/>';
echo $RESTarray[1];
echo '<br/>';
//echo $RESTarray[2];
//echo '<br/>';
echo $RESTarray[3];
echo '<br/>';
//echo $RESTarray[4];
//echo '<br/>';
echo $RESTarray[5];

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
