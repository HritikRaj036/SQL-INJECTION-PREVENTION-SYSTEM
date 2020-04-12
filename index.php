<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <style type="text/css">
            body
            {
                background-color: lightblue;
            }
            input
            {
                margin: 10px;
            }
        </style>
    </head>
    <body>
    	<center>
    		<h1>Login Here</h1>
            <form method="post" action="">
    	        <input type="text" name="email" placeholder="Enter email" required />
    	        <br/><input type="password" name="password" placeholder="Enter password" required />
    	        <br/><input type="submit" name="submit" value="login"/>
                <br><h3>New User?</h3>
                <a class="btn btn-primary" href="registration.php" role="button">Sign Up</a>
            </form>
        </center>
    </body>
</html>
<?php

$con = new mysqli("localhost","root","","php_security");

if($con->connect_error) {
    echo $con->connect_error;
}

    if (isset($_POST["submit"])) 
    {
        $pre_stmt=$con->prepare("SELECT * FROM user_info WHERE email=? AND password=?");
        $pre_stmt->bind_param("ss",$_POST["email"],$_POST["password"]);
        $pre_stmt->execute();
        $result=$pre_stmt->get_result();

        if($result->num_rows>0)
        {
           $row=$result->fetch_assoc();
           header ("location:profile.php?email=".$row["email"]);
        }
        else
        {
            echo "login failed";
        }
    }
?>