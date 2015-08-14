<?php
require_once 'dbconnection.php'; 
?>

<?php
// REST import
$jsonURL = file_get_contents('http://nhs-json.azurewebsites.net');

//$json = json_decode($jsonURL, true);
//echo $json['Server']['Name'];
//echo $json['Server'][Admin];
//echo $json[Server][Password];
//echo "Complete Dickhead";
echo $jsonURL;
//echo $json;

print_r(explode(' ',$jsonURL));

foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        echo "$key:\n";
    } else {
        echo "$key => $val\n";
    }
}
//echo "Dickhead number 2";
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
