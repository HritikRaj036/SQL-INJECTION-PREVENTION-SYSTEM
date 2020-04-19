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
	            var em = document.getElementById("email");
	            var e = document.getElementsByName("email")[0].value;
                var atindex = e.indexOf('@');
                var dotindex = e.lastIndexOf('.');
	            if(pass.value.trim()=='')
	            {
	                alert("blank password not allowed");
                    pass.style.border = "solid 3px red";
                    document.getElementById("lb2").style.visibility="visible";
		            result = false;
	            }
	            else if (em.value.trim()=='') 
	            {
                    alert("blank email not allowed");
                    em.style.border = "solid 3px red";
                    document.getElementById("lb1").style.visibility="visible";
                    result = false;
	            }
	            else if( atindex<1 || dotindex>=e.length-2 || dotindex-atindex<3)
	            {
	            	alert("Invalid Email format");
	            	em.style.border = "solid 3px red";
	            	document.getElementById("lb1").style.visibility="visible";
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
		        <input type="text"  id="email" name="email" placeholder="Enter email" required />
		        <label id="lb1" style="color: black; visibility: hidden;">Invalid</label>
		        <br><input type="password" id="pass" name="password" placeholder="Enter password" required />
		        <label id="lb2" style="color: black; visibility: hidden;">Invalid</label>
		        <br><input type="submit" name="Register" value="Register"/>
		        <br><h3>Already registered?</h3>
		        <a class="btn btn-primary" href="index.php" role="button">Sign In</a>
	        </form>
	    </center>
    </body>
</html>