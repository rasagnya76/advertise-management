<?php 
  session_start(); 
  include('connect.php');
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
	<h2>Thank you </h2>
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
		<p style="color: #3c763d;">Your requirements saved to database</p><br>
    	<p>Please <a href="confirm.php?logout='1'" style="color: red;">confirm</a> </p>
    <?php endif ?>
</div>
	</div>
</body>
</html>