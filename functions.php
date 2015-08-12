<?php
function confirm_query($sqlCheck) {
    if (!$sqlCheck) {
        die("Database query failed!");
    }
}
function password_encrypt($password){
    $password = sha1('gf35!&'.$password.'cg*l');
    return $password;
    
}
function redirect($destination){
    header("Location: ". $destination);
    exit;
}
?>