<?php

require_once('pinterest-api.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel=  "stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel= "stylesheet" type= "text/css" href="./bootstrap-social.css">

	
    <link rel="stylesheet" type= "text/css" href="./form5.css">
	
    <title>Log-In</title>
  </head>
  <body>
   
	
	<div id="main">
	  <div id="first">
	    <form action="" method="post">
		  <h1 style="color:#2a689c;font-family: Times New Roman;"><center> Hi There... </center></h1>

		  <h4 style="color:#2a689c;font-family: Times New Roman;"><center> Please log-in!!!</center></h4> <hr/>

		  	<label style="color:#102e47;font-family: Times New Roman;"> Username :  </label>
		  	<input name="username" placeholder=  "Enter the username">

		  	<label style="color:#102e47;font-family: Times New Roman;"> Password : </label>
		  	<input name="password" placeholder=" Enter the password"> 
		  
			<input type="submit" value="Log-In" style="color:blue; background-color: #4CAF50;font-family: Times New Roman;">

			<center style="color:#102e47;font-family: Times New Roman;">or please continue with...</center><br/>
			
			<a href="<?= 'https://api.pinterest.com/oauth/?client_id=' . PINTEREST_APPLICATION_ID . '&redirect_uri=' . urlencode(PINTEREST_REDIRECT_URI) . '&response_type=code&scope=read_public' ?>" class="btn btn-block btn-social btn-pinterest">

			<span class="fa fa-pinterest"></span><center style="font-family: Times New Roman;">Sign-In using PINTEREST</center>
			</a>
			
	    </form>
	  </div>
	  
	 
    </div>  

  </body>
</html>