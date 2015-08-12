<?php 
    $Message = '';
    require_once 'dbconnection.php'; 
?>

<html>
    <head>
        <title>Test</title>
        <?php include 'imports.php'; ?>
    </head>

<?php
if (isset ( $_POST ['submit'] )) {
	$Username = $_POST ['username'];
	$Password = password_encrypt($_POST ['password']);

    if (! empty ( $Username ) && ! empty ( $Password )) {
        $query = "SELECT * FROM users WHERE username = '{$Username}' AND password = '{$Password}'";
        $result = sqlsrv_query($conn, $query) or die("Query to check login authentication failed");
        confirm_query($result);


        if (null == (sqlsrv_fetch_array($result))) {
            $Message = "
				<div class='alert alert-danger' role='alert'>
					Username and/or Password incorrect
				</div>";
        }else{
            $_SESSION['username'] = $Username;
            redirect ('home.php');
        }
    }
}
?>


    <body>
        <?php echo $Message; ?>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"">
                <h1>Test app login page</h1>
                <br />
                <br />
                <form method="post" action="index.php">
                    <h2 class="form-signin-heading">Please sign in</h2>
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
                </form>
                <a href="registration.php">Register account</a>

            </div>
        </div>
    </body>
</html>
