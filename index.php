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
        <script>
            function Validation()
            {
                var result = true;
                var pass = document.getElementById("pass");
                var e = document.getElementsByName("email")[0].value;
                var atindex = e.indexOf('@');
                var dotindex = e.lastIndexOf('.');
                if(pass.value.trim()=='' || atindex<1 || dotindex>=e.length-2 || dotindex-atindex<3)
                {
                     result = false;
                }
                return result;
            }   
        </script>
    </head>
    <body>
    	<center>
    		<h1>Login Here</h1>
            <form method="post" action="" onsubmit="return Validation()">
    	        <input type="text" name="email" placeholder="Enter email" required />
    	        <br/><input type="password" id="pass" placeholder="Enter password" required />
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