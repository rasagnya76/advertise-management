<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Startpage</title>
<link rel="shortcut icon" type="image/x-icon" href="https://static.vecteezy.com/system/resources/previews/013/810/867/non_2x/singing-bird-silhouette-logo-design-with-canary-music-notes-for-song-vocal-symbol-or-nature-bird-voice-logo-design-illustration-vector.jpg">
<style>
body {
  font-family: "Lato", sans-serif;
  background-color:lightgrey;
 /* background-image:url('https://document-export.canva.com/UNn8g/DAFvR4UNn8g/2/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20230922%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230922T230544Z&X-Amz-Expires=67217&X-Amz-Signature=781f90bdd8f1dcbdf9544011f8a3fbf485aad65bbc1812872754cb8120e7ec88&X-Amz-SignedHeaders=host&response-expires=Sat%2C%2023%20Sep%202023%2017%3A46%3A01%20GMT');
 background-image:url('data:image/jpeg;base64,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');
 */
 background-image:url('birdsong.png');
 background-size:97%;
  height:100%;
padding:0.5%;

}
h2,p{
    text-align: center;
    color:red;
    
}
span{
    color:black;
}


.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:white;
  color:orange;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 30px;
}

.sidenav a {
  padding: 1px 1px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color:black;
  display: block;
  transition: 0.3s;
  line-height: 60px;
  border-bottom: 1px solid #ff1122;
  text-align:center;
}

.sidenav a:hover {
  color: orange;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<!--<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRylnBtz_S1qNtyVaiiRMlkTWMI32MRVInxYkfXJbVUz8VyPmNNGcSkEDXeeTUPO9G3ric&usqp=CAU" width="1300px" height="600px">-->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h1 style="color:white;">Menu</h1>
  <a href="stprac2.php">Home</a>
  <a href="abprac2.php">About</a>
  <a href="conprac2.php">Contact</a>
  <a href="register.php">signup</a>
  <a href="login.php">login</a>
  <a href="serprac.php">services</a>
  <a href="terms&conditions1.php">terms & conditions</a>
  <a href="Privacy policy.php">Privacy policy</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 
