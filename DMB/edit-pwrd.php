<?php
include('connection.php');
session_start();
?>
<?php
// check if user submitted form
 $msg ="";
 $result="";

if(!isset($_SESSION["id"]))
{
	header("location:login.php");
}

if(isset($_POST['section1']))
{
	$email =$_POST['email'];
	$q="UPDATE `admin` SET  `user`='$email' WHERE id=".$_SESSION["id"]."";
			$r=mysqli_query($db, $q);

}
if(isset($_POST['submit']))
{
	if(empty($_POST['pass']))
	{
	}else{
		$p = mysqli_real_escape_string($db, trim($_POST['pass']));
	}
	 if(!empty($_POST['pass1']))
	{
		if($_POST['pass1'] != $_POST['pass2'])
		{
			//$result[] ='<div class="alert alert-danger">your new password does not match the confirmed password!</div>';
		}else{
			$np = mysqli_real_escape_string($db, trim($_POST['pass1']));
		}
	}else{
		//$result[] = '<div class="alert alert-danger">you forgot to enter your new password</div>';
	}
	if(empty($result))
	{
		$q="SELECT id FROM admin WHERE (pass='$p')";
		$r=mysqli_query($db, $q);
		$num = mysqli_num_rows($r);
		$result = '<div class="alert alert-danger">Incorrent your current password!</div>';
		if($num == 1)
		{			
			$row = mysqli_fetch_array($r, MYSQLI_NUM);
			$q="UPDATE admin SET pass='$np' WHERE id=$row[0]";
			$r=mysqli_query($db, $q);
			if(mysqli_affected_rows($db) == 1)
			{
				$result = "<div class='alert alert-success'>Thnak! You have successfully updated!</div>";
			}else{
				$result= "<div class='alert-danger'>your password could not be change due to a system error!</div>";
			}
		}
	}else{
		foreach($result as $msg){
		}
	}
}

  $esel=mysqli_query($db,"SELECT * FROM `admin`");
  $edata=mysqli_fetch_array($esel);

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

    <header>
      
          <nav class="navbar navbar-dark bg-inverse navbar-full" style="background-color:#5D4157">
      <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
        &#9776;
      </button>
      <div class="container collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
        <a class="navbar-brand" href="#">Logo</a>
        <ul class="nav navbar-nav pull-xs-right">
           <li class="nav-item">
            <a class="nav-link" href="control.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="edit-pwrd.php">Edit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
      
   </header>



 <section id="login">
    <div class="container">
    	<div class="row">
    	  <div class="form-wraps"> 
            <div class="col-xs-6">
                <div class="card">
                        <div class="card-block">
               
                    <form role="form" method="post" autocomplete="off">
                     <label for="name">Change Password</label>
                        <div class="form-group">
                            <label for="name" class="sr-only">Current Password</label>
                          <input type="password" name="pass" id="key" class="form-control" placeholder="Current Password" value="<?php if(isset($_POST['pass']))?>">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">New Passwrod</label>
                           <input type="password" name="pass1" id="key" class="form-control" placeholder="New Passwrod" value="<?php if(isset($_POST['pass1']))?>">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Confirm New Passwrod</label>
                    <input type="password" name="pass2" id="key" class="form-control" placeholder="Confirm New Passwrod" value="<?php if(isset($_POST['pass2']))?>">
                        </div>
                        
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-sm btn-block" value="Change Password">
                    </form>
                    <?php echo $result; ?> <!--<a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>-->
               </div></div>
                </div><!-- /.col -->
           
            <div class="col-xs-6">
                 <div class="card">
                        <div class="card-block">
                          <!--<h3 class="card-title">Special title treatment</h3>-->
                              <form method="post">
                        
                            <div class="form-group-sm">
                        
                            <label for="name">Current Email</label>
 <input type="email" name="email" autocomplete="off" id="key" class="form-control" placeholder="Current email" value="<?php echo $edata['user'] ?>">
                             <br>
                            </div>
                           <input type="submit" name="section1"  class="btn  btn-custom btn-sm btn-block" value="Submit">
                           </form>
                        
                        </div>
                    </div><!-- /.card -->
                    
    		</div><!-- /.col -->
            
            </div><!-- /.form-wraps -->
            
            </div><!-- /.row -->
    	</div><!-- /.container --> 
</section>


<script type="text/javascript" src="JavaScriptFile/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery.bxSlider.js"></script>
<script type="text/javascript" src="JavaScriptFile/AppJavascript.js"></script>
</body>
</html>