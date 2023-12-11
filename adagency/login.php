<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" type="image/x-icon" href="https://static.vecteezy.com/system/resources/previews/013/810/867/non_2x/singing-bird-silhouette-logo-design-with-canary-music-notes-for-song-vocal-symbol-or-nature-bird-voice-logo-design-illustration-vector.jpg">

  <style>
 body{
        background-color: #d7f7ff;
		background-image:url('agency.jpg');
		background-repeat:no-repeat;
		background-size: 1700px 800px;
		padding-top:30px;
		width: 135%;	
 }
 .input-group{
	width: 550px;
	padding: 0px 0px 0px 6px;
 }
 .input-group1,p,a{
	width: 500px;
	padding: 0px 0px 0px 10px;
 }
	
	
</style>
</head>
<body>
	<div class=form1 style="padding:50px 0px 20px 250px;">
  <div class="header" style="padding:20px 40px 20px 2px;">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group1">
  		<button type="submit" class="btn" name="login_user">Login</button> &nbsp;
          <button type="submit" class="btn" name="login_user"><a href="login.php">Logout</button>

  	</div>
	
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</body>
</html>