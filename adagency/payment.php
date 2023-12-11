<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://static.vecteezy.com/system/resources/previews/013/810/867/non_2x/singing-bird-silhouette-logo-design-with-canary-music-notes-for-song-vocal-symbol-or-nature-bird-voice-logo-design-illustration-vector.jpg">
    <style>
 body{
        background-color: #d7f7ff;
		background-image:url('agency.jpg');
		background-repeat:no-repeat;
		background-size: 1700px 950px;
        padding-top:40px;
		width: 155%;
    }
    .wrapper{
        border: 1px solid #5F9EA0 !important; 
  
    }
  
</style>
</head>

<body>
   
    <div class="wrapper" >
        <h2 style="color:#5F9EA0;">Payment Form</h2>
        <form action="" method="post">
            <!--Account Information Start-->
            <h4 style="color:#5F9EA0;">Account</h4>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Full Name" class="name" required >
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input_box">
                    <input type="text" placeholder="Name on Card" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="email" placeholder="Email Address" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Address" required class="name">
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="City" required class="name">
                    <i class="fa fa-institution icon"></i>
                </div>
            </div>
            <!--Account Information End-->


            <!--DOB & Gender Start-->
            <div class="input_group">
                <div class="input_box">
                    <h4 style="color:#5F9EA0;">Date Of Birth</h4>
                    <input type="text" placeholder="DD" required class="dob">
                    <input type="text" placeholder="MM" required class="dob">
                    <input type="text" placeholder="YYYY" required class="dob">
                </div>
                <div class="input_box">
                    <h4 style="color:#5F9EA0;">Gender</h4>
                    <input type="radio" name="gender" class="radio" id="b1" checked>
                    <label for="b1">Male</label>
                    <input type="radio" name="gender" class="radio" id="b2">
                    <label for="b2">Female</label>
                </div>
            </div>
            <!--DOB & Gender End-->


            <!--Payment Details Start-->
            <div class="input_group">
                <div class="input_box">
                    <h4 style="color:#5F9EA0;">Payment Details</h4>
                    <input type="radio" name="pay" class="radio" id="bc1" checked>
                    <label for="bc1"><span>
                            <i class="fa fa-cc-visa"></i>Credit Card</span></label>
                    <input type="radio" name="pay" class="radio" id="bc2">
                    <label for="bc2"><span>
                            <i class="fa fa-cc-paypal"></i>Paypal</span></label>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="tel" name="" class="name" placeholder="Card Number 1111-2222-3333-4444" required>
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="tel" name="" class="name" placeholder="Card CVC 632" required>
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <div class="input_box">
                        <input type="number" placeholder="Exp Month" required class="name">
                        <i class="fa fa-calendar icon" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="input_box">
                    <input type="number" placeholder="Exp Year" required class="name">
                    <i class="fa fa-calendar-o icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_box">
                <input type="number" placeholder="Enter Amount" required class="name">
                <i class="fa fa-money icon" aria-hidden="true"></i>
            </div>
            <!--Payment Details End-->

            <div class="input_group">
                <div class="input_box">
                    <button type="submit" onclick="myFunction()"><a href="pay.php" >PAY NOW</a></button>
                </div>
            </div>
           
            <script>
            function myFunction() {
  alert("your payment was successfull");
}

</script>


        </form>
    </div>

</body>

</html>
        