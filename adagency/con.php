<?php include('connect.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Requirements Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="shortcut icon" type="image/x-icon" href="https://static.vecteezy.com/system/resources/previews/013/810/867/non_2x/singing-bird-silhouette-logo-design-with-canary-music-notes-for-song-vocal-symbol-or-nature-bird-voice-logo-design-illustration-vector.jpg">
  <style>
 
    .button{
      color:#337ab7;
      background-color:#2e6da4;
    }
    
 body{
       
		background-image:url('agency.jpg');
		background-repeat:no-repeat;
		background-size: 1700px 800px;
    padding-left:600px;
    }
    </style>
  </head>
  <body>
    <div class="form" >
  
    <div class="container"  >
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center" style="background: #5F9EA0;">
            <h1 style="background-color: #5F9EA0;">Requirements Form</h1>
          </div>
          <div class="panel-body" style="border: 1px solid #5F9EA0 !important;">
            <form action="connect.php" method="post">
            <div class="form-group">
                <label for="username">username </label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="username"
                />
  </div>
              <div class="form-group">
                <label for="email">Email address </label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="number">Number</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="number"
                />
              </div>
              <div class="form-group">
                <label for="ad type">ad_type</label>
                <div>
                  <label for="video" class="radio-inline"
                    ><input
                      type="radio"
                      name="ad_type"
                      value="v"
                      id="male"
                    />Video</label
                  >
                  <label for="poster" class="radio-inline"
                    ><input
                      type="radio"
                      name="ad_type"
                      value="p"
                      id="female"
                    />poster</label
                  >
                  <label for="banner" class="radio-inline"
                    ><input
                      type="radio"
                      name="ad_type"
                      value="b"
                      id="others"
                    />banner</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="product type">Product_type</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="product_type"
                  placeholder="(eg:jewellery,footwear,etc)"
                />
              </div>
              <div class="form-group">
                <label for="product type">Product_name</label>
                <input
                  type="text"
                  class="form-control"
                  id="password"
                  name="product_name"
                  placeholder="name of the product"
                />
              </div>
             <div class="form-group">
                <label for="time or length">time or length</label>
                <input
                  type="text"
                  class="form-control"
                  id="number"
                  name="time_or_length"
                  placeholder="(time required or (length x breadth)"
                />
              </div>
              <div class="form-group">
                <label for="End_date">End Date</label>
                <input
                  type="text"
                  class="form-control"
                  id="number"
                  name="End_date"
                  placeholder="eg:date/month/year"
                />
              </div>
             <!-- <input type="submit" class="btn btn-primary" />-->
              <button type="submit" class="btn" name="login_user" style="background-color: #5F9EA0;">submit</button>
            </form>
          </div>
          
        </div>
      </div>
    </div>
  <!--  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div> 
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>-->
</div>
  </body>
</html>
