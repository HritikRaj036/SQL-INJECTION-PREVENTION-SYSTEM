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