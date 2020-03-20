<!DOCTYPE html>
<html>
    <head>
	    <title>Registration Page</title>
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
		    <h1>Register Here</h1>
		    <form method="post" action="">
		        <input type="text" name="email" placeholder="Enter email"/>
		        <br><input type="password" name="password" placeholder="Enter password"/>
		        <br><input type="submit" name="Register" value="Register"/>
		        <br><h3>Already registered?</h3>
		        <a class="btn btn-primary" href="index.php" role="button">Sign In</a>
	        </form>
	    </center>
    </body>
</html>