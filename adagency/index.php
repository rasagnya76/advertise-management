<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>verifying...</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" type="image/x-icon" href="https://static.vecteezy.com/system/resources/previews/013/810/867/non_2x/singing-bird-silhouette-logo-design-with-canary-music-notes-for-song-vocal-symbol-or-nature-bird-voice-logo-design-illustration-vector.jpg">

	<style>
		p{
			text-align:center;
		}
		
 body{
        background-color: #d7f7ff;
		background-image:url('agency.jpg');
		background-repeat:no-repeat;
		background-size: 1700px 800px;
		padding-top:80px;
		width: 135%;
    }

		
		</style>
</head>
<body>
<div class="form1" style="padding:50px 0px 20px 250px;">
<div class="header" style="padding:20px 40px 20px 2px;">
	<h2>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h2>
</div>
	
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<!--<p>W <strong><?php echo $_SESSION['username']; ?></strong></p>-->
		
    	<p>Please <a href="index.php?logout='1'" style="color: red;">login</a> </p>
    <?php endif ?>
</div>
	</div>
</body>
</html>