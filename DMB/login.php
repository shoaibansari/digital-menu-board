<?php
session_start();
include('connection.php');


if(isset($_POST['submit']))
{
   
    $name=$_POST['user'];
    $pwd=$_POST['pass'];

$query=mysqli_query($db, "SELECT * FROM `admin` WHERE user='".$name."'");
	
	while($row = mysqli_fetch_array($query))
	{
		
		if($name==$row['user'] && $pwd==$row['pass'])
		{
			 	$_SESSION['id'] =$row['id'];			
			
			header("location:control.php");
		}
		
	}
	
	
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="CssFiles/AppCss.css">
<link type="text/css" rel="stylesheet" href="CssFiles/login.css">
</head>

<body>
  
  <section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <!--<h1>Admin Login</h1>-->
                    <form role="form" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="name" class="sr-only">Admin</label>
                            <input type="email" name="user" id="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="pass" id="key" class="form-control" placeholder="Password">
                        </div>
                        <!--<div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Show password</span>
                        </div>-->
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    </form>
                    <!--<a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>-->
                    <hr>
        	    </div>
    		</div>  <!--/.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

  




<script type="text/javascript" src="JavaScriptFile/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery.bxSlider.js"></script>
<script type="text/javascript" src="JavaScriptFile/AppJavascript.js"></script>
</body>
</html>