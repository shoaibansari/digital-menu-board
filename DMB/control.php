<?php

session_start();

include('connection.php');



/*header("location:login.php");*/



if(!isset($_SESSION["id"]))

{

	header("location:login.php");

}

/////Headings Update Query///

if(isset($_POST['section1']))

{   

   include('connection.php');

    $headingtxt1 = $_POST['heading1'];

	$txtvalue1 = $_POST['txt1'];

	$txtvalue2 = $_POST['txt2'];

	$txtvalue3 = $_POST['txt3'];



	$headingtxt2 = $_POST['heading2'];	

	$txtvalue4 = $_POST['txt4'];

	$txtvalue5 = $_POST['txt5'];

	$txtvalue6 = $_POST['txt6'];



	$headingtxt3 = $_POST['heading3'];

	$txtvalue7 = $_POST['txt7'];

	$txtvalue8 = $_POST['txt8'];

	$txtvalue9 = $_POST['txt9'];

	

    $q1 = "UPDATE tab SET heading='$headingtxt1',txt1='$txtvalue1',txt2='$txtvalue2',txt3='$txtvalue3' WHERE id=1";

    $q2 = "UPDATE tab SET heading='$headingtxt2',txt1='$txtvalue4',txt2='$txtvalue5',txt3='$txtvalue6' WHERE id=2";

    $q3 = "UPDATE tab SET heading='$headingtxt3',txt1='$txtvalue7',txt2='$txtvalue8',txt3='$txtvalue9' WHERE id=3";

	

	$r1 = mysqli_query($db, $q1);

	$r2 = mysqli_query($db, $q2);

	$r3 = mysqli_query($db, $q3);

}

/*

if(isset($_POST['section2']))

{   

    include('connection.php');

    $headingtxt2 = $_POST['heading2'];

	$txtvalue4 = $_POST['txt4'];

	$txtvalue5 = $_POST['txt5'];

	$txtvalue6 = $_POST['txt6'];



    $q = "UPDATE tab SET heading='$headingtxt2',txt1='$txtvalue4',txt2='$txtvalue5',txt3='$txtvalue6' WHERE id=2";

	

	$r = mysqli_query($db, $q);

}



if(isset($_POST['section3']))

{ 

    include('connection.php');  

    $headingtxt3 = $_POST['heading3'];

	$txtvalue7 = $_POST['txt7'];

	$txtvalue8 = $_POST['txt8'];

	$txtvalue9 = $_POST['txt9'];



    $q = "UPDATE tab SET heading='$headingtxt3',txt1='$txtvalue7',txt2='$txtvalue8',txt3='$txtvalue9' WHERE id=3";

	

	$r = mysqli_query($db, $q);

}

/////End Headings Update Query///

*/

/////Timing///

if(isset($_POST['section4']))

{ 

    include('connection.php');  

    
    $prayheading = $_POST['prayheading'];
	
	$time1 = $_POST['time1'];

	$time2 = $_POST['time2'];

	$time3 = $_POST['time3'];
	
	$weather = $_POST['weather'];
 
   $q = "UPDATE pray_tim SET heading='$prayheading',time1='$time1',time2='$time2',time3='$time3',weather_code='$weather' WHERE id=1";

	

	$r = mysqli_query($db, $q);

}

/////Timing///



/////marquee///

if(isset($_POST['section5']))

{ 

    include('connection.php');  

    

	$marquee = $_POST['marquee'];



    $q = "UPDATE animate SET marquee='$marquee' WHERE id=1";

	

	$r = mysqli_query($db, $q);

}

/////marquee///

  

  $sql1=mysqli_query($db,"SELECT * FROM `tab` where id=1");

  $data1=mysqli_fetch_array($sql1);

  

  $sql2=mysqli_query($db,"SELECT * FROM `tab` where id=2");

  $data2=mysqli_fetch_array($sql2);

  

  $sql3=mysqli_query($db,"SELECT * FROM `tab` where id=3");

  $data3=mysqli_fetch_array($sql3);

  

  $sql4=mysqli_query($db,"SELECT * FROM `animate` ");

  $data4=mysqli_fetch_array($sql4);



  

  $sql5=mysqli_query($db,"SELECT * FROM `pray_tim` ");

  $data5=mysqli_fetch_array($sql5);



?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Untitled Document</title>

<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">

<link type="text/css" rel="stylesheet" href="CssFiles/AppCss.css">

</head>

<style>

.Form {

border:1px solid grey;

border-radius:10px;

margin-top:20px;

}



/*form {

padding-bottom:20px;

}*/

.cards

{

	margin-top:3%;

}

.lfetbox

{

	float: right;

}

.float_right

{

	float: right;

    /*margin-right: 161px;*/

}

</style>



