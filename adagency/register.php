<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>sign up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" type="image/x-icon" href="https://static.vecteezy.com/system/resources/previews/013/810/867/non_2x/singing-bird-silhouette-logo-design-with-canary-music-notes-for-song-vocal-symbol-or-nature-bird-voice-logo-design-illustration-vector.jpg">

 <style>
 body{
        background-color: #d7f7ff;
		background-image:url('agency.jpg');
		background-repeat:no-repeat;
		background-size: 1700px 800px;
		padding-top:30px;
		width:130%;	
    }
	.input-group{
	width: 500px;
	padding: 0px 0px 0px 7px;
 }
 .input-group1,p,a{
	width: 500px;
	padding: 0px 0px 0px 10px;
 }
</style>
</head>
<body >
	<div class="form1" style="padding:20px 0px 0px 370px;">
  <div class="header" style="padding:20px 40px 20px 2px;">
  	<h2>Register</h2>
	  </div>  
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>

</body>
</html>