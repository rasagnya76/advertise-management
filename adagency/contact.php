<?php
require_once 'admin.php';
?>


<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>emailing</title>
        <meta charset="utf-8">
        
    </head>
    <body>
        <div class="container">
            <h1>CONTACT FORM</h1>
            <div class="form-wrapper">
                <form method="POST" action="" enctype="multipart/form-data" class="animate-form">
                    <h4 class="headt">contact us</h4>

                    <?php if(!empty($statusMsg)){ ?>
                    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
                    <?php } ?>

                    <div class="form-group">
                        <input type="text" name="name" class="form-control" value="<?php echo !empty($postData['name'])?$postData['name']:'';?>" placeholder="Name" required="">
                        <input type="email" name="email" class="form-control" value="<?php echo !empty($postData['email'])?$postData['email']:'';?>" placeholder="email address" required="">
                        <input type="text" name="subject" class="form-control" value="<?php echo !empty($postData['subject'])?$postData['subject']:'';?>" placeholder="subject" required="">
                        <textarea name="message" class="form-control" value="" placeholder="write your message here" required=""><?php echo !empty($postData['message'])?$postData['message']:'';?></textarea>
                        <input type="file" name="attachment" class="form-control">
                        <div class="submit">
                        <input type="submit" name="submit" class="btn" value="SUBMIT">
                    </div>
                    
                </form>
          
            </div>
        </div>
        </div>
    </body>
</html>