<body>

   

   <header>

      

          <nav class="navbar navbar-dark bg-inverse navbar-full" style="background-color:#5D4157">

      <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">

        &#9776;

      </button>

      <div class="container collapse navbar-toggleable-xs" id="exCollapsingNavbar2">

        <a class="navbar-brand" href="#">Logo</a>

        <ul class="nav navbar-nav float_right">

          <li class="nav-item">

            <a class="nav-link active" href="control.php">Admin</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="edit-pwrd.php">Edit</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="logout.php">Logout</a>

          </li>

        </ul>

      </div>

    </nav>

      

   </header>

   

   

   <div class="container">

     <div class="row cards">

   

      <div class="col-md-4">

        <div class="card card-block">

              <form method="post">

        

            <div class="form-group-sm">

        

            <label for="name">1st Heading:</label>

            <input type="text" name="heading1" class="form-control-sm lfetbox" value="<?php echo $data1['heading'] ?>" autocomplete="off" />

             <br>

             <br>

             <label for="name">Text1:</label>

            <input type="text" name="txt1" class="form-control-sm lfetbox" value="<?php echo $data1['txt1'] ?>"  autocomplete="off" />

             <br>

             <br>

            <label for="name">Text2:</label>

            <input type="text" name="txt2" class="form-control-sm lfetbox" value="<?php echo $data1['txt2'] ?>"  autocomplete="off" />

             <br>

             <br>

            <label for="name">Text3:</label>

            <input type="text" name="txt3" class="form-control-sm lfetbox" value="<?php echo $data1['txt3'] ?>"  autocomplete="off" />

             

             

            </div>

        

        </div>

      </div>

  

      <div class="col-md-4">

        <div class="card card-block">

            <div class="form-group-sm">

        

            <label for="name">2nd Heading:</label>

            <input type="text" name="heading2" class="form-control-sm lfetbox" value="<?php echo $data2['heading'] ?>"  autocomplete="off" />

             <br>

             <br>

             <label for="name">Text1:</label>

            <input type="text" name="txt4" class="form-control-sm lfetbox" value="<?php echo $data2['txt1'] ?>"  autocomplete="off" />

             <br>

             <br>

            <label for="name">Text2:</label>

            <input type="text" name="txt5" class="form-control-sm lfetbox" value="<?php echo $data2['txt2'] ?>"  autocomplete="off" />

             <br>

             <br>

            <label for="name">Text3:</label>

            <input type="text" name="txt6" class="form-control-sm lfetbox" value="<?php echo $data2['txt3'] ?>"  autocomplete="off" />

             

             

            </div>

            

        </div>

      </div>

      

      <div class="col-md-4">

        <div class="card card-block">

          <!--<h3 class="card-title">Special title treatment</h3>-->

        

            <div class="form-group-sm">

        

            <label for="name">3rd Heading:</label>

            <input type="text" name="heading3" class="form-control-sm lfetbox" value="<?php echo $data3['heading'] ?>" autocomplete="off" />

             <br>

             <br>

             <label for="name">Text1:</label>

            <input type="text" name="txt7" class="form-control-sm lfetbox" value="<?php echo $data3['txt1'] ?>" autocomplete="off" />

             <br>

             <br>

            <label for="name">Text2:</label>

            <input type="text" name="txt8" class="form-control-sm lfetbox" value="<?php echo $data3['txt2'] ?>" autocomplete="off" />

             <br>

             <br>

            <label for="name">Text3:</label>

            <input type="text" name="txt9" class="form-control-sm lfetbox" value="<?php echo $data3['txt3'] ?>" autocomplete="off" />

             

             

            </div>



            </div>

      </div>

</div><!--row-->

</div><!--container-->

     <section class="container">

     

     <div class="row"><div class="col-md-12 text-xs-center">

 

  <input type="submit" name="section1"  class="btn btn-secondary btn-md " style="background-color:#5D4157;color:#fff;" value="Submit">

  <input type="button" name="cancel" class="btn btn-secondary btn-md " style="background-color:#5D4157;color:#fff;" onClick="myFunction()" value="Cancel">
  
            </form>
<script>
function myFunction() {
    location.reload();
}
</script>

     

     </div></div>

     

     </section>

    <section style="margin-top:2rem">

      <div class="container">

        <div class="row">

        

             <div class="col-md-4">

               <div class="card card-block text-xs-center">

                <h3 class="card-title">Animate Line</h3>

              <form method="post">

        

            <div class="form-group-sm">

        

            <label for="name" class="sr-only">Animate Line:</label>

            <textarea class="form-control" name="marquee" style="height:140px"> <?php echo $data4['marquee'] ?></textarea>

            

            </div>

            <input type="submit" name="section5"  class="btn btn-secondary btn-sm" style="margin-top: 25px; background-color:#5D4157;color:#fff;" value="Submit">

            </form>

              

              </div>

             </div>

             

             

             <div class="col-md-4">

        <div class="card card-block ">

          <h3 class="card-title text-xs-center">Pray Time</h3>

              <form method="post">

        

            <div class="form-group-sm">

              
             <label for="name">Heading:</label>

            <input type="text" name="prayheading" class="form-control-sm lfetbox"  value="<?php echo $data5['heading'] ?>" autocomplete="off" />
              
             <br>

             <br>         
  
            <label for="name">Time1:</label>

            <input type="text" name="time1" class="form-control-sm lfetbox"  value="<?php echo $data5['time1'] ?>" autocomplete="off" />

             <br>

             <br>

            <label for="name">Time2:</label>

            <input type="text" name="time2" class="form-control-sm lfetbox"  value="<?php echo $data5['time2'] ?>" autocomplete="off" />

             <br>

             <br>

            <label for="name">Time3:</label>

            <input type="text" name="time3" class="form-control-sm lfetbox"  value="<?php echo $data5['time3'] ?>" autocomplete="off" >
            
            <hr>
            
            <label for="name">Weather Code:</label>

            <input type="text" name="weather" class="form-control-sm lfetbox"  value="<?php echo $data5['weather_code'] ?>" autocomplete="off" />
            
             
            </div>

            <input type="submit" name="section4"  class="btn btn-secondary btn-sm " style="margin-left: 40%;margin-top: 25px;background-color:#5D4157;color:#fff;" value="Submit">

            </form>

          

        </div>

      </div>

            

            

            

        </div><!--row-->

      </div><!--container-->

    </section>

   

  



   

  



<script type="text/javascript" src="JavaScriptFile/jquery.js"></script>

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="bootstrap/js/jquery.bxSlider.js"></script>

<script type="text/javascript" src="JavaScriptFile/AppJavascript.js"></script>

</body>

</html>