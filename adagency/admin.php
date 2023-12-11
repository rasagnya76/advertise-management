<?php 
// Email settings 

/* Form submission handler code */ 
$postData = $uploadedFile = $statusMsg = $valErr = ''; 
$msgClass = 'errordiv'; 
if(isset($_POST['submit'])){ 
    // Get the submitted form data 
    echo("Hi I am in php");
    $postData = $_POST; 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $subject = $_POST['subject']; 
    $message = $_POST['message']; 
 
    // Validate input data 
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){ 
       // $valErr .= 'Please enter your name.<br/>'; 
    
         if( filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
        $valErr .= 'Please enter a valid email.<br/>'; 
        }
     
    // Check whether submitted data is valid 
        else{ 
        $uploadStatus = 1; 
         
        // Upload attachment file 
        if(!empty($_FILES["attachment"]["name"])){ 
             
            // File path config 
            $targetDir = "C:\Users\hp\Pictures"; 
            $fileName = basename($_FILES["attachment"]["name"]); 
            $targetFilePath = $targetDir . $fileName; 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
             
            // Allow certain file formats 
            $allowFileTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
            if(in_array($fileType, $allowFileTypes)){ 
                echo("Hi i am in if");
                // Upload file to the server 
                if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)){ 
                    echo("I am in file upload");
                    $uploadedFile = $targetFilePath; 
                }else{ 
                    $uploadStatus = 0; 
                    $statusMsg = "Sorry, there was an error uploading your file."; 
                } 
            }else{ 
                $uploadStatus = 0; 
                $statusMsg = 'Sorry, only '.implode('/', $allowFileTypes).' files are allowed to upload.'; 
            } 
        } 
         
        if($uploadStatus == 1){ 

            $toEmail = '$email'; // Recipient email 
            $from = 'sravikakotcharla@gmail.com'; // Sender email 
            $fromName = 'sravika kotcharla'; // Sender name
            // Email subject 
            $emailSubject = 'Contact Request Submitted by '.$name; 
             
            // Email message  
            $htmlContent = '<h2>Contact Request Submitted</h2> 
                <p><b>Name:</b> '.$name.'</p> 
                <p><b>Email:</b> '.$email.'</p> 
                <p><b>Subject:</b> '.$subject.'</p> 
                <p><b>Message:</b><br/>'.$message.'</p>'; 
             
            // Header for sender info 
            $headers = "From: $fromName"." <".$from.">"; 
 
            // Add attachment to email 
            if(!empty($uploadedFile) && file_exists($uploadedFile)){ 
                 
                // Boundary  
                $semi_rand = md5(time());  
                $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
                 
                // Headers for attachment  
                $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";  
                 
                // Multipart boundary  
                $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
                "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
                 
                // Preparing attachment 
                if(is_file($uploadedFile)){ 
                    $message .= "--{$mime_boundary}\n"; 
                    $fp =    @fopen($uploadedFile,"rb"); 
                    $data =  @fread($fp,filesize($uploadedFile)); 
                    @fclose($fp); 
                    $data = chunk_split(base64_encode($data)); 
                    $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" .  
                    "Content-Description: ".basename($uploadedFile)."\n" . 
                    "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" .  
                    "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
                } 
                 
                $message .= "--{$mime_boundary}--"; 
                $returnpath = "-f" . $email; 
                 
                // Send email 
                $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath); 
                 
                // Delete attachment file from the server 
                @unlink($uploadedFile); 
            }else{ 
                    // Set content-type header for sending HTML email 
                $headers .= "\r\n". "MIME-Version: 1.0"; 
                $headers .= "\r\n". "Content-type:text/html;charset=UTF-8"; 
                 
                // Send email 
                $mail = mail($toEmail, $emailSubject, $htmlContent, $headers);  
            } 
             
            // If mail sent 
            if($mail){ 
                $statusMsg = 'Thanks! Your contact request has been submitted successfully.'; 
                $msgClass = 'succdiv'; 
                 
                $postData = ''; 
            }else{ 
                $statusMsg = 'Failed! Something went wrong, please try again.'; 
            } 
        } 
    }
}
    else
    { 
       // $valErr = !empty($valErr)?'<br/>'.trim($valErr, '<br/>'):''; 
        $statusMsg = 'Please fill all the mandatory fields.'.$valErr; 
    } 
} 



?>