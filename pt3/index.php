<!-- 
	Name: Aiman Harith Bin Abdul Rahim
	Matric Number: A161180
	 

	--> 
<?php
session_start();
 if (!isset($_SESSION['username'])) {
     header('Location: login.php');
     exit();
 } ?>


	<!DOCTYPE html> 
	<html> 
	<head> 
		<meta charset="utf-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Kedai Bola Lala</title> 
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
      html {
        width:100%;
        height:100%;
        background:url(ball.png) center center no-repeat ;
        min-height:100%;
      }
      form{
        text-align: center;
      }

    </style>
	</head> 
    <body bgcolor="#D4AC0D">

    <?php include_once 'nav_bar.php'; ?>
              <h4 style="text-align: center;">Yo, Search your product here</h4>
              <form action="search.php" method="post">
                <input type="text" name="search">
                <input type="submit" name="submit" value="Search">
              </form>
    
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body> 
	</html>