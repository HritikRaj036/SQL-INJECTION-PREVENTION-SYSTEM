<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    	<center>
    		<h1>Login Here</h1>
            <form method="post" action="">
    	        <input type="text" name="email" placeholder="Enter email"/>
    	        <br/><input type="password" name="password" placeholder="Enter password"/>
    	        <br/><input type="submit" name="submit" value="login"/>
            </form>
        </center>
    </body>
</html>
<?php

$con = new mysqli("localhost","root","","php_security");

if($con->connect_error) {
    echo $con->connect_error;
}

    if (isset($_POST["submit"])) {
        $email=$_POST["email"];
        $password=$_POST["password"];

        $sql= "SELECT * FROM user_info WHERE email='$email' AND password='$password'";
        $run_query = $con->query($sql);

    if ($run_query) {
            $row=$run_query->fetch_assoc();
            $email=$row["email"];
            header("location:profile.php?email=".$email);
        }    
    }
?>
