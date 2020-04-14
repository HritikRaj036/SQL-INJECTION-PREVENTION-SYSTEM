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
		    <h1>Register Here</h1>
		    <form method="post" action="connect.php" onsubmit="return Validation()">
		        <input type="text" name="email" placeholder="Enter email" required />
		        <br><input type="password" id="pass" placeholder="Enter password" required />
		        <br><input type="submit" name="Register" value="Register"/>
		        <br><h3>Already registered?</h3>
		        <a class="btn btn-primary" href="index.php" role="button">Sign In</a>
	        </form>
	    </center>
    </body>
</html>