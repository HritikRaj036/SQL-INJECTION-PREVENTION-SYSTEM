<?php
    $email    = $_POST['email'];
    $password = $_POST['password'];

    //Database Connection

    $conn = new mysqli('localhost','root','','php_security');

    if($conn -> connect_error)
    {
    	die('Connection Failed : '.$conn -> connect_error);
    }
    
        else
        {
        	$stmt = $conn -> prepare("INSERT into user_info(email,password) values (?,?)");
        	$stmt -> bind_param("ss",$email,$password);
        	$stmt -> execute();
        	echo "Registered Successfully";
        	$stmt -> close();
        	$conn -> close();
    }
?>