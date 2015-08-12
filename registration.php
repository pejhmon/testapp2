<?php
	$Message = "";
	require_once 'dbconnection.php';
?>

<html>
	<head>
		<title>Registration</title>
        <?php include 'imports.php';?>
        <style>
            body{
                padding-left: 2em;
            }
        </style>
    </head>
    
<?php
if (isset ( $_POST ['submit'] )) {
	$Username = $_POST ['username'];
	$Password = $_POST ['password'];
	$ConfirmPassword = $_POST ['confirmPassword'];

	if($Password!=$ConfirmPassword){
		$Message = "
		  <div class='alert alert-danger' role='alert'>
		      Passwords don't match. Please enter again'
		  </div>";
	}else{
        $sql  = "SELECT * FROM users WHERE username = '{$Username}'";
        $usernameCheck = sqlsrv_query($conn, $sql) or die("Query to check if username exists failed");
        confirm_query($usernameCheck);

        if(!null == (sqlsrv_fetch_array($usernameCheck))){
            $Message = "
		  <div class='alert alert-danger' role='alert'>
		      Username already in use. Please choose another
		  </div>";
        }else{            
            /// Hash and salt the password
            $Password = password_encrypt($Password); 
            
            ///Process the query then redirect if successful
            $query = "INSERT INTO users (username, password) VALUES ('{$Username}','{$Password}')";
            $result = sqlsrv_query($conn, $query) or die ('Error: insert query failed');
            
            $_SESSION ['username'] = $_POST ['username'];
            redirect('home.php');
        }
    }
} else {
	$Username = "";
	$Password = "";
	$ConfirmPassword = "";
}

?>

	<body>
        <?php echo $Message?>

        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"">
        	    <div class="page-header">
	                <h1>Registration</h1>
	            </div>
                <form method="post" action="registration.php">
                    <h2 class="form-signin-heading">Please create an account</h2>
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <label for="confirmPassword" class="sr-only">Password</label>
                    <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm password" required>
                    <br />
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Create Account</button>
                </form>
                <a href="registration.php">Register account</a>

            </div>
        </div>
    </body>
</html>

<?php sqlsrv_close ($conn); ?>